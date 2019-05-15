<script type="text/javascript">
	function formatRupiah(angka, prefix){
		var	number_string = angka.toString(),
			sisa 	= number_string.length % 3,
			rupiah 	= number_string.substr(0, sisa),
			ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
				
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		return prefix+rupiah+",00";
	}

	$(document).ready(function(){
		var csrf_ = $('meta[name="csrf-token"]').attr('content');
	   	var print = console.log;
	   	var id_hapus;
	   	var id_edit;
	   	var id_lelang;
	   	var id_bidder;
	   	var minbidnya;


	   	$('#input-bid-barang-harga-baru').keyup(function(){
	   		print(parseFloat( price_now ) + parseFloat( price_min ));
	   		if ( parseFloat( $('#input-bid-barang-harga-baru').val() ) < parseFloat( price_now ) + parseFloat( price_min )) {
	   			print("masuk if");
	   			$('#alertBid').text('Harga masih di bawah harga yang diperbolehkan.');
	   		} 
	   		else {
	   			$('#alertBid').text('Harga ini bisa digunakan.');
	   			$('.button-bid-barang').prop('disabled',false);
	   		}
	   	});

	   	//Tawar Barang
	   	$('#button-tawar-barang').click(function(){
	   		id_lelang = $('#button-tawar-barang').attr('dataID');
	   		id_bidder = $('#button-tawar-barang').attr('dataIDP');
	   		print(id_lelang);
	   		minbidnya = $('#button-tawar-barang').attr('minbid');
	   		print("Akan ke post");
	   		$.get('baranglelang/'+id_lelang,function(response){
	   			print(response);
	   			price_now = response.lelang.harga;
	   			price_min = response.lelang.min_bid;
	   			$('#input-bid-barang-nama').val(response.barang.nama_barang);
	   			$('#input-bid-barang-harga').val(formatRupiah(response.lelang.harga,'Rp. '));
	   			$('#input-bid-barang-minbid').val(formatRupiah(response.lelang.min_bid,'Rp. ')+" lebih banyak dari harga saat ini");
	   		});
	   		print("Setelah post");
	   	});

	   	$('.button-bid-barang').click(function(){
	   		$.post('updateBid',{_token:csrf_,harga_new:$('#input-bid-barang-harga-baru').val(),id:id_lelang,penawar_id:id_bidder,min_bid:minbidnya,harga_now:$('#input-bid-barang-harga').val()},function(response){

	   		}).done(function(response){
	   			if (response.message == 'Data penawaran anda telah dimasukkan. Anda penawar tertinggi saat ini.') {
	   				$('#bid_harga_sekarang').html(formatRupiah($('#input-bid-barang-harga-baru').val(),'Rp. '));
	   				$('#button-tawar-barang').hide();
	   				$('.rightside-panel').append('<label>Anda penawar tertinggi</label>')
	   				$('.button-bid-cancel').val("Tutup");
	   				$('.button-bid-barang').hide();
	   				$('.text-bid-response-barang').text(response.message);
	   				$('#input-bid-barang-harga').val( formatRupiah($('#input-bid-barang-harga-baru').val(),'Rp. ') );
	   			} 
	   			else {
	   				$('.text-bid-response-barang').text(response.message);
	   			}
	   		}).fail(function(response){
	   			print(response);
	   		});
	   	});
	   	//Tawar Barang

	   	//Edit barang
	   	$('.barang_edit').click(function(){
	   		id_edit = $(this).attr('dataID');
	   		$('.text-edit-response-barang').hide();
	   		$.get('baranglelang/'+id_edit,function(response){
	   			$('#input-edit-barang-nama').val(response.barang.nama_barang);
	   			$('#input-edit-barang-harga').val(response.barang.harga_awal);
	   			$('#input-edit-barang-durasi').val(response.lelang.durasi);
	   			$('#input-edit-barang-minbid').val(response.lelang.min_bid);
	   			$('#input-edit-barang-keterangan').val(response.lelang.keterangan_barang);
	   		});
	   	})

	   	$('.button-edit-barang').click(function(){
	   		$.post('baranglelangs',{_token:csrf_,id_barang:id_edit,nama_barang:$('#input-edit-barang-nama').val(),harga_awal:$('#input-edit-barang-harga').val(),durasi:$('#input-edit-barang-durasi').val(),min_bid:$('#input-edit-barang-minbid').val()},function(response){
	   			print(response);
	   		}).done(function(response){
	   			$('.text-edit-response-barang').text(response.message);
	   			$('.text-edit-response-barang').show();
	   			$('#brgnama'+id_edit).html(response.barang.nama_barang);
	   			$('#brgharga'+id_edit).html(formatRupiah(response.barang.harga_awal,'Rp. '));
	   			$('#brgdurasi'+id_edit).html(response.lelang.durasi);
	   		}).fail(function(response){
	   			print(response);
	   		})
	   	});
	   	//Edit barang

	   	$('.toggle_lelang').change(function(){
	   		if ($(this).prop('checked')==true) {
	   			$.post('changeStatus',{_token:csrf_,id:$(this).attr('dataID'),status:'ON GOING'},function(response){

	   			}).done(function(response){
	   				alert(response.message);
	   			}).fail(function(response){
	   				print(response);
	   			});
	   		} 
	   		else if ($(this).prop('checked')==false) {
	   			$.post('changeStatus',{_token:csrf_,id:$(this).attr('dataID'),status:'INACTIVE'},function(response){

	   			}).done(function(response){
	   				alert(response.message);
	   			}).fail(function(response){
	   				print(response);
	   			});
	   		}
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