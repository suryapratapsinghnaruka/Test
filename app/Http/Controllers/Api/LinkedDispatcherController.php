<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Linked_Dispatchers;
use App\Models\Carrier_Packet;
use Illuminate\Http\Request;

class LinkedDispatcherController extends Controller
{
    public function store(Request $request, Carrier_Packet $carrier_packet)
    {
        $linked_dispatcher = $carrier_packet->linked_dispatchers()->create($request->all());
        return response()->json($linked_dispatcher, 201);
    }

    public function update(Request $request, Carrier_Packet $carrier_packet, Linked_Dispatchers $linked_dispatcher)
    {
        $linked_dispatcher->update($request->all());
        return response()->json($linked_dispatcher);
    }

    public function destroy(Carrier_Packet $carrier_packet, Linked_Dispatchers $linked_dispatcher)
    {
        $linked_dispatcher->delete();
        return response()->json(null, 204);
    }
}

