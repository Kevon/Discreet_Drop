@extends('layouts.app')
@section('subtitle', 'New Incoming Package')
@section('description', 'Enter a new incoming package.')


@section('header')

@endsection


@section('content')
<div class="container content">
    <h1 class="center">Enter New Incoming Package</h1>
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/admin/incoming-package/save') }}" autocomplete="on">
                        {{ csrf_field() }}

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
<script src="/js/incomingPackage.js"></script>
<script src="/js/loading.js"></script>
@endsection