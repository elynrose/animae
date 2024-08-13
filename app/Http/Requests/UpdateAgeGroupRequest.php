<?php

namespace App\Http\Requests;

use App\Models\AgeGroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAgeGroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('age_group_edit');
    }

    public function rules()
    {
        return [
            'age' => [
                'string',
                'nullable',
            ],
        ];
    }
}