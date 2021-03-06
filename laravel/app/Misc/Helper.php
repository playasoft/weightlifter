<?php

namespace App\Misc;

class Helper
{
    static public $moneyFormat = 'regex:/^\$?[0-9.,]+$/';

    static public function filterFloat($input)
    {
        return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    static public function makeDropdown($collection, $value, $text)
    {
        $output = [];

        foreach($collection as $item)
        {
            $output[$item->{$value}] = $item->{$text};
        }

        return $output;
    }
}
