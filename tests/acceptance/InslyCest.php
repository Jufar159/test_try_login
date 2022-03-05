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

        $I->wantTo('make screenshot');
        $googlePage->search();
    } 
}