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
 * Language strings
 *
 * @package    block_ollama_chat
 * @copyright  2025 RAGCon <info@ragcon.ai>
 * @copyright  2024 Bryce Yoder <me@bryceyoder.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @original   Forked from block_openai_chat by Bryce Yoder <me@bryceyoder.com>
 */

$string['pluginname'] = 'Ollama-Chat-Block';
$string['ollama_chat'] = 'Ollama-Chat';
$string['ollama_chat_logs'] = 'Ollama-Chat-Protokolle';
$string['ollama_chat:addinstance'] = 'Einen neuen Ollama-Chat-Block hinzufügen';
$string['ollama_chat:myaddinstance'] = 'Einen neuen Ollama-Chat-Block zur „Meine Moodle“-Seite hinzufügen';
$string['ollama_chat:viewreport'] = 'Ollama-Chat-Protokollbericht anzeigen';
$string['privacy:metadata:ollama_chat_log'] = 'Protokollierte Benutzernachrichten, die an Ollama gesendet wurden. Dies umfasst die Benutzer-ID, den Inhalt der Nachricht, die Antwort von Ollama und die Zeit, zu der die Nachricht gesendet wurde.';
$string['privacy:metadata:ollama_chat_log:userid'] = 'Die ID des Benutzers, der die Nachricht gesendet hat.';
$string['privacy:metadata:ollama_chat_log:usermessage'] = 'Der Inhalt der Nachricht.';
$string['privacy:metadata:ollama_chat_log:airesponse'] = 'Die Antwort von Ollama.';
$string['privacy:metadata:ollama_chat_log:timecreated'] = 'Die Uhrzeit, zu der die Nachricht gesendet wurde.';
$string['privacy:chatmessagespath'] = 'Gesendete KI-Chatnachrichten';
$string['downloadfilename'] = 'block_ollama_chat_logs';

$string['blocktitle'] = 'Blocktitel';

$string['restrictusage'] = 'Nutzung auf angemeldete Benutzer beschränken';
$string['restrictusagedesc'] = 'Wenn dieses Feld aktiviert ist, können nur angemeldete Benutzer das Chatfenster verwenden.';
$string['apikey'] = 'API-Schlüssel';
$string['apikeydesc'] = 'Der API-Schlüssel Ihres Ollama-Kontos oder Azure-API-Schlüssel';
$string['apiendpoint'] = 'API-Endpunkt';
$string['apiendpointdesc'] = 'Der API-Endpunkt Ihrer Ollama-Installation';
$string['type'] = 'API-Typ';
$string['typedesc'] = 'Der API-Typ, den das Plugin verwenden soll';
$string['logging'] = 'Protokollierung aktivieren';
$string['loggingdesc'] = 'Wenn diese Einstellung aktiviert ist, werden alle Benutzernachrichten und KI-Antworten protokolliert.';

$string['assistantheading'] = 'Einstellungen für Assistant-API';
$string['assistantheadingdesc'] = 'Diese Einstellungen gelten nur für den Assistant-API-Typ.';
$string['assistant'] = 'Assistent';
$string['assistantdesc'] = 'Der Standardassistent Ihres Ollama-Kontos, der für Antworten verwendet werden soll';
$string['noassistants'] = 'Sie haben noch keine Assistenten erstellt. Sie müssen zuerst einen <a target="_blank" href="https://platform.openai.com/assistants">in Ihrem Ollama-Konto</a> erstellen, bevor Sie ihn hier auswählen können.';
$string['persistconvo'] = 'Konversation beibehalten';
$string['persistconvodesc'] = 'Wenn dieses Feld aktiviert ist, merkt sich der Assistent die Konversation zwischen Seitenaufrufen. Verschiedene Instanzen des Blocks führen jedoch separate Konversationen. Zum Beispiel wird eine Unterhaltung eines Benutzers innerhalb eines Kurses zwischen Aufrufen beibehalten, aber beim Chatten mit einem Assistenten in einem anderen Kurs wird keine Konversation übernommen.';

