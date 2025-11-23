<?php

namespace App\Http\Controllers;

use App\Models\PriceSetting;
use Illuminate\Http\Request;

class PriceSettingController extends Controller
{
    /**
     * Show the form for editing the price settings.
     */
    public function edit()
    {
        $priceSetting = PriceSetting::getInstance();
        return view('dashboard.price-settings.edit', compact('priceSetting'));
    }

    /**
     * Update the price settings in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'additional_amount' => 'required|numeric|min:0',
            'commission' => 'required|numeric|min:0',
            'shipping_price' => 'required|numeric|min:0',
        ]);

        $priceSetting = PriceSetting::getInstance();
        $priceSetting->update($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Price settings updated successfully.']);
        }

        return redirect()->route('price-settings.edit')
            ->with('success', 'Price settings updated successfully.');
    }
}

