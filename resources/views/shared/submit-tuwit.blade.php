<h4> Share yours tuwit </h4>
<div class="row">
    <form action="{{ route('tuwit.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="tuwit" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
