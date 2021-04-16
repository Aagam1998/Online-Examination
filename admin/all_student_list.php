<?php
session_start();
include "../connection.php";
include "header.php";
if(!isset($_SESSION["admin"]))
 {
     ?>
    <script type="text/javascript">
        window.location="index.php"; 
    </script>
     <?php
 }     
?>

         <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Student Details</h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                             <?php

                                $count = 0;
                                $res=mysqli_query($link,"select * from regisration order by id desc");
                                $count= mysqli_num_rows($res);

                                if($count==0)
                                {
                                        ?>
                                        <center>
                                        <h1> No Results Found </h1>
                                        </center>

                                    <?php
                                }else{
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr style='background-color: #006df0; color:white'>";
                                    echo "<th>"; echo " Name"; echo "</th>";
                                    echo "<th>"; echo "Username"; echo "</th>";
                                    echo "<th>"; echo "E-mail"; echo "</th>";
                                    echo "<th>"; echo "Contact"; echo "</th>";
                                
                                    echo "</tr>";

                                    while($row=mysqli_fetch_array($res))
                                    {
                                        
                                        echo "<tr>";
                                        echo "<td>"; echo $row["firstname"]; echo " "; echo $row["lastname"]; echo "</td>";
                                        echo "<td>"; echo $row["username"]; echo "</td>";
                                        echo "<td>"; echo $row["email"]; echo "</td>";
                                        echo "<td>"; echo $row["contact"]; echo "</td>";
                                        
                                        echo "</tr>";
                                    }

                                    echo "</table>";
                                }

                                ?>
                                                    
                                
                            </div>
                        </div> 

                    </div>
                    <!--/.col-->

                                          
                                                 
                      </div>
             </div><!-- .animated -->
    </div><!-- .content -->

<?php
include "footer.php"
?>
