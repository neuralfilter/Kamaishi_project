<?php

class Point extends AppModel {
		$Point = $this;
		return Cache::remember('all_articles', function() use ($Point){
			return $Point->find('all', array(
				'order' => 'rand()',
				'limit' => 3
			));
		});
	}
}

?>