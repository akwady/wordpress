<?php
/*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());

/*
 *  INCLUDED FILES
 */

$file_includes = [
    'inc/theme-assets.php',                 // Style and JS
    'inc/theme-setup.php',                  // General theme setting
    'inc/acf-options.php',                  // ACF Option page
    'inc/theme-shortcode.php'              // Theme Shortcode
];

foreach ($file_includes as $file) {
    if ( !$filePath = locate_template($file) ) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }

    require_once $filePath;
}

unset($file, $filePath);

function catchuoi($chuoi, $gioihan)
{

    // n?u ?? d�i chu?i nh? h?n hay b?ng v? tr� c?t
    // th� kh�ng thay ??i chu?i ban ??u

    if (strlen($chuoi) <= $gioihan)
    {
        return $chuoi;
    }
    else
    {
        /*
        so s�nh v? tr� c?t
        v?i k� t? kho?ng tr?ng ??u ti�n trong chu?i ban ??u t�nh t? v? tr� c?t
        n?u v? tr� kho?ng tr?ng l?n h?n
        th� c?t chu?i t?i v? tr� kho?ng tr?ng ?�
        */
        if (strpos($chuoi, " ", $gioihan) > $gioihan)
        {
            $new_gioihan = strpos($chuoi, " ", $gioihan);
            $new_chuoi = substr($chuoi, 0, $new_gioihan) . "...";
            return $new_chuoi;
        }

        // tr??ng h?p c�n l?i kh�ng ?nh h??ng t?i k?t qu?

        $new_chuoi = substr($chuoi, 0, $gioihan) . "...";
        return $new_chuoi;
    }
}
 
?>