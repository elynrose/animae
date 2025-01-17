@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.background.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.backgrounds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.background.fields.scene') }}
                        </th>
                        <td>
                            {{ $background->scene }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.background.fields.icon') }}
                        </th>
                        <td>
                            @if($background->icon)
                                <a href="{{ $background->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $background->icon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.backgrounds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection