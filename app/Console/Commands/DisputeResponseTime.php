<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\ClientSpecialistDispute;

class DisputeResponseTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispute:response';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispute response has been expired';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $disputes =ClientSpecialistDispute::all();
        foreach($disputes as $dispute){
            if($dispute->response_time < Carbon::now(new \DateTimeZone(config('app.timezone')))){
                $disp = ClientSpecialistDispute::find($dispute->id);
                $disp->status =1;
                $disp->save();
            }
        }
        $this->info('Dispute status has been updated');
    }
}
