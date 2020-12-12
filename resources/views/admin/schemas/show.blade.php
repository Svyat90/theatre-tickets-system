@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.schemas.title_singular') }} "{{ $schema->name }}"
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.schemas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>{{ trans("cruds.base.fields.id") }}</th>
                        <td>{{ $schema->id }}</td>
                    </tr>

                    @foreach($schema->getFillable() as $field)
                        @if($field === 'active')
                            <tr>
                                <th>
                                    {{ trans("cruds.schemas.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($schema->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans("cruds.schemas.fields.{$field}") }}
                                    @if(isTranslable($schema, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{{ $schema->{$field} }}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $schema])

                </tbody>
            </table>

            <div class="card">
                <div class="card-header">
                    {{ trans('global.prices') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <table class=" table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.base.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.colors.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.colors.fields.color') }}
                            </th>
                            <th>
                                {{ trans('cruds.colors.fields.price') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($schema->colors as $color)
                            <tr data-entry-id="{{ $color->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $color->id }}
                                </td>
                                <td>
                                    {{ $color->name }}
                                </td>
                                <td>
                                    {!! \App\Helpers\LabelHelper::colorLabel($color->color) !!}
                                </td>
                                <td>
                                    {{ $color->data->price }}
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-info"
                                       href="{{ route('admin.schemas.prices.edit', ['id' => $color->data->id, 'schema_id' => $schema->id]) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="table-responsive">
                    </div>
                </div>
            </div>

            @include('admin.rows.list', ['rows' => $schema->rows])

            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.schemas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

