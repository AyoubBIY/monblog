<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE) {
    echo "Bonjour, " . $_SESSION['username'] . "Bienvenue sur mon blog.";
    echo ' Tu veux <a href="index.php?action=logout">Se déconnecter?</a>';
} else {
    echo 'Bienvenue sur mon blog. Tu veux<a href="login.php">
            <button class="login-btn">Se connecter</button>
        </a>?';
}
