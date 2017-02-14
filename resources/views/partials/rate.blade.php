<div id="rate">
    @if(!empty($rate->rate) or !empty($rate->amount))
        <h4 class="center">${{$rate->rate or $rate->amount}} estimated USPS shipping cost + ${{number_format(($dd_info->dd_rate /100), 2, '.', ' ')}} Discreet Drop fee comes to around:</h4>
        <h1 class="center">
            @if(!empty($rate->rate))
                ${{number_format($rate->rate + number_format(($dd_info->dd_rate /100), 2, '.', ' '), 2, '.', ' ')}}
            @else
                ${{number_format($rate->amount + number_format(($dd_info->dd_rate /100), 2, '.', ' '), 2, '.', ' ')}}
            @endif
        </h1>
        <P>Actual shipping costs may vary due to the final size and weight of the outgoing package. We understand we've all been spoiled by free shipping, but shipping is all we do so it is the biggest expense for us. We use the cheapest Commercial Plus Pricing rates from USPS to get you the lowest price possible, for every customer. We charge a simple flat rate of ${{number_format(($dd_info->dd_rate /100), 2, '.', ' ')}} to cover the packing materials and processing fees of your package before we send it back out to you 100% discreet.</P>
    @else
        <h4>No Rate Available. Please Try again.</h4>
    @endif
</div>