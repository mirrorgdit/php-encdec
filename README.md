# php-encdec

[![Latest Stable Version](https://poser.pugx.org/mirrorgdit/php-encdec/v/stable)](https://packagist.org/packages/mirrorgdit/php-encdec)
[![Total Downloads](https://poser.pugx.org/mirrorgdit/php-encdec/downloads)](https://packagist.org/packages/mirrorgdit/php-encdec)
[![License](https://poser.pugx.org/mirrorgdit/php-encdec/license)](https://packagist.org/packages/mirrorgdit/php-encdec)

## 安装

```
composer require mirrorgdit/php-encdec
```

## Demo
```
require_once './vendor/autoload.php';

use mirrorgdit\encdec\Encdec;

$decStr = Encdec::dec2any("18612345678");
$anyStr = Encdec::any2dec($decStr);

echo "将手机号码加密后：".$decStr;
echo "<br>";
echo "将加密后的串解密：".$anyStr;
```

### 问题反馈

在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流

mirrorgdit@163.com

