<?php
/*
Plugin Name: Pretty Comments
Plugin URI: http://www.andreabelvedere.com/opensource/pretty-comments
Description: Replaces the regular wordpress comment textarea with a simple wysiwyg editor, it uses the jWYSIWYG jQuery (http://code.google.com/p/jwysiwyg/)
Author: Andrea Belvedere
Version: 1.0
Author URI: http://www.andreabelvedere.com/
*/
/*  Copyright 2009  Andrea Belvedere  (email : scieck at gmail dot com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
define('PRETTY_COMMENTS_URL', WP_PLUGIN_URL.'/pretty-comments/');

add_action('wp_print_scripts', 'pretty_comments_print_scripts');
add_action('wp_head', 'pretty_comments_css');

function pretty_comments_print_scripts() 
{
    wp_register_script('jquery_wysiwyg_js', PRETTY_COMMENTS_URL.'jquery.wysiwyg.js', array('jquery'));
    wp_register_script('pretty_comments_js', PRETTY_COMMENTS_URL.'pretty-comments.js', array('jquery'));
    wp_enqueue_script('jquery_wysiwyg_js');
    wp_enqueue_script('pretty_comments_js');
}

function pretty_comments_css()
{
    echo '<link rel="stylesheet" type="text/css" href="'.PRETTY_COMMENTS_URL.'jquery.wysiwyg.css" />';
}