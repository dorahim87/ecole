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
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="display-5">Liste des etudiants </h2>
            </div>
            <div class="card-body">
                @forelse($etudiants as $etudiant)
                <h5>{{ $etudiant->name }}</h5>
                <ul>
                    @forelse($etudiant->articles as $article)
                    <li>
                        <a href="{{ route('user.articles', ['id' => $etudiant->id]) }}">Voir les articles</a>
                    </li>
                    @empty
                    <li>Aucun article trouvé pour cet utilisateur.</li>
                    @endforelse
                </ul>
                @empty
                <p>Aucun utilisateur trouvé.</p>
                @endforelse
            </div>
            {{$etudiants}}
        </div>
    </div>
</div>
@endsection