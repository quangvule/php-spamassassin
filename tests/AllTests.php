<?php

require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__) . '/ConnectionTest.php';
require_once dirname(__FILE__) . '/LearnEnabledTest.php';
require_once dirname(__FILE__) . '/LearnDisabledTest.php';
require_once dirname(__FILE__) . '/CheckTest.php';
require_once dirname(__FILE__) . '/ProcessTest.php';
require_once dirname(__FILE__) . '/HeadersTest.php';
require_once dirname(__FILE__) . '/SymbolsTest.php';
require_once dirname(__FILE__) . '/SpamReportTest.php';
require_once dirname(__FILE__) . '/RevokeTest.php';
require_once dirname(__FILE__) . '/ReportTest.php';

class AllTests {

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHPUnit');

        $suite->addTestSuite('ConnectionTest');
        $suite->addTestSuite('LearnEnabledTest');
        $suite->addTestSuite('LearnDisabledTest');
        $suite->addTestSuite('SpamReportTest');
        $suite->addTestSuite('HeadersTest');
        $suite->addTestSuite('CheckTest');
        $suite->addTestSuite('ProcessTest');
        $suite->addTestSuite('SymbolsTest');
        $suite->addTestSuite('ReportTest');
        $suite->addTestSuite('RevokeTest');

        return $suite;
    }
}
