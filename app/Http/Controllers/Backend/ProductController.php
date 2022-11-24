<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        return view('backend.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productstore(Request $request)
    {   
        $prd = new ProductModel;
        $prd->pname = $request->pname;
        $prd->pdes = $request->pdes;
        $prd->cat = $request->cat;
        $prd->scat = $request->scat;
        $prd->price = $request->price;
        $prd->status = $request->status;
        $prd->save();
        return redirect()->route("showproduct");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduct()
    {
        $products = ProductModel::all();
       return view("backend.showproduct" , compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduct($id)
    {
        $products = ProductModel::find($id);
       return view("backend.editproduct" , compact("products"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ProductModel::find($id);
        $data->pname = $request->pname;
        $data->pdes = $request->pdes;
        $data->cat = $request->cat;
        $data->scat = $request->scat;
        $data->price = $request->price;
        $data->status = $request->status;
        $data->update();
        return redirect()->route("showproduct");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = ProductModel::find($id);
        $delete->delete();
        return redirect()->route("showproduct");
       
    }
    public function status($id){
        $status = ProductModel::find($id);
       if($status->status==1){
        $status->status=2;
       }
       else{
        $status->status=1;
       }
       $status->update();
        return redirect()->route("showproduct");
    }
}
