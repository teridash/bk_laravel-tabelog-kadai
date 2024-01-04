@extends('layouts.app')

@section('content')
<div class="w-50">
  <h1>会員情報の編集</h1>
  <hr>
  <form method="POST" action="{{ route('mypage') }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
      <label for="name" class="">氏名</label>
      <input id="name" type="text" class="" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="侍 太郎">
      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>氏名を入力してください</strong>
      </span>
      @enderror
    </div>
    <br>

    <div class="form-group">
      <label for="user_name" class="">ユーザーネーム</label>
      <input id="user_name" type="text" class="" name="user_name" value="{{ $user->user_name }}" required autocomplete="name" autofocus placeholder="太郎">
      @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>氏名を入力してください</strong>
        </span>
      @enderror
    </div>
    <br>

    <div class="form-group">
      <label for="email" class="">メールアドレス</label>
      <input id="email" type="text" class="" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="samurai@samurai.com">
      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>メールアドレスを入力してください</strong>
      </span>
      @enderror
    </div>
    <hr>
    <button type="submit" class="">保存</button>
  </form>
</div>

@endsection