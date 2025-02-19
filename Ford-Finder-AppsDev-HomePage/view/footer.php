<footer>
    <p class="copyright">
        &copy; <?php echo date("Y"); ?>, (Lucian Brande)
    </p>
<!--    <p class="welcome-message">
        <?php
        if (isset($_SESSION['user'])) {
            $users = $_SESSION['user'];
            
            echo "Welcome, " .htmlspecialchars($users->getFirstName()) . "!";
        } else {
            echo "Welcome, Guest!";
        }
        ?>
    </p>-->
</footer>

</body>
</html>