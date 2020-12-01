<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Produk;
use App\Order;
use DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
  public function index()
  {
   $customer = Customer::all();
    
           
    return view('order.index',compact('customer'));
  }

  public function store(Request $request)
  {
    if($request->isMethod('get'))
    {
      $produk = Produk::all();
      $customer = Customer::all();
      return view('order.tambah',compact('produk','customer'));
    }else{
      foreach($request->produk as $key =>$produk)
      {
          // dd($request->all());
          $order = new Order();
          $order->customer_id = $request->get('customer');
          $order->produk_id = $request->produk[$key];
        
          $order->save();
        }
       
      Alert::success('Order Berhasil Di Tambah');
    }
    return redirect('order');

  }

  public function update(Request $request,$id)
  {
    if($request->isMethod('get'))
    {
      $produk = Produk::all();
      $customer = Customer::all();
      $order = Customer::where('id',$id)->first();
      return view('order.edit',compact('customer','produk','customer'));
    }else{
      $order = Customer::find($id);
      $order->customer_id = $request->get('customer');
      $order->produk_id = $request->get('produk');

      $order->save(); 
      Alert::success('Order Berhasil Di Update');
    }
    return redirect('customer');
  }

  public function destroy($id)
  {
    Order::destroy($id);
    Alert::success('Order Berhasil Di Hapus');
    return redirect('customer');

  }
}
