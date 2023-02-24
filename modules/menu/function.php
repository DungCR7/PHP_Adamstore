<?php

function buildTree($items)
{
    $childs = array();

    foreach ($items as &$item) {
        $childs[(int)$item['parent_id']][] = &$item;
    }

    foreach ($items as &$item) {
        if (isset($childs[$item['cat_id']])) {
             $item['childs'] = $childs[$item['cat_id']];
        }
    }
    
    return $childs[0];
}

?>

