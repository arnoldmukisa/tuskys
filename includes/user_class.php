<?php 
class  users{
    /* Member variables */
    var $username;
    
    /* Member functions */
    function set_name($par){
       $this->username = $par;
    }
    function get_name(){
       echo $this->username;
    }
    
    $fname = new users;
    $lname = new users;

    $username=("$_POST[username]")

 ?>