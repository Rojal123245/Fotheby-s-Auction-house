<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\client;
class clientController extends Controller
{
  protected $viewPath = 'clientDetails';
  public function __construct()
  {
    $this->middleware('auth');
}
  public function index()
  {
    $page['page_title'] = 'Client Details';
    $clients = client::all();
    return view($this->viewPath . '.index',compact(['page','clients']));
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
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = client::findOrFail($id);
        $del->approved = 0;
        $myDel = $del->update();
        if ($myDel) {
        return back()->withMessage(config('activityMessage.EnableMessage'));
      }else{
        return back()->withMessage(config('activityMessage.UnenableMessage'));
      }
    }
    public function changestatus($id){
        $del = client::findOrFail($id);
        $del->approved = 1;
        $myDel = $del->update();
        if ($myDel) {
          return back()->withMessage(config('activityMessage.EnableMessage'));
      }else{
         return back()->withMessage(config('activityMessage.UnenableMessage'));
      }
  }
}
