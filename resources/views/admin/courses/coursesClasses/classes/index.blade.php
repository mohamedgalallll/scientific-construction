@extends('admin.components.tables.table')
@section('pageName','الكورسات')
@section('thead')
    <tr>
        <th>{{trans('web.id')}}</th>
        <th>اسم الفصل</th>
        <th>اسم الدوره</th>
        <th> عدد الاسأله</th>
        <th>{{trans('web.createdAt')}}</th>
        <th>{{trans('web.actions')}}</th>
    </tr>
@stop
@if (auth()->User()->group->categories_add == 1)
@section('modal')
    @include('admin..courses.coursesClasses.classes.create',['id'=>'createmodal','name'=>'اضافه فصل جديد','action'=>url()->current()])
@stop
@endif
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
                aLengthMenu: [[15, 50, 100, 200, 500, 1000, -1], [15, 50, 100, 200, 500, 1000, '{{trans('web.showAll')}}']],
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
                            $(this).removeClass("btn-secondary");
                            $(".add-new-data").addClass("show");
                            $(".overlay-bg").addClass("show");
                        },
                        className: "btn btn-white  buttons mb-1  waves-effect waves-light"
                    },
                        @endif
                    {
                        extend: 'copy',
                        text: '<i class="feather icon-copy"></i>',
                        className: 'btn btn-white mb-1  waves-effect waves-light'
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fa fa-file-archive-o"></i>',
                        className: 'btn btn-white mb-1  waves-effect waves-light'
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        className: 'btn btn-white mb-1  waves-effect waves-light'
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        className: 'btn btn-white mb-1  waves-effect waves-light'
                    },
                    {
                        extend: 'print',
                        text: '<i class="feather icon-printer"></i>',
                        className: 'btn btn-white mb-1  waves-effect waves-light'
                    },
                ],
                processing: true,
                serverSide: true,
                scroller: true,
                ajax: {
                    url: "{{url()->current()}}"
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'course_name', name: 'course_name'},
                    {data: 'number_of_questions', name: 'number_of_questions'},
                    {data: 'created_at', name: 'created_at'},
                    {
                        "mRender": function (data, type, row) {
                            var data1 = '<a href="{{url()->current()}}/' + row.id + '/edit"  data-toggle="tooltip" data-placement="bottom" title="تعديل"  data-container="body"  class="action-edit w-25 color-black"><i class="feather icon-edit "></i></a>';
                            var data2 = '<a href="javascript:void(0)" data-id="' + row.id + '"  class="action-delete w-25 color-black"  data-container="body" data-toggle="tooltip" data-placement="bottom" title="حذف" ><i class="feather icon-trash action-delete "></i></a>';
                            var data3 = '<a href="{{url()->current()}}/' + row.id + '/exam" class="w-25 color-black"  data-toggle="tooltip"  data-container="body" data-placement="bottom" title="الامتحان" ><i class="feather icon-alert-octagon w-25"></i></a>';
                            var data4 = '<a href="{{url()->current()}}/' + row.id + '/lecture" class="w-25 color-black"  data-toggle="tooltip" data-container="body" data-placement="bottom" title="المحاضرات" ><i class="fa fa-adminmap "></i></a>';
                            var data5 = '<a href="{{url()->current()}}/' + row.id + '/media" class="w-25 color-black"  data-toggle="tooltip" data-container="body" data-placement="bottom" title="الشرائح" ><i class="feather icon-film "></i></a>';
                            var data6 = '<a href="{{url()->current()}}/' + row.id + '/question" class="w-25 color-black"  data-toggle="tooltip" data-container="body" data-placement="bottom" title="اسأله الامتحان" ><i class="feather icon-check-circle "></i></a>';
                            var data7 = '<a href="{{url()->current()}}/' + row.id + '/instructor-contact" class="w-25 color-black"  data-container="body" data-toggle="tooltip" data-placement="bottom" title="تواصل مع المحاضر" ><i class="fa fa-phone "></i></a>';
                            var data8 = '<a href="{{url()->current()}}/' + row.id + '/summery" class="w-25 color-black"  data-toggle="tooltip"data-container="body"  data-placement="bottom" title="تلخيصات" ><i class="feather icon-bold "></i></a>';
                            var data9 = '<a href="{{url()->current()}}/' + row.id + '/benefit" class="w-25 color-black"  data-container="body" data-toggle="tooltip" data-placement="bottom" title="الفوائد"  ><i class="feather icon-zap" ></i></a>';
                            return data1 + ' / ' + data2 + ' / ' + data3 + ' / ' + data4 + ' </br> ' + data5 + ' / ' + data6 + ' / ' + data7 + ' / ' + data8 + ' / ' + data9;
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
