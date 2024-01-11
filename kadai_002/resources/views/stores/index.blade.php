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

@foreach($stores as $store)
{{ $store -> name }}
{{ $store -> address }}
{{ $store -> category -> name }} <br>
<a href="{{ route('stores.destroy', $store->id) }}" method="POST">
<a href="{{ route('stores.show', $store->id) }}">Show</a><br>
<a href="{{ route('stores.edit', $store->id) }}">Edit</a><br>
@csrf
@method('DELETE')
<button type="submit">Delete</button><br>
@endforeach

