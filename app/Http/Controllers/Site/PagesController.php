<?php

namespace Locadora\Http\Controllers\Site;

use Illuminate\Http\Request;
use Locadora\Http\Controllers\Controller;
use Locadora\Repositories\PageRepository;
use Locadora\Services\Site\VehicleService;

class PagesController extends Controller
{
    /**
     * @var PageRepository
     */
    private $repository;
    /**
     * @var VehicleService
     */
    private $vehicleService;

    public function __construct(PageRepository $repository, VehicleService $vehicleService)
    {
        $this->repository = $repository;
        $this->vehicleService = $vehicleService;
    }

    public function index()
    {
        $vehicles = $this->vehicleService->listVehicles();

        return view('site.home', compact('vehicles'));
    }
    public function about()
    {
        $page = $this->repository->findWhereIn('type',['sobre']);
        $dados = $page[0];

        return view('site.sobre', compact('dados'));
    }

    public function contact()
    {
        return view('site.contato');
    }


    public function vehicle($id)
    {
        $vehicle = $this->vehicleService->find($id);
        return view('site.veiculo', compact('vehicle'));
    }
}
