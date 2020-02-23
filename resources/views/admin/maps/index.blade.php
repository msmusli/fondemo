@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.maps.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.map.title_singular') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.map.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-map">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.map.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.map.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.map.fields.categories') }}
                        </th>
                        <th>
                            {{ trans('cruds.map.fields.photos') }}
                        </th>
                        <th>
                            latitude
                        </th>
                        <th>
                            longitude
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($maps as $key => $map)
                        <tr data-entry-id="{{ $map->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $map->id ?? '' }}
                            </td>
                            <td>
                                {{ $map->name ?? '' }}
                            </td>
                            <td>
                                @foreach($map->categories as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($map->photos as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $map->latitude ?? '' }}
                            </td>
                            <td>
                                {{ $map->longitude ?? '' }}
                            </td>
                            
                            <td>
                                
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.maps.show', $map->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                               

                                
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.maps.edit', $map->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                               

                                
                                    <form action="{{ route('admin.maps.destroy', $map->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                               

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

  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.maps.massDestroy') }}",
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


  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-map:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection