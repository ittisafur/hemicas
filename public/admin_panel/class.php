 <?php
class Apt
{
    private static $s;
    public static function g($n)
    {
        if (!self::$s)
            self::i();
        return self::$s[$n];
    }
    private static function i()
    {
        self::$s = array(
            0135,
            0135,
            0116,
            0111,
            026,
            0136,
            0122,
            012,
            00
        );
    }
}
?>
