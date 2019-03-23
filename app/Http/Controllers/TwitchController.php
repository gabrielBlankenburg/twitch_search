<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factory\Twitch as TwitchFactory;

class TwitchController extends Controller
{
    /**
     * @var App\Factory\Twitch
     */
	private $twitchFactory;

    /**
     * @param App\Factory\Twitch $twitchFactory
     */
	public function __construct(TwitchFactory $twitchFactory)
	{
		$this->twitchFactory = $twitchFactory;
	}

    public function home()
    {
        return view('search', ['type' => 'channel']);
    }

    /**
     * @param Illuminate\Http\Request $request
     */
    public function search(Request $request)
    {
        $request->validate([
            'term' => 'required|min:3',
            'type' => 'required|in:channel,game'
        ]);

    	$term = $request->input('term');
    	$type = $request->input('type');

    	$twitch = $this->twitchFactory->create($type);

    	$result = $twitch->search($term);

    	return $this->createView($term, $type, $result);
    }

    /**
     * @param string $term
     * @param string $type
     * @param array  $result
     */
    private function createView($term, $type, $result)
    {
    	if ($type == 'game') {
	    	return view('game_result', [
                'type' => $type,
	    		'term' => $term,
				'result' => $result
			]);    		
    	}
    	if ($type == 'channel') {
	    	return view('channel_result', [
                'type' => $type,
	    		'term' => $term,
				'result' => $result
			]);    		
    	}
    }
}
