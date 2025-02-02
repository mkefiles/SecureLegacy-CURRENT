<sl-nav-desktop>
    <div class="logo">
        <img src="/assets/img--sl_logo.png" alt="SecureLegacy logo">
    </div>
    <div class="links">
        <ul>
            <?php foreach ($links as $link) { ?>
            <li class="sl-link"><a href="<?php echo $link[1]; ?>"><?php echo $link[0]; ?></a></li>
            <?php } ?>
        </ul>
    </div>    
</sl-nav-desktop>