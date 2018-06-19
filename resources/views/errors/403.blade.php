@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-danger">
                    <h1>403 error</h1>
                    <p>You don't have permission to this page</p>
                    <p>Return to the <a href="{{ url('/') }}">home</a> page</p>
                </div>
            </div>
        </div>
    </div>

@endsection