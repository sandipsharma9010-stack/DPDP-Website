<!-- Styles -->
<style>
.circle1 img {
    position: absolute;
    top: 10%;
    left: 11%;

}

.circle2 img {
    position: absolute;
    top: 10%;
    left: 28%;
}

.circle3 img {
    position: absolute;
    top: 10%;
    left: 44%;
}

.circle4 img {
    position: absolute;
    top: 10%;
    left: 61%;
}

.circle5 img {
    position: absolute;
    top: 34%;
    left: 62%;
}

.circle6 img {
    position: absolute;
    top: 59%;
    left: 62%;
}

.circle7 img {
    position: absolute;
    top: 82%;
    left: 62%;
}

.circle8 img {
    position: absolute;
    top: 108%;
    left: 62%;
}

.circle9 img {
    position: absolute;
    bottom: -27%;
    left: 44%;
}

.circle10 img {
    position: absolute;
    bottom: -27%;
    left: 28%;
}

.circle11 img {
    position: absolute;
    bottom: -27%;
    left: 11%;
}

.circle14 img {
    position: absolute;
    top: 60%;
    left: 10%;
}

.circle15 img {
    position: absolute;
    top: 81%;
    left: 19%;
}

.circle16 img {
    position: absolute;
    top: 81%;
    left: 33%;
}

.img-360 {
    width: 500px;
}

.circle-img {
    position: relative;
}


.icon-label {
    margin-top: 52px;
    margin-left: 43px;
    font-size: 12px;
    font-weight: 400;
    color: white;
}

.icons-dpcm {
    margin-top: 48px;
    margin-left: 38px;
    font-size: 12px;
    font-weight: 400;
    color: white;

}

.icons-dpap {
    margin-top: -213px;
    margin-left: 73px;
    font-size: 12px;
    font-weight: 400;
    color: white;

}

.icons-dpia {
    margin-top: 48px;
    margin-left: 123px;
    font-size: 12px;
    font-weight: 400;
    color: white;
}

.icons-dptpa {

    margin-top: -19px;
    margin-left: 222px;
    font-size: 12px;
    font-weight: 400;
    color: white;

}


.icon-btns {
    position: absolute;
    width: 60px;
    cursor: pointer;
    z-index: 2;
}

.circle12 {
    position: absolute;
    top: 35%;
    left: 28%;
    width: 60px;
    text-align: center;
    z-index: 2;
    cursor: pointer;

}
.circle13 {
    position: absolute;
    top: 35%;
    left: 10%;
    width: 60px;
    text-align: center;
    z-index: 2;
    cursor: pointer;
}


.dpgr-icon {
    width: 50px;
}

.icon-content {
    display: none;
}

.icon-content.active {
    display: block;
    animation: fadeIn 0.5s ease-in-out;
}



/* right side div */

