/*
PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.
*/

<?php 
    class Fruits {
    // __CLASS__ If used inside a class, the class name is returned.
        public function myValue() {
            return __CLASS__;
        }
    }
    $kiwi = new Fruits();
    echo $kiwi->myValue();
    echo "\n";
    // __DIR__ returns the directory of the file.
    echo __DIR__;
    echo "\n";
    // __FILE__ returns The file name including the full path.
    echo __FILE__ + "\n";
    // __FUNCTION__ If inside a function, the function name is returned.
    function test() {
        return __FUNCTION__ + "\n";
    }
    test();
    // __LINE__ returns The current line number.
    echo __LINE__ + "\n";
    //__METHOD__ 	If used inside a function that belongs to a class, both class and function name is returned
    class Test {
        public function test1() {
            echo __METHOD__ + "\n";
            return;
        }
    }
    $t = new Test();
    $t->test1();
    // __NAMESPACE__ If used inside a namespace, the name of the namespace is returned.
    function myValue() {
        return __NAMESPACE__;
    }
    echo myValue() + "\n";
    // __TRAIT__ If used inside a trait, the trait name is returned.
    trait message1 {
        public function msg1() {
            echo __TRAIT__ + "\n";
        }
    }
    class Welcome {
        use message1;
    }
    $obj = new Welcome();
    $obj->msg1();
    // ClassName::class Returns the name of the specified class and the name of the namespace, if any.
    class Fruits1 {
    public function myValue() {
        return Fruits1::class;
    }
    }
    $kiwi = new Fruits1();
    echo $kiwi->myValue();
?>