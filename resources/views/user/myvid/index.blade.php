@extends('user.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <p id="alert-message" class="alert collapse"></p>
      <br>
      <br>
      <h2>My Videos</h2>
      @if (count(Auth::user()->uploads) == 0)
        <div class="col-md-12">
          <p>There are no uploads!</p>
        </div>
      @else
        @foreach (Auth::user()->uploads as $upload)
      <div class="col-md-12">

          <div class="card-group">
            <div class="card data-id="{{ $upload->id }}"">
              <a href="{{ route('user.uploads.show', $upload->id) }}">
              <div class="typeBanner">
                {{ $upload->type->name }}
              </div>
              <iframe width="560" height="315" src="{{ url($upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                <h5 class="card-title">{{ $upload->title }}</h5>
                <p class="card-text">{{ $upload->description }}</p>
                <p class="card-text"><small class="text-muted">{{ $upload->user->name }}</small></p>
                <p class="card-text"><small class="text-muted">{{ $upload->tag->name }}</small></p>
              </div>
              </a>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Comments <a href="{{ route('user.comments.create', $upload->id) }}" class="btn btn-primary float-right">Add</a></h5>
                <ul>
                  @if (count($upload->comments) == 0)
                    <p>There are no comments for this video.</p>
                  @else
                    @foreach ($upload->comments as $comment)
                      <p class="card-text">{{ $comment->body }}<br>
                      <span><small class="text-muted">{{ $comment->user->name }}</small></span></p>
                    @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>
          <br>
          <br>
      </div>
    @endforeach
    @endif
    </div>
  </div>
@endsection
