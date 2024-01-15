@extends('layouts.app')

@section('content')

<div>
<form action="{{route('stores.index')}}" method="GET">
  <select name="category_id">
  @foreach($categories as $category)
  <option value="{{ $category->id }}">{{ $category->name }}</option>
  @endforeach
  </select>
  <input type="text" name="name">
  <input type="text" name="address">
  <button type="submit" value="送信"></button>
</form>
</div>
<img src="images/oden.jpg">
@endsection
