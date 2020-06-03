<?php


namespace Crawly\CeiLaravel;

use Crawly\CeiLaravel\Rules\Cei;

class Validator
{
    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateCei($attribute, $value, $parameters, $validator): bool
    {
        $cei = new Cei();

        return $cei->validate($value);
    }
}
