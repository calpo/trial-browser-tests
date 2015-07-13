<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('search 温泉');

$I->amOnPage('/');
$I->fillField('MT','温泉');
$I->click('#headersearch_submit');
$I->see('温泉');
