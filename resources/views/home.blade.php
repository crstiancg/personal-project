@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Session::Has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session::get('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h1>Hola armindo</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
