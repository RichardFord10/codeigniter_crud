	

		<h3 class="text-center">Users</h3>
	<div id="scrolltable" class="container" >


	
		 <table class="table table-hover table-condensed text-center">
            <thead class="text-center">
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Email</th>
                <th class="text-center">Username</th>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
								<th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              
            <?php  foreach($users as $user) :?>
              
              <tr>
                 <td><?php echo $user->id;?></td>
                 <td><?php echo $user->email;?>
								 <td><?php echo $user->username;?>
                  <td><?php echo $user->first_name;?></td>
                  <td><?php echo $user->last_name;?></td>
								 <td>
                 	<div class="actions_link">
                            <a href="delete_user.php?id=<?php  echo $user->id;?>">Delete</a>
                            <a href="edit_user.php?id=<?php    echo $user->id;?>">Edit</a>
                            <a href="">View</a>
									 </div>
                   </td>
              </tr>
            <?php endforeach ?>
			 						
			 </tbody>
</div>
	

	