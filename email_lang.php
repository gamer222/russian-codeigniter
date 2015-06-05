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

$lang['email_must_be_array'] = 'в метод проверки электронной почты должен быть передан массив.';
$lang['email_invalid_address'] = 'Неверный адрес электронной почты: %s';
$lang['email_attachment_missing'] = 'Не удалось найти следующее вложение электронной почты: %s';
$lang['email_attachment_unreadable'] = 'Не удается открыть эту привязанность: %s';
$lang['email_no_from'] = 'Не удается отправить почту с "From" header.';
$lang['email_no_recipients'] = 'Вы должны включить получателей: To, Cc, или Bcc';
$lang['email_send_failure_phpmail'] = 'Невозможно отправить электронную почту, используя PHP mail(). Ваш сервер не может быть настроен для отправки почты с помощью этого метода.';
$lang['email_send_failure_sendmail'] = 'Невозможно отправить электронную почту, используя PHP Sendmail . Ваш сервер не может быть настроен для отправки почты с помощью этого метода.';
$lang['email_send_failure_smtp'] = 'Невозможно отправить электронную почту, используя PHP SMTP. Ваш сервер не может быть настроен для отправки почты с помощью этого метода.';
$lang['email_sent'] = 'Ваше сообщение было успешно отправлено , используя следующий протокол: %s';
$lang['email_no_socket'] = 'Невозможно открыть сокет для Sendmail . Пожалуйста, проверьте настройки.';
$lang['email_no_hostname'] = 'Вы не указали имя хоста SMTP.';
$lang['email_smtp_error'] = 'Ниже SMTP произошла ошибка: %s';
$lang['email_no_smtp_unpw'] = 'Ошибка: Вы должны назначить SMTP логин и пароль.';
$lang['email_failed_smtp_login'] = 'Не удалось отправить команду AUTH LOGIN . ошибка: %s';
$lang['email_smtp_auth_un'] = 'Не удалось проверить подлинность пользователя . ошибка: %s';
$lang['email_smtp_auth_pw'] = 'Не удалось проверить подлинность пароль . ошибка: %s';
$lang['email_smtp_data_failure'] = 'Не удалось отправить данные: %s';
$lang['email_exit_status'] = 'Код состояния Выход: %s';
