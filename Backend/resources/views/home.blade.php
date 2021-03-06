@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    {{-- <a href="{{ url('/display1') }}">display1</a> --}}
                    {{-- as <strong>{{ strtoupper(Auth::user()->admin_level) }}</strong><br>
                    Admin Page: <a href="{{ url('/') }}/Admin">{{ url('/') }}/adminOnlyPage</a><br>
                    Super Admin Page: <a href="{{ url('/') }}/SuperAdmin">{{ url('/') }}/super_adminOnlyPage</a><br> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <footer>foot</footer>
@endsection



