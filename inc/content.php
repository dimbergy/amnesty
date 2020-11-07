<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 15/8/20
 * Time: 12:06 PM
 */

$uri = $_SERVER['REQUEST_URI'];
$path =  explode('/', $uri);
$permalink = end($path);


$content = [

    'mission' => [

        'discrimination' => [
            'tag' => 'discrimination',
            'anchor' => 'discbody',
            'title' => 'Discrimination',
            'quote' => '&ensp;Don’t discriminate against me simply because of who I am or what I believe.&ensp;',
            'overview' => '<p>Discrimination strikes at the very heart of being human.  It is treating someone differently simply because of who they are or what they believe.</p>
                <p>We all have the right to be treated equally, regardless of our race, ethnicity, nationality, class, caste, religion, belief, sex, language, sexual orientation, gender identity, age,health or other status. Yet all too often we hear heart-breaking stories of people who suffer cruelty simply for belonging to a &ldquo;different&rdquo; group from those in power.</p>
                <p>Amnesty&rsquo;s work is rooted in the principle of non-discrimination. Working with disadvantaged communities across the world we work to change discriminatory laws and protect people. Sometimes these victories are bittersweet, such as when the Moroccan parliament changed its discriminatory rape law in 2014, meaning rapists can no longer escape punishment by forcing their victims to marry them. This was two years too late for Amina Filali and her grieving family. She killed herself in 2012 after being forced to marry the man she said had raped her. </p>
                <br><br>',
            'problem' => ' <p class="text-right"><strong>What drives discrimination?</strong></p>
                <p>It is all too easy to deny a person&rsquo;s human rights if you consider them as &ldquo;less than&rdquo; you. But how does this happen? At the heart of all forms of discrimination is prejudice based on concepts of identity, and the need to identify with a certain group. This can lead to ignorance and even hate.</p>
                <p>Some governments reinforce their power and the status quo by openly justifying discrimination in the name of &ldquo;morality&rdquo;, religion or ideology. It can be cemented in national law – such as by restricting women&rsquo;s freedom – despite breaking international law. Certain groups can even be viewed by the authorities as more likely to be criminal simply for who they are, such as being poor, indigenous or black. </p>
                <p>Sometimes people are criminalized directly for who and what they are - such as being gay. Sometimes it happens indirectly – for example employers asking for a high-level of proficiency in a native language when the tasks involved do not actually require it.</p>
                <p>In many countries racism is nourished by increasingly xenophobic responses to immigration.</p>
                <br>',
            'image' => [
                'src' => 'img/discrim1.jpg',
                'target' => 'disc-modal',
                'caption' => 'Protest in support of Amina Filali, outside the Moroccan parliament in Rabat, Morocco. 17 March, 2012. © AP Photo/Abdeljalil Bounhar',
                'modal' => 'Protest outside the Moroccan parliament in Rabat, Morocco. 17 March, 2012.'
            ],
            'issue' => '<p>In some situations, discrimination means laws don’t protect people from racist violence, domestic violence or attacks because of their religion or sexual orientation.</p>
                <p><strong>Women and girls</strong></p>
                <p>The experience of women and girls illustrates the nature of discrimination.</p>
                <p>In far more places than you might imagine, laws exist making women second-class citizens. They cannot dress as they like, drive (Saudi Arabia) or work at night (China, Latvia, Madagascar). Discriminatory laws relate to family life, including limiting a woman&rsquo;s right to marry, or the right not to marry, divorce and remarry (Afghanistan, Malaysia, Niger and Sudan to just name a few).</p>
                <p>Discrimination doesn&rsquo;t only mean a lack of equality, it actually perpetuates harm. When the state dismisses violence against women as a private or domestic matter, it sends a clear message that violence against women is condoned.</p>
                <p>Discrimination against women is often made worse when they belong to more than one disadvantaged group because of their income, race, ethnicity, sexual identity, caste, religion, class or age. Human Rights Defender Bhanwari Devi was raped by five men of a so-called higher caste in India. In the acquittal of her attackers two years later, the court noted that the incident could not possibly have happened because upper caste men would not rape a woman of a lower caste. </p>
                <br>',
            'action' => '<p>Governments to...</p>
                <ul>
                    <li>Get rid of discriminatory laws and release anyone who is in prison because of them.</li>
                    <li>Protect everyone - whoever they are - from violence.</li>
                    <li>Draw up new laws and build institutions that tackle the root causes of discrimination.</li>
                    <li>Lead from the front - never exploit or use people&rsquo;s discriminatory beliefs for political ends.</li>
                </ul>',
            'key_facts' => '<h1 class="text-center">76</h1>
            <p>76 countries criminalise sexual acts between adults of the same sex.</p>
            <h1 class="text-center">10</h1>
            <p>In 10 countries the maximum sentence for sexual acts between same sex adults is the death penalty.</p>
            <h1 class="text-center">4</h1>
            <p>In Canada, Indigenous women are x4 more likely to be murdered than other women.</p>
            <h1 class="text-center">1M+</h1>
            <p>Over one million people worldwide campaigned successfully for the release of Meriam Yehya Ibrahim in 2014. A Sudanese Christian sentenced to death by hanging for abandoning her religion.</p>
            <p></p>'
        ],

        'torture' => [
            'tag' => 'torture',
            'anchor' => 'tortbody',
            'title' => 'Torture',
            'quote' => '&ensp;Cigarette burns, waterboarding & electric shocks. The list goes on. Torture is outlawed but some countries still use it. #StopTorture&ensp;',
            'overview' => '<p>Torture is when someone in authority intentionally causes severe pain or suffering for a specific purpose. Such as to get information or a confession out of you, to punish, intimidate or threaten you.</p>
                <p>It can be physical, such as beating, forcing into a painful position or sexual, such as rape. It can be psychological, such as sleep deprivation or public humiliation.</p>
                <p>Torture is illegal: outlawed internationally since the Universal Declaration of Human Rights in 1948. And 156 countries have signed the UN Convention against Torture. All forms of cruelty and humiliation are also outlawed.</p>
                <p>Yet some governments openly continue to torture despite their commitments. Others betray their people by carrying out torture in secret.</p>
                <p>Torture</p>
                <p>• is barbaric and inhumane<br>
                    • is banned under international law<br>
                    • corrodes the rule of law and undermines the criminal justice system<br>
                    ...can never, ever be justified</p>
                <p>For decades, Amnesty has exposed governments who torture. We have had many successes, including the historic moment 30 years ago when the UN voted for a Convention against Torture - a groundbreaking step towards making the global ban on torture a reality.</p>
                <p>We also support torture survivors to get justice. People like Ángel Colón, who was released in October 2014, nearly six years after he was tortured and wrongly imprisoned in Mexico. More than 20,000 Amnesty supporters demanded his release. Ángel told us: &ldquo;My message to all those who are showing me their solidarity, and are against torture and discrimination, is &lsquo;don&rsquo;t drop your guard. A new horizon is dawning&rsquo;.&rdquo;</p>
                <br>
                <br>
                <br><br>',
            'problem' => '<p class="text-right"><strong>Getting away with it</strong></p>
                <p>Torture usually takes place in the shadows. In fact, governments often put more effort into denying or covering up torture than carrying out full investigations when a complaint is made.</p>
                <p>There are many reasons why torturers often do not fear arrest, prosecution or punishment. Including:</p>
                <p>• A lack of political will – especially if the government is behind the torture.<br>
                    • Investigations are carried out by the torturers colleagues. <br>
                    • Human rights are not high on the political agenda.</p>
                <p>Whatever the reason, people who suffer torture are failed, and torture flourishes.</p>
                <p>But we are all protected by international law – which says victims have the right to know the truth about what happened to them and to get justice. The state is required to make this happen.</p>
                <br>',
            'image' => [
                'src' => 'img/torture1.jpg',
                'target' => 'torture-modal',
                'caption' => 'Philippine policemen during a protest near the US embassy in Manila on 20 March, 2012. © NOEL CELIS/AFP/Getty Images',
                'modal' => 'Philippine policemen during a protest near the US embassy in Manila on 20 March, 2012.'
            ],
            'issue' => ' <p><strong>Who&rsquo;s at risk?</strong></p>
                <p>Almost anyone taken in to custody is at risk of torture – regardless of age, gender, ethnicity or politics. But it is clear that some of us are in more danger than others.</p>
                <p>As with all human rights abuses, if you are poor, or belong to a group suffering discrimination it is more likely you will face torture and you will have fewer ways of defending yourself. For example, women, children, member of religious or ethnic minorities, or political opposition groups.</p>
                <p><strong>Safe from torture</strong></p>
                <p>Torture is usually hidden - in police lock-up, interrogation rooms or prisons. So, one of the best ways to prevent torture and make sure torturers can&rsquo;t get away with it, is to bring it into view. In other words:</p>
                <p>• From the outset, detainees have access to a lawyer.<br>
                    • Lawyers are present during interrogations.<br>
                    • Doctors are on hand to examine detainees.<br>
                    • Detainees can have contact with their families.<br>
                    • Confessions obtained by torture can never be used as evidence.<br>
                    • Anyone involved in torture is brought to justice.</p>
                <br>',
            'action' => '<p>• There is a clear definition of torture. There are no grey areas. Waterboarding counts. Sleep deprivation counts. The debates need to stop and instead energy put into ending torture.<br>
                    • Cruelty and humiliation should not be tolerated – whether or not they qualify as torture.<br>
                    • Governments should set up systems to record key stages of arrest and imprisonment, so that if people in authority behave illegally or abusively at any time, they can be prosecuted. <br>
                    • There must always be a proper and fair process for investigating torture and prosecuting those responsible. <br>
                    • There needs to be more political will and commitment to enforcing the law.</p>',
            'key_facts' => '<p>Over the last five years, Amnesty has reported torture in at least three quarters of the world - 141 countries.</p>
            <h1 class="text-center">&nbsp;</h1>
            <h1 class="text-center">44%</h1>
            <p>Nearly half of respondents fear torture if taken into custody.</p>
            <p class="text-center"><i class="glyphicon glyphicon-arrow-down"></i></p>
            <h1 class="text-center">80%</h1>
            <p>More than 80% want strong laws to protect them from torture.</p>
            <p></p>'
        ],

        'sexualrights' => [
            'tag' => 'sexualrights',
            'anchor' => 'sexbody',
            'title' => 'Sexual and Reproductive rights',
            'quote' => '&ensp;I have the right to make decisions about my body and my life. So do you. Don’t let others interfere. #MyBodyMyRights&ensp',
            'overview' => '<p>Whoever you are, wherever you live, all the decisions you make about your own body should be yours.</p>
                <p>Yet all over the world, many of us are persecuted for making our own choices and many more are prevented from making any choices at all. Governments are trying to dictate who we can kiss, who we should love, how we must dress, how we identify ourselves, when we have children, and how many we have.</p>
                <p>Sexual and reproductive rights mean you should be able to make your own decisions about your body and:</p>
                <p>• get accurate information about these issues <br>
                    • access sexual and reproductive health services including contraception<br>
                    • choose if, when and who to marry<br>
                    • decide if you want to have children and how many</p>
                <p>They also mean our lives should be free from all forms of sexual violence, including rape, female genital mutilation, forced pregnancy, forced abortion and forced sterilization.</p>
                <p>Amnesty is campaigning to make sure we all have control over our sexual and reproductive choices.</p>
                <p>In 2013, 22 year old Beatriz was denied an abortion by the authorities in El Salvador. Beatriz suffered from a number of severe illnesses which meant that continuing with her pregnancy posed a serious threat to her life and health. The foetus was unlikely to survive beyond birth. After months of pressure from activists in El Salvador and around the world, the Salvadoran government finally allowed her an early caesarean section: &ldquo;Without your support I wouldn&rsquo;t have been able to get through it. I hope my example serves so that other women won&rsquo;t have to go through what I suffered.&rdquo;</p>
                <br><br>',
            'problem' => '<p class="text-right"><strong>New threats to equality, and our lives</strong></p>
                <p>Many of the recent advances made by brave activists are now under threat.</p>
                <p>• In December 2013, India&rsquo;s Supreme Court ruled that same-sex relations between consenting adults would remain a criminal offense.<br>
                    • In January 2014, the deeply oppressive Same Sex Marriage (Prohibition) Act became law in Nigeria.<br>
                    • In January 2014, a new abortion law came into effect in Ireland – the Protection of Life During Pregnancy Act – which continues to criminalize and punish abortion with a 14 year prison sentence.</p>
                <p>Many groups are putting pressure on governments, the UN and other international and regional bodies to limit sexual and reproductive rights. This is driven by well-funded, organized interest groups, including powerful religious institutions.</p>
                <p>At the highest levels, some governments are listening to these groups and questioning sexual and reproductive rights and gender equality, or branding the principle of &ldquo;human rights for all&rdquo; as a Western concept.</p>
                <p>What&rsquo;s clear is that our rights to express our sexuality and make decisions over our own bodies are being challenged.</p>
                <br>',
            'image' => [
                'src' => 'img/sexualrights1.jpg',
                'target' => 'sexualrights-modal',
                'caption' => 'Women stand chained together outside the Supreme Court during a protest in support of a 22-year-old woman identified as Beatriz in San Salvador, El Salvador, 15 May, 2013. © Ulises Rodriguez / Corbis / Reuters',
                'modal' => 'Women stand chained together outside the Supreme Court during a protest'
            ],
            'issue' => '<p><strong>Discrimination</strong></p>
                <p>There are many barriers to sexual and reproductive rights, including obstacles to access health services, information and education. But underlying these problems is discrimination.</p>
                <p>Women and girls and people from marginalized groups, such as gay men, lesbian women and trans people or people from so called &ldquo;lower&rdquo; castes, people living in poverty, or minorities, risk a huge amount when they try to exercise choice.</p>
                <p>These barriers are often more extreme if you are from more than one of these groups.</p>
                <p>Kopila is a 32 year old woman living in Nepal&rsquo;s Kailali distrct. She never went to school and was married at 17 years old. She had her first child one year later, followed by three more. While pregnant and soon after giving birth, she had to work in the fields and carry heavy loads such as wood. This and other gender discrimination contributed to Kopila experiencing uterine prolapse – a painful condition in which the uterus starts to slip into the vagina – when she was 24 years old. She has only been to the doctors once as it is Kopila&rsquo;s husband who decides when she can see a doctor.</p>
                <p>Unfortunately for Kopila and millions of others like her, far from challenging inequality and discrimination, governments often reinforce it. They force people to conform to what they consider to be &ldquo;normal&rdquo; when it comes to sexuality, reproduction and parenthood. These harmful sterotypes are often justified on grounds of culture, tradition or religion.</p>
                <p>Control over sexual and reproductive choices often ends up in the hands of others – husbands, in-laws, family members or religious groups. The consequences are devastating.</p>
                <br>',
            'action' => '<p>• Governments must stop using criminal law to control people&rsquo;s sexuality and reproduction. <br>
                    • People should be empowered to make their own decisions about their bodies and they live their lives without interference from others.<br>
                    • Governments should make sure that sexual and reproductive health services, education and information are available and easy to access.<br>
                    • Countries should prohibit all forms of discrimination and violence.</p>',
            'key_facts' => '<h1 class="text-center">23</h1>
        <p>European countries require transgender people to be sterilised before their gender is legally recognised.</p>
        <h1 class="text-center">47K</h1>
        <p>Pregnant women die every year due to complications from unsafe abortions.</p>
        <h1 class="text-center">76</h1>
        <p>76 countries criminalize sexual acts between adults of the same sex.</p>
        <h1 class="text-center">14M+</h1>
        <p>More than 14 million teenage girls give birth every year, mainly as a result of rape and unwanted pregnancy.</p>
        <p></p>'
        ],

        'dignity' => [
            'tag' => 'dignity',
            'anchor' => 'dignbody',
            'title' => 'Human rights for human dignity',
            'quote' => '&ensp;It’s a human rights scandal – people are being denied health, education and housing. @AmnestyOnline&ensp;',
            'overview' => '<p>In the midst of plenty, many people still go hungry, live in poor housing without basic services such as water and toilets and grow-up without education.</p>
                <p>This is not just because of a lack of resources, but also because of negligence and discrimination. Governments are simply unwilling to do something about it. This is not an unfortunate reality of life, it is a shocking human rights scandal.</p>
                <p>Amnesty is working with communities across the world, equipping residents with the knowledge and tools to engage with government officials to claim their rights and improve their lives. We have developed close partnerships with local activists like John Kamau.</p>
                <p>John Kamau runs a small hotel business in the Deep Sea community in Nairobi, Kenya, and has six children. &ldquo;If demotion takes place here, I have no place to go. My children will have to leave school… We are treated as animals. I have joined a group in the village known as the Rapid Response team. We phone each other, we do networking in this village and others to search for the truth and establish how to start a campaign.&rdquo;</p>
                <br><br>',
            'problem' => '<p>People living in poverty are often trapped because they are excluded from the rest of society, denied a say, and threatened with violence and insecurity.</p>
                <p>Rights are the key for people to break out of the poverty trap. Put simply, respect for human rights demands inclusion, demands that everyone gets a say, demands that those in power protect people from threats to their security.</p>
                <p class="text-right"><strong>Housing</strong></p>
                <p>We all have the right to housing, yet over 10% of people worldwide live in a slum or informal settlement. Living conditions are often dire with overcrowding, little or no access to clean water, toilets or healthcare. Many people living in slums or informal settlements are not protected from harassment such as forced evictions because their right to live there is not legally recognised.</p>
                <p>Forced evictions are when people are removed from their homes and lands without advance notice, consultation and compensation. They are illegal and violate the right to housing. Often forced evictions are violent, destroy livelihoods and make people homeless.</p>
                <p class="text-right"><strong>Health</strong></p>
                <p>The things that help keep us healthy - safe water, nutritious food, housing and information, such as sex education – are often absent or limited for people living in slums and informal settlements. And when people do get ill, they rarely have access to adequate health care.</p>
                <p>We all have the right to be as healthy as we can possibly be – both mentally and physically. This doesn&rsquo;t mean we have the right to be healthy – no one can have perfect health all the time. It means that we should all be able to access health care and information regardless of who we are, where we live or how well-off we are. And, importantly, it means we all have the right to make decisions about our own body and health.</p>
                <p class="text-right"><strong>Education</strong></p>
                <p>Primary education should be free, and compulsory, everywhere. Children need to be able to get to school without walking for hours, or through minefields. They should be able to learn and enjoy school life. Yet time and again, children from poor and marginalised communities are denied an education or experience discrimination.</p>
                <br>',
            'image' => [
                'src' => 'img/dignity1.jpg',
                'target' => 'dignity-modal',
                'caption' => 'Children play in a rubbish dump in Hanuabada village, Port Moresby, Papua New Guinea. There is no running water and proper toilets in people\'s homes. 30 May, 2013. © Vlad Sokhin',
                'modal' => 'Children play in a rubbish dump in Hanuabada village, Port Moresby, Papua New Guinea.'
            ],
            'issue' => '<p><strong>Justice</strong></p>
                <p>Many of the issues around poverty are known as &ldquo;economic, social and cultural&rdquo; (ESC) rights. They include:</p>
                <p>• <strong>Rights at work</strong>, such as fair conditions of employment.<br>
                    • <strong>Right to education</strong>, including free and compulsory primary education.<br>
                    • <strong>Cultural rights</strong> of minorities and Indigenous Peoples.<br>
                    • <strong>Right to the highest attainable standard of physical and mental health</strong>, such as access to quality health services.<br>
                    • <strong>Right to adequate housing</strong>, including protection from forced eviction.<br>
                    • <strong>Right to food</strong>, including being able to obtain nutritious food.<br>
                    • <strong>Right to water</strong>, including affordable clean water.<br>
                    • <strong>Right to sanitation</strong>, including access to a safe toilet.</p>
                <p>For years it seemed almost impossible to challenge the government if you were denied these rights. Who do you complain to? Who will listen?</p>
                <p>In May 2013, the Optional Protocol to the Covenant on Economic, Social and Cultural Rights came into force. As of the end of 2014, 17 countries – from Gabon and Argentina to Spain and Mongolia – had fully accepted this new mechanism that gives people the ability to seek justice from the UN, if their own country won&rsquo;t listen.</p>
                <p>These &lsquo;protocols&rsquo; may sound legalistic and irrelevant, but they can have real teeth. The more we use them, the more powerful they will be.</p>
                <br><br>',
            'action' => '<p class="text-right">Governments should</p>
                <p>• Guarantee all economic, social, and cultural rights without discrimination. <br>
                    • Better prioritise how they spend money - putting the most disadvantaged first. <br>
                    • Prioritise minimum essential levels of rights, such as free primary education. <br>
                    • Stop evicting people from their homes without proper advance notice, compensation or consultation.<br>
                    • Sign and ratify the Optional Protocol to the Covenant on Economic, Social and Cultural Rights.<br>
                    • Make sure that economic development projects (such as infrastructure or mining), help the most disadvantaged and do not lead to human rights abuses.</p>',
            'key_facts' => '<h1 class="text-center">842M</h1>
        <p>842 million people are undernourished.</p>
        <h1 class="text-center">889M</h1>
        <p>The number of people expected to live in slums by 2020.</p>
        <h1 class="text-center">61M</h1>
        <p>61 million children (mainly girls) have no access to education.</p>
        <h1 class="text-center">8.1M</h1>
        <p>8.1 million the number of children who died before reaching their fifth birthday. Mostly from preventable causes and curable illness.</p>
        <p></p>'
        ]
    ]

];


$page = $content['mission'][$permalink];