<?php
include "admin_submenu.php";
?>
<div class="dashboard-content-container" >
    <div class="dashboard-content-inner" >
        <div class="dashboard-headline">
            <h3>View Freelancers</h3>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="dashboard-box margin-top-0">
                    <div class="headline">
                        <table class="table table-hover">
                            <?php
                               $m = new Models();

                                echo "<tr scope='col'>";
                                echo "<td scope='col'>id</td>";
                                echo "<td scope='col'>First name</td>";
                                echo "<td scope='col'>Last name</td>";
                                echo "<td scope='col'>email</td>";
                                echo "<td scope='col'>gender</td>";
                                echo "<td scope='col'>country</td>";
                                echo "<td scope='col'>categories</td>";
                                echo "<td scope='col'>Skills</td>";
                                echo "<td scope='col'>Edit</td>";
                                echo "<td scope='col'>Delete</td>";
                                echo "</tr>";


                                $rel = [
                                    'country.id' => 'freelancers.country_id',
                                    'category.id' => 'freelancers.category_id',
                                    'freelancers.id' => 'freelancer_skills.freelancer_id',
                                    'skills.id' => 'freelancer_skills.skill_id',


                                ];
                                $select = "freelancers.*, country.name coname, category.name caname, skills.name sname";

                                $table = 'freelancers, country, category, skills, freelancer_skills';

                                if ($sql = $m->View($select, $table, "", "", $rel)) {

                                    while($result = $sql->fetch_object()){

                                        echo "<tr>";
                                        echo "<td>{$result->id}</td>";
                                        echo "<td>{$result->first_name}</td>";
                                        echo "<td>{$result->last_name}</td>";
                                        echo "<td>{$result->email}</td>";
                                        echo "<td>{$result->gender}</td>";
                                        echo "<td>{$result->coname}</td>";
                                        echo "<td>{$result->caname}</td>";
                                        echo "<td>{$result->sname}</td>";
                                        echo "<td><a href='index.php?a=edit_freeleancer&id={$result->id}'>Edit</a></td>";
                                        echo "<td scope='col'><a href='index.php?a=delete_freeleancer&id={$result->id}'>delete</td>";

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
