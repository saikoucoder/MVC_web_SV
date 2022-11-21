<?php
include_once("E_Student.php");
class Model_Student
{
   public function __construct()
   {
   }

   public function getAllStudent()
   {
      $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
      mysqli_select_db($link, 'dulieu');
      $rs = mysqli_query($link, "SELECT * FROM sinhvien");
      while ($row = mysqli_fetch_array($rs)) {
         $id = $row['id'];
         $name = $row['name'];
         $age = $row['age'];
         $university = $row['university'];
         $students[] = new Entity_Student($id, $name, $age, $university);
      }
      return $students;
   }

   public function getStudentDetail($stid)
   {
      foreach($this->GetAllStudent() as $value)
      {
          if($value->id==$stid)
              return $value;
      }
  }

  function AddStudent($student)
  {
      $a = $student->id;
      $b = $student->name;
      $c = $student->age;
      $d = $student->university;
      $link = mysqli_connect('localhost', 'root', '');
      mysqli_select_db($link, 'DULIEU');
      $check = "SELECT * FROM SINHVIEN WHERE id='$a'  ";
      $checkId = mysqli_query($link, $check);
      if (mysqli_num_rows($checkId) > 0  ) 
      {
         $error[] = 'user already exist!';
      }
      else
      {
         $sql = "INSERT INTO SINHVIEN(id,name,age,university) VALUES('$a','$b','$c','$d')";
         mysqli_query($link,$sql);
      }
  }
  function Search($value,$value1)
  {
      $link = mysqli_connect('localhost', 'root', '');
      mysqli_select_db($link, 'DULIEU');
      $rs = mysqli_query($link, "SELECT * FROM SINHVIEN WHERE $value LIKE '%$value1%' ");
      $studentlist = array();
         while($row = mysqli_fetch_array($rs))
         {
            $student[] = new Entity_Student($row['id'],$row['name'],$row['age'],$row['university']);
            if($value = "id" )
               break;
         }
      return $student;
  }
   

}
