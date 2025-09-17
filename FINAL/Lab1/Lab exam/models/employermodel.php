<?php
require_once("db.php");

function getEmployers() {
    $con = getConnection();
    $sql = "SELECT * FROM employers";
    $result = mysqli_query($con, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function getEmployerById($id) {
    $con = getConnection();
    $sql = "SELECT * FROM employers WHERE id=$id";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
}

function addEmployer($data) {
    $con = getConnection();
    $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password)
            VALUES ('{$data['employer_name']}', '{$data['company_name']}', '{$data['contact_no']}',
                    '{$data['username']}', '{$data['password']}')";
    return mysqli_query($con, $sql);
}

function updateEmployer($data) {
    $con = getConnection();
    $sql = "UPDATE employers 
            SET employer_name='{$data['employer_name']}', company_name='{$data['company_name']}',
                contact_no='{$data['contact_no']}', username='{$data['username']}', 
                password='{$data['password']}'
            WHERE id={$data['id']}";
    return mysqli_query($con, $sql);
}

function deleteEmployer($id) {
    $con = getConnection();
    $sql = "DELETE FROM employers WHERE id=$id";
    return mysqli_query($con, $sql);
}

function searchEmployers($keyword) {
    $con = getConnection();
    $sql = "SELECT * FROM employers 
            WHERE employer_name LIKE '%$keyword%' 
               OR company_name LIKE '%$keyword%' 
               OR username LIKE '%$keyword%'";
    $result = mysqli_query($con, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}
?>
