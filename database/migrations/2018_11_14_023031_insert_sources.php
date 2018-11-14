<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertSources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('sources')->insert([
            'title' => 'Intention',
            'author' => 'Kim Ji-yeong',
            'description' => '',
            'source_date' => '2018-04-12',
            'source_time' => '',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BZTBkNmJmMjMtYzdhOC00ZGEyLTllZmEtZTIzOGRmYjQwNGVhXkEyXkFqcGdeQXVyNzQzNDM3NTI@._V1_UY268_CR3,0,182,268_AL_.jpg',
            'url' => 'https://www.imdb.com/title/tt8443326/',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'Uncovering The Web Of Intrigue Surrounding The Sewol Ferry Disaster',
            'author' => 'Journeyman Pictures',
            'description' => '',
            'source_date' => '2014-08-18',
            'source_time' => '',
            'image_url' => 'https://i.ytimg.com/vi/hjXPjoX-toI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCq4_vwL1JvbUrq-E7qqQeqDSbJnw',
            'url' => 'https://www.youtube.com/watch?v=hjXPjoX-toI',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'Eun-hwa and Da-yoon inside Min-ji\'s phone... Another Meaning to the Recovering of Cellular Phones from Sewol',
            'author' => 'newstapa',
            'description' => '',
            'source_date' => '2017-06-13',
            'source_time' => '',
            'image_url' => 'https://i.ytimg.com/vi/PI0D6YkXNzI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDdpkNC07hag0G0yWmTzqJdtINWtg',
            'url' => 'https://www.youtube.com/watch?v=PI0D6YkXNzI&index=4&list=PLU5tPlCfI8Ce-Mu7OEmls1f4lpsn3LF3w&t=0s',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'Diving Bell: The Truth Shall Not Sink with Sewol (2014)',
            'author' => 'GObalnews',
            'description' => '',
            'source_date' => '2015-09-01',
            'source_time' => '',
            'image_url' => 'https://i.ytimg.com/vi/dhME_nj5CWc/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBVw97rTs-NDefGvs8xBPJ9FPAxmg',
            'url' => 'https://www.youtube.com/watch?v=dhME_nj5CWc&index=5&list=PLU5tPlCfI8Ce-Mu7OEmls1f4lpsn3LF3w&t=1s',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'Saving Sewol | Get Real | Channel NewsAsia',
            'author' => 'CNA Insider',
            'description' => '',
            'source_date' => '2016-04-15',
            'source_time' => '',
            'image_url' => 'https://i.ytimg.com/vi/0Ef9r0Slauc/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA5DtoTziCUki45vR_adGExLjoK1A',
            'url' => 'https://www.youtube.com/watch?v=0Ef9r0Slauc&index=6&list=PLU5tPlCfI8Ce-Mu7OEmls1f4lpsn3LF3w&t=26s',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'EBS Documprime - Family Shock Episode 1: I am a Parent #001',
            'author' => 'EBSDocumentary (EBS 다큐)',
            'description' => '',
            'source_date' => '2014-12-29',
            'source_time' => '',
            'image_url' => 'https://i.ytimg.com/vi/vfwEsiAD8tE/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDrCP_g6y0GPbkV8DrQ6PoTMPusSg',
            'url' => 'https://www.youtube.com/watch?v=vfwEsiAD8tE&t=148s',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'Sewol Ferry One-Year Special “Cruel Times, Lies of a Nation” (April 16, 2015)',
            'author' => 'newstapa',
            'description' => '',
            'source_date' => '2015-05-13',
            'source_time' => '',
            'image_url' => 'https://i.ytimg.com/vi/udvQbxxDs8Y/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCjIlkvreieYmDZAoffEKcsWYoytg',
            'url' => 'https://www.youtube.com/watch?v=udvQbxxDs8Y&index=2&list=PLU5tPlCfI8Ce-Mu7OEmls1f4lpsn3LF3w&t=2639s',
            'type' => 'Documentary'
        ]);
        DB::table('sources')->insert([
            'title' => 'Cruel State',
            'author' => 'Kim Jin-yeul',
            'description' => '',
            'source_date' => '2015-12-03',
            'source_time' => '',
            'image_url' => 'https://www.hancinema.net/photos/posterphoto642779.jpg',
            'url' => 'https://www.hancinema.net/korean_movie_Cruel_State.php',
            'type' => 'Documentary'
        ]);


