@extends('layouts.layout')

@section('content')
    <div class="container" style="margin: 20px 0 0">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Détails {{$room->room_name }} </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Nom de l'hôtel:</strong> {{ $room->hotel_name }}
                            </div>
                            <div class="col-md-6">
                                <strong>Nom de la chambre:</strong> {{ $room->room_name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Prix:</strong> {{ $room->price }}
                            </div>
                            <div class="col-md-6">
                                <strong>Nombre de lits:</strong> {{ $room->beds }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Max d'adultes:</strong> {{ $room->max_adults }}
                            </div>
                            <div class="col-md-6">
                                <strong>Max d'enfants:</strong> {{ $room->max_children }}
                            </div>
                        </div>
                        <hr>
                        <div>
                            <strong>Description:</strong> {{ $room->description }}
                        </div>
                        <!-- Ajoutez d'autres informations de la chambre ici -->
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('rooms.index') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
