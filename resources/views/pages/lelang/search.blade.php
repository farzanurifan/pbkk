      <div class="container" >
        <form action="{{route('searchItem')}}" method="POST" >
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12" >
              <input style="text-align: center; height: 50px; font-size: 20px" name="searchbar" type="text" class="form-control" id="searchbar" placeholder="Masukkan nama barang yang anda cari" data-rule="minlen:1" data-msg="Please enter the address" list="wilayah" />
            </div>
          </div>
          
          <div>
            <input type="submit" id="searchbar-btn" class="btn-get-started scrollto" value="Cari">
          </div>
        </form>
      </div>