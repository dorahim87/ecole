@extends('layouts.app')
@section('title', 'Etudiant - show')
@section('content')
<div class="row mt-5">
  <div class="col-12">
    <a href="{{route('etudiant.index')}}" class="btn btn-primary btn-sm">Return</a>
    <h2 class="display-8 pt-3">
      Détail étudiant
    </h2>
    <h5 class="display-8 pt-3">
      Nom : {{ $etudiant->nom}}
    </h5>
    <h5 class="display-8 pt-3">
      Adresse : {{ $etudiant->adresse}}
    </h5>
    <h5 class="display-8 pt-3">
      Phone : {{ $etudiant->phone}}
    </h5>
    <h5 class="display-8 pt-3">

      Email : {{ $etudiant->email}}

    </h5>
    <h5 class="display-8 pt-3">
      Date de Naissance : {{ $etudiant->date_de_naissance}}
    </h5>
    <h5 class="display-8 pt-3">
      Ville : {{ $etudiant->etudiantHasVille->nom }}
    </h5>
  </div>
</div>
<div class="row text-center">
  <div class="col-md-6">
    <a href="{{ route('etudiant.edit', $etudiant->id)}}" class="btn btn-success btn-sm">Modifier</a>
  </div>
  <div class="col-md-6">
    <input type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete" value="Effacer">
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you to delete the blog : {{ $etudiant->title }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form method="post">
          @csrf
          @method('delete')
          <button class="btn btn-danger"> Effacer </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection