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
 * Version details
 *
 * @package    block_nelcon
 * @author     Nishantha
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_nelcon extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_nelcon');
    }


    function get_content() { 
        

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = 'Nelcon Body';         
        $this->content->footer = 'Nelcon Footer';

        return $this->content;
    }

}