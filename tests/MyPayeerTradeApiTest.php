<?php
namespace Vlpak\MyPayeerTradeApi\Tests;
    
use PHPUnit\Framework\TestCase;

use Vlpak\MyPayeerTradeApi\MyPayeerTradeApi;

class MyPayeerTradeApiTest extends TestCase {
    
    private $apiId = "280cd546-b70d-4b5c-b7b5-a13e3eef2ddb";
    private $apiSecret ="9hxwtg5rYLXUZAJ6";
    
    public function testGetInfo()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        $resGetAccount = $api->getAccount();
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testGetTicker()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        $resGetAccount = $api->getTicker();
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testGetOrders()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        $resGetAccount = $api->getOrders();
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testGetTrades()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        $resGetAccount = $api->getTrades();
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testCreateOrder()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        
        $msec = round(microtime(true) * 1000);
        
        $data = [
            'pair' => 'TRX_USD',
            'type' => 'limit',
            'action' => 'buy',
            'amount' => '10',
            'price' => '0.08',
            'ts' => $msec,
        ];
        
        $resGetAccount = $api->createOrder($data);
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testGetOrderStatus()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        
        $msec = round(microtime(true) * 1000);
        
        $data = [
            'order_id' => '37054293',
            'ts' => $msec,
        ];
        
        $resGetAccount = $api->getOrderStatus($data);
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testCancelOrder()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        
        $msec = round(microtime(true) * 1000);
        
        $data = [
            'order_id' => '36942337',
            'ts' => $msec,
        ];
        
        $resGetAccount = $api->cancelOrder($data);
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testCancelOrders()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        
        $msec = round(microtime(true) * 1000);
        
        $data = [
            'pair' => 'TRX_RUB,DOGE_RUB',
            'action' => 'buy',
            'ts' => $msec,
        ];
        
        $resGetAccount = $api->cancelOrders($data);
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testGetMyOrders()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        
        $msec = round(microtime(true) * 1000);
        
        $data = [
            'ts' => $msec,
        ];
        
        $resGetAccount = $api->getMyOrders($data);
    
        $this->assertIsArray($resGetAccount);
    }
    
    public function testGetMyTrades()
    {
        $api = new MyPayeerTradeApi($this->apiId, $this->apiSecret);
        
        $msec = round(microtime(true) * 1000);
        
        $data = [
            'limit' => 3,
            'ts' => $msec,
        ];
        
        $resGetAccount = $api->getMyTrades($data);
    
        $this->assertIsArray($resGetAccount);
    }
}
