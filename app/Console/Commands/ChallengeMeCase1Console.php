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
        //Target : Tìm Mã SP `case_1_products` không nằm trong kho `case_1_product_in_warehouse`
        //Xuất ra danh sách các Mã SP đó ra file .
        $startTime = microtime(true);
        //Code Xu ly O Day
        //End Code Xu Ly
        $endTime = microtime(true);
        $this->info("Seconds : " .number_format($endTime - $startTime));
    }
}
