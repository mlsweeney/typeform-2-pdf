<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<loadfont family='futura' src='http://www.swee.me/workato/futura.ttf'>
<loadfont family='futurabold' src='http://www.swee.me/workato/futurabold.ttf'>
  
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

body {
	font-family: 'futura', sans-serif;
}

.container {
	width: 90%;
	margin: auto;
}

.header {
	font-family: "futurabold";
	font-weight: bolder;
	padding-bottom: 10px;
	border-bottom: 2px solid #000;
	margin: 0 0 40px 0;
}

.caps {
	text-transform: uppercase;
}

.mega {
	font-family: "futurabold";
	font-size: 150px;
	font-weight: bolder;
}

.xxxxl {
	font-size: 70px;
	font-weight: 500;
}

.xxxl {
	font-size: 40px;
}

.xxl {
	font-size: 34px;
}

.xl {
	font-size: 28px;
}

.l {
	font-size: 22px;
}

.m {
	font-size: 18px;
}

.bold {
	font-family: "futurabold";
	font-weight: bold;
}

.pad-10 {
	padding: 10px 0;
}

.pad-up-10 {
	padding: 10px 0 0 0;
}

.pad-up-20 {
	padding: 20px 0 0 0;
}

.pad-20 {
	padding: 20px 0;
}

.pad-30 {
	padding: 30px 0;
}

.main_score {
	width: 80%;
	margin: auto;
	text-align: center;
	padding-bottom: 20px;
	border-bottom: 3px solid #000;
	margin-bottom: 20px;
}

.label {
	color: #555;
}

.breakdown {
	text-align: center;
}

.circle_wrap {
	float: left;
	width: 40%;
	margin: 0 5%;
}

.circle {
	position: relative;
	float: left;
	width: 190px;
	height: 190px;
	padding: 13px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	-moz-border-radius: 200px;
	-webkit-border-radius: 200px;
	border-radius: 200px;
	color: #fff;
	margin: 20px;  
	vertical-align:top;
}

	.circle .label {
		color: #fff;
	}
	
	.circle img {
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
		width: 100%;
	}
	
	.circle:after, .clear {
	  content: "";
	  display: table;
	  clear: both;
	}

	.circle.green {
		float:right;
	}
	.circle.red {
		color: #fc4f52;
	}
	.circle.blue {
		float:right;
    background-color: #7ee0e9;
		color: #7ee0e9;
	}
	.circle.yellow {
		color: #fecd8d;
	}
	
	.circle .score {
		padding-top: 50px;
	}
	
	
	
	.individual_scores {
		width: 60%;
		margin: auto;
		text-align: center;
	}
	
	.individual_breakdown {
		margin: 40px 0 0 0;
		text-align: center;
	}
	
	.box {
		float: left;
		box-sizing: border-box;
		width: 40%;
		margin: 0 4% 25px 4%;  
	    vertical-align:top;
	}

	.box:after, .clear {
	  content: "";
	  display: table;
	  clear: both;
	}
	
	.recipies {
		text-align: center;
	}
	
	.card {
		width: 80%;
		display: block;
		margin: auto;
	}
	
	.each_recipe {
		margin: 0 0 50px 0;
		text-align: center;
	}
	
	.bold {
		font-weight: bold;
	}
	
	.green-text {
		color: #75db9e;
	}
	
	.blue-text {
		color: #6ed3ea;
	}
	
	.red-text {
		color: #ff4d4d;
	}
	
	.orange-text {
		color: #ffbc6c;
	}
	
	
	.color-bg {
		position: relative;
		margin-bottom: 75px;
		color: #fff;
		text-align: center;
		padding: 75px 0;
    	background: url('http://swee.me/workato/images/bg.jpg');
	}
	
	.orange-button {
    	background: url('http://swee.me/workato/images/orange_bg.jpg');
		margin: 20px auto 0 auto;
		color: #fff;
		width: 470px;
		border-radius: 4px;
		padding: 25px !important;
		font-weight: bold;
	}
	
	.end-link {
		display: block;
		border-radius: 4px;
		padding: 25px !important;
		color: #fff !important;
		text-decoration: none !important;
		font-weight: bold;
	}
