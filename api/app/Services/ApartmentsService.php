<?php

namespace App\Services;

use App\Models\Apartment;

class ApartmentsService
{
    public function find(array $params = [])
    {
        if (isset($params['name'])) {
            $params['name'] = "LIKE '%{$params['name']}%'";
        }
        $result = Apartment::where($params)->get();

        return $result;
    }
}