<?php
class GithubController extends AppController {

	public function index() {
		$conditions = array('conditions'=>array(
			'type'=>'user_info',
			'username'=>'BackEndCoder'
			));
		$user['info'] = $this->Github->find('all',$conditions);

		debug($user['info']);

		$conditions = array('conditions'=>array(
			'type'=>'user_repos',
			'username'=>'BackEndCoder'
			));
		$user['repos'] = $this->Github->find('all',$conditions);

		foreach($user['repos'] as $data){
			if($data['fork']!==true){
				$conditions = array('conditions'=>array(
					'type'=>'repo',
					'username'=>'BackEndCoder',
					'repo'=>$data['name']
					));
				$repos[$data['name']] = $this->Github->find('all',$conditions);
			}
		}
		debug($repos);
		debug($user);
	}
}