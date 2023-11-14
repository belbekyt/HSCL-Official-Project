<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Speedway Challenge League</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./css/index.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <?php require_once("./modules/header.php"); ?>

    <section class="news-section">
        <h2>Nowości w świecie HSCL</h2>
        <div class="news-container">
            <article class="news">
                <img src="photos/header-background.jpg">
                <h3>Artykuł testowy</h3>
                <h5>27.07.2023</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta provident voluptate optio eum! Odio, reprehenderit vel ratione recusandae sed quod commodi voluptatum? Eveniet deleniti in nihil nesciunt ab dolores mollitia.</p>
                <button>Czytaj więcej</button>
            </article>
            <article class="news">
                <img src="photos/header-background.jpg">
                <h3>Artykuł testowy</h3>
                <h5>27.07.2023</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta provident voluptate optio eum! Odio, reprehenderit vel ratione recusandae sed quod commodi voluptatum? Eveniet deleniti in nihil nesciunt ab dolores mollitia.</p>
                <button>Czytaj więcej</button>
            </article>
            <article class="news">
                <img src="photos/header-background.jpg">
                <h3>Artykuł testowy</h3>
                <h5>27.07.2023</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta provident voluptate optio eum! Odio, reprehenderit vel ratione recusandae sed quod commodi voluptatum? Eveniet deleniti in nihil nesciunt ab dolores mollitia.</p>
                <button>Czytaj więcej</button>
            </article>
        </div>
    </section>

    <section id="about-section">
        <div class="left-about">
            <p>O NAS</p>
            <h2>Czym jest liga HSCL?</h2>    
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nobis itaque aliquam odit eum ducimus aspernatur alias pariatur explicabo nemo suscipit dolorum libero necessitatibus autem perferendis aliquid, eius, commodi ex! ducimus aspernatur alias pariatur explicabo nemo suscipit dolorum libero necessitatibus autem perferendis aliquid, eius, commodi ex!</p>
            <p style="margin-top:15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nobis itaque aliquam odit eum ducimus aspernatur alias pariatur explicabo nemo suscipit dolorum libero necessitatibus autem perferendis aliquid, eius, commodi ex! </p>
        </div>
        <div class="right-about">
            <img src="./photos/about.jpg" alt="">
        </div>
    </section>

    <?php require_once("./modules/footer.php"); ?>
</body>
</html>