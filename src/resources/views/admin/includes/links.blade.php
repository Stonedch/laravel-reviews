<div class="text-center mb-5">
    <h1 class="h1 text-uppercase"> dashboard </h3>
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
        <a type="button" class="btn black white-text waves-effect waves-light" href="{{ redirect()->back()->getTargetUrl() }}">
            <i class="fas fa-angle-double-left"></i>
            <span class="text-upercase"> back </span>
        </a>
        <a type="button" class="btn black white-text waves-effect waves-light" href="{{ route('admin.index') }}">
            <span class="text-upercase"> dashboard </span>
        </a>
    </div>
</div>
