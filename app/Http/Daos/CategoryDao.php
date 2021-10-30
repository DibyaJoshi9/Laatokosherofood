<?php

namespace App\Http\Daos;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Page;

class CategoryDao extends BaseDao
{
	public function __construct(Category $page)
	{
		$this->model = $page;
	}

	public static function getActiveCategory()
	{
		$categories = Category::where(['status' => 1, 'parent_id' => null])
			->with('childrenRecursive', 'subCategories', 'subCategories.items')
			->get();

		return $categories;
	}
}
