<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - About';

?>
<h4>Это тестовое задание, выполненное в соответствии со следующими требованиями (БД выдана вместе с ТЗ):</h4>
<ol class="tasklist">
    <li>[Обязательно] Создать базовое Yii приложение, включающее стартовую страницу (home page), форму связи с администратором (contact us), а также набор описательных статических страниц: «about us», «how it works».</li>
    <li>[Обязательно] Реализовать механизм аутентификации (log in) основанный на записях в таблице БД «user». Имя пользователя и пароль должны храниться в таблице БД. </li>
    <li>[Обязательно]  Создать страницу регистрации (signup), где не аутентифицированные пользователи могут создать новую учетную запись в системе. При создании записи пользователь должен ввести имя учетной записи, адрес электронной почты, пароль, физический адрес и номер телефона.</li>
    <ul>
    <li>[Обязательно] Введенные при регистрации параметры должны быть подвергнуты проверке на соответствие форматам входных данных и на уникальность введенных данных.</li>
    <li>[Обязательно] Реализовать защиту формы регистрации при помощи задачи по распознаванию фигурного текста – «captcha».</li>
    </ul>
    <li>[Обязательно] Создать секцию каталог блюд: эта секция должна представлять список всех блюд в системе. Для каждого блюда в списке должны выводиться его название, имя категории, к которой оно относится и дата добавления в систему.</li>
    <li>[Обязательно] Для каждого блюдо в каталоге должно быть снабжено ссылкой на детальную страницу блюда. Детальная страница должна содержать полную информацию о блюде.</li>
    <li>[Обязательно] Создать секцию администрирования для управления каталогом блюд: добавление, редактирование, удаление блюд.</li>
    <ul>
    <li>[Дополнительно] Разделить группы учетных записей в системе. Создать отдельную группу клиентов и отдельную группу администраторов. Пользователи, входящие в группу администраторов должны иметь доступ в секцию администрирования, но не должны иметь возможности составлять себе меню. Пользователи, входящие в группу клиентов должны иметь возможность составлять свое меню, но не должны иметь доступ в секцию администрирования.</li>
    </ul>
    <li>[Обязательно] Создать секцию администрирования для управления учетными записями пользователей: создание, редактирование, удаление учетных записей.</li>
</ol>