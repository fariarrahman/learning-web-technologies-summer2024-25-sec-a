<?php
require_once('../models/db.php');
$con = getConnection();

// Add Employer
if (isset($_POST['add_employer'])) {
    $name = $_POST['employer_name'];
    $company = $_POST['company_name'];
    $contact = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password)
            VALUES ('$name', '$company', '$contact', '$username', '$password')";
    mysqli_query($con, $sql);
}

// Update Employer
if (isset($_POST['update_employer'])) {
    $id = $_POST['id'];
    $name = $_POST['employer_name'];
    $company = $_POST['company_name'];
    $contact = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE employers SET employer_name='$name', company_name='$company',
            contact_no='$contact', username='$username', password='$password'
            WHERE id=$id";
    mysqli_query($con, $sql);
}

// Delete Employer
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM employers WHERE id=$id");
}

// Fetch All Employers
function get_employers($con) {
    $res = mysqli_query($con, "SELECT * FROM employers");
    $data = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}

// Search (Ajax)
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $res = mysqli_query($con, "SELECT * FROM employers 
        WHERE employer_name LIKE '%$search%' OR company_name LIKE '%$search%' OR username LIKE '%$search%'");
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employer_name']}</td>
                <td>{$row['company_name']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['username']}</td>
                <td>{$row['password']}</td>
                <td>
                  <a href='employer.php?edit={$row['id']}'>Edit</a> |
                  <a href='employer.php?delete={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    exit;
}
?>
