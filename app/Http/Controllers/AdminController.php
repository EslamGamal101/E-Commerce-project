<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\order;
use App\Models\Category;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders_count = order::all()->count();
        $product_counts = Category::all()->count();
        $delevered_products = order::where('status','delevered')->count();
        return view('admin.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function adminOrderIndex(){
        $orders = order::paginate(10);
        return view('admin.orders.index',get_defined_vars());
    }

    public function delete_order_from_admin(order $order){
        $order->delete();
        return to_route('admin.orders.index');
    }
    public function admin_order_show(order $order)
    {
        
        
        return view('admin.orders.show',get_defined_vars());
    }

    public function change_order_status(order $order){
        
        $order->status = 'delevered';
        $order->save();
        return to_route('admin.orders.index');
    }

    
}
