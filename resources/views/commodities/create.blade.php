@extends('layouts.app')

@section('title', 'Create Commodity')

@section('content')
<form method="Post" action="{{ route('commodities.store') }}">
  @csrf
  <p>Name: <input type="text" name="name" value="{{ old('name') }}"></p>
  <p>Num: <input type="text" name="num" value="{{ old('num') }}"></p>
  <p>Type: <input type="text" name="type" value="{{ old('type') }}"></p>
  <p>Shelves: <select name="shelf_id">
                    @foreach ($shelves as $shelf)
                       <option value="{{ $shelf->id }}"
                         @if ($shelf->id == old('shelf_id'))
                              selected="selected"
                         @endif
                         >{{ $shelf->name }}</option>

                @endforeach
              </select></p>


  <input type="submit" value="Submit">
  <a href="{{ route('commodities.index') }}">Cancel</a>
  </form>
@endsection
