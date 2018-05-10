<?php
session_start();
class users
  {
  	public $host="localhost";
  	public $user="root";
  	public $pasw="";
  	public $db_name="test";
  	public $connect;
  	public $contact;
  	public $cat_name;
  	public $ans;
    public $ques;
    public $datet;
    public $ans1;
    public $ans2;

  public function __construct()
  {
  	$this->connect=new mysqli($this->host,$this->user,$this->pasw,$this->db_name);
  	if($this->connect->connect_errno)
  	{
  		die("error .$this->connect->connect_errno");
  	}
  }
  public function signup($data)
  {
  	$this->connect->query($data);
  	return true;
  }
 

  public function signupadmin($data)
  {
    $this->connect->query($data);
    return true;
  }
  public function addlibrary($dat)
  {
     $this->connect->query($dat);
    return true;
  }
   public function url($url)
   {
     	header("location:".$url);
  }
  public function signin($email,$pasw)
  {
  	$query=$this->connect->query("select email,pasw from signup 
                        where email='$email' and pasw='$pasw'");
  	$query->fetch_array(MYSQLI_ASSOC);
  	if($query->num_rows>0)
  	{
        $_SESSION['em']=$email;
        return true;
  	}
  	else
  	{
  		return false;
  	}

  }
   public function signinadmin($email,$pasw)
  {
    $quer=$this->connect->query("select email,pasw from admin_panel 
                        where email='$email' and pasw='$pasw'");
    $quer->fetch_array(MYSQLI_ASSOC);
    if($quer->num_rows>0)
    {
        $_SESSION['em']=$email;
        return true;
    }
    else
    {
      return false;
    }

  }
  public function profile($email)
  {
  	$query=$this->connect->query("select * from signup where email='$email'");
  	$rows=$query->fetch_array(MYSQLI_ASSOC);
  	if($query->num_rows>0)
  	{
        $this->contact[]=$rows;
  	}

  }
  public function cat()
  {
    $query=$this->connect->query("select * from category");
    while($rows=$query->fetch_array(MYSQLI_ASSOC))
    {
        $this->cat_name[]=$rows;
  	}
  }
  public function match($cid)
  {
    $query=$this->connect->query("select * from category2 where id='$cid' and email='".$_SESSION['em']."'");
    if($query->num_rows>0)
    {
        return true;
    }
    else
    {
      $this->connect->query("insert into category2 values ('$cid','".$_SESSION['em']."')");
    }

  }
     public function q_ans($id)
  {
    $query=$this->connect->query("select * from ques_ans where cat_id='$id'");
     while($rows=$query->fetch_array(MYSQLI_ASSOC))
     {
      $this->ans[]=$rows;
     }
    }
  public function logout()
  {
 	    session_destroy();
      return true;
  }
  public function ans_match($data)
  {
    $ans=implode("",$data);
    $query=$this->connect->query("select id,ans from ques_ans where cat_id='".$_SESSION['cat']."'");
    $right=0;
    $wrong=0;
    $not_attempted=0;
    while($rows=$query->fetch_array(MYSQLI_ASSOC))
    {
      $this->ans1[]=$rows;
    }
  

  }
  public function libra()
  {
    $query=$this->connect->query("select * from library");
    while($rows=$query->fetch_array(MYSQLI_ASSOC))
     {
      $this->ans2[]=$rows;
     }


  }
   public function datetime($id)
   {
      $query=$this->connect->query("select * from category where id='$id'");
    while($rows=$query->fetch_array(MYSQLI_ASSOC))
    {
        $this->datet[]=$rows;
    }
   }
  

   public function category($data)
  {
    $this->connect->query($data);
    return true;
  }
public function library()
{
  $query=$this->connect->query("select * from library ");
     while($rows=$query->fetch_array(MYSQLI_ASSOC))
     {
      $this->ques[]=$rows;
     }
    } 

}
?>  