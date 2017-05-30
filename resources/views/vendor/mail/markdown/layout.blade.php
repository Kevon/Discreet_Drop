@if (isset($preheader))
{!! strip_tags($preheader) !!}
@endif

{!! strip_tags($header) !!}

{!! strip_tags($slot) !!}

@if (isset($subcopy))
{!! strip_tags($subcopy) !!}
@endif

{!! strip_tags($footer) !!}
