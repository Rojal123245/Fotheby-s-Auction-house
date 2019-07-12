<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\client;
use App\model\Items;
use App\Http\Requests\RequestItemValidation;
class RequestItemsController extends Controller
{
    protected $viewPath = 'requestItems';

    public function index()
    {
        $page['page_title'] = "User Add Items";
        $useremail = session()->get( 'email' );
        return view($this->viewPath . '.index', compact(['page']));
    }


    public function store(RequestItemValidation $request)
    {
           $mySave = Items::create([
             'title' => $request->title,
             'price' => $request->price,
             'dimension' => $request->dimension,
             'artist' => $request->artist,
             'period' => $request->period,
             'description' => $request->description,
             'category' => $request->category,
             'medium' => $request->medium ,
             'frame' => $request->frame ,
             'typeOfImg' => $request->typeOfImg ,
             'material' => $request->material ,
             'weight' => $request->weight,
             'activate' => 0
             ]);
        if ($mySave) {
            return back()->withMessage(config('activityMessage.saveMessage'));
        }else{
            return back()->withMessage(config('activityMessage.unSaveMessage'));
        }
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
