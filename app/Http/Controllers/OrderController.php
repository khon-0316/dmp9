<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Repositories\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index(Request $request)
    {
        $orders = $this->orderRepository->all($request);
        $sch = $request->sch;

        return view('orders.index', compact('orders', 'sch'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(OrderRequest $request)
    {
        $this->orderRepository->create($request);

        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $order = $this->orderRepository->findById($id);

        return view('orders.show', compact('order'));
    }

    public function history(Request $request)
    {
        $orders = $this->orderRepository->all($request);

        return view('orders.history', compact('orders'));
    }
}
