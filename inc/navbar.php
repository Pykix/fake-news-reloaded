<div class="container-fluid">
    <header>
        <nav>
            <!--HAMBURGER MENU-->

            <div class="mainWrapper">
                <div class="menuIcons">
                    <div class="line1 no-active"></div>
                    <div class="line2 no-active"></div>
                    <div class="line3 no-active"></div>
                </div>
            </div>

            <!------------------>
            <ul class="menu ">
                <li>
                    <a href="/index.php"><i class="fas fa-home"></i> REMBOBINER</a>
                </li>
                <li>
                    <a href="/trucsentoc.php"><i class="fas fa-chart-bar"></i> TRUCS EN TROC</a>
                </li>
                <?php if (!$connected): ?>
                    <li>
                        <a href="/connexion.php"><i class="fas fa-cog"></i> ROUAGES</a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="/libs/logout.php"><i class="fas fa-cog"></i> AMNESIE</a>
                    </li
                <?php endif; ?>
            </ul>
        </nav>
        <div class="brand-name">
            <h1 class="title">Fake news II</h1>
            <p class="p-title">
                il revient et il est pas content ! <br>
                mythoné en php et mysql.
            </p>
        </div>
    </header>
</div>