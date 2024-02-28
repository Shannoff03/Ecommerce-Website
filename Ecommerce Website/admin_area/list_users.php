<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead>
        <?php
        $get_users = "select * from `user_table` ";
        $result = mysqli_query($con, $get_users);
        $row_count = mysqli_num_rows($result);

        if ($row_count == 0) {
            echo "<h2 class='text-danger text-center mt-5'>No users recieved Yet</h2>";
        } else {
            echo "<tr>
            <th class='bg-info'>Sl No.</th>
            <th class='bg-info'>Username</th>
            <th class='bg-info'>User Email</th>
            <th class='bg-info'>User Image</th>
            <th class='bg-info'>User Address</th>
            <th class='bg-info'>User Mobile</th>
            <th class='bg-info'>Delete</th>
            </tr>
    </thead>
    <tbody>";
            $number = 0;
            while ($row_data = mysqli_fetch_assoc($result)) {
                $user_id = $row_data['user_id'];
                $username = $row_data['username'];
                $user_email = $row_data['user_email'];
                $user_image = $row_data['user_image'];
                $user_address = $row_data['user_address'];
                $user_mobile = $row_data['user_mobile'];
                $number++;
                echo " <tr class='text-center'>
            <td class='bg-secondary text-light'>$number</td>
            <td class='bg-secondary text-light'>$username</td>
            <td class='bg-secondary text-light'>$user_email</td>
            <td class='bg-secondary text-light'><img src='../users_area/user_images/$user_image' class='product_img' alt=$username/> </td>
            <td class='bg-secondary text-light'>$user_address</td>
            <td class='bg-secondary text-light'>$user_mobile</td>
            <td class='bg-secondary text-light'><a href=''class='text-light'>
            <i class='fa-solid fa-trash text-light'></i></a></td>
        </tr>";
            }
        }


        ?>

        </tbody>
</table>