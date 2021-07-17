<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
/**
 * Class Category
 *
 * @property bigint $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;

    public function articles()
  	{
  		return $this->hasMany(Article::class);
  	}
}
