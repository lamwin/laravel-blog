<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	public function blogs()
	{
		return $this->hasMany('App\Blog');
	}

	public function getBlogsAttribute()
    {
        $blogs = $this->blogs()->getQuery()->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

	protected $guarded = [];
}
