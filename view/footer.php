<footer>
    <p class="copyright">
        &copy; <?php echo date("Y"); ?>, (Lucian Brande)
    </p>
<!--    <p class="welcome-message">
        <?php
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            
            echo "Welcome, " .htmlspecialchars($user->getFirstName()) . "!";
        } else {
            echo "Welcome, Guest!";
        }
        ?>
    </p>-->
</footer>

</body>
</html>