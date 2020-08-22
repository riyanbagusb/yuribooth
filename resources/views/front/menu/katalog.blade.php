@extends('front.layout.app')

@section('content')
    <section class="bg-custom-primary pt-5 divider-top">
        @include('front.component.list_katalog')
    </section>
    <section class="bg-light p-5 divider-top-primary" id="pemesanan">
        @include('front.component.order')
    </section>
    <section class="bg-custom-tertiary p-1 fixed-bottom">
        @include('front.component.social')
    </section>
@endsection