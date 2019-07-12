<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Items;
class advanceSearchController extends Controller
{
    protected $viewPath = 'advanceSearch';

    public function index()
    {
        $page['page_title'] = "Advance Search";
        return view($this->viewPath . '.index',compact(['page']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $page['page_title'] = "Advance Search : Result";
        $error = 'Data not found';
        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        $artist = $request->artist;
        $category = $request->category;
         $allItems = Items::where('artist', $artist)->where('category',$category)->whereBetween('price', [$minprice, $maxprice])->get();
        if($allItems){
            return view($this->viewPath . '.create',compact(['page','allItems']));
        }
        else{
            return view($this->viewPath . '.create',compact(['page','error']));
        }
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
