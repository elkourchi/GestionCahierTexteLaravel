@extends('Cahiers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Gestion du cahier de texte</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('Cahiers.create') }}"> Ajouter une nouvelle séance</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Classe</th>
            <th>Date</th>
            <th>Cours</th>
            <th>Détails</th>
            <th>Remarques</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($Cahiers as $Cahier)
        <tr>
           
            <td>{{ $Cahier->npro }}</td>
            <td>{{ $Cahier->libelle }}</td>
            <td>{{ $Cahier->prix }}</td>
            <td>{{ $Cahier->qstock }}</td>
            <td>{{ $Cahier->description }}</td>
            <td>
                <form action="{{ route('Cahiers.destroy',$Cahier->npro) }}" method="POST">
   
                    <a class="btn btn-outline-primary" href="{{ route('Cahiers.show',$Cahier->npro) }}">Montrer</a>
    
                    <a class="btn btn-outline-success" href="{{ route('Cahiers.edit',$Cahier->npro) }}">Éditer</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    {!! $Cahiers->links('pagination::bootstrap-4') !!}
      </div>
@endsection