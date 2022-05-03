<?php

namespace Joy\VoyagerBreadOpportunity\Database\Seeders;

use Joy\VoyagerBreadOpportunity\Models\Opportunity;
use Illuminate\Database\Seeder;

class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Opportunity::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Opportunity::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Opportunity ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Opportunity Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
