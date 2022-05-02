<?php
include 'sidebar.php';
?>
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}
    </style>
    <?php
    $email=$_SESSION['jobseekeremail'];
    $sql="SELECT * FROM jobseeker where email='$email'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo "<div class='card text-white gradient-custom py-3 ' style='height:650px; width:650px;padding:10px 10px 10px 10px; margin:20px 100px 100px 350px'>
    <h2 class='text-center'>My Profile</h2>
    <hr>
    <div class='row mt-2 border-bottom mx-2 py-1' style='border:2px solid white'>
        <table>
        <tr>
        <th>
        <p class='text-center fw-bold '>Profile Pic:</p></th>
        ";
        if($row['pic']==NULL)
{
    echo "<td><p class='text-start fs-normal fs-6'>
    <img src='images/employee.png' width='100px' height='100px' class='shadow-strong-3 rounded-circle'/>
</p></td>";
}
else
{
   echo" <td><p class='text-start fs-normal fs-6 ' style='margin-bottom:30px'>
        <img src='".$row['pic']."' width='100px' height='100px' class='shadow-strong-3 rounded-circle'/>
    </p></td>";
}
       echo "
       </tr>
    <tr><th><p class='text-center fw-bold  fs-5'>Full Name:</p></th>
    <td><p class='text-start fw-normal fs-6 '>".$row['firstname']." ".$row['lastname']."</p>
    </td></tr>
    <tr><th><p class='text-center fw-bold fs-5'>Mother Name:</p></th>
    <td><p class='text-start fw-normal fs-6  '>".$row['mothername']."</p></td>
    </tr>
    <tr><th><p class='text-center fw-bold fs-5'>Father Name:</p></th>
    <td><p class='text-start fw-normal fs-6  '>".$row['fathername']."</p></td>
    </tr>
    <tr><th><p class='text-center fw-bold fs-5'>Address:</p></th>
    <td><p class='text-start fw-normal fs-6 '>".$row['address']."</p></td>
    </tr>
    <tr><th><p class='text-center fw-bold fs-5'>Gender:</p></th>
    <td><p class='text-start fw-normal fs-6 '>".$row['gender']."</p></td>
    </tr>
    <tr><th><p class='text-center fw-bold fs-5'>DOB:</p></th>
    <td><p class='text-start fw-normal fs-6  '>".$row['dob']."</p></td>
    </tr>
    <tr><th><p class='text-center fw-bold fs-5'>Email</p></th>
    <td><p class='text-start fw-normal fs-6 mt-2 '>".$row['email']."</p></td>
    </tr>
    </table>
</div>

</div>";
?>