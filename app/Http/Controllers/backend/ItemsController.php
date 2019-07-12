<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Items;
use App\model\Log;
use App\Http\Requests\ItemValidation;
use Validator;
class ItemsController extends Controller
{
    protected $viewPath          = 'Items';
 public function __construct()
  {
    $this->middleware('auth');
}
    public function index()
    {
        $page['page_title']       = 'Items list';
        $items = Items::where(['recyclebin' => 0])->get();
        
        return view($this->viewPath .'.index', compact(['page','items']));
    }


    public function create()
    {
        $page['page_title']       = 'Items list: Create';
        return view($this->viewPath .'.create', compact(['page']));
    }


    public function store(ItemValidation $request)
    {
       $mySave = new Items;
       $mySave->auctiontitle = $request->auctiontitle;
       $mySave->location = $request->location;
       $mySave->lotrefno = $request->lotrefno;
       $mySave->lotno = $request->lotno;
       $mySave->title = $request->title;
       $mySave->price = $request->price;
       $mySave->dimension = $request->dimension;
       $mySave->artist = $request->artist;
       $mySave->period = $request->period;
       $mySave->description = $request->description;
       $mySave->category = $request->category;
       $mySave->medium = $request->medium;
       $mySave->frame = $request->frame; 
       $mySave->typeOfImg = $request->typeOfImg;
       $mySave->material = $request->material; 
       $mySave->weight = $request->weight;
       $mySave->auctionDate = $request->auctionDate;
       $mySave->auctionperiod = $request->auctionperiod;
       $mySave->activate = 1;
       $imageName = $request->file('itemsimg');
       if($imageName!==null)
       {
          // get the extension
          $extension = $imageName->getClientOriginalExtension();
          // create a new file name
          $new_name = date( 'Y-m-d' ) . '-' . str_random( 10 ) . '.' . $extension;
          // move file to public/images/new and use $new_name
          $imageName->move( public_path('images/new'), $new_name);
          $mySave->image = $new_name;
      }
      $save = $mySave->save();
      $log = new Log;
      $log->description = $request->auctiontitle . ' has been added successful with Lot Reference Code ' . $request->lotrefno;
      $mylog = $log->save();
      if ($mySave && $mylog) {
        return back()->withMessage(config('activityMessage.saveMessage'));
    }else{
        return back()->withMessage(config('activityMessage.unSaveMessage'));
    }
}


public function show($id)
{
    $page['page_title']       = 'Item list: show';
    $del = Items::findOrFail($id);
    $del->recyclebin = 1;
    $myDel = $del->update();
    if ($myDel) {
       $items = Items::all();
       return view($this->viewPath . '.index', compact(['page','items']));
   }else{

   }

}


public function edit($id)
{
  $page['page_title']       = 'Items list: edit';

  $data = Items::findOrFail($id);
  return view($this->viewPath .'.edit', compact(['page','data']));
}


public function update(Request $request, $id)
{
   $validator = Validator::make($request->all(), [
       'auctiontitle'                   => 'required',
       'location'                    => 'required',
       'lotrefno'                  => 'required|numeric',
       'lotno'                  => 'required|numeric',
       'period'                     => 'required|numeric',
       'title'             => 'required|min:2|max:50',
       'price'              => 'required|numeric',
       'dimension'            => 'required',
       'artist'          => 'required|min:2|max:50',
       'description'               => 'required|min:20|max:255',
       'category'                    => 'required',
       'auctionDate'                 => 'required',
       'auctionperiod'                 => 'required|min:2|max:50'
       ]);
   if ($validator->fails()) {
     return back()->withErrors($validator)->withInput();
 } 
 $update  = Items::findOrFail($id);
 $update->auctiontitle = $request->auctiontitle;
 $update->location = $request->location;
 $update->lotrefno = $request->lotrefno;
 $update->lotno = $request->lotno;
 $update->title = $request->title;
 $update->price = $request->price;
 $update->dimension = $request->dimension;
 $update->artist = $request->artist;
 $update->period = $request->period;
 $update->description = $request->description;
 $update->category = $request->category;
 $update->medium =  $request->medium ;
 $update->frame =  $request->frame ;
 $update->typeOfImg = $request->typeOfImg ;
 $update->material = $request->material ;
 $update->weight = $request->weight;
 $update->auctionDate = $request->auctionDate;
 $update->auctionperiod = $request->auctionperiod;
  $imageName = $request->file('itemsimg');
  if($imageName!==null)
  {
     // get the extension
     $extension = $imageName->getClientOriginalExtension();
     // create a new file name
     $new_name = date( 'Y-m-d' ) . '-' . str_random( 10 ) . '.' . $extension;
     // move file to public/images/new and use $new_name
     $imageName->move( public_path('images/new'), $new_name);
     $update->image = $new_name;
 }
 $myupdate = $update->update();
 if ($myupdate) {
     return back()->withMessage(config('activityMessage.updateItems') .$request->title);
 }else{
    return back()->withMessage(config('activityMessage.unSaveMessage'));
}
}


public function destroy($id)
{

    $del = Items::findOrFail($id);
    $del->activate = 1;
    $myDel = $del->update();
    if ($myDel) {
       return back()->withMessage(config('activityMessage.EnableMessage'));
  }else{
       return back()->withMessage(config('activityMessage.UnenableMessage'));
  }
}
public function display(){
  $page['page_title']       = 'Items list: restore data';
  $items = Items::where(['recyclebin' => 1])->get();
  
  return view($this->viewPath .'.display', compact(['page','items']));
}
public function restore($id)
{
    $del = Items::findOrFail($id);
    $del->recyclebin = 0;
    $myDel = $del->update();
    if ($myDel) {
      return back()->withMessage(config('activityMessage.EnableMessage'));
  }else{
     return back()->withMessage(config('activityMessage.UnenableMessage'));
  }
}
}
