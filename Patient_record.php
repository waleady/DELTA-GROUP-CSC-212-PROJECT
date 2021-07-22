<?php
require_once "dbconnect/dbconnect.php";
?>
<!Doctype.html>
<html>
<head>
     <link rel=" stylesheet" type="text/CSS" href="asset/bootstrap/CSS/bootstrap.main.css>
     <script src="asset/bootstrap/js/bootstrap.min.js"></script>
     <style type="text/css">
        .container{
              margin-top:100px;
              margin-bottom:50px;
           }
           table{
              width: 100%;
              height: auto;
              border-style: solid;
              border-width: 3px;
           }
       </style>
 </head>
<body>
    <?php include"retrieve_patient.php"; ?>
<div class="container">
     <div class="row">
          <div class="col-mid-12">
              <div class="card-header">
                   <h3>Patient Registered</h3>
              </div>
              <div class="card-body">
                   <table border="5px solid">
                        <thead>
                            <th>Patient's Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Section</th>
                            <th>Date Issued</th>
                        </thread>
                         <tbody>
                              <tr>
                              <td><?php $tom["name"]; ?></td>
                              <td><?php $tom["age"]; ?></td>
                              <td><?php $tom["gender"]; ?></td>
                              <td><?php $tom["address"]; ?></td>
                              <td><?php $tom["section"]; ?></td>
                              <td><?php $tom["date_issued"]; ?></td>
                             </tr>
                         </tbody>
                     </table>
                  </div>
               </div>
            </div>
        </div>
     </div>
  </body>
</html>

