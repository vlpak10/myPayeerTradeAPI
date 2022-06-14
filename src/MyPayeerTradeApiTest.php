<?php
namespace Vlpak\MyPayeerTradeApi;
    
use PHPUnit\Framework\TestCase;

//use Vlpak\MyPayeerTradeApi\Api;

//require_once 'Api.php';

class MyPayeerTradeApiTest extends TestCase {
    
    public function testGetInfo()
    {
        $api = new MyPayeerTradeApi("280cd546-b70d-4b5c-b7b5-a13e3eef2ddb", "9hxwtg5rYLXUZAJ6");
        $resGetAccount = $api->getAccount();
    
        
    }
}
