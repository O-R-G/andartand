<div id="center" class="container">
    <div class="content" id="home"><?            
        $home_id = 1;
        $media_home = $oo->media($home_id);
        foreach($media_home as $key=>$m) {
            ?><img class="media-home" src="/<?= m_url($m); ?>"><?
        }
    ?></div>
</div>
