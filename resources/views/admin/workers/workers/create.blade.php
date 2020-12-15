@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.create') }} {{ __('cruds.workers.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.workers.store") }}">
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
                                        @foreach($worker->getTranslatable() as $field)
                                            @php $oldLocale = old($field); @endphp

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                @if (in_array($field, ['text_1', 'text_2', 'text_3', 'text_4', 'text_5', 'text_6']))
                                                    <div class="form-group">
                                                        <label for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                            {{ __("cruds.workers.fields.$field") }}
                                                        </label>
                                                        <textarea class="form-control tinymceTextarea {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                                  name="{{ $name }}" id="{{ $name }}">{!! $oldLocale[$language->locale] ?? "" !!}</textarea>
                                                        @if($errors->has($name))
                                                            <span class="text-danger">{{ $errors->first($name) }}</span>
                                                        @endif
                                                        <span class="help-block">{{ __("cruds.workers.fields.{$field}_helper") }}</span>
                                                    </div>
                                                @else
                                                    <label class="" for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                        {{ __('cruds.workers.fields.' . $field) }}
                                                    </label>
                                                    <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                           type="text"
                                                           name="{{ $name }}"
                                                           id="{{ $name }}"
                                                           value="{{ $oldLocale[$language->locale] ?? "" }}" />
                                                    @if($errors->has($name))
                                                        <span class="text-danger">{{ $errors->first($name) }}</span>
                                                    @endif
                                                    <span class="help-block">
                                                        {{ __("cruds.workers.fields.{$field}_helper") }}
                                                    </span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label class="required" for="{{ $name = 'worker_category_id' }}">{{ __('global.worker_category') }}</label>
                        <select class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                name="{{ $name }}"
                                id="{{ $name }}" required>
                            <option value="0">{{ __('global.pleaseSelect') }}</option>
                            @foreach($workerCategories as $id => $workerCategory)
                                <option value="{{ $id }}" {{ $id == old($name, 0) ? 'selected' : '' }}>{{ $workerCategory }}</option>
                            @endforeach
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label class="required" for="{{ $name = 'on_home' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, null) == "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, null) == "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label class="required" for="{{ $name = 'on_top' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, null) == "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, null) == "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-6">
                        <label class="required" for="{{ $name = 'active' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, null) == "0" ? 'selected' : '' }}>{{ __('global.no') }}</option>
                            <option value="1" {{ old($name, null) == "1" ? 'selected' : '' }}>{{ __('global.yes') }}</option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image_2' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image_3' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image_4' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.workers.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'image_gallery' }}">{{ __("cruds.workers.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has($name) ? 'is-invalid' : '' }}" id="{{ $name }}">
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

        let imageGridDropZone = new Dropzone("#image", {
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

        let image3DropZone = new Dropzone("#image_3", {
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
                $('form').find('input[name="image_3"]').remove()
                $('form').append('<input type="hidden" name="image_3" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image_3"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {

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

        let image4DropZone = new Dropzone("#image_4", {
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
                $('form').find('input[name="image_4"]').remove()
                $('form').append('<input type="hidden" name="image_4" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image_4"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {

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

        let imageGalleryDropZone = new Dropzone("#image_gallery", {
            url: '{{ route('admin.workers.store_media') }}',
            maxFilesize: 50, // MB
            maxFiles: 20,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 50
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function (file, response) {
                $('form').find('input[name="image_gallery"]').remove()
                $('form').append('<input type="hidden" name="image_gallery[]" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[id="image_gallery_' + file.id + '"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {

            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response // dropzone sends it's own error messages in string
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
