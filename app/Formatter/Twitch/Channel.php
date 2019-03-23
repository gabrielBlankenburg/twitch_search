<?php

namespace App\Formatter\Twitch;

class Channel implements TwitchInterface
{
	/**
	 * @param string $data
	 */
	public function format(string $data)
	{
		$result = json_decode($data, true);

		return [
			'data' => $this->convertData($result['channels'])
		];
	}

	/**
	 * @param mixed $channels
	 */
	private function convertData($channels)
	{
		$result = [];

		if ($channels == null) {
			return $result;
		}

		foreach ($channels as $channel) {
			$result[] = [
				'name' => $channel['display_name'],
				'url' => $channel['url'],
				'language' => $channel['broadcaster_language'],
				'game' => $channel['game'],
				'logo' => $channel['logo'],
				'views' => $channel['views']
			];
		}

		return $result;
	}
}