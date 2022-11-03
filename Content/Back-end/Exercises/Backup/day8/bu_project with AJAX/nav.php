<nav id="main-navbar">
    <ul>
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a href="./movies.php">Movies</a>
        </li>
        <li>
            <a href="./insert-movie.php">New movie</a>
        </li>
        <?php if (!isset($_SESSION['email'])) : ?>
            <li>
                <a href="./register.php">Register</a>
            </li>
            <li>
                <a href="./login.php">Login</a>
            </li>
        <?php else : ?>
            <li>
                <a href="./account.php">Account</a>
            </li>
            <li>
                <a href="./logout.php">Logout</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>