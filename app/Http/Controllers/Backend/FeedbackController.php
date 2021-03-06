<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_user;
use DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedBack = tbl_user::all();
        return view("Frontend.feedback", compact('feedBack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feedBack = tbl_user::all();
        return view("Backend.admin-views.feedback", compact('feedBack'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $store = new tbl_user;
        // $store->feed_back = $request->txtFeedBack;
        // $store->save();
        // return redirect("backend/feedback");
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
        // $edit = tbl_user::find($id);
        // return redirect('backend/feedback', compact('edit'));
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
        $update = tbl_user::find($id);
        $update->feed_back = $request->txtFeedBack;
        $update->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_user::find($id);
        $destroy->feed_back = '';
        $destroy->save();
        return redirect("backend/feedback")->with('success', "Update Feed back successfully");
    }
    public function checkFeed(){
        return back()->with('fail', 'Please Login to use this function');
    }
}
