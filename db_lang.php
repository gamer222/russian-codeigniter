<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Невозможно определить настройки базы данных на основе строки подключения вы указали.';
$lang['db_unable_to_connect'] = 'Не удается подключиться к серверу базы данных , используя предоставленные параметры.';
$lang['db_unable_to_select'] = 'Невозможно выбрать указанную базу данных: %s';
$lang['db_unable_to_create'] = 'Невозможно создать указанную базу данных: %s';
$lang['db_invalid_query'] = 'Запрос , который Вы представили , не действует.';
$lang['db_must_set_table'] = 'Вы должны установить таблицы базы данных , которые будут использоваться с вашего запроса.';
$lang['db_must_use_set'] = 'Вы должны использовать метод "set" чтобы обновить запись.';
$lang['db_must_use_index'] = 'Вы должны указать индекс , чтобы соответствовать на обновления пакетных.';
$lang['db_batch_missing_index'] = 'Одна или несколько строк , представленные на пакетного обновления отсутствует на указанном индексе.';
$lang['db_must_use_where'] = 'Обновления не допускаются , если они не содержат "where" пункт.';
$lang['db_del_must_use_where'] = 'Удаления не допускаются , если они не содержат "where" или "like" пункт.';
$lang['db_field_param_missing'] = 'Чтобы загрузить поля требуется имя таблицы в качестве параметра.';
$lang['db_unsupported_function'] = 'Эта функция не доступна для базы данных , которую вы используете.';
$lang['db_transaction_failure'] = 'Отказ сделка: Откат выполняется.';
$lang['db_unable_to_drop'] = 'Невозможно удалить указанную базу данных.';
$lang['db_unsupported_feature'] = 'Поддерживается функция платформы базы данных которую вы используете.';
$lang['db_unsupported_compression'] = 'Формат сжатия файлов который вы выбрали не поддерживается сервером.';
$lang['db_filepath_error'] = 'Невозможно записать данные в пути файла который вы подали.';
$lang['db_invalid_cache_path'] = 'Путь кэша , который Вы представили , не является действительным для записи.';
$lang['db_table_name_required'] = 'Имя таблицы требуется для этой операции.';
$lang['db_column_name_required'] = 'Имя столбца требуется для этой операции.';
$lang['db_column_definition_required'] = 'Определение столбца требуется для этой операции.';
$lang['db_unable_to_set_charset'] = 'Невозможно установить соединение , набор символов клиента: %s';
$lang['db_error_heading'] = 'Произошла ошибка базы данных ';
