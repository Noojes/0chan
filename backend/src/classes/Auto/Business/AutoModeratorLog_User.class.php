<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-29 18:26:37                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoModeratorLog_User extends ModeratorLog
	{
		protected $user = null;
		protected $userId = null;
		
		/**
		 * @return User
		**/
		public function getUser()
		{
			if (!$this->user && $this->userId) {
				$this->user = User::dao()->getById($this->userId);
			}
			
			return $this->user;
		}
		
		public function getUserId()
		{
			return $this->user
				? $this->user->getId()
				: $this->userId;
		}
		
		/**
		 * @return ModeratorLog_User
		**/
		public function setUser(User $user = null)
		{
			$this->user = $user;
			$this->userId = $user ? $user->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog_User
		**/
		public function setUserId($id = null)
		{
			$this->user = null;
			$this->userId = $id;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog_User
		**/
		public function dropUser()
		{
			$this->user = null;
			$this->userId = null;
			
			return $this;
		}
	}
?>