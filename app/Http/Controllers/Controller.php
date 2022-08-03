<?php

namespace App\Http\Controllers;

use App\Http\Helpers\SearchYoutubeVideoHelper;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use YouTube\YouTubeDownloader;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function testAction(){
        $search = new SearchYoutubeVideoHelper();
        $items = $search->getVideoIdArrayByQuery('eminem');
        $link = $this->getMusicUrlForPlayer($items[random_int(0,10)]);
        dd($link);
    }

    private function getMusicUrlForPlayer($videoId){
        $downloader = new YouTubeDownloader();
        $downloadOption =  $downloader->getDownloadLinks($videoId);
        return $downloadOption->getAudioFormats()[1]->url;

    }
}
