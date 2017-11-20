<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $s = new \App\Shelf();
        $s->shelf_name = "Art";
        $s->save();
        $s = new \App\Shelf();
        $s->shelf_name = "Science";
        $s->save();
        $s = new \App\Shelf();
        $s->shelf_name = "Sports";
        $s->save();
        $s = new \App\Shelf();
        $s->shelf_name = "Literature";
        $s->save();

        $u = new App\User();
        $u->username = 'Librarian';
        $u->email = 'Lib@lib.com';
        $u->librarian = 1;
        $u->password = bcrypt('abcdefg1');
        $u->phone = '';
        $u->save();

        $u = new App\User();
        $u->username = 'Student';
        $u->email = 'student@edu.com';
        $u->librarian = 0;
        $u->password = bcrypt('abcdefg1');
        $u->phone = '';
        $u->save();
    }
}
