<?php
/**
 * Component Helper Functions
 * Makes it easy to include navbar and footer components
 */

function includeNavbar() {
    include __DIR__ . '/navbar.php';
}

function includeFooter() {
    include __DIR__ . '/footer.php';
}

function getComponentPath($componentName) {
    return __DIR__ . '/' . $componentName . '.php';
}

// You can also use direct includes:
// include 'components/navbar.php';
// include 'components/footer.php';
?>