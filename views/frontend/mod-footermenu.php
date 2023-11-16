<?php

use App\Models\Menu;

$mod_footermenu = Menu::where([['position', '=', 'footermenu'], ['status', '=', 1]])
    ->orderBy('sort_order', 'ASC')
    ->get();
?>
<h3 class="widgettilte">
    <strong>Liên hệ</strong>
</h3>
<ul class="footer-menu">
    <?php foreach ($mod_footermenu as $rowmenu) : ?>
        <li><a href="<?= $rowmenu->link; ?>"><?= $rowmenu->name; ?></a></li>
    <?php endforeach; ?>
</ul>

<h3 class="widgettilte mt-3">GOOGLE MAP</h3>
<div class="map my-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.7328286506626!2d106.71925818663215!3d10.898042964425247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d7699d12e8cf%3A0x46da2e7154db7e6a!2sTheZhin!5e0!3m2!1svi!2s!4v1699864452555!5m2!1svi!2s" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>