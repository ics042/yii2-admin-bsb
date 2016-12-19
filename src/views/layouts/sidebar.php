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


                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold <?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>">
                                        <a class="collapsible-header waves-effect waves-cyan <?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>"><?= $menu['label']?></a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <?php foreach($menu['items'] as $subMenu):?>
                                                    <li class="<?= (isset($subMenu['active']) && $subMenu['active']) ? 'active' : ''  ?>">
                                                        <a href="<?= $subMenu['url'][0]?>"><?=$subMenu['label']?></a>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </li>
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












<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <?php if (method_exists($this->context->module, 'getMenuItems')): ?>
            <?php foreach ($this->context->module->getMenuItems($this->context) as $menu): ?>
                <?php if (isset($menu['items'])): ?>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold <?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>">
                                <a class="collapsible-header waves-effect waves-cyan <?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>"><?= $menu['label']?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <?php foreach($menu['items'] as $subMenu):?>
                                            <li class="<?= (isset($subMenu['active']) && $subMenu['active']) ? 'active' : ''  ?>">
                                                <a href="<?= $subMenu['url'][0]?>"><?=$subMenu['label']?></a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="bold <?= isset($menu['active']) && $menu['active'] ? 'active' : ''  ?>">
                        <a href="<?= $menu['url'][0]?>" class="uncollapsible-header waves-effect waves-cyan"><?= $menu['label']?></a>
                    </li>
                <?php endif ?>
            <?php endforeach; ?>
        <?php endif ?>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="material-icons">menu</i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->

<?php
$js = <<<JS
$(function(){
    //Main Left Sidebar Menu
    $('.sidebar-collapse').sideNav({
      edge: 'left', // Choose the horizontal origin    
    });
});
        
JS;
$this->registerJs($js);