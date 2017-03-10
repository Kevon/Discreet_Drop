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
            $outgoing_package
            foreach($shipments as $shipment){
                $outgoing_package = Shipment::where('shipment_id', $shipment->id);
                $order = Order::where('shipment_id', $shipment->id);
                $tracker = \EasyPost\Tracker::retrieve($outgoing_package->tracker_id);
                if($tracker->status == 'delivered'){
                    $shipment->outgoing_package_status = "Delivered";
                    $outgoing_package->status = $tracker->status;
                    $order->shipment_status = "Delivered";
                    $order->order_status = "Delivered";
                }
            }
        })->dailyAt('3:00');
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
