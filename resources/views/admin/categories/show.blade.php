@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.categories.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>{{ trans("cruds.base.fields.id") }}</th>
                        <td>{{ $category->id }}</td>
                    </tr>

                    @foreach($category->getFillable() as $field)
                        @if($field === 'active')
                            <tr>
                                <th>
                                    {{ trans("cruds.categories.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($category->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans("cruds.categories.fields.{$field}") }}
                                    @if(isTranslable($category, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{{ $category->{$field} }}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $category])

                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

