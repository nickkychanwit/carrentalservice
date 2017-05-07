<?php

use Illuminate\Database\Seeder;
use App\Car;

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


        $obj1 = new Car();
        $obj1->register = 'กท1111';
        $obj1->type = 'SUV';
        $obj1->brand = 'HONDA';
        $obj1->seat = '5';
        $obj1->pricePerDay = '1500';
        $obj1->save();

        $obj2 = new Car();
        $obj2->register = 'กท2222';
        $obj2->type = 'VAN';
        $obj2->brand = 'HONDA';
        $obj2->seat = '9';
        $obj2->pricePerDay = '2000';
        $obj2->save();

        $obj3 = new Car();
        $obj3->register = 'กท3333';
        $obj3->type = 'Medium Car';
        $obj3->brand = 'HONDA';
        $obj3->seat = '4';
        $obj3->pricePerDay = '800';
        $obj3->save();

         App\promotion::create(['name' => 'โปรโมชั่นวันหยุด','startDate' => '2017-05-10' ,
         'expDate'=>'2017-05-20' ,'dcType'=>'percent','dc'=>'10','img'=>'imgpro01.png',
         'descript'=>'โปรโมชั่นวันหยุดเสาร์อาทิตย์ เช่ารถวันเสาร์-อาทิตย์ลดราคา10%']);
          App\promotion::create(['name' => 'โปรโมชั่นเช่ารถมากกว่า3วัน','startDate' => '2017-05-10' ,
          'expDate'=>'2017-06-30' ,'dcType'=>'baht','dc'=>'500','img'=>'imgpro02.png',
          'descript'=>'โปรโมชั่นเช่ารถมากกว่า3วัน จะได้รับส่วนลด500บาททันที']);
    }
}
