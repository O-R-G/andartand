<div id="left" class="container">
    <div class="content" id="home">
        <div id="header"><?
            $home_id = 1;
            $home = $oo->get($home_id);
            echo $home['deck'] . '<br/>'; 
            echo $home['body']; 
        ?></div>
        <div id="header-mobile"><?
            $home_id = 1;
            $home = $oo->get($home_id);
            // echo $home['deck']; 
        ?></div>
        <div id="menu"><?
            $root_id = 0;
            $menu = $oo->children($root_id);
            foreach ($menu as $m) { 
                if (substr($m["name1"],0,1) != ".") {
                    ?><div class="content-program"><?
                        if ($m['url'] == $item['url']) {
                            require_once("views/menu-detail.php");
                        } else {
                            ?><a href="<?= '/' . $m['url'] ?>">
                                <div class="content-program-title"><?= $m['name1']; ?></div>
                            </a><?
                        }
                    ?></div><?
                }
            }
        ?></div><?
        echo "Supported by ...";
	    require_once("views/menu-ad.php");
    ?></div>
</div>
