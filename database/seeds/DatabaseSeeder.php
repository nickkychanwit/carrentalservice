<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\Promotion;

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
        $obj1->nameimg = 'abc.png';
        $obj1->img='';
        $obj1->save();

        $obj2 = new Car();
        $obj2->register = 'กท2222';
        $obj2->type = 'VAN';
        $obj2->brand = 'HONDA';
        $obj2->seat = '9';
        $obj2->pricePerDay = '2000';
        $obj1->nameimg = 'abc.png';
        $obj1->img='';
        $obj2->save();

        $obj3 = new Car();
        $obj3->register = 'กท3333';
        $obj3->type = 'Medium Car';
        $obj3->brand = 'HONDA';
        $obj3->seat = '4';
        $obj3->pricePerDay = '800';
        $obj1->nameimg = 'abc.png';
        $obj1->img='';
        $obj3->save();

        $obj4 = new Promotion();
        $obj4->name = 'โปรโมชั่นวันหยุด';
        $obj4->startDate = '2017-05-10';
        $obj4->expDate = '2017-05-20';
        $obj4->dcType = 'percent';
        $obj4->dc = '10';
        $obj4->img = '1494183446imgpro01.png';
        $obj4->descript='โปรโมชั่นวันหยุดเสาร์อาทิตย์ เช่ารถวันเสาร์-อาทิตย์ลดราคา10%';
        $obj4->save();

        App\promotion::create(['name' => 'โปรโมชั่นวันหยุด','startDate' => '2017-05-10' ,
             'expDate'=>'2017-05-20' ,'dcType'=>'percent','dc'=>'10','img'=>'1494183446imgpro01.png',
             'descript'=>'โปรโมชั่นวันหยุดเสาร์อาทิตย์ เช่ารถวันเสาร์-อาทิตย์ลดราคา10%']);

      }

}
