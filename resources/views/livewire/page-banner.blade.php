<!-- page title area start -->
<div class="bg-gradient-to-r from-orange-50 via-zinc-100 to-stone-100 flex relative py-10 flex-col z-20 px-10 justify-center items-center tracking-normal leading-6 sm:text-center text-white box-border">
    <h2 class="mb-8 font-sans text-gray-900 text-5xl sm:text-6xl font-semibold tracking-tighter leading-none sm:max-w-lg">
        {{$title}}
    </h2>
    @if(isset($subTitle))
        <p class="text-2xl font-normal text-gray-500 tracking-tight">
           {{$subTitle}}
        </p>
    @endif
</div>
<!-- page title area end -->
