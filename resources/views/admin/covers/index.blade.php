@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <p id="alert-message" class="alert collapse"></p>
      <br>
      <br>

      @forelse($covers->uploads as $upload)
        <div class="col-md-12">

            <div class="card-group">
              <div class="card data-id="{{ $upload->id }}"">
                <a href="{{ route('admin.covers.show', $upload->id) }}">
                <div class="typeBanner">
                  <h5 class="bannerFont">{{ $upload->type->name }}</h5>
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
                  <h5 class="card-title">Comments <a href="{{ route('admin.comments.create', $upload->id) }}" class="btn btn-primary float-right">Add</a></h5>
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
      @empty
        No Review Videos were made!
      @endforelse
    </div>
  </div>
@endsection
