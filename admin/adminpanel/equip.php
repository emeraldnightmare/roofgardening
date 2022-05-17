<?php
include('../header.php');
include('../../cont.php');

?>


<style>

img {
    width: 60px;
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

        $qry = "SELECT * FROM `equip`";
        $result = mysqli_query($connection, $qry);

        while ($equip = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td scope="col"><?php echo $equip['id'] ?></td>
                <td scope="col"><?php echo $equip['name'] ?></td>

                <td scope="col"><?php echo $equip['price'] ?></td>
                <td scope="col"><img src="<?php echo $equip['img_url'] ?>"></td>
                <td scope="col">
                <a href="delete_equips.php?id=<?php echo $equip['id']  ?>">Delete</a>
                <a href="modify_equips.php?id=<?php echo $equip['id']  ?>">Modify</a>
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