@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.character.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.characters.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.character.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="scene_id">{{ trans('cruds.character.fields.scene') }}</label>
                            <select class="form-control select2" name="scene_id" id="scene_id" required>
                                @foreach($scenes as $id => $entry)
                                    <option value="{{ $id }}" {{ old('scene_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('scene'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('scene') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.scene_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="gender_id">{{ trans('cruds.character.fields.gender') }}</label>
                            <select class="form-control select2" name="gender_id" id="gender_id">
                                @foreach($genders as $id => $entry)
                                    <option value="{{ $id }}" {{ old('gender_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('gender'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('gender') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.gender_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="age_group_id">{{ trans('cruds.character.fields.age_group') }}</label>
                            <select class="form-control select2" name="age_group_id" id="age_group_id" required>
                                @foreach($age_groups as $id => $entry)
                                    <option value="{{ $id }}" {{ old('age_group_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('age_group'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('age_group') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.age_group_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="body_type_id">{{ trans('cruds.character.fields.body_type') }}</label>
                            <select class="form-control select2" name="body_type_id" id="body_type_id" required>
                                @foreach($body_types as $id => $entry)
                                    <option value="{{ $id }}" {{ old('body_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('body_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('body_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.body_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="hair_color_id">{{ trans('cruds.character.fields.hair_color') }}</label>
                            <select class="form-control select2" name="hair_color_id" id="hair_color_id" required>
                                @foreach($hair_colors as $id => $entry)
                                    <option value="{{ $id }}" {{ old('hair_color_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('hair_color'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('hair_color') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.hair_color_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="hair_lenght_id">{{ trans('cruds.character.fields.hair_lenght') }}</label>
                            <select class="form-control select2" name="hair_lenght_id" id="hair_lenght_id" required>
                                @foreach($hair_lenghts as $id => $entry)
                                    <option value="{{ $id }}" {{ old('hair_lenght_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('hair_lenght'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('hair_lenght') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.hair_lenght_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="hair_style_id">{{ trans('cruds.character.fields.hair_style') }}</label>
                            <select class="form-control select2" name="hair_style_id" id="hair_style_id" required>
                                @foreach($hair_styles as $id => $entry)
                                    <option value="{{ $id }}" {{ old('hair_style_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('hair_style'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('hair_style') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.hair_style_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="eye_color_id">{{ trans('cruds.character.fields.eye_color') }}</label>
                            <select class="form-control select2" name="eye_color_id" id="eye_color_id" required>
                                @foreach($eye_colors as $id => $entry)
                                    <option value="{{ $id }}" {{ old('eye_color_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('eye_color'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('eye_color') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.eye_color_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="eye_shape_id">{{ trans('cruds.character.fields.eye_shape') }}</label>
                            <select class="form-control select2" name="eye_shape_id" id="eye_shape_id" required>
                                @foreach($eye_shapes as $id => $entry)
                                    <option value="{{ $id }}" {{ old('eye_shape_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('eye_shape'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('eye_shape') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.eye_shape_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="skin_tone_id">{{ trans('cruds.character.fields.skin_tone') }}</label>
                            <select class="form-control select2" name="skin_tone_id" id="skin_tone_id" required>
                                @foreach($skin_tones as $id => $entry)
                                    <option value="{{ $id }}" {{ old('skin_tone_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('skin_tone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('skin_tone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.skin_tone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="facial_expression_id">{{ trans('cruds.character.fields.facial_expression') }}</label>
                            <select class="form-control select2" name="facial_expression_id" id="facial_expression_id" required>
                                @foreach($facial_expressions as $id => $entry)
                                    <option value="{{ $id }}" {{ old('facial_expression_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('facial_expression'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('facial_expression') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.facial_expression_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="emotion_id">{{ trans('cruds.character.fields.emotion') }}</label>
                            <select class="form-control select2" name="emotion_id" id="emotion_id" required>
                                @foreach($emotions as $id => $entry)
                                    <option value="{{ $id }}" {{ old('emotion_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('emotion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('emotion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.emotion_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="dress_style_id">{{ trans('cruds.character.fields.dress_style') }}</label>
                            <select class="form-control select2" name="dress_style_id" id="dress_style_id" required>
                                @foreach($dress_styles as $id => $entry)
                                    <option value="{{ $id }}" {{ old('dress_style_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('dress_style'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('dress_style') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.dress_style_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="background">{{ trans('cruds.character.fields.background') }}</label>
                            <textarea class="form-control ckeditor" name="background" id="background">{!! old('background') !!}</textarea>
                            @if($errors->has('background'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('background') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.background_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="caption">{{ trans('cruds.character.fields.caption') }}</label>
                            <input class="form-control" type="text" name="caption" id="caption" value="{{ old('caption', '') }}">
                            @if($errors->has('caption'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('caption') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.caption_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="user_id">{{ trans('cruds.character.fields.user') }}</label>
                            <select class="form-control select2" name="user_id" id="user_id" required>
                                @foreach($users as $id => $entry)
                                    <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.character.fields.user_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('frontend.characters.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $character->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection