<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'=> 1,
            'name'=> 'Cơm dĩa'
        ]);
        DB::table('categories')->insert([
            'id'=> 2,
            'name'=> 'Bánh mỳ'
        ]);
        DB::table('categories')->insert([
            'id'=> 3,
            'name'=> 'Bún phở'
        ]);
    }
}
