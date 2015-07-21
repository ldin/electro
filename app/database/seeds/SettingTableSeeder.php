<?php

class SettingTableSeeder extends Seeder {

  public function run()
  {
    DB::table('settings')->delete();

    DB::table('settings')->insert(array(
      array( 'name' => 'phone', 'title'=>'phone', 'value'=>'+7 909 624 64 04 ', ),
      array( 'name' => 'email', 'title'=>'email', 'value'=>'cenoura@yandex.ru', ),
      array( 'name' => '', 'title'=>'', 'value'=>'', ),
      array( 'name' => '', 'title'=>'', 'value'=>'', ),
      array( 'name' => '', 'title'=>'', 'value'=>'', ),
      array( 'name' => '', 'title'=>'', 'value'=>'', ),
    ));
  }

}


//заполнить базу:
//php artisan db:seed --class=SettingTableSeeder
