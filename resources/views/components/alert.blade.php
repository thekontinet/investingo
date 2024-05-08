@if (session()->has('error'))
    <div class="alert alert-pro alert-danger">
        <div class="alert-text">
            <h6>Error</h6>
            <p>{{ session()->get('error') }}</p>
        </div>
    </div>
@endif

@if (session()->has('message'))
    <div class="alert alert-pro alert-success">
        <div class="alert-text">
            <h6>Successful</h6>
            <p>{{ session()->get('message') }}</p>
        </div>
    </div>
@endif
