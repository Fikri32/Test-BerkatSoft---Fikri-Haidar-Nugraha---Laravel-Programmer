<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
  
    public function index()
    {
      $produk = Produk::all();
      return view('produk.index',compact('produk'));
    }
  
    public function store(Request $request)
    {
      if($request->isMethod('get'))
      {
        return view('produk.tambah');
      }else{
          $produk = new Produk();
          $produk->nama = $request->get('nama');
          $produk->harga = $request->get('harga');

          $gambar = request('gambar');
          $extention = $gambar->getClientOriginalExtension();
          $name = $gambar->getClientOriginalName();
          $size = $gambar->getSize();
          $mime = $gambar->getMimeType();
          $tujuan_upload = 'build/images/produk';
          $gambar->move($tujuan_upload, $gambar->getClientOriginalName());

          $produk->gambar = $name;

          $produk->save(); 
          Alert::success('Produk Berhasil Di Tambah');
        }

        return redirect('produk');
      }
    

    public function update(Request $request,$id)
    {
      if($request->isMethod('get'))
      {
        $produk = Produk::where('id',$id)->first();
        return view('produk.edit',compact('produk'));
      }else{
        $rules = [
       
        ];
        $pesan = [
         
        ];

        $v = Validator::make($request->all(),$rules,$pesan);
        if($v->fails())
        {
          return back()->withInput()->withErrors($v);
        }else{
          $produk = Produk::find($id);
          $produk->nama = $request->get('nama');
          $produk->harga = $request->get('harga');

          $gambar = request('gambar');
          $extention = $gambar->getClientOriginalExtension();
          $name = $gambar->getClientOriginalName();
          $size = $gambar->getSize();
          $mime = $gambar->getMimeType();
          $tujuan_upload = 'build/images/produk';
          $gambar->move($tujuan_upload, $gambar->getClientOriginalName());

          $produk->gambar = $name;

          $produk->save();
          Alert::success('Produk Berhasil Di Update');
        }
        return redirect('produk');
      }
    }

    public function destroy($id)
    {
      Produk::destroy($id);
      Alert::success('Produk Berhasil Di Hapus');
      return redirect('produk');
      
    }
}
