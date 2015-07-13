<?php
namespace TrialSeleniumWebdriverTest\Oshietegoo;

use \TrialSeleniumWebdriverTest\Util;

class SearchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 検索する() {
        $driver = Util::createDriver();

        // URLにアクセス
        $driver->get('https://oshiete.goo.ne.jp/');

        // MTフィールドに検索ワード入力
        $driver->findElement(\WebDriverBy::id('searchtop'))
            ->sendKeys('温泉');

        // submit
        $driver->findElement(\WebDriverBy::id('searchtop'))
            ->submit();
    }
}
