<?php
    // Nếu Menu có Menu con thì thêm class 'has-child'
    $itemClass = !empty($menuItem['childs']) ? 'has-child' : '';
    $saleClass = !empty($menuItem['sale']) ? 'price-sale' : '';
?>

 <li class="<?= $itemClass ?>">
    <a href="<?= $menuItem['url'] ?? "#" ?>">
    <?= $menuItem['cat_name'] ?></a>

    <!-- Nếu Menu có Sub Menu thì in danh sách menu con -->
    <?php if (!empty($menuItem['childs'])) : ?>
        <ul class="sub-menu">
            <?php foreach ($menuItem['childs'] as $subMenu) : ?>
                <?php
                    $menuItem = $subMenu;

                    // Đệ quy
                    include 'menu-item.php';
                ?>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</li>
