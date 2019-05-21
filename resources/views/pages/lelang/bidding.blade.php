<div id="lelangBarangModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">						
				<h4 class="modal-title">Tawar Barang</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">					
				<div class="form-group">
					<label>Nama Barang</label>
					<input id="input-bid-barang-nama" class="form-control" disabled>
				</div>
				<div class="form-group">
					<label>Harga Barang Terakhir</label>
					<input id="input-bid-barang-harga" class="form-control" disabled>
				</div>
				<div class="form-group">
					<label>Penawaran harga minimal</label>
					<input id="input-bid-barang-minbid" class="form-control" disabled>
				</div>
				<div class="form-group">
					<label>Harga Penawaran</label>
					<input id="input-bid-barang-harga-baru" type="number" class="form-control" required placeholder="masukkan harga yang ditawarkan">
					<h6 style="color: red;" id="alertBid"></h6>
					<h4 class="text-success text-bid-response-barang"></h4>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default button-bid-cancel" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info button-bid-barang" value="Tawar" disabled>
				</div>
			</div>
		</div>
	</div>
</div>