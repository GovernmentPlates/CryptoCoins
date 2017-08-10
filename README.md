# CryptoCoins
A simple Discord Bot that shows the current value of Bitcoin, Litecoin and Ethereum cryptocurrencies

<h3>Running the bot</h3>
To run this, you will need the TeamReflex DiscordPHP Library (and PHP 7 or higher), this can be easily installed with composer:
<code>composer require team-reflex/discord-php</code>

For more information about the DiscordPHP Library, please visit https://discordphp.readme.io/docs.

<h3>Commands</h3>
<p><code>cc!help</code> Opens the help menu and shows the list of commands you can use with the bot.</p>
<p><code>cc!info</code> Shows information about the bot, such as the version number and author.</p>
<p><code>cc!price [Currency-Pair] [Exchange]</code> Gets and displays the current value from a currency pair and exchange (see below).

<h3>Currency Pairs</h3>
<p>Example: <code>cc!price BTC/USD</code></p>
<p><b>BTC/USD</b> - Bitcoin to USD</p>
<p><b>BTC/GBP</b> - Bitcoin to GBP</p>
<p><b>BTC/EUR</b> - Bitcoin to EUR</p>
<p><b>ETH/USD</b> - Ethereum to USD</p>
<p><b>ETH/GBP</b> - Ethereum to GBP</p>
<p><b>ETH/EUR</b> - Ethereum to EUR</p>
<p><b>LTC/USD</b> - Litecoin to USD</p>
<p><b>LTC/GBP</b> - Litecoin to GBP</p>
<p><b>LTC/EUR</b> - Litecoin to EUR</p>

<h3>Supported Exchanges</h3>
<p>Example: <code>cc!price BTC/USD Coinbase</code></p>
<p>Exchanges are optional, otherwise the bot will just get the average price.</p>
<p><b>Coinbase</b> - <a href="https://coinbase.com">The Coinbase Exchange</a></p>
<p><b>Kraken</b> - <a href="https://www.kraken.com/">The Kraken Exchange</a></p>
