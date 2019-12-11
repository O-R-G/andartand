<?
// get .Ads object
// get .Ads->children
// name {name1}, duration {deck}, url {body}

$fields = array("objects.id");
$tables = array("objects");
$where  = array("objects.name1 LIKE '.Ads'", "objects.active=1");
$order  = array("objects.rank");
$limit  = 1;
$ads = $oo->get_all($fields, $tables, $where, $order, $limit);
$ads_id = $ads[0]['id'];
$children = $oo->children($ads_id);

?><div id="ads"><?
    foreach($children as $child) {
        ?><span class="ad fade fade-<?= $child['deck']; ?>">
            <a href='<?= $child['body']; ?>' target='_new'>
                <?= $child['name1']; ?>
            </a>
        </span><?
    }
?></div>
