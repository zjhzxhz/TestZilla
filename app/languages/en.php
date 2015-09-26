<?php

/**
 * Localization Serivce for English.
 * @var array
 */
$messages = array(
    # layouts/layout.phtml
    'layout.home'                                       => 'Home',
    'layout.products'                                   => 'Products',
    'layout.contests'                                   => 'Contests',
    'layout.sign-in'                                    => 'Sign in',
    'layout.sign-in-as'                                 => 'Signed in as %username%',
    'layout.dashboard'                                  => 'Dashboard',
    'layout.profile'                                    => 'Your Profile',
    'layout.sign-out'                                   => 'Sign out',
    'layout.terms-and-privacy'                          => 'Terms and Privacy',
    'layout.terms'                                      => 'Terms of Use',
    'layout.privacy'                                    => 'Privacy &amp; Cookie',
    'layout.internationalization'                       => 'Change Language',
    'layout.contact-us'                                 => 'Contact Us',
    'layout.stay-connected'                             => 'Stay Connected',
    'layout.copyright'                                  => 'Copyright',
    'layout.all-rights-reserved'                        => 'All rights reserved',
    'layout.unknown-error'                              => 'Unknown error occurred.',
    # default/index.phtml
    'default.index.title'                               => 'Home',
    'default.index.slogan'                              => 'Test software<br>better, together.',
    'default.index.username'                            => 'Username',
    'default.index.email'                               => 'Email',
    'default.index.password'                            => 'Password',
    'default.index.sign-up'                             => 'Create Account',
    'default.index.agreen-terms'                        => 'By clicking "Create Account", you agree to our <a href="%termsUrl%">terms of service</a> and <a href="%privacyUrl%">privacy policy</a>.',
    'default.index.partner-of-netease'                  => 'Partner of Netease MOOC',
    'default.index.software-testing-technology'         => 'Kerry Zhu - Software Testing Technology and Practice',
    'default.index.learn-more'                          => 'Learn More',
    'default.index.new-version-of-testzilla'            => 'New Version of TestZilla Available!',
    'default.index.better-experience'                   => 'Changes for Better Experience',
    'default.index.change-log'                          => 'Change Log',
    'default.index.what-is-testzilla'                   => 'What&acute;s TestZilla?',
    'default.index.best-tool'                           => 'Best Tool for Testing',
    'default.index.voice-from-users'                    => 'Voice from Users',
    'default.index.easier-testing'                      => 'Testing Never Becomes Easier',
    # accounts/signIn.phtml
    'accounts.signin.title'                             => 'Sign In',
    'accounts.signin.sign-in'                           => 'Sign In',
    'accounts.signin.incorrect-password'                => 'Incorrect username or password.',
    'accounts.signin.sign-out'                          => 'You are now logged out.',
    'accounts.signin.username'                          => 'Username or Email',
    'accounts.signin.password'                          => 'Password',
    'accounts.signin.forgot-password'                   => 'Forgot Password?',
    'accounts.signin.remember-me'                       => 'Remember Me',
    'accounts.signin.dont-have-account'                 => 'Don&acute;t have an account?',
    'accounts.signin.create-account'                    => 'Create Account',
    'accounts.signin.please-wait'                       => 'Please wait...',
    # accounts/signUp.phtml
    'accounts.signup.title'                             => 'Sign Up',
    'accounts.signup.sign-up'                           => 'Sign Up',
    'accounts.signup.username'                          => 'Username',
    'accounts.signup.email'                             => 'Email',
    'accounts.signup.password'                          => 'Password',
    'accounts.signup.already-have-account'              => 'Already have an account?',
    'accounts.signup.sign-in'                           => 'Sign In',
    'accounts.signup.please-wait'                       => 'Please wait...',
    'accounts.signup.invalid-token'                     => 'Invalid token.',
    'accounts.signup.username-empty'                    => 'You can&acute;t leave Username empty.',
    'accounts.signup.username-length-illegal'           => 'The length of Username must between 6 and 16 characters.',
    'accounts.signup.username-beginning-illegal'        => 'Username must start with a letter(a-z).',
    'accounts.signup.username-character-illegal'        => 'Username can only contain letters(a-z), numbers, and underlines(_).',
    'accounts.signup.username-taken'                    => 'Someone has taken that username.',
    'accounts.signup.email-empty'                       => 'You can&acute;t leave Email empty.',
    'accounts.signup-email-illegal'                     => 'The email address seems invalid.',
    'accounts.signup.email-taken'                       => 'Someone has taken that email address.',
    'accounts.signup.password-empty'                    => 'You can&acute;t leave Password empty.',
    'accounts.signup.password-illegal'                  => 'The length of Password must between 6 and 16 characters.',
    # accounts/user.phtml
    'accounts.user.joined-on'                           => 'Joined on',
    'accounts.user.products'                            => 'Products',
    'accounts.user.issues'                              => 'Issues',
    'accounts.user.about-me'                            => 'About Me',
    'accounts.user.issue-name'                          => 'Issue Name',
    'accounts.user.issue-category'                      => 'Issue Category',
    'accounts.user.issue-status'                        => 'Issue Status',
    'accounts.user.more-issues'                         => 'More Issues...',
    'accounts.user.no-issues'                           => 'No Issues submitted by the user.',
    # accounts/reset-password.phtml
    'accounts.reset-password.title'                     => 'Reset Password',
    'accounts.reset-password.reset-password'            => 'Reset Password',
    'accounts.reset-password.new-password'              => 'New Password',
    'accounts.reset-password.confirm-new-password'      => 'Confirm New Password',
    'accounts.reset-password.username'                  => 'Username',
    'accounts.reset-password.email'                     => 'Email',
    'accounts.reset-password.send-verification-email'   => 'Send Verification Email',
    'accounts.reset-password.please-wait'               => 'Please wait...',
    'accounts.reset-password.password-resetted'         => 'Your password has been resetted.',
    'accounts.reset-password.invalid-email-token'       => 'The token of resetting password seems invalid.',
    'accounts.reset-password.new-password-empty'        => 'You can&acute;t leave New Password empty.',
    'accounts.reset-password.new-password-illegal'      => 'The length of password must between 6 and 16 characters.',
    'accounts.reset-password.new-password-not-matched'  => 'New passwords don&acute;t match.',
    'accounts.reset-password.mail-sent'                 => 'An email with password reset instructions has been sent to your email address.',
    'accounts.reset-password.invalid-csrf-token'        => 'Invalid token.',
    'accounts.reset-password.user-not-exists'           => 'Incorrect username or email.',
    # dashboard/sidebar
    'dashboard.sidebar.dashboard'                       => 'Dashboard',
    'dashboard.sidebar.profile'                         => 'Profile',
    'dashboard.sidebar.my-products'                     => 'My Products',
    'dashboard.sidebar.my-issues'                       => 'My Issues',
    'dashboard.sidebar-received-issues'                 => 'Received Issues',
    'dashboard.sidebar-submitted-issues'                => 'Submitted Issues',
    # dashboard/index.phtml
    'dashboard.index.title'                             => 'Dashboard',
    # dashboard/profile.phtml
    'dashboard.profile.title'                           => 'Profile',
    'dashboard.profile.change-password'                 => 'Change Password',
    'dashboard.profile.password-changed'                => 'You&acute;ve changed your password.',
    'dashboard.profile.old-password'                    => 'Old Password',
    'dashboard.profile.new-password'                    => 'New Password',
    'dashboard.profile.confirm-new-password'            => 'Confirm New Password',
    'dashboard.profile.profile'                         => 'Profile',
    'dashboard.profile.preview'                         => 'Preview',
    'dashboard.profile.profile-changed'                 => 'You&acute;ve changed your profile.',
    'dashboard.profile.email'                           => 'Email',
    'dashboard.profile.location'                        => 'Location',
    'dashboard.profile.location-example'                => 'New York, USA',
    'dashboard.profile.website'                         => 'Website',
    'dashboard.profile.social-links'                    => 'Social Links',
    'dashboard.profile.new-social-link'                 => 'New Social Link',
    'dashboard.profile.no-social-links'                 => 'No social links.',
    'dashboard.profile.about-me'                        => 'About Me',
    'dashboard.profile.introduce-yourself'              => 'Write something about yourself.',
    'dashboard.profile.update-profile'                  => 'Update Profile',
    'dashboard.profile.please-wait'                     => 'Please wait...',
    'dashboard.profile.old-password-incorrect'          => 'Old password is incorrect.',
    'dashboard.profile.new-password-empty'              => 'You can&acute;t leave New Password empty.',
    'dashboard.profile.new-password-illegal'            => 'The length of password must between 6 and 16 characters.',
    'dashboard.profile.new-password-not-matched'        => 'New passwords don&acute;t match.',
    'dashboard.profile.service-name'                    => 'Service Name',
    'dashboard.profile.email-empty'                     => 'You can&acute;t leave Email empty.',
    'dashboard.profile.email-illegal'                   => 'The email seems invalid.',
    'dashboard.profile.email-existing'                  => 'Someone already has that email address.',
    'dashboard.profile.location-illegal'                => 'The length of Location CANNOT exceed 128 characters.',
    'dashboard.profile.website-legal'                   => 'The url of website seems invalid.',
    'dashboard.profile.about-me-legal'                  => 'The length of About Me CANNOT exceed 256 characters.',
    # dashboard/products.phtml
    'dashboard.products.title'                          => 'Products',
    'dashboard.products.my-products'                    => 'My Products',
    'dashboard.products.no-products'                    => 'No Products.',
    # dashboard/receivedIssues.phtml + submittedIssues.phtml
    'dashboard.issues.quick-search'                     => 'Quick Search',
    'dashboard.issues.filter'                           => 'Filter',
    'dashboard.issues.product-name'                     => 'Product Name',
    'dashboard.issues.issue-category'                   => 'Issue Category',
    'dashboard.issues.issue-status'                     => 'Issue Status',
    # dashboard/receivedIssues.phtml
    'dashboard.received-issues.title'                   => 'Received Issues',
    # dashboard/submittedIssues.phtml
    'dashboard.submitted-issues.title'                  => 'Submitted Issues',
    'dashboard.submitted-issues.no-issues'              => 'No submitted issues.',
    # products/index.phtml
    'products.index.title'                              => 'Products',
    'products.index.search'                             => 'Search Products',
    'products.index.keyword'                            => 'Keyword',
    'products.index.categories'                         => 'Product Categories',
    'products.index.all-categories'                     => 'All Categories',
    'products.index.no-products'                        => 'No Products.',
    'products.index.issues-reported'                    => 'issue(s) reported',
    # products/product.phtml
    'products.product.product-information'              => 'Product Introduction',
    'products.product.introduction'                     => 'Introduction',
    'products.product.product-name'                     => 'Product Name',
    'products.product.product-category'                 => 'Product Category',
    'products.product.latest-version'                   => 'Latest Version',
    'products.product.product-url'                      => 'Homepage',
    'products.product.prerequisites'                    => 'Prerequisites',
    'products.product.description'                      => 'Description',
    'products.product.issues'                           => 'Issues',
    'products.product.new-issue'                        => 'New Issue',
    'products.product.quick-search'                     => 'Quick Search',
    'products.product.filter'                           => 'Filter',
    'products.product.issue-category'                   => 'Issue Category',
    'products.product.issue-status'                     => 'Issue Status',
    'products.product.filter-username'                  => 'Username',
    'products.product.no-issues'                        => 'No Issues.',
    'products.index.no-products'                        => 'No Products.',
    'products.product.user'                             => 'User',
    'products.product.developer'                        => 'Developer',
    'products.product.relational-products'              => 'Relational Products',
    # products/issue.phtml
    'products.issue.new-issue'                          => 'New Issue',
    'product.issue.comments'                            => 'comment(s)',
    'products.issue.commented-on'                       => 'commented on',
    'products.issue.load-more'                          => 'Load More...',
    'products.issue.leave-a-comment'                    => 'Leave a comment',
    'products.issue.comment'                            => 'Comment',
    'products.issue.please-wait'                        => 'Please wait...',
    'products.issue.invalid-token'                      => 'Invalid token.',
    'products.issue.user-not-logged-in'                 => 'Please login before leaving a comment.',
    'products.issue.issue-not-exists'                   => 'The issue which you replied to not exists.',
    'products.issue.empty-content'                      => 'You can&acute;t leave the content empty.',
    'products.issue.issue-category'                     => 'Issue Category',
    'products.issue.issue-status'                       => 'Issue Status',
    'products.issue.product-name'                       => 'Product Name',
    'products.issue.milestone'                          => 'Product Version',
    'products.issue.latest-version'                     => 'Latest Version:',
    # products/new-issue.phtml
    'products.new-issue.title'                          => 'New Issue',
    'products.new-issue.new-issue'                      => 'New Issue',
    'products.new-issue.product-name'                   => 'Product Name:',
    'products.new-issue.latest-version'                 => 'Latest Version:',
    'products.new-issue.create-issue'                   => 'Create Issue',
    'products.new-issue.issue-title'                    => 'Title',
    'products.new-issue.issue-category'                 => 'Issue Category',
    'products.new-issue.product-version'                => 'Product Version',
    'products.new-issue.description'                    => 'Please describe the issue and the steps that make it reappears',
    'products.new-issue.please-wait'                    => 'Please wait...',
    'products.new-issue.invalid-token'                  => 'Invalid token.',
    'products.new-issue.user-not-logged-in'             => 'Please login before leaving a comment.',
    'products.new-issue.product-not-exists'             => 'The product which you commented to not exists.',
    'products.new-issue.issue-title-empty'              => 'You can&acute;t leave Title empty.',
    'products.new-issue.issue-title-invalid'            => 'The length of Title can&acute;t exceed 64 characters.',
    'products.new-issue.issue-category-empty'           => 'Please choose the Issue Category.',
    'products.new-issue.product-version-empty'          => 'You can&acute;t leave the Product Version empty.',
    'products.new-issue.product-version-illegal'        => 'The length of Product Version can&acute;t exceed 24 characters.',
    'products.new-issue.issue-description-empty'        => 'You can&acute;t leave the Issue Description empty.',
    # errors/resourceNotFound.phtml
    'errors.404.title'                                  => 'Page Not Found',
    'errors.404.page-not-found'                         => 'Page Not Found!',
    'errors.404.message'                                => 'The requested URL was not found on this server.',
    'errors.404.go-back'                                => 'Go back',
    # errors/internelServerError.phtml
    'errors.500.title'                                  => 'Internal Server Error',
    'errors.500.internal-server-error'                  => 'Internal Server Error Occurred!',
    'errors.500.message'                                => 'The requested URL caused an internal server error.',
    'errors.500.go-back'                                => 'Go back',
    # errors/notSupportedError.phtml
    'errors.not-supported.title'                        => 'Browser no longer supported',
    'errors.not-supported.browser-not-supported'        => 'Your Browser is no longer supported.',
    'errors.not-supported.message'                      => '%WebsiteName% no longer supports your browser. Please upgrade your browser. <a href="%URL%">Learn more</a>.',
    'errors.not-supported.download'                     => 'Download',
    # defaults/terms.phtml
    'default.terms.title'                               => 'Terms of Use',
    'default.terms.terms'                               => 'Terms of Use',
    'default.terms.introdction-content'                 => 'Thanks for using our products and services. The Services are provided by %websiteName%.\n\nBy using our Services, you are agreeing to these terms. Please read them carefully.\n\nOur Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.',
    'default.terms.using-services'                      => 'Using our Services',
    'default.terms.using-services-content'              => 'You must follow any policies made available to you within the Services.\n\nDon&acute;t misuse our Services. For example, don&acute;t interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.\n\nUsing our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don&acute;t remove, obscure, or alter any legal notices displayed in or along with our Services.\n\nOur Services display some content that is not %websiteName%&acute;s. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please don&acute;t assume that we do.\n\nIn connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.',
    'default.terms.your-account'                        => 'Your Account',
    'default.terms.your-account-content'                => 'You may need an account in order to use some of our Services. You may create your own account, or your account may be assigned to you by an administrator. If you are using an account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.\n\nTo protect your account, keep your password confidential. You are responsible for the activity that happens on or through your account. You are fully responsible for all activities that occur under the account and any other actions taken in connection with the account. You must not describe or assign keywords to your account information in a misleading or unlawful manner, including in a manner intended to trade on the name or reputation of others, and Automattic may change or remove any description or keyword that it considers inappropriate or unlawful, or otherwise likely to cause Automattic liability. You must immediately notify Automattic of any unauthorized uses of your account, your account or any other breaches of security. Automattic will not be liable for any acts or omissions by You, including any damages of any kind incurred as a result of such acts or omissions.',
    'default.terms.privacy-and-copyright'               => 'Privacy and Copyright Protection',
    'default.terms.privacy-and-copyright-content'       => '%websiteName%&acute;s [privacy policies](%privacyUrl%) explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that %websiteName% can use such data in accordance with our privacy policies.\n\nWe ask others to respect its intellectual property rights, it respects the intellectual property rights of others. We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights, please notify us.\n\nWe respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.',
    'default.terms.your-content'                        => 'Your Content in our Services',
    'default.terms.your-content-content'                => 'Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.\n\nWhen you upload, submit, store, send or receive content to or through our Services, you give %websiteName% (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services. Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.\n\nIf you comment on the Website, post material to the Website, post links on the Website, or otherwise make (or allow any third party to make) material available by means of the Website (any such material, &quot;Content&quot;), you are entirely responsible for the content of, and any harm resulting from, that Content. That is the case regardless of what form the Content takes, which includes, but is not limited to text, photo, video, audio, or code. By making Content available, you represent and warrant that your content does not violate these terms.\n\nYou can find more information about how %websiteName% uses and stores content in the privacy policy or additional terms for particular Services. If you submit feedback or suggestions about our Services, we may use your feedback or suggestions without obligation to you.',
    'default.terms.software-in-service'                 => 'About Software in our Services',
    'default.terms.software-in-service-content'         => 'When a Service requires or includes downloadable software, this software may update automatically on your device once a new version or feature is available. Some Services may let you adjust your automatic update settings.\n\n%websiteName% gives you a personal, worldwide, royalty-free, non-assignable and non-exclusive license to use the software provided to you by %websiteName% as part of the Services. This license is for the sole purpose of enabling you to use and enjoy the benefit of the Services as provided by %websiteName%, in the manner permitted by these terms. The software is under [GPL v3](http://www.gnu.org/licenses/gpl-3.0.txt) license. The License giving you legal permission to copy, distribute and/or modify it.',
    'default.terms.service-modify-terminate'            => 'Modifying and Terminating our Services',
    'default.terms.service-modify-terminate-content'    => 'We are constantly changing and improving our Services. We may add or remove functionalities or features, and we may suspend or stop a Service altogether.\n\nYou can stop using our Services at any time, although we&acute;ll be sorry to see you go. %websiteName% may also stop providing Services to you, or add or create new limits to our Services at any time.\n\nWe believe that you own your data and preserving your access to such data is important. If we discontinue a Service, where reasonably possible, we will give you reasonable advance notice and a chance to get information out of that Service.',
    'default.terms.warranties-and-disclaimers'          => 'Our Warranties and Disclaimers',
    'default.terms.warranties-and-disclaimers-content'  => 'We provide our Services of skill and care and we hope that you will enjoy using them. But there are certain things that we don&acute;t promise about our Services.\n\nOther than as expressly set out in these terms or additional terms, neither %websiteName% nor its suppliers or distributors make any specific promises about the Services. For example, we don&acute;t make any commitments about the content within the Services, the specific functions of the Services, or their reliability, availability, or ability to meet your needs. We provide the Services &quot;as is&quot;.\n\nSome jurisdictions provide for certain warranties, like the implied warranty of merchantability, fitness for a particular purpose and non-infringement. To the extent permitted by law, we exclude all warranties.',
    'default.terms.liability'                           => 'Liability for our Services',
    'default.terms.liability-content'                   => 'When permitted by law, %websiteName%, and %websiteName%&acute;s suppliers and distributors, will not be responsible for lost profits, revenues, or data, financial losses or indirect, special, consequential, exemplary, or punitive damages.\n\nTo the extent permitted by law, the total liability of %websiteName%, and its suppliers and distributors, for any claims under these terms, including for any implied warranties, is limited to the amount you paid us to use the Services (or, if we choose, to supplying you the Services again).\n\nIn all cases, %websiteName%, and its suppliers and distributors, will not be liable for any loss or damage that is not reasonably foreseeable.\n\nWe recognize that in some countries, you might have legal rights as a consumer. If you are using the Services for a personal purpose, then nothing in these terms or any additional terms limits any consumer legal rights which may not be waived by contract.',
    'default.terms.business-use'                        => 'Business uses of our Services',
    'default.terms.business-use-content'                => 'If you are using our Services on behalf of a business, that business accepts these terms. It will hold harmless and indemnify %websiteName% and its affiliates, officers, agents, and employees from any claim, suit or action arising from or related to the use of the Services or violation of these terms, including any liability or expense arising from claims, losses, damages, suits, judgments, litigation costs and attorneys&acute;fees.',
    'default.terms.about-terms'                         => 'About these Terms',
    'default.terms.about-terms-content'                 => 'We may modify these terms or any additional terms that apply to a Service to, for example, reflect changes to the law or changes to our Services. You should look at the terms regularly. We&acute;ll post notice of modifications to these terms on this page. We&acute;ll post notice of modified additional terms in the applicable Service. Changes will not apply retroactively and will become effective no sooner than fourteen days after they are posted. However, changes addressing new functions for a Service or changes made for legal reasons will be effective immediately. If you do not agree to the modified terms for a Service, you should discontinue your use of that Service.\n\nIf there is a conflict between these terms and the additional terms, the additional terms will control for that conflict.\n\nThese terms control the relationship between %websiteName%  and you. They do not create any third party beneficiary rights.\n\nIf you do not comply with these terms, and we don&acute;t take action right away, this doesn&acute;t mean that we are giving up any rights that we may have (such as taking action in the future).\n\nIf it turns out that a particular term is not enforceable, this will not affect any other terms.\n\nThe courts in some countries will not apply California law to some types of disputes. If you reside in one of those countries, then where California law is excluded from applying, your country&acute;s laws will apply to such disputes related to these terms. Otherwise, you agree that the laws of California, U.S.A., excluding California&acute;s choice of law rules, will apply to any disputes arising out of or relating to these terms or the Services. Similarly, if the courts in your country will not permit you to consent to the jurisdiction and venue of the courts in Santa Clara County, California, U.S.A., then your local jurisdiction and venue will apply to such disputes related to these terms. Otherwise, all claims arising out of or relating to these terms or the services will be litigated exclusively in the federal or state courts of Santa Clara County, California, USA, and you and %websiteName%  consent to personal jurisdiction in those courts.',
    # defaults/privacy.phtml
    'default.privacy.title'                             => 'Privacy &amp; Cookie',
    'default.privacy.privacy'                           => 'Privacy &amp; Cookie',
    'default.privacy.introdction-content'               => 'Your privacy is important to us and always has been. So we&acute;ve developed a Privacy Policy that covers how we collect, use, disclose, transfer, and store your information. Please take a moment to familiarize yourself with our privacy practices and let us know if you have any questions.\n\nThis privacy statement applies to %websiteName% websites, services and products that collect data and display these terms, as well as their offline product support services. It does not apply to %websiteName% sites, services and products that do not display or link to this statement or that have their own privacy statements.',
    'default.privacy.information-gathering'             => 'Information Gathering and Usage',
    'default.privacy.information-gathering-content'     => 'When you register for %websiteName% we ask for information such as your email address.\n\n%websiteName% uses collected information for the following general purposes: products and services provision, identification and authentication, services improvement, and contact.\n\nAs is true of most internet services, we gather some information automatically and store it in log files. This information includes Internet Protocol (IP) addresses, browser type and language, Internet service provider (ISP), referring and exit websites and applications, operating system, date/time stamp, and clickstream data.',
    'default.privacy.cookies'                           => 'Cookies',
    'default.privacy.cookies-content'                   => '- A cookie is a small amount of data, which often includes an anonymous unique identifier, that is sent to your browser from a web site&acute;s computers and stored on your computer&acute;s hard drive.\n- Cookies are required to use the %websiteName% service.\n- We use cookies to record current session information, but do not use permanent cookies. You are required to re-login to your %websiteName% account after a certain period of time has elapsed to protect you against others accidentally accessing your account contents.',
    'default.privacy.information-protection'            => 'Protection of Personal Information',
    'default.privacy.information-protection-content'    => '%websiteName% takes the security of your personal information very seriously. We recommend enabling encryption such as Transport Layer Security (TLS) to protect your personal information during transmission. When your personal data is stored by %websiteName%, all of them will be encrypted using irreversible algorithm.\n\nWhen you use some %websiteName% products, services, or applications or post on an %websiteName% forum, or social networking service, the personal information and content you share is visible to other users and can be read, collected, or used by them. You are responsible for the personal information you choose to share or submit in these instances. For example, if you list your name and email address in a forum posting, that information is public. Please take care when using these features.',
    'default.privacy.information-integrity'             => 'Integrity and Retention of Personal Information',
    'default.privacy.information-integrity-content'     => '%websiteName% makes it easy for you to keep your personal information accurate, complete, and up to date. We will retain your personal information for the period necessary to fulfill the purposes outlined in this Privacy Policy unless a longer retention period is required or permitted by law.',
    'default.privacy.information-access'                => 'Access to Personal Information',
    'default.privacy.information-access-content'        => 'You can help ensure that your contact information and preferences are accurate, complete, and up to date by logging in to your account. For other personal information we hold, we will provide you with access for any purpose including to request that we correct the data if it is inaccurate or delete the data if %websiteName% is not required to retain it by law or for legitimate business purposes. We may decline to process requests that are frivolous/vexatious, jeopardize the privacy of others, are extremely impractical, or for which access is not otherwise required by local law.',
    'default.privacy.children'                          => 'Children',
    'default.privacy.children-content'                  => 'When a %websiteName% site or service collects age information, it will block users under 13 or obtain consent from a parent or guardian before their child can use it.\n\nWhen consent is granted, the child&acute;s account is treated much like any other account, including letting the account holder communicate with other users.\n\nParents can change or revoke consent as described in this privacy statement.',
    'default.privacy.disclosure'                        => 'Disclosure to Third Parties',
    'default.privacy.disclosure-content'                => 'At times %websiteName% may make certain personal information available to strategic partners that work with %websiteName% to provide products and services. If you are approved for service, your account will be governed by %websiteName%&acute;s respective privacy policies. Personal information will only be shared by %websiteName% to provide or improve our products and services; it will not be shared with third parties for their marketing purposes.\n\nIt may be necessary − by law, legal process, litigation, and/or requests from public and governmental authorities within or outside your country of residence − for %websiteName% to disclose your personal information. We may also disclose information about you if we determine that for purposes of national security, law enforcement, or other issues of public importance, disclosure is necessary or appropriate.\n\nWe may also disclose information about you if we determine that disclosure is reasonably necessary to enforce our terms and conditions or protect our users. Additionally, in the event of a reorganization, merger, or sale we may transfer any and all personal information we collect to the relevant third party.',
    'default.privacy.commitment'                        => 'Commitment to Your Privacy',
    'default.privacy.commitment-content'                => 'To make sure your personal information is secure, we&acute;ll strictly enforce privacy safeguards.',
    'default.privacy.changes'                           => 'Changes',
    'default.privacy.changes-content'                   => '%websiteName% may periodically update this policy. We will notify you about significant changes in the way we treat personal information by sending a notice to the email address of your account account or by placing a prominent notice on our site.',
);
