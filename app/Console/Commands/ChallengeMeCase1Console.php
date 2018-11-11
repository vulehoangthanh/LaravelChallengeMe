<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ChallengeMeCase1Console extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'challenge-me:case-1';

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
        //Table : case_1_products
        //Table : case_1_product_in_warehouse
        //Table : case_1_product_notin_warehouse : Chua Cac Ma SP Ko Nam Trong Kho
        //Target : Tìm Mã SP `case_1_products` không nằm trong kho `case_1_product_in_warehouse`
        //Import Ma SP vao Table case_1_product_notin_warehouse.

        DB::table("case_1_product_notin_warehouse")->truncate();
        $startTime = microtime(true);

        //Start
        //End

        $endTime = microtime(true);

        $this->info("Seconds : " .number_format($endTime - $startTime));
    }
}
