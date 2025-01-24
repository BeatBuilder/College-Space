<table class="table table-bordered">
			<thead class="alert-warning">
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="alert-success">
				<?php
					require 'connection.php';
					$row = $conn->query("SELECT * FROM `file1`") or die(mysqli_error());
					while($fetch = $row->fetch_array()){
				?>
					<tr>
						<?php 
							$name = explode('/', $fetch['file']);
						?>
						<td><?php echo $fetch['name']?></td>
						<td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>