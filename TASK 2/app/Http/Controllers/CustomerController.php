<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function index()
    {
      $customer = Customer::all();
      return view('customer.index',compact('customer'));
    }

    public function store(Request $request)
    {
      if($request->isMethod('get'))
      {
        return view('customer.tambah');
      }else{
        $customer = new Customer;
        $customer->nama = $request->get('nama');
        $customer->alamat = $request->get('alamat');
        $customer->no_hp = $request->get('no_hp');

        $foto = request('foto');
        $extention = $foto->getClientOriginalExtension();
        $name = $foto->getClientOriginalName();
        $size = $foto->getSize();
        $mime = $foto->getMimeType();
        $tujuan_upload = 'build/images/customer';
        $foto->move($tujuan_upload, $foto->getClientOriginalName());

        $customer->foto = $name;

        $customer->save(); 
        Alert::success('Customer Berhasil Di Tambah');
      }
      return redirect('customer');

    }

    public function update(Request $request,$id)
    {
      if($request->isMethod('get'))
      {
        $customer = Customer::where('id',$id)->first();
        return view('customer.edit',compact('customer'));
      }else{
        $customer = Customer::find($id);
        $customer->nama = $request->get('nama');
        $customer->alamat = $request->get('alamat');
        $customer->no_hp = $request->get('no_hp');

        $foto = request('foto');
        $extention = $foto->getClientOriginalExtension();
        $name = $foto->getClientOriginalName();
        $size = $foto->getSize();
        $mime = $foto->getMimeType();
        $tujuan_upload = 'build/images/customer';
        $foto->move($tujuan_upload, $foto->getClientOriginalName());

        $customer->foto = $name;

        $customer->save(); 
        Alert::success('Customer Berhasil Di Update');
      }
      return redirect('customer');
    }

    public function destroy($id)
    {
      Customer::destroy($id);
      Alert::success('Customer Berhasil Di Hapus');
      return redirect('customer');

    }
}
