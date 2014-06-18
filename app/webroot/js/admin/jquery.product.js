$(document).ready(function(){
	$('#uniform-ProductSubPict2').hide();
	$('#uniform-ProductSubPict3').hide();
	$('#uniform-ProductSubPict4').hide();
	
	$('#uniform-ProductSubPict2Baru').hide();
	$('#uniform-ProductSubPict3Baru').hide();
	$('#uniform-ProductSubPict4Baru').hide();
	$('.input'+'.button').attr('class', 'input');
	
	var baseUrl = $("#baseUrl").val();
	$('.close_image').attr('src', baseUrl+'/css/admin/jquery/facebox/closelabel.png');
	$('.box_radio .radio').attr('style', 'bottom: 22px;');
	$('.box_radio .checker').attr('style', 'bottom: 22px;');
	$('.box_radio_tutor .radio').attr('style', 'bottom: 22px;');
});

$('#ProductSubPict1').change(function(){
	$('#uniform-ProductSubPict2').show();
});

$('#ProductSubPict2').change(function(){
	$('#uniform-ProductSubPict3').show();
});

$('#ProductSubPict3').change(function(){
	$('#uniform-ProductSubPict4').show();
});

$('#ProductSubPict1Baru').change(function(){
	$('#uniform-ProductSubPict2Baru').show();
});

$('#ProductSubPict2Baru').change(function(){
	$('#uniform-ProductSubPict3Baru').show();
});

$('#ProductSubPict3Baru').change(function(){
	$('#uniform-ProductSubPict4Baru').show();
});

$('#SellingUnitNewPrice').change(harga_baru);
$('#SellingUnitNewPrice').click(harga_baru);
$('#SellingUnitNewPrice').keyup(harga_baru);

function harga_baru(){
	var harga_lama = parseInt($('#SellingUnitOldPrice').val());
	var harga_baru = parseInt($('#SellingUnitNewPrice').val());
	
	var discount = ((harga_lama - harga_baru)/harga_lama)*100;
	 
	$('#SellingUnitDiscount').attr('value', discount);
}

$('#SellingUnitDiscount').change(discount);
$('#SellingUnitDiscount').click(discount);
$('#SellingUnitDiscount').keyup(harga_baru);

function discount(){
	var harga_lama = parseInt($('#SellingUnitOldPrice').val());
	var discount = parseFloat($('#SellingUnitDiscount').val());
	
	var harga_baru = ( harga_lama - ( (harga_lama*discount) /100) );
	 
	$('#SellingUnitNewPrice').attr('value', harga_baru);
}
