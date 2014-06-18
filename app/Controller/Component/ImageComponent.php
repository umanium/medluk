<?php
class ImageComponent extends Component{
   function resize_img($imgname, $ext){
        switch ($ext) {
            ////jpg
            case 1:
                $img_src = imagecreatefromjpeg ($imgname);
                break;
            //gif
            case 2:
                $img_src = imagecreatefromgif($imgname);
                break;
            //png
            case 3:
                $img_src = imagecreatefrompng($imgname);
                break;
            //bitmap
            case 4:
                $img_src = imagecreatefromwbmp($imgname);
                break;
            default:
                break;
        }
        $true_width = imagesx($img_src);
        $true_height = imagesy($img_src);
		$width = 120;
        $height = 80;
        $img_des = ImageCreateTrueColor($width, $height);
        /*
		if($true_width > $true_height){
            $width=$size;
            $height = ($width/$true_width)*$true_height;
            $img_des = ImageCreateTrueColor($width,$height);
        }else if($true_width < $true_height){
            $height =$size;
            $width = ($height/$true_height)*$true_width;
            $img_des = ImageCreateTrueColor($width,$height);
        }else{
            $width=$size;
            $height = ($width/$true_width)*$true_height;
            $img_des = ImageCreateTrueColor($width,$height);
        }
		*/
        imagecopyresampled ($img_des, $img_src, 0, 0, 0, 0, $width, $height, $true_width, $true_height);
        return $img_des;
    }

    function getFileExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }

    function get_file_type($image_name){
        $filetype = $this->getFileExtension($image_name);
        $filetype = strtolower($filetype);
        return $filetype;
    }

    function get_unique_name($filetype){
        $stamp = strtotime ("now");
        $unique_name = $stamp;
        $unique_name = str_replace(".", "", $unique_name);
        $unique_name = $unique_name;
        settype($unique_name,"string");
        $unique_name.= ".";
        $unique_name.=$filetype;
        return $unique_name;
    }

    function copy_file($file_name, $filetype, $upload_dir, $tmp_name){
        $full_path = WWW_ROOT.$upload_dir. DS ."$file_name";
		
        if (is_uploaded_file($tmp_name)){
            if (!copy($tmp_name, "$full_path")){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
        
    }
	
	function copy_grayscale($file_name, $filetype, $upload_dir, $tmp_name){
        $full_path = WWW_ROOT.$upload_dir. DS ."$file_name";
		
        if (is_uploaded_file($tmp_name)){
            if (!copy($tmp_name, "$full_path")){
                return false;
            }else{
            	
            	switch ($filetype) {
            		case 'jpeg':
		            case 'jpg':
		                $img = imagecreatefromjpeg ($full_path);
		                break;
		            case 'gif':
		                $img = imagecreatefromgif($full_path);
		                break;
		            case 'png':
		                $img = imagecreatefrompng($full_path);
		                break;
		            case 'bmp':
		                $img = imagecreatefromwbmp($full_path);
		                break;
		             default:
		                 break;
		        }
				
            	if($img && imagefilter($img, IMG_FILTER_GRAYSCALE)){
					switch ($filetype){
			            case 'jpeg':
			            case 'jpg':
			                imagejpeg($img, $full_path, 100);
			                break;
			            case 'gif':
			                imagegif($img, $full_path);
			                break;
			            case 'png':
			                imagepng($img, $full_path,9);
			                break;
			            case 'bmp':
			                image2wbmp($img, $full_path, 255);
			                break;
			             default:
			                 break;
			        }
					
					return true;
					
            	} else {
            		return false;
            	}
				
            }
        }else{
            return false;
        }
        
    }
    
    function copy_thumbnail($file_name, $filetype, $upload_dir, $tmp_name){
        $full_path = WWW_ROOT.$upload_dir. DS ."$file_name";
		
        switch ($filetype){
            case 'jpeg':
            case 'jpg':
                $image_resized = $this->resize_img($tmp_name, 1);
                break;
            case 'gif':
                $image_resized = $this->resize_img($tmp_name, 2);
                break;
            case 'png':
                $image_resized = $this->resize_img($tmp_name, 3);
                break;
            case 'bmp':
                $image_resized = $this->resize_img($tmp_name, 4);
                break;
             default:
                 break;
        }
        
        switch ($filetype){
            case 'jpeg':
            case 'jpg':
                imagejpeg($image_resized, $full_path, 100);
                break;
            case 'gif':
                imagegif($image_resized, $full_path);
                break;
            case 'png':
                imagepng($image_resized, $full_path,9);
                break;
            case 'bmp':
                image2wbmp($image_resized, $full_path, 255);
                break;
             default:
                 break;
        }
        
        if (is_uploaded_file($tmp_name)){
            if (!copy($tmp_name, "$full_path")){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
        
    }

    function remove_file($file_name, $dir){
        if(unlink(WWW_ROOT.$dir.DS.$file_name)) {
            return true;
        }  else {
            return false;
        }
    }
    
}
?>