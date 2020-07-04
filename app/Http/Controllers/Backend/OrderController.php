<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Backend.tbl_order.insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nbrId' => 'required|min:1|max:11',
            'txtDate' => 'required',
            'txtUserId' => 'required|min:1|max:11',
            'txtStatus' => 'required|min:5|max:20'
        ]);
        $store = new tbl_order;
        $store->id = $request->nbrId;
        $store->date_create = $request->txtDate;
        $store->user_id = $request->txtUserId;
        $store->status = $request->txtStatus;
        $store->save();
        return redirect("backend/menu-table")->with('success_order', "Insert data successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = tbl_order::find($id);
        return view("Backend.tbl_order.update")->with('edit_order', $edit);
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
        $request->validate([
            'nbrId' => 'required|min:1|max:11',
            'txtDate' => 'required',
            'txtUserId' => 'required|min:1|max:11',
            'txtStatus' => 'required|min:5|max:20'
        ]);
        $update = tbl_order::find($id);
        $update->id = $request->nbrId;
        $update->date_create = $request->txtDate;
        $update->user_id = $request->txtUserId;
        $update->status = $request->txtStatus;
        $update->save();
        return redirect("backend/menu-table")->with('success_order', "Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_order::find($id);
        $destroy->delete();
        return redirect("backend/menu-table")->with('success_order', "Delete data successfully");
    }
}
