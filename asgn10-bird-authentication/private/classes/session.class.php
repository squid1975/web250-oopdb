<?php 

class Session {

  private $member_id;
  public $username;
  private $last_login;

  public function __construct(){
    session_start();
    $this->check_stored_login();
  }

  public function login($member){
    if($member){
      session_regenerate_id();
      $_SESSION['member_id'] = $member->id;
      $this->member_id = $member->id;
      $this->username = $_SESSION['username'] = $member->username;
      $this->last_login = $_SESSION['last_login'] = time();
    }
    return true;
  }

  public function is_logged_in(){
    return isset($this->member_id);
  }

  public function logout(){
    unset($_SESSION['member_id']);
    unset($_SESSION['username']);
    unset($_SESSION['last_login']);
    unset($this->member_id);
    unset($this->username);
    unset($this->last_login);

    return true;
  }

  private function check_stored_login(){
    if(isset($_SESSION['member_id']))
    {
      $this->member_id = $_SESSION['member_id'];
      $this->username = $_SESSION['username'];
      $this->last_login = $_SESSION['last_login'];

    }
  }

}

?>