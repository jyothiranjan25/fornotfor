<?php

require('database/dbconfig.php');
 
include('security.php'); 

?>


<?php
$output = '';

if(isset($_POST['export_excel']))
{
  $sql="SELECT * FROM register ORDER BY id DESC";
  $result=mysqli_query($connection , $sql);

  if(mysqli_num_rows($result) >0 )
  {
    $output .='

     ID 
             Username 
            Email 
            Phone
            College
            college_id
            Category
            Transaction id
            DOB 
            REGISTRATION DATE 
            
            status 

          
          ';

          while($row = mysqli_fetch_array($result))
          {
              $output .= '
              
              <tr>
              <td>'.$row['id']. '</td>
              <td>'.$row['name']. '</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['phone']. '</td>
              <td> '.$row['college']. '</td>
              <td> '.$row['college_id'].' </td>
              <td> '.$row['category']. '</td>
              <td> '.$row['res_code'].' </td>
              <td> '.$row['dob']. '</td>
              <td> '.$row['registration_date'].' </td>
              <td> '.$row['status'].' </td>


              ' ;

          }
          $output .= '</table>';
          // header("Content-Type: application/csv");
          // header("Content-Disposition: attachement; filename=aura_report.csv");
          @header("Content-Disposition: attachment; filename=mysql_to_excel.csv");
          echo $output;

  }
}



?>








