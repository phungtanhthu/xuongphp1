<?php
// require_once 'app/models/BaseModel.php';
namespace App\Models;
use App\Models\BaseModel;
class Student extends BaseModel{
public function getListStudent() {
    $sql = "select * from students";
    return $this->loadAllRows([],$sql);
}
public function add($name,$email,$gender){
    $sql='INSERT INTO `students`( `name`, `email`, `gender`) VALUES (?,?,?)';
    return $this->execute([$name,$email,$gender],$sql);
}
public function de($id){
    $sql='DELETE FROM `students` WHERE id=?';
    return $this->execute([$id],$sql);
}

}
?>