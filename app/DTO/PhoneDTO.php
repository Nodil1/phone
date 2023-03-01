<?php

namespace App\DTO;

use App\Models\Phone;
use App\Services\Grade\GetMeanRatingService;
use Cache;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class PhoneDTO
{
    /**
     * @param string $number
     * @param int $views
     * @param int $stars
     * @param Collection<CommentDTO> $comments
     */
    public function __construct(
        public string     $number,
        public int        $views,
        public int        $stars,
        public string $operator,
        public string $region,
        public Collection $comments
    )
    {
        $str = Str::title($this->operator);
        $this->number = substr($this->number, 1);
        $this->operator = str_replace('"', "", $this->operator );
    }

    public static function fromModel(Phone $model): static{
        $phoneId = $model->id;
        $phone = $model->phone;
        Cache::put("phoneModelNumber-$phoneId", $phone, 1800);
        return Cache::rememberForever("phoneDTO-$phoneId", function () use ($model){
            return new static(
                $model->phone,
                $model->views,
                GetMeanRatingService::execute($model),
                $model->operator,
                $model->region,
                CommentDTO::fromCollection($model->comments())
            );
        });

    }

    /**
     * @param Collection<Phone> $collection
     * @return Collection<static>
     */
    public static function fromCollection(Collection $collection): Collection
    {
        $col = new Collection();
        foreach ($collection as $item){
            $col[] = self::fromModel($item);
        }
        return $col;

    }
}
