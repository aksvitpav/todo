@if ($errors->any())
<div class="row">
    <div class="col-12">
        <div class="alert alert-danger mb-0">
            <h5 class="alert-heading">Error!</h5>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li class="my-0">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
