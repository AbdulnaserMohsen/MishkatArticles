<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

/**
 * Class Article
 *
 * @property bigint $id
 * @property string $title
 * @property text $image
 * @property text $content
 * @property bigint $category_id
 * @property bigint $admin_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */

class Article extends Model
{
    protected $table = 'articles';
    use HasFactory;

    public function admin()
  	{
  		return $this->belongsTo(User::class);
  	}
    public function category()
  	{
  		return $this->belongsTo(Category::class);
  	}
    public function comments()
  	{
  		return $this->hasMany(Comment::class);
  	}
}
