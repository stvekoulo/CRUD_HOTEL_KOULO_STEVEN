@extends('layouts.layout')
@section('content')
<form method="POST" action="{{ isset($room) ? route('rooms.update', $room->id) : route('rooms.store') }}">
    @csrf
    @if(isset($room))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="hotel_name">Nom de l'hôtel:</label>
        <input type="text" class="form-control" id="hotel_name" name="hotel_name" value="{{ isset($room) ? $room->hotel_name : '' }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description de l'hôtel :</label>
        <textarea class="form-control" id="description" name="description" rows="4" required>{{ isset($room) ? $room->description : '' }}</textarea>
    </div>    
    <div class="form-group">
        <label for="room_name">Nom de la chambre:</label>
        <input type="text" class="form-control" id="room_name" name="room_name" value="{{ isset($room) ? $room->room_name : '' }}" required>
    </div>
    <div class="form-group">
        <label for="price">Prix:</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ isset($room) ? $room->price : '' }}" required>
    </div>
    <div class="form-group">
        <label for="beds">Nombre de lits:</label>
        <input type="number" class="form-control" id="beds" name="beds" value="{{ isset($room) ? $room->beds : '' }}" required>
    </div>
    <div class="form-group">
        <label for="max_adults">Max d'adultes:</label>
        <input type="number" class="form-control" id="max_adults" name="max_adults" value="{{ isset($room) ? $room->max_adults : '' }}" required>
    </div>
    <div class="form-group">
        <label for="max_children">Max d'enfants:</label>
        <input type="number" class="form-control" id="max_children" name="max_children" value="{{ isset($room) ? $room->max_children : '' }}" required>
    </div>
    <div class="form-group">
        <label for="attributes">Attributs:</label>
        <!-- Ajoutez ici les champs nécessaires pour les attributs -->
        <input type="text" class="form-control" id="attributes" name="attributes" value="{{ isset($room) ? $room->attributes : '' }}">
    </div>
    <div class="form-group">
        <label for="status">Statut:</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1" {{ isset($room) && $room->status == 1 ? 'selected' : '' }}>Disponible</option>
            <option value="0" {{ isset($room) && $room->status == 0 ? 'selected' : '' }}>Non disponible</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">{{ isset($room) ? 'Modifier' : 'Ajouter' }}</button>
</form>

    
@endsection