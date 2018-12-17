<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  /**
   * The attributes that are mass assignable
   *
   * @var array
   */
  protected $fillable = ['title','description','author_id'];

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['create_at','update_at'];

  public function author()
  {
      return $this->belongsTo(Author::class);
  }

}
