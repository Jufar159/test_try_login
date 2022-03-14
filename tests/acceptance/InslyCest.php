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
        $mailPage = new \Page\mailPage($I);
        $mailPage->open();

        $I->wantTo('make screenshot');
        $mailPage->search();
    } 
}