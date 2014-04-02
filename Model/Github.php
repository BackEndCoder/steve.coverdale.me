<?php
class Github extends AppModel {

	public $useDbConfig = 'github';

    public function getUserInfo() {
		$conditions = array('conditions'=>array(
			'type'=>'user_info',
			'username'=>'BackEndCoder'
			));
		return $this->find('all',$conditions);
    }

    public function getUserRepos() {
		$conditions = array('conditions'=>array(
			'type'=>'user_repos',
			'username'=>'BackEndCoder'
			));
		return $this->find('all',$conditions);
	}

    public function getRepo($name) {
		$conditions = array('conditions'=>array(
			'type'=>'repo',
			'username'=>'BackEndCoder',
			'repo'=>$name
			));
		return $this->find('all',$conditions);
	}
}