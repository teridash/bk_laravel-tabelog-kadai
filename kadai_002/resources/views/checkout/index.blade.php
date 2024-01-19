<form id="card_form" action="{{route('checkout.store')}}" method="POST">
  @csrf
  <input id="card-holder-name" type="text">
  <div id="card-element"></div>
  <input name="payment_method" type="hidden">
</form>


<button id="card-button" data-secret="{{ $intent->client_secret }}">
    Update Payment Method
</button>

<script src="https://js.stripe.com/v3/"></script>

<script>
  const stripe = Stripe("{{env('STRIPE_KEY')}}");

  const elements = stripe.elements();
  const cardElement = elements.create('card',{hidePostalCode: true});

  cardElement.mount('#card-element');


  const cardHolderName = document.getElementById('card-holder-name');
  const cardButton = document.getElementById('card-button');
  const clientSecret = cardButton.dataset.secret;
  
  cardButton.addEventListener('click', async (e) => {
      const { setupIntent, error } = await stripe.confirmCardSetup(
          clientSecret, {
              payment_method: {
                  card: cardElement,
                  billing_details: { name: cardHolderName.value }
              }
          }
      );

      if (error) {
          console.log(error);
      } else {
        const form = document.getElementById('card_form');
        form.payment_method.value = setupIntent.payment_method;
        form.submit();
      }
  });
</script>