<?php


namespace App\classes;


class StudentInfo
{
    protected $array;
    protected $array1;
    protected $array2;
    protected $filpath;
    protected $data;
    public function indexx()
    {
        $this->filpath = 'db/db.txt';
       // $this->file = fopen($this->filpath,'a');
        $this->data = file_get_contents($this->filpath);
        $this->array = explode('$',$this->data);


        foreach ($this->array as $key => $value)
        {
            $this->array1 = explode(',',$value);
//            echo '<pre>';
//            print_r($this->array1);
//            exit();
            if ($this->array1[0])
            {
                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['phone'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }

        }
//        echo '<pre>';
//            print_r($this->array2);
        return $this->array2;

    }
}