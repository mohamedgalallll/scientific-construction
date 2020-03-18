@extends('admin.layout.index')
@section('page_css')
    <link rel="stylesheet" type="text/css" href="{{url('design/admin/css-rtl/plugins/forms/wizard.css')}}">
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
            @include('admin.layout.panels.breadcrumb', ['pageName' => ' تعديل '.$item->title ,'items'=>[
     [
     'name'=>'الكورسات',
     'url'=>url('/admin/courses'),
     ]
]])
            <div class="content-body">
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{str_replace('/edit','',url()->current())}}" method="post"
                                              class="steps-validation wizard-circle" enctype="multipart/form-data">
                                            {{ method_field('PATCH') }}
                                            @csrf
                                            <h6>
                                                <i class="step-icon feather icon-info"></i> محتوي الفصل
                                            </h6>
                                            <fieldset>
                                                <div class="course_main_content">
                                                    <div class="row mb-2">
                                                        <div class="col-md-12">
                                                            @include('admin.components.inputs.text', [
                                                              'name' => 'title',
                                                              'id' => '',
                                                              'type' => 'text',
                                                              'class' => 'title',
                                                              'value' => $item->title,
                                                              'label' => 'اسم الفصل ',
                                                              'icon' =>'fa fa-sort-alpha-asc',
                                                              'placeholder' => 'اسم الفصل ',
                                                              'disabled' => false,
                                                              'required' => true,
                                                              ])
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
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
