<?php
session_start();

/* -----------------------------
    1. Fixed Questions Array
-------------------------------- */
$questions = [
    1 => [
        'question' => 'Does the organisation engage in the collection, receipt, generation, or otherwise obtainment of Personal Data pertaining to Data Principals in any form whether directly, indirectly, through automated means, or via third-party sources thereby invoking the applicability of the Digital Personal Data Protection Act, 2023, and its attendant obligations?',
        'options' => [
            ['text' => 'Yes, we collect the personal data.', 'score' => 0],
            ['text' => 'No, we do not collect any personal data.', 'score' => 10],
            ['text' => 'We collect some data but not sure its personal data.', 'score' => 5]
        ],
    ],
    2 => [
        'question' => 'Is the organisation’s acquisition of consent structured to ensure that such consent is demonstrably valid, informed, uncoerced, and based on a disclosure framework that sufficiently apprises the Data Principal of the nature, scope, and implications of the proposed processing activity?',
        'options' => [
            ['text' => 'Yes, we take valid consent.', 'score' => 10],
            ['text' => 'Yes, we provide T&C ', 'score' => 5],
            ['text' => 'No, we do not take any consent.', 'score' => 0]
        ],
    ],
    3 => [
        'question' => 'Does the organisation ensure that the consent obtained meets the statutory thresholds of being free, specific in purpose, unambiguous in expression, informed through prior notice, and granular enough to avoid blanket or bundled authorisations?',
        'options' => [
            ['text' => 'Yes, consent free, specific, unambiguous, and informed', 'score' => 10],
            ['text' => 'Not Sure ', 'score' => 0],
            ['text' => 'Neither of the two options are applicable.', 'score' => 0]
        ],
    ],
    4 => [
        'question' => 'Is there an operationalised, user-centric, and technically feasible mechanism enabling Data Principals to effectuate withdrawal of consent at any juncture with such withdrawal being honoured without unreasonable delay or detriment to the Data Principal?',
        'options' => [
            ['text' => 'yes, we provide mechanism for data principal to withdrawal their consent.', 'score' => 10],
            ['text' => 'No such mechanism is implemented.', 'score' => 0]
        ],
    ],
    5 => [
        'question' => 'Does the organisation maintain and provide a Privacy Notice that is sufficiently comprehensive, readily accessible, prominently displayed, and capable of apprising Data Principals of all material aspects of data processing undertaken by the organisation?',
        'options' => [
            ['text' =>  'Yes, we serve the privacy notice as per DPDPA.', 'score' => 10],
            ['text' => 'Yes, we serve the privacy notice.', 'score' => 5],
            ['text' => 'No, privacy notice is served.', 'score' => 0]
        ],
    ],
    6 => [
        'question' => 'Is the Privacy Notice furnished to the Data Principal prior to or contemporaneously with the initiation of any data collection activity, ensuring compliance with the temporal requirements embedded within the DPDP Act?',
        'options' => [
            ['text' =>   'Yes, privacy notice is served before or at the time of data personal data collection', 'score' => 10],
            ['text' => 'Yes, Privacy notice is served.', 'score' => 5],
            ['text' => 'Neither of two options is applicable.', 'score' => 0]
        ],
    ],
    7 => [
        'question' => 'Is the Privacy Notice articulated in language that, while accurate and legally compliant, avoids technical obfuscation yet maintains clarity, precision, and interpretive consistency for the benefit of the Data Principal?',
        'options' => [
            ['text' => 'Yes, privacy notice written in clear, plain, and easily understandable language.', 'score' => 10],
            ['text' => 'No, the Privacy Notice is not written in clear, plain, or easily understandable language.', 'score' => 5],
            ['text' => 'Neither of two options is applicable.', 'score' => 0]
        ],
    ],
    8 => [
        'question' => 'Does the Privacy Notice explicitly delineate the lawful purpose of processing, the detailed and itemised categories of personal data being processed, the corresponding rights conferred upon the Data Principal, the prescribed or operational data retention period, and the designated contact particulars of the Data Protection Officer or authorised grievance-handling entity?',
        'options' => [
            ['text' => 'Yes, Notice include purpose, itemized data category, data principal rights, storage period, contact information of DPO.', 'score' => 10],
            ['text' => 'No, Notice does not include purpose, itemized data category, data principal rights, storage period, contact information of DPO.', 'score' => 0]
        ],
    ],
    9 => [
        'question' => 'Does the organisation operate an internal grievance-redressal mechanism capable of acknowledging, triaging, and resolving Data Principal grievances within the statutory period of 90 days, as mandated under Section 13 of the DPDP Act?',
        'options' => [
            ['text' => 'Yes, grievances resolved within 90 days as required under DPDP Act.', 'score' => 10],
            ['text' => 'Not timeline is defined for the grievance redressal process.', 'score' => 5],
            ['text' => 'No such grievance-redressal mechanism present.', 'score' => 0]
        ],
    ],
    10 => [
        'question' => 'Does the organisation engage in the collection or processing of the Personal Data of children defined under the DPDP Act as individuals who have not attained the age of eighteen years thus invoking enhanced compliance and fiduciary responsibilities?',
        'options' => [
            ['text' => 'Yes, children’s data are collected', 'score' => 0],
            ['text' => 'No, children’s data are collected.', 'score' => 10]
        ],
    ],
    11 => [
        'question' => 'Where child data processing occurs, does the organisation deploy a verifiable and auditable mechanism to secure parental or lawful guardian consent, ensuring the authenticity and demonstrability of such consent in line with the Act’s heightened requirements for processing of minors’ data?',
        'options' => [
            ['text' => 'Yes, we have mechanism for obtaining verifiable parental consent before processing the personal data of a child.', 'score' => 10],
            ['text' => 'NO such mechanism present for parental consent ', 'score' => 0]
        ],
    ],
    12 => [
        'question' => 'Does the organisation retain Personal Data and associated data logs for at least the statutory minimum period of one year from the date of the relevant processing activity, or longer if mandated by law, regulatory directives, or legitimate business needs consistent with the storage-limitation principle?',
        'options' => [
            ['text' => 'Yes, retain for the minimum of one year.', 'score' => 10],
            ['text' => 'Retain for infinite period.', 'score' => 0],
            ['text' => 'No retention mechanism present ', 'score' => 0]
        ],
    ],
    13 => [
        'question' => 'Does the organisation provide Data Principals with an operational, accessible, and reliable interface through which they may exercise their statutory rights such as access, correction, erasure, grievance escalation, or withdrawal of consent—as conferred under the DPDP Act?',
        'options' => [
            ['text' => 'Yes, provide easy access for Data Principals to exercise their rights under the Act', 'score' => 10],
            ['text' => 'No, Data Principals are not provided to exercise their rights under the Act.', 'score' => 0]
        ],
    ],
    14 => [
        'question' => 'Is the organisation subject to cross-border data transfer requirements as per the DPDP Act, necessitating the implementation of appropriate safeguards to prevent the unauthorized disclosure or misuse of Personal Data to entities or systems outside the territory of India?',
        'options' => [
            ['text' => 'Yes, personal information is transfer outside the territory of India.', 'score' => 0],
            ['text' => 'No, personal information is transfer outside the territory of India.', 'score' => 0]
        ],
    ],
];



# # # # # # # # # # #

if($_REQUEST['sess']===1) {
    session_destroy();
}

$totalQuestions = count($questions);

/* -----------------------------
   2. Track Current Question
-------------------------------- */
if (!isset($_SESSION['current'])) {
    $_SESSION['current'] = 1;
}

if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}

/* -----------------------------
   3. Handle Form Submission
-------------------------------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['answer'])) {
        $_SESSION['answers'][$_SESSION['current']] = (int)$_POST['answer'];
    }

    if (isset($_POST['next'])) {
        $_SESSION['current']++;
    }

    if (isset($_POST['prev'])) {
        $_SESSION['current']--;
    }
}


$current = $_SESSION['current'];
$q = $questions[$current];
$savedAnswer = $_SESSION['answers'][$current] ?? null;


if($current > $totalQuestions)
{
    $current = $totalQuestions;
    $_SESSION['current'] = $totalQuestions;
}


# # # # # # # # # # #


// print_r($_SESSION);
// print_r($_REQUEST);


?>

