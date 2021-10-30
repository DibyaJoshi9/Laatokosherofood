<?php


namespace App\Services;

use App\Http\Daos\PagesDao;

class HomeService
{
    public function __construct(

        PagesDao $pageDao


    ) {

        $this->pageDao = $pageDao;
    }


    public function getPageDetail($slug)
    {
        // print_r($slug);exit;
        return $this->pageDao->findBySlug($slug);
    }
}
