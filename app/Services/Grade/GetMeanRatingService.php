<?php

namespace App\Services\Grade;

use App\Models\Phone;
use Ramsey\Collection\Collection;

class GetMeanRatingService
{

    public static function execute(Phone $phone): int
    {
        $grades = $phone->grades();
        if ($grades->count() > 0) {
            $sum = 0;
            foreach ($grades as $grade) {
                $sum += $grade->value;
            }
            return (int)($sum / $grades->count());
        } else{
            return 0;
        }

    }
}
