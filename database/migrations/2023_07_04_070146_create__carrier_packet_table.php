<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carrier_packet', function (Blueprint $table) {
            $table->id();
            $table->string('SCAC');
            $table->string('LegalName');
            $table->string('DBAName');
            $table->string('Phone');
            $table->string('Fax');
            $table->string('EmergencyNumber');
            $table->string('CompanyEmail');
            $table->string('Address');
            $table->string('Country');
            $table->string('State');
            $table->string('City');
            $table->string('MailingAddress');
            $table->boolean('AfterHoursSupport');
            $table->string('SupportName');
            $table->time('SupportTimeForm');
            $table->time('SupportTimeTo');
            $table->string('SupportPhone');
            $table->string('SupportFax');
            $table->boolean('AvailableLoads');
            $table->boolean('DispatcherService');
            $table->string('AvailableLoadEmail');
            $table->string('OwnerName');
            $table->string('OwnerPhone');
            $table->string('OwnerEmail');
            $table->string('ClaimsName');
            $table->string('ClaimsPhone');
            $table->string('ClaimsEmail');
            $table->boolean('ExtraFreight');
            $table->boolean('TrackDrivers');
            $table->boolean('AccessOnline');
            $table->boolean('UnitedStates');
            $table->text('NortheastRegion')->nullable();
            $table->text('MidwestRegion')->nullable();
            $table->text('SouthRegion')->nullable();
            $table->text('WestRegion')->nullable();
            $table->boolean('Canada');
            $table->boolean('Mexico');
            $table->string('VehiclesNumber');
            $table->string('InterstateAndIntrastateDrivers');
            $table->string('ELDComplianceStatus');
            $table->string('ELDProvider');
            $table->text('Certifications')->nullable();
            $table->string('HazmatNumber');
            $table->string('TankerEndorsed');
            $table->text('TruckClasses')->nullable();
            $table->string('Others')->nullable();
            $table->text('CargoHauled')->nullable();
            $table->text('Modes')->nullable();
            $table->string('DOTNumber');
            $table->string('MCNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_carrier_packet');
    }
};
