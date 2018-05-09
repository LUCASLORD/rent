<?php
namespace Locadora\Services;


use Locadora\Repositories\RentRepository;
use Locadora\Repositories\UserRepository;
use Locadora\Repositories\VehicleRepository;

class CheckoutService
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var RentRepository
     */
    private $rentRepository;
    /**
     * @var VehicleRepository
     */
    private $vehicleRepository;

    public function __construct(RentRepository $rentRepository,
                                UserRepository $userRepository,
                                VehicleRepository $vehicleRepository)
    {
        $this->rentRepository = $rentRepository;
        $this->userRepository = $userRepository;
        $this->vehicleRepository = $vehicleRepository;
    }

    public function listVehicles()
    {
        $vehicles = $this->vehicleRepository->pluck('model', 'id');
        return $vehicles;
    }
}