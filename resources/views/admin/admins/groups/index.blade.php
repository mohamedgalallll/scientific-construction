@extends('admin.components.tables.table')
@section('pageName',trans('web.adminGroups'))
@section('thead')
    <tr>
        <th>{{trans('web.id')}}</th>
        <th>{{trans('web.name')}}</th>
        <th>{{trans('web.createdAt')}}</th>
        <th>{{trans('web.actions')}}</th>
    </tr>

@stop
@section('table_scripts')
    <script>
        $(document).ready(function () {
            "use strict";
            var dataListView = $(".data-list-view").DataTable({
                responsive: true,
                columnDefs: [
                    {
                        orderable: true,
                        targets: 0,
                        // checkboxes: { selectRow: true }
                    }
                ],
                dom: '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
                oLanguage: {
                    sLengthMenu: "_MENU_",
                    sSearch: ""
                },
                aLengthMenu: [[15, 50, 100, 200, 500, 1000,-1], [15, 50, 100, 200, 500, 1000,'{{trans('web.showAll')}}']],
                select: {
                    style: "multi"
                },
                order: [[1, "asc"]],
                bInfo: true,
                pageLength: 15,
                buttons: [
                        @if (auth()->User()->group_id->admin_groups_add == 1)
                    {

                        text: "<i class='feather icon-plus'></i>{{trans('web.addNew')}}",
                        action: function () {

                            $(".overlay-bg").addClass("show");
                            window.location.href = "{{url()->current()}}/create";
                        },
                        className: "btn btn-white  buttons mb-1  waves-effect waves-light"
                    },
                        @endif
                    {extend:'copy',text:'<i class="feather icon-copy"></i>',className:'btn btn-white mb-1  waves-effect waves-light'},
                    {extend:'csv',text:'<i class="fa fa-file-archive-o"></i>',className:'btn btn-white mb-1  waves-effect waves-light'},
                    {extend:'excel',text:'<i class="fa fa-file-excel-o"></i>',className:'btn btn-white mb-1  waves-effect waves-light'},
                    {extend:'pdf',text:'<i class="fa fa-file-pdf-o"></i>',className:'btn btn-white mb-1  waves-effect waves-light'},
                    {extend:'print',text:'<i class="feather icon-printer\n"></i>',className:'btn btn-white mb-1  waves-effect waves-light'},
                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{url()->current()}}"
                },
                "columns": [
                    {data: 'id' , name: 'id'},
                    {
                        "mRender": function (data, type, row) {
                            @if(session('lang') == 'en')
                                return row.name_en;
                                @else
                                    return row.name_ar;
                                @endif
                        }
                    },
                    {data: 'created_at' , name: 'created_at'},
                    {
                        "mRender": function (data, type, row) {
                            var data1 = '',
                                data2 = '' ;
                                @if (auth()->User()->group->admin_groups_edit == 1 )
                            var data1 = '<a href="{{url()->current()}}/' + row.id + '/edit" class="action-edit"><i class="feather icon-edit"></i></a>';
                                @endif
                                @if (auth()->User()->group->admin_groups_delete == 1 )
                            var data2 = '<a href="javascript:void(0)" data-id="' + row.id + '"  class="action-delete"><i class="feather icon-trash action-delete"></i></a>';
                            @endif
                                return data1 + data2;
                        }, orderable: false, searchable: false
                    }
                ],
                initComplete: function (settings, json) {
                    $(".dt-buttons .btn").removeClass("btn-secondary")
                }
            });
        });
    </script>
@stop
