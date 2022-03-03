<?php 

class InslyCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests

    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('open mail page');
        $googlePage = new \Page\GooglePage($I);
        $googlePage->open();

        $I->wantTo('input search phrase');
        $googlePage->search();

        $I->wantTo('make screenshot');
        $googlePage->makeScreenshot();
    } 
    
}