@extends('layouts.app')

@section('content')
<section style="background-color:rgb(199, 199, 199);height:30vh">contenido</section>
{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}
    
{{-- </div> --}}
@endsection
