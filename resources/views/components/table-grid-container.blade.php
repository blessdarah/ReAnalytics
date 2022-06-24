<div class="card">
    <div class="card-header p-2 d-flex align-items-center justify-content-between">
        <h5 class="mb-0">{{$title}}</h5>
        <a class="btn btn-sm btn-outline-primary" href="{{$routeName}}">
            <i class="bx bx-pencil"></i>
            {{$buttonText}}
        </a>
    </div>
    <div class="card-body px-2">
        {{$slot}}
    </div>
</div>
