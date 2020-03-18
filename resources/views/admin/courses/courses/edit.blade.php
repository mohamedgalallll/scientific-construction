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
            @include('admin.layout.panels.breadcrumb', ['pageName' => 'الكورسات' ,'items'=>[]])
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
                                                <i class="step-icon feather icon-info"></i>معلومات عن الكورس
                                            </h6>

                                            <fieldset>
                                                <div class="row mb-2">
                                                    <div class="col-md-3">
                                                        @include('admin.components.inputs.text', [
                                                          'name' => 'name',
                                                          'id' => 'name',
                                                          'type' => 'text',
                                                          'class' => 'name',
                                                          'value' => $item->name,
                                                          'label' => 'اسم الكورس',
                                                          'icon' =>'fa fa-sort-alpha-asc',
                                                          'placeholder' =>'اسم الكورس',
                                                          'disabled' => false,
                                                          'required' => true,
                                                          ])
                                                    </div>
                                                    <div class="col-md-3">
                                                        @include('admin.components.inputs.select', [
                                                        'name' => 'instructor_id',
                                                        'id' => 'instructor_id',
                                                        'class' => 'danger',
                                                        'value' => $item->instructor_id,
                                                        'label' => 'اسم المحاضر',
                                                        'oldcheaked' => $item->instructor_id,
                                                        'items' => \App\Model\Instructor::get(),
                                                        'placeholder' =>'اسم المحاضر',
                                                        'checked' => false,
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                    <div class="col-md-3">
                                                        @include('admin.components.inputs.select', [
                                                        'name' => 'main_category_id',
                                                        'id' => 'main_category_id',
                                                        'class' => 'danger',
                                                        'value' => '',
                                                        'label' => 'اسم القسم',
                                                        'oldcheaked' => $item->main_category_id,
                                                        'items' => \App\Model\MainCategory::get(),
                                                        'placeholder' =>'اسم القسم',
                                                        'checked' => false,
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                    <div class="col-md-3">
                                                        @include('admin.components.inputs.staticSelect', [
                                                 'name' => 'status',
                                                 'id' => 'status',
                                                 'class' => 'danger',
                                                 'value' => '',
                                                 'label' => 'حاله الكورس',
                                                 'oldcheaked' => $item->status,
                                                 'placeholder' =>trans('web.status'),
                                                 'checked' => false,
                                                 'disabled' => false,
                                                  'items' => [
                                                  [
                                                  'name'=>trans('web.activated'),
                                                  'value'=>'1',
                                                  ],
                                                  [
                                                  'name'=>trans('web.unActivated'),
                                                  'value'=>'0',
                                                  ],
                                                  ],
                                                 ])
                                                    </div>
                                                    <div class="col-md-6">
                                                        @include('admin.components.inputs.textarea', [
                                                      'name' => 'description',
                                                      'id' => 'description',
                                                      'type' => 'text',
                                                      'class' => 'description',
                                                      'value' => $item->description,
                                                      'label' =>  'وصف الكورس',
                                                      'icon' =>'fa fa-sort-alpha-asc',
                                                      'placeholder' => 'وصف الكورس',
                                                      'disabled' => false,
                                                      ])
                                                    </div>
                                                    <div class="col-md-6">
                                                        @include('admin.components.inputs.textarea', [
                                                      'name' => 'keyword',
                                                      'id' => 'keyword',
                                                      'type' => 'text',
                                                      'class' => 'keyword',
                                                      'value' => $item->keyword,
                                                      'label' =>  'الكلمات الدلاليه للكورس',
                                                      'icon' =>'fa fa-sort-alpha-asc',
                                                      'placeholder' => 'الكلمات الدلاليه للكورس',
                                                      'disabled' => false,
                                                      ])
                                                    </div>
                                                    <div class="col-md-12">
                                                        @include('admin.components.upload.file', ['name' =>'image','label'=>'صوره الكورس','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>$item->image,])
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
