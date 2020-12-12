@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.rows.title') }} "{{ $row->row }}"
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
                        <td>{{ $row->id }}</td>
                    </tr>

                    @foreach($row->getFillable() as $field)
                        @if($field === 'color_id')
                            @continue
                        @endif

                        @if(in_array($field, ['on_loggia', 'on_balcony', 'on_left', 'on_right']))
                            <tr>
                                <th>
                                    {{ trans("cruds.rows.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($row->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans("cruds.rows.fields.{$field}") }}
                                </th>
                                <td>{{ $row->{$field} }}</td>
                            </tr>
                        @endif
                    @endforeach

                    <tr>
                        <th>Color {{ trans("cruds.base.fields.id") }}</th>
                        <td>{{ $row->color->id }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans("cruds.rows.fields.color") }}</th>
                        <td>{!! \App\Helpers\LabelHelper::colorLabel($row->color->color) !!}</td>
                    </tr>

                    @include('admin.partials.item-action-table-dates', ['model' => $row])

                </tbody>
            </table>

            @include('admin.cols.list', ['cols' => $row->cols])

            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rows.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

