<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<x-app-layout>
<div class="flex row">
    <div class="p-4  mx-auto">
        <form action="{{route('processPayment', [$id])}}" method="POST" id="subscribe-form">

            <div>
                <h2 class="text-2xl">Dear {{$user->name}}, please proceed the payment</h2>
            </div>

            <div class="form-group p-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="subscription-option">
                            <label for="plan-silver">
                                <span class="plan-price text-xl">Product: {{$product}}</span>
                                <span class="plan-price text-xl ">Price: {{$price}}</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <label for="card-holder-name">Card Holder Name</label>
            <input id="card-holder-name" type="text" value="{{$user->name}}" disabled>
            @csrf
            <div class="form-row p-4">
                <label for="card-element"  class="w-96">Credit or debit card</label>
                <div  id="card-element" class="w-96"> </div>
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <div class="stripe-errors"></div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            <div class="form-group text-center m-4">
                <x-jet-button type="button"  id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-lg btn-success btn-block bg-green-600 hover:bg-lime-400 w-96">Pay Article</x-jet-button>
            </div>
        </form>
        <div class="text-center m-4">
            <a href="{{ url()->previous() }}"><x-jet-button class="btn btn-lg btn-success btn-block w-96 ">Back</x-jet-button></a>
        </div>
    </div>
    <div>


    </div>

</div>




<script src="https://js.stripe.com/v3/"></script>
<script>

    {{--var stripe = Stripe('{{ env('STRIPE_KEY') }}');--}}
    // Hier ist der Stripe Key hardkodiert damit wir uns nicht einloggen müssen
    var stripe = Stripe('pk_test_51MbhuWBUHvpA09DtOQiKDCeiY3r65SPExwiLPQPVKiemBXJoBSYWMJK6PJ73oXwiwwNvEuXIC0cngQzYkaG8PWMw00RoSqG4x2');

    var style1 = {
        base: {
            color: '#32325d',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };


    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');

    const clientSecret = cardButton.dataset.secret;    cardButton.addEventListener('click', async (e) => {
        console.log("attempting");
        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: { name: cardHolderName.value }
                }
            }
        );        if (error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;
        }
        else {
            paymentMethodHandler(setupIntent.payment_method);
        }
    });


    var elements = stripe.elements({clientSecret: clientSecret});

    var card = elements.create('card', { hidePostalCode: true, style:style1});
    card.mount('#card-element');
    console.log(document.getElementById('card-element'));
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });


    function paymentMethodHandler(payment_method) {
        var form = document.getElementById('subscribe-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'payment_method');
        hiddenInput.setAttribute('value', payment_method);
        form.appendChild(hiddenInput);
        form.submit();
    }
</script>

</x-app-layout>

</body>
</html>
