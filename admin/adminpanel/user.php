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
        <th scope="col">ROLE</th>
        <th scope="col">PHONE NO.</th>
        <th scope="col">modify</th>


        </tr>
    </thead>
    <tbody>



        <?php

        $qry = "SELECT * FROM `login`";
        $result = mysqli_query($connection, $qry);

        while ($user = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td scope="col"><?php echo $user['id'] ?></td>
                <td scope="col"><?php echo $user['username'] ?></td>

                <td scope="col"><?php echo $user['role'] ?></td>
                <td scope="col"><?php echo $user['phone'] ?></td>


            </tr>

        <?php
        }

        ?>


    </tbody>
</table>


<?php

include('../footer.php');
?>