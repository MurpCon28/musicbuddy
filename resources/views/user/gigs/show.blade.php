@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Gig: {{ $gig->name }}
          </div>

          <div class="card-body">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Name</td>
                  <td>{{ $gig->name }}</td>
                </tr>
                <tr>
                  <td>Genre</td>
                  <td>{{ $gig->genre }}</td>
                </tr>
                <tr>
                  <td>Location</td>
                  <td>{{ $gig->location }}</td>
                </tr>
                <tr>
                  <td>Year</td>
                  <td>{{ $gig->year }}</td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td>{{ $gig->price }}</td>
                </tr>
              </tbody>
            </table>

            <a href="{{ route('user.gigs.index') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
