<?php

namespace App\Enums;

class OrderStatus
{
    public const PENDING = 'Pending';
    public const SENT = 'Sent';
    public const COMPLETED = 'Completed';
    public const CANCELED = 'Canceled';

    public const TYPES = [
        self::PENDING => 'Pending',
        self::SENT => 'Sent',
        self::COMPLETED => 'Completed',
        self::CANCELED => 'Canceled'
    ];
}
