# php



## ThinkPHP命名规范

- 类文件都是以.class.php为后缀（这里是指的ThinkPHP内部使用的类库文件，不代表外部加载的类库文件），使用驼峰法命名，并且首字母大写，例如 `DbMysql.class.php`；
- 类的命名空间地址和所在的路径地址一致，例如 `Home\Controller\UserController`类所在的路径应该是 `Application/Home/Controller/UserController.class.php`；
- 确保文件的命名和调用大小写一致，是由于在类Unix系统上面，对大小写是敏感的（而`ThinkPHP`在调试模式下面，即使在Windows平台也会严格检查大小写）；
- 类名和文件名一致（包括上面说的大小写一致），例如 `UserController`类的文件命名是`UserController.class.php`， InfoModel类的文件名是`InfoModel.class.php`， 并且不同的类库的类命名有一定的规范；
- 函数、配置文件等其他类库文件之外的一般是以`.php`为后缀（第三方引入的不做要求）；
- 函数命名使用小写字母和下划线的方式，例如 `get_client_ip`；
- 方法的命名使用驼峰法，并且首字母小写或者使用下划线“_”，例如 `getUserName`，`_parseType`，通常下划线开头的方法属于私有方法；
- 属性的命名使用驼峰法，并且首字母小写或者使用下划线“_”，例如 `tableName`、`_instance`，通常下划线开头的属性属于私有属性；
- 以双下划线“__”打头的函数或方法作为**魔法方法**，例如 `__call` 和 `__autoload`；
- 常量以大写字母和下划线命名，例如 `HAS_ONE`和 `MANY_TO_MANY`；
- 配置参数以大写字母和下划线命名，例如`HTML_CACHE_ON`；
- 语言变量以大写字母和下划线命名，例如`MY_LANG`，以下划线打头的语言变量通常用于系统语言变量，例如 `_CLASS_NOT_EXIST_`；
- 对变量的命名没有强制的规范，可以根据团队规范来进行；
- ThinkPHP的模板文件默认是以`.html` 为后缀（可以通过配置修改）；
- 数据表和字段采用小写加下划线方式命名，并注意字段名不要以下划线开头，例如 `think_user` 表和 `user_name`字段是正确写法，类似 `_username` 这样的数据表字段可能会被过滤。





## 开发建议

在使用ThinkPHP进行开发的过程中，我们给出如下建议，会让你的开发变得更轻松：

> - 遵循框架的命名规范和目录规范；
> - 开发过程中尽量开启调试模式，及早发现问题；
> - 多看看日志文件，查找隐患问题；
> - 养成使用I函数获取输入变量的好习惯；
> - 更新或者环境改变后遇到问题首要问题是清空Runtime目录；

## crud操作

1. https://www.kancloud.cn/manual/thinkphp/1759


#### 创建数据对象

```php
// 实例化User模型
$User = M('User');
// 根据表单提交的POST数据创建数据对象
$User->create();
```

#### 从对象创建新的数据对象
```php
// 从User数据对象创建新的Member数据对象
$User = stdClass();
$User->name = 'ThinkPHP';
$User->email = 'ThinkPHP@gmail.com';
$Member = M("Member");
$Member->create($User);
```
#### 创建完成的数据可以直接读取和修改
```php
$data['name'] = 'ThinkPHP';
$data['email'] = 'ThinkPHP@gmail.com';
$User->create($data);
// 创建完成数据对象后可以直接读取数据
echo $User->name;
echo $User->email;
// 也可以直接修改创建完成的数据
$User->name = 'onethink'; // 修改name字段数据
$User->status = 1; // 增加新的字段数据
```

#### 数据操作状态
```php
$Member = M("User");
// 指定更新数据操作状态
$Member->create($_POST,Model::MODEL_UPDATE);
```


```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```
```php

```






