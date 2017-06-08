<?php
require_once __DIR__ . "/Element.php";
require_once __DIR__ . "/Entry.php";
require_once __DIR__ . "/File.php";
require_once __DIR__ . "/MyDirectory.php";
require_once __DIR__ . "/Visitor.php";
require_once __DIR__ . "/ListVisitor.php";

try {
    echo "Making root entries..." . PHP_EOL;
    $rootdir = new MyDirectory("root");
    $bindir = new MyDirectory("bin");
    $tmpdir = new MyDirectory("tmp");
    $usrdir = new MyDirectory("usr");
    $rootdir->add($bindir);
    $rootdir->add($tmpdir);
    $rootdir->add($usrdir);
    $bindir->add(new File("vi", 10000));
    $bindir->add(new File("latex", 20000));
    $rootdir->accept(new ListVisitor());

    echo PHP_EOL . "Making user entries..." . PHP_EOL;
    $yuki = new MyDirectory("yuki");
    $hanako = new MyDirectory("hanako");
    $tomura = new MyDirectory("tomura");
    $usrdir->add($yuki);
    $usrdir->add($hanako);
    $usrdir->add($tomura);
    $yuki->add(new File("diary.html", 100));
    $yuki->add(new File("Composite.java", 200));
    $hanako->add(new File("memo.tex", 300));
    $tomura->add(new File("game.doc", 400));
    $tomura->add(new File("junk.mail", 500));
    $rootdir->accept(new ListVisitor());
} catch (Exception $e) {
    echo $e->getMessage();
}
