<?php

namespace Zerp\Stripe\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\ParkingManagement\Models\ParkingBooking;

class ParkingBookingPaymentStripe
{
    use Dispatchable;

     public function __construct(
        public ParkingBooking $booking
    ) {}
}