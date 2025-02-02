<sl-nav-mobile>
    <div class="logo">
        <img src="/assets/img--sl_logo.png" alt="SecureLegacy logo">
    </div>
    <div class="links" id="menu-button">
        <img src="/assets/img--icon_menu.png" alt="Menu icon">
    </div>
</sl-nav-mobile>

<sl-nav-dropdown id="mobile-dropdown">
    <ul>
        <?php foreach ($links as $link) { ?>
        <li class="sl-link"><a href="<?php echo $link[1]; ?>"><?php echo $link[0]; ?></a></li>
        <?php } ?>
    </ul>
</sl-nav-dropdown>