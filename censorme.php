<?php
/*
Plugin Name: CENSOR ME plugin
Plugin URI: http://http://wordpress.org/extend/plugins/censor-me/
Description: Automatically places the "stop censorship" black banner from americancensorship.org on your wordpress website.
Version: 0.1
Author: xenomancer
Author URI: http://blog.cdmansfield.com/
License: GPL3
*/
/*  Copyright 2012  xenomancer  (email: craigbob99@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function censor_me( $content ) {
?>
<a style='width:100%;height:100%;vertical-align:middle;text-align:center;background-color:#000;position:absolute;z-index:5555;top:0px;left:0px;background-image:url(http://americancensorship.org/images/stop-censorship-small.png);background-position:center center;background-repeat:no-repeat;' href='http://americancensorship.org'></a>
<?php
}

add_filter( 'the_title', 'censor_me', 5 );
add_action( 'get_header', 'censor_me', 5 );
?>
