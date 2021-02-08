@extends('layouts.main')

@section('main-content')

@include('main._hero')

@include('main._category')

<section class="categories spad">
    <div class="container">
        <div class="row">
            @include('main._sidebar')
        </div>
    </div>
</section>

@endsection

