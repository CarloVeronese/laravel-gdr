@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('characters.update', $character) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Character Name"
                    value="{{ old('name', $character->name) }}">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="bio" id="bio" placeholder="Character Description">{!! old('bio', $character->bio) !!}</textarea>
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <select type="text" class="form-control" name="type_id" id="type_id">
                  <option value="">Select a Class</option>
                  @foreach($types as $type)
                    <option @selected( old('type_id', optional($character->type)->id) == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
              </div>
            <div class="mb-3">
                <label for="strength" class="form-label">Strength</label>
                <input type="number" class="form-control" name="strength" id="strength" placeholder="Character Strength"
                    value="{{ old('strength', $character->strength) }}">
            </div>
            <div class="mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" class="form-control" name="defense" id="defense" placeholder="Character Defense"
                    value="{{ old('defense', $character->defense) }}">
            </div>
            <div class="mb-3">
                <label for="speed" class="form-label">Speed</label>
                <input type="number" class="form-control" name="speed" id="speed" placeholder="Character Speed"
                    value="{{ old('speed', $character->speed) }}">
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">Health Points</label>
                <input type="number" class="form-control" name="hp" id="hp" placeholder="Health Points"
                    value="{{ old('hp', $character->hp) }}">
            </div>
            <div class="mb-3">
                @foreach ($items as $item)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="items[]" value="{{ $item->id }}" id="item-{{ $item->id }}" @checked(in_array($item->id, old('items', $character->items->pluck('id')->all())))>
                        <label for="item-{{ $item->id }}" class="forum-check-label">{{ $item->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-warning" value="Save">
            </div>
        </form>
    </div>
@endsection
