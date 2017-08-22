<?php

$mergeURL = 'https://www.webmerge.me/merge/127067/k922fj';
$data = file_get_contents("php://input");
$data = json_decode($data, true);


if (empty($data)) {
    header("HTTP/1.1 500 SERVER ERROR");
    die("INVALID REQUEST");
}
$form = $data['form_response'];
$mergeData = array();

/*
   Questions
{
  "id": "49564898", "title": "Full Name",
  "id": "49615512", "title": "Which apps do you use?",
  "id": "49625191", "title": "What other apps do you use?",
  "id": "49564326", "title": "In an ideal world, what did you wish was automated today?",
  "id": "49564923", "title": "Company Name",
  "id": "49550384", "title": "... accounts in your support app with your CRM?",
  "id": "49550386", "title": "... support tickets with cases in your CRM?",
  "id": "49550406", "title": "... support tickets with engineering issues?",
  "id": "49550404", "title": "... opportunity info with support?",
  "id": "49550402", "title": "... payment info with support?",
  "id": "49563698", "title": "... alerts for high priority tickets?",
  "id": "49563703", "title": "...real time, 360-degree customer snapshots?",
  "id": "49563904", "title": "...churn probability prediction?",
  "id": "49563905", "title": "...upsell probability prediction?",
  "id": "49563702", "title": "...conversion probability prediction?",
  "id": "49564100", "title": "...AI-enhanced Customer Support capabilities?",
  "id": "49564161", "title": "...preemptive issue detection and resolution?",
  "id": "49564163", "title": "...chat console integration?",

}
 */
$recipies = [
'49550384' => [array(
        'Accounts in Support with CRM',
        'http://swee.me/workato/cards/sync_accounts_in_support_with_crm.jpg',
        'https://www.workato.com/blog/2017/04/kaizen-consulting-firm/?utm_source=grader&utm_medium=support&utm_content=1')],
'49550386' => [array(
        'Support Tickets with Cases in CRM',
        'http://swee.me/workato/cards/sync_support_tickets_with_cases_in_crm.jpg',
        'https://www.workato.com/blog/2017/07/kcura-seamless-itops-workflow/?utm_source=grader&utm_medium=support&utm_content=2')],
'49550406' => [array(
        'Support + Engineering tickets',
        'http://swee.me/workato/cards/sync_support_engineering_tickets.jpg',
        'https://www.workato.com/blog/2016/11/zendesk-and-jira-how-jumia-makes-communication-between-customer-service-and-engineering-seamless/?utm_source=grader&utm_medium=support&utm_content=3')],
'49550404' => [array(
        'Opportunity info with Support',
        'http://swee.me/workato/cards/sync_opportunity_info_with_support.jpg',
        'https://www.workato.com/customer_stories/toast?utm_source=grader&utm_medium=support&utm_content=4')],
'49550402' => [array(
        'Payment info into Support',
        'http://swee.me/workato/cards/sync_payment_info_into_support.jpg',
        'https://www.workato.com/blog/2017/02/automating-customer-service-streamlining-account-changes-and-devops/#.WYQPWdMrKYU?utm_source=grader&utm_medium=support&utm_content=5')],
'49563698' => [array(
        'Triaging of high priority tickets',
        'http://swee.me/workato/cards/automate_triaging_of_high_priority_tickets.jpg',
        'https://www.workato.com/blog/2016/05/6-ways-to-use-zendesk-with-slack-for-better-customer-service/#.WYQF6NMrKYU?utm_source=grader&utm_medium=support&utm_content=6')],
'49563703' => [array(
        'Reporting of all customer touchpoints',
        'http://swee.me/workato/cards/automate_reporting_of_all_customer_touchpoints.jpg',
        'https://www.workato.com/blog/2017/01/automating-customer-service-smart-onboarding-and-a-360-customer-view/#.WYQPYdMrKYU?utm_source=grader&utm_medium=support&utm_content=7')],
'49563904' => [array(
        'Conversion, Upsell, Churn probability prediction',
        'http://swee.me/workato/cards/automate_conversion_upsell_churn_probability_prediction.jpg',
        'https://www.workato.com/blog/2017/02/automating-customer-service-streamlining-account-changes-and-devops/#.WYQPWdMrKYU?utm_source=grader&utm_medium=support&utm_content=8-10')],
'49563905' => [array(
        'Conversion, Upsell, Churn probability prediction',
        'http://swee.me/workato/cards/automate_conversion_upsell_churn_probability_prediction.jpg',
        'https://www.workato.com/blog/2017/02/automating-customer-service-streamlining-account-changes-and-devops/#.WYQPWdMrKYU?utm_source=grader&utm_medium=support&utm_content=8-10')],
'49563702' => [array(
        'Conversion, Upsell, Churn probability prediction',
        'http://swee.me/workato/cards/automate_conversion_upsell_churn_probability_prediction.jpg',
        'https://www.workato.com/blog/2017/02/automating-customer-service-streamlining-account-changes-and-devops/#.WYQPWdMrKYU?utm_source=grader&utm_medium=support&utm_content=8-10')],
'49564100' => [array(
        'AI-enhanced Support capabilities & preemptive issue detection and resolution',
        'http://swee.me/workato/cards/have_ai_enhanced_support_capabilities.jpg',
        'http://blog.workato.com/2017/06/ai-optimize-business-processes-today/#.WYQDvdMrKYU?utm_source=grader&utm_medium=support&utm_content=11-12')],
'49564161' => [array(
        'AI-enhanced Support capabilities & preemptive issue detection and resolution',
        'http://swee.me/workato/cards/have_ai_enhanced_support_capabilities.jpg',
        'http://blog.workato.com/2017/06/ai-optimize-business-processes-today/#.WYQDvdMrKYU?utm_source=grader&utm_medium=support&utm_content=11-12')],
'49564163' => [array(
        'Chat console integration',
        'http://swee.me/workato/cards/have_chat_console_integration.jpg',
        'https://www.workato.com/blog/2016/05/6-ways-to-use-zendesk-with-slack-for-better-customer-service/#.WYP-qtMrKYU?utm_source=grader&utm_medium=support&utm_content=13')]
];



