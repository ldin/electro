<?php

class TypeTableSeeder extends Seeder {

  public function run()
  {
    DB::table('types')->delete();
    DB::table('types')->insert(array(
      array( 'type' => 'page', 'name'=>'Страница', 'status'=>'0', ),
      array( 'type' => 'price', 'name'=>'Цены', 'status'=>'1', ),
      array( 'type' => 'gallery', 'name'=>'Галерея работ', 'status'=>'1', ),
      array( 'type' => 'recommendation', 'name'=>'Рекомендации', 'status'=>'1', ),
      array( 'type' => 'contacts', 'name'=>'Контакты', 'status'=>'1', ),
      array( 'type' => 'partners', 'name'=>'Партнеры', 'status'=>'1', ),
    ));


  }

}

//заполнить базу:
//php artisan db:seed --class=TypeTableSeeder

