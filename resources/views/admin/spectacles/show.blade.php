@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.show') }} {{ __('cruds.spectacles.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.spectacles.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>{{ __("cruds.base.fields.id") }}</th>
                        <td>{{ $spectacle->id }}</td>
                    </tr>

                    @foreach($spectacle->getFillable() as $field)
                        @if($field === 'active')
                            <tr>
                                <th>
                                    {{ __("cruds.spectacles.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($spectacle->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ __("cruds.spectacles.fields.{$field}") }}
                                    @if(isTranslable($spectacle, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{{ $spectacle->{$field} }}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $spectacle])

                    @include('admin.partials.media-library.show-media', ['name' => 'image_grid', 'model' => $spectacle, 'namespace' => 'spectacles'])
                    @include('admin.partials.media-library.show-media', ['name' => 'image_detail', 'model' => $spectacle, 'namespace' => 'spectacles'])
                    @include('admin.partials.media-library.show-media', ['name' => 'image_gallery', 'model' => $spectacle, 'namespace' => 'spectacles'])

                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.spectacles.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ trans('global.relatedData') }}
        </div>
        <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#related_categories" role="tab" data-toggle="tab">
                    {{ trans('global.categories') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#access_users" role="tab" data-toggle="tab">
                    {{ trans('global.tags') }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" role="tabpanel" id="related_categories">
                @includeIf('admin.partials.relationships.related-categories', ['categories' => $spectacle->categories])
            </div>
            <div class="tab-pane" role="tabpanel" id="access_users">
                @includeIf('admin.partials.relationships.related-tags', ['tags' => $spectacle->tags])
            </div>
        </div>
    </div>

@endsection

