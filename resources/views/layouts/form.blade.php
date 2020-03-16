<form method="POST" action="/search" role="form" id="form-buscar" autocomplete="off">
    @csrf
    <div class="form-group">
        <div class="input-group">
            <input id="1" class="form-control" type="text" name="search" placeholder="Search..." required />
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
                </button>
            </span>
        </div>
    </div>
</form>