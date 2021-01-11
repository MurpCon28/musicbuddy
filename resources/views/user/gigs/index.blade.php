@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p id="alert-message" class="alert collapse"></p>

        <div class="card-group">
          <div class="card">
            <div class="card-header">
              Gigs
              <a href="{{ route('user.gigs.create') }}" class="btn btn-primary float-right">Add</a>
            </div>
            @if (count($gigs) === 0)
              <p>There are no gigs available!</p>
            @else

          {{-- <div class="card-body">
            @if (count($gigs) === 0)
              <p>There are no gigs available!</p>
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
                <td>{{ $gig->year }}</td>

                <td>{{ $gig->price }}</td>
                <td>
                  <a href="{{ route('admin.gigs.show', $gig->id) }}" class="btn btn-primary">View</a>
                  <a href="{{ route('admin.gigs.edit', $gig->id) }}" class="btn btn-warning">Edit</a>
                  <form style="display:inline-block" method="POST" action="{{  route('admin.gigs.destroy', $gig->id)  }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>

                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div> --}}
                @foreach ($gigs as $gig)
                  <div class="card-group">
                  <div class="row">
                  <div class="card-mb-12 data-id="{{ $gig->id }}"" style="max-width: 1040px;">
                    <a href="{{ route('user.gigs.show', $gig->id) }}">
                      <div class="col-md-4">
                        <img src="..." alt="...">
                      </div>
                        <div class="col-md-12">
                          <div class="card-body">
                            <h5 class="card-title">{{ $gig->bandName }}</h5>
                            <p class="card-text">Loction: {{ $gig->location }}, Co. {{ $gig->county->name }} <br> Date and Time (Y-M-D): {{ $gig->dateTime }} <br> Price: €{{ $gig->price }} <br> Genre: {{ $gig->genre }}</p>
                            <p class="card-text"><small class="text-muted">Posted by: {{ $gig->user->name }}</small></p>
                        </div>
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
@endsection
