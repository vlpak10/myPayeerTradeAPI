<?php
namespace Vlpak\MyPayeerTradeApi;
    
use Payeer\TradeApiPrototype\Payeer;
    
class MyPayeerTradeApi {
    
    private $api;

    const DEFAULT_PAIR  = 'BTC_USDT';

    public function __construct($apiId, $apiSecret) {
        $this->api = new Payeer($apiId, $apiSecret);
    }

    public function getInfo(?string $pair = null) {
        return $this->api->getInfo($pair);
    }
    
    public function getTicker(string $pair = self::DEFAULT_PAIR) {
        return $this->api->getTicker($pair);
    }
    
    public function getOrders(string $pair = self::DEFAULT_PAIR) {
        return $this->api->getOrders($pair);
    }
    
    public function getTrades(string $pair = self::DEFAULT_PAIR) {
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
