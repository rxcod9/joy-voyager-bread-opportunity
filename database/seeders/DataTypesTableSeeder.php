<?php

namespace Joy\VoyagerBreadOpportunity\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'opportunities');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'opportunities',
                'display_name_singular' => __('joy-voyager-bread-opportunity::seeders.data_types.opportunity.singular'),
                'display_name_plural'   => __('joy-voyager-bread-opportunity::seeders.data_types.opportunity.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadOpportunity\\Models\\Opportunity',
                // 'policy_name'           => 'Joy\\VoyagerBreadOpportunity\\Policies\\OpportunityPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadOpportunity\\Http\\Controllers\\VoyagerBreadOpportunityController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
