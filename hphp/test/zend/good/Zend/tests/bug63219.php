<?php
trait TFoo {
    public function fooMethod(){}
}

class C {
    use TFoo {
        Typo::fooMethod as tf;
    }
}
<<__EntryPoint>> function main() {
echo "okey";
}
