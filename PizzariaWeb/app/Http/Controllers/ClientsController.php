<?php

namespace PizzariaWeb\Http\Controllers;

use Illuminate\Http\Request;
use PizzariaWeb\Http\Requests;
use PizzariaWeb\Http\Controllers\Controller;
use PizzariaWeb\Http\Requests\AdminUserRequest;
use PizzariaWeb\Http\Requests\AdminClientRequest;
use PizzariaWeb\Repositories\UserRepository;
use PizzariaWeb\Repositories\ClientRepository;
use PizzariaWeb\Services\ClientService;

class ClientsController extends Controller
{
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;
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
        $clients = $this->repository->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(AdminClientRequest $request)
    {
        $data = $request->all();
        $this->clientService->create($data);
        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $clients = $this->repository->find($id);
        return view('admin.clients.edit', compact('clients'));
    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->clientService->update($data, $id);
        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.clients.index');
    }

}
