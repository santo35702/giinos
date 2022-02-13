<?php
    $en_selected = '';
    $th_selected = '';
    $ln = '';

    if ((isset($_GET['ln']) && $_GET['ln'] == 'en') || !isset($_GET['ln'])) {
        $en_selected = 'selected';
        $ln = 'en';
    } else {
        $th_selected = 'selected';
        $ln = 'th';
    };

    $title = array(
        'en' => 'GIINOS-Software Intelligence',
        'th' => 'GIINOS-ซอฟต์แวร์อัจฉริยะ',
    );

    $navbar = array(
        'en' => array(
                'Home',
                'What we do',
                'Success Story',
                'Team and Culture',
                'We’re hiring',
                'Contact Us'
            ),
        'th' => array(
            'บ้าน',
            'เราทำอะไร',
            'เรื่องราวความสำเร็จ',
            'ทีมงานและวัฒนธรรม',
            'เรากำลังจ้าง',
            'ติดต่อเรา'
        ),
    );

    $homeContent = array(
        'en' => ['title' => 'Intelligent <span class="fluid">Fluid</span> Process Flow Management Platform',
            'description' => 'for maximizing <br><span class="hero-p">holistic values</span>',
            ],
        'th' => ['title' => 'แพลตฟอร์ม <span class="fluid">Fluid</span> อัจฉริยะ ผังกระบวนการ แพลตฟอร์มการจัดการ',
            'description' => 'เพื่อเพิ่ม <br><span class="hero-p">คุณค่าแบบองค์รวม</span>',
            ],
    );

    $customerContent = array(
        'en' => [
            'h2' => 'Some of Our Great Customers',
            'h3' => 'Some of the companies we have worked with',
            ],
        'th' => [
            'h2' => 'ลูกค้ารายใหญ่บางส่วนของเรา',
            'h3' => 'บริษัทบางแห่งที่เราเคยร่วมงานด้วย',
            ],
    );

    $missionContent = array(
        'en' => [
            'mission' => [
                'title' => 'Mission',
                'description' => 'Maximizing Value Holistic Values is our core mission which is base on these three values.',
                ],
            'customer' => [
                'title' => 'Customer Holistic <br>Values',
                'description' => 'We keep delivering customer value in many forms beyond the solutiom,for example, care, consultation, or whatever we can do for our customers, we will.',
                ],
            'team' => [
                'title' => 'Team Holistic <br>Values',
                'description' => 'We also making sure that all teams also percieve the value while they work together to achive the first mission. Team suppose to support each other to make us “better”. Atmosphere at workplace & culture are one of responsibility for
                    team to keep it good all the time in order to achive overall mission.',
                ],
            'other' => [
                'title' => 'Individual Holistic <br>Values',
                'description' => 'This mission is not about “yourself” but tt’s for “everyone”. As a team member, everybody has mission to take care team member’s holistic values including yours.',
                ],
            ],
        'th' => [
            'mission' => [
                'title' => 'ภารกิจ',
                'description' => 'การเพิ่มมูลค่าสูงสุด คุณค่าแบบองค์รวมเป็นพันธกิจหลักของเราซึ่งมีพื้นฐานอยู่บนค่านิยมทั้งสามนี้',
                ],
            'customer' => [
                'title' => 'คุณค่าของลูกค้าแบบองค์รวม',
                'description' => 'เรายังคงมอบคุณค่าให้กับลูกค้าในหลายรูปแบบนอกเหนือจากการแก้ปัญหา เช่น การดูแล การให้คำปรึกษา หรืออะไรก็ตามที่เราสามารถทำได้เพื่อลูกค้าของเรา เราจะทำ',
                ],
            'team' => [
                'title' => 'ทีมแบบองค์รวม <br>ค่า',
                'description' => 'เรายังทำให้แน่ใจว่าทุกทีมรับรู้ถึงคุณค่าในขณะที่พวกเขาทำงานร่วมกันเพื่อบรรลุภารกิจแรก ทีมควรจะสนับสนุนซึ่งกันและกันเพื่อให้เรา "ดีขึ้น" บรรยากาศในที่ทำงานและวัฒนธรรมเป็นความรับผิดชอบอย่างหนึ่งของ
                        ให้เป็นทีมที่ดีตลอดเวลาเพื่อบรรลุภารกิจโดยรวม',
                ],
            'other' => [
                'title' => 'บุคคล <br>ค่านิยม',
                'description' => 'ภารกิจนี้ไม่ได้เกี่ยวกับ "ตัวคุณเอง" แต่มีไว้สำหรับ "ทุกคน" ในฐานะสมาชิกในทีม ทุกคนมีภารกิจในการดูแลค่านิยมแบบองค์รวมของสมาชิกในทีมรวมทั้งของคุณ',
                ],
            ],
    );

    $fluidContent = array(
        'en' => [
            'title' => 'Why Fluid Process Flow ?',
            'description' => 'Establishing a well defined process flow is challenging mission itself. But today, in the world of rappid changes and unable to predicted challenges, you need not only a well defined one , but abilities to adjust / change dynamically also.This is why at Giinos, we are always focusing to invent the way how can we make process flow “fluid” that can immediately help our customers, especially in health sectors, responde to changes quickly over the night or even within a few hours in order to adapt to threat like COVID-19 pandemics. That’s where, everything have to be combined together starting from domain-specific problem understanding, provlem solving skills, experiences, skills to choose the right technologies, platform building and visions and apply AI or machine learning / data analytics to make it “intelligent fluid”.',
            ],
        'th' => [
            'title' => 'ทำไมต้อง Fluid Process Flow',
            'description' => 'การสร้างโฟลว์กระบวนการที่กำหนดไว้อย่างชัดเจนถือเป็นภารกิจที่ท้าทาย แต่วันนี้ ในโลกของการเปลี่ยนแปลงอย่างรวดเร็วและไม่สามารถคาดเดาความท้าทายได้ คุณไม่เพียงต้องการสิ่งที่กำหนดมาอย่างดีเท่านั้น แต่ยังต้องมีความสามารถในการปรับเปลี่ยน/เปลี่ยนแปลงแบบไดนามิกด้วย ด้วยเหตุนี้ที่ Giinos เราจึงมุ่งเน้นที่จะคิดค้นวิธีที่เราจะทำได้อย่างไร ทำให้การไหลของกระบวนการเป็น "ของเหลว" ที่สามารถช่วยลูกค้าของเราได้ทันที โดยเฉพาะอย่างยิ่งในภาคสุขภาพ ตอบสนองต่อการเปลี่ยนแปลงอย่างรวดเร็วในชั่วข้ามคืนหรือแม้กระทั่งภายในไม่กี่ชั่วโมงเพื่อปรับตัวให้เข้ากับภัยคุกคาม เช่น การระบาดใหญ่ของ COVID-19 นั่นคือที่ที่ทุกอย่างต้องรวมเข้าด้วยกันโดยเริ่มจากการเข้าใจปัญหาเฉพาะโดเมน ทักษะการแก้ปัญหา ประสบการณ์ ทักษะในการเลือกเทคโนโลยีที่เหมาะสม การสร้างแพลตฟอร์มและวิสัยทัศน์ และใช้ AI หรือการเรียนรู้ของเครื่อง / การวิเคราะห์ข้อมูลเพื่อทำให้เป็น “ของเหลวอัจฉริยะ”',
            ],
    );

    $realtimeContent = array(
        'en' => [
            'title' => 'Realtime Insights & <br>Adapt-to-change Awareness.',
            'description' => 'Fluid Process Flow starts from “knowing where should be adjusted or changed”. Otherwise we just change workflow blindly and unable to measure the result of changes.<br>Our customers connected with insights via various channels started from realtime-insights-delivery mobile app for top management, sophisticated data analytics report, department-level mission-based dashboard and warroom dashboard for operation team. <br>We heavily putting our efforts to laydown platform design to achive realtime insights since the day one. With Realtime Insights, we are ready to convince ours customer to have Adapt-to-change Awareness which is big obstrucle in most organization who want to transform into digital organization.',
            ],
        'th' => [
            'title' => 'ข้อมูลเชิงลึกแบบเรียลไทม์ & <br>Adapt-to-change Awareness',
            'description' => 'การไหลของของไหลเริ่มต้นจาก “การรู้ว่าควรปรับปรุงหรือเปลี่ยนแปลงที่ใด” มิฉะนั้น เราก็แค่เปลี่ยนเวิร์กโฟลว์อย่างสุ่มสี่สุ่มห้าและไม่สามารถวัดผลลัพธ์ของการเปลี่ยนแปลงได้<br>ลูกค้าของเราเชื่อมต่อกับข้อมูลเชิงลึกผ่านช่องทางต่างๆ ที่เริ่มต้นจากแอปมือถือส่งมอบข้อมูลเชิงลึกแบบเรียลไทม์สำหรับผู้บริหารระดับสูง รายงานการวิเคราะห์ข้อมูลที่ซับซ้อน ตามภารกิจระดับแผนก แดชบอร์ดและแดชบอร์ด warroom สำหรับทีมปฏิบัติการ <br>เราใช้ความพยายามอย่างมากในการจัดวางการออกแบบแพลตฟอร์มเพื่อให้ได้ข้อมูลเชิงลึกแบบเรียลไทม์ตั้งแต่วันแรก ด้วย Realtime Insights เราพร้อมที่จะโน้มน้าวลูกค้าให้มีการรับรู้ถึงการเปลี่ยนแปลงซึ่งเป็นอุปสรรคใหญ่ในองค์กรส่วนใหญ่ที่ต้องการแปลงเป็นองค์กรดิจิทัล',
            ],
    );

    $platformContent = array(
        'en' => [
            'title' => 'Intelligent Fluid Platform & <br>Way ahead.',
            'description' => 'We keep our platform flexible and always see beyond what we can do now. We do R&D, co-ordinate with our partners to make sure that there is no deathend for customers. Applying new technologies like machine learning, AI and Web3 is our scope & mission to seamlessly delivery “smooth people interactions” for everyone. <br>We do release roadmap & truly consult, planing and support them to apply new technologies, features from our roadmap to maximize value for our customers. So that the beautiful of platform building, “deliver value”.',
            ],
        'th' => [
            'title' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'description' => 'เรารักษาแพลตฟอร์มของเราไว้อย่างยืดหยุ่นและมองเห็นมากกว่าสิ่งที่เราสามารถทำได้ในตอนนี้ เราทำ R&D ประสานงานกับพันธมิตรของเราเพื่อให้แน่ใจว่าจะไม่มีการตายสำหรับลูกค้า การใช้เทคโนโลยีใหม่ๆ เช่น แมชชีนเลิร์นนิง, AI และ Web3 คือขอบเขตและพันธกิจของเราในการนำเสนอ "ปฏิสัมพันธ์ที่ราบรื่นกับผู้คน" สำหรับทุกคน <br>เราเปิดตัวแผนงาน & ให้คำปรึกษา วางแผน และสนับสนุนพวกเขาอย่างแท้จริงในการใช้เทคโนโลยีใหม่ คุณลักษณะจากแผนงานของเราเพื่อเพิ่มมูลค่าสูงสุดสำหรับลูกค้าของเรา เพื่อให้ความสวยงามของการสร้างแท่น “ส่งมอบคุณค่า”',
            ],
    );


    $holisticContent = array(
        'en' => [
            'title' => 'Holistic Value, value for everyone.',
            'description' => 'At Giinos, we love word “Holistic”. It’s always guides you to see big picture, as a whole picture, long term and specially it’s “empty yourself.”. This let you start thinking for everyone and leave yourself for the last.<br>We apply same philosophy into our platform & solutions. “Maxinmizing value for everyone who get involved with”. Insights could not be trust by top management if frontline users could not see the importance of every single click they do.<br> Our ecosystem is not only for focus on application for users, but we also focus for supporting tools, operational assisting applications like system alerts that keep 24/7 operations run smoothly.',
            ],
        'th' => [
            'title' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'description' => 'เรารักษาแพลตฟอร์มของเราไว้อย่างยืดหยุ่นและมองเห็นมากกว่าสิ่งที่เราสามารถทำได้ในตอนนี้ เราทำ R&D ประสานงานกับพันธมิตรของเราเพื่อให้แน่ใจว่าจะไม่มีการตายสำหรับลูกค้า การใช้เทคโนโลยีใหม่ๆ เช่น แมชชีนเลิร์นนิง, AI และ Web3 คือขอบเขตและพันธกิจของเราในการนำเสนอ "ปฏิสัมพันธ์ที่ราบรื่นกับผู้คน" สำหรับทุกคน <br>เราเปิดตัวแผนงาน & ให้คำปรึกษา วางแผน และสนับสนุนพวกเขาอย่างแท้จริงในการใช้เทคโนโลยีใหม่ คุณลักษณะจากแผนงานของเราเพื่อเพิ่มมูลค่าสูงสุดสำหรับลูกค้าของเรา เพื่อให้ความสวยงามของการสร้างแท่น “ส่งมอบคุณค่า”',
            ],
    );

    $successContent = array(
        'en' => [
            'title' => 'customer stories',
            'display3' => 'Some of our success stories',
            'display6' => 'Building a good customer experience does not happen by <br>accident. It happens by maximizing holistic values.',
            'mission' => [
                'title' => 'The success of workflow leaning and quick responding process flow adaptation during COVID-19 threat.',
                'description' => 'By applying our solutions, CCIT has lean processes and increase a lot flexibilities on patient flow management that let CCIT handle thier situation very well during tough time of COVID-19 in Thailand. One of the main components of this story is “Workflow-Centric Med Delivery Solution” that let all related departments work seamlessly together to help patient get thier medicines during lockdown period with ability to track delivery status & process in realtime.   But not only that, CCIT goes beyond in-hospital patient flow management only. They also bring in tele-consultation via mobile application which is one of our ecosystem solution to take care of patient who meet the conditions that be able to do tele-consultation to avoid to come over to hospital during COVID-10 situation. And we believe this will be one of a new normal way of seeing doctor very soon in the coming future.',
                ],
            'mission1' => [
                'title' => 'Minimize patient overcrowning by applying insights from Holistic Patient Flow Management Solution.',
                'description' => 'With almost 40 services areas in the hospital and around 1,800 - 2,500 paitent visits per day force us to lay down workflows for each services area uniquly in order to capture data & how patient flows in each area. Yes, it’s so tough for us to figure out all 40 workflow in deep details of clinical domain. With our healthcare export who working so hard with platform team. We come up with the most sophisticated healthcare workflow that is able to capture very details of movement inside hospital. And the result is now NRH, they are able see where to improve overcrown issues in some area by using our analytic insights effectively. The bautiful things is now they have baseline statistics and every staffs have “Adapt-to-change Awareness” in thier mind by just 6 months after using our solutions.',
                ],
            'mission2' => [
                'title' => 'The Biggest Holistic Patient Flow Management Solution in North East of Thailand.',
                'description' => '“3,500-4,500 patient visits per day”, It’s scarely figures for us. We carefully dicussed & design solution with frontline users, mid-management and top-management staffs since the start of project to make sure that we can delivery “holistic values” to everyone as much as we could. We integrated our solution with their robotic medicine system to maximize value on both staff and patient side in pharmacy services area. Top management started using our realtime insights delivery mobile appliation since day one and keep looking ahead to process improvement inside such a visionary organization.',
                ],
            ],
        'th' => [
            'title' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'display3' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'display6' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'mission' => [
                'title' => '',
                'description' => '',
                ],
            'mission1' => [
                'title' => '',
                'description' => '',
                ],
            'mission2' => [
                'title' => '',
                'description' => '',
                ],
            ],
    );

    $teamContent = array(
        'en' => [
            'title' => 'Team & Culture',
            'description' => '<strong class="ps-5">At Giinos, we apply these principles to every aspect of working together… <br></strong>
            <strong>TRUST</strong>:We trust each other, we assign and leave the task to you. So, you will be pushed to the max at certain point…don’t forget to “trust yourself” as well.<br>
            <strong>OPEN</strong>: We communicate, raise concerns, asking for support openly here at Giinos. By having “maximizing holistic value” mindsets, so we “open” for that things... <br>
            <strong>EMPATHY</strong>: we empathize with our customers, platform we built, and everyone in team. So, whatever challenges we faced with these fundamental principles let us achive it always.',
            ],
        'th' => [
            'title' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'description' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            ],
    );

    $hiringContent = array(
        'en' => [
            'heading' => [
                'display1' => 'We’re hiring !',
                'display2' => 'We are looking for talented people to team up with us to reach bigger goals.',
                ],
            'description' => [
                'img1' => 'Team spirit of working',
                'img2' => 'Collaboration Communication Skills',
                'img3' => 'Rise concerns & ready for comments',
                'img4' => 'Apply knowledge',
                'img5' => 'Be Creative',
                'img6' => 'Self-learner',
                'img7' => 'Concepts of UX',
                'img8' => 'Good English Skills',
                ],
            'box1' => [
                'heading-box' => [
                    'title' => '<span class="hiring">Backend</span> Platform Software<br> Engineer',
                    'description' => 'The most challenging for this position is building platform base on our visions and business requirements together. They have to identify platform architecture characteristics, such as performance, security, scalability,
                        etc., that should take into account on particular module they’re working on. Not only that, in order to maximize holistic value, they have to make sure that on support side such as frontline technical staff, implementation
                        team or operation team also are able to do thier own jobs very well via platform support tools that Backend Platform Software Engineer has provided.',
                    ],
                'img-box' => [
                    'img1' => 'Rust',
                    'img2' => 'Node JS',
                    'img3' => 'Docker',
                    'img4' => 'Kubernetes',
                    'img5' => 'Java Springboot',
                    ],
                ],
            'box2' => [
                'heading-box' => [
                    'title' => '<span class="frontend">Frontend</span> Platform Software <br>Engineer',
                    'description' => 'To build platform to support “fluid” process flow characteristics. Frontend platform software engineer need to design and see beyond what customer want. Ability to make system configurable is main responsibility for this role. UX/UI skills are essential here in order to maximize holistic value to whom who interacts with the platform. Web application or mobile application we built is main channel to delivery such a huge value to everyone…including our team',
                    ],
                'img-box' => [
                    'img1' => 'Web Assembly',
                    'img2' => 'Web Component',
                    'img3' => 'Flutter',
                    'img4' => 'Ionic Framework',
                    'img5' => 'Angular',
                    ],
                ],
            'box3' => [
                'heading-box' => [
                    'title' => 'Platform <span class="sre">DevOps & SRE</span>',
                    'description' => 'Keeping the system up & running smoothly is basic responsibility of this role. But keeping things “fluid” and able to delivery “holistic value” is the most fun and challenging parts for this position. We combinded Dev/Ops and SRE (Site Reliability Enginerr) with our core philosophy to make sure that “Platform Ops & Site Reliability Engineer” is one of our main component to really make “fluid process flow platform” emering in front of our customers...<br> They will start from provisioning infrastructure from the ground up, working with platform engineer on deployment process by applying automation tools, keeping monitor platform using sophistiated tools and care tacker mindsets to fullfill the missions.',
                    ],
                'img-box' => [
                    'img1' => 'Python',
                    'img2' => 'Shell scripting',
                    'img3' => 'Markdown',
                    'img4' => 'Prometheus',
                    'img5' => 'Grafana',
                    'img6' => 'Ansible',
                    'img7' => 'Gitlab CI/CD',
                    'img8' => 'Jenkin',
                    ],
                ],
            'box4' => [
                'heading-box' => [
                    'title' => 'Solution <span class="qa">QA & Implementationr</span>',
                    'description' => 'Each customer has thier own context to plug our solution into. This is very crucial steps cause we have to make sure what we delivery is really work and “holistic value” have been truely spreading among cusomer’s
                        organization. Solution QA & Implementation is our spearhead who make things happen at site. They work closely with frontline users, manager or even management at some certain pont of solution implementation in order to
                        blend in new solution into users daily life. Sometime they have to re-configuration, re-testing and training users again and again. We will allow this to happen cause our goal is to achive “delivery truely holistic
                        value”...',
                    ],
                'img-box' => [
                    'img1' => 'Cypress',
                    'img2' => 'Robot framework',
                    'img3' => 'Markdown',
                    'img4' => 'Excel',
                    ],
                ],
            'box5' => [
                'heading-box' => [
                    'title' => 'Holistic Value Data Analytics & <span class="Insights"><br>Insights Delivery</span>',
                    'description' => 'Keeping the system up & running smoothly is basic responsibility of this role. But keeping things “fluid” and able to delivery “holistic value” is the most fun and challenging parts for this position. We combinded Dev/Ops and SRE (Site Reliability Enginerr) with our core philosophy to make sure that “Platform Ops & Site Reliability Engineer” is one of our main component to really make “fluid process flow platform” emering in front of our customers...<br>They will start from provisioning infrastructure from the ground up, working with platform engineer on deployment process by applying automation tools, keeping monitor platform using sophistiated tools and care tacker mindsets to fullfill the missions.',
                    ],
                'img-box' => [
                    'img1' => 'Excel',
                    'img2' => 'Markdown',
                    'img3' => 'Tableau',
                    'img4' => 'Power BI',
                    'img5' => 'SQL',
                    ],
                ],
            ],
        'th' => [
            'heading' => [
                'display1' => 'We’re hiring !',
                'display2' => 'We are looking for talented people to team up with us to reach bigger goals.',
                ],
            'description' => [
                'img1' => '',
                'img2' => '',
                'img3' => '',
                'img4' => '',
                'img5' => '',
                'img6' => '',
                'img7' => '',
                'img8' => '',
                ],
            'box1' => [
                'heading-box' => [
                    'title' => '',
                    'description' => '',
                    ],
                'img-box' => [
                    'img1' => 'Rust',
                    'img2' => 'Node JS',
                    'img3' => 'Docker',
                    'img4' => 'Kubernetes',
                    'img5' => 'Java Springboot',
                    ],
                ],
            'box2' => [
                'heading-box' => [
                    'title' => '',
                    'description' => '',
                    ],
                'img-box' => [
                    'img1' => 'Web Assembly',
                    'img2' => '',
                    'img3' => '',
                    'img4' => '',
                    'img5' => '',
                    ],
                ],
            'box3' => [
                'heading-box' => [
                    'title' => '',
                    'description' => '',
                    ],
                'img-box' => [
                    'img1' => '',
                    'img2' => '',
                    'img3' => '',
                    'img4' => '',
                    'img5' => '',
                    'img6' => '',
                    'img7' => '',
                    'img8' => '',
                    ],
                ],
            'box4' => [
                'heading-box' => [
                    'title' => '',
                    'description' => '',
                    ],
                'img-box' => [
                    'img1' => '',
                    'img2' => '',
                    'img3' => '',
                    'img4' => '',
                    ],
                ],
            'box5' => [
                'heading-box' => [
                    'title' => '',
                    'description' => '',
                    ],
                'img-box' => [
                    'img1' => 'Excel',
                    'img2' => 'Markdown',
                    'img3' => 'Tableau',
                    'img4' => 'Power BI',
                    'img5' => 'SQL',
                    ],
                ],
            ],
    );

    $contactBox = array(
        'en' => [
            'heading' => 'Contact us at',
            'description' => 'If you are interested in working with our team, you can contact us at the address listed on your right hand side.<br>We sincerely hope that you will grow with us in the future.',
            'address' => '327/1 Soi Ladprao 26, Chomphon Subdistrict<br> Chatuchak District, Bangkok 10900',
            'phone' => '02-077-6114',
            'mail' => 'developers@giinos.com',
            'line' => '@giinos-career',
            ],
        'th' => [
            'heading' => '',
            'description' => '',
            'address' => '',
            'phone' => '',
            'mail' => '',
            'line' => '',
            ],
    );

    $speechContent = array(
        'en' => 'At Giinos, We perceive team & customer <span class="speech"> holistic values</span> by achiving <br>missions together, We humbly stand behind great success of our <br>customers. But we are agressive & hungry to learn more, fail more,.<br> <span class="speech">To creatively build huge huge things for our community.</span>',
        'th' => '',
    );

    $contactContent = array(
        'en' => [
            'title' => 'Contact us',
            'subtitle' => 'Email us to discuss investment, PR or any other question.',
            'form' => [
                'name' => 'Your Name',
                'company' => 'Company Name',
                'email' => 'Email Address',
                'number' => 'Phone Number',
                'subject' => ['Select Softwear...', 'Software1', 'Software2', 'Software3'],
                'message' => 'Your Message here...',
                'button' => 'Submit',
                ],
            ],
        'th' => [
            'title' => '',
            'subtitle' => '',
            'form' => [
                'name' => '',
                'company' => '',
                'email' => '',
                'number' => '',
                'subject' => ['', '', '', ''],
                'message' => '',
                'button' => '',
                ],
            ],
    );

    $footerContent = array(
        'en' => ['Home', 'What we do', 'Success Story', 'Team and Culture', 'We’re hiring', 'Contact Us', 'copyright &copy; 2022 <i class="fa fa-heart text-danger"></i> by Giinoss'],
        'th' => ['', '', '', '', '', '', ''],
    );
 ?>
