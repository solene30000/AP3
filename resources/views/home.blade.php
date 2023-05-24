@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="card">

                    <div class="card-header">{{ __('Inscription') }}</div>
                   
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            {{ __('Vous êtes inscrits.') }}
                        </div>

                        
                  
                </div>

            </center>
        </div>
    </div>
</div>
@endsection
