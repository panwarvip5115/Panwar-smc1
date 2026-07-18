<?php include 'includes/header.php'; ?>

<div class="container mt-5" style="max-width:500px;">

<h2 class="text-warning text-center">Student Login</h2>

<form action="#" method="POST">

<div class="mb-3">
<label>Email</label>
<input type="email" class="form-control" name="email" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" class="form-control" name="password" required>
</div>

<button class="btn btn-warning w-100">
Login
</button>

<p class="text-center mt-3">
Don't have an account?
<a href="register.php">Register Here</a>
</p>

</form>

</div>

<?php include 'includes/footer.php'; ?>
