<?php
namespace TrialSeleniumWebdriverTest\Oshietegoo;

use \TrialSeleniumWebdriverTest\Util;

class SmartPhoneLoginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function gooIDログインする() {
        require __DIR__ . '/../config.php';

        $driver = Util::createSmartPhoneUaDriver();

        // URLにアクセス
        $driver->get('https://login.mail.goo.ne.jp/id/authn/LoginStart');

        // unameフィールドにgooID入力
        $driver->findElement(\WebDriverBy::id('uname'))
            ->sendKeys($gooid_user);

        // passフィードにパスワード入力
        $element = $driver->findElement(\WebDriverBy::id('pass'));
        $element->sendKeys($gooid_pass);

        $element->submit();
    }
}
