@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
        <div class="container">
          <div class="row">
            <h2>Tambahkan barang untuk dilelang</h2>
          </div>
            <form action="#">
                <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-sm">
                                <label for="firstname" class="control-label">Firstname1</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="lastname" class="control-label">Last Name2</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="lastname" class="control-label">Last Name3</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                            </div>
                        </div>
                </div>
                <div class="row">
                      <div class="col-xs-3">
                          <textarea class="form-control"></textarea>
                      </div>
                </div>
                <div class="row">
                      <div class="col-xs-3">
                          <input type="submit" class="btn btn-default" value="Submit">
                      </div>
                </div>
            </form>
        </div>
    </section>
  

    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection