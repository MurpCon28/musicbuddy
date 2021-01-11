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
            <form method="POST" action="{{ route('admin.gigs.update', $gig->id) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $gig->name) }}"/>
              </div>
              <div class="form-group">
                <label for="title">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre', $gig->genre) }}"/>
              </div>
              <div class="form-group">
                <label for="title">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $gig->location) }}"/>
              </div>
              <div class="form-group">
                <label for="title">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $gig->year) }}"/>
              </div>
              <div class="form-group">
                <label for="title">Price</label>
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
