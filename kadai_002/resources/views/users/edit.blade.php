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

  <hr>

  <div class="d-flex justify-content-start">
    <form method="POST" action="{{ route('mypage.destroy') }}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <div class="btn dashboard-delete-link" data-bs-toggle="modal" data-bs-target="#delete-user-confirm-modal">退会する</div>
      <div class="modal fade" id="delete-user-confirm-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><label>本当に退会しますか？</label></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="閉じる">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
              <div class="modal-body">
                <p class="text-center">一度退会するとデータはすべて削除され復旧はできません。</p>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn dashboard-delete-link" data-bs-dismiss="modal">キャンセル</button>
                    <button type="submit" class="btn samuraimart-delete-submit-button">退会する</button>
                </div>
          </div>
        </div>
      </div>
    </form>
  </div>

</div>
@endsection