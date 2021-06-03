<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background: #f2f2f2;
    }

    nav {
        background: #171c24;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        height: 70px;
        padding: 0 100px;
    }

    nav .logo {
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        letter-spacing: -1px;
    }

    nav .logo a {
        color: #5f9ea0;
        text-decoration: none;
    }

    nav .nav-items {
        display: flex;
        flex: 1;
        padding: 0 0 0 40px;
    }

    nav .nav-items li {
        list-style: none;
        padding: 0 10px;
    }

    nav .nav-items li a {
        color: #5f9ea0;
        font-size: 20px;
        font-weight: 500;
        text-decoration: none;
    }

    nav .nav-items li a:hover {
        color: whitesmoke;
    }

    nav form {
        display: flex;
        height: 40px;
        padding: 2px;
        background: #1e232b;
        min-width: 18% !important;
        border-radius: 2px;
        border: 1px solid rgba(155, 155, 155, 0.2);
    }

    nav form .search-data {
        width: 100%;
        height: 100%;
        padding: 0 10px;
        margin: 0 10px;
        color: #fff;
        font-size: 17px;
        border: none;
        font-weight: 500;
        background: none;
    }

    nav form button {
        padding: 0 15px;
        color: #fff;
        font-size: 17px;
        background: #5f9ea0;
        border: none;
        border-radius: 2px;
        cursor: pointer;
    }

    nav form button:hover {
        background: black;
    }

    nav .menu-icon,
    nav .cancel-icon,
    nav .search-icon {
        width: 40px;
        text-align: center;
        margin: 0 50px;
        font-size: 18px;
        color: #fff;
        cursor: pointer;
        display: none;
    }

    nav .menu-icon span,
    nav .cancel-icon,
    nav .search-icon {
        display: none;
    }

    @media (max-width: 1245px) {
        nav {
            padding: 0 50px;
        }
    }

    @media (max-width: 1140px) {
        nav {
            padding: 0px;
        }

        nav .logo {
            flex: 2;
            text-align: center;
        }

        nav .nav-items {
            position: fixed;
            z-index: 99;
            top: 70px;
            width: 100%;
            left: -100%;
            height: 100%;
            padding: 10px 50px 0 50px;
            text-align: center;
            background: #14181f;
            display: inline-block;
            transition: left 0.3s ease;
        }

        nav .nav-items.active {
            left: 0px;
        }

        nav .nav-items li {
            line-height: 40px;
            margin: 30px 0;
        }

        nav .nav-items li a {
            font-size: 20px;
        }

        nav form {
            position: absolute;
            top: 80px;
            right: 50px;
            opacity: 0;
            pointer-events: none;
            transition: top 0.3s ease, opacity 0.1s ease;
        }

        nav form.active {
            top: 95px;
            opacity: 1;
            pointer-events: auto;
        }

        nav form:before {
            position: absolute;
            content: "";
            top: -13px;
            right: 0px;
            width: 0;
            height: 0;
            z-index: -1;
            border: 10px solid transparent;
            border-bottom-color: #1e232b;
            margin: -20px 0 0;
        }

        nav form:after {
            position: absolute;
            content: '';
            height: 60px;
            padding: 2px;
            background: #1e232b;
            border-radius: 2px;
            min-width: calc(100% + 20px);
            z-index: -2;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        nav .menu-icon {
            display: block;
        }

        nav .search-icon,
        nav .menu-icon span {
            display: block;
        }

        nav .menu-icon span.hide,
        nav .search-icon.hide {
            display: none;
        }

        nav .cancel-icon.show {
            display: block;
        }
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        text-align: center;
        transform: translate(-50%, -50%);
    }

    .content header {
        font-size: 30px;
        font-weight: 700;
    }

    .content .text {
        font-size: 30px;
        font-weight: 700;
    }

    .space {
        margin: 10px 0;
    }

    nav .logo.space {
        color: whitesmoke;
        padding: 0 5px 0 0;
    }

    @media (max-width: 980px) {

        nav .menu-icon,
        nav .cancel-icon,
        nav .search-icon {
            margin: 0 20px;
        }

        nav form {
            right: 30px;
        }
    }

    @media (max-width: 350px) {

        nav .menu-icon,
        nav .cancel-icon,
        nav .search-icon {
            margin: 0 10px;
            font-size: 16px;
        }
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .content header {
        font-size: 30px;
        font-weight: 700;
    }

    .content .text {
        font-size: 30px;
        font-weight: 700;
    }

    .content .space {
        margin: 10px 0;
    }

    h5 {
        text-align: right;
        margin-right: 25px;
        font-size: 17px;
    }

    a {
        text-decoration: none;
    }

    .count {
        color: #ff3d00;
        font-weight: bold;
        font-size: large;
    }

    li a,
    .dropbtn {
        display: inline-block;
        text-align: center;
        padding: 2px 4px;
        text-decoration: none;
    }

    /* li a:hover, .dropdown:hover .dropbtn {
    background-color: yellow;
    } */

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: black;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        padding-right: 10px;
    }

    .dropdown-content a {
        color: black;
        padding: 10px 14px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>

    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="logo"><a href="homepage.php">HORIZONE</a></div>
        <div class="nav-items">
            <li class="dropdown"><a href="#" class="dropbtn">SHOP</a>
                <div class="dropdown-content">
                    <?php 
                        require_once "connect.php";
                        $sql = "select * from category";
                        $rs = $con->query($sql);
                        foreach($rs as $row){
                            echo '<a href="category.php?id='.$row['cate_id'].'">'.$row['cate_name'].'</a>';
                        }
                    ?>
                </div>
            </li>
            <li><a href="map.php">MAP</a></li>
        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
        <form method="POST" action="search.php">
            <input type="search" class="search-data" name="search-data" placeholder="Finding your product" required>
            <button type="submit" class="fas fa-search" name="submit"></button>
        </form>
        <!-- <a href="view_cart.php"><img src="img/Icongiohang.png" width="40px"></a> -->
        <a href="view_cart.php"><i class="fas fa-shopping-bag"
                style='font-size: 40px; color: #5f9ea0; margin: 5px 0 5px 8px;'></i>
            <span class="count">
                <?php 
            if(isset($_SESSION['add_cart'])){
            echo count($_SESSION['add_cart']);
            }
            else {
                echo "0";
            }
            ?></span>
        </a>
        <?php 
            if(!isset($_SESSION["account_name"])){
                echo'
                <a href="login.php"><i class="fas fa-user"  style= "font-size: 40px; color: #5f9ea0; margin: 5px 0 5px 8px;"></i></a>
                ';
            }
            else{
                echo'
                <a href="profileUser.php"><i class="fas fa-user" style= "font-size: 40px; color: #5f9ea0; margin: 5px 0 5px 8px;"></i></a>
                ';
            }
        ?>
    </nav>
    <?php 
    if(!isset($_SESSION["account_name"])){
        echo " ";
    }
    else{?>
        <h5><?php echo 'HI '.$_SESSION["account_name"].''; ?></h5>
    <?php 
    }
    ?>

    <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = () => {
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = () => {
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = () => {
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }
    </script>

</body>

</html>