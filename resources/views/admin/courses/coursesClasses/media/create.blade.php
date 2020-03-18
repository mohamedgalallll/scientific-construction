<div class="modal fade text-right" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">{{$name}} </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col-xl-12 col-md-12 col-12">
{{--                        @include('admin.components.upload.file', ['name' =>'image','label'=>'صوره الشريحه','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])--}}
                    </div>
                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.upload.file', ['name' =>'video','label'=>'شريحه جديده','max'=>'20','accept'=>'video/*' , 'disabled' => false, 'value'=>''])
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="add-data-footer d-flex justify-content-around   col-md-12">
                        <div class="add-data-btn pull-right">
                            <button type="submit" class="btn btn-primary">{{trans('web.addData')}}</button>
                        </div>
                        <div class="cancel-data-btn pull-left">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-outline-danger">{{trans('web.cancel')}}</button>
                        </div>
                    </div>
{{--                    <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>--}}
                </div>
            </form>
        </div>
    </div>
</div>
