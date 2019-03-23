<?php

namespace App\Formatter\Twitch;

interface TwitchInterface
{
	/**
	 * @param string $data
	 */
	public function format(string $data);
}