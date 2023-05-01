@extends('layouts.app')
@section('title', 'Articles')
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
            mes Articles
        </p>
    </div>
    <div class="col-md-4">
        <!--<a href="{{ route('article.create' )}}" class="btn btn-success">Ajouter </a>-->
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="display-5">Liste des Articles</h2>
            </div>
            <div class="card-body">
                <ul>
                    @forelse($etudiants as $etudiant)
                    <li>
                        {{ $etudiant->name }}
                        <ul>
                            @foreach($etudiant->articles as $article)
                            <li><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @empty
                    <li class="text-danger">Pas d'étudiant avec ce nom !</li>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection