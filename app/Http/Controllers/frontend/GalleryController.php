<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Items;
use App\model\client;
use App\model\CommissionBid;

class GalleryController extends Controller
{
    protected $viewPath = 'catalogue';

    public function index()
    {

        $page['page_title'] = "Catalogue";
        $allItems = Items::all();
        return view($this->viewPath . '.index',compact(['page','allItems']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       
        session_start();
        $query = Items::select('id','auctiontitle')->where('id', '=' , $id)->get();
        $st = $query->implode('auctiontitle', ', ');

         $mySave = new CommissionBid;
         $mySave->client_email = $_SESSION['useremail'];
         $mySave->item_id = $st;
        $save = $mySave->save();
        return back()->withMessage(config('activityMessage.Commission'));

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
        //
    }
}
