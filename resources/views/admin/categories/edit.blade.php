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
            @include('admin.layout.panels.breadcrumb', ['pageName' => 'تعديل القسم' .' : '.$item->name ,'items'=>[
            [
            'name'=>'الاقسام',
            'url'=>url('/admin/categories'),
            ]
            ]
            ])
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> {{trans('web.editCategory') .' '.$item->name}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{str_replace('/edit','',url()->current())}}" method="POST"
                                              class="form form-vertical" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH') }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'name',
                                                        'id' => 'name',
                                                        'type' => 'text',
                                                        'class' => 'name',
                                                        'value' => $item->name,
                                                        'label' => 'اسم القسم',
                                                        'icon' =>'feather icon-user',
                                                        'placeholder' => 'اسم القسم',
                                                        'disabled' => false,
                                                        'required' => true,
                                                        ])
                                                    </div>


                                                    <hr class="divider">

                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.textarea', [
                                                        'name' => 'description',
                                                        'id' => 'description',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->description,
                                                        'label' => 'وصف القسم',
                                                        'icon' =>'icon-phone',
                                                        'placeholder' =>'وصف القسم',
                                                        'disabled' => false,
                                                          'required' => true,
                                                        ])
                                                    </div>

                                                    <div class="divider"></div>
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.textarea', [
                                                        'name' => 'keyword',
                                                        'id' => 'keyword',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->keyword,
                                                        'label' =>'كلمات دلاليه',
                                                        'icon' =>'icon-phone',
                                                        'placeholder' =>  '  كلمات دلاليه (مفيده لمحركات البحث , يرجي كتابه الكلمه وتتبعها بعلامه , )',
                                                        'disabled' => false,
                                                          'required' => true,
                                                        ])
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.upload.file', ['name' =>'image','label'=>'صوره القسم','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>$item->first_image])
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit"
                                                                class="btn btn-primary mr-1 mb-1">{{trans('web.submit')}}</button>
                                                        <button type="reset"
                                                                class="btn btn-outline-warning mr-1 mb-1">{{trans('web.reset')}}</button>
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
