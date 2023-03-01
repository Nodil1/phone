<?php

namespace App\Services\Phone;

use App\Models\Phone;

class GetPhonePageCountService
{
    public static function execute(int $itemsPerPage = 50): int
    {
        return (int)(Phone::orderBy("views","DESC")->limit(500)->get()->count() / $itemsPerPage);
    }
}
