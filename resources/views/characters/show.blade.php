@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center py-4 align-items-center h-100">
        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200/150" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $character->name }}</h5>
                <p class="card-text">{{ $character->bio }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Class</span>
                    <span class="fw-bold">{{ $character->class }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Strength</span>
                    <span class="fw-bold">{{ $character->strength }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Defense</span>
                    <span class="fw-bold">{{ $character->defense }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Speed</span>
                    <span class="fw-bold">{{ $character->speed }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Health Points</span>
                    <span class="fw-bold">{{ $character->hp }}</span>
                </li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Edit</a>
                <a href="#" class="card-link">Delete</a>
            </div>
        </div>
    </div>
@endsection
