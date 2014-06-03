<?php
class JobSeeder extends Seeder {
  public function run()
  {
    $job = new Job;
		$job->title = 'Developer';
		$job->description = 'The Developer will be responsible for designing, building, and supporting innovative and reliable solutions that achieve our business objectives.  The Developer will primarily be providing technical solutions using requirements provided by the IT Business Analyst.';
		$job->location = 'London, Ontario';
		$job->salary = 54000;
		$job->start_date = '2014-05-26';
		$job->end_date = '2014-06-06';
		$job->user_id = 1;
		$job->save();
    $job = new Job;
		$job->title = 'Bilingual Customer Service/Technical Advisor - Japan';
		$job->description = 'As our Customer Service/Technical Advisor you will provide our resellers and end-users with world class customer experience by phone, email and live-chat.  We are looking for team players that help our customers build out their IT solutions while promoting our products.  You will also be responsible for providing product recommendations and service information';
		$job->location = 'Tokyo, Japan';
		$job->salary = 45000;
		$job->start_date = '2014-05-26';
		$job->end_date = '2014-06-27';
		$job->user_id = 1;
		$job->save();

		$job = new Job;
		$job->title = 'Technical Solution Manager';
		$job->description = 'Reporting to the Technical Practice Manager, the Technical Solutions Manager is responsible for creating client technical design documentation, managing technical delivery and developing related client relationships. The Technical Solutions Manager will provide leadership related to technologies, best practices as well as provide consultancy expertise to clients and project teams. As a member of the CreditPath team, the Manager plays a key role in planning and execution to achieve operational excellence, client satisfaction, and financial goals.';
		$job->location = 'Jacksonville, Florida';
		$job->salary = 52000;
		$job->start_date = '2014-05-05';
		$job->end_date = '2014-05-30';
		$job->user_id = 2;
		$job->save();
		$job = new Job;
		$job->title = 'Auditor';
		$job->description = 'The role of the Auditor is to review assignments worked by Recovery and Sales Departments and to close files on RepoHighway.com ensuring files are worked in accordance to set guidelines and process in compliance with provincial regulations in the repossession and liquidation of Creditor(s)’ moveable assets. The Auditor provides value based recommendations as required. Ensures Client requests are being appropriately facilitated and that services are being provided in an effective and efficient manner while meeting and exceeding our Client’s expectations. This individual will have, and continually develop, industry knowledge to ensure that Client mandates and applicable laws and procedures are being adhered to, in regards to recovery and redemptions. The Auditor will apply analytical and problem solving skills to their work, reviewing files to ensure information and related costs are accurate and supporting documentation is provided by the supply chain.';
		$job->location = 'Etobicoke, Ontario';
		$job->salary = 48000;
		$job->start_date = '2014-05-15';
		$job->end_date = '2014-06-13';
		$job->user_id = 2;
		$job->save();
		$job = new Job;
		$job->title = 'Customer Support Professional I - French';
		$job->description = '- Apply basic working knowledge of systems, procedures, customers, products and processes to perform assigned functions with moderate reliance on others for direction. 
- Work requires some judgment but is performed primarily according to standard procedures with close supervision
- Provide responsive and competent customer support within a call center environment. Ensure that all customer issues are resolved at the first instance.
- May respond to customer inquiries by referring them to published materials, secondary sources or more senior staff. 
- Continuously work for exceptional customer experience, resulting in high customer satisfaction scores.
- Deliver and exceed customer-specified service levels for handle time.
- Learn, understand, retain and regularly update and demonstrate product/process knowledge.
- Track, document and retrieve information in call tracking database.';
		$job->location = 'Cairo, Egypt';
		$job->salary = 36000;
		$job->start_date = '2014-03-31';
		$job->end_date = '2014-04-25';
		$job->user_id = 3;
		$job->save();
		$job = new Job;
		$job->title = 'Technical Support Professional - El Salvador';
		$job->description = 'Responsible for providing first level problem resolution for all incoming service inquiries over the phone. Perform all phases of troubleshooting including interpretation, analysis, research, and resolution of technical problems (audio and video related).';
		$job->location = 'San Salvador, El Salvador';
		$job->salary = 28000;
		$job->start_date = '2014-06-02';
		$job->end_date = '2014-07-24';
		$job->user_id = 3;
		$job->save();
		$job = new Job;
		$job->title = 'Account Manager, Retail Vertical';
		$job->description = 'As an Account Manager, you will manage relationships with clients, which means you are focused, proactive, and able to multi-task in a fast-paced environment. Additionally, you are an advisor and consultant, as well as a client advocate within Google. Above all, you are responsible for hitting your targets.';
		$job->location = 'Chicago, Illinois';
		$job->salary = 50000;
		$job->start_date = '2014-05-02';
		$job->end_date = '2014-07-25';
		$job->user_id = 4;
		$job->save();
		$job = new Job;
		$job->title = 'Networking Software Engineer';
		$job->description = 'As a part of Networking Software team you will be responsible for building network management systems to manage Googles production and corporate networks. This includes monitoring, configuration, modeling, simulation, fault and performance management. These services/applications are highly distributed, providing unprecedented scalability and availability. You will get the opportunity to work on network management systems and monitoring for one of the largest networks, containing SDN, traditional routed, and traditional optical nodes. You will be solving unique challenges due to the scale of our network and volume of data.';
		$job->location = 'Mountain View, California';
		$job->salary = 60000;
		$job->start_date = '2014-06-02';
		$job->end_date = '2014-09-26';
		$job->user_id = 4;
		$job->save();
		$job->title = '3D Artist, Niantic Labs';
		$job->description = 'Seeking versatile 2D/3D artist to integrate alternate-reality and real-time interaction in geo-location apps for mobile platforms. As part of Google’s Niantic Labs, a fast-moving, multi-disciplinary team of software developers and creative professionals based in San Francisco, Mountain View, and Los Angeles, you will be responsible for creating visual concepts and low-polygon 3D models for Ingress and upcoming titles which merge the virtual with the real world. You will work closely with creative and product leads to build prototypes of visual interfaces and to create production assets. You will combine their exceptional design sense and understanding of 3D graphics with their ability to work both independently and with a team.';
		$job->location = 'San Francisco, California';
		$job->salary = 58000;
		$job->start_date = '2014-04-7';
		$job->end_date = '2014-05-31';
		$job->user_id = 4;
		$job->save();
  }
}
?>