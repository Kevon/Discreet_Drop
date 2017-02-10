<div class="panel-group" id="accordion">
    @if(count($orders)==0)
        @include('partials.order_panel', ['demo' => 1])
    @else
        @foreach($orders as $order)        
            @include('partials.order_panel', ['demo' => 0])
        @endforeach
    @endif
</div>