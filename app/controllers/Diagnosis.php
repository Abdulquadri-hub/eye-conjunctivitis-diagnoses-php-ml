<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');


/**
 * Diagnosis class
 */
class Diagnosis
{
	use MainController;

	public function index($id = null)
	{

		$data['errors'] = [];

		$data['title'] = "Diagnosis";
		$data['req'] = new \Core\Request();
		$diag = new \Model\Diagnosis();
		$knn = new \Model\KNNModel();

		//
		$data['diagnosis'] = "";

		if(count($_POST) > 0 && $_SERVER['REQUEST_METHOD'] == "POST"){
			
			$diagnosis = $knn->diagnose();
			$data['diagnosis'] = $this->result($diagnosis);

			// echo "<pre>";
			// show($_POST);
			// show($data['diagnosis']);
			// die;
		}
		
		$this->view('diagnosis',$data);
	}

	public function result($diagnosis)
	{
		if($diagnosis == 1)
		{
			return $diagnosis;
			
		
		}elseif($diagnosis == 0){
		
			return $diagnosis;
		}
	}

	

}
