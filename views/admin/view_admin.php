<?php
include "admin_submenu.php";
?>
<div class="dashboard-content-container" >
    <div class="dashboard-content-inner" >
        <div class="dashboard-headline">
            <h3>View Admins</h3>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="dashboard-box margin-top-0">
                    <div class="headline">
                        <table class="table table-hover">
                            <?php
                            $m = new Models();
                            if(isset($_POST)){

                                extract($_POST);
                                $sql = $m->View("*","admin", "","");


                                echo "<tr scope='col'>";
                                echo "<td scope='col'>id</td>";
                                echo "<td scope='col'>name</td>";
                                echo "<td scope='col'>Delete</td>";

                                echo "</tr>";
                                while($result = $sql->fetch_object()){

                                    echo "<tr>";
                                    echo "<td>{$result->id}</td>";

                                    echo "<td>{$result->name}</td>";
                                    echo "<td scope='col'><a href=delete.php?id={$result->id}'>delete</td>";
                                  //  echo "<td scope='col'><a href='index.php?a=delete&id={$result->id}'>delete</td>";

                                    echo "</tr>";
                                }
                            }

                            ?>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





