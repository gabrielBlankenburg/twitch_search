<?php

namespace App\Services;

use GuzzleHttp\Client as GuzzleClient;
use App\Formatter\Twitch\TwitchInterface as Formatter;

class Twitch
{
	CONST BASE_URI = 'https://api.twitch.tv/';

	private $formatter;

	private $endpoint;

	public function __construct(Formatter $formatter, string $endpoint)
	{
		$this->formatter = $formatter;
		$this->endpoint = $endpoint;
	}

	public function search($term)
	{
		$guzzle = new GuzzleClient(['base_uri' => self::BASE_URI]);

		$result = $guzzle->request('GET', $this->endpoint, [
			'headers' => [
				'Accept' => 'application/vnd.twitchtv.v5+json',
				'Client-ID' => config('twitch.client_id')
			],
			'query' => [
				'query' => $term,
				'limit' => 30
			],
		]);

		$result = $result->getBody()->getContents();

		return $this->formatter->format($result);
	}
}