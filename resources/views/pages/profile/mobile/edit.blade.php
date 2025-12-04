@extends('layouts.app')

@section('content')
<div class="md:hidden">

    <div class="flex items-center gap-4 p-4 border-b">
        <a href="{{ route('profile') }}">←</a>
        <h1 class="text-lg font-semibold">Edit Profil</h1>
    </div>

    @include('pages.profile.tabs.edit')

</div>
@endsection
