<?php
class JobSeeder extends Seeder {
  public function run()
  {
    $user = new User;
		$user->email = 'HR@startech.com';
		$user->password = '12345';
		$user->name = 'StarTech.com';
		$user->category = 1;
		$user->phone = '1 800-265-1844';
		$user->photo = 1;
		$user->industry = 'Information & Communication Technology';
		$user->description = 'Founded in 1985 by Paul Seed and Ken Kalopsis, StarTech.com is an ISO 9001 Registered manufacturer of over 3,000 products. StarTech.com has operations in 11 different countries with over 30,000 active resellers of its products worldwide.';
		$user->save();
    $user = new User;
		$user->email = 'HR@davishenderson.com';
		$user->password = '54321';
		$user->name = 'Davis+Henderson';
		$user->category = 1;
		$user->phone = '1 888-850-6656';
		$user->photo = 1;
		$user->industry = 'Banking & Financial Services';
		$user->description = 'The D+H approach is simple: we start by understanding you first...
We understand that being able to deliver tailored and innovative solutions for our clients requires a profound appreciation of the challenges and opportunities you – and your customers – face. By understanding the details of your business, we’re able to work collaboratively with you to figure out opportunities to improve your programs and processes in ways you might never have imagined.
Whether you are looking to improve productivity and profitability, attract new clients, close deals faster, eliminate manual processes, drive consistent delivery, consolidate data, mitigate risk, or ensure compliance, we can deliver a scalable and customizable answer that will help your business deliver on its promise to your customers.
We have been serving the financial services industry since 1875, and our ability to evolve with this ever-changing market has been the foundation of our success. It’s our customer-centric philosophy – not just our individual products and programs – that accounts for the fact that most of our customers have been with us for decades.
We look forward to the opportunity to sit down with you and gain a better understanding of your business and the challenges you face. After all, that’s the first step towards addressing those challenges, and helping your business grow for tomorrow.';
		$user->save();
    $user = new User;
		$user->email = 'HR@streamcommunications.com';
		$user->password = '00000';
		$user->name = 'Stream Global Services';
		$user->category = 1;
		$user->phone = '1 513-723-7000';
		$user->photo = 1;
		$user->industry = 'Call Centre & Customer Service';
		$user->description = 'We are excited to announce that Convergys has completed its acquisition of Stream, creating a world-class customer management firm made up of 125,000 employees working in more than 150 service centers and 31 countries. Both companies are known for providing exceptional service. Now, combining the best assets of each, we offer greater expertise and services for our clients and many more career opportunities for our talented employees.
Clients and customers around the globe can now benefit from our expanded geographic footprint, language capabilities, and breadth and depth of services.
While the website for our newly expanded Convergys enterprise is under construction, please contact us directly with questions.';
		$user->save();
    $user = new User;
		$user->email = 'HR@google.com';
		$user->password = '11111';
		$user->name = 'Google';
		$user->category = 1;
		$user->phone = '0011 1 650-253-0000';
		$user->photo = 1;
		$user->industry = 'Information & Communication Technology';
		$user->description = 'Google’s mission is to organize the world’s information and make it universally accessible and useful.';
		$user->save();
  }
}
?>