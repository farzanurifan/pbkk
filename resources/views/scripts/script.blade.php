<script type="text/javascript">
	$(document).ready(function(){
		var csrf_ = $('meta[name="csrf-token"]').attr('content');
	   	var print = console.log;
	   	var id_hapus;
	   	var id_edit;

	   	//Edit barang
	   	$('.barang_edit').click(function(){
	   		id_edit = $(this).attr('dataID');
	   		$.get('baranglelang/'+id_edit,function(response){
	   			$('#input-edit-barang-nama').val(response.barang.nama_barang);
	   			$('#input-edit-barang-harga').val(response.barang.harga_awal);
	   			$('#input-edit-barang-durasi').val(response.lelang.durasi);
	   		});
	   	})

	   	$('.button-edit-barang').click(function(){
	   		$.post('baranglelangs',{_token:csrf_,id_barang:id_edit},function(response){
	   			print(response);
	   		}).done()
	   	});
	   	//Edit barang

	   	$('.toggle_lelang').change(function(){
	   		print($(this).prop('checked'));
	   		print($(this).attr('dataID'));
	   	})

	   	//Hapus barang
	   	$('.barang_hapus').click(function(){
	   		id_hapus = $(this).attr('dataID');
	   		$('.text-del-response-barang').hide();
	   		print(id_hapus);
	   		
	   	});

	   	$('.button-del-barang').click(function(){
	   		$.post('barangHapus',{_token:csrf_,id:id_hapus},function(response){
	   			print(id_hapus);
	   		}).done(function(response){
	   			$('#barang'+id_hapus).remove();
	   			$('.text-del-response-barang').text(response.message);
	   			$('.text-del-response-barang').show();
	   		}).fail(function(response){
	   			print(response);
	   		})
	   	});
	   	//Hapus barang

	   	$('#profile_edit').click(function(){
			$('#profile_name').prop('disabled', false);
			$('#profile_alamat').prop('disabled', false);
			$('#profile_telepon').prop('disabled', false);
			$('#profile_submit').show();
			$('#profile_cancel').show();
			$('#profile_edit').hide();
			$('#profile_response_msg').hide();

		});

	   	$('#profile_submit').click(function(){
	   		print($('#profile_name').val());
	   		print($('#profile_id').val());
	   		$.post('editprofile',{_token:csrf_,id:$('#profile_id').val(),name:$('#profile_name').val(),alamat:$('#profile_alamat').val(),telepon:$('#profile_telepon').val()},function(response){
	   			print(response);
	   		}).done(function(response){
	   			$('#profile_response_msg').text(response.response);
	   			$('#profile_response_msg').show();
	   			$('#profile_name').val(response.data.name).prop('disabled', true);
				$('#profile_alamat').val(response.data.alamat).prop('disabled', true);
				$('#profile_telepon').val(response.data.telepon).prop('disabled', true);
				$('#profile_submit').hide();
				$('#profile_cancel').hide();
				$('#profile_edit').show();
	   		}).fail(function(response){
	   			print(response);
	   		});
	   	});
	});
</script>