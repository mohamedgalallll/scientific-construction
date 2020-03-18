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
            @include('admin.layout.panels.breadcrumb', ['pageName' => 'الكورسات' ,'items'=>[
            [
            'name'=>'Courses',
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
                                        <form action="{{str_replace('/create','',url()->current())}}" method="post"
                                              class="steps-validation wizard-circle" enctype="multipart/form-data">
                                            @csrf
                                            <h6>
                                                <i class="step-icon feather icon-info"></i>أسأله الفصل
                                            </h6>
                                            <fieldset>
                                                <div class="course_main_content">
                                                    <div class="row mb-2">
                                                        <div class="col-md-12">
                                                            @include('admin.components.inputs.text', [
                                                              'name' => 'question',
                                                              'id' => 'question',
                                                              'type' => 'question',
                                                              'class' => 'title',
                                                              'value' => '',
                                                              'label' => 'اسم السؤال ',
                                                              'icon' =>'fa fa-sort-alpha-asc',
                                                              'placeholder' => 'اسم السؤال ',
                                                              'disabled' => false,
                                                              'required' => true,
                                                              ])
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            @include('admin.components.inputs.radio', [
                                                                        'name' => 'correct_answer',
                                                                        'id' => 'correct_answer_1',
                                                                        'value' => 'answer_1',
                                                                        'class' => 'success',
                                                                        'label' => '',
                                                                        'checked' => '',
                                                                        'disabled' => false,
                                                                        ])
                                                            @include('admin.components.inputs.text', [
                                                              'name' => 'answer_1',
                                                              'id' => 'answer_1',
                                                              'type' => 'text',
                                                              'class' => 'answer_1',
                                                              'label' => 'الاجابه الاولي ',
                                                              'icon' =>'fa fa-sort-alpha-asc',
                                                              'placeholder' => 'الاجابه الاولي ',
                                                              'disabled' => false,
                                                              'required' => true,
                                                              ])
                                                        </div>
                                                        <div class="col-md-6">
                                                            @include('admin.components.inputs.radio', [
                                                                        'name' => 'correct_answer',
                                                                        'value' => 'answer_2',
                                                                        'class' => 'success',
                                                                        'label' => '',
                                                                        'checked' => '',
                                                                        'disabled' => false,
                                                                        ])
                                                            @include('admin.components.inputs.text', [
                                                              'name' => 'answer_2',
                                                              'id' => 'answer_2',
                                                              'type' => 'text',
                                                              'class' => 'answer_2',
                                                              'label' => 'الاجابه الثانيه ',
                                                              'icon' =>'fa fa-sort-alpha-asc',
                                                              'placeholder' => 'الاجابه الثانيه ',
                                                              'disabled' => false,
                                                              'required' => true,
                                                              ])
                                                        </div>
                                                        <div class="col-md-6">
                                                            @include('admin.components.inputs.radio', [
                                                                       'name' => 'correct_answer',
                                                                       'value' => 'answer_3',
                                                                        'class' => 'success',
                                                                       'label' => '',
                                                                       'checked' => '',
                                                                       'disabled' => false,
                                                                       ])
                                                            @include('admin.components.inputs.text', [
                                                              'name' => 'answer_3',
                                                              'id' => 'answer_3',
                                                              'type' => 'text',
                                                              'class' => 'answer_3',
                                                              'label' => 'الاجابه الثالثه ',
                                                              'icon' =>'fa fa-sort-alpha-asc',
                                                              'placeholder' => 'الاجابه الثالثه ',
                                                              'disabled' => false,
                                                              'required' => true,
                                                              ])
                                                        </div>
                                                        <div class="col-md-6">
                                                            @include('admin.components.inputs.radio', [
                                                                     'name' => 'correct_answer',
                                                                     'value' => 'answer_4',
                                                                     'class' => 'success',
                                                                     'label' => '',
                                                                     'checked' => '',
                                                                     'disabled' => false,
                                                                     ])
                                                            @include('admin.components.inputs.text', [
                                                              'name' => 'answer_4',
                                                              'id' => 'answer_4_id',
                                                              'type' => 'text',
                                                              'class' => 'answer_4',
                                                              'label' => 'الاجابه الرابعه ',
                                                              'icon' =>'fa fa-sort-alpha-asc',
                                                              'placeholder' => 'الاجابه الرابعه ',
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
