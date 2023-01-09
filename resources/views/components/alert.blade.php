<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
</div>