$mapText = array(
        '49564898' => 'name',
        '49564904' => 'email',
        '49564923' => 'company'
);
$questions = array(
        'team_efficiency' => array(
            'priotization' => [49563698, 49563703, 49563904, 49563905, 49563702, 49564163, 49550384, 49550402],
            'information_access' => [49550386, 49550406, 49563698, 49563703, 49563904, 49563905, 49563702, 49564163, 49550384,49550402],
            'human_error' => [49550386, 49550406, 49550384],
            'automation' => [49550386, 49550406, 49564163, 49550384]
        ),
        'issue_resolution' => array(
            'engineering_sync' => [49550406],
            'information_access' => [49550386, 49550406, 49563703, 49563904, 49563905, 49563702, 49564163, 49550384, 49550404, 49550402],
            'sla' => [49550406, 49563698, 49563703, 49564100, 49564161, 49564163, 49550384],
            'time_first_response' => [49563698, 49564100, 49564161, 49564163, 49550384],
            'time_first_resolution' => [49550406, 49563698, 49563904, 49563905, 49563702, 49564100, 49550402]
        ),
        'churn_upsell' => array(
            'notifications' => [49563698, 49563703, 49563904, 49563905, 49563702, 49564161, 49564163, 49550404, 49550402],
            'visibility' => [49563698, 49563703, 49563904, 49563905, 49563702, 49564161, 49564163, 49550404, 49550402],
            'churn' => [49550386, 49563698, 49563703, 49563904, 49564161, 49564163, 49550404, 49550402],
            'conversion' => [49550386, 49563698, 49563703, 49563905, 49563702, 49564161, 49564163, 49550404],
            'upsell' => [49550386, 49563698, 49563703, 49564161, 49564163, 49550404],
        ),
        'advanced_features' => array(
            'cognitive' => [49563698, 49564100, 49564161],
            'preemptive' => [49563698, 49564161]
        )
);

