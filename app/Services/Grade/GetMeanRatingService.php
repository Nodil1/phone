<?php

namespace App\Services\Grade;

use App\Models\Phone;
use Ramsey\Collection\Collection;

class GetMeanRatingService
{

    public static function execute(Phone $phone): int
    {
        $grades = $phone->grades();
        $sum = 0;
        foreach ($grades as $grade){
            $sum += $grade->value;
        }
        return (int)($sum / $grades->count());
    }
}
