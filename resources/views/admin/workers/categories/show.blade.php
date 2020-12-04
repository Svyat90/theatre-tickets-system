@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ __('cruds.worker_categories.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.worker_categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>{{ trans("cruds.base.fields.id") }}</th>
                        <td>{{ $workerCategory->id }}</td>
                    </tr>

                    @foreach($workerCategory->getFillable() as $field)
                        @if($field === 'active')
                            <tr>
                                <th>
                                    {{ trans("cruds.worker_categories.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($workerCategory->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans("cruds.worker_categories.fields.{$field}") }}
                                    @if(isTranslable($workerCategory, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{{ $workerCategory->{$field} }}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $workerCategory])

                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.worker_categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

