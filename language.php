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
        'th' => ['title' => 'ฉลาด <span class="fluid">ของเหลว</span> แพลตฟอร์มการจัดการโฟลว์กระบวนการ',
            'description' => 'เพื่อให้เกิดประโยชน์สูงสุด <br><span class="hero-p">ค่านิยมแบบองค์รวม</span>',
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
                'title' => 'แบบองค์รวมของลูกค้า <br>ค่านิยม',
                'description' => 'เราส่งมอบคุณค่าให้กับลูกค้าในหลายรูปแบบนอกเหนือจากโซลูชัน เช่น การดูแล การให้คำปรึกษา หรืออะไรก็ตามที่เราสามารถทำได้เพื่อลูกค้าของเรา เราจะทำำ',
                ],
            'team' => [
                'title' => 'ทีมแบบองค์รวม <br>ค่านิยม',
                'description' => 'เรายังทำให้แน่ใจว่าทุกทีมรับรู้ถึงคุณค่าในขณะที่พวกเขาทำงานร่วมกันเพื่อบรรลุภารกิจแรก ทีมงานน่าจะสนับสนุนกันเพื่อทำให้เรา “ดีกว่า” บรรยากาศในที่ทำงานและวัฒนธรรมเป็นหนึ่งในความรับผิดชอบของทีมที่จะต้องรักษาไว้ซึ่งความดีตลอดเวลาเพื่อบรรลุภารกิจโดยรวม',
                ],
            'other' => [
                'title' => 'แบบองค์รวมส่วนบุคคล <br>ค่านิยม',
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
            'description' => 'การสร้างโฟลว์กระบวนการที่กำหนดไว้อย่างชัดเจนถือเป็นภารกิจที่ท้าทาย แต่วันนี้ ในโลกของการเปลี่ยนแปลงอย่างรวดเร็วและไม่สามารถคาดเดาความท้าทายได้ คุณไม่เพียงต้องการสิ่งที่กำหนดมาอย่างดีเท่านั้น แต่ยังต้องมีความสามารถในการปรับเปลี่ยน/เปลี่ยนแปลงแบบไดนามิกด้วย ด้วยเหตุนี้ที่ Giinos เราจึงมุ่งเน้นที่จะคิดค้นวิธีที่เราจะทำได้อย่างไร ทำให้การไหลของกระบวนการเป็น "ของเหลว" ที่สามารถช่วยลูกค้าของเราได้ทันที โดยเฉพาะอย่างยิ่งในภาคสุขภาพ ตอบสนองต่อการเปลี่ยนแปลงอย่างรวดเร็วในชั่วข้ามคืนหรือแม้กระทั่งภายในไม่กี่ชั่วโมงเพื่อปรับตัวให้เข้ากับภัยคุกคาม เช่น การระบาดใหญ่ของ COVID-19 นั่นคือที่ที่ทุกอย่างต้องรวมเข้าด้วยกันโดยเริ่มจากการเข้าใจปัญหาเฉพาะโดเมน ทักษะการแก้ปัญหา ประสบการณ์ ทักษะในการเลือกเทคโนโลยีที่เหมาะสม การสร้างแพลตฟอร์มและวิสัยทัศน์ และใช้ AI หรือการเรียนรู้ของเครื่อง / การวิเคราะห์ข้อมูลเพื่อทำให้เป็น “ของเหลวอัจฉริยะ” .',
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
            'description' => 'We keep our platform flexible and always see beyond what we can do now. We do R&D, co-ordinate with our partners to make sure that there is no deathend for customers. Applying new technologies like machine learning, AI and Web3 is our scope & mission to seamlessly delivery “smooth people interactions” for everyone.<br>We do release roadmap & truly consult, planing and support them to apply new technologies, features from our roadmap to maximize value for our customers. So that the beautiful of platform building, “deliver value”.',
            ],
        'th' => [
            'title' => 'แพลตฟอร์มของไหลอัจฉริยะ & <br>ทางข้างหน้า.',
            'description' => 'เรารักษาแพลตฟอร์มของเราไว้อย่างยืดหยุ่นและมองเห็นมากกว่าสิ่งที่เราสามารถทำได้ในตอนนี้ เราทำ R&D ประสานงานกับพันธมิตรของเราเพื่อให้แน่ใจว่าจะไม่มีการตายสำหรับลูกค้า การใช้เทคโนโลยีใหม่ๆ เช่น แมชชีนเลิร์นนิง, AI และ Web3 คือขอบเขตและพันธกิจของเราในการนำเสนอ "การโต้ตอบกับผู้คนที่ราบรื่น" อย่างราบรื่นสำหรับทุกคน<br>เราเผยแพร่แผนงานและให้คำปรึกษา วางแผน และสนับสนุนพวกเขาอย่างแท้จริงในการใช้เทคโนโลยีใหม่ คุณลักษณะจากแผนงานของเราเพื่อเพิ่มมูลค่าสูงสุดสำหรับลูกค้าของเรา เพื่อให้ความสวยงามของการสร้างแท่น “ส่งมอบคุณค่า”',
            ],
    );


    $holisticContent = array(
        'en' => [
            'title' => 'Holistic Value, value for everyone.',
            'description' => 'At Giinos, we love word “Holistic”. It’s always guides you to see big picture, as a whole picture, long term and specially it’s “empty yourself.”. This let you start thinking for everyone and leave yourself for the last.<br>We apply same philosophy into our platform & solutions. “Maxinmizing value for everyone who get involved with”. Insights could not be trust by top management if frontline users could not see the importance of every single click they do.<br> Our ecosystem is not only for focus on application for users, but we also focus for supporting tools, operational assisting applications like system alerts that keep 24/7 operations run smoothly.',
            ],
        'th' => [
            'title' => 'คุณค่าแบบองค์รวม คุณค่าสำหรับทุกคน',
            'description' => 'ที่ Giinos เรารักคำว่า "แบบองค์รวม" มันมักจะแนะนำให้คุณมองภาพใหญ่ในภาพรวม ในระยะยาว และโดยเฉพาะอย่างยิ่ง มันคือ "การทำให้ตัวเองว่างเปล่า" วิธีนี้ช่วยให้คุณเริ่มคิดเพื่อทุกคนและปล่อยให้ตัวเองเป็นคนสุดท้าย<br>เราใช้ปรัชญาเดียวกันในแพลตฟอร์มและโซลูชันของเรา “เพิ่มมูลค่าให้สูงสุดสำหรับทุกคนที่เกี่ยวข้อง” ผู้บริหารระดับสูงไม่อาจเชื่อถือข้อมูลเชิงลึกได้ หากผู้ใช้แนวหน้าไม่เห็นความสำคัญของทุก ๆ คลิกที่พวกเขาทำ<br>ระบบนิเวศของเราไม่ได้มุ่งเน้นที่แอปพลิเคชันสำหรับผู้ใช้เท่านั้น แต่เรายังมุ่งเน้นที่เครื่องมือสนับสนุน แอปพลิเคชันช่วยเหลือในการปฏิบัติงาน เช่น การแจ้งเตือนระบบที่ช่วยให้การทำงานตลอด 24 ชั่วโมงทุกวันไม่ขาดสาย',
            ],
    );

    $successContent = array(
        'en' => [
            'title' => 'customer stories',
            'display3' => 'Some of our success stories',
            'display6' => 'Building a good customer experience does not happen by<br>accident. It happens by maximizing holistic values.',
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
            'title' => 'เรื่องราวของลูกค้า',
            'display3' => 'เรื่องราวความสำเร็จบางส่วนของเรา',
            'display6' => 'การสร้างประสบการณ์ลูกค้าที่ดีไม่ได้เกิดขึ้นโดย<br>อุบัติเหตุ. มันเกิดขึ้นโดยการเพิ่มค่าแบบองค์รวมสูงสุด',
            'mission' => [
                'title' => 'ความสำเร็จของเวิร์กโฟลว์ที่เอนเอียงและการปรับโฟลว์กระบวนการตอบสนองอย่างรวดเร็วในช่วงภัยคุกคามจากโควิด-19',
                'description' => 'ด้วยการใช้โซลูชั่นของเรา CCIT มีกระบวนการแบบลีนและเพิ่มความยืดหยุ่นอย่างมากในการจัดการกระแสผู้ป่วย ซึ่งช่วยให้ CCIT จัดการกับสถานการณ์ของพวกเขาได้เป็นอย่างดีในช่วงเวลาที่ยากลำบากของ COVID-19 ในประเทศไทย หนึ่งในองค์ประกอบหลักของเรื่องนี้คือ “โซลูชันการจัดส่งยาที่เน้นเวิร์กโฟลว์” ที่ให้หน่วยงานที่เกี่ยวข้องทั้งหมดทำงานร่วมกันอย่างราบรื่นเพื่อช่วยให้ผู้ป่วยได้รับยาของพวกเขาในช่วงล็อกดาวน์พร้อมความสามารถในการติดตามสถานะการจัดส่งและกระบวนการในแบบเรียลไทม์ แต่ไม่เพียงเท่านั้น CCIT ยังก้าวไปไกลกว่าการจัดการการไหลของผู้ป่วยในโรงพยาบาลเท่านั้น พวกเขายังนำการให้คำปรึกษาทางไกลผ่านแอปพลิเคชั่นมือถือซึ่งเป็นหนึ่งในโซลูชั่นระบบนิเวศของเราในการดูแลผู้ป่วยที่ตรงตามเงื่อนไขที่สามารถให้คำปรึกษาทางไกลเพื่อหลีกเลี่ยงการมาโรงพยาบาลในช่วงสถานการณ์ COVID-10 และเราเชื่อว่านี่จะเป็นหนึ่งในแนวทางใหม่ในการไปพบแพทย์ในอนาคตอันใกล้นี้',
                ],
            'mission1' => [
                'title' => 'ลดจำนวนผู้ป่วยมากเกินไปโดยใช้ข้อมูลเชิงลึกจากโซลูชันการจัดการการไหลของผู้ป่วยแบบองค์รวม',
                'description' => 'ด้วยพื้นที่ให้บริการเกือบ 40 แห่งในโรงพยาบาล และมีผู้เข้ารับการตรวจประมาณ 1,800 - 2,500 คนต่อวัน ทำให้เราต้องวางผังเวิร์กโฟลว์สำหรับแต่ละพื้นที่ให้บริการอย่างเฉพาะเจาะจง เพื่อเก็บข้อมูลและวิธีที่ผู้ป่วยไหลเวียนในแต่ละพื้นที่ ใช่ เป็นเรื่องยากสำหรับเราที่จะเข้าใจขั้นตอนการทำงานทั้งหมด 40 ขั้นตอนในรายละเอียดเชิงลึกของโดเมนทางคลินิก ด้วยการส่งออกด้านการดูแลสุขภาพของเราที่ทำงานหนักกับทีมแพลตฟอร์ม เราคิดขั้นตอนการทำงานด้านการรักษาพยาบาลที่ซับซ้อนที่สุดที่สามารถบันทึกรายละเอียดของการเคลื่อนไหวภายในโรงพยาบาลได้ และผลที่ได้คือตอนนี้ NRH พวกเขาสามารถเห็นจุดที่จะปรับปรุงปัญหาการครอบฟันในบางพื้นที่โดยใช้ข้อมูลเชิงลึกด้านการวิเคราะห์ของเราอย่างมีประสิทธิภาพ สิ่งที่น่าสนใจคือตอนนี้พวกเขามีสถิติพื้นฐานและพนักงานทุกคนมี "การรับรู้ในการปรับตัวเพื่อการเปลี่ยนแปลง" ในใจของพวกเขาภายในเวลาเพียง 6 เดือนหลังจากใช้โซลูชันของเรา',
                ],
            'mission2' => [
                'title' => 'โซลูชันการจัดการการไหลของผู้ป่วยแบบองค์รวมที่ใหญ่ที่สุดในภาคตะวันออกเฉียงเหนือของประเทศไทย',
                'description' => '“ผู้ป่วย 3,500-4,500 เข้ารับการตรวจต่อวัน” เป็นตัวเลขที่น่าสยดสยองสำหรับเรา เราได้พูดคุยและออกแบบโซลูชันอย่างรอบคอบกับผู้ใช้ระดับแนวหน้า ผู้บริหารระดับกลาง และผู้บริหารระดับสูงตั้งแต่เริ่มโครงการ เพื่อให้แน่ใจว่าเราสามารถมอบ "คุณค่าแบบองค์รวม" ให้กับทุกคนได้มากที่สุด เรารวมโซลูชันของเราเข้ากับระบบยาที่ใช้หุ่นยนต์เพื่อเพิ่มมูลค่าสูงสุดให้กับทั้งพนักงานและผู้ป่วยในพื้นที่ให้บริการร้านขายยา ผู้บริหารระดับสูงเริ่มใช้แอปพลิเคชันมือถือสำหรับส่งข้อมูลเชิงลึกแบบเรียลไทม์ของเราตั้งแต่วันแรก และคอยดำเนินการปรับปรุงภายในองค์กรที่มีวิสัยทัศน์เช่นนี้',
                ],
            ],
    );

    $teamContent = array(
        'en' => [
            'title' => 'Team & Culture',
            'description' => '<strong class="ps-5">At Giinos, we apply these principles to every aspect of working together…<br></strong>
            <strong>TRUST</strong>:We trust each other, we assign and leave the task to you. So, you will be pushed to the max at certain point…don’t forget to “trust yourself” as well.<br>
            <strong>OPEN</strong>: We communicate, raise concerns, asking for support openly here at Giinos. By having “maximizing holistic value” mindsets, so we “open” for that things...<br>
            <strong>EMPATHY</strong>: we empathize with our customers, platform we built, and everyone in team. <br><span class="team"> So, whatever challenges we faced with these fundamental principles let us achive it always.</span>',
            ],
        'th' => [
            'title' => 'ทีมและวัฒนธรรม',
            'description' => '<strong class="ps-5">ที่ Giinos เราใช้หลักการเหล่านี้กับทุกแง่มุมของการทำงานร่วมกัน…<br></strong>
            <strong>ความไว้วางใจ</strong>:เราไว้วางใจซึ่งกันและกัน เรามอบหมายและมอบงานให้กับคุณ ดังนั้นคุณจะถูกผลักดันให้ถึงจุดหนึ่ง…อย่าลืม "เชื่อมั่นในตัวเอง" ด้วยเช่นกัน<br>
            <strong>เปิด</strong>: เราสื่อสาร แจ้งข้อกังวล ขอการสนับสนุนอย่างเปิดเผยที่ Giinos การมีกรอบความคิด “เพิ่มมูลค่าสูงสุด” เราจึง “เปิดกว้าง” สำหรับสิ่งนั้น...<br>
            <strong>ความเอาใจใส่</strong>: เราเข้าใจลูกค้า แพลตฟอร์มที่เราสร้างขึ้น และทุกคนในทีม <br><span class="team"> ดังนั้น ไม่ว่าความท้าทายใดที่เราเผชิญกับหลักการพื้นฐานเหล่านี้ ทำให้เราบรรลุเป้าหมายได้เสมอ</span>',
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
                    'title' => 'Solution <span class="qa">QA & Implementation</span>',
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
                'display1' => 'เรากำลังจ้าง !',
                'display2' => 'เรากำลังมองหาคนที่มีความสามารถมาร่วมงานกับเราเพื่อบรรลุเป้าหมายที่ใหญ่ขึ้น',
                ],
            'description' => [
                'img1' => 'จิตวิญญาณการทำงานเป็นทีม',
                'img2' => 'ทักษะการสื่อสารในการทำงานร่วมกัน',
                'img3' => 'เพิ่มความกังวลและพร้อมสำหรับความคิดเห็น',
                'img4' => 'ใช้ความรู้',
                'img5' => 'มีความคิดสร้างสรรค์',
                'img6' => 'เรียนรู้ด้วยตนเอง',
                'img7' => 'แนวคิดของ UX',
                'img8' => 'ทักษะภาษาอังกฤษดี',
                ],
            'box1' => [
                'heading-box' => [
                    'title' => '<span class="hiring">แบ็กเอนด์</span> ซอฟต์แวร์แพลตฟอร์ม<br> วิศวกร',
                    'description' => 'ความท้าทายที่สุดสำหรับตำแหน่งนี้คือการสร้างแพลตฟอร์มตามวิสัยทัศน์และข้อกำหนดทางธุรกิจของเราร่วมกัน พวกเขาต้องระบุลักษณะสถาปัตยกรรมแพลตฟอร์ม เช่น ประสิทธิภาพ ความปลอดภัย ความสามารถในการปรับขนาด ฯลฯ ที่ควรคำนึงถึงโมดูลเฉพาะที่พวกเขากำลังทำงานอยู่ ไม่เพียงเท่านั้น เพื่อเพิ่มมูลค่าองค์รวมให้สูงสุด พวกเขาต้องตรวจสอบให้แน่ใจว่าฝ่ายสนับสนุน เช่น เจ้าหน้าที่เทคนิคระดับแนวหน้า ทีมปฏิบัติการ หรือทีมปฏิบัติการ ยังสามารถทำงานของตนเองได้เป็นอย่างดีผ่านเครื่องมือสนับสนุนแพลตฟอร์มที่วิศวกรซอฟต์แวร์แพลตฟอร์มแบ็กเอนด์ ได้จัดให้',
                    ],
                'img-box' => [
                    'img1' => 'สนิม',
                    'img2' => 'โหนดJS',
                    'img3' => 'นักเทียบท่า',
                    'img4' => 'Kubernetes',
                    'img5' => 'Java Spring Boot',
                    ],
                ],
            'box2' => [
                'heading-box' => [
                    'title' => '<span class="frontend">ส่วนหน้า</span> ซอฟต์แวร์แพลตฟอร์ม<br>วิศวกร',
                    'description' => 'เพื่อสร้างแพลตฟอร์มเพื่อรองรับลักษณะการไหลของกระบวนการ "ของไหล" วิศวกรซอฟต์แวร์แพลตฟอร์มส่วนหน้าต้องออกแบบและมองให้ไกลกว่าที่ลูกค้าต้องการ ความสามารถในการทำให้ระบบสามารถกำหนดค่าได้เป็นความรับผิดชอบหลักสำหรับบทบาทนี้ ทักษะ UX/UI มีความสำคัญอย่างยิ่งในการเพิ่มมูลค่าแบบองค์รวมให้กับผู้ที่โต้ตอบกับแพลตฟอร์ม เว็บแอปพลิเคชันหรือแอปพลิเคชันมือถือที่เราสร้างขึ้นเป็นช่องทางหลักในการส่งมอบคุณค่ามหาศาลให้กับทุกคน...รวมถึงทีมงานของเราด้วย',
                    ],
                'img-box' => [
                    'img1' => 'เว็บแอสเซมบลี',
                    'img2' => 'ส่วนประกอบเว็บ',
                    'img3' => 'กระพือปีก',
                    'img4' => 'Ionic Framework',
                    'img5' => 'เชิงมุม',
                    ],
                ],
            'box3' => [
                'heading-box' => [
                    'title' => 'แพลตฟอร์ม <span class="sre">DevOps & SRE</span>',
                    'description' => 'การรักษาระบบและทำงานได้อย่างราบรื่นเป็นความรับผิดชอบพื้นฐานของบทบาทนี้ แต่การรักษาสิ่งต่าง ๆ ให้ “ลื่นไหล” และสามารถส่งมอบ “คุณค่าแบบองค์รวม” ได้เป็นส่วนที่สนุกและท้าทายที่สุดสำหรับตำแหน่งนี้ เรารวม Dev/Ops และ SRE (Site Reliability Enginerr) เข้ากับปรัชญาหลักของเราเพื่อให้แน่ใจว่า "Platform Ops & Site Reliability Engineer" เป็นหนึ่งในองค์ประกอบหลักของเราในการทำให้ "แพลตฟอร์มการไหลของกระบวนการไหล" ปรากฏต่อหน้าลูกค้าของเราอย่างแท้จริง ..<br> พวกเขาจะเริ่มต้นจากการจัดเตรียมโครงสร้างพื้นฐานตั้งแต่เริ่มต้น ทำงานร่วมกับวิศวกรแพลตฟอร์มในกระบวนการปรับใช้โดยใช้เครื่องมืออัตโนมัติ เฝ้าติดตามแพลตฟอร์มโดยใช้เครื่องมือที่ซับซ้อน และดูแลความคิดของนักแท็คเกอร์เพื่อเติมเต็มภารกิจ',
                    ],
                'img-box' => [
                    'img1' => 'Python',
                    'img2' => 'การเขียนสคริปต์เชลล์',
                    'img3' => 'Markdown',
                    'img4' => 'โพรมีธีอุส',
                    'img5' => 'กราฟานา',
                    'img6' => 'Ansible',
                    'img7' => 'Gitlab CI/CD',
                    'img8' => 'เจนกิน',
                    ],
                ],
            'box4' => [
                'heading-box' => [
                    'title' => 'สารละลาย <span class="qa">QA & การนำไปปฏิบัติ</span>',
                    'description' => 'ลูกค้าแต่ละรายมีบริบทของตนเองในการเชื่อมต่อโซลูชันของเรา นี่เป็นขั้นตอนที่สำคัญมากเพราะเราต้องตรวจสอบให้แน่ใจว่าสิ่งที่เราส่งมอบนั้นได้ผลจริง ๆ และ "คุณค่าแบบองค์รวม" ได้แพร่กระจายไปในหมู่ลูกค้าอย่างแท้จริง
                        องค์กร. QA & Implementation ของโซลูชันคือหัวหอกของเราที่ทำให้สิ่งต่างๆ เกิดขึ้นที่ไซต์งาน พวกเขาทำงานอย่างใกล้ชิดกับผู้ใช้ในแนวหน้า ผู้จัดการ หรือแม้แต่ผู้บริหารที่จุดใช้งานโซลูชันบางแห่งเพื่อ
                        ผสมผสานโซลูชั่นใหม่เข้ากับชีวิตประจำวันของผู้ใช้ บางครั้งพวกเขาต้องกำหนดค่าใหม่ ทดสอบซ้ำ และฝึกอบรมผู้ใช้ครั้งแล้วครั้งเล่า เราจะปล่อยให้สิ่งนี้เกิดขึ้นเพราะเป้าหมายของเราคือบรรลุ "การส่งมอบแบบองค์รวมอย่างแท้จริง
                        ค่า"...',
                    ],
                'img-box' => [
                    'img1' => 'ไซเปรส',
                    'img2' => 'กรอบงานหุ่นยนต์',
                    'img3' => 'Markdown',
                    'img4' => 'Excel',
                    ],
                ],
            'box5' => [
                'heading-box' => [
                    'title' => 'การวิเคราะห์ข้อมูลมูลค่าองค์รวม & <span class="Insights"><br>การแสดงข้อมูลเชิงลึก</span>',
                    'description' => 'การรักษาระบบและทำงานได้อย่างราบรื่นเป็นความรับผิดชอบพื้นฐานของบทบาทนี้ แต่การรักษาสิ่งต่าง ๆ ให้ “ลื่นไหล” และสามารถส่งมอบ “คุณค่าแบบองค์รวม” ได้เป็นส่วนที่สนุกและท้าทายที่สุดสำหรับตำแหน่งนี้ เรารวม Dev/Ops และ SRE (Site Reliability Enginerr) เข้ากับปรัชญาหลักของเราเพื่อให้แน่ใจว่า "Platform Ops & Site Reliability Engineer" เป็นหนึ่งในองค์ประกอบหลักของเราในการทำให้ "แพลตฟอร์มการไหลของกระบวนการไหล" ปรากฏต่อหน้าลูกค้าของเราอย่างแท้จริง ..<br>พวกเขาจะเริ่มต้นจากการจัดเตรียมโครงสร้างพื้นฐานตั้งแต่เริ่มต้น ทำงานร่วมกับวิศวกรแพลตฟอร์มในกระบวนการปรับใช้โดยการใช้เครื่องมืออัตโนมัติ เฝ้าติดตามแพลตฟอร์มโดยใช้เครื่องมือที่ซับซ้อน และทัศนคติของนักแท็คเกอร์เพื่อเติมเต็มภารกิจ',
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
            'heading' => 'ติดต่อเราได้ที่',
            'description' => 'หากคุณสนใจที่จะร่วมงานกับทีมของเรา คุณสามารถติดต่อเราตามที่อยู่ที่ระบุไว้ทางด้านขวามือ<br>เราหวังเป็นอย่างยิ่งว่าคุณจะเติบโตไปพร้อมกับเราในอนาคต',
            'address' => '327/1 ซ.ลาดพร้าว 26 แขวงจอมพล<br> เขตจตุจักร กรุงเทพมหานคร 10900',
            'phone' => '02-077-6114',
            'mail' => 'developers@giinos.com',
            'line' => '@giinos-career',
            ],
    );

    $speechContent = array(
        'en' => 'At Giinos, We perceive team & customer <span class="speech"> holistic values</span> by achiving missions together, We humbly stand behind great success of our customers. But we are agressive & hungry to learn more, fail more,.<br> <span class="speech">To creatively build huge huge things for our community.</span>',
        'th' => 'ที่ Giinos เราเข้าใจทีมและลูกค้าว่า <span class="speech"> ค่านิยมแบบองค์รวม</span> โดยการบรรลุ<br>ภารกิจร่วมกัน เราขอยืนหยัดอยู่เบื้องหลังความสำเร็จอันยิ่งใหญ่ของ<br>ลูกค้าของเรา แต่เรามีความก้าวร้าวและกระหายที่จะเรียนรู้เพิ่มเติม ล้มเหลวให้มากขึ้น<br> <span class="speech">เพื่อสร้างสิ่งที่ยิ่งใหญ่อย่างสร้างสรรค์สำหรับชุมชนของเรา</span>',
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
            'title' => 'ติดต่อเรา',
            'subtitle' => 'ส่งอีเมลถึงเราเพื่อหารือเกี่ยวกับการลงทุน การประชาสัมพันธ์ หรือคำถามอื่นๆ',
            'form' => [
                'name' => 'ชื่อของคุณ',
                'company' => 'ชื่อ บริษัท',
                'email' => 'ที่อยู่อีเมล',
                'number' => 'หมายเลขโทรศัพท์',
                'subject' => ['เลือกซอฟต์แวร์...', 'ซอฟต์แวร์1', 'ซอฟต์แวร์2', 'ซอฟต์แวร์3'],
                'message' => 'ข้อความของคุณที่นี่...',
                'button' => 'ส่ง',
                ],
            ],
    );

    $footerContent = array(
        'en' => ['Home', 'What we do', 'Success Story', 'Team and Culture', 'We’re hiring', 'Contact Us', 'copyright &copy; 2022 <i class="fa fa-heart text-danger"></i> by Giinoss'],
        'th' => ['บ้าน', 'เราทำอะไร', 'เรื่องราวความสำเร็จ', 'ทีมงานและวัฒนธรรม', 'เรากำลังจ้าง', 'ติดต่อเรา', '
ลิขสิทธิ์ &คัดลอก; 2022 <i class="fa-heart text-danger"></i> โดย Giinos'],
    );
 ?>
