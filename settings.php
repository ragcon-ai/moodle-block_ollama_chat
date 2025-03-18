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
 * Plugin settings
 *
 * @package    block_ollama_chat
 * @copyright  2025 RAGCon <info@ragcon.ai>
 * @copyright  2024 Bryce Yoder <me@bryceyoder.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @original   Forked from block_openai_chat by Bryce Yoder <me@bryceyoder.com>
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    if (!defined('BEHAT_SITE_RUNNING')) {
        $ADMIN->add('reports', new admin_externalpage(
            'ollama_chat_report', 
            get_string('ollama_chat_logs', 'block_ollama_chat'), 
            new moodle_url("$CFG->wwwroot/blocks/ollama_chat/report.php", ['courseid' => 1]),
            'moodle/site:config'
        ));
    }

    if ($ADMIN->fulltree) {

        require_once($CFG->dirroot .'/blocks/ollama_chat/lib.php');

        $type = get_type_to_display();
        $assistant_array = [];
        if ($type === 'assistant') {
            $assistant_array = fetch_assistants_array();
        }

        global $PAGE;
        $PAGE->requires->js_call_amd('block_ollama_chat/settings', 'init');

        $settings->add(new admin_setting_configtext(
                'block_ollama_chat/apiendpoint',
                get_string('apiendpoint', 'block_ollama_chat'),
                get_string('apiendpointdesc', 'block_ollama_chat'),
                '',
                PARAM_TEXT
        ));

        $settings->add(new admin_setting_configtext(
            'block_ollama_chat/apikey',
            get_string('apikey', 'block_ollama_chat'),
            get_string('apikeydesc', 'block_ollama_chat'),
            '',
            PARAM_TEXT
        ));

        $settings->add(new admin_setting_configselect(
            'block_ollama_chat/type',
            get_string('type', 'block_ollama_chat'),
            get_string('typedesc', 'block_ollama_chat'),
            'chat',
            ['chat' => 'chat']
        ));

        $settings->add(new admin_setting_configcheckbox(
            'block_ollama_chat/restrictusage',
            get_string('restrictusage', 'block_ollama_chat'),
            get_string('restrictusagedesc', 'block_ollama_chat'),
            1
        ));

        $settings->add(new admin_setting_configtext(
            'block_ollama_chat/assistantname',
            get_string('assistantname', 'block_ollama_chat'),
            get_string('assistantnamedesc', 'block_ollama_chat'),
            'Assistant',
            PARAM_TEXT
        ));

        $settings->add(new admin_setting_configtext(
            'block_ollama_chat/username',
            get_string('username', 'block_ollama_chat'),
            get_string('usernamedesc', 'block_ollama_chat'),
            'User',
            PARAM_TEXT
        ));

        $settings->add(new admin_setting_configcheckbox(
            'block_ollama_chat/logging',
            get_string('logging', 'block_ollama_chat'),
            get_string('loggingdesc', 'block_ollama_chat'),
            0
        ));

        // Assistant settings //

        if ($type === 'assistant') {
            $settings->add(new admin_setting_heading(
                'block_ollama_chat/assistantheading',
                get_string('assistantheading', 'block_ollama_chat'),
                get_string('assistantheadingdesc', 'block_ollama_chat')
            ));

            if (count($assistant_array)) {
                $settings->add(new admin_setting_configselect(
                    'block_ollama_chat/assistant',
                    get_string('assistant', 'block_ollama_chat'),
                    get_string('assistantdesc', 'block_ollama_chat'),
                    count($assistant_array) ? reset($assistant_array) : null,
                    $assistant_array
                ));
            } else {
                $settings->add(new admin_setting_description(
                    'block_ollama_chat/noassistants',
                    get_string('assistant', 'block_ollama_chat'),
                    get_string('noassistants', 'block_ollama_chat'),
                ));
            }

            $settings->add(new admin_setting_configcheckbox(
                'block_ollama_chat/persistconvo',
                get_string('persistconvo', 'block_ollama_chat'),
                get_string('persistconvodesc', 'block_ollama_chat'),
                1
            ));

        } else {

            // Chat settings //

            if ($type === 'azure') {
                $settings->add(new admin_setting_heading(
                    'block_ollama_chat/azureheading',
                    get_string('azureheading', 'block_ollama_chat'),
                    get_string('azureheadingdesc', 'block_ollama_chat')
                ));

                $settings->add(new admin_setting_configtext(
                    'block_ollama_chat/resourcename',
                    get_string('resourcename', 'block_ollama_chat'),
                    get_string('resourcenamedesc', 'block_ollama_chat'),
                    "",
                    PARAM_TEXT
                ));

                $settings->add(new admin_setting_configtext(
                    'block_ollama_chat/deploymentid',
                    get_string('deploymentid', 'block_ollama_chat'),
                    get_string('deploymentiddesc', 'block_ollama_chat'),
                    "",
                    PARAM_TEXT
                ));

                $settings->add(new admin_setting_configtext(
                    'block_ollama_chat/apiversion',
                    get_string('apiversion', 'block_ollama_chat'),
                    get_string('apiversiondesc', 'block_ollama_chat'),
                    "2023-09-01-preview",
                    PARAM_TEXT
                ));
            }

            $settings->add(new admin_setting_heading(
                'block_ollama_chat/chatheading',
                get_string('chatheading', 'block_ollama_chat'),
                get_string('chatheadingdesc', 'block_ollama_chat')
            ));

            $settings->add(new admin_setting_configtextarea(
                'block_ollama_chat/prompt',
                get_string('prompt', 'block_ollama_chat'),
                get_string('promptdesc', 'block_ollama_chat'),
                "Below is a conversation between a user and a support assistant for a Moodle site, where users go for online learning.",
                PARAM_TEXT
            ));

            $settings->add(new admin_setting_configtextarea(
                'block_ollama_chat/sourceoftruth',
                get_string('sourceoftruth', 'block_ollama_chat'),
                get_string('sourceoftruthdesc', 'block_ollama_chat'),
                '',
                PARAM_TEXT
            ));
        }


        // Advanced Settings //

        $settings->add(new admin_setting_heading(
            'block_ollama_chat/advanced',
            get_string('advanced', 'block_ollama_chat'),
            get_string('advanceddesc', 'block_ollama_chat')
        ));

        $settings->add(new admin_setting_configcheckbox(
            'block_ollama_chat/allowinstancesettings',
            get_string('allowinstancesettings', 'block_ollama_chat'),
            get_string('allowinstancesettingsdesc', 'block_ollama_chat'),
            0
        ));

        if ($type === 'assistant') {

        } else {
            $settings->add(new admin_setting_configtext(
                'block_ollama_chat/model',
                get_string('model', 'block_ollama_chat'),
                get_string('modeldesc', 'block_ollama_chat'),
                'llama3.2:3b',
                PARAM_TEXT
            ));

            $settings->add(new admin_setting_configtext(
                'block_ollama_chat/temperature',
                get_string('temperature', 'block_ollama_chat'),
                get_string('temperaturedesc', 'block_ollama_chat'),
                0.5,
                PARAM_FLOAT
            ));

            $settings->add(new admin_setting_configtext(
                'block_ollama_chat/maxlength',
                get_string('maxlength', 'block_ollama_chat'),
                get_string('maxlengthdesc', 'block_ollama_chat'),
                500,
                PARAM_INT
            ));

            $settings->add(new admin_setting_configtext(
                'block_ollama_chat/topp',
                get_string('topp', 'block_ollama_chat'),
                get_string('toppdesc', 'block_ollama_chat'),
                1,
                PARAM_FLOAT
            ));

            $settings->add(new admin_setting_configtext(
                'block_ollama_chat/frequency',
                get_string('frequency', 'block_ollama_chat'),
                get_string('frequencydesc', 'block_ollama_chat'),
                1,
                PARAM_FLOAT
            ));

            $settings->add(new admin_setting_configtext(
                'block_ollama_chat/presence',
                get_string('presence', 'block_ollama_chat'),
                get_string('presencedesc', 'block_ollama_chat'),
                1,
                PARAM_FLOAT
            ));
        }
    }
}
