<?php
include "admin_submenu.php";
?>
<div class="dashboard-content-container" >
    <div class="dashboard-content-inner" >
        <div class="dashboard-headline">
            <h3>View Buyers</h3>
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
                                $sql = $m->View("*","buyers", "","");


                                echo "<tr scope='col'>";
                                echo "<td scope='col'>id</td>";
                                echo "<td scope='col'>name</td>";
                                 echo "<td scope='col'>email</td>";
                                 echo "<td scope='col'>Balance</td>";
                                 echo "<td scope='col'>Password</td>";
                                 echo "<td scope='col'>Edit</td>";
                                echo "<td scope='col'>Delete</td>";

                                echo "</tr>";

                                 $rel = [
                                    'country.id' => 'freelancers.country_id',
                                    'category.id' => 'freelancers.category_id',
                                    
                                ];

                                while($result = $sql->fetch_object()){

                                    echo "<tr>";
                                    echo "<td>{$result->id}</td>";
                                    echo "<td>{$result->name}</td>";
                                    echo "<td>{$result->email}</td>";
                                    echo "<td>{$result->balance}</td>";
                                    echo "<td>{$result->password}</td>";
                                    echo "<td><a href='index.php?a=edit_buyers_reg&id={$result->id}'>Edit</a></td>";
                                    echo "<td scope='col'><a href='index.php?a=byers_delete&id={$result->id}'>delete</td>";

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





