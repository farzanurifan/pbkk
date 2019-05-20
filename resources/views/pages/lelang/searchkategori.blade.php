      <div class="container">
            <div class="section-header">
            <h2 style="text-align: center;">Kategori
                <select style="font-size: 26px; width: 250px; text-align: center;" id="id-kat-brg">
                  <option selected disabled>Pilih Kategori</option>
                  <option value="all">Semua Kategori</option>
                  @foreach($tipebarangs as $tipebarang)
                  <option value="{{$tipebarang->id}}">{{$tipebarang->tipe_barang}}</option>
                  @endforeach
                </select>
                </h2>
            </div>
        </div>