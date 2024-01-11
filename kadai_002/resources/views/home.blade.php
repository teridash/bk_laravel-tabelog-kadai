@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

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
@endsection
