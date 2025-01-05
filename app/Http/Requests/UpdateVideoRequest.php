<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UpdateVideoRequest extends StoreVideoRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function rules(): array
    {
        return array_merge( parent::rules(),[
            'slug'=>['required',Rule::unique('videos')->ignore($this->video),'alpha_dash:']
        ]);


    }

}
