    <footer>
        <div class="container">
            <div class="footer-content">
                <p>© <?php echo date('Y'); ?> Mon site Web</p>
                <ul class="footer-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

<style>
    footer {
        background-color: #f2f2f2;
        padding: 20px;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-links li {
        display: inline-block;
        margin-right: 10px;
    }

    .footer-links li a {
        color: #333;
        text-decoration: none;
    }
</style>