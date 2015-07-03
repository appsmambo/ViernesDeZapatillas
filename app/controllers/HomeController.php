<?php

class HomeController extends BaseController {
	
	private $_video = 'D9lXtYgD21s';

	public function index()
	{
		$imagesInstagram = array();
		$imagesTwitter = array();

		$instagram = new instagram(array(
			'apiKey' => '09fd60952ea742d5abb761b6c6a137aa',
			'apiSecret' => 'ee25063e91e74d6c9f257be054a44ec3',
			'apiCallback' => 'http://viernesdezapatillas.pe/'
		));
		$tagInstagram = 'viernesdezapatillas';
		$numphotosInstagram = 15;
		$media = $instagram->getTagMedia($tagInstagram, $auth = false, array('count' => $numphotosInstagram));

		$response = json_decode(json_encode($media));
		foreach ($response->data as $data) {
			$imagesInstagram[] = $data->images->thumbnail->url;
		}

		$max_id = 0;
		$totalTweets = 15;
		$responset = Twitter::getSearch(array('q' => '#viernesdezapatillas since:2015-07-01 filter:images', 'count' => $totalTweets, 'max_id' => $max_id, 'since_id' => 0));
		foreach ($responset->statuses as $tweet) {
			foreach ($tweet->entities->media as $url) {
				$imagesTwitter[] = $url->media_url; // . ':thumb';
			}
		}
		
		return View::make('index')
				->with('videoCampana', $this->_video)
				->with('calendario', '0')
				->with('instagram', $imagesInstagram)
				->with('twitter', $imagesTwitter);
	}
	public function calendario()
	{
		$imagesInstagram = array();
		$imagesTwitter = array();

		$instagram = new instagram(array(
			'apiKey' => '09fd60952ea742d5abb761b6c6a137aa',
			'apiSecret' => 'ee25063e91e74d6c9f257be054a44ec3',
			'apiCallback' => 'http://viernesdezapatillas.pe/'
		));
		$tagInstagram = 'viernesdezapatillas';
		$numphotosInstagram = 15;
		$media = $instagram->getTagMedia($tagInstagram, $auth = false, array('count' => $numphotosInstagram));

		$response = json_decode(json_encode($media));
		foreach ($response->data as $data) {
			$imagesInstagram[] = $data->images->thumbnail->url;
		}

		$max_id = 0;
		$totalTweets = 15;
		$responset = Twitter::getSearch(array('q' => '#viernesdezapatillas since:2015-07-01 filter:images', 'count' => $totalTweets, 'max_id' => $max_id, 'since_id' => 0));
		foreach ($responset->statuses as $tweet) {
			foreach ($tweet->entities->media as $url) {
				$imagesTwitter[] = $url->media_url; // . ':thumb';
			}
		}
		
		return View::make('index')
				->with('videoCampana', $this->_video)
				->with('calendario', '1')
				->with('instagram', $imagesInstagram)
				->with('twitter', $imagesTwitter);
	}

}
