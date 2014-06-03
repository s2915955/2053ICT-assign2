<?php

class Job extends Eloquent
{
	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'location' => 'required',
		'salary' => 'required:min:0',
		'start_date' => 'required',
		'end_date' => 'required'
	);

	function user()
	{
		return $this->belongsTo('User');
  }
}
?>