<?php

namespace App;

use Illuminate\Support\Collection;
use Session;

class Cart
{
    /** @var array $products */
    private $products;

    private $session_list_name = 'cart.products';
    private $session_user_name = 'cart.user';

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        $this->products = array();

        if (Session::has($this->session_list_name) && is_array(session($this->session_list_name))) {
            $this->products = session($this->session_list_name);
        }
    }

    /**
     * Return all Products in the Shopping Cart
     *
     * @return Collection
     */
    public function products()
    {
        $collection = collect($this->products);
        $keys = $collection->keys()->toArray();
        $products = Product::findMany($keys);

        $product_quantity = new Collection();

        /** @var Product $product */
        foreach ($products as $product) {
            $quantity = $collection->get($product->id);

            $arr_val = [
                'product'  => $product,
                'quantity' => $quantity,
            ];

            $product_quantity->push($arr_val);
        }

        return $product_quantity;
    }

    /**
     * Add a product to the Shopping Cart
     *
     * @param int $product_id
     * @param int $quantity
     * @return bool
     */
    public function push_product($product_id, $quantity)
    {
        if ($quantity <= 0 && $product_id >= 1)
            return false;

        $this->products[$product_id] = $quantity;
        $this->save_session();

        return true;
    }

    /**
     * Remove a product from the Shopping Cart
     *
     * @param int $product_id
     * @return bool
     */
    public function pull_product($product_id)
    {
        if (array_has($this->products, $product_id)
            && $product_id >= 1
        ) {
            array_forget($this->products, $product_id);
            $this->save_session();

            return true;
        }

        return false;
    }

    public function remove_all()
    {
        $this->products = array();
        $this->save_session();
    }

    /**
     * @return Order|null
     */
    public function make_order()
    {
        if (count($this->products) <= 0) {
            return null;
        }

        $products_amount = $this->products();

        $total_price = 0;

        foreach ($products_amount as $pa) {
            $product = $pa['product'];

            $total_price += $product->price;
        }

        /** @var Order $order */
        $order = Order::create([
            'user_id'             => auth()->user()->id,
            'is_payment_complete' => false,
            'discount'            => 0,
            'price'               => $total_price,
        ]);

        foreach ($products_amount as $pa) {
            $product = $pa['product'];
            $quantity = $pa['quantity'];

            $order->products()->attach($product->id, ['quantity' => $quantity]);

        }
        
        $this->remove_all();

        return $order;
    }

    private function save_session()
    {
        Session::set($this->session_list_name, $this->products);
    }
}
