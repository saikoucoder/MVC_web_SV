<?php
include_once("../Model/M_Student.php");

class Ctrl_Student
{
    public function invoke()
    {
        
        if(isset($_REQUEST['mod1']))
        {
            if(isset($_REQUEST['Add_OK']))
            {
                $id = $_REQUEST['Add_ID'];
                $name = $_REQUEST['Add_Name'];
                $age = $_REQUEST['Add_Age'];
                $uni = $_REQUEST['Add_University'];
                $student = new Entity_Student($id,$name,$age,$uni);
                $model = new Model_Student();
                $model->AddStudent($student);
                include_once("../View/StudentDetail.php");
            }
            else 
            {
                include_once("../View/AddStudent.php");
            }
        }
        else if(isset($_REQUEST['mod4']))
        {

            if(isset($_REQUEST['OK']))
                {
                    $value = $_POST['check'];
                    $value1 = $_POST['text_search'];
                    $model = new Model_Student();
                    $studentList = $model->Search($value,$value1);
                    include_once("../View/StudentList.php");  

                }
                else
                {
                    include_once("../View/Search.php");
                }

        }
        else
        {
            if (isset($_GET['stid'])) {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../View/StudentDetail.php");
            } else {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentList.php");
            }
        }
            
    }
}
$C_Student = new Ctrl_Student();
$C_Student->invoke();
