<?php

namespace App\Services\Phone;

use App\DTO\PhoneDTO;
use App\Models\Phone;

class GetPhoneChunkService
{
    public static function execute(int $chunkNumber)
    {
        $phones = Phone::orderBy("views")->get();

    }
}
