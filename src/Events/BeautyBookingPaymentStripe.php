<?php

namespace Zerp\Stripe\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\BeautySpaManagement\Models\BeautyBooking;

class BeautyBookingPaymentStripe
{
    use Dispatchable;

    public function __construct(
        public BeautyBooking $booking
    ) {}
}
