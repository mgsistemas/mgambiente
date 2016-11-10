<?php

use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela antes
        //\DB::table('batchs')->truncate();

        // processa os seeders
        factory(App\Batch::class,10)->create();
    }
}
