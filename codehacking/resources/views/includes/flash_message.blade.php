@if(Session::has('comment_message'))

    <div class="alert alert-success">
        <p>{{ session('comment_message') }}</p>
    </div>

@endif