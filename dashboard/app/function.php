<?php
include_once "db_config.php";

/*
 * Insert function
 */
function insertData($sql){
    global $config;
    return $config->query($sql);
}
/*
 * File Upload and save function
 */
 function encrypted($data){
     return $password = md5($data);
 }
/*
 * File Upload and save function
 */



/*
 *
 * 1, Emial Check
 * 2, User Name Check
 * 3, Cell Check
 */
  function emailCheck($table,$input){
      global $config;
      $sql = "SELECT email FROM $table WHERE email = '$input'";
      $check = $config->query($sql);
      $row = $check->num_rows;
      return $row;

}
function userNameCheck($table,$input){
    global $config;
    $sql = "SELECT username FROM $table WHERE username = '$input'";
    $check = $config->query($sql);
    $row = $check->num_rows;
    return $row;

}
function cellCheck($table,$input){
    global $config;
    $sql = "SELECT cell FROM $table WHERE cell = '$input'";
    $check = $config->query($sql);
    $row = $check->num_rows;
    return $row;

}
/*
 * duplicate function End
 */


/*
 * Show All data function
 */
function showAllData($table){
    global $config;
    $sql = "SELECT * FROM $table ORDER BY id DESC";
    $result = $config-> query($sql);
    return $result;
}
function allUser($table){
    global $config;
    $sql = "SELECT id FROM $table";
    $result = $config->query($sql);
    $all_users = $result->num_rows;
    return $all_users;
}

function totalRows($table){
    global $config;
    $sql = "SELECT * FROM $table";
    $result = $config-> query($sql);
    $rows = $result ->num_rows;
    return $rows;
}



function Update(){

}


function showAllDataLimit($table,$limit){
    global $config;
    $sql = "SELECT * FROM $table LIMIT $limit OFFSET 0";
    $result = $config-> query($sql);
    return $result;
}


function showSingleData($table,$id){
    global $config;
    $sql = "SELECT * FROM $table WHERE id=$id";
    $result = $config-> query($sql);
    return $result;
}
function showCtscategorieData($table,$id){
    global $config;
    $sql = "SELECT * FROM $table WHERE productscategorie='$id'";
    $result = $config-> query($sql);
    return $result;
}

/*
 * delete function Start
 */
    function deleteFuncation($delete,$table,$delete_array = ["file-name" => '$imgss']){
        global $config;
       // users_info
        if (isset($delete)){
            $del = $delete;
            $img = $_GET['image'];
            unlink('$delete_array["file-name"]'.$img);
            $sql = "DELETE FROM $table WHERE id='$del'";
            $config->query($sql);
            header("location:index.php");
        }
    }
/*
 * delete function End
 */




/*
 * unique name Start
 */
     function uniqneName($photo,$folder='images/user_photo/'){
         $photo_name = $photo['name'];
         $photo_tmp = $photo['tmp_name'];
         $photo_arr = explode('.',$photo_name);
         $photo_ext = end($photo_arr);
         $unique = md5(rand(1,999999).time()).".".$photo_ext;
         move_uploaded_file($photo_tmp,"$folder".$unique);
         return $unique;
     }
 /*
  * Unique Name End
  */



 /*
 * Message function Start
 */
    function validation($msg,$type = 'danger'){
        return "<p class=\" alert alert-$type \">$msg<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }
/*
 * Message function End
 */