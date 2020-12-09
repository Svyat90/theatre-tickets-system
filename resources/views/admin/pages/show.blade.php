@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.show') }} {{ __('cruds.pages.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.pages.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>{{ __("cruds.base.fields.id") }}</th>
                        <td>{{ $page->id }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans("global.parent") }} ({{ app()->getLocale() }}) </th>
                        <td>
                            @if($page->parent)
                                <a href="{{ route('admin.pages.show', $page->parent->id) }}">{{ $page->parent->name }}</a>
                            @endif
                        </td>
                    </tr>

                    @foreach($page->getFillable() as $field)
                        @if($field === 'active' || $field === 'on_header' || $field === 'on_footer')
                            <tr>
                                <th>
                                    {{ __("cruds.pages.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($page->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ __("cruds.pages.fields.{$field}") }}
                                    @if(isTranslable($page, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{!! $page->{$field} !!}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $page])

                    @include('admin.partials.media-library.show-media', ['name' => 'image', 'model' => $page, 'namespace' => 'pages'])

                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.pages.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

