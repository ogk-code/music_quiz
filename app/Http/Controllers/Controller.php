<?php

namespace App\Http\Controllers;

use App\Http\Helpers\SearchYoutubeVideoHelper;
use App\Models\Author;
use App\Models\Player;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use YouTube\YouTubeDownloader;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function testAction()
    {
        $search = new SearchYoutubeVideoHelper();
        $items  = $search->getVideoIdArrayByQuery('eminem');
        $link   = $this->getMusicUrlForPlayer($items[random_int(0, 9)]);
        dd($link);
    }

    public function playerAction(Request $request)
    {
        $time = $request->post('time');
        return $this->playerRender($time);
    }

    private function playerRender($time)
    {
        $authors  = Author::all()->where('session', '=', $time)->toArray();
        $param    = $authors[array_rand($authors)]['name'];
        $search   = new SearchYoutubeVideoHelper();
        $items    = $search->getVideoIdArrayByQuery($param);
        $randomId = array_rand($items);
        $link     = $this->getMusicUrlForPlayer($items[$randomId]['id']);
        $players  = Player::all()->where('session', '=', $time)->toArray();

        return view('player',
            [
                'link'      => $link,
                'songTitle' => $items[$randomId]['title'],
                'players'   => $players,
                'time'      => $time,
            ]
        );

    }

    private function getMusicUrlForPlayer($videoId)
    {
        $downloader     = new YouTubeDownloader();
            $downloadOption = $downloader->getDownloadLinks($videoId);
            return $downloadOption->getAudioFormats()[1]->url;
}



    public function userFormAction(Request $request)
    {
        $data = $request->post();
        unset($data["_token"]);
        $time = time();
        foreach ($data as $value) {
            $user          = new Player();
            $user->name    = $value;
            $user->session = $time;
            $user->save();
        }
        return view('forms', ['session' => $time]);
    }

    public function authorsFormAction(Request $request)
    {
        $data = $request->post();
        unset($data["_token"]);
        $time = $data['time'];
        unset($data['time']);
        foreach ($data as $value) {
            $user          = new Author();
            $user->name    = $value;
            $user->session = $time;
            $user->save();
        }
//        return view('player', ['session' => $time]);
        return $this->playerRender($time);
    }

}
