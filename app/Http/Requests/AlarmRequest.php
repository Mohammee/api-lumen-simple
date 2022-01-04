<?php
namespace App\Http\Requests;

class AlarmRequest
{
    public function rules()
    {
       request()->merge(['generate_key' => request()->header('x-generate-key')]);
        return [
            'generate_key' => 'required',
            'coin_id' => 'required|exists:cryptocurrencies,id',
            'operator_type' => 'required|in:larger,smaller,equals',
            'value' => 'required|numeric'
        ];
    }
}
