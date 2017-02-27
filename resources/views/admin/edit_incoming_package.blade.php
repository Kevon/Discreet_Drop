@extends('layouts.app')
@section('subtitle', 'Edit Incoming Package')
@section('description', 'Edit an existing incoming package.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <div class="row">
        <h1 class="center">Edit Incoming Package</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="POST" action="/admin/incoming_package/{{$incoming_package->id}}/save" autocomplete="on">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        @include('admin/adminPartials/incoming_package_form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js" integrity="sha256-bEuhxmK0QLOu/l5RR+ot9y+A5RDkl5xlSFp7D/+JTjc=" crossorigin="anonymous"></script>
<script src="/js/user.js"></script>
<script src="/js/admin.js"></script>
@endsection