<?php
include('../header.php');
include('../../cont.php');

?>



<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>

            <th scope="col">Total</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>



        <?php

        $qry = "SELECT * FROM `orders`";
        $result = mysqli_query($connection, $qry);

        while ($order = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td scope="col"><?php echo $order['id'] ?></td>
                <td scope="col"><?php echo $order['username'] ?></td>

                <td scope="col"><?php echo $order['total'] ?></td>
                <td scope="col">
                <a href="delete_order.php?id=<?php echo $order['id']  ?>">Delete</a>
                <a href="view_order.php?id=<?php echo $order['id']  ?>">View</a>
                </td>
            </tr>

        <?php
        }

        ?>


    </tbody>
</table>


<?php

include('../footer.php');
?>