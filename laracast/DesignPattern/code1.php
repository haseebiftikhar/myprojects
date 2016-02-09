<?php

/**
 * @author haseeb@brokergenius.com
 * @copyright 2016
 */

interface CarService{
	public function getCost();
	public function getDescription();
}

class BasicInspection implements CarService{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
    	return 'Basec Inspection';
    }
}

class OilChange implements CarService{

	protected $CarService;

	function __construct(CarService $CarService)
	{
		$this->CarService = $CarService;
	}

	 public function getCost()
    {
        return 29 + $this->CarService->getCost();
    }

    public function getDescription()
    {
    	return $this->CarService->getDescription().', and Oil Change';
    }
}

class TireRotation implements CarService{

	protected $CarService;

	function __construct(CarService $CarService)
	{
		$this->CarService = $CarService;
	}

	 public function getCost()
    {
        return 15 + $this->CarService->getCost();
    }

    public function getDescription()
    {
    	return $this->CarService->getDescription().', and Tire Rotation';
    }
}

$service = (new OilChange(new TireRotation(new BasicInspection)));
echo $service->getDescription();
echo $service->getCost();
exit();
echo (new TireRotation(new OilChange(new BasicInspection())))->getCost();

?>