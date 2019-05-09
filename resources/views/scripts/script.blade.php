<script type="text/javascript">
	$(document).ready(function(){
		var csrf_ = $('meta[name="csrf-token"]').attr('content');
	   	var print = console.log;

	   	$('.barang_hapus').click(function(){
	   		id = $(this).attr('dataID');
	   		$.post('barangHapus',{_token:csrf_,id:id},function(response){
	   			print(id);
	   		}).done(function(response){
	   			$('#barang'+id).remove();
	   			alert(response.message);
	   		}).fail(function(response){
	   			print(response);
	   		})
	   	});

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