<?
    // hard-coded root
    $calendar_id = 9;

    // chronological sort
    function date_sort($a, $b) {
        return strtotime($a['begin']) - strtotime($b['begin']);
    }

    $programming = $oo->children($calendar_id);
    usort($programming, "date_sort");
?>

<!--
<div id="date-time"><?            
    date_default_timezone_set("America/Los_Angeles");
    echo date("m/j/y H:i:s");
?></div>
-->

<div id="right" class="container">
    <div class="content">
        <div class="content-programming"><?
            foreach ($programming as $key=>$program) {
                ?><div class="content-program"><?
                        if ($program['url'] == $item['url']) {
                            require_once("views/calendar-event.php");
                        } else {
                            ?><a href="/calendar/<?= $program['url'] ?>">
                                <div class="content-program-title"><?
                                    echo date('m/j/y', strtotime($program['begin'])) . " " . $program['name1'];
                                ?></div>
                            </a><?
                        }
                ?></div><?
            }
        ?></div>
    </div>
</div>


<!--
                    <?= $program['url'] ?>
                    <?= "<br/>" ?>
                    <?= $item['url'] ?>
-->
