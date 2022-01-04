<?php
namespace App\Http\Requests;

class AuthRequest
{
    public function rules()
    {
       return [
         'email' => 'required'
       ];
    }
}
