<?php
    
use Payeer\TradeApiPrototype\Payeer;
    
class Api {
    
    private $api;

    public function __construct(?string $apiId = null, ?string $apiSecret = null) {
        $this->api = new Payeer($apiId, $apiSecret);
    }

    public function getInfo($pair) {
        return $this->api->getInfo($pair);
    }
    
    public function getTicker($pair) {
        return $this->api->getTicker($pair);
    }
    
    public function getOrders($pair) {
        return $this->api->getOrders($pair);
    }
    
    public function getTrades($pair) {
        return $this->api->getTrades($pair);
    }
    
    public function getAccount() {
        return $this->api->getAccount();
    }
    
    public function createOrder(array $params = []) {
        return $this->api->createOrder($params);
    }
    
    public function getOrderStatus(array $params = []) {
        return $this->api->getOrderStatus($params);
    }
    
    public function cancelOrder(array $params = []) {
        return $this->api->cancelOrder($params);
    }
    
    public function cancelOrders(array $params = []) {
        return $this->api->cancelOrders($params);
    }
    
    public function getMyOrders(array $params = []) {
        return $this->api->getMyOrders($params);
    }
    
    public function getMyTrades(array $params = []) {
        return $this->api->getMyTrades($params);
    }
}
