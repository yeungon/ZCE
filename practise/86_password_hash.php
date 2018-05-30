<?php

$b = md5("hello");

$a = sha1("hello");

$c = hash("sha256", "hello");

$hash = password_hash('hello', PASSWORD_DEFAULT);

echo strlen($a) + strlen($b) + strlen($c) + strlen($hash);

//https://3v4l.org/VQ7i9
