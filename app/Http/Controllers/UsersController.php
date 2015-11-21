<?php

namespace PizzariaWeb\Http\Controllers;

use Illuminate\Http\Request;
use PizzariaWeb\Http\Requests;
use PizzariaWeb\Http\Controllers\Controller;
use PizzariaWeb\Http\Requests\AdminUserRequest;
use PizzariaWeb\Http\Requests\AdminProductRequest;
use PizzariaWeb\Repositories\UserRepository;
use PizzariaWeb\Repositories\ClientRepository;

class UsersController extends Controller
{
    private $repository;
    /**
     * @var UserRepository
     */
    private $clientRepository;

    public function __construct(UserRepository $repository, ClientRepository $clientRepository)
    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
    }

    public function index()
    {
        $users = $this->repository->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {

        return view('admin.users.create');
    }

    public function store(AdminUserRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $users = $this->repository->find($id);
        $clients= $this->clientRepository->all();
        return view('admin.users.edit', compact('users','clients'));
    }

    public function update(AdminUserRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.products.index');
    }

}
