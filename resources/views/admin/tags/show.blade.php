@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.tags.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.tags.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>{{ trans("cruds.base.fields.id") }}</th>
                        <td>{{ $tag->id }}</td>
                    </tr>

                    @foreach($tag->getFillable() as $field)
                        <tr>
                            <th>
                                {{ trans("cruds.tags.fields.{$field}") }}
                                @if(isTranslable($tag, $field)) ({{ app()->getLocale() }}) @endif
                            </th>
                            <td>{{ $tag->{$field} }}</td>
                        </tr>
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $tag])

                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.tags.index') }}">
                        {{ trans('global.back_to_list') }}
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
                <a class="nav-link" href="#related_spectacles" role="tab" data-toggle="tab">
                    {{ trans('global.spectacles') }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" role="tabpanel" id="related_spectacles">
                @includeIf('admin.partials.relationships.related-spectacles', ['spectacles' => $tag->spectacles])
            </div>
        </div>
    </div>


@endsection

