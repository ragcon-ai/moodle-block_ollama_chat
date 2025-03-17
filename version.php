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
 * Version information
 *
 * @package    block_ollama_chat
 * @copyright  2025 RAGCon <info@ragcon.ai>
 * @copyright  2023 Bryce Yoder <me@bryceyoder.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @original   Forked from block_openai_chat by Bryce Yoder <me@bryceyoder.com>
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'block_ollama_chat';
$plugin->version = 2025021700;
$plugin->requires = 2022041600;
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '3.0.1';
