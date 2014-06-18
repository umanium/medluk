$("#tambahProdukButton").click(tambahProdukButton);

function tambahProdukButton(){
	var cat = document.getElementById('CategorySubProduk');
	if(cat.value != ''){
		$("#barisProdukTerkait").append(
			'<tr class="gradeA" id="row'+$('#no_urut').val()+'">'+
				'<td class="align_left center">'+$('#no_urut').val()+'</td>'+
				'<td class="align_left center"><input type="hidden" name="data[CategorySub][product][]" value="'+cat.value+'">'+cat.options[cat.selectedIndex].text+'</td>'+
				'<td class="align_left tools center sorting">'+
					'<div class="button">'+
						'<span>'+
							'Hapus'+
								'<button type="button" onclick="deleteProdukTerkait(\'row'+$('#no_urut').val()+'\')" style="opacity: 0; ">'+
									'Hapus'+
								'</button>'+
						'</span>'+
					'</div>'+
				'</td>'+
			'</tr>');
		$('#no_urut').attr('value', parseInt($('#no_urut').val())+1);
	}
}

function deleteProdukTerkait(id){
	var box = document.getElementById('barisProdukTerkait');
	box.removeChild(document.getElementById(id));
}
