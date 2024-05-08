<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CoinMarketCap
{
    public PendingRequest $client;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $this->client = Http::baseUrl('https://pro-api.coinmarketcap.com/v2')
            ->withHeader('X-CMC_PRO_API_KEY', env('CMC_API_KEY'));
    }

    public function info($params = [], $cache = true)
    {
        $cacheKey = 'CMC-Info-'.md5(json_encode($params));

        if ($cache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $response = $this->client->get('/cryptocurrency/info', $params);

        if (!$response->successful()) {
            return null;
        }

        $data = $response->json('data');

        Cache::put($cacheKey, $data, now()->addMonth());

        return $data;
    }

    public function quotes($params = [], $cache = true)
    {
        $cacheKey = 'CMC-quotes-'.md5(json_encode($params));

        if ($cache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $response = $this->client->get('/cryptocurrency/quotes/latest', $params);

        if (!$response->successful()) {
            return null;
        }

        $data = $response->json('data');

        Cache::put($cacheKey, $data, now()->addMonth());

        return $data;
    }

    public function basic(string $symbol)
    {
        $symbol = strtoupper($symbol);

        $info = app(CoinMarketCap::class)->info([
            'symbol' => $symbol,
        ])[$symbol][0] ?? [];

        $quote = (new CoinMarketCap())->quotes([
            'symbol' => $symbol,
        ])[$symbol][0] ?? [];

        $data = array_merge($quote, $info);

        if (count($data) === 0) {
            return null;
        }

        $data['price'] = $data['quote']['USD']['price'];

        return collect($data)
            ->only(['name', 'symbol', 'description', 'price', 'logo'])
            ->toArray();
    }
}
