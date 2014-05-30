<?php
class JobsTableSeeder extends Seeder {
  public function run()
  {
    $job = new Job;
		$job->title = 'Developer';
		$job->description = 'The Developer will be responsible for designing, building, and supporting innovative and reliable solutions that achieve our business objectives.  The Developer will primarily be providing technical solutions using requirements provided by the IT Business Analyst.';
		$job->location = 'London, Ontario';
		$job->salary = 50000;
		$job->start_date = '2014 5 26';
		$job->end_date = '2014 6 6';
		$job->save();
    $job = new Job;
		$job->title = 'Bilingual Customer Service/Technical Advisor - Japan';
		$job->description = 'As our Customer Service/Technical Advisor you will provide our resellers and end-users with world class customer experience by phone, email and live-chat.  We are looking for team players that help our customers build out their IT solutions while promoting our products.  You will also be responsible for providing product recommendations and service information';
		$job->location = 'Tokyo, Japan';
		$job->salary = 45000;
		$job->start_date = '2014 5 26';
		$job->end_date = '2014 6 27';
		$job->save();
  }
}
?>