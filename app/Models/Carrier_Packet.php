<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier_Packet extends Model
{
    use HasFactory;
    protected $table = 'carrier_packet';

    protected $fillable = [
        'SCAC',
        'LegalName',
        'DBAName',
        'Phone',
        'Fax',
        'EmergencyNumber',
        'CompanyEmail',
        'Address',
        'Country',
        'State',
        'City',
        'MailingAddress',
        'AfterHoursSupport',
        'SupportName',
        'SupportTimeForm',
        'SupportTimeTo',
        'SupportPhone',
        'SupportFax',
        'AvailableLoads',
        'DispatcherService',
        'AvailableLoadEmail',
        'OwnerName',
        'OwnerPhone',
        'OwnerEmail',
        'ClaimsName',
        'ClaimsPhone',
        'ClaimsEmail',
        'ExtraFreight',
        'TrackDrivers',
        'AccessOnline',
        'UnitedStates',
        'NortheastRegion',
        'MidwestRegion',
        'SouthRegion',
        'WestRegion',
        'Canada',
        'Mexico',
        'VehiclesNumber',
        'InterstateAndIntrastateDrivers',
        'ELDComplianceStatus',
        'ELDProvider',
        'Certifications',
        'HazmatNumber',
        'TankerEndorsed',
        'TruckClasses',
        'Others',
        'CargoHauled',
        'Modes',
        'DOTNumber',
        'MCNumber',
    ];
    public function linked_dispatchers(){
        return $this->hasMany(Linked_Dispatchers::class);
    }
    public function linked_drivers(){
        return $this->hasMany(Linked_Drivers::class);
    }
}
