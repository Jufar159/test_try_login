<?php
namespace Page;

use Codeception\Util\Locator;

class GooglePage
{
    // include url of current page
    public static $URL = '/';

    protected $actor;

    /**
     * GooglePage constructor.
     * @param $I \AcceptanceTester
     */
    public function __construct($I)
    {
        $this->actor = $I;
    }

    /**
     * @throws \Exception
     */
    public function open()
    {
        $I = $this->actor;
        $I->amOnPage(self::$URL);
        $I->waitForElementVisible('//div[@data-test-id="login-app-ready"]', 2);
    }

    /**
     * @throws \Exception
     */
    public function search()
    {
        $I = $this->actor;
        $I->seeElement('//div[@data-test-id="username-formfield"]');
        $I->fillField('input[name="username"]', 'aleksandr_example_test');
        $I->pressKey('input[type="text"]',\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible('//div[@class="login-row password"]',1);
        $I->fillField('input[name="password"]', 'pochemytak25');
        $I->pressKey('input[type="password"]',\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(5);
        $I->makeScreenshot();
    }
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
