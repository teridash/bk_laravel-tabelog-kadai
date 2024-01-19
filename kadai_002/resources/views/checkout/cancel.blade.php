<form id="card_form" action="{{route('checkout.delete')}}" method="POST">
  @csrf
<button type="submit">有料会員をやめる</button>
</form>