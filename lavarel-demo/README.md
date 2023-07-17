<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 启动
```php
php artisan serve
```

---
```php
app目录：目录包含应用程序的核心代码。应用中所有的类都应该放在这里
├── bootstrap目录：包含app.php。还包含了cache目录， cache目录下存放提升性能的文件，比如路由和服务缓存文件。
├── config 目录：配置文件
├── database目录：数据库文件以及模型工厂类
├── public目录：入口index.php ，还包含了一些你的资源文件（如图片、JavaScript 和 CSS）。
├── resources目录：视图和未编译的资源文件（如 LESS、SASS 或 JavaScript）。+语言文件
├── routes目录：包含所有路由定义，Laravel 几个路由文件：web.php、api.php、 console.php 和 channels.php。
|	├── web.php：包含 RouteServiceProvider 放置在 web 中间件组中的路由，提供会话状态、CSRF 防护和 cookie 加密。如果应用不提供无状态的、RESTful 风格的 API，则所有的路由都在 web.php 文件中定义。
|	├── api.php：包含RouteServiceProvider放置在api中间件组中的路由，它提供了频率限制。这些路由都是无状态的，所以通过这些路由进入应用请求旨在通过令牌进行身份认证，并且不能访问会话状态。
|	├── console.php：文件是定义所有基于控制台命令闭包函数的地方。每个闭包函数都被绑定到一个命令实例并且允许和命令行 IO 方法进行简单的交互。尽管这些文件没有定义 HTTP 路由，但它也将基于控制台的入口点（路由）定义到应用程序中。
|	├── channels.php：用来注册你的应用支持的所有的事件广播渠道的地方。

├── storage目录：包含编译后的Blade模板、session生成的文件、缓存文件以及框架生成的其他文件。这个目录有app、framework和logs三个子目录。app目录可以用来存储应用生成的任何文件。 framework目录用来存储框架生成的文件和缓存。最后，logs目录包含应用的日志文件。
|	├── storage/app/public：存储用户生成的文件，比如公开访问的用户头像。创建一个public/storage的软链接指向这个目录。
|	├── php artisan storage:link 命令来创建此链接。
├── tests目录：自动化测试文件
├── vendor目录：Composer依赖包。

App 目录：核心代码
├── Broadcasting目录：包含应用程序的所有广播通道类
├── Console目录：包含应用程序的所有自定义 Artisan 命令
├── Events目录：默认情况下这个目录是不存在的，但你可以通过 event:generate 和 make:event Artisan 命令去创建
├── Exceptions目录：应用程序的异常处理。如果自定义异常的记录和渲染方式，修改此目录中的 Handler 类。
├── Http目录：包含你的控制器，中间件和表单请求。处理进入应用程序请求的所有逻辑几乎都放置在此目录。
├── Jobs目录：Jobs 目录安置应用程序的队列任务。
├── Listeners目录：Listeners 目录包含事件的处理类
├── Mail目录：Mail 目录包含应用程序发送邮件的所有类
├── Notifications目录：包含应用程序的发送的所有『事务』通知，比如关于应用程序中发生的事件的简单通知
├── Policies目录：Policies 目录包含应用程序的授权策略类：录包含应用程序的所有 服务提供者：Rules 目录包含应用程序的自定义验证规则对象
├── Providers目录：录包含应用程序的所有 服务提供者：Rules 目录包含应用程序的自定义验证规则对象
├── Rules目录：Rules 目录包含应用程序的自定义验证规则对象
```



```php
php artisan make:controller UserController
Controller created successfully.

```















