<?php

namespace App\DTO;

use App\Models\Comment;
use App\Models\Phone;
use Illuminate\Support\Collection;
use mysql_xdevapi\Exception;

class CommentDTO
{
    public function __construct(
        public int    $id,
        public string $phoneId,
        public string $phone,
        public string $name,
        public string $text,
        public string $date
    )
    {
    }

    public static function fromModel(Comment $model): static
    {
        return new static(
            $model->id,
            $model->id_phone,
            Phone::find($model->id_phone)->phone,
            $model->author,
            $model->text,
            $model->created_at
        );
    }

    /**
     * @param \Illuminate\Support\Collection<Comment $collection
     * @return \Illuminate\Support\Collection
     */
    public static function fromCollection(Collection $collection): Collection
    {
        return $collection->map(function (Comment $el) {
            return self::fromModel($el);
        });
    }
}
