<div class="panel-group" id="accordion">
    @foreach($orders as $order)        
        @include('partials.order_panel')
    @endforeach
</div>