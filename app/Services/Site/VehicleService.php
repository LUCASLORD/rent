<?php
namespace Locadora\Services\Site;

use Locadora\Repositories\VehicleRepository;

class VehicleService
{
    /**
     * @var VehicleRepository
     */
    private $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function listVehicles()
    {
        $vehicles = $this->vehicleRepository->all()->shuffle();

        $dados = collect();

        for ($i = 0; $i < 4; $i++)
        {
            $dados[$i] = $vehicles[$i];
        }

        return $dados;
    }
}