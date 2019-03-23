<?php

namespace App\Formatter\Twitch;

class Game implements TwitchInterface
{
	/**
	 * @param string $data
	 */
	public function format(string $data)
	{
		$result = json_decode($data, true);

		return [
			'data' => $this->convertData($result['games'])
		];
	}

	/**
	 * @param mixed $games
	 */
	private function convertData($games)
	{
		$result = [];

		if ($games == null) {
			return $result;
		}

		foreach ($games as $game) {
			$result[] = [
				'name' => $game['name'],
				'popularity' => $game['popularity'],	
				'box' => $game['box']['large'],
			];
		}

		return $result;
	}
}