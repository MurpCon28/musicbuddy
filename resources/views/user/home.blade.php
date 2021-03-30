@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header typeBanner">
                <h5 class="bannerFont">Profile Page</h5>
              </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <h2>Welcome, {{ Auth::user()->name }}</h2>
                    <br>
                    <h4>You are logged in as an ordinary user.</h4>
                    <br>
                    <a href="{{ route('user.uploads.create') }}" class="btn btn-primary"> Upload Video </a>
                    <a href="{{ route('user.favourites.index') }}" class="btn btn-primary"> View My Favourites Videos </a>
                    <a href="{{ route('user.myvid.index') }}" class="btn btn-primary"> View My Videos </a>
                    <a href="{{ route('user.mygig.index') }}" class="btn btn-primary"> View My Gigs </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
