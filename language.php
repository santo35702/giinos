<?php
    $en_selected = '';
    $bn_selected = '';
    $th_selected = '';
    $ln = '';

    if ((isset($_GET['ln']) && $_GET['ln'] == 'en') || !isset($_GET['ln'])) {
        $en_selected = 'selected';
        $ln = 'en';
    } elseif (isset($_GET['ln']) && $_GET['ln'] == 'bn') {
        $bn_selected = 'selected';
        $ln = 'bn';
    } else {
        $th_selected = 'selected';
        $ln = 'th';
    };

    $title = array(
        'en' => 'GIINOS-Software Intelligence',
        'bn' => 'GIINOS-সফটওয়্যার ইন্টেলিজেন্স',
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
        'bn' => array(
                'বাড়ি',
                'আমরা কি করি',
                'সাফল্যের কাহিনি',
                'দল এবং সংস্কৃতি',
                'আমরা নিয়োগের করছি',
                'যোগাযোগ'
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
        'bn' => ['title' => 'বুদ্ধিমান <span class="fluid">তরল</span> প্রক্রিয়া প্রবাহ ব্যবস্থাপনা প্ল্যাটফর্ম',
            'description' => 'আমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিন',
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
        'bn' => [
            'h2' => 'আমাদের কিছু মহান গ্রাহক',
            'h3' => 'আমরা কিছু কোম্পানির সাথে কাজ করেছি',
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
        'bn' => [
            'mission' => [
                'title' => 'মিশন',
                'description' => 'আমাদের মূল লক্ষ্য, সর্বোচ্চ মান, হলিস্টিক মান যা এই তিনটি মানের উপর ভিত্তি করে।',
                ],
            'customer' => [
                'title' => 'গ্রাহক হোলিস্টিক <br>মান',
                'description' => 'আমরা সমাধানের বাইরেও অনেক রূপে গ্রাহকের মূল্য সরবরাহ করতে থাকি, উদাহরণস্বরূপ, যত্ন, পরামর্শ, বা আমাদের গ্রাহকদের জন্য আমরা যা কিছু করতে পারি, আমরা করব।',
                ],
            'team' => [
                'title' => 'টিম হোলিস্টিক <br>মান',
                'description' => 'আমরা এটাও নিশ্চিত করছি যে প্রথম মিশনটি অর্জনের জন্য তারা একসাথে কাজ করার সময় সমস্ত দলও মূল্য উপলব্ধি করে। দল আমাদের "ভাল" করতে একে অপরকে সমর্থন করে বলে মনে করা হচ্ছে। কর্মক্ষেত্রে বায়ুমণ্ডল এবং সংস্কৃতি সামগ্রিক লক্ষ্য অর্জনের জন্য এটিকে সর্বদা ভাল রাখা দলের জন্য অন্যতম দায়িত্ব।',
                ],
            'other' => [
                'title' => 'স্বতন্ত্র হোলিস্টিক <br>মান',
                'description' => 'এই মিশনটি "নিজের" সম্পর্কে নয় তবে এটি "সকলের" জন্য। একজন দলের সদস্য হিসাবে, প্রত্যেকেরই লক্ষ্য রয়েছে আপনার সহ দলের সদস্যদের সামগ্রিক মূল্যবোধের যত্ন নেওয়া।',
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
        'bn' => [
            'title' => 'কেন তরল প্রক্রিয়া প্রবাহ?',
            'description' => 'একটি সুনির্দিষ্ট প্রক্রিয়া প্রবাহ প্রতিষ্ঠা করা নিজেই চ্যালেঞ্জিং মিশন। কিন্তু আজ, দ্রুত পরিবর্তনের বিশ্বে এবং চ্যালেঞ্জের ভবিষ্যদ্বাণী করতে অক্ষম, আপনার শুধুমাত্র একটি সুনির্দিষ্ট সংজ্ঞায়িত নয়, গতিশীলভাবে সামঞ্জস্য/পরিবর্তন করার ক্ষমতাও দরকার৷ এই কারণেই জিনোসে, আমরা সর্বদা সেই উপায় উদ্ভাবনের দিকে মনোনিবেশ করি যে কীভাবে আমরা করতে পারি৷ প্রক্রিয়া প্রবাহকে "তরল" করুন যা অবিলম্বে আমাদের গ্রাহকদের সাহায্য করতে পারে, বিশেষ করে স্বাস্থ্য খাতে, কোভিড-১৯ মহামারীর মতো হুমকির সাথে খাপ খাইয়ে নেওয়ার জন্য রাতারাতি বা এমনকি কয়েক ঘণ্টার মধ্যে দ্রুত পরিবর্তনের প্রতিক্রিয়া জানাতে। সেখানেই, ডোমেন-নির্দিষ্ট সমস্যা বোঝা, সমস্যা সমাধানের দক্ষতা, অভিজ্ঞতা, সঠিক প্রযুক্তি বেছে নেওয়ার দক্ষতা, প্ল্যাটফর্ম নির্মাণ এবং দৃষ্টিভঙ্গি এবং এটিকে "বুদ্ধিমান তরল" করতে AI বা মেশিন লার্নিং / ডেটা অ্যানালিটিক্স প্রয়োগ করা থেকে শুরু করে সবকিছুকে একত্রিত করতে হবে।',
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
        'bn' => [
            'title' => 'রিয়েলটাইম অন্তর্দৃষ্টি এবং <br>অ্যাডাপ্ট-টু-চেঞ্জ সচেতনতা।',
            'description' => 'তরল প্রক্রিয়া প্রবাহ "কোথায় সামঞ্জস্য বা পরিবর্তন করা উচিত তা জানা" থেকে শুরু হয়। অন্যথায় আমরা অন্ধভাবে কর্মপ্রবাহ পরিবর্তন করি এবং পরিবর্তনের ফলাফল পরিমাপ করতে অক্ষম।<br>বিভিন্ন চ্যানেলের মাধ্যমে অন্তর্দৃষ্টির সাথে সংযুক্ত আমাদের গ্রাহকরা শীর্ষ ব্যবস্থাপনার জন্য রিয়েলটাইম-অন্তর্দৃষ্টি-ডেলিভারি মোবাইল অ্যাপ থেকে শুরু করে, পরিশীলিত ডেটা বিশ্লেষণ প্রতিবেদন, বিভাগ-স্তরের মিশন-ভিত্তিক অপারেশন দলের জন্য ড্যাশবোর্ড এবং ওয়াররুম ড্যাশবোর্ড। <br>প্রথম দিন থেকেই রিয়েলটাইম অন্তর্দৃষ্টি অর্জনের জন্য প্ল্যাটফর্ম ডিজাইন লেডাউন করার জন্য আমরা প্রচণ্ডভাবে আমাদের প্রচেষ্টা চালিয়ে যাচ্ছি। রিয়েলটাইম ইনসাইটস-এর সাহায্যে, আমরা আমাদের গ্রাহকদের অভিযোজন-টু-পরিবর্তন সচেতনতা রাখতে রাজি করিয়ে দিতে প্রস্তুত যা বেশিরভাগ প্রতিষ্ঠানের ক্ষেত্রে বড় বাধা যারা ডিজিটাল প্রতিষ্ঠানে রূপান্তর করতে চায়।',
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
        'bn' => [
            'title' => 'ইন্টেলিজেন্ট ফ্লুইড প্ল্যাটফর্ম এবং <br>আগামী পথ।',
            'description' => 'আমরা আমাদের প্ল্যাটফর্মকে নমনীয় রাখি এবং সবসময় দেখি আমরা এখন কী করতে পারি। আমরা R&D করি, আমাদের অংশীদারদের সাথে সমন্বয় করি যাতে গ্রাহকদের জন্য কোনো মৃত্যু নেই। মেশিন লার্নিং, AI এবং Web3-এর মতো নতুন প্রযুক্তি প্রয়োগ করা হল আমাদের সুযোগ এবং লক্ষ্য সকলের জন্য নির্বিঘ্নে "মানুষের মিথস্ক্রিয়া" সরবরাহ করা। <br>আমরা রোডম্যাপ প্রকাশ করি এবং আমাদের গ্রাহকদের জন্য মূল্য সর্বাধিক করার জন্য আমাদের রোডম্যাপ থেকে নতুন প্রযুক্তি, বৈশিষ্ট্যগুলি প্রয়োগ করতে তাদের সাথে সত্যই পরামর্শ, পরিকল্পনা এবং সমর্থন করি। যাতে প্ল্যাটফর্ম বিল্ডিং এর সুন্দর, “মূল্য প্রদান”.',
            ],
        'th' => [
            'title' => 'Intelligent Fluid Platform & <br>ทางข้างหน้า',
            'description' => 'เรารักษาแพลตฟอร์มของเราไว้อย่างยืดหยุ่นและมองเห็นมากกว่าสิ่งที่เราสามารถทำได้ในตอนนี้ เราทำ R&D ประสานงานกับพันธมิตรของเราเพื่อให้แน่ใจว่าจะไม่มีการตายสำหรับลูกค้า การใช้เทคโนโลยีใหม่ๆ เช่น แมชชีนเลิร์นนิง, AI และ Web3 คือขอบเขตและพันธกิจของเราในการนำเสนอ "ปฏิสัมพันธ์ที่ราบรื่นกับผู้คน" สำหรับทุกคน <br>เราเปิดตัวแผนงาน & ให้คำปรึกษา วางแผน และสนับสนุนพวกเขาอย่างแท้จริงในการใช้เทคโนโลยีใหม่ คุณลักษณะจากแผนงานของเราเพื่อเพิ่มมูลค่าสูงสุดสำหรับลูกค้าของเรา เพื่อให้ความสวยงามของการสร้างแท่น “ส่งมอบคุณค่า”',
            ],
    );


    // $customerContent = array(
    //     'en' => ,
    //     'bn' => ,
    //     'th' => ,
    // );
 ?>
