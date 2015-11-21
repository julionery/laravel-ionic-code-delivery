<?php

namespace PizzariaWeb\Http\Controllers;

use Illuminate\Http\Request;
use PizzariaWeb\Http\Requests;
use PizzariaWeb\Http\Controllers\Controller;
use PizzariaWeb\Http\Requests\AdminCategoryRequest;
use PizzariaWeb\Repositories\CategoryRepository;

class CategoriesController extends Controller
{
    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;

    }


    public function index()
    {
        $categories = $this->repository->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $category = $this->repository->find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {

        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.categories.index');
    }


}
