@extends('layouts.app')
@section('title', 'Article - Create')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-2">
        <h1 class="display-5">
            Ajouter un article
        </h1>
    </div> <!--/col-12-->
</div><!--/row-->
<hr>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <form method="POST" action="{{ route('article.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Titre de l'article</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Contenu de l'article</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter l'article</button>
            </form>
        </div>
    </div>
</div>
@endsection