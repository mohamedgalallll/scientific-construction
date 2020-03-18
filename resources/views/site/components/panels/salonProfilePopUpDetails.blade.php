@php
    $teams = \App\Model\Team::
        where('service_id',$service->id)
         ->where('salon_id',auth()->User()->id)
         ->where('status','1')
         ->get()
@endphp
<div class="content">
    <p class="h5 font-weight-bold " style="color: #d91b89;">{{$service->name}}</p>
    <span><i class="far fa-clock" style="color: #000;"></i>{{$service->created_at}}</span>
    <p class="text-muted mt-2">{{$service->description}}</p>

    <a href="{{url('/profile/teams/add')}}" class="addMemberToTeam"><i class="fas fa-plus float-right  pt-1 pl-2"></i> Add Member</a>
    <div class="clearfix"></div>

    <div class="carousel-card pt-0">
        <div class="container">
            <div class="owl-carousel m-0 owl-theme row" id="service-details-carousel">

                @foreach($teams as $team)
                    <div class="item shadow">
                        <div class="card card-profile-1 mb-4 ">
                            <div class="card-body p-0 text-center">
                                <div class="avatar box-shadow-2 mb-3">
                                    <img src="{{$team->image}}" alt=""/>
                                </div>
                                <p class="font-20 mb-0 font-weight-bold">{{$team->name}}</p>
                                <p class="mb-2">{{$team->job_title}}</p>
                                <div class="text-center m-0">
                                    <p class="m-0 text-muted">{{$team->excerpt}}</p>
                                </div>
                                <div class="show-rate">
                                  {!! $team->review !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <a href="{{url('profile/teams/'.$team->id.'/edit')}}" class="btn btn-gray">
                                            <i class="far fa-edit text-muted "></i>
                                            تعديل
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0)" data-team_id="{{$team->id}}" class="btn btn-gray deleteTeamMember">
                                            <i class="fas fa-trash-alt text-danger "></i>
                                            حذف
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="add-to-card row mt-4 mb-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <a href="javascript:void(0)" data-service_id="{{$service->id}}" class="text-white btn deleteService">
                                <button class="btn form-control btn-crud">
                                    <i class="fas fa-trash-alt text-white"></i>
                                    حذف الخدمه
                                </button>
                            </a>
                        </div>
                        <div class="col-md-6 ">
                            <a class="text-white btn" href="{{url('services/'.$service->id.'/edit')}}">
                                <button class="btn form-control btn-crud">
                                    <i class="far fa-edit text-white"></i>
                                    تعديل الخدمه
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

