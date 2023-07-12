<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Linked_Drivers;
use App\Models\Carrier_Packet;
use Illuminate\Http\Request;

class LinkedDriverController extends Controller
{
    public function store(Request $request, Carrier_Packet $carrier_packet)
    {
        $linked_driver = $carrier_packet->linked_drivers()->create($request->all());
        return response()->json($linked_driver, 201);
    }

    public function update(Request $request, Carrier_Packet $carrier_packet, Linked_Drivers $linked_driver)
    {
        $linked_driver->update($request->all());
        return response()->json($linked_driver);
    }

    public function destroy(Carrier_Packet $carrier_packet, Linked_Drivers $linked_driver)
    {
        $linked_driver->delete();
        return response()->json(null, 204);
    }
}
