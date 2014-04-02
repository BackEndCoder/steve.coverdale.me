<?php
class GithubController extends AppController {

	public function index() {
		$user['info'] = $this->Github->getUserInfo();
		$user['repos'] = $this->Github->getUserRepos();
		foreach($user['repos'] as $data){
			if($data['fork']!==true){
				$repos[$data['name']] = $data;
			}
		}
		$this->set(compact('repos','user'));
	}
}