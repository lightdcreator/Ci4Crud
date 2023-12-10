<?php

$this->extend('layouts/main');
$this->section('body');


?>

<h1> Add Student</h1>
<form action="/students/update/<?= $student['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="studentNum" class="form-label">Student Num</label>
        <input type="text" class="form-control" name="studentNum" value="<?= $student['student_id']; ?>" readonly>
    </div>

    <div class="mb-3">
        <label for="studentName" class=" form-label">Student Name</label>
        <input type="text" class="form-control" name="studentName" value="<?= $student['student_name']; ?>"></input>
    </div>

    <div class="mb-3">
        <label for="studentSection" class="form-label">Student Section</label>
        <input type="text" class="form-control" name="studentSection" value="<?= $student['student_section']; ?>"></input>
    </div>

    <div class="mb-3">
        <label for="studentCourse" class="form-label">Student Course</label>
        <input type="text" class="form-control" name="studentCourse" value="<?= $student['student_course']; ?>"></input>
    </div>

    <div class="mb-3">
        <label for="studentLevel" class="form-label">Student Gradelevel</label>
        <input type="text" class="form-control" name="studentLevel" value="<?= $student['student_gradelevel']; ?>"></input>
    </div>

    <div class="mb-3">
        <label for="studentYear" class="form-label">Student Year</label>
        <input type="text" class="form-control" name="studentYear" value="<?= $student['student_year']; ?>"></input>
    </div>

    <div class="mb-3">
        <label for="studentProfile" class="form-label">Student Profile</label>
        <input type="file" class="form-control" name="studentProfile" value="<?= $student['student_profile']; ?>"></input>
    </div>

    <button type="submit" class="btn btn-primary"> Submit </button>

</form>
<?php $this->endSection(); ?>