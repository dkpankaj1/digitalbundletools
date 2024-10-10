<?php
// app/Enums/PaymentStatus.php
namespace App\Enums;

enum PaymentStatus: string
{
    case PENDING = 'PENDING';
    case COMPLETED = 'COMPLETED';
    case FAILED = 'FAILED';
    case REFUNDED = 'REFUNDED';
    case CANCELLED = 'CANCELLED';

    // Optional: Add a method to return an array of all statuses
    public static function all(): array
    {
        return [
            self::PENDING,
            self::COMPLETED,
            self::FAILED,
            self::REFUNDED,
            self::CANCELLED,
        ];
    }
}
