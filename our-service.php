<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custom Accordion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .custom-accordion .accordion-item {
        border-radius: 12px;
        border: 1px solid #ddd;
        margin-bottom: 1rem;
        overflow: hidden;
    }

    .custom-accordion .accordion-button {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fff;
        box-shadow: none;
        padding: 1.5rem;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .custom-accordion .accordion-button::after {
        /* content: '\25BC'; */
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }

    .custom-accordion .accordion-button:not(.collapsed)::after {
        transform: rotate(180deg);
    }

    .accordion-icon {
        width: 40px;
        height: 40px;
        margin-right: 1rem;
    }

    .accordion-title {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="accordion custom-accordion" id="customAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="accordion-title">
                            <img src="https://img.icons8.com/ios-filled/50/000000/documents.png" alt="icon"
                                class="accordion-icon">
                            Gap Assessment Review
                        </div>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#customAccordion">
                    <div class="accordion-body">
                        The Digital Personal Data Protection Act (DPDPA) requires
                        organizations to be well-prepared. Our Gap Assessment Review offers a detailed
                        evaluation and expert guidance to help your business meet compliance requirements
                        with minimal disruption. Led by experienced professionals, we provide tailored
                        recommendations to help you navigate DPDPA compliance and stay ready for evolving
                        regulations. <a href="readiness-review.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion custom-accordion" id="customAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                        <div class="accordion-title">
                            <img src="https://img.icons8.com/ios-filled/50/000000/documents.png" alt="icon"
                                class="accordion-icon">
                            Consulting, Advisory and Audit
                        </div>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#customAccordion">
                    <div class="accordion-body">
                        We provide complete support to help your business meet
                        DPDPA requirements. Our expertise includes building strong privacy frameworks and
                        creating customized policies to ensure legal compliance. Regular audits are key to
                        demonstrating compliance and maintaining trust, while proactive organizational and
                        IT controls protect your business from penalties. <a
                            href="consulting-advisory-and-audit.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion custom-accordion" id="customAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="accordion-title">
                            <img src="https://img.icons8.com/ios-filled/50/000000/documents.png" alt="icon"
                                class="accordion-icon">
                            Data Protection Officer as a Service
                        </div>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#customAccordion">
                    <div class="accordion-body">
                        In today’s data-driven world, organizations face growing
                        pressure to protect personal data. The Digital Personal Data Protection Act (DPDPA)
                        requires appointing a Data Protection Officer (DPO), which goes beyond compliance—it
                        strengthens corporate governance. Our DPO as a Service turns this requirement into a
                        strategic advantage, enhancing your data protection framework and building
                        stakeholder trust. <a href="data-protection-officer-as-a-service.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion custom-accordion" id="customAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="accordion-title">
                            <img src="https://img.icons8.com/ios-filled/50/000000/documents.png" alt="icon"
                                class="accordion-icon">
                            Training Programs for DPDPA Compliance
                        </div>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#customAccordion">
                    <div class="accordion-body">
                        Our training program is customized to your organization’s
                        needs, focusing on practical aspects of DPDP Act compliance. Key topics include
                        personal data policies, grounds of processing, data principal rights, risk
                        assessments, cross-border data transfer, third party compliance, security policies,
                        and Data breach notifications, Do's and dont's for employees, assessment and
                        Employee Compliance agreement. <a href="training-programs-for-DPDPA-compliance.php">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>