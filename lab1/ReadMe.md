Лабораторна робота №1

Виконав: Веретко Сергій

Варіант №2

Тема

Налаштування локального веб‑сервера XAMPP, використання Visual Studio Code для розробки на PHP 
та первинне розміщення проєкту на GitHub.

Мета роботи

Закріпити навички встановлення та налаштування середовища XAMPP.

Навчитися створювати й запускати прості PHP‑скрипти.

Освоїти базові команди Git та розмістити локальний проєкт у віддаленому репозиторії GitHub.

Завдання:

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab1/lab1_task.png)

Хід роботи

1 ‒ Установлення та налаштування XAMPP

Завантажив інсталятор із https://www.apachefriends.org та встановив XAMPP у C:\xampp.

Відкрив XAMPP Control Panel → Config → Apache (httpd.conf).

Замінені рядки:

Listen 8080               # було 80

ServerName localhost:8080 # було 80

Перезапустив Apache; тестова сторінка доступна за адресою http://localhost:8080.

2 ‒ Створення PHP‑проєкту

У каталозі D:\xampp\htdocs\demo створив файл index.php.

Доданий наступний код:

[Перейти до коду](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab1/index.php)


Сторінка у браузері відображає:

![image](https://github.com/user-attachments/assets/b3c68516-db48-4c20-a97c-1209ae9cbcfb)


Висновки

У ході лабораторної роботи №1 було встановлено XAMPP, налаштовано порт 8080, створено та протестовано PHP‑скрипт,
а також ініціалізовано Git‑репозиторій і завантажено його на GitHub. 
Отримано практичні навички роботи з локальним веб‑сервером і системою контролю версій.
