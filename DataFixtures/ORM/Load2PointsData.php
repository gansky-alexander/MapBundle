<?php

namespace Nitra\PosBundle\DataFixture\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Gansky\MapBundle\Entity\Point;
use Gansky\MapBundle\Entity\Way;
use Gansky\MapBundle\Entity\WaySet;

class Load2PointsData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $em)
    {
        $way = new Way();
        $way->setName("Test 2");
        $way->setLevel(0);
        $em->persist($way);

        $point1 = new Point();
        $point1->setLatitude(47.12055637661465);
        $point1->setLongitude(38.23814914074092);
        $em->persist($point1);
        $waySet1 = new WaySet();
        $waySet1->setPoint($point1);
        $waySet1->setWay($way);
        $em->persist($waySet1);



        $point2 = new Point();
        $point2->setLatitude(47.120355611869996);
        $point2->setLongitude(38.23059067573788);
        $em->persist($point2);
        $waySet2 = new WaySet();
        $waySet2->setPoint($point2);
        $waySet2->setWay($way);
        $em->persist($waySet2);



        $point3 = new Point();
        $point3->setLatitude(47.12143608229);
        $point3->setLongitude(38.22946951236902);
        $em->persist($point3);
        $waySet3 = new WaySet();
        $waySet3->setPoint($point3);
        $waySet3->setWay($way);
        $em->persist($waySet3);



        $point4 = new Point();
        $point4->setLatitude(47.12258223300785);
        $point4->setLongitude(38.22829470482107);
        $em->persist($point4);
        $waySet4 = new WaySet();
        $waySet4->setPoint($point4);
        $waySet4->setWay($way);
        $em->persist($waySet4);



        $point5 = new Point();
        $point5->setLatitude(47.123980211443055);
        $point5->setLongitude(38.22829470482107);
        $em->persist($point5);
        $waySet5 = new WaySet();
        $waySet5->setPoint($point5);
        $waySet5->setWay($way);
        $em->persist($waySet5);



        $point6 = new Point();
        $point6->setLatitude(47.12477226125059);
        $point6->setLongitude(38.228461001780126);
        $em->persist($point6);
        $waySet6 = new WaySet();
        $waySet6->setPoint($point6);
        $waySet6->setWay($way);
        $em->persist($waySet6);



        $point7 = new Point();
        $point7->setLatitude(47.12704249535307);
        $point7->setLongitude(38.22949633445992);
        $em->persist($point7);
        $waySet7 = new WaySet();
        $waySet7->setPoint($point7);
        $waySet7->setWay($way);
        $em->persist($waySet7);



        $point8 = new Point();
        $point8->setLatitude(47.12939657468926);
        $point8->setLongitude(38.2315938219095);
        $em->persist($point8);
        $waySet8 = new WaySet();
        $waySet8->setPoint($point8);
        $waySet8->setWay($way);
        $em->persist($waySet8);



        $point9 = new Point();
        $point9->setLatitude(47.130144748628226);
        $point9->setLongitude(38.23225900974482);
        $em->persist($point9);
        $waySet9 = new WaySet();
        $waySet9->setPoint($point9);
        $waySet9->setWay($way);
        $em->persist($waySet9);



        $point10 = new Point();
        $point10->setLatitude(47.131195823992954);
        $point10->setLongitude(38.232768629457446);
        $em->persist($point10);
        $waySet10 = new WaySet();
        $waySet10->setPoint($point10);
        $waySet10->setWay($way);
        $em->persist($waySet10);



        $point11 = new Point();
        $point11->setLatitude(47.13225052804486);
        $point11->setLongitude(38.233203147318264);
        $em->persist($point11);
        $waySet11 = new WaySet();
        $waySet11->setPoint($point11);
        $waySet11->setWay($way);
        $em->persist($waySet11);



        $point12 = new Point();
        $point12->setLatitude(47.13349132956232);
        $point12->setLongitude(38.23371813144907);
        $em->persist($point12);
        $waySet12 = new WaySet();
        $waySet12->setPoint($point12);
        $waySet12->setWay($way);
        $em->persist($waySet12);



        $point13 = new Point();
        $point13->setLatitude(47.13512257456735);
        $point13->setLongitude(38.234045360949004);
        $em->persist($point13);
        $waySet13 = new WaySet();
        $waySet13->setPoint($point13);
        $waySet13->setWay($way);
        $em->persist($waySet13);



        $point14 = new Point();
        $point14->setLatitude(47.13600568856902);
        $point14->setLongitude(38.23420629348988);
        $em->persist($point14);
        $waySet14 = new WaySet();
        $waySet14->setPoint($point14);
        $waySet14->setWay($way);
        $em->persist($waySet14);



        $point15 = new Point();
        $point15->setLatitude(47.138191515106904);
        $point15->setLongitude(38.23548838939872);
        $em->persist($point15);
        $waySet15 = new WaySet();
        $waySet15->setPoint($point15);
        $waySet15->setWay($way);
        $em->persist($waySet15);



        $point16 = new Point();
        $point16->setLatitude(47.13939933730348);
        $point16->setLongitude(38.236142848398586);
        $em->persist($point16);
        $waySet16 = new WaySet();
        $waySet16->setPoint($point16);
        $waySet16->setWay($way);
        $em->persist($waySet16);



        $point17 = new Point();
        $point17->setLatitude(47.14076403389981);
        $point17->setLongitude(38.2361643060704);
        $em->persist($point17);
        $waySet17 = new WaySet();
        $waySet17->setPoint($point17);
        $waySet17->setWay($way);
        $em->persist($waySet17);



        $point18 = new Point();
        $point18->setLatitude(47.14243884093954);
        $point18->setLongitude(38.2361643060704);
        $em->persist($point18);
        $waySet18 = new WaySet();
        $waySet18->setPoint($point18);
        $waySet18->setWay($way);
        $em->persist($waySet18);



        $point19 = new Point();
        $point19->setLatitude(47.14386548680337);
        $point19->setLongitude(38.236169670488586);
        $em->persist($point19);
        $waySet19 = new WaySet();
        $waySet19->setPoint($point19);
        $waySet19->setWay($way);
        $em->persist($waySet19);



        $point20 = new Point();
        $point20->setLatitude(47.144806833185655);
        $point20->setLongitude(38.23617503490676);
        $em->persist($point20);
        $waySet20 = new WaySet();
        $waySet20->setPoint($point20);
        $waySet20->setWay($way);
        $em->persist($waySet20);



        $point21 = new Point();
        $point21->setLatitude(47.146083826825446);
        $point21->setLongitude(38.23619112816041);
        $em->persist($point21);
        $waySet21 = new WaySet();
        $waySet21->setPoint($point21);
        $waySet21->setWay($way);
        $em->persist($waySet21);



        $point22 = new Point();
        $point22->setLatitude(47.14722944644258);
        $point22->setLongitude(38.23619112816041);
        $em->persist($point22);
        $waySet22 = new WaySet();
        $waySet22->setPoint($point22);
        $waySet22->setWay($way);
        $em->persist($waySet22);



        $point23 = new Point();
        $point23->setLatitude(47.148692447060455);
        $point23->setLongitude(38.23619649257857);
        $em->persist($point23);
        $waySet23 = new WaySet();
        $waySet23->setPoint($point23);
        $waySet23->setWay($way);
        $em->persist($waySet23);



        $point24 = new Point();
        $point24->setLatitude(47.15003866392259);
        $point24->setLongitude(38.23620722141494);
        $em->persist($point24);
        $waySet24 = new WaySet();
        $waySet24->setPoint($point24);
        $waySet24->setWay($way);
        $em->persist($waySet24);



        $point25 = new Point();
        $point25->setLatitude(47.15128999481819);
        $point25->setLongitude(38.23619649257857);
        $em->persist($point25);
        $waySet25 = new WaySet();
        $waySet25->setPoint($point25);
        $waySet25->setWay($way);
        $em->persist($waySet25);



        $point26 = new Point();
        $point26->setLatitude(47.15239902148074);
        $point26->setLongitude(38.23620722141494);
        $em->persist($point26);
        $waySet26 = new WaySet();
        $waySet26->setPoint($point26);
        $waySet26->setWay($way);
        $em->persist($waySet26);



        $point27 = new Point();
        $point27->setLatitude(47.15375244042664);
        $point27->setLongitude(38.23621258583311);
        $em->persist($point27);
        $waySet27 = new WaySet();
        $waySet27->setPoint($point27);
        $waySet27->setWay($way);
        $em->persist($waySet27);



        $point28 = new Point();
        $point28->setLatitude(47.155266331829154);
        $point28->setLongitude(38.23621795025039);
        $em->persist($point28);
        $waySet28 = new WaySet();
        $waySet28->setPoint($point28);
        $waySet28->setWay($way);
        $em->persist($waySet28);



        $point29 = new Point();
        $point29->setLatitude(47.15671452011008);
        $point29->setLongitude(38.23622331466857);
        $em->persist($point29);
        $waySet29 = new WaySet();
        $waySet29->setPoint($point29);
        $waySet29->setWay($way);
        $em->persist($waySet29);



        $point30 = new Point();
        $point30->setLatitude(47.157994875363585);
        $point30->setLongitude(38.23623404350493);
        $em->persist($point30);
        $waySet30 = new WaySet();
        $waySet30->setPoint($point30);
        $waySet30->setWay($way);
        $em->persist($waySet30);



        $point31 = new Point();
        $point31->setLatitude(47.15938098017475);
        $point31->setLongitude(38.23622867908676);
        $em->persist($point31);
        $waySet31 = new WaySet();
        $waySet31->setPoint($point31);
        $waySet31->setWay($way);
        $em->persist($waySet31);



        $point32 = new Point();
        $point32->setLatitude(47.16073057379886);
        $point32->setLongitude(38.23623404350493);
        $em->persist($point32);
        $waySet32 = new WaySet();
        $waySet32->setPoint($point32);
        $waySet32->setWay($way);
        $em->persist($waySet32);



        $point33 = new Point();
        $point33->setLatitude(47.16215672872446);
        $point33->setLongitude(38.23621795025039);
        $em->persist($point33);
        $waySet33 = new WaySet();
        $waySet33->setPoint($point33);
        $waySet33->setWay($way);
        $em->persist($waySet33);



        $point34 = new Point();
        $point34->setLatitude(47.1638345090353);
        $point34->setLongitude(38.23620722141494);
        $em->persist($point34);
        $waySet34 = new WaySet();
        $waySet34->setPoint($point34);
        $waySet34->setWay($way);
        $em->persist($waySet34);



        $point35 = new Point();
        $point35->setLatitude(47.16515845913694);
        $point35->setLongitude(38.23619112816041);
        $em->persist($point35);
        $waySet35 = new WaySet();
        $waySet35->setPoint($point35);
        $waySet35->setWay($way);
        $em->persist($waySet35);



        $point36 = new Point();
        $point36->setLatitude(47.16659543650458);
        $point36->setLongitude(38.23618576374222);
        $em->persist($point36);
        $waySet36 = new WaySet();
        $waySet36->setPoint($point36);
        $waySet36->setWay($way);
        $em->persist($waySet36);



        $point37 = new Point();
        $point37->setLatitude(47.167981316937414);
        $point37->setLongitude(38.236180399324944);
        $em->persist($point37);
        $waySet37 = new WaySet();
        $waySet37->setPoint($point37);
        $waySet37->setWay($way);
        $em->persist($waySet37);



        $point38 = new Point();
        $point38->setLatitude(47.16931975134663);
        $point38->setLongitude(38.23617503490676);
        $em->persist($point38);
        $waySet38 = new WaySet();
        $waySet38->setPoint($point38);
        $waySet38->setWay($way);
        $em->persist($waySet38);



        $point39 = new Point();
        $point39->setLatitude(47.170884254535494);
        $point39->setLongitude(38.23614821281677);
        $em->persist($point39);
        $waySet39 = new WaySet();
        $waySet39->setPoint($point39);
        $waySet39->setWay($way);
        $em->persist($waySet39);



        $point40 = new Point();
        $point40->setLatitude(47.17228096320083);
        $point40->setLongitude(38.23614821281677);
        $em->persist($point40);
        $waySet40 = new WaySet();
        $waySet40->setPoint($point40);
        $waySet40->setWay($way);
        $em->persist($waySet40);



        $point41 = new Point();
        $point41->setLatitude(47.17371774788434);
        $point41->setLongitude(38.236142848398586);
        $em->persist($point41);
        $waySet41 = new WaySet();
        $waySet41->setPoint($point41);
        $waySet41->setWay($way);
        $em->persist($waySet41);



        $point42 = new Point();
        $point42->setLatitude(47.17514720066874);
        $point42->setLongitude(38.2361374839804);
        $em->persist($point42);
        $waySet42 = new WaySet();
        $waySet42->setPoint($point42);
        $waySet42->setWay($way);
        $em->persist($waySet42);



        $point43 = new Point();
        $point43->setLatitude(47.176696946566764);
        $point43->setLongitude(38.236110661890415);
        $em->persist($point43);
        $waySet43 = new WaySet();
        $waySet43->setPoint($point43);
        $waySet43->setWay($way);
        $em->persist($waySet43);



        $point44 = new Point();
        $point44->setLatitude(47.17827217133844);
        $point44->setLongitude(38.236110661890415);
        $em->persist($point44);
        $waySet44 = new WaySet();
        $waySet44->setPoint($point44);
        $waySet44->setWay($way);
        $em->persist($waySet44);



        $point45 = new Point();
        $point45->setLatitude(47.179475436556096);
        $point45->setLongitude(38.23609993305405);
        $em->persist($point45);
        $waySet45 = new WaySet();
        $waySet45->setPoint($point45);
        $waySet45->setWay($way);
        $em->persist($waySet45);



        $point46 = new Point();
        $point46->setLatitude(47.180791704547886);
        $point46->setLongitude(38.23608920421769);
        $em->persist($point46);
        $waySet46 = new WaySet();
        $waySet46->setPoint($point46);
        $waySet46->setWay($way);
        $em->persist($waySet46);



        $point47 = new Point();
        $point47->setLatitude(47.18229753344804);
        $point47->setLongitude(38.236083839800415);
        $em->persist($point47);
        $waySet47 = new WaySet();
        $waySet47->setPoint($point47);
        $waySet47->setWay($way);
        $em->persist($waySet47);



        $point48 = new Point();
        $point48->setLatitude(47.18378144411475);
        $point48->setLongitude(38.23605701770951);
        $em->persist($point48);
        $waySet48 = new WaySet();
        $waySet48->setPoint($point48);
        $waySet48->setWay($way);
        $em->persist($waySet48);



        $point49 = new Point();
        $point49->setLatitude(47.18536010452042);
        $point49->setLongitude(38.23605701770951);
        $em->persist($point49);
        $waySet49 = new WaySet();
        $waySet49->setPoint($point49);
        $waySet49->setWay($way);
        $em->persist($waySet49);



        $point50 = new Point();
        $point50->setLatitude(47.18685122100294);
        $point50->setLongitude(38.23604628887406);
        $em->persist($point50);
        $waySet50 = new WaySet();
        $waySet50->setPoint($point50);
        $waySet50->setWay($way);
        $em->persist($waySet50);



        $point51 = new Point();
        $point51->setLatitude(47.18843708132141);
        $point51->setLongitude(38.23602483120134);
        $em->persist($point51);
        $waySet51 = new WaySet();
        $waySet51->setPoint($point51);
        $waySet51->setWay($way);
        $em->persist($waySet51);



        $point52 = new Point();
        $point52->setLatitude(47.18992811136866);
        $point52->setLongitude(38.236019466784064);
        $em->persist($point52);
        $waySet52 = new WaySet();
        $waySet52->setPoint($point52);
        $waySet52->setWay($way);
        $em->persist($waySet52);



        $point53 = new Point();
        $point53->setLatitude(47.19153939748236);
        $point53->setLongitude(38.23600873794771);
        $em->persist($point53);
        $waySet53 = new WaySet();
        $waySet53->setPoint($point53);
        $waySet53->setWay($way);
        $em->persist($waySet53);



        $point54 = new Point();
        $point54->setLatitude(47.19290640051082);
        $point54->setLongitude(38.23600337352953);
        $em->persist($point54);
        $waySet54 = new WaySet();
        $waySet54->setPoint($point54);
        $waySet54->setWay($way);
        $em->persist($waySet54);



        $point55 = new Point();
        $point55->setLatitude(47.194306175123906);
        $point55->setLongitude(38.235987280275886);
        $em->persist($point55);
        $waySet55 = new WaySet();
        $waySet55->setPoint($point55);
        $waySet55->setWay($way);
        $em->persist($waySet55);



        $point56 = new Point();
        $point56->setLatitude(47.19565852646546);
        $point56->setLongitude(38.23597118702135);
        $em->persist($point56);
        $waySet56 = new WaySet();
        $waySet56->setPoint($point56);
        $waySet56->setWay($way);
        $em->persist($waySet56);



        $point57 = new Point();
        $point57->setLatitude(47.19706551850317);
        $point57->setLongitude(38.23596582260317);
        $em->persist($point57);
        $waySet57 = new WaySet();
        $waySet57->setPoint($point57);
        $waySet57->setWay($way);
        $em->persist($waySet57);



        $point58 = new Point();
        $point58->setLatitude(47.19842873427057);
        $point58->setLongitude(38.23596582260317);
        $em->persist($point58);
        $waySet58 = new WaySet();
        $waySet58->setPoint($point58);
        $waySet58->setWay($way);
        $em->persist($waySet58);



        $point59 = new Point();
        $point59->setLatitude(47.199977800584165);
        $point59->setLongitude(38.235944364931356);
        $em->persist($point59);
        $waySet59 = new WaySet();
        $waySet59->setPoint($point59);
        $waySet59->setWay($way);
        $em->persist($waySet59);



        $point60 = new Point();
        $point60->setLatitude(47.20112954763483);
        $point60->setLongitude(38.235933636095);
        $em->persist($point60);
        $waySet60 = new WaySet();
        $waySet60->setPoint($point60);
        $waySet60->setWay($way);
        $em->persist($waySet60);



        $point61 = new Point();
        $point61->setLatitude(47.202933658104584);
        $point61->setLongitude(38.23534891452966);
        $em->persist($point61);
        $waySet61 = new WaySet();
        $waySet61->setPoint($point61);
        $waySet61->setWay($way);
        $em->persist($waySet61);



        $point62 = new Point();
        $point62->setLatitude(47.203622484099185);
        $point62->setLongitude(38.233798597719066);
        $em->persist($point62);
        $waySet62 = new WaySet();
        $waySet62->setPoint($point62);
        $waySet62->setWay($way);
        $em->persist($waySet62);



        $point63 = new Point();
        $point63->setLatitude(47.204482592890734);
        $point63->setLongitude(38.23431894626805);
        $em->persist($point63);
        $waySet63 = new WaySet();
        $waySet63->setPoint($point63);
        $waySet63->setWay($way);
        $em->persist($waySet63);



        $point64 = new Point();
        $point64->setLatitude(47.20543015422824);
        $point64->setLongitude(38.23545083847236);
        $em->persist($point64);
        $waySet64 = new WaySet();
        $waySet64->setPoint($point64);
        $waySet64->setWay($way);
        $em->persist($waySet64);



        $point65 = new Point();
        $point65->setLatitude(47.20636312116131);
        $point65->setLongitude(38.236373518373995);
        $em->persist($point65);
        $waySet65 = new WaySet();
        $waySet65->setPoint($point65);
        $waySet65->setWay($way);
        $em->persist($waySet65);



        $point66 = new Point();
        $point66->setLatitude(47.20792653286602);
        $point66->setLongitude(38.23823497142998);
        $em->persist($point66);
        $waySet66 = new WaySet();
        $waySet66->setPoint($point66);
        $waySet66->setWay($way);
        $em->persist($waySet66);



        $point67 = new Point();
        $point67->setLatitude(47.209114549175766);
        $point67->setLongitude(38.2396243556997);
        $em->persist($point67);
        $waySet67 = new WaySet();
        $waySet67->setPoint($point67);
        $waySet67->setWay($way);
        $em->persist($waySet67);



        $point68 = new Point();
        $point68->setLatitude(47.21032804756567);
        $point68->setLongitude(38.24023589935504);
        $em->persist($point68);
        $waySet68 = new WaySet();
        $waySet68->setPoint($point68);
        $waySet68->setWay($way);
        $em->persist($waySet68);



        $point69 = new Point();
        $point69->setLatitude(47.21108965849972);
        $point69->setLongitude(38.24051484909226);
        $em->persist($point69);
        $waySet69 = new WaySet();
        $waySet69->setPoint($point69);
        $waySet69->setWay($way);
        $em->persist($waySet69);



        $point70 = new Point();
        $point70->setLatitude(47.21255090053062);
        $point70->setLongitude(38.24101373996943);
        $em->persist($point70);
        $waySet70 = new WaySet();
        $waySet70->setPoint($point70);
        $waySet70->setWay($way);
        $em->persist($waySet70);



        $point71 = new Point();
        $point71->setLatitude(47.21425259549193);
        $point71->setLongitude(38.240659688379495);
        $em->persist($point71);
        $waySet71 = new WaySet();
        $waySet71->setPoint($point71);
        $waySet71->setWay($way);
        $em->persist($waySet71);



        $point72 = new Point();
        $point72->setLatitude(47.21615099587918);
        $point72->setLongitude(38.242210005190096);
        $em->persist($point72);
        $waySet72 = new WaySet();
        $waySet72->setPoint($point72);
        $waySet72->setWay($way);
        $em->persist($waySet72);



        $point73 = new Point();
        $point73->setLatitude(47.217572018870264);
        $point73->setLongitude(38.242204640771924);
        $em->persist($point73);
        $waySet73 = new WaySet();
        $waySet73->setPoint($point73);
        $waySet73->setWay($way);
        $em->persist($waySet73);



        $point74 = new Point();
        $point74->setLatitude(47.21836996123749);
        $point74->setLongitude(38.242210005190096);
        $em->persist($point74);
        $waySet74 = new WaySet();
        $waySet74->setPoint($point74);
        $waySet74->setWay($way);
        $em->persist($waySet74);



        $point75 = new Point();
        $point75->setLatitude(47.21870880984364);
        $point75->setLongitude(38.24170038547747);
        $em->persist($point75);
        $waySet75 = new WaySet();
        $waySet75->setPoint($point75);
        $waySet75->setWay($way);
        $em->persist($waySet75);



        $point76 = new Point();
        $point76->setLatitude(47.21871974040747);
        $point76->setLongitude(38.239452694322466);
        $em->persist($point76);
        $waySet76 = new WaySet();
        $waySet76->setPoint($point76);
        $waySet76->setWay($way);
        $em->persist($waySet76);



        $point77 = new Point();
        $point77->setLatitude(47.220556043193966);
        $point77->setLongitude(38.23991403427329);
        $em->persist($point77);
        $waySet77 = new WaySet();
        $waySet77->setPoint($point77);
        $waySet77->setWay($way);
        $em->persist($waySet77);



        $point78 = new Point();
        $point78->setLatitude(47.22077100305215);
        $point78->setLongitude(38.23997304287146);
        $em->persist($point78);
        $waySet78 = new WaySet();
        $waySet78->setPoint($point78);
        $waySet78->setWay($way);
        $em->persist($waySet78);



        $point79 = new Point();
        $point79->setLatitude(47.22163447709034);
        $point79->setLongitude(38.23945805874065);
        $em->persist($point79);
        $waySet79 = new WaySet();
        $waySet79->setPoint($point79);
        $waySet79->setWay($way);
        $em->persist($waySet79);



        $point80 = new Point();
        $point80->setLatitude(47.2224906505426);
        $point80->setLongitude(38.23826179351999);
        $em->persist($point80);
        $waySet80 = new WaySet();
        $waySet80->setPoint($point80);
        $waySet80->setWay($way);
        $em->persist($waySet80);



        $point81 = new Point();
        $point81->setLatitude(47.22369655650527);
        $point81->setLongitude(38.2381008609791);
        $em->persist($point81);
        $waySet81 = new WaySet();
        $waySet81->setPoint($point81);
        $waySet81->setWay($way);
        $em->persist($waySet81);



        $point82 = new Point();
        $point82->setLatitude(47.22455633977582);
        $point82->setLongitude(38.23654517975032);
        $em->persist($point82);
        $waySet82 = new WaySet();
        $waySet82->setPoint($point82);
        $waySet82->setWay($way);
        $em->persist($waySet82);



        $point83 = new Point();
        $point83->setLatitude(47.225598261830015);
        $point83->setLongitude(38.236035560037706);
        $em->persist($point83);
        $waySet83 = new WaySet();
        $waySet83->setPoint($point83);
        $waySet83->setWay($way);
        $em->persist($waySet83);



        $point84 = new Point();
        $point84->setLatitude(47.22609735709759);
        $point84->setLongitude(38.23430821743259);
        $em->persist($point84);
        $waySet84 = new WaySet();
        $waySet84->setPoint($point84);
        $waySet84->setWay($way);
        $em->persist($waySet84);



        $point85 = new Point();
        $point85->setLatitude(47.22764561543646);
        $point85->setLongitude(38.23361084308819);
        $em->persist($point85);
        $waySet85 = new WaySet();
        $waySet85->setPoint($point85);
        $waySet85->setWay($way);
        $em->persist($waySet85);



        $point86 = new Point();
        $point86->setLatitude(47.22867654825989);
        $point86->setLongitude(38.232419942285695);
        $em->persist($point86);
        $waySet86 = new WaySet();
        $waySet86->setPoint($point86);
        $waySet86->setWay($way);
        $em->persist($waySet86);



        $point87 = new Point();
        $point87->setLatitude(47.230221088533256);
        $point87->setLongitude(38.23233411159753);
        $em->persist($point87);
        $waySet87 = new WaySet();
        $waySet87->setPoint($point87);
        $waySet87->setWay($way);
        $em->persist($waySet87);



        $point88 = new Point();
        $point88->setLatitude(47.23160166544368);
        $point88->setLongitude(38.23395953025994);
        $em->persist($point88);
        $waySet88 = new WaySet();
        $waySet88->setPoint($point88);
        $waySet88->setWay($way);
        $em->persist($waySet88);



        $point89 = new Point();
        $point89->setLatitude(47.23265073414114);
        $point89->setLongitude(38.23862657394627);
        $em->persist($point89);
        $waySet89 = new WaySet();
        $waySet89->setPoint($point89);
        $waySet89->setWay($way);
        $em->persist($waySet89);



        $point90 = new Point();
        $point90->setLatitude(47.233637859681025);
        $point90->setLongitude(38.243121956255365);
        $em->persist($point90);
        $waySet90 = new WaySet();
        $waySet90->setPoint($point90);
        $waySet90->setWay($way);
        $em->persist($waySet90);



        $point91 = new Point();
        $point91->setLatitude(47.23443191780402);
        $point91->setLongitude(38.24666783657284);
        $em->persist($point91);
        $waySet91 = new WaySet();
        $waySet91->setPoint($point91);
        $waySet91->setWay($way);
        $em->persist($waySet91);



        $point92 = new Point();
        $point92->setLatitude(47.23443191780402);
        $point92->setLongitude(38.250809167292);
        $em->persist($point92);
        $waySet92 = new WaySet();
        $waySet92->setPoint($point92);
        $waySet92->setWay($way);
        $em->persist($waySet92);



        $point93 = new Point();
        $point93->setLatitude(47.23442463292099);
        $point93->setLongitude(38.254124377634064);
        $em->persist($point93);
        $waySet93 = new WaySet();
        $waySet93->setPoint($point93);
        $waySet93->setWay($way);
        $em->persist($waySet93);



        $point94 = new Point();
        $point94->setLatitude(47.23528788456445);
        $point94->setLongitude(38.25764880027973);
        $em->persist($point94);
        $waySet94 = new WaySet();
        $waySet94->setPoint($point94);
        $waySet94->setWay($way);
        $em->persist($waySet94);



        $point95 = new Point();
        $point95->setLatitude(47.23698520754603);
        $point95->setLongitude(38.260368560220996);
        $em->persist($point95);
        $waySet95 = new WaySet();
        $waySet95->setPoint($point95);
        $waySet95->setWay($way);
        $em->persist($waySet95);



        $point96 = new Point();
        $point96->setLatitude(47.23823084776004);
        $point96->setLongitude(38.262348030474236);
        $em->persist($point96);
        $waySet96 = new WaySet();
        $waySet96->setPoint($point96);
        $waySet96->setWay($way);
        $em->persist($waySet96);



        $point97 = new Point();
        $point97->setLatitude(47.23915959552978);
        $point97->setLongitude(38.26383933868576);
        $em->persist($point97);
        $waySet97 = new WaySet();
        $waySet97->setPoint($point97);
        $waySet97->setWay($way);
        $em->persist($waySet97);



        $point98 = new Point();
        $point98->setLatitude(47.239177806107506);
        $point98->setLongitude(38.2683239921594);
        $em->persist($point98);
        $waySet98 = new WaySet();
        $waySet98->setPoint($point98);
        $waySet98->setWay($way);
        $em->persist($waySet98);



        $point99 = new Point();
        $point99->setLatitude(47.239214227244204);
        $point99->setLongitude(38.27238485660768);
        $em->persist($point99);
        $waySet99 = new WaySet();
        $waySet99->setPoint($point99);
        $waySet99->setWay($way);
        $em->persist($waySet99);



        $point100 = new Point();
        $point100->setLatitude(47.23923243780318);
        $point100->setLongitude(38.2766924842859);
        $em->persist($point100);
        $waySet100 = new WaySet();
        $waySet100->setPoint($point100);
        $waySet100->setWay($way);
        $em->persist($waySet100);



        $point101 = new Point();
        $point101->setLatitude(47.23926885890293);
        $point101->setLongitude(38.28117713775863);
        $em->persist($point101);
        $waySet101 = new WaySet();
        $waySet101->setPoint($point101);
        $waySet101->setWay($way);
        $em->persist($waySet101);



        $point102 = new Point();
        $point102->setLatitude(47.239301637870646);
        $point102->setLongitude(38.2850341543215);
        $em->persist($point102);
        $waySet102 = new WaySet();
        $waySet102->setPoint($point102);
        $waySet102->setWay($way);
        $em->persist($waySet102);



        $point103 = new Point();
        $point103->setLatitude(47.23931984839957);
        $point103->setLongitude(38.28871414508986);
        $em->persist($point103);
        $waySet103 = new WaySet();
        $waySet103->setPoint($point103);
        $waySet103->setWay($way);
        $em->persist($waySet103);



        $point104 = new Point();
        $point104->setLatitude(47.24110444988185);
        $point104->setLongitude(38.288746331598034);
        $em->persist($point104);
        $waySet104 = new WaySet();
        $waySet104->setPoint($point104);
        $waySet104->setWay($way);
        $em->persist($waySet104);



        $point105 = new Point();
        $point105->setLatitude(47.24270689794857);
        $point105->setLongitude(38.28875169601621);
        $em->persist($point105);
        $waySet105 = new WaySet();
        $waySet105->setPoint($point105);
        $waySet105->setWay($way);
        $em->persist($waySet105);



        $point106 = new Point();
        $point106->setLatitude(47.24399246328794);
        $point106->setLongitude(38.288783882524385);
        $em->persist($point106);
        $waySet106 = new WaySet();
        $waySet106->setPoint($point106);
        $waySet106->setWay($way);
        $em->persist($waySet106);



        $point107 = new Point();
        $point107->setLatitude(47.24526343064645);
        $point107->setLongitude(38.28879461136075);
        $em->persist($point107);
        $waySet107 = new WaySet();
        $waySet107->setPoint($point107);
        $waySet107->setWay($way);
        $em->persist($waySet107);



        $point108 = new Point();
        $point108->setLatitude(47.246720089256385);
        $point108->setLongitude(38.28881606903256);
        $em->persist($point108);
        $waySet108 = new WaySet();
        $waySet108->setPoint($point108);
        $waySet108->setWay($way);
        $em->persist($waySet108);



        $point109 = new Point();
        $point109->setLatitude(47.248191273792614);
        $point109->setLongitude(38.28882143345074);
        $em->persist($point109);
        $waySet109 = new WaySet();
        $waySet109->setPoint($point109);
        $waySet109->setWay($way);
        $em->persist($waySet109);



        $point110 = new Point();
        $point110->setLatitude(47.249877259287146);
        $point110->setLongitude(38.28884825554074);
        $em->persist($point110);
        $waySet110 = new WaySet();
        $waySet110->setPoint($point110);
        $waySet110->setWay($way);
        $em->persist($waySet110);



        $point111 = new Point();
        $point111->setLatitude(47.25147215944844);
        $point111->setLongitude(38.28885361995892);
        $em->persist($point111);
        $waySet111 = new WaySet();
        $waySet111->setPoint($point111);
        $waySet111->setWay($way);
        $em->persist($waySet111);



        $point112 = new Point();
        $point112->setLatitude(47.25296505900092);
        $point112->setLongitude(38.288875077630735);
        $em->persist($point112);
        $waySet112 = new WaySet();
        $waySet112->setPoint($point112);
        $waySet112->setWay($way);
        $em->persist($waySet112);



        $point113 = new Point();
        $point113->setLatitude(47.25476012395683);
        $point113->setLongitude(38.2888858064671);
        $em->persist($point113);
        $waySet113 = new WaySet();
        $waySet113->setPoint($point113);
        $waySet113->setWay($way);
        $em->persist($waySet113);



        $point114 = new Point();
        $point114->setLatitude(47.25572863271796);
        $point114->setLongitude(38.29036102142588);
        $em->persist($point114);
        $waySet114 = new WaySet();
        $waySet114->setPoint($point114);
        $waySet114->setWay($way);
        $em->persist($waySet114);



        $point115 = new Point();
        $point115->setLatitude(47.255750478575955);
        $point115->setLongitude(38.29308078136626);
        $em->persist($point115);
        $waySet115 = new WaySet();
        $waySet115->setPoint($point115);
        $waySet115->setWay($way);
        $em->persist($waySet115);



        $point116 = new Point();
        $point116->setLatitude(47.25579781123745);
        $point116->setLongitude(38.29742595997083);
        $em->persist($point116);
        $waySet116 = new WaySet();
        $waySet116->setPoint($point116);
        $waySet116->setWay($way);
        $em->persist($waySet116);



        $point117 = new Point();
        $point117->setLatitude(47.25586334869878);
        $point117->setLongitude(38.30353066768869);
        $em->persist($point117);
        $waySet117 = new WaySet();
        $waySet117->setPoint($point117);
        $waySet117->setWay($way);
        $em->persist($waySet117);



        $point118 = new Point();
        $point118->setLatitude(47.25590704029459);
        $point118->setLongitude(38.30783293094874);
        $em->persist($point118);
        $waySet118 = new WaySet();
        $waySet118->setPoint($point118);
        $waySet118->setWay($way);
        $em->persist($waySet118);



        $point119 = new Point();
        $point119->setLatitude(47.255958013777686);
        $point119->setLongitude(38.3138357147239);
        $em->persist($point119);
        $waySet119 = new WaySet();
        $waySet119->setPoint($point119);
        $waySet119->setWay($way);
        $em->persist($waySet119);



        $point120 = new Point();
        $point120->setLatitude(47.25601626912641);
        $point120->setLongitude(38.31902310695831);
        $em->persist($point120);
        $waySet120 = new WaySet();
        $waySet120->setPoint($point120);
        $waySet120->setWay($way);
        $em->persist($waySet120);



        $point121 = new Point();
        $point121->setLatitude(47.25605996059606);
        $point121->setLongitude(38.32330927696472);
        $em->persist($point121);
        $waySet121 = new WaySet();
        $waySet121->setPoint($point121);
        $waySet121->setWay($way);
        $em->persist($waySet121);



        $point122 = new Point();
        $point122->setLatitude(47.25804788432829);
        $point122->setLongitude(38.32461283054538);
        $em->persist($point122);
        $waySet122 = new WaySet();
        $waySet122->setPoint($point122);
        $waySet122->setWay($way);
        $em->persist($waySet122);



        $point123 = new Point();
        $point123->setLatitude(47.259063662698615);
        $point123->setLongitude(38.325288747217066);
        $em->persist($point123);
        $waySet123 = new WaySet();
        $waySet123->setPoint($point123);
        $waySet123->setWay($way);
        $em->persist($waySet123);



        $point124 = new Point();
        $point124->setLatitude(47.260661926844094);
        $point124->setLongitude(38.32704827633124);
        $em->persist($point124);
        $waySet124 = new WaySet();
        $waySet124->setPoint($point124);
        $waySet124->setWay($way);
        $em->persist($waySet124);



        $point125 = new Point();
        $point125->setLatitude(47.261845120928406);
        $point125->setLongitude(38.32835719433008);
        $em->persist($point125);
        $waySet125 = new WaySet();
        $waySet125->setPoint($point125);
        $waySet125->setWay($way);
        $em->persist($waySet125);



        $point126 = new Point();
        $point126->setLatitude(47.262999164760814);
        $point126->setLongitude(38.32962319698528);
        $em->persist($point126);
        $waySet126 = new WaySet();
        $waySet126->setPoint($point126);
        $waySet126->setWay($way);
        $em->persist($waySet126);



        $point127 = new Point();
        $point127->setLatitude(47.264047611796165);
        $point127->setLongitude(38.330776546861415);
        $em->persist($point127);
        $waySet127 = new WaySet();
        $waySet127->setPoint($point127);
        $waySet127->setWay($way);
        $em->persist($waySet127);



        $point128 = new Point();
        $point128->setLatitude(47.26540546546251);
        $point128->setLongitude(38.32940862026441);
        $em->persist($point128);
        $waySet128 = new WaySet();
        $waySet128->setPoint($point128);
        $waySet128->setWay($way);
        $em->persist($waySet128);



        $point129 = new Point();
        $point129->setLatitude(47.26696713613029);
        $point129->setLongitude(38.32940862026441);
        $em->persist($point129);
        $waySet129 = new WaySet();
        $waySet129->setPoint($point129);
        $waySet129->setWay($way);
        $em->persist($waySet129);



        $point130 = new Point();
        $point130->setLatitude(47.268303074238844);
        $point130->setLongitude(38.33190307464845);
        $em->persist($point130);
        $waySet130 = new WaySet();
        $waySet130->setPoint($point130);
        $waySet130->setWay($way);
        $em->persist($waySet130);



        $point131 = new Point();
        $point131->setLatitude(47.26918397410745);
        $point131->setLongitude(38.333512400057224);
        $em->persist($point131);
        $waySet131 = new WaySet();
        $waySet131->setPoint($point131);
        $waySet131->setWay($way);
        $em->persist($waySet131);



        $point132 = new Point();
        $point132->setLatitude(47.271087686968016);
        $point132->setLongitude(38.33265945759013);
        $em->persist($point132);
        $waySet132 = new WaySet();
        $waySet132->setPoint($point132);
        $waySet132->setWay($way);
        $em->persist($waySet132);



        $point133 = new Point();
        $point133->setLatitude(47.272103215152065);
        $point133->setLongitude(38.3333621963518);
        $em->persist($point133);
        $waySet133 = new WaySet();
        $waySet133->setPoint($point133);
        $waySet133->setWay($way);
        $em->persist($waySet133);



        $point134 = new Point();
        $point134->setLatitude(47.27413057334918);
        $point134->setLongitude(38.33227321949202);
        $em->persist($point134);
        $waySet134 = new WaySet();
        $waySet134->setPoint($point134);
        $waySet134->setWay($way);
        $em->persist($waySet134);



        $point135 = new Point();
        $point135->setLatitude(47.2746656082499);
        $point135->setLongitude(38.33197281208209);
        $em->persist($point135);
        $waySet135 = new WaySet();
        $waySet135->setPoint($point135);
        $waySet135->setWay($way);
        $em->persist($waySet135);



        $point136 = new Point();
        $point136->setLatitude(47.27553548337901);
        $point136->setLongitude(38.330792640115945);
        $em->persist($point136);
        $waySet136 = new WaySet();
        $waySet136->setPoint($point136);
        $waySet136->setWay($way);
        $em->persist($waySet136);



        $point137 = new Point();
        $point137->setLatitude(47.27605594576069);
        $point137->setLongitude(38.32855031337913);
        $em->persist($point137);
        $waySet137 = new WaySet();
        $waySet137->setPoint($point137);
        $waySet137->setWay($way);
        $em->persist($waySet137);



        $point138 = new Point();
        $point138->setLatitude(47.27656184484799);
        $point138->setLongitude(38.327343319323006);
        $em->persist($point138);
        $waySet138 = new WaySet();
        $waySet138->setPoint($point138);
        $waySet138->setWay($way);
        $em->persist($waySet138);



        $point139 = new Point();
        $point139->setLatitude(47.27760274430236);
        $point139->setLongitude(38.32690880146219);
        $em->persist($point139);
        $waySet139 = new WaySet();
        $waySet139->setPoint($point139);
        $waySet139->setWay($way);
        $em->persist($waySet139);



        $point140 = new Point();
        $point140->setLatitude(47.27928415401348);
        $point140->setLongitude(38.32683369961038);
        $em->persist($point140);
        $waySet140 = new WaySet();
        $waySet140->setPoint($point140);
        $waySet140->setWay($way);
        $em->persist($waySet140);



        $point141 = new Point();
        $point141->setLatitude(47.28017578899742);
        $point141->setLongitude(38.32682297077402);
        $em->persist($point141);
        $waySet141 = new WaySet();
        $waySet141->setPoint($point141);
        $waySet141->setWay($way);
        $em->persist($waySet141);



        $point142 = new Point();
        $point142->setLatitude(47.280772630142316);
        $point142->setLongitude(38.32529411163524);
        $em->persist($point142);
        $waySet142 = new WaySet();
        $waySet142->setPoint($point142);
        $waySet142->setWay($way);
        $em->persist($waySet142);



        $point143 = new Point();
        $point143->setLatitude(47.28198812726413);
        $point143->setLongitude(38.324596737291735);
        $em->persist($point143);
        $waySet143 = new WaySet();
        $waySet143->setPoint($point143);
        $waySet143->setWay($way);
        $em->persist($waySet143);



        $point144 = new Point();
        $point144->setLatitude(47.283280017243214);
        $point144->setLongitude(38.3252780183816);
        $em->persist($point144);
        $waySet144 = new WaySet();
        $waySet144->setPoint($point144);
        $waySet144->setWay($way);
        $em->persist($waySet144);



        $point145 = new Point();
        $point145->setLatitude(47.283709427208436);
        $point145->setLongitude(38.326860521700375);
        $em->persist($point145);
        $waySet145 = new WaySet();
        $waySet145->setPoint($point145);
        $waySet145->setWay($way);
        $em->persist($waySet145);



        $point146 = new Point();
        $point146->setLatitude(47.284633738526104);
        $point146->setLongitude(38.32929596748534);
        $em->persist($point146);
        $waySet146 = new WaySet();
        $waySet146->setPoint($point146);
        $waySet146->setWay($way);
        $em->persist($waySet146);



        $point147 = new Point();
        $point147->setLatitude(47.28595831399174);
        $point147->setLongitude(38.329971884157025);
        $em->persist($point147);
        $waySet147 = new WaySet();
        $waySet147->setPoint($point147);
        $waySet147->setWay($way);
        $em->persist($waySet147);



        $point148 = new Point();
        $point148->setLatitude(47.28721371891348);
        $point148->setLongitude(38.33061561432054);
        $em->persist($point148);
        $waySet148 = new WaySet();
        $waySet148->setPoint($point148);
        $waySet148->setWay($way);
        $em->persist($waySet148);



        $point149 = new Point();
        $point149->setLatitude(47.287468435116416);
        $point149->setLongitude(38.33063170757508);
        $em->persist($point149);
        $waySet149 = new WaySet();
        $waySet149->setPoint($point149);
        $waySet149->setWay($way);
        $em->persist($waySet149);



        $point150 = new Point();
        $point150->setLatitude(47.28858189440365);
        $point150->setLongitude(38.330776546861415);
        $em->persist($point150);
        $waySet150 = new WaySet();
        $waySet150->setPoint($point150);
        $waySet150->setWay($way);
        $em->persist($waySet150);



        $point151 = new Point();
        $point151->setLatitude(47.289262330207066);
        $point151->setLongitude(38.32960710373164);
        $em->persist($point151);
        $waySet151 = new WaySet();
        $waySet151->setPoint($point151);
        $waySet151->setWay($way);
        $em->persist($waySet151);



        $point152 = new Point();
        $point152->setLatitude(47.290594066927945);
        $point152->setLongitude(38.33121106472223);
        $em->persist($point152);
        $waySet152 = new WaySet();
        $waySet152->setPoint($point152);
        $waySet152->setWay($way);
        $em->persist($waySet152);



        $point153 = new Point();
        $point153->setLatitude(47.29234783298155);
        $point153->setLongitude(38.33342656936816);
        $em->persist($point153);
        $waySet153 = new WaySet();
        $waySet153->setPoint($point153);
        $waySet153->setWay($way);
        $em->persist($waySet153);



        $point154 = new Point();
        $point154->setLatitude(47.29357397926657);
        $point154->setLongitude(38.333871816065326);
        $em->persist($point154);
        $waySet154 = new WaySet();
        $waySet154->setPoint($point154);
        $waySet154->setWay($way);
        $em->persist($waySet154);



        $point155 = new Point();
        $point155->setLatitude(47.295367667276565);
        $point155->setLongitude(38.33386645164715);
        $em->persist($point155);
        $waySet155 = new WaySet();
        $waySet155->setPoint($point155);
        $waySet155->setWay($way);
        $em->persist($waySet155);



        $point156 = new Point();
        $point156->setLatitude(47.296655592335476);
        $point156->setLongitude(38.3333621963518);
        $em->persist($point156);
        $waySet156 = new WaySet();
        $waySet156->setPoint($point156);
        $waySet156->setWay($way);
        $em->persist($waySet156);



        $point157 = new Point();
        $point157->setLatitude(47.29717220882611);
        $point157->setLongitude(38.331795786287564);
        $em->persist($point157);
        $waySet157 = new WaySet();
        $waySet157->setPoint($point157);
        $waySet157->setWay($way);
        $em->persist($waySet157);



        $point158 = new Point();
        $point158->setLatitude(47.297434153287384);
        $point158->setLongitude(38.32829818573191);
        $em->persist($point158);
        $waySet158 = new WaySet();
        $waySet158->setPoint($point158);
        $waySet158->setWay($way);
        $em->persist($waySet158);



        $point159 = new Point();
        $point159->setLatitude(47.29786344834878);
        $point159->setLongitude(38.327348683741185);
        $em->persist($point159);
        $waySet159 = new WaySet();
        $waySet159->setPoint($point159);
        $waySet159->setWay($way);
        $em->persist($waySet159);



        $point160 = new Point();
        $point160->setLatitude(47.29889301467303);
        $point160->setLongitude(38.32716629352758);
        $em->persist($point160);
        $waySet160 = new WaySet();
        $waySet160->setPoint($point160);
        $waySet160->setWay($way);
        $em->persist($waySet160);



        $point161 = new Point();
        $point161->setLatitude(47.30008990579974);
        $point161->setLongitude(38.32804069366651);
        $em->persist($point161);
        $waySet161 = new WaySet();
        $waySet161->setPoint($point161);
        $waySet161->setWay($way);
        $em->persist($waySet161);



        $point162 = new Point();
        $point162->setLatitude(47.300588299281515);
        $point162->setLongitude(38.329558823968924);
        $em->persist($point162);
        $waySet162 = new WaySet();
        $waySet162->setPoint($point162);
        $waySet162->setWay($way);
        $em->persist($waySet162);



        $point163 = new Point();
        $point163->setLatitude(47.30274552491788);
        $point163->setLongitude(38.333346103098165);
        $em->persist($point163);
        $waySet163 = new WaySet();
        $waySet163->setPoint($point163);
        $waySet163->setWay($way);
        $em->persist($waySet163);



        $point164 = new Point();
        $point164->setLatitude(47.30411693625624);
        $point164->setLongitude(38.3343975290316);
        $em->persist($point164);
        $waySet164 = new WaySet();
        $waySet164->setPoint($point164);
        $waySet164->setWay($way);
        $em->persist($waySet164);



        $point165 = new Point();
        $point165->setLatitude(47.3054482989052);
        $point165->setLongitude(38.33461210575336);
        $em->persist($point165);
        $waySet165 = new WaySet();
        $waySet165->setPoint($point165);
        $waySet165->setWay($way);
        $em->persist($waySet165);



        $point166 = new Point();
        $point166->setLatitude(47.30609941760902);
        $point166->setLongitude(38.3347301229497);
        $em->persist($point166);
        $waySet166 = new WaySet();
        $waySet166->setPoint($point166);
        $waySet166->setWay($way);
        $em->persist($waySet166);

        $em->flush();
    }

    public function getOrder()
    {
        return 2;
    }

}
