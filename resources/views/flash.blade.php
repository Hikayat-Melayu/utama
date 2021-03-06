@if ($message = Session::get('success'))

<div class="alert alert-success alert-block alert-dismissible fade show my-3" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

  

@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block alert-dismissible fade show my-3" role="alert">    
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

   

@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-block alert-dismissible fade show my-3" role="alert">    
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

   

@if ($message = Session::get('info'))

<div class="alert alert-info alert-block alert-dismissible fade show my-3" role="alert">    
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

  

@if ($errors->any())

<div class="alert alert-warning alert-dismissible fade show my-3" role="alert">

    
    {!! implode('', $errors->all('<strong>:message</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>')) !!}

</div>

@endif