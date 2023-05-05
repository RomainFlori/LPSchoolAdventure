<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\I18n\FrozenTime;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    
    public $SessionCookie;
    public $Email;
    public $settingsTable;

    public function isUserConnected() {
        // $isConnected = $this->SessionCookie->read("IsAdminLogin");

        // if ($isConnected) {
        //     return true;
        // }
        // return false;
    }

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->SessionCookie = $this->getRequest()->getSession();
        // debug($this->SessionCookie->read('IsAdminLogin'));

        $settingsTable = $this->getTableLocator()->get('settings')->find('all')->toArray();
 

        $now = FrozenTime::now();
        $this->set('currentTime', $now->i18nFormat('HH:mm', 'Europe/Paris', 'fr-FR'));

        $settingsArray = [];
        foreach ($settingsTable as $settings) {
            $settingsArray = array_merge($settingsArray, [$settings['name'] => $settings['value']]);
        }
        $this->settingsTable = $settingsArray;
        $this->set('Settings', $settingsArray);
        
        foreach ($settingsTable as $settings) {
            if ($settings['name'] == 'email') {
                $this->Email = $settings['value'];

            }
        }

        $this->set('Email', $this->Email);
        $this->set(compact('settingsTable'));
    }
}
