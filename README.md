# <p align="center">Laravl9 Multi Guard</p>

<p align="center">
    <img src="https://user-content.gitlab-static.net/be4169c092b35b099f62186d45999645b6b6b9b9/68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f6c61726176656c2f6172742f6d61737465722f6c6f676f2d6c6f636b75702f352532305356472f32253230434d594b2f3125323046756c6c253230436f6c6f722f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667" alt="Docker" width="300px">


    
</p>


# Description

- this demo help to create Multiple Authentication Guards in laravel9


# How to Implement Multiple Authentication Guards in Laravel 9

```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
php artisan serve
```



# Routes for new guard ``admin`` :
- admin login :  http://127.0.0.1:8000/admin
- admin register : http://127.0.0.1:8000/admin/register
