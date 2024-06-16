<?php
include('../database/connect.php');
include('../functions/common_function.php');
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mt-32">
    <?php
    $user_ip = getIPAddress();
    $get_user = "SELECT * from `user_table` where user_ip='$user_ip'";
    $result = mysqli_query($conn, $get_user);
    $row_data = mysqli_fetch_array($result);
    $user_id = $row_data['user_id'];
    ?>
    <h1 class="text-3xl text-center ">Payment Option</h1>
    <div class="grid justify-items-center grid-cols-2 gap-24 my-20 ">
        <div class="justify-self-end">
            <a target="_blank" href="https://www.bkash.com/en?utm_source=google&utm_medium=cpc&utm_campaign=sem&utm_id=brand&utm_content=adgroup-brand&gad_source=1&gclid=CjwKCAjwmrqzBhAoEiwAXVpgojNPMNyVMGnk3kffSwD2jTH2-J4_V21xfpnglFUf-72HoydWTHzA0RoCgMwQAvD_BwE"><img src="../images/bkash.png" alt=""></a>
        </div>
        <div class="justify-self-start self-center">
            <a class="text-2xl link" href="order.php?user_id=<?php echo $user_id ?>">Payment Offline</a>
        </div>
    </div>
    <div class="text-2xl text-center">
        <a href="../index.php">Back</a>
    </div>
</body>

</html>