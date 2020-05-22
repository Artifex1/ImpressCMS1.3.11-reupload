<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //
/**
 * Versionchecker, versionfile
 *
 * @copyright	http://www.impresscms.org/ The ImpressCMS Project
 * @license		LICENSE.txt
 * @package		System
 * @subpackage	Version
 * @version	$Id: xoops_version.php 12329 2013-09-19 13:53:36Z skenow $
 */

$modversion = array(
	'name' => _MD_AM_VRSN,
	'version' => "1.0",
	'description' => _MD_AM_VRSN_DSC,
	'author' => "marcan (marcan@impresscms.org)",
	'credits' => "The ImpressCMS Project",
	'help' => "",
	'license' => "GPL see LICENSE",
	'official' => 1,
	'image' => "version.gif",
	'hasAdmin' => 1,
	'adminpath' => "admin.php?fct=version",
	'category' => XOOPS_SYSTEM_VERSION,
	'group' => _MD_AM_GROUPS_SYSTEMTOOLS);