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
                  <a href="{{ route('admin.gigs.index') }}" class="btn btn-default">Back</a>
                  <a href="{{ route('admin.gigs.edit', $gig->id) }}" class="btn btn-warning">Edit</a>
                  <form style="display:inline-block" method="POST" action="{{  route('admin.gigs.destroy', $gig->id)  }}">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="form-control btn btn-danger">Delete</a>
                  </form>
                  <button type="button" href="https://www.ticketmaster.ie/" class="btn btn-info float-right">Tickets</button>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
