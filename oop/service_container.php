<?php

interface GeolocationService {
    public function getCoordinatesFromAddress($address);
}

class GoogleMaps implements GeolocationService 

{ }

class OpenStreetMap implements GeolocationService 
{ }



class StoreService {
    private $geolocationService;

    public function __construct(GeolocationService $geolocationService) {
        $this->geolocationService = $geolocationService;
    }

    public function getStoreCoordinates($store) {

        return $this->geolocationService->getCoordinatesFromAddress($store->getAddress());
    }
}

//cách 1 

$geolocationService = new GoogleMaps();
$storeService = new StoreService($geolocationService);

//cách 2
$container = new Container();


//and configure which GeolocationService PHP-DI should automatically inject in StoreService through configuration:
$container->set('GeolocationService', \DI\create('GoogleMaps'));

$storeService = $container->get('StoreService');







//http://php-di.org/doc/understanding-di.html