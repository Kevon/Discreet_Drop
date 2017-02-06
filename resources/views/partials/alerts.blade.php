@if(Session::has('message'))

<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>   
  <strong>Success!</strong> {{Session::get('message')}}
</div>

@endif


@if (count($errors))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissable">
          <strong>ERROR:</strong> {{ $error }}
        </div>
    @endforeach
@endif

@if(Session::has('alert'))

    <div class="alert alert-danger alert-dismissable">
      <strong>ERROR:</strong> {{Session::get('alert')}}
    </div>

@endif