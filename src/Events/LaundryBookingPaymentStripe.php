<?php

namespace Zerp\Stripe\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Workdo\LaundryManagement\Models\LaundryRequest;

class LaundryBookingPaymentStripe
{
    use Dispatchable;

    public function __construct(
        public LaundryRequest $booking
    ) {}
}
