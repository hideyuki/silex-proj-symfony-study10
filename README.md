# silex ワークショップ / symfony勉強会#10

[http://symfony.doorkeeper.jp/events/12539](http://symfony.doorkeeper.jp/events/12539)


## 写経元

[http://sleep-er.co.uk/blog/2013/Creating-a-simple-REST-application-with-Silex/](http://sleep-er.co.uk/blog/2013/Creating-a-simple-REST-application-with-Silex/)


## ローカルサーバで立ち上げる

```
$ php -S localhost:8888 -t web
```

## Silexでテストする

[Testing - Documentation - Silex - The PHP micro-framework based on Symfony2 Components](http://silex.sensiolabs.org/doc/testing.html)

上記のページを参考に、index.php の $app 部分を app.php に切り分けるようにする。

テストを実行するには以下。 phpunit.xml に tests 以下をテスト対象にしている。 

```
$ ./vendor/bin/phpunit
```

