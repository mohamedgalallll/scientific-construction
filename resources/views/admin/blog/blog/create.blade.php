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
            @include('admin.layout.panels.breadcrumb', ['pageName' => 'انشاء مدونه  جديد' ,'items'=>[
            [
            'name'=>'المحاضرين',
            'url'=>url('/admin/blog'),
            ]
            ]
            ])
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="card">
                        <div class="card-content">
                            <div class="card-body">

                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab"
                                         role="tabpanel">
                                        <form action="{{str_replace('/create','',url()->current())}}" method="POST"
                                              class="form form-vertical" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="divider"></div>
                                                <div class="col-xl-12 col-md-12 col-12">
                                                    @include('admin.components.inputs.text', [
                                                    'name' => 'title',
                                                    'id' => 'title',
                                                    'type' => 'text',
                                                    'class' => '',
                                                    'value' => '',
                                                    'label' => 'العنوان ',
                                                    'icon' =>'icon-phone',
                                                    'placeholder' => 'العنوان ',
                                                    'disabled' => false,
                                                      'required' => true,
                                                    ])
                                                </div>
                                                <div class="divider"></div>

                                                <div class="col-xl-12 col-md-12 col-12">
                                                    @include('admin.components.inputs.textarea', [
                                                    'name' => 'excerpt',
                                                    'id' => 'excerpt',
                                                    'type' => 'text',
                                                    'class' => '',
                                                    'value' => '',
                                                    'label' => ' مقتطفات ',
                                                    'icon' =>'icon-phone',
                                                    'placeholder' => 'مقتطفات  ',
                                                    'disabled' => false,
                                                      'required' => true,
                                                    ])
                                                </div>

                                                <div class="divider"></div>

                                                <div class="col-xl-12 col-md-12 col-12">
                                                    @include('admin.components.inputs.textEditor', [
                                                    'name' => 'content',
                                                    'id' => 'content',
                                                    'type' => 'text',
                                                    'class' => '',
                                                    'value' => '',
                                                    'label' => ' المحتوي ',
                                                    'icon' =>'icon-phone',
                                                    'placeholder' => 'المحتوي  ',
                                                    'disabled' => false,
                                                      'required' => true,
                                                    ])
                                                </div>
                                                <div class="col-xl-12 col-md-12 col-12 pb-2">
                                                    @include('admin.components.upload.file', ['name' =>'image','label'=>'صوره المدونه ','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
                                                </div>
                                                <div class="divider"></div>
                                                <div class="col-xl-12 col-md-12 col-12">
                                                    @include('admin.components.inputs.select', [
                                                    'name' => 'course_id',
                                                    'id' => 'course_id',
                                                    'class' => '',
                                                    'value' => '',
                                                    'label' => 'اختار الكورس',
                                                    'oldcheaked' => '',
                                                    'items' => \App\Model\Course::get(),
                                                    'placeholder' => 'اختار الكورس',
                                                    'checked' => false,
                                                    'disabled' => false,
                                                    ])
                                                </div>

                                            </div>
                                            <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-start mt-1">
                                                    <button type="submit"
                                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">{{trans('web.saveChanges')}}</button>
                                                    <button type="reset"
                                                            class="btn btn-outline-warning">{{trans('web.reset')}} </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
@stop

