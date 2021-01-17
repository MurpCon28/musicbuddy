@extends('user.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Gig: {{ $gig->bandName }} <a href="https://www.ticketmaster.ie/" class="btn btn-info float-right">Tickets</a>
          </div>

                  <div class="col-md-6">
                    <br>
                    <img src="{{ asset('storage/images/' . $gig->image) }}" width="500" />
                    <br>
                    <br>
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
            <div class="col-md-8">
              <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ $gig->location }}{{ $gig->county->name }}+(Gig)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
