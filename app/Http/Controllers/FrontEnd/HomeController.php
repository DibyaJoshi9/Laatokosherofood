<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Services\HomeService;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function __construct(HomeService $homeService){
      
        $this->homeService = $homeService;

    }

    public function getPage(Request $request, $slug = null)
    {

        if (!$slug) {
            $slug = $request->segments()[0];
        }

        $data = $this->homeService->getPageDetail($slug);

        if (!$data) {
            return view('frontend::pages.404');
        }
        try {
            return view('frontend::pages.' . $slug, $data);
        } catch (\Exception $e) {
            return view('frontend::pages.general', $data);
        }
    }

    public function index(){
        return view('frontend.home');
    }

    public function aboutUs()
    {
        return view('frontend.content.aboutus');
    }
    public function contactUs(){
        return view('frontend.content.contactus');
    }
}
