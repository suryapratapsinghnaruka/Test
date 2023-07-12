<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Carrier_Packet;
use Illuminate\Http\Request;

class CarrierPacketController extends Controller
{
    public function index()
    {
        $carrier_packets = Carrier_Packet::with('linked_dispatchers', 'linked_drivers')->get();
        return response()->json($carrier_packets);
    }

    public function store(Request $request)
    {
        $NortheastRegionValues = $request->input('NortheastRegion');
$NortheastRegionString = $NortheastRegionValues ? implode(', ', $NortheastRegionValues) : null;

$MidwestRegionValues = $request->input('MidwestRegion');
$MidwestRegionString = $MidwestRegionValues ? implode(', ', $MidwestRegionValues) : null;

$SouthRegionValues = $request->input('SouthRegion');
$SouthRegionString = $SouthRegionValues ? implode(', ', $SouthRegionValues) : null;

$WestRegionValues = $request->input('WestRegion');
$WestRegionString = $WestRegionValues ? implode(', ', $WestRegionValues) : null;

$CertificationsValues = $request->input('Certifications');
$CertificationsString = $CertificationsValues ? implode(', ', $CertificationsValues) : null;

$TruckClassesValues = $request->input('TruckClasses');
$TruckClassesString = $TruckClassesValues ? implode(', ', $TruckClassesValues) : null;

$CargoHauledValues = $request->input('CargoHauled');
$CargoHauledString = $CargoHauledValues ? implode(', ', $CargoHauledValues) : null;

$ModesValues = $request->input('Modes');
$ModesString = $ModesValues ? implode(', ', $ModesValues) : null;

$carrierPacketData = $request->all();
$carrierPacketData['NortheastRegion'] = $NortheastRegionString;
$carrierPacketData['MidwestRegion'] = $MidwestRegionString;
$carrierPacketData['SouthRegion'] = $SouthRegionString;
$carrierPacketData['WestRegion'] = $WestRegionString;
$carrierPacketData['Certifications'] = $CertificationsString;
$carrierPacketData['TruckClasses'] = $TruckClassesString;
$carrierPacketData['CargoHauled'] = $CargoHauledString;
$carrierPacketData['Modes'] = $ModesString;

$carrierPacket = Carrier_Packet::create($carrierPacketData);


        
        return response()->json($carrierPacket, 201);
    }

    public function show(Carrier_Packet $carrier_packet)
    {
        return response()->json($carrier_packet);
    }

    public function update(Request $request, Carrier_Packet $carrier_packet)
    {
        $carrier_packet->update($request->all());
        return response()->json($carrier_packet);
    }

    public function destroy(Carrier_Packet $carrier_packet)
    {
        $carrier_packet->delete();
        return response()->json(null, 204);
    }
}
