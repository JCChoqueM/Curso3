<?php
class Base {
    public function quienSoy() {
        return "Base";
    }

    public function test() {
        return 
            "<br>\$this->quienSoy(): " . $this->quienSoy() .
            "<br>self::quienSoy(): " . self::quienSoy() .
            "<br>static::quienSoy(): " . static::quienSoy();
    }

    public static function quienSoyStatic() {
        return "Base (static)";
    }

    public static function testStatic() {
        return 
            "<br>self::quienSoyStatic(): " . self::quienSoyStatic() .
            "<br>static::quienSoyStatic(): " . static::quienSoyStatic();
    }
}

class Hija extends Base {
    public function quienSoy() {
        return "Hija";
    }

    public static function quienSoyStatic() {
        return "Hija (static)";
    }
}

$base = new Base();
echo "== BASE ==" . $base->test();

$hija = new Hija();
echo "<br><br>== HIJA ==" . $hija->test();

echo "<br><br>== STATIC ==";
echo "<br>Base::testStatic():" . Base::testStatic();
echo "<br><br>Hija::testStatic():" . Hija::testStatic();
