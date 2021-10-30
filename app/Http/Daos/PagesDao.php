<?php

namespace App\Http\Daos;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Page;

class PagesDao extends BaseDao
{
	public function __construct(Page $page)
	{
		$this->model = $page;
	}

	public static function getActivePages()
	{
		return Page::where('status','ACTIVE')->get();
	}

	public function findBySlug($slug)
	{
	    return $this->model->where('status','ACTIVE')->where('slug',$slug)->first();
	}

}