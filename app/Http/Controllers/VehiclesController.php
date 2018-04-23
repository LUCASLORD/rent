<?php

namespace Locadora\Http\Controllers;


use Illuminate\Http\Request;
use Locadora\Http\Requests\AdminVehicleRequest;
use Locadora\Repositories\CategoryRepository;
use Locadora\Repositories\VehicleRepository;

class VehiclesController extends Controller
{
    /**
     * @var VehicleRepository
     */
    private $repository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(VehicleRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $vehicles = $this->repository->paginate(5);

        return view('admin.vehicles.index',compact('vehicles'));
    }

    public function create(CategoryRepository $categoryRepository)
    {
        $list_status = [0 => 'Disponível', 1 => 'Reservado', 2 => 'Locado'];
        $categories = $this->categoryRepository->pluck('name','id');
        return view('admin.vehicles.create', compact('categories', 'list_status'));
    }

    public function store(AdminVehicleRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.vehicles.index');
    }

    public function edit($id)
    {
        $vehicle = $this->repository->find($id);

        $categories = $this->categoryRepository->pluck('name','id');

        return view('admin.vehicles.edit', compact('vehicle','categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.vehicles.index');
    }
}
