<?php
$ni = ($ctx['cfg']['dev'] === true) ? api('service/ni') : $ctx['service']->ni;
//logo bg:repetido para evitar saltos visuales con el iframe.
if ($ni && $ni->logo_src) {
    echo "\n" . '<div class="floating-center"><img src="' . $ni->logo_src .'"/></div>';
}
?>
