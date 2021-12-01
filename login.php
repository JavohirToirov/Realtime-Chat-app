<? 
session_start();
if (isset($_SESSION['unique_id'])) {//if user is logged in
    header("Location: users.php");
}
?>
<?
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Addres</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
        
        <script src="js/pass-show-hide.js"></script>
        <script src="js/login.js"></script>
    </div>
</body>

</html>