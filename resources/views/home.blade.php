@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-4">
            Tweet Form
        </div> --}}
        <form-component></form-component>
        <div class="col-md-8">
            Timeline
        </div>
    </div>
</div>
@endsection
