<?php

namespace App\Http\Daos;

use App\Branch;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Page;

class BranchDao extends BaseDao
{
	public function __construct(Branch $branch)
	{
		$this->model = $branch;
	}

	public  function getActiveBranchName()
	{
		return $this->model->where('status','1')->take(5)->get();
	}
}
