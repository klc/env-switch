# env-switch

## How To Install

`composer require klc/env-switch`

## How To Use

example :

.env

```
DEFAULT_ENV=foo.env
HELLO=ENV
```

foo.env

```
HELLO=FOO
```

bar.env

```
HELLO=BAR
```
code

```php
        dump(env("HELLO"));
        envSwitch('bar.env');
        dump(env("HELLO"));
        envSwitch('.env');
        dd(env("HELLO"));
```

output

```
FOO
BAR
ENV
```

