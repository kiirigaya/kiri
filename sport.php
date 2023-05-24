
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
           <h1>logo</h1>
        </div>
        <div class="navlinks">
            <ul>
            <li><form action="search.php" method="get" class="ff">
                    <input type="text" id="search" name="search">
                    <button>search</button>
                </form></li>
                <li><a href="index.html">home</a></li>
                
                <li><a href="#">about us</a></li>
                <li><a href="login.html">login</a></li>

            </ul>
        </div>
        <img src="images/hb11.jpg" class="hb" id="hb">
    </nav>
    <div class="header">
        <h1>SPORT ARTICLES </h1>
    </div>
    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'tanani');
            $sql = "SELECT * FROM article1";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
        ?>
    <div class="artcom">
        <div class="art">

         
             <?php echo "<img src='images/" . $row['image_article'] . "'>";?>
            <div class="artext">
            <h2><?php echo $row['title_article']; ?></h2>
            <p><?php echo $row['text_article']; ?></p>
            </div>
            <div class="cc">
                <img src="images/cm1.png" class="c" id="c">
            </div>
        </div>

        <div class="comment">
            
                <textarea name="comment" id="" cols="25" rows="2"></textarea>
                <button>comment</button>
            <div class="sc">


                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
                <div class="com">
                    <h3>username</h3>
                    <p>comment comment comment comment comment comment comment comment</p>
                </div>
            
            </div>
        </div>
    </div>
    
        <?php }?>

    <script>
    const commentButtons = document.querySelectorAll(".c");
    const commentbs = document.querySelectorAll(".cc");
    const commentSections = document.querySelectorAll(".comment");
    const articleSections = document.querySelectorAll(".art");
    

    commentButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            commentSections[index].classList.toggle('show');
            articleSections[index].classList.toggle('show');
            commentbs[index].classList.toggle('show');
        });
    });
    const menuHamburger = document.querySelector(".hb")
    const navLinks = document.querySelector(".navlinks")
    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })

    </script>

</body>
</html>


    
