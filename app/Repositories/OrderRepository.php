<?php


namespace App\Repositories;

use App\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function all()
    {
        $orders = auth()->user()->orders()
            ->orderBy('id', 'desc')
            ->get()
            ->map->format();

        return $orders;
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
        $order['order_name'] = $pay_data['product_name'];
        $order['goods_info'] = $pay_data['goods_info'];
        $order['state'] = order::STATE_1;
        $order['tax_state'] = order::TAX_STATE_1;
        $order['total_count'] = $pay_data['count'];
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

    public function taxstate_update($request)
    {
        return order::where('id', $request->order_id)->update(['tax_state'=> Order::TAX_STATE_2]);
    }
}
