<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(BancosTableSeeder::class);
      $this->call(DadosBancariosTableSeeder::class);
      $this->call(EnderecosTableSeeder::class);
      $this->call(ContatosTableSeeder::class);
      $this->call(FornecedoresTableSeeder::class);
      $this->call(GruposTableSeeder::class);
      $this->call(SubGruposTableSeeder::class);
      $this->call(MercadoriasTableSeeder::class);
    }
}
