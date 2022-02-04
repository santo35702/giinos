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
        'en' => ['title' => 'Intelligent <span class="fluid">Fluid</span> <br> Process Flow <br>Management <br> Platform',
            'description' => 'for maximizing <br> <span class="hero-p"> holistic values</span>',
            ],
        'bn' => ['title' => 'বুদ্ধিমান <span class="fluid">তরল</span> <br> প্রক্রিয়া প্রবাহ <br>ব্যবস্থাপনা <br> প্ল্যাটফর্ম',
            'description' => 'আমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিন',
            ],
        'th' => ['title' => 'แพลตฟอร์ม <span class="fluid">Fluid</span> อัจฉริยะ <br> ผังกระบวนการ <br>แพลตฟอร์มการจัดการ <br>',
            'description' => 'เพื่อเพิ่ม <br> <span class="hero-p"> คุณค่าแบบองค์รวม</span>',
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

    // $customerContent = array(
    //     'en' => ,
    //     'bn' => ,
    //     'th' => ,
    // );
    // $customerContent = array(
    //     'en' => ,
    //     'bn' => ,
    //     'th' => ,
    // );
    // $customerContent = array(
    //     'en' => ,
    //     'bn' => ,
    //     'th' => ,
    // );
    // $customerContent = array(
    //     'en' => ,
    //     'bn' => ,
    //     'th' => ,
    // );
 ?>
