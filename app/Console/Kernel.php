<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Order;
use App\Shipment;
use App\Outgoing_Package;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            \EasyPost\EasyPost::setApiKey(config('services.easypost.key'));
            $shipments = Shipment::where('outgoing_package_status', 'Shipped')->get();
            foreach($shipments as $shipment){
                $outgoing_package = Outgoing_Package::where('shipment_id', $shipment->id)->latest()->first();
                $order = Order::find($shipment->order_id);
                $tracker = \EasyPost\Tracker::retrieve($outgoing_package->tracker_id);
                if($tracker->status == 'delivered'){
                    $shipment->outgoing_package_status = "Delivered";
                    $outgoing_package->status = $tracker->status;
                    $order->shipment_status = "Delivered";
                    $order->order_status = "Delivered";
                    
                    $order->save();
                    $shipment->save();
                    $outgoing_package->save();
                }
            }
        })->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
