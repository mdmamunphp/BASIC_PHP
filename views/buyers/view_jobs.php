<?php
include "buyers_submenu.php";
?>
<div class="dashboard-content-container" >
	<div class="dashboard-content-inner" >
		<div class="dashboard-headline">
			<h3>View Jobs</h3>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="dashboard-box margin-top-0">
					<div class="headline">
						<table class="table table-hover">
							<tr>
								<th>id</th>
								<th>title</th>
								<!-- <th>Job Type</th> -->
								<th>Date</th>
								<th>Category Id</th>
								<th>Company name</th>								
								<!-- <th>Skill</th> -->								
								<th>Edit</th>
								<!-- <th>Delete</th> -->
							</tr>
							<?php
							$m = new Models();
							
							$rel = [
								'category.id' => 'jobs.category_id',
								'buyers.id' => 'jobs.buyer_id'
								// 'job_type.id' => 'jobs.job_type_id'	
								// 'skills.id' => 'jobs_skills.skill_id',								
							];
							$select = "jobs.*, category.name cname, buyers.name bname,buyers.id";
							$table = 'jobs, category, buyers';
							
							if($sql = $m->View($select, $table, "","", $rel)){
								while($result = $sql->fetch_object()){
									echo "<tr>";
									echo "<td>{$result->id}</td>";
									echo "<td>{$result->title}</td>";
									// echo "<td>{$result->jname}</td>";
									echo "<td>{$result->date}</td>";
									echo "<td>{$result->cname}</td>";
									echo "<td>{$result->bname}</td>";
									
									// echo "<td>{$result->sname}</td>";
									echo "<td><a href='index.php?buy=edit_jobs_reg&id={$result->id}'>Edit</a></td>";
									// echo "<td><a href='index.php?a=delete_jobs&id={$result->id}'>Delete</a></td>";
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





