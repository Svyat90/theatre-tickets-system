@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('global.edit') }} {{ __('cruds.spectacles.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.spectacles.update", [$spectacle->id]) }}">
                <input name="id" type="hidden" value="{{ $spectacle->id }}"/>
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
                                        @foreach($spectacle->getTranslatable() as $field)
                                            @php
                                                $oldLocale = old($field);
                                                $oldLocaleVal = $oldLocale[$language->locale] ?? null;
                                            @endphp

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class=""
                                                       for="{{ $name = $field . '[' . $language->locale . ']' }}">
                                                    {{ __('cruds.spectacles.fields.' . $field) }}
                                                </label>
                                                <input
                                                    class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                                    type="text"
                                                    name="{{ $name }}"
                                                    id="{{ $name }}"
                                                    value="{{ $oldLocaleVal ?? columnTrans($spectacle, $field, $language->locale) }}" />
                                                @if($errors->has($name))
                                                    <span class="text-danger">{{ $errors->first($name) }}</span>
                                                @endif
                                                <span
                                                    class="help-block">{{ __("cruds.spectacles.fields.{$field}_helper") }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'slug' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="text" name="{{ $name }}"
                               id="{{ $name }}" value="{{ old($name, $spectacle->$name) }}" required>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'min_age' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="number" min="1" max="18" name="{{ $name }}"
                               id="{{ $name }}" value="{{ old($name, $spectacle->$name) }}" required>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'duration' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="number" min="0" name="{{ $name }}"
                               id="{{ $name }}" value="{{ old($name, $spectacle->$name) }}" required>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'start_at' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <input name="{{ $name }}" id="datetimepicker" value="{{ old($name, $spectacle->$name) }}" type='text' class="form-control datetime" />
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>


                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required"
                               for="{{ $name = 'active' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <select name="{{ $name }}" id="{{ $name }}" class="form-control">
                            <option value="0" {{ old($name, $spectacle->active) == false ? 'selected' : '' }}>false
                            </option>
                            <option value="1" {{ old($name, $spectacle->active) == true ? 'selected' : '' }}>true
                            </option>
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'category_ids' }}">{{ __('global.categories') }}</label>
                        <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all"
                              style="border-radius: 0">{{ __('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all"
                                  style="border-radius: 0">{{ __('global.deselect_all') }}</span>
                        </div>
                        <select class="form-control select2 {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                name="{{ $name }}[]"
                                id="{{ $name }}" multiple >
                            @foreach($categories as $id => $category)
                                <option value="{{ $id }}" {{ in_array($id, old($name, $categoryIds)) ? 'selected' : '' }}>{{ $category }}</option>
                            @endforeach
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="" for="{{ $name = 'tag_ids' }}">{{ __('global.tags') }}</label>
                        <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all"
                              style="border-radius: 0">{{ __('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all"
                                  style="border-radius: 0">{{ __('global.deselect_all') }}</span>
                        </div>
                        <select class="form-control select2 {{ $errors->has($name) ? 'is-invalid' : '' }}"
                                name="{{ $name }}[]"
                                id="{{ $name }}" multiple >
                            @foreach($tags as $id => $tag)
                                <option value="{{ $id }}" {{ in_array($id, old($name, $tagIds)) ? 'selected' : '' }}>{{ $tag }}</option>
                            @endforeach
                        </select>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'image_grid' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'image_detail' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has($name) ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="required" for="{{ $name = 'image_gallery' }}">{{ __("cruds.spectacles.fields.$name") }}</label>
                        <div class="needsclick dropzone {{ $errors->has($name) ? 'is-invalid' : '' }}" id="{{ $name }}">
                        </div>
                        @if($errors->has($name))
                            <span class="text-danger">{{ $errors->first($name) }}</span>
                        @endif
                        <span class="help-block">{{ __("cruds.spectacles.fields.{$name}_helper") }}</span>
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

        let imageGridDropZone = new Dropzone("#image_grid", {
            url: '{{ route('admin.spectacles.store_media') }}',
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
                $('form').find('input[name="image_grid"]').remove()
                $('form').append('<input type="hidden" name="image_grid" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="file"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php $media = $spectacle->getFirstMedia($name = 'image_grid'); @endphp
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

        let imageDetailDropZone = new Dropzone("#image_detail", {
            url: '{{ route('admin.spectacles.store_media') }}',
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
                $('form').find('input[name="image_detail"]').remove()
                $('form').append('<input type="hidden" name="image_detail" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="file"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php $media = $spectacle->getFirstMedia($name = 'image_detail'); @endphp
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

        let imageGalleryDropZone = new Dropzone("#image_gallery", {
            url: '{{ route('admin.spectacles.store_media') }}',
            maxFilesize: 50, // MB
            maxFiles: 10,
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
                    $('form').find('input[name="file"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php $mediaList = $spectacle->getMedia('image_gallery'); @endphp
                @if($mediaList)
                    @foreach($mediaList as $media)
                        var file = {!! json_encode($media) !!}
                            this.options.addedfile.call(this, file)
                        this.options.thumbnail.call(this, file, '{{ $media->getUrl('thumb') }}')
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="image_gallery[]" value="' + file.file_name + '">')
                        this.options.maxFiles = this.options.maxFiles - 1
                    @endforeach
                @endif
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