//        NEWS ARTICLES
        DB::table('sources')->insert([
            'title' => 'Park impeachment: Bittersweet victory for families of Sewol ferry victims',
            'author' => 'CNN',
            'description' => '',
            'source_date' => '2017-03-12',
            'source_time' => '08:48',
            'image_url' => 'https://cdn.cnn.com/cnnnext/dam/assets/170312113349-south-korea-sewol-ferry-memorial-exlarge-169.jpg',
            'url' => 'https://www.cnn.com/2017/03/11/asia/south-korea-park-impeachment-sewol-ferry/index.html',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'Year-long investigation into Sewol ferry fizzles out',
            'author' => 'Yonhap News',
            'description' => '',
            'source_date' => '2018-08-06',
            'source_time' => '16:51',
            'image_url' => 'http://img.yonhapnews.co.kr/etc/inner/EN/2018/08/06/AEN20180806007700320_01_i.jpg',
            'url' => 'http://english.yonhapnews.co.kr/news/2018/08/06/0200000000AEN20180806007700320.html',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'After four years, Korean government holds first memorial for Sewol ferry disaster',
            'author' => 'The Korean Herald',
            'description' => '',
            'source_date' => '2018-04-17',
            'source_time' => '08:52',
            'image_url' => 'http://res.heraldm.com/content/image/2018/04/16/20180416000980_0.jpg',
            'url' => 'http://www.koreaherald.com/view.php?ud=20180416000738',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'Was Park Geun-hye asleep while Sewol ferry was sinking?',
            'author' => 'The Korean Herald',
            'description' => '',
            'source_date' => '2018-03-29',
            'source_time' => '19:49',
            'image_url' => 'http://res.heraldm.com/content/image/2018/03/29/20180329000977_0.jpg',
            'url' => 'http://www.koreaherald.com/view.php?ud=20180329000933',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'South Korea Raises Ferry That Sank in 2014 Disaster',
            'author' => 'The New York Times',
            'description' => '',
            'source_date' => '2017-03-22',
            'source_time' => '',
            'image_url' => 'https://static01.nyt.com/images/2017/03/24/world/23korea-3/23korea-3-superJumbo.jpg',
            'url' => 'https://www.nytimes.com/2017/03/22/world/asia/south-korea-ferry-sewol.html',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'Park administration changed details about timeline of events for Sewol tragedy',
            'author' => 'Hankyeoreh',
            'description' => '',
            'source_date' => '2017-10-13',
            'source_time' => '16:28',
            'image_url' => 'http://img.hani.co.kr/imgdb/resize/2017/1014/150787920483_20171014.JPG',
            'url' => 'http://english.hani.co.kr/arti/english_edition/e_national/814414.html',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'South Korea court holds government accountable for 2014 ferry sinking for the first time',
            'author' => 'Reuters',
            'description' => '',
            'source_date' => '2018-07-18',
            'source_time' => '20:44',
            'image_url' => 'https://s4.reutersmedia.net/resources/r/?m=02&d=20180719&t=2&i=1284707343&r=LYNXMPEE6I05S&w=2560',
            'url' => 'https://www.reuters.com/article/us-southkorea-ferry/south-korea-court-holds-government-accountable-for-2014-ferry-sinking-for-the-first-time-idUSKBN1K9055',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'Fatal Sewol ferry that sank, claiming 300 lives including 250 school students, is lifted upright four years after tragedy off of South Korean coast',
            'author' => 'Daily Mail',
            'description' => '',
            'source_date' => '2018-05-10',
            'source_time' => '15:43',
            'image_url' => 'https://i.dailymail.co.uk/i/newpix/2018/05/10/10/4C0ACB0600000578-5713043-image-a-17_1525944919142.jpg',
            'url' => 'https://www.dailymail.co.uk/news/article-5713043/Ferry-killed-300-lifted-upright-four-years-tragedy-South-Korean-coast.html',
            'type' => 'News'
        ]);
        DB::table('sources')->insert([
            'title' => 'Funerals held for five missing victims of Sewol ferry disaster',
            'author' => 'HanKyeoreh',
            'description' => '',
            'source_date' => '2017-11-21',
            'source_time' => '16:55',
            'image_url' => 'http://img.hani.co.kr/imgdb/resize/2017/1122/151125084336_20171122.JPG',
            'url' => 'http://english.hani.co.kr/arti/english_edition/e_national/820043.html',
            'type' => 'News'
        ]);


//        OTHER WEBSITES
        DB::table('sources')->insert([
            'title' => 'Sewol Victim\'s Family Broadcast 416 TV',
            'author' => '',
            'description' => 'YouTube channel that updates on Sewol-related community activities.',
            'image_url' => 'https://yt3.ggpht.com/a-/AN66SAytg0hHHvvOo_wUeUK3SwqSTQQmAxkwzKQNNg=s288-mo-c-c0xffffffff-rj-k-no',
            'url' => 'https://www.youtube.com/channel/UCvHKQ67ne-L4Msj7MCWD4aw',
            'type' => 'Other'
        ]);
        DB::table('sources')->insert([
            'title' => '416 Family Council',
            'author' => '',
            'description' => 'Korean website ran by the victim\'s families to update on events and store and share information.',
            'image_url' => 'http://416family.org/wp-content/uploads/2016/12/logo_416.png',
            'url' => 'http://416family.org/',
            'type' => 'Other'
        ]);
        DB::table('sources')->insert([
            'title' => 'To the you who is missed',
            'author' => '',
            'description' => 'A Korean website with a collection of letters the parents of the victims.',
            'image_url' => 'http://416letter.wpcorona.com/wp-content/uploads/2018/04/logo.png',
            'url' => 'http://416letter.com/',
            'type' => 'Other'
        ]);
        DB::table('sources')->insert([
            'title' => '416 Memory Database',
            'author' => '',
            'description' => 'A Korean website dedicated to remember and record information.',
            'image_url' => 'http://www.416memory.org/img/logo.jpg',
            'url' => 'http://www.416memory.org/',
            'type' => 'Other'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('sources')->delete();
    }
}
