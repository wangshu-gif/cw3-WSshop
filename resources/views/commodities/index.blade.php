@extends('layouts.app')

@section('title', 'commodities')

@section('content')
<p>The commodities of WSshop:</p>
<ul>
  @foreach ($commodities as $commodity)
  <li><a href="{{ route('commodities.show', ['id'=> $commodity->id])}}">
    {{ $commodity->name }}</a></li>
  @endforeach
</ul>
<a href="{{ route('commodities.create' )}}">Create Commodity</a>
@endsection
