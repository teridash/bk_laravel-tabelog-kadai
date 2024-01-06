{{ $store -> name }}

<a href="{{ route('reservations.create', ['store_id' => $store->id]) }}">予約</a>

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