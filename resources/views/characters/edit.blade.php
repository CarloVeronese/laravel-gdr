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
            <textarea type="text" class="form-control" name="bio" id="bio"
                placeholder="Character Description">{!! old('bio', $character->bio) !!}</textarea>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <select type="text" class="form-control" name="class" id="class" placeholder="Character Class">
                <option @selected(old('class',$character->class) === 'Mage')value="Mage">Mage</option>
                <option @selected(old('class',$character->class) === 'Tank')value="Tank">Tank</option>
                <option @selected(old('class',$character->class) === 'Healer')value="Healer">Healer</option>
                <option @selected(old('class',$character->class) === 'Ranger')value="Ranger">Ranger</option>
                <option @selected(old('class',$character->class) === 'Fighter')value="Fighter">Fighter</option>
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
            <input type="submit" class="btn btn-warning" value="Save">
        </div>
    </form>
</div>
@endsection