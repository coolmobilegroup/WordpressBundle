<?php

namespace Hypebeast\WordpressBundle\Tests\Security\Authentication\Token;

use Hypebeast\WordpressBundle\Security\Authentication\Token\WordpressUserToken;

/**
 * Test class for WordpressUserToken.
 * Generated by PHPUnit on 2011-10-02 at 17:54:17.
 * 
 * @covers Hypebeast\WordpressBundle\Security\Authentication\Token\WordpressUserToken
 */
class WordpressUserTokenTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var WordpressUserToken
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new WordpressUserToken;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @expectedException \LogicException
     */
    public function testSetAuthenticatedToTrueThrowsException() {
        $this->object->setAuthenticated(true);
    }
    
    public function testConstructorWithRolesMarksTokenAsAuthenticated() {
        $token = new WordpressUserToken(array('mock role'));
        $this->assertTrue($token->isAuthenticated());
    }
    
    public function testConstructorWithoutRolesMarksTokenAsUnauthenticated() {
        $this->assertFalse($this->object->isAuthenticated());
    }

}

?>
