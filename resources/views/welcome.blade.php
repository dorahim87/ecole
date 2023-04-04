@extends('layouts.app')
@section('title', 'Site - Welcome')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-3">
        <h1 class="display-3 mt-3">
            {{ config('app.name')}}
        </h1>
        <p>
            Le site des étudiants, cliquez ci-dessous pour accéder au site
        </p>
        <a href="{{route('etudiant.index')}}" class="btn btn-primary btn-sm">Click</a>
    </div>
</div>
@endsection