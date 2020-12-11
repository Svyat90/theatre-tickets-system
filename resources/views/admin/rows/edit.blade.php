@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.rows.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.rows.update", [$row->id]) }}">
                <input name="id" type="hidden" value="{{ $row->id }}"/>
                @method('PUT')
                @csrf

                <div class="row">
                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label for="{{ $name = 'price' }}">
                            {{ __("cruds.rows.fields.$name") }}
                        </label>
                        <input class="form-control ckeditor {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                  name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $row->price) }}">
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.rows.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label class="" for="{{ $name = 'color_id' }}">{{ __('global.color') }}</label>
                        <select class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                name="{{ $name }}"
                                id="{{ $name }}" >
                            @foreach($colors as $id => $color)
                                <option value="{{ $id }}" {{ $id == old($name, $row->color->id) ? 'selected' : '' }}>{{ $color }}</option>
                            @endforeach
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                    </div>
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
