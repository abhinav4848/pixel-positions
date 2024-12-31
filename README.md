<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Course completed
I built this over from the tutorial in the winter of 2024 and completed it 40 mins before new year's celebration for 2025 began.
Let's hope I finally manage to grow my laravel knowledge and actually release useful projects using this technology. 
I have been doing something or the other with coding forever and the last useful thing I ever released was in med school in 2018. 

You can view the original course here: [here](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/30).

# How to get started
1. download this. 
1. open cmd and run `composer install`
1. then run `cp .env.example .env`
1. then `php artisan key:generate`
1. then update `.env` as needed regarding database and mailer details.
Can also update the APP_URL. I use laravel herd so any project inside herd folder, eg 'example' can be called just by http://example.test
1. then run `php artisan migrate --seed` or `php artisan migrate` and `php artisan db:seed`
1. then use `npm install`. we don't use yarn in this project so can't install with yarn.
1. usually by the time you intall this, there'll be vulnerabilities identified so run `npm audit fix`
1. then `npm run dev`

