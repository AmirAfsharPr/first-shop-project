@if(session()->has('success'))
    <p class="col-9 alert alert-success bg-success text-center m-auto b-r-10">
        {{session()->get('success')}}
    </p>
@endif
