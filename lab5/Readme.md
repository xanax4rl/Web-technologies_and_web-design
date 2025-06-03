# Лабораторна робота №5

**Виконав:** Веретко Сергій

Варіант №2

---

## Тема

Форми HTML, методи передачі даних **GET / POST** та базова валідація у PHP.

## Мета роботи

1. Закріпити навички створення HTML‑форм і обробки їх даних у PHP.
2. Використати метод **GET** для отримання значення та підрахунку довжини рядка.
3. Реалізувати валідацію введеного пароля, використовуючи метод **POST** і регулярні вирази.
4. Підтягнути зміни у GitHub‑репозиторій.

Завдання:

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab5/lab5_task.png)

---

## Хід роботи

### 1 ‒ Підготовка середовища

* XAMPP 8.2 на порту 8080.
* Проєктна тека: `D:\xampp\htdocs\demo`.

### 2 ‒ Створення PHP‑файлу

Створено файл **`lab5.php`** із наступним кодом:

[Переглянути код](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab5/lab5.php)

### 3 ‒ Перевірка роботи скрипта

1. Запустив Apache у XAMPP.
2. Відкрив [http://localhost:8080/demo/lab5.php](http://localhost:8080/demo/lab5.php).
3. **Завдання 1**: ввів ім’я *«Serhii»* → отримав *«6 символів»*.

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab5/lab5.1.png)


4. **Завдання 2**:

   * пароль `r` → *Пароль не відповідає вимогам ❌* (менше 8 символів);
  
![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab5/lab5.2.png)

   * пароль `SerhiiSuperHero45` → *Пароль валідний ✅*.

![image](https://github.com/xanax4rl/Web-technologies_and_web-design/blob/main/lab5/lab5.3.png)


---

## Висновки

У ЛР №5 створено дві HTML‑форми з різними методами передачі даних. Перша форма відправляє ім’я через **GET** і виводить його довжину, друга — перевіряє пароль, надісланий методом **POST**, щодо мінімальної довжини та наявності цифри. Закріплено роботу з глобальними масивами `$_GET`, `$_POST` та базовою валідацією в PHP. Зміни додані до репозиторію GitHub.
