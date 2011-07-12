<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Michael Knoll <mimi@kaktusteam.de>, MKLV GbR
*  	
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Registration
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_JdavSv_Domain_Model_Registration extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * When was registration made
	 *
	 * @var DateTime $date
	 */
	protected $date;

	/**
	 * Person that made registration
	 *
	 * @var integer $attendee
	 */
	protected $attendee;

	/**
	 * If Registration is reservation only, this is the time, reservation ends
	 *
	 * @var DateTime $reservedUntil
	 */
	protected $reservedUntil;

	/**
	 * Registration is for waiting list only
	 *
	 * @var boolean $waitingList
	 */
	protected $waitingList;

	/**
	 * Sorting of registration compared to other registrations
	 *
	 * @var integer $registrationOrder
	 */
	protected $registrationOrder;

	/**
	 * Is attendee a vegetarian
	 *
	 * @var boolean $vegetarian
	 */
	protected $vegetarian;

	/**
	 * State that registration is in
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_RegistrationState> $state
	 */
	protected $state;

	/**
	 * How is the registration payed?
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_PaymentMethods> $paymentMethod
	 */
	protected $paymentMethod;

	/**
	 * Event, registration belongs to
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_Event> $event
	 */
	protected $event;

	/**
	 * The constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the kickstarter
		* You may modify the constructor of this class instead
		*/
		$this->state = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->paymentMethod = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->event = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Setter for date
	 *
	 * @param DateTime $date When was registration made
	 * @return void
	 */
	public function setDate(DateTime $date) {
		$this->date = $date;
	}

	/**
	 * Getter for date
	 *
	 * @return DateTime When was registration made
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Setter for attendee
	 *
	 * @param integer $attendee Person that made registration
	 * @return void
	 */
	public function setAttendee($attendee) {
		$this->attendee = $attendee;
	}

	/**
	 * Getter for attendee
	 *
	 * @return integer Person that made registration
	 */
	public function getAttendee() {
		return $this->attendee;
	}

	/**
	 * Setter for reservedUntil
	 *
	 * @param DateTime $reservedUntil If Registration is reservation only, this is the time, reservation ends
	 * @return void
	 */
	public function setReservedUntil(DateTime $reservedUntil) {
		$this->reservedUntil = $reservedUntil;
	}

	/**
	 * Getter for reservedUntil
	 *
	 * @return DateTime If Registration is reservation only, this is the time, reservation ends
	 */
	public function getReservedUntil() {
		return $this->reservedUntil;
	}

	/**
	 * Setter for waitingList
	 *
	 * @param boolean $waitingList Registration is for waiting list only
	 * @return void
	 */
	public function setWaitingList($waitingList) {
		$this->waitingList = $waitingList;
	}

	/**
	 * Getter for waitingList
	 *
	 * @return boolean Registration is for waiting list only
	 */
	public function getWaitingList() {
		return $this->waitingList;
	}

	/**
	 * Returns the state of waitingList
	 *
	 * @return boolean the state of waitingList
	 */
	public function isWaitingList() {
		return $this->getWaitingList();
	}

	/**
	 * Setter for registrationOrder
	 *
	 * @param integer $registrationOrder Sorting of registration compared to other registrations
	 * @return void
	 */
	public function setRegistrationOrder($registrationOrder) {
		$this->registrationOrder = $registrationOrder;
	}

	/**
	 * Getter for registrationOrder
	 *
	 * @return integer Sorting of registration compared to other registrations
	 */
	public function getRegistrationOrder() {
		return $this->registrationOrder;
	}

	/**
	 * Setter for vegetarian
	 *
	 * @param boolean $vegetarian Is attendee a vegetarian
	 * @return void
	 */
	public function setVegetarian($vegetarian) {
		$this->vegetarian = $vegetarian;
	}

	/**
	 * Getter for vegetarian
	 *
	 * @return boolean Is attendee a vegetarian
	 */
	public function getVegetarian() {
		return $this->vegetarian;
	}

	/**
	 * Returns the state of vegetarian
	 *
	 * @return boolean the state of vegetarian
	 */
	public function isVegetarian() {
		return $this->getVegetarian();
	}

	/**
	 * Setter for state
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_RegistrationState> $state State that registration is in
	 * @return void
	 */
	public function setState(Tx_Extbase_Persistence_ObjectStorage $state) {
		$this->state = $state;
	}

	/**
	 * Getter for state
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_RegistrationState> State that registration is in
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Adds a RegistrationState
	 *
	 * @param Tx_JdavSv_Domain_Model_RegistrationState the RegistrationState to be added
	 * @return void
	 */
	public function addState(Tx_JdavSv_Domain_Model_RegistrationState $state) {
		$this->state->attach($state);
	}

	/**
	 * Removes a RegistrationState
	 *
	 * @param Tx_JdavSv_Domain_Model_RegistrationState the RegistrationState to be removed
	 * @return void
	 */
	public function removeState(Tx_JdavSv_Domain_Model_RegistrationState $stateToRemove) {
		$this->state->detach($stateToRemove);
	}

	/**
	 * Setter for paymentMethod
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_PaymentMethods> $paymentMethod How is the registration payed?
	 * @return void
	 */
	public function setPaymentMethod(Tx_Extbase_Persistence_ObjectStorage $paymentMethod) {
		$this->paymentMethod = $paymentMethod;
	}

	/**
	 * Getter for paymentMethod
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_PaymentMethods> How is the registration payed?
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * Adds a PaymentMethods
	 *
	 * @param Tx_JdavSv_Domain_Model_PaymentMethods the PaymentMethods to be added
	 * @return void
	 */
	public function addPaymentMethod(Tx_JdavSv_Domain_Model_PaymentMethods $paymentMethod) {
		$this->paymentMethod->attach($paymentMethod);
	}

	/**
	 * Removes a PaymentMethods
	 *
	 * @param Tx_JdavSv_Domain_Model_PaymentMethods the PaymentMethods to be removed
	 * @return void
	 */
	public function removePaymentMethod(Tx_JdavSv_Domain_Model_PaymentMethods $paymentMethodToRemove) {
		$this->paymentMethod->detach($paymentMethodToRemove);
	}

	/**
	 * Setter for event
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_Event> $event Event, registration belongs to
	 * @return void
	 */
	public function setEvent(Tx_Extbase_Persistence_ObjectStorage $event) {
		$this->event = $event;
	}

	/**
	 * Getter for event
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_JdavSv_Domain_Model_Event> Event, registration belongs to
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Adds a Event
	 *
	 * @param Tx_JdavSv_Domain_Model_Event the Event to be added
	 * @return void
	 */
	public function addEvent(Tx_JdavSv_Domain_Model_Event $event) {
		$this->event->attach($event);
	}

	/**
	 * Removes a Event
	 *
	 * @param Tx_JdavSv_Domain_Model_Event the Event to be removed
	 * @return void
	 */
	public function removeEvent(Tx_JdavSv_Domain_Model_Event $eventToRemove) {
		$this->event->detach($eventToRemove);
	}

}
?>