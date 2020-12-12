<div class="m-3">
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.cols.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-access-cols">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.base.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.cols.fields.seat') }}
                        </th>

                        <th>
                            {{ trans('cruds.cols.fields.on_left') }}
                        </th>
                        <th>
                            {{ trans('cruds.cols.fields.on_right') }}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cols as $col)
                        <tr data-entry-id="{{ $col->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $col->id }}
                            </td>
                            <td>
                                {{ $col->seat }}
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($col->on_left) !!}
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($col->on_right) !!}
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

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[1, 'desc']],
                pageLength: 25,
            });
            $('.datatable-access-cols:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });
        })

    </script>
@endsection
