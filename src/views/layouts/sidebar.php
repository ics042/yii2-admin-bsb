<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <?php if (method_exists($this->context->module, 'getMenuItems')): ?>
                    <?php foreach ($this->context->module->getMenuItems($this->context) as $menu): ?>
                        <?php if (isset($menu['items'])): ?>
                            <li class="<?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>">
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <?= $menu['label']?>
                                </a>
                                <ul class="ml-menu">
                                    <?php foreach($menu['items'] as $subMenu):?>
                                        <li class="<?= (isset($subMenu['active']) && $subMenu['active']) ? 'active' : ''  ?>">
                                            <a href="<?= $subMenu['url'][0]?>"><?=$subMenu['label']?></a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="<?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>">
                                <a href="<?= $menu['url'][0]?>"><?= $menu['label']?></a>
                            </li>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endif ?>  
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; <?= date('Y')?> <a href="javascript:void(0);">Tsun Yii2</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>