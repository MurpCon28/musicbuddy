@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="card">
          <div class="card-header banner">
            <h5 class="bannerFont"> Add new Gigs </h5>
          </div>

          <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('user.gigs.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="image">Artist/Band Image</label>
                <input type="file" class="form-control" id="image" name="image">
              </div>
              <div class="form-group">
                <label for="bandName">Artist/Band Name</label>
                <input type="text" class="form-control" id="bandName" name="bandName" value="{{ old('bandName') }}"/>
              </div>
              {{-- <div class="form-group">
                <label for="user">User Name</label>
                <select name="user_id">
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ (old('user_id') == $user->id) ? "selected" : "" }}>{{ $user->name }}</option>
                  @endforeach
                </select>
              </div> --}}
              <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}"/>
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}"/>
              </div>
              <div class="form-group">
                <label for="county">County</label>
                <select name="county_id">
                  @foreach ($counties as $county)
                    <option value="{{ $county->id }}" {{ (old('county_id') == $county->id) ? "selected" : "" }}>{{ $county->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dateTime">Date & Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" value="{{ old('dateTime') }}"/>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"/>
              </div>
              <div class="float-right">
                <a href="{{ route('user.gigs.index') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
