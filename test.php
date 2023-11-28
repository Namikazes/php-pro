<?php

require_once __DIR__ . '/vendor/autoload.php';

interface Format
{
    public function format($string);
}
interface Delivery
{
    public function delivery($format);
}

class Raw implements Format
{
    public function format($string)
    {
        return $string;
    }
}
class WithDate implements Format
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}
class WithDateAndDetails implements Format
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}
class ByEmail implements Delivery
{
    public function delivery($format)
    {
        return d("Вывод формата ({$format}) по имейл");
    }
}
class BySms implements Delivery
{
    public function delivery($format)
    {
        return d("Вывод формата ({$format}) в смс");
    }
}
class ToConsole implements Delivery
{
    public function delivery($format)
    {
        return d("Вывод формата ({$format}) в консоль");
    }
}
class Logger
{

    private $format;
    private $delivery;

    public function __construct(Format $format, Delivery $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $formatStr = $this->format->format($string);
        $this->delivery->delivery($formatStr);
    }
}

$format = new Raw();
$delivery = new ToConsole();
$logger = new Logger($format, $delivery);
$logger->log('Emergency error! Please fix me!');


$format = new WithDate();
$delivery = new ByEmail();
$logger = new Logger($format, $delivery);
$logger->log('Emergency error!');


$format = new WithDateAndDetails();
$delivery = new BySms();
$logger = new Logger($format, $delivery);
$logger->log('Please fix me!');

$format = new WithDateAndDetails();
$delivery = new BankaiTensaZangetsu();
$logger = new Logger($format, $delivery);
$logger->log('Please fix me!');