@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p id="alert-message" class="alert collapse"></p>

        <div class="card-group">
          <div class="row">
            <div class="card">
              <div class="card-header">
                Gigs
                <a href="{{ route('admin.gigs.create') }}" class="btn btn-primary float-right">Add</a>
              </div>
              <br>
              @if (count($gigs) === 0)
                <p>There are no gigs available!</p>
              @else
                <div class="card-group">
                  @foreach ($gigs as $gig)
                    <div class="card-mb-12 data-id="{{ $gig->id }}"" style="max-width: 1040px;">
                      <a href="{{ route('admin.gigs.show', $gig->id) }}">
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
