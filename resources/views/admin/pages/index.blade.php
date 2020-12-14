@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.pages.create") }}">
                {{ __('global.add') }} {{ __('cruds.pages.title_singular') }}
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ __('cruds.pages.title_singular') }} {{ __('global.list') }}
        </div>

        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-categories">
                <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ __('cruds.base.fields.id') }}
                    </th>
                    <th>
                        {{ __('cruds.base.fields.image') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.name') }} ({{ app()->getLocale() }})
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.title') }} ({{ app()->getLocale() }})
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.type') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.order_top') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.order_footer') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.on_header') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.on_footer') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.active') }}
                    </th>
                    <th>
                        {{ __('cruds.pages.fields.date') }}
                    </th>
                    <th>
                        {{ __('cruds.base.fields.created_at') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            let deleteButtonTrans = '{{ __('global.datatables.delete') }}';
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.pages.multi_destroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).data(), function (entry) {
                        return entry.id
                    });

                    if (ids.length === 0) {
                        alert('{{ __('global.datatables.zero_selected') }}')
                        return
                    }

                    if (confirm('{{ __('global.areYouSure') }}')) {
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

            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.pages.index') }}",
                columns: [
                    {data: 'placeholder', name: 'placeholder'},
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image'},
                    {data: 'name', name: 'name'},
                    {data: 'title', name: 'title'},
                    {data: 'type', name: 'type'},
                    {data: 'order_top', name: 'order_top'},
                    {data: 'order_footer', name: 'order_footer'},
                    {data: 'on_header', name: 'on_header'},
                    {data: 'on_footer', name: 'on_footer'},
                    {data: 'active', name: 'active'},
                    {data: 'date', name: 'date'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'actions', name: '{{ __('global.actions') }}'}
                ],
                order: [[1, 'desc']],
                pageLength: 100,
            };
            $('.datatable-categories').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });
        });

    </script>
@endsection
