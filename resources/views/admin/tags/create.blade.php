@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.create') }} {{ __('cruds.tags.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.tags.store") }}">
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
                                                {{ __('cruds.tags.fields.name') }}
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
                                                class="help-block">{{ __('cruds.tags.fields.name_helper') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
