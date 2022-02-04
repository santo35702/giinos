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
            'h2' => '',
            'h3' => '',
            ],
        'th' => [
            'h2' => '',
            'h3' => '',
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
                'title' => '',
                'description' => '',
                ],
            'other' => [
                'title' => 'Individual Holistic <br>Values',
                'description' => 'This mission is not about “yourself” but tt’s for “everyone”. As a team member, everybody has mission to take care team member’s holistic values including yours.',
                ],
            ],
        'bn' => [
            'mission' => [
                'title' => 'vission',
                'description' => 'Maximizing Value Holistic Values is our core mission which is base on these three values.',
                ],
            'customer' => [
                'title' => '',
                'description' => '',
                ],
            'team' => [
                'title' => '',
                'description' => '',
                ],
            'other' => [
                'title' => '',
                'description' => '',
                ],
            ],
        'th' => [
            'mission' => [
                'title' => 'session',
                'description' => 'Maximizing Value Holistic Values is our core mission which is base on these three values.',
                ],
            'customer' => [
                'title' => '',
                'description' => '',
                ],
            'team' => [
                'title' => '',
                'description' => '',
                ],
            'other' => [
                'title' => '',
                'description' => '',
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
