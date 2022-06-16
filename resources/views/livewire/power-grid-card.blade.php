<div class="card">
    <div class="card-header py-2 d-flex justify-content-between align-items-center">
        <h6 class="mb-0">{{$title}}</h6>
        <a class="btn btn-outline-primary" href="{{$routeName}}">
            <i class="bx bx-pencil"></i>
            {{$buttonText}}
        </a>
    </div>
    <div class="card-body px-2">
        {{$slot}}
    </div>
</div>
