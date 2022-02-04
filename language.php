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
        'en' => ['title' => 'Intelligent <span class="fluid">Fluid</span> <br> Process Flow <br>Management <br> Platform', 'description' => 'for maximizing <br> <span class="hero-p"> holistic values</span>'],
        'bn' => ['title' => 'আমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিন', 'description' => 'আমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিনআমরা কি করি, আমরা নিয়োগের করছি -- সাফল্যের কাহিন'],
        'th' => ['title' => 'บ้าน, ทีมงานและวัฒนธรรม --- ติดต่อเรา-เรากำลังจ้าง & no more thing', 'description' => 'บ้าน, ทีมงานและวัฒนธรรม --- ติดต่อเรา-เรากำลังจ้าง & no more thingบ้าน, ทีมงานและวัฒนธรรม --- ติดต่อเรา-เรากำลังจ้าง & no more thingบ้าน, ทีมงานและวัฒนธรรม --- ติดต่อเรา-เรากำลังจ้าง & no more thingบ้าน, ทีมงานและวัฒนธรรม --- ติดต่อเรา-เรากำลังจ้าง & no more thingบ้าน, ทีมงานและวัฒนธรรม --- ติดต่อเรา-เรากำลังจ้าง & no more thing'],
    );

    $customerContent = array(
        'en' => '',
        'bn' => '',
        'th' => '',
    );

    $missionContent = array(
        'en' => '',
        'bn' => '',
        'th' => '',
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
