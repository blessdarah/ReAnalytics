<!-- page title area start -->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{asset('frontend/assets/img/page-title/page-title.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">{{$title}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->
