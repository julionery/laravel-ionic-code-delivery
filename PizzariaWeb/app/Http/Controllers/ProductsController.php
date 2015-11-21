<?php

namespace PizzariaWeb\Http\Controllers;

use Illuminate\Http\Request;
use PizzariaWeb\Http\Requests;
use PizzariaWeb\Http\Controllers\Controller;
use PizzariaWeb\Http\Requests\AdminCategoryRequest;
use PizzariaWeb\Http\Requests\AdminProductRequest;
use PizzariaWeb\Repositories\CategoryRepository;
use PizzariaWeb\Repositories\ProductsRepository;

class ProductsController extends Controller
{
    private $repository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(ProductsRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $products = $this->repository->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->lists(['name','id']);
        return view('admin.products.create', compact('categories'));
    }

    public function store(AdminProductRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {
        $products = $this->repository->find($id);
        $categories = $this->categoryRepository->lists();
        return view('admin.products.edit', compact('products','categories'));
    }

    public function update(AdminProductRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.products.index');
    }

}
