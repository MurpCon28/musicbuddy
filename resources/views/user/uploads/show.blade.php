@extends('user.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header typeBanner">
                  <h5 class="bannerFont">{{ $upload->type->name }}</h5>
                </div>
                      <iframe width="538" height="325" src="{{ url($upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <br>
                    <div class="class-body">
                      <h5 class="card-title">{{ $upload->title }}</h5>
                      <p class="card-text">{{ $upload->description }}</p>
                      <p class="card-text"><small class="text-muted">{{ $upload->user->name }}</small></p>
                      <p class="card-text"><small class="text-muted">{{ $upload->tag->name }}</small></p>
                    <a href="{{ route('user.uploads.index') }}" class="btn btn-default">Back</a>

                    @if (App\Models\Favourite::where([['upload_id', '=', $upload->id], ['user_id', '=', Auth::user()->id]])->exists())
                      <form style="display:inline-block" method="POST" action="{{ route('user.favourites.destroy', $upload->id) }}">
                        <button type="submit" class="btn btn-danger pull-right">Remove from Favourites</button>
                        <input type="hidden" value="DELETE" name="_method">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>

                    @else
                      <form style="display:inline-block" method="POST" action="{{ route('user.favourites.store', $upload->id) }}">
                        <button type="submit" class="btn btn-primary pull-right">Add to Favourites</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
                    @endif
                  </div>
                  <br>
              </div>
          </div>

            <br>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Comments
                  <a href="{{ route('user.comments.create', $upload->id) }}" class="btn btn-primary float-right">Add</a>
                </div>
              <div class="card-body">
                @if (count($upload->comments) == 0)
                <p>There are no comments for this video.</p>
                @else
                <table class="table">
                    <thead>
                        <th>Comment</th>
                        <th>User</th>
                    </thead>
                    <tbody>
                        @foreach ($upload->comments as $comment)
                        <tr>
                            <th>{{ $comment->body }}</th>
                            <th>{{ $comment->user->name }}</th>
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
