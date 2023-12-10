<?php

$this->extend('layouts/main');
$this->section('body');


?>

<h1> Add Student</h1>
<form action="/students/store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="studentNum" class="form-label">Student Num</label>
        <input type="text" class="form-control" name="studentNum" value="<?= $studentNumber; ?>" readonly>
    </div>

    <div class="mb-3">
        <label for="studentName" class=" form-label">Student Name</label>
        <input type="text" class="form-control" name="studentName"></input>
    </div>

    <div class="mb-3">
        <label for="studentSection" class="form-label">Student Section</label>
        <input type="text" class="form-control" name="studentSection"></input>
    </div>

    <div class="mb-3">
        <label for="studentCourse" class="form-label">Student Course</label>
        <input type="text" class="form-control" name="studentCourse"></input>
    </div>

    <div class="mb-3">
        <label for="studentLevel" class="form-label">Student Gradelevel</label>
        <input type="text" class="form-control" name="studentLevel"></input>
    </div>

    <div class="mb-3">
        <label for="studentYear" class="form-label">Student Year</label>
        <input type="text" class="form-control" name="studentYear"></input>
    </div>

    <div class="mb-3">
        <label for="studentProfile" class="form-label">Student Profile</label>
        <input type="file" class="form-control" name="studentProfile"></input>
    </div>

    <button type="submit" class="btn btn-primary"> Submit </button>

</form>
<?php $this->endSection(); ?>