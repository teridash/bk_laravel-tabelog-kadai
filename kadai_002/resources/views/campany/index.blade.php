@extends('layouts.app')

@section('content')
<div>
  <h1>会社情報</h1>
</div>
<div>
  <a>会社名</a>
  <a>{{ $campany->name }}</a>
</div>
<div>
  <a>住所</a>
  <a>{{ $campany->address }}</a>
</div>
<div>
  <a>代表者</a>
  <a>{{ $campany->representative }}</a>
</div>
<div>
  <a>メールアドレス</a>
  <a>{{ $campany->email }}</a>
</div>
@endsection