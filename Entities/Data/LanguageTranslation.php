<?php

namespace Modules\Core\Entities\Data;

use Modules\Base\Classes\Datasetter;

class LanguageTranslation
{
    public $ordering = 5;

    public function data(Datasetter $datasetter)
    {
        $datasetter->add_data('core', 'language_translation', 'slug', [
            "slug" => "site-title",
            "language" => "en-us",
            "phrase" => "ERP",
        ]);
    }
}
