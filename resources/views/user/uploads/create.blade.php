@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header typeBanner">
            <h5 class="bannerFont">Add new video</h5>
            </div>

            <div class="class-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form method="POST" action="{{ route('user.uploads.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label for="video">Video (embed video from iframe "https://www.youtube.com/embed/E3NC88xGQ_A")</label>
                  <input type="text" class="form-control" id="video" name="video" value="{{ old('video') }}">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
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
                  <label for="type">Type</label>
                  <select name="type_id">
                    @foreach ($types as $type)
                      <option value="{{ $type->id }}" {{ (old('type_id') == $type->id) ? "selected" : "" }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="tags">Tag</label>
                  {{-- <input class="form-check-input" type="checkbox" id="tags" value="{{ old('tags') }}">
                  <label class="form-check-label" for="tags">{{ $tags->name }}</label> --}}
                  <select name="tag_id">
                    @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}" {{ (old('tag_id') == $tag->id) ? "selected" : "" }}>{{ $tag->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="float-right">
                  <a href="{{ route('user.uploads.index') }}" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
