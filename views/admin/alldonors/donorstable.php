<?php 
require_once("views/authentication/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center text-2xl py-3">Registered Donors</h1>
    <div>
    <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Bgroup</th>
        <th>Address</th>
        <th>NID</th>
        <th>Gender</th>
        <th>Donation Date</th>
        <th>Validator Name</th>
        <th>Validator Designation</th>
        <th>Status</th>
      </tr>
    </thead>
    <?php 
        $result = mysqli_query($conn,"SELECT * FROM users WHERE NOT username='ADMIN'");
        while($row= mysqli_fetch_assoc($result)) {?>
      <tr>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="<?php echo $row['url'];?>" alt="donor-photo" />
              </div>
            </div>
            <div>
              <div class="font-bold"><?php echo $row['username'];?></div>
              <div class="text-sm opacity-50"><?php echo $row['district'];?></div>
            </div>
          </div>
        </td>
        <td><?php echo $row['number'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['bgroup'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['nid'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['ddate'];?></td>
        <td><?php echo $row['validator_name'];?></td>
        <td><?php echo $row['validator_designation'];?></td>
        <th>
        <?php 
        if($row['status']) {?>
            <p>verified</p>
            <?php }else{?>
          <button onclick="verifyUser('<?php echo $row['email'];?>')" class="btn btn-xs">Validate</button>
          <?php }?>
        </th>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
    </div>
</body>
</html>