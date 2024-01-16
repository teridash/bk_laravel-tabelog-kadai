@extends('layouts.app')

@section('content')
<div class="container mt-2">
  <div class="row">
    <h1>  店舗一覧</h1>
    <div class="text-center d-flex justify-content-center">
      <form action="{{route('stores.index')}}" method="GET">
          <select name="category_id" class="form-select mt-3">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
        <input type="text" name="name" class="form-control mt-3" placeholder="キーワード・店舗名">
        <input type="text" name="address" class="form-control mt-3" placeholder="エリア">
        <button type="submit" class="btn btn-success mt-3 mb-3" value="送信">検索</button>
      </form>
    </div>
  </div>
</div>

<div class="container col-4">
  <div class="">
  @foreach($stores as $store)
  <a href="{{ route('stores.show', $store->id) }}">
  <img src="{{ asset($store->image) }}" class="img-thumbnail">
  {{ $store -> name }}
  </a>
  <br>
  @endforeach
  </div>
</div>

@endsection

