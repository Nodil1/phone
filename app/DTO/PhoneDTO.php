<?php

namespace App\DTO;

use App\Models\Phone;
use App\Services\Grade\GetMeanRatingService;
use Illuminate\Support\Collection;

class PhoneDTO
{
    /**
     * @param string $number
     * @param int $views
     * @param int $rating
     * @param \Illuminate\Support\Collection<\App\DTO\CommentDTO> $comments
     */
    public function __construct(
        public string $number,
        public int $views,
        public int $rating,
        public Collection $comments
    )
    {

    }

    public static function fromModel(Phone $model): static{
        return new static(
            $model->phone,
            $model->views,
            GetMeanRatingService::execute($model),
            CommentDTO::fromCollection($model->comments())
        );
    }
}
