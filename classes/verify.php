<?php session_start();

class verify extends queries {

  public function emailVerify(){

    if(isset($_GET['confirmation'])){
        $code = $_GET['confirmation'];
        $status = 1;
        if($this->query("SELECT * FROM user WHERE code = ? ", [$code])){
            if($this->count() == 1){

                $row = $this->fetch();
                $uid = $row->uid;
                if($this->query("UPDATE user SET status = ? WHERE uid = ? ", [$status, $uid])){

                    $_SESSION['emailVerified'] = "Your account has been verified successfully please login";
                    header("location: login.php");

                }

            }
        }
    }
  }
}
?>
