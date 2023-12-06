<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

use Phpml\Classification\KNearestNeighbors;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Dataset\CsvDataset;
use Phpml\Metric\Accuracy;
use Phpml\ModelManager;

/**
 * KNNModel class
 */
class KNNModel
{
	
	use Model;

	protected $table = 'knnmodels';
	protected $primaryKey = 'id';
	protected $loginUniqueColumn = 'email';
	public $csvfile = "dataset/dataset.csv"; 
	public $features = 12;

	public function SaveKnnModel()
	{
		//load dataset
		$dataset = new CsvDataset($this->csvfile, $this->features, $header = true);

		//preprocessing loaded datset
		$data = new StratifiedRandomSplit($dataset, 0.3, 156);

		$triansamples = $data->getTrainSamples();
        $trainlabels = $data->getTrainLabels();
        $testsamples = $data->getTestSamples();
        $testlabels = $data->getTestLabels();
		

		//train processed dataset
		$classifier = new KNearestNeighbors(3);
        $classifier->train($triansamples, $trainlabels);

		//save trained datsaset
		$this->saveTrainedModel($classifier);

		//predict trained model
        $predicted = $classifier->predict($testsamples);

        //Evaluate model
        $accuracy = Accuracy::score($testlabels, $predicted);
        echo 'KNearestNeighbors Accuracy is : ' . $accuracy;

	}


	public function restoreKnnModel()
	{
		//load dataset
		$dataset = new CsvDataset($this->csvfile, $this->features, $header = true);

		//preprocessing loaded datset
		$data = new StratifiedRandomSplit($dataset, 0.2, 156);

		$triansamples = $data->getTrainSamples();
        $trainlabels = $data->getTrainLabels();
        $testsamples = $data->getTestSamples();
        $testlabels = $data->getTestLabels();
		


		//restore trained datsaset
		$classifier = $this->RestoreTrainedModel();

		//predict trained model
        $predicted = $classifier->predict($testsamples);

        //Evaluate model
        $accuracy = Accuracy::score($testlabels, $predicted);
        echo 'KNearestNeighbors Accuracy is : ' . $accuracy;

	}

	public function diagnose()
	{

		$classifier = $this->RestoreTrainedModel();

			$diagnosis = $classifier->predict([
				$_POST['itching'],
				$_POST['redness'],
				$_POST['watery'],
				$_POST['discharge'],
				$_POST['gritty'],
				$_POST['burning'],
				$_POST['sensitive'],
				$_POST['blurred'],
				$_POST['duration'],
				$_POST['medicalhistory'],
				$_POST['painlevel'],
				$_POST['trauma']
			]);



		return $diagnosis;
	}

	public function saveTrainedModel($classifier)
	{
        $modelManager =  new ModelManager();
        $modelManager->saveToFile($classifier, './models/classification/KNearestNeighbors.json');
	}

	public function RestoreTrainedModel()
	{
        $modelManager =  new ModelManager();
        $restore =  $modelManager->restoreFromFile('./models/classification/KNearestNeighbors.json');
	    return $restore;
	}


}