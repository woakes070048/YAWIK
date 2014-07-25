<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright (c) 2013-2014 Cross Solution (http://cross-solution.de)
 * @license   AGPLv3
 */

/**  */ 
namespace Auth\Form;

use Core\Form\SummaryForm;
/**
 *
 *
 * @author Mathias Gelhausen <gelhausen@cross-solution.de>
 */
class UserInfo extends SummaryForm
{
    protected $wrapElements = false;
    protected $baseFieldset = 'Auth/UserInfoFieldset';
    
    public function init()
    {
        $this->setLabel(/*@translate*/ 'personal informations');
        parent::init();
    }
}