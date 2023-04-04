@extends('layouts.app')
@section('title', 'Site - Welcome')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-3">
        <h1 class="display-3 mt-3">
            {{ config('app.name')}}
        </h1>
    </div>
    <hr>
    <div class="col-md-8">
        <p>
            Bonjour Etudiants!
        </p>
    </div>
    <div class="col-md-4">
        <a href="{{ route('etudiant.create' )}}" class="btn btn-success">Ajouter</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="display-5">Etudiants List</h2>
            </div>
            <div class="card-body">
                <ul>
                    @forelse($etudiants as $etudiant)
                    <li> <a href="{{route('etudiant.show', $etudiant->id)}}">{{ $etudiant->nom }}</a></li>
                    @empty
                    <li class="text-danger">Pas d'étudiant avec ce nom !</li>
                    @endforelse
                </ul>
            </div>
            {{$etudiants}}
        </div>
    </div>
</div>
@endsection