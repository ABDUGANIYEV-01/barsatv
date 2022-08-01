<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ballnew
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $body
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ballnew whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ballnew extends Model
{
    protected $table = "ballnew";
    use HasFactory;
}

