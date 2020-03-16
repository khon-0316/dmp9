<?php


namespace App\Repositories;

use App\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function all()
    {
        $order = order::order('id', 'desc')
            ->paginte(5);

        $order->getCollection()->map->format();
    }

    public function findById($id)
    {
        return order::where('id', $id)
            ->firstOrFail()
            ->format();
    }

    public function create($order_no, $pay_data)
    {
        $order['order_no'] = $order_no;
        $order['goods_info'] = $pay_data['goods_info'];
        $order['state'] = order::STATE_1;
        $order['total_price'] = $pay_data['amount'];
        auth()->user()->orders()->create($order);
    }


    public function update($request, $id)
    {
        $order = order::where('id', $id)->firstOrFail();
        $order->update($request->all());
    }


    public function state_update($order_no, $payment_id)
    {
        order::where('order_no', $order_no)
            ->update(['payment_id' => $payment_id, 'state' => order::STATE_2]);
    }


}