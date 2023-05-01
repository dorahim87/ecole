@extends('layouts.app')
@section('title', 'Articles - User')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-3">
        <h1 class="display-3 mt-3">
            {{ config('app.name')}}
        </h1>
    </div>
    <hr>
    <div class="col-md-8">
        <h2 class="display-5">Articles de {{ $etudiant->name }}</h2>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(count($articles) > 0)
                <ul>
                    @foreach($articles as $article)
                    <li>{{ $article->title }}</li>
                    @endforeach
                </ul>
                @else
                <p>Aucun article trouvé pour cet utilisateur.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection