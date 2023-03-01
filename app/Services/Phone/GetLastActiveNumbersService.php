<?php

namespace App\Services\Phone;

use App\DTO\PhoneDTO;
use App\Models\Comment;
use Cache;
use Illuminate\Support\Collection;

class GetLastActiveNumbersService
{
    /**
     * @return Collection<PhoneDTO>
     */
    public static function execute(): Collection
    {
        $lastComments = Cache::remember("lastComments", 120, function (){
            return Comment::orderBy("created_at", "DESC")
                ->limit(10)
                ->select(['id_phone', 'created_at'])
                ->groupBy("id_phone", "created_at")
                ->get();
        });
        return $lastComments->map(function (Comment $item){
           return PhoneDTO::fromModel($item->phone());
        });
    }
}