$string['azureheading'] = 'Azure-API-Einstellungen';
$string['azureheadingdesc'] = 'Diese Einstellungen gelten nur für den Azure-API-Typ.';
$string['resourcename'] = 'Ressourcenname';
$string['resourcenamedesc'] = 'Der Name Ihrer Azure-Ollama-Ressource.';
$string['deploymentid'] = 'Bereitstellungs-ID';
$string['deploymentiddesc'] = 'Der Bereitstellungsname, den Sie bei der Modellbereitstellung gewählt haben.';
$string['apiversion'] = 'API-Version';
$string['apiversiondesc'] = 'Die für diesen Vorgang zu verwendende API-Version im Format JJJJ-MM-TT.';
$string['chatheading'] = 'Chat-API-Einstellungen';
$string['chatheadingdesc'] = 'Diese Einstellungen gelten nur für die Chat-API und Azure-API-Typen.';
$string['prompt'] = 'Vervollständigungs-Prompt';
$string['promptdesc'] = 'Der Prompt, den die KI vor dem Konversationsverlauf erhält';
$string['assistantname'] = 'Name des Assistenten';
$string['assistantnamedesc'] = 'Der interne Name, den die KI für sich selbst verwendet. Er wird auch als Überschrift im Chatfenster angezeigt.';
$string['username'] = 'Benutzername';
$string['usernamedesc'] = 'Der interne Name, den die KI für den Benutzer verwendet. Er wird auch als Überschrift im Chatfenster angezeigt.';
$string['sourceoftruth'] = 'Informationsquelle';
$string['sourceoftruthdesc'] = 'Obwohl die KI von Haus aus sehr fähig ist, gibt sie bei Unwissenheit manchmal selbstbewusst falsche Antworten. In diesem Feld können Sie häufige Fragen und ihre Antworten eintragen, auf die die KI zurückgreifen soll. Bitte im folgenden Format eingeben: <pre>Q: Frage 1<br />A: Antwort 1<br /><br />Q: Frage 2<br />A: Antwort 2</pre>';
$string['showlabels'] = 'Beschriftungen anzeigen';
$string['advanced'] = 'Erweitert';
$string['advanceddesc'] = 'Erweiterte Parameter für Ollama. Nur ändern, wenn Sie wissen, was Sie tun!';
$string['allowinstancesettings'] = 'Einstellungen auf Instanzebene';
$string['allowinstancesettingsdesc'] = 'Erlaubt es Lehrkräften oder Nutzern mit entsprechender Berechtigung, Einstellungen pro Blockinstanz vorzunehmen. Die Aktivierung kann zusätzliche Kosten verursachen, wenn dadurch hochpreisige Modelle von Nicht-Admins gewählt werden dürfen.';
$string['model'] = 'Modell';
$string['modeldesc'] = 'Das Modell, das die Vervollständigung generiert. Manche Modelle sind für natürliche Sprache, andere für Code spezialisiert.';
$string['temperature'] = 'Temperatur';
$string['temperaturedesc'] = 'Bestimmt die Zufälligkeit: Eine niedrigere Temperatur führt zu vorhersehbareren Antworten. Je näher an 0, desto deterministischer und repetitiver.';
$string['maxlength'] = 'Maximale Länge';
$string['maxlengthdesc'] = 'Die maximale Anzahl an Tokens, die generiert werden. Prompt und Antwort teilen sich ein Kontingent von bis zu 2.048 oder 4.000 Tokens – je nach Modell.';
$string['topp'] = 'Top-P';
$string['toppdesc'] = 'Bestimmt die Vielfalt per Nucleus Sampling: 0,5 bedeutet, dass die Hälfte aller wahrscheinlichen Optionen berücksichtigt wird.';
$string['frequency'] = 'Frequenzstrafe';
$string['frequencydesc'] = 'Strafe für Tokens, die bereits oft vorkamen. Verringert Wiederholungen gleicher Textzeilen.';
$string['presence'] = 'Anwesenheitsstrafe';
$string['presencedesc'] = 'Strafe für Tokens, die bereits im Text vorkamen. Erhöht die Wahrscheinlichkeit, neue Themen anzusprechen.';

