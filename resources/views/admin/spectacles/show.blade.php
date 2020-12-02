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

@endsection

