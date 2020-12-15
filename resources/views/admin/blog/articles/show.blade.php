@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('global.show') }} {{ __('cruds.articles.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>{{ __("cruds.base.fields.id") }}</th>
                        <td>{{ $article->id }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans("global.article_category") }} ({{ app()->getLocale() }}) </th>
                        <td>
                            @if($article->category)
                                <a href="{{ route('admin.article_categories.show', $article->category->id) }}">{{ $article->category->name }}</a>
                            @endif
                        </td>
                    </tr>

                    @foreach($article->getFillable() as $field)
                        @if($field === 'active' || $field === 'on_header' || $field === 'on_footer' || $field === 'on_home')
                            <tr>
                                <th>
                                    {{ __("cruds.articles.fields.{$field}") }}
                                </th>
                                <td>{!! \App\Helpers\LabelHelper::boolLabel($article->{$field}) !!}</td>
                            </tr>
                        @else
                            <tr>
                                <th>
                                    {{ __("cruds.articles.fields.{$field}") }}
                                    @if(isTranslable($article, $field)) ({{ app()->getLocale() }}) @endif
                                </th>
                                <td>{!! $article->{$field} !!}</td>
                            </tr>
                        @endif
                    @endforeach

                    @include('admin.partials.item-action-table-dates', ['model' => $article])

                    @include('admin.partials.media-library.show-media', ['name' => 'image', 'model' => $article, 'namespace' => 'articles'])
                    @include('admin.partials.media-library.show-media', ['name' => 'image_1', 'model' => $article, 'namespace' => 'articles'])
                    @include('admin.partials.media-library.show-media', ['name' => 'image_2', 'model' => $article, 'namespace' => 'articles'])

                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                        {{ __('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

