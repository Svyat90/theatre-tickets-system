<div class="m-3">
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.rows.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-access-rows">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.base.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.row') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.color') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.on_loggia') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.on_balcony') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.on_left') }}
                        </th>
                        <th>
                            {{ trans('cruds.rows.fields.on_right') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr data-entry-id="{{ $row->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $row->id }}
                            </td>
                            <td>
                                {{ $row->row }}
                            </td>
                            <td align="center">
                                {!! \App\Helpers\LabelHelper::colorLabel($row->color->color) !!}
                            </td>
                            <td>
{{--                                {{ $row->price }}--}} 0
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($row->on_loggia) !!}
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($row->on_balcony) !!}
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($row->on_left) !!}
                            </td>
                            <td>
                                {!! \App\Helpers\LabelHelper::boolLabel($row->on_right) !!}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary"
                                   href="{{ route('admin.rows.show', $row->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info"
                                   href="{{ route('admin.rows.edit', $row->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
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
            $('.datatable-access-rows:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });
        })

    </script>
@endsection
