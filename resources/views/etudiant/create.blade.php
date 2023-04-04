@extends('layouts.app')
@section('title', 'Ajout-etudiant')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-2">
        <h1 class="display-5">
            Ajouter un etudiant
        </h1>
    </div> <!--/col-12-->
</div><!--/row-->
<hr>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header">
                    Formulaire
                </div>
                <div class="card-body">
                    <div class="control-grup col-12">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control">
                    </div>
                    <div class="control-grup col-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="form-control">
                    </div>
                    <div class="control-grup col-12">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="control-grup col-12">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="control-grup col-12">
                        <label for="date_de_naissance">Date de naissance</label>
                        <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control">
                    </div>
                    <div class="control-grup col-12">
                        <label for="ville_id">Sélectionnez une ville :</label>
                        <select id="ville_id" name="ville_id">
                            @foreach($villes as $ville)
                            <option value="{{ $ville->id}}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection