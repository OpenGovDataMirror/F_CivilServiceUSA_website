@extends('layouts.base')

@section('body')
<!-- Header-->
<header data-background="{{ asset('img/header/civil-services-bg.jpg') }}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Privacy Policy</h1>
        <h4>Last updated:&nbsp; January 1st, 2017</h4>
    </div>
</header>
<!-- Buttons-->
<section>
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-md-8 col-md-offset-2">
                <h2>Privacy Policy</h2>

                <p>This Privacy Policy explains how we collect, use, and share information we receive from you through your use of our Website.</p>

                <p>If you have any questions about this Privacy Policy, please <a href="mailto:hello@civil.services">contact us</a>.</p>

                <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">

                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" {!! trackData('View', 'Accordion Section', 'Privacy Policy Introduction') !!}>
                                    Introduction
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p><a href="https://civil.services">Civil Service USA Corp</a> ("us", "we", or "our") operates the <a href="https://civil.services">https://civil.services</a> website (the "Service").</p>

                                <p>This page informs you of our policies regarding the collection, use and disclosure of Personal Information when you use our Service.</p>

                                <p>We will not use or share your information with anyone except as described in this Privacy Policy.</p>

                                <p><strong>We use your Personal Information for providing and improving the Service. By using the Service, you agree to the collection and use of information in accordance with this policy.</strong> </p>

                                <p>Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible at <a href="/terms-of-use">https://civil.services</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="headingTwo" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Information Collection and Use') !!}>
                                    Information Collection and Use
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. </p>

                                <p>We collect this information for the purpose of providing the Service, identifying and communicating with you, responding to your requests/inquiries, and improving our services.</p>

                                <p><strong>What We Collect:</strong> &nbsp;<small>for Internal Analytics Purpose Only</small></p>

                                <ul>
                                    <li>Activity In Service &nbsp;<small>( e.g. Buttons Clicked, Menus Opened, etc. )</small></li>
                                    <li>Device Information &nbsp;<small>( e.g. Date & Time, Operating System, Hardware Details, etc. )</small></li>
                                    <li>Location Details &nbsp;<small>( e.g. City, State & Country. This is NOT tied to any personal details )</small></li>
                                </ul>

                                <p><strong>What We Do Not Collect:</strong> &nbsp;<small>and therefore cannot provide if requested</small></p>

                                <ul>
                                    <li>Name &nbsp;<small>( we do not collect or store any real names )</small></li>
                                    <li>Mailing Address &nbsp;<small>( we do not store mailing addresses entered for search results )</small></li>
                                    <li>Identifiable Data &nbsp;<small>( at no time do we connect IP address to user actions )</small></li>
                                </ul>

                                <h4>Log Data</h4>

                                <p>We collect information that your browser sends whenever you visit our Service ("Log Data"). This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages and other statistics.</p>

                                <p>In addition, we may use third party services such as Google Analytics that collect, monitor and analyze this type of information in order to increase our Service's functionality. These third party service providers have their own privacy policies addressing how they use such information.</p>

                                <p>When you access the Service by or through a mobile device, we may collect certain information automatically, including, but not limited to, the type of mobile device you use, your mobile device’s unique device ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browser you use, your location information and other statistics.</p>

                                <p>Please see the section regarding Location Information below regarding the use of your location information and your options.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="headingThree" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Location information') !!}>
                                    Location information
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We may use and store information about your location depending on the permissions you have set on your device. We use this information to provide features of our Service, to improve and customize our Service. You can enable or disable location services when you use our Service at anytime, through your mobile device settings.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading4" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Cookies') !!}>
                                    Cookies
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" role="tabpanel" aria-labelledby="heading4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Cookies are files with a small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and transferred to your device. We use cookies to collect information in order to improve our services for you.</p>

                                <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. The Help feature on most browsers provide information on how to accept cookies, disable cookies or to notify you when receiving a new cookie.</p>

                                <p>If you do not accept cookies, you may not be able to use some features of our Service and we recommend that you leave them turned on.</p>

                                <h4>DoubleClick Cookie</h4>

                                <p>Google, as a third party vendor, uses cookies to serve ads on our Service. Google's use of the DoubleClick cookie enables it and its partners to serve ads to our users based on their visit to our Service or other web sites on the Internet.</p>

                                <p>You may opt out of the use of the DoubleClick Cookie for interest-based advertising by visiting the <a href="http://www.google.com/ads/preferences/" title="Google Ads Settings" rel="nofollow">Google Ads Settings</a> web page.</p>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading5" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Service Providers') !!}>
                                    Service Providers
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" role="tabpanel" aria-labelledby="heading5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We may employ third party companies and individuals to facilitate our Service, to provide the Service on our behalf, to perform Service-related services and/or to assist us in analyzing how our Service is used.</p>

                                <p>These third parties have access to your Personal Information only to perform specific tasks on our behalf and are obligated not to disclose or use your information for any other purpose.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading6" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Compliance With Laws') !!}>
                                    Compliance With Laws
                                </a>
                            </h4>
                        </div>
                        <div id="collapse6" role="tabpanel" aria-labelledby="heading6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We will disclose collected Information ( see "Information Collection and Use" ) where required to do so by law or subpoena or if we believe that such action is necessary to comply with the law and the reasonable requests of law enforcement or to protect the security or integrity of our Service.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading7" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Security') !!}>
                                    Security
                                </a>
                            </h4>
                        </div>
                        <div id="collapse7" role="tabpanel" aria-labelledby="heading7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>The security of your Personal Information is important to us, and we strive to implement and maintain reasonable, commercially acceptable security procedures and practices appropriate to the nature of the information we store, in order to protect it from unauthorized access, destruction, use, modification, or disclosure.</p>

                                <p>However, please be aware that no method of transmission over the internet, or method of electronic storage is 100% secure and we are unable to guarantee the absolute security of the Personal Information we have collected from you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading8" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy International Transfer') !!}>
                                    International Transfer
                                </a>
                            </h4>
                        </div>
                        <div id="collapse8" role="tabpanel" aria-labelledby="heading8" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Your information ( see "Information Collection and Use" ) may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>

                                <p>If you are located outside United States and choose to provide information to us, please note that we transfer the information to United States and process it there.</p>

                                <p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading9" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Links To Other Sites') !!}>
                                    Links To Other Sites
                                </a>
                            </h4>
                        </div>
                        <div id="collapse9" role="tabpanel" aria-labelledby="heading9" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>

                                <p>We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading10" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Children\'s Privacy') !!}>
                                    Children's Privacy
                                </a>
                            </h4>
                        </div>
                        <div id="collapse10" role="tabpanel" aria-labelledby="heading10" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Only persons age 13 or older have permission to access our Service. Our Service does not address anyone under the age of 13 ("Children").</p>

                                <p>We do not knowingly collect personally identifiable information from children under 13 ( or anyone for that matter ). If you are a parent or guardian and you learn that your Children have provided us with Personal Information, please contact us. If we discover that a Child under 13 has provided us with Personal Information, we will delete such information from our servers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading11" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="collapsed" {!! trackData('View', 'Accordion Section', 'Privacy Policy Changes To This Privacy Policy') !!}>
                                    Changes To This Privacy Policy
                                </a>
                            </h4>
                        </div>
                        <div id="collapse11" role="tabpanel" aria-labelledby="heading11" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>This Privacy Policy is effective as of January 1st, 2017 and will remain in effect except with respect to any changes in its provisions in the future, which will be in effect immediately after being posted on this page.</p>

                                <p>We reserve the right to update or change our Privacy Policy at any time and you should check this Privacy Policy periodically. Your continued use of the Service after we post any modifications to the Privacy Policy on this page will constitute your acknowledgment of the modifications and your consent to abide and be bound by the modified Privacy Policy.</p>

                                <p>If we make any material changes to this Privacy Policy, we will notify you either through the email address you have provided us, or by placing a prominent notice on our website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
