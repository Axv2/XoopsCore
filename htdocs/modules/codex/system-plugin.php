<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

include dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'mainfile.php';

$xoops = Xoops::getInstance();
$xoops->header();
echo "
The 'System' module provides a 'Plugin' interface that modules should implement<br />
The new class Xoops_Module_Plugin is the class that makes using plugins simple and effective!<br />
<br />
See how Codex module hooks into the system module just by using this codex/class/plugin/system.php
";

Xoops_Utils::dumpFile(dirname(__FILE__) . '/class/plugin/system.php');
$xoops->footer();
