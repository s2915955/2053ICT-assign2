<?php
class Job extends Eloquent
{
	function user()
	{
		return $this->belongsTo('User');
  }
}
?>