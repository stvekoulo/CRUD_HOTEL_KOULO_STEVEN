@extends('layouts.layout')

@section('content')
<style>
  /* Vos styles CSS pour la page */
</style>

<div class="table-responsive">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>CRUD <b>Chambres</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('rooms.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Ajouter une chambre</span></a>
        </div>
      </div>
    </div>
    <!-- Tableau des chambres -->
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de la chambre</th>
          <th scope="col">Prix</th>
          <th scope="col">Nombre de lits</th>
          <th scope="col">Max d'adultes</th>
          <th scope="col">Max d'enfants</th>
          <th scope="col">Statut</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Boucle pour afficher les données des chambres -->
        @foreach ($rooms as $room)
        <tr>
          <td>{{ $room->id }}</td>
          <td>{{ $room->room_name }}</td>
          <td>{{ $room->price }}</td>
          <td>{{ $room->beds }}</td>
          <td>{{ $room->max_adults }}</td>
          <td>{{ $room->max_children }}</td>
          <td>{{ $room->status ? 'Disponible' : 'Non disponible' }}</td>
          <td>
            <div class="btn-group" style="display: flex;">
                <a href="{{ route('rooms.edit', $room) }}" class="btn  btn-sm" style="margin-right: 5px;"><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></a>
                <form action="{{ route('rooms.destroy', $room) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn  btn-sm"><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></button>
                </form>
                <a href="{{ route('rooms.show', $room) }}" class="btn  btn-sm"><i class="fas fa-eye" data-toggle="tooltip" title="Show"></i></a>
            </div>
        </td>
        
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $rooms->links() }}
  </div>
</div>

@endsection
