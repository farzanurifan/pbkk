@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Foto') }}</div>

                <div class="card-body">
                    <div id="upload-demo" style="width:200px"></div>
                </div>
                <div class="card-body">
                    <strong>Select Image:</strong>
                    <input type="file" id="uploadProfile">
                    <hr>
                    <button class="btn btn-success upload-result">Upload</button>
                    <p id="profilepp_response_msg" style="display: none"></p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}<span><a id="profile_edit" style="float: right;"><i class="fa fa-pencil-square-o" style="font-size:30px;float: right;"></i></a></span></div>

                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Lengkap</label>
                        <input id="profile_id" value="{{Auth::user()->id}}" hidden>
                        <input disabled name="first_name" id="profile_name" value="{{Auth::user()->name}}" placeholder="Nama yang udah diisi pas sign up" class="form-control"  type="text">
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat</label>
                        <input disabled name="address" id="profile_alamat" value="{{Auth::user()->alamat}}" placeholder="Alamat yang udah diisi pas sign up" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <input disabled name="phone" id="profile_telepon" value="{{Auth::user()->telepon}}" placeholder="Nomor telepon yang udah diisi pas sign up" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>
                        <input name="email" value="{{Auth::user()->email}}" placeholder="Alamat E-Mail yang udah diisi pas sign up" class="form-control"  type="text" disabled>
                    </div>

                    <button id="profile_submit" class="btn btn-success" style="display: none">Submit</button>
                    <button id="profile_cancel" class="btn btn-danger" style="display: none">Cancel</button>
                    <p id="profile_response_msg" style="display: none"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection