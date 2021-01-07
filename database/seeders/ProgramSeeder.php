<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Programs;
use Illuminate\Support\Facades\File;

class ProgramSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('programs')->delete();
        $json = File::get("database/data/program.json");
        $data = json_decode($json);

        foreach ($data as $obj) {
            Programs::create(array(
                'title' => $obj->title,
                'ort' => $obj->ort,
                'date' => $obj->date,
                'zeit' => $obj->zeit,
                'content' => $obj->content
            ));
        }
    }

}
