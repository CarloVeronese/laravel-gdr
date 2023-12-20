@extends('layouts.app')

@section('content')
    <section class="main-section">
        <div class="container my-3">
            <div class="row gap-2">
                <h2 class="text-center">
                    Characters
                </h2>
                <table class="table table-primary table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            {{-- <th scope="col">Bio</th> --}}
                            <th scope="col">Strenght</th>
                            <th scope="col">Defense</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Hp</th>
                            <th>
                                <a class="btn btn-success" href="{{ route('characters.create') }}">New Character</a>
                            </th>
                        </tr>
                    </thead>
                    @forelse ($characters as $character)
                        <tbody>
                            <tr class="align-middle">
                                <td>{{ $character->name }}</td>
                                <td>{{ $character->class }}</td>
                                {{-- <td>{{ $character->bio }}</td> --}}
                                <td>{{ $character->strength }}</td>
                                <td>{{ $character->defense }}</td>
                                <td>{{ $character->speed }}</td>
                                <td>{{ $character->hp }}</td>
                                <td class="d-flex align-items-center gap-2">
                                    <a class="btn btn-primary" href="{{ route('characters.show', $character) }}">More
                                        Info</a>
                                    <a href="{{ route('characters.edit', $character)}}" class="btn btn-warning">Edit</a>
                                    {{-- <form action="{{ route('characters.destroy', $character)}}" method="POST" class="ms-5">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Kill</button>
                                    </form> --}}
                                    
                                </td>
                                {{-- form per la conferma di elimina del comic --}}
                            </tr>
                        @empty
                            non ci sono risultati
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    
@endsection
