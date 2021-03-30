@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
              <h2>My Favourites</h2>
              @if (count($favourites) == 0)
              {{-- @if (count(array(Auth::user()->favourites)) == 0) --}}
              {{-- @if (count(Auth::user()->favourites) == 0) --}}
                <br>
                <p>There are no favourites!</p>
              @else
            @foreach($favourites as $favourite)
            {{-- @foreach(Auth::user()->favourites ?? [] as $favourite) --}}

              <div class="col-md-12">

                  <div class="card-group">
                    <div class="card data-id="{{ $favourite->id }}"">
                      {{-- <a href="{{ route('admin.favourites.show', $favourite->upload->id) }}"> --}}
                      <div class="typeBanner">
                        <h5 class="bannerFont">{{ $favourite->upload->type->name }}</h5>
                      </div>
                    <iframe width="560" height="315" src="{{ url($favourite->upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h5 class="card-title">{{ $favourite->upload->title }}</h5>
                        <p class="card-text">{{ $favourite->upload->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $favourite->upload->user->name }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $favourite->upload->tag->name }}</small></p>

                        @if (App\Models\Favourite::where([['upload_id', '=', $favourite->upload->id], ['user_id', '=', Auth::user()->id]])->exists())
                          {{-- @if (App\Models\Favourite::where([['upload_id', '=', Auth::user()->upload->id], ['user_id', '=', Auth::user()->id]])->exists()) --}}
                          <form style="display:inline-block" method="POST" action="{{ route('admin.favourites.destroy', $favourite->upload->id) }}">
                            <button type="submit" class="btn btn-danger pull-right">Remove from Favourites</button>
                            <input type="hidden" value="DELETE" name="_method">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </form>

                        @else
                          <form style="display:inline-block" method="POST" action="{{ route('admin.favourites.store', $favourite->upload->id) }}">
                            <button type="submit" class="btn btn-primary pull-right">Add to Favourites</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </form>
                        @endif

                      </div>
                      {{-- </a> --}}
                    </div>
                  </div>
                  <br>
                  <br>
            @endforeach
          @endif
      </div>
  </div>
@endsection
