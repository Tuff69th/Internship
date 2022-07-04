<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <div>
        <?php
if(isset($_POST['create'])){
    echo 'Details Submitted.';
}
        ?>
<div class="container">
<h1> Regisration </h1><br>
<p> Fill this form out</p>
 <form action="registration.php" method="post">
<label for="Name"><b>Name of Client</b></label>
<input type="text" name="client" required><br>
<label for="Contact"><b>Contact Number</b></label>
<input type="text" name="contact" required><br>
<label for="Email"><b>Email</b></label>
<input type="text" name="email" required><br>
<label for="Invoice"><b>Invoice File</b></label>
<input type="text" name="file" required><br>
<input type="submit" name="create" value="Submit">
    </form>
    </br>
</body>
    </html>
