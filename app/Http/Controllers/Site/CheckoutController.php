<?php

namespace Locadora\Http\Controllers;


use Locadora\Repositories\RentRepository;
use Locadora\Services\CheckoutService;


class CheckoutController extends Controller
{
    /**
     * @var RentRepository
     */
    private $rentRepository;
    /**
     * @var CheckoutService
     */
    private $checkoutService;


    public function __construct(RentRepository $rentRepository, CheckoutService $checkoutService)
    {
        $this->rentRepository = $rentRepository;
        $this->checkoutService = $checkoutService;
    }

    public function create()
    {
        $vehicles = $this->checkoutService->listVehicles();

        return view('customer.rent.create', compact('vehicles'));
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function update()
    {


    }
}
