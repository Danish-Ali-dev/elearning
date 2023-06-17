<?php
    $title = 'Admin Dashboard';
?>
<div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Courses</div>
            <div class="card-body">
                <h4 class="card-title">5</h4>
                <a href="" class="btn text-white">View</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Students</div>
            <div class="card-body">
                <h4 class="card-title">5</h4>
                <a href="" class="btn text-white">View</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Sold</div>
            <div class="card-body">
                <h4 class="card-title">5</h4>
                <a href="" class="btn text-white">View</a>
            </div>
        </div>
    </div>
</div>
<div class="mx-5 mt-5 text-canter">
    <!-- Table  -->
    <div class="bg-dark text-white text-center fw-bold p-2 fs-4">Course Ordered</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Cousrse Id</th>
                <th scope="col">Student Email</th>
                <th scope="col">Order Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">22</th>
                <td>100</td>
                <td>Danish</td>
                <td>22-4-2021</td>
                <td>2000</td>
                <td><button type="submit" name="delete" class="btn btn-secondary"><i class="fas fa-trash-alt"
                            value="delete"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>