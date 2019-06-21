<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $result=0;
        if(isset($monday))
        {
            $result=1000000;
        }
        if(isset($tuesday))
        {
            $result+=0100000;
        }
        if(isset($wednesday)){
            $result+=00010000;
        }
         if(isset($thursday)){
             $result+=00001000;
         }
         if(isset($friday)){
             $result+=00000100;
         }
         if(isset($saturday)){
             $result+=00000010;
         }
         if(isset($sunday)){
             $result+=00000001;
         }
switch ($result){
    case 00000001:return [
        //
    ];break;
    case 0000011:return [
        //
    ];break;
    case 0000111:return [
        //
    ];break;
    case 0001111:return [
        //
    ];break;
    case 0011111:return [
        //
    ];break;
    case 0111111:return [
        //
    ];break;
    case 1111111:return [
        //
    ];break;

}
        return [
            //
        ];
    }
}
