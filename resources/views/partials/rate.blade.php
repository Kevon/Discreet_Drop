<div id="rate">
    @if(!empty($rate->rate))
        <h4>{{$rate->rate}} {{date('Y-m-d H:i:s')}}</h4>
        <P>We use the cheapest Commercial Plus Pricing rates from USPS, to get you the lowest price possible, and charge a simple flat rate of ${{number_format(($dd_info->dd_rate /100), 2, '.', ' ')}} to cover the packing materials and processing fees of your package before we send it back out to you 100% discreet.</P>
    @else
        <h4>No Rate Available. Please Try again.</h4>
    @endif
</div>