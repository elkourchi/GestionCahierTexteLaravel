@extends('Cahiers.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier la séance</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('Cahiers.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('Cahiers.update',$Cahier->npro) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Classe:</strong>
                <input type="text" name="npro" value="{{ $Cahier->npro }}"class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="text" name="libelle" value="{{ $Cahier->libelle }}" class="form-control" placeholder="Saisir un libellé">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Cours:</strong>
                <input type="text" name="prix" value="{{ $Cahier->prix }}" class="form-control" placeholder="Saisir un prix">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Détails:</strong>
                <input type="text" name="qstock" value="{{ $Cahier->qstock }}" class="form-control" placeholder="Saisir un stock">
            </div>
        </div>
    </div>           
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Remarques:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Détail">{{ $Cahier->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection