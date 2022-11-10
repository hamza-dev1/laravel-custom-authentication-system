@extends('layouts.base')
@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto my-6">

    <h1 class="text-2xl">Welcome <span class="text-cyan-600">{{ Auth::user()->first_name . " " . Auth::user()->last_name }}</span>, this is the dashboard.</h1>
</div>
@endsection
