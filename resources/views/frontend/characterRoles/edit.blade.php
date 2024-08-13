@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.characterRole.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.character-roles.update", [$characterRole->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="character_id">{{ trans('cruds.characterRole.fields.character') }}</label>
                            <select class="form-control select2" name="character_id" id="character_id" required>
                                @foreach($characters as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('character_id') ? old('character_id') : $characterRole->character->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                            <input class="form-control" type="text" name="role" id="role" value="{{ old('role', $characterRole->role) }}" required>
                            @if($errors->has('role'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('role') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.characterRole.fields.role_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="prompt">{{ trans('cruds.characterRole.fields.prompt') }}</label>
                            <textarea class="form-control" name="prompt" id="prompt" required>{{ old('prompt', $characterRole->prompt) }}</textarea>
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

        </div>
    </div>
</div>
@endsection