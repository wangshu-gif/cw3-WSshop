@extends('layouts.app')

@section('title', 'Edit Commodity')

@section('content')
<from action="{{action('CommodityController@update', '$id')}}" mehtod=POST">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="PUT"/>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
  <p>Name: <input type="text" name="name" class="form-control" value="{{ $commodity->name }}"></p>
  <p>Num: <input type="text" name="num" class="form-control" value="{{ $commodity->num  }}"></p>
  <p>Type: <input type="text" name="type" class="form-control" value="{{ $commodity->type  }}" ></p>
  <p>Shelves: <input type="text" name="shelf_id" class="form-control" value="{{ $commodity->shelf_id  }}"></p>
  </div>


  @csrf
  @method('PUT')
  <button type="submit">Update</button>


@endsection
