@extends('layouts.app')

@section('title', 'Commodity Details')

@section('content')
<ul>

  <li>Name: {{ $commodity->name }}</li>
  <li>Num: {{ $commodity->num }}</li>
  <li>Type: {{ $commodity->type }}</li>
  <li>Shelves: {{ $commodity->shelf->name }}</li>

</ul>

<form method="POST"
  action="{{ route('commodities.destroy', ['id'=>$commodity->id]) }}">
  @csrf
  @method('DELETE')
  <button type="submit">Delete</button>
</form>
<p><a href="{{ route('commodities.index') }}">Back</a></p>
<a href="{{ action('CommodityController@edit', $commodity['id'])}}">Edit Commodity</a>
@endsection
