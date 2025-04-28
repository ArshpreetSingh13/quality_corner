<?php
session_start();

include("admin_heading.php")
    ?>
<table class="table table-striped">
    <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Massege</th>
    </tr>
    <?php
    $count = 0;
    include("config.php");
    $query = "SELECT * FROM `contectus` ";
    $res = mysqli_query($db, $query);
    while ($data = mysqli_fetch_assoc($res)) {
        $count += 1;
        ?>
        <tr>
            <th><?php echo $count ?></th>
            <th><?php echo $data['name'] ?></th>
            <th><?php echo $data['email'] ?></th>
            <th>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    See Massege
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Massege From user</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo $data['text'] ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </th>

        </tr>
        <?php
    }
    ?>
</table>
<?php
include("footer.php")
    ?>