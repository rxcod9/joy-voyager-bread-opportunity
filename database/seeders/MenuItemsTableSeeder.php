<?php

namespace Joy\VoyagerBreadOpportunity\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run($parentMenuId = null)
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $maxOrder = MenuItem::max('order') ?? 1;
    
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-bread-opportunity::seeders.menu_items.opportunities'),
            'url'     => '',
            'route'   => 'voyager.opportunities.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread voyager-bread-opportunity',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => $maxOrder++,
            ])->save();
        }
    }
}
