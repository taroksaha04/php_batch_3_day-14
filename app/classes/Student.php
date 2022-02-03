<?php


namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result =[];

    public function __construct($post = null)
    {
        if(isset($post['search']))
        {
        $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
        return [
            0=>[
                'name'    =>  'tarok saha',
                'mobile'  =>  '1234568',
                'email'   =>  'tarok@gmail.com',
                'address' =>  'old Dhaka'
            ],
            1=>[
                'name'    =>  'abul',
                'mobile'  =>  '568098',
                'email'   =>  'abul@gmail.com',
                'address' =>  'old Dhaka'
            ],
            2=>[
                'name'    =>  'Mokhless',
                'mobile'  =>  '23456',
                'email'   =>  'mokhless@gmail.com',
                'address' =>  'old Dhaka'
            ],
            3=>[
                'name'    =>  'rahim',
                'mobile'  =>  '67890',
                'email'   =>  'rahim@gmail.com',
                'address' =>  'Gazipur'
            ],
            4=>[
                'name'    =>  'shykot',
                'mobile'  =>  '012345',
                'email'   =>  'shykot@gmail.com',
                'address' =>  'Narayanganj'
            ],
            5=>[
                'name'    =>  'abir',
                'mobile'  =>  '56789',
                'email'   =>  'abul@gmail.com',
                'address' =>  'panthapath'
            ],
        ];
    }
    public function getStudentBySearchText()
    {
        //echo 'ok';
       // echo $this->text;
        $this->students =$this->getAllStudent();
        foreach($this->students as $student)
        {
            if($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;


    }
}