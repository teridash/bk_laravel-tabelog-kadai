@extends('layouts.app')

@section('content')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container-fluid home">
  <div class="row">
    <div class="text-center d-flex justify-content-center" >
      <form action="{{route('stores.index')}}" method="GET">
          <select name="category_id" class="form-select mt-3">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
        <input type="text" name="name" class="form-control mt-3" placeholder="キーワード・店舗名">
        <input type="text" name="address" class="form-control mt-3" placeholder="エリア">
        <button type="submit" class="btn btn-success mt-3" value="送信">検索</button>
      </form>
    </div>
  </div>
</div>

@endsection
