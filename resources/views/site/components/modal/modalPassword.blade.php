<div class="test-modal">
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title font-14" id="exampleModalLabel">تعديل كلمة المرور</h5>
                    <button type="button" class=" back" data-dismiss="modal">
                        رجوع
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{url('design/site/images/undraw.png')}}" alt="">
                    </div>
                </div>
                <form method="POST" id="changePasswordForm" action="{{ url()->current().'/change-password'}}">
                    @csrf
                    <div class="row m-0 font-14">
                        <div class="col-12">
                            <div class="form-group ">
                                <label for="old_password">كلمة المرور السابقه</label>
                                <input type="password"
                                       class="form-control form-control-sm @error('old_password') is-invalid @enderror"
                                       name="old_password" required autocomplete="old_password" id="old_password"
                                       placeholder="كلمة المرور السابقه">
                                @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6 col-md-6">
                            <label for="password">كلمة المرور الجديده</label>
                            <input type="password"
                                   class="form-control form-control-sm @error('password') is-invalid @enderror"
                                   name="password" required autocomplete=password" id="password"
                                   placeholder="لمة المرور الجديده">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-md-6">
                            <label for="password_confirmation">تأكيد كلمة المرور الجديده</label>
                            <input type="password"
                                   class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror"
                                   name="password_confirmation" required autocomplete=password_confirmation"
                                   id="password_confirmation"
                                   placeholder="تأكيد كلمة المرور الجديده">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn ">حفظ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
