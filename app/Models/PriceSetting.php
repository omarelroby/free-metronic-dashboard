<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceSetting extends Model
{
    protected $fillable = [
        'additional_amount',
        'commission',
        'shipping_price',
    ];

    protected $casts = [
        'additional_amount' => 'decimal:2',
        'commission' => 'decimal:2',
        'shipping_price' => 'decimal:2',
    ];

    /**
     * Get the singleton instance or create one if it doesn't exist
     */
    public static function getInstance()
    {
        $instance = self::first();
        if (!$instance) {
            $instance = self::create([
                'additional_amount' => 0,
                'commission' => 0,
                'shipping_price' => 0,
            ]);
        }
        return $instance;
    }
}

