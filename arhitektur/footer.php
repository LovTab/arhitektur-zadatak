<?php
$native_path = get_template_directory_uri(); // Correct way to get theme URL
?>

<footer class="full flex relative">
    <div class="full flex relative container column-full-pad">
        <nav class="full footer-nav flex relative">
            <div class="container flex relative">
                <div class="flex relative flex-responsive">
                    <a href="#" class="flex relative animate">
                        <div class="full center-text">Terms of Use</div>
                    </a>
                    <a href="#" class="flex relative animate">
                        <div class="full center-text">Legal</div>
                    </a>
                    <a href="#" class="flex relative animate">
                        <div class="full center-text">Privacy Policy</div>
                    </a>
                    <a href="#" class="flex relative animate">
                        <div class="full center-text">Newsletter</div>
                    </a>
                    <a href="#" class="flex relative animate">
                        <div class="full center-text">Cookie Policy</div>
                    </a>
                </div>
                <div class="center relative text-logo">
                    <a class = "logo-link" href="https://www.linkedin.com" target = "_blank">    
                        <img src="<?php echo $native_path; ?>/assets/logos/linkedin-logo.svg" alt="Linkedin logo">
                    </a>
                    <a class = "logo-link" href="https://www.facebook.com" target = "_blank">
                        <img src="<?php echo $native_path; ?>/assets/logos/facebook-logo.svg" alt="Facebook logo">
                    </a>
                    <a class = "logo-link" href="https://www.instagram.com" target = "_blank">
                        <img src="<?php echo $native_path; ?>/assets/logos/insta-logo.svg" alt="Insta logo">
                    </a>
                </div>
            </div>
        </nav>
        <div class="full logo-line">
            <img src="<?php echo $native_path; ?>/assets/logos/logo.svg" alt="Arhitektura logo">
        </div>
        <p class="full">All rights reserved. Arhitektur, part of DAAily platforms AG</p>
        <p class="full">ISSN 0719-8884</p>
        <p class="full">All images are copyrighted by the photographer mentioned.</p>
    </div>
</footer>

<?php  wp_footer(); ?>
</body>
</html>