</style>
</head>
<body>
<!-- PAGE 1 -->
<!-- PAGE 1 -->
<div class="container">
	<div class="main_score">
		<p class="caps xl pad-20">{$score_comment}</p>
		<p class="caps l pad-10">efficiency score</p>
		<p class="mega">
			{$score}
		</p>
	</div>
	<div class="breakdown">
		<p class="m pad-20">
			Here's a breakdown:
		</p>
		<div class="circle_wrap">
			<div class="circle green" style="height:190px;width:190px;background: url('http://swee.me/workato/images/green.jpg') no-repeat;">
				<p class="score xxl pad-10">
					{$team_efficiency }/25
				</p>
				<p class="label caps m">
					team efficiency
				</p>
			</div>
		</div>		
		<div class="circle_wrap">
			<div class="circle red" style="height:190px;width:190px;background: url('http://swee.me/workato/images/red.jpg') no-repeat;">
				<p class="score xxl pad-10">
					{$issue_resolution }/30
				</p>
				<p class="label caps m">
					issue resolution
				</p>
			</div>
		</div>		
		<div class="clear"></div>
		
		<div class="circle_wrap">
			<div class="circle blue" style="height:190px;width:190px;background: url('http://swee.me/workato/images/blue.jpg') no-repeat;">
				<p class="score xxl pad-10">
					{$churn_upsell }/40
				</p>
				<p class="label caps m">
					preemptive churn management & upsell
				</p>
			</div>
		</div>
		<div class="circle_wrap">
			<div class="circle yellow" style="height:190px;width:190px;background: url('http://swee.me/workato/images/yellow.jpg') no-repeat;">
				<p class="score xxl pad-10">
					{$advanced_features }/5
				</p>
				<p class="label caps m">
					advanced features
				</p>
			</div>
		</div>		
		<div class="clear"></div>
		
	</div>
</div>
<!-- END PAGE 1 -->
<!-- END PAGE 1 -->
<!-- PAGE 2 -->
<!-- PAGE 2 -->
<formfeed>
<div class="container">
	<div class="individual_scores">
		<img src="http://swee.me/workato/images/team_eff.jpg" alt="team_eff" width="150">
		<p class="xxxxl green-text">
			{$team_efficiency}/25
		</p>
		<p class="caps xl pad-20">team efficiency</p>
		<p class="m">For your CS team to be in tip-top shape, all your systems need to function well! Proper prioritization of issues, efficient information access, elimination of human error, and automation of daily tasks all contribute to a healthy CS team.</p>
	</div>
	<div class="individual_breakdown">
		
		<div class="box">
			<p class="score xxxl pad-20 green-text">
				{$priotization}/8
			</p>
			<p class="label l">
				Prioritization of Issues
			</p>
			<p class="desc">
				Priorizing issues correctly ensures that agents attend to urgent issues first, preventing escalation.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$priotization_comment} 
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 green-text">
				{$information_access}/20
			</p>
			<p class="label l">
				Information Access
			</p>
			<p class="desc">
				With all of a customer's info in one place, CS agents can interact with them more intelligently.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$information_access_comment}
			</p>
		</div>
		
		<div class="clear"></div>
		
		<div class="box">
			<p class="score xxxl pad-20 green-text">
				{$human_error}/3
			</p>
			<p class="label l">
				Human Error
			</p>
			<p class="desc">
				Human error creates bad data, which can cost a business between10-25% of its revenue. Efficient data integration will prevent human error from manual data transfers.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$human_error_comment}
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 green-text">
				{$automation}/4
			</p>
			<p class="label l">
				Automation of Daily Tasks
			</p>
			<p class="desc">
				Automating tedious tasks saves time and energy, so agents can focus on ticket resolution!
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$automation_comment}
			</p>
		</div>
		
		<div class="clear"></div>
		
	</div>
