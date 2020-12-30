@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
              Edit video
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
              <form method="POST" action="{{ route('admin.uploads.update', $upload->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                  <label for="video">Video (url link from embed video from iframe)</label>
                  <input type="text" class="form-control" id="video" name="video" value="{{ old('video', $upload->video) }}">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $upload->title) }}">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $upload->description) }}">
                </div>
                <div class="form-group">
                  <label for="user">User Name</label>
                  <select name="user_id">
                    @foreach ($users as $user)
                      <option value="{{ $user->id }}" {{ (old('user_id', $upload->user->id) == $user->id) ? "selected" : "" }}>{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="user">User Name</label>
                  <select name="type_id">
                    @foreach ($types as $type)
                      <option value="{{ $type->id }}" {{ (old('type_id', $upload->type->id) == $type->id) ? "selected" : "" }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="tag">Tag</label>
                  <select name="tag_id">
                    @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}" {{ (old('tag_id', $upload->tag->id) == $tag->id) ? "selected" : "" }}>{{ $tag->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="float-right">
                  <a href="{{ route('admin.uploads.index') }}" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
