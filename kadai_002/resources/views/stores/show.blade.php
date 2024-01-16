@extends('layouts.app')

@section('content')
<div class="">
  {{ $store -> name }}
  <br>
  <div class="col-4">
    <img src="{{ asset($store->image) }}" class="img-thumbnail mt-3">
  </div>
  <br>
  <a href="{{ route('reservations.create', ['store_id' => $store->id]) }}" class="btn btn-success mt-3">予約</a>
</div>

<div class="row">
  @foreach($reviews as $review)
  <p>{{ $review->content }}</p>
  <label>{{$review->created_at}} {{$review->user->user_name}}</label>
  @endforeach
</div><br>

@auth
<div class="row">
  <form method="POST" action="{{ route('reviews.store') }}">
  @csrf
  <h4>評価</h4>
  <select name="score">
    <option value="5">★★★★★</option>
    <option value="4">★★★★</option>
    <option value="3">★★★</option>
    <option value="2">★★</option>
    <option value="1">★</option>
  </select>
  <h4>タイトル</h4>
  @error('title')
    <strong>タイトルを入力してください</strong>
  @enderror
  <input type="text" name="title">
  <h4>レビュー内容</h4>
  @error('content')
    <strong>レビュー内容を入力してください</strong>
  @enderror
  <textarea name="content"></textarea>
  <input type="hidden" name="store_id" value="{{$store->id}}"><br>
  <button type="submit">レビューを追加</button>
  </form>
@endauth
</div>

@endsection