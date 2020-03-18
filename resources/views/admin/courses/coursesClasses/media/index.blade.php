@extends('admin.layout.index')
@section('page_css')

    <link rel="stylesheet" type="text/css" href="{{url('design/admin/vendors/css/extensions/plyr.css')}}">
    <style>
        .plyr--video {
            width: auto;
            height: 300px;
        }
    </style>
@stop
@section('page_js')
    <script src="{{url('design/admin/vendors/js/media/plyr.js')}}"></script>
    <script>
        $(document).ready(function () {
            const players = document.querySelectorAll('.js-player');
            Array.from(document.querySelectorAll('video')).forEach(video => {
                players[video.id] = new Plyr(video, {
                    // pip:false,
                    // controls:['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'airplay', 'fullscreen']
                });
            });
        });
    </script>
    <script>
        $(document).on('click', '.action-delete', function (e) {
            var vedio_id = $(this).data("vedio_id"),
                mainDiv = $(this).parent().parent().parent().parent().parent();
            Swal.fire({
                title: 'هل انت متأكد انك تريد الحذف ؟',
                text: "لن تتمكن من العودة إلى هذا مره اخري !!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم , قم بالحذف !',
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-32 ml-1',
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    $.ajax(
                        {
                            url: "{{url()->current()}}/" + 'delete',
                            type: 'DELETE',
                            dataType: "JSON",
                            data: {
                                "vedio_id": vedio_id,
                                "_method": 'DELETE',
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function (data, status) {
                                if (data == true) {
                                    Swal.fire({
                                        type: "success",
                                        title: 'تم الحذف!',
                                        text: 'تم حذف ملفاتك بنجاح',
                                        confirmButtonClass: 'btn btn-success',
                                    });
                                    mainDiv.fadeOut(1000, function () {
                                        mainDiv.remove();
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'حدث خطاء ما !!',
                                        text: data,
                                        type: 'error',
                                        confirmButtonClass: 'btn btn-success',
                                    })
                                }
                            },
                            fail: function (xhr, textStatus, errorThrown) {
                                alert('request failed');
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'تم الالغاء',
                        text: 'البيانات الخاصه بك بأمان',
                        type: 'error',
                        confirmButtonClass: 'btn btn-success',
                    })
                }
            })
        });
    </script>
@stop
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow
        {{request()->cookie('navbar_type') == 'navbar-hidden' ? 'd-none' : ''}}
        {{request()->cookie('navbar_type') == 'navbar-static' ? 'd-none' : ''}}
            "></div>
        <div class="content-wrapper">
            @include('admin.layout.panels.breadcrumb', ['pageName' => ' تعديل ','items'=>[
          [
          'name'=>'الكورسات',
          'url'=>url('/admin/courses'),
          ]
            ]])

            <button class="btn btn-outline-primary round mr-1 mb-1 waves-effect waves-light  buttons mb-1 waves-effect "
                    data-toggle="modal" data-target="#addVideo" tabindex="0" aria-controls="DataTables_Table_0"><span><i
                        class="feather icon-plus"></i>اضف جديد</span></button>

            <div class="content-body">
                <!-- Basic example and Profile cards section start -->
                <section id="basic-examples">
                    <div class="row match-height">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($videos as $video)
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="embed-responsive ">
                                                {{--                                                {{$images[$i]->getFullUrl()}}--}}
                                                <video poster="{{$course->image}}" class="js-player"
                                                       id="player" playsinline controls>
                                                    <source src="{{$video->getFullUrl()}}" type="video/mp4"/>
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <h5 class="my-1"> شريحه رقم {{$i + 1}} </h5>
                                            <div class="card-btns d-flex justify-content-between m-auto">
                                                {{--                                                <a href="#" class="btn gradient-light-primary white">Edit</a>--}}
                                                <a href="javascript:void(0)" data-vedio_id="{{$video->id}}"
                                                   class="action-delete btn gradient-light-danger float-right">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </div>
                </section>
                <!-- // Basic example and Profile cards section end -->


            </div>
        </div>
    </div>
    @if (auth()->User()->group->categories_add == 1)
        @include('admin..courses.coursesClasses.media.create',['id'=>'addVideo','name'=>'اضافه شريحه جديده','action'=>url()->current()])
    @endif

@stop

