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
                        <div class="col-xl-12 col-md-12 col-12 pb-2">
                            @include('admin.components.upload.file', ['name' =>'image','label'=>'صوره توضيحيه للانجاز ','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
                        </div>
                        <div class="divider"></div>
                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.inputs.text', [
                            'name' => 'title',
                            'id' => 'title',
                            'type' => 'text',
                            'class' => '',
                            'value' => '',
                            'label' => 'العنوان',
                            'icon' =>'icon-phone',
                            'placeholder' => 'العنوان ',
                            'disabled' => false,
                              'required' => true,
                            ])
                        </div>
                        <div class="divider"></div>
                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.inputs.textarea', [
                            'name' => 'description',
                            'id' => 'description',
                            'type' => 'text',
                            'class' => '',
                            'value' => '',
                            'label' => 'الوصف',
                            'icon' =>'icon-phone',
                            'placeholder' => 'الوصف ',
                            'disabled' => false,
                              'required' => true,
                            ])
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
