<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCharacterRoleRequest;
use App\Http\Requests\StoreCharacterRoleRequest;
use App\Http\Requests\UpdateCharacterRoleRequest;
use App\Models\Character;
use App\Models\CharacterRole;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CharacterRolesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('character_role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $characterRoles = CharacterRole::with(['character'])->get();

        return view('frontend.characterRoles.index', compact('characterRoles'));
    }

    public function create()
    {
        abort_if(Gate::denies('character_role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $characters = Character::pluck('caption', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.characterRoles.create', compact('characters'));
    }

    public function store(StoreCharacterRoleRequest $request)
    {
        $characterRole = CharacterRole::create($request->all());

        return redirect()->route('frontend.character-roles.index');
    }

    public function edit(CharacterRole $characterRole)
    {
        abort_if(Gate::denies('character_role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $characters = Character::pluck('caption', 'id')->prepend(trans('global.pleaseSelect'), '');

        $characterRole->load('character');

        return view('frontend.characterRoles.edit', compact('characterRole', 'characters'));
    }

    public function update(UpdateCharacterRoleRequest $request, CharacterRole $characterRole)
    {
        $characterRole->update($request->all());

        return redirect()->route('frontend.character-roles.index');
    }

    public function show(CharacterRole $characterRole)
    {
        abort_if(Gate::denies('character_role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $characterRole->load('character');

        return view('frontend.characterRoles.show', compact('characterRole'));
    }

    public function destroy(CharacterRole $characterRole)
    {
        abort_if(Gate::denies('character_role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $characterRole->delete();

        return back();
    }

    public function massDestroy(MassDestroyCharacterRoleRequest $request)
    {
        $characterRoles = CharacterRole::find(request('ids'));

        foreach ($characterRoles as $characterRole) {
            $characterRole->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
