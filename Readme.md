# PHP Training Center Router

Week 3 PHP Lab - Front Controller, Router, Controllers and Standard Response.

## Features
- ✅ Front Controller pattern (public/index.php)
- ✅ Custom Router (METHOD + PATH → Controller@Action)
- ✅ Standard Responses: HTML, JSON, Redirect, 404, 405
- ✅ Organized Controllers by function
- ✅ PSR-4 Autoloading with Composer

## Routes

| Method | URL | Controller@Action | Response |
|--------|-----|-------------------|----------|
| GET | / | HomeController@index | HTML |
| GET | /go-home | HomeController@goHome | Redirect |
| GET | /health | HealthController@index | JSON |
| GET | /courses | CourseController@index | HTML |
| GET | /courses/create | CourseController@create | HTML |
| POST | /courses | CourseController@store | Redirect |
| GET | /login | AuthController@login | HTML |
| POST | /login | AuthController@handleLogin | Redirect |
| GET | /logout | AuthController@logout | Redirect |

## Install

```bash
composer dump-autoload