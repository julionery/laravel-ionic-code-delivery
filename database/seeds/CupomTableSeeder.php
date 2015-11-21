<?php
use PizzariaWeb\Models\Cupom;
use Illuminate\Database\Seeder;
use PizzariaWeb\Models\Products;

class CupomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cupom::class, 10)->create();
    }
}
