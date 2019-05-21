	<div id="editBarangModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Barang</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nama Barang</label>
						<input id="input-edit-barang-nama" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Harga Barang</label>
						<input id="input-edit-barang-harga" type="number" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Minimal Bid Raise</label>
						<input id="input-edit-barang-minbid" type="number" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Durasi</label>
						<input id="input-edit-barang-durasi" type="number" class="form-control" required>
					</div>
					<div class="form-group">
                        <label for="comment">Keterangan Barang</label>
                        <textarea class="form-control" rows="5"  id="input-edit-barang-keterangan"></textarea>
                     </div>
					<h4 class="text-success text-edit-response-barang"></h4>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default button-edit-barang-cancel" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info button-edit-barang" value="Save">
				</div>
			</div>
		</div>
	</div>