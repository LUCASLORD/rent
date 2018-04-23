<?php

namespace Locadora\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Locadora\Http\Requests\AdminClientRequest;
use Locadora\Repositories\ClientRepository;
use Locadora\Services\ClientService;


class ClientsController extends Controller
{

    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientService
     */
    private $clientService;


    public function __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;

        $this->clientService = $clientService;
    }

    public function index()
    {
        $clients = $this->repository->paginate(5);

        return view('admin.clients.index',compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(AdminClientRequest$request)
    {
        $data = $request->all();
        $this->clientService->store($data);

        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $client = $this->repository->find($id);
        $user = Auth::user()->find($client->user_id);

        return view('admin.clients.edit', compact('client', 'user'));
    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();

        $this->clientService->update($data, $id);

        return redirect()->route('admin.clients.index');
    }
}
