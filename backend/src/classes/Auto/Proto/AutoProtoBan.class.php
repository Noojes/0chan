<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-26 16:53:44                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoProtoBan extends AbstractProtoClass
	{
		protected function makePropertyList()
		{
			return array(
				'id' => LightMetaProperty::fill(new LightMetaProperty(), 'id', null, 'integerIdentifier', 'Ban', 8, true, true, false, null, null),
				'user' => LightMetaProperty::fill(new LightMetaProperty(), 'user', 'user_id', 'identifier', 'User', null, false, false, false, 1, 3),
				'ipHash' => LightMetaProperty::fill(new LightMetaProperty(), 'ipHash', 'ip_hash', 'string', null, 64, false, true, false, null, null),
				'board' => LightMetaProperty::fill(new LightMetaProperty(), 'board', 'board_id', 'identifier', 'Board', null, true, false, false, 1, 3),
				'bannedBy' => LightMetaProperty::fill(new LightMetaProperty(), 'bannedBy', 'banned_by_id', 'identifier', 'User', null, true, false, false, 1, 3),
				'bannedAt' => LightMetaProperty::fill(new LightMetaProperty(), 'bannedAt', 'banned_at', 'timestamp', 'Timestamp', null, true, true, false, null, null),
				'bannedTill' => LightMetaProperty::fill(new LightMetaProperty(), 'bannedTill', 'banned_till', 'timestamp', 'Timestamp', null, true, true, false, null, null),
				'unbannedBy' => LightMetaProperty::fill(new LightMetaProperty(), 'unbannedBy', 'unbanned_by_id', 'identifier', 'User', null, false, false, false, 1, 3),
				'unbannedAt' => LightMetaProperty::fill(new LightMetaProperty(), 'unbannedAt', 'unbanned_at', 'timestamp', 'Timestamp', null, false, true, false, null, null),
				'post' => LightMetaProperty::fill(new LightMetaProperty(), 'post', 'post_id', 'identifier', 'Post', null, false, false, false, 1, 3),
				'reason' => LightMetaProperty::fill(new LightMetaProperty(), 'reason', null, 'string', null, null, true, true, false, null, null),
				'appeal' => LightMetaProperty::fill(new LightMetaProperty(), 'appeal', null, 'string', null, null, false, true, false, null, null)
			);
		}
	}
?>