</div>
<!-- END PAGE 2 -->
<!-- END PAGE 2 -->

<!-- PAGE 3 -->
<!-- PAGE 3 -->
<formfeed>
<div class="container">
	<div class="individual_scores">
		<img src="http://swee.me/workato/images/iss_res.jpg" alt="team_eff" width="150">
		<p class="xxxxl red-text">
			{$issue_resolution}/30
		</p>
		<p class="caps xl pad-20">issue resolution</p>
		<p class="m">Agents deal with tickets every single day, so efficient ticket resolution is the hallmark of a healthy CS team.</p>
	</div>
	<div class="individual_breakdown">
		
		<div class="box">
			<p class="score xxxl pad-20 red-text">
				{$engineering_sync}/1
			</p>
			<p class="label l">
				Engineering Sync
			</p>
			<p class="desc">
				Customers provide valuable product feedback. Seamless syncs with Engineering will give agents visibility into development statuses.
			</p>
			<p class="label l pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$engineering_sync_comment}
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 red-text">
				{$information_access}/20
			</p>
			<p class="label l">
				Information Access
			</p>
			<p class="desc">
				With all of a customer's information in one place, CS agents can interact with them more intelligently.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$information_access_comment}
			</p>
		</div>
		
		<div class="clear"></div>
		
		<div class="box">
			<p class="score xxxl pad-20 red-text">
				{$sla}/7
			</p>
			<p class="label l">
				Meets SLA
			</p>
			<p class="desc">
				It's simple: meeting SLAs = customer satisfaction. 
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$sla_comment} 
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 red-text">
				{$time_first_response}/5
			</p>
			<p class="label l">
				Time To First Response
			</p>
			<p class="desc">
				Time to first response is the time elapsed between the time a customer submits a case and the time a customer service rep responds to the customer.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$time_first_response_comment}
			</p>
		</div>
		
		<div class="clear"></div>
		
	</div>
</div>
<!-- END PAGE 3 -->
<!-- END PAGE 3 -->

<!-- PAGE 4 -->
<!-- PAGE 4 -->
<formfeed>
<div class="container">
	<div class="individual_breakdown">
		<div class="box">
			<p class="score xxxl pad-20 red-text">
				{$time_first_resolution}/7
			</p>
			<p class="label l">
				Time To Resolution
			</p>
			<p class="desc">
				Time to resolution is the average amount of time that it takes a customer service team to resolve a case after it has been opened.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$time_first_resolution_comment}
			</p>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<!-- END PAGE 4 -->
<!-- END PAGE 4 -->

<!-- PAGE 5 -->
<!-- PAGE 5 -->
<formfeed>
<div class="container">
	<div class="individual_scores">
		<img src="http://swee.me/workato/images/pre_churn.jpg" alt="team_eff" width="150">
		<p class="xxxxl blue-text">
			{$churn_upsell}/40
		</p>
		<p class="caps xl pad-20">PREEMPTIVE CHURN MANAGEMENT & UPSELL</p>
		<p class="m">Every customer service team wants to minimize churn. Having the right information at hand allows agents to interact more intelligently with customers.</p>
	</div>
	<div class="individual_breakdown">
		
		<div class="box">
			<p class="score xxxl pad-20 blue-text">
				{$notifications}/9
			</p>
			<p class="label l">
				Notifications
			</p>
			<p class="desc">
				Never miss an event or an update - with notifications, agents can stay on top of their work.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$notifications_comment}
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 blue-text">
				{$visibility}/9
			</p>
			<p class="label l">
				Real time visibility
			</p>
			<p class="desc">
				With real time visibility, you can view the most accurate information from all your apps.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$visibility_comment}
			</p>
		</div>
		
		<div class="clear"></div>
		
		<div class="box">
			<p class="score xxxl pad-20 blue-text">
				{$churn}/8
			</p>
			<p class="label l">
				Churn probability
			</p>
			<p class="desc">
				Predicting churn probablity allows agents to provide the appropriate service to each customer.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$churn_comment}
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 blue-text">
				{$conversion}/8
			</p>
			<p class="label l">
				Conversion Probability
			</p>
			<p class="desc">
				Predicting conversion probability helps agents transition customers from free to paid.  
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				Looks like you need to prioritize this!
			</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- END PAGE 5 -->
