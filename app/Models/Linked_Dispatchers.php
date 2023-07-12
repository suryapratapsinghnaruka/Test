<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linked_Dispatchers extends Model
{
    use HasFactory;
    protected $table = 'linked_dispatchers';

    protected $fillable = [
        'carrier_packet_id',
        'DispatcherName',
        'PhoneNumber',
        'Email',
    ];

    public function carrier_packet(){
        return $this->belongsTo(Carrier_Packet::class, 'carrier_packet_id');
    }
}
