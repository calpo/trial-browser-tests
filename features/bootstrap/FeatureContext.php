<?php
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^au端末で接続する$/
     */
    public function iConnectWithAuTerminal()
    {
        $this->getSession()
        ->getDriver()
        ->getClient()
        ->setServerParameters(['HTTP_USER_AGENT' => 'KDDI-CA39 UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0']);
        $this->getSession()->setRequestHeader('x-up-subno', '10msimmsim000_vr.ezweb.ne.jp');
    }

    /**
     * @Given /^データ投入テスト$/
     */
    public function v(TableNode $table)
    {
        print_r($table);
    }

}
