<?php

    require_once('db.php');


    function addEmployee($user){
        $con = getConnection();
        $sql = "insert into employeeinfo (EmployeeName, EmployeeNumber, EmployeeUserName) values('{$user[0]}', '{$user[1]}', '{$user[2]}')";
        $result = mysqli_query($con, $sql);

    }

    function deleteEmployee($employeeusername){
        $con = getConnection();
        $sql = "delete from employeeinfo where EmployeeUserName  = '{$employeeusername}'";
        $result = mysqli_query($con, $sql);

    }

    function updateEmployee($user){
        $con = getConnection();
        $sql = "update employeeinfo set EmployeeName = '{$user[0]}', EmployeeNumber = '{$user[1]}' where EmployeeUserName  = '{$user[3]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function employeeSearch($searchemployee){
        $con = getConnection();
        $sql = "select * from employeeinfo where EmployeeUserName='{$searchemployee}'";
        $result = mysqli_query($con, $sql);
        $employees = [];
        
        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees, $employee);
        }
                
        return $employees;
    }

    function getAllEmployee(){
        $con = getConnection();
        $sql = "select * from employeeinfo";
        $result = mysqli_query($con, $sql);
        $employees = [];
        
        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees, $employee);
        }
        
        return $employees;
        
    }

?>