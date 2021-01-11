@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p id="alert-message" class="alert collapse"></p>

        <div class="card">
          <div class="card-header">
            Gigs
            <a href="{{ route('admin.gigs.create') }}" class="btn btn-primary float-right">Add</a>
          </div>

          <div class="card-body">
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
  </div>
</div>
</div>
</div>
</div>
@endsection
