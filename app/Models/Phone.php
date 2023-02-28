<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * App\Models\Phone
 *
 * @property int $id
 * @property string $phone
 * @property int $views
 * @property string $operator
 * @property string $region
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PhoneFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Phone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereOperator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereViews($value)
 * @mixin \Eloquent
 */
class Phone extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Support\Collection<\App\Models\Comment>
     */
    public function comments() : Collection
    {
        return Comment::where("id_phone", $this->id)->get();
    }

    /**
     * @return \Illuminate\Support\Collection<\App\Models\Grade>
     */
    public function grades(): Collection
    {
        return Grade::where("id_phone", $this->id)->get();
    }
}
