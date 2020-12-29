@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
              Video Type: {{ $upload->type->name }}
            </div>
            <iframe width="560" height="315" src="{{ url($upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <div class="class-body">
              <h5 class="card-title">{{ $upload->title }}</h5>
              <p class="card-text">{{ $upload->description }}</p>
              <p class="card-text"><small class="text-muted">{{ $upload->user->name }}</small></p>
              <p class="card-text"><small class="text-muted">{{ $upload->tag->name }}</small></p>

              {{-- <table class="table table-hover">
                <tbody>
                  <tr>
                      <tr>
                          <td>Patient Name</td>
                          <td>{{ $visit->patient->user->name }}</td>
                      </tr>
                      <tr>
                          <td>Doctor Name</td>
                          <td>{{ $visit->doctor->user->name }}</td>
                      </tr>
                      <tr>
                          <td>Date & Time</td>
                          <td>{{ $visit->dateTime }}</td>
                      </tr>
                      <tr>
                          <td>Duration in Hours</td>
                          <td>{{ $visit->duration }}</td>
                      </tr>
                      <tr>
                          <td>Cost in Euros</td>
                          <td>{{ $visit->cost }}</td>
                      </tr>
              </tbody>
            </table> --}}

            <a href="{{ route('user.uploads.index') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