.dpa-card {
    max-width: 500px;
    height: 500px;
    background-color: #299BD7;
    color: white;
    border-radius: 15px;
    padding: 2rem;
    position: relative;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.dpa-card h5 {
    font-weight: 600;
    margin-bottom: 1rem;
    border-bottom: 2px solid white;
    display: inline-block;
    padding-bottom: 0.3rem;
}

.dpa-card p,
.dpa-card li {
    font-size: 0.95rem;
}

.dpa-card ul {
    padding-left: 1rem;
    list-style-type: disc;
}

.badge-icon {
    position: absolute;
    top: 1rem;
    right: 1rem;
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.badge-icon img {
    width: 22px;
    height: 22px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@media (max-width: 500px) {
    .img-360 {

        width: 100%;
        height: auto;
    }

    .circle1 img {
        top: 10%;
        left: 14%;
    }

    .circle2 img {
        top: 10%;
        left: 40%;
    }

    .circle3 img {
        top: 10%;
        left: 61%;
    }

    .circle4 img {
        top: 11%;
        left: 81%;
    }

    .circle5 img {
        top: 26%;
        left: 81%;
    }

    .circle6 img {
        top: 43%;
        left: 81%;
    }

    .circle7 img {
        top: 60%;
        left: 81%;
    }

    .circle8 img {
        top: 77%;
        left: 81%;
    }

    .circle9 img {
        top: 81%;
        left: 56%;

    }

    .circle10 img {
        top: 81%;
        left: 35%;
    }

    .circle11 img {
        top: 81%;
        left: 12%;

    }

    .circle12 img {
        top: -24px;
        left: 100%;

    }

    /* .icons-dpcm {
        margin-top: 31px;
        margin-left: 62px;
        font-size: 10px;
    } */

    .circle13 img {
        top: -24px;
        left: 94%;

    }

    .icon-label {
        margin-top: 31px;
        margin-left: 58px;
        font-size: 10px;
    }

    .circle14 img {
        top: 46%;
        left: 13%;

    }

    .icons-dpap {
        margin-top: -147px;
        margin-left: -208px;
        font-size: 10px;
    }

    .circle15 img {
        top: 61%;
        left: 25%;
    }

    .circle16 img {
        top: 61%;
        left: 44%;

    }

    .icons-dptpa {
        margin-top: -15px;
        margin-left: -8px;
        font-size: 10px;

    }


    .icons-dpia {
        margin-top: 30px;
        margin-left: -150px;
        font-size: 10px;
    }


    .icon-btns {
        width: 30px;
    }

    .badge-icon {
        width: 30px;
        height: 30px;
    }

    .dpa-card p {
        text-align: left;
        font-size:12px;
    }

    .dpa-card li {
        text-align: left;
        font-size:12px;

    }

    .dpa-card {
        padding: 1rem;
        height: auto;
        margin-bottom: 20px;

    }
    .m-none{
        display: none;
    }
}
</style>



<section>
    <div class="container my-5">
        <div class="text-center mt-5 unleashs">
            <h3>All-in-One, Stress-Free 360° Solutions Backed by<br> <span class="text-Innovative">Cutting-Edge
                    Proprietary Tools!</span></h3>
        </div>
        <div class="row">
            <!-- Left side with image and icons -->
            <div class="col-md-6">
                <div class="circle-img my-3 position-relative">
                    <img src="assets/images/360.png" alt="circle" class="img-360">

                    <!-- Icons -->
                    <div class="circle1">
                        <img src="assets/images/224.png" alt="Consent Management Framework Services icon " class="icon-btns" data-id="1">
                    </div>
                    <div class="circle2">
                        <img src="assets/images/363.png" alt="DPDP Act compliance Risk and Mitigation Services icon " class="icon-btns" data-id="2">
                    </div>
                    <div class="circle3">
                        <img src="assets/images/362.png" alt="Processing Activity Assessments Services icon" class="icon-btns" data-id="3">
                    </div>
                    <div class="circle4">
                        <img src="assets/images/364.png" alt="Policy & Privacy Notice Framework services icon" class="icon-btns" data-id="4">
                    </div>
                    <div class="circle5">
                        <img src="assets/images/229.png" alt="DPIA Methodology services icon" class="icon-btns" data-id="5">
                    </div>
                    <div class="circle6">
                        <img src="assets/images/228.png" alt="Principal Rights Management Procedure icon" class="icon-btns" data-id="6">
                    </div>
                    <div class="circle7">
                        <img src="assets/images/230.png" alt="DPDPA Employee Awareness Training Icon" class="icon-btns" data-id="7">
                    </div>
                    <div class="circle8">
                        <img src="assets/images/231.png" alt="Principal Rights Management Forms and Templates Services Icon" class="icon-btns" data-id="8">
                    </div>
                    <div class="circle9">
                        <img src="assets/images/224.1.png" alt="Employee Compliance Agreement Services Icon" class="icon-btns" data-id="9">
                    </div>
                    <div class="circle10">
                        <img src="assets/images/232.png" alt="Data Processing Agreement services icon" class="icon-btns" data-id="10">
                    </div>
                    <div class="circle11">
                        <img src="assets/images/233.1.png" alt="Third-Party Consent Sharing and Rights Fulfilment services icon" class="icon-btns" data-id="11">
                    </div>
                    <div class="circle12">
                        <img src="assets/images/DPCM.1.png" alt="Consent management platform icon" data-id="12" class="icon-btns dpgr-icon">
                        <div class="icons-dpcm m-none">DPCM</div>
                    </div>
                    <div class="circle13 icon-wrapper">
                        <img src="assets/images/DPGR.1.png" alt="Data subject rights management tool icon" data-id="13" class="icon-btns dpgr-icon">
                        <div class="icon-label m-none">DPGR</div>
                    </div>
                    <div class="circle14">
                        <img src="assets/images/DPAP.1.png" alt="DPDPA compliance training platform icon" class="icon-btns dpgr-icon" data-id="14">
                        <div class="icons-dpap m-none">DPAP</div>
                    </div>
                    <div class="circle15">
                        <img src="assets/images/DPIA.1.png" alt="Data protection impact assessment tool icon " class="icon-btns dpgr-icon" data-id="15">
                        <div class="icons-dpia m-none">DPIA</div>
                    </div>
                    <div class="circle16">
                        <img src="assets/images/DPTPA.1.png" alt="DPDPA Third party risk assessment software icon" class="icon-btns dpgr-icon" data-id="16">
                        <div class="icons-dptpa m-none">DPTPA</div>
                    </div>

                </div>
            </div>

            <!-- Right side content -->
            <div class="col-md-6">
                <div id="content-1" class="icon-content active">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/224.png" alt="Consent Management Framework Services icon2">
                        </div>
                        <h5>Consent Management Framework</h5>
                        <p>Our data protection experts will develop specific consent templates and policies tailored to
                            the Digital Personal Data Protection Act (DPDPA) for your public-facing platforms.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Respect for Privacy Rights</li>
                            <li>Enable a business to manage users' consent requests</li>
                            <li>Building Trust</li>
                            <li>Handling data principal access requests
                            </li>
                            <li>Security in your compliance goals</li>
                            <li>Uniform and standardized process</li>
                        </ul>
                    </div>
                </div>
                <div id="content-2" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/363.png" alt="DPDP Act compliance Risk and Mitigation Services icon2">
                        </div>
                        <h5>Risk and Mitigation</h5>
                        <p>We assess risks related to DPDPA non-compliance and provide a comprehensive mitigation plan
                            to address these risks.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Ensures compliance with DPDPA to avoid penalties and legal actions.</li>
                            <li>Identifies and assesses potential risks associated with data processing.</li>
                            <li>Provides a structured risk mitigation plan to prevent data breaches.</li>
                            <li>Strengthens overall data security posture through proactive risk management.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="content-3" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/362.png" alt="Icon">
                        </div>
                        <h5>Processing Activity Assessments</h5>
                        <p>We conduct a thorough analysis of your business processes to identify gaps in your privacy
                            framework and ensure alignment with DPDPA requirements.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Identifies potential data privacy gaps and risks in business operations.</li>
                            <li>Ensures that all data handling processes are documented, highlighting organizational
                                accountability.</li>
                            <li>Identify inefficiencies and redundancies in data handling and storage processes.</li>
                            <li>Aligns processing activities with DPDPA requirements, reducing non-compliance risks.
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="content-4" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/364.png" alt="Policy & Privacy Notice Framework services icon2">
                        </div>
                        <h5>Policy & Notice Framework Notice</h5>
                        <p>Our techno-legal consultants create organizational and public-facing notices that comply with
                            the Digital Personal Data Protection Act (DPDPA) framework.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Ensuring Transparency and Control</li>
                            <li>Protection Against Data Breaches</li>
                            <li>Prompting Data Privacy Protection Activities</li>
                            <li>Consent which serves as one of the primary legal bases for processing personal data.
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="content-5" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/229.png" alt="Icon">
                        </div>
                        <h5>DPIA Methodology</h5>
                        <p>We implement a structured procedure and methodology to conduct Data Protection Impact
                            Assessments (DPIAs) for identified processing activities.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Enhancing Compliance with Data Protection Laws</li>
                            <li>Identifying and Mitigating Potential Data Risks</li>
                            <li>Improving Data Management and Governance</li>
                            <li>Building trust with stakeholders
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="content-6" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/228.png" alt="Principal Rights Management Procedure icon2">
                        </div>
                        <h5>Principal Rights Management Procedure</h5>
                        <p>We will establish a process for efficiently managing and responding to principal rights
                            requests in a timely manner.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Establishes a clear process for managing data principal requests efficiently.</li>
                            <li>Ensures timely response to data principals, improving trust and transparency.</li>
                            <li>Reduces regulatory risks by maintaining compliance with rights fulfilment timelines.
                            </li>
                            <li>Streamlines internal workflows for handling rights requests.
                            </li>
                            <li>Enhances user satisfaction by facilitating smooth access to personal data rights.</li>
                        </ul>
                    </div>

                </div>

                <div id="content-7" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/230.png" alt="DPDPA Employee Awareness Training Icon2">
                        </div>
                        <h5>Employee Awareness</h5>
                        <p>We offer tailored training, assessments, certifications, and compliance agreements on DPDPA
                            for employees and key stakeholders.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Educates employees on DPDPA requirements to minimize compliance risks.</li>
                            <li>Reduces the likelihood of employee-related data breaches.</li>
                            <li>Enhances data protection culture within the organization.</li>
                            <li>Helps in implementing a sustainable privacy governance framework.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="content-8" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/231.png" alt="Principal Rights Management Forms and Templates Services Icon">
                        </div>
                        <h5>Principal Rights Management Forms and Templates</h5>
                        <p>We will create DPDPA-compliant rights request forms and templates to facilitate easy access
                            and exercise of rights by data principals.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Simplifies the process for data principals to exercise their rights under DPDPA.</li>
                            <li>Reduces administrative burden with pre-approved, compliant templates.</li>
                            <li>Ensures consistency in responding to rights requests.</li>
                            <li>Improves efficiency by standardizing documentation and workflows.
                            </li>
                            <li>Strengthens compliance readiness by ensuring correct regulatory procedures are followed.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="content-9" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/224.1.png" alt="Employee Compliance Agreement Services Icon2">
                        </div>
                        <h5>Employee Compliance Agreement</h5>
                        <p>We educate your workforce to minimize liability in the event of employee non-compliance with
                            data protection regulations.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Provides clear guidelines on data privacy obligations, reducing ambiguity.</li>
                            <li>Strengthens enforcement of data protection policies within the organization.</li>
                            <li>Acts as a preventive measure against insider threats and negligence.</li>
                            <li>Reduces liability by ensuring employees acknowledge their privacy responsibilities.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="content-10" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/232.png" alt="Data Processing Agreement services icon2">
                        </div>
                        <h5>Data Processing Agreement</h5>
                        <p>We help manage your compliance obligations with processors through vendor risk assessments
                            and customized Data Processing Agreements.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Legal compliance</li>
                            <li>DPA is tangible evidence of due diligence</li>
                            <li>Defines each party's responsibilities and liabilities in relation to the processing.
                            </li>
                            <li>Ensures processors only act on the data fiduciary's instructions and for the specified
                                business purpose.
                            </li>
                            <li>Having DPDPA compliant DPAs in place helps build trust with natural persons, regulators,
                                and business partners.</li>
                        </ul>
                    </div>
                </div>
                <div id="content-11" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/233.1.png" alt="Third-Party Consent Sharing and Rights Fulfilment services icon">
                        </div>
                        <h5>Third-Party Consent Sharing and Rights Fulfilment</h5>
                        <p>We facilitate the sharing of explicit consent and manage rights fulfilment across your
                            processors to ensure compliance.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Ensures explicit consent is obtained and shared in compliance with DPDPA.</li>
                            <li>Enhances transparency in third party data processing activities.</li>
                            <li>Reduces legal risks by documenting consent-sharing mechanisms.
                            </li>
                            <li>Streamlines the process of fulfilling rights requests across vendors.
                            </li>
                            <li>Improves data governance and accountability in managing third party relationships.</li>
                        </ul>
                    </div>
                </div>

                <div id="content-12" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/DPCM.1.png" alt="Consent management platform icon2">
                        </div>
                        <h5>Data Principal Consent Management Tool</h5>
                        <p>Our tool facilitates seamless collection, management, and tracking of data principal consents
                            while ensuring compliance with regulatory obligations.</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Real-time consent collection from websites, apps, and other platforms.</li>
                            <li>Tracks consent lifecycle with detailed logs for compliance.</li>
                            <li>Ensures previously collected data aligns with DPDPA rules.</li>
                            <li>Customizable framework aligned with DPDPA requirements.
                            </li>
                            <li>Links consent with processing activities for better governance.</li>
                            <li>Manages the full consent lifecycle, ensuring compliance.</li>
                        </ul>
                    </div>
                </div>

                <div id="content-13" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/DPGR.1.png" alt="Data subject rights management tool icon">
                        </div>
                        <h5>Data Principal Grievance Redressal Tool</h5>
                        <p>Our tool streamlines the process of managing and resolving grievances raised by data
                            principals, ensuring compliance with the Digital Personal Data Protection Act (DPDPA) and
                            enhancing transparency</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Enables data principals to easily lodge grievances through a user-friendly interface
                            </li>
                            <li>Provides a unified platform for tracking, monitoring, and managing grievances, offering
                                real-time visibility into the status and progress of each case</li>
                            <li>Guarantees that grievances are resolved within the timelines specified by the DPDPA,
                                minimizing legal and regulatory risks</li>
                            <li>Generates detailed reports and insights on grievance trends and resolution timelines,
                                helping organizations identify areas for improvement
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="content-14" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/DPAP.1.png" alt="DPDPA compliance training platform icon2">
                        </div>
                        <h5>Data Protection Awareness Program Tool</h5>
                        <p>Our tool delivers customized training, assessments, and compliance modules to enhance data
                            protection awareness across your organization, ensuring alignment with the Digital Personal
                            Data Protection Act (DPDPA).</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Tailored content addressing DPDPA principles, privacy policies, and best practices.
                                Evaluates employee understanding and provides certifications to ensure compliance
                                readiness.
                                Delivers targeted training based on employee roles, minimizing specific compliance
                                risks.
                                Monitors training completion and generates audit-ready reports for regulators.</li>
                            <li>Provides real-time dashboards to track training status and completion rates.</li>
                            <li>Equips employees with knowledge to handle data breaches and mitigate risks effectively.
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="content-15" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/DPIA.1.png" alt="Data protection impact assessment tool icon">
                        </div>
                        <h5>Data Protection Impact Assessment (DPIA) Tool</h5>
                        <p>Our tool streamlines the identification, assessment, and mitigation of data protection risks,
                            ensuring compliance with the Digital Personal Data Protection Act (DPDPA).</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Analyzes data processing activities to identify potential privacy risks.</li>
                            <li>Pre-approved templates aligned with DPDPA guidelines for consistent assessments.</li>
                            <li>Evaluates data processing risks and recommends actionable mitigation measures.</li>
                            <li>Generates detailed DPIA reports to demonstrate compliance and accountability.
                            </li>
                            <li>Facilitates seamless collaboration between teams for efficient DPIA completion.</li>
                            <li>Tracks DPIA progress and ensures timely updates for ongoing compliance.</li>
                        </ul>
                    </div>
                </div>
                <div id="content-16" class="icon-content">
                    <div class="dpa-card">
                        <div class="badge-icon">
                            <img src="assets/images/DPTPA.1.png" alt="DPDPA Third party risk assessment software icon2">
                        </div>
                        <h5>Data Protection Third party Assessment Tool</h5>
                        <p>Our tool evaluates and monitors third party vendors to ensure their data processing
                            activities comply with the Digital Personal Data Protection Act (DPDPA).</p>

                        <h6 class="mt-4">Key Benefits:</h6>
                        <ul>
                            <li>Identifies and assesses potential privacy risks posed by third party vendors.</li>
                            <li>Pre-approved, DPDPA-compliant templates tailored for vendor evaluations.</li>
                            <li>Continuously tracks vendor compliance to mitigate data protection risks.
                                Generates comprehensive reports to demonstrate due diligence and compliance.</li>
                            <li>Facilitates creation, review, and monitoring of DPAs to ensure regulatory adherence.
                            </li>
                            <li>Identifies non-compliance and triggers corrective actions for risk mitigation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const icons = document.querySelectorAll('.icon-btns');
    const contents = document.querySelectorAll('.icon-content');

    icons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            const id = this.getAttribute('data-id');

            contents.forEach(content => content.classList.remove('active'));
            document.getElementById(`content-${id}`).classList.add('active');
        });
    });
});
</script>