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
            <textarea type="text" class="form-control" name="bio" id="bio"
                placeholder="Character Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <select type="text" class="form-control" name="class" id="class" placeholder="Character Class">
                <option>Select a Class</option>
                <option value="Mage">Mage</option>
                <option value="Tank">Tank</option>
                <option value="Healer">Healer</option>
                <option value="Ranger">Ranger</option>
                <option value="Fighter">Fighter</option>
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
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </form>
</div>
@endsection