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
<<<<<<< HEAD
        $I->wait(5);
        $I->makeScreenshot();
=======
>>>>>>> 59c508d95995827f9aeec85e2ad1f34d9186a6ef
    }

    public function makeScreenshot()
    {
        $I->amOnPage('/user/edit');
        $I->makeScreenshot('edit_page');
        // saved to: tests/_output/debug/edit_page.png
        $I->makeScreenshot();
        // saved to: tests/_output/debug/2017-05-26_14-24-11_4b3403665fea6.png
    }

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
