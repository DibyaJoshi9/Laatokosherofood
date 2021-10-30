<?php


if(!function_exists('getThumbnail'))
{
    function getThumbnail($image,$type = 'cropped')
    {
        // We need to get extension type ( .jpeg , .png ...)
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $toRemove = '.'.$ext;
        $name = explode($toRemove,$image)[0];
//         dd($name);
        // We merge original name + type + extension
        return $name.'-'.$type.'.'.$ext;
    }
}


if(!function_exists('makeUrl'))
{
    function makeUrl($url)
    {
            $components = parse_url($url);
            return (empty($components['host']))?env('APP_URL').$url:$url;
    }
}

if(!function_exists('makeArchives')){
    function makeArchives($dateArray) {
        $newDate = array();
        foreach($dateArray as $date)
        {

            $newDate[] = $date->created_at->format('F Y');

        }
        $newDate = array_unique($newDate);
        $archives = [];
        foreach ($newDate as $d)
        {
            $archives[] = ['title'=>$d,'slug'=>str_replace(' ','-',$d)];
        }
        return $archives;
    }
}

if(!function_exists('makeDepartureArchives')){
    function makeDepartureArchives($dateArray) {
        $newDate = array();
        foreach($dateArray as $date)
        {

            $newDate[] = $date->start_date->format('F Y');

        }
        $newDate = array_unique($newDate);
        $archives = [];
        foreach ($newDate as $d)
        {
            $archives[] = ['title'=>$d,'slug'=>str_replace(' ','-',$d)];
        }
        return $archives;
    }
}

function current_page($uri){
    
    if($uri != '/'){
        $uri = ltrim($uri,'/');
    }
    return request()->path() == $uri;
    // return strstr(request()->path(),$uri);
}

function get_image($path , $w=null,$h=null)
{
    $pathArray = explode("/", $path);
    $pathArray=array_filter($pathArray);

    $image = array_pop($pathArray );
    $imagePath = '/'.$image.'?path='.implode('/',$pathArray);
    if ($w){
        $imagePath.='&w='.$w;
    }
    if ($h)
    {
        $imagePath.='&h='.$h;
    }
    if ($w && $h)
    {
        $imagePath.='&fit=crop';
    }
    return url('rimg'.$imagePath);
}


