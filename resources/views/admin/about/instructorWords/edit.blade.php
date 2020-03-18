@extends('admin.layout.index')
@section('page_css')
    <link rel="stylesheet" type="text/css" href="{{url('design/admin/css/plugins/forms/wizard.css')}}">
@stop
@section('page_js')
    <script src="{{url('design/admin/vendors/js/extensions/jquery.steps.min.js')}}"></script>
    <script src="{{url('design/admin/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('design/admin/js/scripts/forms/wizard-steps.js')}}"></script>
@stop
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow
            {{request()->cookie('navbar_type') == 'navbar-hidden' ? 'd-none' : ''}}
            {{request()->cookie('navbar_type') == 'navbar-static' ? 'd-none' : ''}}
            "></div>
        <div class="content-wrapper">
            @include('admin.layout.panels.breadcrumb', ['pageName' =>'تعديل تعديل كلمه ف حق الموقع','items'=>[
            [
            'name'=>'كلمه ف حق الموقع',
            'url'=>url('/admin/instructor-words'),
            ]
            ]
            ])
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> {{ 'تعديل'}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                            <form action="{{str_replace('/edit','',url()->current())}}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH') }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <hr class="divider">
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.textEditor', [
                                                        'name' => 'words',
                                                        'id' => 'words',
                                                        'type' => 'words',
                                                        'class' => '',
                                                        'value' => $instructor->words,
                                                        'label' => 'عن الموقع ',
                                                        'icon' =>'icon-phone',
                                                        'placeholder' => 'عن الموقع',
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                     <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.select', [
                                                        'name' => 'instructor_id',
                                                        'id' => 'instructor_id',
                                                        'class' => 'instructor_id',
                                                        'value' => '',
                                                        'label' => 'اختار محاضر',
                                                        'oldcheaked' => $instructor->instructor_id,
                                                        'items' => \App\Model\Instructor::where('status',1)->get(),
                                                        'placeholder' => 'اختار محاضر',
                                                        'checked' => false,
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">{{trans('web.submit')}}</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">{{trans('web.reset')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop
