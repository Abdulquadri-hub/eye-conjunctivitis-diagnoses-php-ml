<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Accuracy class
 */
class Accuracy
{
	use MainController;

	public function index()
	{

		$data['title'] = "Accuracy";

		$KNNacuracy = new \Model\KNNModel();
		$KNNacuracy->SaveKnnModel();

		$this->view('accuracy');
	}

}
