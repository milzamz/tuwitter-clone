<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>
            <div>
                <form method="POST" action="{{ route('tuwit.destroy', $tuwits->id) }}">
                    <a class="btn btn-link btn-sm" href="{{ route('tuwit.show', $tuwits->id) }}">View</a>
                    <a class="btn btn-link btn-sm" href="{{ route('tuwit.edit', $tuwits->id) }}">Edit</a>
                    @csrf
                    @method('delete')
                    <button class="ms-2 btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
        <form action="{{ route('tuwit.update', $tuwits->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <textarea name="content" class="form-control" id="content" rows="3" placeholder="{{ $tuwits->content }}"></textarea>
            </div>
            <div class="">
                <button type="submit" class="btn mb-3 btn-dark"> Share </button>
            </div>
        </form>
        @else
        <p class="fs-6 fw-light text-muted">
            {{ $tuwits->content }}
        </p>
        @endif
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $tuwits->likes }} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $tuwits->created_at }} </span>
            </div>
        </div>
    </div>
</div>
