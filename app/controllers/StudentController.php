<?php
// include_once 'app/models/Student.php';
// include_once 'app/controllers/BaseController.php';
namespace App\Controllers;
use App\Models\Student;
class StudentController extends BaseController{
    protected $std;
   
    public function __construct()
    {
        $this->std = new Student() ;
    }
public function getStudent() {
    $students = $this->std->getListStudent();
    return $this->render('students.index',compact('students'));
}
//xoa
public function xoa($id){
    $this->std->de($id);
    redirect( "success","thanh cong","/") ;
}
//them 
public function add(){
    if(isset($_POST['submit'])){
        
    }
    return $this->render('students.add');
    
}
}
"tô ten la anh thu "