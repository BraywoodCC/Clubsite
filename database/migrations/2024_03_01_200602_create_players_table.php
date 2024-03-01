<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            // Section 1: Player Personal Details
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('city');
            $table->string('postcode');
            $table->boolean('facebook_consent')->default(false);
            $table->boolean('whatsapp_consent')->default(false);

            // Section 2: Emergency Contact Details
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            $table->string('emergency_contact_relationship');

            // Section 3: Medical and Disability Information
            $table->text('medical_information');
            $table->boolean('medical_consent')->default(false);

            // Section 4: Player Participation Agreement
            $table->boolean('changing_showering')->default(false);
            $table->boolean('missing_children')->default(false);
            $table->boolean('social_media_consent')->default(false);
            $table->boolean('playing_in_matches')->default(false);
            $table->boolean('photography_video_consent')->default(false);
            $table->boolean('anti_bullying_code_consent')->default(false);
            $table->boolean('responsibility_agreement')->default(false);

            // Section 5: Club Photography/Video Consent
            $table->boolean('club_photography_video_consent')->default(false);

            // Section 6: Privacy Statement
            $table->boolean('privacy_policy_agreement')->default(false);

            // Section 7: Player Agreement
            $table->boolean('player_agreement')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
