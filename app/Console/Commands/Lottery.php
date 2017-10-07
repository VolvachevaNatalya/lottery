<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Lottery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lottery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $numbers_array=$this->numbers(3,1,10);
        asort($numbers_array);
        $numbers=123; //implode("",$numbers_array);
        $time=time();
        $time_lottery=date('Y-m-d H:i:s', $time);
        $time_lottery_old=date('Y-m-d H:i:s', $time-3600);
        $results = DB::select('select * from lotterys where numbers = ? AND created_at > ? AND created_at < ?', [$numbers, $time_lottery_old, $time_lottery]);

        if(!empty($results)){
            foreach($results as $value){
                \Log::info('Lottery - winner: '.$value->full_name . ' time:' . $time_lottery  );

                $msg = "Hello, " . $value->full_name . "!\n Congratulations! You are the winner of our lottery!" ;
                mail($value->email,"Congratulations",$msg);

                DB::update('update lotterys set is_winner = true where id=?',[$value->id]);


            }
        }
    }

    private function numbers($n, $min, $max) {
        $numbers = array();
        while (count($numbers) < $n) {
            $number = mt_rand($min, $max);
            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        }
        return $numbers;
    }

}
