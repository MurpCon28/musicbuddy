@extends('user.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p id="alert-message" class="alert collapse"></p>

        <div class="card-group">
          <div class="row">
            <div class="card">
              <div class="card-header banner">
                <h5>Gigs
                <a href="{{ route('user.gigs.create') }}" class="btn btn-primary float-right">Add</a>
              </h5>
              </div>
              <br>
              @if (count(Auth::user()->gigs) === 0)
                <div class="col-md-12">
                  <p>There are no uploads!</p>
                </div>
              @else
                <div class="card-group col-12">
                  @foreach (Auth::user()->gigs as $gig)
                    <div class="card-mb-12 data-id="{{ $gig->id }}"" style="max-width: 1040px;">
                      <a href="{{ route('user.mygig.show', $gig->id) }}">
                        <div class="col-md-4">
                          <img src="{{ asset('storage/images/' . $gig->image) }}" width="300" />
                        </div>
                          <div class="col-md-12">
                            <div class="card-body">
                              <h5 class="card-title">{{ $gig->bandName }}</h5>
                              <p class="card-text">Loction: {{ $gig->location }}, Co. {{ $gig->county->name }} <br> Date and Time (Y-M-D): {{ $gig->dateTime }} <br> Price: €{{ $gig->price }} <br> Genre: {{ $gig->genre }}</p>
                              <p class="card-text"><small class="text-muted">Posted by: {{ $gig->user->name }}</small></p>
                          </div>
                        </div>
                    </div>
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
