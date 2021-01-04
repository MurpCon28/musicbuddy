@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
              Video Type: {{ $upload->type->name }}
            </div>

            <iframe width="728" height="375" src="{{ url($upload->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
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

        <br>

          <div class="card">
            <div class="card-header">
              Comments
              <a href="{{ route('user.comments.create', $upload->id) }}" class="btn btn-primary">Add</a>
            </div>
          <div class="card-body">
            @if (count($upload->comments) == 0)
            <p>There are no comments for this video.</p>
            @else
            <table class="table">
                <thead>
                    <th>Comment</th>
                </thead>
                <tbody>
                    @foreach ($upload->comments as $comment)
                    <tr>
                        <th>{{ $comment->body }}</th>
                        <th>{{ $comment->user->name }}</th>
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
