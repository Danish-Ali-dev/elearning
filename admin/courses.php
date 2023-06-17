<?php
    $title = 'Courses';
    ?>
<div class="bg-dark text-white text-center fw-bold p-2 fs-4">List Of Courses</div>
<?php
    require_once('_connection.php');
    $sql = "SELECT * FROM `course`";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Sno</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sno = 1;
            while($row = $result->fetch_assoc())
            {
            ?>
        <tr>
            <th scope="row"><?= $sno ?></th>
            <td>$row['course_name'];</td>
            <td>Danish</td>
            <td>
                <button type="submit" name="edit" class="btn btn-primary"><i class="fas fa-pencil-alt"
                        value="edit"></i></button>
                <button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"
                        value="delete"></i></button>
            </td>
        </tr>
        <?php
            $sno++;
            }
        ?>
    </tbody>
</table>
<?php
    }
    else{
        echo '0 Result';
    }
?>
<div>
    <a href="index.php?add_course" class="btn btn-danger box">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>