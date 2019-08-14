<?php
/**
 * @link     https://github.com/mirrorgdit/php-encdec
 * @document https://github.com/mirrorgdit/php-encdec
 * @contact  mirrorgdit@163.com
 * @license  https://github.com/mirrorgdit/php-encdec/blob/master/README.md
 */
namespace mirrorgdit\encdec;
/**
 * Class Encdec
 * @package mirrorgdit\encdec
 */
class Encdec
{
    /**
     * 加密 将数字串加密
     * @param $num
     * @param int $base
     * @param bool $index
     * @return string
     */
    public static function dec2any($num, $base = 62, $index = false)
    {
        if (!$base) {
            $base = strlen($index);
        } else if (!$index) {
            $index = substr("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 0, $base);
        }
        $out = "";
        for ($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
            $a = floor($num / pow($base, $t));
            $out = $out . substr($index, $a, 1);
            $num = $num - ($a * pow($base, $t));
        }
        return $out;
    }
    /**
     * 解密
     * @param $num
     * @param int $base
     * @param bool $index
     * @return float|int
     */
    public static function any2dec($num, $base = 62, $index = false)
    {
        if (!$base) {
            $base = strlen($index);
        } else if (!$index) {
            $index = substr("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 0, $base);
        }
        $out = 0;
        $len = strlen($num) - 1;
        for ($t = 0; $t <= $len; $t++) {
            $out = $out + strpos($index, substr($num, $t, 1)) * pow($base, $len - $t);
        }
        return $out;
    }
}
