<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

declare(strict_types=1);

namespace EveryWorkflow\PageBundle\Seeder;

use EveryWorkflow\PageBundle\Block\HomePageBlockInterface;
use EveryWorkflow\PageBundle\Repository\PageRepositoryInterface;
use EveryWorkflow\MongoBundle\Support\SeederInterface;

class Mongo_2021_12_16_07_39_20_Page_Data_Seeder implements SeederInterface
{
    protected PageRepositoryInterface $pageRepository;
    protected HomePageBlockInterface $homePageBlock;

    public function __construct(
        PageRepositoryInterface $pageRepository,
        HomePageBlockInterface $homePageBlock
    ) {
        $this->pageRepository = $pageRepository;
        $this->homePageBlock = $homePageBlock;
    }

    public function seed(): bool
    {
        $page = $this->pageRepository->create([
            'title' => 'Home',
            'url_path' => 'home',
            'status' => 'enable',
            'page_builder_data' => [
                'block_data' => [
                    $this->homePageBlock->toArray(),
                ],
            ],
            'meta_title' => 'Home page - EveryWorkflow',
            'meta_description' => 'EveryWorkflow meta description text',
            'meta_keyword' => 'every, workflow, everyworkflow, eCommerce, data platform, nepal',
        ]);
        $this->pageRepository->savePage($page);

        $page = $this->pageRepository->create([
            'title' => 'About',
            'url_path' => 'about',
            'status' => 'enable',
            'page_builder_data' => [
                'block_data' => [
                    $this->homePageBlock->toArray(),
                ],
            ],
            'meta_title' => 'About - EveryWorkflow',
            'meta_description' => 'EveryWorkflow meta description text',
            'meta_keyword' => 'every, workflow, everyworkflow, eCommerce, data platform, nepal',
        ]);
        $this->pageRepository->savePage($page);

        $page = $this->pageRepository->create([
            'title' => 'Contact',
            'url_path' => 'contact',
            'status' => 'enable',
            'page_builder_data' => [
                'block_data' => [
                    $this->homePageBlock->toArray(),
                ],
            ],
            'meta_title' => 'Contact - EveryWorkflow',
            'meta_description' => 'EveryWorkflow meta description text',
            'meta_keyword' => 'every, workflow, everyworkflow, eCommerce, data platform, nepal',
        ]);
        $this->pageRepository->savePage($page);

        $page = $this->pageRepository->create([
            'title' => 'Privacy policy',
            'url_path' => 'privacy-policy',
            'status' => 'enable',
            'page_builder_data' => [
                'block_data' => [
                    [
                        'block_type' => 'container_block',
                        'container_type' => 'container-center',
                        'style' => '{"marginTop": "26px"}',
                        'block_data' => [
                            [
                                'block_type' => 'col_block',
                                'style' => '{"marginTop": "26px", "backgroundColor": "rgb(255, 255, 255)", "padding": "24px", "borderRadius": "8px", "boxShadow": "rgb(0 0 0 / 10%) 0px 1px 3px 0px, rgb(0 0 0 / 6%) 0px 1px 2px 0px"}',
                                'block_data' => [
                                    [
                                        'block_type' => 'markdown_block',
                                        'content' => "# Privacy Policy\n\nLast updated: June 13, 2021\n\nThis Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.\n\nWe use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the [Privacy Policy Generator](https://www.privacypolicies.com/privacy-policy-generator/).\n\n# Interpretation and Definitions\n\n## Interpretation\n\nThe words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.\n\n## Definitions\n\nFor the purposes of this Privacy Policy:\n\n*   **Account** means a unique account created for You to access our Service or parts of our Service.\n\n*   **Company** (referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to Example Pvt Ltd, 1 Example, CA 00000.\n\n*   **Cookies** are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.\n\n*   **Country** refers to: Nepal\n\n*   **Device** means any device that can access the Service such as a computer, a cellphone or a digital tablet.\n\n*   **Personal Data** is any information that relates to an identified or identifiable individual.\n\n*   **Service** refers to the Website.\n\n*   **Service Provider** means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.\n\n*   **Third-party Social Media Service** refers to any website or any social network website through which a User can log in or create an account to use the Service.\n\n*   **Usage Data** refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).\n\n*   **Website** refers to Example, accessible from [Example](Example)\n\n*   **You** means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.\n\n# Collecting and Using Your Personal Data\n\n## Types of Data Collected\n\n### Personal Data\n\nWhile using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:\n\n*   Email address\n\n*   First name and last name\n\n*   Phone number\n\n*   Address, State, Province, ZIP/Postal code, City\n\n*   Usage Data\n\n### Usage Data\n\nUsage Data is collected automatically when using the Service.\n\nUsage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.\n\nWhen You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.\n\nWe may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.\n\n### Information from Third-Party Social Media Services\n\nThe Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:\n\n*   Google\n*   Facebook\n*   Twitter\n\nIf You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Service's account, such as Your name, Your email address, Your activities or Your contact list associated with that account.\n\nYou may also have the option of sharing additional information with the Company through Your Third-Party Social Media Service's account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.\n\n### Tracking Technologies and Cookies\n\nWe use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:\n\n*   **Cookies or Browser Cookies.** A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.\n*   **Flash Cookies.** Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read \"Where can I change the settings for disabling, or deleting local shared objects?\" available at [https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_](https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_)\n*   **Web Beacons.** Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).\n\nCookies can be \"Persistent\" or \"Session\" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: [What Are Cookies?](https://www.privacypolicies.com/blog/cookies/).\n\nWe use both Session and Persistent Cookies for the purposes set out below:\n\n*   **Necessary / Essential Cookies**\n\n    Type: Session Cookies\n\n    Administered by: Us\n\n    Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.\n\n*   **Cookies Policy / Notice Acceptance Cookies**\n\n    Type: Persistent Cookies\n\n    Administered by: Us\n\n    Purpose: These Cookies identify if users have accepted the use of cookies on the Website.\n\n*   **Functionality Cookies**\n\n    Type: Persistent Cookies\n\n    Administered by: Us\n\n    Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.\n\nFor more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.\n\n## Use of Your Personal Data\n\nThe Company may use Personal Data for the following purposes:\n\n*   **To provide and maintain our Service**, including to monitor the usage of our Service.\n\n*   **To manage Your Account:** to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.\n\n*   **For the performance of a contract:** the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.\n\n*   **To contact You:** To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.\n\n*   **To provide You** with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.\n\n*   **To manage Your requests:** To attend and manage Your requests to Us.\n\n*   **For business transfers:** We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.\n\n*   **For other purposes**: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.\n\nWe may share Your personal information in the following situations:\n\n*   **With Service Providers:** We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.\n*   **For business transfers:** We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.\n*   **With Affiliates:** We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.\n*   **With business partners:** We may share Your information with Our business partners to offer You certain products, services or promotions.\n*   **With other users:** when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.\n*   **With Your consent**: We may disclose Your personal information for any other purpose with Your consent.\n\n## Retention of Your Personal Data\n\nThe Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.\n\nThe Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.\n\n## Transfer of Your Personal Data\n\nYour information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.\n\nYour consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.\n\nThe Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.\n\n## Disclosure of Your Personal Data\n\n### Business Transactions\n\nIf the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.\n\n### Law enforcement\n\nUnder certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).\n\n### Other legal requirements\n\nThe Company may disclose Your Personal Data in the good faith belief that such action is necessary to:\n\n*   Comply with a legal obligation\n*   Protect and defend the rights or property of the Company\n*   Prevent or investigate possible wrongdoing in connection with the Service\n*   Protect the personal safety of Users of the Service or the public\n*   Protect against legal liability\n\n## Security of Your Personal Data\n\nThe security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.\n\n# Children's Privacy\n\nOur Service does not address anyone under the age of 13\\. We do not knowingly collect personally identifiable information from anyone under the age of 13\\. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.\n\nIf We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.\n\n# Links to Other Websites\n\nOur Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.\n\nWe have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.\n\n# Changes to this Privacy Policy\n\nWe may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.\n\nWe will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.\n\nYou are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.\n\n# Contact Us\n\nIf you have any questions about this Privacy Policy, You can contact us:\n\n*   By email: office@example.com\n\n*   By visiting this page on our website: [http://example.com/contact](http://example.com/contact)\n\n*   By phone number: 9800000000",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'meta_title' => 'Privacy policy - EveryWorkflow',
            'meta_description' => 'EveryWorkflow meta description text',
            'meta_keyword' => 'every, workflow, everyworkflow, eCommerce, data platform, nepal',
        ]);
        $this->pageRepository->savePage($page);

        $page = $this->pageRepository->create([
            'title' => 'Terms of use',
            'url_path' => 'terms-of-use',
            'status' => 'enable',
            'page_builder_data' => [
                'block_data' => [
                    [
                        'block_type' => 'container_block',
                        'container_type' => 'container-center',
                        'style' => '{"marginTop": "26px"}',
                        'block_data' => [
                            [
                                'block_type' => 'col_block',
                                'style' => '{"marginTop": "26px", "backgroundColor": "rgb(255, 255, 255)", "padding": "24px", "borderRadius": "8px", "boxShadow": "rgb(0 0 0 / 10%) 0px 1px 3px 0px, rgb(0 0 0 / 6%) 0px 1px 2px 0px"}',
                                'block_data' => [
                                    [
                                        'block_type' => 'markdown_block',
                                        'content' => "# Terms and Conditions\n\nLast updated: June 13, 2021\n\nPlease read these terms and conditions carefully before using Our Service.\n\n# Interpretation and Definitions\n\n## Interpretation\n\nThe words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.\n\n## Definitions\n\nFor the purposes of these Terms and Conditions:\n\n*   **Affiliate** means an entity that controls, is controlled by or is under common control with a party, where \"control\" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.\n\n*   **Country** refers to: Nepal\n\n*   **Company** (referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to Example Pvt Ltd, 1 Example, CA 00000.\n\n*   **Device** means any device that can access the Service such as a computer, a cellphone or a digital tablet.\n\n*   **Service** refers to the Website.\n\n*   **Terms and Conditions** (also referred as \"Terms\") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the [Terms and Conditions Generator](https://www.privacypolicies.com/terms-conditions-generator/).\n\n*   **Third-party Social Media Service** means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.\n\n*   **Website** refers to Example, accessible from [example.com](example.com)\n\n*   **You** means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.\n\n# Acknowledgment\n\nThese are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.\n\nYour access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.\n\nBy accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.\n\nYou represent that you are over the age of 18\\. The Company does not permit those under 18 to use the Service.\n\nYour access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.\n\n# Links to Other Websites\n\nOur Service may contain links to third-party web sites or services that are not owned or controlled by the Company.\n\nThe Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.\n\nWe strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.\n\n# Termination\n\nWe may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.\n\nUpon termination, Your right to use the Service will cease immediately.\n\n# Limitation of Liability\n\nNotwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.\n\nTo the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.\n\nSome states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.\n\n# \"AS IS\" and \"AS AVAILABLE\" Disclaimer\n\nThe Service is provided to You \"AS IS\" and \"AS AVAILABLE\" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.\n\nWithout limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.\n\nSome jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.\n\n# Governing Law\n\nThe laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.\n\n# Disputes Resolution\n\nIf You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.\n\n# For European Union (EU) Users\n\nIf You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.\n\n# United States Legal Compliance\n\nYou represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a \"terrorist supporting\" country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.\n\n# Severability and Waiver\n\n## Severability\n\nIf any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.\n\n## Waiver\n\nExcept as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall be the waiver of a breach constitute a waiver of any subsequent breach.\n\n# Translation Interpretation\n\nThese Terms and Conditions may have been translated if We have made them available to You on our Service. You agree that the original English text shall prevail in the case of a dispute.\n\n# Changes to These Terms and Conditions\n\nWe reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.\n\nBy continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.\n\n# Contact Us\n\nIf you have any questions about these Terms and Conditions, You can contact us:\n\n*   By email: office@example.com\n\n*   By visiting this page on our website: [/contact](/contact)\n\n*   By phone number: 9800000000",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'meta_title' => 'Terms of use - EveryWorkflow',
            'meta_description' => 'EveryWorkflow meta description text',
            'meta_keyword' => 'every, workflow, everyworkflow, eCommerce, data platform, nepal',
        ]);
        $this->pageRepository->savePage($page);

        return self::SUCCESS;
    }

    public function rollback(): bool
    {
        $this->pageRepository->deleteByFilter(['url_path' => 'home']);
        $this->pageRepository->deleteByFilter(['url_path' => 'about']);
        $this->pageRepository->deleteByFilter(['url_path' => 'contact']);
        $this->pageRepository->deleteByFilter(['url_path' => 'privacy-policy']);
        $this->pageRepository->deleteByFilter(['url_path' => 'terms-of-use']);

        return self::SUCCESS;
    }
}