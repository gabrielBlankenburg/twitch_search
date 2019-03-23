<?php

namespace App\Factory;

use App\Services\Twitch as TwitchService;

use App\Formatter\Twitch as Formatter;

class Twitch
{
	const CHANNEL_URL = 'kraken/search/channels';
	const GAME_URL = 'kraken/search/games';

	/**
	 * @param string $type
	 */
	public function create(string $type)
	{
		if ($type == 'channel') {
			return new TwitchService(
				new Formatter\Channel,
				self::CHANNEL_URL
			);
		}

		if ($type == 'game') {
			return new TwitchService(
				new Formatter\Game,
				self::GAME_URL
			);
		}
	}
}