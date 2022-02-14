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
        $I->seeElement('//div[@data-test-id="login-app-ready"]');
    }

    /**
     * @throws \Exception
     */
    public function search()
    {
        $I = $this->actor;
        $I->waitForElementVisible('//div[@class="login-row username"]', 3);
        $I->fillField('input[type="text"]', 'aleksandr_example_test');
        $I->pressKey('input[type="text"]',\Facebook\WebDriver\WebDriverKeys::ENTER);
            
        $I = $this->actor;
        $I->waitForElementVisible(' //div[@class="login-row password"', 3);
        $I->fillField('input[type="text"]', 'pochemytak25');
        $I->pressKey('input[type="text"]',\Facebook\WebDriver\WebDriverKeys::ENTER);
        
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
