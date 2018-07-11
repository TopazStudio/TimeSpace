<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'organization_id' => 64,
                'owner_id' => 36,
                'name' => 'Goose, greylag',
                'description' => 'sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            1 => 
            array (
                'organization_id' => 14,
                'owner_id' => 40,
                'name' => 'Bohor reedbuck',
                'description' => 'turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            2 => 
            array (
                'organization_id' => 8,
                'owner_id' => 16,
                'name' => 'Anteater, giant',
                'description' => 'sit amet diam in magna bibendum imperdiet nullam orci pede venenatis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            3 => 
            array (
                'organization_id' => 95,
                'owner_id' => 77,
                'name' => 'Brown brocket',
                'description' => 'vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            4 => 
            array (
                'organization_id' => 56,
                'owner_id' => 34,
                'name' => 'Squirrel, eurasian red',
                'description' => 'mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            5 => 
            array (
                'organization_id' => 86,
                'owner_id' => 87,
                'name' => 'Hedgehog, south african',
                'description' => 'pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            6 => 
            array (
                'organization_id' => 81,
                'owner_id' => 85,
                'name' => 'Cape fox',
                'description' => 'aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            7 => 
            array (
                'organization_id' => 86,
                'owner_id' => 100,
                'name' => 'Agouti',
                'description' => 'nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            8 => 
            array (
                'organization_id' => 50,
                'owner_id' => 48,
                'name' => 'Tree porcupine',
                'description' => 'odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            9 => 
            array (
                'organization_id' => 92,
                'owner_id' => 68,
                'name' => 'Crane, sarus',
                'description' => 'turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            10 => 
            array (
                'organization_id' => 72,
                'owner_id' => 73,
                'name' => 'Capuchin, white-fronted',
                'description' => 'sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            11 => 
            array (
                'organization_id' => 61,
                'owner_id' => 67,
                'name' => 'Snake, tiger',
                'description' => 'ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            12 => 
            array (
                'organization_id' => 88,
                'owner_id' => 87,
                'name' => 'Crowned hawk-eagle',
                'description' => 'velit vivamus vel nulla eget eros elementum pellentesque quisque porta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            13 => 
            array (
                'organization_id' => 80,
                'owner_id' => 69,
                'name' => 'Partridge, coqui',
                'description' => 'sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            14 => 
            array (
                'organization_id' => 74,
                'owner_id' => 83,
                'name' => 'Coyote',
                'description' => 'nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            15 => 
            array (
                'organization_id' => 42,
                'owner_id' => 40,
                'name' => 'Lory, rainbow',
                'description' => 'felis donec semper sapien a libero nam dui proin leo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            16 => 
            array (
                'organization_id' => 34,
                'owner_id' => 54,
                'name' => 'Marmot, hoary',
                'description' => 'nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            17 => 
            array (
                'organization_id' => 21,
                'owner_id' => 38,
                'name' => 'Turtle, eastern box',
                'description' => 'proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            18 => 
            array (
                'organization_id' => 6,
                'owner_id' => 89,
                'name' => 'Buffalo, american',
                'description' => 'nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            19 => 
            array (
                'organization_id' => 59,
                'owner_id' => 68,
                'name' => 'Langur, common',
                'description' => 'quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            20 => 
            array (
                'organization_id' => 53,
                'owner_id' => 46,
                'name' => 'Sloth bear',
                'description' => 'lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            21 => 
            array (
                'organization_id' => 70,
                'owner_id' => 70,
                'name' => 'Insect, stick',
                'description' => 'felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            22 => 
            array (
                'organization_id' => 11,
                'owner_id' => 94,
                'name' => 'Zorro, azara\'s',
                'description' => 'iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            23 => 
            array (
                'organization_id' => 46,
                'owner_id' => 70,
                'name' => 'Nubian bee-eater',
                'description' => 'vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            24 => 
            array (
                'organization_id' => 9,
                'owner_id' => 65,
                'name' => 'Two-toed sloth',
                'description' => 'lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            25 => 
            array (
                'organization_id' => 77,
                'owner_id' => 57,
                'name' => 'Kongoni',
                'description' => 'consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            26 => 
            array (
                'organization_id' => 28,
                'owner_id' => 22,
                'name' => 'Goose, snow',
                'description' => 'quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            27 => 
            array (
                'organization_id' => 21,
                'owner_id' => 61,
                'name' => 'White-winged dove',
                'description' => 'curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            28 => 
            array (
                'organization_id' => 83,
                'owner_id' => 89,
                'name' => 'White-rumped vulture',
                'description' => 'donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            29 => 
            array (
                'organization_id' => 45,
                'owner_id' => 31,
                'name' => 'Echidna, short-beaked',
                'description' => 'platea dictumst etiam faucibus cursus urna ut tellus nulla ut',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            30 => 
            array (
                'organization_id' => 41,
                'owner_id' => 2,
                'name' => 'Gonolek, burchell\'s',
                'description' => 'luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            31 => 
            array (
                'organization_id' => 18,
                'owner_id' => 68,
                'name' => 'Gaur',
                'description' => 'pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            32 => 
            array (
                'organization_id' => 53,
                'owner_id' => 6,
                'name' => 'Stork, marabou',
                'description' => 'aenean sit amet justo morbi ut odio cras mi pede malesuada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            33 => 
            array (
                'organization_id' => 4,
                'owner_id' => 48,
                'name' => 'Baboon, gelada',
                'description' => 'nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            34 => 
            array (
                'organization_id' => 13,
                'owner_id' => 74,
                'name' => 'Giant armadillo',
                'description' => 'turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            35 => 
            array (
                'organization_id' => 22,
                'owner_id' => 61,
                'name' => 'Tern, royal',
                'description' => 'donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            36 => 
            array (
                'organization_id' => 73,
                'owner_id' => 41,
                'name' => 'Nuthatch, red-breasted',
                'description' => 'consequat lectus in est risus auctor sed tristique in tempus sit',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            37 => 
            array (
                'organization_id' => 24,
                'owner_id' => 33,
                'name' => 'Brown pelican',
                'description' => 'tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            38 => 
            array (
                'organization_id' => 35,
                'owner_id' => 81,
                'name' => 'Red-breasted cockatoo',
                'description' => 'pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            39 => 
            array (
                'organization_id' => 86,
                'owner_id' => 86,
                'name' => 'Stork, openbill',
                'description' => 'duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            40 => 
            array (
                'organization_id' => 15,
                'owner_id' => 43,
                'name' => 'White-tailed jackrabbit',
                'description' => 'tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            41 => 
            array (
                'organization_id' => 40,
                'owner_id' => 34,
                'name' => 'Gecko, ring-tailed',
                'description' => 'fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            42 => 
            array (
                'organization_id' => 70,
                'owner_id' => 50,
                'name' => 'Owl, burrowing',
                'description' => 'consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            43 => 
            array (
                'organization_id' => 8,
                'owner_id' => 24,
                'name' => 'Porcupine, north american',
                'description' => 'habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            44 => 
            array (
                'organization_id' => 56,
                'owner_id' => 73,
                'name' => 'Flamingo, roseat',
                'description' => 'maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            45 => 
            array (
                'organization_id' => 64,
                'owner_id' => 83,
                'name' => 'Toddy cat',
                'description' => 'lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            46 => 
            array (
                'organization_id' => 59,
                'owner_id' => 85,
                'name' => 'Ring-tailed possum',
                'description' => 'vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            47 => 
            array (
                'organization_id' => 90,
                'owner_id' => 44,
                'name' => 'Heron, boat-billed',
                'description' => 'accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            48 => 
            array (
                'organization_id' => 6,
                'owner_id' => 41,
                'name' => 'Blue and gold macaw',
                'description' => 'habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            49 => 
            array (
                'organization_id' => 65,
                'owner_id' => 83,
                'name' => 'Seven-banded armadillo',
                'description' => 'justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            50 => 
            array (
                'organization_id' => 6,
                'owner_id' => 74,
                'name' => 'Gull, kelp',
                'description' => 'sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            51 => 
            array (
                'organization_id' => 100,
                'owner_id' => 76,
                'name' => 'Kingfisher, malachite',
                'description' => 'justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            52 => 
            array (
                'organization_id' => 93,
                'owner_id' => 95,
                'name' => 'Bulbul, african red-eyed',
                'description' => 'in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            53 => 
            array (
                'organization_id' => 9,
                'owner_id' => 16,
                'name' => 'Brocket, brown',
                'description' => 'nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            54 => 
            array (
                'organization_id' => 63,
                'owner_id' => 99,
                'name' => 'Boubou, southern',
                'description' => 'vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            55 => 
            array (
                'organization_id' => 100,
                'owner_id' => 39,
                'name' => 'Llama',
                'description' => 'hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            56 => 
            array (
                'organization_id' => 32,
                'owner_id' => 92,
                'name' => 'Dog, black-tailed prairie',
                'description' => 'quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            57 => 
            array (
                'organization_id' => 33,
                'owner_id' => 84,
                'name' => 'Mongoose, banded',
                'description' => 'vel est donec odio justo sollicitudin ut suscipit a feugiat et',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            58 => 
            array (
                'organization_id' => 27,
                'owner_id' => 71,
                'name' => 'Grant\'s gazelle',
                'description' => 'nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            59 => 
            array (
                'organization_id' => 90,
                'owner_id' => 73,
                'name' => 'Hyena, brown',
                'description' => 'vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            60 => 
            array (
                'organization_id' => 55,
                'owner_id' => 34,
                'name' => 'Greater flamingo',
                'description' => 'est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            61 => 
            array (
                'organization_id' => 45,
                'owner_id' => 2,
                'name' => 'Two-toed tree sloth',
                'description' => 'sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            62 => 
            array (
                'organization_id' => 40,
                'owner_id' => 89,
                'name' => 'Toddy cat',
                'description' => 'pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            63 => 
            array (
                'organization_id' => 83,
                'owner_id' => 85,
                'name' => 'Opossum, american virginia',
                'description' => 'lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            64 => 
            array (
                'organization_id' => 56,
                'owner_id' => 38,
                'name' => 'Penguin, little blue',
                'description' => 'sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            65 => 
            array (
                'organization_id' => 9,
                'owner_id' => 67,
                'name' => 'Pallas\'s fish eagle',
                'description' => 'sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            66 => 
            array (
                'organization_id' => 71,
                'owner_id' => 13,
                'name' => 'White rhinoceros',
                'description' => 'turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            67 => 
            array (
                'organization_id' => 54,
                'owner_id' => 100,
                'name' => 'Striped dolphin',
                'description' => 'sit amet eleifend pede libero quis orci nullam molestie nibh in',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            68 => 
            array (
                'organization_id' => 40,
                'owner_id' => 72,
                'name' => 'Dog, raccoon',
                'description' => 'sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            69 => 
            array (
                'organization_id' => 64,
                'owner_id' => 4,
                'name' => 'Possum, golden brush-tailed',
                'description' => 'tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            70 => 
            array (
                'organization_id' => 46,
                'owner_id' => 34,
                'name' => 'Cattle egret',
                'description' => 'est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            71 => 
            array (
                'organization_id' => 68,
                'owner_id' => 49,
                'name' => 'Langur, hanuman',
                'description' => 'id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            72 => 
            array (
                'organization_id' => 95,
                'owner_id' => 3,
                'name' => 'Egyptian vulture',
                'description' => 'sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            73 => 
            array (
                'organization_id' => 87,
                'owner_id' => 52,
            'name' => 'Caracara (unidentified)',
                'description' => 'quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            74 => 
            array (
                'organization_id' => 47,
                'owner_id' => 18,
                'name' => 'Cottonmouth',
                'description' => 'turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            75 => 
            array (
                'organization_id' => 72,
                'owner_id' => 57,
                'name' => 'Wapiti, elk,',
                'description' => 'duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            76 => 
            array (
                'organization_id' => 74,
                'owner_id' => 36,
                'name' => 'Black-collared barbet',
                'description' => 'sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            77 => 
            array (
                'organization_id' => 84,
                'owner_id' => 34,
                'name' => 'Two-toed tree sloth',
                'description' => 'mi in porttitor pede justo eu massa donec dapibus duis at velit eu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            78 => 
            array (
                'organization_id' => 95,
                'owner_id' => 84,
                'name' => 'Wild turkey',
                'description' => 'suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            79 => 
            array (
                'organization_id' => 91,
                'owner_id' => 47,
                'name' => 'Yellow-brown sungazer',
                'description' => 'amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            80 => 
            array (
                'organization_id' => 24,
                'owner_id' => 18,
                'name' => 'Cockatoo, long-billed',
                'description' => 'nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            81 => 
            array (
                'organization_id' => 81,
                'owner_id' => 40,
                'name' => 'Snake, carpet',
                'description' => 'primis in faucibus orci luctus et ultrices posuere cubilia curae',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            82 => 
            array (
                'organization_id' => 18,
                'owner_id' => 44,
                'name' => 'Nyala',
                'description' => 'donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            83 => 
            array (
                'organization_id' => 12,
                'owner_id' => 89,
                'name' => 'Goose, andean',
                'description' => 'convallis nunc proin at turpis a pede posuere nonummy integer non velit donec',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            84 => 
            array (
                'organization_id' => 96,
                'owner_id' => 100,
                'name' => 'Common waterbuck',
                'description' => 'tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            85 => 
            array (
                'organization_id' => 33,
                'owner_id' => 66,
                'name' => 'Porcupine, indian',
                'description' => 'sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            86 => 
            array (
                'organization_id' => 78,
                'owner_id' => 52,
                'name' => 'Bee-eater, white-fronted',
                'description' => 'malesuada in imperdiet et commodo vulputate justo in blandit ultrices',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            87 => 
            array (
                'organization_id' => 55,
                'owner_id' => 92,
                'name' => 'Capuchin, brown',
                'description' => 'nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            88 => 
            array (
                'organization_id' => 98,
                'owner_id' => 84,
                'name' => 'Deer, roe',
                'description' => 'sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            89 => 
            array (
                'organization_id' => 59,
                'owner_id' => 23,
                'name' => 'Sloth, two-toed tree',
                'description' => 'velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            90 => 
            array (
                'organization_id' => 96,
                'owner_id' => 93,
                'name' => 'White-fronted bee-eater',
                'description' => 'felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            91 => 
            array (
                'organization_id' => 59,
                'owner_id' => 60,
                'name' => 'House crow',
                'description' => 'sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            92 => 
            array (
                'organization_id' => 20,
                'owner_id' => 98,
                'name' => 'Canada goose',
                'description' => 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            93 => 
            array (
                'organization_id' => 12,
                'owner_id' => 92,
                'name' => 'Plover, blacksmith',
                'description' => 'rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            94 => 
            array (
                'organization_id' => 71,
                'owner_id' => 16,
                'name' => 'Stork, jabiru',
                'description' => 'sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            95 => 
            array (
                'organization_id' => 92,
                'owner_id' => 48,
                'name' => 'Hawk, red-tailed',
                'description' => 'ut tellus nulla ut erat id mauris vulputate elementum nullam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            96 => 
            array (
                'organization_id' => 32,
                'owner_id' => 43,
                'name' => 'Red-shouldered glossy starling',
                'description' => 'donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            97 => 
            array (
                'organization_id' => 61,
                'owner_id' => 29,
                'name' => 'Cormorant, king',
                'description' => 'proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            98 => 
            array (
                'organization_id' => 58,
                'owner_id' => 77,
                'name' => 'Goose, egyptian',
                'description' => 'at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
            99 => 
            array (
                'organization_id' => 23,
                'owner_id' => 66,
                'name' => 'Insect, stick',
                'description' => 'dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et',
                'created_at' => '2018-06-23 02:14:04',
                'updated_at' => NULL,
                'group_type' => 'PRIVATE',
            ),
        ));
        
        
    }
}