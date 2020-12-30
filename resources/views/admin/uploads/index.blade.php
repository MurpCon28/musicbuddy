@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <p id="alert-message" class="alert collapse"></p>
      <br>
      <br>
      @if (count($uploads) == 0)
        <p>There are no uploads!</p>
      @else
        @foreach ($uploads as $upload)
      <div class="col-md-12">

          <div class="card-group">
            <div class="card data-id="{{ $upload->id }}"">
              <a href="{{ route('admin.uploads.show', $upload->id) }}">
              <div class="typeBanner">
                {{ $upload->type->name }}
              </div>
              <iframe width="560" height="315" src="{{ url($upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                <h5 class="card-title">{{ $upload->title }}</h5>
                <p class="card-text">{{ $upload->description }}</p>
                <p class="card-text"><small class="text-muted">{{ $upload->user->name }}</small></p>
                <p class="card-text"><small class="text-muted">{{ $upload->tag->name }}</small></p>
              </div>
              </a>
            </div>
            <div class="card">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <br>
          <br>

          {{-- <div class="card">
            <div class="card-header">
              Visits
            </div>

            <div class="card-body">
              @if (count($visits) == 0)
                <p>There were no visits!</p>
              @else
                <table id="table-books" class="table table-hover">
                  <thead>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Date & Time</th>
                    <th>Duration</th>
                    <th>Cost</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
              @foreach ($visits as $visit)
                    <tr data-id="{{ $visit->id }}">
                      <td>{{ $visit->patient->user->name }}</td>
                      <td>{{ $visit->doctor->user->name }}</td>
                      <td>{{ $visit->dateTime }}</td>
                      <td>{{ $visit->duration }}</td>
                      <td>{{ $visit->cost }}</td>
                      <td>
                          <a href="{{ route('patient.visits.show', $visit->id) }}" class="btn btn-primary">View</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div> --}}
      </div>
    @endforeach
    @endif
    </div>
  </div>
@endsection
