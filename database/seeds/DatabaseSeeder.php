<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['posts'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }

        // $this->call('UserTableSeeder');
        $this->call('PostTableSeeder');

        Model::reguard();
    }
}
