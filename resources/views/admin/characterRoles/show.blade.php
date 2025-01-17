@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.characterRole.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.character-roles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.characterRole.fields.character') }}
                        </th>
                        <td>
                            {{ $characterRole->character->caption ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.characterRole.fields.role') }}
                        </th>
                        <td>
                            {{ $characterRole->role }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.characterRole.fields.prompt') }}
                        </th>
                        <td>
                            {{ $characterRole->prompt }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.character-roles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection