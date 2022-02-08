<?php


namespace App\classes;


class Example
{
    public $courses = ["course_name" => "PHP with Laravel",
        "trainer_name1" => "Habibur Rahman",
        "trainer_name2" => "Mohammad Ali",
        "course_day" => "60",
        "day01" => "Sunady",
        "day02" => "Monday",
        "day03" => "Tuesday",
        "day04" => "Wednesday",
        "day05" => "Thursday",
        "training_room" => "Lab-401",
    ];

    public $name;
    public $data = [];
    public $inf = [];
    public function index ()
    {
        $this->inf = [
            0=> [
                "name"=>"Sagor",
                "email"=>"sagor@gmail.com",
                "mobile"=>[
                    "personal" =>"123456789",
                    "parent"=>"987456321"
                    ],
                ],

            1=> [
                "name"=>"Faysal",
                "email"=>"sagor@gmail.com",
                "mobile"=>"123456789"],

            2=> [
                "name"=>"Robin",
                 "email"=>"sagor@gmail.com",
                "mobile"=>"123456789"
                    ],
            3=>["BITM"],
            4=>[
                'name'=>'sojib',
                'email'=>'sojib@gmail.com',
                'mobile'=>'123456789'
              ]
        ];

//            foreach ($this->inf as $item)
//            {
//                echo $item  ['name'].'' .$item ['email'].''.$item['mobile']. '<br/>';
//            }
//                foreach ($this->inf as $item)
//                {
//                    if (is_array($item))
//                    {
//                        foreach ($item as $value)
//                        {
//                            if (is_array($value))
//                            {
//                                foreach ($value as $v_value)
//                                {
//                                    echo $v_value. '';
//                                }
//                            }
//                            else {
//                                echo $value . '';
//                            }
//                        }
//                        echo '<br/>';
//                    }
//                    else $item;
//                }
               // echo '<pre>';
              //  print_r($this->inf);
               //     var_dump($this->inf);









    }
    public function info(){

        foreach ($this->courses as $key => $value) {
            echo " $key : $value <br/> ";
        }
    }
}