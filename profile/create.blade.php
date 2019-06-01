{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yieldに('title')'ニュースの新規作成'を埋め込む --}}
@section('title','ニュースの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
  <div class="container">
     <div class="row">
         <div class="col-md-8 mx-auto">
            <h2>profile</h2>
            <form action="{{action ('Admin\ProfileController@create') }}"
            method="post"  enctype="multipart/form-data">

              @if (count($errors) > 0)
                 <ul>
              @endif
              <div class="form-group row">

                  <label class="col-md-2" for="title">name</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control"
                      name="title" value="{{ old('title') }}">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2" for="body">gender</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control"
                      name="title" value="{{ old('title') }}">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2" for="title">hobby</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control-file" name="body">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2" for="body">introduction</label>
                  <div class="col-md-10">
                      <textarea class="form-control" name="body"
                  rows="20">{{ old('body') }}</textarea>
                  </div>
              </div>
              {{ csrf_field() }}
              <input type="submit" class="btn btn-primary" value="更新">
            </form>
          </div>
      </div>
   </div>
@endsection
