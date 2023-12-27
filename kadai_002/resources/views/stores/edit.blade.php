<div>
  <h2>Edit Store</h2>
</div>

<div>
  <select name="category_id">
    @foreach ($categories as $category)
      @if ($category->id == $store->category_id)
      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
      @else
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endif
    @endforeach
  </select>
</div>