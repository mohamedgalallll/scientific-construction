<div class="add-modal">
    <div class="modal fade" id="exampleModalq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title font-14 text-dark font-weight-bold" id="exampleModalLabel">كلمة الشيخ</h5>
                    <button type="button" class=" back" data-dismiss="modal">
                        رجوع
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" card-word">
                        <div class="back-img ">
                            <div class="row">
                                <div class="  col-7  align-self-center">
                                    <span class="font-12 text-white">{{$word->instructor_data->name}}</span>
                                </div>
                                <div class="text-left   col-5">
                                    <img class="rounded-circle circle-auth" src="{{$word->instructor_data->image}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 font-12">
                        <p>{{$word->instructor_data->excerpt}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>