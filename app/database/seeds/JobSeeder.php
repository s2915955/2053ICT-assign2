<?php
class JobSeeder extends Seeder {
  public function run()
  {
    $job = new Job;
		$job->title = 'Developer';
		$job->description = 'The Developer will be responsible for designing, building, and supporting innovative and reliable solutions that achieve our business objectives.  The Developer will primarily be providing technical solutions using requirements provided by the IT Business Analyst.';
		$job->location = 'London, Ontario';
		$job->salary = 54000;
		$job->start_date = '2014 5 26';
		$job->end_date = '2014 6 6';
		$job->user_id = 1;
		$job->save();
    $job = new Job;
		$job->title = 'Bilingual Customer Service/Technical Advisor - Japan';
		$job->description = 'As our Customer Service/Technical Advisor you will provide our resellers and end-users with world class customer experience by phone, email and live-chat.  We are looking for team players that help our customers build out their IT solutions while promoting our products.  You will also be responsible for providing product recommendations and service information';
		$job->location = 'Tokyo, Japan';
		$job->salary = 45000;
		$job->start_date = '2014 5 26';
		$job->end_date = '2014 6 27';
		$job->user_id = 1;
		$job->save();

		$job = new Job;
		$job->title = 'Technical Solution Manager';
		$job->description = 'Reporting to the Technical Practice Manager, the Technical Solutions Manager is responsible for creating client technical design documentation, managing technical delivery and developing related client relationships. The Technical Solutions Manager will provide leadership related to technologies, best practices as well as provide consultancy expertise to clients and project teams. As a member of the CreditPath team, the Manager plays a key role in planning and execution to achieve operational excellence, client satisfaction, and financial goals.';
		$job->location = 'Jacksonville, Florida';
		$job->salary = 52000;
		$job->start_date = '2014 5 5';
		$job->end_date = '2014 5 30';
		$job->user_id = 2;
		$job->save();
		$job = new Job;
		$job->title = 'Auditor';
		$job->description = 'The role of the Auditor is to review assignments worked by Recovery and Sales Departments and to close files on RepoHighway.com ensuring files are worked in accordance to set guidelines and process in compliance with provincial regulations in the repossession and liquidation of Creditor(s)’ moveable assets. The Auditor provides value based recommendations as required. Ensures Client requests are being appropriately facilitated and that services are being provided in an effective and efficient manner while meeting and exceeding our Client’s expectations. This individual will have, and continually develop, industry knowledge to ensure that Client mandates and applicable laws and procedures are being adhered to, in regards to recovery and redemptions. The Auditor will apply analytical and problem solving skills to their work, reviewing files to ensure information and related costs are accurate and supporting documentation is provided by the supply chain.';
		$job->location = 'Etobicoke, Ontario';
		$job->salary = 48000;
		$job->start_date = '2014 5 15';
		$job->end_date = '2014 6 13';
		$job->user_id = 2;
		$job->save();
  }
}
?>