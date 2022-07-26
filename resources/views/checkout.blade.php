<x-guest-layout>
    <x-slot name="header">

        <!-- component -->
        <script src="//unpkg.com/alpinejs" defer></script>

    <div class="h-screen grid grid-cols-3">
        <div class="lg:col-span-2 col-span-3 bg-indigo-50 space-y-8 px-12">
            <div class="rounded-md">
            <form action="{{ route ('placeorder') }}" method="POST">
            @csrf
                    <section>
                        <h2 class="uppercase tracking-wide text-lg font-semibold text-gray-700 my-2">Shipping & Billing Information</h2>
                        <fieldset class="mb-3 bg-white shadow-lg rounded text-gray-600">
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">Full Name</span>
                                <input name="fname" class="focus:outline-none px-3" placeholder="Try Odinsson" required="">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">Email</span>
                                <input name="email" type="email" class="focus:outline-none px-3" placeholder="try@example.com" required="">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">Address</span>
                                <input name="address" class="focus:outline-none px-3" placeholder="10 Street XYZ 654">
                            </label>
                            <label class="flex border-b border-gray-200 h-12 py-3 items-center">
                                <span class="text-right px-2">City</span>
                                <input name="city" class="focus:outline-none  px-3" placeholder="San Francisco">
                            </label>
                            <label class="inline-flex w-2/4 border-gray-200 py-3">
                                <span class="text-right px-2">State</span>
                                <input name="state" class="focus:outline-none px-3" placeholder="CA">
                            </label>
                            <label class="xl:w-1/4 xl:inline-flex py-3 items-center flex xl:border-none border-t border-gray-200 py-3">
                                <span class="text-right px-2 xl:px-0 xl:text-none">ZIP</span>
                                <input name="zip" class="focus:outline-none px-3" placeholder="98603">
                            </label>
                        </fieldset>
                    </section>
            </div>
            <button type="submit" class="submit-button px-4 py-3 rounded-full bg-pink-400 text-white focus:ring focus:outline-none w-full text-xl font-semibold transition-colors">
                Submit
            </button>
            <button id="rzp-button1" class="submit-button px-4 py-3 rounded-full bg-pink-400 text-white focus:ring focus:outline-none w-full text-xl font-semibold transition-colors" >Pay via Razorpay</button>
            <button id="paypal-button-container">Paypal</button>
            <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
            <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>
            </form>
        </div>
        <div class="col-span-1 bg-white lg:block hidden">
            <h1 class="py-6 border-b-2 text-xl text-gray-600 px-8">Order Summary</h1>
            <?php $total_price = 0; ?>
            @foreach ($userCartItems as $item)

            <ul class="py-6 border-b space-y-6 px-8">
                <li class="grid grid-cols-6 gap-2 border-b-1">
                    <div class="col-span-1 self-center">
                        <img src="https://bit.ly/3oW8yej" alt="Product" class="rounded w-full">
                    </div>
                    <div class="flex flex-col col-span-3 pt-2">
                        <span class="text-gray-600 text-md font-semi-bold">{{ $item->product->name }}</span>
                        <span class="text-gray-400 text-sm inline-block pt-2">Red Headphone</span>
                    </div>
                    <div class="col-span-2 pt-3">
                        <div class="flex items-center space-x-2 text-sm justify-between">
                            <span class="text-gray-400">{{ $item->product_quantity }}</span>
                            <span class="text-pink-400 font-semibold inline-block">$ {{ $item->product->regular_price }}</span>
                        </div>
                    </div>
                </li>
            </ul>
            @endforeach
            <div class="font-semibold text-xl px-8 flex justify-between py-8 text-gray-600">
            <?php $total_price = $total_price + ($item ['product'] ['regular_price'] * $item ['product_quantity']); ?>
                <span>Total</span>
                <span>$ {{ $total_price }}</span>
            </div>
        </div>
    </div>
        </div>
</x-guest-layout>