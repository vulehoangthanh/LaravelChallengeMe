<?php

use Illuminate\Database\Seeder;

class Case1LargeSeeder extends Seeder
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
        $totalProducts = 1000000;
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
        for($i = 500000; $i <= 800000; $i++ ) {
            $batch[] = ["product_id" => $i];
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
