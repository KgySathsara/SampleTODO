@extends('layouts\app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col lg 12 text-center">
                <h1 class="page-titel">Home Page</h1>
            </div>
        </div>
    </div>
@endsection

@push('css')

<style>
    .page-titel
    {
        padding-top: 6vh;
        font-size: 4rem;
        color: #1a6c10;
    }

</style>

@endpush
