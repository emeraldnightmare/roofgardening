<?php
include('../header.php');
include('../../cont.php');

?>


<style>

img {
    width: 40px;
}
</style>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>

        <th scope="col">Prize</th>
        <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>



        <?php

        $qry = "SELECT * FROM `plants`";
        $result = mysqli_query($connection, $qry);

        while ($plant = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td scope="col"><?php echo $plant['id'] ?></td>
                <td scope="col"><?php echo $plant['name'] ?></td>

                <td scope="col"><?php echo $plant['price'] ?></td>
                <td scope="col"><img src="<?php echo $plant['img_url'] ?>"></td>
                <td scope="col">
                <a href="delete_plants.php?id=<?php echo $plant['id']  ?>">Delete</a>
                <a href="modify_plants.php?id=<?php echo $plant['id']  ?>">Modify</a>
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