<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->wantTo('Sign in to VK');
        $I->amOnPage('/');
        $I->see('PHP Testing for ');
        $I->click('Docs');
        $I->click('Acceptance Tests');
        $I->seeLink('Guzzle');
        #$I->fillField('username','Test');

        #$I->see('Thanks for the registration');

    }

}
