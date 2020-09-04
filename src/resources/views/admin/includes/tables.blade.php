<div class="container my-5 py-5">
    <section>
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.user.index') }}" class="media white black-text z-depth-1 rounded">
                    <i class="fas fa-database fa-lg black z-depth-1 p-4 rounded-left text-white mr-3"></i>
                    <div class="media-body p-1">
                        <p class="text-uppercase text-muted mb-1"><small> count: {{ \App\Models\User::all()->count()}} </small></p>
                        <h5 class="font-weight-bold mb-0 text-uppercase"> Users </h5>
                    </div>
                </a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.role.index') }}" class="media white black-text z-depth-1 rounded">
                    <i class="fas fa-database fa-lg black z-depth-1 p-4 rounded-left text-white mr-3"></i>
                    <div class="media-body p-1">
                        <p class="text-uppercase text-muted mb-1"><small> count: {{ \App\Models\Role::all()->count()}} </small></p>
                        <h5 class="font-weight-bold mb-0 text-uppercase"> Roles </h5>
                    </div>
                </a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.review.index') }}" class="media white black-text z-depth-1 rounded">
                    <i class="fas fa-database fa-lg black z-depth-1 p-4 rounded-left text-white mr-3"></i>
                    <div class="media-body p-1">
                        <p class="text-uppercase text-muted mb-1"><small> count: {{ \App\Models\Review::all()->count()}} </small></p>
                        <h5 class="font-weight-bold mb-0 text-uppercase"> Reviews </h5>
                    </div>
                </a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.product.index') }}" class="media white black-text z-depth-1 rounded">
                    <i class="fas fa-database fa-lg black z-depth-1 p-4 rounded-left text-white mr-3"></i>
                    <div class="media-body p-1">
                        <p class="text-uppercase text-muted mb-1"><small> count: {{ \App\Models\Product::all()->count()}} </small></p>
                        <h5 class="font-weight-bold mb-0 text-uppercase"> Products </h5>
                    </div>
                </a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.status.index') }}" class="media white black-text z-depth-1 rounded">
                    <i class="fas fa-database fa-lg black z-depth-1 p-4 rounded-left text-white mr-3"></i>
                    <div class="media-body p-1">
                        <p class="text-uppercase text-muted mb-1"><small> count: {{ \App\Models\Status::all()->count()}} </small></p>
                        <h5 class="font-weight-bold mb-0 text-uppercase"> Statuses </h5>
                    </div>
                </a>
            </div>
            <!--Grid column-->

        </div>
    <!--Grid row-->
    </section>
</div>
