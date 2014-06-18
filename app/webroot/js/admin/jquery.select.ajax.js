$("#CategorySubKategori").click(CategorySubKategori);
$("#CategorySubKategori").change(CategorySubKategori);

function CategorySubKategori(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/category_subs/get_category_subs/",
		data:"category_id="+$("#CategorySubKategori").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#CategorySubSubKategori").html('');
			$("#uniform-CategorySubSubKategori").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#CategorySubSubKategori").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	});
}

$("#CategorySubSubKategori").click(CategorySubSubKategori);
$("#CategorySubSubKategori").change(CategorySubSubKategori);

function CategorySubSubKategori(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/category_subs/get_products/",
		data:"category_sub_id="+$("#CategorySubSubKategori").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#CategorySubProduk").html('');
			$("#uniform-CategorySubProduk").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#CategorySubProduk").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	});
}

$("#BrandSubCatalogueBrandId").click(BrandSubCatalogueBrandId);
$("#BrandSubCatalogueBrandId").change(BrandSubCatalogueBrandId);

function BrandSubCatalogueBrandId(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/brand_sub_catalogues/get_brand_catalogue/",
		data:"brand_id="+$("#BrandSubCatalogueBrandId").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#BrandSubCatalogueBrandCatalogueId").html('');
			$("#uniform-BrandSubCatalogueBrandCatalogueId").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#BrandSubCatalogueBrandCatalogueId").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	});
}


$("#ProductBrandId").click(ProductBrandId);	
$("#ProductBrandId").change(ProductBrandId);	

function ProductBrandId(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_brand_catalogue/",
		data:"brand_id="+$("#ProductBrandId").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductBrandCatalogueId").html('');
			$("#uniform-ProductBrandCatalogueId").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductBrandCatalogueId").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	});
}

$("#ProductBrandCatalogueId").click(ProductBrandCatalogueId);
$("#ProductBrandCatalogueId").change(ProductBrandCatalogueId);

function ProductBrandCatalogueId(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_brand_sub_catalogue/",
		data:"brandCatalogue_id="+$("#ProductBrandCatalogueId").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductBrandSubCatalogueId").html('');
			$("#uniform-ProductBrandSubCatalogueId").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductBrandSubCatalogueId").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	}); 
}

$("#ProductCategoryId").click(ProductCategoryId);
$("#ProductCategoryId").change(ProductCategoryId);	

function ProductCategoryId(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_category_sub/",
		data:"categorySub_id="+$("#ProductCategoryId").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductCategorySubId").html('');
			$("#uniform-ProductCategorySubId").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductCategorySubId").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	}); 
}

$("#ProductKategoriTerkait1").click(ProductKategoriTerkait1);
$("#ProductKategoriTerkait1").change(ProductKategoriTerkait1);	

function ProductKategoriTerkait1(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_category_sub/",
		data:"categorySub_id="+$("#ProductKategoriTerkait1").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductSubKategoriTerkait1").html('');
			$("#uniform-ProductSubKategoriTerkait1").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductSubKategoriTerkait1").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	}); 
}

$("#ProductSubKategoriTerkait1").click(ProductSubKategoriTerkait1);
$("#ProductSubKategoriTerkait1").change(ProductSubKategoriTerkait1);	

function ProductSubKategoriTerkait1(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_products/",
		data:"categorySub_id="+$("#ProductSubKategoriTerkait1").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductProductTerkait1").html('');
			$("#uniform-ProductProductTerkait1").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductProductTerkait1").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	}); 
}

$("#ProductKategoriTerkait2").click(ProductKategoriTerkait2);
$("#ProductKategoriTerkait2").change(ProductKategoriTerkait2);	

function ProductKategoriTerkait2(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_category_sub/",
		data:"categorySub_id="+$("#ProductKategoriTerkait2").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductSubKategoriTerkait2").html('');
			$("#uniform-ProductSubKategoriTerkait2").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductSubKategoriTerkait2").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	}); 
}

$("#ProductSubKategoriTerkait2").click(ProductSubKategoriTerkait2);
$("#ProductSubKategoriTerkait2").change(ProductSubKategoriTerkait2);	

function ProductSubKategoriTerkait2(){
	var baseUrl = $("#baseUrl").val();
	$.ajax({
		type: "POST",
		url: baseUrl + "/products/get_products/",
		data:"categorySub_id="+$("#ProductSubKategoriTerkait2").val(),
		dataType:'json',
		success: function(msg){
			//console.log(msg.data);
			//console.log('length = '+msg.length);
			$("#ProductProductTerkait2").html('');
			$("#uniform-ProductProductTerkait2").children("span").html(msg.data[0].name);
			for(var i = 0 ; i < msg.data.length; i++){
				//console.log(msg.data[i].id);
				//console.log(msg.data[i].name);
				$("#ProductProductTerkait2").append("<option value='"+msg.data[i].id+"'>"+msg.data[i].name+"</option>");
			}	
		}
	}); 
}