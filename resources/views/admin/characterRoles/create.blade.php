@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.characterRole.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.character-roles.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="character_id">{{ trans('cruds.characterRole.fields.character') }}</label>
                <select class="form-control select2 {{ $errors->has('character') ? 'is-invalid' : '' }}" name="character_id" id="character_id" required>
                    @foreach($characters as $id => $entry)
                        <option value="{{ $id }}" {{ old('character_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('character'))
                    <div class="invalid-feedback">
                        {{ $errors->first('character') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.characterRole.fields.character_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="role">{{ trans('cruds.characterRole.fields.role') }}</label>
                <input class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" type="text" name="role" id="role" value="{{ old('role', '') }}" required>
                @if($errors->has('role'))
                    <div class="invalid-feedback">
                        {{ $errors->first('role') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.characterRole.fields.role_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="prompt">{{ trans('cruds.characterRole.fields.prompt') }}</label>
                <textarea class="form-control {{ $errors->has('prompt') ? 'is-invalid' : '' }}" name="prompt" id="prompt" required>{{ old('prompt') }}</textarea>
                @if($errors->has('prompt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prompt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.characterRole.fields.prompt_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection