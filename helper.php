<?php
include("data.php");
/**
 * Get All Posts
 */
function ml_posts()
{
    global $ml_posts;

    if (isset($ml_posts) && count($ml_posts) > 0) {
        return $ml_posts;
    } else {
        return [];
    }
}

/**
 * Get all menus
 */
function menus()
{
    global $menus;

    if (isset($menus) && count($menus) > 0) {
        return $menus;
    } else {
        return [];
    }
}
/**
 * Get all machine learning's links
 */
function ml_links()
{
    global $ml_links;

    if (isset($ml_links) && count($ml_links) > 0) {
        return $ml_links;
    } else {
        return [];
    }
}
function py_links()
{
    global $py_links;

    if (isset($py_links) && count($py_links) > 0) {
        return $py_links;
    } else {
        return [];
    }
}
function ktdh_links()
{
    global $ktdh_links;

    if (isset($ktdh_links) && count($ktdh_links) > 0) {
        return $ktdh_links;
    } else {
        return [];
    }
}
?>