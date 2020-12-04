@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.article_categories.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.article_categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>{{ trans("cruds.base.fields.id") }}</th>
                        <td>{{ $articleCategory->id }}</td>
                    </tr>

                    @foreach($articleCategory->getFillable() as $field)
                        @if($field === 'active')
                            <tr>
                                <th>
                                    {{ trans("cruds.article_categories.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($articleCategory->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ trans("cruds.article_categories.fields.{$field}") }}
                                    @if(isTranslable($articleCategory, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{{ $articleCategory->{$field} }}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $articleCategory])

                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.article_categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