<!-- END PAGE 5 -->

<!-- PAGE 6 -->
<!-- PAGE 6 -->
<formfeed>
<div class="container">
	<div class="header l">
		REPORT
	</div>
	<div class="individual_breakdown">
		<div class="box">
			<p class="score xxxl pad-20 blue-text">
				{$upsell}/6
			</p>
			<p class="label l">
				Upsell Probability
			</p>
			<p class="desc">
				Upselling doesn't need to be difficult -- by predicting upsell probability, you can strategically engage with customers.
			</p>
			<p class="label l pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$upsell_comment}
			</p>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<!-- END PAGE 6 -->
<!-- END PAGE 6 -->

<!-- PAGE 7 -->
<!-- PAGE 7 -->
<formfeed>
<div class="container">
	<div class="individual_scores">
		<img src="http://swee.me/workato/images/adv_fea.jpg" alt="team_eff" width="150">
		<p class="xxxxl orange-text">
			{$advanced_features}/5
		</p>
		<p class="caps xl pad-20">advanced features</p>
		<p class="m">Every customer service team wants to minimize churn. Having the right information at hand allows agents to interact more intelligently with customers.</p>
	</div>
	<div class="individual_breakdown">
		
		<div class="box">
			<p class="score xxxl pad-20 orange-text">
				{$cognitive}/3
			</p>
			<p class="label l">
				Cognitive Support
			</p>
			<p class="desc">
				Using advanced technology, like AI or machine learning, can help resolve issues more efficiently.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$cognitive_comment}
			</p>
		</div>
		
		<div class="box">
			<p class="score xxxl pad-20 orange-text">
				{$preemptive}/2
			</p>
			<p class="label l">
				Preemptive Support
			</p>
			<p class="desc">
				Predicting a customer's potential issues allows agents to build productive, more meaningful relationships with them.
			</p>
			<p class="label l  pad-up-20">
				Comments
			</p>
			<p class="comments">
				{$preemptive_comment}
			</p>
		</div>		
		
		<div class="clear"></div>
	</div>
</div>
<!-- END PAGE 7 -->
<!-- END PAGE 7 -->

<!-- PAGE 8 -->
<!-- PAGE 8 -->
<formfeed>
<div class="container">
	<div class="recipies">
		<p class="xl pad-20">BOOST YOUR SUPPORT TEAM'S EFFICIENCY</p>
		<p class="l">Based on your response, it looks like you've not automated the following workflows. Here are some example case studies explaining how other companies have successfully automated them, and how you can easily do it, too!</p>
	</div>
  	<div class="each_recipe">
  {foreach $recipies as $recipie}
<!-- 		<p class="label m pad-20">{$recipie[0]}</p> -->
	    <div class="card">
	      	<a href="{$recipie[2]}">
				<img src="{$recipie[1]}" alt="card" width="100%" />
	        </a>
		</div>
  {/foreach}
	</div>

                              
</div>
<div class="color-bg">
	<p class="xl bold">Supercharge your Support team's efficiency!</p>
	<p class="l pad-20">Automate your customer service tasks to deliver the best customer experience</p>
	<div class="orange-button xl">
		
		<a href="https://www.workato.com/users/sign_up?utm_source=grader&utm_medium=support&utm_content=signup" class="end-link">Sign up for a 30-day free trial</a>
		
	</div>
</div>
<!-- END PAGE 8 -->
<!-- END PAGE 8 -->
</body>
</html>