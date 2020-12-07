<a class="btn btn-xs btn-primary" href="{{ route('admin.' . $entityName . '.show', $row->id) }}">
    {{ trans('global.view') }}
</a>

<a class="btn btn-xs btn-info" href="{{ route('admin.' . $entityName . '.edit', $row->id) }}">
    {{ trans('global.edit') }}
</a>

@if(Route::has('admin.' . $entityName . '.destroy', $row->id))
    <form action="{{ route('admin.' . $entityName . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
    </form>
@endif
