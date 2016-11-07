<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role, App\Models\Survey, App\Models\User, App\Models\Contact, App\Models\Post, App\Models\Tag, App\Models\PostTag, App\Models\Comment;
use App\Services\LoremIpsumGenerator;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$lipsum = new LoremIpsumGenerator;


		Survey::create([
			'title_survey' => 'The Accident Guys Questionnaire',
			'details' => 'please ensure you have read the front website pages whish gives you the rules and responsibilities of an Exempt Introducer.',
			'question1' => 'How many paid recommendations can you make to The Accident Guys in any 3 month period?',
				'q1_answer1' => '1 per month ',
				'q1_answer2' => '5 per month ',
				'q1_answer3' => '10 per month ',
				'q1_answer4' => '25 per 3 months ',
				'q1_answer5' => '50 per 3 months',
				'q1_correct' => '10 per months',


			'question2' => 'I can put up my own website to market the sevices offered by The Accident Guys to generate prospects , as long as I include all the information correctly as stated by The Accident Guys',
				'q2_answer1' => 'True Statement',
				'q2_answer2' => 'False Statement',
				'q1_correct' => 'False Statement',



			'question3' => 'When I see posts on Facebook and Twitter which are official posts by The Accident Guys, I can share these using the share function?',
				'q3_answer1' => 'True Statement',
				'q3_answer2' => 'False Statement',
				'q3_correct' => 'True Statement',



			'question4' => 'How many paid recommendations can you make to The Accident Guys and any other solicitor pr claims management firm in total in any 3 month period?',
				'q4_answer1' => '1 per month per firm',
				'q4_answer2' => '5 per month per firm',
				'q4_answer3' => '10 per month per firm',
				'q4_answer4' => '25 per 3 months per firm',
				'q4_answer5' => '50 per 3 months per firm',
				'q4_correct' => '10 per months per firm',


			'question5' => 'If I see a person walking down the street with a bandage on their arm and shoulder, I can approach them and see if they need any solicitor help if they have been injured in an accident that wasn\'t their fault, If they answer yes I can submit their details through the App to The Accident Guys',
				'q5_answer1' => 'True Statement',
				'q5_answer2' => 'False Statement',
				'q5_correct' => 'False Statement',


			'question6' => 'My Friend came to my house and told me that he had tripped over some wired in work that workmen had left stray, and had fractured his wrist , I told him about The Accident Guys service and he asker to arrange a call from them to him.',
				'q6_answer1' => 'This is acceptable and complaint',
				'q6_answer2' => 'This is not acceptable and not complaint',
				'q6_correct' => 'This is not acceptable and not complaint',


			'question7' => 'I\'ve set up a page on Facebook called \'AlanatTheAccidentGuys and inted to post information about types of accidents and injuries that people that peoples can suffer, and tell them about me and my services',
				'q7_answer1' => 'This is acceptable and complaint',
				'q7_answer2' => 'This is not acceptable and not complaint',
				'q7_correct' => 'This is not acceptable and not complaint',



			'question8' => 'My Aunty calls me on the telephone and tells me she was in a cam accident and that someone crashed into the back of her car and her car is in the garage getting repaired.
She wanted a lift to the hospital as her shoulder was really sore and she was worried. After an X-ray and 4 hour wait in A&E it was confirmed she had fractured her collar bone. On the way home the hospital we discucced the accident and car repairs and her personal injury, and I told my Aunt about The Accident Guys and my App and told her I could request a call back at a time that suits. Mu Aunt asker me to input her details which I did.',

				'q8_answer1' => 'This is not acceptable and not complaint',
				'q8_answer2' => 'This is not acceptable and not complaint',
				'q8_correct' => 'This is acceptable and  complaint',











				'status' => 'on'








		]);



		Role::create([
			'title' => 'Administrator',
			'slug' => 'admin'
		]);

		Role::create([
			'title' => 'Redactor',
			'slug' => 'redac'
		]);

		Role::create([
			'title' => 'User',
			'slug' => 'user'
		]);

		User::create([
			'username' => 'GreatAdmin',
			'email' => 'admin@la.fr',
			'password' => bcrypt('admin'),
			'seen' => true,
			'role_id' => 1,
			'confirmed' => true
		]);

		User::create([
			'username' => 'GreatRedactor',
			'email' => 'redac@la.fr',
			'password' => bcrypt('redac'),
			'seen' => true,
			'role_id' => 2,
			'valid' => true,
			'confirmed' => true
		]);

		User::create([
			'username' => 'Richard',
			'email' => 'richard@wwtag.com',
			'password' => bcrypt('Richard1234'),
			'role_id' => 3,
			'confirmed' => true
		]);

		User::create([
			'username' => 'Alan.Hoey',
			'email' => 'Alan.Hoey@wwtag.com',
			'password' => 'Alan1234',
			'role_id' => 3,
			'confirmed' => true
		]);

		Contact::create([
			'user_full_name' => 'SeifEddine BH Admin',
			'subject' => 'Test Email',
			'user_id' => '3',
			'admin_id' => '1',
			'content' => 'Lorem ipsum inceptos malesuada leo fusce tortor sociosqu semper, facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non. Vel laoreet dolor enim justo facilisis neque accumsan, in ad venenatis hac per dictumst nulla ligula, donec mollis massa porttitor ullamcorper risus. Eu platea fringilla, habitasse.'
		]);


		Tag::create([
			'tag' => 'Tag1'
		]);

		Tag::create([
			'tag' => 'Tag2'
		]);

		Tag::create([
			'tag' => 'Tag3'
		]);

		Tag::create([
			'tag' => 'Tag4'
		]);

		Post::create([
			'title' => 'Post 1',
			'slug' => 'post-1', 
			'summary' => '<img alt="" src="/filemanager/userfiles/user2/mega-champignon.png" style="float:left; height:128px; width:128px" />' . $lipsum->getContent(50),
			'content' => $lipsum->getContent(500), 
			'active' => true,
			'user_id' => 1
		]);

		Post::create([
			'title' => 'Post 2',
			'slug' => 'post-2', 
			'summary' => '<img alt="" src="/filemanager/userfiles/user2/goomba.png" style="float:left; height:128px; width:128px" />' . $lipsum->getContent(50),
			'content' => '<p>Lorem ipsum convallis ac curae non elit ultrices placerat netus metus feugiat, non conubia fusce porttitor sociosqu diam commodo metus in himenaeos, vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend porta. Malesuada ac class conubia condimentum mauris facilisis conubia quis scelerisque lacinia, tempus nullam felis fusce ac potenti netus ornare semper. Molestie iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque, imperdiet euismod scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent hac nec. Posuere suscipit sed tortor neque urna hendrerit vehicula duis litora tristique congue nec auctor felis libero, ornare habitasse nec elit felis inceptos tellus inceptos cubilia quis mattis faucibus sem non.</p>

<p>Odio fringilla class aliquam metus ipsum lorem luctus pharetra dictum, vehicula tempus in venenatis gravida ut gravida proin orci, quis sed platea mi quisque hendrerit semper hendrerit. Facilisis ante sapien faucibus ligula commodo vestibulum rutrum pretium, varius sem aliquet himenaeos dolor cursus nunc habitasse, aliquam ut curabitur ipsum luctus ut rutrum. Odio condimentum donec suscipit molestie est etiam sit rutrum dui nostra, sem aliquet conubia nullam sollicitudin rhoncus venenatis vivamus rhoncus netus, risus tortor non mauris turpis eget integer nibh dolor. Commodo venenatis ut molestie semper adipiscing amet cras, class donec sapien malesuada auctor sapien arcu inceptos, aenean consequat metus litora mattis vivamus.</p>

<pre>
<code class="language-php">protected function getUserByRecaller($recaller)
{
	if ($this-&gt;validRecaller($recaller) &amp;&amp; ! $this-&gt;tokenRetrievalAttempted)
	{
		$this-&gt;tokenRetrievalAttempted = true;

		list($id, $token) = explode("|", $recaller, 2);

		$this-&gt;viaRemember = ! is_null($user = $this-&gt;provider-&gt;retrieveByToken($id, $token));

		return $user;
	}
}</code></pre>

<p>Feugiat arcu adipiscing mauris primis ante ullamcorper ad nisi, lobortis arcu per orci malesuada blandit metus tortor, urna turpis consectetur porttitor egestas sed eleifend. Eget tincidunt pharetra varius tincidunt morbi malesuada elementum mi torquent mollis, eu lobortis curae purus amet vivamus amet nulla torquent, nibh eu diam aliquam pretium donec aliquam tempus lacus. Tempus feugiat lectus cras non velit mollis sit et integer, egestas habitant auctor integer sem at nam massa himenaeos, netus vel dapibus nibh malesuada leo fusce tortor. Sociosqu semper facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non vel, laoreet dolor enim justo facilisis neque accumsan in.</p>

<p>Ad venenatis hac per dictumst nulla ligula donec, mollis massa porttitor ullamcorper risus eu platea, fringilla habitasse suscipit pellentesque donec est. Habitant vehicula tempor ultrices placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit malesuada lacus. Viverra sagittis sit ornare orci augue nullam adipiscing pulvinar libero aliquam vestibulum platea cursus pellentesque leo dui lectus, curabitur euismod ad erat curae non elit ultrices placerat netus metus feugiat non conubia fusce porttitor. Sociosqu diam commodo metus in himenaeos vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend, porta malesuada ac class conubia condimentum mauris facilisis conubia quis scelerisque lacinia.</p>

<p>Tempus nullam felis fusce ac potenti netus ornare semper molestie iaculis, fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod. Scelerisque torquent curae rhoncus sollicitudin tortor placerat aptent hac, nec posuere suscipit sed tortor neque urna hendrerit, vehicula duis litora tristique congue nec auctor. Felis libero ornare habitasse nec elit felis, inceptos tellus inceptos cubilia quis mattis, faucibus sem non odio fringilla. Class aliquam metus ipsum lorem luctus pharetra dictum vehicula, tempus in venenatis gravida ut gravida proin orci, quis sed platea mi quisque hendrerit semper.</p>
', 
			'active' => true,
			'user_id' => 2
		]);

		Post::create([
			'title' => 'Post 3',
			'slug' => 'post-3', 
			'summary' => '<img alt="" src="/filemanager/userfiles/user2/rouge-shell.png" style="float:left; height:128px; width:128px" />' . $lipsum->getContent(50),
			'content' => $lipsum->getContent(500), 
			'active' => true,
			'user_id' => 2
		]);

		Post::create([
			'title' => 'Post 4',
			'slug' => 'post-4', 
			'summary' => '<img alt="" src="/filemanager/userfiles/user2/rouge-shyguy.png" style="float:left; height:128px; width:128px" />' . $lipsum->getContent(50),
			'content' => $lipsum->getContent(500), 
			'active' => true,
			'user_id' => 2
		]);

		PostTag::create([
			'post_id' => 1,
			'tag_id' => 1
		]);

		PostTag::create([
			'post_id' => 1,
			'tag_id' => 2
		]);

		PostTag::create([
			'post_id' => 2,
			'tag_id' => 1
		]);

		PostTag::create([
			'post_id' => 2,
			'tag_id' => 2
		]);

		PostTag::create([
			'post_id' => 2,
			'tag_id' => 3
		]);

		PostTag::create([
			'post_id' => 3,
			'tag_id' => 1
		]);

		PostTag::create([
			'post_id' => 3,
			'tag_id' => 2
		]);

		PostTag::create([
			'post_id' => 3,
			'tag_id' => 4
		]);

		Comment::create([
			'content' => $lipsum->getContent(200), 
			'user_id' => 2,
			'post_id' => 1
		]);

		Comment::create([
			'content' => $lipsum->getContent(200), 
			'user_id' => 2,
			'post_id' => 2
		]);

		Comment::create([
			'content' => $lipsum->getContent(200), 
			'user_id' => 3,
			'post_id' => 1
		]);

	}

}
