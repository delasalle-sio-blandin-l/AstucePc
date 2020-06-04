<?php
// inclusion de la classe magpierss
require_once("core/ressources/magpierss/magpierss/rss_fetch.inc");
function FeedParser($url_feed, $nb_items_affiches=5)
{
 
    // lecture du fichier distant (flux XML)
    $rss = fetch_rss($url_feed);
    
    // si la lecture s'est bien passee, on lit les elements
    if (is_array($rss->items))
    {
    
        // on ne récupère que les éléments les plus récents
        $items = array_slice($rss->items, 0, $nb_items_affiches);
        
        // debut de la liste
        // (vous pouvez indiquer un style CSS pour la formater)
        $html = "<ul>\n"; // boucle sur tous les elements 
        foreach ($items as $item)
        {
            $html .= "<li><a href=\"".$item['link']."\">";
            $html .= $item['title']."</a></li>\n";
        }
        $html .= "</ul>\n";
    }
    // retourne le code HTML à inclure dans la page
    return $html;
}
?>