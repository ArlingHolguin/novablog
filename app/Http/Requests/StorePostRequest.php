<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    // Determine si el usuario está autorizado para realizar esta solicitud.     
    public function authorize()
    {
        // if($this->user_id == auth()->user()->id){
        //     return true;
        // }else{
        //     return false;
        // }
        return true;
    }

    // Obtenga las reglas de validación que se aplican a la solicitud.     
    public function rules()
    {
        $post = $this->route()->parameter('post');
        $rules =[
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];
        if($post){
            $rules['slug'] = 'required|unique:posts,slug,'. $post->id;
        }
        if($this->status == 2){
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required'
            ]);

        }
        return $rules;
    }
}   
