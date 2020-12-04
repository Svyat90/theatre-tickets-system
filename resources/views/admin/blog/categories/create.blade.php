@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.create') }} {{ __('cruds.article_categories.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.article_categories.store") }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                            @foreach($languages as $language)
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->index === 0 ? 'active' : '' }}"
                                       href="#{{ $language->locale }}" role="tab" data-toggle="tab">
                                        {{ $language->locale }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach($languages as $language)
                                @php $oldLocale = old('name'); @endphp

                                <div class="tab-pane {{ $loop->index === 0 ? 'show active' : '' }}" role="tabpanel"
                                     id="{{ $language->locale }}">
                                    <div class="m-3">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label class="" for="{{ $name = 'name[' . $language->locale . ']' }}">
                                                {{ __('cruds.article_categories.fields.name') }}
                                            </label>
                                            <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                   type="text"
                                                   name={{ $name }}"
                                                   id={{ $name }}"
                                                   value="{{ $oldLocale[$language->locale] ?? "" }}">
                                            @if($errors->has($name))
                                                <span class="text-danger">{{ $errors->first($name) }}</span>
                                            @endif
                                            <span
                                                class="help-block">{{ __('cruds.article_categories.fields.name_helper') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'active' }}">{{ __("cruds.article_categories.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, null) === "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, null) === "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.article_categories.fields.{$name}_helper") }}</span>
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
