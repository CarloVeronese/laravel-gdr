@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('characters.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Character Name">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="bio" id="bio" placeholder="Character Description"></textarea>
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <select type="text" class="form-control" name="type_id" id="type_id" placeholder="Character Class" required>
                    <option value="">Select a Class</option>
                    @foreach($types as $type)
                        <option @selected( old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="strength" class="form-label">Strength</label>
                <input type="number" class="form-control" name="strength" id="strength" placeholder="Character Strength">
            </div>
            <div class="mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" class="form-control" name="defense" id="defense" placeholder="Character Defense">
            </div>
            <div class="mb-3">
                <label for="speed" class="form-label">Speed</label>
                <input type="number" class="form-control" name="speed" id="speed" placeholder="Character Speed">
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">Health Points</label>
                <input type="number" class="form-control" name="hp" id="hp" placeholder="Health Points">
            </div>
            <div class="mb-3">
                @foreach ($items as $item)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="items[]" value="{{ $item->id }}" id="item-{{ $item->id }}" @checked(in_array($item->id, old('items', [])))>
                        <label for="item-{{ $item->id }}" class="forum-check-label">{{ $item->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>
    </div>
@endsection
