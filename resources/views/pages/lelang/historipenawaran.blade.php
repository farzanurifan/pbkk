@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#FFFFFF">
    
    <div class="container">
      <div class="section-header">
        <h2 style="text-align: center;">Histori Penawaran<b></b></h2>
      </div>
    </div>
    <br>
    <div class="container-fluid">
      <div class="row no-gutters">
        
        <table width="100%" class="table-bordered">
          <thead>
            <tr>
              <th width="10%"></th>
              <th style="text-align: center" width="30%">Nama Barang</th>
              <th style="text-align: center" width="15%">Harga Terakhir</th>
              <th style="text-align: center" width="30%">Pemenang</th>
              <td></td>
              
            </tr>
          </thead>
          <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center">
                <a style="text-align: center" class="btn btn-info barang_edit" href="#editBarangModal" data-toggle="modal">Beli</a>
                
            </td>
         
          </tbody>
        </table>

      </div>

    </div>
    @include('pages.barang.edit')
    @include('pages.barang.delete')
    </section>
    <br>
    <br>
    <br>

    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection
