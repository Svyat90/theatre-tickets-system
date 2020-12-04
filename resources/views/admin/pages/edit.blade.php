@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('global.edit') }} {{ __('cruds.pages.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.pages.update", [$page->id]) }}">
                <input name="id" type="hidden" value="{{ $page->id }}"/>
                @method('PUT')
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
                                <div class="tab-pane {{ $loop->index === 0 ? 'show active' : '' }}" role="tabpanel"
                                     id="{{ $language->locale }}">
                                    <div class="m-3">
                                        @foreach($page->getTranslatable() as $field)
                                            @php
                                                $oldLocale = old($field);
                                                $oldLocaleVal = $oldLocale[$language->locale] ?? null;
                                            @endphp

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                @if ($field === 'description' || $field === 'content')
                                                    <div class="form-group">
                                                        <label for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                            {{ __("cruds.pages.fields.$field") }}
                                                        </label>
                                                        <textarea class="form-control ckeditor {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                                  name="{{ $name }}" id="{{ $name }}">{!! $oldLocale[$language->locale] ?? columnTrans($page, $field, $language->locale) !!}</textarea>
                                                        @if($errors->has($name))
                                                            <span class="text-danger">{{ $errors->first($name) }}</span>
                                                        @endif
                                                        <span class="help-block">{{ __("cruds.pages.fields.{$field}_helper") }}</span>
                                                    </div>
                                                @else
                                                    <label class="" for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                        {{ __('cruds.pages.fields.' . $field) }}
                                                    </label>
                                                    <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                           type="text"
                                                           name="{{ $name }}"
                                                           id="{{ $name }}"
                                                           value="{{ $oldLocale[$language->locale] ?? columnTrans($page, $field, $language->locale) }}" />
                                                    @if($errors->has($name))
                                                        <span class="text-danger">{{ $errors->first($name) }}</span>
                                                    @endif
                                                    <span class="help-block">
                                                        {{ __("cruds.pages.fields.{$field}_helper") }}
                                                    </span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'url' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="text" name="{{ $name }}"
                               id="{{ $name }}" value="{{ old($name, $page->$name) }}">
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="" for="{{ $name = 'order' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="number" min="0" name="{{ $name }}"
                               id="{{ $name }}" value="{{ old($name, $page->$name) }}">
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="" for="{{ $name = 'date' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <input name="{{ $name }}" id="datetimepicker" value="{{ old($name, $page->$name) }}" type='text' class="form-control datetime" />
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="" for="{{ $name = 'parent_id' }}">{{ __('global.parent') }}</label>
                        <select class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                name="{{ $name }}"
                                id="{{ $name }}" >
                            <option value="0">{{ __('global.pleaseSelect') }}</option>
                            @foreach($pages as $id => $item)
                                <option value="{{ $id }}" {{ $id == old($name, $parentId) ? 'selected' : '' }}>{{ $item }}</option>
                            @endforeach
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="required" for="{{ $name = 'on_header' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control" required>
                            <option value="0" {{ old($name, $page->$name) === "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, $page->$name) === "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="required" for="{{ $name = 'on_footer' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, $page->$name) === "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, $page->$name) === "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="required" for="{{ $name = 'active' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control" required>
                            <option value="0" {{ old($name, $page->$name) === "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, $page->$name) === "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image' }}">{{ __("cruds.pages.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.pages.fields.{$name}_helper") }}</span>
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

@section('scripts')
    <script>
        $(function () {
            $('#datetimepicker').datetimepicker({
                minDate: moment().startOf('minute').add(180, 'm'),
            });

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(allEditors[i]);
            }
        });

        let imageGridDropZone = new Dropzone("#image", {
            url: '{{ route('admin.pages.store_media') }}',
            maxFilesize: 50, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 50
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function (file, response) {
                $('form').find('input[name="image"]').remove()
                $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php $media = $page->getFirstMedia($name = 'image'); @endphp
                @if($media)
                    var file = {!! json_encode($media) !!}
                        this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, '{{ $media->getUrl('thumb') }}')
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="{{ $name }}" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        })

    </script>
@endsection
