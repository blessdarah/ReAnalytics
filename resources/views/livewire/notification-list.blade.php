<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-bell icon-sm align-middle"></i>
        <span class="noti-dot bg-danger rounded-pill">{{$total}}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown-v">
        <div class="p-3">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="m-0 font-size-15"> Notifications </h5>
                </div>
                <div class="col-auto">
                    <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                </div>
            </div>
        </div>
        <div data-simplebar style="max-height: 250px;">
            @foreach(auth()->user()->notifications as $notification)
            <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                    </div>
                    <div class="flex-grow-1">
                        <p class="text-muted font-size-13 mb-0 float-end">{{$notification->data['id']}}</p>
                        <h6 class="mb-1">{{$notification->data['subject']}}</h6>
                        <div>
                            <p class="mb-0">from: {{$notification->data['from']}}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="p-2 border-top d-grid">
            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="{{route('notifications')}}">
                <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
            </a>
        </div>
    </div>
</div>
