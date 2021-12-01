<?
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("Location: login.php");
}
?>
<? include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                    <img src="php/images/<? echo $row['img'];?>" alt="">
                    <div class="details">
                        <span><?echo $row['fname'] . " " . $row['lname'];?></span>
                        <p><? echo $row['status'];?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<? echo $row['unique_id']?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
            
            </div>
        </section>
    </div>
    
    
    
    
    <script src="js/users.js"></script>
</body>

</html>