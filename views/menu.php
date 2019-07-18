<div id="left" class="container">
    <div class="content" id="home">
        <div class="header"><?
            $home_id = 1;
            $home = $oo->get($home_id);
            echo $home['body']; 
        ?></div>
        <div class="content-programming"><?
            $root_id = 0;
            $menu = $oo->children($root_id);
            foreach ($menu as $m) { 
                if (substr($m["name1"],0,1) != ".") {
                    ?><div class="content-program"><?
                        if ($m['url'] == $item['url']) {
                            require_once("views/menu-detail.php");
                        } else {
                            ?><a href="<?= $m['url'] ?>">
                                <div class="content-program-title"><?= $m['name1']; ?></div>
                            </a><?
                        }
                    ?></div><?
                }
            }
	    require_once("views/menu-ad.php");
        ?></div>
    </div>
</div>
