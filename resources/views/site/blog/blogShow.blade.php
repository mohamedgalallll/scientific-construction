@extends('site.layout.index')
@section('content')
    <!--   content -->
        <!--        start courses-desc-page-->
        <section class="content">
            <div class="container">
                <div class="course-desc-page about-page">
                    <div class="row">
                        <div class="col-6 col-lg-9">
                            <div class="head-profile">
                                <div class="inlineBlock coursesImg position-relative">
                                    <img src="{{url('design/site/images/Group 1594@2x.png')}}" alt="">
                                    <i class="fas fa-bold icon-info"></i>
                                </div>
                                <div class="inlineBlock">
                                    <p class="mb-2 h5 font-weight-bolder color-tit">المنتديات</p>
                                    <p class="text-muted font-14">هناك حقيقه مثبته منذ زمن طويل</p>
                                </div>
                                <div class="img-blog" style="background:url('{{$blog->image}}') no-repeat"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mt-4">
                                            <p>
                                                <h5 class="font-weight-bolder  color-tit"> {{$blog->title}}</h5>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-4 text-left color-tit font-weight-bolder">
                                            <p>
                                                <i class="fas fa-calendar-alt px-2"></i>
                                                <span>{{$blog->created_at->toDateString()}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="px-3 text-muted col-12">
                                        <div class="text-muted mb-4">
                                            {{ $blog->excerpt}}
                                        </div>
                                        <div>
                                            {!! $blog->content!!}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="my-4">
                                            <p>
                                                <h6 class="font-weight-bold text-right"> التعليقات</h6>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="my-4 text-left font-weight-bold text-muted">
                                            <p>
                                                @if (count($comments) > 0)
                                                    <span>{{$comments->count()}} تعليق</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        @if (count($comments) > 0)
                                            @foreach ($comments as $comment)
                                                <div class="card-questions-info px-0">
                                                    <div class="card mb-3">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-10">
                                                                <div class="card-body">
                                                                <span>{{$comment->user_name}}</span>
                                                                <p class="font-12 text-muted mb-0">{{$comment->comment}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="text-center">
                                                                    <p class="text-muted font-12 pt-2">{{$comment->created_at->toDateString()}}</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    @if (Auth::user())
                                                                        @if (auth()->user()->id == $comment->user_id)
                                                                            <a href="javascript:void(0)" class="edit-comment"><span class="px-2 text-success"><i class="fas fa-edit"></i></span></a>
                                                                            <a href="javascript:void(0)" data-id="{{$comment->id}}" class="action-delete"><span class="px-2 text-danger"><i class="fas fa-trash"></i></span></a>
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- edit comment--}}
                                                    <div >
                                                        <form action="{{url('notifications'.'/'.$comment->id .'/'.'updateComment')}}" method="post">
                                                            @csrf
                                                            {{ method_field('PATCH') }}
                                                            <div class="row input-edit">
                                                                <div class="col-lg-10">
                                                                    <div class="">
                                                                        @include('site.components.inputs.text', [
                                                                        'name' => 'comment',
                                                                        'id' => '',
                                                                        'type' => 'text',
                                                                        'class' => 'form-control form-control-sm title-search2 mb-2',
                                                                        'value' => $comment->comment,
                                                                        'label' => 'تعديل التعليق',
                                                                        'icon' =>'feather icon-user',
                                                                        'placeholder' => 'تعديل التعليق',
                                                                        'disabled' => false,
                                                                        ])
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 mt-4 pt-3">
                                                                    <button class="form-control form-control-sm btn-commint">تحديث</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card-questions-info px-0">
                                            <div class="card mb-3">
                                                <div class="row no-gutters">
                                                    <div class="col-md-12">
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <span class=" font-weight-bold">{{$user->name}}</span>
                                                            </div>
                                                        <form action="{{url('notifications'.'/'.$blog->id .'/'.'comment')}}" method="POST">
                                                            @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-10">
                                                                        <input type="text" name="comment" class="form-control form-control-sm title-search2 mb-2" placeholder="تعليق" width="100%">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <button class="form-control form-control-sm btn-commint">تعليق</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            @include('site.components.authCard.authCardLogin',[
                                'user'=>$user
                            ])
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @yield('page_js')
    @include('site.layout.scripts')
    @include('site.layout.scripts.blog.index')
    @include('site.layout.scripts.comment.index')
@stop
