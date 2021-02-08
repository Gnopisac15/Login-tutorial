<?php include './../include/header.php'?>
<?php include './../include/server.php'?>

<div class="container w-25 mt-5 rounded ">
<div class="card p-2 mb-2 bg-dark text-light border- border-success">
    <div class="card-header text-center">PN Register</div>
    <form action="./../include/server.php" method="post">
        <div class="card-body" >
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id= "email"class="form-control" autocomplete="on">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id= "password"class="form-control" autocomplete="off">
            </div>
            </div>
            <div class="card-footer">
                <button name= "login" class="btn btn-block btn-outline-success">Login</button>
                <p class="p1 mt-3 text-warning">Doesn't have an account?&nbsp;&nbsp;<a    href="./../index.php">Register</a></p>
            </div>
    </form>      
    <div>
</div>

<?php include './../include/footer.php'?>