@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center mt-4">
  <div class="col-4 offset-1 mt-5">
    <img src="{{ asset($store->image) }}" class="img-thumbnail w-100 img-fluid">
  </div>
  <div class="col">
    <div class="d-flex flex-column m-5">
      <table class="table">
        <tr>
          <th>店舗名</th>
          <th>{{ $store -> name }}</th>
        </tr>
        <tr>
          <th>説明</th>
          <th>{{ $store -> description }}</th>
        </tr>
        <tr>
          <th>カテゴリ</th>
          <th>{{ $store -> category_id }}</th>
        </tr>
        <tr>
          <th>値段</th>
          <th>{{ $store -> price }}円</th>
        </tr>
        <tr>
          <th>開店時間</th>
          <th>{{ $store -> opening_time }}</th>
        </tr>
        <tr>
          <th>閉店時間</th>
          <th>{{ $store -> closing_time }}</th>
        </tr>
        <tr>
          <th>住所</th>
          <th>
            〒{{ $store -> postal_code }}<br>
            {{ $store -> address }}
          </th>
        </tr>
        <tr>
          <th>電話番号</th>
          <th>{{ $store -> phone_number }}</th>
        </tr>
        <tr>
          <th>定休日</th>
          <th>{{ $store -> holiday }}</th>
        </tr>
      </table>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-center">
      <a href="{{ route('reservations.create', ['store_id' => $store->id]) }}" class="btn btn-success mb-3">予約する</a>
    </div>
  </div>
</div>

<div class="justify-content-center m-4">
  @auth
  <div class="row">
    <div class="col m-5">
      <h1 class="mb-4">レビュー</h1>
      <form method="POST" action="{{ route('reviews.store') }}">
        @csrf
        <h4>評価</h4>
        <select name="score" class="form-select mb-3 text-warning">
          <option value="5">★★★★★</option>
          <option value="4">★★★★</option>
          <option value="3">★★★</option>
          <option value="2">★★</option>
          <option value="1">★</option>
        </select>
        <h4>レビュー内容</h4>
        @error('content')
          <strong>レビュー内容を入力してください</strong>
        @enderror
        <textarea name="content" class="form-control"></textarea>
        <input type="hidden" name="store_id" value="{{$store->id}}"><br>
        <button type="submit" class="btn btn-success mb-5">レビューを追加</button>
      </form>
      @endauth
    </div>
  </div>

  <div class="row">
    <div class="col m-5">
      @foreach($reviews as $review)
      <h3>{{ $review->user->user_name }}</h3>
      <h3 class="text-warning">{{ str_repeat('★', $review->score) }}</h3>
      <p>{{ $review->content }}</p>
      <label>
        {{$review->created_at}}
      </label>
      <hr>
      @endforeach
    </div>
  </div>
</div>

@endsection