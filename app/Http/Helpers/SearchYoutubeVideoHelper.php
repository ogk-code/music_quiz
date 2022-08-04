<?php

namespace App\Http\Helpers;

use Google;

class SearchYoutubeVideoHelper
{

    private Google\Client $client;

    public function __construct()
    {
        $client = new Google\Client();
        $client->setDeveloperKey(env('API_KEY'));
        $client->addScope(Google\Service\YouTube::YOUTUBE_READONLY);
        $this->client = $client;
    }

    /**
     * @param string $query
     *
     * @return array
     */
    public function getVideoIdArrayByQuery(string $query): array
    {
        $service     = new Google\Service\YouTube($this->client);
        $queryParams = [
            'maxResults' => 10,
            'q'          => $query,
        ];

        $response = $service->search->listSearch('snippet', $queryParams);

        return array_map(function ($item) {
            return $item->id->videoId;
        }, $response->getItems());
    }
}
