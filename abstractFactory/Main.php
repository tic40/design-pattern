<?php
require_once __DIR__ . "/vendor/autoload.php";

use Factory\Factory;
use ListFactory\ListPage;
use ListFactory\ListFactory;
use TableFactory\TableFactory;

echo "1: ListFactory" . PHP_EOL;
echo "2: TableFactory" . PHP_EOL;
echo "input: ";

$classname = getClassNameFromInput(trim(fgets(STDIN)));
if (empty($classname)) {
    die("invalid input");
}

$factory = Factory::getFactory($classname);
$asahi = $factory->createLink("朝日新聞", "http://www.asahi.com/");
$yomiuri = $factory->createLink("読売新聞", "http://www.yomiuri.co.jp/");
$us_yahoo = $factory->createLink("Yahoo!", "http://www.yahoo.com/");
$jp_yahoo = $factory->createLink("Yahoo!Japan", "http://www.yahoo.co.jp/");
$excite = $factory->createLink("Excite", "http://www.excite.com/");
$google = $factory->createLink("Google", "http://www.google.com/");

$traynews = $factory->createTray("newspaper");
$traynews->add($asahi);
$traynews->add($yomiuri);

$trayyahoo = $factory->createTray("Yahoo!");
$trayyahoo->add($us_yahoo);
$trayyahoo->add($jp_yahoo);

$traysearch = $factory->createTray("search");
$traysearch->add($trayyahoo);
$traysearch->add($excite);
$traysearch->add($google);

$page = $factory->createPage("LinkPage", "tic40");
$page->add($traynews);
$page->add($traysearch);
$page->output();

function getClassNameFromInput(string $input): string
{
    $classname = "";
    switch (intval($input)) {
        case 1:
            $classname = "\\ListFactory\\ListFactory";
            break;
        case 2:
            $classname = "\\TableFactory\\TableFactory";
            break;
        default:
            break;
    }
    return $classname;
}
