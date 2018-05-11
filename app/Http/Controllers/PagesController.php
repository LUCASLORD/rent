<?php

namespace Locadora\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Locadora\Http\Requests\AdminClientRequest;
use Locadora\Repositories\ClientRepository;
use Locadora\Repositories\PageRepository;
use Locadora\Services\ClientService;


class PagesController extends Controller
{

    /**
     * @var ClientRepository
     */
    private $repository;

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $pages = $this->repository->all();
        return view('admin.pages.index', compact('pages'));
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
