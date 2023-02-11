<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ccxt;

class Exchanger extends Controller
{
    public function fetch_balance($id, $key, $secret){
      $exchange = $this->connect($id, $key, $secret);
      return $exchange->fetch_balance();
    }

    public function fetch_free_balance($id, $key, $secret){
      $exchange = $this->connect($id, $key, $secret);
      $balance = $exchange->fetch_balance();
      return $balance->free;
    }

    public function load_markets($id, $key, $secret){
      $exchange = $this->connect($id, $key, $secret);

      return $exchange->load_markets();
    }

    private function connect($id, $key, $secret){
      $exchange_class = "\\ccxt\\$id";
      return new $exchange_class (array (
          'apiKey' => $key,
          'secret' => $secret,
      ));
    }
}
