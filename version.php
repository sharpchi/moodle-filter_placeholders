<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version file.
 * 
 * @package    local_placeholders
 * @copyright  2019 University of Chichester {@link http://www.chi.ac.uk}
 * @author     Mark Sharp <m.sharp@chi.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019041604;
$plugin->requires  = 2018120300;
$plugin->component = 'local_placeholders';
$plugin->release   = '3.6';
$plugin->maturity  = MATURITY_ALPHA;
$plugin->dependencies = [
    'filter_shortcodes'  => 2018050800,
    'local_adminsettingsconfig' => 2018110900
];