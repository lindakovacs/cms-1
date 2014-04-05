<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
namespace Hook;

use Cake\Event\Event;
use Cake\Event\EventListener;

/**
 * Main Hook Listener for User plugin.
 *
 */
class UserHook implements EventListener {

/**
 * Returns a list of hooks this Hook Listener is implementing. When the class is registered
 * in an event manager, each individual method will be associated with the respective event.
 *
 * @return void
 */
	public function implementedEvents() {
		return [
			'User.beforeLogin' => 'beforeLogin',
			'User.afterLogin' => 'afterLogin',
			'User.loginFailed' => 'loginFailed',
			'User.beforeLogout' => 'beforeLogout',
			'User.afterLogout' => 'afterLogout'
		];
	}

/**
 * Event triggered before user login action.
 *
 * @param \Cake\Event\Event $event
 * @param \User\Model\Table\User $user
 * @return boolean
 */
	public function beforeLogin(Event $event, $user) {
		return true;
	}

/**
 * Event triggered after user login action.
 *
 * @param \Cake\Event\Event $event
 * @param \User\Model\Table\User $user
 * @return boolean
 */
	public function afterLogin(Event $event, $user) {
		return true;
	}

/**
 * Event triggered on login failure.
 *
 * @param \Cake\Event\Event $event
 * @param \User\Model\Table\User $user
 * @return boolean
 */
	public function loginFailed(Event $event, $user) {
		return true;
	}

/**
 * Event triggered before user logout action.
 *
 * @param \Cake\Event\Event $event
 * @param \User\Model\Table\User $user
 * @return boolean
 */
	public function beforeLogout(Event $event, $user) {
		return true;
	}

/**
 * Event triggered after user logout action.
 *
 * @param \Cake\Event\Event $event
 * @param \User\Model\Table\User $user
 * @return boolean
 */
	public function afterLogout(Event $event, $user) {
		return true;
	}

}