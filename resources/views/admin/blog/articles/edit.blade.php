@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('global.edit') }} {{ __('cruds.articles.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.articles.update", [$article->id]) }}">
                <input name="id" type="hidden" value="{{ $article->id }}"/>
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
                                        @foreach($article->getTranslatable() as $field)
                                            @php
                                                $oldLocale = old($field);
                                                $oldLocaleVal = $oldLocale[$language->locale] ?? null;
                                            @endphp

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                @if (in_array($field, ['text_1', 'text_2', 'text_3', 'text_4', 'description', 'content']))
                                                    <div class="form-group">
                                                        <label for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                            {{ __("cruds.articles.fields.$field") }}
                                                        </label>
                                                        <textarea class="form-control tinymceTextarea {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                                  name="{{ $name }}" id="{{ $name }}">{!! $oldLocale[$language->locale] ?? $article->getTranslation($field, $language->locale) !!}</textarea>
                                                        @if($errors->has($name))
                                                            <span class="text-danger">{{ $errors->first($name) }}</span>
                                                        @endif
                                                        <span class="help-block">{{ __("cruds.articles.fields.{$field}_helper") }}</span>
                                                    </div>
                                                @else
                                                    <label class="" for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                        {{ __('cruds.articles.fields.' . $field) }}
                                                    </label>
                                                    <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                           type="text"
                                                           name="{{ $name }}"
                                                           id="{{ $name }}"
                                                           value="{{ $oldLocale[$language->locale] ?? $article->getTranslation($field, $language->locale) }}" />
                                                    @if($errors->has($name))
                                                        <span class="text-danger">{{ $errors->first($name) }}</span>
                                                    @endif
                                                    <span class="help-block">
                                                        {{ __("cruds.articles.fields.{$field}_helper") }}
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
                        <label class="" for="{{ $name = 'video_url' }}">{{ __("cruds.articles.fields.$name") }}</label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="text" name="{{ $name }}"
                               id="{{ $name }}" value="{{ old($name, $article->$name) }}">
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.articles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="" for="{{ $name = 'date' }}">{{ __("cruds.articles.fields.$name") }}</label>
                        <input name="{{ $name }}" id="datetimepicker" value="{{ old($name, $article->$name) }}" type='text' class="form-control datetime" />
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.articles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="" for="{{ $name = 'article_category_id' }}">{{ __('global.article_category') }}</label>
                        <select class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                name="{{ $name }}"
                                id="{{ $name }}" >
                            <option value="0">{{ __('global.pleaseSelect') }}</option>
                            @foreach($articleCategories as $id => $articleCategory)
                                <option value="{{ $id }}" {{ $id == old($name, $article->category ? $article->category->id : 0) ? 'selected' : '' }}>{{ $articleCategory }}</option>
                            @endforeach
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="required" for="{{ $name = 'on_home' }}">{{ __("cruds.articles.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, $article->$name) == "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, $article->$name) == "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.articles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <label class="required" for="{{ $name = 'active' }}">{{ __("cruds.articles.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control" required>
                            <option value="0" {{ old($name, $article->$name) == "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, $article->$name) == "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.articles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image' }}">{{ __("cruds.articles.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.articles.fields.{$name}_helper") }}</span>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'image_1' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'image_2' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
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
        });

        let imageGridDropZone = new Dropzone("#image", {
            url: '{{ route('admin.articles.store_media') }}',
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
                @php $media = $article->getFirstMedia($name = 'image'); @endphp
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

        let image1DropZone = new Dropzone("#image_1", {
            url: '{{ route('admin.workers.store_media') }}',
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
                $('form').find('input[name="image_1"]').remove()
                $('form').append('<input type="hidden" name="image_1" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image_1"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php $media = $article->getFirstMedia($name = 'image_1'); @endphp
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

        let image2DropZone = new Dropzone("#image_2", {
            url: '{{ route('admin.workers.store_media') }}',
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
                $('form').find('input[name="image_2"]').remove()
                $('form').append('<input type="hidden" name="image_2" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image_2"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php $media = $article->getFirstMedia($name = 'image_2'); @endphp
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
