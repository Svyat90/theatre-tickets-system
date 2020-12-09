@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.show') }} {{ __('cruds.workers.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>{{ __("cruds.base.fields.id") }}</th>
                        <td>{{ $worker->id }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans("global.worker_category") }} ({{ app()->getLocale() }}) </th>
                        <td>
                            @if($worker->category)
                                <a href="{{ route('admin.worker_categories.show', $worker->category->id) }}">{{ $worker->category->name }}</a>
                            @endif
                        </td>
                    </tr>

                    @foreach($worker->getFillable() as $field)
                        @if($field === 'active' || $field === 'on_home' || $field === 'on_top')
                            <tr>
                                <th>
                                    {{ __("cruds.workers.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($worker->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ __("cruds.workers.fields.{$field}") }}
                                    @if(isTranslable($worker, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{!! $worker->{$field} !!}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $worker])

                    @include('admin.partials.media-library.show-media', ['name' => 'image', 'model' => $worker, 'namespace' => 'workers'])

                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

