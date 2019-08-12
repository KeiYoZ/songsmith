<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'artist' => 'Ben&Ben',
            'title'  => 'Pagtingin',
            'lyrics' => 'Dami pang gustong sabihin
            Ngunit ‘wag na lang muna
            Hintayin na lang ang hanging
            Tangayin ang salita
            ‘Wag mo akong sisihin
            Mahirap ang tumaya
            Dagat ay sisisirin
            Kahit walang mapala
            ‘Pag nilahad ang damdamin
            Sana ‘di magbago ang pagtingin
            Aminin ang mga lihim
            Sana ‘di magbago ang pagtingin
            Bakit laging ganito?
            Kailangang magka-ilangan
            Ako ay nalilito
            ‘Wag mo akong sisihin
            Mahirap ang tumaya
            Dagat ay sisisirin
            Kahit walang mapala
            ‘Pag nilahad ang damdamin
            Sana ‘di magbago ang pagtingin
            Aminin ang mga lihim
            Sana ‘di magbago ang pagtingin
            Pahiwatig
            Sana ‘di magbago ang pagtingin
            Pahiwatig
            Sana ‘di magbago ang pagtingin
            Iibig lang kapag handa na
            Hindi na lang, kung trip trip lang naman
            Iibig lang kapag handa na
            Hindi na lang, kung trip trip lang naman
            ‘Pag nilahad ang damdamin
            Sana ‘di magbago ang pagtingin
            Aminin ang mga lihim
            Sana ‘di magbago ang pagtingin
            Subukan ang manalangin
            Sana ‘di magbago ang pagtingin
            Baka bukas, ika\'y akin
            Sana ‘di magbago ang pagtingin
            Pahiwatig
            Sana ‘di magbago ang pagtingin
            Pahiwatig
            Sana ‘di magbago ang pagtingin'
        ]);

        DB::table('songs')->insert([
            'artist' => 'Urbandub',
            'title'  => 'Fight is Over',
            'lyrics' => 'When the fighting is over
            \'Cause our mouths have just run dry
            As our feelings get colder
            There\'s nothing to hold us now
            Gave all this time just to be let down
            Can you explain to me?
            What has become of us?
            With words released
            We can never take them back
            Not even pleading can save us, no
            I know you\'ll meet someone better
            But would still think of me
            If he can\'t hold you like I did
            Would you run back to me?.
            Yes I know this pain shall pass
            Gave all this time still we couldn\'t last
            Explain to me
            What has become of us?
            With words released
            We can never take them back
            For all that were worth now
            Not even pleading can save us
            How did we end this way?
            Our promises thrown away
            All the years we built, broken up
            See it crashing down
            I have to say
            Though alone in this crazy sea of faces
            It\'s still your face I wanna know (ooo, oh)
            Explain to me
            What has become of us?
            With words released
            We can never take them back
            For all that were worth now
            Not even pleading can save us
            Can\'t save us now
            (ooo, oh) The fighting is over
            (ooo, oh) The fighting is over
            (ooo, oh) The fighting is over
            (ooo, oh) The fighting is over now (ooo, oh)'
        ]);

        DB::table('songs')->insert([
            'artist' => 'Ed Sheeran',
            'title'  => 'Beautiful People',
            'lyrics' => 'We are, we are, we are
            L.A. on a Saturday night in the summer
            Sundown and they all come out
            Lamborghinis and their rented Hummers
            The party\'s on, so they\'re headin\' downtown
            (\'Round here) everybody\'s lookin\' for a come up
            And they wanna know what you\'re about
            Me in the middle with the one I love and
            We\'re just tryna figure everything out
            We don\'t fit in well
            \'Cause we are just ourselves
            I could use some help
            Gettin\' out of this conversation, yeah
            You look stunning, dear
            So don\'t ask that question here
            This is my only fear, that we become
            Beautiful people
            Drop top, designer clothes
            Front row at fashion shows
            "What d\'you do?" And, "Who d\'you know?"
            Inside the world of beautiful people
            Champagne and rolled-up notes
            Prenups and broken homes
            Surrounded, but still alone
            Let\'s leave the party
            That\'s not who we are
            (We are, we are, we are)
            We are not beautiful
            Yeah, that\'s not who we are
            (We are, we are, we are)
            We are not beautiful
            L.A. mm
            Drove for hours last night and we made it nowhere (nowhere, nowhere)
            I see stars in your eyes when we\'re halfway there (all night)
            I\'m not fazed by all them lights and flashin\' cameras (uh)
            \'Cause with my arms around you, there\'s no need to care
            We don\'t fit in well
            We are just ourselves
            I could use some help
            Gettin\' out of this conversation, yeah
            You look stunning, dear
            So don\'t ask that question here
            This is my only fear, that we become
            Beautiful people
            Drop top, designer clothes
            Front row at fashion shows
            "What d\'you do?" And "Who d\'you know?"
            Inside the world of beautiful people
            Champagne and rolled-up notes
            Prenups and broken homes
            Surrounded, but still alone
            Let\'s leave the party
            That\'s not who we are
            (We are, we are, we are)
            We are not beautiful, yeah
            Yeah, that\'s not who we are
            (We are, we are, we are)
            We are not beautiful
            We are, we are, we are
            We are not beautiful'
        ]);
    }
}
