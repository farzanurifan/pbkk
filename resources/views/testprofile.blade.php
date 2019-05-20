@extends('layouts.app')
@section('content')
<div class="container">
  	<div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Foto') }}</div>

                <div class="card-body">
                    <div id="upload-demo" style="width:200px"></div>
                    <strong>Select Image:</strong>
                    <input type="file" id="uploadProfile">
                    <button class="btn btn-success upload-result">Upload Image</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    {{__('Hehe')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection