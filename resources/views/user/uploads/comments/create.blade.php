@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="card">
                  <div class="card-header">
                    {{ $upload->title }}: Add a Comment
                  </div>

                  <div class="panel-body">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      <form method="POST" action="{{ route('user.comments.store', $upload->id) }}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                              <label for="body">Comment</label>
                              <input type="text" class="form-control" id="body" name="body" value="{{ old('body') }}" />
                          </div>
                          <a href="{{ route('user.uploads.show', $upload->id) }}" class="btn btn-default">Cancel</a>
                          <button type="submit" class="btn btn-primary pull-right">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
