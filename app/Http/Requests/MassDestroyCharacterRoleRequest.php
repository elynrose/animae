<?php

namespace App\Http\Requests;

use App\Models\CharacterRole;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCharacterRoleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('character_role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:character_roles,id',
        ];
    }
}
