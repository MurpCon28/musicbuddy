@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <br>


              <h4>My Favourites</h4>
              {{-- @if (count(Auth::user()->favourites) == 0)
                <br>
                <p>There are no favourites!</p>
              @else --}}
            @foreach(Auth::user()->favourites as $favourite)

              <div class="col-md-12">

                  <div class="card-group">
                    <div class="card data-id="{{ $favourite->id }}"">
                      {{-- <a href="{{ route('admin.uploads.show', $upload->id) }}"> --}}
                      <div class="typeBanner">
                        {{ $favourite->upload->type->name }}
                      </div>
                    <iframe width="560" height="315" src="{{ url($favourite->upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h5 class="card-title">{{ $favourite->upload->title }}</h5>
                        <p class="card-text">{{ $favourite->upload->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $favourite->upload->user->name }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $favourite->upload->tag->name }}</small></p>
                      </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <br>



            @endforeach
            {{-- @endif --}}
    </div>
</div>
@endsection
