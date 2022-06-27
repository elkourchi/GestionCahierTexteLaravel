@extends('Cahiers.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher la séance</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('Cahiers.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Classe:</strong>
                {{ $Cahier->classe }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $Cahier->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cours:</strong>
                {{ $Cahier->cours }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Détails:</strong>
                {{ $Cahier->details }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remarques:</strong>
                {{ $Cahier->description }}
            </div>
        </div>
    </div>
@endsection