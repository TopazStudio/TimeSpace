<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizations')->delete();
        
        \DB::table('organizations')->insert(array (
            0 => 
            array (
                'owner_id' => 91,
                'name' => 'Hayes, Carroll and Beier',
                'description' => 'mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'owner_id' => 59,
                'name' => 'Homenick-Becker',
                'description' => 'quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'owner_id' => 48,
                'name' => 'Weissnat-Legros',
                'description' => 'pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'owner_id' => 30,
                'name' => 'Oberbrunner and Sons',
                'description' => 'interdum mauris non ligula pellentesque ultrices phasellus id sapien in',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'owner_id' => 41,
                'name' => 'Shanahan Inc',
                'description' => 'quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'owner_id' => 38,
                'name' => 'Cremin-Rohan',
                'description' => 'quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'owner_id' => 38,
                'name' => 'Ebert LLC',
                'description' => 'quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'owner_id' => 51,
                'name' => 'Jacobson-Casper',
                'description' => 'pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'owner_id' => 90,
                'name' => 'Mayert-Ebert',
                'description' => 'et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'owner_id' => 41,
                'name' => 'Kuhlman Inc',
                'description' => 'hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'owner_id' => 84,
                'name' => 'Heathcote Group',
                'description' => 'scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'owner_id' => 88,
                'name' => 'Dare-Greenholt',
                'description' => 'sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'owner_id' => 86,
                'name' => 'O\'Reilly LLC',
                'description' => 'erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'owner_id' => 29,
                'name' => 'Toy, Senger and Grant',
                'description' => 'pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'owner_id' => 71,
                'name' => 'Hegmann Inc',
                'description' => 'vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'owner_id' => 93,
                'name' => 'Parisian, Kovacek and Mitchell',
                'description' => 'volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'owner_id' => 86,
                'name' => 'Beier, Schultz and Klein',
                'description' => 'ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'owner_id' => 98,
                'name' => 'Pouros, Stroman and Zemlak',
                'description' => 'venenatis lacinia aenean sit amet justo morbi ut odio cras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'owner_id' => 54,
                'name' => 'Boehm Inc',
                'description' => 'vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'owner_id' => 12,
                'name' => 'Emard, Green and Crona',
                'description' => 'hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'owner_id' => 99,
                'name' => 'O\'Kon-Hyatt',
                'description' => 'penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'owner_id' => 10,
                'name' => 'Schoen, Prosacco and Pfeffer',
                'description' => 'molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'owner_id' => 82,
                'name' => 'Aufderhar-McGlynn',
                'description' => 'augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'owner_id' => 91,
                'name' => 'DuBuque, Wisozk and Russel',
                'description' => 'duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'owner_id' => 57,
                'name' => 'Walsh, Sipes and Walker',
                'description' => 'tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'owner_id' => 21,
                'name' => 'Bergnaum, Fritsch and Lang',
                'description' => 'ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'owner_id' => 21,
                'name' => 'Stanton, Bosco and Casper',
                'description' => 'quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'owner_id' => 93,
                'name' => 'Rempel-Buckridge',
                'description' => 'ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'owner_id' => 46,
                'name' => 'Senger-Crooks',
                'description' => 'quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'owner_id' => 37,
                'name' => 'Hilll-Stark',
                'description' => 'bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'owner_id' => 14,
                'name' => 'Beer Group',
                'description' => 'venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'owner_id' => 78,
                'name' => 'Wiegand, Maggio and Feil',
                'description' => 'in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'owner_id' => 55,
                'name' => 'Volkman LLC',
                'description' => 'curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'owner_id' => 91,
                'name' => 'Nikolaus-Kozey',
                'description' => 'non quam nec dui luctus rutrum nulla tellus in sagittis dui vel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'owner_id' => 80,
                'name' => 'Friesen and Sons',
                'description' => 'quisque erat eros viverra eget congue eget semper rutrum nulla nunc',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'owner_id' => 9,
                'name' => 'Spinka, Zemlak and Beer',
                'description' => 'duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'owner_id' => 81,
                'name' => 'Rutherford-Lueilwitz',
                'description' => 'purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'owner_id' => 83,
                'name' => 'Cummerata, Dicki and Stracke',
                'description' => 'lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'owner_id' => 79,
                'name' => 'Nolan-Huel',
                'description' => 'eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'owner_id' => 15,
                'name' => 'Brown-Labadie',
                'description' => 'donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'owner_id' => 21,
                'name' => 'Ziemann-Kertzmann',
                'description' => 'dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'owner_id' => 8,
                'name' => 'Schuppe-Runte',
                'description' => 'eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'owner_id' => 84,
                'name' => 'Ullrich-Ernser',
                'description' => 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'owner_id' => 14,
                'name' => 'Leffler-Cronin',
                'description' => 'quis turpis sed ante vivamus tortor duis mattis egestas metus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'owner_id' => 68,
                'name' => 'Shanahan-Hamill',
                'description' => 'nunc commodo placerat praesent blandit nam nulla integer pede justo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'owner_id' => 27,
                'name' => 'Daniel Group',
                'description' => 'sit amet lobortis sapien sapien non mi integer ac neque duis bibendum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'owner_id' => 40,
                'name' => 'Barrows-McGlynn',
                'description' => 'sit amet erat nulla tempus vivamus in felis eu sapien',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'owner_id' => 37,
                'name' => 'Schmitt-Collier',
                'description' => 'congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'owner_id' => 2,
                'name' => 'DuBuque-Sporer',
                'description' => 'quisque erat eros viverra eget congue eget semper rutrum nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'owner_id' => 59,
                'name' => 'Kulas, Dickens and Bayer',
                'description' => 'posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'owner_id' => 77,
                'name' => 'Bahringer-Kilback',
                'description' => 'sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'owner_id' => 97,
                'name' => 'Lehner, Homenick and Hoppe',
                'description' => 'nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'owner_id' => 5,
                'name' => 'Prohaska-Doyle',
                'description' => 'id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'owner_id' => 99,
                'name' => 'Heidenreich, Ankunding and Murazik',
                'description' => 'volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'owner_id' => 16,
                'name' => 'Schmeler-Howell',
                'description' => 'ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'owner_id' => 71,
                'name' => 'Rempel-Tremblay',
                'description' => 'platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'owner_id' => 37,
                'name' => 'Macejkovic-Bayer',
                'description' => 'condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'owner_id' => 25,
                'name' => 'Sanford and Sons',
                'description' => 'erat curabitur gravida nisi at nibh in hac habitasse platea dictumst',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'owner_id' => 80,
                'name' => 'Grant Group',
                'description' => 'luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'owner_id' => 91,
                'name' => 'Orn-Greenfelder',
                'description' => 'aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'owner_id' => 36,
                'name' => 'Purdy-Huels',
                'description' => 'nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'owner_id' => 86,
                'name' => 'Beer LLC',
                'description' => 'pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'owner_id' => 41,
                'name' => 'Weber Inc',
                'description' => 'dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'owner_id' => 94,
                'name' => 'Nicolas Group',
                'description' => 'donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'owner_id' => 68,
                'name' => 'Larkin Inc',
                'description' => 'vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'owner_id' => 23,
                'name' => 'Feil-Muller',
                'description' => 'id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'owner_id' => 47,
                'name' => 'Hoppe, Kreiger and Stehr',
                'description' => 'odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'owner_id' => 87,
                'name' => 'Lehner, Satterfield and Runolfsson',
                'description' => 'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'owner_id' => 78,
                'name' => 'O\'Keefe-Green',
                'description' => 'sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'owner_id' => 8,
                'name' => 'Dietrich and Sons',
                'description' => 'sed interdum venenatis turpis enim blandit mi in porttitor pede',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'owner_id' => 79,
                'name' => 'Effertz-Welch',
                'description' => 'tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'owner_id' => 88,
                'name' => 'Kuhlman LLC',
                'description' => 'rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'owner_id' => 88,
                'name' => 'Cruickshank LLC',
                'description' => 'congue diam id ornare imperdiet sapien urna pretium nisl ut',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'owner_id' => 20,
                'name' => 'Orn-Ullrich',
                'description' => 'lobortis ligula sit amet eleifend pede libero quis orci nullam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'owner_id' => 45,
                'name' => 'Daugherty Group',
                'description' => 'turpis a pede posuere nonummy integer non velit donec diam neque vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'owner_id' => 11,
                'name' => 'Feest and Sons',
                'description' => 'tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'owner_id' => 23,
                'name' => 'Ullrich LLC',
                'description' => 'molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'owner_id' => 79,
                'name' => 'Hamill-Cruickshank',
                'description' => 'scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'owner_id' => 34,
                'name' => 'Fisher, Romaguera and Johnston',
                'description' => 'viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'owner_id' => 72,
                'name' => 'MacGyver, Thiel and Cronin',
                'description' => 'lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'owner_id' => 1,
                'name' => 'Hauck-Lowe',
                'description' => 'nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'owner_id' => 8,
                'name' => 'Pfeffer, White and Sipes',
                'description' => 'orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'owner_id' => 12,
                'name' => 'Veum-Zieme',
                'description' => 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'owner_id' => 72,
                'name' => 'Barton, Wilderman and Kris',
                'description' => 'mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'owner_id' => 9,
                'name' => 'Tremblay Group',
                'description' => 'maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'owner_id' => 42,
                'name' => 'Welch, Lubowitz and Hickle',
                'description' => 'vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'owner_id' => 39,
                'name' => 'Yundt, Kutch and Armstrong',
                'description' => 'vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'owner_id' => 5,
                'name' => 'Wolf-Reichel',
                'description' => 'convallis nunc proin at turpis a pede posuere nonummy integer non velit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'owner_id' => 60,
                'name' => 'Kerluke-Rosenbaum',
                'description' => 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'owner_id' => 100,
                'name' => 'Smitham Group',
                'description' => 'lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'owner_id' => 51,
                'name' => 'Hahn-Schimmel',
                'description' => 'lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'owner_id' => 32,
                'name' => 'Halvorson Inc',
                'description' => 'placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'owner_id' => 17,
                'name' => 'Keeling, Herzog and Kunze',
                'description' => 'vulputate ut ultrices vel augue vestibulum ante ipsum primis in',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'owner_id' => 44,
                'name' => 'Schuster Inc',
                'description' => 'leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'owner_id' => 83,
                'name' => 'Pollich LLC',
                'description' => 'nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'owner_id' => 65,
                'name' => 'Stamm-Kshlerin',
                'description' => 'fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'owner_id' => 6,
                'name' => 'Hartmann-Schowalter',
                'description' => 'maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'owner_id' => 17,
                'name' => 'Ritchie and Sons',
                'description' => 'mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'owner_id' => 96,
                'name' => 'Gottlieb, Morar and Sporer',
                'description' => 'in eleifend quam a odio in hac habitasse platea dictumst',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'owner_id' => 78,
                'name' => 'Spencer LLC',
                'description' => 'turpis donec posuere metus vitae ipsum aliquam non mauris morbi non',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}