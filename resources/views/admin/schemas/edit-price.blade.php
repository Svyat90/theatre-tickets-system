@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('global.edit') }} {{ __('cruds.colors.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.schemas.prices.update", [$colorPivot->id]) }}">
                <input name="schema_id" type="hidden" value="{{ $schemaId }}"/>
                @method('PUT')
                @csrf

                <div class="row">
                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label for="{{ $name = 'price' }}">
                            {{ __("cruds.colors.fields.$name") }}
                        </label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                               name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $colorPivot->price) }}">
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.colors.fields.{$name}_helper") }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ __('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
