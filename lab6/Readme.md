# Лабораторна робота №6

**Виконав:** Веретко Сергій

Варіант №2

---

## Тема

Створення бази даних MySQL і робота з нею у PHP (CRUD‑операції).

## Мета роботи

1. Навчитися створювати базу даних і таблицю з необхідними полями.
2. Реалізувати оновлення (update) даних у таблиці за `id` за допомогою підготовленого запиту.
3. Додати функціонал пошуку книг за назвою та відобразити результати у вигляді HTML‑таблиці.
4. Зафіксувати зміни у репозиторії GitHub.

Завдання:

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6_task.png)

---

## Хід роботи

### 1 ‒ Створення бази даних і таблиці

У phpMyAdmin (або через CLI) виконано SQL‑скрипт:

```sql
-- Створення БД
CREATE DATABASE IF NOT EXISTS BookStore
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE BookStore;

-- Таблиця Books
CREATE TABLE IF NOT EXISTS Books (
  id               INT AUTO_INCREMENT PRIMARY KEY,
  title            VARCHAR(255) NOT NULL,
  author           VARCHAR(255) NOT NULL,
  price            DECIMAL(8,2) NOT NULL,
  publication_year INT          NOT NULL
);
```

До таблиці додано кілька тестових рядків:

```sql
INSERT INTO Books (title, author, price, publication_year) VALUES
 ('Місто',           'Валер'ян Підмогильний', 320.00, 1928),
 ('Захар Беркут',    'Іван Франко',            250.00, 1883),
 ('Чорний ворон',    'Василь Шкляр',           340.00, 2009);
```

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6.1.png)

### 2 ‒ Підготовка PHP‑файлу

Створено **`lab6.php`** у `D:\xampp\htdocs\demo`.

[Переглянути код](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6.php)

### 3 ‒ Перевірка функціоналу

1. **Пошук**: ввів *«о»* → таблиця відобразила дві книги які містять букву "о" у назві. 

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6.2.png)
  
3. **Оновлення**: змінив ціну книги з ID = 1 на `350.00` → отримав повідомлення *«Книгу успішно оновлено ✅»*.

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6.3.png)

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6.4.png)

4. У базі даних перевірив, що зміни збережено.

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab6/lab6.5.png)

---

## Висновки

У межах ЛР №6 створено базу даних **BookStore** і таблицю **Books**. Реалізовано пошук книг за назвою з відображенням результатів у вигляді HTML‑таблиці та оновлення запису за `id` через підготовлений запит. Отримано практичні навички роботи з MySQL, підготовленими виразами `mysqli` та подальшою фіксацією коду в GitHub.
