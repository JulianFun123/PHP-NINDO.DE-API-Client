<?php
namespace modules\models\nindoclient;


class Channel {
    public $api;
    
    public $id, $platform, $channelID, $userID, $avatar, $isDeleted, $isChartPlaced, $rank, $subscribers, $ageInDB;

    public function __construct($id, $platform, $channelID, $userID, $avatar, $isDeleted, $isChartPlaced, $rank, $subscribers, $ageInDB){
        $this->id = $id;
        $this->platform = $platform;
        $this->channelID = $channelID;
        $this->userID = $userID;
        $this->avatar = $avatar;
        $this->isDeleted = $isDeleted;
        $this->isChartPlaced = $isChartPlaced;
        $this->rank = $rank;
        $this->subscribers = $subscribers;
        $this->ageInDB = $ageInDB;
    }

    public function fetchStats($type){
        return json_decode(HTTPRequest::get($this->apiPrefix."/ranks/charts/".$platform."/".$filter."/".$type)->send()->getData());
    }

    
}