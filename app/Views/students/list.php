<?php

$this->extend('layouts/main');
$this->section('body');


?>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<h1> Student List</h1>

<a href="/students/create" class="btn btn-primary"> Add Student</a>


<table class="table">
    <thead>
        <th scope="col">#</th>
        <th scope="col">Student Number</th>
        <th scope="col">Student Name</th>
        <th scope="col">Student Section</th>
        <th scope="col">Student Course</th>
        <th scope="col">Student GradeLevel</th>
        <th scope="col">Student Year</th>
        <th scope="col">Student Profile</th>



    </thead>

    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <th scope="row"><?= $student['id']; ?></th>
                <td><?= $student['student_id']; ?></td>
                <td><?= $student['student_name']; ?></td>
                <td><?= $student['student_section']; ?></td>
                <td><?= $student['student_course']; ?></td>
                <td><?= $student['student_gradelevel']; ?></td>
                <td><?= $student['student_year']; ?></td>
                <td><img src="/uploads/<?= $student['student_profile']; ?>" alt="" width="100"></td>

                <td>
                    <a href="/students/edit/<?= $student['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>


        <?php endforeach; ?>
    </tbody>
</table>






<?php $this->endSection(); ?>