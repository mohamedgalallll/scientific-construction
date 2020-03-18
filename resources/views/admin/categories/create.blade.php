<form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
    @csrf
    <div class="add-new-data-sidebar">
        <div class="overlay-bg"></div>
        <div class="add-new-data">
            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">{{$name}}</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.inputs.text', [
                            'name' => 'name',
                            'id' => 'name',
                            'type' => 'text',
                            'class' => 'name',
                            'label' => 'اسم القسم',
                            'icon' =>'feather icon-user',
                            'placeholder' => 'اسم القسم',
                            'required' => true,
                            'disabled' => false,
                            ])
                        </div>


                        <hr class="divider">

                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.inputs.textarea', [
                            'name' => 'description',
                            'id' => 'description',
                            'type' => 'text',
                            'class' => '',
                            'value' => '',
                            'label' =>'وصف القسم',
                            'icon' =>'icon-phone',
                            'placeholder' => 'وصف القسم',
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
                            'value' => '',
                            'label' => 'كلمات دلاليه',
                            'icon' =>'icon-phone',
                            'placeholder' => '  كلمات دلاليه (مفيده لمحركات البحث , يرجي كتابه الكلمه وتتبعها بعلامه , )',
                            'disabled' => false,
                              'required' => true,
                            ])
                        </div>


                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.upload.file', ['name' =>'image','label'=>'صوره القسم','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
                        </div>

                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button type="submit" class="btn btn-primary">{{trans('web.addData')}}</button>
                </div>
                <div class="cancel-data-btn">
                    <button type="button" class="btn btn-outline-danger">{{trans('web.cancel')}}</button>
                </div>
            </div>
        </div>
    </div>
</form>
