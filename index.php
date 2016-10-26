<html>
<head>
    <meta charset="UTF-8">
    <title>MediaCompetition</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">
    <link rel="shortcut icon" href="images/unnamed.png" type="image/x-icon">
</head>
<body>
<div class="wrapper">
    <?php
    include ("header.php");
    ?>
    <div class="content">
        <div class="resize">
            <div class="first">
                <div class="name_block">
                    <h2>Конкурс фото</h2>
                </div>
                <div class="inform">
                    <p class="date">Конкурс діє з 11.10.16 по 31.10.16</p>
                    <img src="/images/1.jpg">
                    <img src="/images/2.jpeg">
                    <a href="photo.php" class="more">Більше...</a>
                </div>
            </div>
            <div class="second">
                <div class="name_block">
                    <h2>Конкурс відео</h2>
                </div>
                <div class="inform_video">
                    <p class="date">Конкурс діє з 11.10.16 по 31.10.16</p>
                    <video width="300" height="250" controls="controls" poster="images/video-phpto.png">
                        <source src="video/video1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        Тег video не поддерживается вашим браузером.
                        <a href="video/video1.mp4">Скачайте видео</a>.
                    </video>
                    <video width="300" height="250" controls="controls" poster="images/video-phpto.png">
                        <source src="video/video1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        Тег video не поддерживается вашим браузером.
                        <a href="video/video1.mp4">Скачайте видео</a>.
                    </video>
                    <a href="video.php" class="more">Більше...</a>
                </div>
            </div>
            <div class="third">
                <div class="name_block">
                    <h2>Конкурс аудіо</h2>
                </div>
                <div class="inform_audio">
                    <p class="date">Конкурс діє з 11.10.16 по 31.10.16</p>
                    <center><b class="mus_p">Adele-Rolling in the deep</b></center>
                    <audio controls>
                        <source src="audio/adele-rolling_in_the_deep.mp3" type="audio/mpeg">
                        Тег audio не поддерживается вашим браузером.
                        <a href="audio/adele-rolling_in_the_deep.mp3">Скачайте музыку</a>.
                    </audio>
                    <center><b class="mus_p">Adele-Rolling in the deep</b></center>
                    <audio controls>
                        <source src="audio/Afric_Simone_Hafanana.mp3" type="audio/mpeg">
                        Тег audio не поддерживается вашим браузером.
                        <a href="audio/Afric_Simone_Hafanana.mp3">Скачайте музыку</a>.
                    </audio>
                    <a href="audio.php" class="more">Більше...</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include ("footer.php");
    ?>
</div>
</body>
</html>