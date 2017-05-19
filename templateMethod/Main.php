<?php
require "TemplateMethod.php";

(new CharDisplay('H'))->display();
(new StringDisplay("Hello, world."))->display();
(new StringDisplay("こんにちは。"))->display();
