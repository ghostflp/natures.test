<?php

namespace App\Http\Terranet\Administrator\Modules;

use Terranet\Options\Option;
use Terranet\Administrator\Scaffolding;
use Terranet\Administrator\Traits\Module\HasOptions;
use Terranet\Administrator\Contracts\Module\Editable;
use Terranet\Administrator\Contracts\Module\Navigable;
use Terranet\Administrator\Contracts\Module\Validable;
use Terranet\Administrator\Traits\Module\ValidatesOptions;

class Settings extends Scaffolding implements Navigable, Editable, Validable
{
    use HasOptions, ValidatesOptions;

    protected $model = Option::class;

    /**
     * The module url
     *
     * @return mixed
     */
    public function url()
    {
        return 'settings';
    }

    /**
     * The module title
     *
     * @return mixed
     */
    public function title()
    {
        return trans("administrator::module.resources.settings");
    }

    /**
     * Navigation group which Resource belongs to
     *
     * @return string
     */
    public function group()
    {
        return null;
    }

    /**
     * Navigation container which Resource belongs to
     * Available: sidebar, tools
     *
     * @return mixed
     */
    public function navigableIn()
    {
        return Navigable::MENU_TOOLS;
    }

    public function linkAttributes()
    {
        return ['icon' => 'fa fa-gears'];
    }
}
