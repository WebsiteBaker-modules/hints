<?php
/**
 *
 * @category        page
 * @package         Hints
 * @version         0.3.0
 * @authors         Martin Hecht (mrbaseman)
 * @copyright       (c) 2018 - 2018, Martin Hecht
 * @link            https://github.com/WebsiteBaker-modules/hints
 * @license         GNU General Public License v3 - The javascript features are third party software, spectrum color picker and autosize, both licensed under MIT license
 * @platform        2.8.x
 * @requirements    PHP 7.x
 *
 **/


/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(!defined('WB_PATH')) {
        // Stop this file being access directly
        if(!headers_sent()) header("Location: ../index.php",TRUE,301);
        die('<head><title>Access denied</title></head><body><h2 style="color:red;margin:3em auto;text-align:center;">Cannot access this file directly</h2></body></html>');
}
/* -------------------------------------------------------- */


$module_directory       = 'hints';
$module_name            = 'Hints';
$module_function        = 'page';
$module_version         = '0.3.0';
$module_platform        = '2.8.x';
$module_author          = 'Martin Hecht (mrbaseman)';
$module_license         = 'GNU General Public License v3 - The javascript features are third party software, spectrum color picker and autosize, both licensed under MIT license';
$module_description     = 'This module allows you to add comments in the backend for documentation, tutorials, etc. - useful if you have less experienced authors who need some hints how to use the backend or if a team needs some places to put hints for other team members';

/*
 *      CHANGELOG
 *
 *      0.3.0   2018-12-21      - offer a color selection palette
 *                              - localization for the color picker
 *                              - keep previously selected colors in palette
 *                              - resize textarea to small heights
 *                              - rework update of end_time in add.php
 *
 *      0.2.1   2018-12-19      - display a hint about hidden sections
 *
 *      0.2.0   2018-12-18      - added color selector and auto-resize textbox
 *                              - disable deletion of section if not owner
 *                              - suppress section anchors in frontend
 *                              - allow html input
 *                              - bug fix checkIDKEY error (hopefully)
 *                              - allow hiding hints for others
 *
 *      0.1.1   2018-12-12      - allow superadmin as owner
 *                              - use div instead of textbox if not shared
 *                              - add a padding inside the hint's div
 *                              - use an additional pre tag inside div
 *                              - use separeate stylings for div and textarea
 *
 *      0.1.0   2018-12-11      - initial version
 *
 */
