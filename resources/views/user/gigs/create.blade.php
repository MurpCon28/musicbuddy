@extends('user.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Gig
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
            <form method="POST" action="{{ route('user.gigs.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"/>
              </div>
              <div class="form-group">
                <label for="title">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}"/>
              </div>
              <div class="form-group">
                <label for="title">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}"/>
              </div>
              <div class="form-group">
                <label for="title">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}"/>
              </div>
              <div class="form-group">
                <label for="title">Price</label>
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
