@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Gig: {{ $gig->bandName }}
          </div>

                <div class="col-md-6">
                  <img src="..." alt="...">
                </div>

                <div class="col-md-6">
                <div class="class-body">
                  <h5 class="card-title">{{ $gig->bandName }}</h5>
                  <p class="card-text">Loction: {{ $gig->location }}, Co. {{ $gig->county->name }} <br> Date and Time (Y-M-D): {{ $gig->dateTime }} <br> Price: €{{ $gig->price }} <br> Genre: {{ $gig->genre }}</p>
                  <p class="card-text"><small class="text-muted">Posted By: {{ $gig->user->name }}</small></p>
                  <a href="{{ route('user.gigs.index') }}" class="btn btn-default">Back</a>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
