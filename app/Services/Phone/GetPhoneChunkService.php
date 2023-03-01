<?php

namespace App\Services\Phone;

use App\DTO\PhoneDTO;
use App\Models\Phone;
use Cache;
use Illuminate\Support\Collection;

class GetPhoneChunkService
{
    /**
     * @param int $count
     * @param int $page
     * @return Collection
     */
    public static function execute(int $count, int $page) : Collection
    {
        $phones = Phone::offset($count * $page)->limit($count)->orderBy("views", "DESC")->get();
        return PhoneDTO::fromCollection($phones);
    }
}
