<?php

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;

$discord = new Discord([

    'token' => '', //Get your bot token and insert it here

]);

$discord->on('ready', function ($discord) {

  echo " ", PHP_EOL;
  echo "CC> Starting CryptoCoins Ver. 1.0...", PHP_EOL;
  echo "CC> Success! CryptoCoins running on PHP Version " . phpversion(), PHP_EOL;
  echo "CC> Avaliable at https://github.com/GovernmentPlates/CryptoCoins -- Licensed under GNU GPLv3", PHP_EOL;
  echo " ", PHP_EOL;

    // Listen for messages

    $discord->on('message', function ($message, $discord) {

        echo "{$message->author->username}: {$message->content}",PHP_EOL;

    });

});

// Bot Help Messages

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!help"){
      $message->channel->sendMessage(":moneybag: **CryptoCoins Help** \n \n`cc!info` Show the current version and details of CryptoCoins\n \n`cc!price <BTC/USD|BTC/GBP|BTC/EUR>` Shows the price of Bitcoin in either USD, GBP or EUR\n \n`cc!price <BTC/USD|BTC/GBP|BTC/EUR> <Coinbase|Kraken>` Shows the exchange-specific price of Bitcoin in either USD, GBP or EUR\n \n`cc!price <ETH/USD|ETH/GBP|ETH/EUR>` Shows the price of Ethereum in either USD, GBP or EUR\n \n`cc!price <ETH/USD|ETH/GBP|ETH/EUR> <Coinbase|Kraken>` Shows the exchange-specific price of Ethereum in either USD, GBP or EUR\n \n`cc!price <LTC/USD|LTC/GBP|LTC/EUR>` Shows the price of Litecoin in either USD, GBP or EUR\n \n`cc!price <LTC/USD|LTC/EUR> <Coinbase|Kraken>` Shows the exchange-specific price of Litecoin in either USD or EUR");
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!info"){
      $message->channel->sendMessage("\n \n:moneybag: **CryptoCoins** Accurate and up-to-date information from popular Cryptocurrencies.\n \n**CryptoCoins Version** 1.0\n \n**Author** @Dominic#5082");
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price"){
      $message->channel->sendMessage("**You need to specify a currency pair** Use ``cc!help`` for a list of avaliable currencies.");
  }
});

// BTC Network Average

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/USD"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current price for Bitcoin (BTC) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/GBP"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=GBP");
      $prices = json_decode($url);
      $value = $prices->GBP;
      $message->channel->sendMessage(":moneybag: **The current price for Bitcoin (BTC) is** £" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/EUR"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=EUR");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current price for Bitcoin (BTC) is** €" . $value);
  }
});

// Coinbase BTC Exchange

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/USD Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Bitcoin (BTC) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/GBP Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=GBP&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->GBP;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Bitcoin (BTC) is** £" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/EUR Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=EUR&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Bitcoin (BTC) is** €" . $value);
  }
});

// Kraken BTC Exchange

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/USD Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Bitcoin (BTC) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/GBP Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=GBP&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->GBP;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Bitcoin (BTC) is** £" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price BTC/EUR Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=EUR&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Bitcoin (BTC) is** €" . $value);
  }
});

// ETH Network Average

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/USD"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current price for Ethereum (ETH) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/GBP"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=GBP");
      $prices = json_decode($url);
      $value = $prices->GBP;
      $message->channel->sendMessage(":moneybag: **The current price for Ethereum (ETH) is** £" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/EUR"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=EUR");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current price for Ethereum (ETH) is** €" . $value);
  }
});

// Coinbase ETH Exchange

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/USD Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Ethereum (ETH) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/GBP Coinbase"){
      $message->channel->sendMessage(":no_entry_sign:  **Coinbase does not support GBP for Ethereum!** Try using another exchange.");
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/EUR Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=EUR&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Ethereum (ETH) is** €" . $value);
  }
});

// Kraken ETH Exchange

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/USD Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Ethereum (ETH) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/GBP Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=GBP&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->GBP;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Ethereum (ETH) is** £" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price ETH/EUR Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=EUR&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Ethereum (ETH) is** €" . $value);
  }
});

// LTC Network Average

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/USD"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current price for Litecoin (LTC) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/GBP"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=GBP");
      $prices = json_decode($url);
      $value = $prices->GBP;
      $message->channel->sendMessage(":moneybag: **The current price for Litecoin (LTC) is** £" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/EUR"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=EUR");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current price for Litecoin (LTC) is** €" . $value);
  }
});

// Coinbase LTC Exchange

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/USD Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Litecoin (LTC) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/GBP Coinbase"){
      $message->channel->sendMessage(":no_entry_sign:  **Coinbase does not support GBP for Litecoin!** Try using another exchange.");
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/EUR Coinbase"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=EUR&e=Coinbase");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current Coinbase price for Litecoin (LTC) is** €" . $value);
  }
});

// Kraken LTC Exchange

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/USD Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->USD;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Litecoin (LTC) is** $" . $value);
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/GBP Kraken"){
      $message->channel->sendMessage(":no_entry_sign:  **Kraken does not support GBP for Litecoin!** Try using another exchange.");
  }
});

$discord->on("message", function($message, $discord){
   if ($message->content == "cc!price LTC/EUR Kraken"){
      $url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=EUR&e=Kraken");
      $prices = json_decode($url);
      $value = $prices->EUR;
      $message->channel->sendMessage(":moneybag: **The current Kraken price for Litecoin (LTC) is** €" . $value);
  }
});

$discord->run();
