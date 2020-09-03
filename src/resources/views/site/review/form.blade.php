<form id="review-form mb-3" action="{{ route('site.review.store') }}" method="post">

    @csrf

    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"> Review name </span>
        </div>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"> Score </span>
        </div>
        <input type="number" min="1" max="10" name="score" class="form-control">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"> Positive </span>
        </div>
        <textarea class="form-control" name="positive" cols="30" rows="3"></textarea>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"> Negative </span>
        </div>
        <textarea class="form-control" name="negative" cols="30" rows="3"></textarea>
    </div>

    <div class="btn-group mt-1" role="group" aria-label="Basic example">
        <button class="btn btn-success" type="submit"> Store </button>
    </div>

</form>