$commentData = array (
  'priotization' => [[5,"Ooh yes! You've got this!"], [0,"Looks like you need to prioritize this!"]],
  'information_access' => [[6,"You're on top of your customers!"], [0, "Might wanna start integrating your apps!"]],
  'human_error' => [[2,"Congrats! You just saved at least 10% of your revenue!"], [0, "Beware of bad data!"]],
  'automation' => [[3,"Hello, automation expert!"], [0, "Gotta brush up on that automation."]],
  'engineering_sync' =>[[1,"Great! You're on the right track."], [0, "You can surely sync better."]],
  'sla' => [[5,"My, my, my. You're doing well."], [0, "Uh-oh, time to make those customers happy."]],
  'time_first_response' =>[[4,"So fast, we almost couldn't keep up!"], [0, "Time to speed up your responses!"]],
  'time_first_resolution' => [[5,"Effiency at its best. We're proud."], [0, "Chop chop! Automation can definitely help you work faster!"]],
  'notifications' =>[[6,"You're in tip-top shape."], [0, "Shucks, you can do better. We know it!"]],
  'visibility' => [[6,"It's crystal clear, how well you're doing."], [0, "Don't fret, you're almost there!"]],
  'churn' =>[[5,"You're a churn-predicting champ!"], [0, "You'll be a churn-predicting champ in a jiffy!"]],
  'conversion' =>[[5,"Cha-ching!"], [0, "Just a little more to go."]],
  'upsell' => [[3,"Upselling is your middle name."], [0, "The only way is up."]],
  'cognitive' => [[3,"Well aren't you an innovator!"], [0, "You need a little more support!"]],
  'preemptive' =>[[2,"You're ahead of the curve. We likey ;)"], [0, "We want to support your support for customers."]]
);

$answerData = array();
foreach ($form['answers'] as $answer) {
    if ($answer['type'] == 'choice') {
        $answerData[$answer['field']['id']] = $answer['choice']['label'];
        if ($answer['choice']['label'] != 'Yes' && isset($recipies[$answer['field']['id']])) {
            $recipie = $recipies[$answer['field']['id']][0]; // extra array becasue we were supppoed to have multiple recipies
            $mergeData['recipies'][sha1($recipie[2])] = $recipie; // sha1 because recipies can be dupliated
        }
    } elseif ($answer['type'] == 'email') {
        $answerData[$answer['field']['id']] = $answer['email'];
    } elseif ($answer['type'] == 'text') {
        $answerData[$answer['field']['id']] = $answer['text'];
    } else {
        error_log("UNKNOWN TYPE " . $answer['type']);
    }
}

$scores = array();
foreach ($questions as $category_name => $category) {
    //initilize values
    foreach ($category as $type => $idList) {
        $scores[$category_name] = 0;
        $scores[$type] = 0;
    }
}

foreach ($questions as $category_name => $category) {
    foreach ($category as $type => $idList) {
        foreach ($idList as $id) {
            $result = $answerData[$id];
            $score = 0;
            if (empty($result)) {continue; }
            if ($result == 'Yes') {
                $score = 1;
            } elseif ($result == 'Partially') {
                $score = .5;
            }
            $scores[$category_name] += $score;
            $scores[$type] += $score;
        }
        $scores[$type] = round($scores[$type]);
        foreach ($commentData[$type] as $comment) {
            if ($scores[$type] >= $comment[0]) {
                $mergeData[$type . '_comment'] = $comment[1];
                break;
            }
        }
    }
    $scores[$category_name] = round($scores[$category_name]);
}

foreach ($mapText as $id => $key ) {
    $scores[$key] = $answerData[$id];
}

$scores['score'] = $form['calculated']['score'];
if ($scores['score'] > 75) {
    $scores['score_comment'] = "Way to go! Your team is in great shape!";
}  elseif ($scores['score'] > 50) {
    $scores['score_comment'] = "Woohoo! your CS team is pretty healthy";
}  elseif ($scores['score'] > 25) {
    $scores['score_comment'] = "Your CS team could be healthier. We've got just the right prescription";
} else {
    $scores['score_comment'] = "With some TLC, your CS team could be on the mend in no time.";
}
$mergeData = array_merge($mergeData, $scores);


echo doPost($mergeURL, http_build_query($mergeData));

function doPost($url, $data, $headers = array()) {
    $debug = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, $debug);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $response = curl_exec($ch);
    $error    = curl_error($ch);
    $http       = curl_getinfo($ch,CURLINFO_HTTP_CODE);
    curl_close($ch);
    echo "HTTP $http\n";
    return $response;
}