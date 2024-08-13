<?php

namespace App\Http\Requests;

use App\Models\CharacterRole;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCharacterRoleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('character_role_edit');
    }

    public function rules()
    {
        return [
            'character_id' => [
                'required',
                'integer',
            ],
            'role' => [
                'string',
                'required',
            ],
            'prompt' => [
                'required',
            ],
        ];
    }
}
