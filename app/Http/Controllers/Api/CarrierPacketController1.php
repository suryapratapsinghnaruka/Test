<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Carrier_Packet;
use App\Models\Linked_Dispatchers;
use App\Models\Linked_Drivers;


class CarrierPacketController extends Controller
{
    public function add(Request $request){
       $carrier = Carrier_Packet::create($request->all());
       return response()->json($carrier, 201);
    }
}
