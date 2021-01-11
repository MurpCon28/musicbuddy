@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p id="alert-message" class="alert collapse"></p>

        <div class="card">
          <div class="card-header">
            Gigs
          </div>

          <div class="card-body">
            @if (count($gigs) === 0)
              <p>there are no gigs</p>
            @else
              <table id="table-gigs" class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Genre</th>
                  <th>Location</th>
                  <th>Year</th>
                  <th>Price</th>
                  <th>Actions</th>
                </thead>
                <tbody>
            @foreach ($gigs as $gig)
              <tr data-id="{{ $gig->id }}">
                <td>{{ $gig->name }}</td>
                <td>{{ $gig->genre }}</td>
                <td>{{ $gig->location }}</td>
                <td>{{ $gig->price }}</td>
                <td>
                  <a href="{{ route('user.gigs.show', $gig->id) }}" class="btn btn-primary">View</a>
                </td>
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
@endsection
