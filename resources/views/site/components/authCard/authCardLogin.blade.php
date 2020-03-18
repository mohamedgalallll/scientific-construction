<div class="profile-detalis">
    <div class="details-user ">
       <div class="mb-3 text-center">
           <img class="circle-auth rounded-circle" src="{{url('design/site/images')}}{{auth()->user()->gender == 1 ? '/Mask.png' : '/Mask Group 1.png'}}" alt="">
       </div>
        <div class="font-14">
            <p class="pr-4">{{$user->name}}</p>
        </div>
        <div class=" font-10 text-center">
            <p>{{$user->country_name}}</p>
            <p> {{$user->created_at->toDateString()}} الاشتراك </p>
        </div>
        <div class="font-14">
            <p class="pr-4">دورات فعاله </p>
        </div>
        <div class=" font-10 text-center">
            <p>فقة الحديث النبوى</p>
            <p> السيره النبويه</p>
        </div>
    </div>
    <div class="adsImg mt-5 mb-2">
        <img src="{{url('design/site/images/person-using-macbook-36.png')}}" alt="" width="100%">
    </div>
    <div class="ads  mb-4 py-4">
        <div class=" text-center py-4">
            <h4 class=" text-white">
                بنر اعلاني
            </h4>
        </div>
    </div>

</div>
