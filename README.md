# PHP NINDO.DE API-Client

```php
$nindo = new NindoAPI();
foreach ($nindo->search("awesomeguy") as $searchResult) {
    $artist = $nindo->fetchArtistById($searchResult->id);

    echo $artist->name;
}
```