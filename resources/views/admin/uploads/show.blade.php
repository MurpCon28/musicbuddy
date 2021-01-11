@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Video Type: {{ $upload->type->name }}
                  </div>
                      <iframe width="538" height="325" src="{{ url($upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <br>
                    <div class="class-body">
                      <h5 class="card-title">{{ $upload->title }}</h5>
                      <p class="card-text">{{ $upload->description }}</p>
                      <p class="card-text"><small class="text-muted">{{ $upload->user->name }}</small></p>
                      <p class="card-text"><small class="text-muted">{{ $upload->tag->name }}</small></p>
                    <a href="{{ route('admin.uploads.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.uploads.edit', $upload->id) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.uploads.destroy', $upload->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                  </form>
                  </div>
                  <br>
              </div>
          </div>

            <br>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Comments
                  <a href="{{ route('admin.comments.create', $upload->id) }}" class="btn btn-primary float-right">Add</a>
                </div>
              <div class="card-body">
                @if (count($upload->comments) == 0)
                <p>There are no comments for this video.</p>
                @else
                <table class="table">
                    <thead>
                        <th>Comment</th>
                        <th>User</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($upload->comments as $comment)
                        <tr>
                            <th>{{ $comment->body }}</th>
                            <th>{{ $comment->user->name }}</th>
                            <th>
                                <form style="display:inline-block" method="POST" action="{{ route('admin.comments.destroy', [ 'id' => $upload->id, 'rid' => $comment->id]) }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="form-control btn btn-danger">Delete</a>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
