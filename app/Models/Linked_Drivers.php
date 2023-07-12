<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linked_Drivers extends Model
{
    use HasFactory;
    protected $table = 'linked_drivers';
    protected $fillable = [
        'carrier_packet_id',
        'DriverName',
        'PhoneNumber',
        'Email',
    ];
    public function carrier_packet(){
        return $this->belongsTo(Carrier_Packet::class, 'carrier_packet_id');
    }
}
