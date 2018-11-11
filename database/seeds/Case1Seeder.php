<?php

use Illuminate\Database\Seeder;

class Case1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("case_1_products")->truncate();
        DB::table("case_1_product_in_warehouse")->truncate();

        //Insert Products
        $totalProducts = 100000;
        $batch = [];
        for ($p = 1; $p <= $totalProducts; $p++) {
            $batch[] = ["id" => $p];
            if(count($batch) == 500)
            {
                DB::table("case_1_products")->insert($batch);
                $batch = [];
            }
        }
        if(!empty($batch))
            DB::table("case_1_products")->insert($batch);

        $batch = [];
        for($i = 50000; $i <= 80000; $i++ ) {
            $batch[] = ["product_id" => $p];
            if(count($batch) == 500)
            {
                DB::table("case_1_product_in_warehouse")->insert($batch);
                $batch = [];
            }
        }
        if(!empty($batch))
            DB::table("case_1_product_in_warehouse")->insert($batch);

    }
}
