<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = [
            'norte', 'centro', 'sur'
        ];

        for($i=0; $i<3; $i++){
            DB::table('categorias')->insert([
                'region'=>$categoria[$i]
            ]);
        }
    }
}
