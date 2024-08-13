<?php

namespace App\Http\Requests;

use App\Models\Character;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCharacterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('character_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'scene_id' => [
                'required',
                'integer',
            ],
            'age_group_id' => [
                'required',
                'integer',
            ],
            'body_type_id' => [
                'required',
                'integer',
            ],
            'hair_color_id' => [
                'required',
                'integer',
            ],
            'hair_lenght_id' => [
                'required',
                'integer',
            ],
            'hair_style_id' => [
                'required',
                'integer',
            ],
            'eye_color_id' => [
                'required',
                'integer',
            ],
            'eye_shape_id' => [
                'required',
                'integer',
            ],
            'skin_tone_id' => [
                'required',
                'integer',
            ],
            'facial_expression_id' => [
                'required',
                'integer',
            ],
            'emotion_id' => [
                'required',
                'integer',
            ],
            'dress_style_id' => [
                'required',
                'integer',
            ],
            'background' => [
                'required',
            ],
            'caption' => [
                'string',
                'nullable',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
