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
                        <div class="divider"></div>
                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.inputs.textarea', [
                            'name' => 'words',
                            'id' => 'words',
                            'type' => 'text',
                            'class' => '',
                            'value' => '',
                            'label' => 'عن الموقع',
                            'icon' =>'icon-phone',
                            'placeholder' => 'عن الموقع ',
                            'disabled' => false,
                              'required' => true,
                            ])
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            @include('admin.components.inputs.select', [
                            'name' => 'instructor_id',
                            'id' => 'instructor_id',
                            'class' => '',
                            'value' => '',
                            'label' => 'اختار محاضر',
                            'oldcheaked' => '',
                            'items' => \App\Model\Instructor::get(),
                            'placeholder' => 'اختار محاضر',
                            'checked' => false,
                            'disabled' => false,
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
