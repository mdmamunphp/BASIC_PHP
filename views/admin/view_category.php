<?php
include "admin_submenu.php";
?>
<div class="dashboard-content-container" >
    <div class="dashboard-content-inner" >
        <div class="dashboard-headline">
            <h3>View Category</h3>
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
                                $sql = $m->View("*","category", "","");


                                echo "<tr scope='col'>";
                                echo "<td scope='col'>id</td>";
                                echo "<td scope='col'>name</td>";
                                echo "<td scope='col'>Short Description</td>";
                                 echo "<td scope='col'>Edit</td>";
                                echo "<td scope='col'>Remove</td>";
                                echo "</tr>";
                                while($result = $sql->fetch_object()){

                                    echo "<tr>";
                                    echo "<td>{$result->id}</td>";

                                    echo "<td>{$result->name}</td>";
                                    echo "<td>{$result->short_description}</td>";
                                     echo "<td><a href='index.php?a=edit_category&id={$result->id}'>Edit</a></td>";
                                    echo "<td>delete</td>";

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





