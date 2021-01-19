@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit Gig
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
            <form method="POST" action="{{ route('admin.gigs.update', $gig->id) }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <img src="{{ asset('storage/images/' . $gig->image) }}" width="150" />
                <div class="form-group">
                  <label for="image">Artist/Band Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
              <div class="form-group">
                <label for="bandName">Artist/Band Name</label>
                <input type="text" class="form-control" id="bandName" name="bandName" value="{{ old('bandName', $gig->bandName) }}"/>
              </div>
              {{-- <div class="form-group">
                <label for="user">User Name</label>
                <select name="user_id">
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ (old('user_id', $gig->user->id) == $user->id) ? "selected" : "" }}>{{ $user->name }}</option>
                  @endforeach
                </select>
              </div> --}}
              <div class="form-group">
                <label for="title">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre', $gig->genre) }}"/>
              </div>
              <div class="form-group">
                <label for="title">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $gig->location) }}"/>
              </div>
              <div class="form-group">
                <label for="county">County</label>
                <select name="county_id">
                  @foreach ($counties as $county)
                    <option value="{{ $county->id }}" {{ (old('county_id', $gig->county->id) == $county->id) ? "selected" : "" }}>{{ $county->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dateTime">Date & Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" value="{{ old('dateTime', $gig->dateTime) }}"/>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $gig->price) }}"/>
              </div>
              <div class="float-right">
                <a href="{{ route('admin.gigs.index') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
