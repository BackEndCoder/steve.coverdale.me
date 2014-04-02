<?php
class Github extends AppModel {

	public $useDbConfig = 'github';

    public function getUserInfo() {
		$path = (isset($country)?'-country-' . $country['id']:'') . (isset($limit)?'-limit-' . $limit:'') . (isset($channelSlug)?'-channelSlug-' . $channelSlug:'') . (isset($genreSlug)?'-genreSlug-' . $genreSlug:'');
		if (($data = Cache::read('getUserInfo' . $path)) === false) {
			$conditions = array('conditions'=>array(
				'type'=>'user_info',
				'username'=>'BackEndCoder'
				));
			$data = $this->find('all',$conditions);
			Cache::write('getUserInfo' . $path, $data);
		}
		return $data;
    }

    public function getUserRepos() {
		$path = (isset($country)?'-country-' . $country['id']:'') . (isset($limit)?'-limit-' . $limit:'') . (isset($channelSlug)?'-channelSlug-' . $channelSlug:'') . (isset($genreSlug)?'-genreSlug-' . $genreSlug:'');
		if (($data = Cache::read('getUserRepos' . $path)) === false) {
			$conditions = array('conditions'=>array(
				'type'=>'user_repos',
				'username'=>'BackEndCoder'
				));
			$data = $this->find('all',$conditions);
			Cache::write('getUserRepos' . $path, $data);
		}
		return $data;
    }

    public function getRepo($name) {
		$path = (isset($country)?'-country-' . $country['id']:'') . (isset($limit)?'-limit-' . $limit:'') . (isset($channelSlug)?'-channelSlug-' . $channelSlug:'') . (isset($genreSlug)?'-genreSlug-' . $genreSlug:'');
		if (($data = Cache::read('getRepo' . $path)) === false) {
			$conditions = array('conditions'=>array(
				'type'=>'repo',
				'username'=>'BackEndCoder',
				'repo'=>$name
				));
			$data = $this->find('all',$conditions);
			Cache::write('getRepo' . $path, $data);
		}
		return $data;
    }
} 	