<?php
namespace modules\models\nindoclient;

use modules\models\nindoclient\Channel;

class Artist {

    public $api;

    public $id;
    public $name;
    public $avatar;
    public $channels;
    public $genres;

    public function __construct($api, $id, $name, $avatar, $channels, $genres){
        $this->api = $api;
        $this->id = $id;
        $this->name = $name;
        $this->avatar = $avatar;
        $this->genres = $genres;

        $this->channels = [];
        foreach ($channels as $channel){
            $this->channels[$id] = new Channel(
                $this->api,
                $id,
                $channel->platform,
                $channel->channelID,
                $channel->userID,
                $channel->avatar,
                $channel->platform,
                $channel->isDeleted,
                $channel->isChartPlaced,
                $channel->rank,
                $channel->subscribers,
                $channel->ageInDB
            );
        
        }
    }

    public function getChannel($id) {
        return isset($this->channels[$id]) ? $this->channels[$id] : null;
    }
}