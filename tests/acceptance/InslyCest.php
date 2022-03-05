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
<<<<<<< HEAD
    }
}
=======

        $I->wantTo('make screenshot');
        $googlePage->makeScreenshot();
    } 
    
}
>>>>>>> 59c508d95995827f9aeec85e2ad1f34d9186a6ef
