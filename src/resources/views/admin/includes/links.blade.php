<!-- <div class="text-center mb-5">
    <h1 class="h1 text-uppercase mt-4"> dashboard </h3>
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
        <a type="button" class="btn black white-text waves-effect waves-light" href="{{ redirect()->back()->getTargetUrl() }}">
            <i class="fas fa-angle-double-left"></i>
            <span class="text-upercase"> back </span>
        </a>
        <a type="button" class="btn black white-text waves-effect waves-light" href="{{ route('admin.index') }}">
            <span class="text-upercase"> dashboard </span>
        </a>
    </div>
</div> -->

<div  class="mt-2 mb-5 text-center" style="position: relative">
    <!-- <a style="position: absolute; left: 0"
    type="button" class="btn black white-text waves-effect waves-light" href="{{ redirect()->back()->getTargetUrl() }}">
            <i class="fas fa-angle-double-left"></i>
            <span class="text-upercase"> back </span>
    </a> -->
    <h1 class="h1 text-uppercase">
        <a
        class='text-dark text-decoration-none'
        href="{{ route('admin.index') }}"
        >
         dashboard
        </a></h1>


</div>
