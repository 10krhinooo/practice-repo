<?php 
   
    require_once "php/call.php";
?>
<div class="header">
  <h1>Header</h1>
</div>
<div class="content_section row">
  <div class="content">
    <h1>Users List</h1>
    <table>
      <tr>
        <th>#</th>
        <th>Fullname</th>
        <th>Email Address</th>
        <th>Username</th>
        <th>Date Created</th>
        <th>Last Update</th>
        <th>Role</th>
        <th>Actions</th>
      </tr>
      <?php

$spot_users = "SELECT * FROM `credentials` LEFT JOIN `roles` USING (`roleId`) ORDER BY fullname ASC";
$users_res = $conn->query($spot_users); $sn=1; if ($users_res->num_rows > 0) {
      // output data of each row while($user_row = $users_res->fetch_assoc()) {
      ?>
      <tr>
        <td><?php print $sn; $sn++; ?>.</td>
        <td><?php print $user_row["fullname"]; ?></td>
        <td><?php print $user_row["email"]; ?></td>
        <td><?php print $user_row["username"]; ?></td>
        <td><?php print $user_row["datecreated"]; ?></td>
        <td><?php print $user_row["dateupdated"]; ?></td>
        <td><?php print $user_row["role"]; ?></td>
        <td>[ <a href="">Edit</a> ] [ <a href="">Del</a> ]</td>
      </tr>
      <?php
      }
 else {
  echo "0 results";
}

?>
    </table>
  </div>
  <div class="sidebar">
    <h1>Side Bar</h1>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
    <p>
      Lorem ipsum dolor sit amet, cu audire officiis eos, an eirmod voluptaria
      cum.
    </p>
  </div>
</div>
<?php include_once "templates/footer.php"; ?>
