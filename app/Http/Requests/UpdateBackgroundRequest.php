<?php

namespace App\Http\Requests;

use App\Models\Background;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBackgroundRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('background_edit');
    }

    public function rules()
    {
        return [
            'scene' => [
                'required',
            ],
        ];
    }
}