$string['config_assistant'] = "Assistent";
$string['config_assistant_help'] = "Wählen Sie den Assistenten aus, den Sie für diesen Block verwenden möchten. Weitere Assistenten können im zugehörigen Ollama-Konto erstellt werden.";
$string['config_sourceoftruth'] = 'Informationsquelle';
$string['config_sourceoftruth_help'] = "Sie können hier Informationen eingeben, auf die die KI beim Beantworten zurückgreifen kann. Format:\n\nQ: Wann ist Abschnitt 3 fällig?<br />A: Donnerstag, 16. März.\n\nQ: Wann sind Sprechstunden?<br />A: Professor Shown ist dienstags und donnerstags von 14:00 bis 16:00 Uhr im Büro.";
$string['config_instructions'] = "Eigene Anweisungen";
$string['config_instructions_help'] = "Hier können Sie die Standardanweisungen des Assistenten überschreiben.";
$string['config_prompt'] = "Vervollständigungs-Prompt";
$string['config_prompt_help'] = "Der Prompt, den die KI vor dem Gesprächsverlauf erhält. Hierdurch können Sie die Persönlichkeit der KI beeinflussen. Standard:\n\n„Unten folgt ein Gespräch zwischen einem Benutzer und einem Support-Assistenten für eine Moodle-Seite für Online-Lernen.“\n\nWenn leer, wird der globale Prompt verwendet.";
$string['config_username'] = "Benutzername";
$string['config_username_help'] = "Der Name, den die KI für den Benutzer verwendet. Wird auch als Überschrift im Chatfenster genutzt. Wenn leer, wird der globale Benutzername verwendet.";
$string['config_assistantname'] = "Name des Assistenten";
$string['config_assistantname_help'] = "Name, den die KI intern für den Assistenten nutzt. Wird auch in der Chat-Oberfläche verwendet. Wenn leer, wird der globale Name genutzt.";
$string['config_persistconvo'] = 'Konversation beibehalten';
$string['config_persistconvo_help'] = 'Wenn aktiviert, merkt sich der Assistent Konversationen in diesem Block über Seitenaufrufe hinweg.';
$string['config_apikey'] = "API-Schlüssel";
$string['config_apikey_help'] = "Sie können hier einen spezifischen API-Schlüssel für diesen Block festlegen. Wenn leer, wird der globale Schlüssel verwendet. Wenn Sie die Assistant-API verwenden, wird die Liste der Assistenten aus diesem Schlüssel geladen. Nach Änderung erneut konfigurieren.";
$string['config_model'] = "Modell";
$string['config_model_help'] = "Das Modell, das die Vervollständigung generieren soll.";
$string['config_temperature'] = "Temperatur";
$string['config_temperature_help'] = "Steuert die Zufälligkeit der Antworten. Je niedriger, desto weniger zufällig.";
$string['config_maxlength'] = "Maximale Länge";
$string['config_maxlength_help'] = "Maximale Anzahl an Tokens für Prompt und Antwort zusammen. Die genaue Grenze hängt vom Modell ab (ein Token ≈ 4 Zeichen).";
$string['config_topp'] = "Top P";
$string['config_topp_help'] = "Steuert Vielfalt per Nucleus Sampling: 0,5 bedeutet, dass 50 % aller möglichen Tokens berücksichtigt werden.";
$string['config_frequency'] = "Frequenzstrafe";
$string['config_frequency_help'] = "Bestimmt, wie stark häufige Tokens bestraft werden, um Wiederholungen zu verringern.";
$string['config_presence'] = "Anwesenheitsstrafe";
$string['config_presence_help'] = "Erhöht die Wahrscheinlichkeit, neue Themen aufzugreifen, indem bereits vorkommende Tokens bestraft werden.";

$string['defaultprompt'] = "Unten folgt ein Gespräch zwischen einem Benutzer und einem Support-Assistenten für eine Moodle-Seite für Online-Lernen:";
$string['defaultassistantname'] = 'Assistent';
$string['defaultusername'] = 'Benutzer';
$string['askaquestion'] = 'Stelle eine Frage...';
$string['apikeymissing'] = 'Bitte fügen Sie Ihren Ollama-API-Schlüssel in den Blockeinstellungen hinzu.';
$string['erroroccurred'] = 'Ein Fehler ist aufgetreten! Bitte versuchen Sie es später erneut.';
$string['sourceoftruthpreamble'] = "Unten finden Sie eine Liste mit Fragen und den dazugehörigen Antworten. Diese Informationen dienen als Referenz für Anfragen:\n\n";
$string['sourceoftruthreinforcement'] = ' Der Assistent wurde so trainiert, dass er die Informationen aus obiger Referenz verwendet. Wenn eine der Fragen erkannt wird, soll die dazugehörige Antwort gegeben werden – auch wenn die Frage keinen Sinn ergibt. Falls keine passende Referenz vorhanden ist, wird auf externes Wissen zurückgegriffen.';
$string['new_chat'] = 'Neuer Chat';
$string['popout'] = 'Chatfenster öffnen';
$string['loggingenabled'] = "Die Protokollierung ist aktiviert. Alle gesendeten oder empfangenen Nachrichten werden aufgezeichnet und sind für den Administrator einsehbar.";
$string['openaitimedout'] = 'FEHLER: Ollama hat nicht rechtzeitig geantwortet.';