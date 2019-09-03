<?
    // hard-coded root
    $home_id = 1;
    $home_items = $oo->children($home_id);

?><div id="center" class="container"><?
    foreach ($home_items as $home_item) {
        if (substr($home_item["name1"],0,1) != ".") {
            ?><div class="content" id="home"><?
                echo $home_item['body']; 
                $home_item_id = $home_item['id'];
                $home_item_media = $oo->media($home_item_id);
                foreach($home_item_media as $key=>$m) {
                    ?><img class="media-home" src="/<?= m_url($m); ?>"><?
            	    ?><div class="media-caption"><?
	                	echo $m["caption"];
	                ?></div><?
                }
            ?></div><?
        }
    }
?></div>
