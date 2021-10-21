<?php

namespace App\Http\Requests\Auction;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAuctionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'start_time'    => ['required'],
            'close_time'    => ['required'],
            'result_time'   => ['required'],
            'paying_time'   => ['required'],
            'product_id'     =>['required'],
            'category_id'     =>['required']
        ];
    }
}
