<?php


namespace App\Http\ViewComposers\Front;

use App\Http\Daos\BranchDao;
use Illuminate\View\View;

class LogoPageViewComposer
{

    public function __construct(BranchDao $branchDao)
    {
     $this->branchDao = $branchDao;



    }

    public function compose(View $view)
    {
      $view->with('branch_name',$this->branchDao->getActiveBranchName());
     
     }

}
