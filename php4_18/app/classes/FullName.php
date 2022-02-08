<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;
    protected $fullName;

    public function __construct($data=null)
    {
        if ($data) {

            $this->firstName = $data ['first_name'];
            $this->lastName = $data ['last_name'];

        }
    }

    public function index()
    {
       //   $_GET['pages']='Full-name'
       header('Location:action.php?pages=full-name');
    }
    public function getFullName()
    {
        $fullName= new FullName( $_POST);
        $result = $fullName->getFullName();
        return $result;

    }
}