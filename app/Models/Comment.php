<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
/**
 * Class Article
 *
 * @property bigint $id
 * @property string $comment
 * @property bigint $articlee_id
 * @property bigint $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */

class Comment extends Model
{
    protected $table = 'comments';
    use HasFactory;
    public function user()
  	{
  		return $this->belongsTo(User::class);
  	}
    public function article()
  	{
  		return $this->belongsTo(Article::class);
  	}
}
