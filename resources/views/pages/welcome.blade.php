@extends('layouts.app')

@section('title', 'Toko Nisa')

@section('content')

    @include('partials.global.navbar-main')

    @include('partials.global.search-overlay')

    @include('partials.sections.hero')

    @include('partials.sections.about')

    @include('partials.sections.services-preview')

    @include('partials.sections.products-preview')

    @include('partials.sections.contact')

@endsection

@push('scripts')
<script src="{{ asset('js/navbar.js') }}"></script>
@endpush