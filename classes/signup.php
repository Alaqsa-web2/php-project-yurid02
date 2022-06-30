<?php

class Signup {
    private $error = "";

     public function evaluate($data){

        foreach($data as $key => $value ){
                if (empty($value)){
                    $this->error =$this->error . $key ."is empty!<br>";
                }

                    if ($key == "email"){
                        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
                    
                        $this->error =$this->error."invalid email address <br>";
                    } 
                }
                if ($key == "first_name"){
                    if (is_numeric($value)){
            
                        $this->error =$this->error ."first name can not be a number <br>";
                    } 
                    if (strstr($value," ") ){
                        $this->error = $this->error."first name can not have spaces <br>";
                    }
            }

            if ($key == "last_name"){
                if (is_numeric($value)){
            
                $this->error =$this->error ."last name can not be a number <br>";
            } 
            if (strstr($value," ") ){
                $this->error = $this->error."last name can not have spaces <br>";
            }
        }
        }
    if($this->error == ""){

       $this->create_user($data);
    }else{
        return $this->error ;
    }
     }


     public function create_user($data){
      
        $first_name = ucfirst( $data['first_name']);
        $last_name = ucfirst( $data['last_name']);
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];
        
        $url_address = strtolower($first_name) . "." . strtolower($last_name);
        $user_id = $this->create_user_id();

        $query="insert into users(user_id,first_name,last_name,email,password,url_address) 
        values('$user_id','$first_name','$last_name','$email','$password','$url_address');";
             
        $DB = new Database();
        $DB->save($query);
}


private function create_user_id(){
 $length = rand(4,19);
 $number = "";
 for ($i=0; $i< $length ; $i++ ){
    $new_rand = rand(0,9);
    $number = $number . $new_rand;
 }
 return $number ;
}

}


?>