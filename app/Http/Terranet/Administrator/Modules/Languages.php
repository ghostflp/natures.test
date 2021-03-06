<?php

namespace App\Http\Terranet\Administrator\Modules;

use Terranet\Administrator\Contracts\Module\Editable;
use Terranet\Administrator\Contracts\Module\Filtrable;
use Terranet\Administrator\Contracts\Module\Navigable;
use Terranet\Administrator\Contracts\Module\Sortable;
use Terranet\Administrator\Contracts\Module\Validable;
use Terranet\Administrator\Scaffolding;
use Terranet\Administrator\Traits\Module\HasFilters;
use Terranet\Administrator\Traits\Module\HasForm;
use Terranet\Administrator\Traits\Module\HasSortable;
use Terranet\Administrator\Traits\Module\ValidatesForm;
use Terranet\Localizer\Models\Language;

/**
 * Administrator Module Languages
 *
 * @package Terranet\Administrator
 */
class Languages extends Scaffolding implements Navigable, Filtrable, Editable, Validable, Sortable
{
    use HasFilters, HasForm, HasSortable, ValidatesForm;

    /**
     * The module Eloquent model
     *
     * @var string
     */
    protected $model = Language::class;

    /**
     * The module title
     *
     * @return mixed
     */
    public function title()
    {
        return trans("administrator::module.resources.languages");
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
     * Attributes assigned to <a> element
     *
     * @return mixed
     */
    public function linkAttributes()
    {
        return ['icon' => 'fa fa-code-fork'];
    }
}
