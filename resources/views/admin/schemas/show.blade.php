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

