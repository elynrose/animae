@extends('layouts.admin')
@section('content')
@can('facial_expression_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.facial-expressions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.facialExpression.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.facialExpression.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FacialExpression">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.facialExpression.fields.expression') }}
                        </th>
                        <th>
                            {{ trans('cruds.facialExpression.fields.icon') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facialExpressions as $key => $facialExpression)
                        <tr data-entry-id="{{ $facialExpression->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $facialExpression->expression ?? '' }}
                            </td>
                            <td>
                                @if($facialExpression->icon)
                                    <a href="{{ $facialExpression->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $facialExpression->icon->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('facial_expression_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.facial-expressions.show', $facialExpression->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('facial_expression_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.facial-expressions.edit', $facialExpression->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('facial_expression_delete')
                                    <form action="{{ route('admin.facial-expressions.destroy', $facialExpression->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('facial_expression_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.facial-expressions.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
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
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-FacialExpression:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection