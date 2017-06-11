<?php
namespace PageMaker;

class PageMaker
{
    const MAIL_DB_NAME = "MailDb";


    private function __construct()
    {
    }

    public static function makeWelcomePage(string $mailaddr, string $filename)
    {
        try {
            $mailprop = Database::getProperties(self::MAIL_DB_NAME);
            if (isset($mailprop[$mailaddr]) === false) {
                throw new \Exception("[error] mailaddress: {$mailaddr} is not found in DB.");
            }
            $username = $mailprop[$mailaddr];

            $writer = new HtmlWriter($filename);
            $title = "Welcome to the " . $username . "'s page!";
            $writer->title($title);
            $writer->paragraph($title);
            $writer->paragraph("I'm looking forward to hearing from you.");
            $writer->mailto($mailaddr, $username);
            $writer->close();

            echo $filename . " is created for " . $mailaddr . " (" . $username . ")" . PHP_EOL;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
