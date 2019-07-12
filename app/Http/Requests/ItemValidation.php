<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
        ];
    }
}
