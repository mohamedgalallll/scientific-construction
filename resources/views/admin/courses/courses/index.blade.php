@extends('admin.components.tables.table')
@section('pageName','الكورسات')
@section('thead')
    <tr>
        <th>{{trans('web.id')}}</th>
        <th>{{trans('web.image')}}</th>
        <th>اسم الدوره</th>
        <th>اسم المحاضر</th>
        <th>الوصف</th>
        <th>عدد الابواب</th>
        <th>{{trans('web.status')}}</th>
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
                        @if (auth()->User()->group->categories_add == 1)
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
                scroller:   true,
                ajax: {
                    url: "{{url()->current()}}"
                },
                "columns": [
                    {data: 'id', name: 'id'},
            {
                "mRender": function (data, type, row) {
                return  '<div class="avatar  avatar-xl"><img src="'+row.image+'" alt="Img placeholder"></div>';
            }
            },
                    {data: 'name', name: 'name'},

                    {data: 'instructor_name', name: 'instructor_name'},
                    {data: 'description_excerpt', name: 'description_excerpt'},
                    {data: 'number_of_lectures', name: 'number_of_lectures'},
                    {
                        "mRender": function (data, type, row) {
                            if (row.status == 0) {
                                return '<div class="chip chip-danger"> <div class="chip-body"> <div class="chip-text">{{trans('web.unActivated')}}</div> </div> </div>';
                            }else if(row.status == 1){
                                return '<div class="chip chip-success"> <div class="chip-body"> <div class="chip-text">{{trans('web.activated')}}</div> </div> </div>';
                            }
                        }
                    },

                    {data: 'created_at', name: 'created_at'},
                    {
                        "mRender": function (data, type, row) {
                            @if (auth()->User()->group->categories_edit == 1 )
                            var data1 = '<a href="{{url()->current()}}/' + row.id + '/edit" class="action-edit w-25 color-black" data-container="body" data-toggle="tooltip" data-placement="bottom" title="تعديل" ><i class="feather icon-edit"></i></a>';
                            @endif
                            @if (auth()->User()->group->categories_delete == 1 )
                            var data2 = '<a href="javascript:void(0)" data-id="' + row.id + '"   data-container="body" data-toggle="tooltip" data-placement="bottom" title="حذف"  class="action-delete color-black show-tooltip"><i class="feather icon-trash action-delete"></i></a>';
                            @endif
                            var data3 = '<a href="{{url()->current()}}/course-id/' + row.id + '/course-class-id" class="w-25 color-black" data-container="body" data-toggle="tooltip" data-placement="bottom" title="الفصول / المحاضرات"><i class="feather icon-bookmark"></i></a>';
                            var data4 = '<a href="{{url()->current()}}/' + row.id + '/exam" class="w-25 color-black" data-container="body"  data-toggle="tooltip" data-placement="bottom" title="الامتحان" ><i class="feather icon-check-square"></i></a>';
                            return data1 + ' / ' + data2 + ' / ' + data3 + ' / ' + data4;
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
