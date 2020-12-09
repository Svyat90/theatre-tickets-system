<div class="m-3">
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.spectacles.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.spectacles.title_singular') }}
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.spectacles.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-access-spectacles">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.base.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.name') }} ({{ app()->getLocale() }})
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.author') }} ({{ app()->getLocale() }})
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.producer') }} ({{ app()->getLocale() }})
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.slug') }}
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.min_age') }}
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.duration') }}
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.active') }}
                        </th>
                        <th>
                            {{ trans('cruds.spectacles.fields.start_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.base.fields.created_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($spectacles as $spectacle)
                        <tr data-entry-id="{{ $spectacle->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $spectacle->id }}
                            </td>
                            <td>
                                {{ $spectacle->name }}
                            </td>
                            <td>
                                {{ $spectacle->author }}
                            </td>
                            <td>
                                {{ $spectacle->producer }}
                            </td>
                            <td>
                                {{ $spectacle->slug }}
                            </td>
                            <td>
                                {{ $spectacle->min_age }}
                            </td>
                            <td>
                                {{ $spectacle->duration }}
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($spectacle->active) !!}
                            </td>
                            <td>
                                {{ $spectacle->start_at }}
                            </td>
                            <td>
                                {{ $spectacle->created_at }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary"
                                   href="{{ route('admin.spectacles.show', $spectacle->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info"
                                   href="{{ route('admin.spectacles.edit', $spectacle->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.spectacles.destroy', $spectacle->id) }}"
                                      method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                      style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger"
                                           value="{{ trans('global.delete') }}">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.spectacles.multi_destroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[1, 'desc']],
                pageLength: 25,
            });
            $('.datatable-access-spectacles:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection
