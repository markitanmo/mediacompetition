<meta charset="UTF-8">
<div class="overlay" id="overlay">
    <div class="popup">
        <center>
            <p id="bla">АВТОРИЗАЦІЯ</p>
        </center>
        <br>
        <label class="labbox" id="labbox1">Логін:</label>
        <input type="text" class="password" id="login" name="log">
        <br>
        <br>
        <label class="labbox" id="labbox2">Пароль:</label>
        <input type="password" class="password" id="password" name="pass">
        <br>
        <br>
        <center>
            <br>
            <button class="open" title="Увійти" onclick="avtorexit()" name="open">Увійти</button>
            <button class="open" title="Зареєструватися" onclick="regform(); return false;">Зареєструватися</button>
        </center>
        <button class="close" title="Закрыть" onclick="document.getElementById('overlay').style.display='none'; return false;"></button>
    </div>
</div>
<div class="overlay" id="overlay1">
    <div class="popup">
        <center>
            <p id="bla">РЕЄСТРАЦІЯ</p>
            <br>
        </center>
        <label class="labbox" id="labbox4">Ім'я:</label>
        <input type="text" class="password" id="name" name="name">
        <br>
        <br>
        <label class="labbox" id="labbox1">Логін:</label>
        <input type="text" class="password" id="login" name="login">
        <br>
        <br>
        <label class="labbox" id="labbox2">Пароль:</label>
        <input type="password" class="password" id="password" name="password">
        <br>
        <br>
        <label class="labbox" id="labbox3">Повторний пароль:</label>
        <input type="password" class="password" id="password" name="resetpass">
        <br>
        <br>

        <br>
        <center>
            <button class="open" title="Назад" onclick="avtoform(); return false;">Назад</button>
            <button class="open" title="Зареєструватися" name="reg">Зареєструватися</button>

        </center>
        <button class="close" title="Закрыть" onclick="document.getElementById('overlay1').style.display='none'; return false;"></button>
    </div>
</div>
<header class="main_header">
    <div class="log_in">
        <button onclick="openavtor();">Log in</button>
    </div>
    <div class="logo">
        <img src="\images\media_header.png" class="img-logo">
        <h1>MediaCompetition</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="photo.php">Photo</a></li>
            <li><a href="audio.php">Music</a></li>
        </ul>
    </div>
</header>
