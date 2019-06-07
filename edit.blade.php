@extends('layouts.profile')
@section('title', 'ニュースの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>profile</h2>
                <form action="{{ action('Admin\ProfileController@update') }}"
method="post" enctype="multipart/form-data">
                   @if (count($errors) > 0)
                <ul>

                   @endif
                   <div class="form-group row">
                       <label class="col-md-2" for="title">name</label>
                       <div class="col-md-10">
                           <input type="text" class="form-control"
                    name="name" value="{{ $profile_form->name}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="body">gender</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control"
                    name="gender" value="{{ $profile_form->gender}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-md-2" for="title">hobby</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control"
                          name="hobby" value="{{ $profile_form->hobby}}">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="body">introduction</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="introduction"
                    rows="20">{{ $profile_form->introduction }}</textarea>
                    </div>
                  </div>
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-primary" value="更新">
              </form>
          </div>
      </div>
  </div>
@endsection
