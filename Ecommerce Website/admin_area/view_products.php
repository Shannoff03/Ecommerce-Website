<h3 class="text-center text-success">All Products</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th class="bg-info">Product ID</th>
            <th class="bg-info">Product Title</th>
            <th class="bg-info">Product Image</th>
            <th class="bg-info">Product Price</th>
            <th class="bg-info">Total Sold</th>
            <th class="bg-info">Status</th>
            <th class="bg-info">Edit</th>
            <th class="bg-info">Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $get_products = "select * from `products`";
            $result = mysqli_query($con, $get_products);
            $number = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $status = $row['status'];
                $number++;
                ?>

            <tr class='text-center'>
                <td class='bg-secondary text-light text-center'>
                    <?php echo $number; ?>
                </td>
                <td class='bg-secondary text-light text-center'>
                    <?php echo $product_title; ?>
                </td>
                <td class='bg-secondary text-light text-center'><img src='./product_images/<?php echo $product_image1; ?>'
                        class='product_img' /></td>
                <td class='bg-secondary text-light text-center'>
                    <?php echo $product_price; ?>/-
                </td>
                <td class='bg-secondary text-light text-center'>
                    <?php
                    $get_count = "select * from `orders_pending` where product_id=$product_id";
                    $result_count = mysqli_query($con, $get_count);
                    $rows_count = mysqli_num_rows($result_count);
                    echo $rows_count;
                    ?>
                </td>
                <td class='bg-secondary text-light text-center'>
                    <?php echo $status; ?>
                </td>
                <td class='bg-secondary'><a href='index.php?edit_products=<?php echo $product_id ?>'><i class='fa-solid 
                fa-pen-to-square text-light'></i></a></td>
                <td class='bg-secondary'><a href='index.php?delete_product=<?php echo $product_id ?>'><i class='fa-solid 
                fa-trash text-light'></i></a></td>
                </tr>

            <?php
            }
            ?>

    </tbody>
</table>