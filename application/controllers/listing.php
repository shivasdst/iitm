<?php


class listing extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->albums();
	}

	public function albums() {
		
		$data = $this->model->getGetData();
		
		unset($data['url']);
		
		if(!(isset($data["page"]))){
		
			$data["page"] = 1;
		
		}
		
		$result = $this->model->listAlbums($data);
		
		if($data["page"] == 1){
		
			($result) ? $this->view('listing/albums', $result) : $this->view('error/index');
		
		}
		else{
		
			echo json_encode($result);
		
		}
	}


	// public function albums() {

	// 	$data = $this->model->listAlbums();
	// 	($data) ? $this->view('listing/albums', $data) : $this->view('error/index');
	// }	

	public function collections() {

		$data = $this->model->listCollections();
		($data) ? $this->view('listing/collections', $data) : $this->view('error/index');
	}

	public function photos($album = DEFAULT_ALBUM) {
		
		$data = $this->model->getGetData();
		
		unset($data['url']);
		
		if(!(isset($data["page"]))){
		
			$data["page"] = 1;
		
		}
	
		$result = $this->model->listPhotos($album,$data);

		if($data["page"] == 1){
		
			($result) ? $this->view('listing/photos', $result) : $this->view('error/index');
		}
		else{
			
			echo json_encode($result);			
		}
	}
}

?>