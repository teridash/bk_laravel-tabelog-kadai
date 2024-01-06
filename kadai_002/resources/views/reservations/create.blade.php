{{ $user_name }}

<form action="{{ route('reservations.store') }}" method="POST">
@csrf
  <input type="number" name="number_of_people">
  <input type="date" name="date">
  <input type="number" name="time">
  <input type="hidden" name="store_id" value="{{ $store_id }}">
  <button type="submit">予約</button>
</form>