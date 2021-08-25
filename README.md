## PHP MVC PROJECT | ROUTER AND BLADE SYSTEM LIKE LARAVEL

### Project Features :


- 🌱 Routing system like Laravel
- ⚡ Blade system like Laravel
- 🔭 Use .env file for variables

---

### 📕 Document
<br />

<!-- DOC:START -->

```php
// use routes

use Core\Router\Web\Route;

Route::get('categories', 'CategoryController@index', 'category.index');

Route::get('categories/create', 'CategoryController@create', 'category.create');

Route::post('categories/create', 'CategoryController@post', 'category.post');

Route::put('categories/edit/{id}', 'CategoryController@put', 'category.put');

Route::delete('categories/delete/{id}', 'CategoryController@destroy', 'category.destroy');

```


```php
// use env

env('APP_NAME');

```

```php
// use blade system

public function index()
{
   view('welcome');
}

```


<!-- DOC:END -->

---


### Languages and Tools:


[<img align="left" alt="PHP" style="margin:0 10px" width="26px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png" />][webdevplaylist]
<br />
<br />
---
👋
<br />
<br />


[![Website](https://img.shields.io/website?label=hilsonxhero.com&style=for-the-badge&url=https%3A%2F%2Fhilsonxhero.com)](https://hilsonxhero.com)
[![Instagram](https://img.shields.io/twitter/follow/hilson?color=1DA1F2&logo=instagram&style=for-the-badge)](https://instagram.com/hilsonxhero.me)

---




[<img align="left" alt="codeSTACKr.com" width="22px" style="margin:0 10px" src="https://raw.githubusercontent.com/iconic/open-iconic/master/svg/globe.svg" />][website]
[<img align="left" alt="hilson | Instagram" width="22px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/instagram.svg" />][instagram]

<br />



[website]: https://hilsonxhero.com
[course]: http://vsCodeHero.com
[instagram]: https://instagram.com/hilsonxhero.me
[linkedin]: https://linkedin.com/in/codeSTACKr
[webdevplaylist]: https://www.youtube.com/playlist?list=PLkwxH9e_vrAJ0WbEsFA9W3I1W-g_BTsbt
[jsplaylist]: https://www.youtube.com/playlist?list=PLkwxH9e_vrALRJKu7wfXby3MKeflhTu6B
[cssplaylist]: https://www.youtube.com/playlist?list=PLkwxH9e_vrALSdvZuEh6gqQdmDoDIoqz4
[reactplaylist]: https://www.youtube.com/playlist?list=PLkwxH9e_vrAK4TdffpxKY3QGyHCpxFcQ0
