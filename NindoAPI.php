<?php
namespace modules\nindoclient;

use modules\httprequest\HTTPRequest;

use modules\models\nindoclient\Artist;

class NindoAPI {

    private $apiPrefix;

    public function __construct(){
        $this->apiPrefix = "https://api.nindo.de";
    }

    public function search(string $query){
        /*$out = [];

        foreach (json_decode(HTTPRequest::get($this->apiPrefix."/search/smart/".urlencode($query))->send()->getData()) as $entry) {
            $artist = new Artist($entry->id, $entry->name, $entry->avatar, $entry->_channels, $entry->_genres);
            
            array_push($out, $artist);
        }*/
        
        return json_decode(HTTPRequest::get($this->apiPrefix."/search/smart/".urlencode($query))->send()->getData());
    }

    public function fetchArtistById($id) : Artist
    {
        $entry = json_decode(HTTPRequest::get($this->apiPrefix."/artist/".urlencode($id))->send()->getData());
        return new Artist($this, $entry->id, $entry->name, $entry->avatar, $entry->_channels, $entry->_genres);
    }

    public function getChart($platform, $filter = "rank", $type = "big"){
        return json_decode(HTTPRequest::get($this->apiPrefix."/ranks/charts/".$platform."/".$filter."/".$type)->send()->getData());
    }

}