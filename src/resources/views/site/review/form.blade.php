<!-- Leave a reply -->
<div class="card-header border-0 font-weight-bold black white-text"> Write a review </div>

<!-- Reply form -->
<form action="{{ route('site.review.store') }}" method="post">

    @csrf

    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <div class="d-md-flex flex-md-fill">

        <div class="md-form input-group input-group-md px-2 mb-6">
            <div class="input-group-prepend">
                <span class="input-group-text md-addon pr-4" id="basic-addon9">
                    <i class="far fa-comment"></i>
                </span>
            </div>
            <input type="text" class="form-control mt-0 pl-0 @error('name') is-invalid @enderror" placeholder="Review name" name="name" value="{{ old('name') }}" aria-describedby="basic-addon9">
        </div>

        <div class="md-form input-group input-group-md px-2 mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text md-addon pr-4" id="basic-addon10">
                    <i class="far fa-heart"></i>
                </span>
            </div>
            <input type="number" min="1" max="10" class="form-control mt-0 pl-0 @error('score') is-invalid @enderror" placeholder="Score *" name="score" aria-describedby="basic-addon10">
        </div>

    </div>

    <div class="d-md-flex flex-md-fill">

        <div class="md-form input-group mt-0 px-2 mb-6">
            <div class="input-group-prepend">
                <span class="input-group-text align-items-start md-addon pr-4">
                    <i class="fas fa-pencil-alt"></i>
                </span>
            </div>
            <textarea class="form-control md-textarea pl-0 @error('positive') is-invalid @enderror" rows="2" placeholder="Write positive aspects here" name="positive" aria-describedby="with-textarea">{{ old('positive') }}</textarea>
        </div>

        <div class="md-form input-group mt-0 px-2 mb-6">
            <div class="input-group-prepend">
                <span class="input-group-text align-items-start md-addon pr-4">
                    <i class="fas fa-pencil-alt"></i>
                </span>
            </div>
            <textarea class="form-control md-textarea pl-0" rows="2" placeholder="Write negative aspects here" name="negative" aria-describedby="with-textarea">{{ old('negative') }}</textarea>
        </div>

    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-default btn-black white-text btn-md waves-effect waves-light">Submit</button>
    </div>

</form>
