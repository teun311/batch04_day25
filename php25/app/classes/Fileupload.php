<?php


namespace App\classes;


class Fileupload
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;

    protected $filepath;
    protected $file;
    protected $data;
    protected $imgPath;

    protected $imageFile;
    protected $imageName;
    protected $imgDirectory;

    protected $allArray;
    protected $subArray;
    protected $array;

    public function __construct($file,$post)
    {
        if ($post)
        {
            $this->name  = $post['s_name'];
            $this->email = $post['s_email'];
            $this->phone = $post['s_number'];
            $this->value =$post;
        }
        if ($file)
        {
            $this->imageFile = $file['s_image'];
        }

    }

    public function imageUpload()
    {
        $this->imageName = time().$this->imageFile['name'];
        $this->imgDirectory = 'assets/upload/'.$this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'],$this->imgDirectory);
        return $this->imgDirectory;
    }
    public function index()
    {

//        echo '<pre>';
//        print_r($this->imageFile);
//       exit();
        $this->imgPath = $this->imageUpload();
        $this->filepath = 'db/db.txt';
        $this->file = fopen($this->filepath,'a');
        $this->data ="$this->name,$this->email,$this->phone,$this->imgPath$";
        fwrite($this->file,$this->data);
        fclose($this->file);

        return ' upload successfully !!!';

    }


}