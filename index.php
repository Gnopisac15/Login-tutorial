<?php include './include/server.php'?>
<?php include './include/header.php'?>


<div class="container w-25 mt-5 rounded">
<div class="card p-2 mb-2 bg-dark text-light border- border-success">
    <div class="card-header text-center ">PN Register</div>
    <form action="./include/server.php" method="post">
        <div class="card-body" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id= "username"class="form-control"autocomplete="on" >
            </div>
            <div class="form-group">
                <label for="emailmail</label>
                <input type="text" name="email" id= "email"class="form-control" autocomplete="on">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id= "password"class="form-control" autocomplete="off">
            </div>
            </div>
            <div class="card-footer">
                <button name= "register" class="btn btn-block btn-outline-success">Continue</button>
                <div class="p1 text-warning">
                <p class="p1 mt-3">Already have an account ?&nbsp;
                <a href="./pages/login.php">Log in</a></p>
                </div>
            </div>
    </form>      
    <div>
</div>

<?php include './include/footer.php'?>