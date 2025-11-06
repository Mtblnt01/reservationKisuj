<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'name' => 'Csumi Csá1',
            'email' => 'csumicsa1@moriczref.hu',
            'reservation_time' => '2025-12-21 12:00:00',
            'guests' => 10,
            'note' => 'partipartiparti',
        ]);

        Reservation::factory()->count(10)->create();
    }
}
