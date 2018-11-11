# Laravel PHP Framework 5.2 , PHP 7

## Case 1 Setup

1. Tao Database , Cau Hinh File .env
2. Chay Migrate `php artisan migrate`
3. Chay Seeder De Import Data Mau : `php artisan db:seed --class Case1Seeder`
4. Viet code xu ly trong file Console : `app/Console/Commands/ChallengeMeCase1Console.php`
5. Chay truong trinh : `php artisan challenge-me:case-1`

- Table : case_1_products
- Table : case_1_product_in_warehouse
- Table : case_1_product_notin_warehouse : Chua Cac Ma SP Ko Nam Trong Kho
- Mục Tiêu : Tìm Mã SP `case_1_products` không nằm trong kho `case_1_product_in_warehouse`
- Mục Tiêu : Import Ma SP vao Table case_1_product_notin_warehouse.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
