@extends('layouts.app')

@section('content')
<div class="w-50">
  <h1>マイページ</h1>
  <hr>
  <div class="row">
    <a href="{{ route('mypage.edit') }}">プロフィール編集</a>
    <a href="{{ route('mypage') }}">予約履歴</a>
    <a href="{{ route('mypage.edit_password') }}">パスワード変更</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
  </div>
</div>
@endsection