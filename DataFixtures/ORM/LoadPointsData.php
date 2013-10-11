<?php
namespace Nitra\PosBundle\DataFixture\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Gansky\MapBundle\Entity\Point;
use Gansky\MapBundle\Entity\Way;
use Gansky\MapBundle\Entity\WaySet;

class LoadPointsData extends AbstractFixture implements OrderedFixtureInterface
{
    
    public function load (ObjectManager $em)
    {
        $way = new Way();
$way->setName("Test");
$em->persist($way);

$point2 = new Point();
$point2->setLatitude(45.169667949191684);
$point2->setLongitude(29.9520705684669);
$em->persist($point2);


$waySet2 = new WaySet();
$waySet2->setPoint($point2);
$waySet2->setWay($way);
$em->persist($waySet2);


$point3 = new Point();
$point3->setLatitude(45.17060906816774);
$point3->setLongitude(29.94101643562317);
$em->persist($point3);


$waySet3 = new WaySet();
$waySet3->setPoint($point3);
$waySet3->setWay($way);
$em->persist($waySet3);


$point4 = new Point();
$point4->setLatitude(45.179314347054444);
$point4->setLongitude(29.840251207351685);
$em->persist($point4);


$waySet4 = new WaySet();
$waySet4->setPoint($point4);
$waySet4->setWay($way);
$em->persist($waySet4);


$point5 = new Point();
$point5->setLatitude(45.19173086902454);
$point5->setLongitude(29.690605401992798);
$em->persist($point5);


$waySet5 = new WaySet();
$waySet5->setPoint($point5);
$waySet5->setWay($way);
$em->persist($waySet5);


$point6 = new Point();
$point6->setLatitude(45.19644117930673);
$point6->setLongitude(29.68830943107605);
$em->persist($point6);


$waySet6 = new WaySet();
$waySet6->setPoint($point6);
$waySet6->setWay($way);
$em->persist($waySet6);


$point7 = new Point();
$point7->setLatitude(45.19757522467109);
$point7->setLongitude(29.68884587287903);
$em->persist($point7);


$waySet7 = new WaySet();
$waySet7->setPoint($point7);
$waySet7->setWay($way);
$em->persist($waySet7);


$point8 = new Point();
$point8->setLatitude(45.19932917032403);
$point8->setLongitude(29.68929648399353);
$em->persist($point8);


$waySet8 = new WaySet();
$waySet8->setPoint($point8);
$waySet8->setWay($way);
$em->persist($waySet8);


$point9 = new Point();
$point9->setLatitude(45.20100746425134);
$point9->setLongitude(29.689886569976803);
$em->persist($point9);


$waySet9 = new WaySet();
$waySet9->setPoint($point9);
$waySet9->setWay($way);
$em->persist($waySet9);


$point10 = new Point();
$point10->setLatitude(45.20146860841707);
$point10->setLongitude(29.689918756484985);
$em->persist($point10);


$waySet10 = new WaySet();
$waySet10->setPoint($point10);
$waySet10->setWay($way);
$em->persist($waySet10);


$point11 = new Point();
$point11->setLatitude(45.20257987490251);
$point11->setLongitude(29.689639806747437);
$em->persist($point11);


$waySet11 = new WaySet();
$waySet11->setPoint($point11);
$waySet11->setWay($way);
$em->persist($waySet11);


$point12 = new Point();
$point12->setLatitude(45.20367600085116);
$point12->setLongitude(29.68917846679687);
$em->persist($point12);


$waySet12 = new WaySet();
$waySet12->setPoint($point12);
$waySet12->setWay($way);
$em->persist($waySet12);


$point13 = new Point();
$point13->setLatitude(45.20433366628315);
$point13->setLongitude(29.68869566917419);
$em->persist($point13);


$waySet13 = new WaySet();
$waySet13->setPoint($point13);
$waySet13->setWay($way);
$em->persist($waySet13);


$point14 = new Point();
$point14->setLatitude(45.205981576155544);
$point14->setLongitude(29.687043428421017);
$em->persist($point14);


$waySet14 = new WaySet();
$waySet14->setPoint($point14);
$waySet14->setWay($way);
$em->persist($waySet14);


$point15 = new Point();
$point15->setLatitude(45.20630661696162);
$point15->setLongitude(29.68673229217529);
$em->persist($point15);


$waySet15 = new WaySet();
$waySet15->setPoint($point15);
$waySet15->setWay($way);
$em->persist($waySet15);


$point16 = new Point();
$point16->setLatitude(45.20874814317765);
$point16->setLongitude(29.684768915176388);
$em->persist($point16);


$waySet16 = new WaySet();
$waySet16->setPoint($point16);
$waySet16->setWay($way);
$em->persist($waySet16);


$point17 = new Point();
$point17->setLatitude(45.21020696176647);
$point17->setLongitude(29.68302011489868);
$em->persist($point17);


$waySet17 = new WaySet();
$waySet17->setPoint($point17);
$waySet17->setWay($way);
$em->persist($waySet17);


$point18 = new Point();
$point18->setLatitude(45.2117488847808);
$point18->setLongitude(29.679726362228394);
$em->persist($point18);


$waySet18 = new WaySet();
$waySet18->setPoint($point18);
$waySet18->setWay($way);
$em->persist($waySet18);


$point19 = new Point();
$point19->setLatitude(45.21265587879161);
$point19->setLongitude(29.67809557914734);
$em->persist($point19);


$waySet19 = new WaySet();
$waySet19->setPoint($point19);
$waySet19->setWay($way);
$em->persist($waySet19);


$point20 = new Point();
$point20->setLatitude(45.21858877447568);
$point20->setLongitude(29.672580957412716);
$em->persist($point20);


$waySet20 = new WaySet();
$waySet20->setPoint($point20);
$waySet20->setWay($way);
$em->persist($waySet20);


$point21 = new Point();
$point21->setLatitude(45.21985085205358);
$point21->setLongitude(29.67157244682312);
$em->persist($point21);


$waySet21 = new WaySet();
$waySet21->setPoint($point21);
$waySet21->setWay($way);
$em->persist($waySet21);


$point22 = new Point();
$point22->setLatitude(45.22104488768461);
$point22->setLongitude(29.670799970626828);
$em->persist($point22);


$waySet22 = new WaySet();
$waySet22->setPoint($point22);
$waySet22->setWay($way);
$em->persist($waySet22);


$point23 = new Point();
$point23->setLatitude(45.22269231340051);
$point23->setLongitude(29.670145511627194);
$em->persist($point23);


$waySet23 = new WaySet();
$waySet23->setPoint($point23);
$waySet23->setWay($way);
$em->persist($waySet23);


$point24 = new Point();
$point24->setLatitude(45.224694853771226);
$point24->setLongitude(29.669662714004513);
$em->persist($point24);


$waySet24 = new WaySet();
$waySet24->setPoint($point24);
$waySet24->setWay($way);
$em->persist($waySet24);


$point25 = new Point();
$point25->setLatitude(45.225208701814445);
$point25->setLongitude(29.6694803237915);
$em->persist($point25);


$waySet25 = new WaySet();
$waySet25->setPoint($point25);
$waySet25->setWay($way);
$em->persist($waySet25);


$point26 = new Point();
$point26->setLatitude(45.22550340668457);
$point26->setLongitude(29.66946959495544);
$em->persist($point26);


$waySet26 = new WaySet();
$waySet26->setPoint($point26);
$waySet26->setWay($way);
$em->persist($waySet26);


$point27 = new Point();
$point27->setLatitude(45.22769475395418);
$point27->setLongitude(29.668933153152466);
$em->persist($point27);


$waySet27 = new WaySet();
$waySet27->setPoint($point27);
$waySet27->setWay($way);
$em->persist($waySet27);


$point28 = new Point();
$point28->setLatitude(45.228775283751155);
$point28->setLongitude(29.6685791015625);
$em->persist($point28);


$waySet28 = new WaySet();
$waySet28->setPoint($point28);
$waySet28->setWay($way);
$em->persist($waySet28);


$point29 = new Point();
$point29->setLatitude(45.229893572679934);
$point29->setLongitude(29.66804265975952);
$em->persist($point29);


$waySet29 = new WaySet();
$waySet29->setPoint($point29);
$waySet29->setWay($way);
$em->persist($waySet29);


$point30 = new Point();
$point30->setLatitude(45.237403672804916);
$point30->setLongitude(29.66293573379517);
$em->persist($point30);


$waySet30 = new WaySet();
$waySet30->setPoint($point30);
$waySet30->setWay($way);
$em->persist($waySet30);


$point31 = new Point();
$point31->setLatitude(45.23884664678106);
$point31->setLongitude(29.66231346130371);
$em->persist($point31);


$waySet31 = new WaySet();
$waySet31->setPoint($point31);
$waySet31->setWay($way);
$em->persist($waySet31);


$point32 = new Point();
$point32->setLatitude(45.241596506195464);
$point32->setLongitude(29.661959409713745);
$em->persist($point32);


$waySet32 = new WaySet();
$waySet32->setPoint($point32);
$waySet32->setWay($way);
$em->persist($waySet32);


$point33 = new Point();
$point33->setLatitude(45.244119611757874);
$point33->setLongitude(29.661530256271362);
$em->persist($point33);


$waySet33 = new WaySet();
$waySet33->setPoint($point33);
$waySet33->setWay($way);
$em->persist($waySet33);


$point34 = new Point();
$point34->setLatitude(45.24757170338618);
$point34->setLongitude(29.660081863403317);
$em->persist($point34);


$waySet34 = new WaySet();
$waySet34->setPoint($point34);
$waySet34->setWay($way);
$em->persist($waySet34);


$point35 = new Point();
$point35->setLatitude(45.248765156722534);
$point35->setLongitude(29.659899473190308);
$em->persist($point35);


$waySet35 = new WaySet();
$waySet35->setPoint($point35);
$waySet35->setWay($way);
$em->persist($waySet35);


$point36 = new Point();
$point36->setLatitude(45.25019273568683);
$point36->setLongitude(29.65979218482971);
$em->persist($point36);


$waySet36 = new WaySet();
$waySet36->setPoint($point36);
$waySet36->setWay($way);
$em->persist($waySet36);


$point37 = new Point();
$point37->setLatitude(45.25172602127533);
$point37->setLongitude(29.660081863403317);
$em->persist($point37);


$waySet37 = new WaySet();
$waySet37->setPoint($point37);
$waySet37->setWay($way);
$em->persist($waySet37);


$point38 = new Point();
$point38->setLatitude(45.25826656775751);
$point38->setLongitude(29.662914276123043);
$em->persist($point38);


$waySet38 = new WaySet();
$waySet38->setPoint($point38);
$waySet38->setWay($way);
$em->persist($waySet38);


$point39 = new Point();
$point39->setLatitude(45.25967125198538);
$point39->setLongitude(29.66361165046692);
$em->persist($point39);


$waySet39 = new WaySet();
$waySet39->setPoint($point39);
$waySet39->setWay($way);
$em->persist($waySet39);


$point40 = new Point();
$point40->setLatitude(45.26045665167513);
$point40->setLongitude(29.664255380630497);
$em->persist($point40);


$waySet40 = new WaySet();
$waySet40->setPoint($point40);
$waySet40->setWay($way);
$em->persist($waySet40);


$point41 = new Point();
$point41->setLatitude(45.26109100503176);
$point41->setLongitude(29.66503858566284);
$em->persist($point41);


$waySet41 = new WaySet();
$waySet41->setPoint($point41);
$waySet41->setWay($way);
$em->persist($waySet41);


$point42 = new Point();
$point42->setLatitude(45.26486677121709);
$point42->setLongitude(29.67084288597107);
$em->persist($point42);


$waySet42 = new WaySet();
$waySet42->setPoint($point42);
$waySet42->setWay($way);
$em->persist($waySet42);


$point43 = new Point();
$point43->setLatitude(45.26553883127061);
$point43->setLongitude(29.672312736511234);
$em->persist($point43);


$waySet43 = new WaySet();
$waySet43->setPoint($point43);
$waySet43->setWay($way);
$em->persist($waySet43);


$point44 = new Point();
$point44->setLatitude(45.26631659870374);
$point44->setLongitude(29.674383401870724);
$em->persist($point44);


$waySet44 = new WaySet();
$waySet44->setPoint($point44);
$waySet44->setWay($way);
$em->persist($waySet44);


$point45 = new Point();
$point45->setLatitude(45.26714721235052);
$point45->setLongitude(29.677162170410156);
$em->persist($point45);


$waySet45 = new WaySet();
$waySet45->setPoint($point45);
$waySet45->setWay($way);
$em->persist($waySet45);


$point46 = new Point();
$point46->setLatitude(45.268242093587624);
$point46->setLongitude(29.678524732589718);
$em->persist($point46);


$waySet46 = new WaySet();
$waySet46->setPoint($point46);
$waySet46->setWay($way);
$em->persist($waySet46);


$point47 = new Point();
$point47->setLatitude(45.28047312379535);
$point47->setLongitude(29.675863981246945);
$em->persist($point47);


$waySet47 = new WaySet();
$waySet47->setPoint($point47);
$waySet47->setWay($way);
$em->persist($waySet47);


$point48 = new Point();
$point48->setLatitude(45.28710848697839);
$point48->setLongitude(29.672516584396362);
$em->persist($point48);


$waySet48 = new WaySet();
$waySet48->setPoint($point48);
$waySet48->setWay($way);
$em->persist($waySet48);


$point49 = new Point();
$point49->setLatitude(45.29311663316423);
$point49->setLongitude(29.670821428298954);
$em->persist($point49);


$waySet49 = new WaySet();
$waySet49->setPoint($point49);
$waySet49->setWay($way);
$em->persist($waySet49);


$point50 = new Point();
$point50->setLatitude(45.301878629908096);
$point50->setLongitude(29.670799970626828);
$em->persist($point50);


$waySet50 = new WaySet();
$waySet50->setPoint($point50);
$waySet50->setWay($way);
$em->persist($waySet50);


$point51 = new Point();
$point51->setLatitude(45.30747774985183);
$point51->setLongitude(29.66954469680786);
$em->persist($point51);


$waySet51 = new WaySet();
$waySet51->setPoint($point51);
$waySet51->setWay($way);
$em->persist($waySet51);


$point52 = new Point();
$point52->setLatitude(45.314524912502414);
$point52->setLongitude(29.66482400894165);
$em->persist($point52);


$waySet52 = new WaySet();
$waySet52->setPoint($point52);
$waySet52->setWay($way);
$em->persist($waySet52);


$point53 = new Point();
$point53->setLatitude(45.332953551130025);
$point53->setLongitude(29.65668082237244);
$em->persist($point53);


$waySet53 = new WaySet();
$waySet53->setPoint($point53);
$waySet53->setWay($way);
$em->persist($waySet53);


$point54 = new Point();
$point54->setLatitude(45.33974868283384);
$point54->setLongitude(29.650940895080566);
$em->persist($point54);


$waySet54 = new WaySet();
$waySet54->setPoint($point54);
$waySet54->setWay($way);
$em->persist($waySet54);


$point55 = new Point();
$point55->setLatitude(45.34281037357421);
$point55->setLongitude(29.646681547164917);
$em->persist($point55);


$waySet55 = new WaySet();
$waySet55->setPoint($point55);
$waySet55->setWay($way);
$em->persist($waySet55);


$point56 = new Point();
$point56->setLatitude(45.34721409156802);
$point56->setLongitude(29.63941812515259);
$em->persist($point56);


$waySet56 = new WaySet();
$waySet56->setPoint($point56);
$waySet56->setWay($way);
$em->persist($waySet56);


$point57 = new Point();
$point57->setLatitude(45.35054681476437);
$point57->setLongitude(29.635534286499023);
$em->persist($point57);


$waySet57 = new WaySet();
$waySet57->setPoint($point57);
$waySet57->setWay($way);
$em->persist($waySet57);


$point58 = new Point();
$point58->setLatitude(45.353472210949846);
$point58->setLongitude(29.631296396255493);
$em->persist($point58);


$waySet58 = new WaySet();
$waySet58->setPoint($point58);
$waySet58->setWay($way);
$em->persist($waySet58);


$point59 = new Point();
$point59->setLatitude(45.355183648400256);
$point59->setLongitude(29.629375934600827);
$em->persist($point59);


$waySet59 = new WaySet();
$waySet59->setPoint($point59);
$waySet59->setWay($way);
$em->persist($waySet59);


$point60 = new Point();
$point60->setLatitude(45.35638991682766);
$point60->setLongitude(29.62802410125732);
$em->persist($point60);


$waySet60 = new WaySet();
$waySet60->setPoint($point60);
$waySet60->setWay($way);
$em->persist($waySet60);


$point61 = new Point();
$point61->setLatitude(45.359699483762604);
$point61->setLongitude(29.623807668685917);
$em->persist($point61);


$waySet61 = new WaySet();
$waySet61->setPoint($point61);
$waySet61->setWay($way);
$em->persist($waySet61);


$point62 = new Point();
$point62->setLatitude(45.36233041366676);
$point62->setLongitude(29.62139368057251);
$em->persist($point62);


$waySet62 = new WaySet();
$waySet62->setPoint($point62);
$waySet62->setWay($way);
$em->persist($waySet62);


$point63 = new Point();
$point63->setLatitude(45.368368274415296);
$point63->setLongitude(29.615224599838253);
$em->persist($point63);


$waySet63 = new WaySet();
$waySet63->setPoint($point63);
$waySet63->setWay($way);
$em->persist($waySet63);


$point64 = new Point();
$point64->setLatitude(45.370644553999504);
$point64->setLongitude(29.61266040802002);
$em->persist($point64);


$waySet64 = new WaySet();
$waySet64->setPoint($point64);
$waySet64->setWay($way);
$em->persist($waySet64);


$point65 = new Point();
$point65->setLatitude(45.37449593101356);
$point65->setLongitude(29.609076976776123);
$em->persist($point65);


$waySet65 = new WaySet();
$waySet65->setPoint($point65);
$waySet65->setWay($way);
$em->persist($waySet65);


$point66 = new Point();
$point66->setLatitude(45.37706588209521);
$point66->setLongitude(29.60582613945007);
$em->persist($point66);


$waySet66 = new WaySet();
$waySet66->setPoint($point66);
$waySet66->setWay($way);
$em->persist($waySet66);


$point67 = new Point();
$point67->setLatitude(45.37919109065297);
$point67->setLongitude(29.603798389434814);
$em->persist($point67);


$waySet67 = new WaySet();
$waySet67->setPoint($point67);
$waySet67->setWay($way);
$em->persist($waySet67);


$point68 = new Point();
$point68->setLatitude(45.38377282883782);
$point68->setLongitude(29.597350358963013);
$em->persist($point68);


$waySet68 = new WaySet();
$waySet68->setPoint($point68);
$waySet68->setWay($way);
$em->persist($waySet68);


$point69 = new Point();
$point69->setLatitude(45.38592792595896);
$point69->setLongitude(29.59534406661987);
$em->persist($point69);


$waySet69 = new WaySet();
$waySet69->setPoint($point69);
$waySet69->setWay($way);
$em->persist($waySet69);


$point70 = new Point();
$point70->setLatitude(45.39018513160008);
$point70->setLongitude(29.589400291442868);
$em->persist($point70);


$waySet70 = new WaySet();
$waySet70->setPoint($point70);
$waySet70->setWay($way);
$em->persist($waySet70);


$point71 = new Point();
$point71->setLatitude(45.394999531781515);
$point71->setLongitude(29.578210115432736);
$em->persist($point71);


$waySet71 = new WaySet();
$waySet71->setPoint($point71);
$waySet71->setWay($way);
$em->persist($waySet71);


$point72 = new Point();
$point72->setLatitude(45.39724460478282);
$point72->setLongitude(29.57430481910706);
$em->persist($point72);


$waySet72 = new WaySet();
$waySet72->setPoint($point72);
$waySet72->setWay($way);
$em->persist($waySet72);


$point73 = new Point();
$point73->setLatitude(45.398223971102446);
$point73->setLongitude(29.571686983108524);
$em->persist($point73);


$waySet73 = new WaySet();
$waySet73->setPoint($point73);
$waySet73->setWay($way);
$em->persist($waySet73);


$point74 = new Point();
$point74->setLatitude(45.40269870584852);
$point74->setLongitude(29.563769102096554);
$em->persist($point74);


$waySet74 = new WaySet();
$waySet74->setPoint($point74);
$waySet74->setWay($way);
$em->persist($waySet74);


$point75 = new Point();
$point75->setLatitude(45.40988465939707);
$point75->setLongitude(29.544907808303833);
$em->persist($point75);


$waySet75 = new WaySet();
$waySet75->setPoint($point75);
$waySet75->setWay($way);
$em->persist($waySet75);


$point76 = new Point();
$point76->setLatitude(45.41154166782319);
$point76->setLongitude(29.538835287094116);
$em->persist($point76);


$waySet76 = new WaySet();
$waySet76->setPoint($point76);
$waySet76->setWay($way);
$em->persist($waySet76);


$point77 = new Point();
$point77->setLatitude(45.41285970799293);
$point77->setLongitude(29.532022476196286);
$em->persist($point77);


$waySet77 = new WaySet();
$waySet77->setPoint($point77);
$waySet77->setWay($way);
$em->persist($waySet77);


$point78 = new Point();
$point78->setLatitude(45.413311600398686);
$point78->setLongitude(29.527580738067623);
$em->persist($point78);


$waySet78 = new WaySet();
$waySet78->setPoint($point78);
$waySet78->setWay($way);
$em->persist($waySet78);


$point79 = new Point();
$point79->setLatitude(45.41450156643599);
$point79->setLongitude(29.520370960235592);
$em->persist($point79);


$waySet79 = new WaySet();
$waySet79->setPoint($point79);
$waySet79->setWay($way);
$em->persist($waySet79);


$point80 = new Point();
$point80->setLatitude(45.41605300348588);
$point80->setLongitude(29.514234066009518);
$em->persist($point80);


$waySet80 = new WaySet();
$waySet80->setPoint($point80);
$waySet80->setWay($way);
$em->persist($waySet80);


$point81 = new Point();
$point81->setLatitude(45.417062167812816);
$point81->setLongitude(29.50875163078308);
$em->persist($point81);


$waySet81 = new WaySet();
$waySet81->setPoint($point81);
$waySet81->setWay($way);
$em->persist($waySet81);


$point82 = new Point();
$point82->setLatitude(45.41871896565622);
$point82->setLongitude(29.501627683639523);
$em->persist($point82);


$waySet82 = new WaySet();
$waySet82->setPoint($point82);
$waySet82->setWay($way);
$em->persist($waySet82);


$point83 = new Point();
$point83->setLatitude(45.41975067429663);
$point83->setLongitude(29.49776530265808);
$em->persist($point83);


$waySet83 = new WaySet();
$waySet83->setPoint($point83);
$waySet83->setWay($way);
$em->persist($waySet83);


$point84 = new Point();
$point84->setLatitude(45.420752242023056);
$point84->setLongitude(29.49477195739746);
$em->persist($point84);


$waySet84 = new WaySet();
$waySet84->setPoint($point84);
$waySet84->setWay($way);
$em->persist($waySet84);


$point85 = new Point();
$point85->setLatitude(45.42077483357138);
$point85->setLongitude(29.494235515594486);
$em->persist($point85);


$waySet85 = new WaySet();
$waySet85->setPoint($point85);
$waySet85->setWay($way);
$em->persist($waySet85);


$point86 = new Point();
$point86->setLatitude(45.42159565369652);
$point86->setLongitude(29.480502605438232);
$em->persist($point86);


$waySet86 = new WaySet();
$waySet86->setPoint($point86);
$waySet86->setWay($way);
$em->persist($waySet86);


$point87 = new Point();
$point87->setLatitude(45.4220399458507);
$point87->setLongitude(29.478174448013306);
$em->persist($point87);


$waySet87 = new WaySet();
$waySet87->setPoint($point87);
$waySet87->setWay($way);
$em->persist($waySet87);


$point88 = new Point();
$point88->setLatitude(45.42304147296732);
$point88->setLongitude(29.47459101676941);
$em->persist($point88);


$waySet88 = new WaySet();
$waySet88->setPoint($point88);
$waySet88->setWay($way);
$em->persist($waySet88);


$point89 = new Point();
$point89->setLatitude(45.424547495335375);
$point89->setLongitude(29.47070717811584);
$em->persist($point89);


$waySet89 = new WaySet();
$waySet89->setPoint($point89);
$waySet89->setWay($way);
$em->persist($waySet89);


$point90 = new Point();
$point90->setLatitude(45.42734106044206);
$point90->setLongitude(29.465149641036987);
$em->persist($point90);


$waySet90 = new WaySet();
$waySet90->setPoint($point90);
$waySet90->setWay($way);
$em->persist($waySet90);


$point91 = new Point();
$point91->setLatitude(45.428606025581416);
$point91->setLongitude(29.461888074874878);
$em->persist($point91);


$waySet91 = new WaySet();
$waySet91->setPoint($point91);
$waySet91->setWay($way);
$em->persist($waySet91);


$point92 = new Point();
$point92->setLatitude(45.43098528796416);
$point92->setLongitude(29.45326209068298);
$em->persist($point92);


$waySet92 = new WaySet();
$waySet92->setPoint($point92);
$waySet92->setWay($way);
$em->persist($waySet92);


$point93 = new Point();
$point93->setLatitude(45.43382370713422);
$point93->setLongitude(29.44024801254272);
$em->persist($point93);


$waySet93 = new WaySet();
$waySet93->setPoint($point93);
$waySet93->setWay($way);
$em->persist($waySet93);


$point94 = new Point();
$point94->setLatitude(45.435299327543554);
$point94->setLongitude(29.43780183792114);
$em->persist($point94);


$waySet94 = new WaySet();
$waySet94->setPoint($point94);
$waySet94->setWay($way);
$em->persist($waySet94);


$point95 = new Point();
$point95->setLatitude(45.43876989487238);
$point95->setLongitude(29.433982372283936);
$em->persist($point95);


$waySet95 = new WaySet();
$waySet95->setPoint($point95);
$waySet95->setWay($way);
$em->persist($waySet95);


$point96 = new Point();
$point96->setLatitude(45.44185633723626);
$point96->setLongitude(29.430913925170895);
$em->persist($point96);


$waySet96 = new WaySet();
$waySet96->setPoint($point96);
$waySet96->setWay($way);
$em->persist($waySet96);


$point97 = new Point();
$point97->setLatitude(45.442834930048875);
$point97->setLongitude(29.427030086517334);
$em->persist($point97);


$waySet97 = new WaySet();
$waySet97->setPoint($point97);
$waySet97->setWay($way);
$em->persist($waySet97);


$point98 = new Point();
$point98->setLatitude(45.442390801568386);
$point98->setLongitude(29.419509172439575);
$em->persist($point98);


$waySet98 = new WaySet();
$waySet98->setPoint($point98);
$waySet98->setWay($way);
$em->persist($waySet98);


$point99 = new Point();
$point99->setLatitude(45.44090031094361);
$point99->setLongitude(29.41138744354248);
$em->persist($point99);


$waySet99 = new WaySet();
$waySet99->setPoint($point99);
$waySet99->setWay($way);
$em->persist($waySet99);


$point100 = new Point();
$point100->setLatitude(45.438483825811254);
$point100->setLongitude(29.40378069877624);
$em->persist($point100);


$waySet100 = new WaySet();
$waySet100->setPoint($point100);
$waySet100->setWay($way);
$em->persist($waySet100);


$point101 = new Point();
$point101->setLatitude(45.43666198355122);
$point101->setLongitude(29.3989098072052);
$em->persist($point101);


$waySet101 = new WaySet();
$waySet101->setPoint($point101);
$waySet101->setWay($way);
$em->persist($waySet101);


$point102 = new Point();
$point102->setLatitude(45.43651141544369);
$point102->setLongitude(29.395594596862797);
$em->persist($point102);


$waySet102 = new WaySet();
$waySet102->setPoint($point102);
$waySet102->setWay($way);
$em->persist($waySet102);


$point103 = new Point();
$point103->setLatitude(45.436082294133065);
$point103->setLongitude(29.391978979110718);
$em->persist($point103);


$waySet103 = new WaySet();
$waySet103->setPoint($point103);
$waySet103->setWay($way);
$em->persist($waySet103);


$point104 = new Point();
$point104->setLatitude(45.436895363323934);
$point104->setLongitude(29.388245344161987);
$em->persist($point104);


$waySet104 = new WaySet();
$waySet104->setPoint($point104);
$waySet104->setWay($way);
$em->persist($waySet104);


$point105 = new Point();
$point105->setLatitude(45.43968831731843);
$point105->setLongitude(29.38344955444336);
$em->persist($point105);


$waySet105 = new WaySet();
$waySet105->setPoint($point105);
$waySet105->setWay($way);
$em->persist($waySet105);


$point106 = new Point();
$point106->setLatitude(45.43983887694892);
$point106->setLongitude(29.381024837493896);
$em->persist($point106);


$waySet106 = new WaySet();
$waySet106->setPoint($point106);
$waySet106->setWay($way);
$em->persist($waySet106);


$point107 = new Point();
$point107->setLatitude(45.43859674798234);
$point107->setLongitude(29.375563859939575);
$em->persist($point107);


$waySet107 = new WaySet();
$waySet107->setPoint($point107);
$waySet107->setWay($way);
$em->persist($waySet107);


$point108 = new Point();
$point108->setLatitude(45.43788909864767);
$point108->setLongitude(29.367935657501217);
$em->persist($point108);


$waySet108 = new WaySet();
$waySet108->setPoint($point108);
$waySet108->setWay($way);
$em->persist($waySet108);


$point109 = new Point();
$point109->setLatitude(45.43794932446849);
$point109->setLongitude(29.358333349227905);
$em->persist($point109);


$waySet109 = new WaySet();
$waySet109->setPoint($point109);
$waySet109->setWay($way);
$em->persist($waySet109);


$point110 = new Point();
$point110->setLatitude(45.43819022710887);
$point110->setLongitude(29.350876808166504);
$em->persist($point110);


$waySet110 = new WaySet();
$waySet110->setPoint($point110);
$waySet110->setWay($way);
$em->persist($waySet110);


$point111 = new Point();
$point111->setLatitude(45.43899573784354);
$point111->setLongitude(29.347840547561642);
$em->persist($point111);


$waySet111 = new WaySet();
$waySet111->setPoint($point111);
$waySet111->setWay($way);
$em->persist($waySet111);


$point112 = new Point();
$point112->setLatitude(45.44131434006692);
$point112->setLongitude(29.343827962875366);
$em->persist($point112);


$waySet112 = new WaySet();
$waySet112->setPoint($point112);
$waySet112->setWay($way);
$em->persist($waySet112);


$point113 = new Point();
$point113->setLatitude(45.4446791549798);
$point113->setLongitude(29.339547157287598);
$em->persist($point113);


$waySet113 = new WaySet();
$waySet113->setPoint($point113);
$waySet113->setWay($way);
$em->persist($waySet113);


$point114 = new Point();
$point114->setLatitude(45.44627492544927);
$point114->setLongitude(29.33716535568237);
$em->persist($point114);


$waySet114 = new WaySet();
$waySet114->setPoint($point114);
$waySet114->setWay($way);
$em->persist($waySet114);


$point115 = new Point();
$point115->setLatitude(45.44782548936083);
$point115->setLongitude(29.333646297454834);
$em->persist($point115);


$waySet115 = new WaySet();
$waySet115->setPoint($point115);
$waySet115->setWay($way);
$em->persist($waySet115);


$point116 = new Point();
$point116->setLatitude(45.4483824776421);
$point116->setLongitude(29.32677984237671);
$em->persist($point116);


$waySet116 = new WaySet();
$waySet116->setPoint($point116);
$waySet116->setWay($way);
$em->persist($waySet116);


$point117 = new Point();
$point117->setLatitude(45.44659106329811);
$point117->setLongitude(29.319645166397095);
$em->persist($point117);


$waySet117 = new WaySet();
$waySet117->setPoint($point117);
$waySet117->setWay($way);
$em->persist($waySet117);


$point118 = new Point();
$point118->setLatitude(45.44266179563332);
$point118->setLongitude(29.31374430656433);
$em->persist($point118);


$waySet118 = new WaySet();
$waySet118->setPoint($point118);
$waySet118->setWay($way);
$em->persist($waySet118);


$point119 = new Point();
$point119->setLatitude(45.44001954797522);
$point119->setLongitude(29.310954809188843);
$em->persist($point119);


$waySet119 = new WaySet();
$waySet119->setPoint($point119);
$waySet119->setWay($way);
$em->persist($waySet119);


$point120 = new Point();
$point120->setLatitude(45.43694053349104);
$point120->setLongitude(29.307478666305542);
$em->persist($point120);


$waySet120 = new WaySet();
$waySet120->setPoint($point120);
$waySet120->setWay($way);
$em->persist($waySet120);


$point121 = new Point();
$point121->setLatitude(45.43373336177405);
$point121->setLongitude(29.30426001548767);
$em->persist($point121);


$waySet121 = new WaySet();
$waySet121->setPoint($point121);
$waySet121->setWay($way);
$em->persist($waySet121);


$point122 = new Point();
$point122->setLatitude(45.43103799200806);
$point122->setLongitude(29.300215244293216);
$em->persist($point122);


$waySet122 = new WaySet();
$waySet122->setPoint($point122);
$waySet122->setWay($way);
$em->persist($waySet122);


$point123 = new Point();
$point123->setLatitude(45.42862108451949);
$point123->setLongitude(29.29473280906677);
$em->persist($point123);


$waySet123 = new WaySet();
$waySet123->setPoint($point123);
$waySet123->setWay($way);
$em->persist($waySet123);


$point124 = new Point();
$point124->setLatitude(45.42726576400414);
$point124->setLongitude(29.289379119873047);
$em->persist($point124);


$waySet124 = new WaySet();
$waySet124->setPoint($point124);
$waySet124->setWay($way);
$em->persist($waySet124);


$point125 = new Point();
$point125->setLatitude(45.426595621281784);
$point125->setLongitude(29.28301692008972);
$em->persist($point125);


$waySet125 = new WaySet();
$waySet125->setPoint($point125);
$waySet125->setWay($way);
$em->persist($waySet125);


$point126 = new Point();
$point126->setLatitude(45.42701728504638);
$point126->setLongitude(29.27627921104431);
$em->persist($point126);


$waySet126 = new WaySet();
$waySet126->setPoint($point126);
$waySet126->setWay($way);
$em->persist($waySet126);


$point127 = new Point();
$point127->setLatitude(45.428274727927764);
$point127->setLongitude(29.269101619720455);
$em->persist($point127);


$waySet127 = new WaySet();
$waySet127->setPoint($point127);
$waySet127->setWay($way);
$em->persist($waySet127);


$point128 = new Point();
$point128->setLatitude(45.430661533471934);
$point128->setLongitude(29.262911081314087);
$em->persist($point128);


$waySet128 = new WaySet();
$waySet128->setPoint($point128);
$waySet128->setWay($way);
$em->persist($waySet128);


$point129 = new Point();
$point129->setLatitude(45.43272449542717);
$point129->setLongitude(29.25724625587463);
$em->persist($point129);


$waySet129 = new WaySet();
$waySet129->setPoint($point129);
$waySet129->setWay($way);
$em->persist($waySet129);


$point130 = new Point();
$point130->setLatitude(45.433537612997526);
$point130->setLongitude(29.250905513763428);
$em->persist($point130);


$waySet130 = new WaySet();
$waySet130->setPoint($point130);
$waySet130->setWay($way);
$em->persist($waySet130);


$point131 = new Point();
$point131->setLatitude(45.43363548747066);
$point131->setLongitude(29.244221448898315);
$em->persist($point131);


$waySet131 = new WaySet();
$waySet131->setPoint($point131);
$waySet131->setWay($way);
$em->persist($waySet131);


$point132 = new Point();
$point132->setLatitude(45.43269437973664);
$point132->setLongitude(29.2380952835083);
$em->persist($point132);


$waySet132 = new WaySet();
$waySet132->setPoint($point132);
$waySet132->setWay($way);
$em->persist($waySet132);


$point133 = new Point();
$point133->setLatitude(45.429660141542854);
$point133->setLongitude(29.233310222625736);
$em->persist($point133);


$waySet133 = new WaySet();
$waySet133->setPoint($point133);
$waySet133->setWay($way);
$em->persist($waySet133);


$point134 = new Point();
$point134->setLatitude(45.42647514534194);
$point134->setLongitude(29.228868484497074);
$em->persist($point134);


$waySet134 = new WaySet();
$waySet134->setPoint($point134);
$waySet134->setWay($way);
$em->persist($waySet134);


$point135 = new Point();
$point135->setLatitude(45.42356858536614);
$point135->setLongitude(29.22566056251526);
$em->persist($point135);


$waySet135 = new WaySet();
$waySet135->setPoint($point135);
$waySet135->setWay($way);
$em->persist($waySet135);


$point136 = new Point();
$point136->setLatitude(45.42158812329091);
$point136->setLongitude(29.22137975692749);
$em->persist($point136);


$waySet136 = new WaySet();
$waySet136->setPoint($point136);
$waySet136->setWay($way);
$em->persist($waySet136);


$point137 = new Point();
$point137->setLatitude(45.419020196404865);
$point137->setLongitude(29.215285778045654);
$em->persist($point137);


$waySet137 = new WaySet();
$waySet137->setPoint($point137);
$waySet137->setWay($way);
$em->persist($waySet137);


$point138 = new Point();
$point138->setLatitude(45.41707722983036);
$point138->setLongitude(29.209749698638912);
$em->persist($point138);


$waySet138 = new WaySet();
$waySet138->setPoint($point138);
$waySet138->setWay($way);
$em->persist($waySet138);


$point139 = new Point();
$point139->setLatitude(45.41577435045698);
$point139->setLongitude(29.203226566314697);
$em->persist($point139);


$waySet139 = new WaySet();
$waySet139->setPoint($point139);
$waySet139->setWay($way);
$em->persist($waySet139);


$point140 = new Point();
$point140->setLatitude(45.415134196398995);
$point140->setLongitude(29.197454452514652);
$em->persist($point140);


$waySet140 = new WaySet();
$waySet140->setPoint($point140);
$waySet140->setWay($way);
$em->persist($waySet140);


$point141 = new Point();
$point141->setLatitude(45.41311578080015);
$point141->setLongitude(29.19015884399414);
$em->persist($point141);


$waySet141 = new WaySet();
$waySet141->setPoint($point141);
$waySet141->setWay($way);
$em->persist($waySet141);


$point142 = new Point();
$point142->setLatitude(45.41043449030941);
$point142->setLongitude(29.185760021209713);
$em->persist($point142);


$waySet142 = new WaySet();
$waySet142->setPoint($point142);
$waySet142->setWay($way);
$em->persist($waySet142);


$point143 = new Point();
$point143->setLatitude(45.40767021770054);
$point143->setLongitude(29.184021949768066);
$em->persist($point143);


$waySet143 = new WaySet();
$waySet143->setPoint($point143);
$waySet143->setWay($way);
$em->persist($waySet143);


$point144 = new Point();
$point144->setLatitude(45.40460450377079);
$point144->setLongitude(29.182369709014893);
$em->persist($point144);


$waySet144 = new WaySet();
$waySet144->setPoint($point144);
$waySet144->setWay($way);
$em->persist($waySet144);


$point145 = new Point();
$point145->setLatitude(45.404182672616834);
$point145->setLongitude(29.18213367462158);
$em->persist($point145);


$waySet145 = new WaySet();
$waySet145->setPoint($point145);
$waySet145->setWay($way);
$em->persist($waySet145);


$point146 = new Point();
$point146->setLatitude(45.40070244541145);
$point146->setLongitude(29.17922616004944);
$em->persist($point146);


$waySet146 = new WaySet();
$waySet146->setPoint($point146);
$waySet146->setWay($way);
$em->persist($waySet146);


$point147 = new Point();
$point147->setLatitude(45.39820137053257);
$point147->setLongitude(29.176018238067627);
$em->persist($point147);


$waySet147 = new WaySet();
$waySet147->setPoint($point147);
$waySet147->setWay($way);
$em->persist($waySet147);


$point148 = new Point();
$point148->setLatitude(45.39601660610494);
$point148->setLongitude(29.171447753906246);
$em->persist($point148);


$waySet148 = new WaySet();
$waySet148->setPoint($point148);
$waySet148->setWay($way);
$em->persist($waySet148);


$point149 = new Point();
$point149->setLatitude(45.39402010957649);
$point149->setLongitude(29.16654467582703);
$em->persist($point149);


$waySet149 = new WaySet();
$waySet149->setPoint($point149);
$waySet149->setWay($way);
$em->persist($waySet149);


$point150 = new Point();
$point150->setLatitude(45.39230984702797);
$point150->setLongitude(29.1607940196991);
$em->persist($point150);


$waySet150 = new WaySet();
$waySet150->setPoint($point150);
$waySet150->setWay($way);
$em->persist($waySet150);


$point151 = new Point();
$point151->setLatitude(45.390094716405834);
$point151->setLongitude(29.154989719390866);
$em->persist($point151);


$waySet151 = new WaySet();
$waySet151->setPoint($point151);
$waySet151->setWay($way);
$em->persist($waySet151);


$point152 = new Point();
$point152->setLatitude(45.38803019678227);
$point152->setLongitude(29.1486918926239);
$em->persist($point152);


$waySet152 = new WaySet();
$waySet152->setPoint($point152);
$waySet152->setWay($way);
$em->persist($waySet152);


$point153 = new Point();
$point153->setLatitude(45.385724476246146);
$point153->setLongitude(29.140666723251343);
$em->persist($point153);


$waySet153 = new WaySet();
$waySet153->setPoint($point153);
$waySet153->setWay($way);
$em->persist($waySet153);


$point154 = new Point();
$point154->setLatitude(45.38390093131293);
$point154->setLongitude(29.133692979812622);
$em->persist($point154);


$waySet154 = new WaySet();
$waySet154->setPoint($point154);
$waySet154->setWay($way);
$em->persist($waySet154);


$point155 = new Point();
$point155->setLatitude(45.382717856239395);
$point155->setLongitude(29.12700891494751);
$em->persist($point155);


$waySet155 = new WaySet();
$waySet155->setPoint($point155);
$waySet155->setWay($way);
$em->persist($waySet155);


$point156 = new Point();
$point156->setLatitude(45.38203211349354);
$point156->setLongitude(29.120829105377194);
$em->persist($point156);


$waySet156 = new WaySet();
$waySet156->setPoint($point156);
$waySet156->setWay($way);
$em->persist($waySet156);


$point157 = new Point();
$point157->setLatitude(45.3796432523812);
$point157->setLongitude(29.115368127822872);
$em->persist($point157);


$waySet157 = new WaySet();
$waySet157->setPoint($point157);
$waySet157->setWay($way);
$em->persist($waySet157);


$point158 = new Point();
$point158->setLatitude(45.377020664024045);
$point158->setLongitude(29.111623764038082);
$em->persist($point158);


$waySet158 = new WaySet();
$waySet158->setPoint($point158);
$waySet158->setWay($way);
$em->persist($waySet158);


$point159 = new Point();
$point159->setLatitude(45.374978276776645);
$point159->setLongitude(29.106495380401608);
$em->persist($point159);


$waySet159 = new WaySet();
$waySet159->setPoint($point159);
$waySet159->setWay($way);
$em->persist($waySet159);


$point160 = new Point();
$point160->setLatitude(45.37407387509601);
$point160->setLongitude(29.10130262374878);
$em->persist($point160);


$waySet160 = new WaySet();
$waySet160->setPoint($point160);
$waySet160->setWay($way);
$em->persist($waySet160);


$point161 = new Point();
$point161->setLatitude(45.37468434781691);
$point161->setLongitude(29.09231185913086);
$em->persist($point161);


$waySet161 = new WaySet();
$waySet161->setPoint($point161);
$waySet161->setWay($way);
$em->persist($waySet161);


$point162 = new Point();
$point162->setLatitude(45.37426229330555);
$point162->setLongitude(29.08703327178955);
$em->persist($point162);


$waySet162 = new WaySet();
$waySet162->setPoint($point162);
$waySet162->setWay($way);
$em->persist($waySet162);


$point163 = new Point();
$point163->setLatitude(45.37288305749077);
$point163->setLongitude(29.08197999000549);
$em->persist($point163);


$waySet163 = new WaySet();
$waySet163->setPoint($point163);
$waySet163->setWay($way);
$em->persist($waySet163);


$point164 = new Point();
$point164->setLatitude(45.37029784183118);
$point164->setLongitude(29.07882571220398);
$em->persist($point164);


$waySet164 = new WaySet();
$waySet164->setPoint($point164);
$waySet164->setWay($way);
$em->persist($waySet164);


$point165 = new Point();
$point165->setLatitude(45.368081848641296);
$point165->setLongitude(29.076143503189087);
$em->persist($point165);


$waySet165 = new WaySet();
$waySet165->setPoint($point165);
$waySet165->setWay($way);
$em->persist($waySet165);


$point166 = new Point();
$point166->setLatitude(45.367704970413115);
$point166->setLongitude(29.07494187355041);
$em->persist($point166);


$waySet166 = new WaySet();
$waySet166->setPoint($point166);
$waySet166->setWay($way);
$em->persist($waySet166);


$point167 = new Point();
$point167->setLatitude(45.36539088305037);
$point167->setLongitude(29.069384336471558);
$em->persist($point167);


$waySet167 = new WaySet();
$waySet167->setPoint($point167);
$waySet167->setWay($way);
$em->persist($waySet167);


$point168 = new Point();
$point168->setLatitude(45.362752557218215);
$point168->setLongitude(29.0633225440979);
$em->persist($point168);


$waySet168 = new WaySet();
$waySet168->setPoint($point168);
$waySet168->setWay($way);
$em->persist($waySet168);


$point169 = new Point();
$point169->setLatitude(45.360227187247865);
$point169->setLongitude(29.058752059936523);
$em->persist($point169);


$waySet169 = new WaySet();
$waySet169->setPoint($point169);
$waySet169->setWay($way);
$em->persist($waySet169);


$point170 = new Point();
$point170->setLatitude(45.35980502485339);
$point170->setLongitude(29.051960706710815);
$em->persist($point170);


$waySet170 = new WaySet();
$waySet170->setPoint($point170);
$waySet170->setWay($way);
$em->persist($waySet170);


$point171 = new Point();
$point171->setLatitude(45.35994825887601);
$point171->setLongitude(29.04787302017212);
$em->persist($point171);


$waySet171 = new WaySet();
$waySet171->setPoint($point171);
$waySet171->setWay($way);
$em->persist($waySet171);


$point172 = new Point();
$point172->setLatitude(45.36054380697663);
$point172->setLongitude(29.04412865638733);
$em->persist($point172);


$waySet172 = new WaySet();
$waySet172->setPoint($point172);
$waySet172->setWay($way);
$em->persist($waySet172);


$point173 = new Point();
$point173->setLatitude(45.358847609179676);
$point173->setLongitude(29.040105342864994);
$em->persist($point173);


$waySet173 = new WaySet();
$waySet173->setPoint($point173);
$waySet173->setWay($way);
$em->persist($waySet173);


$point174 = new Point();
$point174->setLatitude(45.35591495170339);
$point174->setLongitude(29.036103487014767);
$em->persist($point174);


$waySet174 = new WaySet();
$waySet174->setPoint($point174);
$waySet174->setWay($way);
$em->persist($waySet174);


$point175 = new Point();
$point175->setLatitude(45.35203215079663);
$point175->setLongitude(29.029258489608768);
$em->persist($point175);


$waySet175 = new WaySet();
$waySet175->setPoint($point175);
$waySet175->setWay($way);
$em->persist($waySet175);


$point176 = new Point();
$point176->setLatitude(45.34971742235507);
$point176->setLongitude(29.0238082408905);
$em->persist($point176);


$waySet176 = new WaySet();
$waySet176->setPoint($point176);
$waySet176->setWay($way);
$em->persist($waySet176);


$point177 = new Point();
$point177->setLatitude(45.34808122169272);
$point177->setLongitude(29.018905162811283);
$em->persist($point177);


$waySet177 = new WaySet();
$waySet177->setPoint($point177);
$waySet177->setWay($way);
$em->persist($waySet177);


$point178 = new Point();
$point178->setLatitude(45.3466033223766);
$point178->setLongitude(29.014055728912354);
$em->persist($point178);


$waySet178 = new WaySet();
$waySet178->setPoint($point178);
$waySet178->setWay($way);
$em->persist($waySet178);


$point179 = new Point();
$point179->setLatitude(45.34444672659192);
$point179->setLongitude(29.00834798812866);
$em->persist($point179);


$waySet179 = new WaySet();
$waySet179->setPoint($point179);
$waySet179->setWay($way);
$em->persist($waySet179);


$point180 = new Point();
$point180->setLatitude(45.342169392910385);
$point180->setLongitude(29.003959894180298);
$em->persist($point180);


$waySet180 = new WaySet();
$waySet180->setPoint($point180);
$waySet180->setWay($way);
$em->persist($waySet180);


$point181 = new Point();
$point181->setLatitude(45.338376147032484);
$point181->setLongitude(28.99882078170776);
$em->persist($point181);


$waySet181 = new WaySet();
$waySet181->setPoint($point181);
$waySet181->setWay($way);
$em->persist($waySet181);


$point182 = new Point();
$point182->setLatitude(45.33659632579122);
$point182->setLongitude(28.996653556823727);
$em->persist($point182);


$waySet182 = new WaySet();
$waySet182->setPoint($point182);
$waySet182->setWay($way);
$em->persist($waySet182);


$point183 = new Point();
$point183->setLatitude(45.333428708939756);
$point183->setLongitude(28.987963199615475);
$em->persist($point183);


$waySet183 = new WaySet();
$waySet183->setPoint($point183);
$waySet183->setWay($way);
$em->persist($waySet183);


$point184 = new Point();
$point184->setLatitude(45.33201076589587);
$point184->setLongitude(28.98435831069946);
$em->persist($point184);


$waySet184 = new WaySet();
$waySet184->setPoint($point184);
$waySet184->setWay($way);
$em->persist($waySet184);


$point185 = new Point();
$point185->setLatitude(45.332025850583165);
$point185->setLongitude(28.977448940277096);
$em->persist($point185);


$waySet185 = new WaySet();
$waySet185->setPoint($point185);
$waySet185->setWay($way);
$em->persist($waySet185);


$point186 = new Point();
$point186->setLatitude(45.33214652793686);
$point186->setLongitude(28.970153331756592);
$em->persist($point186);


$waySet186 = new WaySet();
$waySet186->setPoint($point186);
$waySet186->setWay($way);
$em->persist($waySet186);


$point187 = new Point();
$point187->setLatitude(45.32793775333724);
$point187->setLongitude(28.961763381958008);
$em->persist($point187);


$waySet187 = new WaySet();
$waySet187->setPoint($point187);
$waySet187->setWay($way);
$em->persist($waySet187);


$point188 = new Point();
$point188->setLatitude(45.3228234450559);
$point188->setLongitude(28.95695686340332);
$em->persist($point188);


$waySet188 = new WaySet();
$waySet188->setPoint($point188);
$waySet188->setWay($way);
$em->persist($waySet188);


$point189 = new Point();
$point189->setLatitude(45.315400087806445);
$point189->setLongitude(28.95249366760254);
$em->persist($point189);


$waySet189 = new WaySet();
$waySet189->setPoint($point189);
$waySet189->setWay($way);
$em->persist($waySet189);


$point190 = new Point();
$point190->setLatitude(45.31247272430419);
$point190->setLongitude(28.949596881866455);
$em->persist($point190);


$waySet190 = new WaySet();
$waySet190->setPoint($point190);
$waySet190->setWay($way);
$em->persist($waySet190);


$point191 = new Point();
$point191->setLatitude(45.30793048470991);
$point191->setLongitude(28.94867420196533);
$em->persist($point191);


$waySet191 = new WaySet();
$waySet191->setPoint($point191);
$waySet191->setWay($way);
$em->persist($waySet191);


$point192 = new Point();
$point192->setLatitude(45.30228613168935);
$point192->setLongitude(28.951807022094723);
$em->persist($point192);


$waySet192 = new WaySet();
$waySet192->setPoint($point192);
$waySet192->setWay($way);
$em->persist($waySet192);


$point193 = new Point();
$point193->setLatitude(45.29793929501761);
$point193->setLongitude(28.954253196716305);
$em->persist($point193);


$waySet193 = new WaySet();
$waySet193->setPoint($point193);
$waySet193->setWay($way);
$em->persist($waySet193);


$point194 = new Point();
$point194->setLatitude(45.29381854841957);
$point194->setLongitude(28.954639434814453);
$em->persist($point194);


$waySet194 = new WaySet();
$waySet194->setPoint($point194);
$waySet194->setWay($way);
$em->persist($waySet194);


$point195 = new Point();
$point195->setLatitude(45.29024095416082);
$point195->setLongitude(28.95399570465088);
$em->persist($point195);


$waySet195 = new WaySet();
$waySet195->setPoint($point195);
$waySet195->setWay($way);
$em->persist($waySet195);


$point196 = new Point();
$point196->setLatitude(45.28614984196908);
$point196->setLongitude(28.95223617553711);
$em->persist($point196);


$waySet196 = new WaySet();
$waySet196->setPoint($point196);
$waySet196->setWay($way);
$em->persist($waySet196);


$point197 = new Point();
$point197->setLatitude(45.28343233499443);
$point197->setLongitude(28.94914627075195);
$em->persist($point197);


$waySet197 = new WaySet();
$waySet197->setPoint($point197);
$waySet197->setWay($way);
$em->persist($waySet197);


$point198 = new Point();
$point198->setLatitude(45.28091097599785);
$point198->setLongitude(28.943610191345215);
$em->persist($point198);


$waySet198 = new WaySet();
$waySet198->setPoint($point198);
$waySet198->setWay($way);
$em->persist($waySet198);


$point199 = new Point();
$point199->setLatitude(45.28044292696717);
$point199->setLongitude(28.937687873840332);
$em->persist($point199);


$waySet199 = new WaySet();
$waySet199->setPoint($point199);
$waySet199->setWay($way);
$em->persist($waySet199);


$point200 = new Point();
$point200->setLatitude(45.28109215523119);
$point200->setLongitude(28.93097162246704);
$em->persist($point200);


$waySet200 = new WaySet();
$waySet200->setPoint($point200);
$waySet200->setWay($way);
$em->persist($waySet200);


$point201 = new Point();
$point201->setLatitude(45.28308508861251);
$point201->setLongitude(28.92416954040527);
$em->persist($point201);


$waySet201 = new WaySet();
$waySet201->setPoint($point201);
$waySet201->setWay($way);
$em->persist($waySet201);


$point202 = new Point();
$point202->setLatitude(45.28667823098598);
$point202->setLongitude(28.916316032409668);
$em->persist($point202);


$waySet202 = new WaySet();
$waySet202->setPoint($point202);
$waySet202->setWay($way);
$em->persist($waySet202);


$point203 = new Point();
$point203->setLatitude(45.29170522888104);
$point203->setLongitude(28.907840251922607);
$em->persist($point203);


$waySet203 = new WaySet();
$waySet203->setPoint($point203);
$waySet203->setWay($way);
$em->persist($waySet203);


$point204 = new Point();
$point204->setLatitude(45.29624876853529);
$point204->setLongitude(28.901124000549313);
$em->persist($point204);


$waySet204 = new WaySet();
$waySet204->setPoint($point204);
$waySet204->setWay($way);
$em->persist($waySet204);


$point205 = new Point();
$point205->setLatitude(45.30174279533014);
$point205->setLongitude(28.893377780914307);
$em->persist($point205);


$waySet205 = new WaySet();
$waySet205->setPoint($point205);
$waySet205->setWay($way);
$em->persist($waySet205);


$point206 = new Point();
$point206->setLatitude(45.30201446416064);
$point206->setLongitude(28.892905712127682);
$em->persist($point206);


$waySet206 = new WaySet();
$waySet206->setPoint($point206);
$waySet206->setWay($way);
$em->persist($waySet206);


$point207 = new Point();
$point207->setLatitude(45.30767393540097);
$point207->setLongitude(28.884665966033936);
$em->persist($point207);


$waySet207 = new WaySet();
$waySet207->setPoint($point207);
$waySet207->setWay($way);
$em->persist($waySet207);


$point208 = new Point();
$point208->setLatitude(45.313121585959244);
$point208->setLongitude(28.878250122070312);
$em->persist($point208);


$waySet208 = new WaySet();
$waySet208->setPoint($point208);
$waySet208->setWay($way);
$em->persist($waySet208);


$point209 = new Point();
$point209->setLatitude(45.31696933381614);
$point209->setLongitude(28.870439529418945);
$em->persist($point209);


$waySet209 = new WaySet();
$waySet209->setPoint($point209);
$waySet209->setWay($way);
$em->persist($waySet209);


$point210 = new Point();
$point210->setLatitude(45.31687880157372);
$point210->setLongitude(28.864409923553467);
$em->persist($point210);


$waySet210 = new WaySet();
$waySet210->setPoint($point210);
$waySet210->setWay($way);
$em->persist($waySet210);


$point211 = new Point();
$point211->setLatitude(45.31609418274738);
$point211->setLongitude(28.857564926147457);
$em->persist($point211);


$waySet211 = new WaySet();
$waySet211->setPoint($point211);
$waySet211->setWay($way);
$em->persist($waySet211);


$point212 = new Point();
$point212->setLatitude(45.316109271673405);
$point212->setLongitude(28.849689960479733);
$em->persist($point212);


$waySet212 = new WaySet();
$waySet212->setPoint($point212);
$waySet212->setWay($way);
$em->persist($waySet212);


$point213 = new Point();
$point213->setLatitude(45.31868941894031);
$point213->setLongitude(28.842802047729496);
$em->persist($point213);


$waySet213 = new WaySet();
$waySet213->setPoint($point213);
$waySet213->setWay($way);
$em->persist($waySet213);


$point214 = new Point();
$point214->setLatitude(45.32229539283089);
$point214->setLongitude(28.83599996566772);
$em->persist($point214);


$waySet214 = new WaySet();
$waySet214->setPoint($point214);
$waySet214->setWay($way);
$em->persist($waySet214);


$point215 = new Point();
$point215->setLatitude(45.32986869950803);
$point215->setLongitude(28.827223777770996);
$em->persist($point215);


$waySet215 = new WaySet();
$waySet215->setPoint($point215);
$waySet215->setWay($way);
$em->persist($waySet215);


$point216 = new Point();
$point216->setLatitude(45.33428850817599);
$point216->setLongitude(28.82203102111816);
$em->persist($point216);


$waySet216 = new WaySet();
$waySet216->setPoint($point216);
$waySet216->setWay($way);
$em->persist($waySet216);


$point217 = new Point();
$point217->setLatitude(45.33630973917581);
$point217->setLongitude(28.810787200927734);
$em->persist($point217);


$waySet217 = new WaySet();
$waySet217->setPoint($point217);
$waySet217->setWay($way);
$em->persist($waySet217);


$point218 = new Point();
$point218->setLatitude(45.33511812664329);
$point218->setLongitude(28.797848224639893);
$em->persist($point218);


$waySet218 = new WaySet();
$waySet218->setPoint($point218);
$waySet218->setWay($way);
$em->persist($waySet218);


$point219 = new Point();
$point219->setLatitude(45.33077380786545);
$point219->setLongitude(28.788020610809323);
$em->persist($point219);


$waySet219 = new WaySet();
$waySet219->setPoint($point219);
$waySet219->setWay($way);
$em->persist($waySet219);


$point220 = new Point();
$point220->setLatitude(45.32727397538781);
$point220->setLongitude(28.781497478485107);
$em->persist($point220);


$waySet220 = new WaySet();
$waySet220->setPoint($point220);
$waySet220->setWay($way);
$em->persist($waySet220);


$point221 = new Point();
$point221->setLatitude(45.323185535165656);
$point221->setLongitude(28.780553340911865);
$em->persist($point221);


$waySet221 = new WaySet();
$waySet221->setPoint($point221);
$waySet221->setWay($way);
$em->persist($waySet221);


$point222 = new Point();
$point222->setLatitude(45.31980593747679);
$point222->setLongitude(28.784523010253906);
$em->persist($point222);


$waySet222 = new WaySet();
$waySet222->setPoint($point222);
$waySet222->setWay($way);
$em->persist($waySet222);


$point223 = new Point();
$point223->setLatitude(45.31758796693481);
$point223->setLongitude(28.792011737823486);
$em->persist($point223);


$waySet223 = new WaySet();
$waySet223->setPoint($point223);
$waySet223->setWay($way);
$em->persist($waySet223);


$point224 = new Point();
$point224->setLatitude(45.3151888398326);
$point224->setLongitude(28.799564838409427);
$em->persist($point224);


$waySet224 = new WaySet();
$waySet224->setPoint($point224);
$waySet224->setWay($way);
$em->persist($waySet224);


$point225 = new Point();
$point225->setLatitude(45.31266889256478);
$point225->setLongitude(28.803985118865963);
$em->persist($point225);


$waySet225 = new WaySet();
$waySet225->setPoint($point225);
$waySet225->setWay($way);
$em->persist($waySet225);


$point226 = new Point();
$point226->setLatitude(45.310586456375994);
$point226->setLongitude(28.805766105651852);
$em->persist($point226);


$waySet226 = new WaySet();
$waySet226->setPoint($point226);
$waySet226->setWay($way);
$em->persist($waySet226);


$point227 = new Point();
$point227->setLatitude(45.30851903461945);
$point227->setLongitude(28.805615901947018);
$em->persist($point227);


$waySet227 = new WaySet();
$waySet227->setPoint($point227);
$waySet227->setWay($way);
$em->persist($waySet227);


$point228 = new Point();
$point228->setLatitude(45.305893149372515);
$point228->setLongitude(28.80490779876709);
$em->persist($point228);


$waySet228 = new WaySet();
$waySet228->setPoint($point228);
$waySet228->setWay($way);
$em->persist($waySet228);


$point229 = new Point();
$point229->setLatitude(45.30236159466076);
$point229->setLongitude(28.802568912506104);
$em->persist($point229);


$waySet229 = new WaySet();
$waySet229->setPoint($point229);
$waySet229->setWay($way);
$em->persist($waySet229);


$point230 = new Point();
$point230->setLatitude(45.296792157543834);
$point230->setLongitude(28.796925544738773);
$em->persist($point230);


$waySet230 = new WaySet();
$waySet230->setPoint($point230);
$waySet230->setWay($way);
$em->persist($waySet230);


$point231 = new Point();
$point231->setLatitude(45.29236942350735);
$point231->setLongitude(28.791217803955078);
$em->persist($point231);


$waySet231 = new WaySet();
$waySet231->setPoint($point231);
$waySet231->setWay($way);
$em->persist($waySet231);


$point232 = new Point();
$point232->setLatitude(45.290905165935186);
$point232->setLongitude(28.784394264221188);
$em->persist($point232);


$waySet232 = new WaySet();
$waySet232->setPoint($point232);
$waySet232->setWay($way);
$em->persist($waySet232);


$point233 = new Point();
$point233->setLatitude(45.29098064405371);
$point233->setLongitude(28.774137496948242);
$em->persist($point233);


$waySet233 = new WaySet();
$waySet233->setPoint($point233);
$waySet233->setWay($way);
$em->persist($waySet233);


$point234 = new Point();
$point234->setLatitude(45.29153917900906);
$point234->setLongitude(28.76491069793701);
$em->persist($point234);


$waySet234 = new WaySet();
$waySet234->setPoint($point234);
$waySet234->setWay($way);
$em->persist($waySet234);


$point235 = new Point();
$point235->setLatitude(45.28966731045958);
$point235->setLongitude(28.757958412170414);
$em->persist($point235);


$waySet235 = new WaySet();
$waySet235->setPoint($point235);
$waySet235->setWay($way);
$em->persist($waySet235);


$point236 = new Point();
$point236->setLatitude(45.287040552038654);
$point236->setLongitude(28.754053115844727);
$em->persist($point236);


$waySet236 = new WaySet();
$waySet236->setPoint($point236);
$waySet236->setWay($way);
$em->persist($waySet236);


$point237 = new Point();
$point237->setLatitude(45.283522920657575);
$point237->setLongitude(28.752014636993405);
$em->persist($point237);


$waySet237 = new WaySet();
$waySet237->setPoint($point237);
$waySet237->setWay($way);
$em->persist($waySet237);


$point238 = new Point();
$point238->setLatitude(45.28012585930104);
$point238->setLongitude(28.75225067138672);
$em->persist($point238);


$waySet238 = new WaySet();
$waySet238->setPoint($point238);
$waySet238->setWay($way);
$em->persist($waySet238);


$point239 = new Point();
$point239->setLatitude(45.2758830214782);
$point239->setLongitude(28.7542462348938);
$em->persist($point239);


$waySet239 = new WaySet();
$waySet239->setPoint($point239);
$waySet239->setWay($way);
$em->persist($waySet239);


$point240 = new Point();
$point240->setLatitude(45.270371388345524);
$point240->setLongitude(28.758666515350342);
$em->persist($point240);


$waySet240 = new WaySet();
$waySet240->setPoint($point240);
$waySet240->setWay($way);
$em->persist($waySet240);


$point241 = new Point();
$point241->setLatitude(45.264134292209896);
$point241->setLongitude(28.763773441314697);
$em->persist($point241);


$waySet241 = new WaySet();
$waySet241->setPoint($point241);
$waySet241->setWay($way);
$em->persist($waySet241);


$point242 = new Point();
$point242->setLatitude(45.261793316552236);
$point242->setLongitude(28.76866579055786);
$em->persist($point242);


$waySet242 = new WaySet();
$waySet242->setPoint($point242);
$waySet242->setWay($way);
$em->persist($waySet242);


$point243 = new Point();
$point243->setLatitude(45.26032826977636);
$point243->setLongitude(28.775274753570557);
$em->persist($point243);


$waySet243 = new WaySet();
$waySet243->setPoint($point243);
$waySet243->setWay($way);
$em->persist($waySet243);


$point244 = new Point();
$point244->setLatitude(45.25969390789785);
$point244->setLongitude(28.782978057861328);
$em->persist($point244);


$waySet244 = new WaySet();
$waySet244->setPoint($point244);
$waySet244->setWay($way);
$em->persist($waySet244);


$point245 = new Point();
$point245->setLatitude(45.25757931711527);
$point245->setLongitude(28.78832101821899);
$em->persist($point245);


$waySet245 = new WaySet();
$waySet245->setPoint($point245);
$waySet245->setWay($way);
$em->persist($waySet245);


$point246 = new Point();
$point246->setLatitude(45.25449791528194);
$point246->setLongitude(28.791947364807125);
$em->persist($point246);


$waySet246 = new WaySet();
$waySet246->setPoint($point246);
$waySet246->setWay($way);
$em->persist($waySet246);


$point247 = new Point();
$point247->setLatitude(45.2506761405373);
$point247->setLongitude(28.793642520904545);
$em->persist($point247);


$waySet247 = new WaySet();
$waySet247->setPoint($point247);
$waySet247->setWay($way);
$em->persist($waySet247);


$point248 = new Point();
$point248->setLatitude(45.24670303487374);
$point248->setLongitude(28.794007301330566);
$em->persist($point248);


$waySet248 = new WaySet();
$waySet248->setPoint($point248);
$waySet248->setWay($way);
$em->persist($waySet248);


$point249 = new Point();
$point249->setLatitude(45.24401385509208);
$point249->setLongitude(28.79387855529785);
$em->persist($point249);


$waySet249 = new WaySet();
$waySet249->setPoint($point249);
$waySet249->setWay($way);
$em->persist($waySet249);


$point250 = new Point();
$point250->setLatitude(45.24087128146924);
$point250->setLongitude(28.79138946533203);
$em->persist($point250);


$waySet250 = new WaySet();
$waySet250->setPoint($point250);
$waySet250->setWay($way);
$em->persist($waySet250);


$point251 = new Point();
$point251->setLatitude(45.23852934674605);
$point251->setLongitude(28.78544569015503);
$em->persist($point251);


$waySet251 = new WaySet();
$waySet251->setPoint($point251);
$waySet251->setWay($way);
$em->persist($waySet251);


$point252 = new Point();
$point252->setLatitude(45.237154359452525);
$point252->setLongitude(28.78018856048584);
$em->persist($point252);


$waySet252 = new WaySet();
$waySet252->setPoint($point252);
$waySet252->setWay($way);
$em->persist($waySet252);


$point253 = new Point();
$point253->setLatitude(45.236413967897725);
$point253->setLongitude(28.77265691757202);
$em->persist($point253);


$waySet253 = new WaySet();
$waySet253->setPoint($point253);
$waySet253->setWay($way);
$em->persist($waySet253);


$point254 = new Point();
$point254->setLatitude(45.236126874699316);
$point254->setLongitude(28.76621961593628);
$em->persist($point254);


$waySet254 = new WaySet();
$waySet254->setPoint($point254);
$waySet254->setWay($way);
$em->persist($waySet254);


$point255 = new Point();
$point255->setLatitude(45.23561312535568);
$point255->setLongitude(28.7576150894165);
$em->persist($point255);


$waySet255 = new WaySet();
$waySet255->setPoint($point255);
$waySet255->setWay($way);
$em->persist($waySet255);


$point256 = new Point();
$point256->setLatitude(45.23405673870175);
$point256->setLongitude(28.74851703643799);
$em->persist($point256);


$waySet256 = new WaySet();
$waySet256->setPoint($point256);
$waySet256->setWay($way);
$em->persist($waySet256);


$point257 = new Point();
$point257->setLatitude(45.23006735884898);
$point257->setLongitude(28.73647928237915);
$em->persist($point257);


$waySet257 = new WaySet();
$waySet257->setPoint($point257);
$waySet257->setWay($way);
$em->persist($waySet257);


$point258 = new Point();
$point258->setLatitude(45.22740761670758);
$point258->setLongitude(28.730406761169434);
$em->persist($point258);


$waySet258 = new WaySet();
$waySet258->setPoint($point258);
$waySet258->setWay($way);
$em->persist($waySet258);


$point259 = new Point();
$point259->setLatitude(45.225050013943864);
$point259->setLongitude(28.722767829895016);
$em->persist($point259);


$waySet259 = new WaySet();
$waySet259->setPoint($point259);
$waySet259->setWay($way);
$em->persist($waySet259);


$point260 = new Point();
$point260->setLatitude(45.223523565136425);
$point260->setLongitude(28.71663093566894);
$em->persist($point260);


$waySet260 = new WaySet();
$waySet260->setPoint($point260);
$waySet260->setWay($way);
$em->persist($waySet260);


$point261 = new Point();
$point261->setLatitude(45.223493338013505);
$point261->setLongitude(28.70645999908447);
$em->persist($point261);


$waySet261 = new WaySet();
$waySet261->setPoint($point261);
$waySet261->setWay($way);
$em->persist($waySet261);


$point262 = new Point();
$point262->setLatitude(45.22594168289658);
$point262->setLongitude(28.697340488433838);
$em->persist($point262);


$waySet262 = new WaySet();
$waySet262->setPoint($point262);
$waySet262->setWay($way);
$em->persist($waySet262);


$point263 = new Point();
$point263->setLatitude(45.22731694148625);
$point263->setLongitude(28.693435192108154);
$em->persist($point263);


$waySet263 = new WaySet();
$waySet263->setPoint($point263);
$waySet263->setWay($way);
$em->persist($waySet263);


$point264 = new Point();
$point264->setLatitude(45.23100428382294);
$point264->setLongitude(28.683350086212158);
$em->persist($point264);


$waySet264 = new WaySet();
$waySet264->setPoint($point264);
$waySet264->setWay($way);
$em->persist($waySet264);


$point265 = new Point();
$point265->setLatitude(45.234585612734364);
$point265->setLongitude(28.675153255462646);
$em->persist($point265);


$waySet265 = new WaySet();
$waySet265->setPoint($point265);
$waySet265->setWay($way);
$em->persist($waySet265);


$point266 = new Point();
$point266->setLatitude(45.23775875356991);
$point266->setLongitude(28.664381504058834);
$em->persist($point266);


$waySet266 = new WaySet();
$waySet266->setPoint($point266);
$waySet266->setWay($way);
$em->persist($waySet266);


$point267 = new Point();
$point267->setLatitude(45.24081084565751);
$point267->setLongitude(28.65172147750854);
$em->persist($point267);


$waySet267 = new WaySet();
$waySet267->setPoint($point267);
$waySet267->setWay($way);
$em->persist($waySet267);


$point268 = new Point();
$point268->setLatitude(45.24433112449878);
$point268->setLongitude(28.631916046142578);
$em->persist($point268);


$waySet268 = new WaySet();
$waySet268->setPoint($point268);
$waySet268->setWay($way);
$em->persist($waySet268);


$point269 = new Point();
$point269->setLatitude(45.245237598754485);
$point269->setLongitude(28.609471321105957);
$em->persist($point269);


$waySet269 = new WaySet();
$waySet269->setPoint($point269);
$waySet269->setWay($way);
$em->persist($waySet269);


$point270 = new Point();
$point270->setLatitude(45.24664260526563);
$point270->setLongitude(28.586769104003906);
$em->persist($point270);


$waySet270 = new WaySet();
$waySet270->setPoint($point270);
$waySet270->setWay($way);
$em->persist($waySet270);


$point271 = new Point();
$point271->setLatitude(45.24834971695061);
$point271->setLongitude(28.56616973876953);
$em->persist($point271);


$waySet271 = new WaySet();
$waySet271->setPoint($point271);
$waySet271->setWay($way);
$em->persist($waySet271);


$point272 = new Point();
$point272->setLatitude(45.25401454296015);
$point272->setLongitude(28.55022668838501);
$em->persist($point272);


$waySet272 = new WaySet();
$waySet272->setPoint($point272);
$waySet272->setWay($way);
$em->persist($waySet272);


$point273 = new Point();
$point273->setLatitude(45.262850543318486);
$point273->setLongitude(28.53102207183838);
$em->persist($point273);


$waySet273 = new WaySet();
$waySet273->setPoint($point273);
$waySet273->setWay($way);
$em->persist($waySet273);


$point274 = new Point();
$point274->setLatitude(45.267003743588965);
$point274->setLongitude(28.51574420928955);
$em->persist($point274);


$waySet274 = new WaySet();
$waySet274->setPoint($point274);
$waySet274->setWay($way);
$em->persist($waySet274);


$point275 = new Point();
$point275->setLatitude(45.273965335876944);
$point275->setLongitude(28.49851369857788);
$em->persist($point275);


$waySet275 = new WaySet();
$waySet275->setPoint($point275);
$waySet275->setWay($way);
$em->persist($waySet275);


$point276 = new Point();
$point276->setLatitude(45.27931053430915);
$point276->setLongitude(28.481411933898926);
$em->persist($point276);


$waySet276 = new WaySet();
$waySet276->setPoint($point276);
$waySet276->setWay($way);
$em->persist($waySet276);


$point277 = new Point();
$point277->setLatitude(45.28432308773331);
$point277->setLongitude(28.466885089874264);
$em->persist($point277);


$waySet277 = new WaySet();
$waySet277->setPoint($point277);
$waySet277->setWay($way);
$em->persist($waySet277);


$point278 = new Point();
$point278->setLatitude(45.28841433167348);
$point278->setLongitude(28.45205783843994);
$em->persist($point278);


$waySet278 = new WaySet();
$waySet278->setPoint($point278);
$waySet278->setWay($way);
$em->persist($waySet278);


$point279 = new Point();
$point279->setLatitude(45.29153917900906);
$point279->setLongitude(28.439805507659912);
$em->persist($point279);


$waySet279 = new WaySet();
$waySet279->setPoint($point279);
$waySet279->setWay($way);
$em->persist($waySet279);


$point280 = new Point();
$point280->setLatitude(45.29710913206083);
$point280->setLongitude(28.42238187789917);
$em->persist($point280);


$waySet280 = new WaySet();
$waySet280->setPoint($point280);
$waySet280->setWay($way);
$em->persist($waySet280);


$point281 = new Point();
$point281->setLatitude(45.302165390726174);
$point281->setLongitude(28.406245708465576);
$em->persist($point281);


$waySet281 = new WaySet();
$waySet281->setPoint($point281);
$waySet281->setWay($way);
$em->persist($waySet281);


$point282 = new Point();
$point282->setLatitude(45.30633080536107);
$point282->setLongitude(28.39268445968628);
$em->persist($point282);


$waySet282 = new WaySet();
$waySet282->setPoint($point282);
$waySet282->setWay($way);
$em->persist($waySet282);


$point283 = new Point();
$point283->setLatitude(45.3113862416435);
$point283->setLongitude(28.37693452835083);
$em->persist($point283);


$waySet283 = new WaySet();
$waySet283->setPoint($point283);
$waySet283->setWay($way);
$em->persist($waySet283);


$point284 = new Point();
$point284->setLatitude(45.316109271673405);
$point284->setLongitude(28.363780975341797);
$em->persist($point284);


$waySet284 = new WaySet();
$waySet284->setPoint($point284);
$waySet284->setWay($way);
$em->persist($waySet284);


$point285 = new Point();
$point285->setLatitude(45.32071120662516);
$point285->setLongitude(28.34841728210449);
$em->persist($point285);


$waySet285 = new WaySet();
$waySet285->setPoint($point285);
$waySet285->setWay($way);
$em->persist($waySet285);


$point286 = new Point();
$point286->setLatitude(45.32929545673395);
$point286->setLongitude(28.337173461914062);
$em->persist($point286);


$waySet286 = new WaySet();
$waySet286->setPoint($point286);
$waySet286->setWay($way);
$em->persist($waySet286);


$point287 = new Point();
$point287->setLatitude(45.33599298386081);
$point287->setLongitude(28.33150863647461);
$em->persist($point287);


$waySet287 = new WaySet();
$waySet287->setPoint($point287);
$waySet287->setWay($way);
$em->persist($waySet287);


$point288 = new Point();
$point288->setLatitude(45.34302151855681);
$point288->setLongitude(28.32648754119873);
$em->persist($point288);


$waySet288 = new WaySet();
$waySet288->setPoint($point288);
$waySet288->setWay($way);
$em->persist($waySet288);


$point289 = new Point();
$point289->setLatitude(45.34964202244247);
$point289->setLongitude(28.32146644592285);
$em->persist($point289);


$waySet289 = new WaySet();
$waySet289->setPoint($point289);
$waySet289->setWay($way);
$em->persist($waySet289);


$point290 = new Point();
$point290->setLatitude(45.35511579503735);
$point290->setLongitude(28.31747531890869);
$em->persist($point290);


$waySet290 = new WaySet();
$waySet290->setPoint($point290);
$waySet290->setWay($way);
$em->persist($waySet290);


$point291 = new Point();
$point291->setLatitude(45.36233795197208);
$point291->setLongitude(28.31402063369751);
$em->persist($point291);


$waySet291 = new WaySet();
$waySet291->setPoint($point291);
$waySet291->setWay($way);
$em->persist($waySet291);


$point292 = new Point();
$point292->setLatitude(45.3655265650522);
$point292->setLongitude(28.311574459075928);
$em->persist($point292);


$waySet292 = new WaySet();
$waySet292->setPoint($point292);
$waySet292->setWay($way);
$em->persist($waySet292);


$point293 = new Point();
$point293->setLatitude(45.37002650039082);
$point293->setLongitude(28.30846309661865);
$em->persist($point293);


$waySet293 = new WaySet();
$waySet293->setPoint($point293);
$waySet293->setWay($way);
$em->persist($waySet293);


$point294 = new Point();
$point294->setLatitude(45.37337295384522);
$point294->setLongitude(28.306102752685547);
$em->persist($point294);


$waySet294 = new WaySet();
$waySet294->setPoint($point294);
$waySet294->setWay($way);
$em->persist($waySet294);


$point295 = new Point();
$point295->setLatitude(45.376877473226784);
$point295->setLongitude(28.303645849227905);
$em->persist($point295);


$waySet295 = new WaySet();
$waySet295->setPoint($point295);
$waySet295->setWay($way);
$em->persist($waySet295);


$point296 = new Point();
$point296->setLatitude(45.3806982823519);
$point296->setLongitude(28.30080270767212);
$em->persist($point296);


$waySet296 = new WaySet();
$waySet296->setPoint($point296);
$waySet296->setWay($way);
$em->persist($waySet296);


$point297 = new Point();
$point297->setLatitude(45.384149599994814);
$point297->setLongitude(28.297348022460938);
$em->persist($point297);


$waySet297 = new WaySet();
$waySet297->setPoint($point297);
$waySet297->setWay($way);
$em->persist($waySet297);


$point298 = new Point();
$point298->setLatitude(45.38755549730138);
$point298->setLongitude(28.293979167938232);
$em->persist($point298);


$waySet298 = new WaySet();
$waySet298->setPoint($point298);
$waySet298->setWay($way);
$em->persist($waySet298);


$point299 = new Point();
$point299->setLatitude(45.39128517154519);
$point299->setLongitude(28.291093111038208);
$em->persist($point299);


$waySet299 = new WaySet();
$waySet299->setPoint($point299);
$waySet299->setWay($way);
$em->persist($waySet299);


$point300 = new Point();
$point300->setLatitude(45.39462283294224);
$point300->setLongitude(28.288925886154175);
$em->persist($point300);


$waySet300 = new WaySet();
$waySet300->setPoint($point300);
$waySet300->setWay($way);
$em->persist($waySet300);


$point301 = new Point();
$point301->setLatitude(45.39828423924462);
$point301->setLongitude(28.28630805015564);
$em->persist($point301);


$waySet301 = new WaySet();
$waySet301->setPoint($point301);
$waySet301->setWay($way);
$em->persist($waySet301);


$point302 = new Point();
$point302->setLatitude(45.402096068620864);
$point302->setLongitude(28.2848060131073);
$em->persist($point302);


$waySet302 = new WaySet();
$waySet302->setPoint($point302);
$waySet302->setWay($way);
$em->persist($waySet302);


$point303 = new Point();
$point303->setLatitude(45.40534270071096);
$point303->setLongitude(28.2843017578125);
$em->persist($point303);


$waySet303 = new WaySet();
$waySet303->setPoint($point303);
$waySet303->setWay($way);
$em->persist($waySet303);


$point304 = new Point();
$point304->setLatitude(45.40831045636434);
$point304->setLongitude(28.284194469451904);
$em->persist($point304);


$waySet304 = new WaySet();
$waySet304->setPoint($point304);
$waySet304->setWay($way);
$em->persist($waySet304);


$point305 = new Point();
$point305->setLatitude(45.411165079267796);
$point305->setLongitude(28.284677267074585);
$em->persist($point305);


$waySet305 = new WaySet();
$waySet305->setPoint($point305);
$waySet305->setWay($way);
$em->persist($waySet305);


$point306 = new Point();
$point306->setLatitude(45.414140060418056);
$point306->setLongitude(28.285160064697266);
$em->persist($point306);


$waySet306 = new WaySet();
$waySet306->setPoint($point306);
$waySet306->setWay($way);
$em->persist($waySet306);


$point307 = new Point();
$point307->setLatitude(45.41787551101056);
$point307->setLongitude(28.285675048828125);
$em->persist($point307);


$waySet307 = new WaySet();
$waySet307->setPoint($point307);
$waySet307->setWay($way);
$em->persist($waySet307);


$point308 = new Point();
$point308->setLatitude(45.42103840096729);
$point308->setLongitude(28.286211490631104);
$em->persist($point308);


$waySet308 = new WaySet();
$waySet308->setPoint($point308);
$waySet308->setWay($way);
$em->persist($waySet308);


$point309 = new Point();
$point309->setLatitude(45.42410322291458);
$point309->setLongitude(28.28667283058166);
$em->persist($point309);


$waySet309 = new WaySet();
$waySet309->setPoint($point309);
$waySet309->setWay($way);
$em->persist($waySet309);


$point310 = new Point();
$point310->setLatitude(45.42682904268353);
$point310->setLongitude(28.286855220794678);
$em->persist($point310);


$waySet310 = new WaySet();
$waySet310->setPoint($point310);
$waySet310->setWay($way);
$em->persist($waySet310);


$point311 = new Point();
$point311->setLatitude(45.429660141542854);
$point311->setLongitude(28.286705017089844);
$em->persist($point311);


$waySet311 = new WaySet();
$waySet311->setPoint($point311);
$waySet311->setWay($way);
$em->persist($waySet311);


$point312 = new Point();
$point312->setLatitude(45.433048238085675);
$point312->setLongitude(28.286758661270138);
$em->persist($point312);


$waySet312 = new WaySet();
$waySet312->setPoint($point312);
$waySet312->setWay($way);
$em->persist($waySet312);


$point313 = new Point();
$point313->setLatitude(45.435984423903484);
$point313->setLongitude(28.28534245491028);
$em->persist($point313);


$waySet313 = new WaySet();
$waySet313->setPoint($point313);
$waySet313->setWay($way);
$em->persist($waySet313);


$point314 = new Point();
$point314->setLatitude(45.43970337329956);
$point314->setLongitude(28.283143043518063);
$em->persist($point314);


$waySet314 = new WaySet();
$waySet314->setPoint($point314);
$waySet314->setWay($way);
$em->persist($waySet314);


$point315 = new Point();
$point315->setLatitude(45.4431962523351);
$point315->setLongitude(28.280879259109497);
$em->persist($point315);


$waySet315 = new WaySet();
$waySet315->setPoint($point315);
$waySet315->setWay($way);
$em->persist($waySet315);


$point316 = new Point();
$point316->setLatitude(45.44665880689236);
$point316->setLongitude(28.27704906463623);
$em->persist($point316);


$waySet316 = new WaySet();
$waySet316->setPoint($point316);
$waySet316->setWay($way);
$em->persist($waySet316);


$point317 = new Point();
$point317->setLatitude(45.45023404780135);
$point317->setLongitude(28.27259659767151);
$em->persist($point317);


$waySet317 = new WaySet();
$waySet317->setPoint($point317);
$waySet317->setWay($way);
$em->persist($waySet317);


$point318 = new Point();
$point318->setLatitude(45.45350801699935);
$point318->setLongitude(28.26733946800232);
$em->persist($point318);


$waySet318 = new WaySet();
$waySet318->setPoint($point318);
$waySet318->setWay($way);
$em->persist($waySet318);


$point319 = new Point();
$point319->setLatitude(45.456834476093185);
$point319->setLongitude(28.25882077217102);
$em->persist($point319);


$waySet319 = new WaySet();
$waySet319->setPoint($point319);
$waySet319->setWay($way);
$em->persist($waySet319);


$point320 = new Point();
$point320->setLatitude(45.458949159146904);
$point320->setLongitude(28.25105309486389);
$em->persist($point320);


$waySet320 = new WaySet();
$waySet320->setPoint($point320);
$waySet320->setWay($way);
$em->persist($waySet320);


$point321 = new Point();
$point321->setLatitude(45.46173349629821);
$point321->setLongitude(28.24105381965637);
$em->persist($point321);


$waySet321 = new WaySet();
$waySet321->setPoint($point321);
$waySet321->setWay($way);
$em->persist($waySet321);


$point322 = new Point();
$point322->setLatitude(45.46449512191161);
$point322->setLongitude(28.231676816940304);
$em->persist($point322);


$waySet322 = new WaySet();
$waySet322->setPoint($point322);
$waySet322->setWay($way);
$em->persist($waySet322);


$point323 = new Point();
$point323->setLatitude(45.466398834092736);
$point323->setLongitude(28.22066903114319);
$em->persist($point323);


$waySet323 = new WaySet();
$waySet323->setPoint($point323);
$waySet323->setWay($way);
$em->persist($waySet323);


$point324 = new Point();
$point324->setLatitude(45.46670357256344);
$point324->setLongitude(28.211731910705566);
$em->persist($point324);


$waySet324 = new WaySet();
$waySet324->setPoint($point324);
$waySet324->setWay($way);
$em->persist($waySet324);


$point325 = new Point();
$point325->setLatitude(45.46830248198494);
$point325->setLongitude(28.212944269180298);
$em->persist($point325);


$waySet325 = new WaySet();
$waySet325->setPoint($point325);
$waySet325->setWay($way);
$em->persist($waySet325);


$point326 = new Point();
$point326->setLatitude(45.46965305484284);
$point326->setLongitude(28.213979601860046);
$em->persist($point326);


$waySet326 = new WaySet();
$waySet326->setPoint($point326);
$waySet326->setWay($way);
$em->persist($waySet326);


$point327 = new Point();
$point327->setLatitude(45.47068759433523);
$point327->setLongitude(28.214762806892395);
$em->persist($point327);


$waySet327 = new WaySet();
$waySet327->setPoint($point327);
$waySet327->setWay($way);
$em->persist($waySet327);


$point328 = new Point();
$point328->setLatitude(45.48090782392256);
$point328->setLongitude(28.224070072174072);
$em->persist($point328);


$waySet328 = new WaySet();
$waySet328->setPoint($point328);
$waySet328->setWay($way);
$em->persist($waySet328);


$point329 = new Point();
$point329->setLatitude(45.4825589863036);
$point329->setLongitude(28.225550651550293);
$em->persist($point329);


$waySet329 = new WaySet();
$waySet329->setPoint($point329);
$waySet329->setWay($way);
$em->persist($waySet329);


$point330 = new Point();
$point330->setLatitude(45.491257819478186);
$point330->setLongitude(28.233430981636047);
$em->persist($point330);


$waySet330 = new WaySet();
$waySet330->setPoint($point330);
$waySet330->setWay($way);
$em->persist($waySet330);


$point331 = new Point();
$point331->setLatitude(45.498503940939806);
$point331->setLongitude(28.239895105361935);
$em->persist($point331);


$waySet331 = new WaySet();
$waySet331->setPoint($point331);
$waySet331->setWay($way);
$em->persist($waySet331);


$point332 = new Point();
$point332->setLatitude(45.50544460270895);
$point332->setLongitude(28.246171474456787);
$em->persist($point332);


$waySet332 = new WaySet();
$waySet332->setPoint($point332);
$waySet332->setWay($way);
$em->persist($waySet332);


$point333 = new Point();
$point333->setLatitude(45.50736196946733);
$point333->setLongitude(28.247936367988586);
$em->persist($point333);


$waySet333 = new WaySet();
$waySet333->setPoint($point333);
$waySet333->setWay($way);
$em->persist($waySet333);


$point334 = new Point();
$point334->setLatitude(45.51060254676746);
$point334->setLongitude(28.250967264175415);
$em->persist($point334);


$waySet334 = new WaySet();
$waySet334->setPoint($point334);
$waySet334->setWay($way);
$em->persist($waySet334);


$point335 = new Point();
$point335->setLatitude(45.51401209430424);
$point335->setLongitude(28.254389762878418);
$em->persist($point335);


$waySet335 = new WaySet();
$waySet335->setPoint($point335);
$waySet335->setWay($way);
$em->persist($waySet335);


$point336 = new Point();
$point336->setLatitude(45.517376329586476);
$point336->setLongitude(28.257758617401123);
$em->persist($point336);


$waySet336 = new WaySet();
$waySet336->setPoint($point336);
$waySet336->setWay($way);
$em->persist($waySet336);


$point337 = new Point();
$point337->setLatitude(45.5204020900741);
$point337->setLongitude(28.26250612735748);
$em->persist($point337);


$waySet337 = new WaySet();
$waySet337->setPoint($point337);
$waySet337->setWay($way);
$em->persist($waySet337);


$point338 = new Point();
$point338->setLatitude(45.52482579732347);
$point338->setLongitude(28.269469141960144);
$em->persist($point338);


$waySet338 = new WaySet();
$waySet338->setPoint($point338);
$waySet338->setWay($way);
$em->persist($waySet338);


$point339 = new Point();
$point339->setLatitude(45.52809543382045);
$point339->setLongitude(28.274608254432678);
$em->persist($point339);


$waySet339 = new WaySet();
$waySet339->setPoint($point339);
$waySet339->setWay($way);
$em->persist($waySet339);


$point340 = new Point();
$point340->setLatitude(45.53235695057665);
$point340->setLongitude(28.28132450580597);
$em->persist($point340);


$waySet340 = new WaySet();
$waySet340->setPoint($point340);
$waySet340->setWay($way);
$em->persist($waySet340);


$point341 = new Point();
$point341->setLatitude(45.5362649360676);
$point341->setLongitude(28.28755795955658);
$em->persist($point341);


$waySet341 = new WaySet();
$waySet341->setPoint($point341);
$waySet341->setWay($way);
$em->persist($waySet341);


$point342 = new Point();
$point342->setLatitude(45.5399058820014);
$point342->setLongitude(28.293362259864807);
$em->persist($point342);


$waySet342 = new WaySet();
$waySet342->setPoint($point342);
$waySet342->setWay($way);
$em->persist($waySet342);


$point343 = new Point();
$point343->setLatitude(45.542389405421105);
$point343->setLongitude(28.296720385551453);
$em->persist($point343);


$waySet343 = new WaySet();
$waySet343->setPoint($point343);
$waySet343->setWay($way);
$em->persist($waySet343);


$point344 = new Point();
$point344->setLatitude(45.54294545917369);
$point344->setLongitude(28.297487497329712);
$em->persist($point344);


$waySet344 = new WaySet();
$waySet344->setPoint($point344);
$waySet344->setWay($way);
$em->persist($waySet344);


$point345 = new Point();
$point345->setLatitude(45.545274813765204);
$point345->setLongitude(28.30172538757324);
$em->persist($point345);


$waySet345 = new WaySet();
$waySet345->setPoint($point345);
$waySet345->setWay($way);
$em->persist($waySet345);


$point346 = new Point();
$point346->setLatitude(45.54704806416695);
$point346->setLongitude(28.304954767227173);
$em->persist($point346);


$waySet346 = new WaySet();
$waySet346->setPoint($point346);
$waySet346->setWay($way);
$em->persist($waySet346);


$point347 = new Point();
$point347->setLatitude(45.54580454061296);
$point347->setLongitude(28.309353590011597);
$em->persist($point347);


$waySet347 = new WaySet();
$waySet347->setPoint($point347);
$waySet347->setWay($way);
$em->persist($waySet347);


$point348 = new Point();
$point348->setLatitude(45.54328735435876);
$point348->setLongitude(28.318194150924683);
$em->persist($point348);


$waySet348 = new WaySet();
$waySet348->setPoint($point348);
$waySet348->setWay($way);
$em->persist($waySet348);


$point349 = new Point();
$point349->setLatitude(45.540860229243705);
$point349->setLongitude(28.32676112651825);
$em->persist($point349);


$waySet349 = new WaySet();
$waySet349->setPoint($point349);
$waySet349->setWay($way);
$em->persist($waySet349);


$point350 = new Point();
$point350->setLatitude(45.53770030100529);
$point350->setLongitude(28.337688446044922);
$em->persist($point350);


$waySet350 = new WaySet();
$waySet350->setPoint($point350);
$waySet350->setWay($way);
$em->persist($waySet350);


$point351 = new Point();
$point351->setLatitude(45.5359004527504);
$point351->setLongitude(28.343841433525085);
$em->persist($point351);


$waySet351 = new WaySet();
$waySet351->setPoint($point351);
$waySet351->setWay($way);
$em->persist($waySet351);


$point352 = new Point();
$point352->setLatitude(45.53384502322197);
$point352->setLongitude(28.350600600242615);
$em->persist($point352);


$waySet352 = new WaySet();
$waySet352->setPoint($point352);
$waySet352->setWay($way);
$em->persist($waySet352);


$point353 = new Point();
$point353->setLatitude(45.532405802071374);
$point353->setLongitude(28.35525691509247);
$em->persist($point353);


$waySet353 = new WaySet();
$waySet353->setPoint($point353);
$waySet353->setWay($way);
$em->persist($waySet353);


$point354 = new Point();
$point354->setLatitude(45.530620816059574);
$point354->setLongitude(28.361061215400696);
$em->persist($point354);


$waySet354 = new WaySet();
$waySet354->setPoint($point354);
$waySet354->setWay($way);
$em->persist($waySet354);


$point355 = new Point();
$point355->setLatitude(45.529981965194956);
$point355->setLongitude(28.36313724517822);
$em->persist($point355);


$waySet355 = new WaySet();
$waySet355->setPoint($point355);
$waySet355->setWay($way);
$em->persist($waySet355);


$point356 = new Point();
$point356->setLatitude(45.528895902071866);
$point356->setLongitude(28.367004990577698);
$em->persist($point356);


$waySet356 = new WaySet();
$waySet356->setPoint($point356);
$waySet356->setWay($way);
$em->persist($waySet356);


$point357 = new Point();
$point357->setLatitude(45.527234823791396);
$point357->setLongitude(28.372895121574402);
$em->persist($point357);


$waySet357 = new WaySet();
$waySet357->setPoint($point357);
$waySet357->setWay($way);
$em->persist($waySet357);


$point358 = new Point();
$point358->setLatitude(45.52596831259726);
$point358->setLongitude(28.377374410629272);
$em->persist($point358);


$waySet358 = new WaySet();
$waySet358->setPoint($point358);
$waySet358->setWay($way);
$em->persist($waySet358);


$point359 = new Point();
$point359->setLatitude(45.524434931508075);
$point359->setLongitude(28.38264226913452);
$em->persist($point359);


$waySet359 = new WaySet();
$waySet359->setPoint($point359);
$waySet359->setWay($way);
$em->persist($waySet359);


$point360 = new Point();
$point360->setLatitude(45.52339386219268);
$point360->setLongitude(28.386220335960388);
$em->persist($point360);


$waySet360 = new WaySet();
$waySet360->setPoint($point360);
$waySet360->setWay($way);
$em->persist($waySet360);


$point361 = new Point();
$point361->setLatitude(45.521890479003936);
$point361->setLongitude(28.3913916349411);
$em->persist($point361);


$waySet361 = new WaySet();
$waySet361->setPoint($point361);
$waySet361->setWay($way);
$em->persist($waySet361);


$point362 = new Point();
$point362->setLatitude(45.52056370996955);
$point362->setLongitude(28.39591383934021);
$em->persist($point362);


$waySet362 = new WaySet();
$waySet362->setPoint($point362);
$waySet362->setWay($way);
$em->persist($waySet362);


$point363 = new Point();
$point363->setLatitude(45.51939853289016);
$point363->setLongitude(28.399851322174072);
$em->persist($point363);


$waySet363 = new WaySet();
$waySet363->setPoint($point363);
$waySet363->setWay($way);
$em->persist($waySet363);


$point364 = new Point();
$point364->setLatitude(45.51828219544269);
$point364->setLongitude(28.40342402458191);
$em->persist($point364);


$waySet364 = new WaySet();
$waySet364->setPoint($point364);
$waySet364->setWay($way);
$em->persist($waySet364);


$point365 = new Point();
$point365->setLatitude(45.5167786756636);
$point365->setLongitude(28.408262729644772);
$em->persist($point365);


$waySet365 = new WaySet();
$waySet365->setPoint($point365);
$waySet365->setWay($way);
$em->persist($waySet365);


$point366 = new Point();
$point366->setLatitude(45.51552696480392);
$point366->setLongitude(28.412275314331055);
$em->persist($point366);


$waySet366 = new WaySet();
$waySet366->setPoint($point366);
$waySet366->setWay($way);
$em->persist($waySet366);


$point367 = new Point();
$point367->setLatitude(45.51516986500963);
$point367->setLongitude(28.4134179353714);
$em->persist($point367);


$waySet367 = new WaySet();
$waySet367->setPoint($point367);
$waySet367->setWay($way);
$em->persist($waySet367);


$point368 = new Point();
$point368->setLatitude(45.51507589100294);
$point368->setLongitude(28.414286971092224);
$em->persist($point368);


$waySet368 = new WaySet();
$waySet368->setPoint($point368);
$waySet368->setWay($way);
$em->persist($waySet368);


$point369 = new Point();
$point369->setLatitude(45.5163238530161);
$point369->setLongitude(28.41515064239502);
$em->persist($point369);


$waySet369 = new WaySet();
$waySet369->setPoint($point369);
$waySet369->setWay($way);
$em->persist($waySet369);


$point370 = new Point();
$point370->setLatitude(45.51576377710206);
$point370->setLongitude(28.4177953004837);
$em->persist($point370);


$waySet370 = new WaySet();
$waySet370->setPoint($point370);
$waySet370->setWay($way);
$em->persist($waySet370);


$point371 = new Point();
$point371->setLatitude(45.51666215120336);
$point371->setLongitude(28.419055938720703);
$em->persist($point371);


$waySet371 = new WaySet();
$waySet371->setPoint($point371);
$waySet371->setWay($way);
$em->persist($waySet371);


$point372 = new Point();
$point372->setLatitude(45.51724101227305);
$point372->setLongitude(28.420445322990417);
$em->persist($point372);


$waySet372 = new WaySet();
$waySet372->setPoint($point372);
$waySet372->setWay($way);
$em->persist($waySet372);


$point373 = new Point();
$point373->setLatitude(45.52143193913633);
$point373->setLongitude(28.42035949230194);
$em->persist($point373);


$waySet373 = new WaySet();
$waySet373->setPoint($point373);
$waySet373->setWay($way);
$em->persist($waySet373);


$point374 = new Point();
$point374->setLatitude(45.52142818059738);
$point374->setLongitude(28.42158257961273);
$em->persist($point374);


$waySet374 = new WaySet();
$waySet374->setPoint($point374);
$waySet374->setWay($way);
$em->persist($waySet374);


$point375 = new Point();
$point375->setLatitude(45.52365319173008);
$point375->setLongitude(28.423041701316833);
$em->persist($point375);


$waySet375 = new WaySet();
$waySet375->setPoint($point375);
$waySet375->setWay($way);
$em->persist($waySet375);


$point376 = new Point();
$point376->setLatitude(45.524472514877544);
$point376->setLongitude(28.425112366676327);
$em->persist($point376);


$waySet376 = new WaySet();
$waySet376->setPoint($point376);
$waySet376->setWay($way);
$em->persist($waySet376);


$point377 = new Point();
$point377->setLatitude(45.51999991762159);
$point377->setLongitude(28.42577219009399);
$em->persist($point377);


$waySet377 = new WaySet();
$waySet377->setPoint($point377);
$waySet377->setWay($way);
$em->persist($waySet377);


$point378 = new Point();
$point378->setLatitude(45.51572618791492);
$point378->setLongitude(28.42609405517578);
$em->persist($point378);


$waySet378 = new WaySet();
$waySet378->setPoint($point378);
$waySet378->setWay($way);
$em->persist($waySet378);


$point379 = new Point();
$point379->setLatitude(45.51437296045579);
$point379->setLongitude(28.426190614700314);
$em->persist($point379);


$waySet379 = new WaySet();
$waySet379->setPoint($point379);
$waySet379->setWay($way);
$em->persist($waySet379);


$point380 = new Point();
$point380->setLatitude(45.50938453263581);
$point380->setLongitude(28.427563905715942);
$em->persist($point380);


$waySet380 = new WaySet();
$waySet380->setPoint($point380);
$waySet380->setWay($way);
$em->persist($waySet380);


$point381 = new Point();
$point381->setLatitude(45.50640329425163);
$point381->setLongitude(28.42736005783081);
$em->persist($point381);


$waySet381 = new WaySet();
$waySet381->setPoint($point381);
$waySet381->setWay($way);
$em->persist($waySet381);


$point382 = new Point();
$point382->setLatitude(45.505109996719035);
$point382->setLongitude(28.42588484287262);
$em->persist($point382);


$waySet382 = new WaySet();
$waySet382->setPoint($point382);
$waySet382->setWay($way);
$em->persist($waySet382);


$point383 = new Point();
$point383->setLatitude(45.502997045547666);
$point383->setLongitude(28.42562198638916);
$em->persist($point383);


$waySet383 = new WaySet();
$waySet383->setPoint($point383);
$waySet383->setWay($way);
$em->persist($waySet383);


$point384 = new Point();
$point384->setLatitude(45.500444103735695);
$point384->setLongitude(28.425976037979126);
$em->persist($point384);


$waySet384 = new WaySet();
$waySet384->setPoint($point384);
$waySet384->setWay($way);
$em->persist($waySet384);


$point385 = new Point();
$point385->setLatitude(45.49565749585598);
$point385->setLongitude(28.427681922912598);
$em->persist($point385);


$waySet385 = new WaySet();
$waySet385->setPoint($point385);
$waySet385->setWay($way);
$em->persist($waySet385);


$point386 = new Point();
$point386->setLatitude(45.49396911368334);
$point386->setLongitude(28.425310850143433);
$em->persist($point386);


$waySet386 = new WaySet();
$waySet386->setPoint($point386);
$waySet386->setWay($way);
$em->persist($waySet386);


$point387 = new Point();
$point387->setLatitude(45.491547381395506);
$point387->setLongitude(28.427027463912964);
$em->persist($point387);


$waySet387 = new WaySet();
$waySet387->setPoint($point387);
$waySet387->setWay($way);
$em->persist($waySet387);


$point388 = new Point();
$point388->setLatitude(45.486139472869596);
$point388->setLongitude(28.427703380584717);
$em->persist($point388);


$waySet388 = new WaySet();
$waySet388->setPoint($point388);
$waySet388->setWay($way);
$em->persist($waySet388);


$point389 = new Point();
$point389->setLatitude(45.487019515608054);
$point389->setLongitude(28.4373539686203);
$em->persist($point389);


$waySet389 = new WaySet();
$waySet389->setPoint($point389);
$waySet389->setWay($way);
$em->persist($waySet389);


$point390 = new Point();
$point390->setLatitude(45.48712105811625);
$point390->setLongitude(28.438501954078674);
$em->persist($point390);


$waySet390 = new WaySet();
$waySet390->setPoint($point390);
$waySet390->setWay($way);
$em->persist($waySet390);


$point391 = new Point();
$point391->setLatitude(45.4882718604162);
$point391->setLongitude(28.445470333099365);
$em->persist($point391);


$waySet391 = new WaySet();
$waySet391->setPoint($point391);
$waySet391->setWay($way);
$em->persist($waySet391);


$point392 = new Point();
$point392->setLatitude(45.49075014239367);
$point392->setLongitude(28.46053898334503);
$em->persist($point392);


$waySet392 = new WaySet();
$waySet392->setPoint($point392);
$waySet392->setWay($way);
$em->persist($waySet392);


$point393 = new Point();
$point393->setLatitude(45.49222427357634);
$point393->setLongitude(28.469465374946594);
$em->persist($point393);


$waySet393 = new WaySet();
$waySet393->setPoint($point393);
$waySet393->setWay($way);
$em->persist($waySet393);


$point394 = new Point();
$point394->setLatitude(45.49363443949081);
$point394->setLongitude(28.47806990146637);
$em->persist($point394);


$waySet394 = new WaySet();
$waySet394->setPoint($point394);
$waySet394->setWay($way);
$em->persist($waySet394);


$point395 = new Point();
$point395->setLatitude(45.495074652497415);
$point395->setLongitude(28.48678708076477);
$em->persist($point395);


$waySet395 = new WaySet();
$waySet395->setPoint($point395);
$waySet395->setWay($way);
$em->persist($waySet395);


$point396 = new Point();
$point396->setLatitude(45.49611248551095);
$point396->setLongitude(28.49319219589233);
$em->persist($point396);


$waySet396 = new WaySet();
$waySet396->setPoint($point396);
$waySet396->setWay($way);
$em->persist($waySet396);


$point397 = new Point();
$point397->setLatitude(45.49910554895775);
$point397->setLongitude(28.511323928833008);
$em->persist($point397);


$waySet397 = new WaySet();
$waySet397->setPoint($point397);
$waySet397->setWay($way);
$em->persist($waySet397);


$point398 = new Point();
$point398->setLatitude(45.499917709585766);
$point398->setLongitude(28.516216278076172);
$em->persist($point398);


$waySet398 = new WaySet();
$waySet398->setPoint($point398);
$waySet398->setWay($way);
$em->persist($waySet398);


$point399 = new Point();
$point399->setLatitude(45.50775295388762);
$point399->setLongitude(28.513448238372803);
$em->persist($point399);


$waySet399 = new WaySet();
$waySet399->setPoint($point399);
$waySet399->setWay($way);
$em->persist($waySet399);


$point400 = new Point();
$point400->setLatitude(45.5142865031511);
$point400->setLongitude(28.511162996292114);
$em->persist($point400);


$waySet400 = new WaySet();
$waySet400->setPoint($point400);
$waySet400->setWay($way);
$em->persist($waySet400);


$point401 = new Point();
$point401->setLatitude(45.523345002870656);
$point401->setLongitude(28.507976531982422);
$em->persist($point401);


$waySet401 = new WaySet();
$waySet401->setPoint($point401);
$waySet401->setWay($way);
$em->persist($waySet401);


$point402 = new Point();
$point402->setLatitude(45.5325899342471);
$point402->setLongitude(28.504714965820312);
$em->persist($point402);


$waySet402 = new WaySet();
$waySet402->setPoint($point402);
$waySet402->setWay($way);
$em->persist($waySet402);


$point403 = new Point();
$point403->setLatitude(45.54117959379788);
$point403->setLongitude(28.501689434051514);
$em->persist($point403);


$waySet403 = new WaySet();
$waySet403->setPoint($point403);
$waySet403->setWay($way);
$em->persist($waySet403);


$point404 = new Point();
$point404->setLatitude(45.55094751552689);
$point404->setLongitude(28.49824547767639);
$em->persist($point404);


$waySet404 = new WaySet();
$waySet404->setPoint($point404);
$waySet404->setWay($way);
$em->persist($waySet404);


$point405 = new Point();
$point405->setLatitude(45.559639538349984);
$point405->setLongitude(28.495177030563354);
$em->persist($point405);


$waySet405 = new WaySet();
$waySet405->setPoint($point405);
$waySet405->setWay($way);
$em->persist($waySet405);


$point406 = new Point();
$point406->setLatitude(45.56885597092866);
$point406->setLongitude(28.491936922073364);
$em->persist($point406);


$waySet406 = new WaySet();
$waySet406->setPoint($point406);
$waySet406->setWay($way);
$em->persist($waySet406);


$point407 = new Point();
$point407->setLatitude(45.57106408474654);
$point407->setLongitude(28.491164445877075);
$em->persist($point407);


$waySet407 = new WaySet();
$waySet407->setPoint($point407);
$waySet407->setWay($way);
$em->persist($waySet407);


$point408 = new Point();
$point408->setLatitude(45.57330215234141);
$point408->setLongitude(28.504350185394287);
$em->persist($point408);


$waySet408 = new WaySet();
$waySet408->setPoint($point408);
$waySet408->setWay($way);
$em->persist($waySet408);


$point409 = new Point();
$point409->setLatitude(45.57547254210417);
$point409->setLongitude(28.517128229141235);
$em->persist($point409);


$waySet409 = new WaySet();
$waySet409->setPoint($point409);
$waySet409->setWay($way);
$em->persist($waySet409);


$point410 = new Point();
$point410->setLatitude(45.57813096751278);
$point410->setLongitude(28.53370428085327);
$em->persist($point410);


$waySet410 = new WaySet();
$waySet410->setPoint($point410);
$waySet410->setWay($way);
$em->persist($waySet410);


$point411 = new Point();
$point411->setLatitude(45.579813069988475);
$point411->setLongitude(28.544239997863766);
$em->persist($point411);


$waySet411 = new WaySet();
$waySet411->setPoint($point411);
$waySet411->setWay($way);
$em->persist($waySet411);


$point412 = new Point();
$point412->setLatitude(45.58890606387023);
$point412->setLongitude(28.541289567947388);
$em->persist($point412);


$waySet412 = new WaySet();
$waySet412->setPoint($point412);
$waySet412->setWay($way);
$em->persist($waySet412);


$point413 = new Point();
$point413->setLatitude(45.595550301346385);
$point413->setLongitude(28.539111614227295);
$em->persist($point413);


$waySet413 = new WaySet();
$waySet413->setPoint($point413);
$waySet413->setWay($way);
$em->persist($waySet413);


$point414 = new Point();
$point414->setLatitude(45.603372225785634);
$point414->setLongitude(28.536558151245117);
$em->persist($point414);


$waySet414 = new WaySet();
$waySet414->setPoint($point414);
$waySet414->setWay($way);
$em->persist($waySet414);


$point415 = new Point();
$point415->setLatitude(45.61233381970637);
$point415->setLongitude(28.53362917900085);
$em->persist($point415);


$waySet415 = new WaySet();
$waySet415->setPoint($point415);
$waySet415->setWay($way);
$em->persist($waySet415);


$point416 = new Point();
$point416->setLatitude(45.62819698286656);
$point416->setLongitude(28.52849006652832);
$em->persist($point416);


$waySet416 = new WaySet();
$waySet416->setPoint($point416);
$waySet416->setWay($way);
$em->persist($waySet416);


$point417 = new Point();
$point417->setLatitude(45.63762720902956);
$point417->setLongitude(28.525346517562866);
$em->persist($point417);


$waySet417 = new WaySet();
$waySet417->setPoint($point417);
$waySet417->setWay($way);
$em->persist($waySet417);


$point418 = new Point();
$point418->setLatitude(45.64789587294736);
$point418->setLongitude(28.521934747695923);
$em->persist($point418);


$waySet418 = new WaySet();
$waySet418->setPoint($point418);
$waySet418->setWay($way);
$em->persist($waySet418);


$point419 = new Point();
$point419->setLatitude(45.6602472789912);
$point419->setLongitude(28.517611026763912);
$em->persist($point419);


$waySet419 = new WaySet();
$waySet419->setPoint($point419);
$waySet419->setWay($way);
$em->persist($waySet419);


$point420 = new Point();
$point420->setLatitude(45.66525605880856);
$point420->setLongitude(28.515819311141968);
$em->persist($point420);


$waySet420 = new WaySet();
$waySet420->setPoint($point420);
$waySet420->setWay($way);
$em->persist($waySet420);


$point421 = new Point();
$point421->setLatitude(45.66320161350935);
$point421->setLongitude(28.500262498855587);
$em->persist($point421);


$waySet421 = new WaySet();
$waySet421->setPoint($point421);
$waySet421->setWay($way);
$em->persist($waySet421);


$point422 = new Point();
$point422->setLatitude(45.66047223380313);
$point422->setLongitude(28.486132621765137);
$em->persist($point422);


$waySet422 = new WaySet();
$waySet422->setPoint($point422);
$waySet422->setWay($way);
$em->persist($waySet422);


$point423 = new Point();
$point423->setLatitude(45.67234856417046);
$point423->setLongitude(28.481723070144653);
$em->persist($point423);


$waySet423 = new WaySet();
$waySet423->setPoint($point423);
$waySet423->setWay($way);
$em->persist($waySet423);


$point424 = new Point();
$point424->setLatitude(45.6782333118042);
$point424->setLongitude(28.480714559555054);
$em->persist($point424);


$waySet424 = new WaySet();
$waySet424->setPoint($point424);
$waySet424->setWay($way);
$em->persist($waySet424);


$point425 = new Point();
$point425->setLatitude(45.68200372288539);
$point425->setLongitude(28.481894731521606);
$em->persist($point425);


$waySet425 = new WaySet();
$waySet425->setPoint($point425);
$waySet425->setWay($way);
$em->persist($waySet425);


$point426 = new Point();
$point426->setLatitude(45.6850543466801);
$point426->setLongitude(28.484362363815308);
$em->persist($point426);


$waySet426 = new WaySet();
$waySet426->setPoint($point426);
$waySet426->setWay($way);
$em->persist($waySet426);


$point427 = new Point();
$point427->setLatitude(45.68797739277143);
$point427->setLongitude(28.489962816238403);
$em->persist($point427);


$waySet427 = new WaySet();
$waySet427->setPoint($point427);
$waySet427->setWay($way);
$em->persist($waySet427);


$point428 = new Point();
$point428->setLatitude(45.69494711706337);
$point428->setLongitude(28.499264717102047);
$em->persist($point428);


$waySet428 = new WaySet();
$waySet428->setPoint($point428);
$waySet428->setWay($way);
$em->persist($waySet428);


$point429 = new Point();
$point429->setLatitude(45.69875386848851);
$point429->setLongitude(28.503878116607662);
$em->persist($point429);


$waySet429 = new WaySet();
$waySet429->setPoint($point429);
$waySet429->setWay($way);
$em->persist($waySet429);


$point430 = new Point();
$point430->setLatitude(45.70177360703219);
$point430->setLongitude(28.505905866622925);
$em->persist($point430);


$waySet430 = new WaySet();
$waySet430->setPoint($point430);
$waySet430->setWay($way);
$em->persist($waySet430);


$point431 = new Point();
$point431->setLatitude(45.706523932595296);
$point431->setLongitude(28.508073091506954);
$em->persist($point431);


$waySet431 = new WaySet();
$waySet431->setPoint($point431);
$waySet431->setWay($way);
$em->persist($waySet431);


$point432 = new Point();
$point432->setLatitude(45.71104910389972);
$point432->setLongitude(28.51074457168579);
$em->persist($point432);


$waySet432 = new WaySet();
$waySet432->setPoint($point432);
$waySet432->setWay($way);
$em->persist($waySet432);


$point433 = new Point();
$point433->setLatitude(45.723274224599045);
$point433->setLongitude(28.51397395133972);
$em->persist($point433);


$waySet433 = new WaySet();
$waySet433->setPoint($point433);
$waySet433->setWay($way);
$em->persist($waySet433);


$point434 = new Point();
$point434->setLatitude(45.72630761790525);
$point434->setLongitude(28.51480007171631);
$em->persist($point434);


$waySet434 = new WaySet();
$waySet434->setPoint($point434);
$waySet434->setWay($way);
$em->persist($waySet434);


$point435 = new Point();
$point435->setLatitude(45.73446325857705);
$point435->setLongitude(28.518705368041992);
$em->persist($point435);


$waySet435 = new WaySet();
$waySet435->setPoint($point435);
$waySet435->setWay($way);
$em->persist($waySet435);


$point436 = new Point();
$point436->setLatitude(45.737293863694724);
$point436->setLongitude(28.520357608795166);
$em->persist($point436);


$waySet436 = new WaySet();
$waySet436->setPoint($point436);
$waySet436->setWay($way);
$em->persist($waySet436);


$point437 = new Point();
$point437->setLatitude(45.737705712270504);
$point437->setLongitude(28.52188110351562);
$em->persist($point437);


$waySet437 = new WaySet();
$waySet437->setPoint($point437);
$waySet437->setWay($way);
$em->persist($waySet437);


$point438 = new Point();
$point438->setLatitude(45.73746609165049);
$point438->setLongitude(28.52371573448181);
$em->persist($point438);


$waySet438 = new WaySet();
$waySet438->setPoint($point438);
$waySet438->setWay($way);
$em->persist($waySet438);


$point439 = new Point();
$point439->setLatitude(45.73363951055899);
$point439->setLongitude(28.530828952789307);
$em->persist($point439);


$waySet439 = new WaySet();
$waySet439->setPoint($point439);
$waySet439->setWay($way);
$em->persist($waySet439);


$point440 = new Point();
$point440->setLatitude(45.733040413459555);
$point440->setLongitude(28.534326553344727);
$em->persist($point440);


$waySet440 = new WaySet();
$waySet440->setPoint($point440);
$waySet440->setWay($way);
$em->persist($waySet440);


$point441 = new Point();
$point441->setLatitude(45.73372188590756);
$point441->setLongitude(28.536804914474487);
$em->persist($point441);


$waySet441 = new WaySet();
$waySet441->setPoint($point441);
$waySet441->setWay($way);
$em->persist($waySet441);


$point442 = new Point();
$point442->setLatitude(45.73444828144882);
$point442->setLongitude(28.53872537612915);
$em->persist($point442);


$waySet442 = new WaySet();
$waySet442->setPoint($point442);
$waySet442->setWay($way);
$em->persist($waySet442);


$point443 = new Point();
$point443->setLatitude(45.73653006375012);
$point443->setLongitude(28.556009531021118);
$em->persist($point443);


$waySet443 = new WaySet();
$waySet443->setPoint($point443);
$waySet443->setWay($way);
$em->persist($waySet443);


$point444 = new Point();
$point444->setLatitude(45.73149021988622);
$point444->setLongitude(28.56094479560852);
$em->persist($point444);


$waySet444 = new WaySet();
$waySet444->setPoint($point444);
$waySet444->setWay($way);
$em->persist($waySet444);


$point445 = new Point();
$point445->setLatitude(45.7260829277533);
$point445->setLongitude(28.56414198875427);
$em->persist($point445);


$waySet445 = new WaySet();
$waySet445->setPoint($point445);
$waySet445->setWay($way);
$em->persist($waySet445);


$point446 = new Point();
$point446->setLatitude(45.729333357249764);
$point446->setLongitude(28.588732481002808);
$em->persist($point446);


$waySet446 = new WaySet();
$waySet446->setPoint($point446);
$waySet446->setWay($way);
$em->persist($waySet446);


$point447 = new Point();
$point447->setLatitude(45.73094352300102);
$point447->setLongitude(28.59015941619873);
$em->persist($point447);


$waySet447 = new WaySet();
$waySet447->setPoint($point447);
$waySet447->setWay($way);
$em->persist($waySet447);


$point448 = new Point();
$point448->setLatitude(45.7336619765752);
$point448->setLongitude(28.593227863311768);
$em->persist($point448);


$waySet448 = new WaySet();
$waySet448->setPoint($point448);
$waySet448->setWay($way);
$em->persist($waySet448);


$point449 = new Point();
$point449->setLatitude(45.73477028882079);
$point449->setLongitude(28.594000339508057);
$em->persist($point449);


$waySet449 = new WaySet();
$waySet449->setPoint($point449);
$waySet449->setWay($way);
$em->persist($waySet449);


$point450 = new Point();
$point450->setLatitude(45.73629043808511);
$point450->setLongitude(28.594826459884644);
$em->persist($point450);


$waySet450 = new WaySet();
$waySet450->setPoint($point450);
$waySet450->setWay($way);
$em->persist($waySet450);


$point451 = new Point();
$point451->setLatitude(45.73748106796936);
$point451->setLongitude(28.594965934753414);
$em->persist($point451);


$waySet451 = new WaySet();
$waySet451->setPoint($point451);
$waySet451->setWay($way);
$em->persist($waySet451);


$point452 = new Point();
$point452->setLatitude(45.74078324819252);
$point452->setLongitude(28.594504594802856);
$em->persist($point452);


$waySet452 = new WaySet();
$waySet452->setPoint($point452);
$waySet452->setWay($way);
$em->persist($waySet452);


$point453 = new Point();
$point453->setLatitude(45.74186146882682);
$point453->setLongitude(28.594075441360474);
$em->persist($point453);


$waySet453 = new WaySet();
$waySet453->setPoint($point453);
$waySet453->setWay($way);
$em->persist($waySet453);


$point454 = new Point();
$point454->setLatitude(45.743179265769164);
$point454->setLongitude(28.593785762786865);
$em->persist($point454);


$waySet454 = new WaySet();
$waySet454->setPoint($point454);
$waySet454->setWay($way);
$em->persist($waySet454);


$point455 = new Point();
$point455->setLatitude(45.74898918137246);
$point455->setLongitude(28.591972589492798);
$em->persist($point455);


$waySet455 = new WaySet();
$waySet455->setPoint($point455);
$waySet455->setWay($way);
$em->persist($waySet455);


$point456 = new Point();
$point456->setLatitude(45.75471614803846);
$point456->setLongitude(28.590835332870483);
$em->persist($point456);


$waySet456 = new WaySet();
$waySet456->setPoint($point456);
$waySet456->setWay($way);
$em->persist($waySet456);


$point457 = new Point();
$point457->setLatitude(45.760674564002514);
$point457->setLongitude(28.58714461326599);
$em->persist($point457);


$waySet457 = new WaySet();
$waySet457->setPoint($point457);
$waySet457->setWay($way);
$em->persist($waySet457);


$point458 = new Point();
$point458->setLatitude(45.76489597110568);
$point458->setLongitude(28.58436584472656);
$em->persist($point458);


$waySet458 = new WaySet();
$waySet458->setPoint($point458);
$waySet458->setWay($way);
$em->persist($waySet458);


$point459 = new Point();
$point459->setLatitude(45.768720409895494);
$point459->setLongitude(28.580653667449948);
$em->persist($point459);


$waySet459 = new WaySet();
$waySet459->setPoint($point459);
$waySet459->setWay($way);
$em->persist($waySet459);


$point460 = new Point();
$point460->setLatitude(45.7690721552861);
$point460->setLongitude(28.581050634384155);
$em->persist($point460);


$waySet460 = new WaySet();
$waySet460->setPoint($point460);
$waySet460->setWay($way);
$em->persist($waySet460);


$point461 = new Point();
$point461->setLatitude(45.770688658772286);
$point461->setLongitude(28.58071804046631);
$em->persist($point461);


$waySet461 = new WaySet();
$waySet461->setPoint($point461);
$waySet461->setWay($way);
$em->persist($waySet461);


$point462 = new Point();
$point462->setLatitude(45.77264935475316);
$point462->setLongitude(28.585610389709473);
$em->persist($point462);


$waySet462 = new WaySet();
$waySet462->setPoint($point462);
$waySet462->setWay($way);
$em->persist($waySet462);


$point463 = new Point();
$point463->setLatitude(45.77212551142976);
$point463->setLongitude(28.591736555099487);
$em->persist($point463);


$waySet463 = new WaySet();
$waySet463->setPoint($point463);
$waySet463->setWay($way);
$em->persist($waySet463);


$point464 = new Point();
$point464->setLatitude(45.77094310412751);
$point464->setLongitude(28.596993684768677);
$em->persist($point464);


$waySet464 = new WaySet();
$waySet464->setPoint($point464);
$waySet464->setWay($way);
$em->persist($waySet464);


$point465 = new Point();
$point465->setLatitude(45.769259252994395);
$point465->setLongitude(28.606510162353516);
$em->persist($point465);


$waySet465 = new WaySet();
$waySet465->setPoint($point465);
$waySet465->setWay($way);
$em->persist($waySet465);


$point466 = new Point();
$point466->setLatitude(45.76818156159111);
$point466->setLongitude(28.615790605545044);
$em->persist($point466);


$waySet466 = new WaySet();
$waySet466->setPoint($point466);
$waySet466->setWay($way);
$em->persist($waySet466);


$point467 = new Point();
$point467->setLatitude(45.76722359619692);
$point467->setLongitude(28.61662745475769);
$em->persist($point467);


$waySet467 = new WaySet();
$waySet467->setPoint($point467);
$waySet467->setWay($way);
$em->persist($waySet467);


$point468 = new Point();
$point468->setLatitude(45.76655750118723);
$point468->setLongitude(28.620961904525757);
$em->persist($point468);


$waySet468 = new WaySet();
$waySet468->setPoint($point468);
$waySet468->setWay($way);
$em->persist($waySet468);


$point469 = new Point();
$point469->setLatitude(45.76624316145397);
$point469->setLongitude(28.624448776245117);
$em->persist($point469);


$waySet469 = new WaySet();
$waySet469->setPoint($point469);
$waySet469->setWay($way);
$em->persist($waySet469);


$point470 = new Point();
$point470->setLatitude(45.76689429179298);
$point470->setLongitude(28.629051446914673);
$em->persist($point470);


$waySet470 = new WaySet();
$waySet470->setPoint($point470);
$waySet470->setWay($way);
$em->persist($waySet470);


$point471 = new Point();
$point471->setLatitude(45.767687612739195);
$point471->setLongitude(28.634212017059326);
$em->persist($point471);


$waySet471 = new WaySet();
$waySet471->setPoint($point471);
$waySet471->setWay($way);
$em->persist($waySet471);


$point472 = new Point();
$point472->setLatitude(45.76918441398637);
$point472->setLongitude(28.6433744430542);
$em->persist($point472);


$waySet472 = new WaySet();
$waySet472->setPoint($point472);
$waySet472->setWay($way);
$em->persist($waySet472);


$point473 = new Point();
$point473->setLatitude(45.7713696716776);
$point473->setLongitude(28.656817674636837);
$em->persist($point473);


$waySet473 = new WaySet();
$waySet473->setPoint($point473);
$waySet473->setWay($way);
$em->persist($waySet473);


$point474 = new Point();
$point474->setLatitude(45.77374192642292);
$point474->setLongitude(28.67144107818603);
$em->persist($point474);


$waySet474 = new WaySet();
$waySet474->setPoint($point474);
$waySet474->setWay($way);
$em->persist($waySet474);


$point475 = new Point();
$point475->setLatitude(45.77568754900076);
$point475->setLongitude(28.683382272720337);
$em->persist($point475);


$waySet475 = new WaySet();
$waySet475->setPoint($point475);
$waySet475->setWay($way);
$em->persist($waySet475);


$point476 = new Point();
$point476->setLatitude(45.777707931370145);
$point476->setLongitude(28.695881366729736);
$em->persist($point476);


$waySet476 = new WaySet();
$waySet476->setPoint($point476);
$waySet476->setWay($way);
$em->persist($waySet476);


$point477 = new Point();
$point477->setLatitude(45.77947383526397);
$point477->setLongitude(28.70673894882202);
$em->persist($point477);


$waySet477 = new WaySet();
$waySet477->setPoint($point477);
$waySet477->setWay($way);
$em->persist($waySet477);


$point478 = new Point();
$point478->setLatitude(45.77990033756518);
$point478->setLongitude(28.709378242492676);
$em->persist($point478);


$waySet478 = new WaySet();
$waySet478->setPoint($point478);
$waySet478->setWay($way);
$em->persist($waySet478);


$point479 = new Point();
$point479->setLatitude(45.792551755129416);
$point479->setLongitude(28.70527982711792);
$em->persist($point479);


$waySet479 = new WaySet();
$waySet479->setPoint($point479);
$waySet479->setWay($way);
$em->persist($waySet479);


$point480 = new Point();
$point480->setLatitude(45.80066779944926);
$point480->setLongitude(28.702597618103027);
$em->persist($point480);


$waySet480 = new WaySet();
$waySet480->setPoint($point480);
$waySet480->setWay($way);
$em->persist($waySet480);


$point481 = new Point();
$point481->setLatitude(45.814742779810075);
$point481->setLongitude(28.697952032089237);
$em->persist($point481);


$waySet481 = new WaySet();
$waySet481->setPoint($point481);
$waySet481->setWay($way);
$em->persist($waySet481);


$point482 = new Point();
$point482->setLatitude(45.81786093123828);
$point482->setLongitude(28.69692206382751);
$em->persist($point482);


$waySet482 = new WaySet();
$waySet482->setPoint($point482);
$waySet482->setWay($way);
$em->persist($waySet482);


$point483 = new Point();
$point483->setLatitude(45.821502292336085);
$point483->setLongitude(28.719055652618408);
$em->persist($point483);


$waySet483 = new WaySet();
$waySet483->setPoint($point483);
$waySet483->setWay($way);
$em->persist($waySet483);


$point484 = new Point();
$point484->setLatitude(45.82380512467829);
$point484->setLongitude(28.733046054840088);
$em->persist($point484);


$waySet484 = new WaySet();
$waySet484->setPoint($point484);
$waySet484->setWay($way);
$em->persist($waySet484);


$point485 = new Point();
$point485->setLatitude(45.82597328884483);
$point485->setLongitude(28.746274709701535);
$em->persist($point485);


$waySet485 = new WaySet();
$waySet485->setPoint($point485);
$waySet485->setWay($way);
$em->persist($waySet485);


$point486 = new Point();
$point486->setLatitude(45.82810398859807);
$point486->setLongitude(28.759299516677856);
$em->persist($point486);


$waySet486 = new WaySet();
$waySet486->setPoint($point486);
$waySet486->setWay($way);
$em->persist($waySet486);


$point487 = new Point();
$point487->setLatitude(45.83127372081755);
$point487->setLongitude(28.778579235076904);
$em->persist($point487);


$waySet487 = new WaySet();
$waySet487->setPoint($point487);
$waySet487->setWay($way);
$em->persist($waySet487);


$point488 = new Point();
$point488->setLatitude(45.83249970090462);
$point488->setLongitude(28.78605723381042);
$em->persist($point488);


$waySet488 = new WaySet();
$waySet488->setPoint($point488);
$waySet488->setWay($way);
$em->persist($waySet488);


$point489 = new Point();
$point489->setLatitude(45.842485947234096);
$point489->setLongitude(28.782731294631954);
$em->persist($point489);


$waySet489 = new WaySet();
$waySet489->setPoint($point489);
$waySet489->setWay($way);
$em->persist($waySet489);


$point490 = new Point();
$point490->setLatitude(45.85449547249617);
$point490->setLongitude(28.77871870994568);
$em->persist($point490);


$waySet490 = new WaySet();
$waySet490->setPoint($point490);
$waySet490->setWay($way);
$em->persist($waySet490);


$point491 = new Point();
$point491->setLatitude(45.86466454841889);
$point491->setLongitude(28.775317668914795);
$em->persist($point491);


$waySet491 = new WaySet();
$waySet491->setPoint($point491);
$waySet491->setWay($way);
$em->persist($waySet491);


$point492 = new Point();
$point492->setLatitude(45.87568330584916);
$point492->setLongitude(28.771637678146362);
$em->persist($point492);


$waySet492 = new WaySet();
$waySet492->setPoint($point492);
$waySet492->setWay($way);
$em->persist($waySet492);


$point493 = new Point();
$point493->setLatitude(45.88455648633668);
$point493->setLongitude(28.76867651939392);
$em->persist($point493);


$waySet493 = new WaySet();
$waySet493->setPoint($point493);
$waySet493->setWay($way);
$em->persist($waySet493);


$point494 = new Point();
$point494->setLatitude(45.89451098584744);
$point494->setLongitude(28.765801191329953);
$em->persist($point494);


$waySet494 = new WaySet();
$waySet494->setPoint($point494);
$waySet494->setWay($way);
$em->persist($waySet494);


$point495 = new Point();
$point495->setLatitude(45.901417598277575);
$point495->setLongitude(28.763805627822876);
$em->persist($point495);


$waySet495 = new WaySet();
$waySet495->setPoint($point495);
$waySet495->setWay($way);
$em->persist($waySet495);


$point496 = new Point();
$point496->setLatitude(45.90820390808456);
$point496->setLongitude(28.76147747039795);
$em->persist($point496);


$waySet496 = new WaySet();
$waySet496->setPoint($point496);
$waySet496->setWay($way);
$em->persist($waySet496);


$point497 = new Point();
$point497->setLatitude(45.92336372159828);
$point497->setLongitude(28.7562096118927);
$em->persist($point497);


$waySet497 = new WaySet();
$waySet497->setPoint($point497);
$waySet497->setWay($way);
$em->persist($waySet497);


$point498 = new Point();
$point498->setLatitude(45.927445937381975);
$point498->setLongitude(28.754804134368893);
$em->persist($point498);


$waySet498 = new WaySet();
$waySet498->setPoint($point498);
$waySet498->setWay($way);
$em->persist($waySet498);


$point499 = new Point();
$point499->setLatitude(45.929319029086095);
$point499->setLongitude(28.75465393066406);
$em->persist($point499);


$waySet499 = new WaySet();
$waySet499->setPoint($point499);
$waySet499->setWay($way);
$em->persist($waySet499);


$point500 = new Point();
$point500->setLatitude(45.929319029086095);
$point500->setLongitude(28.76189589500427);
$em->persist($point500);


$waySet500 = new WaySet();
$waySet500->setPoint($point500);
$waySet500->setWay($way);
$em->persist($waySet500);


$point501 = new Point();
$point501->setLatitude(45.93463199682048);
$point501->setLongitude(28.763623237609863);
$em->persist($point501);


$waySet501 = new WaySet();
$waySet501->setPoint($point501);
$waySet501->setWay($way);
$em->persist($waySet501);


$point502 = new Point();
$point502->setLatitude(45.94845675868681);
$point502->setLongitude(28.75938534736633);
$em->persist($point502);


$waySet502 = new WaySet();
$waySet502->setPoint($point502);
$waySet502->setWay($way);
$em->persist($waySet502);


$point503 = new Point();
$point503->setLatitude(45.957154221183266);
$point503->setLongitude(28.75673532485962);
$em->persist($point503);


$waySet503 = new WaySet();
$waySet503->setPoint($point503);
$waySet503->setWay($way);
$em->persist($waySet503);


$point504 = new Point();
$point504->setLatitude(45.96051050977004);
$point504->setLongitude(28.779673576354984);
$em->persist($point504);


$waySet504 = new WaySet();
$waySet504->setPoint($point504);
$waySet504->setWay($way);
$em->persist($waySet504);


$point505 = new Point();
$point505->setLatitude(45.970690008199846);
$point505->setLongitude(28.776497840881344);
$em->persist($point505);


$waySet505 = new WaySet();
$waySet505->setPoint($point505);
$waySet505->setWay($way);
$em->persist($waySet505);


$point506 = new Point();
$point506->setLatitude(45.97509681516152);
$point506->setLongitude(28.803352117538452);
$em->persist($point506);


$waySet506 = new WaySet();
$waySet506->setPoint($point506);
$waySet506->setWay($way);
$em->persist($waySet506);


$point507 = new Point();
$point507->setLatitude(45.97578278402709);
$point507->setLongitude(28.809875249862667);
$em->persist($point507);


$waySet507 = new WaySet();
$waySet507->setPoint($point507);
$waySet507->setWay($way);
$em->persist($waySet507);


$point508 = new Point();
$point508->setLatitude(45.97871296839599);
$point508->setLongitude(28.82779240608215);
$em->persist($point508);


$waySet508 = new WaySet();
$waySet508->setPoint($point508);
$waySet508->setWay($way);
$em->persist($waySet508);


$point509 = new Point();
$point509->setLatitude(45.98314895753661);
$point509->setLongitude(28.855161666870117);
$em->persist($point509);


$waySet509 = new WaySet();
$waySet509->setPoint($point509);
$waySet509->setWay($way);
$em->persist($waySet509);


$point510 = new Point();
$point510->setLatitude(45.98771131843627);
$point510->setLongitude(28.883582353591922);
$em->persist($point510);


$waySet510 = new WaySet();
$waySet510->setPoint($point510);
$waySet510->setWay($way);
$em->persist($waySet510);


$point511 = new Point();
$point511->setLatitude(45.990521605233766);
$point511->setLongitude(28.900995254516598);
$em->persist($point511);


$waySet511 = new WaySet();
$waySet511->setPoint($point511);
$waySet511->setWay($way);
$em->persist($waySet511);


$point512 = new Point();
$point512->setLatitude(45.99296651321941);
$point512->setLongitude(28.91592979431152);
$em->persist($point512);


$waySet512 = new WaySet();
$waySet512->setPoint($point512);
$waySet512->setWay($way);
$em->persist($waySet512);


$point513 = new Point();
$point513->setLatitude(45.997229935814374);
$point513->setLongitude(28.9415180683136);
$em->persist($point513);


$waySet513 = new WaySet();
$waySet513->setPoint($point513);
$waySet513->setWay($way);
$em->persist($waySet513);


$point514 = new Point();
$point514->setLatitude(46.00039747592821);
$point514->setLongitude(28.961076736450195);
$em->persist($point514);


$waySet514 = new WaySet();
$waySet514->setPoint($point514);
$waySet514->setWay($way);
$em->persist($waySet514);


$point515 = new Point();
$point515->setLatitude(46.00314749898716);
$point515->setLongitude(28.977835178375244);
$em->persist($point515);


$waySet515 = new WaySet();
$waySet515->setPoint($point515);
$waySet515->setWay($way);
$em->persist($waySet515);


$point516 = new Point();
$point516->setLatitude(46.003460501077264);
$point516->setLongitude(28.97905826568603);
$em->persist($point516);


$waySet516 = new WaySet();
$waySet516->setPoint($point516);
$waySet516->setWay($way);
$em->persist($waySet516);


$point517 = new Point();
$point517->setLatitude(46.01094966578477);
$point517->setLongitude(28.98334980010986);
$em->persist($point517);


$waySet517 = new WaySet();
$waySet517->setPoint($point517);
$waySet517->setWay($way);
$em->persist($waySet517);


$point518 = new Point();
$point518->setLatitude(46.01998747633347);
$point518->setLongitude(28.988553285598755);
$em->persist($point518);


$waySet518 = new WaySet();
$waySet518->setPoint($point518);
$waySet518->setWay($way);
$em->persist($waySet518);


$point519 = new Point();
$point519->setLatitude(46.034669837159726);
$point519->setLongitude(28.996996879577633);
$em->persist($point519);


$waySet519 = new WaySet();
$waySet519->setPoint($point519);
$waySet519->setWay($way);
$em->persist($waySet519);


$point520 = new Point();
$point520->setLatitude(46.04679418366821);
$point520->setLongitude(29.003970623016357);
$em->persist($point520);


$waySet520 = new WaySet();
$waySet520->setPoint($point520);
$waySet520->setWay($way);
$em->persist($waySet520);


$point521 = new Point();
$point521->setLatitude(46.04944509903556);
$point521->setLongitude(29.005504846572876);
$em->persist($point521);


$waySet521 = new WaySet();
$waySet521->setPoint($point521);
$waySet521->setWay($way);
$em->persist($waySet521);


$point522 = new Point();
$point522->setLatitude(46.0568461386481);
$point522->setLongitude(28.996192216873165);
$em->persist($point522);


$waySet522 = new WaySet();
$waySet522->setPoint($point522);
$waySet522->setWay($way);
$em->persist($waySet522);


$point523 = new Point();
$point523->setLatitude(46.06636774758228);
$point523->setLongitude(28.98433685302734);
$em->persist($point523);


$waySet523 = new WaySet();
$waySet523->setPoint($point523);
$waySet523->setWay($way);
$em->persist($waySet523);


$point524 = new Point();
$point524->setLatitude(46.07128052348755);
$point524->setLongitude(28.97846817970276);
$em->persist($point524);


$waySet524 = new WaySet();
$waySet524->setPoint($point524);
$waySet524->setWay($way);
$em->persist($waySet524);


$point525 = new Point();
$point525->setLatitude(46.07643102501689);
$point525->setLongitude(28.97192358970642);
$em->persist($point525);


$waySet525 = new WaySet();
$waySet525->setPoint($point525);
$waySet525->setWay($way);
$em->persist($waySet525);


$point526 = new Point();
$point526->setLatitude(46.086045992789195);
$point526->setLongitude(28.959875106811527);
$em->persist($point526);


$waySet526 = new WaySet();
$waySet526->setPoint($point526);
$waySet526->setWay($way);
$em->persist($waySet526);


$point527 = new Point();
$point527->setLatitude(46.0936504537411);
$point527->setLongitude(28.95072340965271);
$em->persist($point527);


$waySet527 = new WaySet();
$waySet527->setPoint($point527);
$waySet527->setWay($way);
$em->persist($waySet527);


$point528 = new Point();
$point528->setLatitude(46.10196058814644);
$point528->setLongitude(28.960089683532715);
$em->persist($point528);


$waySet528 = new WaySet();
$waySet528->setPoint($point528);
$waySet528->setWay($way);
$em->persist($waySet528);


$point529 = new Point();
$point529->setLatitude(46.10437825238553);
$point529->setLongitude(28.962782621383663);
$em->persist($point529);


$waySet529 = new WaySet();
$waySet529->setPoint($point529);
$waySet529->setWay($way);
$em->persist($waySet529);


$point530 = new Point();
$point530->setLatitude(46.111563668504715);
$point530->setLongitude(28.970882892608646);
$em->persist($point530);


$waySet530 = new WaySet();
$waySet530->setPoint($point530);
$waySet530->setWay($way);
$em->persist($waySet530);


$point531 = new Point();
$point531->setLatitude(46.119618254248756);
$point531->setLongitude(28.979938030242923);
$em->persist($point531);


$waySet531 = new WaySet();
$waySet531->setPoint($point531);
$waySet531->setWay($way);
$em->persist($waySet531);


$point532 = new Point();
$point532->setLatitude(46.127627048739924);
$point532->setLongitude(28.989143371582035);
$em->persist($point532);


$waySet532 = new WaySet();
$waySet532->setPoint($point532);
$waySet532->setWay($way);
$em->persist($waySet532);


$point533 = new Point();
$point533->setLatitude(46.133255560366486);
$point533->setLongitude(28.995591402053833);
$em->persist($point533);


$waySet533 = new WaySet();
$waySet533->setPoint($point533);
$waySet533->setWay($way);
$em->persist($waySet533);


$point534 = new Point();
$point534->setLatitude(46.143975651642066);
$point534->setLongitude(29.00791883468628);
$em->persist($point534);


$waySet534 = new WaySet();
$waySet534->setPoint($point534);
$waySet534->setWay($way);
$em->persist($waySet534);


$point535 = new Point();
$point535->setLatitude(46.15351938549287);
$point535->setLongitude(29.019055366516117);
$em->persist($point535);


$waySet535 = new WaySet();
$waySet535->setPoint($point535);
$waySet535->setWay($way);
$em->persist($waySet535);


$point536 = new Point();
$point536->setLatitude(46.158498714216904);
$point536->setLongitude(29.02488112449646);
$em->persist($point536);


$waySet536 = new WaySet();
$waySet536->setPoint($point536);
$waySet536->setWay($way);
$em->persist($waySet536);


$point537 = new Point();
$point537->setLatitude(46.16126687746949);
$point537->setLongitude(29.027976393699642);
$em->persist($point537);


$waySet537 = new WaySet();
$waySet537->setPoint($point537);
$waySet537->setWay($way);
$em->persist($waySet537);


$point538 = new Point();
$point538->setLatitude(46.16512721085184);
$point538->setLongitude(29.032348394393917);
$em->persist($point538);


$waySet538 = new WaySet();
$waySet538->setPoint($point538);
$waySet538->setWay($way);
$em->persist($waySet538);


$point539 = new Point();
$point539->setLatitude(46.16900584856137);
$point539->setLongitude(29.03676867485046);
$em->persist($point539);


$waySet539 = new WaySet();
$waySet539->setPoint($point539);
$waySet539->setWay($way);
$em->persist($waySet539);


$point540 = new Point();
$point540->setLatitude(46.17347485920329);
$point540->setLongitude(29.04173612594604);
$em->persist($point540);


$waySet540 = new WaySet();
$waySet540->setPoint($point540);
$waySet540->setWay($way);
$em->persist($waySet540);


$point541 = new Point();
$point541->setLatitude(46.17716718421011);
$point541->setLongitude(29.04600620269775);
$em->persist($point541);


$waySet541 = new WaySet();
$waySet541->setPoint($point541);
$waySet541->setWay($way);
$em->persist($waySet541);


$point542 = new Point();
$point542->setLatitude(46.18153524856843);
$point542->setLongitude(29.05106484889984);
$em->persist($point542);


$waySet542 = new WaySet();
$waySet542->setPoint($point542);
$waySet542->setWay($way);
$em->persist($waySet542);


$point543 = new Point();
$point543->setLatitude(46.18581011839594);
$point543->setLongitude(29.056010842323303);
$em->persist($point543);


$waySet543 = new WaySet();
$waySet543->setPoint($point543);
$waySet543->setWay($way);
$em->persist($waySet543);


$point544 = new Point();
$point544->setLatitude(46.18983955665908);
$point544->setLongitude(29.060629606246945);
$em->persist($point544);


$waySet544 = new WaySet();
$waySet544->setPoint($point544);
$waySet544->setWay($way);
$em->persist($waySet544);


$point545 = new Point();
$point545->setLatitude(46.19341938119285);
$point545->setLongitude(29.065151810646054);
$em->persist($point545);


$waySet545 = new WaySet();
$waySet545->setPoint($point545);
$waySet545->setWay($way);
$em->persist($waySet545);


$point546 = new Point();
$point546->setLatitude(46.195610237615725);
$point546->setLongitude(29.067522883415222);
$em->persist($point546);


$waySet546 = new WaySet();
$waySet546->setPoint($point546);
$waySet546->setWay($way);
$em->persist($waySet546);


$point547 = new Point();
$point547->setLatitude(46.20218599563706);
$point547->setLongitude(29.055431485176083);
$em->persist($point547);


$waySet547 = new WaySet();
$waySet547->setPoint($point547);
$waySet547->setWay($way);
$em->persist($waySet547);


$point548 = new Point();
$point548->setLatitude(46.204083202451045);
$point548->setLongitude(29.051939249038693);
$em->persist($point548);


$waySet548 = new WaySet();
$waySet548->setPoint($point548);
$waySet548->setWay($way);
$em->persist($waySet548);


$point549 = new Point();
$point549->setLatitude(46.20463638740422);
$point549->setLongitude(29.051156044006348);
$em->persist($point549);


$waySet549 = new WaySet();
$waySet549->setPoint($point549);
$waySet549->setWay($way);
$em->persist($waySet549);


$point550 = new Point();
$point550->setLatitude(46.20784400780284);
$point550->setLongitude(29.04523909091949);
$em->persist($point550);


$waySet550 = new WaySet();
$waySet550->setPoint($point550);
$waySet550->setWay($way);
$em->persist($waySet550);


$point551 = new Point();
$point551->setLatitude(46.21116280674338);
$point551->setLongitude(29.039241671562195);
$em->persist($point551);


$waySet551 = new WaySet();
$waySet551->setPoint($point551);
$waySet551->setWay($way);
$em->persist($waySet551);


$point552 = new Point();
$point552->setLatitude(46.21137811339426);
$point552->setLongitude(29.03924703598022);
$em->persist($point552);


$waySet552 = new WaySet();
$waySet552->setPoint($point552);
$waySet552->setWay($way);
$em->persist($waySet552);


$point553 = new Point();
$point553->setLatitude(46.25706341262973);
$point553->setLongitude(28.956103920936584);
$em->persist($point553);


$waySet553 = new WaySet();
$waySet553->setPoint($point553);
$waySet553->setWay($way);
$em->persist($waySet553);


$point554 = new Point();
$point554->setLatitude(46.25946684856476);
$point554->setLongitude(28.95231127738953);
$em->persist($point554);


$waySet554 = new WaySet();
$waySet554->setPoint($point554);
$waySet554->setWay($way);
$em->persist($waySet554);


$point555 = new Point();
$point555->setLatitude(46.26524134035511);
$point555->setLongitude(28.95341634750366);
$em->persist($point555);


$waySet555 = new WaySet();
$waySet555->setPoint($point555);
$waySet555->setWay($way);
$em->persist($waySet555);


$point556 = new Point();
$point556->setLatitude(46.30896604960569);
$point556->setLongitude(28.979315757751465);
$em->persist($point556);


$waySet556 = new WaySet();
$waySet556->setPoint($point556);
$waySet556->setWay($way);
$em->persist($waySet556);


$point557 = new Point();
$point557->setLatitude(46.31836628634467);
$point557->setLongitude(28.98534536361694);
$em->persist($point557);


$waySet557 = new WaySet();
$waySet557->setPoint($point557);
$waySet557->setWay($way);
$em->persist($waySet557);


$point558 = new Point();
$point558->setLatitude(46.3176993933192);
$point558->setLongitude(28.987233638763428);
$em->persist($point558);


$waySet558 = new WaySet();
$waySet558->setPoint($point558);
$waySet558->setWay($way);
$em->persist($waySet558);


$point559 = new Point();
$point559->setLatitude(46.31569125523626);
$point559->setLongitude(28.997050523757935);
$em->persist($point559);


$waySet559 = new WaySet();
$waySet559->setPoint($point559);
$waySet559->setWay($way);
$em->persist($waySet559);


$point560 = new Point();
$point560->setLatitude(46.31600989461112);
$point560->setLongitude(28.998606204986572);
$em->persist($point560);


$waySet560 = new WaySet();
$waySet560->setPoint($point560);
$waySet560->setWay($way);
$em->persist($waySet560);


$point561 = new Point();
$point561->setLatitude(46.316158098339336);
$point561->setLongitude(29.001755118370056);
$em->persist($point561);


$waySet561 = new WaySet();
$waySet561->setPoint($point561);
$waySet561->setWay($way);
$em->persist($waySet561);


$point562 = new Point();
$point562->setLatitude(46.316639757684065);
$point562->setLongitude(29.003605842590336);
$em->persist($point562);


$waySet562 = new WaySet();
$waySet562->setPoint($point562);
$waySet562->setWay($way);
$em->persist($waySet562);


$point563 = new Point();
$point563->setLatitude(46.31762158860345);
$point563->setLongitude(29.003503918647763);
$em->persist($point563);


$waySet563 = new WaySet();
$waySet563->setPoint($point563);
$waySet563->setWay($way);
$em->persist($waySet563);


$point564 = new Point();
$point564->setLatitude(46.32050769899474);
$point564->setLongitude(28.99757087230682);
$em->persist($point564);


$waySet564 = new WaySet();
$waySet564->setPoint($point564);
$waySet564->setWay($way);
$em->persist($waySet564);


$point565 = new Point();
$point565->setLatitude(46.32269718824823);
$point565->setLongitude(28.998000025749207);
$em->persist($point565);


$waySet565 = new WaySet();
$waySet565->setPoint($point565);
$waySet565->setWay($way);
$em->persist($waySet565);


$point566 = new Point();
$point566->setLatitude(46.32313803927701);
$point566->setLongitude(28.997468948364254);
$em->persist($point566);


$waySet566 = new WaySet();
$waySet566->setPoint($point566);
$waySet566->setWay($way);
$em->persist($waySet566);


$point567 = new Point();
$point567->setLatitude(46.32498661121342);
$point567->setLongitude(28.99691104888916);
$em->persist($point567);


$waySet567 = new WaySet();
$waySet567->setPoint($point567);
$waySet567->setWay($way);
$em->persist($waySet567);


$point568 = new Point();
$point568->setLatitude(46.327679709433895);
$point568->setLongitude(28.99693250656128);
$em->persist($point568);


$waySet568 = new WaySet();
$waySet568->setPoint($point568);
$waySet568->setWay($way);
$em->persist($waySet568);


$point569 = new Point();
$point569->setLatitude(46.33318403417627);
$point569->setLongitude(28.994754552841187);
$em->persist($point569);


$waySet569 = new WaySet();
$waySet569->setPoint($point569);
$waySet569->setWay($way);
$em->persist($waySet569);


$point570 = new Point();
$point570->setLatitude(46.34158391413784);
$point570->setLongitude(28.992635607719418);
$em->persist($point570);


$waySet570 = new WaySet();
$waySet570->setPoint($point570);
$waySet570->setWay($way);
$em->persist($waySet570);


$point571 = new Point();
$point571->setLatitude(46.34356147598164);
$point571->setLongitude(28.99069905281067);
$em->persist($point571);


$waySet571 = new WaySet();
$waySet571->setPoint($point571);
$waySet571->setWay($way);
$em->persist($waySet571);


$point572 = new Point();
$point572->setLatitude(46.34565746531433);
$point572->setLongitude(28.99060249328613);
$em->persist($point572);


$waySet572 = new WaySet();
$waySet572->setPoint($point572);
$waySet572->setWay($way);
$em->persist($waySet572);


$point573 = new Point();
$point573->setLatitude(46.34550934149867);
$point573->setLongitude(28.98871421813965);
$em->persist($point573);


$waySet573 = new WaySet();
$waySet573->setPoint($point573);
$waySet573->setWay($way);
$em->persist($waySet573);


$point574 = new Point();
$point574->setLatitude(46.34372071474101);
$point574->setLongitude(28.988553285598755);
$em->persist($point574);


$waySet574 = new WaySet();
$waySet574->setPoint($point574);
$waySet574->setWay($way);
$em->persist($waySet574);


$point575 = new Point();
$point575->setLatitude(46.3429134064782);
$point575->setLongitude(28.987029790878296);
$em->persist($point575);


$waySet575 = new WaySet();
$waySet575->setPoint($point575);
$waySet575->setWay($way);
$em->persist($waySet575);


$point576 = new Point();
$point576->setLatitude(46.34766080049763);
$point576->setLongitude(28.98433685302734);
$em->persist($point576);


$waySet576 = new WaySet();
$waySet576->setPoint($point576);
$waySet576->setWay($way);
$em->persist($waySet576);


$point577 = new Point();
$point577->setLatitude(46.35285579900735);
$point577->setLongitude(28.981193304061886);
$em->persist($point577);


$waySet577 = new WaySet();
$waySet577->setPoint($point577);
$waySet577->setWay($way);
$em->persist($waySet577);


$point578 = new Point();
$point578->setLatitude(46.35800217446699);
$point578->setLongitude(28.97792637348175);
$em->persist($point578);


$waySet578 = new WaySet();
$waySet578->setPoint($point578);
$waySet578->setWay($way);
$em->persist($waySet578);


$point579 = new Point();
$point579->setLatitude(46.362570564978746);
$point579->setLongitude(28.975013494491577);
$em->persist($point579);


$waySet579 = new WaySet();
$waySet579->setPoint($point579);
$waySet579->setWay($way);
$em->persist($waySet579);


$point580 = new Point();
$point580->setLatitude(46.36840451800917);
$point580->setLongitude(28.971129655838013);
$em->persist($point580);


$waySet580 = new WaySet();
$waySet580->setPoint($point580);
$waySet580->setWay($way);
$em->persist($waySet580);


$point581 = new Point();
$point581->setLatitude(46.368870911215176);
$point581->setLongitude(28.970807790756226);
$em->persist($point581);


$waySet581 = new WaySet();
$waySet581->setPoint($point581);
$waySet581->setWay($way);
$em->persist($waySet581);


$point582 = new Point();
$point582->setLatitude(46.37579971260363);
$point582->setLongitude(28.966811299324032);
$em->persist($point582);


$waySet582 = new WaySet();
$waySet582->setPoint($point582);
$waySet582->setWay($way);
$em->persist($waySet582);


$point583 = new Point();
$point583->setLatitude(46.40686117179343);
$point583->setLongitude(28.952397108078003);
$em->persist($point583);


$waySet583 = new WaySet();
$waySet583->setPoint($point583);
$waySet583->setWay($way);
$em->persist($waySet583);


$point584 = new Point();
$point584->setLatitude(46.43086572226427);
$point584->setLongitude(28.941560983657833);
$em->persist($point584);


$waySet584 = new WaySet();
$waySet584->setPoint($point584);
$waySet584->setWay($way);
$em->persist($waySet584);


$point585 = new Point();
$point585->setLatitude(46.45123042039174);
$point585->setLongitude(28.93739283084869);
$em->persist($point585);


$waySet585 = new WaySet();
$waySet585->setPoint($point585);
$waySet585->setWay($way);
$em->persist($waySet585);


$point586 = new Point();
$point586->setLatitude(46.45231701371273);
$point586->setLongitude(28.93671154975891);
$em->persist($point586);


$waySet586 = new WaySet();
$waySet586->setPoint($point586);
$waySet586->setWay($way);
$em->persist($waySet586);


$point587 = new Point();
$point587->setLatitude(46.457542707302245);
$point587->setLongitude(28.930660486221313);
$em->persist($point587);


$waySet587 = new WaySet();
$waySet587->setPoint($point587);
$waySet587->setWay($way);
$em->persist($waySet587);


$point588 = new Point();
$point588->setLatitude(46.45787530165966);
$point588->setLongitude(28.936100006103516);
$em->persist($point588);


$waySet588 = new WaySet();
$waySet588->setPoint($point588);
$waySet588->setWay($way);
$em->persist($waySet588);


$point589 = new Point();
$point589->setLatitude(46.45905784292238);
$point589->setLongitude(28.963930606842037);
$em->persist($point589);


$waySet589 = new WaySet();
$waySet589->setPoint($point589);
$waySet589->setWay($way);
$em->persist($waySet589);


$point590 = new Point();
$point590->setLatitude(46.45968236216353);
$point590->setLongitude(28.978940248489383);
$em->persist($point590);


$waySet590 = new WaySet();
$waySet590->setPoint($point590);
$waySet590->setWay($way);
$em->persist($waySet590);


$point591 = new Point();
$point591->setLatitude(46.460177538008814);
$point591->setLongitude(29.001717567443848);
$em->persist($point591);


$waySet591 = new WaySet();
$waySet591->setPoint($point591);
$waySet591->setWay($way);
$em->persist($waySet591);


$point592 = new Point();
$point592->setLatitude(46.460192319308106);
$point592->setLongitude(29.00191605091095);
$em->persist($point592);


$waySet592 = new WaySet();
$waySet592->setPoint($point592);
$waySet592->setWay($way);
$em->persist($waySet592);


$point593 = new Point();
$point593->setLatitude(46.46234665076574);
$point593->setLongitude(29.02553021907806);
$em->persist($point593);


$waySet593 = new WaySet();
$waySet593->setPoint($point593);
$waySet593->setWay($way);
$em->persist($waySet593);


$point594 = new Point();
$point594->setLatitude(46.48003259480717);
$point594->setLongitude(29.023491740226746);
$em->persist($point594);


$waySet594 = new WaySet();
$waySet594->setPoint($point594);
$waySet594->setWay($way);
$em->persist($waySet594);


$point595 = new Point();
$point595->setLatitude(46.47975185178925);
$point595->setLongitude(29.004861116409298);
$em->persist($point595);


$waySet595 = new WaySet();
$waySet595->setPoint($point595);
$waySet595->setWay($way);
$em->persist($waySet595);


$point596 = new Point();
$point596->setLatitude(46.47954868159651);
$point596->setLongitude(28.997211456298828);
$em->persist($point596);


$waySet596 = new WaySet();
$waySet596->setPoint($point596);
$waySet596->setWay($way);
$em->persist($waySet596);


$point597 = new Point();
$point597->setLatitude(46.479482189368646);
$point597->setLongitude(28.994690179824826);
$em->persist($point597);


$waySet597 = new WaySet();
$waySet597->setPoint($point597);
$waySet597->setWay($way);
$em->persist($waySet597);


$point598 = new Point();
$point598->setLatitude(46.47914972701051);
$point598->setLongitude(28.987373113632202);
$em->persist($point598);


$waySet598 = new WaySet();
$waySet598->setPoint($point598);
$waySet598->setWay($way);
$em->persist($waySet598);


$point599 = new Point();
$point599->setLatitude(46.47905737599497);
$point599->setLongitude(28.987158536911014);
$em->persist($point599);


$waySet599 = new WaySet();
$waySet599->setPoint($point599);
$waySet599->setWay($way);
$em->persist($waySet599);


$point600 = new Point();
$point600->setLatitude(46.47813755132483);
$point600->setLongitude(28.986965417861935);
$em->persist($point600);


$waySet600 = new WaySet();
$waySet600->setPoint($point600);
$waySet600->setWay($way);
$em->persist($waySet600);


$point601 = new Point();
$point601->setLatitude(46.47660078144338);
$point601->setLongitude(28.98694932460785);
$em->persist($point601);


$waySet601 = new WaySet();
$waySet601->setPoint($point601);
$waySet601->setWay($way);
$em->persist($waySet601);


$point602 = new Point();
$point602->setLatitude(46.47739503091167);
$point602->setLongitude(28.984739184379574);
$em->persist($point602);


$waySet602 = new WaySet();
$waySet602->setPoint($point602);
$waySet602->setWay($way);
$em->persist($waySet602);


$point603 = new Point();
$point603->setLatitude(46.48132916547759);
$point603->setLongitude(28.97779226303101);
$em->persist($point603);


$waySet603 = new WaySet();
$waySet603->setPoint($point603);
$waySet603->setWay($way);
$em->persist($waySet603);


$point604 = new Point();
$point604->setLatitude(46.489008219803104);
$point604->setLongitude(28.981284499168392);
$em->persist($point604);


$waySet604 = new WaySet();
$waySet604->setPoint($point604);
$waySet604->setWay($way);
$em->persist($waySet604);


$point605 = new Point();
$point605->setLatitude(46.48935170195461);
$point605->setLongitude(29.00110602378845);
$em->persist($point605);


$waySet605 = new WaySet();
$waySet605->setPoint($point605);
$waySet605->setWay($way);
$em->persist($waySet605);


$point606 = new Point();
$point606->setLatitude(46.49018269818797);
$point606->setLongitude(29.021265506744385);
$em->persist($point606);


$waySet606 = new WaySet();
$waySet606->setPoint($point606);
$waySet606->setWay($way);
$em->persist($waySet606);


$point607 = new Point();
$point607->setLatitude(46.49081794007956);
$point607->setLongitude(29.033464193344116);
$em->persist($point607);


$waySet607 = new WaySet();
$waySet607->setPoint($point607);
$waySet607->setWay($way);
$em->persist($waySet607);


$point608 = new Point();
$point608->setLatitude(46.493248041159305);
$point608->setLongitude(29.033415913581845);
$em->persist($point608);


$waySet608 = new WaySet();
$waySet608->setPoint($point608);
$waySet608->setWay($way);
$em->persist($waySet608);


$point609 = new Point();
$point609->setLatitude(46.493598882649174);
$point609->setLongitude(29.039059281349182);
$em->persist($point609);


$waySet609 = new WaySet();
$waySet609->setPoint($point609);
$waySet609->setWay($way);
$em->persist($waySet609);


$point610 = new Point();
$point610->setLatitude(46.50617597810613);
$point610->setLongitude(29.038737416267395);
$em->persist($point610);


$waySet610 = new WaySet();
$waySet610->setPoint($point610);
$waySet610->setWay($way);
$em->persist($waySet610);


$point611 = new Point();
$point611->setLatitude(46.50693656644595);
$point611->setLongitude(29.063284993171692);
$em->persist($point611);


$waySet611 = new WaySet();
$waySet611->setPoint($point611);
$waySet611->setWay($way);
$em->persist($waySet611);


$point612 = new Point();
$point612->setLatitude(46.51246712663589);
$point612->setLongitude(29.06300604343414);
$em->persist($point612);


$waySet612 = new WaySet();
$waySet612->setPoint($point612);
$waySet612->setWay($way);
$em->persist($waySet612);


$point613 = new Point();
$point613->setLatitude(46.51529495264572);
$point613->setLongitude(29.163910746574402);
$em->persist($point613);


$waySet613 = new WaySet();
$waySet613->setPoint($point613);
$waySet613->setWay($way);
$em->persist($waySet613);


$point614 = new Point();
$point614->setLatitude(46.54449859639798);
$point614->setLongitude(29.161786437034607);
$em->persist($point614);


$waySet614 = new WaySet();
$waySet614->setPoint($point614);
$waySet614->setWay($way);
$em->persist($waySet614);


$point615 = new Point();
$point615->setLatitude(46.558373402791155);
$point615->setLongitude(29.235713481903073);
$em->persist($point615);


$waySet615 = new WaySet();
$waySet615->setPoint($point615);
$waySet615->setWay($way);
$em->persist($waySet615);


$point616 = new Point();
$point616->setLatitude(46.50413784426443);
$point616->setLongitude(29.240021109580994);
$em->persist($point616);


$waySet616 = new WaySet();
$waySet616->setPoint($point616);
$waySet616->setWay($way);
$em->persist($waySet616);


$point617 = new Point();
$point617->setLatitude(46.49910864366991);
$point617->setLongitude(29.24070239067078);
$em->persist($point617);


$waySet617 = new WaySet();
$waySet617->setPoint($point617);
$waySet617->setWay($way);
$em->persist($waySet617);


$point618 = new Point();
$point618->setLatitude(46.50014997008779);
$point618->setLongitude(29.24929082393646);
$em->persist($point618);


$waySet618 = new WaySet();
$waySet618->setPoint($point618);
$waySet618->setWay($way);
$em->persist($waySet618);


$point619 = new Point();
$point619->setLatitude(46.48553634296327);
$point619->setLongitude(29.255138039588928);
$em->persist($point619);


$waySet619 = new WaySet();
$waySet619->setPoint($point619);
$waySet619->setWay($way);
$em->persist($waySet619);


$point620 = new Point();
$point620->setLatitude(46.46376558066739);
$point620->setLongitude(29.219453930854797);
$em->persist($point620);


$waySet620 = new WaySet();
$waySet620->setPoint($point620);
$waySet620->setWay($way);
$em->persist($waySet620);


$point621 = new Point();
$point621->setLatitude(46.45839636206855);
$point621->setLongitude(29.22934591770172);
$em->persist($point621);


$waySet621 = new WaySet();
$waySet621->setPoint($point621);
$waySet621->setWay($way);
$em->persist($waySet621);


$point622 = new Point();
$point622->setLatitude(46.43640401755955);
$point622->setLongitude(29.23000574111938);
$em->persist($point622);


$waySet622 = new WaySet();
$waySet622->setPoint($point622);
$waySet622->setWay($way);
$em->persist($waySet622);


$point623 = new Point();
$point623->setLatitude(46.43583098907804);
$point623->setLongitude(29.229737520217896);
$em->persist($point623);


$waySet623 = new WaySet();
$waySet623->setPoint($point623);
$waySet623->setWay($way);
$em->persist($waySet623);


$point624 = new Point();
$point624->setLatitude(46.433756945298335);
$point624->setLongitude(29.23166334629059);
$em->persist($point624);


$waySet624 = new WaySet();
$waySet624->setPoint($point624);
$waySet624->setWay($way);
$em->persist($waySet624);


$point625 = new Point();
$point625->setLatitude(46.43201187762213);
$point625->setLongitude(29.227790236473087);
$em->persist($point625);


$waySet625 = new WaySet();
$waySet625->setPoint($point625);
$waySet625->setWay($way);
$em->persist($waySet625);


$point626 = new Point();
$point626->setLatitude(46.42702037983121);
$point626->setLongitude(29.232205152511597);
$em->persist($point626);


$waySet626 = new WaySet();
$waySet626->setPoint($point626);
$waySet626->setWay($way);
$em->persist($waySet626);


$point627 = new Point();
$point627->setLatitude(46.42458362339744);
$point627->setLongitude(29.23538625240326);
$em->persist($point627);


$waySet627 = new WaySet();
$waySet627->setPoint($point627);
$waySet627->setWay($way);
$em->persist($waySet627);


$point628 = new Point();
$point628->setLatitude(46.41984291414655);
$point628->setLongitude(29.244318008422855);
$em->persist($point628);


$waySet628 = new WaySet();
$waySet628->setPoint($point628);
$waySet628->setWay($way);
$em->persist($waySet628);


$point629 = new Point();
$point629->setLatitude(46.416144726831455);
$point629->setLongitude(29.24646377563477);
$em->persist($point629);


$waySet629 = new WaySet();
$waySet629->setPoint($point629);
$waySet629->setWay($way);
$em->persist($waySet629);


$point630 = new Point();
$point630->setLatitude(46.414576619690486);
$point630->setLongitude(29.24397468566894);
$em->persist($point630);


$waySet630 = new WaySet();
$waySet630->setPoint($point630);
$waySet630->setWay($way);
$em->persist($waySet630);


$point631 = new Point();
$point631->setLatitude(46.4131305186603);
$point631->setLongitude(29.241539239883423);
$em->persist($point631);


$waySet631 = new WaySet();
$waySet631->setPoint($point631);
$waySet631->setWay($way);
$em->persist($waySet631);


$point632 = new Point();
$point632->setLatitude(46.41292709983805);
$point632->setLongitude(29.24098134040832);
$em->persist($point632);


$waySet632 = new WaySet();
$waySet632->setPoint($point632);
$waySet632->setWay($way);
$em->persist($waySet632);


$point633 = new Point();
$point633->setLatitude(46.38655019866527);
$point633->setLongitude(29.206649065017697);
$em->persist($point633);


$waySet633 = new WaySet();
$waySet633->setPoint($point633);
$waySet633->setWay($way);
$em->persist($waySet633);


$point634 = new Point();
$point634->setLatitude(46.38469630719943);
$point634->setLongitude(29.207818508148197);
$em->persist($point634);


$waySet634 = new WaySet();
$waySet634->setPoint($point634);
$waySet634->setWay($way);
$em->persist($waySet634);


$point635 = new Point();
$point635->setLatitude(46.37610689872434);
$point635->setLongitude(29.240815043449402);
$em->persist($point635);


$waySet635 = new WaySet();
$waySet635->setPoint($point635);
$waySet635->setWay($way);
$em->persist($waySet635);


$point636 = new Point();
$point636->setLatitude(46.38618016547775);
$point636->setLongitude(29.25684928894043);
$em->persist($point636);


$waySet636 = new WaySet();
$waySet636->setPoint($point636);
$waySet636->setWay($way);
$em->persist($waySet636);


$point637 = new Point();
$point637->setLatitude(46.39394663585219);
$point637->setLongitude(29.26777124404907);
$em->persist($point637);


$waySet637 = new WaySet();
$waySet637->setPoint($point637);
$waySet637->setWay($way);
$em->persist($waySet637);


$point638 = new Point();
$point638->setLatitude(46.39934810268645);
$point638->setLongitude(29.26265895366669);
$em->persist($point638);


$waySet638 = new WaySet();
$waySet638->setPoint($point638);
$waySet638->setWay($way);
$em->persist($waySet638);


$point639 = new Point();
$point639->setLatitude(46.40198204872909);
$point639->setLongitude(29.268318414688114);
$em->persist($point639);


$waySet639 = new WaySet();
$waySet639->setPoint($point639);
$waySet639->setWay($way);
$em->persist($waySet639);


$point640 = new Point();
$point640->setLatitude(46.40622125102427);
$point640->setLongitude(29.263962507247925);
$em->persist($point640);


$waySet640 = new WaySet();
$waySet640->setPoint($point640);
$waySet640->setWay($way);
$em->persist($waySet640);


$point641 = new Point();
$point641->setLatitude(46.40764164303261);
$point641->setLongitude(29.268077015876774);
$em->persist($point641);


$waySet641 = new WaySet();
$waySet641->setPoint($point641);
$waySet641->setWay($way);
$em->persist($waySet641);


$point642 = new Point();
$point642->setLatitude(46.41080780043432);
$point642->setLongitude(29.27801728248596);
$em->persist($point642);


$waySet642 = new WaySet();
$waySet642->setPoint($point642);
$waySet642->setWay($way);
$em->persist($waySet642);


$point643 = new Point();
$point643->setLatitude(46.41470236579397);
$point643->setLongitude(29.28906798362732);
$em->persist($point643);


$waySet643 = new WaySet();
$waySet643->setPoint($point643);
$waySet643->setWay($way);
$em->persist($waySet643);


$point644 = new Point();
$point644->setLatitude(46.41531629848856);
$point644->setLongitude(29.290816783905026);
$em->persist($point644);


$waySet644 = new WaySet();
$waySet644->setPoint($point644);
$waySet644->setWay($way);
$em->persist($waySet644);


$point645 = new Point();
$point645->setLatitude(46.41589693931596);
$point645->setLongitude(29.292624592781067);
$em->persist($point645);


$waySet645 = new WaySet();
$waySet645->setPoint($point645);
$waySet645->setWay($way);
$em->persist($waySet645);


$point646 = new Point();
$point646->setLatitude(46.41717284807677);
$point646->setLongitude(29.2966103553772);
$em->persist($point646);


$waySet646 = new WaySet();
$waySet646->setPoint($point646);
$waySet646->setWay($way);
$em->persist($waySet646);


$point647 = new Point();
$point647->setLatitude(46.40892514254107);
$point647->setLongitude(29.30228590965271);
$em->persist($point647);


$waySet647 = new WaySet();
$waySet647->setPoint($point647);
$waySet647->setWay($way);
$em->persist($waySet647);


$point648 = new Point();
$point648->setLatitude(46.4085737551881);
$point648->setLongitude(29.30285453796387);
$em->persist($point648);


$waySet648 = new WaySet();
$waySet648->setPoint($point648);
$waySet648->setWay($way);
$em->persist($waySet648);


$point649 = new Point();
$point649->setLatitude(46.4084960797835);
$point649->setLongitude(29.303219318389893);
$em->persist($point649);


$waySet649 = new WaySet();
$waySet649->setPoint($point649);
$waySet649->setWay($way);
$em->persist($waySet649);


$point650 = new Point();
$point650->setLatitude(46.41487619081253);
$point650->setLongitude(29.32425856590271);
$em->persist($point650);


$waySet650 = new WaySet();
$waySet650->setPoint($point650);
$waySet650->setWay($way);
$em->persist($waySet650);


$point651 = new Point();
$point651->setLatitude(46.42685398869907);
$point651->setLongitude(29.316716194152832);
$em->persist($point651);


$waySet651 = new WaySet();
$waySet651->setPoint($point651);
$waySet651->setWay($way);
$em->persist($waySet651);


$point652 = new Point();
$point652->setLatitude(46.43324674061388);
$point652->setLongitude(29.312896728515625);
$em->persist($point652);


$waySet652 = new WaySet();
$waySet652->setPoint($point652);
$waySet652->setWay($way);
$em->persist($waySet652);


$point653 = new Point();
$point653->setLatitude(46.44437033765948);
$point653->setLongitude(29.306277036666867);
$em->persist($point653);


$waySet653 = new WaySet();
$waySet653->setPoint($point653);
$waySet653->setWay($way);
$em->persist($waySet653);


$point654 = new Point();
$point654->setLatitude(46.44766003255948);
$point654->setLongitude(29.318566918373108);
$em->persist($point654);


$waySet654 = new WaySet();
$waySet654->setPoint($point654);
$waySet654->setWay($way);
$em->persist($waySet654);


$point655 = new Point();
$point655->setLatitude(46.45506296755939);
$point655->setLongitude(29.314130544662476);
$em->persist($point655);


$waySet655 = new WaySet();
$waySet655->setPoint($point655);
$waySet655->setWay($way);
$em->persist($waySet655);


$point656 = new Point();
$point656->setLatitude(46.45631209051595);
$point656->setLongitude(29.31277871131897);
$em->persist($point656);


$waySet656 = new WaySet();
$waySet656->setPoint($point656);
$waySet656->setWay($way);
$em->persist($waySet656);


$point657 = new Point();
$point657->setLatitude(46.45666317021222);
$point657->setLongitude(29.31248366832733);
$em->persist($point657);


$waySet657 = new WaySet();
$waySet657->setPoint($point657);
$waySet657->setWay($way);
$em->persist($waySet657);


$point658 = new Point();
$point658->setLatitude(46.45738380039207);
$point658->setLongitude(29.31204378604889);
$em->persist($point658);


$waySet658 = new WaySet();
$waySet658->setPoint($point658);
$waySet658->setWay($way);
$em->persist($waySet658);


$point659 = new Point();
$point659->setLatitude(46.45957519664903);
$point659->setLongitude(29.311609268188477);
$em->persist($point659);


$waySet659 = new WaySet();
$waySet659->setPoint($point659);
$waySet659->setWay($way);
$em->persist($waySet659);


$point660 = new Point();
$point660->setLatitude(46.462501848024985);
$point660->setLongitude(29.310767054557797);
$em->persist($point660);


$waySet660 = new WaySet();
$waySet660->setPoint($point660);
$waySet660->setWay($way);
$em->persist($waySet660);


$point661 = new Point();
$point661->setLatitude(46.46432723020358);
$point661->setLongitude(29.30876076221466);
$em->persist($point661);


$waySet661 = new WaySet();
$waySet661->setPoint($point661);
$waySet661->setWay($way);
$em->persist($waySet661);


$point662 = new Point();
$point662->setLatitude(46.46487409392109);
$point662->setLongitude(29.307746887207028);
$em->persist($point662);


$waySet662 = new WaySet();
$waySet662->setPoint($point662);
$waySet662->setWay($way);
$em->persist($waySet662);


$point663 = new Point();
$point663->setLatitude(46.46589390617906);
$point663->setLongitude(29.31080460548401);
$em->persist($point663);


$waySet663 = new WaySet();
$waySet663->setPoint($point663);
$waySet663->setWay($way);
$em->persist($waySet663);


$point664 = new Point();
$point664->setLatitude(46.4684913851552);
$point664->setLongitude(29.318668842315674);
$em->persist($point664);


$waySet664 = new WaySet();
$waySet664->setPoint($point664);
$waySet664->setWay($way);
$em->persist($waySet664);


$point665 = new Point();
$point665->setLatitude(46.47086706465078);
$point665->setLongitude(29.32586789131165);
$em->persist($point665);


$waySet665 = new WaySet();
$waySet665->setPoint($point665);
$waySet665->setWay($way);
$em->persist($waySet665);


$point666 = new Point();
$point666->setLatitude(46.47031287186433);
$point666->setLongitude(29.327235817909237);
$em->persist($point666);


$waySet666 = new WaySet();
$waySet666->setPoint($point666);
$waySet666->setWay($way);
$em->persist($waySet666);


$point667 = new Point();
$point667->setLatitude(46.47303944595803);
$point667->setLongitude(29.333667755126953);
$em->persist($point667);


$waySet667 = new WaySet();
$waySet667->setPoint($point667);
$waySet667->setWay($way);
$em->persist($waySet667);


$point668 = new Point();
$point668->setLatitude(46.47399630069174);
$point668->setLongitude(29.336763024330136);
$em->persist($point668);


$waySet668 = new WaySet();
$waySet668->setPoint($point668);
$waySet668->setWay($way);
$em->persist($waySet668);


$point669 = new Point();
$point669->setLatitude(46.47883573291812);
$point669->setLongitude(29.33290600776672);
$em->persist($point669);


$waySet669 = new WaySet();
$waySet669->setPoint($point669);
$waySet669->setWay($way);
$em->persist($waySet669);


$point670 = new Point();
$point670->setLatitude(46.48045740056683);
$point670->setLongitude(29.335958361625668);
$em->persist($point670);


$waySet670 = new WaySet();
$waySet670->setPoint($point670);
$waySet670->setWay($way);
$em->persist($waySet670);


$point671 = new Point();
$point671->setLatitude(46.481052123058255);
$point671->setLongitude(29.335786700248715);
$em->persist($point671);


$waySet671 = new WaySet();
$waySet671->setPoint($point671);
$waySet671->setWay($way);
$em->persist($waySet671);


$point672 = new Point();
$point672->setLatitude(46.48218614109699);
$point672->setLongitude(29.33794319629669);
$em->persist($point672);


$waySet672 = new WaySet();
$waySet672->setPoint($point672);
$waySet672->setWay($way);
$em->persist($waySet672);


$point673 = new Point();
$point673->setLatitude(46.49326281347821);
$point673->setLongitude(29.33250904083252);
$em->persist($point673);


$waySet673 = new WaySet();
$waySet673->setPoint($point673);
$waySet673->setWay($way);
$em->persist($waySet673);


$point674 = new Point();
$point674->setLatitude(46.49595130869693);
$point674->setLongitude(29.331564903259274);
$em->persist($point674);


$waySet674 = new WaySet();
$waySet674->setPoint($point674);
$waySet674->setWay($way);
$em->persist($waySet674);


$point675 = new Point();
$point675->setLatitude(46.50427815302873);
$point675->setLongitude(29.351402521133423);
$em->persist($point675);


$waySet675 = new WaySet();
$waySet675->setPoint($point675);
$waySet675->setWay($way);
$em->persist($waySet675);


$point676 = new Point();
$point676->setLatitude(46.4700394680111);
$point676->setLongitude(29.37242031097412);
$em->persist($point676);


$waySet676 = new WaySet();
$waySet676->setPoint($point676);
$waySet676->setWay($way);
$em->persist($waySet676);


$point677 = new Point();
$point677->setLatitude(46.45957519664903);
$point677->setLongitude(29.37884151935577);
$em->persist($point677);


$waySet677 = new WaySet();
$waySet677->setPoint($point677);
$waySet677->setWay($way);
$em->persist($waySet677);


$point678 = new Point();
$point678->setLatitude(46.45932021578381);
$point678->setLongitude(29.37844455242157);
$em->persist($point678);


$waySet678 = new WaySet();
$waySet678->setPoint($point678);
$waySet678->setWay($way);
$em->persist($waySet678);


$point679 = new Point();
$point679->setLatitude(46.45914283708635);
$point679->setLongitude(29.378020763397217);
$em->persist($point679);


$waySet679 = new WaySet();
$waySet679->setPoint($point679);
$waySet679->setWay($way);
$em->persist($waySet679);


$point680 = new Point();
$point680->setLatitude(46.459028279703816);
$point680->setLongitude(29.37741994857788);
$em->persist($point680);


$waySet680 = new WaySet();
$waySet680->setPoint($point680);
$waySet680->setWay($way);
$em->persist($waySet680);


$point681 = new Point();
$point681->setLatitude(46.458854595470584);
$point681->setLongitude(29.376824498176575);
$em->persist($point681);


$waySet681 = new WaySet();
$waySet681->setPoint($point681);
$waySet681->setWay($way);
$em->persist($waySet681);


$point682 = new Point();
$point682->setLatitude(46.45862178382081);
$point682->setLongitude(29.376502633094788);
$em->persist($point682);


$waySet682 = new WaySet();
$waySet682->setPoint($point682);
$waySet682->setWay($way);
$em->persist($waySet682);


$point683 = new Point();
$point683->setLatitude(46.45840744840604);
$point683->setLongitude(29.376427531242374);
$em->persist($point683);


$waySet683 = new WaySet();
$waySet683->setPoint($point683);
$waySet683->setWay($way);
$em->persist($waySet683);


$point684 = new Point();
$point684->setLatitude(46.45809703010267);
$point684->setLongitude(29.376465082168576);
$em->persist($point684);


$waySet684 = new WaySet();
$waySet684->setPoint($point684);
$waySet684->setWay($way);
$em->persist($waySet684);


$point685 = new Point();
$point685->setLatitude(46.43718406600144);
$point685->setLongitude(29.388964176177975);
$em->persist($point685);


$waySet685 = new WaySet();
$waySet685->setPoint($point685);
$waySet685->setWay($way);
$em->persist($waySet685);


$point686 = new Point();
$point686->setLatitude(46.4251900494432);
$point686->setLongitude(29.396120309829712);
$em->persist($point686);


$waySet686 = new WaySet();
$waySet686->setPoint($point686);
$waySet686->setWay($way);
$em->persist($waySet686);


$point687 = new Point();
$point687->setLatitude(46.42610707113775);
$point687->setLongitude(29.39918339252472);
$em->persist($point687);


$waySet687 = new WaySet();
$waySet687->setPoint($point687);
$waySet687->setWay($way);
$em->persist($waySet687);


$point688 = new Point();
$point688->setLatitude(46.44663248627465);
$point688->setLongitude(29.38679158687592);
$em->persist($point688);


$waySet688 = new WaySet();
$waySet688->setPoint($point688);
$waySet688->setWay($way);
$em->persist($waySet688);


$point689 = new Point();
$point689->setLatitude(46.498569509391174);
$point689->setLongitude(29.448503851890564);
$em->persist($point689);


$waySet689 = new WaySet();
$waySet689->setPoint($point689);
$waySet689->setWay($way);
$em->persist($waySet689);


$point690 = new Point();
$point690->setLatitude(46.46166673374876);
$point690->setLongitude(29.50177252292633);
$em->persist($point690);


$waySet690 = new WaySet();
$waySet690->setPoint($point690);
$waySet690->setWay($way);
$em->persist($waySet690);


$point691 = new Point();
$point691->setLatitude(46.4556062286975);
$point691->setLongitude(29.49368834495544);
$em->persist($point691);


$waySet691 = new WaySet();
$waySet691->setPoint($point691);
$waySet691->setWay($way);
$em->persist($waySet691);


$point692 = new Point();
$point692->setLatitude(46.44737173016248);
$point692->setLongitude(29.484702944755554);
$em->persist($point692);


$waySet692 = new WaySet();
$waySet692->setPoint($point692);
$waySet692->setWay($way);
$em->persist($waySet692);


$point693 = new Point();
$point693->setLatitude(46.43739478807241);
$point693->setLongitude(29.48880136013031);
$em->persist($point693);


$waySet693 = new WaySet();
$waySet693->setPoint($point693);
$waySet693->setWay($way);
$em->persist($waySet693);


$point694 = new Point();
$point694->setLatitude(46.42800762343492);
$point694->setLongitude(29.494428634643555);
$em->persist($point694);


$waySet694 = new WaySet();
$waySet694->setPoint($point694);
$waySet694->setWay($way);
$em->persist($waySet694);


$point695 = new Point();
$point695->setLatitude(46.429261064269966);
$point695->setLongitude(29.49781358242035);
$em->persist($point695);


$waySet695 = new WaySet();
$waySet695->setPoint($point695);
$waySet695->setWay($way);
$em->persist($waySet695);


$point696 = new Point();
$point696->setLatitude(46.42305643523877);
$point696->setLongitude(29.506884813308712);
$em->persist($point696);


$waySet696 = new WaySet();
$waySet696->setPoint($point696);
$waySet696->setWay($way);
$em->persist($waySet696);


$point697 = new Point();
$point697->setLatitude(46.416455384215446);
$point697->setLongitude(29.566166996955875);
$em->persist($point697);


$waySet697 = new WaySet();
$waySet697->setPoint($point697);
$waySet697->setWay($way);
$em->persist($waySet697);


$point698 = new Point();
$point698->setLatitude(46.36079360271689);
$point698->setLongitude(29.58040952682495);
$em->persist($point698);


$waySet698 = new WaySet();
$waySet698->setPoint($point698);
$waySet698->setWay($way);
$em->persist($waySet698);


$point699 = new Point();
$point699->setLatitude(46.362863017812295);
$point699->setLongitude(29.600295424461365);
$em->persist($point699);


$waySet699 = new WaySet();
$waySet699->setPoint($point699);
$waySet699->setWay($way);
$em->persist($waySet699);


$point700 = new Point();
$point700->setLatitude(46.35376292914672);
$point700->setLongitude(29.603095650672913);
$em->persist($point700);


$waySet700 = new WaySet();
$waySet700->setPoint($point700);
$waySet700->setWay($way);
$em->persist($waySet700);


$point701 = new Point();
$point701->setLatitude(46.361197126302436);
$point701->setLongitude(29.677612781524658);
$em->persist($point701);


$waySet701 = new WaySet();
$waySet701->setPoint($point701);
$waySet701->setWay($way);
$em->persist($waySet701);


$point702 = new Point();
$point702->setLatitude(46.37246866780669);
$point702->setLongitude(29.676609635353085);
$em->persist($point702);


$waySet702 = new WaySet();
$waySet702->setPoint($point702);
$waySet702->setWay($way);
$em->persist($waySet702);


$point703 = new Point();
$point703->setLatitude(46.43583838303231);
$point703->setLongitude(29.660210609436035);
$em->persist($point703);


$waySet703 = new WaySet();
$waySet703->setPoint($point703);
$waySet703->setWay($way);
$em->persist($waySet703);


$point704 = new Point();
$point704->setLatitude(46.44157209250063);
$point704->setLongitude(29.678691029548645);
$em->persist($point704);


$waySet704 = new WaySet();
$waySet704->setPoint($point704);
$waySet704->setWay($way);
$em->persist($waySet704);


$point705 = new Point();
$point705->setLatitude(46.43133527914802);
$point705->setLongitude(29.681400060653687);
$em->persist($point705);


$waySet705 = new WaySet();
$waySet705->setPoint($point705);
$waySet705->setWay($way);
$em->persist($waySet705);


$point706 = new Point();
$point706->setLatitude(46.43202296933042);
$point706->setLongitude(29.68532681465149);
$em->persist($point706);


$waySet706 = new WaySet();
$waySet706->setPoint($point706);
$waySet706->setWay($way);
$em->persist($waySet706);


$point707 = new Point();
$point707->setLatitude(46.42611076877465);
$point707->setLongitude(29.68578279018402);
$em->persist($point707);


$waySet707 = new WaySet();
$waySet707->setPoint($point707);
$waySet707->setWay($way);
$em->persist($waySet707);


$point708 = new Point();
$point708->setLatitude(46.42690945246622);
$point708->setLongitude(29.690610766410824);
$em->persist($point708);


$waySet708 = new WaySet();
$waySet708->setPoint($point708);
$waySet708->setWay($way);
$em->persist($waySet708);


$point709 = new Point();
$point709->setLatitude(46.4308879061451);
$point709->setLongitude(29.710196256637573);
$em->persist($point709);


$waySet709 = new WaySet();
$waySet709->setPoint($point709);
$waySet709->setWay($way);
$em->persist($waySet709);


$point710 = new Point();
$point710->setLatitude(46.435021345016594);
$point710->setLongitude(29.73448634147644);
$em->persist($point710);


$waySet710 = new WaySet();
$waySet710->setPoint($point710);
$waySet710->setWay($way);
$em->persist($waySet710);


$point711 = new Point();
$point711->setLatitude(46.4401008306617);
$point711->setLongitude(29.730967283248898);
$em->persist($point711);


$waySet711 = new WaySet();
$waySet711->setPoint($point711);
$waySet711->setWay($way);
$em->persist($waySet711);


$point712 = new Point();
$point712->setLatitude(46.44359778499688);
$point712->setLongitude(29.74216818809509);
$em->persist($point712);


$waySet712 = new WaySet();
$waySet712->setPoint($point712);
$waySet712->setWay($way);
$em->persist($waySet712);


$point713 = new Point();
$point713->setLatitude(46.46679915830005);
$point713->setLongitude(29.726659655570984);
$em->persist($point713);


$waySet713 = new WaySet();
$waySet713->setPoint($point713);
$waySet713->setWay($way);
$em->persist($waySet713);


$point714 = new Point();
$point714->setLatitude(46.472108436015446);
$point714->setLongitude(29.73867058753967);
$em->persist($point714);


$waySet714 = new WaySet();
$waySet714->setPoint($point714);
$waySet714->setWay($way);
$em->persist($waySet714);


$point715 = new Point();
$point715->setLatitude(46.473416278787916);
$point715->setLongitude(29.74237740039825);
$em->persist($point715);


$waySet715 = new WaySet();
$waySet715->setPoint($point715);
$waySet715->setWay($way);
$em->persist($waySet715);


$point716 = new Point();
$point716->setLatitude(46.47243724690163);
$point716->setLongitude(29.742940664291382);
$em->persist($point716);


$waySet716 = new WaySet();
$waySet716->setPoint($point716);
$waySet716->setWay($way);
$em->persist($waySet716);


$point717 = new Point();
$point717->setLatitude(46.47035720749491);
$point717->setLongitude(29.749179482460026);
$em->persist($point717);


$waySet717 = new WaySet();
$waySet717->setPoint($point717);
$waySet717->setWay($way);
$em->persist($waySet717);


$point718 = new Point();
$point718->setLatitude(46.45303770140669);
$point718->setLongitude(29.76773500442505);
$em->persist($point718);


$waySet718 = new WaySet();
$waySet718->setPoint($point718);
$waySet718->setWay($way);
$em->persist($waySet718);


$point719 = new Point();
$point719->setLatitude(46.45470818184997);
$point719->setLongitude(29.776264429092407);
$em->persist($point719);


$waySet719 = new WaySet();
$waySet719->setPoint($point719);
$waySet719->setWay($way);
$em->persist($waySet719);


$point720 = new Point();
$point720->setLatitude(46.421832435152965);
$point720->setLongitude(29.789798855781555);
$em->persist($point720);


$waySet720 = new WaySet();
$waySet720->setPoint($point720);
$waySet720->setWay($way);
$em->persist($waySet720);


$point721 = new Point();
$point721->setLatitude(46.41991687533451);
$point721->setLongitude(29.786778688430786);
$em->persist($point721);


$waySet721 = new WaySet();
$waySet721->setPoint($point721);
$waySet721->setWay($way);
$em->persist($waySet721);


$point722 = new Point();
$point722->setLatitude(46.41425115784093);
$point722->setLongitude(29.79385435581207);
$em->persist($point722);


$waySet722 = new WaySet();
$waySet722->setPoint($point722);
$waySet722->setWay($way);
$em->persist($waySet722);


$point723 = new Point();
$point723->setLatitude(46.41636292684567);
$point723->setLongitude(29.797507524490356);
$em->persist($point723);


$waySet723 = new WaySet();
$waySet723->setPoint($point723);
$waySet723->setWay($way);
$em->persist($waySet723);


$point724 = new Point();
$point724->setLatitude(46.41018272083503);
$point724->setLongitude(29.805039167404175);
$em->persist($point724);


$waySet724 = new WaySet();
$waySet724->setPoint($point724);
$waySet724->setWay($way);
$em->persist($waySet724);


$point725 = new Point();
$point725->setLatitude(46.3958187116105);
$point725->setLongitude(29.82292950153351);
$em->persist($point725);


$waySet725 = new WaySet();
$waySet725->setPoint($point725);
$waySet725->setWay($way);
$em->persist($waySet725);


$point726 = new Point();
$point726->setLatitude(46.38546969472633);
$point726->setLongitude(29.80510354042053);
$em->persist($point726);


$waySet726 = new WaySet();
$waySet726->setPoint($point726);
$waySet726->setWay($way);
$em->persist($waySet726);


$point727 = new Point();
$point727->setLatitude(46.35210046283162);
$point727->setLongitude(29.89117562770843);
$em->persist($point727);


$waySet727 = new WaySet();
$waySet727->setPoint($point727);
$waySet727->setWay($way);
$em->persist($waySet727);


$point728 = new Point();
$point728->setLatitude(46.37148782145203);
$point728->setLongitude(29.886594414710995);
$em->persist($point728);


$waySet728 = new WaySet();
$waySet728->setPoint($point728);
$waySet728->setWay($way);
$em->persist($waySet728);


$point729 = new Point();
$point729->setLatitude(46.40046902504164);
$point729->setLongitude(29.93862390518188);
$em->persist($point729);


$waySet729 = new WaySet();
$waySet729->setPoint($point729);
$waySet729->setWay($way);
$em->persist($waySet729);


$point730 = new Point();
$point730->setLatitude(46.3985305177324);
$point730->setLongitude(29.94223415851593);
$em->persist($point730);


$waySet730 = new WaySet();
$waySet730->setPoint($point730);
$waySet730->setWay($way);
$em->persist($waySet730);


$point731 = new Point();
$point731->setLatitude(46.388474330806325);
$point731->setLongitude(29.97416317462921);
$em->persist($point731);


$waySet731 = new WaySet();
$waySet731->setPoint($point731);
$waySet731->setWay($way);
$em->persist($waySet731);


$point732 = new Point();
$point732->setLatitude(46.38428925673178);
$point732->setLongitude(29.988008737564087);
$em->persist($point732);


$waySet732 = new WaySet();
$waySet732->setPoint($point732);
$waySet732->setWay($way);
$em->persist($waySet732);


$point733 = new Point();
$point733->setLatitude(46.38970647980316);
$point733->setLongitude(29.99703168869019);
$em->persist($point733);


$waySet733 = new WaySet();
$waySet733->setPoint($point733);
$waySet733->setWay($way);
$em->persist($waySet733);


$point734 = new Point();
$point734->setLatitude(46.38957327584715);
$point734->setLongitude(29.997256994247437);
$em->persist($point734);


$waySet734 = new WaySet();
$waySet734->setPoint($point734);
$waySet734->setWay($way);
$em->persist($waySet734);


$point735 = new Point();
$point735->setLatitude(46.382982974278505);
$point735->setLongitude(30.02183675765991);
$em->persist($point735);


$waySet735 = new WaySet();
$waySet735->setPoint($point735);
$waySet735->setWay($way);
$em->persist($waySet735);


$point736 = new Point();
$point736->setLatitude(46.398563813286565);
$point736->setLongitude(30.058094859123226);
$em->persist($point736);


$waySet736 = new WaySet();
$waySet736->setPoint($point736);
$waySet736->setWay($way);
$em->persist($waySet736);


$point737 = new Point();
$point737->setLatitude(46.39725417283948);
$point737->setLongitude(30.067933201789852);
$em->persist($point737);


$waySet737 = new WaySet();
$waySet737->setPoint($point737);
$waySet737->setWay($way);
$em->persist($waySet737);


$point738 = new Point();
$point738->setLatitude(46.397106188891534);
$point738->setLongitude(30.069397687911987);
$em->persist($point738);


$waySet738 = new WaySet();
$waySet738->setPoint($point738);
$waySet738->setWay($way);
$em->persist($waySet738);


$point739 = new Point();
$point739->setLatitude(46.397124686906984);
$point739->setLongitude(30.069944858551025);
$em->persist($point739);


$waySet739 = new WaySet();
$waySet739->setPoint($point739);
$waySet739->setWay($way);
$em->persist($waySet739);


$point740 = new Point();
$point740->setLatitude(46.39699520066719);
$point740->setLongitude(30.070534944534305);
$em->persist($point740);


$waySet740 = new WaySet();
$waySet740->setPoint($point740);
$waySet740->setWay($way);
$em->persist($waySet740);


$point741 = new Point();
$point741->setLatitude(46.39661783901592);
$point741->setLongitude(30.071296691894528);
$em->persist($point741);


$waySet741 = new WaySet();
$waySet741->setPoint($point741);
$waySet741->setWay($way);
$em->persist($waySet741);


$point742 = new Point();
$point742->setLatitude(46.39392443694013);
$point742->setLongitude(30.075475573539734);
$em->persist($point742);


$waySet742 = new WaySet();
$waySet742->setPoint($point742);
$waySet742->setWay($way);
$em->persist($waySet742);


$point743 = new Point();
$point743->setLatitude(46.38515886086491);
$point743->setLongitude(30.087534785270687);
$em->persist($point743);


$waySet743 = new WaySet();
$waySet743->setPoint($point743);
$waySet743->setWay($way);
$em->persist($waySet743);


$point744 = new Point();
$point744->setLatitude(46.38308658989201);
$point744->setLongitude(30.091091394424442);
$em->persist($point744);


$waySet744 = new WaySet();
$waySet744->setPoint($point744);
$waySet744->setWay($way);
$em->persist($waySet744);


$point745 = new Point();
$point745->setLatitude(46.375229748235874);
$point745->setLongitude(30.096638202667233);
$em->persist($point745);


$waySet745 = new WaySet();
$waySet745->setPoint($point745);
$waySet745->setWay($way);
$em->persist($waySet745);


$point746 = new Point();
$point746->setLatitude(46.391408501737395);
$point746->setLongitude(30.107023715972897);
$em->persist($point746);


$waySet746 = new WaySet();
$waySet746->setPoint($point746);
$waySet746->setWay($way);
$em->persist($waySet746);


$point747 = new Point();
$point747->setLatitude(46.39685461525898);
$point747->setLongitude(30.121566653251644);
$em->persist($point747);


$waySet747 = new WaySet();
$waySet747->setPoint($point747);
$waySet747->setWay($way);
$em->persist($waySet747);


$point748 = new Point();
$point748->setLatitude(46.39981053219107);
$point748->setLongitude(30.130938291549683);
$em->persist($point748);


$waySet748 = new WaySet();
$waySet748->setPoint($point748);
$waySet748->setWay($way);
$em->persist($waySet748);


$point749 = new Point();
$point749->setLatitude(46.405588720805824);
$point749->setLongitude(30.146688222885132);
$em->persist($point749);


$waySet749 = new WaySet();
$waySet749->setPoint($point749);
$waySet749->setWay($way);
$em->persist($waySet749);


$point750 = new Point();
$point750->setLatitude(46.41200615785877);
$point750->setLongitude(30.16080737113953);
$em->persist($point750);


$waySet750 = new WaySet();
$waySet750->setPoint($point750);
$waySet750->setWay($way);
$em->persist($waySet750);


$point751 = new Point();
$point751->setLatitude(46.41327845914538);
$point751->setLongitude(30.16351640224457);
$em->persist($point751);


$waySet751 = new WaySet();
$waySet751->setPoint($point751);
$waySet751->setWay($way);
$em->persist($waySet751);


$point752 = new Point();
$point752->setLatitude(46.41371118276058);
$point752->setLongitude(30.16258835792541);
$em->persist($point752);


$waySet752 = new WaySet();
$waySet752->setPoint($point752);
$waySet752->setWay($way);
$em->persist($waySet752);


$point753 = new Point();
$point753->setLatitude(46.4153606788974);
$point753->setLongitude(30.16129016876221);
$em->persist($point753);


$waySet753 = new WaySet();
$waySet753->setPoint($point753);
$waySet753->setWay($way);
$em->persist($waySet753);


$point754 = new Point();
$point754->setLatitude(46.41861514377075);
$point754->setLongitude(30.161032676696777);
$em->persist($point754);


$waySet754 = new WaySet();
$waySet754->setPoint($point754);
$waySet754->setWay($way);
$em->persist($waySet754);


$point755 = new Point();
$point755->setLatitude(46.42323023362717);
$point755->setLongitude(30.16129016876221);
$em->persist($point755);


$waySet755 = new WaySet();
$waySet755->setPoint($point755);
$waySet755->setWay($way);
$em->persist($waySet755);


$point756 = new Point();
$point756->setLatitude(46.4263954860625);
$point756->setLongitude(30.160560607910156);
$em->persist($point756);


$waySet756 = new WaySet();
$waySet756->setPoint($point756);
$waySet756->setWay($way);
$em->persist($waySet756);


$point757 = new Point();
$point757->setLatitude(46.428702750525915);
$point757->setLongitude(30.15822172164917);
$em->persist($point757);


$waySet757 = new WaySet();
$waySet757->setPoint($point757);
$waySet757->setWay($way);
$em->persist($waySet757);


$point758 = new Point();
$point758->setLatitude(46.42922039260093);
$point758->setLongitude(30.153200626373287);
$em->persist($point758);


$waySet758 = new WaySet();
$waySet758->setPoint($point758);
$waySet758->setWay($way);
$em->persist($waySet758);


$point759 = new Point();
$point759->setLatitude(46.42803720349172);
$point759->setLongitude(30.150175094604492);
$em->persist($point759);


$waySet759 = new WaySet();
$waySet759->setPoint($point759);
$waySet759->setWay($way);
$em->persist($waySet759);


$point760 = new Point();
$point760->setLatitude(46.42479809191633);
$point760->setLongitude(30.149166584014893);
$em->persist($point760);


$waySet760 = new WaySet();
$waySet760->setPoint($point760);
$waySet760->setWay($way);
$em->persist($waySet760);


$point761 = new Point();
$point761->setLatitude(46.42124815956167);
$point761->setLongitude(30.148737430572506);
$em->persist($point761);


$waySet761 = new WaySet();
$waySet761->setPoint($point761);
$waySet761->setWay($way);
$em->persist($waySet761);


$point762 = new Point();
$point762->setLatitude(46.41768320322203);
$point762->setLongitude(30.14843702316284);
$em->persist($point762);


$waySet762 = new WaySet();
$waySet762->setPoint($point762);
$waySet762->setWay($way);
$em->persist($waySet762);


$point763 = new Point();
$point763->setLatitude(46.41500563461537);
$point763->setLongitude(30.14661312103271);
$em->persist($point763);


$waySet763 = new WaySet();
$waySet763->setPoint($point763);
$waySet763->setWay($way);
$em->persist($waySet763);


$point764 = new Point();
$point764->setLatitude(46.412919702775675);
$point764->setLongitude(30.143415927886963);
$em->persist($point764);


$waySet764 = new WaySet();
$waySet764->setPoint($point764);
$waySet764->setWay($way);
$em->persist($waySet764);


$point765 = new Point();
$point765->setLatitude(46.411262735520054);
$point765->setLongitude(30.138373374938965);
$em->persist($point765);


$waySet765 = new WaySet();
$waySet765->setPoint($point765);
$waySet765->setWay($way);
$em->persist($waySet765);


$point766 = new Point();
$point766->setLatitude(46.410996432515724);
$point766->setLongitude(30.134296417236325);
$em->persist($point766);


$waySet766 = new WaySet();
$waySet766->setPoint($point766);
$waySet766->setWay($way);
$em->persist($waySet766);


$point767 = new Point();
$point767->setLatitude(46.41195807612347);
$point767->setLongitude(30.130798816680908);
$em->persist($point767);


$waySet767 = new WaySet();
$waySet767->setPoint($point767);
$waySet767->setWay($way);
$em->persist($waySet767);


$point768 = new Point();
$point768->setLatitude(46.41311202607147);
$point768->setLongitude(30.129833221435543);
$em->persist($point768);


$waySet768 = new WaySet();
$waySet768->setPoint($point768);
$waySet768->setWay($way);
$em->persist($waySet768);


$point769 = new Point();
$point769->setLatitude(46.41450265125888);
$point769->setLongitude(30.13124942779541);
$em->persist($point769);


$waySet769 = new WaySet();
$waySet769->setPoint($point769);
$waySet769->setWay($way);
$em->persist($waySet769);


$point770 = new Point();
$point770->setLatitude(46.41521274406081);
$point770->setLongitude(30.13414621353149);
$em->persist($point770);


$waySet770 = new WaySet();
$waySet770->setPoint($point770);
$waySet770->setWay($way);
$em->persist($waySet770);


$point771 = new Point();
$point771->setLatitude(46.41615952008035);
$point771->setLongitude(30.135498046875);
$em->persist($point771);


$waySet771 = new WaySet();
$waySet771->setPoint($point771);
$waySet771->setWay($way);
$em->persist($waySet771);


$point772 = new Point();
$point772->setLatitude(46.41752048181035);
$point772->setLongitude(30.135068893432617);
$em->persist($point772);


$waySet772 = new WaySet();
$waySet772->setPoint($point772);
$waySet772->setWay($way);
$em->persist($waySet772);


$point773 = new Point();
$point773->setLatitude(46.41953227606158);
$point773->setLongitude(30.131893157958984);
$em->persist($point773);


$waySet773 = new WaySet();
$waySet773->setPoint($point773);
$waySet773->setWay($way);
$em->persist($waySet773);


$point774 = new Point();
$point774->setLatitude(46.42294919765887);
$point774->setLongitude(30.127601623535156);
$em->persist($point774);


$waySet774 = new WaySet();
$waySet774->setPoint($point774);
$waySet774->setWay($way);
$em->persist($waySet774);


$point775 = new Point();
$point775->setLatitude(46.42652860012848);
$point775->setLongitude(30.12322425842285);
$em->persist($point775);


$waySet775 = new WaySet();
$waySet775->setPoint($point775);
$waySet775->setWay($way);
$em->persist($waySet775);


$point776 = new Point();
$point776->setLatitude(46.429205602895586);
$point776->setLongitude(30.118718147277832);
$em->persist($point776);


$waySet776 = new WaySet();
$waySet776->setPoint($point776);
$waySet776->setWay($way);
$em->persist($waySet776);


$point777 = new Point();
$point777->setLatitude(46.43069934287026);
$point777->setLongitude(30.114684104919434);
$em->persist($point777);


$waySet777 = new WaySet();
$waySet777->setPoint($point777);
$waySet777->setWay($way);
$em->persist($waySet777);


$point778 = new Point();
$point778->setLatitude(46.431616271883854);
$point778->setLongitude(30.111615657806393);
$em->persist($point778);


$waySet778 = new WaySet();
$waySet778->setPoint($point778);
$waySet778->setWay($way);
$em->persist($waySet778);


$point779 = new Point();
$point779->setLatitude(46.43124654429889);
$point779->setLongitude(30.110092163085938);
$em->persist($point779);


$waySet779 = new WaySet();
$waySet779->setPoint($point779);
$waySet779->setWay($way);
$em->persist($waySet779);


$point780 = new Point();
$point780->setLatitude(46.42785972291015);
$point780->setLongitude(30.107495784759518);
$em->persist($point780);


$waySet780 = new WaySet();
$waySet780->setPoint($point780);
$waySet780->setWay($way);
$em->persist($waySet780);


$point781 = new Point();
$point781->setLatitude(46.42756392065666);
$point781->setLongitude(30.10674476623535);
$em->persist($point781);


$waySet781 = new WaySet();
$waySet781->setPoint($point781);
$waySet781->setWay($way);
$em->persist($waySet781);


$point782 = new Point();
$point782->setLatitude(46.42756392065666);
$point782->setLongitude(30.10539293289185);
$em->persist($point782);


$waySet782 = new WaySet();
$waySet782->setPoint($point782);
$waySet782->setWay($way);
$em->persist($waySet782);


$point783 = new Point();
$point783->setLatitude(46.42834779311896);
$point783->setLongitude(30.104470252990723);
$em->persist($point783);


$waySet783 = new WaySet();
$waySet783->setPoint($point783);
$waySet783->setWay($way);
$em->persist($waySet783);


$point784 = new Point();
$point784->setLatitude(46.43368670000938);
$point784->setLongitude(30.102131366729736);
$em->persist($point784);


$waySet784 = new WaySet();
$waySet784->setPoint($point784);
$waySet784->setWay($way);
$em->persist($waySet784);


$point785 = new Point();
$point785->setLatitude(46.43682177000958);
$point785->setLongitude(30.100393295288086);
$em->persist($point785);


$waySet785 = new WaySet();
$waySet785->setPoint($point785);
$waySet785->setWay($way);
$em->persist($waySet785);


$point786 = new Point();
$point786->setLatitude(46.439069445032544);
$point786->setLongitude(30.09796857833862);
$em->persist($point786);


$waySet786 = new WaySet();
$waySet786->setPoint($point786);
$waySet786->setWay($way);
$em->persist($waySet786);


$point787 = new Point();
$point787->setLatitude(46.440134100840815);
$point787->setLongitude(30.09477138519287);
$em->persist($point787);


$waySet787 = new WaySet();
$waySet787->setPoint($point787);
$waySet787->setWay($way);
$em->persist($waySet787);


$point788 = new Point();
$point788->setLatitude(46.44007495384168);
$point788->setLongitude(30.091874599456784);
$em->persist($point788);


$waySet788 = new WaySet();
$waySet788->setPoint($point788);
$waySet788->setWay($way);
$em->persist($waySet788);


$point789 = new Point();
$point789->setLatitude(46.439527841055806);
$point789->setLongitude(30.09022235870361);
$em->persist($point789);


$waySet789 = new WaySet();
$waySet789->setPoint($point789);
$waySet789->setWay($way);
$em->persist($waySet789);


$point790 = new Point();
$point790->setLatitude(46.43837445015769);
$point790->setLongitude(30.08992195129394);
$em->persist($point790);


$waySet790 = new WaySet();
$waySet790->setPoint($point790);
$waySet790->setWay($way);
$em->persist($waySet790);


$point791 = new Point();
$point791->setLatitude(46.4366738934023);
$point791->setLongitude(30.091617107391357);
$em->persist($point791);


$waySet791 = new WaySet();
$waySet791->setPoint($point791);
$waySet791->setWay($way);
$em->persist($waySet791);


$point792 = new Point();
$point792->setLatitude(46.43374585394294);
$point792->setLongitude(30.095629692077633);
$em->persist($point792);


$waySet792 = new WaySet();
$waySet792->setPoint($point792);
$waySet792->setWay($way);
$em->persist($waySet792);


$point793 = new Point();
$point793->setLatitude(46.43140922474528);
$point793->setLongitude(30.097861289978027);
$em->persist($point793);


$waySet793 = new WaySet();
$waySet793->setPoint($point793);
$waySet793->setWay($way);
$em->persist($waySet793);


$point794 = new Point();
$point794->setLatitude(46.42978239843062);
$point794->setLongitude(30.09833335876465);
$em->persist($point794);


$waySet794 = new WaySet();
$waySet794->setPoint($point794);
$waySet794->setWay($way);
$em->persist($waySet794);


$point795 = new Point();
$point795->setLatitude(46.42818510353493);
$point795->setLongitude(30.098376274108887);
$em->persist($point795);


$waySet795 = new WaySet();
$waySet795->setPoint($point795);
$waySet795->setWay($way);
$em->persist($waySet795);


$point796 = new Point();
$point796->setLatitude(46.42670608504413);
$point796->setLongitude(30.09753942489624);
$em->persist($point796);


$waySet796 = new WaySet();
$waySet796->setPoint($point796);
$waySet796->setWay($way);
$em->persist($waySet796);


$point797 = new Point();
$point797->setLatitude(46.42574470150518);
$point797->setLongitude(30.09550094604492);
$em->persist($point797);


$waySet797 = new WaySet();
$waySet797->setPoint($point797);
$waySet797->setWay($way);
$em->persist($waySet797);


$point798 = new Point();
$point798->setLatitude(46.42571512020432);
$point798->setLongitude(30.09232521057129);
$em->persist($point798);


$waySet798 = new WaySet();
$waySet798->setPoint($point798);
$waySet798->setWay($way);
$em->persist($waySet798);


$point799 = new Point();
$point799->setLatitude(46.427120214266694);
$point799->setLongitude(30.090887546539303);
$em->persist($point799);


$waySet799 = new WaySet();
$waySet799->setPoint($point799);
$waySet799->setWay($way);
$em->persist($waySet799);


$point800 = new Point();
$point800->setLatitude(46.430935971189264);
$point800->setLongitude(30.08934259414673);
$em->persist($point800);


$waySet800 = new WaySet();
$waySet800->setPoint($point800);
$waySet800->setWay($way);
$em->persist($waySet800);


$point801 = new Point();
$point801->setLatitude(46.43339092937847);
$point801->setLongitude(30.087625980377194);
$em->persist($point801);


$waySet801 = new WaySet();
$waySet801->setPoint($point801);
$waySet801->setWay($way);
$em->persist($waySet801);


$point802 = new Point();
$point802->setLatitude(46.4345740022709);
$point802->setLongitude(30.085630416870114);
$em->persist($point802);


$waySet802 = new WaySet();
$waySet802->setPoint($point802);
$waySet802->setWay($way);
$em->persist($waySet802);


$point803 = new Point();
$point803->setLatitude(46.434943707282756);
$point803->setLongitude(30.08296966552734);
$em->persist($point803);


$waySet803 = new WaySet();
$waySet803->setPoint($point803);
$waySet803->setWay($way);
$em->persist($waySet803);


$point804 = new Point();
$point804->setLatitude(46.434174718041014);
$point804->setLongitude(30.080544948577877);
$em->persist($point804);


$waySet804 = new WaySet();
$waySet804->setPoint($point804);
$waySet804->setWay($way);
$em->persist($waySet804);


$point805 = new Point();
$point805->setLatitude(46.431690217099856);
$point805->setLongitude(30.078892707824703);
$em->persist($point805);


$waySet805 = new WaySet();
$waySet805->setPoint($point805);
$waySet805->setWay($way);
$em->persist($waySet805);


$point806 = new Point();
$point806->setLatitude(46.42785972291015);
$point806->setLongitude(30.079257488250732);
$em->persist($point806);


$waySet806 = new WaySet();
$waySet806->setPoint($point806);
$waySet806->setWay($way);
$em->persist($waySet806);


$point807 = new Point();
$point807->setLatitude(46.42544888777439);
$point807->setLongitude(30.07983684539795);
$em->persist($point807);


$waySet807 = new WaySet();
$waySet807->setPoint($point807);
$waySet807->setWay($way);
$em->persist($waySet807);


$point808 = new Point();
$point808->setLatitude(46.4242508257494);
$point808->setLongitude(30.07919311523437);
$em->persist($point808);


$waySet808 = new WaySet();
$waySet808->setPoint($point808);
$waySet808->setWay($way);
$em->persist($waySet808);


$point809 = new Point();
$point809->setLatitude(46.42392542164024);
$point809->setLongitude(30.07833480834961);
$em->persist($point809);


$waySet809 = new WaySet();
$waySet809->setPoint($point809);
$waySet809->setWay($way);
$em->persist($waySet809);


$point810 = new Point();
$point810->setLatitude(46.424043750631945);
$point810->setLongitude(30.07672548294067);
$em->persist($point810);


$waySet810 = new WaySet();
$waySet810->setPoint($point810);
$waySet810->setWay($way);
$em->persist($waySet810);


$point811 = new Point();
$point811->setLatitude(46.425685538887436);
$point811->setLongitude(30.07200479507446);
$em->persist($point811);


$waySet811 = new WaySet();
$waySet811->setPoint($point811);
$waySet811->setWay($way);
$em->persist($waySet811);


$point812 = new Point();
$point812->setLatitude(46.426025723062565);
$point812->setLongitude(30.06970882415772);
$em->persist($point812);


$waySet812 = new WaySet();
$waySet812->setPoint($point812);
$waySet812->setWay($way);
$em->persist($waySet812);


$point813 = new Point();
$point813->setLatitude(46.42635111463494);
$point813->setLongitude(30.06314277648926);
$em->persist($point813);


$waySet813 = new WaySet();
$waySet813->setPoint($point813);
$waySet813->setWay($way);
$em->persist($waySet813);


$point814 = new Point();
$point814->setLatitude(46.42638069559064);
$point814->setLongitude(30.059044361114502);
$em->persist($point814);


$waySet814 = new WaySet();
$waySet814->setPoint($point814);
$waySet814->setWay($way);
$em->persist($waySet814);


$point815 = new Point();
$point815->setLatitude(46.42703147255529);
$point815->setLongitude(30.057156085968014);
$em->persist($point815);


$waySet815 = new WaySet();
$waySet815->setPoint($point815);
$waySet815->setWay($way);
$em->persist($waySet815);


$point816 = new Point();
$point816->setLatitude(46.42822947346964);
$point816->setLongitude(30.056233406066898);
$em->persist($point816);


$waySet816 = new WaySet();
$waySet816->setPoint($point816);
$waySet816->setWay($way);
$em->persist($waySet816);


$point817 = new Point();
$point817->setLatitude(46.432695862077395);
$point817->setLongitude(30.055074691772464);
$em->persist($point817);


$waySet817 = new WaySet();
$waySet817->setPoint($point817);
$waySet817->setWay($way);
$em->persist($waySet817);


$point818 = new Point();
$point818->setLatitude(46.43455921401828);
$point818->setLongitude(30.05509614944458);
$em->persist($point818);


$waySet818 = new WaySet();
$waySet818->setPoint($point818);
$waySet818->setWay($way);
$em->persist($waySet818);


$point819 = new Point();
$point819->setLatitude(46.436289412345324);
$point819->setLongitude(30.056555271148685);
$em->persist($point819);


$waySet819 = new WaySet();
$waySet819->setPoint($point819);
$waySet819->setWay($way);
$em->persist($waySet819);


$point820 = new Point();
$point820->setLatitude(46.43871455514019);
$point820->setLongitude(30.061533451080322);
$em->persist($point820);


$waySet820 = new WaySet();
$waySet820->setPoint($point820);
$waySet820->setWay($way);
$em->persist($waySet820);


$point821 = new Point();
$point821->setLatitude(46.44023760793482);
$point821->setLongitude(30.06374359130859);
$em->persist($point821);


$waySet821 = new WaySet();
$waySet821->setPoint($point821);
$waySet821->setWay($way);
$em->persist($waySet821);


$point822 = new Point();
$point822->setLatitude(46.442366853097006);
$point822->setLongitude(30.064880847930905);
$em->persist($point822);


$waySet822 = new WaySet();
$waySet822->setPoint($point822);
$waySet822->setWay($way);
$em->persist($waySet822);


$point823 = new Point();
$point823->setLatitude(46.44276607730102);
$point823->setLongitude(30.064172744750977);
$em->persist($point823);


$waySet823 = new WaySet();
$waySet823->setPoint($point823);
$waySet823->setWay($way);
$em->persist($waySet823);


$point824 = new Point();
$point824->setLatitude(46.443180084496746);
$point824->setLongitude(30.060331821441647);
$em->persist($point824);


$waySet824 = new WaySet();
$waySet824->setPoint($point824);
$waySet824->setWay($way);
$em->persist($waySet824);


$point825 = new Point();
$point825->setLatitude(46.443653231725165);
$point825->setLongitude(30.045547485351566);
$em->persist($point825);


$waySet825 = new WaySet();
$waySet825->setPoint($point825);
$waySet825->setWay($way);
$em->persist($waySet825);


$point826 = new Point();
$point826->setLatitude(46.441908480958794);
$point826->setLongitude(30.033380985260013);
$em->persist($point826);


$waySet826 = new WaySet();
$waySet826->setPoint($point826);
$waySet826->setWay($way);
$em->persist($waySet826);


$point827 = new Point();
$point827->setLatitude(46.44186412216012);
$point827->setLongitude(30.026793479919437);
$em->persist($point827);


$waySet827 = new WaySet();
$waySet827->setPoint($point827);
$waySet827->setWay($way);
$em->persist($waySet827);


$point828 = new Point();
$point828->setLatitude(46.4419971984478);
$point828->setLongitude(30.022995471954342);
$em->persist($point828);


$waySet828 = new WaySet();
$waySet828->setPoint($point828);
$waySet828->setWay($way);
$em->persist($waySet828);


$point829 = new Point();
$point829->setLatitude(46.44248514205501);
$point829->setLongitude(30.021944046020508);
$em->persist($point829);


$waySet829 = new WaySet();
$waySet829->setPoint($point829);
$waySet829->setWay($way);
$em->persist($waySet829);


$point830 = new Point();
$point830->setLatitude(46.44372716060841);
$point830->setLongitude(30.021772384643555);
$em->persist($point830);


$waySet830 = new WaySet();
$waySet830->setPoint($point830);
$waySet830->setWay($way);
$em->persist($waySet830);


$point831 = new Point();
$point831->setLatitude(46.44585626939521);
$point831->setLongitude(30.022544860839844);
$em->persist($point831);


$waySet831 = new WaySet();
$waySet831->setPoint($point831);
$waySet831->setWay($way);
$em->persist($waySet831);


$point832 = new Point();
$point832->setLatitude(46.451089974774995);
$point832->setLongitude(30.02634286880493);
$em->persist($point832);


$waySet832 = new WaySet();
$waySet832->setPoint($point832);
$waySet832->setWay($way);
$em->persist($waySet832);


$point833 = new Point();
$point833->setLatitude(46.45202134420763);
$point833->setLongitude(30.02647161483765);
$em->persist($point833);


$waySet833 = new WaySet();
$waySet833->setPoint($point833);
$waySet833->setWay($way);
$em->persist($waySet833);


$point834 = new Point();
$point834->setLatitude(46.45307096368541);
$point834->setLongitude(30.025935173034664);
$em->persist($point834);


$waySet834 = new WaySet();
$waySet834->setPoint($point834);
$waySet834->setWay($way);
$em->persist($waySet834);


$point835 = new Point();
$point835->setLatitude(46.45369185582579);
$point835->setLongitude(30.025033950805664);
$em->persist($point835);


$waySet835 = new WaySet();
$waySet835->setPoint($point835);
$waySet835->setWay($way);
$em->persist($waySet835);


$point836 = new Point();
$point836->setLatitude(46.454371872428965);
$point836->setLongitude(30.023145675659176);
$em->persist($point836);


$waySet836 = new WaySet();
$waySet836->setPoint($point836);
$waySet836->setWay($way);
$em->persist($waySet836);


$point837 = new Point();
$point837->setLatitude(46.455081445918424);
$point837->setLongitude(30.020291805267334);
$em->persist($point837);


$waySet837 = new WaySet();
$waySet837->setPoint($point837);
$waySet837->setWay($way);
$em->persist($waySet837);


$point838 = new Point();
$point838->setLatitude(46.45511101127984);
$point838->setLongitude(30.01715898513794);
$em->persist($point838);


$waySet838 = new WaySet();
$waySet838->setPoint($point838);
$waySet838->setWay($way);
$em->persist($waySet838);


$point839 = new Point();
$point839->setLatitude(46.45457883231846);
$point839->setLongitude(30.013618469238278);
$em->persist($point839);


$waySet839 = new WaySet();
$waySet839->setPoint($point839);
$waySet839->setWay($way);
$em->persist($waySet839);


$point840 = new Point();
$point840->setLatitude(46.45434230666626);
$point840->setLongitude(30.01188039779663);
$em->persist($point840);


$waySet840 = new WaySet();
$waySet840->setPoint($point840);
$waySet840->setWay($way);
$em->persist($waySet840);


$point841 = new Point();
$point841->setLatitude(46.453440543193146);
$point841->setLongitude(30.009605884552002);
$em->persist($point841);


$waySet841 = new WaySet();
$waySet841->setPoint($point841);
$waySet841->setWay($way);
$em->persist($waySet841);


$point842 = new Point();
$point842->setLatitude(46.453440543193146);
$point842->setLongitude(30.008747577667236);
$em->persist($point842);


$waySet842 = new WaySet();
$waySet842->setPoint($point842);
$waySet842->setWay($way);
$em->persist($waySet842);


$point843 = new Point();
$point843->setLatitude(46.4534701094454);
$point843->setLongitude(30.008296966552734);
$em->persist($point843);


$waySet843 = new WaySet();
$waySet843->setPoint($point843);
$waySet843->setWay($way);
$em->persist($waySet843);


$point844 = new Point();
$point844->setLatitude(46.45568753261925);
$point844->setLongitude(30.002868175506592);
$em->persist($point844);


$waySet844 = new WaySet();
$waySet844->setPoint($point844);
$waySet844->setWay($way);
$em->persist($waySet844);


$point845 = new Point();
$point845->setLatitude(46.460935074430516);
$point845->setLongitude(29.994778633117676);
$em->persist($point845);


$waySet845 = new WaySet();
$waySet845->setPoint($point845);
$waySet845->setWay($way);
$em->persist($waySet845);


$point846 = new Point();
$point846->setLatitude(46.46198452210705);
$point846->setLongitude(29.994113445281982);
$em->persist($point846);


$waySet846 = new WaySet();
$waySet846->setPoint($point846);
$waySet846->setWay($way);
$em->persist($waySet846);


$point847 = new Point();
$point847->setLatitude(46.46273833823596);
$point847->setLongitude(29.99394178390503);
$em->persist($point847);


$waySet847 = new WaySet();
$waySet847->setPoint($point847);
$waySet847->setWay($way);
$em->persist($waySet847);


$point848 = new Point();
$point848->setLatitude(46.463433022289784);
$point848->setLongitude(29.99385595321655);
$em->persist($point848);


$waySet848 = new WaySet();
$waySet848->setPoint($point848);
$waySet848->setWay($way);
$em->persist($waySet848);


$point849 = new Point();
$point849->setLatitude(46.463876433008494);
$point849->setLongitude(29.994199275970455);
$em->persist($point849);


$waySet849 = new WaySet();
$waySet849->setPoint($point849);
$waySet849->setWay($way);
$em->persist($waySet849);


$point850 = new Point();
$point850->setLatitude(46.46439374094915);
$point850->setLongitude(29.99546527862549);
$em->persist($point850);


$waySet850 = new WaySet();
$waySet850->setPoint($point850);
$waySet850->setWay($way);
$em->persist($waySet850);


$point851 = new Point();
$point851->setLatitude(46.464645003032395);
$point851->setLongitude(29.997653961181637);
$em->persist($point851);


$waySet851 = new WaySet();
$waySet851->setPoint($point851);
$waySet851->setWay($way);
$em->persist($waySet851);


$point852 = new Point();
$point852->setLatitude(46.46510318384574);
$point852->setLongitude(30.006086826324466);
$em->persist($point852);


$waySet852 = new WaySet();
$waySet852->setPoint($point852);
$waySet852->setWay($way);
$em->persist($waySet852);


$point853 = new Point();
$point853->setLatitude(46.4648075837624);
$point853->setLongitude(30.01657962799072);
$em->persist($point853);


$waySet853 = new WaySet();
$waySet853->setPoint($point853);
$waySet853->setWay($way);
$em->persist($waySet853);


$point854 = new Point();
$point854->setLatitude(46.46476324361147);
$point854->setLongitude(30.01861810684204);
$em->persist($point854);


$waySet854 = new WaySet();
$waySet854->setPoint($point854);
$waySet854->setWay($way);
$em->persist($waySet854);


$point855 = new Point();
$point855->setLatitude(46.46533966275673);
$point855->setLongitude(30.021064281463623);
$em->persist($point855);


$waySet855 = new WaySet();
$waySet855->setPoint($point855);
$waySet855->setWay($way);
$em->persist($waySet855);


$point856 = new Point();
$point856->setLatitude(46.46582739726632);
$point856->setLongitude(30.02220153808594);
$em->persist($point856);


$waySet856 = new WaySet();
$waySet856->setPoint($point856);
$waySet856->setWay($way);
$em->persist($waySet856);


$point857 = new Point();
$point857->setLatitude(46.466714176088146);
$point857->setLongitude(30.022995471954342);
$em->persist($point857);


$waySet857 = new WaySet();
$waySet857->setPoint($point857);
$waySet857->setWay($way);
$em->persist($waySet857);


$point858 = new Point();
$point858->setLatitude(46.46867981764148);
$point858->setLongitude(30.023338794708256);
$em->persist($point858);


$waySet858 = new WaySet();
$waySet858->setPoint($point858);
$waySet858->setWay($way);
$em->persist($waySet858);


$point859 = new Point();
$point859->setLatitude(46.470689723573074);
$point859->setLongitude(30.021965503692623);
$em->persist($point859);


$waySet859 = new WaySet();
$waySet859->setPoint($point859);
$waySet859->setWay($way);
$em->persist($waySet859);


$point860 = new Point();
$point860->setLatitude(46.471532088545864);
$point860->setLongitude(30.019991397857666);
$em->persist($point860);


$waySet860 = new WaySet();
$waySet860->setPoint($point860);
$waySet860->setWay($way);
$em->persist($waySet860);


$point861 = new Point();
$point861->setLatitude(46.471901542754246);
$point861->setLongitude(30.014348030090332);
$em->persist($point861);


$waySet861 = new WaySet();
$waySet861->setPoint($point861);
$waySet861->setWay($way);
$em->persist($waySet861);


$point862 = new Point();
$point862->setLatitude(46.470748837329836);
$point862->setLongitude(30.003919601440426);
$em->persist($point862);


$waySet862 = new WaySet();
$waySet862->setPoint($point862);
$waySet862->setWay($way);
$em->persist($waySet862);


$point863 = new Point();
$point863->setLatitude(46.47060105281751);
$point863->setLongitude(30.001044273376465);
$em->persist($point863);


$waySet863 = new WaySet();
$waySet863->setPoint($point863);
$waySet863->setWay($way);
$em->persist($waySet863);


$point864 = new Point();
$point864->setLatitude(46.47098529171489);
$point864->setLongitude(29.99932765960693);
$em->persist($point864);


$waySet864 = new WaySet();
$waySet864->setPoint($point864);
$waySet864->setWay($way);
$em->persist($waySet864);


$point865 = new Point();
$point865->setLatitude(46.47249266427107);
$point865->setLongitude(29.996280670166016);
$em->persist($point865);


$waySet865 = new WaySet();
$waySet865->setPoint($point865);
$waySet865->setWay($way);
$em->persist($waySet865);


$point866 = new Point();
$point866->setLatitude(46.474369432534225);
$point866->setLongitude(29.994392395019528);
$em->persist($point866);


$waySet866 = new WaySet();
$waySet866->setPoint($point866);
$waySet866->setWay($way);
$em->persist($waySet866);


$point867 = new Point();
$point867->setLatitude(46.475270849399784);
$point867->setLongitude(29.99437093734741);
$em->persist($point867);


$waySet867 = new WaySet();
$waySet867->setPoint($point867);
$waySet867->setWay($way);
$em->persist($waySet867);


$point868 = new Point();
$point868->setLatitude(46.476320020718504);
$point868->setLongitude(29.99415636062622);
$em->persist($point868);


$waySet868 = new WaySet();
$waySet868->setPoint($point868);
$waySet868->setWay($way);
$em->persist($waySet868);


$point869 = new Point();
$point869->setLatitude(46.47714752185569);
$point869->setLongitude(29.993276596069336);
$em->persist($point869);


$waySet869 = new WaySet();
$waySet869->setPoint($point869);
$waySet869->setWay($way);
$em->persist($waySet869);


$point870 = new Point();
$point870->setLatitude(46.47793068098418);
$point870->setLongitude(29.991731643676754);
$em->persist($point870);


$waySet870 = new WaySet();
$waySet870->setPoint($point870);
$waySet870->setWay($way);
$em->persist($waySet870);


$point871 = new Point();
$point871->setLatitude(46.48110753165496);
$point871->setLongitude(29.989736080169678);
$em->persist($point871);


$waySet871 = new WaySet();
$waySet871->setPoint($point871);
$waySet871->setWay($way);
$em->persist($waySet871);


$point872 = new Point();
$point872->setLatitude(46.482614623844725);
$point872->setLongitude(29.989564418792725);
$em->persist($point872);


$waySet872 = new WaySet();
$waySet872->setPoint($point872);
$waySet872->setWay($way);
$em->persist($waySet872);


$point873 = new Point();
$point873->setLatitude(46.48431374634381);
$point873->setLongitude(29.989500045776367);
$em->persist($point873);


$waySet873 = new WaySet();
$waySet873->setPoint($point873);
$waySet873->setWay($way);
$em->persist($waySet873);


$point874 = new Point();
$point874->setLatitude(46.48751977208183);
$point874->setLongitude(29.990336894989014);
$em->persist($point874);


$waySet874 = new WaySet();
$waySet874->setPoint($point874);
$waySet874->setWay($way);
$em->persist($waySet874);


$point875 = new Point();
$point875->setLatitude(46.48951420888333);
$point875->setLongitude(29.9925684928894);
$em->persist($point875);


$waySet875 = new WaySet();
$waySet875->setPoint($point875);
$waySet875->setWay($way);
$em->persist($waySet875);


$point876 = new Point();
$point876->setLatitude(46.49406420576512);
$point876->setLongitude(29.99982118606567);
$em->persist($point876);


$waySet876 = new WaySet();
$waySet876->setPoint($point876);
$waySet876->setWay($way);
$em->persist($waySet876);


$point877 = new Point();
$point877->setLatitude(46.49521641729747);
$point877->setLongitude(30.000958442687985);
$em->persist($point877);


$waySet877 = new WaySet();
$waySet877->setPoint($point877);
$waySet877->setWay($way);
$em->persist($waySet877);


$point878 = new Point();
$point878->setLatitude(46.495807285536756);
$point878->setLongitude(30.001065731048584);
$em->persist($point878);


$waySet878 = new WaySet();
$waySet878->setPoint($point878);
$waySet878->setWay($way);
$em->persist($waySet878);


$point879 = new Point();
$point879->setLatitude(46.49653109038051);
$point879->setLongitude(30.00029325485229);
$em->persist($point879);


$waySet879 = new WaySet();
$waySet879->setPoint($point879);
$waySet879->setWay($way);
$em->persist($waySet879);


$point880 = new Point();
$point880->setLatitude(46.49672311861996);
$point880->setLongitude(29.999370574951172);
$em->persist($point880);


$waySet880 = new WaySet();
$waySet880->setPoint($point880);
$waySet880->setWay($way);
$em->persist($waySet880);


$point881 = new Point();
$point881->setLatitude(46.49654586180764);
$point881->setLongitude(29.998168945312496);
$em->persist($point881);


$waySet881 = new WaySet();
$waySet881->setPoint($point881);
$waySet881->setWay($way);
$em->persist($waySet881);


$point882 = new Point();
$point882->setLatitude(46.49385000990472);
$point882->setLongitude(29.991629719734192);
$em->persist($point882);


$waySet882 = new WaySet();
$waySet882->setPoint($point882);
$waySet882->setWay($way);
$em->persist($waySet882);


$point883 = new Point();
$point883->setLatitude(46.49348809084429);
$point883->setLongitude(29.990015029907227);
$em->persist($point883);


$waySet883 = new WaySet();
$waySet883->setPoint($point883);
$waySet883->setWay($way);
$em->persist($waySet883);


$point884 = new Point();
$point884->setLatitude(46.49341053644653);
$point884->setLongitude(29.988711476325985);
$em->persist($point884);


$waySet884 = new WaySet();
$waySet884->setPoint($point884);
$waySet884->setWay($way);
$em->persist($waySet884);


$point885 = new Point();
$point885->setLatitude(46.49386108902162);
$point885->setLongitude(29.987692236900326);
$em->persist($point885);


$waySet885 = new WaySet();
$waySet885->setPoint($point885);
$waySet885->setWay($way);
$em->persist($waySet885);


$point886 = new Point();
$point886->setLatitude(46.49485820030152);
$point886->setLongitude(29.987032413482666);
$em->persist($point886);


$waySet886 = new WaySet();
$waySet886->setPoint($point886);
$waySet886->setWay($way);
$em->persist($waySet886);


$point887 = new Point();
$point887->setLatitude(46.49576666355084);
$point887->setLongitude(29.987472295761105);
$em->persist($point887);


$waySet887 = new WaySet();
$waySet887->setPoint($point887);
$waySet887->setWay($way);
$em->persist($waySet887);


$point888 = new Point();
$point888->setLatitude(46.49896462887215);
$point888->setLongitude(29.99146342277527);
$em->persist($point888);


$waySet888 = new WaySet();
$waySet888->setPoint($point888);
$waySet888->setWay($way);
$em->persist($waySet888);


$point889 = new Point();
$point889->setLatitude(46.49976224449665);
$point889->setLongitude(29.992037415504456);
$em->persist($point889);


$waySet889 = new WaySet();
$waySet889->setPoint($point889);
$waySet889->setWay($way);
$em->persist($waySet889);


$point890 = new Point();
$point890->setLatitude(46.50097341621931);
$point890->setLongitude(29.99245047569275);
$em->persist($point890);


$waySet890 = new WaySet();
$waySet890->setPoint($point890);
$waySet890->setWay($way);
$em->persist($waySet890);


$point891 = new Point();
$point891->setLatitude(46.50178207987903);
$point891->setLongitude(29.99233782291412);
$em->persist($point891);


$waySet891 = new WaySet();
$waySet891->setPoint($point891);
$waySet891->setWay($way);
$em->persist($waySet891);


$point892 = new Point();
$point892->setLatitude(46.502764276184024);
$point892->setLongitude(29.99195158481598);
$em->persist($point892);


$waySet892 = new WaySet();
$waySet892->setPoint($point892);
$waySet892->setWay($way);
$em->persist($waySet892);


$point893 = new Point();
$point893->setLatitude(46.50666334661664);
$point893->setLongitude(29.98960733413696);
$em->persist($point893);


$waySet893 = new WaySet();
$waySet893->setPoint($point893);
$waySet893->setWay($way);
$em->persist($waySet893);


$point894 = new Point();
$point894->setLatitude(46.5095136264582);
$point894->setLongitude(29.987461566925045);
$em->persist($point894);


$waySet894 = new WaySet();
$waySet894->setPoint($point894);
$waySet894->setWay($way);
$em->persist($waySet894);


$point895 = new Point();
$point895->setLatitude(46.51018556185183);
$point895->setLongitude(29.98676955699921);
$em->persist($point895);


$waySet895 = new WaySet();
$waySet895->setPoint($point895);
$waySet895->setWay($way);
$em->persist($waySet895);


$point896 = new Point();
$point896->setLatitude(46.51050306689514);
$point896->setLongitude(29.98582005500793);
$em->persist($point896);


$waySet896 = new WaySet();
$waySet896->setPoint($point896);
$waySet896->setWay($way);
$em->persist($waySet896);


$point897 = new Point();
$point897->setLatitude(46.510477223530714);
$point897->setLongitude(29.984945654869076);
$em->persist($point897);


$waySet897 = new WaySet();
$waySet897->setPoint($point897);
$waySet897->setWay($way);
$em->persist($waySet897);


$point898 = new Point();
$point898->setLatitude(46.51006741996692);
$point898->setLongitude(29.984055161476135);
$em->persist($point898);


$waySet898 = new WaySet();
$waySet898->setPoint($point898);
$waySet898->setWay($way);
$em->persist($waySet898);


$point899 = new Point();
$point899->setLatitude(46.50762330211521);
$point899->setLongitude(29.983094930648804);
$em->persist($point899);


$waySet899 = new WaySet();
$waySet899->setPoint($point899);
$waySet899->setWay($way);
$em->persist($waySet899);


$point900 = new Point();
$point900->setLatitude(46.50534153399613);
$point900->setLongitude(29.982622861862183);
$em->persist($point900);


$waySet900 = new WaySet();
$waySet900->setPoint($point900);
$waySet900->setWay($way);
$em->persist($waySet900);


$point901 = new Point();
$point901->setLatitude(46.50135374811452);
$point901->setLongitude(29.982799887657162);
$em->persist($point901);


$waySet901 = new WaySet();
$waySet901->setPoint($point901);
$waySet901->setWay($way);
$em->persist($waySet901);


$point902 = new Point();
$point902->setLatitude(46.49964038731124);
$point902->setLongitude(29.983116388320923);
$em->persist($point902);


$waySet902 = new WaySet();
$waySet902->setPoint($point902);
$waySet902->setWay($way);
$em->persist($waySet902);


$point903 = new Point();
$point903->setLatitude(46.499182497264414);
$point903->setLongitude(29.982821345329288);
$em->persist($point903);


$waySet903 = new WaySet();
$waySet903->setPoint($point903);
$waySet903->setWay($way);
$em->persist($waySet903);


$point904 = new Point();
$point904->setLatitude(46.49887231149345);
$point904->setLongitude(29.982279539108276);
$em->persist($point904);


$waySet904 = new WaySet();
$waySet904->setPoint($point904);
$waySet904->setWay($way);
$em->persist($waySet904);


$point905 = new Point();
$point905->setLatitude(46.498827999096015);
$point905->setLongitude(29.981700181961056);
$em->persist($point905);


$waySet905 = new WaySet();
$waySet905->setPoint($point905);
$waySet905->setWay($way);
$em->persist($waySet905);


$point906 = new Point();
$point906->setLatitude(46.49981024876741);
$point906->setLongitude(29.979844093322754);
$em->persist($point906);


$waySet906 = new WaySet();
$waySet906->setPoint($point906);
$waySet906->setWay($way);
$em->persist($waySet906);


$point907 = new Point();
$point907->setLatitude(46.50104357473021);
$point907->setLongitude(29.976743459701538);
$em->persist($point907);


$waySet907 = new WaySet();
$waySet907->setPoint($point907);
$waySet907->setWay($way);
$em->persist($waySet907);


$point908 = new Point();
$point908->setLatitude(46.501686074776934);
$point908->setLongitude(29.974479675292965);
$em->persist($point908);


$waySet908 = new WaySet();
$waySet908->setPoint($point908);
$waySet908->setWay($way);
$em->persist($waySet908);


$point909 = new Point();
$point909->setLatitude(46.5019593196221);
$point909->setLongitude(29.973074197769165);
$em->persist($point909);


$waySet909 = new WaySet();
$waySet909->setPoint($point909);
$waySet909->setWay($way);
$em->persist($waySet909);


$point910 = new Point();
$point910->setLatitude(46.5019593196221);
$point910->setLongitude(29.972269535064697);
$em->persist($point910);


$waySet910 = new WaySet();
$waySet910->setPoint($point910);
$waySet910->setWay($way);
$em->persist($waySet910);


$point911 = new Point();
$point911->setLatitude(46.5018559298422);
$point911->setLongitude(29.971604347229004);
$em->persist($point911);


$waySet911 = new WaySet();
$waySet911->setPoint($point911);
$waySet911->setWay($way);
$em->persist($waySet911);


$point912 = new Point();
$point912->setLatitude(46.50159006950536);
$point912->setLongitude(29.97088551521301);
$em->persist($point912);


$waySet912 = new WaySet();
$waySet912->setPoint($point912);
$waySet912->setWay($way);
$em->persist($waySet912);


$point913 = new Point();
$point913->setLatitude(46.50077032528271);
$point913->setLongitude(29.970284700393677);
$em->persist($point913);


$waySet913 = new WaySet();
$waySet913->setPoint($point913);
$waySet913->setWay($way);
$em->persist($waySet913);


$point914 = new Point();
$point914->setLatitude(46.49849565496408);
$point914->setLongitude(29.96940493583679);
$em->persist($point914);


$waySet914 = new WaySet();
$waySet914->setPoint($point914);
$waySet914->setWay($way);
$em->persist($waySet914);


$point915 = new Point();
$point915->setLatitude(46.49608055992615);
$point915->setLongitude(29.968128204345703);
$em->persist($point915);


$waySet915 = new WaySet();
$waySet915->setPoint($point915);
$waySet915->setWay($way);
$em->persist($waySet915);


$point916 = new Point();
$point916->setLatitude(46.494440892990454);
$point916->setLongitude(29.966797828674316);
$em->persist($point916);


$waySet916 = new WaySet();
$waySet916->setPoint($point916);
$waySet916->setWay($way);
$em->persist($waySet916);


$point917 = new Point();
$point917->setLatitude(46.49259436203077);
$point917->setLongitude(29.964759349822994);
$em->persist($point917);


$waySet917 = new WaySet();
$waySet917->setPoint($point917);
$waySet917->setWay($way);
$em->persist($waySet917);


$point918 = new Point();
$point918->setLatitude(46.491685845787025);
$point918->setLongitude(29.963289499282833);
$em->persist($point918);


$waySet918 = new WaySet();
$waySet918->setPoint($point918);
$waySet918->setWay($way);
$em->persist($waySet918);


$point919 = new Point();
$point919->setLatitude(46.490644357276096);
$point919->setLongitude(29.96084332466125);
$em->persist($point919);


$waySet919 = new WaySet();
$waySet919->setPoint($point919);
$waySet919->setWay($way);
$em->persist($waySet919);


$point920 = new Point();
$point920->setLatitude(46.489868767769764);
$point920->setLongitude(29.957292079925537);
$em->persist($point920);


$waySet920 = new WaySet();
$waySet920->setPoint($point920);
$waySet920->setWay($way);
$em->persist($waySet920);


$point921 = new Point();
$point921->setLatitude(46.48979490152569);
$point921->setLongitude(29.955049753189083);
$em->persist($point921);


$waySet921 = new WaySet();
$waySet921->setPoint($point921);
$waySet921->setWay($way);
$em->persist($waySet921);


$point922 = new Point();
$point922->setLatitude(46.49003127315365);
$point922->setLongitude(29.953451156616207);
$em->persist($point922);


$waySet922 = new WaySet();
$waySet922->setPoint($point922);
$waySet922->setWay($way);
$em->persist($waySet922);


$point923 = new Point();
$point923->setLatitude(46.49037844211985);
$point923->setLongitude(29.952903985977173);
$em->persist($point923);


$waySet923 = new WaySet();
$waySet923->setPoint($point923);
$waySet923->setWay($way);
$em->persist($waySet923);


$point924 = new Point();
$point924->setLatitude(46.49105800049061);
$point924->setLongitude(29.95292544364929);
$em->persist($point924);


$waySet924 = new WaySet();
$waySet924->setPoint($point924);
$waySet924->setWay($way);
$em->persist($waySet924);


$point925 = new Point();
$point925->setLatitude(46.491870504788984);
$point925->setLongitude(29.95360136032104);
$em->persist($point925);


$waySet925 = new WaySet();
$waySet925->setPoint($point925);
$waySet925->setWay($way);
$em->persist($waySet925);


$point926 = new Point();
$point926->setLatitude(46.49280117661601);
$point926->setLongitude(29.954663515090942);
$em->persist($point926);


$waySet926 = new WaySet();
$waySet926->setPoint($point926);
$waySet926->setWay($way);
$em->persist($waySet926);


$point927 = new Point();
$point927->setLatitude(46.49396080097231);
$point927->setLongitude(29.955543279647824);
$em->persist($point927);


$waySet927 = new WaySet();
$waySet927->setPoint($point927);
$waySet927->setWay($way);
$em->persist($waySet927);


$point928 = new Point();
$point928->setLatitude(46.49587375781191);
$point928->setLongitude(29.95641231536865);
$em->persist($point928);


$waySet928 = new WaySet();
$waySet928->setPoint($point928);
$waySet928->setWay($way);
$em->persist($waySet928);


$point929 = new Point();
$point929->setLatitude(46.49799344219958);
$point929->setLongitude(29.95784997940063);
$em->persist($point929);


$waySet929 = new WaySet();
$waySet929->setPoint($point929);
$waySet929->setWay($way);
$em->persist($waySet929);


$point930 = new Point();
$point930->setLatitude(46.4997290107459);
$point930->setLongitude(29.95943784713745);
$em->persist($point930);


$waySet930 = new WaySet();
$waySet930->setPoint($point930);
$waySet930->setWay($way);
$em->persist($waySet930);


$point931 = new Point();
$point931->setLatitude(46.50201839940805);
$point931->setLongitude(29.96222734451294);
$em->persist($point931);


$waySet931 = new WaySet();
$waySet931->setPoint($point931);
$waySet931->setWay($way);
$em->persist($waySet931);


$point932 = new Point();
$point932->setLatitude(46.503739070009765);
$point932->setLongitude(29.963858127593994);
$em->persist($point932);


$waySet932 = new WaySet();
$waySet932->setPoint($point932);
$waySet932->setWay($way);
$em->persist($waySet932);


$point933 = new Point();
$point933->setLatitude(46.50503138336266);
$point933->setLongitude(29.96469497680664);
$em->persist($point933);


$waySet933 = new WaySet();
$waySet933->setPoint($point933);
$waySet933->setWay($way);
$em->persist($waySet933);


$point934 = new Point();
$point934->setLatitude(46.50646396911775);
$point934->setLongitude(29.96522068977356);
$em->persist($point934);


$waySet934 = new WaySet();
$waySet934->setPoint($point934);
$waySet934->setWay($way);
$em->persist($waySet934);


$point935 = new Point();
$point935->setLatitude(46.50766760734434);
$point935->setLongitude(29.965016841888428);
$em->persist($point935);


$waySet935 = new WaySet();
$waySet935->setPoint($point935);
$waySet935->setWay($way);
$em->persist($waySet935);


$point936 = new Point();
$point936->setLatitude(46.509018899485255);
$point936->setLongitude(29.96392250061035);
$em->persist($point936);


$waySet936 = new WaySet();
$waySet936->setPoint($point936);
$waySet936->setWay($way);
$em->persist($waySet936);


$point937 = new Point();
$point937->setLatitude(46.50966130527889);
$point937->setLongitude(29.96265649795532);
$em->persist($point937);


$waySet937 = new WaySet();
$waySet937->setPoint($point937);
$waySet937->setWay($way);
$em->persist($waySet937);


$point938 = new Point();
$point938->setLatitude(46.51000096504378);
$point938->setLongitude(29.961476325988766);
$em->persist($point938);


$waySet938 = new WaySet();
$waySet938->setPoint($point938);
$waySet938->setWay($way);
$em->persist($waySet938);


$point939 = new Point();
$point939->setLatitude(46.51018556185183);
$point939->setLongitude(29.95996356010437);
$em->persist($point939);


$waySet939 = new WaySet();
$waySet939->setPoint($point939);
$waySet939->setWay($way);
$em->persist($waySet939);


$point940 = new Point();
$point940->setLatitude(46.50994189393278);
$point940->setLongitude(29.958794116973877);
$em->persist($point940);


$waySet940 = new WaySet();
$waySet940->setPoint($point940);
$waySet940->setWay($way);
$em->persist($waySet940);


$point941 = new Point();
$point941->setLatitude(46.50938809914512);
$point941->setLongitude(29.95796799659729);
$em->persist($point941);


$waySet941 = new WaySet();
$waySet941->setPoint($point941);
$waySet941->setWay($way);
$em->persist($waySet941);


$point942 = new Point();
$point942->setLatitude(46.50639750978896);
$point942->setLongitude(29.957689046859738);
$em->persist($point942);


$waySet942 = new WaySet();
$waySet942->setPoint($point942);
$waySet942->setWay($way);
$em->persist($waySet942);


$point943 = new Point();
$point943->setLatitude(46.503672607349614);
$point943->setLongitude(29.957249164581302);
$em->persist($point943);


$waySet943 = new WaySet();
$waySet943->setPoint($point943);
$waySet943->setWay($way);
$em->persist($waySet943);


$point944 = new Point();
$point944->setLatitude(46.50199624449584);
$point944->setLongitude(29.95647668838501);
$em->persist($point944);


$waySet944 = new WaySet();
$waySet944->setPoint($point944);
$waySet944->setWay($way);
$em->persist($waySet944);


$point945 = new Point();
$point945->setLatitude(46.500519229985045);
$point945->setLongitude(29.955339431762695);
$em->persist($point945);


$waySet945 = new WaySet();
$waySet945->setPoint($point945);
$waySet945->setWay($way);
$em->persist($waySet945);


$point946 = new Point();
$point946->setLatitude(46.49917511190947);
$point946->setLongitude(29.95398759841919);
$em->persist($point946);


$waySet946 = new WaySet();
$waySet946->setPoint($point946);
$waySet946->setWay($way);
$em->persist($waySet946);


$point947 = new Point();
$point947->setLatitude(46.49764632184255);
$point947->setLongitude(29.951852560043335);
$em->persist($point947);


$waySet947 = new WaySet();
$waySet947->setPoint($point947);
$waySet947->setWay($way);
$em->persist($waySet947);


$point948 = new Point();
$point948->setLatitude(46.49627997550574);
$point948->setLongitude(29.949342012405392);
$em->persist($point948);


$waySet948 = new WaySet();
$waySet948->setPoint($point948);
$waySet948->setWay($way);
$em->persist($waySet948);


$point949 = new Point();
$point949->setLatitude(46.495142558316154);
$point949->setLongitude(29.946659803390503);
$em->persist($point949);


$waySet949 = new WaySet();
$waySet949->setPoint($point949);
$waySet949->setWay($way);
$em->persist($waySet949);


$point950 = new Point();
$point950->setLatitude(46.494477822970126);
$point950->setLongitude(29.944310188293457);
$em->persist($point950);


$waySet950 = new WaySet();
$waySet950->setPoint($point950);
$waySet950->setWay($way);
$em->persist($waySet950);


$point951 = new Point();
$point951->setLatitude(46.49409374995552);
$point951->setLongitude(29.942454099655155);
$em->persist($point951);


$waySet951 = new WaySet();
$waySet951->setPoint($point951);
$waySet951->setWay($way);
$em->persist($waySet951);


$point952 = new Point();
$point952->setLatitude(46.4937096742284);
$point952->setLongitude(29.93993282318115);
$em->persist($point952);


$waySet952 = new WaySet();
$waySet952->setPoint($point952);
$waySet952->setWay($way);
$em->persist($waySet952);


$point953 = new Point();
$point953->setLatitude(46.49359149653589);
$point953->setLongitude(29.938312768936154);
$em->persist($point953);


$waySet953 = new WaySet();
$waySet953->setPoint($point953);
$waySet953->setWay($way);
$em->persist($waySet953);


$point954 = new Point();
$point954->setLatitude(46.49376506993336);
$point954->setLongitude(29.937180876731873);
$em->persist($point954);


$waySet954 = new WaySet();
$waySet954->setPoint($point954);
$waySet954->setWay($way);
$em->persist($waySet954);


$point955 = new Point();
$point955->setLatitude(46.49413068017093);
$point955->setLongitude(29.936075806617733);
$em->persist($point955);


$waySet955 = new WaySet();
$waySet955->setPoint($point955);
$waySet955->setWay($way);
$em->persist($waySet955);


$point956 = new Point();
$point956->setLatitude(46.494680937410166);
$point956->setLongitude(29.9354213476181);
$em->persist($point956);


$waySet956 = new WaySet();
$waySet956->setPoint($point956);
$waySet956->setWay($way);
$em->persist($waySet956);


$point957 = new Point();
$point957->setLatitude(46.495334591458935);
$point957->setLongitude(29.9350243806839);
$em->persist($point957);


$waySet957 = new WaySet();
$waySet957->setPoint($point957);
$waySet957->setWay($way);
$em->persist($waySet957);


$point958 = new Point();
$point958->setLatitude(46.49592545841421);
$point958->setLongitude(29.935072660446167);
$em->persist($point958);


$waySet958 = new WaySet();
$waySet958->setPoint($point958);
$waySet958->setWay($way);
$em->persist($waySet958);


$point959 = new Point();
$point959->setLatitude(46.49661233317997);
$point959->setLongitude(29.935861229896545);
$em->persist($point959);


$waySet959 = new WaySet();
$waySet959->setPoint($point959);
$waySet959->setWay($way);
$em->persist($waySet959);


$point960 = new Point();
$point960->setLatitude(46.49723272873689);
$point960->setLongitude(29.93695557117462);
$em->persist($point960);


$waySet960 = new WaySet();
$waySet960->setPoint($point960);
$waySet960->setWay($way);
$em->persist($waySet960);


$point961 = new Point();
$point961->setLatitude(46.500024421151444);
$point961->setLongitude(29.943103194236755);
$em->persist($point961);


$waySet961 = new WaySet();
$waySet961->setPoint($point961);
$waySet961->setWay($way);
$em->persist($waySet961);


$point962 = new Point();
$point962->setLatitude(46.50075186243267);
$point962->setLongitude(29.943816661834717);
$em->persist($point962);


$waySet962 = new WaySet();
$waySet962->setPoint($point962);
$waySet962->setWay($way);
$em->persist($waySet962);


$point963 = new Point();
$point963->setLatitude(46.50133159293145);
$point963->setLongitude(29.943907856941223);
$em->persist($point963);


$waySet963 = new WaySet();
$waySet963->setPoint($point963);
$waySet963->setWay($way);
$em->persist($waySet963);


$point964 = new Point();
$point964->setLatitude(46.50176361737257);
$point964->setLongitude(29.94375765323639);
$em->persist($point964);


$waySet964 = new WaySet();
$waySet964->setPoint($point964);
$waySet964->setWay($way);
$em->persist($waySet964);


$point965 = new Point();
$point965->setLatitude(46.502118096401276);
$point965->setLongitude(29.94326412677765);
$em->persist($point965);


$waySet965 = new WaySet();
$waySet965->setPoint($point965);
$waySet965->setWay($way);
$em->persist($waySet965);


$point966 = new Point();
$point966->setLatitude(46.50229902751461);
$point966->setLongitude(29.942228794097897);
$em->persist($point966);


$waySet966 = new WaySet();
$waySet966->setPoint($point966);
$waySet966->setWay($way);
$em->persist($waySet966);


$point967 = new Point();
$point967->setLatitude(46.5020774791298);
$point967->setLongitude(29.94102716445923);
$em->persist($point967);


$waySet967 = new WaySet();
$waySet967->setPoint($point967);
$waySet967->setWay($way);
$em->persist($waySet967);


$point968 = new Point();
$point968->setLatitude(46.50147560145992);
$point968->setLongitude(29.938940405845642);
$em->persist($point968);


$waySet968 = new WaySet();
$waySet968->setPoint($point968);
$waySet968->setWay($way);
$em->persist($waySet968);


$point969 = new Point();
$point969->setLatitude(46.50091064273811);
$point969->setLongitude(29.93551790714264);
$em->persist($point969);


$waySet969 = new WaySet();
$waySet969->setPoint($point969);
$waySet969->setWay($way);
$em->persist($waySet969);


$point970 = new Point();
$point970->setLatitude(46.50077771042096);
$point970->setLongitude(29.933559894561764);
$em->persist($point970);


$waySet970 = new WaySet();
$waySet970->setPoint($point970);
$waySet970->setWay($way);
$em->persist($waySet970);


$point971 = new Point();
$point971->setLatitude(46.50103988217925);
$point971->setLongitude(29.93140339851379);
$em->persist($point971);


$waySet971 = new WaySet();
$waySet971->setPoint($point971);
$waySet971->setWay($way);
$em->persist($waySet971);


$point972 = new Point();
$point972->setLatitude(46.50219933085318);
$point972->setLongitude(29.926645159721375);
$em->persist($point972);


$waySet972 = new WaySet();
$waySet972->setPoint($point972);
$waySet972->setWay($way);
$em->persist($waySet972);


$point973 = new Point();
$point973->setLatitude(46.50280489294241);
$point973->setLongitude(29.924831986427307);
$em->persist($point973);


$waySet973 = new WaySet();
$waySet973->setPoint($point973);
$waySet973->setWay($way);
$em->persist($waySet973);


$point974 = new Point();
$point974->setLatitude(46.503462141723055);
$point974->setLongitude(29.923893213272095);
$em->persist($point974);


$waySet974 = new WaySet();
$waySet974->setPoint($point974);
$waySet974->setWay($way);
$em->persist($waySet974);


$point975 = new Point();
$point975->setLatitude(46.50420061401954);
$point975->setLongitude(29.923329949378967);
$em->persist($point975);


$waySet975 = new WaySet();
$waySet975->setPoint($point975);
$waySet975->setWay($way);
$em->persist($waySet975);


$point976 = new Point();
$point976->setLatitude(46.504846769050246);
$point976->setLongitude(29.9232280254364);
$em->persist($point976);


$waySet976 = new WaySet();
$waySet976->setPoint($point976);
$waySet976->setWay($way);
$em->persist($waySet976);


$point977 = new Point();
$point977->setLatitude(46.50551506988807);
$point977->setLongitude(29.92352306842804);
$em->persist($point977);


$waySet977 = new WaySet();
$waySet977->setPoint($point977);
$waySet977->setWay($way);
$em->persist($waySet977);


$point978 = new Point();
$point978->setLatitude(46.506471353482624);
$point978->setLongitude(29.924241900444027);
$em->persist($point978);


$waySet978 = new WaySet();
$waySet978->setPoint($point978);
$waySet978->setWay($way);
$em->persist($waySet978);


$point979 = new Point();
$point979->setLatitude(46.50820665140621);
$point979->setLongitude(29.925920963287354);
$em->persist($point979);


$waySet979 = new WaySet();
$waySet979->setPoint($point979);
$waySet979->setWay($way);
$em->persist($waySet979);


$point980 = new Point();
$point980->setLatitude(46.51051414261898);
$point980->setLongitude(29.927852153778076);
$em->persist($point980);


$waySet980 = new WaySet();
$waySet980->setPoint($point980);
$waySet980->setWay($way);
$em->persist($waySet980);


$point981 = new Point();
$point981->setLatitude(46.511570017928385);
$point981->setLongitude(29.928351044654843);
$em->persist($point981);


$waySet981 = new WaySet();
$waySet981->setPoint($point981);
$waySet981->setWay($way);
$em->persist($waySet981);


$point982 = new Point();
$point982->setLatitude(46.51213855767557);
$point982->setLongitude(29.92844223976135);
$em->persist($point982);


$waySet982 = new WaySet();
$waySet982->setPoint($point982);
$waySet982->setWay($way);
$em->persist($waySet982);


$point983 = new Point();
$point983->setLatitude(46.51260003037019);
$point983->setLongitude(29.928318858146667);
$em->persist($point983);


$waySet983 = new WaySet();
$waySet983->setPoint($point983);
$waySet983->setWay($way);
$em->persist($waySet983);


$point984 = new Point();
$point984->setLatitude(46.5129064460747);
$point984->setLongitude(29.92792725563049);
$em->persist($point984);


$waySet984 = new WaySet();
$waySet984->setPoint($point984);
$waySet984->setWay($way);
$em->persist($waySet984);


$point985 = new Point();
$point985->setLatitude(46.51302458178849);
$point985->setLongitude(29.92725133895874);
$em->persist($point985);


$waySet985 = new WaySet();
$waySet985->setPoint($point985);
$waySet985->setWay($way);
$em->persist($waySet985);


$point986 = new Point();
$point986->setLatitude(46.51309103301466);
$point986->setLongitude(29.925121665000916);
$em->persist($point986);


$waySet986 = new WaySet();
$waySet986->setPoint($point986);
$waySet986->setWay($way);
$em->persist($waySet986);


$point987 = new Point();
$point987->setLatitude(46.51300981483831);
$point987->setLongitude(29.920814037322998);
$em->persist($point987);


$waySet987 = new WaySet();
$waySet987->setPoint($point987);
$waySet987->setWay($way);
$em->persist($waySet987);


$point988 = new Point();
$point988->setLatitude(46.51269601619839);
$point988->setLongitude(29.91141021251678);
$em->persist($point988);


$waySet988 = new WaySet();
$waySet988->setPoint($point988);
$waySet988->setWay($way);
$em->persist($waySet988);


$point989 = new Point();
$point989->setLatitude(46.512836302873126);
$point989->setLongitude(29.909731149673465);
$em->persist($point989);


$waySet989 = new WaySet();
$waySet989->setPoint($point989);
$waySet989->setWay($way);
$em->persist($waySet989);


$point990 = new Point();
$point990->setLatitude(46.513098416479224);
$point990->setLongitude(29.908609986305233);
$em->persist($point990);


$waySet990 = new WaySet();
$waySet990->setPoint($point990);
$waySet990->setWay($way);
$em->persist($waySet990);


$point991 = new Point();
$point991->setLatitude(46.513500813780595);
$point991->setLongitude(29.907671213150024);
$em->persist($point991);


$waySet991 = new WaySet();
$waySet991->setPoint($point991);
$waySet991->setWay($way);
$em->persist($waySet991);


$point992 = new Point();
$point992->setLatitude(46.51432774934056);
$point992->setLongitude(29.90631937980652);
$em->persist($point992);


$waySet992 = new WaySet();
$waySet992->setPoint($point992);
$waySet992->setWay($way);
$em->persist($waySet992);


$point993 = new Point();
$point993->setLatitude(46.51498485880434);
$point993->setLongitude(29.905450344085697);
$em->persist($point993);


$waySet993 = new WaySet();
$waySet993->setPoint($point993);
$waySet993->setWay($way);
$em->persist($waySet993);


$point994 = new Point();
$point994->setLatitude(46.51565672655752);
$point994->setLongitude(29.904956817626957);
$em->persist($point994);


$waySet994 = new WaySet();
$waySet994->setPoint($point994);
$waySet994->setWay($way);
$em->persist($waySet994);


$point995 = new Point();
$point995->setLatitude(46.51632120297833);
$point995->setLongitude(29.904870986938477);
$em->persist($point995);


$waySet995 = new WaySet();
$waySet995->setPoint($point995);
$waySet995->setWay($way);
$em->persist($waySet995);


$point996 = new Point();
$point996->setLatitude(46.516900767444575);
$point996->setLongitude(29.905219674110413);
$em->persist($point996);


$waySet996 = new WaySet();
$waySet996->setPoint($point996);
$waySet996->setWay($way);
$em->persist($waySet996);


$point997 = new Point();
$point997->setLatitude(46.51739911411291);
$point997->setLongitude(29.905954599380497);
$em->persist($point997);


$waySet997 = new WaySet();
$waySet997->setPoint($point997);
$waySet997->setWay($way);
$em->persist($waySet997);


$point998 = new Point();
$point998->setLatitude(46.51781993662917);
$point998->setLongitude(29.90707576274872);
$em->persist($point998);


$waySet998 = new WaySet();
$waySet998->setPoint($point998);
$waySet998->setWay($way);
$em->persist($waySet998);


$point999 = new Point();
$point999->setLatitude(46.51826659555909);
$point999->setLongitude(29.909055233001705);
$em->persist($point999);


$waySet999 = new WaySet();
$waySet999->setPoint($point999);
$waySet999->setWay($way);
$em->persist($waySet999);


$point1000 = new Point();
$point1000->setLatitude(46.51894580540757);
$point1000->setLongitude(29.911270737648007);
$em->persist($point1000);


$waySet1000 = new WaySet();
$waySet1000->setPoint($point1000);
$waySet1000->setWay($way);
$em->persist($waySet1000);


$point1001 = new Point();
$point1001->setLatitude(46.519687758636806);
$point1001->setLongitude(29.91239726543426);
$em->persist($point1001);


$waySet1001 = new WaySet();
$waySet1001->setPoint($point1001);
$waySet1001->setWay($way);
$em->persist($waySet1001);


$point1002 = new Point();
$point1002->setLatitude(46.52049245267613);
$point1002->setLongitude(29.913148283958435);
$em->persist($point1002);


$waySet1002 = new WaySet();
$waySet1002->setPoint($point1002);
$waySet1002->setWay($way);
$em->persist($waySet1002);


$point1003 = new Point();
$point1003->setLatitude(46.52108304622256);
$point1003->setLongitude(29.913486242294308);
$em->persist($point1003);


$waySet1003 = new WaySet();
$waySet1003->setPoint($point1003);
$waySet1003->setWay($way);
$em->persist($waySet1003);


$point1004 = new Point();
$point1004->setLatitude(46.52158504568947);
$point1004->setLongitude(29.913518428802494);
$em->persist($point1004);


$waySet1004 = new WaySet();
$waySet1004->setPoint($point1004);
$waySet1004->setWay($way);
$em->persist($waySet1004);


$point1005 = new Point();
$point1005->setLatitude(46.52205382041539);
$point1005->setLongitude(29.912933707237247);
$em->persist($point1005);


$waySet1005 = new WaySet();
$waySet1005->setPoint($point1005);
$waySet1005->setWay($way);
$em->persist($waySet1005);


$point1006 = new Point();
$point1006->setLatitude(46.52257057526882);
$point1006->setLongitude(29.911597967147827);
$em->persist($point1006);


$waySet1006 = new WaySet();
$waySet1006->setPoint($point1006);
$waySet1006->setWay($way);
$em->persist($waySet1006);


$point1007 = new Point();
$point1007->setLatitude(46.52324604027299);
$point1007->setLongitude(29.90951120853424);
$em->persist($point1007);


$waySet1007 = new WaySet();
$waySet1007->setPoint($point1007);
$waySet1007->setWay($way);
$em->persist($waySet1007);


$point1008 = new Point();
$point1008->setLatitude(46.524818401687746);
$point1008->setLongitude(29.902097582817078);
$em->persist($point1008);


$waySet1008 = new WaySet();
$waySet1008->setPoint($point1008);
$waySet1008->setWay($way);
$em->persist($waySet1008);


$point1009 = new Point();
$point1009->setLatitude(46.52532405754202);
$point1009->setLongitude(29.900193214416507);
$em->persist($point1009);


$waySet1009 = new WaySet();
$waySet1009->setPoint($point1009);
$waySet1009->setWay($way);
$em->persist($waySet1009);


$point1010 = new Point();
$point1010->setLatitude(46.52595150716771);
$point1010->setLongitude(29.8981386423111);
$em->persist($point1010);


$waySet1010 = new WaySet();
$waySet1010->setPoint($point1010);
$waySet1010->setWay($way);
$em->persist($waySet1010);


$point1011 = new Point();
$point1011->setLatitude(46.5268040888681);
$point1011->setLongitude(29.896545410156246);
$em->persist($point1011);


$waySet1011 = new WaySet();
$waySet1011->setPoint($point1011);
$waySet1011->setWay($way);
$em->persist($waySet1011);


$point1012 = new Point();
$point1012->setLatitude(46.5272949631709);
$point1012->setLongitude(29.895890951156613);
$em->persist($point1012);


$waySet1012 = new WaySet();
$waySet1012->setPoint($point1012);
$waySet1012->setWay($way);
$em->persist($waySet1012);


$point1013 = new Point();
$point1013->setLatitude(46.528095853826166);
$point1013->setLongitude(29.89533305168152);
$em->persist($point1013);


$waySet1013 = new WaySet();
$waySet1013->setPoint($point1013);
$waySet1013->setWay($way);
$em->persist($waySet1013);


$point1014 = new Point();
$point1014->setLatitude(46.52878601279849);
$point1014->setLongitude(29.89508092403412);
$em->persist($point1014);


$waySet1014 = new WaySet();
$waySet1014->setPoint($point1014);
$waySet1014->setWay($way);
$em->persist($waySet1014);


$point1015 = new Point();
$point1015->setLatitude(46.52960533452532);
$point1015->setLongitude(29.895043373107907);
$em->persist($point1015);


$waySet1015 = new WaySet();
$waySet1015->setPoint($point1015);
$waySet1015->setWay($way);
$em->persist($waySet1015);


$point1016 = new Point();
$point1016->setLatitude(46.530413572227445);
$point1016->setLongitude(29.895440340042114);
$em->persist($point1016);


$waySet1016 = new WaySet();
$waySet1016->setPoint($point1016);
$waySet1016->setWay($way);
$em->persist($waySet1016);


$point1017 = new Point();
$point1017->setLatitude(46.53090072338928);
$point1017->setLongitude(29.896218180656433);
$em->persist($point1017);


$waySet1017 = new WaySet();
$waySet1017->setPoint($point1017);
$waySet1017->setWay($way);
$em->persist($waySet1017);


$point1018 = new Point();
$point1018->setLatitude(46.53096715275465);
$point1018->setLongitude(29.897258877754208);
$em->persist($point1018);


$waySet1018 = new WaySet();
$waySet1018->setPoint($point1018);
$waySet1018->setWay($way);
$em->persist($waySet1018);


$point1019 = new Point();
$point1019->setLatitude(46.53128084588216);
$point1019->setLongitude(29.900370240211487);
$em->persist($point1019);


$waySet1019 = new WaySet();
$waySet1019->setPoint($point1019);
$waySet1019->setWay($way);
$em->persist($waySet1019);


$point1020 = new Point();
$point1020->setLatitude(46.531605608622996);
$point1020->setLongitude(29.901861548423764);
$em->persist($point1020);


$waySet1020 = new WaySet();
$waySet1020->setPoint($point1020);
$waySet1020->setWay($way);
$em->persist($waySet1020);


$point1021 = new Point();
$point1021->setLatitude(46.532004178423534);
$point1021->setLongitude(29.902344346046448);
$em->persist($point1021);


$waySet1021 = new WaySet();
$waySet1021->setPoint($point1021);
$waySet1021->setWay($way);
$em->persist($waySet1021);


$point1022 = new Point();
$point1022->setLatitude(46.53250607697458);
$point1022->setLongitude(29.90251064300537);
$em->persist($point1022);


$waySet1022 = new WaySet();
$waySet1022->setPoint($point1022);
$waySet1022->setWay($way);
$em->persist($waySet1022);


$point1023 = new Point();
$point1023->setLatitude(46.53308546879882);
$point1023->setLongitude(29.902210235595703);
$em->persist($point1023);


$waySet1023 = new WaySet();
$waySet1023->setPoint($point1023);
$waySet1023->setWay($way);
$em->persist($waySet1023);


$point1024 = new Point();
$point1024->setLatitude(46.53415566674301);
$point1024->setLongitude(29.901105165481567);
$em->persist($point1024);


$waySet1024 = new WaySet();
$waySet1024->setPoint($point1024);
$waySet1024->setWay($way);
$em->persist($waySet1024);


$point1025 = new Point();
$point1025->setLatitude(46.535554272954904);
$point1025->setLongitude(29.89928126335144);
$em->persist($point1025);


$waySet1025 = new WaySet();
$waySet1025->setPoint($point1025);
$waySet1025->setWay($way);
$em->persist($waySet1025);


$point1026 = new Point();
$point1026->setLatitude(46.53700081457219);
$point1026->setLongitude(29.89717841148376);
$em->persist($point1026);


$waySet1026 = new WaySet();
$waySet1026->setPoint($point1026);
$waySet1026->setWay($way);
$em->persist($waySet1026);


$point1027 = new Point();
$point1027->setLatitude(46.53845838768401);
$point1027->setLongitude(29.89497363567352);
$em->persist($point1027);


$waySet1027 = new WaySet();
$waySet1027->setPoint($point1027);
$waySet1027->setWay($way);
$em->persist($waySet1027);


$point1028 = new Point();
$point1028->setLatitude(46.53963917772001);
$point1028->setLongitude(29.89356815814972);
$em->persist($point1028);


$waySet1028 = new WaySet();
$waySet1028->setPoint($point1028);
$waySet1028->setWay($way);
$em->persist($waySet1028);


$point1029 = new Point();
$point1029->setLatitude(46.54175346572172);
$point1029->setLongitude(29.892189502716064);
$em->persist($point1029);


$waySet1029 = new WaySet();
$waySet1029->setPoint($point1029);
$waySet1029->setWay($way);
$em->persist($waySet1029);


$point1030 = new Point();
$point1030->setLatitude(46.54318877313444);
$point1030->setLongitude(29.89152431488037);
$em->persist($point1030);


$waySet1030 = new WaySet();
$waySet1030->setPoint($point1030);
$waySet1030->setWay($way);
$em->persist($waySet1030);


$point1031 = new Point();
$point1031->setLatitude(46.54409273904746);
$point1031->setLongitude(29.89107370376587);
$em->persist($point1031);


$waySet1031 = new WaySet();
$waySet1031->setPoint($point1031);
$waySet1031->setWay($way);
$em->persist($waySet1031);


$point1032 = new Point();
$point1032->setLatitude(46.54539147188872);
$point1032->setLongitude(29.890193939208984);
$em->persist($point1032);


$waySet1032 = new WaySet();
$waySet1032->setPoint($point1032);
$waySet1032->setWay($way);
$em->persist($waySet1032);


$point1033 = new Point();
$point1033->setLatitude(46.54643929051163);
$point1033->setLongitude(29.889303445816036);
$em->persist($point1033);


$waySet1033 = new WaySet();
$waySet1033->setPoint($point1033);
$waySet1033->setWay($way);
$em->persist($waySet1033);


$point1034 = new Point();
$point1034->setLatitude(46.54713290579822);
$point1034->setLongitude(29.888370037078857);
$em->persist($point1034);


$waySet1034 = new WaySet();
$waySet1034->setPoint($point1034);
$waySet1034->setWay($way);
$em->persist($waySet1034);


$point1035 = new Point();
$point1035->setLatitude(46.54746864192921);
$point1035->setLongitude(29.88777995109558);
$em->persist($point1035);


$waySet1035 = new WaySet();
$waySet1035->setPoint($point1035);
$waySet1035->setWay($way);
$em->persist($waySet1035);


$point1036 = new Point();
$point1036->setLatitude(46.547612528206805);
$point1036->setLongitude(29.887087941169735);
$em->persist($point1036);


$waySet1036 = new WaySet();
$waySet1036->setPoint($point1036);
$waySet1036->setWay($way);
$em->persist($waySet1036);


$point1037 = new Point();
$point1037->setLatitude(46.54745019494294);
$point1037->setLongitude(29.886224269866947);
$em->persist($point1037);


$waySet1037 = new WaySet();
$waySet1037->setPoint($point1037);
$waySet1037->setWay($way);
$em->persist($waySet1037);


$point1038 = new Point();
$point1038->setLatitude(46.546841440879795);
$point1038->setLongitude(29.885210394859314);
$em->persist($point1038);


$waySet1038 = new WaySet();
$waySet1038->setPoint($point1038);
$waySet1038->setWay($way);
$em->persist($waySet1038);


$point1039 = new Point();
$point1039->setLatitude(46.545837904127);
$point1039->setLongitude(29.884116053581234);
$em->persist($point1039);


$waySet1039 = new WaySet();
$waySet1039->setPoint($point1039);
$waySet1039->setWay($way);
$em->persist($waySet1039);


$point1040 = new Point();
$point1040->setLatitude(46.5447162822722);
$point1040->setLongitude(29.883118271827694);
$em->persist($point1040);


$waySet1040 = new WaySet();
$waySet1040->setPoint($point1040);
$waySet1040->setWay($way);
$em->persist($waySet1040);


$point1041 = new Point();
$point1041->setLatitude(46.54224420491586);
$point1041->setLongitude(29.88127291202545);
$em->persist($point1041);


$waySet1041 = new WaySet();
$waySet1041->setPoint($point1041);
$waySet1041->setWay($way);
$em->persist($waySet1041);


$point1042 = new Point();
$point1042->setLatitude(46.54192688534224);
$point1042->setLongitude(29.880414605140686);
$em->persist($point1042);


$waySet1042 = new WaySet();
$waySet1042->setPoint($point1042);
$waySet1042->setWay($way);
$em->persist($waySet1042);


$point1043 = new Point();
$point1043->setLatitude(46.54191212624716);
$point1043->setLongitude(29.879518747329712);
$em->persist($point1043);


$waySet1043 = new WaySet();
$waySet1043->setPoint($point1043);
$waySet1043->setWay($way);
$em->persist($waySet1043);


$point1044 = new Point();
$point1044->setLatitude(46.542177789344606);
$point1044->setLongitude(29.87876772880554);
$em->persist($point1044);


$waySet1044 = new WaySet();
$waySet1044->setPoint($point1044);
$waySet1044->setWay($way);
$em->persist($waySet1044);


$point1045 = new Point();
$point1045->setLatitude(46.54277921627642);
$point1045->setLongitude(29.878209829330444);
$em->persist($point1045);


$waySet1045 = new WaySet();
$waySet1045->setPoint($point1045);
$waySet1045->setWay($way);
$em->persist($waySet1045);


$point1046 = new Point();
$point1046->setLatitude(46.54411118717465);
$point1046->setLongitude(29.877550005912777);
$em->persist($point1046);


$waySet1046 = new WaySet();
$waySet1046->setPoint($point1046);
$waySet1046->setWay($way);
$em->persist($waySet1046);


$point1047 = new Point();
$point1047->setLatitude(46.54591169422603);
$point1047->setLongitude(29.876418113708496);
$em->persist($point1047);


$waySet1047 = new WaySet();
$waySet1047->setPoint($point1047);
$waySet1047->setWay($way);
$em->persist($waySet1047);


$point1048 = new Point();
$point1048->setLatitude(46.546701242007146);
$point1048->setLongitude(29.875929951667782);
$em->persist($point1048);


$waySet1048 = new WaySet();
$waySet1048->setPoint($point1048);
$waySet1048->setWay($way);
$em->persist($waySet1048);


$point1049 = new Point();
$point1049->setLatitude(46.5472804823753);
$point1049->setLongitude(29.88025903701782);
$em->persist($point1049);


$waySet1049 = new WaySet();
$waySet1049->setPoint($point1049);
$waySet1049->setWay($way);
$em->persist($waySet1049);


$point1050 = new Point();
$point1050->setLatitude(46.54718086822977);
$point1050->setLongitude(29.881203174591064);
$em->persist($point1050);


$waySet1050 = new WaySet();
$waySet1050->setPoint($point1050);
$waySet1050->setWay($way);
$em->persist($waySet1050);


$point1051 = new Point();
$point1051->setLatitude(46.54788185277823);
$point1051->setLongitude(29.882356524467472);
$em->persist($point1051);


$waySet1051 = new WaySet();
$waySet1051->setPoint($point1051);
$waySet1051->setWay($way);
$em->persist($waySet1051);


$point1052 = new Point();
$point1052->setLatitude(46.546944745080566);
$point1052->setLongitude(29.884003400802612);
$em->persist($point1052);


$waySet1052 = new WaySet();
$waySet1052->setPoint($point1052);
$waySet1052->setWay($way);
$em->persist($waySet1052);


$point1053 = new Point();
$point1053->setLatitude(46.54787078467147);
$point1053->setLongitude(29.885317683219913);
$em->persist($point1053);


$waySet1053 = new WaySet();
$waySet1053->setPoint($point1053);
$waySet1053->setWay($way);
$em->persist($waySet1053);


$point1054 = new Point();
$point1054->setLatitude(46.548084767668534);
$point1054->setLongitude(29.885875582695007);
$em->persist($point1054);


$waySet1054 = new WaySet();
$waySet1054->setPoint($point1054);
$waySet1054->setWay($way);
$em->persist($waySet1054);


$point1055 = new Point();
$point1055->setLatitude(46.54817331211023);
$point1055->setLongitude(29.887066483497616);
$em->persist($point1055);


$waySet1055 = new WaySet();
$waySet1055->setPoint($point1055);
$waySet1055->setWay($way);
$em->persist($waySet1055);


$point1056 = new Point();
$point1056->setLatitude(46.54844263389921);
$point1056->setLongitude(29.889239072799683);
$em->persist($point1056);


$waySet1056 = new WaySet();
$waySet1056->setPoint($point1056);
$waySet1056->setWay($way);
$em->persist($waySet1056);


$point1057 = new Point();
$point1057->setLatitude(46.5485791389532);
$point1057->setLongitude(29.890730381011963);
$em->persist($point1057);


$waySet1057 = new WaySet();
$waySet1057->setPoint($point1057);
$waySet1057->setWay($way);
$em->persist($waySet1057);


$point1058 = new Point();
$point1058->setLatitude(46.548394672582525);
$point1058->setLongitude(29.891363382339478);
$em->persist($point1058);


$waySet1058 = new WaySet();
$waySet1058->setPoint($point1058);
$waySet1058->setWay($way);
$em->persist($waySet1058);


$point1059 = new Point();
$point1059->setLatitude(46.548106903792494);
$point1059->setLongitude(29.891905188560486);
$em->persist($point1059);


$waySet1059 = new WaySet();
$waySet1059->setPoint($point1059);
$waySet1059->setWay($way);
$em->persist($waySet1059);


$point1060 = new Point();
$point1060->setLatitude(46.548992341348594);
$point1060->setLongitude(29.89832103252411);
$em->persist($point1060);


$waySet1060 = new WaySet();
$waySet1060->setPoint($point1060);
$waySet1060->setWay($way);
$em->persist($waySet1060);


$point1061 = new Point();
$point1061->setLatitude(46.54899603064155);
$point1061->setLongitude(29.898326396942135);
$em->persist($point1061);


$waySet1061 = new WaySet();
$waySet1061->setPoint($point1061);
$waySet1061->setWay($way);
$em->persist($waySet1061);


$point1062 = new Point();
$point1062->setLatitude(46.54992941369666);
$point1062->setLongitude(29.90542888641357);
$em->persist($point1062);


$waySet1062 = new WaySet();
$waySet1062->setPoint($point1062);
$waySet1062->setWay($way);
$em->persist($waySet1062);


$point1063 = new Point();
$point1063->setLatitude(46.55075948395677);
$point1063->setLongitude(29.91144239902496);
$em->persist($point1063);


$waySet1063 = new WaySet();
$waySet1063->setPoint($point1063);
$waySet1063->setWay($way);
$em->persist($waySet1063);


$point1064 = new Point();
$point1064->setLatitude(46.55137557234201);
$point1064->setLongitude(29.915825128555298);
$em->persist($point1064);


$waySet1064 = new WaySet();
$waySet1064->setPoint($point1064);
$waySet1064->setWay($way);
$em->persist($waySet1064);


$point1065 = new Point();
$point1065->setLatitude(46.552637240502754);
$point1065->setLongitude(29.924118518829346);
$em->persist($point1065);


$waySet1065 = new WaySet();
$waySet1065->setPoint($point1065);
$waySet1065->setWay($way);
$em->persist($waySet1065);


$point1066 = new Point();
$point1066->setLatitude(46.553268063584504);
$point1066->setLongitude(29.929713606834415);
$em->persist($point1066);


$waySet1066 = new WaySet();
$waySet1066->setPoint($point1066);
$waySet1066->setWay($way);
$em->persist($waySet1066);


$point1067 = new Point();
$point1067->setLatitude(46.55383247802133);
$point1067->setLongitude(29.93468642234802);
$em->persist($point1067);


$waySet1067 = new WaySet();
$waySet1067->setPoint($point1067);
$waySet1067->setWay($way);
$em->persist($waySet1067);


$point1068 = new Point();
$point1068->setLatitude(46.554721511078725);
$point1068->setLongitude(29.942566752433777);
$em->persist($point1068);


$waySet1068 = new WaySet();
$waySet1068->setPoint($point1068);
$waySet1068->setWay($way);
$em->persist($waySet1068);


$point1069 = new Point();
$point1069->setLatitude(46.55558839650816);
$point1069->setLongitude(29.945002198219303);
$em->persist($point1069);


$waySet1069 = new WaySet();
$waySet1069->setPoint($point1069);
$waySet1069->setWay($way);
$em->persist($waySet1069);


$point1070 = new Point();
$point1070->setLatitude(46.556982761891774);
$point1070->setLongitude(29.945002198219303);
$em->persist($point1070);


$waySet1070 = new WaySet();
$waySet1070->setPoint($point1070);
$waySet1070->setWay($way);
$em->persist($waySet1070);


$point1071 = new Point();
$point1071->setLatitude(46.55812995098968);
$point1071->setLongitude(29.945399165153503);
$em->persist($point1071);


$waySet1071 = new WaySet();
$waySet1071->setPoint($point1071);
$waySet1071->setWay($way);
$em->persist($waySet1071);


$point1072 = new Point();
$point1072->setLatitude(46.55926236145652);
$point1072->setLongitude(29.94697093963623);
$em->persist($point1072);


$waySet1072 = new WaySet();
$waySet1072->setPoint($point1072);
$waySet1072->setWay($way);
$em->persist($waySet1072);


$point1073 = new Point();
$point1073->setLatitude(46.560073846277604);
$point1073->setLongitude(29.94835495948791);
$em->persist($point1073);


$waySet1073 = new WaySet();
$waySet1073->setPoint($point1073);
$waySet1073->setWay($way);
$em->persist($waySet1073);


$point1074 = new Point();
$point1074->setLatitude(46.56090744986537);
$point1074->setLongitude(29.94873046875);
$em->persist($point1074);


$waySet1074 = new WaySet();
$waySet1074->setPoint($point1074);
$waySet1074->setWay($way);
$em->persist($waySet1074);


$point1075 = new Point();
$point1075->setLatitude(46.56137588519879);
$point1075->setLongitude(29.948333501815792);
$em->persist($point1075);


$waySet1075 = new WaySet();
$waySet1075->setPoint($point1075);
$waySet1075->setWay($way);
$em->persist($waySet1075);


$point1076 = new Point();
$point1076->setLatitude(46.56120252771216);
$point1076->setLongitude(29.947544932365417);
$em->persist($point1076);


$waySet1076 = new WaySet();
$waySet1076->setPoint($point1076);
$waySet1076->setWay($way);
$em->persist($waySet1076);


$point1077 = new Point();
$point1077->setLatitude(46.56060499340689);
$point1077->setLongitude(29.94612872600555);
$em->persist($point1077);


$waySet1077 = new WaySet();
$waySet1077->setPoint($point1077);
$waySet1077->setWay($way);
$em->persist($waySet1077);


$point1078 = new Point();
$point1078->setLatitude(46.55990786173334);
$point1078->setLongitude(29.945050477981564);
$em->persist($point1078);


$waySet1078 = new WaySet();
$waySet1078->setPoint($point1078);
$waySet1078->setWay($way);
$em->persist($waySet1078);


$point1079 = new Point();
$point1079->setLatitude(46.559631219697906);
$point1079->setLongitude(29.944455027580258);
$em->persist($point1079);


$waySet1079 = new WaySet();
$waySet1079->setPoint($point1079);
$waySet1079->setWay($way);
$em->persist($waySet1079);


$point1080 = new Point();
$point1080->setLatitude(46.55928818161503);
$point1080->setLongitude(29.943296313285824);
$em->persist($point1080);


$waySet1080 = new WaySet();
$waySet1080->setPoint($point1080);
$waySet1080->setWay($way);
$em->persist($waySet1080);


$point1081 = new Point();
$point1081->setLatitude(46.55896358444285);
$point1081->setLongitude(29.941821098327637);
$em->persist($point1081);


$waySet1081 = new WaySet();
$waySet1081->setPoint($point1081);
$waySet1081->setWay($way);
$em->persist($waySet1081);


$point1082 = new Point();
$point1082->setLatitude(46.55895251859591);
$point1082->setLongitude(29.94073748588562);
$em->persist($point1082);


$waySet1082 = new WaySet();
$waySet1082->setPoint($point1082);
$waySet1082->setWay($way);
$em->persist($waySet1082);


$point1083 = new Point();
$point1083->setLatitude(46.55949474244084);
$point1083->setLongitude(29.940034747123715);
$em->persist($point1083);


$waySet1083 = new WaySet();
$waySet1083->setPoint($point1083);
$waySet1083->setWay($way);
$em->persist($waySet1083);


$point1084 = new Point();
$point1084->setLatitude(46.560453764545386);
$point1084->setLongitude(29.941086173057556);
$em->persist($point1084);


$waySet1084 = new WaySet();
$waySet1084->setPoint($point1084);
$waySet1084->setWay($way);
$em->persist($waySet1084);


$point1085 = new Point();
$point1085->setLatitude(46.56138326210084);
$point1085->setLongitude(29.94189620018005);
$em->persist($point1085);


$waySet1085 = new WaySet();
$waySet1085->setPoint($point1085);
$waySet1085->setWay($way);
$em->persist($waySet1085);


$point1086 = new Point();
$point1086->setLatitude(46.56305410457027);
$point1086->setLongitude(29.942228794097897);
$em->persist($point1086);


$waySet1086 = new WaySet();
$waySet1086->setPoint($point1086);
$waySet1086->setWay($way);
$em->persist($waySet1086);


$point1087 = new Point();
$point1087->setLatitude(46.56545515893771);
$point1087->setLongitude(29.942416548728943);
$em->persist($point1087);


$waySet1087 = new WaySet();
$waySet1087->setPoint($point1087);
$waySet1087->setWay($way);
$em->persist($waySet1087);


$point1088 = new Point();
$point1088->setLatitude(46.565469911631446);
$point1088->setLongitude(29.946407675743103);
$em->persist($point1088);


$waySet1088 = new WaySet();
$waySet1088->setPoint($point1088);
$waySet1088->setWay($way);
$em->persist($waySet1088);


$point1089 = new Point();
$point1089->setLatitude(46.56768645827896);
$point1089->setLongitude(29.948912858963013);
$em->persist($point1089);


$waySet1089 = new WaySet();
$waySet1089->setPoint($point1089);
$waySet1089->setWay($way);
$em->persist($waySet1089);


$point1090 = new Point();
$point1090->setLatitude(46.56842405771046);
$point1090->setLongitude(29.948837757110592);
$em->persist($point1090);


$waySet1090 = new WaySet();
$waySet1090->setPoint($point1090);
$waySet1090->setWay($way);
$em->persist($waySet1090);


$point1091 = new Point();
$point1091->setLatitude(46.568929307532585);
$point1091->setLongitude(29.948371052742004);
$em->persist($point1091);


$waySet1091 = new WaySet();
$waySet1091->setPoint($point1091);
$waySet1091->setWay($way);
$em->persist($waySet1091);


$point1092 = new Point();
$point1092->setLatitude(46.56921327799442);
$point1092->setLongitude(29.94770586490631);
$em->persist($point1092);


$waySet1092 = new WaySet();
$waySet1092->setPoint($point1092);
$waySet1092->setWay($way);
$em->persist($waySet1092);


$point1093 = new Point();
$point1093->setLatitude(46.56906576105694);
$point1093->setLongitude(29.94668126106262);
$em->persist($point1093);


$waySet1093 = new WaySet();
$waySet1093->setPoint($point1093);
$waySet1093->setWay($way);
$em->persist($waySet1093);


$point1094 = new Point();
$point1094->setLatitude(46.568472001326334);
$point1094->setLongitude(29.945581555366516);
$em->persist($point1094);


$waySet1094 = new WaySet();
$waySet1094->setPoint($point1094);
$waySet1094->setWay($way);
$em->persist($waySet1094);


$point1095 = new Point();
$point1095->setLatitude(46.56791142716863);
$point1095->setLongitude(29.944905638694763);
$em->persist($point1095);


$waySet1095 = new WaySet();
$waySet1095->setPoint($point1095);
$waySet1095->setWay($way);
$em->persist($waySet1095);


$point1096 = new Point();
$point1096->setLatitude(46.567668018164674);
$point1096->setLongitude(29.94421899318695);
$em->persist($point1096);


$waySet1096 = new WaySet();
$waySet1096->setPoint($point1096);
$waySet1096->setWay($way);
$em->persist($waySet1096);


$point1097 = new Point();
$point1097->setLatitude(46.56784873101446);
$point1097->setLongitude(29.94327485561371);
$em->persist($point1097);


$waySet1097 = new WaySet();
$waySet1097->setPoint($point1097);
$waySet1097->setWay($way);
$em->persist($waySet1097);


$point1098 = new Point();
$point1098->setLatitude(46.5681253311492);
$point1098->setLongitude(29.94221270084381);
$em->persist($point1098);


$waySet1098 = new WaySet();
$waySet1098->setPoint($point1098);
$waySet1098->setWay($way);
$em->persist($waySet1098);


$point1099 = new Point();
$point1099->setLatitude(46.568412993793075);
$point1099->setLongitude(29.940785765647888);
$em->persist($point1099);


$waySet1099 = new WaySet();
$waySet1099->setPoint($point1099);
$waySet1099->setWay($way);
$em->persist($waySet1099);


$point1100 = new Point();
$point1100->setLatitude(46.568398241899736);
$point1100->setLongitude(29.9389511346817);
$em->persist($point1100);


$waySet1100 = new WaySet();
$waySet1100->setPoint($point1100);
$waySet1100->setWay($way);
$em->persist($waySet1100);


$point1101 = new Point();
$point1101->setLatitude(46.56906576105694);
$point1101->setLongitude(29.938849210739136);
$em->persist($point1101);


$waySet1101 = new WaySet();
$waySet1101->setPoint($point1101);
$waySet1101->setWay($way);
$em->persist($waySet1101);


$point1102 = new Point();
$point1102->setLatitude(46.57018687971967);
$point1102->setLongitude(29.938597083091736);
$em->persist($point1102);


$waySet1102 = new WaySet();
$waySet1102->setPoint($point1102);
$waySet1102->setWay($way);
$em->persist($waySet1102);


$point1103 = new Point();
$point1103->setLatitude(46.57121209294849);
$point1103->setLongitude(29.93825912475586);
$em->persist($point1103);


$waySet1103 = new WaySet();
$waySet1103->setPoint($point1103);
$waySet1103->setWay($way);
$em->persist($waySet1103);


$point1104 = new Point();
$point1104->setLatitude(46.572016023578634);
$point1104->setLongitude(29.937728047370907);
$em->persist($point1104);


$waySet1104 = new WaySet();
$waySet1104->setPoint($point1104);
$waySet1104->setWay($way);
$em->persist($waySet1104);


$point1105 = new Point();
$point1105->setLatitude(46.573052265205526);
$point1105->setLongitude(29.93770122528076);
$em->persist($point1105);


$waySet1105 = new WaySet();
$waySet1105->setPoint($point1105);
$waySet1105->setWay($way);
$em->persist($waySet1105);


$point1106 = new Point();
$point1106->setLatitude(46.57410692496462);
$point1106->setLongitude(29.93740618228912);
$em->persist($point1106);


$waySet1106 = new WaySet();
$waySet1106->setPoint($point1106);
$waySet1106->setWay($way);
$em->persist($waySet1106);


$point1107 = new Point();
$point1107->setLatitude(46.57505831372427);
$point1107->setLongitude(29.936842918395993);
$em->persist($point1107);


$waySet1107 = new WaySet();
$waySet1107->setPoint($point1107);
$waySet1107->setWay($way);
$em->persist($waySet1107);


$point1108 = new Point();
$point1108->setLatitude(46.576219870394524);
$point1108->setLongitude(29.93645668029785);
$em->persist($point1108);


$waySet1108 = new WaySet();
$waySet1108->setPoint($point1108);
$waySet1108->setWay($way);
$em->persist($waySet1108);


$point1109 = new Point();
$point1109->setLatitude(46.57700897724103);
$point1109->setLongitude(29.93647277355194);
$em->persist($point1109);


$waySet1109 = new WaySet();
$waySet1109->setPoint($point1109);
$waySet1109->setWay($way);
$em->persist($waySet1109);


$point1110 = new Point();
$point1110->setLatitude(46.57778701059917);
$point1110->setLongitude(29.935930967330933);
$em->persist($point1110);


$waySet1110 = new WaySet();
$waySet1110->setPoint($point1110);
$waySet1110->setWay($way);
$em->persist($waySet1110);


$point1111 = new Point();
$point1111->setLatitude(46.57862034200353);
$point1111->setLongitude(29.935764670372006);
$em->persist($point1111);


$waySet1111 = new WaySet();
$waySet1111->setPoint($point1111);
$waySet1111->setWay($way);
$em->persist($waySet1111);


$point1112 = new Point();
$point1112->setLatitude(46.579630646972596);
$point1112->setLongitude(29.935367703437805);
$em->persist($point1112);


$waySet1112 = new WaySet();
$waySet1112->setPoint($point1112);
$waySet1112->setWay($way);
$em->persist($waySet1112);


$point1113 = new Point();
$point1113->setLatitude(46.58011735651609);
$point1113->setLongitude(29.935222864151005);
$em->persist($point1113);


$waySet1113 = new WaySet();
$waySet1113->setPoint($point1113);
$waySet1113->setWay($way);
$em->persist($waySet1113);


$point1114 = new Point();
$point1114->setLatitude(46.580578251677444);
$point1114->setLongitude(29.93545889854431);
$em->persist($point1114);


$waySet1114 = new WaySet();
$waySet1114->setPoint($point1114);
$waySet1114->setWay($way);
$em->persist($waySet1114);


$point1115 = new Point();
$point1115->setLatitude(46.58133779835469);
$point1115->setLongitude(29.935437440872192);
$em->persist($point1115);


$waySet1115 = new WaySet();
$waySet1115->setPoint($point1115);
$waySet1115->setWay($way);
$em->persist($waySet1115);


$point1116 = new Point();
$point1116->setLatitude(46.581743377173936);
$point1116->setLongitude(29.93546962738037);
$em->persist($point1116);


$waySet1116 = new WaySet();
$waySet1116->setPoint($point1116);
$waySet1116->setWay($way);
$em->persist($waySet1116);


$point1117 = new Point();
$point1117->setLatitude(46.58185398905264);
$point1117->setLongitude(29.936553239822388);
$em->persist($point1117);


$waySet1117 = new WaySet();
$waySet1117->setPoint($point1117);
$waySet1117->setWay($way);
$em->persist($waySet1117);


$point1118 = new Point();
$point1118->setLatitude(46.58229643431069);
$point1118->setLongitude(29.937331080436707);
$em->persist($point1118);


$waySet1118 = new WaySet();
$waySet1118->setPoint($point1118);
$waySet1118->setWay($way);
$em->persist($waySet1118);


$point1119 = new Point();
$point1119->setLatitude(46.58298959128877);
$point1119->setLongitude(29.93796408176422);
$em->persist($point1119);


$waySet1119 = new WaySet();
$waySet1119->setPoint($point1119);
$waySet1119->setWay($way);
$em->persist($waySet1119);


$point1120 = new Point();
$point1120->setLatitude(46.58468557631122);
$point1120->setLongitude(29.93861317634582);
$em->persist($point1120);


$waySet1120 = new WaySet();
$waySet1120->setPoint($point1120);
$waySet1120->setWay($way);
$em->persist($waySet1120);


$point1121 = new Point();
$point1121->setLatitude(46.58894005305268);
$point1121->setLongitude(29.94123101234436);
$em->persist($point1121);


$waySet1121 = new WaySet();
$waySet1121->setPoint($point1121);
$waySet1121->setWay($way);
$em->persist($waySet1121);


$point1122 = new Point();
$point1122->setLatitude(46.58983219732889);
$point1122->setLongitude(29.942593574523922);
$em->persist($point1122);


$waySet1122 = new WaySet();
$waySet1122->setPoint($point1122);
$waySet1122->setWay($way);
$em->persist($waySet1122);


$point1123 = new Point();
$point1123->setLatitude(46.591583264264074);
$point1123->setLongitude(29.946101903915405);
$em->persist($point1123);


$waySet1123 = new WaySet();
$waySet1123->setPoint($point1123);
$waySet1123->setWay($way);
$em->persist($waySet1123);


$point1124 = new Point();
$point1124->setLatitude(46.59391670342912);
$point1124->setLongitude(29.95047390460968);
$em->persist($point1124);


$waySet1124 = new WaySet();
$waySet1124->setPoint($point1124);
$waySet1124->setWay($way);
$em->persist($waySet1124);


$point1125 = new Point();
$point1125->setLatitude(46.59533220050277);
$point1125->setLongitude(29.952780604362488);
$em->persist($point1125);


$waySet1125 = new WaySet();
$waySet1125->setPoint($point1125);
$waySet1125->setWay($way);
$em->persist($waySet1125);


$point1126 = new Point();
$point1126->setLatitude(46.59702042731167);
$point1126->setLongitude(29.955098032951355);
$em->persist($point1126);


$waySet1126 = new WaySet();
$waySet1126->setPoint($point1126);
$waySet1126->setWay($way);
$em->persist($waySet1126);


$point1127 = new Point();
$point1127->setLatitude(46.59863856914274);
$point1127->setLongitude(29.95675027370453);
$em->persist($point1127);


$waySet1127 = new WaySet();
$waySet1127->setPoint($point1127);
$waySet1127->setWay($way);
$em->persist($waySet1127);


$point1128 = new Point();
$point1128->setLatitude(46.599784877279866);
$point1128->setLongitude(29.95782315731049);
$em->persist($point1128);


$waySet1128 = new WaySet();
$waySet1128->setPoint($point1128);
$waySet1128->setWay($way);
$em->persist($waySet1128);


$point1129 = new Point();
$point1129->setLatitude(46.60060681320158);
$point1129->setLongitude(29.95836496353149);
$em->persist($point1129);


$waySet1129 = new WaySet();
$waySet1129->setPoint($point1129);
$waySet1129->setWay($way);
$em->persist($waySet1129);


$point1130 = new Point();
$point1130->setLatitude(46.60133290765639);
$point1130->setLongitude(29.95886921882629);
$em->persist($point1130);


$waySet1130 = new WaySet();
$waySet1130->setPoint($point1130);
$waySet1130->setWay($way);
$em->persist($waySet1130);


$point1131 = new Point();
$point1131->setLatitude(46.60326788342928);
$point1131->setLongitude(29.959684610366818);
$em->persist($point1131);


$waySet1131 = new WaySet();
$waySet1131->setPoint($point1131);
$waySet1131->setWay($way);
$em->persist($waySet1131);


$point1132 = new Point();
$point1132->setLatitude(46.60500008882681);
$point1132->setLongitude(29.959840178489685);
$em->persist($point1132);


$waySet1132 = new WaySet();
$waySet1132->setPoint($point1132);
$waySet1132->setWay($way);
$em->persist($waySet1132);


$point1133 = new Point();
$point1133->setLatitude(46.606404240214175);
$point1133->setLongitude(29.959861636161804);
$em->persist($point1133);


$waySet1133 = new WaySet();
$waySet1133->setPoint($point1133);
$waySet1133->setWay($way);
$em->persist($waySet1133);


$point1134 = new Point();
$point1134->setLatitude(46.60673223883752);
$point1134->setLongitude(29.959786534309384);
$em->persist($point1134);


$waySet1134 = new WaySet();
$waySet1134->setPoint($point1134);
$waySet1134->setWay($way);
$em->persist($waySet1134);


$point1135 = new Point();
$point1135->setLatitude(46.60871492979955);
$point1135->setLongitude(29.959293007850643);
$em->persist($point1135);


$waySet1135 = new WaySet();
$waySet1135->setPoint($point1135);
$waySet1135->setWay($way);
$em->persist($waySet1135);


$point1136 = new Point();
$point1136->setLatitude(46.61328073947417);
$point1136->setLongitude(29.95683610439301);
$em->persist($point1136);


$waySet1136 = new WaySet();
$waySet1136->setPoint($point1136);
$waySet1136->setWay($way);
$em->persist($waySet1136);


$point1137 = new Point();
$point1137->setLatitude(46.61507895110913);
$point1137->setLongitude(29.95587587356567);
$em->persist($point1137);


$waySet1137 = new WaySet();
$waySet1137->setPoint($point1137);
$waySet1137->setWay($way);
$em->persist($waySet1137);


$point1138 = new Point();
$point1138->setLatitude(46.61769509501176);
$point1138->setLongitude(29.95448112487793);
$em->persist($point1138);


$waySet1138 = new WaySet();
$waySet1138->setPoint($point1138);
$waySet1138->setWay($way);
$em->persist($waySet1138);


$point1139 = new Point();
$point1139->setLatitude(46.62118063401799);
$point1139->setLongitude(29.953386783599854);
$em->persist($point1139);


$waySet1139 = new WaySet();
$waySet1139->setPoint($point1139);
$waySet1139->setWay($way);
$em->persist($waySet1139);


$point1140 = new Point();
$point1140->setLatitude(46.626294316839456);
$point1140->setLongitude(29.95340824127197);
$em->persist($point1140);


$waySet1140 = new WaySet();
$waySet1140->setPoint($point1140);
$waySet1140->setWay($way);
$em->persist($waySet1140);


$point1141 = new Point();
$point1141->setLatitude(46.62786369322265);
$point1141->setLongitude(29.953413605690002);
$em->persist($point1141);


$waySet1141 = new WaySet();
$waySet1141->setPoint($point1141);
$waySet1141->setWay($way);
$em->persist($waySet1141);


$point1142 = new Point();
$point1142->setLatitude(46.63303568202862);
$point1142->setLongitude(29.95450258255005);
$em->persist($point1142);


$waySet1142 = new WaySet();
$waySet1142->setPoint($point1142);
$waySet1142->setWay($way);
$em->persist($waySet1142);


$point1143 = new Point();
$point1143->setLatitude(46.634512776129746);
$point1143->setLongitude(29.95443284511566);
$em->persist($point1143);


$waySet1143 = new WaySet();
$waySet1143->setPoint($point1143);
$waySet1143->setWay($way);
$em->persist($waySet1143);


$point1144 = new Point();
$point1144->setLatitude(46.64418103727401);
$point1144->setLongitude(29.946831464767453);
$em->persist($point1144);


$waySet1144 = new WaySet();
$waySet1144->setPoint($point1144);
$waySet1144->setWay($way);
$em->persist($waySet1144);


$point1145 = new Point();
$point1145->setLatitude(46.64846766762751);
$point1145->setLongitude(29.94592487812042);
$em->persist($point1145);


$waySet1145 = new WaySet();
$waySet1145->setPoint($point1145);
$waySet1145->setWay($way);
$em->persist($waySet1145);


$point1146 = new Point();
$point1146->setLatitude(46.65080970359189);
$point1146->setLongitude(29.946675896644592);
$em->persist($point1146);


$waySet1146 = new WaySet();
$waySet1146->setPoint($point1146);
$waySet1146->setWay($way);
$em->persist($waySet1146);


$point1147 = new Point();
$point1147->setLatitude(46.65364505167367);
$point1147->setLongitude(29.949867725372314);
$em->persist($point1147);


$waySet1147 = new WaySet();
$waySet1147->setPoint($point1147);
$waySet1147->setWay($way);
$em->persist($waySet1147);


$point1148 = new Point();
$point1148->setLatitude(46.65519522458902);
$point1148->setLongitude(29.95048463344574);
$em->persist($point1148);


$waySet1148 = new WaySet();
$waySet1148->setPoint($point1148);
$waySet1148->setWay($way);
$em->persist($waySet1148);


$point1149 = new Point();
$point1149->setLatitude(46.65688158551399);
$point1149->setLongitude(29.951654076576233);
$em->persist($point1149);


$waySet1149 = new WaySet();
$waySet1149->setPoint($point1149);
$waySet1149->setWay($way);
$em->persist($waySet1149);


$point1150 = new Point();
$point1150->setLatitude(46.65927480222413);
$point1150->setLongitude(29.955398440361023);
$em->persist($point1150);


$waySet1150 = new WaySet();
$waySet1150->setPoint($point1150);
$waySet1150->setWay($way);
$em->persist($waySet1150);


$point1151 = new Point();
$point1151->setLatitude(46.66206552731097);
$point1151->setLongitude(29.956406950950623);
$em->persist($point1151);


$waySet1151 = new WaySet();
$waySet1151->setPoint($point1151);
$waySet1151->setWay($way);
$em->persist($waySet1151);


$point1152 = new Point();
$point1152->setLatitude(46.66400201441228);
$point1152->setLongitude(29.957340359687805);
$em->persist($point1152);


$waySet1152 = new WaySet();
$waySet1152->setPoint($point1152);
$waySet1152->setWay($way);
$em->persist($waySet1152);


$point1153 = new Point();
$point1153->setLatitude(46.666464860721845);
$point1153->setLongitude(29.958295226097103);
$em->persist($point1153);


$waySet1153 = new WaySet();
$waySet1153->setPoint($point1153);
$waySet1153->setWay($way);
$em->persist($waySet1153);


$point1154 = new Point();
$point1154->setLatitude(46.67020861394428);
$point1154->setLongitude(29.957930445671078);
$em->persist($point1154);


$waySet1154 = new WaySet();
$waySet1154->setPoint($point1154);
$waySet1154->setWay($way);
$em->persist($waySet1154);


$point1155 = new Point();
$point1155->setLatitude(46.67420608184143);
$point1155->setLongitude(29.95824158191681);
$em->persist($point1155);


$waySet1155 = new WaySet();
$waySet1155->setPoint($point1155);
$waySet1155->setWay($way);
$em->persist($waySet1155);


$point1156 = new Point();
$point1156->setLatitude(46.67567469052688);
$point1156->setLongitude(29.958600997924805);
$em->persist($point1156);


$waySet1156 = new WaySet();
$waySet1156->setPoint($point1156);
$waySet1156->setWay($way);
$em->persist($waySet1156);


$point1157 = new Point();
$point1157->setLatitude(46.67754444032121);
$point1157->setLongitude(29.959330558776852);
$em->persist($point1157);


$waySet1157 = new WaySet();
$waySet1157->setPoint($point1157);
$waySet1157->setWay($way);
$em->persist($waySet1157);


$point1158 = new Point();
$point1158->setLatitude(46.678718521788944);
$point1158->setLongitude(29.96054291725159);
$em->persist($point1158);


$waySet1158 = new WaySet();
$waySet1158->setPoint($point1158);
$waySet1158->setWay($way);
$em->persist($waySet1158);


$point1159 = new Point();
$point1159->setLatitude(46.68171433820675);
$point1159->setLongitude(29.966213107109073);
$em->persist($point1159);


$waySet1159 = new WaySet();
$waySet1159->setPoint($point1159);
$waySet1159->setWay($way);
$em->persist($waySet1159);


$point1160 = new Point();
$point1160->setLatitude(46.68327474681001);
$point1160->setLongitude(29.96815502643585);
$em->persist($point1160);


$waySet1160 = new WaySet();
$waySet1160->setPoint($point1160);
$waySet1160->setWay($way);
$em->persist($waySet1160);


$point1161 = new Point();
$point1161->setLatitude(46.685225194186344);
$point1161->setLongitude(29.97094988822937);
$em->persist($point1161);


$waySet1161 = new WaySet();
$waySet1161->setPoint($point1161);
$waySet1161->setWay($way);
$em->persist($waySet1161);


$point1162 = new Point();
$point1162->setLatitude(46.68632182989595);
$point1162->setLongitude(29.971539974212643);
$em->persist($point1162);


$waySet1162 = new WaySet();
$waySet1162->setPoint($point1162);
$waySet1162->setWay($way);
$em->persist($waySet1162);


$point1163 = new Point();
$point1163->setLatitude(46.68919579302301);
$point1163->setLongitude(29.971405863761902);
$em->persist($point1163);


$waySet1163 = new WaySet();
$waySet1163->setPoint($point1163);
$waySet1163->setWay($way);
$em->persist($waySet1163);


$point1164 = new Point();
$point1164->setLatitude(46.69284598411616);
$point1164->setLongitude(29.970654845237735);
$em->persist($point1164);


$waySet1164 = new WaySet();
$waySet1164->setPoint($point1164);
$waySet1164->setWay($way);
$em->persist($waySet1164);


$point1165 = new Point();
$point1165->setLatitude(46.69470042218012);
$point1165->setLongitude(29.96995210647583);
$em->persist($point1165);


$waySet1165 = new WaySet();
$waySet1165->setPoint($point1165);
$waySet1165->setWay($way);
$em->persist($waySet1165);


$point1166 = new Point();
$point1166->setLatitude(46.70088510145001);
$point1166->setLongitude(29.9686861038208);
$em->persist($point1166);


$waySet1166 = new WaySet();
$waySet1166->setPoint($point1166);
$waySet1166->setWay($way);
$em->persist($waySet1166);


$point1167 = new Point();
$point1167->setLatitude(46.70339776994605);
$point1167->setLongitude(29.96794044971466);
$em->persist($point1167);


$waySet1167 = new WaySet();
$waySet1167->setPoint($point1167);
$waySet1167->setWay($way);
$em->persist($waySet1167);


$point1168 = new Point();
$point1168->setLatitude(46.706785824437056);
$point1168->setLongitude(29.966921210289);
$em->persist($point1168);


$waySet1168 = new WaySet();
$waySet1168->setPoint($point1168);
$waySet1168->setWay($way);
$em->persist($waySet1168);


$point1169 = new Point();
$point1169->setLatitude(46.70925039930656);
$point1169->setLongitude(29.966180920600888);
$em->persist($point1169);


$waySet1169 = new WaySet();
$waySet1169->setPoint($point1169);
$waySet1169->setWay($way);
$em->persist($waySet1169);


$point1170 = new Point();
$point1170->setLatitude(46.71307578515508);
$point1170->setLongitude(29.967296719551083);
$em->persist($point1170);


$waySet1170 = new WaySet();
$waySet1170->setPoint($point1170);
$waySet1170->setWay($way);
$em->persist($waySet1170);


$point1171 = new Point();
$point1171->setLatitude(46.71472723813331);
$point1171->setLongitude(29.967768788337708);
$em->persist($point1171);


$waySet1171 = new WaySet();
$waySet1171->setPoint($point1171);
$waySet1171->setWay($way);
$em->persist($waySet1171);


$point1172 = new Point();
$point1172->setLatitude(46.72015938948761);
$point1172->setLongitude(29.9683266878128);
$em->persist($point1172);


$waySet1172 = new WaySet();
$waySet1172->setPoint($point1172);
$waySet1172->setWay($way);
$em->persist($waySet1172);


$point1173 = new Point();
$point1173->setLatitude(46.726624297588245);
$point1173->setLongitude(29.968176484107975);
$em->persist($point1173);


$waySet1173 = new WaySet();
$waySet1173->setPoint($point1173);
$waySet1173->setWay($way);
$em->persist($waySet1173);


$point1174 = new Point();
$point1174->setLatitude(46.73034917438399);
$point1174->setLongitude(29.968026280403137);
$em->persist($point1174);


$waySet1174 = new WaySet();
$waySet1174->setPoint($point1174);
$waySet1174->setWay($way);
$em->persist($waySet1174);


$point1175 = new Point();
$point1175->setLatitude(46.738437853059466);
$point1175->setLongitude(29.970327615737915);
$em->persist($point1175);


$waySet1175 = new WaySet();
$waySet1175->setPoint($point1175);
$waySet1175->setWay($way);
$em->persist($waySet1175);


$point1176 = new Point();
$point1176->setLatitude(46.74245600458942);
$point1176->setLongitude(29.971470236778263);
$em->persist($point1176);


$waySet1176 = new WaySet();
$waySet1176->setPoint($point1176);
$waySet1176->setWay($way);
$em->persist($waySet1176);


$point1177 = new Point();
$point1177->setLatitude(46.747098747279765);
$point1177->setLongitude(29.972929358482357);
$em->persist($point1177);


$waySet1177 = new WaySet();
$waySet1177->setPoint($point1177);
$waySet1177->setWay($way);
$em->persist($waySet1177);


$point1178 = new Point();
$point1178->setLatitude(46.750131201789756);
$point1178->setLongitude(29.973975419998165);
$em->persist($point1178);


$waySet1178 = new WaySet();
$waySet1178->setPoint($point1178);
$waySet1178->setWay($way);
$em->persist($waySet1178);


$point1179 = new Point();
$point1179->setLatitude(46.7521159887253);
$point1179->setLongitude(29.974710345268246);
$em->persist($point1179);


$waySet1179 = new WaySet();
$waySet1179->setPoint($point1179);
$waySet1179->setWay($way);
$em->persist($waySet1179);


$point1180 = new Point();
$point1180->setLatitude(46.75241370046149);
$point1180->setLongitude(29.97368037700653);
$em->persist($point1180);


$waySet1180 = new WaySet();
$waySet1180->setPoint($point1180);
$waySet1180->setWay($way);
$em->persist($waySet1180);


$point1181 = new Point();
$point1181->setLatitude(46.75389855913198);
$point1181->setLongitude(29.97414708137512);
$em->persist($point1181);


$waySet1181 = new WaySet();
$waySet1181->setPoint($point1181);
$waySet1181->setWay($way);
$em->persist($waySet1181);


$point1182 = new Point();
$point1182->setLatitude(46.754512337770144);
$point1182->setLongitude(29.970075488090515);
$em->persist($point1182);


$waySet1182 = new WaySet();
$waySet1182->setPoint($point1182);
$waySet1182->setWay($way);
$em->persist($waySet1182);


$point1183 = new Point();
$point1183->setLatitude(46.7551738877557);
$point1183->setLongitude(29.967312812805176);
$em->persist($point1183);


$waySet1183 = new WaySet();
$waySet1183->setPoint($point1183);
$waySet1183->setWay($way);
$em->persist($waySet1183);


$point1184 = new Point();
$point1184->setLatitude(46.75572517320663);
$point1184->setLongitude(29.966229200363156);
$em->persist($point1184);


$waySet1184 = new WaySet();
$waySet1184->setPoint($point1184);
$waySet1184->setWay($way);
$em->persist($waySet1184);


$point1185 = new Point();
$point1185->setLatitude(46.759598713266236);
$point1185->setLongitude(29.96565520763397);
$em->persist($point1185);


$waySet1185 = new WaySet();
$waySet1185->setPoint($point1185);
$waySet1185->setWay($way);
$em->persist($waySet1185);


$point1186 = new Point();
$point1186->setLatitude(46.761035600866514);
$point1186->setLongitude(29.965564012527466);
$em->persist($point1186);


$waySet1186 = new WaySet();
$waySet1186->setPoint($point1186);
$waySet1186->setWay($way);
$em->persist($waySet1186);


$point1187 = new Point();
$point1187->setLatitude(46.76246142587363);
$point1187->setLongitude(29.965875148773193);
$em->persist($point1187);


$waySet1187 = new WaySet();
$waySet1187->setPoint($point1187);
$waySet1187->setWay($way);
$em->persist($waySet1187);


$point1188 = new Point();
$point1188->setLatitude(46.76494550507377);
$point1188->setLongitude(29.9658590555191);
$em->persist($point1188);


$waySet1188 = new WaySet();
$waySet1188->setPoint($point1188);
$waySet1188->setWay($way);
$em->persist($waySet1188);


$point1189 = new Point();
$point1189->setLatitude(46.76577963024013);
$point1189->setLongitude(29.96592342853546);
$em->persist($point1189);


$waySet1189 = new WaySet();
$waySet1189->setPoint($point1189);
$waySet1189->setWay($way);
$em->persist($waySet1189);


$point1190 = new Point();
$point1190->setLatitude(46.76654025294351);
$point1190->setLongitude(29.965762495994568);
$em->persist($point1190);


$waySet1190 = new WaySet();
$waySet1190->setPoint($point1190);
$waySet1190->setWay($way);
$em->persist($waySet1190);


$point1191 = new Point();
$point1191->setLatitude(46.76727146947487);
$point1191->setLongitude(29.965660572052002);
$em->persist($point1191);


$waySet1191 = new WaySet();
$waySet1191->setPoint($point1191);
$waySet1191->setWay($way);
$em->persist($waySet1191);


$point1192 = new Point();
$point1192->setLatitude(46.76909395591911);
$point1192->setLongitude(29.96594488620758);
$em->persist($point1192);


$waySet1192 = new WaySet();
$waySet1192->setPoint($point1192);
$waySet1192->setWay($way);
$em->persist($waySet1192);


$point1193 = new Point();
$point1193->setLatitude(46.77138667385939);
$point1193->setLongitude(29.966068267822262);
$em->persist($point1193);


$waySet1193 = new WaySet();
$waySet1193->setPoint($point1193);
$waySet1193->setWay($way);
$em->persist($waySet1193);


$point1194 = new Point();
$point1194->setLatitude(46.77495782854327);
$point1194->setLongitude(29.9637508392334);
$em->persist($point1194);


$waySet1194 = new WaySet();
$waySet1194->setPoint($point1194);
$waySet1194->setWay($way);
$em->persist($waySet1194);


$point1195 = new Point();
$point1195->setLatitude(46.779939414155805);
$point1195->setLongitude(29.959588050842285);
$em->persist($point1195);


$waySet1195 = new WaySet();
$waySet1195->setPoint($point1195);
$waySet1195->setWay($way);
$em->persist($waySet1195);


$point1196 = new Point();
$point1196->setLatitude(46.78216554898804);
$point1196->setLongitude(29.95764076709747);
$em->persist($point1196);


$waySet1196 = new WaySet();
$waySet1196->setPoint($point1196);
$waySet1196->setWay($way);
$em->persist($waySet1196);


$point1197 = new Point();
$point1197->setLatitude(46.78720890999821);
$point1197->setLongitude(29.952308535575867);
$em->persist($point1197);


$waySet1197 = new WaySet();
$waySet1197->setPoint($point1197);
$waySet1197->setWay($way);
$em->persist($waySet1197);


$point1198 = new Point();
$point1198->setLatitude(46.791983688884905);
$point1198->setLongitude(29.94720160961151);
$em->persist($point1198);


$waySet1198 = new WaySet();
$waySet1198->setPoint($point1198);
$waySet1198->setWay($way);
$em->persist($waySet1198);


$point1199 = new Point();
$point1199->setLatitude(46.79368414245674);
$point1199->setLongitude(29.944980740547177);
$em->persist($point1199);


$waySet1199 = new WaySet();
$waySet1199->setPoint($point1199);
$waySet1199->setWay($way);
$em->persist($waySet1199);


$point1200 = new Point();
$point1200->setLatitude(46.79489242346429);
$point1200->setLongitude(29.943585991859436);
$em->persist($point1200);


$waySet1200 = new WaySet();
$waySet1200->setPoint($point1200);
$waySet1200->setWay($way);
$em->persist($waySet1200);


$point1201 = new Point();
$point1201->setLatitude(46.79612638457755);
$point1201->setLongitude(29.941944479942322);
$em->persist($point1201);


$waySet1201 = new WaySet();
$waySet1201->setPoint($point1201);
$waySet1201->setWay($way);
$em->persist($waySet1201);


$point1202 = new Point();
$point1202->setLatitude(46.79663685426406);
$point1202->setLongitude(29.942802786827084);
$em->persist($point1202);


$waySet1202 = new WaySet();
$waySet1202->setPoint($point1202);
$waySet1202->setWay($way);
$em->persist($waySet1202);


$point1203 = new Point();
$point1203->setLatitude(46.797125284754394);
$point1203->setLongitude(29.94290471076965);
$em->persist($point1203);


$waySet1203 = new WaySet();
$waySet1203->setPoint($point1203);
$waySet1203->setWay($way);
$em->persist($waySet1203);


$point1204 = new Point();
$point1204->setLatitude(46.79774958794868);
$point1204->setLongitude(29.942733049392697);
$em->persist($point1204);


$waySet1204 = new WaySet();
$waySet1204->setPoint($point1204);
$waySet1204->setWay($way);
$em->persist($waySet1204);


$point1205 = new Point();
$point1205->setLatitude(46.798300437693165);
$point1205->setLongitude(29.942330718040463);
$em->persist($point1205);


$waySet1205 = new WaySet();
$waySet1205->setPoint($point1205);
$waySet1205->setWay($way);
$em->persist($waySet1205);


$point1206 = new Point();
$point1206->setLatitude(46.80225904529926);
$point1206->setLongitude(29.938661456108093);
$em->persist($point1206);


$waySet1206 = new WaySet();
$waySet1206->setPoint($point1206);
$waySet1206->setWay($way);
$em->persist($waySet1206);


$point1207 = new Point();
$point1207->setLatitude(46.80581713696396);
$point1207->setLongitude(29.93520140647888);
$em->persist($point1207);


$waySet1207 = new WaySet();
$waySet1207->setPoint($point1207);
$waySet1207->setWay($way);
$em->persist($waySet1207);


$point1208 = new Point();
$point1208->setLatitude(46.80992572401976);
$point1208->setLongitude(29.944202899932858);
$em->persist($point1208);


$waySet1208 = new WaySet();
$waySet1208->setPoint($point1208);
$waySet1208->setWay($way);
$em->persist($waySet1208);


$point1209 = new Point();
$point1209->setLatitude(46.81393854495615);
$point1209->setLongitude(29.953075647354122);
$em->persist($point1209);


$waySet1209 = new WaySet();
$waySet1209->setPoint($point1209);
$waySet1209->setWay($way);
$em->persist($waySet1209);


$point1210 = new Point();
$point1210->setLatitude(46.81623302438727);
$point1210->setLongitude(29.95817184448242);
$em->persist($point1210);


$waySet1210 = new WaySet();
$waySet1210->setPoint($point1210);
$waySet1210->setWay($way);
$em->persist($waySet1210);


$point1211 = new Point();
$point1211->setLatitude(46.818347529943836);
$point1211->setLongitude(29.962854981422424);
$em->persist($point1211);


$waySet1211 = new WaySet();
$waySet1211->setPoint($point1211);
$waySet1211->setWay($way);
$em->persist($waySet1211);


$point1212 = new Point();
$point1212->setLatitude(46.81696356609012);
$point1212->setLongitude(29.97146487236023);
$em->persist($point1212);


$waySet1212 = new WaySet();
$waySet1212->setPoint($point1212);
$waySet1212->setWay($way);
$em->persist($waySet1212);


$point1213 = new Point();
$point1213->setLatitude(46.81673963225116);
$point1213->setLongitude(29.972854256629944);
$em->persist($point1213);


$waySet1213 = new WaySet();
$waySet1213->setPoint($point1213);
$waySet1213->setWay($way);
$em->persist($waySet1213);


$point1214 = new Point();
$point1214->setLatitude(46.8162550509154);
$point1214->setLongitude(29.978690743446347);
$em->persist($point1214);


$waySet1214 = new WaySet();
$waySet1214->setPoint($point1214);
$waySet1214->setWay($way);
$em->persist($waySet1214);


$point1215 = new Point();
$point1215->setLatitude(46.81871462313195);
$point1215->setLongitude(29.97973144054413);
$em->persist($point1215);


$waySet1215 = new WaySet();
$waySet1215->setPoint($point1215);
$waySet1215->setWay($way);
$em->persist($waySet1215);


$point1216 = new Point();
$point1216->setLatitude(46.819232220269065);
$point1216->setLongitude(29.979811906814575);
$em->persist($point1216);


$waySet1216 = new WaySet();
$waySet1216->setPoint($point1216);
$waySet1216->setWay($way);
$em->persist($waySet1216);


$point1217 = new Point();
$point1217->setLatitude(46.819782850051496);
$point1217->setLongitude(29.979490041732788);
$em->persist($point1217);


$waySet1217 = new WaySet();
$waySet1217->setPoint($point1217);
$waySet1217->setWay($way);
$em->persist($waySet1217);


$point1218 = new Point();
$point1218->setLatitude(46.82031512014773);
$point1218->setLongitude(29.978744387626648);
$em->persist($point1218);


$waySet1218 = new WaySet();
$waySet1218->setPoint($point1218);
$waySet1218->setWay($way);
$em->persist($waySet1218);


$point1219 = new Point();
$point1219->setLatitude(46.82091712963048);
$point1219->setLongitude(29.977650046348572);
$em->persist($point1219);


$waySet1219 = new WaySet();
$waySet1219->setPoint($point1219);
$waySet1219->setWay($way);
$em->persist($waySet1219);


$point1220 = new Point();
$point1220->setLatitude(46.82389771141879);
$point1220->setLongitude(29.97217833995819);
$em->persist($point1220);


$waySet1220 = new WaySet();
$waySet1220->setPoint($point1220);
$waySet1220->setWay($way);
$em->persist($waySet1220);


$point1221 = new Point();
$point1221->setLatitude(46.82643401233018);
$point1221->setLongitude(29.971497058868405);
$em->persist($point1221);


$waySet1221 = new WaySet();
$waySet1221->setPoint($point1221);
$waySet1221->setWay($way);
$em->persist($waySet1221);


$point1222 = new Point();
$point1222->setLatitude(46.827806721522634);
$point1222->setLongitude(29.971132278442383);
$em->persist($point1222);


$waySet1222 = new WaySet();
$waySet1222->setPoint($point1222);
$waySet1222->setWay($way);
$em->persist($waySet1222);


$point1223 = new Point();
$point1223->setLatitude(46.83183655828052);
$point1223->setLongitude(29.968594908714294);
$em->persist($point1223);


$waySet1223 = new WaySet();
$waySet1223->setPoint($point1223);
$waySet1223->setWay($way);
$em->persist($waySet1223);


$point1224 = new Point();
$point1224->setLatitude(46.83341097525525);
$point1224->setLongitude(29.965397715568542);
$em->persist($point1224);


$waySet1224 = new WaySet();
$waySet1224->setPoint($point1224);
$waySet1224->setWay($way);
$em->persist($waySet1224);


$point1225 = new Point();
$point1225->setLatitude(46.83484222339005);
$point1225->setLongitude(29.961401224136353);
$em->persist($point1225);


$waySet1225 = new WaySet();
$waySet1225->setPoint($point1225);
$waySet1225->setWay($way);
$em->persist($waySet1225);


$point1226 = new Point();
$point1226->setLatitude(46.83629545172471);
$point1226->setLongitude(29.959791898727417);
$em->persist($point1226);


$waySet1226 = new WaySet();
$waySet1226->setPoint($point1226);
$waySet1226->setWay($way);
$em->persist($waySet1226);


$point1227 = new Point();
$point1227->setLatitude(46.83745507038491);
$point1227->setLongitude(29.958815574645996);
$em->persist($point1227);


$waySet1227 = new WaySet();
$waySet1227->setPoint($point1227);
$waySet1227->setWay($way);
$em->persist($waySet1227);


$point1228 = new Point();
$point1228->setLatitude(46.838207341259114);
$point1228->setLongitude(29.95715796947479);
$em->persist($point1228);


$waySet1228 = new WaySet();
$waySet1228->setPoint($point1228);
$waySet1228->setWay($way);
$em->persist($waySet1228);


$point1229 = new Point();
$point1229->setLatitude(46.83884217629045);
$point1229->setLongitude(29.955376982688904);
$em->persist($point1229);


$waySet1229 = new WaySet();
$waySet1229->setPoint($point1229);
$waySet1229->setWay($way);
$em->persist($waySet1229);


$point1230 = new Point();
$point1230->setLatitude(46.8394916818258);
$point1230->setLongitude(29.95416462421417);
$em->persist($point1230);


$waySet1230 = new WaySet();
$waySet1230->setPoint($point1230);
$waySet1230->setWay($way);
$em->persist($waySet1230);


$point1231 = new Point();
$point1231->setLatitude(46.84254461960278);
$point1231->setLongitude(29.952056407928467);
$em->persist($point1231);


$waySet1231 = new WaySet();
$waySet1231->setPoint($point1231);
$waySet1231->setWay($way);
$em->persist($waySet1231);


$point1232 = new Point();
$point1232->setLatitude(46.839843952730504);
$point1232->setLongitude(29.942963719367977);
$em->persist($point1232);


$waySet1232 = new WaySet();
$waySet1232->setPoint($point1232);
$waySet1232->setWay($way);
$em->persist($waySet1232);


$point1233 = new Point();
$point1233->setLatitude(46.838695394290866);
$point1233->setLongitude(29.93919789791107);
$em->persist($point1233);


$waySet1233 = new WaySet();
$waySet1233->setPoint($point1233);
$waySet1233->setWay($way);
$em->persist($waySet1233);


$point1234 = new Point();
$point1234->setLatitude(46.83659269813356);
$point1234->setLongitude(29.932428002357483);
$em->persist($point1234);


$waySet1234 = new WaySet();
$waySet1234->setPoint($point1234);
$waySet1234->setWay($way);
$em->persist($waySet1234);


$point1235 = new Point();
$point1235->setLatitude(46.83569728421462);
$point1235->setLongitude(29.928882122039795);
$em->persist($point1235);


$waySet1235 = new WaySet();
$waySet1235->setPoint($point1235);
$waySet1235->setWay($way);
$em->persist($waySet1235);


$point1236 = new Point();
$point1236->setLatitude(46.83483488375327);
$point1236->setLongitude(29.925513267517093);
$em->persist($point1236);


$waySet1236 = new WaySet();
$waySet1236->setPoint($point1236);
$waySet1236->setWay($way);
$em->persist($waySet1236);


$point1237 = new Point();
$point1237->setLatitude(46.830651127650945);
$point1237->setLongitude(29.92728888988495);
$em->persist($point1237);


$waySet1237 = new WaySet();
$waySet1237->setPoint($point1237);
$waySet1237->setWay($way);
$em->persist($waySet1237);


$point1238 = new Point();
$point1238->setLatitude(46.82811502571828);
$point1238->setLongitude(29.928367137908936);
$em->persist($point1238);


$waySet1238 = new WaySet();
$waySet1238->setPoint($point1238);
$waySet1238->setWay($way);
$em->persist($waySet1238);


$point1239 = new Point();
$point1239->setLatitude(46.82495115338884);
$point1239->setLongitude(29.91997718811035);
$em->persist($point1239);


$waySet1239 = new WaySet();
$waySet1239->setPoint($point1239);
$waySet1239->setWay($way);
$em->persist($waySet1239);


$point1240 = new Point();
$point1240->setLatitude(46.82181278980074);
$point1240->setLongitude(29.9107825756073);
$em->persist($point1240);


$waySet1240 = new WaySet();
$waySet1240->setPoint($point1240);
$waySet1240->setWay($way);
$em->persist($waySet1240);


$point1241 = new Point();
$point1241->setLatitude(46.82124015633017);
$point1241->setLongitude(29.909103512763973);
$em->persist($point1241);


$waySet1241 = new WaySet();
$waySet1241->setPoint($point1241);
$waySet1241->setWay($way);
$em->persist($waySet1241);


$point1242 = new Point();
$point1242->setLatitude(46.820436256743896);
$point1242->setLongitude(29.905943870544437);
$em->persist($point1242);


$waySet1242 = new WaySet();
$waySet1242->setPoint($point1242);
$waySet1242->setWay($way);
$em->persist($waySet1242);


$point1243 = new Point();
$point1243->setLatitude(46.823541665388596);
$point1243->setLongitude(29.903631806373596);
$em->persist($point1243);


$waySet1243 = new WaySet();
$waySet1243->setPoint($point1243);
$waySet1243->setWay($way);
$em->persist($waySet1243);


$point1244 = new Point();
$point1244->setLatitude(46.829814337346846);
$point1244->setLongitude(29.8989325761795);
$em->persist($point1244);


$waySet1244 = new WaySet();
$waySet1244->setPoint($point1244);
$waySet1244->setWay($way);
$em->persist($waySet1244);


$point1245 = new Point();
$point1245->setLatitude(46.83208978929816);
$point1245->setLongitude(29.897232055664066);
$em->persist($point1245);


$waySet1245 = new WaySet();
$waySet1245->setPoint($point1245);
$waySet1245->setWay($way);
$em->persist($waySet1245);


$point1246 = new Point();
$point1246->setLatitude(46.83617435086452);
$point1246->setLongitude(29.89451766014099);
$em->persist($point1246);


$waySet1246 = new WaySet();
$waySet1246->setPoint($point1246);
$waySet1246->setWay($way);
$em->persist($waySet1246);


$point1247 = new Point();
$point1247->setLatitude(46.84128603766592);
$point1247->setLongitude(29.891111254692078);
$em->persist($point1247);


$waySet1247 = new WaySet();
$waySet1247->setPoint($point1247);
$waySet1247->setWay($way);
$em->persist($waySet1247);


$point1248 = new Point();
$point1248->setLatitude(46.84161628067745);
$point1248->setLongitude(29.890875220298764);
$em->persist($point1248);


$waySet1248 = new WaySet();
$waySet1248->setPoint($point1248);
$waySet1248->setWay($way);
$em->persist($waySet1248);


$point1249 = new Point();
$point1249->setLatitude(46.84618076502945);
$point1249->setLongitude(29.886835813522335);
$em->persist($point1249);


$waySet1249 = new WaySet();
$waySet1249->setPoint($point1249);
$waySet1249->setWay($way);
$em->persist($waySet1249);


$point1250 = new Point();
$point1250->setLatitude(46.847817133623025);
$point1250->setLongitude(29.885419607162476);
$em->persist($point1250);


$waySet1250 = new WaySet();
$waySet1250->setPoint($point1250);
$waySet1250->setWay($way);
$em->persist($waySet1250);


$point1251 = new Point();
$point1251->setLatitude(46.84935806295686);
$point1251->setLongitude(29.88445937633514);
$em->persist($point1251);


$waySet1251 = new WaySet();
$waySet1251->setPoint($point1251);
$waySet1251->setWay($way);
$em->persist($waySet1251);


$point1252 = new Point();
$point1252->setLatitude(46.85164736205291);
$point1252->setLongitude(29.8835688829422);
$em->persist($point1252);


$waySet1252 = new WaySet();
$waySet1252->setPoint($point1252);
$waySet1252->setWay($way);
$em->persist($waySet1252);


$point1253 = new Point();
$point1253->setLatitude(46.85357704799626);
$point1253->setLongitude(29.892141222953796);
$em->persist($point1253);


$waySet1253 = new WaySet();
$waySet1253->setPoint($point1253);
$waySet1253->setWay($way);
$em->persist($waySet1253);


$point1254 = new Point();
$point1254->setLatitude(46.85749857251477);
$point1254->setLongitude(29.89130437374115);
$em->persist($point1254);


$waySet1254 = new WaySet();
$waySet1254->setPoint($point1254);
$waySet1254->setWay($way);
$em->persist($waySet1254);


$point1255 = new Point();
$point1255->setLatitude(46.86075223000477);
$point1255->setLongitude(29.890617728233337);
$em->persist($point1255);


$waySet1255 = new WaySet();
$waySet1255->setPoint($point1255);
$waySet1255->setWay($way);
$em->persist($waySet1255);


$point1256 = new Point();
$point1256->setLatitude(46.86645207459581);
$point1256->setLongitude(29.88898158073425);
$em->persist($point1256);


$waySet1256 = new WaySet();
$waySet1256->setPoint($point1256);
$waySet1256->setWay($way);
$em->persist($waySet1256);


$point1257 = new Point();
$point1257->setLatitude(46.87227233378208);
$point1257->setLongitude(29.887098670005795);
$em->persist($point1257);


$waySet1257 = new WaySet();
$waySet1257->setPoint($point1257);
$waySet1257->setWay($way);
$em->persist($waySet1257);


$point1258 = new Point();
$point1258->setLatitude(46.87461932966788);
$point1258->setLongitude(29.88626718521118);
$em->persist($point1258);


$waySet1258 = new WaySet();
$waySet1258->setPoint($point1258);
$waySet1258->setWay($way);
$em->persist($waySet1258);


$point1259 = new Point();
$point1259->setLatitude(46.87925801178607);
$point1259->setLongitude(29.88533914089203);
$em->persist($point1259);


$waySet1259 = new WaySet();
$waySet1259->setPoint($point1259);
$waySet1259->setWay($way);
$em->persist($waySet1259);


$point1260 = new Point();
$point1260->setLatitude(46.88043136980068);
$point1260->setLongitude(29.88509774208069);
$em->persist($point1260);


$waySet1260 = new WaySet();
$waySet1260->setPoint($point1260);
$waySet1260->setWay($way);
$em->persist($waySet1260);


$point1261 = new Point();
$point1261->setLatitude(46.88238935384955);
$point1261->setLongitude(29.88484561443329);
$em->persist($point1261);


$waySet1261 = new WaySet();
$waySet1261->setPoint($point1261);
$waySet1261->setWay($way);
$em->persist($waySet1261);


$point1262 = new Point();
$point1262->setLatitude(46.88360297475582);
$point1262->setLongitude(29.884743690490726);
$em->persist($point1262);


$waySet1262 = new WaySet();
$waySet1262->setPoint($point1262);
$waySet1262->setWay($way);
$em->persist($waySet1262);


$point1263 = new Point();
$point1263->setLatitude(46.88593480977351);
$point1263->setLongitude(29.884330630302433);
$em->persist($point1263);


$waySet1263 = new WaySet();
$waySet1263->setPoint($point1263);
$waySet1263->setWay($way);
$em->persist($waySet1263);


$point1264 = new Point();
$point1264->setLatitude(46.88612179215395);
$point1264->setLongitude(29.884067773818966);
$em->persist($point1264);


$waySet1264 = new WaySet();
$waySet1264->setPoint($point1264);
$waySet1264->setWay($way);
$em->persist($waySet1264);


$point1265 = new Point();
$point1265->setLatitude(46.88564150276562);
$point1265->setLongitude(29.879293441772457);
$em->persist($point1265);


$waySet1265 = new WaySet();
$waySet1265->setPoint($point1265);
$waySet1265->setWay($way);
$em->persist($waySet1265);


$point1266 = new Point();
$point1266->setLatitude(46.885150209934594);
$point1266->setLongitude(29.875951409339905);
$em->persist($point1266);


$waySet1266 = new WaySet();
$waySet1266->setPoint($point1266);
$waySet1266->setWay($way);
$em->persist($waySet1266);


$point1267 = new Point();
$point1267->setLatitude(46.88378263231534);
$point1267->setLongitude(29.863076806068417);
$em->persist($point1267);


$waySet1267 = new WaySet();
$waySet1267->setPoint($point1267);
$waySet1267->setWay($way);
$em->persist($waySet1267);


$point1268 = new Point();
$point1268->setLatitude(46.88310066369261);
$point1268->setLongitude(29.856650233268734);
$em->persist($point1268);


$waySet1268 = new WaySet();
$waySet1268->setPoint($point1268);
$waySet1268->setWay($way);
$em->persist($waySet1268);


$point1269 = new Point();
$point1269->setLatitude(46.88239668698884);
$point1269->setLongitude(29.851183891296383);
$em->persist($point1269);


$waySet1269 = new WaySet();
$waySet1269->setPoint($point1269);
$waySet1269->setWay($way);
$em->persist($waySet1269);


$point1270 = new Point();
$point1270->setLatitude(46.88211069381427);
$point1270->setLongitude(29.849440455436703);
$em->persist($point1270);


$waySet1270 = new WaySet();
$waySet1270->setPoint($point1270);
$waySet1270->setWay($way);
$em->persist($waySet1270);


$point1271 = new Point();
$point1271->setLatitude(46.88203369539139);
$point1271->setLongitude(29.846785068511963);
$em->persist($point1271);


$waySet1271 = new WaySet();
$waySet1271->setPoint($point1271);
$waySet1271->setWay($way);
$em->persist($waySet1271);


$point1272 = new Point();
$point1272->setLatitude(46.88003903107011);
$point1272->setLongitude(29.847278594970703);
$em->persist($point1272);


$waySet1272 = new WaySet();
$waySet1272->setPoint($point1272);
$waySet1272->setWay($way);
$em->persist($waySet1272);


$point1273 = new Point();
$point1273->setLatitude(46.875433419888886);
$point1273->setLongitude(29.849140048027042);
$em->persist($point1273);


$waySet1273 = new WaySet();
$waySet1273->setPoint($point1273);
$waySet1273->setWay($way);
$em->persist($waySet1273);


$point1274 = new Point();
$point1274->setLatitude(46.874105933088494);
$point1274->setLongitude(29.83975231647491);
$em->persist($point1274);


$waySet1274 = new WaySet();
$waySet1274->setPoint($point1274);
$waySet1274->setWay($way);
$em->persist($waySet1274);


$point1275 = new Point();
$point1275->setLatitude(46.873097461222585);
$point1275->setLongitude(29.833202362060547);
$em->persist($point1275);


$waySet1275 = new WaySet();
$waySet1275->setPoint($point1275);
$waySet1275->setWay($way);
$em->persist($waySet1275);


$point1276 = new Point();
$point1276->setLatitude(46.872331009930164);
$point1276->setLongitude(29.827714562416073);
$em->persist($point1276);


$waySet1276 = new WaySet();
$waySet1276->setPoint($point1276);
$waySet1276->setWay($way);
$em->persist($waySet1276);


$point1277 = new Point();
$point1277->setLatitude(46.871560880381935);
$point1277->setLongitude(29.822301864624023);
$em->persist($point1277);


$waySet1277 = new WaySet();
$waySet1277->setPoint($point1277);
$waySet1277->setWay($way);
$em->persist($waySet1277);


$point1278 = new Point();
$point1278->setLatitude(46.87069172090386);
$point1278->setLongitude(29.816068410873413);
$em->persist($point1278);


$waySet1278 = new WaySet();
$waySet1278->setPoint($point1278);
$waySet1278->setWay($way);
$em->persist($waySet1278);


$point1279 = new Point();
$point1279->setLatitude(46.86971252437789);
$point1279->setLongitude(29.809470176696777);
$em->persist($point1279);


$waySet1279 = new WaySet();
$waySet1279->setPoint($point1279);
$waySet1279->setWay($way);
$em->persist($waySet1279);


$point1280 = new Point();
$point1280->setLatitude(46.869217418211);
$point1280->setLongitude(29.8061603307724);
$em->persist($point1280);


$waySet1280 = new WaySet();
$waySet1280->setPoint($point1280);
$waySet1280->setWay($way);
$em->persist($waySet1280);


$point1281 = new Point();
$point1281->setLatitude(46.867966796370446);
$point1281->setLongitude(29.797840118408203);
$em->persist($point1281);


$waySet1281 = new WaySet();
$waySet1281->setPoint($point1281);
$waySet1281->setWay($way);
$em->persist($waySet1281);


$point1282 = new Point();
$point1282->setLatitude(46.86643373629796);
$point1282->setLongitude(29.787325859069824);
$em->persist($point1282);


$waySet1282 = new WaySet();
$waySet1282->setPoint($point1282);
$waySet1282->setWay($way);
$em->persist($waySet1282);


$point1283 = new Point();
$point1283->setLatitude(46.865997282959455);
$point1283->setLongitude(29.784380793571472);
$em->persist($point1283);


$waySet1283 = new WaySet();
$waySet1283->setPoint($point1283);
$waySet1283->setWay($way);
$em->persist($waySet1283);


$point1284 = new Point();
$point1284->setLatitude(46.86480527046725);
$point1284->setLongitude(29.77615177631378);
$em->persist($point1284);


$waySet1284 = new WaySet();
$waySet1284->setPoint($point1284);
$waySet1284->setWay($way);
$em->persist($waySet1284);


$point1285 = new Point();
$point1285->setLatitude(46.864035032933614);
$point1285->setLongitude(29.770765900611877);
$em->persist($point1285);


$waySet1285 = new WaySet();
$waySet1285->setPoint($point1285);
$waySet1285->setWay($way);
$em->persist($waySet1285);


$point1286 = new Point();
$point1286->setLatitude(46.86313274062455);
$point1286->setLongitude(29.764494895935055);
$em->persist($point1286);


$waySet1286 = new WaySet();
$waySet1286->setPoint($point1286);
$waySet1286->setWay($way);
$em->persist($waySet1286);


$point1287 = new Point();
$point1287->setLatitude(46.86276961870841);
$point1287->setLongitude(29.761978983879086);
$em->persist($point1287);


$waySet1287 = new WaySet();
$waySet1287->setPoint($point1287);
$waySet1287->setWay($way);
$em->persist($waySet1287);


$point1288 = new Point();
$point1288->setLatitude(46.86107868531768);
$point1288->setLongitude(29.749914407730106);
$em->persist($point1288);


$waySet1288 = new WaySet();
$waySet1288->setPoint($point1288);
$waySet1288->setWay($way);
$em->persist($waySet1288);


$point1289 = new Point();
$point1289->setLatitude(46.86096130835507);
$point1289->setLongitude(29.749356508255);
$em->persist($point1289);


$waySet1289 = new WaySet();
$waySet1289->setPoint($point1289);
$waySet1289->setWay($way);
$em->persist($waySet1289);


$point1290 = new Point();
$point1290->setLatitude(46.86416340662334);
$point1290->setLongitude(29.748342633247372);
$em->persist($point1290);


$waySet1290 = new WaySet();
$waySet1290->setPoint($point1290);
$waySet1290->setWay($way);
$em->persist($waySet1290);


$point1291 = new Point();
$point1291->setLatitude(46.86878098750632);
$point1291->setLongitude(29.746878147125244);
$em->persist($point1291);


$waySet1291 = new WaySet();
$waySet1291->setPoint($point1291);
$waySet1291->setWay($way);
$em->persist($waySet1291);


$point1292 = new Point();
$point1292->setLatitude(46.87463033096941);
$point1292->setLongitude(29.745027422904965);
$em->persist($point1292);


$waySet1292 = new WaySet();
$waySet1292->setPoint($point1292);
$waySet1292->setWay($way);
$em->persist($waySet1292);


$point1293 = new Point();
$point1293->setLatitude(46.87838531012328);
$point1293->setLongitude(29.74383115768433);
$em->persist($point1293);


$waySet1293 = new WaySet();
$waySet1293->setPoint($point1293);
$waySet1293->setWay($way);
$em->persist($waySet1293);


$point1294 = new Point();
$point1294->setLatitude(46.882268356906756);
$point1294->setLongitude(29.74260270595551);
$em->persist($point1294);


$waySet1294 = new WaySet();
$waySet1294->setPoint($point1294);
$waySet1294->setWay($way);
$em->persist($waySet1294);


$point1295 = new Point();
$point1295->setLatitude(46.88578449013231);
$point1295->setLongitude(29.74149763584137);
$em->persist($point1295);


$waySet1295 = new WaySet();
$waySet1295->setPoint($point1295);
$waySet1295->setWay($way);
$em->persist($waySet1295);


$point1296 = new Point();
$point1296->setLatitude(46.889439704427396);
$point1296->setLongitude(29.740333557128903);
$em->persist($point1296);


$waySet1296 = new WaySet();
$waySet1296->setPoint($point1296);
$waySet1296->setWay($way);
$em->persist($waySet1296);


$point1297 = new Point();
$point1297->setLatitude(46.894755268633446);
$point1297->setLongitude(29.738643765449527);
$em->persist($point1297);


$waySet1297 = new WaySet();
$waySet1297->setPoint($point1297);
$waySet1297->setWay($way);
$em->persist($waySet1297);


$point1298 = new Point();
$point1298->setLatitude(46.89946185256477);
$point1298->setLongitude(29.737157821655273);
$em->persist($point1298);


$waySet1298 = new WaySet();
$waySet1298->setPoint($point1298);
$waySet1298->setWay($way);
$em->persist($waySet1298);


$point1299 = new Point();
$point1299->setLatitude(46.90409838679644);
$point1299->setLongitude(29.735687971115112);
$em->persist($point1299);


$waySet1299 = new WaySet();
$waySet1299->setPoint($point1299);
$waySet1299->setWay($way);
$em->persist($waySet1299);


$point1300 = new Point();
$point1300->setLatitude(46.908664889400406);
$point1300->setLongitude(29.734239578247067);
$em->persist($point1300);


$waySet1300 = new WaySet();
$waySet1300->setPoint($point1300);
$waySet1300->setWay($way);
$em->persist($waySet1300);


$point1301 = new Point();
$point1301->setLatitude(46.91378799825179);
$point1301->setLongitude(29.732635617256165);
$em->persist($point1301);


$waySet1301 = new WaySet();
$waySet1301->setPoint($point1301);
$waySet1301->setWay($way);
$em->persist($waySet1301);


$point1302 = new Point();
$point1302->setLatitude(46.91621745593497);
$point1302->setLongitude(29.731900691986084);
$em->persist($point1302);


$waySet1302 = new WaySet();
$waySet1302->setPoint($point1302);
$waySet1302->setWay($way);
$em->persist($waySet1302);


$point1303 = new Point();
$point1303->setLatitude(46.91929534369684);
$point1303->setLongitude(29.731037020683285);
$em->persist($point1303);


$waySet1303 = new WaySet();
$waySet1303->setPoint($point1303);
$waySet1303->setWay($way);
$em->persist($waySet1303);


$point1304 = new Point();
$point1304->setLatitude(46.91833169070686);
$point1304->setLongitude(29.72120940685272);
$em->persist($point1304);


$waySet1304 = new WaySet();
$waySet1304->setPoint($point1304);
$waySet1304->setWay($way);
$em->persist($waySet1304);


$point1305 = new Point();
$point1305->setLatitude(46.92218986252873);
$point1305->setLongitude(29.72038328647613);
$em->persist($point1305);


$waySet1305 = new WaySet();
$waySet1305->setPoint($point1305);
$waySet1305->setWay($way);
$em->persist($waySet1305);


$point1306 = new Point();
$point1306->setLatitude(46.9253223617692);
$point1306->setLongitude(29.71969664096832);
$em->persist($point1306);


$waySet1306 = new WaySet();
$waySet1306->setPoint($point1306);
$waySet1306->setWay($way);
$em->persist($waySet1306);


$point1307 = new Point();
$point1307->setLatitude(46.92859388764087);
$point1307->setLongitude(29.71889197826385);
$em->persist($point1307);


$waySet1307 = new WaySet();
$waySet1307->setPoint($point1307);
$waySet1307->setWay($way);
$em->persist($waySet1307);


$point1308 = new Point();
$point1308->setLatitude(46.931304743132706);
$point1308->setLongitude(29.718226790428158);
$em->persist($point1308);


$waySet1308 = new WaySet();
$waySet1308->setPoint($point1308);
$waySet1308->setWay($way);
$em->persist($waySet1308);


$point1309 = new Point();
$point1309->setLatitude(46.93211430985531);
$point1309->setLongitude(29.718065857887265);
$em->persist($point1309);


$waySet1309 = new WaySet();
$waySet1309->setPoint($point1309);
$waySet1309->setWay($way);
$em->persist($waySet1309);


$point1310 = new Point();
$point1310->setLatitude(46.93205569910079);
$point1310->setLongitude(29.717690348625183);
$em->persist($point1310);


$waySet1310 = new WaySet();
$waySet1310->setPoint($point1310);
$waySet1310->setWay($way);
$em->persist($waySet1310);


$point1311 = new Point();
$point1311->setLatitude(46.931744328391844);
$point1311->setLongitude(29.716976881027218);
$em->persist($point1311);


$waySet1311 = new WaySet();
$waySet1311->setPoint($point1311);
$waySet1311->setWay($way);
$em->persist($waySet1311);


$point1312 = new Point();
$point1312->setLatitude(46.92980279960767);
$point1312->setLongitude(29.712615609169003);
$em->persist($point1312);


$waySet1312 = new WaySet();
$waySet1312->setPoint($point1312);
$waySet1312->setWay($way);
$em->persist($waySet1312);


$point1313 = new Point();
$point1313->setLatitude(46.92875874087941);
$point1313->setLongitude(29.7102552652359);
$em->persist($point1313);


$waySet1313 = new WaySet();
$waySet1313->setPoint($point1313);
$waySet1313->setWay($way);
$em->persist($waySet1313);


$point1314 = new Point();
$point1314->setLatitude(46.92813962275823);
$point1314->setLongitude(29.708747863769528);
$em->persist($point1314);


$waySet1314 = new WaySet();
$waySet1314->setPoint($point1314);
$waySet1314->setWay($way);
$em->persist($waySet1314);


$point1315 = new Point();
$point1315->setLatitude(46.92462993033819);
$point1315->setLongitude(29.709745645523068);
$em->persist($point1315);


$waySet1315 = new WaySet();
$waySet1315->setPoint($point1315);
$waySet1315->setWay($way);
$em->persist($waySet1315);


$point1316 = new Point();
$point1316->setLatitude(46.92391550757601);
$point1316->setLongitude(29.700754880905155);
$em->persist($point1316);


$waySet1316 = new WaySet();
$waySet1316->setPoint($point1316);
$waySet1316->setWay($way);
$em->persist($waySet1316);


$point1317 = new Point();
$point1317->setLatitude(46.92489005113172);
$point1317->setLongitude(29.700384736061096);
$em->persist($point1317);


$waySet1317 = new WaySet();
$waySet1317->setPoint($point1317);
$waySet1317->setWay($way);
$em->persist($waySet1317);


$point1318 = new Point();
$point1318->setLatitude(46.924069384052935);
$point1318->setLongitude(29.692804813385006);
$em->persist($point1318);


$waySet1318 = new WaySet();
$waySet1318->setPoint($point1318);
$waySet1318->setWay($way);
$em->persist($waySet1318);


$point1319 = new Point();
$point1319->setLatitude(46.92378727684097);
$point1319->setLongitude(29.68922138214111);
$em->persist($point1319);


$waySet1319 = new WaySet();
$waySet1319->setPoint($point1319);
$waySet1319->setWay($way);
$em->persist($waySet1319);


$point1320 = new Point();
$point1320->setLatitude(46.923527150692735);
$point1320->setLongitude(29.686930775642395);
$em->persist($point1320);


$waySet1320 = new WaySet();
$waySet1320->setPoint($point1320);
$waySet1320->setWay($way);
$em->persist($waySet1320);


$point1321 = new Point();
$point1321->setLatitude(46.922680816033996);
$point1321->setLongitude(29.67874467372894);
$em->persist($point1321);


$waySet1321 = new WaySet();
$waySet1321->setPoint($point1321);
$waySet1321->setWay($way);
$em->persist($waySet1321);


$point1322 = new Point();
$point1322->setLatitude(46.92175752661218);
$point1322->setLongitude(29.669651985168453);
$em->persist($point1322);


$waySet1322 = new WaySet();
$waySet1322->setPoint($point1322);
$waySet1322->setWay($way);
$em->persist($waySet1322);


$point1323 = new Point();
$point1323->setLatitude(46.92103573768905);
$point1323->setLongitude(29.66273188591003);
$em->persist($point1323);


$waySet1323 = new WaySet();
$waySet1323->setPoint($point1323);
$waySet1323->setWay($way);
$em->persist($waySet1323);


$point1324 = new Point();
$point1324->setLatitude(46.92014905981398);
$point1324->setLongitude(29.654245376586914);
$em->persist($point1324);


$waySet1324 = new WaySet();
$waySet1324->setPoint($point1324);
$waySet1324->setWay($way);
$em->persist($waySet1324);


$point1325 = new Point();
$point1325->setLatitude(46.91943091325917);
$point1325->setLongitude(29.647931456565857);
$em->persist($point1325);


$waySet1325 = new WaySet();
$waySet1325->setPoint($point1325);
$waySet1325->setWay($way);
$em->persist($waySet1325);


$point1326 = new Point();
$point1326->setLatitude(46.92264784168577);
$point1326->setLongitude(29.647164344787598);
$em->persist($point1326);


$waySet1326 = new WaySet();
$waySet1326->setPoint($point1326);
$waySet1326->setWay($way);
$em->persist($waySet1326);


$point1327 = new Point();
$point1327->setLatitude(46.92361141704808);
$point1327->setLongitude(29.646933674812317);
$em->persist($point1327);


$waySet1327 = new WaySet();
$waySet1327->setPoint($point1327);
$waySet1327->setWay($way);
$em->persist($waySet1327);


$point1328 = new Point();
$point1328->setLatitude(46.926322524701824);
$point1328->setLongitude(29.646434783935543);
$em->persist($point1328);


$waySet1328 = new WaySet();
$waySet1328->setPoint($point1328);
$waySet1328->setWay($way);
$em->persist($waySet1328);


$point1329 = new Point();
$point1329->setLatitude(46.930927429574425);
$point1329->setLongitude(29.645410180091854);
$em->persist($point1329);


$waySet1329 = new WaySet();
$waySet1329->setPoint($point1329);
$waySet1329->setWay($way);
$em->persist($waySet1329);


$point1330 = new Point();
$point1330->setLatitude(46.93423890640091);
$point1330->setLongitude(29.644659161567688);
$em->persist($point1330);


$waySet1330 = new WaySet();
$waySet1330->setPoint($point1330);
$waySet1330->setWay($way);
$em->persist($waySet1330);


$point1331 = new Point();
$point1331->setLatitude(46.93957933029665);
$point1331->setLongitude(29.643425345420834);
$em->persist($point1331);


$waySet1331 = new WaySet();
$waySet1331->setPoint($point1331);
$waySet1331->setWay($way);
$em->persist($waySet1331);


$point1332 = new Point();
$point1332->setLatitude(46.94155346738581);
$point1332->setLongitude(29.64295327663422);
$em->persist($point1332);


$waySet1332 = new WaySet();
$waySet1332->setPoint($point1332);
$waySet1332->setWay($way);
$em->persist($waySet1332);


$point1333 = new Point();
$point1333->setLatitude(46.94575788038756);
$point1333->setLongitude(29.641907215118408);
$em->persist($point1333);


$waySet1333 = new WaySet();
$waySet1333->setPoint($point1333);
$waySet1333->setWay($way);
$em->persist($waySet1333);


$point1334 = new Point();
$point1334->setLatitude(46.94894393162657);
$point1334->setLongitude(29.64114546775818);
$em->persist($point1334);


$waySet1334 = new WaySet();
$waySet1334->setPoint($point1334);
$waySet1334->setWay($way);
$em->persist($waySet1334);


$point1335 = new Point();
$point1335->setLatitude(46.95173431726928);
$point1335->setLongitude(29.640474915504452);
$em->persist($point1335);


$waySet1335 = new WaySet();
$waySet1335->setPoint($point1335);
$waySet1335->setWay($way);
$em->persist($waySet1335);


$point1336 = new Point();
$point1336->setLatitude(46.955179986452244);
$point1336->setLongitude(29.639659523963925);
$em->persist($point1336);


$waySet1336 = new WaySet();
$waySet1336->setPoint($point1336);
$waySet1336->setWay($way);
$em->persist($waySet1336);


$point1337 = new Point();
$point1337->setLatitude(46.95296467732054);
$point1337->setLongitude(29.629365205764767);
$em->persist($point1337);


$waySet1337 = new WaySet();
$waySet1337->setPoint($point1337);
$waySet1337->setWay($way);
$em->persist($waySet1337);


$point1338 = new Point();
$point1338->setLatitude(46.95173431726928);
$point1338->setLongitude(29.623662829399105);
$em->persist($point1338);


$waySet1338 = new WaySet();
$waySet1338->setPoint($point1338);
$waySet1338->setWay($way);
$em->persist($waySet1338);


$point1339 = new Point();
$point1339->setLatitude(46.95025125639846);
$point1339->setLongitude(29.6167641878128);
$em->persist($point1339);


$waySet1339 = new WaySet();
$waySet1339->setPoint($point1339);
$waySet1339->setWay($way);
$em->persist($waySet1339);


$point1340 = new Point();
$point1340->setLatitude(46.94844589474274);
$point1340->setLongitude(29.60839033126831);
$em->persist($point1340);


$waySet1340 = new WaySet();
$waySet1340->setPoint($point1340);
$waySet1340->setWay($way);
$em->persist($waySet1340);


$point1341 = new Point();
$point1341->setLatitude(46.946515958047435);
$point1341->setLongitude(29.59944784641266);
$em->persist($point1341);


$waySet1341 = new WaySet();
$waySet1341->setPoint($point1341);
$waySet1341->setWay($way);
$em->persist($waySet1341);


$point1342 = new Point();
$point1342->setLatitude(46.94450171841007);
$point1342->setLongitude(29.590103030204773);
$em->persist($point1342);


$waySet1342 = new WaySet();
$waySet1342->setPoint($point1342);
$waySet1342->setWay($way);
$em->persist($waySet1342);


$point1343 = new Point();
$point1343->setLatitude(46.94300746985944);
$point1343->setLongitude(29.583145380020138);
$em->persist($point1343);


$waySet1343 = new WaySet();
$waySet1343->setPoint($point1343);
$waySet1343->setWay($way);
$em->persist($waySet1343);


$point1344 = new Point();
$point1344->setLatitude(46.94075503109584);
$point1344->setLongitude(29.57269549369812);
$em->persist($point1344);


$waySet1344 = new WaySet();
$waySet1344->setPoint($point1344);
$waySet1344->setWay($way);
$em->persist($waySet1344);


$point1345 = new Point();
$point1345->setLatitude(46.944270991577305);
$point1345->setLongitude(29.56958949565887);
$em->persist($point1345);


$waySet1345 = new WaySet();
$waySet1345->setPoint($point1345);
$waySet1345->setWay($way);
$em->persist($waySet1345);


$point1346 = new Point();
$point1346->setLatitude(46.94853378394134);
$point1346->setLongitude(29.56583440303802);
$em->persist($point1346);


$waySet1346 = new WaySet();
$waySet1346->setPoint($point1346);
$waySet1346->setWay($way);
$em->persist($waySet1346);


$point1347 = new Point();
$point1347->setLatitude(46.95215908762677);
$point1347->setLongitude(29.562642574310306);
$em->persist($point1347);


$waySet1347 = new WaySet();
$waySet1347->setPoint($point1347);
$waySet1347->setWay($way);
$em->persist($waySet1347);


$point1348 = new Point();
$point1348->setLatitude(46.95583906898897);
$point1348->setLongitude(29.55938637256622);
$em->persist($point1348);


$waySet1348 = new WaySet();
$waySet1348->setPoint($point1348);
$waySet1348->setWay($way);
$em->persist($waySet1348);


$point1349 = new Point();
$point1349->setLatitude(46.958087211681736);
$point1349->setLongitude(29.55741226673126);
$em->persist($point1349);


$waySet1349 = new WaySet();
$waySet1349->setPoint($point1349);
$waySet1349->setWay($way);
$em->persist($waySet1349);


$point1350 = new Point();
$point1350->setLatitude(46.959837329041534);
$point1350->setLongitude(29.569659233093258);
$em->persist($point1350);


$waySet1350 = new WaySet();
$waySet1350->setPoint($point1350);
$waySet1350->setWay($way);
$em->persist($waySet1350);


$point1351 = new Point();
$point1351->setLatitude(46.96084050857847);
$point1351->setLongitude(29.57664906978607);
$em->persist($point1351);


$waySet1351 = new WaySet();
$waySet1351->setPoint($point1351);
$waySet1351->setWay($way);
$em->persist($waySet1351);


$point1352 = new Point();
$point1352->setLatitude(46.962235409446734);
$point1352->setLongitude(29.58645522594452);
$em->persist($point1352);


$waySet1352 = new WaySet();
$waySet1352->setPoint($point1352);
$waySet1352->setWay($way);
$em->persist($waySet1352);


$point1353 = new Point();
$point1353->setLatitude(46.963571697691414);
$point1353->setLongitude(29.595778584480286);
$em->persist($point1353);


$waySet1353 = new WaySet();
$waySet1353->setPoint($point1353);
$waySet1353->setWay($way);
$em->persist($waySet1353);


$point1354 = new Point();
$point1354->setLatitude(46.96650409270599);
$point1354->setLongitude(29.596003890037537);
$em->persist($point1354);


$waySet1354 = new WaySet();
$waySet1354->setPoint($point1354);
$waySet1354->setWay($way);
$em->persist($waySet1354);


$point1355 = new Point();
$point1355->setLatitude(46.9698243509295);
$point1355->setLongitude(29.596245288848877);
$em->persist($point1355);


$waySet1355 = new WaySet();
$waySet1355->setPoint($point1355);
$waySet1355->setWay($way);
$em->persist($waySet1355);


$point1356 = new Point();
$point1356->setLatitude(46.97346651400982);
$point1356->setLongitude(29.59650278091431);
$em->persist($point1356);


$waySet1356 = new WaySet();
$waySet1356->setPoint($point1356);
$waySet1356->setWay($way);
$em->persist($waySet1356);


$point1357 = new Point();
$point1357->setLatitude(46.97816618503689);
$point1357->setLongitude(29.596846103668213);
$em->persist($point1357);


$waySet1357 = new WaySet();
$waySet1357->setPoint($point1357);
$waySet1357->setWay($way);
$em->persist($waySet1357);


$point1358 = new Point();
$point1358->setLatitude(46.98196514988566);
$point1358->setLongitude(29.5971143245697);
$em->persist($point1358);


$waySet1358 = new WaySet();
$waySet1358->setPoint($point1358);
$waySet1358->setWay($way);
$em->persist($waySet1358);


$point1359 = new Point();
$point1359->setLatitude(46.986396934384345);
$point1359->setLongitude(29.597436189651486);
$em->persist($point1359);


$waySet1359 = new WaySet();
$waySet1359->setPoint($point1359);
$waySet1359->setWay($way);
$em->persist($waySet1359);


$point1360 = new Point();
$point1360->setLatitude(46.992109039437246);
$point1360->setLongitude(29.59784924983978);
$em->persist($point1360);


$waySet1360 = new WaySet();
$waySet1360->setPoint($point1360);
$waySet1360->setWay($way);
$em->persist($waySet1360);


$point1361 = new Point();
$point1361->setLatitude(46.99799980874616);
$point1361->setLongitude(29.598273038864132);
$em->persist($point1361);


$waySet1361 = new WaySet();
$waySet1361->setPoint($point1361);
$waySet1361->setWay($way);
$em->persist($waySet1361);


$point1362 = new Point();
$point1362->setLatitude(47.00269366495566);
$point1362->setLongitude(29.598621726036072);
$em->persist($point1362);


$waySet1362 = new WaySet();
$waySet1362->setPoint($point1362);
$waySet1362->setWay($way);
$em->persist($waySet1362);


$point1363 = new Point();
$point1363->setLatitude(47.008023600214834);
$point1363->setLongitude(29.599002599716187);
$em->persist($point1363);


$waySet1363 = new WaySet();
$waySet1363->setPoint($point1363);
$waySet1363->setWay($way);
$em->persist($waySet1363);


$point1364 = new Point();
$point1364->setLatitude(47.01222279027256);
$point1364->setLongitude(29.599308371543884);
$em->persist($point1364);


$waySet1364 = new WaySet();
$waySet1364->setPoint($point1364);
$waySet1364->setWay($way);
$em->persist($waySet1364);


$point1365 = new Point();
$point1365->setLatitude(47.01466606947724);
$point1365->setLongitude(29.599480032920837);
$em->persist($point1365);


$waySet1365 = new WaySet();
$waySet1365->setPoint($point1365);
$waySet1365->setWay($way);
$em->persist($waySet1365);


$point1366 = new Point();
$point1366->setLatitude(47.018166201338474);
$point1366->setLongitude(29.599978923797607);
$em->persist($point1366);


$waySet1366 = new WaySet();
$waySet1366->setPoint($point1366);
$waySet1366->setWay($way);
$em->persist($waySet1366);


$point1367 = new Point();
$point1367->setLatitude(47.02233899498161);
$point1367->setLongitude(29.60031688213348);
$em->persist($point1367);


$waySet1367 = new WaySet();
$waySet1367->setPoint($point1367);
$waySet1367->setWay($way);
$em->persist($waySet1367);


$point1368 = new Point();
$point1368->setLatitude(47.02689175883709);
$point1368->setLongitude(29.600826501846313);
$em->persist($point1368);


$waySet1368 = new WaySet();
$waySet1368->setPoint($point1368);
$waySet1368->setWay($way);
$em->persist($waySet1368);


$point1369 = new Point();
$point1369->setLatitude(47.02898699678811);
$point1369->setLongitude(29.601078629493713);
$em->persist($point1369);


$waySet1369 = new WaySet();
$waySet1369->setPoint($point1369);
$waySet1369->setWay($way);
$em->persist($waySet1369);


$point1370 = new Point();
$point1370->setLatitude(47.03206571380214);
$point1370->setLongitude(29.601427316665646);
$em->persist($point1370);


$waySet1370 = new WaySet();
$waySet1370->setPoint($point1370);
$waySet1370->setWay($way);
$em->persist($waySet1370);


$point1371 = new Point();
$point1371->setLatitude(47.03414978009759);
$point1371->setLongitude(29.60167407989502);
$em->persist($point1371);


$waySet1371 = new WaySet();
$waySet1371->setPoint($point1371);
$waySet1371->setWay($way);
$em->persist($waySet1371);


$point1372 = new Point();
$point1372->setLatitude(47.03818971188952);
$point1372->setLongitude(29.60233390331268);
$em->persist($point1372);


$waySet1372 = new WaySet();
$waySet1372->setPoint($point1372);
$waySet1372->setWay($way);
$em->persist($waySet1372);


$point1373 = new Point();
$point1373->setLatitude(47.03915486299747);
$point1373->setLongitude(29.602489471435547);
$em->persist($point1373);


$waySet1373 = new WaySet();
$waySet1373->setPoint($point1373);
$waySet1373->setWay($way);
$em->persist($waySet1373);


$point1374 = new Point();
$point1374->setLatitude(47.041633466533604);
$point1374->setLongitude(29.602478742599487);
$em->persist($point1374);


$waySet1374 = new WaySet();
$waySet1374->setPoint($point1374);
$waySet1374->setWay($way);
$em->persist($waySet1374);


$point1375 = new Point();
$point1375->setLatitude(47.04192957518532);
$point1375->setLongitude(29.60486590862274);
$em->persist($point1375);


$waySet1375 = new WaySet();
$waySet1375->setPoint($point1375);
$waySet1375->setWay($way);
$em->persist($waySet1375);


$point1376 = new Point();
$point1376->setLatitude(47.04235362915783);
$point1376->setLongitude(29.606035351753235);
$em->persist($point1376);


$waySet1376 = new WaySet();
$waySet1376->setPoint($point1376);
$waySet1376->setWay($way);
$em->persist($waySet1376);


$point1377 = new Point();
$point1377->setLatitude(47.04330408271438);
$point1377->setLongitude(29.614816904067993);
$em->persist($point1377);


$waySet1377 = new WaySet();
$waySet1377->setPoint($point1377);
$waySet1377->setWay($way);
$em->persist($waySet1377);


$point1378 = new Point();
$point1378->setLatitude(47.043870691201384);
$point1378->setLongitude(29.620401263236996);
$em->persist($point1378);


$waySet1378 = new WaySet();
$waySet1378->setPoint($point1378);
$waySet1378->setWay($way);
$em->persist($waySet1378);


$point1379 = new Point();
$point1379->setLatitude(47.04441901626537);
$point1379->setLongitude(29.62476253509521);
$em->persist($point1379);


$waySet1379 = new WaySet();
$waySet1379->setPoint($point1379);
$waySet1379->setWay($way);
$em->persist($waySet1379);


$point1380 = new Point();
$point1380->setLatitude(47.044389772404216);
$point1380->setLongitude(29.626076817512512);
$em->persist($point1380);


$waySet1380 = new WaySet();
$waySet1380->setPoint($point1380);
$waySet1380->setWay($way);
$em->persist($waySet1380);


$point1381 = new Point();
$point1381->setLatitude(47.04444460463071);
$point1381->setLongitude(29.62667226791382);
$em->persist($point1381);


$waySet1381 = new WaySet();
$waySet1381->setPoint($point1381);
$waySet1381->setWay($way);
$em->persist($waySet1381);


$point1382 = new Point();
$point1382->setLatitude(47.04456523533057);
$point1382->setLongitude(29.627294540405273);
$em->persist($point1382);


$waySet1382 = new WaySet();
$waySet1382->setPoint($point1382);
$waySet1382->setWay($way);
$em->persist($waySet1382);


$point1383 = new Point();
$point1383->setLatitude(47.04471510945649);
$point1383->setLongitude(29.62816894054413);
$em->persist($point1383);


$waySet1383 = new WaySet();
$waySet1383->setPoint($point1383);
$waySet1383->setWay($way);
$em->persist($waySet1383);


$point1384 = new Point();
$point1384->setLatitude(47.044729731299874);
$point1384->setLongitude(29.628678560256954);
$em->persist($point1384);


$waySet1384 = new WaySet();
$waySet1384->setPoint($point1384);
$waySet1384->setWay($way);
$em->persist($waySet1384);


$point1385 = new Point();
$point1385->setLatitude(47.04765767468282);
$point1385->setLongitude(29.62764859199524);
$em->persist($point1385);


$waySet1385 = new WaySet();
$waySet1385->setPoint($point1385);
$waySet1385->setWay($way);
$em->persist($waySet1385);


$point1386 = new Point();
$point1386->setLatitude(47.048260789125074);
$point1386->setLongitude(29.627428650856018);
$em->persist($point1386);


$waySet1386 = new WaySet();
$waySet1386->setPoint($point1386);
$waySet1386->setWay($way);
$em->persist($waySet1386);


$point1387 = new Point();
$point1387->setLatitude(47.05093268683559);
$point1387->setLongitude(29.626811742782593);
$em->persist($point1387);


$waySet1387 = new WaySet();
$waySet1387->setPoint($point1387);
$waySet1387->setWay($way);
$em->persist($waySet1387);


$point1388 = new Point();
$point1388->setLatitude(47.05362272495535);
$point1388->setLongitude(29.625990986824032);
$em->persist($point1388);


$waySet1388 = new WaySet();
$waySet1388->setPoint($point1388);
$waySet1388->setWay($way);
$em->persist($waySet1388);


$point1389 = new Point();
$point1389->setLatitude(47.05756981786865);
$point1389->setLongitude(29.624837636947632);
$em->persist($point1389);


$waySet1389 = new WaySet();
$waySet1389->setPoint($point1389);
$waySet1389->setWay($way);
$em->persist($waySet1389);


$point1390 = new Point();
$point1390->setLatitude(47.06112560603156);
$point1390->setLongitude(29.623802304267883);
$em->persist($point1390);


$waySet1390 = new WaySet();
$waySet1390->setPoint($point1390);
$waySet1390->setWay($way);
$em->persist($waySet1390);


$point1391 = new Point();
$point1391->setLatitude(47.06480174199249);
$point1391->setLongitude(29.622718691825863);
$em->persist($point1391);


$waySet1391 = new WaySet();
$waySet1391->setPoint($point1391);
$waySet1391->setWay($way);
$em->persist($waySet1391);


$point1392 = new Point();
$point1392->setLatitude(47.06941665120448);
$point1392->setLongitude(29.621291756629944);
$em->persist($point1392);


$waySet1392 = new WaySet();
$waySet1392->setPoint($point1392);
$waySet1392->setWay($way);
$em->persist($waySet1392);


$point1393 = new Point();
$point1393->setLatitude(47.0738594483505);
$point1393->setLongitude(29.619956016540527);
$em->persist($point1393);


$waySet1393 = new WaySet();
$waySet1393->setPoint($point1393);
$waySet1393->setWay($way);
$em->persist($waySet1393);


$point1394 = new Point();
$point1394->setLatitude(47.079901934852515);
$point1394->setLongitude(29.61809992790222);
$em->persist($point1394);


$waySet1394 = new WaySet();
$waySet1394->setPoint($point1394);
$waySet1394->setWay($way);
$em->persist($waySet1394);


$point1395 = new Point();
$point1395->setLatitude(47.0845082311584);
$point1395->setLongitude(29.616732001304626);
$em->persist($point1395);


$waySet1395 = new WaySet();
$waySet1395->setPoint($point1395);
$waySet1395->setWay($way);
$em->persist($waySet1395);


$point1396 = new Point();
$point1396->setLatitude(47.08970581760466);
$point1396->setLongitude(29.615165591239933);
$em->persist($point1396);


$waySet1396 = new WaySet();
$waySet1396->setPoint($point1396);
$waySet1396->setWay($way);
$em->persist($waySet1396);


$point1397 = new Point();
$point1397->setLatitude(47.09466551500378);
$point1397->setLongitude(29.61387276649475);
$em->persist($point1397);


$waySet1397 = new WaySet();
$waySet1397->setPoint($point1397);
$waySet1397->setWay($way);
$em->persist($waySet1397);


$point1398 = new Point();
$point1398->setLatitude(47.09610074626474);
$point1398->setLongitude(29.613454341888428);
$em->persist($point1398);


$waySet1398 = new WaySet();
$waySet1398->setPoint($point1398);
$waySet1398->setWay($way);
$em->persist($waySet1398);


$point1399 = new Point();
$point1399->setLatitude(47.100223625468175);
$point1399->setLongitude(29.611871838569638);
$em->persist($point1399);


$waySet1399 = new WaySet();
$waySet1399->setPoint($point1399);
$waySet1399->setWay($way);
$em->persist($waySet1399);


$point1400 = new Point();
$point1400->setLatitude(47.09971239117861);
$point1400->setLongitude(29.60819184780121);
$em->persist($point1400);


$waySet1400 = new WaySet();
$waySet1400->setPoint($point1400);
$waySet1400->setWay($way);
$em->persist($waySet1400);


$point1401 = new Point();
$point1401->setLatitude(47.09947503073269);
$point1401->setLongitude(29.60428655147552);
$em->persist($point1401);


$waySet1401 = new WaySet();
$waySet1401->setPoint($point1401);
$waySet1401->setWay($way);
$em->persist($waySet1401);


$point1402 = new Point();
$point1402->setLatitude(47.09927418645193);
$point1402->setLongitude(29.60269868373871);
$em->persist($point1402);


$waySet1402 = new WaySet();
$waySet1402->setPoint($point1402);
$waySet1402->setWay($way);
$em->persist($waySet1402);


$point1403 = new Point();
$point1403->setLatitude(47.098445239313364);
$point1403->setLongitude(29.594340920448303);
$em->persist($point1403);


$waySet1403 = new WaySet();
$waySet1403->setPoint($point1403);
$waySet1403->setWay($way);
$em->persist($waySet1403);


$point1404 = new Point();
$point1404->setLatitude(47.0979778096859);
$point1404->setLongitude(29.58866000175476);
$em->persist($point1404);


$waySet1404 = new WaySet();
$waySet1404->setPoint($point1404);
$waySet1404->setWay($way);
$em->persist($waySet1404);


$point1405 = new Point();
$point1405->setLatitude(47.097583412745934);
$point1405->setLongitude(29.58507120609283);
$em->persist($point1405);


$waySet1405 = new WaySet();
$waySet1405->setPoint($point1405);
$waySet1405->setWay($way);
$em->persist($waySet1405);


$point1406 = new Point();
$point1406->setLatitude(47.09745925014172);
$point1406->setLongitude(29.583815932273865);
$em->persist($point1406);


$waySet1406 = new WaySet();
$waySet1406->setPoint($point1406);
$waySet1406->setWay($way);
$em->persist($waySet1406);


$point1407 = new Point();
$point1407->setLatitude(47.09637098904479);
$point1407->setLongitude(29.57593023777008);
$em->persist($point1407);


$waySet1407 = new WaySet();
$waySet1407->setPoint($point1407);
$waySet1407->setWay($way);
$em->persist($waySet1407);


$point1408 = new Point();
$point1408->setLatitude(47.09608613850783);
$point1408->setLongitude(29.5722234249115);
$em->persist($point1408);


$waySet1408 = new WaySet();
$waySet1408->setPoint($point1408);
$waySet1408->setWay($way);
$em->persist($waySet1408);


$point1409 = new Point();
$point1409->setLatitude(47.0959035412083);
$point1409->setLongitude(29.567432999610897);
$em->persist($point1409);


$waySet1409 = new WaySet();
$waySet1409->setPoint($point1409);
$waySet1409->setWay($way);
$em->persist($waySet1409);


$point1410 = new Point();
$point1410->setLatitude(47.09455230173162);
$point1410->setLongitude(29.554815888404843);
$em->persist($point1410);


$waySet1410 = new WaySet();
$waySet1410->setPoint($point1410);
$waySet1410->setWay($way);
$em->persist($waySet1410);


$point1411 = new Point();
$point1411->setLatitude(47.094249181140555);
$point1411->setLongitude(29.55202639102936);
$em->persist($point1411);


$waySet1411 = new WaySet();
$waySet1411->setPoint($point1411);
$waySet1411->setWay($way);
$em->persist($waySet1411);


$point1412 = new Point();
$point1412->setLatitude(47.09365754320943);
$point1412->setLongitude(29.54763293266296);
$em->persist($point1412);


$waySet1412 = new WaySet();
$waySet1412->setPoint($point1412);
$waySet1412->setWay($way);
$em->persist($waySet1412);


$point1413 = new Point();
$point1413->setLatitude(47.08994687395942);
$point1413->setLongitude(29.548067450523373);
$em->persist($point1413);


$waySet1413 = new WaySet();
$waySet1413->setPoint($point1413);
$waySet1413->setWay($way);
$em->persist($waySet1413);


$point1414 = new Point();
$point1414->setLatitude(47.085852420194);
$point1414->setLongitude(29.548550248146054);
$em->persist($point1414);


$waySet1414 = new WaySet();
$waySet1414->setPoint($point1414);
$waySet1414->setWay($way);
$em->persist($waySet1414);


$point1415 = new Point();
$point1415->setLatitude(47.07987636349976);
$point1415->setLongitude(29.54925835132599);
$em->persist($point1415);


$waySet1415 = new WaySet();
$waySet1415->setPoint($point1415);
$waySet1415->setWay($way);
$em->persist($waySet1415);


$point1416 = new Point();
$point1416->setLatitude(47.07589804215101);
$point1416->setLongitude(29.54973578453064);
$em->persist($point1416);


$waySet1416 = new WaySet();
$waySet1416->setPoint($point1416);
$waySet1416->setWay($way);
$em->persist($waySet1416);


$point1417 = new Point();
$point1417->setLatitude(47.075704415625786);
$point1417->setLongitude(29.541925191879276);
$em->persist($point1417);


$waySet1417 = new WaySet();
$waySet1417->setPoint($point1417);
$waySet1417->setWay($way);
$em->persist($waySet1417);


$point1418 = new Point();
$point1418->setLatitude(47.07550348169534);
$point1418->setLongitude(29.532912969589233);
$em->persist($point1418);


$waySet1418 = new WaySet();
$waySet1418->setPoint($point1418);
$waySet1418->setWay($way);
$em->persist($waySet1418);


$point1419 = new Point();
$point1419->setLatitude(47.07544868140101);
$point1419->setLongitude(29.530203938484192);
$em->persist($point1419);


$waySet1419 = new WaySet();
$waySet1419->setPoint($point1419);
$waySet1419->setWay($way);
$em->persist($waySet1419);


$point1420 = new Point();
$point1420->setLatitude(47.07909460479296);
$point1420->setLongitude(29.52995717525482);
$em->persist($point1420);


$waySet1420 = new WaySet();
$waySet1420->setPoint($point1420);
$waySet1420->setWay($way);
$em->persist($waySet1420);


$point1421 = new Point();
$point1421->setLatitude(47.079927506193);
$point1421->setLongitude(29.529892802238464);
$em->persist($point1421);


$waySet1421 = new WaySet();
$waySet1421->setPoint($point1421);
$waySet1421->setWay($way);
$em->persist($waySet1421);


$point1422 = new Point();
$point1422->setLatitude(47.081889156728586);
$point1422->setLongitude(29.52995717525482);
$em->persist($point1422);


$waySet1422 = new WaySet();
$waySet1422->setPoint($point1422);
$waySet1422->setWay($way);
$em->persist($waySet1422);


$point1423 = new Point();
$point1423->setLatitude(47.08874888616196);
$point1423->setLongitude(29.526743888854977);
$em->persist($point1423);


$waySet1423 = new WaySet();
$waySet1423->setPoint($point1423);
$waySet1423->setWay($way);
$em->persist($waySet1423);


$point1424 = new Point();
$point1424->setLatitude(47.093398243032134);
$point1424->setLongitude(29.524560570716854);
$em->persist($point1424);


$waySet1424 = new WaySet();
$waySet1424->setPoint($point1424);
$waySet1424->setWay($way);
$em->persist($waySet1424);


$point1425 = new Point();
$point1425->setLatitude(47.097623582938255);
$point1425->setLongitude(29.522581100463867);
$em->persist($point1425);


$waySet1425 = new WaySet();
$waySet1425->setPoint($point1425);
$waySet1425->setWay($way);
$em->persist($waySet1425);


$point1426 = new Point();
$point1426->setLatitude(47.10280893512036);
$point1426->setLongitude(29.520092010498047);
$em->persist($point1426);


$waySet1426 = new WaySet();
$waySet1426->setPoint($point1426);
$waySet1426->setWay($way);
$em->persist($waySet1426);


$point1427 = new Point();
$point1427->setLatitude(47.10845017071391);
$point1427->setLongitude(29.51746881008148);
$em->persist($point1427);


$waySet1427 = new WaySet();
$waySet1427->setPoint($point1427);
$waySet1427->setWay($way);
$em->persist($waySet1427);


$point1428 = new Point();
$point1428->setLatitude(47.11207193045572);
$point1428->setLongitude(29.515854120254517);
$em->persist($point1428);


$waySet1428 = new WaySet();
$waySet1428->setPoint($point1428);
$waySet1428->setWay($way);
$em->persist($waySet1428);


$point1429 = new Point();
$point1429->setLatitude(47.11256114120418);
$point1429->setLongitude(29.515634179115292);
$em->persist($point1429);


$waySet1429 = new WaySet();
$waySet1429->setPoint($point1429);
$waySet1429->setWay($way);
$em->persist($waySet1429);


$point1430 = new Point();
$point1430->setLatitude(47.10993249330396);
$point1430->setLongitude(29.502920508384705);
$em->persist($point1430);


$waySet1430 = new WaySet();
$waySet1430->setPoint($point1430);
$waySet1430->setWay($way);
$em->persist($waySet1430);


$point1431 = new Point();
$point1431->setLatitude(47.10918768612827);
$point1431->setLongitude(29.49928343296051);
$em->persist($point1431);


$waySet1431 = new WaySet();
$waySet1431->setPoint($point1431);
$waySet1431->setWay($way);
$em->persist($waySet1431);


$point1432 = new Point();
$point1432->setLatitude(47.116711949952034);
$point1432->setLongitude(29.497722387313843);
$em->persist($point1432);


$waySet1432 = new WaySet();
$waySet1432->setPoint($point1432);
$waySet1432->setWay($way);
$em->persist($waySet1432);


$point1433 = new Point();
$point1433->setLatitude(47.118566384310725);
$point1433->setLongitude(29.49733078479767);
$em->persist($point1433);


$waySet1433 = new WaySet();
$waySet1433->setPoint($point1433);
$waySet1433->setWay($way);
$em->persist($waySet1433);


$point1434 = new Point();
$point1434->setLatitude(47.1232058375332);
$point1434->setLongitude(29.496413469314575);
$em->persist($point1434);


$waySet1434 = new WaySet();
$waySet1434->setPoint($point1434);
$waySet1434->setWay($way);
$em->persist($waySet1434);


$point1435 = new Point();
$point1435->setLatitude(47.12494689692409);
$point1435->setLongitude(29.49631154537201);
$em->persist($point1435);


$waySet1435 = new WaySet();
$waySet1435->setPoint($point1435);
$waySet1435->setWay($way);
$em->persist($waySet1435);


$point1436 = new Point();
$point1436->setLatitude(47.126541905513136);
$point1436->setLongitude(29.496048688888553);
$em->persist($point1436);


$waySet1436 = new WaySet();
$waySet1436->setPoint($point1436);
$waySet1436->setWay($way);
$em->persist($waySet1436);


$point1437 = new Point();
$point1437->setLatitude(47.127246321998896);
$point1437->setLongitude(29.496129155159);
$em->persist($point1437);


$waySet1437 = new WaySet();
$waySet1437->setPoint($point1437);
$waySet1437->setWay($way);
$em->persist($waySet1437);


$point1438 = new Point();
$point1438->setLatitude(47.1292317773308);
$point1438->setLongitude(29.49574291706085);
$em->persist($point1438);


$waySet1438 = new WaySet();
$waySet1438->setPoint($point1438);
$waySet1438->setWay($way);
$em->persist($waySet1438);


$point1439 = new Point();
$point1439->setLatitude(47.13151641914503);
$point1439->setLongitude(29.494745135307312);
$em->persist($point1439);


$waySet1439 = new WaySet();
$waySet1439->setPoint($point1439);
$waySet1439->setWay($way);
$em->persist($waySet1439);


$point1440 = new Point();
$point1440->setLatitude(47.13195800792218);
$point1440->setLongitude(29.495126008987427);
$em->persist($point1440);


$waySet1440 = new WaySet();
$waySet1440->setPoint($point1440);
$waySet1440->setWay($way);
$em->persist($waySet1440);


$point1441 = new Point();
$point1441->setLatitude(47.131936111044425);
$point1441->setLongitude(29.49543178081512);
$em->persist($point1441);


$waySet1441 = new WaySet();
$waySet1441->setPoint($point1441);
$waySet1441->setWay($way);
$em->persist($waySet1441);


$point1442 = new Point();
$point1442->setLatitude(47.130640529730016);
$point1442->setLongitude(29.499589204788208);
$em->persist($point1442);


$waySet1442 = new WaySet();
$waySet1442->setPoint($point1442);
$waySet1442->setWay($way);
$em->persist($waySet1442);


$point1443 = new Point();
$point1443->setLatitude(47.128410596153394);
$point1443->setLongitude(29.50547397136688);
$em->persist($point1443);


$waySet1443 = new WaySet();
$waySet1443->setPoint($point1443);
$waySet1443->setWay($way);
$em->persist($waySet1443);


$point1444 = new Point();
$point1444->setLatitude(47.12866607610054);
$point1444->setLongitude(29.50744807720184);
$em->persist($point1444);


$waySet1444 = new WaySet();
$waySet1444->setPoint($point1444);
$waySet1444->setWay($way);
$em->persist($waySet1444);


$point1445 = new Point();
$point1445->setLatitude(47.129538348386916);
$point1445->setLongitude(29.517055749893185);
$em->persist($point1445);


$waySet1445 = new WaySet();
$waySet1445->setPoint($point1445);
$waySet1445->setWay($way);
$em->persist($waySet1445);


$point1446 = new Point();
$point1446->setLatitude(47.13047994843925);
$point1446->setLongitude(29.527532458305362);
$em->persist($point1446);


$waySet1446 = new WaySet();
$waySet1446->setPoint($point1446);
$waySet1446->setWay($way);
$em->persist($waySet1446);


$point1447 = new Point();
$point1447->setLatitude(47.13105292945989);
$point1447->setLongitude(29.534018039703366);
$em->persist($point1447);


$waySet1447 = new WaySet();
$waySet1447->setPoint($point1447);
$waySet1447->setWay($way);
$em->persist($waySet1447);


$point1448 = new Point();
$point1448->setLatitude(47.13152736767141);
$point1448->setLongitude(29.540369510650635);
$em->persist($point1448);


$waySet1448 = new WaySet();
$waySet1448->setPoint($point1448);
$waySet1448->setWay($way);
$em->persist($waySet1448);


$point1449 = new Point();
$point1449->setLatitude(47.131717141771);
$point1449->setLongitude(29.542847871780392);
$em->persist($point1449);


$waySet1449 = new WaySet();
$waySet1449->setPoint($point1449);
$waySet1449->setWay($way);
$em->persist($waySet1449);


$point1450 = new Point();
$point1450->setLatitude(47.13251272581823);
$point1450->setLongitude(29.549274444580075);
$em->persist($point1450);


$waySet1450 = new WaySet();
$waySet1450->setPoint($point1450);
$waySet1450->setWay($way);
$em->persist($waySet1450);


$point1451 = new Point();
$point1451->setLatitude(47.13300904745233);
$point1451->setLongitude(29.551007151603695);
$em->persist($point1451);


$waySet1451 = new WaySet();
$waySet1451->setPoint($point1451);
$waySet1451->setWay($way);
$em->persist($waySet1451);


$point1452 = new Point();
$point1452->setLatitude(47.133078386135395);
$point1452->setLongitude(29.552798867225643);
$em->persist($point1452);


$waySet1452 = new WaySet();
$waySet1452->setPoint($point1452);
$waySet1452->setWay($way);
$em->persist($waySet1452);


$point1453 = new Point();
$point1453->setLatitude(47.13360754679171);
$point1453->setLongitude(29.555792212486264);
$em->persist($point1453);


$waySet1453 = new WaySet();
$waySet1453->setPoint($point1453);
$waySet1453->setWay($way);
$em->persist($waySet1453);


$point1454 = new Point();
$point1454->setLatitude(47.133965183425815);
$point1454->setLongitude(29.56092059612274);
$em->persist($point1454);


$waySet1454 = new WaySet();
$waySet1454->setPoint($point1454);
$waySet1454->setWay($way);
$em->persist($waySet1454);


$point1455 = new Point();
$point1455->setLatitude(47.134202390070755);
$point1455->setLongitude(29.56547498703003);
$em->persist($point1455);


$waySet1455 = new WaySet();
$waySet1455->setPoint($point1455);
$waySet1455->setWay($way);
$em->persist($waySet1455);


$point1456 = new Point();
$point1456->setLatitude(47.1350052354796);
$point1456->setLongitude(29.573553800582886);
$em->persist($point1456);


$waySet1456 = new WaySet();
$waySet1456->setPoint($point1456);
$waySet1456->setWay($way);
$em->persist($waySet1456);


$point1457 = new Point();
$point1457->setLatitude(47.13576792739112);
$point1457->setLongitude(29.57995891571045);
$em->persist($point1457);


$waySet1457 = new WaySet();
$waySet1457->setPoint($point1457);
$waySet1457->setWay($way);
$em->persist($waySet1457);


$point1458 = new Point();
$point1458->setLatitude(47.13837705383808);
$point1458->setLongitude(29.57944393157959);
$em->persist($point1458);


$waySet1458 = new WaySet();
$waySet1458->setPoint($point1458);
$waySet1458->setWay($way);
$em->persist($waySet1458);


$point1459 = new Point();
$point1459->setLatitude(47.14178149764039);
$point1459->setLongitude(29.578537344932556);
$em->persist($point1459);


$waySet1459 = new WaySet();
$waySet1459->setPoint($point1459);
$waySet1459->setWay($way);
$em->persist($waySet1459);


$point1460 = new Point();
$point1460->setLatitude(47.14497775449228);
$point1460->setLongitude(29.577797055244442);
$em->persist($point1460);


$waySet1460 = new WaySet();
$waySet1460->setPoint($point1460);
$waySet1460->setWay($way);
$em->persist($waySet1460);


$point1461 = new Point();
$point1461->setLatitude(47.14698443855885);
$point1461->setLongitude(29.577287435531616);
$em->persist($point1461);


$waySet1461 = new WaySet();
$waySet1461->setPoint($point1461);
$waySet1461->setWay($way);
$em->persist($waySet1461);


$point1462 = new Point();
$point1462->setLatitude(47.14919535183389);
$point1462->setLongitude(29.57663834095001);
$em->persist($point1462);


$waySet1462 = new WaySet();
$waySet1462->setPoint($point1462);
$waySet1462->setWay($way);
$em->persist($waySet1462);


$point1463 = new Point();
$point1463->setLatitude(47.150855300530246);
$point1463->setLongitude(29.57627892494202);
$em->persist($point1463);


$waySet1463 = new WaySet();
$waySet1463->setPoint($point1463);
$waySet1463->setWay($way);
$em->persist($waySet1463);


$point1464 = new Point();
$point1464->setLatitude(47.15229631285388);
$point1464->setLongitude(29.575860500335693);
$em->persist($point1464);


$waySet1464 = new WaySet();
$waySet1464->setPoint($point1464);
$waySet1464->setWay($way);
$em->persist($waySet1464);


$point1465 = new Point();
$point1465->setLatitude(47.156268926761236);
$point1465->setLongitude(29.57492172718048);
$em->persist($point1465);


$waySet1465 = new WaySet();
$waySet1465->setPoint($point1465);
$waySet1465->setWay($way);
$em->persist($waySet1465);


$point1466 = new Point();
$point1466->setLatitude(47.15863630291058);
$point1466->setLongitude(29.574294090270993);
$em->persist($point1466);


$waySet1466 = new WaySet();
$waySet1466->setPoint($point1466);
$waySet1466->setWay($way);
$em->persist($waySet1466);


$point1467 = new Point();
$point1467->setLatitude(47.16231300465911);
$point1467->setLongitude(29.57331776618957);
$em->persist($point1467);


$waySet1467 = new WaySet();
$waySet1467->setPoint($point1467);
$waySet1467->setWay($way);
$em->persist($waySet1467);


$point1468 = new Point();
$point1468->setLatitude(47.16696323021668);
$point1468->setLongitude(29.572325348854065);
$em->persist($point1468);


$waySet1468 = new WaySet();
$waySet1468->setPoint($point1468);
$waySet1468->setWay($way);
$em->persist($waySet1468);


$point1469 = new Point();
$point1469->setLatitude(47.17248461643388);
$point1469->setLongitude(29.57098424434662);
$em->persist($point1469);


$waySet1469 = new WaySet();
$waySet1469->setPoint($point1469);
$waySet1469->setWay($way);
$em->persist($waySet1469);


$point1470 = new Point();
$point1470->setLatitude(47.17543106585358);
$point1470->setLongitude(29.57021713256836);
$em->persist($point1470);


$waySet1470 = new WaySet();
$waySet1470->setPoint($point1470);
$waySet1470->setWay($way);
$em->persist($waySet1470);


$point1471 = new Point();
$point1471->setLatitude(47.17739649009824);
$point1471->setLongitude(29.5696485042572);
$em->persist($point1471);


$waySet1471 = new WaySet();
$waySet1471->setPoint($point1471);
$waySet1471->setWay($way);
$em->persist($waySet1471);


$point1472 = new Point();
$point1472->setLatitude(47.179937941976355);
$point1472->setLongitude(29.568913578987118);
$em->persist($point1472);


$waySet1472 = new WaySet();
$waySet1472->setPoint($point1472);
$waySet1472->setWay($way);
$em->persist($waySet1472);


$point1473 = new Point();
$point1473->setLatitude(47.18122502973592);
$point1473->setLongitude(29.568575620651245);
$em->persist($point1473);


$waySet1473 = new WaySet();
$waySet1473->setPoint($point1473);
$waySet1473->setWay($way);
$em->persist($waySet1473);


$point1474 = new Point();
$point1474->setLatitude(47.183573064128886);
$point1474->setLongitude(29.568253755569458);
$em->persist($point1474);


$waySet1474 = new WaySet();
$waySet1474->setPoint($point1474);
$waySet1474->setWay($way);
$em->persist($waySet1474);


$point1475 = new Point();
$point1475->setLatitude(47.185745997220366);
$point1475->setLongitude(29.567647576332096);
$em->persist($point1475);


$waySet1475 = new WaySet();
$waySet1475->setPoint($point1475);
$waySet1475->setWay($way);
$em->persist($waySet1475);


$point1476 = new Point();
$point1476->setLatitude(47.186832430411826);
$point1476->setLongitude(29.567465186119076);
$em->persist($point1476);


$waySet1476 = new WaySet();
$waySet1476->setPoint($point1476);
$waySet1476->setWay($way);
$em->persist($waySet1476);


$point1477 = new Point();
$point1477->setLatitude(47.18903074901732);
$point1477->setLongitude(29.566789269447323);
$em->persist($point1477);


$waySet1477 = new WaySet();
$waySet1477->setPoint($point1477);
$waySet1477->setWay($way);
$em->persist($waySet1477);


$point1478 = new Point();
$point1478->setLatitude(47.19281106079748);
$point1478->setLongitude(29.565898776054382);
$em->persist($point1478);


$waySet1478 = new WaySet();
$waySet1478->setPoint($point1478);
$waySet1478->setWay($way);
$em->persist($waySet1478);


$point1479 = new Point();
$point1479->setLatitude(47.194024932151265);
$point1479->setLongitude(29.565587639808655);
$em->persist($point1479);


$waySet1479 = new WaySet();
$waySet1479->setPoint($point1479);
$waySet1479->setWay($way);
$em->persist($waySet1479);


$point1480 = new Point();
$point1480->setLatitude(47.19473209965978);
$point1480->setLongitude(29.565587639808655);
$em->persist($point1480);


$waySet1480 = new WaySet();
$waySet1480->setPoint($point1480);
$waySet1480->setWay($way);
$em->persist($waySet1480);


$point1481 = new Point();
$point1481->setLatitude(47.19643801135685);
$point1481->setLongitude(29.56515848636627);
$em->persist($point1481);


$waySet1481 = new WaySet();
$waySet1481->setPoint($point1481);
$waySet1481->setWay($way);
$em->persist($waySet1481);


$point1482 = new Point();
$point1482->setLatitude(47.19849013587854);
$point1482->setLongitude(29.56474006175995);
$em->persist($point1482);


$waySet1482 = new WaySet();
$waySet1482->setPoint($point1482);
$waySet1482->setWay($way);
$em->persist($waySet1482);


$point1483 = new Point();
$point1483->setLatitude(47.202397336497775);
$point1483->setLongitude(29.563736915588375);
$em->persist($point1483);


$waySet1483 = new WaySet();
$waySet1483->setPoint($point1483);
$waySet1483->setWay($way);
$em->persist($waySet1483);


$point1484 = new Point();
$point1484->setLatitude(47.20577945691547);
$point1484->setLongitude(29.56295907497406);
$em->persist($point1484);


$waySet1484 = new WaySet();
$waySet1484->setPoint($point1484);
$waySet1484->setWay($way);
$em->persist($waySet1484);


$point1485 = new Point();
$point1485->setLatitude(47.209890192256225);
$point1485->setLongitude(29.561832547187805);
$em->persist($point1485);


$waySet1485 = new WaySet();
$waySet1485->setPoint($point1485);
$waySet1485->setWay($way);
$em->persist($waySet1485);


$point1486 = new Point();
$point1486->setLatitude(47.21231712577879);
$point1486->setLongitude(29.56125319004059);
$em->persist($point1486);


$waySet1486 = new WaySet();
$waySet1486->setPoint($point1486);
$waySet1486->setWay($way);
$em->persist($waySet1486);


$point1487 = new Point();
$point1487->setLatitude(47.21443786864844);
$point1487->setLongitude(29.560797214508053);
$em->persist($point1487);


$waySet1487 = new WaySet();
$waySet1487->setPoint($point1487);
$waySet1487->setWay($way);
$em->persist($waySet1487);


$point1488 = new Point();
$point1488->setLatitude(47.216642331042074);
$point1488->setLongitude(29.560287594795227);
$em->persist($point1488);


$waySet1488 = new WaySet();
$waySet1488->setPoint($point1488);
$waySet1488->setWay($way);
$em->persist($waySet1488);


$point1489 = new Point();
$point1489->setLatitude(47.218649951764085);
$point1489->setLongitude(29.559794068336487);
$em->persist($point1489);


$waySet1489 = new WaySet();
$waySet1489->setPoint($point1489);
$waySet1489->setWay($way);
$em->persist($waySet1489);


$point1490 = new Point();
$point1490->setLatitude(47.220832378800395);
$point1490->setLongitude(29.559262990951538);
$em->persist($point1490);


$waySet1490 = new WaySet();
$waySet1490->setPoint($point1490);
$waySet1490->setWay($way);
$em->persist($waySet1490);


$point1491 = new Point();
$point1491->setLatitude(47.22291999204605);
$point1491->setLongitude(29.55875873565674);
$em->persist($point1491);


$waySet1491 = new WaySet();
$waySet1491->setPoint($point1491);
$waySet1491->setWay($way);
$em->persist($waySet1491);


$point1492 = new Point();
$point1492->setLatitude(47.22547383641589);
$point1492->setLongitude(29.558141827583313);
$em->persist($point1492);


$waySet1492 = new WaySet();
$waySet1492->setPoint($point1492);
$waySet1492->setWay($way);
$em->persist($waySet1492);


$point1493 = new Point();
$point1493->setLatitude(47.22632994786301);
$point1493->setLongitude(29.55793261528015);
$em->persist($point1493);


$waySet1493 = new WaySet();
$waySet1493->setPoint($point1493);
$waySet1493->setWay($way);
$em->persist($waySet1493);


$point1494 = new Point();
$point1494->setLatitude(47.2285812728262);
$point1494->setLongitude(29.55736398696899);
$em->persist($point1494);


$waySet1494 = new WaySet();
$waySet1494->setPoint($point1494);
$waySet1494->setWay($way);
$em->persist($waySet1494);


$point1495 = new Point();
$point1495->setLatitude(47.23055929982189);
$point1495->setLongitude(29.556875824928284);
$em->persist($point1495);


$waySet1495 = new WaySet();
$waySet1495->setPoint($point1495);
$waySet1495->setWay($way);
$em->persist($waySet1495);


$point1496 = new Point();
$point1496->setLatitude(47.234872089824705);
$point1496->setLongitude(29.55609261989593);
$em->persist($point1496);


$waySet1496 = new WaySet();
$waySet1496->setPoint($point1496);
$waySet1496->setWay($way);
$em->persist($waySet1496);


$point1497 = new Point();
$point1497->setLatitude(47.24220375573113);
$point1497->setLongitude(29.554274082183838);
$em->persist($point1497);


$waySet1497 = new WaySet();
$waySet1497->setPoint($point1497);
$waySet1497->setWay($way);
$em->persist($waySet1497);


$point1498 = new Point();
$point1498->setLatitude(47.24587467073077);
$point1498->setLongitude(29.55345869064331);
$em->persist($point1498);


$waySet1498 = new WaySet();
$waySet1498->setPoint($point1498);
$waySet1498->setWay($way);
$em->persist($waySet1498);


$point1499 = new Point();
$point1499->setLatitude(47.250597686139415);
$point1499->setLongitude(29.552305340766903);
$em->persist($point1499);


$waySet1499 = new WaySet();
$waySet1499->setPoint($point1499);
$waySet1499->setWay($way);
$em->persist($waySet1499);


$point1500 = new Point();
$point1500->setLatitude(47.25138784882582);
$point1500->setLongitude(29.552112221717834);
$em->persist($point1500);


$waySet1500 = new WaySet();
$waySet1500->setPoint($point1500);
$waySet1500->setWay($way);
$em->persist($waySet1500);


$point1501 = new Point();
$point1501->setLatitude(47.25272782127248);
$point1501->setLongitude(29.562508463859555);
$em->persist($point1501);


$waySet1501 = new WaySet();
$waySet1501->setPoint($point1501);
$waySet1501->setWay($way);
$em->persist($waySet1501);


$point1502 = new Point();
$point1502->setLatitude(47.25412965833126);
$point1502->setLongitude(29.57344114780426);
$em->persist($point1502);


$waySet1502 = new WaySet();
$waySet1502->setPoint($point1502);
$waySet1502->setWay($way);
$em->persist($waySet1502);


$point1503 = new Point();
$point1503->setLatitude(47.255378536454266);
$point1503->setLongitude(29.583145380020138);
$em->persist($point1503);


$waySet1503 = new WaySet();
$waySet1503->setPoint($point1503);
$waySet1503->setWay($way);
$em->persist($waySet1503);


$point1504 = new Point();
$point1504->setLatitude(47.25631062454664);
$point1504->setLongitude(29.590349793434147);
$em->persist($point1504);


$waySet1504 = new WaySet();
$waySet1504->setPoint($point1504);
$waySet1504->setWay($way);
$em->persist($waySet1504);


$point1505 = new Point();
$point1505->setLatitude(47.25743202128861);
$point1505->setLongitude(29.599050879478458);
$em->persist($point1505);


$waySet1505 = new WaySet();
$waySet1505->setPoint($point1505);
$waySet1505->setWay($way);
$em->persist($waySet1505);


$point1506 = new Point();
$point1506->setLatitude(47.262368797233115);
$point1506->setLongitude(29.59795653820038);
$em->persist($point1506);


$waySet1506 = new WaySet();
$waySet1506->setPoint($point1506);
$waySet1506->setWay($way);
$em->persist($waySet1506);


$point1507 = new Point();
$point1507->setLatitude(47.26710490252627);
$point1507->setLongitude(29.59691047668457);
$em->persist($point1507);


$waySet1507 = new WaySet();
$waySet1507->setPoint($point1507);
$waySet1507->setWay($way);
$em->persist($waySet1507);


$point1508 = new Point();
$point1508->setLatitude(47.27274690373915);
$point1508->setLongitude(29.595655202865597);
$em->persist($point1508);


$waySet1508 = new WaySet();
$waySet1508->setPoint($point1508);
$waySet1508->setWay($way);
$em->persist($waySet1508);


$point1509 = new Point();
$point1509->setLatitude(47.27813354359222);
$point1509->setLongitude(29.594469666481018);
$em->persist($point1509);


$waySet1509 = new WaySet();
$waySet1509->setPoint($point1509);
$waySet1509->setWay($way);
$em->persist($waySet1509);


$point1510 = new Point();
$point1510->setLatitude(47.2847241521778);
$point1510->setLongitude(29.592983722686768);
$em->persist($point1510);


$waySet1510 = new WaySet();
$waySet1510->setPoint($point1510);
$waySet1510->setWay($way);
$em->persist($waySet1510);


$point1511 = new Point();
$point1511->setLatitude(47.292652901694034);
$point1511->setLongitude(29.59118664264679);
$em->persist($point1511);


$waySet1511 = new WaySet();
$waySet1511->setPoint($point1511);
$waySet1511->setWay($way);
$em->persist($waySet1511);


$point1512 = new Point();
$point1512->setLatitude(47.298739657260334);
$point1512->setLongitude(29.589829444885254);
$em->persist($point1512);


$waySet1512 = new WaySet();
$waySet1512->setPoint($point1512);
$waySet1512->setWay($way);
$em->persist($waySet1512);


$point1513 = new Point();
$point1513->setLatitude(47.30808490123657);
$point1513->setLongitude(29.58780169487);
$em->persist($point1513);


$waySet1513 = new WaySet();
$waySet1513->setPoint($point1513);
$waySet1513->setWay($way);
$em->persist($waySet1513);


$point1514 = new Point();
$point1514->setLatitude(47.310161801910084);
$point1514->setLongitude(29.587388634681705);
$em->persist($point1514);


$waySet1514 = new WaySet();
$waySet1514->setPoint($point1514);
$waySet1514->setWay($way);
$em->persist($waySet1514);


$point1515 = new Point();
$point1515->setLatitude(47.312002209608536);
$point1515->setLongitude(29.587023854255673);
$em->persist($point1515);


$waySet1515 = new WaySet();
$waySet1515->setPoint($point1515);
$waySet1515->setWay($way);
$em->persist($waySet1515);


$point1516 = new Point();
$point1516->setLatitude(47.31382800529932);
$point1516->setLongitude(29.5866858959198);
$em->persist($point1516);


$waySet1516 = new WaySet();
$waySet1516->setPoint($point1516);
$waySet1516->setWay($way);
$em->persist($waySet1516);


$point1517 = new Point();
$point1517->setLatitude(47.315737385504036);
$point1517->setLongitude(29.586326479911804);
$em->persist($point1517);


$waySet1517 = new WaySet();
$waySet1517->setPoint($point1517);
$waySet1517->setWay($way);
$em->persist($waySet1517);


$point1518 = new Point();
$point1518->setLatitude(47.31745031360486);
$point1518->setLongitude(29.586015343666073);
$em->persist($point1518);


$waySet1518 = new WaySet();
$waySet1518->setPoint($point1518);
$waySet1518->setWay($way);
$em->persist($waySet1518);


$point1519 = new Point();
$point1519->setLatitude(47.3191595495644);
$point1519->setLongitude(29.585768580436707);
$em->persist($point1519);


$waySet1519 = new WaySet();
$waySet1519->setPoint($point1519);
$waySet1519->setWay($way);
$em->persist($waySet1519);


$point1520 = new Point();
$point1520->setLatitude(47.32080690976715);
$point1520->setLongitude(29.585543274879452);
$em->persist($point1520);


$waySet1520 = new WaySet();
$waySet1520->setPoint($point1520);
$waySet1520->setWay($way);
$em->persist($waySet1520);


$point1521 = new Point();
$point1521->setLatitude(47.32258512836299);
$point1521->setLongitude(29.585199952125546);
$em->persist($point1521);


$waySet1521 = new WaySet();
$waySet1521->setPoint($point1521);
$waySet1521->setWay($way);
$em->persist($waySet1521);


$point1522 = new Point();
$point1522->setLatitude(47.32437783212546);
$point1522->setLongitude(29.5848673582077);
$em->persist($point1522);


$waySet1522 = new WaySet();
$waySet1522->setPoint($point1522);
$waySet1522->setWay($way);
$em->persist($waySet1522);


$point1523 = new Point();
$point1523->setLatitude(47.325992304340446);
$point1523->setLongitude(29.584550857543945);
$em->persist($point1523);


$waySet1523 = new WaySet();
$waySet1523->setPoint($point1523);
$waySet1523->setWay($way);
$em->persist($waySet1523);


$point1524 = new Point();
$point1524->setLatitude(47.32769035588189);
$point1524->setLongitude(29.5842182636261);
$em->persist($point1524);


$waySet1524 = new WaySet();
$waySet1524->setPoint($point1524);
$waySet1524->setWay($way);
$em->persist($waySet1524);


$point1525 = new Point();
$point1525->setLatitude(47.33096994971673);
$point1525->setLongitude(29.583563804626465);
$em->persist($point1525);


$waySet1525 = new WaySet();
$waySet1525->setPoint($point1525);
$waySet1525->setWay($way);
$em->persist($waySet1525);


$point1526 = new Point();
$point1526->setLatitude(47.3340893743812);
$point1526->setLongitude(29.58290934562683);
$em->persist($point1526);


$waySet1526 = new WaySet();
$waySet1526->setPoint($point1526);
$waySet1526->setWay($way);
$em->persist($waySet1526);


$point1527 = new Point();
$point1527->setLatitude(47.3376375868188);
$point1527->setLongitude(29.582126140594482);
$em->persist($point1527);


$waySet1527 = new WaySet();
$waySet1527->setPoint($point1527);
$waySet1527->setWay($way);
$em->persist($waySet1527);


$point1528 = new Point();
$point1528->setLatitude(47.338968105014814);
$point1528->setLongitude(29.581831097602844);
$em->persist($point1528);


$waySet1528 = new WaySet();
$waySet1528->setPoint($point1528);
$waySet1528->setWay($way);
$em->persist($waySet1528);


$point1529 = new Point();
$point1529->setLatitude(47.341559974512805);
$point1529->setLongitude(29.581707715988163);
$em->persist($point1529);


$waySet1529 = new WaySet();
$waySet1529->setPoint($point1529);
$waySet1529->setWay($way);
$em->persist($waySet1529);


$point1530 = new Point();
$point1530->setLatitude(47.34302852291606);
$point1530->setLongitude(29.58179891109467);
$em->persist($point1530);


$waySet1530 = new WaySet();
$waySet1530->setPoint($point1530);
$waySet1530->setWay($way);
$em->persist($waySet1530);


$point1531 = new Point();
$point1531->setLatitude(47.34616904378636);
$point1531->setLongitude(29.58058655261993);
$em->persist($point1531);


$waySet1531 = new WaySet();
$waySet1531->setPoint($point1531);
$waySet1531->setWay($way);
$em->persist($waySet1531);


$point1532 = new Point();
$point1532->setLatitude(47.34849523508496);
$point1532->setLongitude(29.580146670341495);
$em->persist($point1532);


$waySet1532 = new WaySet();
$waySet1532->setPoint($point1532);
$waySet1532->setWay($way);
$em->persist($waySet1532);


$point1533 = new Point();
$point1533->setLatitude(47.35234776391847);
$point1533->setLongitude(29.579170346260074);
$em->persist($point1533);


$waySet1533 = new WaySet();
$waySet1533->setPoint($point1533);
$waySet1533->setWay($way);
$em->persist($waySet1533);


$point1534 = new Point();
$point1534->setLatitude(47.355164293355145);
$point1534->setLongitude(29.57843005657196);
$em->persist($point1534);


$waySet1534 = new WaySet();
$waySet1534->setPoint($point1534);
$waySet1534->setWay($way);
$em->persist($waySet1534);


$point1535 = new Point();
$point1535->setLatitude(47.35682870072849);
$point1535->setLongitude(29.577898979187008);
$em->persist($point1535);


$waySet1535 = new WaySet();
$waySet1535->setPoint($point1535);
$waySet1535->setWay($way);
$em->persist($waySet1535);


$point1536 = new Point();
$point1536->setLatitude(47.35930704410965);
$point1536->setLongitude(29.57720696926117);
$em->persist($point1536);


$waySet1536 = new WaySet();
$waySet1536->setPoint($point1536);
$waySet1536->setWay($way);
$em->persist($waySet1536);


$point1537 = new Point();
$point1537->setLatitude(47.36118571071495);
$point1537->setLongitude(29.576729536056515);
$em->persist($point1537);


$waySet1537 = new WaySet();
$waySet1537->setPoint($point1537);
$waySet1537->setWay($way);
$em->persist($waySet1537);


$point1538 = new Point();
$point1538->setLatitude(47.365905701632215);
$point1538->setLongitude(29.57537233829498);
$em->persist($point1538);


$waySet1538 = new WaySet();
$waySet1538->setPoint($point1538);
$waySet1538->setWay($way);
$em->persist($waySet1538);


$point1539 = new Point();
$point1539->setLatitude(47.36757703673247);
$point1539->setLongitude(29.574927091598507);
$em->persist($point1539);


$waySet1539 = new WaySet();
$waySet1539->setPoint($point1539);
$waySet1539->setWay($way);
$em->persist($waySet1539);


$point1540 = new Point();
$point1540->setLatitude(47.36898673038382);
$point1540->setLongitude(29.574637413024906);
$em->persist($point1540);


$waySet1540 = new WaySet();
$waySet1540->setPoint($point1540);
$waySet1540->setWay($way);
$em->persist($waySet1540);


$point1541 = new Point();
$point1541->setLatitude(47.370403652529085);
$point1541->setLongitude(29.574192166328427);
$em->persist($point1541);


$waySet1541 = new WaySet();
$waySet1541->setPoint($point1541);
$waySet1541->setWay($way);
$em->persist($waySet1541);


$point1542 = new Point();
$point1542->setLatitude(47.370516278040846);
$point1542->setLongitude(29.57385957241058);
$em->persist($point1542);


$waySet1542 = new WaySet();
$waySet1542->setPoint($point1542);
$waySet1542->setWay($way);
$em->persist($waySet1542);


$point1543 = new Point();
$point1543->setLatitude(47.37049811265198);
$point1543->setLongitude(29.57346260547638);
$em->persist($point1543);


$waySet1543 = new WaySet();
$waySet1543->setPoint($point1543);
$waySet1543->setWay($way);
$em->persist($waySet1543);


$point1544 = new Point();
$point1544->setLatitude(47.36984415448626);
$point1544->setLongitude(29.56660687923431);
$em->persist($point1544);


$waySet1544 = new WaySet();
$waySet1544->setPoint($point1544);
$waySet1544->setWay($way);
$em->persist($waySet1544);


$point1545 = new Point();
$point1545->setLatitude(47.36898673038382);
$point1545->setLongitude(29.559037685394287);
$em->persist($point1545);


$waySet1545 = new WaySet();
$waySet1545->setPoint($point1545);
$waySet1545->setWay($way);
$em->persist($waySet1545);


$point1546 = new Point();
$point1546->setLatitude(47.36868154217021);
$point1546->setLongitude(29.555121660232544);
$em->persist($point1546);


$waySet1546 = new WaySet();
$waySet1546->setPoint($point1546);
$waySet1546->setWay($way);
$em->persist($waySet1546);


$point1547 = new Point();
$point1547->setLatitude(47.368071160445254);
$point1547->setLongitude(29.549553394317627);
$em->persist($point1547);


$waySet1547 = new WaySet();
$waySet1547->setPoint($point1547);
$waySet1547->setWay($way);
$em->persist($waySet1547);


$point1548 = new Point();
$point1548->setLatitude(47.3676206360698);
$point1548->setLongitude(29.54445719718933);
$em->persist($point1548);


$waySet1548 = new WaySet();
$waySet1548->setPoint($point1548);
$waySet1548->setWay($way);
$em->persist($waySet1548);


$point1549 = new Point();
$point1549->setLatitude(47.366893975742556);
$point1549->setLongitude(29.537885785102848);
$em->persist($point1549);


$waySet1549 = new WaySet();
$waySet1549->setPoint($point1549);
$waySet1549->setWay($way);
$em->persist($waySet1549);


$point1550 = new Point();
$point1550->setLatitude(47.366348973927565);
$point1550->setLongitude(29.532591104507446);
$em->persist($point1550);


$waySet1550 = new WaySet();
$waySet1550->setPoint($point1550);
$waySet1550->setWay($way);
$em->persist($waySet1550);


$point1551 = new Point();
$point1551->setLatitude(47.365560528002895);
$point1551->setLongitude(29.525837302207943);
$em->persist($point1551);


$waySet1551 = new WaySet();
$waySet1551->setPoint($point1551);
$waySet1551->setWay($way);
$em->persist($waySet1551);


$point1552 = new Point();
$point1552->setLatitude(47.36492467593096);
$point1552->setLongitude(29.52052652835846);
$em->persist($point1552);


$waySet1552 = new WaySet();
$waySet1552->setPoint($point1552);
$waySet1552->setWay($way);
$em->persist($waySet1552);


$point1553 = new Point();
$point1553->setLatitude(47.36454316100882);
$point1553->setLongitude(29.51720595359802);
$em->persist($point1553);


$waySet1553 = new WaySet();
$waySet1553->setPoint($point1553);
$waySet1553->setWay($way);
$em->persist($waySet1553);


$point1554 = new Point();
$point1554->setLatitude(47.362820859302886);
$point1554->setLongitude(29.512088298797607);
$em->persist($point1554);


$waySet1554 = new WaySet();
$waySet1554->setPoint($point1554);
$waySet1554->setWay($way);
$em->persist($waySet1554);


$point1555 = new Point();
$point1555->setLatitude(47.36221767705658);
$point1555->setLongitude(29.509706497192383);
$em->persist($point1555);


$waySet1555 = new WaySet();
$waySet1555->setPoint($point1555);
$waySet1555->setWay($way);
$em->persist($waySet1555);


$point1556 = new Point();
$point1556->setLatitude(47.35940152410511);
$point1556->setLongitude(29.500592350959778);
$em->persist($point1556);


$waySet1556 = new WaySet();
$waySet1556->setPoint($point1556);
$waySet1556->setWay($way);
$em->persist($waySet1556);


$point1557 = new Point();
$point1557->setLatitude(47.35819507452713);
$point1557->setLongitude(29.49691236019134);
$em->persist($point1557);


$waySet1557 = new WaySet();
$waySet1557->setPoint($point1557);
$waySet1557->setWay($way);
$em->persist($waySet1557);


$point1558 = new Point();
$point1558->setLatitude(47.357689956420806);
$point1558->setLongitude(29.49604332447052);
$em->persist($point1558);


$waySet1558 = new WaySet();
$waySet1558->setPoint($point1558);
$waySet1558->setWay($way);
$em->persist($waySet1558);


$point1559 = new Point();
$point1559->setLatitude(47.357010401411664);
$point1559->setLongitude(29.495329856872555);
$em->persist($point1559);


$waySet1559 = new WaySet();
$waySet1559->setPoint($point1559);
$waySet1559->setWay($way);
$em->persist($waySet1559);


$point1560 = new Point();
$point1560->setLatitude(47.356410786782625);
$point1560->setLongitude(29.49488997459412);
$em->persist($point1560);


$waySet1560 = new WaySet();
$waySet1560->setPoint($point1560);
$waySet1560->setWay($way);
$em->persist($waySet1560);


$point1561 = new Point();
$point1561->setLatitude(47.35600013768132);
$point1561->setLongitude(29.494680762290955);
$em->persist($point1561);


$waySet1561 = new WaySet();
$waySet1561->setPoint($point1561);
$waySet1561->setWay($way);
$em->persist($waySet1561);


$point1562 = new Point();
$point1562->setLatitude(47.355847506227256);
$point1562->setLongitude(29.489793777465824);
$em->persist($point1562);


$waySet1562 = new WaySet();
$waySet1562->setPoint($point1562);
$waySet1562->setWay($way);
$em->persist($waySet1562);


$point1563 = new Point();
$point1563->setLatitude(47.35596379689896);
$point1563->setLongitude(29.487733840942383);
$em->persist($point1563);


$waySet1563 = new WaySet();
$waySet1563->setPoint($point1563);
$waySet1563->setWay($way);
$em->persist($waySet1563);


$point1564 = new Point();
$point1564->setLatitude(47.35224600262195);
$point1564->setLongitude(29.48707938194275);
$em->persist($point1564);


$waySet1564 = new WaySet();
$waySet1564->setPoint($point1564);
$waySet1564->setWay($way);
$em->persist($waySet1564);


$point1565 = new Point();
$point1565->setLatitude(47.34978550011772);
$point1565->setLongitude(29.486677050590515);
$em->persist($point1565);


$waySet1565 = new WaySet();
$waySet1565->setPoint($point1565);
$waySet1565->setWay($way);
$em->persist($waySet1565);


$point1566 = new Point();
$point1566->setLatitude(47.34932755050566);
$point1566->setLongitude(29.49180006980896);
$em->persist($point1566);


$waySet1566 = new WaySet();
$waySet1566->setPoint($point1566);
$waySet1566->setWay($way);
$em->persist($waySet1566);


$point1567 = new Point();
$point1567->setLatitude(47.34466059932575);
$point1567->setLongitude(29.49005126953125);
$em->persist($point1567);


$waySet1567 = new WaySet();
$waySet1567->setPoint($point1567);
$waySet1567->setWay($way);
$em->persist($waySet1567);


$point1568 = new Point();
$point1568->setLatitude(47.34169810704371);
$point1568->setLongitude(29.488500952720642);
$em->persist($point1568);


$waySet1568 = new WaySet();
$waySet1568->setPoint($point1568);
$waySet1568->setWay($way);
$em->persist($waySet1568);


$point1569 = new Point();
$point1569->setLatitude(47.339887815207454);
$point1569->setLongitude(29.48771774768829);
$em->persist($point1569);


$waySet1569 = new WaySet();
$waySet1569->setPoint($point1569);
$waySet1569->setWay($way);
$em->persist($waySet1569);


$point1570 = new Point();
$point1570->setLatitude(47.33907352715417);
$point1570->setLongitude(29.487159848213196);
$em->persist($point1570);


$waySet1570 = new WaySet();
$waySet1570->setPoint($point1570);
$waySet1570->setWay($way);
$em->persist($waySet1570);


$point1571 = new Point();
$point1571->setLatitude(47.337721199605255);
$point1571->setLongitude(29.493613243103027);
$em->persist($point1571);


$waySet1571 = new WaySet();
$waySet1571->setPoint($point1571);
$waySet1571->setWay($way);
$em->persist($waySet1571);


$point1572 = new Point();
$point1572->setLatitude(47.334274788926706);
$point1572->setLongitude(29.49202537536621);
$em->persist($point1572);


$waySet1572 = new WaySet();
$waySet1572->setPoint($point1572);
$waySet1572->setWay($way);
$em->persist($waySet1572);


$point1573 = new Point();
$point1573->setLatitude(47.33292233847433);
$point1573->setLongitude(29.491403102874752);
$em->persist($point1573);


$waySet1573 = new WaySet();
$waySet1573->setPoint($point1573);
$waySet1573->setWay($way);
$em->persist($waySet1573);


$point1574 = new Point();
$point1574->setLatitude(47.332515142306875);
$point1574->setLongitude(29.484826326370236);
$em->persist($point1574);


$waySet1574 = new WaySet();
$waySet1574->setPoint($point1574);
$waySet1574->setWay($way);
$em->persist($waySet1574);


$point1575 = new Point();
$point1575->setLatitude(47.33236971434331);
$point1575->setLongitude(29.48345839977264);
$em->persist($point1575);


$waySet1575 = new WaySet();
$waySet1575->setPoint($point1575);
$waySet1575->setWay($way);
$em->persist($waySet1575);


$point1576 = new Point();
$point1576->setLatitude(47.3303773109169);
$point1576->setLongitude(29.483672976493835);
$em->persist($point1576);


$waySet1576 = new WaySet();
$waySet1576->setPoint($point1576);
$waySet1576->setWay($way);
$em->persist($waySet1576);


$point1577 = new Point();
$point1577->setLatitude(47.32572322906456);
$point1577->setLongitude(29.484295248985294);
$em->persist($point1577);


$waySet1577 = new WaySet();
$waySet1577->setPoint($point1577);
$waySet1577->setWay($way);
$em->persist($waySet1577);


$point1578 = new Point();
$point1578->setLatitude(47.3249014501422);
$point1578->setLongitude(29.484332799911495);
$em->persist($point1578);


$waySet1578 = new WaySet();
$waySet1578->setPoint($point1578);
$waySet1578->setWay($way);
$em->persist($waySet1578);


$point1579 = new Point();
$point1579->setLatitude(47.32490872257811);
$point1579->setLongitude(29.48523938655853);
$em->persist($point1579);


$waySet1579 = new WaySet();
$waySet1579->setPoint($point1579);
$waySet1579->setWay($way);
$em->persist($waySet1579);


$point1580 = new Point();
$point1580->setLatitude(47.32382511858812);
$point1580->setLongitude(29.48559880256653);
$em->persist($point1580);


$waySet1580 = new WaySet();
$waySet1580->setPoint($point1580);
$waySet1580->setWay($way);
$em->persist($waySet1580);


$point1581 = new Point();
$point1581->setLatitude(47.3221269427925);
$point1581->setLongitude(29.486162066459656);
$em->persist($point1581);


$waySet1581 = new WaySet();
$waySet1581->setPoint($point1581);
$waySet1581->setWay($way);
$em->persist($waySet1581);


$point1582 = new Point();
$point1582->setLatitude(47.32184330211462);
$point1582->setLongitude(29.48584020137787);
$em->persist($point1582);


$waySet1582 = new WaySet();
$waySet1582->setPoint($point1582);
$waySet1582->setWay($way);
$em->persist($waySet1582);


$point1583 = new Point();
$point1583->setLatitude(47.32129419852598);
$point1583->setLongitude(29.48426842689514);
$em->persist($point1583);


$waySet1583 = new WaySet();
$waySet1583->setPoint($point1583);
$waySet1583->setWay($way);
$em->persist($waySet1583);


$point1584 = new Point();
$point1584->setLatitude(47.31847222515503);
$point1584->setLongitude(29.484633207321167);
$em->persist($point1584);


$waySet1584 = new WaySet();
$waySet1584->setPoint($point1584);
$waySet1584->setWay($way);
$em->persist($waySet1584);


$point1585 = new Point();
$point1585->setLatitude(47.31489362980671);
$point1585->setLongitude(29.48477268218994);
$em->persist($point1585);


$waySet1585 = new WaySet();
$waySet1585->setPoint($point1585);
$waySet1585->setWay($way);
$em->persist($waySet1585);


$point1586 = new Point();
$point1586->setLatitude(47.31194765298983);
$point1586->setLongitude(29.48505163192749);
$em->persist($point1586);


$waySet1586 = new WaySet();
$waySet1586->setPoint($point1586);
$waySet1586->setWay($way);
$em->persist($waySet1586);


$point1587 = new Point();
$point1587->setLatitude(47.31056917040175);
$point1587->setLongitude(29.485137462615963);
$em->persist($point1587);


$waySet1587 = new WaySet();
$waySet1587->setPoint($point1587);
$waySet1587->setWay($way);
$em->persist($waySet1587);


$point1588 = new Point();
$point1588->setLatitude(47.30880509670285);
$point1588->setLongitude(29.48534667491913);
$em->persist($point1588);


$waySet1588 = new WaySet();
$waySet1588->setPoint($point1588);
$waySet1588->setWay($way);
$em->persist($waySet1588);


$point1589 = new Point();
$point1589->setLatitude(47.30684454159663);
$point1589->setLongitude(29.48555588722229);
$em->persist($point1589);


$waySet1589 = new WaySet();
$waySet1589->setPoint($point1589);
$waySet1589->setWay($way);
$em->persist($waySet1589);


$point1590 = new Point();
$point1590->setLatitude(47.30588424317574);
$point1590->setLongitude(29.48571145534515);
$em->persist($point1590);


$waySet1590 = new WaySet();
$waySet1590->setPoint($point1590);
$waySet1590->setWay($way);
$em->persist($waySet1590);


$point1591 = new Point();
$point1591->setLatitude(47.305138544868754);
$point1591->setLongitude(29.481854438781735);
$em->persist($point1591);


$waySet1591 = new WaySet();
$waySet1591->setPoint($point1591);
$waySet1591->setWay($way);
$em->persist($waySet1591);


$point1592 = new Point();
$point1592->setLatitude(47.30442193707182);
$point1592->setLongitude(29.477176666259766);
$em->persist($point1592);


$waySet1592 = new WaySet();
$waySet1592->setPoint($point1592);
$waySet1592->setWay($way);
$em->persist($waySet1592);


$point1593 = new Point();
$point1593->setLatitude(47.30325060798008);
$point1593->setLongitude(29.470406770706177);
$em->persist($point1593);


$waySet1593 = new WaySet();
$waySet1593->setPoint($point1593);
$waySet1593->setWay($way);
$em->persist($waySet1593);


$point1594 = new Point();
$point1594->setLatitude(47.30251214804008);
$point1594->setLongitude(29.465669989585873);
$em->persist($point1594);


$waySet1594 = new WaySet();
$waySet1594->setPoint($point1594);
$waySet1594->setWay($way);
$em->persist($waySet1594);


$point1595 = new Point();
$point1595->setLatitude(47.302119268597274);
$point1595->setLongitude(29.46248888969421);
$em->persist($point1595);


$waySet1595 = new WaySet();
$waySet1595->setPoint($point1595);
$waySet1595->setWay($way);
$em->persist($waySet1595);


$point1596 = new Point();
$point1596->setLatitude(47.301126143654315);
$point1596->setLongitude(29.456791877746582);
$em->persist($point1596);


$waySet1596 = new WaySet();
$waySet1596->setPoint($point1596);
$waySet1596->setWay($way);
$em->persist($waySet1596);


$point1597 = new Point();
$point1597->setLatitude(47.30039129194398);
$point1597->setLongitude(29.449962973594666);
$em->persist($point1597);


$waySet1597 = new WaySet();
$waySet1597->setPoint($point1597);
$waySet1597->setWay($way);
$em->persist($waySet1597);


$point1598 = new Point();
$point1598->setLatitude(47.29979103420559);
$point1598->setLongitude(29.445059895515442);
$em->persist($point1598);


$waySet1598 = new WaySet();
$waySet1598->setPoint($point1598);
$waySet1598->setWay($way);
$em->persist($waySet1598);


$point1599 = new Point();
$point1599->setLatitude(47.297098885377885);
$point1599->setLongitude(29.445596337318417);
$em->persist($point1599);


$waySet1599 = new WaySet();
$waySet1599->setPoint($point1599);
$waySet1599->setWay($way);
$em->persist($waySet1599);


$point1600 = new Point();
$point1600->setLatitude(47.29459579161091);
$point1600->setLongitude(29.446218609809875);
$em->persist($point1600);


$waySet1600 = new WaySet();
$waySet1600->setPoint($point1600);
$waySet1600->setWay($way);
$em->persist($waySet1600);


$point1601 = new Point();
$point1601->setLatitude(47.29383174229439);
$point1601->setLongitude(29.440703988075253);
$em->persist($point1601);


$waySet1601 = new WaySet();
$waySet1601->setPoint($point1601);
$waySet1601->setWay($way);
$em->persist($waySet1601);


$point1602 = new Point();
$point1602->setLatitude(47.293078597164325);
$point1602->setLongitude(29.43459391593933);
$em->persist($point1602);


$waySet1602 = new WaySet();
$waySet1602->setPoint($point1602);
$waySet1602->setWay($way);
$em->persist($waySet1602);


$point1603 = new Point();
$point1603->setLatitude(47.2921544334119);
$point1603->setLongitude(29.42705690860748);
$em->persist($point1603);


$waySet1603 = new WaySet();
$waySet1603->setPoint($point1603);
$waySet1603->setWay($way);
$em->persist($waySet1603);


$point1604 = new Point();
$point1604->setLatitude(47.29451574886684);
$point1604->setLongitude(29.426525831222534);
$em->persist($point1604);


$waySet1604 = new WaySet();
$waySet1604->setPoint($point1604);
$waySet1604->setWay($way);
$em->persist($waySet1604);


$point1605 = new Point();
$point1605->setLatitude(47.29795020131305);
$point1605->setLongitude(29.425538778305054);
$em->persist($point1605);


$waySet1605 = new WaySet();
$waySet1605->setPoint($point1605);
$waySet1605->setWay($way);
$em->persist($waySet1605);


$point1606 = new Point();
$point1606->setLatitude(47.30063139313118);
$point1606->setLongitude(29.424878954887387);
$em->persist($point1606);


$waySet1606 = new WaySet();
$waySet1606->setPoint($point1606);
$waySet1606->setWay($way);
$em->persist($waySet1606);


$point1607 = new Point();
$point1607->setLatitude(47.30285045855403);
$point1607->setLongitude(29.42437469959259);
$em->persist($point1607);


$waySet1607 = new WaySet();
$waySet1607->setPoint($point1607);
$waySet1607->setWay($way);
$em->persist($waySet1607);


$point1608 = new Point();
$point1608->setLatitude(47.30477842338304);
$point1608->setLongitude(29.423693418502804);
$em->persist($point1608);


$waySet1608 = new WaySet();
$waySet1608->setPoint($point1608);
$waySet1608->setWay($way);
$em->persist($waySet1608);


$point1609 = new Point();
$point1609->setLatitude(47.30482934980269);
$point1609->setLongitude(29.42335546016693);
$em->persist($point1609);


$waySet1609 = new WaySet();
$waySet1609->setPoint($point1609);
$waySet1609->setWay($way);
$em->persist($waySet1609);


$point1610 = new Point();
$point1610->setLatitude(47.30478206098608);
$point1610->setLongitude(29.4228994846344);
$em->persist($point1610);


$waySet1610 = new WaySet();
$waySet1610->setPoint($point1610);
$waySet1610->setWay($way);
$em->persist($waySet1610);


$point1611 = new Point();
$point1611->setLatitude(47.30392721739159);
$point1611->setLongitude(29.417921304702755);
$em->persist($point1611);


$waySet1611 = new WaySet();
$waySet1611->setPoint($point1611);
$waySet1611->setWay($way);
$em->persist($waySet1611);


$point1612 = new Point();
$point1612->setLatitude(47.303123288036694);
$point1612->setLongitude(29.41339373588562);
$em->persist($point1612);


$waySet1612 = new WaySet();
$waySet1612->setPoint($point1612);
$waySet1612->setWay($way);
$em->persist($waySet1612);


$point1613 = new Point();
$point1613->setLatitude(47.30197739474761);
$point1613->setLongitude(29.406972527503964);
$em->persist($point1613);


$waySet1613 = new WaySet();
$waySet1613->setPoint($point1613);
$waySet1613->setWay($way);
$em->persist($waySet1613);


$point1614 = new Point();
$point1614->setLatitude(47.3008460281179);
$point1614->setLongitude(29.400503039360046);
$em->persist($point1614);


$waySet1614 = new WaySet();
$waySet1614->setPoint($point1614);
$waySet1614->setWay($way);
$em->persist($waySet1614);


$point1615 = new Point();
$point1615->setLatitude(47.30047496369362);
$point1615->setLongitude(29.39836263656616);
$em->persist($point1615);


$waySet1615 = new WaySet();
$waySet1615->setPoint($point1615);
$waySet1615->setWay($way);
$em->persist($waySet1615);


$point1616 = new Point();
$point1616->setLatitude(47.30427279412632);
$point1616->setLongitude(29.39710199832916);
$em->persist($point1616);


$waySet1616 = new WaySet();
$waySet1616->setPoint($point1616);
$waySet1616->setWay($way);
$em->persist($waySet1616);


$point1617 = new Point();
$point1617->setLatitude(47.30783755911564);
$point1617->setLongitude(29.39594864845276);
$em->persist($point1617);


$waySet1617 = new WaySet();
$waySet1617->setPoint($point1617);
$waySet1617->setWay($way);
$em->persist($waySet1617);


$point1618 = new Point();
$point1618->setLatitude(47.31158757789391);
$point1618->setLongitude(29.39475774765015);
$em->persist($point1618);


$waySet1618 = new WaySet();
$waySet1618->setPoint($point1618);
$waySet1618->setWay($way);
$em->persist($waySet1618);


$point1619 = new Point();
$point1619->setLatitude(47.315297324946265);
$point1619->setLongitude(29.393481016159058);
$em->persist($point1619);


$waySet1619 = new WaySet();
$waySet1619->setPoint($point1619);
$waySet1619->setWay($way);
$em->persist($waySet1619);


$point1620 = new Point();
$point1620->setLatitude(47.31782489557794);
$point1620->setLongitude(29.39259052276611);
$em->persist($point1620);


$waySet1620 = new WaySet();
$waySet1620->setPoint($point1620);
$waySet1620->setWay($way);
$em->persist($waySet1620);


$point1621 = new Point();
$point1621->setLatitude(47.32066508607501);
$point1621->setLongitude(29.391812682151794);
$em->persist($point1621);


$waySet1621 = new WaySet();
$waySet1621->setPoint($point1621);
$waySet1621->setWay($way);
$em->persist($waySet1621);


$point1622 = new Point();
$point1622->setLatitude(47.32502144520671);
$point1622->setLongitude(29.390332102775574);
$em->persist($point1622);


$waySet1622 = new WaySet();
$waySet1622->setPoint($point1622);
$waySet1622->setWay($way);
$em->persist($waySet1622);


$point1623 = new Point();
$point1623->setLatitude(47.32933745008081);
$point1623->setLongitude(29.388846158981327);
$em->persist($point1623);


$waySet1623 = new WaySet();
$waySet1623->setPoint($point1623);
$waySet1623->setWay($way);
$em->persist($waySet1623);


$point1624 = new Point();
$point1624->setLatitude(47.332566041999506);
$point1624->setLongitude(29.387773275375366);
$em->persist($point1624);


$waySet1624 = new WaySet();
$waySet1624->setPoint($point1624);
$waySet1624->setWay($way);
$em->persist($waySet1624);


$point1625 = new Point();
$point1625->setLatitude(47.33721225015945);
$point1625->setLongitude(29.386233687400814);
$em->persist($point1625);


$waySet1625 = new WaySet();
$waySet1625->setPoint($point1625);
$waySet1625->setWay($way);
$em->persist($waySet1625);


$point1626 = new Point();
$point1626->setLatitude(47.33821923824239);
$point1626->setLongitude(29.385906457901);
$em->persist($point1626);


$waySet1626 = new WaySet();
$waySet1626->setPoint($point1626);
$waySet1626->setWay($way);
$em->persist($waySet1626);


$point1627 = new Point();
$point1627->setLatitude(47.34148363795909);
$point1627->setLongitude(29.38486576080322);
$em->persist($point1627);


$waySet1627 = new WaySet();
$waySet1627->setPoint($point1627);
$waySet1627->setWay($way);
$em->persist($waySet1627);


$point1628 = new Point();
$point1628->setLatitude(47.345151302856586);
$point1628->setLongitude(29.383733868598938);
$em->persist($point1628);


$waySet1628 = new WaySet();
$waySet1628->setPoint($point1628);
$waySet1628->setWay($way);
$em->persist($waySet1628);


$point1629 = new Point();
$point1629->setLatitude(47.345354852612346);
$point1629->setLongitude(29.38385725021362);
$em->persist($point1629);


$waySet1629 = new WaySet();
$waySet1629->setPoint($point1629);
$waySet1629->setWay($way);
$em->persist($waySet1629);


$point1630 = new Point();
$point1630->setLatitude(47.34771742627795);
$point1630->setLongitude(29.388738870620728);
$em->persist($point1630);


$waySet1630 = new WaySet();
$waySet1630->setPoint($point1630);
$waySet1630->setWay($way);
$em->persist($waySet1630);


$point1631 = new Point();
$point1631->setLatitude(47.34793550466987);
$point1631->setLongitude(29.38880324363708);
$em->persist($point1631);


$waySet1631 = new WaySet();
$waySet1631->setPoint($point1631);
$waySet1631->setWay($way);
$em->persist($waySet1631);


$point1632 = new Point();
$point1632->setLatitude(47.348240812904834);
$point1632->setLongitude(29.389146566390988);
$em->persist($point1632);


$waySet1632 = new WaySet();
$waySet1632->setPoint($point1632);
$waySet1632->setWay($way);
$em->persist($waySet1632);


$point1633 = new Point();
$point1633->setLatitude(47.34864061863727);
$point1633->setLongitude(29.389833211898807);
$em->persist($point1633);


$waySet1633 = new WaySet();
$waySet1633->setPoint($point1633);
$waySet1633->setWay($way);
$em->persist($waySet1633);


$point1634 = new Point();
$point1634->setLatitude(47.349581967447364);
$point1634->setLongitude(29.39105093479156);
$em->persist($point1634);


$waySet1634 = new WaySet();
$waySet1634->setPoint($point1634);
$waySet1634->setWay($way);
$em->persist($waySet1634);


$point1635 = new Point();
$point1635->setLatitude(47.35052329946827);
$point1635->setLongitude(29.39308404922485);
$em->persist($point1635);


$waySet1635 = new WaySet();
$waySet1635->setPoint($point1635);
$waySet1635->setWay($way);
$em->persist($waySet1635);


$point1636 = new Point();
$point1636->setLatitude(47.351384658074124);
$point1636->setLongitude(29.394012093544003);
$em->persist($point1636);


$waySet1636 = new WaySet();
$waySet1636->setPoint($point1636);
$waySet1636->setWay($way);
$em->persist($waySet1636);


$point1637 = new Point();
$point1637->setLatitude(47.35170448385087);
$point1637->setLongitude(29.394489526748657);
$em->persist($point1637);


$waySet1637 = new WaySet();
$waySet1637->setPoint($point1637);
$waySet1637->setWay($way);
$em->persist($waySet1637);


$point1638 = new Point();
$point1638->setLatitude(47.35321636128531);
$point1638->setLongitude(29.39765453338623);
$em->persist($point1638);


$waySet1638 = new WaySet();
$waySet1638->setPoint($point1638);
$waySet1638->setWay($way);
$em->persist($waySet1638);


$point1639 = new Point();
$point1639->setLatitude(47.35364156900991);
$point1639->setLongitude(29.398008584976193);
$em->persist($point1639);


$waySet1639 = new WaySet();
$waySet1639->setPoint($point1639);
$waySet1639->setWay($way);
$em->persist($waySet1639);


$point1640 = new Point();
$point1640->setLatitude(47.35393230736219);
$point1640->setLongitude(29.397976398468018);
$em->persist($point1640);


$waySet1640 = new WaySet();
$waySet1640->setPoint($point1640);
$waySet1640->setWay($way);
$em->persist($waySet1640);


$point1641 = new Point();
$point1641->setLatitude(47.356301765208926);
$point1641->setLongitude(29.397257566452026);
$em->persist($point1641);


$waySet1641 = new WaySet();
$waySet1641->setPoint($point1641);
$waySet1641->setWay($way);
$em->persist($waySet1641);


$point1642 = new Point();
$point1642->setLatitude(47.35775173371495);
$point1642->setLongitude(29.39687669277191);
$em->persist($point1642);


$waySet1642 = new WaySet();
$waySet1642->setPoint($point1642);
$waySet1642->setWay($way);
$em->persist($waySet1642);


$point1643 = new Point();
$point1643->setLatitude(47.359870287734246);
$point1643->setLongitude(29.396216869354244);
$em->persist($point1643);


$waySet1643 = new WaySet();
$waySet1643->setPoint($point1643);
$waySet1643->setWay($way);
$em->persist($waySet1643);


$point1644 = new Point();
$point1644->setLatitude(47.362475665487906);
$point1644->setLongitude(29.39541757106781);
$em->persist($point1644);


$waySet1644 = new WaySet();
$waySet1644->setPoint($point1644);
$waySet1644->setWay($way);
$em->persist($waySet1644);


$point1645 = new Point();
$point1645->setLatitude(47.36493557631674);
$point1645->setLongitude(29.394832849502563);
$em->persist($point1645);


$waySet1645 = new WaySet();
$waySet1645->setPoint($point1645);
$waySet1645->setWay($way);
$em->persist($waySet1645);


$point1646 = new Point();
$point1646->setLatitude(47.366112804725624);
$point1646->setLongitude(29.394559264183044);
$em->persist($point1646);


$waySet1646 = new WaySet();
$waySet1646->setPoint($point1646);
$waySet1646->setWay($way);
$em->persist($waySet1646);


$point1647 = new Point();
$point1647->setLatitude(47.36670504241771);
$point1647->setLongitude(29.39434468746185);
$em->persist($point1647);


$waySet1647 = new WaySet();
$waySet1647->setPoint($point1647);
$waySet1647->setWay($way);
$em->persist($waySet1647);


$point1648 = new Point();
$point1648->setLatitude(47.368783271770944);
$point1648->setLongitude(29.39385116100311);
$em->persist($point1648);


$waySet1648 = new WaySet();
$waySet1648->setPoint($point1648);
$waySet1648->setWay($way);
$em->persist($waySet1648);


$point1649 = new Point();
$point1649->setLatitude(47.37091954806219);
$point1649->setLongitude(29.393234252929684);
$em->persist($point1649);


$waySet1649 = new WaySet();
$waySet1649->setPoint($point1649);
$waySet1649->setWay($way);
$em->persist($waySet1649);


$point1650 = new Point();
$point1650->setLatitude(47.37416376135843);
$point1650->setLongitude(29.39234912395477);
$em->persist($point1650);


$waySet1650 = new WaySet();
$waySet1650->setPoint($point1650);
$waySet1650->setWay($way);
$em->persist($waySet1650);


$point1651 = new Point();
$point1651->setLatitude(47.37623443145364);
$point1651->setLongitude(29.39183413982391);
$em->persist($point1651);


$waySet1651 = new WaySet();
$waySet1651->setPoint($point1651);
$waySet1651->setWay($way);
$em->persist($waySet1651);


$point1652 = new Point();
$point1652->setLatitude(47.37975801644875);
$point1652->setLongitude(29.390718340873715);
$em->persist($point1652);


$waySet1652 = new WaySet();
$waySet1652->setPoint($point1652);
$waySet1652->setWay($way);
$em->persist($waySet1652);


$point1653 = new Point();
$point1653->setLatitude(47.37876998338224);
$point1653->setLongitude(29.383417367935184);
$em->persist($point1653);


$waySet1653 = new WaySet();
$waySet1653->setPoint($point1653);
$waySet1653->setWay($way);
$em->persist($waySet1653);


$point1654 = new Point();
$point1654->setLatitude(47.377985355698456);
$point1654->setLongitude(29.377795457839962);
$em->persist($point1654);


$waySet1654 = new WaySet();
$waySet1654->setPoint($point1654);
$waySet1654->setWay($way);
$em->persist($waySet1654);


$point1655 = new Point();
$point1655->setLatitude(47.37707357460212);
$point1655->setLongitude(29.371170401573185);
$em->persist($point1655);


$waySet1655 = new WaySet();
$waySet1655->setPoint($point1655);
$waySet1655->setWay($way);
$em->persist($waySet1655);


$point1656 = new Point();
$point1656->setLatitude(47.37626712559258);
$point1656->setLongitude(29.365596771240234);
$em->persist($point1656);


$waySet1656 = new WaySet();
$waySet1656->setPoint($point1656);
$waySet1656->setWay($way);
$em->persist($waySet1656);


$point1657 = new Point();
$point1657->setLatitude(47.37560234078353);
$point1657->setLongitude(29.36131060123444);
$em->persist($point1657);


$waySet1657 = new WaySet();
$waySet1657->setPoint($point1657);
$waySet1657->setWay($way);
$em->persist($waySet1657);


$point1658 = new Point();
$point1658->setLatitude(47.373408128162026);
$point1658->setLongitude(29.36162173748016);
$em->persist($point1658);


$waySet1658 = new WaySet();
$waySet1658->setPoint($point1658);
$waySet1658->setWay($way);
$em->persist($waySet1658);


$point1659 = new Point();
$point1659->setLatitude(47.37272514268787);
$point1659->setLongitude(29.35565650463104);
$em->persist($point1659);


$waySet1659 = new WaySet();
$waySet1659->setPoint($point1659);
$waySet1659->setWay($way);
$em->persist($waySet1659);


$point1660 = new Point();
$point1660->setLatitude(47.371936792074116);
$point1660->setLongitude(29.349042177200314);
$em->persist($point1660);


$waySet1660 = new WaySet();
$waySet1660->setPoint($point1660);
$waySet1660->setWay($way);
$em->persist($waySet1660);


$point1661 = new Point();
$point1661->setLatitude(47.37124288846454);
$point1661->setLongitude(29.343425631523132);
$em->persist($point1661);


$waySet1661 = new WaySet();
$waySet1661->setPoint($point1661);
$waySet1661->setWay($way);
$em->persist($waySet1661);


$point1662 = new Point();
$point1662->setLatitude(47.37055260879977);
$point1662->setLongitude(29.337626695632935);
$em->persist($point1662);


$waySet1662 = new WaySet();
$waySet1662->setPoint($point1662);
$waySet1662->setWay($way);
$em->persist($waySet1662);


$point1663 = new Point();
$point1663->setLatitude(47.37337179937018);
$point1663->setLongitude(29.336827397346497);
$em->persist($point1663);


$waySet1663 = new WaySet();
$waySet1663->setPoint($point1663);
$waySet1663->setWay($way);
$em->persist($waySet1663);


$point1664 = new Point();
$point1664->setLatitude(47.3761000220029);
$point1664->setLongitude(29.336199760437008);
$em->persist($point1664);


$waySet1664 = new WaySet();
$waySet1664->setPoint($point1664);
$waySet1664->setWay($way);
$em->persist($waySet1664);


$point1665 = new Point();
$point1665->setLatitude(47.378671905560296);
$point1665->setLongitude(29.33557748794556);
$em->persist($point1665);


$waySet1665 = new WaySet();
$waySet1665->setPoint($point1665);
$waySet1665->setWay($way);
$em->persist($waySet1665);


$point1666 = new Point();
$point1666->setLatitude(47.3812727223676);
$point1666->setLongitude(29.334906935691833);
$em->persist($point1666);


$waySet1666 = new WaySet();
$waySet1666->setPoint($point1666);
$waySet1666->setWay($way);
$em->persist($waySet1666);


$point1667 = new Point();
$point1667->setLatitude(47.38420756825639);
$point1667->setLongitude(29.334161281585693);
$em->persist($point1667);


$waySet1667 = new WaySet();
$waySet1667->setPoint($point1667);
$waySet1667->setWay($way);
$em->persist($waySet1667);


$point1668 = new Point();
$point1668->setLatitude(47.386281475920065);
$point1668->setLongitude(29.33367311954498);
$em->persist($point1668);


$waySet1668 = new WaySet();
$waySet1668->setPoint($point1668);
$waySet1668->setWay($way);
$em->persist($waySet1668);


$point1669 = new Point();
$point1669->setLatitude(47.387196729708485);
$point1669->setLongitude(29.33342099189758);
$em->persist($point1669);


$waySet1669 = new WaySet();
$waySet1669->setPoint($point1669);
$waySet1669->setWay($way);
$em->persist($waySet1669);


$point1670 = new Point();
$point1670->setLatitude(47.38997871309577);
$point1670->setLongitude(29.33264315128326);
$em->persist($point1670);


$waySet1670 = new WaySet();
$waySet1670->setPoint($point1670);
$waySet1670->setWay($way);
$em->persist($waySet1670);


$point1671 = new Point();
$point1671->setLatitude(47.392317499347065);
$point1671->setLongitude(29.332047700881958);
$em->persist($point1671);


$waySet1671 = new WaySet();
$waySet1671->setPoint($point1671);
$waySet1671->setWay($way);
$em->persist($waySet1671);


$point1672 = new Point();
$point1672->setLatitude(47.394383825061716);
$point1672->setLongitude(29.331570267677307);
$em->persist($point1672);


$waySet1672 = new WaySet();
$waySet1672->setPoint($point1672);
$waySet1672->setWay($way);
$em->persist($waySet1672);


$point1673 = new Point();
$point1673->setLatitude(47.39540424776928);
$point1673->setLongitude(29.331318140029907);
$em->persist($point1673);


$waySet1673 = new WaySet();
$waySet1673->setPoint($point1673);
$waySet1673->setWay($way);
$em->persist($waySet1673);


$point1674 = new Point();
$point1674->setLatitude(47.39789893466669);
$point1674->setLongitude(29.3306690454483);
$em->persist($point1674);


$waySet1674 = new WaySet();
$waySet1674->setPoint($point1674);
$waySet1674->setWay($way);
$em->persist($waySet1674);


$point1675 = new Point();
$point1675->setLatitude(47.39939496389531);
$point1675->setLongitude(29.330331087112427);
$em->persist($point1675);


$waySet1675 = new WaySet();
$waySet1675->setPoint($point1675);
$waySet1675->setWay($way);
$em->persist($waySet1675);


$point1676 = new Point();
$point1676->setLatitude(47.40093815342026);
$point1676->setLongitude(29.32994484901428);
$em->persist($point1676);


$waySet1676 = new WaySet();
$waySet1676->setPoint($point1676);
$waySet1676->setWay($way);
$em->persist($waySet1676);


$point1677 = new Point();
$point1677->setLatitude(47.40247766686993);
$point1677->setLongitude(29.329542517662045);
$em->persist($point1677);


$waySet1677 = new WaySet();
$waySet1677->setPoint($point1677);
$waySet1677->setWay($way);
$em->persist($waySet1677);


$point1678 = new Point();
$point1678->setLatitude(47.40319294436849);
$point1678->setLongitude(29.329327940940857);
$em->persist($point1678);


$waySet1678 = new WaySet();
$waySet1678->setPoint($point1678);
$waySet1678->setWay($way);
$em->persist($waySet1678);


$point1679 = new Point();
$point1679->setLatitude(47.406231857737446);
$point1679->setLongitude(29.32852864265442);
$em->persist($point1679);


$waySet1679 = new WaySet();
$waySet1679->setPoint($point1679);
$waySet1679->setWay($way);
$em->persist($waySet1679);


$point1680 = new Point();
$point1680->setLatitude(47.40885672780603);
$point1680->setLongitude(29.32787954807281);
$em->persist($point1680);


$waySet1680 = new WaySet();
$waySet1680->setPoint($point1680);
$waySet1680->setWay($way);
$em->persist($waySet1680);


$point1681 = new Point();
$point1681->setLatitude(47.41164119801419);
$point1681->setLongitude(29.327208995819092);
$em->persist($point1681);


$waySet1681 = new WaySet();
$waySet1681->setPoint($point1681);
$waySet1681->setWay($way);
$em->persist($waySet1681);


$point1682 = new Point();
$point1682->setLatitude(47.414596133147924);
$point1682->setLongitude(29.326511621475216);
$em->persist($point1682);


$waySet1682 = new WaySet();
$waySet1682->setPoint($point1682);
$waySet1682->setWay($way);
$em->persist($waySet1682);


$point1683 = new Point();
$point1683->setLatitude(47.41752186378168);
$point1683->setLongitude(29.325803518295288);
$em->persist($point1683);


$waySet1683 = new WaySet();
$waySet1683->setPoint($point1683);
$waySet1683->setWay($way);
$em->persist($waySet1683);


$point1684 = new Point();
$point1684->setLatitude(47.41962712767889);
$point1684->setLongitude(29.325309991836548);
$em->persist($point1684);


$waySet1684 = new WaySet();
$waySet1684->setPoint($point1684);
$waySet1684->setWay($way);
$em->persist($waySet1684);


$point1685 = new Point();
$point1685->setLatitude(47.42303166941783);
$point1685->setLongitude(29.32442486286163);
$em->persist($point1685);


$waySet1685 = new WaySet();
$waySet1685->setPoint($point1685);
$waySet1685->setWay($way);
$em->persist($waySet1685);


$point1686 = new Point();
$point1686->setLatitude(47.425456091570965);
$point1686->setLongitude(29.32388305664062);
$em->persist($point1686);


$waySet1686 = new WaySet();
$waySet1686->setPoint($point1686);
$waySet1686->setWay($way);
$em->persist($waySet1686);


$point1687 = new Point();
$point1687->setLatitude(47.42872961017449);
$point1687->setLongitude(29.323062300682068);
$em->persist($point1687);


$waySet1687 = new WaySet();
$waySet1687->setPoint($point1687);
$waySet1687->setWay($way);
$em->persist($waySet1687);


$point1688 = new Point();
$point1688->setLatitude(47.43247467221482);
$point1688->setLongitude(29.32228446006775);
$em->persist($point1688);


$waySet1688 = new WaySet();
$waySet1688->setPoint($point1688);
$waySet1688->setWay($way);
$em->persist($waySet1688);


$point1689 = new Point();
$point1689->setLatitude(47.4355518105585);
$point1689->setLongitude(29.321517348289493);
$em->persist($point1689);


$waySet1689 = new WaySet();
$waySet1689->setPoint($point1689);
$waySet1689->setWay($way);
$em->persist($waySet1689);


$point1690 = new Point();
$point1690->setLatitude(47.43914399677456);
$point1690->setLongitude(29.32065904140472);
$em->persist($point1690);


$waySet1690 = new WaySet();
$waySet1690->setPoint($point1690);
$waySet1690->setWay($way);
$em->persist($waySet1690);


$point1691 = new Point();
$point1691->setLatitude(47.44026151580309);
$point1691->setLongitude(29.32041764259338);
$em->persist($point1691);


$waySet1691 = new WaySet();
$waySet1691->setPoint($point1691);
$waySet1691->setWay($way);
$em->persist($waySet1691);


$point1692 = new Point();
$point1692->setLatitude(47.44198854397708);
$point1692->setLongitude(29.32002067565918);
$em->persist($point1692);


$waySet1692 = new WaySet();
$waySet1692->setPoint($point1692);
$waySet1692->setWay($way);
$em->persist($waySet1692);


$point1693 = new Point();
$point1693->setLatitude(47.44375542379305);
$point1693->setLongitude(29.319564700126648);
$em->persist($point1693);


$waySet1693 = new WaySet();
$waySet1693->setPoint($point1693);
$waySet1693->setWay($way);
$em->persist($waySet1693);


$point1694 = new Point();
$point1694->setLatitude(47.44615712419312);
$point1694->setLongitude(29.318652749061584);
$em->persist($point1694);


$waySet1694 = new WaySet();
$waySet1694->setPoint($point1694);
$waySet1694->setWay($way);
$em->persist($waySet1694);


$point1695 = new Point();
$point1695->setLatitude(47.44920081352425);
$point1695->setLongitude(29.31749403476715);
$em->persist($point1695);


$waySet1695 = new WaySet();
$waySet1695->setPoint($point1695);
$waySet1695->setWay($way);
$em->persist($waySet1695);


$point1696 = new Point();
$point1696->setLatitude(47.44773884885495);
$point1696->setLongitude(29.312413930892944);
$em->persist($point1696);


$waySet1696 = new WaySet();
$waySet1696->setPoint($point1696);
$waySet1696->setWay($way);
$em->persist($waySet1696);


$point1697 = new Point();
$point1697->setLatitude(47.44667227827377);
$point1697->setLongitude(29.308696389198307);
$em->persist($point1697);


$waySet1697 = new WaySet();
$waySet1697->setPoint($point1697);
$waySet1697->setWay($way);
$em->persist($waySet1697);


$point1698 = new Point();
$point1698->setLatitude(47.44284115252916);
$point1698->setLongitude(29.30447459220886);
$em->persist($point1698);


$waySet1698 = new WaySet();
$waySet1698->setPoint($point1698);
$waySet1698->setWay($way);
$em->persist($waySet1698);


$point1699 = new Point();
$point1699->setLatitude(47.44088557454205);
$point1699->setLongitude(29.29598271846771);
$em->persist($point1699);


$waySet1699 = new WaySet();
$waySet1699->setPoint($point1699);
$waySet1699->setWay($way);
$em->persist($waySet1699);


$point1700 = new Point();
$point1700->setLatitude(47.43999302313792);
$point1700->setLongitude(29.29080069065094);
$em->persist($point1700);


$waySet1700 = new WaySet();
$waySet1700->setPoint($point1700);
$waySet1700->setWay($way);
$em->persist($waySet1700);


$point1701 = new Point();
$point1701->setLatitude(47.43752210063753);
$point1701->setLongitude(29.290210604667664);
$em->persist($point1701);


$waySet1701 = new WaySet();
$waySet1701->setPoint($point1701);
$waySet1701->setWay($way);
$em->persist($waySet1701);


$point1702 = new Point();
$point1702->setLatitude(47.43737333361173);
$point1702->setLongitude(29.290205240249634);
$em->persist($point1702);


$waySet1702 = new WaySet();
$waySet1702->setPoint($point1702);
$waySet1702->setWay($way);
$em->persist($waySet1702);


$point1703 = new Point();
$point1703->setLatitude(47.4368798594901);
$point1703->setLongitude(29.28919672966003);
$em->persist($point1703);


$waySet1703 = new WaySet();
$waySet1703->setPoint($point1703);
$waySet1703->setWay($way);
$em->persist($waySet1703);


$point1704 = new Point();
$point1704->setLatitude(47.436694805501304);
$point1704->setLongitude(29.288220405578617);
$em->persist($point1704);


$waySet1704 = new WaySet();
$waySet1704->setPoint($point1704);
$waySet1704->setWay($way);
$em->persist($waySet1704);


$point1705 = new Point();
$point1705->setLatitude(47.43632106702967);
$point1705->setLongitude(29.277067780494686);
$em->persist($point1705);


$waySet1705 = new WaySet();
$waySet1705->setPoint($point1705);
$waySet1705->setWay($way);
$em->persist($waySet1705);


$point1706 = new Point();
$point1706->setLatitude(47.43466642598276);
$point1706->setLongitude(29.27259385585785);
$em->persist($point1706);


$waySet1706 = new WaySet();
$waySet1706->setPoint($point1706);
$waySet1706->setWay($way);
$em->persist($waySet1706);


$point1707 = new Point();
$point1707->setLatitude(47.428297749643846);
$point1707->setLongitude(29.263361692428585);
$em->persist($point1707);


$waySet1707 = new WaySet();
$waySet1707->setPoint($point1707);
$waySet1707->setWay($way);
$em->persist($waySet1707);


$point1708 = new Point();
$point1708->setLatitude(47.427223526568575);
$point1708->setLongitude(29.261822104454037);
$em->persist($point1708);


$waySet1708 = new WaySet();
$waySet1708->setPoint($point1708);
$waySet1708->setWay($way);
$em->persist($waySet1708);


$point1709 = new Point();
$point1709->setLatitude(47.42597870686691);
$point1709->setLongitude(29.259402751922604);
$em->persist($point1709);


$waySet1709 = new WaySet();
$waySet1709->setPoint($point1709);
$waySet1709->setWay($way);
$em->persist($waySet1709);


$point1710 = new Point();
$point1710->setLatitude(47.42613476459505);
$point1710->setLongitude(29.25782561302185);
$em->persist($point1710);


$waySet1710 = new WaySet();
$waySet1710->setPoint($point1710);
$waySet1710->setWay($way);
$em->persist($waySet1710);


$point1711 = new Point();
$point1711->setLatitude(47.42262153905983);
$point1711->setLongitude(29.25335705280304);
$em->persist($point1711);


$waySet1711 = new WaySet();
$waySet1711->setPoint($point1711);
$waySet1711->setWay($way);
$em->persist($waySet1711);


$point1712 = new Point();
$point1712->setLatitude(47.41852368951325);
$point1712->setLongitude(29.253630638122555);
$em->persist($point1712);


$waySet1712 = new WaySet();
$waySet1712->setPoint($point1712);
$waySet1712->setWay($way);
$em->persist($waySet1712);


$point1713 = new Point();
$point1713->setLatitude(47.4178195096488);
$point1713->setLongitude(29.25301909446716);
$em->persist($point1713);


$waySet1713 = new WaySet();
$waySet1713->setPoint($point1713);
$waySet1713->setWay($way);
$em->persist($waySet1713);


$point1714 = new Point();
$point1714->setLatitude(47.41710806063421);
$point1714->setLongitude(29.252353906631466);
$em->persist($point1714);


$waySet1714 = new WaySet();
$waySet1714->setPoint($point1714);
$waySet1714->setWay($way);
$em->persist($waySet1714);


$point1715 = new Point();
$point1715->setLatitude(47.41608442835007);
$point1715->setLongitude(29.25128638744354);
$em->persist($point1715);


$waySet1715 = new WaySet();
$waySet1715->setPoint($point1715);
$waySet1715->setWay($way);
$em->persist($waySet1715);


$point1716 = new Point();
$point1716->setLatitude(47.41530761610224);
$point1716->setLongitude(29.243760108947754);
$em->persist($point1716);


$waySet1716 = new WaySet();
$waySet1716->setPoint($point1716);
$waySet1716->setWay($way);
$em->persist($waySet1716);


$point1717 = new Point();
$point1717->setLatitude(47.416175176696854);
$point1717->setLongitude(29.24352943897247);
$em->persist($point1717);


$waySet1717 = new WaySet();
$waySet1717->setPoint($point1717);
$waySet1717->setWay($way);
$em->persist($waySet1717);


$point1718 = new Point();
$point1718->setLatitude(47.41877414296778);
$point1718->setLongitude(29.24386739730835);
$em->persist($point1718);


$waySet1718 = new WaySet();
$waySet1718->setPoint($point1718);
$waySet1718->setWay($way);
$em->persist($waySet1718);


$point1719 = new Point();
$point1719->setLatitude(47.42209889043351);
$point1719->setLongitude(29.24356698989868);
$em->persist($point1719);


$waySet1719 = new WaySet();
$waySet1719->setPoint($point1719);
$waySet1719->setWay($way);
$em->persist($waySet1719);


$point1720 = new Point();
$point1720->setLatitude(47.4239644318748);
$point1720->setLongitude(29.243427515029907);
$em->persist($point1720);


$waySet1720 = new WaySet();
$waySet1720->setPoint($point1720);
$waySet1720->setWay($way);
$em->persist($waySet1720);


$point1721 = new Point();
$point1721->setLatitude(47.42569562422569);
$point1721->setLongitude(29.2433363199234);
$em->persist($point1721);


$waySet1721 = new WaySet();
$waySet1721->setPoint($point1721);
$waySet1721->setWay($way);
$em->persist($waySet1721);


$point1722 = new Point();
$point1722->setLatitude(47.4281671020625);
$point1722->setLongitude(29.243159294128414);
$em->persist($point1722);


$waySet1722 = new WaySet();
$waySet1722->setPoint($point1722);
$waySet1722->setWay($way);
$em->persist($waySet1722);


$point1723 = new Point();
$point1723->setLatitude(47.43223879923313);
$point1723->setLongitude(29.24284815788269);
$em->persist($point1723);


$waySet1723 = new WaySet();
$waySet1723->setPoint($point1723);
$waySet1723->setWay($way);
$em->persist($waySet1723);


$point1724 = new Point();
$point1724->setLatitude(47.434394276091226);
$point1724->setLongitude(29.242719411849976);
$em->persist($point1724);


$waySet1724 = new WaySet();
$waySet1724->setPoint($point1724);
$waySet1724->setWay($way);
$em->persist($waySet1724);


$point1725 = new Point();
$point1725->setLatitude(47.437431389086484);
$point1725->setLongitude(29.242574572563168);
$em->persist($point1725);


$waySet1725 = new WaySet();
$waySet1725->setPoint($point1725);
$waySet1725->setWay($way);
$em->persist($waySet1725);


$point1726 = new Point();
$point1726->setLatitude(47.44161847128384);
$point1726->setLongitude(29.242456555366516);
$em->persist($point1726);


$waySet1726 = new WaySet();
$waySet1726->setPoint($point1726);
$waySet1726->setWay($way);
$em->persist($waySet1726);


$point1727 = new Point();
$point1727->setLatitude(47.44470958677816);
$point1727->setLongitude(29.242370724678036);
$em->persist($point1727);


$waySet1727 = new WaySet();
$waySet1727->setPoint($point1727);
$waySet1727->setWay($way);
$em->persist($waySet1727);


$point1728 = new Point();
$point1728->setLatitude(47.44586689432016);
$point1728->setLongitude(29.24231708049774);
$em->persist($point1728);


$waySet1728 = new WaySet();
$waySet1728->setPoint($point1728);
$waySet1728->setWay($way);
$em->persist($waySet1728);


$point1729 = new Point();
$point1729->setLatitude(47.448054462533094);
$point1729->setLongitude(29.24229025840759);
$em->persist($point1729);


$waySet1729 = new WaySet();
$waySet1729->setPoint($point1729);
$waySet1729->setWay($way);
$em->persist($waySet1729);


$point1730 = new Point();
$point1730->setLatitude(47.44990094598526);
$point1730->setLongitude(29.24229025840759);
$em->persist($point1730);


$waySet1730 = new WaySet();
$waySet1730->setPoint($point1730);
$waySet1730->setWay($way);
$em->persist($waySet1730);


$point1731 = new Point();
$point1731->setLatitude(47.45158050036813);
$point1731->setLongitude(29.242295622825623);
$em->persist($point1731);


$waySet1731 = new WaySet();
$waySet1731->setPoint($point1731);
$waySet1731->setWay($way);
$em->persist($waySet1731);


$point1732 = new Point();
$point1732->setLatitude(47.453082259512705);
$point1732->setLongitude(29.24229025840759);
$em->persist($point1732);


$waySet1732 = new WaySet();
$waySet1732->setPoint($point1732);
$waySet1732->setWay($way);
$em->persist($waySet1732);


$point1733 = new Point();
$point1733->setLatitude(47.45493219370816);
$point1733->setLongitude(29.242322444915768);
$em->persist($point1733);


$waySet1733 = new WaySet();
$waySet1733->setPoint($point1733);
$waySet1733->setWay($way);
$em->persist($waySet1733);


$point1734 = new Point();
$point1734->setLatitude(47.45772873537554);
$point1734->setLongitude(29.242402911186215);
$em->persist($point1734);


$waySet1734 = new WaySet();
$waySet1734->setPoint($point1734);
$waySet1734->setWay($way);
$em->persist($waySet1734);


$point1735 = new Point();
$point1735->setLatitude(47.458628239861376);
$point1735->setLongitude(29.24242436885834);
$em->persist($point1735);


$waySet1735 = new WaySet();
$waySet1735->setPoint($point1735);
$waySet1735->setWay($way);
$em->persist($waySet1735);


$point1736 = new Point();
$point1736->setLatitude(47.460528755184235);
$point1736->setLongitude(29.24237608909607);
$em->persist($point1736);


$waySet1736 = new WaySet();
$waySet1736->setPoint($point1736);
$waySet1736->setWay($way);
$em->persist($waySet1736);


$point1737 = new Point();
$point1737->setLatitude(47.461979484002725);
$point1737->setLongitude(29.24235463142395);
$em->persist($point1737);


$waySet1737 = new WaySet();
$waySet1737->setPoint($point1737);
$waySet1737->setWay($way);
$em->persist($waySet1737);


$point1738 = new Point();
$point1738->setLatitude(47.459774360377935);
$point1738->setLongitude(29.239286184310913);
$em->persist($point1738);


$waySet1738 = new WaySet();
$waySet1738->setPoint($point1738);
$waySet1738->setWay($way);
$em->persist($waySet1738);


$point1739 = new Point();
$point1739->setLatitude(47.4570976222358);
$point1739->setLongitude(29.23554182052612);
$em->persist($point1739);


$waySet1739 = new WaySet();
$waySet1739->setPoint($point1739);
$waySet1739->setWay($way);
$em->persist($waySet1739);


$point1740 = new Point();
$point1740->setLatitude(47.45358646371544);
$point1740->setLongitude(29.230531454086304);
$em->persist($point1740);


$waySet1740 = new WaySet();
$waySet1740->setPoint($point1740);
$waySet1740->setWay($way);
$em->persist($waySet1740);


$point1741 = new Point();
$point1741->setLatitude(47.4532128452377);
$point1741->setLongitude(29.23000574111938);
$em->persist($point1741);


$waySet1741 = new WaySet();
$waySet1741->setPoint($point1741);
$waySet1741->setWay($way);
$em->persist($waySet1741);


$point1742 = new Point();
$point1742->setLatitude(47.44695887589497);
$point1742->setLongitude(29.221310019493103);
$em->persist($point1742);


$waySet1742 = new WaySet();
$waySet1742->setPoint($point1742);
$waySet1742->setWay($way);
$em->persist($waySet1742);


$point1743 = new Point();
$point1743->setLatitude(47.44370100332923);
$point1743->setLongitude(29.21682000160217);
$em->persist($point1743);


$waySet1743 = new WaySet();
$waySet1743->setPoint($point1743);
$waySet1743->setWay($way);
$em->persist($waySet1743);


$point1744 = new Point();
$point1744->setLatitude(47.44296450751586);
$point1744->setLongitude(29.21583294868469);
$em->persist($point1744);


$waySet1744 = new WaySet();
$waySet1744->setPoint($point1744);
$waySet1744->setWay($way);
$em->persist($waySet1744);


$point1745 = new Point();
$point1745->setLatitude(47.44097628013795);
$point1745->setLongitude(29.213156104087833);
$em->persist($point1745);


$waySet1745 = new WaySet();
$waySet1745->setPoint($point1745);
$waySet1745->setWay($way);
$em->persist($waySet1745);


$point1746 = new Point();
$point1746->setLatitude(47.43820061807967);
$point1746->setLongitude(29.209379553794864);
$em->persist($point1746);


$waySet1746 = new WaySet();
$waySet1746->setPoint($point1746);
$waySet1746->setWay($way);
$em->persist($waySet1746);


$point1747 = new Point();
$point1747->setLatitude(47.43623035340805);
$point1747->setLongitude(29.206627607345578);
$em->persist($point1747);


$waySet1747 = new WaySet();
$waySet1747->setPoint($point1747);
$waySet1747->setWay($way);
$em->persist($waySet1747);


$point1748 = new Point();
$point1748->setLatitude(47.433955204632454);
$point1748->setLongitude(29.203982949256897);
$em->persist($point1748);


$waySet1748 = new WaySet();
$waySet1748->setPoint($point1748);
$waySet1748->setWay($way);
$em->persist($waySet1748);


$point1749 = new Point();
$point1749->setLatitude(47.433610476539684);
$point1749->setLongitude(29.2029744386673);
$em->persist($point1749);


$waySet1749 = new WaySet();
$waySet1749->setPoint($point1749);
$waySet1749->setWay($way);
$em->persist($waySet1749);


$point1750 = new Point();
$point1750->setLatitude(47.43123360559737);
$point1750->setLongitude(29.19988453388214);
$em->persist($point1750);


$waySet1750 = new WaySet();
$waySet1750->setPoint($point1750);
$waySet1750->setWay($way);
$em->persist($waySet1750);


$point1751 = new Point();
$point1751->setLatitude(47.42966952966891);
$point1751->setLongitude(29.197685122489926);
$em->persist($point1751);


$waySet1751 = new WaySet();
$waySet1751->setPoint($point1751);
$waySet1751->setWay($way);
$em->persist($waySet1751);


$point1752 = new Point();
$point1752->setLatitude(47.42836670240327);
$point1752->setLongitude(29.19594705104828);
$em->persist($point1752);


$waySet1752 = new WaySet();
$waySet1752->setPoint($point1752);
$waySet1752->setWay($way);
$em->persist($waySet1752);


$point1753 = new Point();
$point1753->setLatitude(47.42669729442661);
$point1753->setLongitude(29.193667173385617);
$em->persist($point1753);


$waySet1753 = new WaySet();
$waySet1753->setPoint($point1753);
$waySet1753->setWay($way);
$em->persist($waySet1753);


$point1754 = new Point();
$point1754->setLatitude(47.42620734942725);
$point1754->setLongitude(29.192975163459778);
$em->persist($point1754);


$waySet1754 = new WaySet();
$waySet1754->setPoint($point1754);
$waySet1754->setWay($way);
$em->persist($waySet1754);


$point1755 = new Point();
$point1755->setLatitude(47.42505323873903);
$point1755->setLongitude(29.190974235534668);
$em->persist($point1755);


$waySet1755 = new WaySet();
$waySet1755->setPoint($point1755);
$waySet1755->setWay($way);
$em->persist($waySet1755);


$point1756 = new Point();
$point1756->setLatitude(47.425572228751804);
$point1756->setLongitude(29.19033050537109);
$em->persist($point1756);


$waySet1756 = new WaySet();
$waySet1756->setPoint($point1756);
$waySet1756->setWay($way);
$em->persist($waySet1756);


$point1757 = new Point();
$point1757->setLatitude(47.42605855041352);
$point1757->setLongitude(29.189509749412537);
$em->persist($point1757);


$waySet1757 = new WaySet();
$waySet1757->setPoint($point1757);
$waySet1757->setWay($way);
$em->persist($waySet1757);


$point1758 = new Point();
$point1758->setLatitude(47.42649768775517);
$point1758->setLongitude(29.18917179107666);
$em->persist($point1758);


$waySet1758 = new WaySet();
$waySet1758->setPoint($point1758);
$waySet1758->setWay($way);
$em->persist($waySet1758);


$point1759 = new Point();
$point1759->setLatitude(47.428040083269735);
$point1759->setLongitude(29.18836712837219);
$em->persist($point1759);


$waySet1759 = new WaySet();
$waySet1759->setPoint($point1759);
$waySet1759->setWay($way);
$em->persist($waySet1759);


$point1760 = new Point();
$point1760->setLatitude(47.42884211107548);
$point1760->setLongitude(29.188039898872375);
$em->persist($point1760);


$waySet1760 = new WaySet();
$waySet1760->setPoint($point1760);
$waySet1760->setWay($way);
$em->persist($waySet1760);


$point1761 = new Point();
$point1761->setLatitude(47.42942275706367);
$point1761->setLongitude(29.187181591987613);
$em->persist($point1761);


$waySet1761 = new WaySet();
$waySet1761->setPoint($point1761);
$waySet1761->setWay($way);
$em->persist($waySet1761);


$point1762 = new Point();
$point1762->setLatitude(47.43031911673052);
$point1762->setLongitude(29.18591558933258);
$em->persist($point1762);


$waySet1762 = new WaySet();
$waySet1762->setPoint($point1762);
$waySet1762->setWay($way);
$em->persist($waySet1762);


$point1763 = new Point();
$point1763->setLatitude(47.43117554328461);
$point1763->setLongitude(29.185175299644467);
$em->persist($point1763);


$waySet1763 = new WaySet();
$waySet1763->setPoint($point1763);
$waySet1763->setWay($way);
$em->persist($waySet1763);


$point1764 = new Point();
$point1764->setLatitude(47.43236217907851);
$point1764->setLongitude(29.18547034263611);
$em->persist($point1764);


$waySet1764 = new WaySet();
$waySet1764->setPoint($point1764);
$waySet1764->setWay($way);
$em->persist($waySet1764);


$point1765 = new Point();
$point1765->setLatitude(47.433142368461695);
$point1765->setLongitude(29.185384511947632);
$em->persist($point1765);


$waySet1765 = new WaySet();
$waySet1765->setPoint($point1765);
$waySet1765->setWay($way);
$em->persist($waySet1765);


$point1766 = new Point();
$point1766->setLatitude(47.43512000600758);
$point1766->setLongitude(29.184005856513973);
$em->persist($point1766);


$waySet1766 = new WaySet();
$waySet1766->setPoint($point1766);
$waySet1766->setWay($way);
$em->persist($waySet1766);


$point1767 = new Point();
$point1767->setLatitude(47.436001754387966);
$point1767->setLongitude(29.18338358402252);
$em->persist($point1767);


$waySet1767 = new WaySet();
$waySet1767->setPoint($point1767);
$waySet1767->setWay($way);
$em->persist($waySet1767);


$point1768 = new Point();
$point1768->setLatitude(47.43752210063753);
$point1768->setLongitude(29.185969233512875);
$em->persist($point1768);


$waySet1768 = new WaySet();
$waySet1768->setPoint($point1768);
$waySet1768->setWay($way);
$em->persist($waySet1768);


$point1769 = new Point();
$point1769->setLatitude(47.43889364023126);
$point1769->setLongitude(29.188286662101742);
$em->persist($point1769);


$waySet1769 = new WaySet();
$waySet1769->setPoint($point1769);
$waySet1769->setWay($way);
$em->persist($waySet1769);


$point1770 = new Point();
$point1770->setLatitude(47.43889364023126);
$point1770->setLongitude(29.188286662101742);
$em->persist($point1770);


$waySet1770 = new WaySet();
$waySet1770->setPoint($point1770);
$waySet1770->setWay($way);
$em->persist($waySet1770);


$point1771 = new Point();
$point1771->setLatitude(47.443222100820144);
$point1771->setLongitude(29.185690283775326);
$em->persist($point1771);


$waySet1771 = new WaySet();
$waySet1771->setPoint($point1771);
$waySet1771->setWay($way);
$em->persist($waySet1771);


$point1772 = new Point();
$point1772->setLatitude(47.44802544066476);
$point1772->setLongitude(29.18280959129333);
$em->persist($point1772);


$waySet1772 = new WaySet();
$waySet1772->setPoint($point1772);
$waySet1772->setWay($way);
$em->persist($waySet1772);


$point1773 = new Point();
$point1773->setLatitude(47.44907384549932);
$point1773->setLongitude(29.18218195438385);
$em->persist($point1773);


$waySet1773 = new WaySet();
$waySet1773->setPoint($point1773);
$waySet1773->setWay($way);
$em->persist($waySet1773);


$point1774 = new Point();
$point1774->setLatitude(47.45049224230675);
$point1774->setLongitude(29.183608889579773);
$em->persist($point1774);


$waySet1774 = new WaySet();
$waySet1774->setPoint($point1774);
$waySet1774->setWay($way);
$em->persist($waySet1774);


$point1775 = new Point();
$point1775->setLatitude(47.45196864029522);
$point1775->setLongitude(29.18508410453796);
$em->persist($point1775);


$waySet1775 = new WaySet();
$waySet1775->setPoint($point1775);
$waySet1775->setWay($way);
$em->persist($waySet1775);


$point1776 = new Point();
$point1776->setLatitude(47.45287187071809);
$point1776->setLongitude(29.186140894889828);
$em->persist($point1776);


$waySet1776 = new WaySet();
$waySet1776->setPoint($point1776);
$waySet1776->setWay($way);
$em->persist($waySet1776);


$point1777 = new Point();
$point1777->setLatitude(47.454576721208);
$point1777->setLongitude(29.18787360191345);
$em->persist($point1777);


$waySet1777 = new WaySet();
$waySet1777->setPoint($point1777);
$waySet1777->setWay($way);
$em->persist($waySet1777);


$point1778 = new Point();
$point1778->setLatitude(47.45709036801775);
$point1778->setLongitude(29.19042706489563);
$em->persist($point1778);


$waySet1778 = new WaySet();
$waySet1778->setPoint($point1778);
$waySet1778->setWay($way);
$em->persist($waySet1778);


$point1779 = new Point();
$point1779->setLatitude(47.45801889979426);
$point1779->setLongitude(29.191408753395077);
$em->persist($point1779);


$waySet1779 = new WaySet();
$waySet1779->setPoint($point1779);
$waySet1779->setWay($way);
$em->persist($waySet1779);


$point1780 = new Point();
$point1780->setLatitude(47.45954949060109);
$point1780->setLongitude(29.193028807640076);
$em->persist($point1780);


$waySet1780 = new WaySet();
$waySet1780->setPoint($point1780);
$waySet1780->setWay($way);
$em->persist($waySet1780);


$point1781 = new Point();
$point1781->setLatitude(47.46038730698259);
$point1781->setLongitude(29.191746711730957);
$em->persist($point1781);


$waySet1781 = new WaySet();
$waySet1781->setPoint($point1781);
$waySet1781->setWay($way);
$em->persist($waySet1781);


$point1782 = new Point();
$point1782->setLatitude(47.46188156106736);
$point1782->setLongitude(29.189541935920715);
$em->persist($point1782);


$waySet1782 = new WaySet();
$waySet1782->setPoint($point1782);
$waySet1782->setWay($way);
$em->persist($waySet1782);


$point1783 = new Point();
$point1783->setLatitude(47.463089264522814);
$point1783->setLongitude(29.188930392265316);
$em->persist($point1783);


$waySet1783 = new WaySet();
$waySet1783->setPoint($point1783);
$waySet1783->setWay($way);
$em->persist($waySet1783);


$point1784 = new Point();
$point1784->setLatitude(47.4642280345583);
$point1784->setLongitude(29.189386367797848);
$em->persist($point1784);


$waySet1784 = new WaySet();
$waySet1784->setPoint($point1784);
$waySet1784->setWay($way);
$em->persist($waySet1784);


$point1785 = new Point();
$point1785->setLatitude(47.46610296204925);
$point1785->setLongitude(29.19013738632202);
$em->persist($point1785);


$waySet1785 = new WaySet();
$waySet1785->setPoint($point1785);
$waySet1785->setWay($way);
$em->persist($waySet1785);


$point1786 = new Point();
$point1786->setLatitude(47.467103863078286);
$point1786->setLongitude(29.19055581092835);
$em->persist($point1786);


$waySet1786 = new WaySet();
$waySet1786->setPoint($point1786);
$waySet1786->setWay($way);
$em->persist($waySet1786);


$point1787 = new Point();
$point1787->setLatitude(47.466121094483775);
$point1787->setLongitude(29.18765902519226);
$em->persist($point1787);


$waySet1787 = new WaySet();
$waySet1787->setPoint($point1787);
$waySet1787->setWay($way);
$em->persist($waySet1787);


$point1788 = new Point();
$point1788->setLatitude(47.465406671831694);
$point1788->setLongitude(29.185604453086853);
$em->persist($point1788);


$waySet1788 = new WaySet();
$waySet1788->setPoint($point1788);
$waySet1788->setWay($way);
$em->persist($waySet1788);


$point1789 = new Point();
$point1789->setLatitude(47.46278099450612);
$point1789->setLongitude(29.181216359138485);
$em->persist($point1789);


$waySet1789 = new WaySet();
$waySet1789->setPoint($point1789);
$waySet1789->setWay($way);
$em->persist($waySet1789);


$point1790 = new Point();
$point1790->setLatitude(47.461170707624255);
$point1790->setLongitude(29.178265929222103);
$em->persist($point1790);


$waySet1790 = new WaySet();
$waySet1790->setPoint($point1790);
$waySet1790->setWay($way);
$em->persist($waySet1790);


$point1791 = new Point();
$point1791->setLatitude(47.459302858127074);
$point1791->setLongitude(29.17476296424866);
$em->persist($point1791);


$waySet1791 = new WaySet();
$waySet1791->setPoint($point1791);
$waySet1791->setWay($way);
$em->persist($waySet1791);


$point1792 = new Point();
$point1792->setLatitude(47.45759453379031);
$point1792->setLongitude(29.171496033668518);
$em->persist($point1792);


$waySet1792 = new WaySet();
$waySet1792->setPoint($point1792);
$waySet1792->setWay($way);
$em->persist($waySet1792);


$point1793 = new Point();
$point1793->setLatitude(47.45587527237008);
$point1793->setLongitude(29.16840612888336);
$em->persist($point1793);


$waySet1793 = new WaySet();
$waySet1793->setPoint($point1793);
$waySet1793->setWay($way);
$em->persist($waySet1793);


$point1794 = new Point();
$point1794->setLatitude(47.45570116681322);
$point1794->setLongitude(29.168057441711426);
$em->persist($point1794);


$waySet1794 = new WaySet();
$waySet1794->setPoint($point1794);
$waySet1794->setWay($way);
$em->persist($waySet1794);


$point1795 = new Point();
$point1795->setLatitude(47.454301047002524);
$point1795->setLongitude(29.165149927139282);
$em->persist($point1795);


$waySet1795 = new WaySet();
$waySet1795->setPoint($point1795);
$waySet1795->setWay($way);
$em->persist($waySet1795);


$point1796 = new Point();
$point1796->setLatitude(47.452679618152565);
$point1796->setLongitude(29.162220954895016);
$em->persist($point1796);


$waySet1796 = new WaySet();
$waySet1796->setPoint($point1796);
$waySet1796->setWay($way);
$em->persist($waySet1796);


$point1797 = new Point();
$point1797->setLatitude(47.453778712965736);
$point1797->setLongitude(29.161448478698734);
$em->persist($point1797);


$waySet1797 = new WaySet();
$waySet1797->setPoint($point1797);
$waySet1797->setWay($way);
$em->persist($waySet1797);


$point1798 = new Point();
$point1798->setLatitude(47.45545088906531);
$point1798->setLongitude(29.160295128822327);
$em->persist($point1798);


$waySet1798 = new WaySet();
$waySet1798->setPoint($point1798);
$waySet1798->setWay($way);
$em->persist($waySet1798);


$point1799 = new Point();
$point1799->setLatitude(47.456956164803216);
$point1799->setLongitude(29.15920615196228);
$em->persist($point1799);


$waySet1799 = new WaySet();
$waySet1799->setPoint($point1799);
$waySet1799->setWay($way);
$em->persist($waySet1799);


$point1800 = new Point();
$point1800->setLatitude(47.45923394590548);
$point1800->setLongitude(29.157570004463192);
$em->persist($point1800);


$waySet1800 = new WaySet();
$waySet1800->setPoint($point1800);
$waySet1800->setWay($way);
$em->persist($waySet1800);


$point1801 = new Point();
$point1801->setLatitude(47.46077538190766);
$point1801->setLongitude(29.16049361228943);
$em->persist($point1801);


$waySet1801 = new WaySet();
$waySet1801->setPoint($point1801);
$waySet1801->setWay($way);
$em->persist($waySet1801);


$point1802 = new Point();
$point1802->setLatitude(47.46166758068496);
$point1802->setLongitude(29.162194132804874);
$em->persist($point1802);


$waySet1802 = new WaySet();
$waySet1802->setPoint($point1802);
$waySet1802->setWay($way);
$em->persist($waySet1802);


$point1803 = new Point();
$point1803->setLatitude(47.46269032651012);
$point1803->setLongitude(29.16418969631195);
$em->persist($point1803);


$waySet1803 = new WaySet();
$waySet1803->setPoint($point1803);
$waySet1803->setWay($way);
$em->persist($waySet1803);


$point1804 = new Point();
$point1804->setLatitude(47.46373118569737);
$point1804->setLongitude(29.166212081909183);
$em->persist($point1804);


$waySet1804 = new WaySet();
$waySet1804->setPoint($point1804);
$waySet1804->setWay($way);
$em->persist($waySet1804);


$point1805 = new Point();
$point1805->setLatitude(47.46530512873769);
$point1805->setLongitude(29.168958663940426);
$em->persist($point1805);


$waySet1805 = new WaySet();
$waySet1805->setPoint($point1805);
$waySet1805->setWay($way);
$em->persist($waySet1805);


$point1806 = new Point();
$point1806->setLatitude(47.46652363291951);
$point1806->setLongitude(29.171099066734314);
$em->persist($point1806);


$waySet1806 = new WaySet();
$waySet1806->setPoint($point1806);
$waySet1806->setWay($way);
$em->persist($waySet1806);


$point1807 = new Point();
$point1807->setLatitude(47.46795606451178);
$point1807->setLongitude(29.17377591133118);
$em->persist($point1807);


$waySet1807 = new WaySet();
$waySet1807->setPoint($point1807);
$waySet1807->setWay($way);
$em->persist($waySet1807);


$point1808 = new Point();
$point1808->setLatitude(47.46967130465286);
$point1808->setLongitude(29.17697310447693);
$em->persist($point1808);


$waySet1808 = new WaySet();
$waySet1808->setPoint($point1808);
$waySet1808->setWay($way);
$em->persist($waySet1808);


$point1809 = new Point();
$point1809->setLatitude(47.47128495727629);
$point1809->setLongitude(29.179998636245724);
$em->persist($point1809);


$waySet1809 = new WaySet();
$waySet1809->setPoint($point1809);
$waySet1809->setWay($way);
$em->persist($waySet1809);


$point1810 = new Point();
$point1810->setLatitude(47.47272451117107);
$point1810->setLongitude(29.18273985385895);
$em->persist($point1810);


$waySet1810 = new WaySet();
$waySet1810->setPoint($point1810);
$waySet1810->setWay($way);
$em->persist($waySet1810);


$point1811 = new Point();
$point1811->setLatitude(47.474189407146724);
$point1811->setLongitude(29.185582995414734);
$em->persist($point1811);


$waySet1811 = new WaySet();
$waySet1811->setPoint($point1811);
$waySet1811->setWay($way);
$em->persist($waySet1811);


$point1812 = new Point();
$point1812->setLatitude(47.47522641277979);
$point1812->setLongitude(29.187541007995602);
$em->persist($point1812);


$waySet1812 = new WaySet();
$waySet1812->setPoint($point1812);
$waySet1812->setWay($way);
$em->persist($waySet1812);


$point1813 = new Point();
$point1813->setLatitude(47.47664047839035);
$point1813->setLongitude(29.1852879524231);
$em->persist($point1813);


$waySet1813 = new WaySet();
$waySet1813->setPoint($point1813);
$waySet1813->setWay($way);
$em->persist($waySet1813);


$point1814 = new Point();
$point1814->setLatitude(47.47791310490395);
$point1814->setLongitude(29.183619618415833);
$em->persist($point1814);


$waySet1814 = new WaySet();
$waySet1814->setPoint($point1814);
$waySet1814->setWay($way);
$em->persist($waySet1814);


$point1815 = new Point();
$point1815->setLatitude(47.47906968175121);
$point1815->setLongitude(29.183630347251892);
$em->persist($point1815);


$waySet1815 = new WaySet();
$waySet1815->setPoint($point1815);
$waySet1815->setWay($way);
$em->persist($waySet1815);


$point1816 = new Point();
$point1816->setLatitude(47.481208737984936);
$point1816->setLongitude(29.184874892234806);
$em->persist($point1816);


$waySet1816 = new WaySet();
$waySet1816->setPoint($point1816);
$waySet1816->setWay($way);
$em->persist($waySet1816);


$point1817 = new Point();
$point1817->setLatitude(47.48207521225079);
$point1817->setLongitude(29.18621063232422);
$em->persist($point1817);


$waySet1817 = new WaySet();
$waySet1817->setPoint($point1817);
$waySet1817->setWay($way);
$em->persist($waySet1817);


$point1818 = new Point();
$point1818->setLatitude(47.48282203634327);
$point1818->setLongitude(29.186865091323853);
$em->persist($point1818);


$waySet1818 = new WaySet();
$waySet1818->setPoint($point1818);
$waySet1818->setWay($way);
$em->persist($waySet1818);


$point1819 = new Point();
$point1819->setLatitude(47.48335133242671);
$point1819->setLongitude(29.188495874404907);
$em->persist($point1819);


$waySet1819 = new WaySet();
$waySet1819->setPoint($point1819);
$waySet1819->setWay($way);
$em->persist($waySet1819);


$point1820 = new Point();
$point1820->setLatitude(47.483681233452074);
$point1820->setLongitude(29.190056920051575);
$em->persist($point1820);


$waySet1820 = new WaySet();
$waySet1820->setPoint($point1820);
$waySet1820->setWay($way);
$em->persist($waySet1820);


$point1821 = new Point();
$point1821->setLatitude(47.485178450529176);
$point1821->setLongitude(29.190829396247864);
$em->persist($point1821);


$waySet1821 = new WaySet();
$waySet1821->setPoint($point1821);
$waySet1821->setWay($way);
$em->persist($waySet1821);


$point1822 = new Point();
$point1822->setLatitude(47.48603760909729);
$point1822->setLongitude(29.191762804985043);
$em->persist($point1822);


$waySet1822 = new WaySet();
$waySet1822->setPoint($point1822);
$waySet1822->setWay($way);
$em->persist($waySet1822);


$point1823 = new Point();
$point1823->setLatitude(47.48685325296259);
$point1823->setLongitude(29.192320704460144);
$em->persist($point1823);


$waySet1823 = new WaySet();
$waySet1823->setPoint($point1823);
$waySet1823->setWay($way);
$em->persist($waySet1823);


$point1824 = new Point();
$point1824->setLatitude(47.48737163336977);
$point1824->setLongitude(29.192283153533936);
$em->persist($point1824);


$waySet1824 = new WaySet();
$waySet1824->setPoint($point1824);
$waySet1824->setWay($way);
$em->persist($waySet1824);


$point1825 = new Point();
$point1825->setLatitude(47.48787550872241);
$point1825->setLongitude(29.192014932632443);
$em->persist($point1825);


$waySet1825 = new WaySet();
$waySet1825->setPoint($point1825);
$waySet1825->setWay($way);
$em->persist($waySet1825);


$point1826 = new Point();
$point1826->setLatitude(47.488245255906214);
$point1826->setLongitude(29.19143557548523);
$em->persist($point1826);


$waySet1826 = new WaySet();
$waySet1826->setPoint($point1826);
$waySet1826->setWay($way);
$em->persist($waySet1826);


$point1827 = new Point();
$point1827->setLatitude(47.4889811175565);
$point1827->setLongitude(29.190958142280582);
$em->persist($point1827);


$waySet1827 = new WaySet();
$waySet1827->setPoint($point1827);
$waySet1827->setWay($way);
$em->persist($waySet1827);


$point1828 = new Point();
$point1828->setLatitude(47.489756842320645);
$point1828->setLongitude(29.19057190418243);
$em->persist($point1828);


$waySet1828 = new WaySet();
$waySet1828->setPoint($point1828);
$waySet1828->setWay($way);
$em->persist($waySet1828);


$point1829 = new Point();
$point1829->setLatitude(47.49014107557763);
$point1829->setLongitude(29.189386367797848);
$em->persist($point1829);


$waySet1829 = new WaySet();
$waySet1829->setPoint($point1829);
$waySet1829->setWay($way);
$em->persist($waySet1829);


$point1830 = new Point();
$point1830->setLatitude(47.490499932401576);
$point1830->setLongitude(29.187852144241333);
$em->persist($point1830);


$waySet1830 = new WaySet();
$waySet1830->setPoint($point1830);
$waySet1830->setWay($way);
$em->persist($waySet1830);


$point1831 = new Point();
$point1831->setLatitude(47.491148768313145);
$point1831->setLongitude(29.1864413022995);
$em->persist($point1831);


$waySet1831 = new WaySet();
$waySet1831->setPoint($point1831);
$waySet1831->setWay($way);
$em->persist($waySet1831);


$point1832 = new Point();
$point1832->setLatitude(47.49182296920382);
$point1832->setLongitude(29.18479442596436);
$em->persist($point1832);


$waySet1832 = new WaySet();
$waySet1832->setPoint($point1832);
$waySet1832->setWay($way);
$em->persist($waySet1832);


$point1833 = new Point();
$point1833->setLatitude(47.49245004075799);
$point1833->setLongitude(29.18389320373535);
$em->persist($point1833);


$waySet1833 = new WaySet();
$waySet1833->setPoint($point1833);
$waySet1833->setWay($way);
$em->persist($waySet1833);


$point1834 = new Point();
$point1834->setLatitude(47.49315684653924);
$point1834->setLongitude(29.182825684547424);
$em->persist($point1834);


$waySet1834 = new WaySet();
$waySet1834->setPoint($point1834);
$waySet1834->setWay($way);
$em->persist($waySet1834);


$point1835 = new Point();
$point1835->setLatitude(47.49591511040527);
$point1835->setLongitude(29.18238580226898);
$em->persist($point1835);


$waySet1835 = new WaySet();
$waySet1835->setPoint($point1835);
$waySet1835->setWay($way);
$em->persist($waySet1835);


$point1836 = new Point();
$point1836->setLatitude(47.50198568014005);
$point1836->setLongitude(29.18483197689056);
$em->persist($point1836);


$waySet1836 = new WaySet();
$waySet1836->setPoint($point1836);
$waySet1836->setWay($way);
$em->persist($waySet1836);


$point1837 = new Point();
$point1837->setLatitude(47.50523631755957);
$point1837->setLongitude(29.185550808906555);
$em->persist($point1837);


$waySet1837 = new WaySet();
$waySet1837->setPoint($point1837);
$waySet1837->setWay($way);
$em->persist($waySet1837);


$point1838 = new Point();
$point1838->setLatitude(47.51004848586001);
$point1838->setLongitude(29.184998273849487);
$em->persist($point1838);


$waySet1838 = new WaySet();
$waySet1838->setPoint($point1838);
$waySet1838->setWay($way);
$em->persist($waySet1838);


$point1839 = new Point();
$point1839->setLatitude(47.51133841984492);
$point1839->setLongitude(29.18485343456268);
$em->persist($point1839);


$waySet1839 = new WaySet();
$waySet1839->setPoint($point1839);
$waySet1839->setWay($way);
$em->persist($waySet1839);


$point1840 = new Point();
$point1840->setLatitude(47.51339282789456);
$point1840->setLongitude(29.189520478248596);
$em->persist($point1840);


$waySet1840 = new WaySet();
$waySet1840->setPoint($point1840);
$waySet1840->setWay($way);
$em->persist($waySet1840);


$point1841 = new Point();
$point1841->setLatitude(47.51396529411658);
$point1841->setLongitude(29.1896653175354);
$em->persist($point1841);


$waySet1841 = new WaySet();
$waySet1841->setPoint($point1841);
$waySet1841->setWay($way);
$em->persist($waySet1841);


$point1842 = new Point();
$point1842->setLatitude(47.514323988123905);
$point1842->setLongitude(29.189268350601196);
$em->persist($point1842);


$waySet1842 = new WaySet();
$waySet1842->setPoint($point1842);
$waySet1842->setWay($way);
$em->persist($waySet1842);


$point1843 = new Point();
$point1843->setLatitude(47.51573700126849);
$point1843->setLongitude(29.188018441200256);
$em->persist($point1843);


$waySet1843 = new WaySet();
$waySet1843->setPoint($point1843);
$waySet1843->setWay($way);
$em->persist($waySet1843);


$point1844 = new Point();
$point1844->setLatitude(47.518812890618776);
$point1844->setLongitude(29.185051918029785);
$em->persist($point1844);


$waySet1844 = new WaySet();
$waySet1844->setPoint($point1844);
$waySet1844->setWay($way);
$em->persist($waySet1844);


$point1845 = new Point();
$point1845->setLatitude(47.516635512913474);
$point1845->setLongitude(29.17907059192657);
$em->persist($point1845);


$waySet1845 = new WaySet();
$waySet1845->setPoint($point1845);
$waySet1845->setWay($way);
$em->persist($waySet1845);


$point1846 = new Point();
$point1846->setLatitude(47.514063119998085);
$point1846->setLongitude(29.172027111053467);
$em->persist($point1846);


$waySet1846 = new WaySet();
$waySet1846->setPoint($point1846);
$waySet1846->setWay($way);
$em->persist($waySet1846);


$point1847 = new Point();
$point1847->setLatitude(47.511852935229605);
$point1847->setLongitude(29.16598677635193);
$em->persist($point1847);


$waySet1847 = new WaySet();
$waySet1847->setPoint($point1847);
$waySet1847->setWay($way);
$em->persist($waySet1847);


$point1848 = new Point();
$point1848->setLatitude(47.50915348494297);
$point1848->setLongitude(29.15869116783142);
$em->persist($point1848);


$waySet1848 = new WaySet();
$waySet1848->setPoint($point1848);
$waySet1848->setWay($way);
$em->persist($waySet1848);


$point1849 = new Point();
$point1849->setLatitude(47.507356190041605);
$point1849->setLongitude(29.153857827186584);
$em->persist($point1849);


$waySet1849 = new WaySet();
$waySet1849->setPoint($point1849);
$waySet1849->setWay($way);
$em->persist($waySet1849);


$point1850 = new Point();
$point1850->setLatitude(47.506558983083984);
$point1850->setLongitude(29.151535034179684);
$em->persist($point1850);


$waySet1850 = new WaySet();
$waySet1850->setPoint($point1850);
$waySet1850->setWay($way);
$em->persist($waySet1850);


$point1851 = new Point();
$point1851->setLatitude(47.507827261188936);
$point1851->setLongitude(29.150606989860535);
$em->persist($point1851);


$waySet1851 = new WaySet();
$waySet1851->setPoint($point1851);
$waySet1851->setWay($way);
$em->persist($waySet1851);


$point1852 = new Point();
$point1852->setLatitude(47.50982020772383);
$point1852->setLongitude(29.149115681648254);
$em->persist($point1852);


$waySet1852 = new WaySet();
$waySet1852->setPoint($point1852);
$waySet1852->setWay($way);
$em->persist($waySet1852);


$point1853 = new Point();
$point1853->setLatitude(47.51266093160348);
$point1853->setLongitude(29.147002100944515);
$em->persist($point1853);


$waySet1853 = new WaySet();
$waySet1853->setPoint($point1853);
$waySet1853->setWay($way);
$em->persist($waySet1853);


$point1854 = new Point();
$point1854->setLatitude(47.514088482233895);
$point1854->setLongitude(29.145923852920532);
$em->persist($point1854);


$waySet1854 = new WaySet();
$waySet1854->setPoint($point1854);
$waySet1854->setWay($way);
$em->persist($waySet1854);


$point1855 = new Point();
$point1855->setLatitude(47.51818613391832);
$point1855->setLongitude(29.14298951625824);
$em->persist($point1855);


$waySet1855 = new WaySet();
$waySet1855->setPoint($point1855);
$waySet1855->setWay($way);
$em->persist($waySet1855);


$point1856 = new Point();
$point1856->setLatitude(47.52114595379814);
$point1856->setLongitude(29.140865206718445);
$em->persist($point1856);


$waySet1856 = new WaySet();
$waySet1856->setPoint($point1856);
$waySet1856->setWay($way);
$em->persist($waySet1856);


$point1857 = new Point();
$point1857->setLatitude(47.5255256012055);
$point1857->setLongitude(29.137727022171017);
$em->persist($point1857);


$waySet1857 = new WaySet();
$waySet1857->setPoint($point1857);
$waySet1857->setWay($way);
$em->persist($waySet1857);


$point1858 = new Point();
$point1858->setLatitude(47.52952456282538);
$point1858->setLongitude(29.134728312492374);
$em->persist($point1858);


$waySet1858 = new WaySet();
$waySet1858->setPoint($point1858);
$waySet1858->setWay($way);
$em->persist($waySet1858);


$point1859 = new Point();
$point1859->setLatitude(47.53207446610907);
$point1859->setLongitude(29.132947325706482);
$em->persist($point1859);


$waySet1859 = new WaySet();
$waySet1859->setPoint($point1859);
$waySet1859->setWay($way);
$em->persist($waySet1859);


$point1860 = new Point();
$point1860->setLatitude(47.53575422159866);
$point1860->setLongitude(29.13029730319977);
$em->persist($point1860);


$waySet1860 = new WaySet();
$waySet1860->setPoint($point1860);
$waySet1860->setWay($way);
$em->persist($waySet1860);


$point1861 = new Point();
$point1861->setLatitude(47.537604867169954);
$point1861->setLongitude(29.129004478454586);
$em->persist($point1861);


$waySet1861 = new WaySet();
$waySet1861->setPoint($point1861);
$waySet1861->setWay($way);
$em->persist($waySet1861);


$point1862 = new Point();
$point1862->setLatitude(47.53890136664467);
$point1862->setLongitude(29.12801206111908);
$em->persist($point1862);


$waySet1862 = new WaySet();
$waySet1862->setPoint($point1862);
$waySet1862->setWay($way);
$em->persist($waySet1862);


$point1863 = new Point();
$point1863->setLatitude(47.54171878848459);
$point1863->setLongitude(29.12602722644806);
$em->persist($point1863);


$waySet1863 = new WaySet();
$waySet1863->setPoint($point1863);
$waySet1863->setWay($way);
$em->persist($waySet1863);


$point1864 = new Point();
$point1864->setLatitude(47.54257702186383);
$point1864->setLongitude(29.12542104721069);
$em->persist($point1864);


$waySet1864 = new WaySet();
$waySet1864->setPoint($point1864);
$waySet1864->setWay($way);
$em->persist($waySet1864);


$point1865 = new Point();
$point1865->setLatitude(47.54398565294587);
$point1865->setLongitude(29.124364256858822);
$em->persist($point1865);


$waySet1865 = new WaySet();
$waySet1865->setPoint($point1865);
$waySet1865->setWay($way);
$em->persist($waySet1865);


$point1866 = new Point();
$point1866->setLatitude(47.545868596817336);
$point1866->setLongitude(29.123001694679257);
$em->persist($point1866);


$waySet1866 = new WaySet();
$waySet1866->setPoint($point1866);
$waySet1866->setWay($way);
$em->persist($waySet1866);


$point1867 = new Point();
$point1867->setLatitude(47.54725179325982);
$point1867->setLongitude(29.12202000617981);
$em->persist($point1867);


$waySet1867 = new WaySet();
$waySet1867->setPoint($point1867);
$waySet1867->setWay($way);
$em->persist($waySet1867);


$point1868 = new Point();
$point1868->setLatitude(47.550170145579614);
$point1868->setLongitude(29.119858145713806);
$em->persist($point1868);


$waySet1868 = new WaySet();
$waySet1868->setPoint($point1868);
$waySet1868->setWay($way);
$em->persist($waySet1868);


$point1869 = new Point();
$point1869->setLatitude(47.55291817246922);
$point1869->setLongitude(29.117873311042786);
$em->persist($point1869);


$waySet1869 = new WaySet();
$waySet1869->setPoint($point1869);
$waySet1869->setWay($way);
$em->persist($waySet1869);


$point1870 = new Point();
$point1870->setLatitude(47.55449668401906);
$point1870->setLongitude(29.116880893707272);
$em->persist($point1870);


$waySet1870 = new WaySet();
$waySet1870->setPoint($point1870);
$waySet1870->setWay($way);
$em->persist($waySet1870);


$point1871 = new Point();
$point1871->setLatitude(47.555857931025145);
$point1871->setLongitude(29.121059775352474);
$em->persist($point1871);


$waySet1871 = new WaySet();
$waySet1871->setPoint($point1871);
$waySet1871->setWay($way);
$em->persist($waySet1871);


$point1872 = new Point();
$point1872->setLatitude(47.55751599795848);
$point1872->setLongitude(29.125919938087463);
$em->persist($point1872);


$waySet1872 = new WaySet();
$waySet1872->setPoint($point1872);
$waySet1872->setWay($way);
$em->persist($waySet1872);


$point1873 = new Point();
$point1873->setLatitude(47.55950705703684);
$point1873->setLongitude(29.132190942764286);
$em->persist($point1873);


$waySet1873 = new WaySet();
$waySet1873->setPoint($point1873);
$waySet1873->setWay($way);
$em->persist($waySet1873);


$point1874 = new Point();
$point1874->setLatitude(47.56123378700842);
$point1874->setLongitude(29.13748025894165);
$em->persist($point1874);


$waySet1874 = new WaySet();
$waySet1874->setPoint($point1874);
$waySet1874->setWay($way);
$em->persist($waySet1874);


$point1875 = new Point();
$point1875->setLatitude(47.56170799429335);
$point1875->setLongitude(29.138880372047424);
$em->persist($point1875);


$waySet1875 = new WaySet();
$waySet1875->setPoint($point1875);
$waySet1875->setWay($way);
$em->persist($waySet1875);


$point1876 = new Point();
$point1876->setLatitude(47.56245730545153);
$point1876->setLongitude(29.140849113464352);
$em->persist($point1876);


$waySet1876 = new WaySet();
$waySet1876->setPoint($point1876);
$waySet1876->setWay($way);
$em->persist($waySet1876);


$point1877 = new Point();
$point1877->setLatitude(47.56335501678517);
$point1877->setLongitude(29.14347231388092);
$em->persist($point1877);


$waySet1877 = new WaySet();
$waySet1877->setPoint($point1877);
$waySet1877->setWay($way);
$em->persist($waySet1877);


$point1878 = new Point();
$point1878->setLatitude(47.564361303944324);
$point1878->setLongitude(29.146449565887448);
$em->persist($point1878);


$waySet1878 = new WaySet();
$waySet1878->setPoint($point1878);
$waySet1878->setWay($way);
$em->persist($waySet1878);


$point1879 = new Point();
$point1879->setLatitude(47.56620008090436);
$point1879->setLongitude(29.152066111564636);
$em->persist($point1879);


$waySet1879 = new WaySet();
$waySet1879->setPoint($point1879);
$waySet1879->setWay($way);
$em->persist($waySet1879);


$point1880 = new Point();
$point1880->setLatitude(47.567409005388825);
$point1880->setLongitude(29.155676364898678);
$em->persist($point1880);


$waySet1880 = new WaySet();
$waySet1880->setPoint($point1880);
$waySet1880->setWay($way);
$em->persist($waySet1880);


$point1881 = new Point();
$point1881->setLatitude(47.56850570016956);
$point1881->setLongitude(29.158809185028073);
$em->persist($point1881);


$waySet1881 = new WaySet();
$waySet1881->setPoint($point1881);
$waySet1881->setWay($way);
$em->persist($waySet1881);


$point1882 = new Point();
$point1882->setLatitude(47.569761622750995);
$point1882->setLongitude(29.162172675132748);
$em->persist($point1882);


$waySet1882 = new WaySet();
$waySet1882->setPoint($point1882);
$waySet1882->setWay($way);
$em->persist($waySet1882);


$point1883 = new Point();
$point1883->setLatitude(47.57005840697321);
$point1883->setLongitude(29.162955880165097);
$em->persist($point1883);


$waySet1883 = new WaySet();
$waySet1883->setPoint($point1883);
$waySet1883->setWay($way);
$em->persist($waySet1883);


$point1884 = new Point();
$point1884->setLatitude(47.57125638472572);
$point1884->setLongitude(29.16666805744171);
$em->persist($point1884);


$waySet1884 = new WaySet();
$waySet1884->setPoint($point1884);
$waySet1884->setWay($way);
$em->persist($waySet1884);


$point1885 = new Point();
$point1885->setLatitude(47.57014888963327);
$point1885->setLongitude(29.16795551776886);
$em->persist($point1885);


$waySet1885 = new WaySet();
$waySet1885->setPoint($point1885);
$waySet1885->setWay($way);
$em->persist($waySet1885);


$point1886 = new Point();
$point1886->setLatitude(47.56757550178448);
$point1886->setLongitude(29.17099177837372);
$em->persist($point1886);


$waySet1886 = new WaySet();
$waySet1886->setPoint($point1886);
$waySet1886->setWay($way);
$em->persist($waySet1886);


$point1887 = new Point();
$point1887->setLatitude(47.56867943188921);
$point1887->setLongitude(29.1745913028717);
$em->persist($point1887);


$waySet1887 = new WaySet();
$waySet1887->setPoint($point1887);
$waySet1887->setWay($way);
$em->persist($waySet1887);


$point1888 = new Point();
$point1888->setLatitude(47.570087361441445);
$point1888->setLongitude(29.17904376983643);
$em->persist($point1888);


$waySet1888 = new WaySet();
$waySet1888->setPoint($point1888);
$waySet1888->setWay($way);
$em->persist($waySet1888);


$point1889 = new Point();
$point1889->setLatitude(47.571962129184705);
$point1889->setLongitude(29.18465495109558);
$em->persist($point1889);


$waySet1889 = new WaySet();
$waySet1889->setPoint($point1889);
$waySet1889->setWay($way);
$em->persist($waySet1889);


$point1890 = new Point();
$point1890->setLatitude(47.57340616128455);
$point1890->setLongitude(29.18508410453796);
$em->persist($point1890);


$waySet1890 = new WaySet();
$waySet1890->setPoint($point1890);
$waySet1890->setWay($way);
$em->persist($waySet1890);


$point1891 = new Point();
$point1891->setLatitude(47.57388749646929);
$point1891->setLongitude(29.18541133403778);
$em->persist($point1891);


$waySet1891 = new WaySet();
$waySet1891->setPoint($point1891);
$waySet1891->setWay($way);
$em->persist($waySet1891);


$point1892 = new Point();
$point1892->setLatitude(47.574191495359074);
$point1892->setLongitude(29.1856849193573);
$em->persist($point1892);


$waySet1892 = new WaySet();
$waySet1892->setPoint($point1892);
$waySet1892->setWay($way);
$em->persist($waySet1892);


$point1893 = new Point();
$point1893->setLatitude(47.57496234177548);
$point1893->setLongitude(29.185448884963986);
$em->persist($point1893);


$waySet1893 = new WaySet();
$waySet1893->setPoint($point1893);
$waySet1893->setWay($way);
$em->persist($waySet1893);


$point1894 = new Point();
$point1894->setLatitude(47.57582726861108);
$point1894->setLongitude(29.18513774871826);
$em->persist($point1894);


$waySet1894 = new WaySet();
$waySet1894->setPoint($point1894);
$waySet1894->setWay($way);
$em->persist($waySet1894);


$point1895 = new Point();
$point1895->setLatitude(47.57643886097239);
$point1895->setLongitude(29.185534715652466);
$em->persist($point1895);


$waySet1895 = new WaySet();
$waySet1895->setPoint($point1895);
$waySet1895->setWay($way);
$em->persist($waySet1895);


$point1896 = new Point();
$point1896->setLatitude(47.57703235205558);
$point1896->setLongitude(29.185250401496887);
$em->persist($point1896);


$waySet1896 = new WaySet();
$waySet1896->setPoint($point1896);
$waySet1896->setWay($way);
$em->persist($waySet1896);


$point1897 = new Point();
$point1897->setLatitude(47.578226551531564);
$point1897->setLongitude(29.184912443161007);
$em->persist($point1897);


$waySet1897 = new WaySet();
$waySet1897->setPoint($point1897);
$waySet1897->setWay($way);
$em->persist($waySet1897);


$point1898 = new Point();
$point1898->setLatitude(47.579134848653645);
$point1898->setLongitude(29.186366200447086);
$em->persist($point1898);


$waySet1898 = new WaySet();
$waySet1898->setPoint($point1898);
$waySet1898->setWay($way);
$em->persist($waySet1898);


$point1899 = new Point();
$point1899->setLatitude(47.58022406067932);
$point1899->setLongitude(29.187460541725155);
$em->persist($point1899);


$waySet1899 = new WaySet();
$waySet1899->setPoint($point1899);
$waySet1899->setWay($way);
$em->persist($waySet1899);


$point1900 = new Point();
$point1900->setLatitude(47.581508650390965);
$point1900->setLongitude(29.188576340675354);
$em->persist($point1900);


$waySet1900 = new WaySet();
$waySet1900->setPoint($point1900);
$waySet1900->setWay($way);
$em->persist($waySet1900);


$point1901 = new Point();
$point1901->setLatitude(47.58358925699506);
$point1901->setLongitude(29.1886568069458);
$em->persist($point1901);


$waySet1901 = new WaySet();
$waySet1901->setPoint($point1901);
$waySet1901->setWay($way);
$em->persist($waySet1901);


$point1902 = new Point();
$point1902->setLatitude(47.58492803838941);
$point1902->setLongitude(29.18615698814392);
$em->persist($point1902);


$waySet1902 = new WaySet();
$waySet1902->setPoint($point1902);
$waySet1902->setWay($way);
$em->persist($waySet1902);


$point1903 = new Point();
$point1903->setLatitude(47.585753000144415);
$point1903->setLongitude(29.18596386909485);
$em->persist($point1903);


$waySet1903 = new WaySet();
$waySet1903->setPoint($point1903);
$waySet1903->setWay($way);
$em->persist($waySet1903);


$point1904 = new Point();
$point1904->setLatitude(47.58599542064462);
$point1904->setLongitude(29.186253547668453);
$em->persist($point1904);


$waySet1904 = new WaySet();
$waySet1904->setPoint($point1904);
$waySet1904->setWay($way);
$em->persist($waySet1904);


$point1905 = new Point();
$point1905->setLatitude(47.588958649151685);
$point1905->setLongitude(29.19068992137909);
$em->persist($point1905);


$waySet1905 = new WaySet();
$waySet1905->setPoint($point1905);
$waySet1905->setWay($way);
$em->persist($waySet1905);


$point1906 = new Point();
$point1906->setLatitude(47.591270502140986);
$point1906->setLongitude(29.191805720329285);
$em->persist($point1906);


$waySet1906 = new WaySet();
$waySet1906->setPoint($point1906);
$waySet1906->setWay($way);
$em->persist($waySet1906);


$point1907 = new Point();
$point1907->setLatitude(47.59193618109176);
$point1907->setLongitude(29.192127585411072);
$em->persist($point1907);


$waySet1907 = new WaySet();
$waySet1907->setPoint($point1907);
$waySet1907->setWay($way);
$em->persist($waySet1907);


$point1908 = new Point();
$point1908->setLatitude(47.59285871129115);
$point1908->setLongitude(29.19565737247467);
$em->persist($point1908);


$waySet1908 = new WaySet();
$waySet1908->setPoint($point1908);
$waySet1908->setWay($way);
$em->persist($waySet1908);


$point1909 = new Point();
$point1909->setLatitude(47.59382825491448);
$point1909->setLongitude(29.19941246509552);
$em->persist($point1909);


$waySet1909 = new WaySet();
$waySet1909->setPoint($point1909);
$waySet1909->setWay($way);
$em->persist($waySet1909);


$point1910 = new Point();
$point1910->setLatitude(47.59546703221132);
$point1910->setLongitude(29.201043248176575);
$em->persist($point1910);


$waySet1910 = new WaySet();
$waySet1910->setPoint($point1910);
$waySet1910->setWay($way);
$em->persist($waySet1910);


$point1911 = new Point();
$point1911->setLatitude(47.59693212077863);
$point1911->setLongitude(29.202507734298703);
$em->persist($point1911);


$waySet1911 = new WaySet();
$waySet1911->setPoint($point1911);
$waySet1911->setWay($way);
$em->persist($waySet1911);


$point1912 = new Point();
$point1912->setLatitude(47.59798478871885);
$point1912->setLongitude(29.203543066978455);
$em->persist($point1912);


$waySet1912 = new WaySet();
$waySet1912->setPoint($point1912);
$waySet1912->setWay($way);
$em->persist($waySet1912);


$point1913 = new Point();
$point1913->setLatitude(47.599507683204166);
$point1913->setLongitude(29.20257747173309);
$em->persist($point1913);


$waySet1913 = new WaySet();
$waySet1913->setPoint($point1913);
$waySet1913->setWay($way);
$em->persist($waySet1913);


$point1914 = new Point();
$point1914->setLatitude(47.602430358896314);
$point1914->setLongitude(29.200710654258728);
$em->persist($point1914);


$waySet1914 = new WaySet();
$waySet1914->setPoint($point1914);
$waySet1914->setWay($way);
$em->persist($waySet1914);


$point1915 = new Point();
$point1915->setLatitude(47.60351908619368);
$point1915->setLongitude(29.202706217765808);
$em->persist($point1915);


$waySet1915 = new WaySet();
$waySet1915->setPoint($point1915);
$waySet1915->setWay($way);
$em->persist($waySet1915);


$point1916 = new Point();
$point1916->setLatitude(47.60515032621336);
$point1916->setLongitude(29.2056941986084);
$em->persist($point1916);


$waySet1916 = new WaySet();
$waySet1916->setPoint($point1916);
$waySet1916->setWay($way);
$em->persist($waySet1916);


$point1917 = new Point();
$point1917->setLatitude(47.60781951833962);
$point1917->setLongitude(29.20941174030304);
$em->persist($point1917);


$waySet1917 = new WaySet();
$waySet1917->setPoint($point1917);
$waySet1917->setWay($way);
$em->persist($waySet1917);


$point1918 = new Point();
$point1918->setLatitude(47.6088394175748);
$point1918->setLongitude(29.210844039916992);
$em->persist($point1918);


$waySet1918 = new WaySet();
$waySet1918->setPoint($point1918);
$waySet1918->setWay($way);
$em->persist($waySet1918);


$point1919 = new Point();
$point1919->setLatitude(47.610242650683);
$point1919->setLongitude(29.213322401046753);
$em->persist($point1919);


$waySet1919 = new WaySet();
$waySet1919->setPoint($point1919);
$waySet1919->setWay($way);
$em->persist($waySet1919);


$point1920 = new Point();
$point1920->setLatitude(47.61145055830798);
$point1920->setLongitude(29.21584367752075);
$em->persist($point1920);


$waySet1920 = new WaySet();
$waySet1920->setPoint($point1920);
$waySet1920->setWay($way);
$em->persist($waySet1920);


$point1921 = new Point();
$point1921->setLatitude(47.61228956754412);
$point1921->setLongitude(29.217667579650875);
$em->persist($point1921);


$waySet1921 = new WaySet();
$waySet1921->setPoint($point1921);
$waySet1921->setWay($way);
$em->persist($waySet1921);


$point1922 = new Point();
$point1922->setLatitude(47.61445935659625);
$point1922->setLongitude(29.21635329723358);
$em->persist($point1922);


$waySet1922 = new WaySet();
$waySet1922->setPoint($point1922);
$waySet1922->setWay($way);
$em->persist($waySet1922);


$point1923 = new Point();
$point1923->setLatitude(47.61748967795962);
$point1923->setLongitude(29.214615225791928);
$em->persist($point1923);


$waySet1923 = new WaySet();
$waySet1923->setPoint($point1923);
$waySet1923->setWay($way);
$em->persist($waySet1923);


$point1924 = new Point();
$point1924->setLatitude(47.620259483951315);
$point1924->setLongitude(29.21317756175995);
$em->persist($point1924);


$waySet1924 = new WaySet();
$waySet1924->setPoint($point1924);
$waySet1924->setWay($way);
$em->persist($waySet1924);


$point1925 = new Point();
$point1925->setLatitude(47.62288090145625);
$point1925->setLongitude(29.21185791492462);
$em->persist($point1925);


$waySet1925 = new WaySet();
$waySet1925->setPoint($point1925);
$waySet1925->setWay($way);
$em->persist($waySet1925);


$point1926 = new Point();
$point1926->setLatitude(47.624963478767036);
$point1926->setLongitude(29.21085476875305);
$em->persist($point1926);


$waySet1926 = new WaySet();
$waySet1926->setPoint($point1926);
$waySet1926->setWay($way);
$em->persist($waySet1926);


$point1927 = new Point();
$point1927->setLatitude(47.62670251187422);
$point1927->setLongitude(29.210237860679626);
$em->persist($point1927);


$waySet1927 = new WaySet();
$waySet1927->setPoint($point1927);
$waySet1927->setWay($way);
$em->persist($waySet1927);


$point1928 = new Point();
$point1928->setLatitude(47.627830502413275);
$point1928->setLongitude(29.209572672843933);
$em->persist($point1928);


$waySet1928 = new WaySet();
$waySet1928->setPoint($point1928);
$waySet1928->setWay($way);
$em->persist($waySet1928);


$point1929 = new Point();
$point1929->setLatitude(47.628289645437256);
$point1929->setLongitude(29.209476113319397);
$em->persist($point1929);


$waySet1929 = new WaySet();
$waySet1929->setPoint($point1929);
$waySet1929->setWay($way);
$em->persist($waySet1929);


$point1930 = new Point();
$point1930->setLatitude(47.62858248258216);
$point1930->setLongitude(29.209604859352112);
$em->persist($point1930);


$waySet1930 = new WaySet();
$waySet1930->setPoint($point1930);
$waySet1930->setWay($way);
$em->persist($waySet1930);


$point1931 = new Point();
$point1931->setLatitude(47.62751958437438);
$point1931->setLongitude(29.211235642433167);
$em->persist($point1931);


$waySet1931 = new WaySet();
$waySet1931->setPoint($point1931);
$waySet1931->setWay($way);
$em->persist($waySet1931);


$point1932 = new Point();
$point1932->setLatitude(47.625943273766524);
$point1932->setLongitude(29.213477969169613);
$em->persist($point1932);


$waySet1932 = new WaySet();
$waySet1932->setPoint($point1932);
$waySet1932->setWay($way);
$em->persist($waySet1932);


$point1933 = new Point();
$point1933->setLatitude(47.625809502100076);
$point1933->setLongitude(29.21386420726776);
$em->persist($point1933);


$waySet1933 = new WaySet();
$waySet1933->setPoint($point1933);
$waySet1933->setWay($way);
$em->persist($waySet1933);


$point1934 = new Point();
$point1934->setLatitude(47.6263482021297);
$point1934->setLongitude(29.216428399085995);
$em->persist($point1934);


$waySet1934 = new WaySet();
$waySet1934->setPoint($point1934);
$waySet1934->setWay($way);
$em->persist($waySet1934);


$point1935 = new Point();
$point1935->setLatitude(47.62697728104307);
$point1935->setLongitude(29.219185709953305);
$em->persist($point1935);


$waySet1935 = new WaySet();
$waySet1935->setPoint($point1935);
$waySet1935->setWay($way);
$em->persist($waySet1935);


$point1936 = new Point();
$point1936->setLatitude(47.62909946267238);
$point1936->setLongitude(29.22029614448547);
$em->persist($point1936);


$waySet1936 = new WaySet();
$waySet1936->setPoint($point1936);
$waySet1936->setWay($way);
$em->persist($waySet1936);


$point1937 = new Point();
$point1937->setLatitude(47.63247597608852);
$point1937->setLongitude(29.22201812267303);
$em->persist($point1937);


$waySet1937 = new WaySet();
$waySet1937->setPoint($point1937);
$waySet1937->setWay($way);
$em->persist($waySet1937);


$point1938 = new Point();
$point1938->setLatitude(47.634301516142756);
$point1938->setLongitude(29.223080277442932);
$em->persist($point1938);


$waySet1938 = new WaySet();
$waySet1938->setPoint($point1938);
$waySet1938->setWay($way);
$em->persist($waySet1938);


$point1939 = new Point();
$point1939->setLatitude(47.634955803092794);
$point1939->setLongitude(29.22315001487732);
$em->persist($point1939);


$waySet1939 = new WaySet();
$waySet1939->setPoint($point1939);
$waySet1939->setWay($way);
$em->persist($waySet1939);


$point1940 = new Point();
$point1940->setLatitude(47.63659329198082);
$point1940->setLongitude(29.226073622703552);
$em->persist($point1940);


$waySet1940 = new WaySet();
$waySet1940->setPoint($point1940);
$waySet1940->setWay($way);
$em->persist($waySet1940);


$point1941 = new Point();
$point1941->setLatitude(47.63957534190343);
$point1941->setLongitude(29.23041343688965);
$em->persist($point1941);


$waySet1941 = new WaySet();
$waySet1941->setPoint($point1941);
$waySet1941->setWay($way);
$em->persist($waySet1941);


$point1942 = new Point();
$point1942->setLatitude(47.64166448276055);
$point1942->setLongitude(29.232864975929257);
$em->persist($point1942);


$waySet1942 = new WaySet();
$waySet1942->setPoint($point1942);
$waySet1942->setWay($way);
$em->persist($waySet1942);


$point1943 = new Point();
$point1943->setLatitude(47.64259336458073);
$point1943->setLongitude(29.233970046043396);
$em->persist($point1943);


$waySet1943 = new WaySet();
$waySet1943->setPoint($point1943);
$waySet1943->setWay($way);
$em->persist($waySet1943);


$point1944 = new Point();
$point1944->setLatitude(47.64256445022059);
$point1944->setLongitude(29.230241775512695);
$em->persist($point1944);


$waySet1944 = new WaySet();
$waySet1944->setPoint($point1944);
$waySet1944->setWay($way);
$em->persist($waySet1944);


$point1945 = new Point();
$point1945->setLatitude(47.64253915014236);
$point1945->setLongitude(29.22732353210449);
$em->persist($point1945);


$waySet1945 = new WaySet();
$waySet1945->setPoint($point1945);
$waySet1945->setWay($way);
$em->persist($waySet1945);


$point1946 = new Point();
$point1946->setLatitude(47.64239457803163);
$point1946->setLongitude(29.22067165374756);
$em->persist($point1946);


$waySet1946 = new WaySet();
$waySet1946->setPoint($point1946);
$waySet1946->setWay($way);
$em->persist($waySet1946);


$point1947 = new Point();
$point1947->setLatitude(47.64228976300118);
$point1947->setLongitude(29.21393394470215);
$em->persist($point1947);


$waySet1947 = new WaySet();
$waySet1947->setPoint($point1947);
$waySet1947->setWay($way);
$em->persist($waySet1947);


$point1948 = new Point();
$point1948->setLatitude(47.64229699163073);
$point1948->setLongitude(29.20938491821289);
$em->persist($point1948);


$waySet1948 = new WaySet();
$waySet1948->setPoint($point1948);
$waySet1948->setWay($way);
$em->persist($waySet1948);


$point1949 = new Point();
$point1949->setLatitude(47.64811210001013);
$point1949->setLongitude(29.209438562393185);
$em->persist($point1949);


$waySet1949 = new WaySet();
$waySet1949->setPoint($point1949);
$waySet1949->setWay($way);
$em->persist($waySet1949);


$point1950 = new Point();
$point1950->setLatitude(47.650229809613556);
$point1950->setLongitude(29.20946002006531);
$em->persist($point1950);


$waySet1950 = new WaySet();
$waySet1950->setPoint($point1950);
$waySet1950->setWay($way);
$em->persist($waySet1950);


$point1951 = new Point();
$point1951->setLatitude(47.653507392203956);
$point1951->setLongitude(29.20963704586029);
$em->persist($point1951);


$waySet1951 = new WaySet();
$waySet1951->setPoint($point1951);
$waySet1951->setWay($way);
$em->persist($waySet1951);


$point1952 = new Point();
$point1952->setLatitude(47.655010602729874);
$point1952->setLongitude(29.20970141887665);
$em->persist($point1952);


$waySet1952 = new WaySet();
$waySet1952->setPoint($point1952);
$waySet1952->setWay($way);
$em->persist($waySet1952);


$point1953 = new Point();
$point1953->setLatitude(47.657987988142274);
$point1953->setLongitude(29.2098194360733);
$em->persist($point1953);


$waySet1953 = new WaySet();
$waySet1953->setPoint($point1953);
$waySet1953->setWay($way);
$em->persist($waySet1953);


$point1954 = new Point();
$point1954->setLatitude(47.65807109233834);
$point1954->setLongitude(29.219593405723572);
$em->persist($point1954);


$waySet1954 = new WaySet();
$waySet1954->setPoint($point1954);
$waySet1954->setWay($way);
$em->persist($waySet1954);


$point1955 = new Point();
$point1955->setLatitude(47.66101578607323);
$point1955->setLongitude(29.219555854797363);
$em->persist($point1955);


$waySet1955 = new WaySet();
$waySet1955->setPoint($point1955);
$waySet1955->setWay($way);
$em->persist($waySet1955);


$point1956 = new Point();
$point1956->setLatitude(47.66518504379914);
$point1956->setLongitude(29.219475388526917);
$em->persist($point1956);


$waySet1956 = new WaySet();
$waySet1956->setPoint($point1956);
$waySet1956->setWay($way);
$em->persist($waySet1956);


$point1957 = new Point();
$point1957->setLatitude(47.66912999664753);
$point1957->setLongitude(29.219411015510563);
$em->persist($point1957);


$waySet1957 = new WaySet();
$waySet1957->setPoint($point1957);
$waySet1957->setWay($way);
$em->persist($waySet1957);


$point1958 = new Point();
$point1958->setLatitude(47.67280012458191);
$point1958->setLongitude(29.219341278076172);
$em->persist($point1958);


$waySet1958 = new WaySet();
$waySet1958->setPoint($point1958);
$waySet1958->setWay($way);
$em->persist($waySet1958);


$point1959 = new Point();
$point1959->setLatitude(47.67640497928367);
$point1959->setLongitude(29.21927690505981);
$em->persist($point1959);


$waySet1959 = new WaySet();
$waySet1959->setPoint($point1959);
$waySet1959->setWay($way);
$em->persist($waySet1959);


$point1960 = new Point();
$point1960->setLatitude(47.67898385077396);
$point1960->setLongitude(29.219620227813717);
$em->persist($point1960);


$waySet1960 = new WaySet();
$waySet1960->setPoint($point1960);
$waySet1960->setWay($way);
$em->persist($waySet1960);


$point1961 = new Point();
$point1961->setLatitude(47.68204293499679);
$point1961->setLongitude(29.219555854797363);
$em->persist($point1961);


$waySet1961 = new WaySet();
$waySet1961->setPoint($point1961);
$waySet1961->setWay($way);
$em->persist($waySet1961);


$point1962 = new Point();
$point1962->setLatitude(47.68241492474171);
$point1962->setLongitude(29.219936728477478);
$em->persist($point1962);


$waySet1962 = new WaySet();
$waySet1962->setPoint($point1962);
$waySet1962->setWay($way);
$em->persist($waySet1962);


$point1963 = new Point();
$point1963->setLatitude(47.682465486249825);
$point1963->setLongitude(29.22077894210815);
$em->persist($point1963);


$waySet1963 = new WaySet();
$waySet1963->setPoint($point1963);
$waySet1963->setWay($way);
$em->persist($waySet1963);


$point1964 = new Point();
$point1964->setLatitude(47.682411313203545);
$point1964->setLongitude(29.222972989082333);
$em->persist($point1964);


$waySet1964 = new WaySet();
$waySet1964->setPoint($point1964);
$waySet1964->setWay($way);
$em->persist($waySet1964);


$point1965 = new Point();
$point1965->setLatitude(47.682407701665134);
$point1965->setLongitude(29.226041436195374);
$em->persist($point1965);


$waySet1965 = new WaySet();
$waySet1965->setPoint($point1965);
$waySet1965->setWay($way);
$em->persist($waySet1965);


$point1966 = new Point();
$point1966->setLatitude(47.682501601582786);
$point1966->setLongitude(29.227833151817322);
$em->persist($point1966);


$waySet1966 = new WaySet();
$waySet1966->setPoint($point1966);
$waySet1966->setWay($way);
$em->persist($waySet1966);


$point1967 = new Point();
$point1967->setLatitude(47.683762011039605);
$point1967->setLongitude(29.2310893535614);
$em->persist($point1967);


$waySet1967 = new WaySet();
$waySet1967->setPoint($point1967);
$waySet1967->setWay($way);
$em->persist($waySet1967);


$point1968 = new Point();
$point1968->setLatitude(47.68477320577856);
$point1968->setLongitude(29.230273962020874);
$em->persist($point1968);


$waySet1968 = new WaySet();
$waySet1968->setPoint($point1968);
$waySet1968->setWay($way);
$em->persist($waySet1968);


$point1969 = new Point();
$point1969->setLatitude(47.68828695508574);
$point1969->setLongitude(29.227328896522522);
$em->persist($point1969);


$waySet1969 = new WaySet();
$waySet1969->setPoint($point1969);
$waySet1969->setWay($way);
$em->persist($waySet1969);


$point1970 = new Point();
$point1970->setLatitude(47.68907778688991);
$point1970->setLongitude(29.226674437522888);
$em->persist($point1970);


$waySet1970 = new WaySet();
$waySet1970->setPoint($point1970);
$waySet1970->setWay($way);
$em->persist($waySet1970);


$point1971 = new Point();
$point1971->setLatitude(47.69294149588988);
$point1971->setLongitude(29.223445057868958);
$em->persist($point1971);


$waySet1971 = new WaySet();
$waySet1971->setPoint($point1971);
$waySet1971->setWay($way);
$em->persist($waySet1971);


$point1972 = new Point();
$point1972->setLatitude(47.695255973243015);
$point1972->setLongitude(29.22150313854217);
$em->persist($point1972);


$waySet1972 = new WaySet();
$waySet1972->setPoint($point1972);
$waySet1972->setWay($way);
$em->persist($waySet1972);


$point1973 = new Point();
$point1973->setLatitude(47.69657023290495);
$point1973->setLongitude(29.2204087972641);
$em->persist($point1973);


$waySet1973 = new WaySet();
$waySet1973->setPoint($point1973);
$waySet1973->setWay($way);
$em->persist($waySet1973);


$point1974 = new Point();
$point1974->setLatitude(47.69755229542267);
$point1974->setLongitude(29.222661852836605);
$em->persist($point1974);


$waySet1974 = new WaySet();
$waySet1974->setPoint($point1974);
$waySet1974->setWay($way);
$em->persist($waySet1974);


$point1975 = new Point();
$point1975->setLatitude(47.69944776819676);
$point1975->setLongitude(29.221052527427677);
$em->persist($point1975);


$waySet1975 = new WaySet();
$waySet1975->setPoint($point1975);
$waySet1975->setWay($way);
$em->persist($waySet1975);


$point1976 = new Point();
$point1976->setLatitude(47.70200022931586);
$point1976->setLongitude(29.21887993812561);
$em->persist($point1976);


$waySet1976 = new WaySet();
$waySet1976->setPoint($point1976);
$waySet1976->setWay($way);
$em->persist($waySet1976);


$point1977 = new Point();
$point1977->setLatitude(47.7061553831285);
$point1977->setLongitude(29.215350151062008);
$em->persist($point1977);


$waySet1977 = new WaySet();
$waySet1977->setPoint($point1977);
$waySet1977->setWay($way);
$em->persist($waySet1977);


$point1978 = new Point();
$point1978->setLatitude(47.709292286778);
$point1978->setLongitude(29.212689399719235);
$em->persist($point1978);


$waySet1978 = new WaySet();
$waySet1978->setPoint($point1978);
$waySet1978->setWay($way);
$em->persist($waySet1978);


$point1979 = new Point();
$point1979->setLatitude(47.71221965255217);
$point1979->setLongitude(29.21018958091736);
$em->persist($point1979);


$waySet1979 = new WaySet();
$waySet1979->setPoint($point1979);
$waySet1979->setWay($way);
$em->persist($waySet1979);


$point1980 = new Point();
$point1980->setLatitude(47.71593005990839);
$point1980->setLongitude(29.207035303115845);
$em->persist($point1980);


$waySet1980 = new WaySet();
$waySet1980->setPoint($point1980);
$waySet1980->setWay($way);
$em->persist($waySet1980);


$point1981 = new Point();
$point1981->setLatitude(47.7190735932405);
$point1981->setLongitude(29.204358458518982);
$em->persist($point1981);


$waySet1981 = new WaySet();
$waySet1981->setPoint($point1981);
$waySet1981->setWay($way);
$em->persist($waySet1981);


$point1982 = new Point();
$point1982->setLatitude(47.71957524174611);
$point1982->setLongitude(29.204717874526978);
$em->persist($point1982);


$waySet1982 = new WaySet();
$waySet1982->setPoint($point1982);
$waySet1982->setWay($way);
$em->persist($waySet1982);


$point1983 = new Point();
$point1983->setLatitude(47.72151321973385);
$point1983->setLongitude(29.205860495567322);
$em->persist($point1983);


$waySet1983 = new WaySet();
$waySet1983->setPoint($point1983);
$waySet1983->setWay($way);
$em->persist($waySet1983);


$point1984 = new Point();
$point1984->setLatitude(47.724995624701435);
$point1984->setLongitude(29.207764863967892);
$em->persist($point1984);


$waySet1984 = new WaySet();
$waySet1984->setPoint($point1984);
$waySet1984->setWay($way);
$em->persist($waySet1984);


$point1985 = new Point();
$point1985->setLatitude(47.72773086348944);
$point1985->setLongitude(29.209282994270325);
$em->persist($point1985);


$waySet1985 = new WaySet();
$waySet1985->setPoint($point1985);
$waySet1985->setWay($way);
$em->persist($waySet1985);


$point1986 = new Point();
$point1986->setLatitude(47.730621111450525);
$point1986->setLongitude(29.21087622642517);
$em->persist($point1986);


$waySet1986 = new WaySet();
$waySet1986->setPoint($point1986);
$waySet1986->setWay($way);
$em->persist($waySet1986);


$point1987 = new Point();
$point1987->setLatitude(47.733684382694435);
$point1987->setLongitude(29.212523102760315);
$em->persist($point1987);


$waySet1987 = new WaySet();
$waySet1987->setPoint($point1987);
$waySet1987->setWay($way);
$em->persist($waySet1987);


$point1988 = new Point();
$point1988->setLatitude(47.73619908906425);
$point1988->setLongitude(29.213842749595642);
$em->persist($point1988);


$waySet1988 = new WaySet();
$waySet1988->setPoint($point1988);
$waySet1988->setWay($way);
$em->persist($waySet1988);


$point1989 = new Point();
$point1989->setLatitude(47.73870645871258);
$point1989->setLongitude(29.215237498283383);
$em->persist($point1989);


$waySet1989 = new WaySet();
$waySet1989->setPoint($point1989);
$waySet1989->setWay($way);
$em->persist($waySet1989);


$point1990 = new Point();
$point1990->setLatitude(47.7399005736085);
$point1990->setLongitude(29.218499064445496);
$em->persist($point1990);


$waySet1990 = new WaySet();
$waySet1990->setPoint($point1990);
$waySet1990->setWay($way);
$em->persist($waySet1990);


$point1991 = new Point();
$point1991->setLatitude(47.74156363059276);
$point1991->setLongitude(29.223182201385498);
$em->persist($point1991);


$waySet1991 = new WaySet();
$waySet1991->setPoint($point1991);
$waySet1991->setWay($way);
$em->persist($waySet1991);


$point1992 = new Point();
$point1992->setLatitude(47.74358375850275);
$point1992->setLongitude(29.228578805923462);
$em->persist($point1992);


$waySet1992 = new WaySet();
$waySet1992->setPoint($point1992);
$waySet1992->setWay($way);
$em->persist($waySet1992);


$point1993 = new Point();
$point1993->setLatitude(47.74627473569594);
$point1993->setLongitude(29.235692024230957);
$em->persist($point1993);


$waySet1993 = new WaySet();
$waySet1993->setPoint($point1993);
$waySet1993->setWay($way);
$em->persist($waySet1993);


$point1994 = new Point();
$point1994->setLatitude(47.747475891062464);
$point1994->setLongitude(29.238803386688232);
$em->persist($point1994);


$waySet1994 = new WaySet();
$waySet1994->setPoint($point1994);
$waySet1994->setWay($way);
$em->persist($waySet1994);


$point1995 = new Point();
$point1995->setLatitude(47.74792316105317);
$point1995->setLongitude(29.239919185638428);
$em->persist($point1995);


$waySet1995 = new WaySet();
$waySet1995->setPoint($point1995);
$waySet1995->setWay($way);
$em->persist($waySet1995);


$point1996 = new Point();
$point1996->setLatitude(47.74831632262879);
$point1996->setLongitude(29.240874052047733);
$em->persist($point1996);


$waySet1996 = new WaySet();
$waySet1996->setPoint($point1996);
$waySet1996->setWay($way);
$em->persist($waySet1996);


$point1997 = new Point();
$point1997->setLatitude(47.749055746904574);
$point1997->setLongitude(29.242826700210568);
$em->persist($point1997);


$waySet1997 = new WaySet();
$waySet1997->setPoint($point1997);
$waySet1997->setWay($way);
$em->persist($waySet1997);


$point1998 = new Point();
$point1998->setLatitude(47.7500115724746);
$point1998->setLongitude(29.24532115459442);
$em->persist($point1998);


$waySet1998 = new WaySet();
$waySet1998->setPoint($point1998);
$waySet1998->setWay($way);
$em->persist($waySet1998);


$point1999 = new Point();
$point1999->setLatitude(47.75101426873389);
$point1999->setLongitude(29.247922897338864);
$em->persist($point1999);


$waySet1999 = new WaySet();
$waySet1999->setPoint($point1999);
$waySet1999->setWay($way);
$em->persist($waySet1999);


$point2000 = new Point();
$point2000->setLatitude(47.751331664963125);
$point2000->setLongitude(29.24860417842865);
$em->persist($point2000);


$waySet2000 = new WaySet();
$waySet2000->setPoint($point2000);
$waySet2000->setWay($way);
$em->persist($waySet2000);


$point2001 = new Point();
$point2001->setLatitude(47.75233433578851);
$point2001->setLongitude(29.249264001846313);
$em->persist($point2001);


$waySet2001 = new WaySet();
$waySet2001->setPoint($point2001);
$waySet2001->setWay($way);
$em->persist($waySet2001);


$point2002 = new Point();
$point2002->setLatitude(47.75399338896926);
$point2002->setLongitude(29.250192046165466);
$em->persist($point2002);


$waySet2002 = new WaySet();
$waySet2002->setPoint($point2002);
$waySet2002->setWay($way);
$em->persist($waySet2002);


$point2003 = new Point();
$point2003->setLatitude(47.75507174517288);
$point2003->setLongitude(29.250798225402832);
$em->persist($point2003);


$waySet2003 = new WaySet();
$waySet2003->setPoint($point2003);
$waySet2003->setWay($way);
$em->persist($waySet2003);


$point2004 = new Point();
$point2004->setLatitude(47.75718150789405);
$point2004->setLongitude(29.251978397369385);
$em->persist($point2004);


$waySet2004 = new WaySet();
$waySet2004->setPoint($point2004);
$waySet2004->setWay($way);
$em->persist($waySet2004);


$point2005 = new Point();
$point2005->setLatitude(47.75856633127743);
$point2005->setLongitude(29.252740144729614);
$em->persist($point2005);


$waySet2005 = new WaySet();
$waySet2005->setPoint($point2005);
$waySet2005->setWay($way);
$em->persist($waySet2005);


$point2006 = new Point();
$point2006->setLatitude(47.75998357329436);
$point2006->setLongitude(29.253544807434082);
$em->persist($point2006);


$waySet2006 = new WaySet();
$waySet2006->setPoint($point2006);
$waySet2006->setWay($way);
$em->persist($waySet2006);


$point2007 = new Point();
$point2007->setLatitude(47.761570261551064);
$point2007->setLongitude(29.254435300827026);
$em->persist($point2007);


$waySet2007 = new WaySet();
$waySet2007->setPoint($point2007);
$waySet2007->setWay($way);
$em->persist($waySet2007);


$point2008 = new Point();
$point2008->setLatitude(47.764487477992546);
$point2008->setLongitude(29.256082177162174);
$em->persist($point2008);


$waySet2008 = new WaySet();
$waySet2008->setPoint($point2008);
$waySet2008->setWay($way);
$em->persist($waySet2008);


$point2009 = new Point();
$point2009->setLatitude(47.76628316152525);
$point2009->setLongitude(29.25711214542389);
$em->persist($point2009);


$waySet2009 = new WaySet();
$waySet2009->setPoint($point2009);
$waySet2009->setWay($way);
$em->persist($waySet2009);


$point2010 = new Point();
$point2010->setLatitude(47.768075177464034);
$point2010->setLongitude(29.25813138484955);
$em->persist($point2010);


$waySet2010 = new WaySet();
$waySet2010->setPoint($point2010);
$waySet2010->setWay($way);
$em->persist($waySet2010);


$point2011 = new Point();
$point2011->setLatitude(47.77073243955057);
$point2011->setLongitude(29.259638786315918);
$em->persist($point2011);


$waySet2011 = new WaySet();
$waySet2011->setPoint($point2011);
$waySet2011->setWay($way);
$em->persist($waySet2011);


$point2012 = new Point();
$point2012->setLatitude(47.77366356303351);
$point2012->setLongitude(29.261232018470764);
$em->persist($point2012);


$waySet2012 = new WaySet();
$waySet2012->setPoint($point2012);
$waySet2012->setWay($way);
$em->persist($waySet2012);


$point2013 = new Point();
$point2013->setLatitude(47.77547335013799);
$point2013->setLongitude(29.262219071388245);
$em->persist($point2013);


$waySet2013 = new WaySet();
$waySet2013->setPoint($point2013);
$waySet2013->setWay($way);
$em->persist($waySet2013);


$point2014 = new Point();
$point2014->setLatitude(47.77833931838281);
$point2014->setLongitude(29.263683557510372);
$em->persist($point2014);


$waySet2014 = new WaySet();
$waySet2014->setPoint($point2014);
$waySet2014->setWay($way);
$em->persist($waySet2014);


$point2015 = new Point();
$point2015->setLatitude(47.7793703073151);
$point2015->setLongitude(29.264193177223206);
$em->persist($point2015);


$waySet2015 = new WaySet();
$waySet2015->setPoint($point2015);
$waySet2015->setWay($way);
$em->persist($waySet2015);


$point2016 = new Point();
$point2016->setLatitude(47.78108256893371);
$point2016->setLongitude(29.265148043632507);
$em->persist($point2016);


$waySet2016 = new WaySet();
$waySet2016->setPoint($point2016);
$waySet2016->setWay($way);
$em->persist($waySet2016);


$point2017 = new Point();
$point2017->setLatitude(47.78379683863484);
$point2017->setLongitude(29.266655445098873);
$em->persist($point2017);


$waySet2017 = new WaySet();
$waySet2017->setPoint($point2017);
$waySet2017->setWay($way);
$em->persist($waySet2017);


$point2018 = new Point();
$point2018->setLatitude(47.785267459434955);
$point2018->setLongitude(29.267476201057434);
$em->persist($point2018);


$waySet2018 = new WaySet();
$waySet2018->setPoint($point2018);
$waySet2018->setWay($way);
$em->persist($waySet2018);


$point2019 = new Point();
$point2019->setLatitude(47.78776886100461);
$point2019->setLongitude(29.268849492073056);
$em->persist($point2019);


$waySet2019 = new WaySet();
$waySet2019->setPoint($point2019);
$waySet2019->setWay($way);
$em->persist($waySet2019);


$point2020 = new Point();
$point2020->setLatitude(47.7903386193818);
$point2020->setLongitude(29.27023887634277);
$em->persist($point2020);


$waySet2020 = new WaySet();
$waySet2020->setPoint($point2020);
$waySet2020->setWay($way);
$em->persist($waySet2020);


$point2021 = new Point();
$point2021->setLatitude(47.79293347786623);
$point2021->setLongitude(29.271649718284603);
$em->persist($point2021);


$waySet2021 = new WaySet();
$waySet2021->setPoint($point2021);
$waySet2021->setWay($way);
$em->persist($waySet2021);


$point2022 = new Point();
$point2022->setLatitude(47.796047137020814);
$point2022->setLongitude(29.27333950996399);
$em->persist($point2022);


$waySet2022 = new WaySet();
$waySet2022->setPoint($point2022);
$waySet2022->setWay($way);
$em->persist($waySet2022);


$point2023 = new Point();
$point2023->setLatitude(47.79840748345784);
$point2023->setLongitude(29.274610877037045);
$em->persist($point2023);


$waySet2023 = new WaySet();
$waySet2023->setPoint($point2023);
$waySet2023->setWay($way);
$em->persist($waySet2023);


$point2024 = new Point();
$point2024->setLatitude(47.800616382303254);
$point2024->setLongitude(29.275608658790585);
$em->persist($point2024);


$waySet2024 = new WaySet();
$waySet2024->setPoint($point2024);
$waySet2024->setWay($way);
$em->persist($waySet2024);


$point2025 = new Point();
$point2025->setLatitude(47.80207932070386);
$point2025->setLongitude(29.276381134986877);
$em->persist($point2025);


$waySet2025 = new WaySet();
$waySet2025->setPoint($point2025);
$waySet2025->setWay($way);
$em->persist($waySet2025);


$point2026 = new Point();
$point2026->setLatitude(47.802400008591825);
$point2026->setLongitude(29.275694489479065);
$em->persist($point2026);


$waySet2026 = new WaySet();
$waySet2026->setPoint($point2026);
$waySet2026->setWay($way);
$em->persist($waySet2026);


$point2027 = new Point();
$point2027->setLatitude(47.80370075601701);
$point2027->setLongitude(29.276129007339478);
$em->persist($point2027);


$waySet2027 = new WaySet();
$waySet2027->setPoint($point2027);
$waySet2027->setWay($way);
$em->persist($waySet2027);


$point2028 = new Point();
$point2028->setLatitude(47.80413313021975);
$point2028->setLongitude(29.274911284446716);
$em->persist($point2028);


$waySet2028 = new WaySet();
$waySet2028->setPoint($point2028);
$waySet2028->setWay($way);
$em->persist($waySet2028);


$point2029 = new Point();
$point2029->setLatitude(47.80564280858938);
$point2029->setLongitude(29.268634915351868);
$em->persist($point2029);


$waySet2029 = new WaySet();
$waySet2029->setPoint($point2029);
$waySet2029->setWay($way);
$em->persist($waySet2029);


$point2030 = new Point();
$point2030->setLatitude(47.807797357091);
$point2030->setLongitude(29.259708523750305);
$em->persist($point2030);


$waySet2030 = new WaySet();
$waySet2030->setPoint($point2030);
$waySet2030->setWay($way);
$em->persist($waySet2030);


$point2031 = new Point();
$point2031->setLatitude(47.80932494268226);
$point2031->setLongitude(29.253475069999695);
$em->persist($point2031);


$waySet2031 = new WaySet();
$waySet2031->setPoint($point2031);
$waySet2031->setWay($way);
$em->persist($waySet2031);


$point2032 = new Point();
$point2032->setLatitude(47.81049942369265);
$point2032->setLongitude(29.24896895885467);
$em->persist($point2032);


$waySet2032 = new WaySet();
$waySet2032->setPoint($point2032);
$waySet2032->setWay($way);
$em->persist($waySet2032);


$point2033 = new Point();
$point2033->setLatitude(47.81093534393471);
$point2033->setLongitude(29.24709141254425);
$em->persist($point2033);


$waySet2033 = new WaySet();
$waySet2033->setPoint($point2033);
$waySet2033->setWay($way);
$em->persist($waySet2033);


$point2034 = new Point();
$point2034->setLatitude(47.808334178845904);
$point2034->setLongitude(29.244221448898315);
$em->persist($point2034);


$waySet2034 = new WaySet();
$waySet2034->setPoint($point2034);
$waySet2034->setWay($way);
$em->persist($waySet2034);


$point2035 = new Point();
$point2035->setLatitude(47.80562839659282);
$point2035->setLongitude(29.241335391998287);
$em->persist($point2035);


$waySet2035 = new WaySet();
$waySet2035->setPoint($point2035);
$waySet2035->setWay($way);
$em->persist($waySet2035);


$point2036 = new Point();
$point2036->setLatitude(47.80231353115407);
$point2036->setLongitude(29.237832427024845);
$em->persist($point2036);


$waySet2036 = new WaySet();
$waySet2036->setPoint($point2036);
$waySet2036->setWay($way);
$em->persist($waySet2036);


$point2037 = new Point();
$point2037->setLatitude(47.800695655883125);
$point2037->setLongitude(29.23612117767334);
$em->persist($point2037);


$waySet2037 = new WaySet();
$waySet2037->setPoint($point2037);
$waySet2037->setWay($way);
$em->persist($waySet2037);


$point2038 = new Point();
$point2038->setLatitude(47.79740570066258);
$point2038->setLongitude(29.232704043388363);
$em->persist($point2038);


$waySet2038 = new WaySet();
$waySet2038->setPoint($point2038);
$waySet2038->setWay($way);
$em->persist($waySet2038);


$point2039 = new Point();
$point2039->setLatitude(47.79751020408676);
$point2039->setLongitude(29.23136830329895);
$em->persist($point2039);


$waySet2039 = new WaySet();
$waySet2039->setPoint($point2039);
$waySet2039->setWay($way);
$em->persist($waySet2039);


$point2040 = new Point();
$point2040->setLatitude(47.797780470588364);
$point2040->setLongitude(29.228868484497074);
$em->persist($point2040);


$waySet2040 = new WaySet();
$waySet2040->setPoint($point2040);
$waySet2040->setWay($way);
$em->persist($waySet2040);


$point2041 = new Point();
$point2041->setLatitude(47.79842910445631);
$point2041->setLongitude(29.219303727149963);
$em->persist($point2041);


$waySet2041 = new WaySet();
$waySet2041->setPoint($point2041);
$waySet2041->setWay($way);
$em->persist($waySet2041);


$point2042 = new Point();
$point2042->setLatitude(47.80078573934976);
$point2042->setLongitude(29.216814637184143);
$em->persist($point2042);


$waySet2042 = new WaySet();
$waySet2042->setPoint($point2042);
$waySet2042->setWay($way);
$em->persist($waySet2042);


$point2043 = new Point();
$point2043->setLatitude(47.8016829621518);
$point2043->setLongitude(29.215108752250668);
$em->persist($point2043);


$waySet2043 = new WaySet();
$waySet2043->setPoint($point2043);
$waySet2043->setWay($way);
$em->persist($waySet2043);


$point2044 = new Point();
$point2044->setLatitude(47.80318190222315);
$point2044->setLongitude(29.2138534784317);
$em->persist($point2044);


$waySet2044 = new WaySet();
$waySet2044->setPoint($point2044);
$waySet2044->setWay($way);
$em->persist($waySet2044);


$point2045 = new Point();
$point2045->setLatitude(47.80468079904343);
$point2045->setLongitude(29.212619662284848);
$em->persist($point2045);


$waySet2045 = new WaySet();
$waySet2045->setPoint($point2045);
$waySet2045->setWay($way);
$em->persist($waySet2045);


$point2046 = new Point();
$point2046->setLatitude(47.808741295000736);
$point2046->setLongitude(29.208848476409912);
$em->persist($point2046);


$waySet2046 = new WaySet();
$waySet2046->setPoint($point2046);
$waySet2046->setWay($way);
$em->persist($waySet2046);


$point2047 = new Point();
$point2047->setLatitude(47.810434575740665);
$point2047->setLongitude(29.207239151000977);
$em->persist($point2047);


$waySet2047 = new WaySet();
$waySet2047->setPoint($point2047);
$waySet2047->setWay($way);
$em->persist($waySet2047);


$point2048 = new Point();
$point2048->setLatitude(47.812452029652036);
$point2048->setLongitude(29.204975366592404);
$em->persist($point2048);


$waySet2048 = new WaySet();
$waySet2048->setPoint($point2048);
$waySet2048->setWay($way);
$em->persist($waySet2048);


$point2049 = new Point();
$point2049->setLatitude(47.81391823715414);
$point2049->setLongitude(29.203484058380123);
$em->persist($point2049);


$waySet2049 = new WaySet();
$waySet2049->setPoint($point2049);
$waySet2049->setWay($way);
$em->persist($waySet2049);


$point2050 = new Point();
$point2050->setLatitude(47.815557314467384);
$point2050->setLongitude(29.201971292495728);
$em->persist($point2050);


$waySet2050 = new WaySet();
$waySet2050->setPoint($point2050);
$waySet2050->setWay($way);
$em->persist($waySet2050);


$point2051 = new Point();
$point2051->setLatitude(47.81774026896327);
$point2051->setLongitude(29.199353456497192);
$em->persist($point2051);


$waySet2051 = new WaySet();
$waySet2051->setPoint($point2051);
$waySet2051->setWay($way);
$em->persist($waySet2051);


$point2052 = new Point();
$point2052->setLatitude(47.81851112535624);
$point2052->setLongitude(29.19852197170258);
$em->persist($point2052);


$waySet2052 = new WaySet();
$waySet2052->setPoint($point2052);
$waySet2052->setWay($way);
$em->persist($waySet2052);


$point2053 = new Point();
$point2053->setLatitude(47.81985469348563);
$point2053->setLongitude(29.198420047760006);
$em->persist($point2053);


$waySet2053 = new WaySet();
$waySet2053->setPoint($point2053);
$waySet2053->setWay($way);
$em->persist($waySet2053);


$point2054 = new Point();
$point2054->setLatitude(47.82317204120854);
$point2054->setLongitude(29.200587272644047);
$em->persist($point2054);


$waySet2054 = new WaySet();
$waySet2054->setPoint($point2054);
$waySet2054->setWay($way);
$em->persist($waySet2054);


$point2055 = new Point();
$point2055->setLatitude(47.82383476496785);
$point2055->setLongitude(29.200984239578247);
$em->persist($point2055);


$waySet2055 = new WaySet();
$waySet2055->setPoint($point2055);
$waySet2055->setWay($way);
$em->persist($waySet2055);


$point2056 = new Point();
$point2056->setLatitude(47.82504493434862);
$point2056->setLongitude(29.201231002807614);
$em->persist($point2056);


$waySet2056 = new WaySet();
$waySet2056->setPoint($point2056);
$waySet2056->setWay($way);
$em->persist($waySet2056);


$point2057 = new Point();
$point2057->setLatitude(47.82679530799942);
$point2057->setLongitude(29.201815724372867);
$em->persist($point2057);


$waySet2057 = new WaySet();
$waySet2057->setPoint($point2057);
$waySet2057->setWay($way);
$em->persist($waySet2057);


$point2058 = new Point();
$point2058->setLatitude(47.82836555182659);
$point2058->setLongitude(29.202464818954468);
$em->persist($point2058);


$waySet2058 = new WaySet();
$waySet2058->setPoint($point2058);
$waySet2058->setWay($way);
$em->persist($waySet2058);


$point2059 = new Point();
$point2059->setLatitude(47.829424359149776);
$point2059->setLongitude(29.203076362609863);
$em->persist($point2059);


$waySet2059 = new WaySet();
$waySet2059->setPoint($point2059);
$waySet2059->setWay($way);
$em->persist($waySet2059);


$point2060 = new Point();
$point2060->setLatitude(47.830342694947745);
$point2060->setLongitude(29.203784465789795);
$em->persist($point2060);


$waySet2060 = new WaySet();
$waySet2060->setPoint($point2060);
$waySet2060->setWay($way);
$em->persist($waySet2060);


$point2061 = new Point();
$point2061->setLatitude(47.831120566676326);
$point2061->setLongitude(29.20388102531433);
$em->persist($point2061);


$waySet2061 = new WaySet();
$waySet2061->setPoint($point2061);
$waySet2061->setWay($way);
$em->persist($waySet2061);


$point2062 = new Point();
$point2062->setLatitude(47.8318228019727);
$point2062->setLongitude(29.204460382461548);
$em->persist($point2062);


$waySet2062 = new WaySet();
$waySet2062->setPoint($point2062);
$waySet2062->setWay($way);
$em->persist($waySet2062);


$point2063 = new Point();
$point2063->setLatitude(47.83322004188792);
$point2063->setLongitude(29.205474257469177);
$em->persist($point2063);


$waySet2063 = new WaySet();
$waySet2063->setPoint($point2063);
$waySet2063->setWay($way);
$em->persist($waySet2063);


$point2064 = new Point();
$point2064->setLatitude(47.8339186477377);
$point2064->setLongitude(29.20553863048553);
$em->persist($point2064);


$waySet2064 = new WaySet();
$waySet2064->setPoint($point2064);
$waySet2064->setWay($way);
$em->persist($waySet2064);


$point2065 = new Point();
$point2065->setLatitude(47.83685340976895);
$point2065->setLongitude(29.207330346107483);
$em->persist($point2065);


$waySet2065 = new WaySet();
$waySet2065->setPoint($point2065);
$waySet2065->setWay($way);
$em->persist($waySet2065);


$point2066 = new Point();
$point2066->setLatitude(47.83858898233071);
$point2066->setLongitude(29.209046959877018);
$em->persist($point2066);


$waySet2066 = new WaySet();
$waySet2066->setPoint($point2066);
$waySet2066->setWay($way);
$em->persist($waySet2066);


$point2067 = new Point();
$point2067->setLatitude(47.839852817103555);
$point2067->setLongitude(29.210484623908993);
$em->persist($point2067);


$waySet2067 = new WaySet();
$waySet2067->setPoint($point2067);
$waySet2067->setWay($way);
$em->persist($waySet2067);


$point2068 = new Point();
$point2068->setLatitude(47.83984921647844);
$point2068->setLongitude(29.211493134498593);
$em->persist($point2068);


$waySet2068 = new WaySet();
$waySet2068->setPoint($point2068);
$waySet2068->setWay($way);
$em->persist($waySet2068);


$point2069 = new Point();
$point2069->setLatitude(47.83992843017371);
$point2069->setLongitude(29.212732315063473);
$em->persist($point2069);


$waySet2069 = new WaySet();
$waySet2069->setPoint($point2069);
$waySet2069->setWay($way);
$em->persist($waySet2069);


$point2070 = new Point();
$point2070->setLatitude(47.84063414684757);
$point2070->setLongitude(29.214770793914795);
$em->persist($point2070);


$waySet2070 = new WaySet();
$waySet2070->setPoint($point2070);
$waySet2070->setWay($way);
$em->persist($waySet2070);


$point2071 = new Point();
$point2071->setLatitude(47.841775515230744);
$point2071->setLongitude(29.215452075004574);
$em->persist($point2071);


$waySet2071 = new WaySet();
$waySet2071->setPoint($point2071);
$waySet2071->setWay($way);
$em->persist($waySet2071);


$point2072 = new Point();
$point2072->setLatitude(47.843374108856224);
$point2072->setLongitude(29.21577394008636);
$em->persist($point2072);


$waySet2072 = new WaySet();
$waySet2072->setPoint($point2072);
$waySet2072->setWay($way);
$em->persist($waySet2072);


$point2073 = new Point();
$point2073->setLatitude(47.84454781965888);
$point2073->setLongitude(29.21730279922485);
$em->persist($point2073);


$waySet2073 = new WaySet();
$waySet2073->setPoint($point2073);
$waySet2073->setWay($way);
$em->persist($waySet2073);


$point2074 = new Point();
$point2074->setLatitude(47.84670435402156);
$point2074->setLongitude(29.21855270862579);
$em->persist($point2074);


$waySet2074 = new WaySet();
$waySet2074->setPoint($point2074);
$waySet2074->setWay($way);
$em->persist($waySet2074);


$point2075 = new Point();
$point2075->setLatitude(47.84837479647581);
$point2075->setLongitude(29.22117590904236);
$em->persist($point2075);


$waySet2075 = new WaySet();
$waySet2075->setPoint($point2075);
$waySet2075->setWay($way);
$em->persist($waySet2075);


$point2076 = new Point();
$point2076->setLatitude(47.84967799223794);
$point2076->setLongitude(29.22195911407471);
$em->persist($point2076);


$waySet2076 = new WaySet();
$waySet2076->setPoint($point2076);
$waySet2076->setWay($way);
$em->persist($waySet2076);


$point2077 = new Point();
$point2077->setLatitude(47.85193870720685);
$point2077->setLongitude(29.223536252975464);
$em->persist($point2077);


$waySet2077 = new WaySet();
$waySet2077->setPoint($point2077);
$waySet2077->setWay($way);
$em->persist($waySet2077);


$point2078 = new Point();
$point2078->setLatitude(47.85312662302582);
$point2078->setLongitude(29.22437846660614);
$em->persist($point2078);


$waySet2078 = new WaySet();
$waySet2078->setPoint($point2078);
$waySet2078->setWay($way);
$em->persist($waySet2078);


$point2079 = new Point();
$point2079->setLatitude(47.85644544360454);
$point2079->setLongitude(29.22735035419464);
$em->persist($point2079);


$waySet2079 = new WaySet();
$waySet2079->setPoint($point2079);
$waySet2079->setWay($way);
$em->persist($waySet2079);


$point2080 = new Point();
$point2080->setLatitude(47.857662051301425);
$point2080->setLongitude(29.229463934898376);
$em->persist($point2080);


$waySet2080 = new WaySet();
$waySet2080->setPoint($point2080);
$waySet2080->setWay($way);
$em->persist($waySet2080);


$point2081 = new Point();
$point2081->setLatitude(47.857532473141745);
$point2081->setLongitude(29.23053681850433);
$em->persist($point2081);


$waySet2081 = new WaySet();
$waySet2081->setPoint($point2081);
$waySet2081->setWay($way);
$em->persist($waySet2081);


$point2082 = new Point();
$point2082->setLatitude(47.8578852129284);
$point2082->setLongitude(29.23258602619171);
$em->persist($point2082);


$waySet2082 = new WaySet();
$waySet2082->setPoint($point2082);
$waySet2082->setWay($way);
$em->persist($waySet2082);


$point2083 = new Point();
$point2083->setLatitude(47.85893261998863);
$point2083->setLongitude(29.2353755235672);
$em->persist($point2083);


$waySet2083 = new WaySet();
$waySet2083->setPoint($point2083);
$waySet2083->setWay($way);
$em->persist($waySet2083);


$point2084 = new Point();
$point2084->setLatitude(47.85943651962656);
$point2084->setLongitude(29.236078262329098);
$em->persist($point2084);


$waySet2084 = new WaySet();
$waySet2084->setPoint($point2084);
$waySet2084->setWay($way);
$em->persist($waySet2084);


$point2085 = new Point();
$point2085->setLatitude(47.86107056047397);
$point2085->setLongitude(29.235724210739132);
$em->persist($point2085);


$waySet2085 = new WaySet();
$waySet2085->setPoint($point2085);
$waySet2085->setWay($way);
$em->persist($waySet2085);


$point2086 = new Point();
$point2086->setLatitude(47.862517399465226);
$point2086->setLongitude(29.236040711402893);
$em->persist($point2086);


$waySet2086 = new WaySet();
$waySet2086->setPoint($point2086);
$waySet2086->setWay($way);
$em->persist($waySet2086);


$point2087 = new Point();
$point2087->setLatitude(47.86552971824798);
$point2087->setLongitude(29.2400050163269);
$em->persist($point2087);


$waySet2087 = new WaySet();
$waySet2087->setPoint($point2087);
$waySet2087->setWay($way);
$em->persist($waySet2087);


$point2088 = new Point();
$point2088->setLatitude(47.8668468779038);
$point2088->setLongitude(29.24288034439087);
$em->persist($point2088);


$waySet2088 = new WaySet();
$waySet2088->setPoint($point2088);
$waySet2088->setWay($way);
$em->persist($waySet2088);


$point2089 = new Point();
$point2089->setLatitude(47.86734350318289);
$point2089->setLongitude(29.24313247203827);
$em->persist($point2089);


$waySet2089 = new WaySet();
$waySet2089->setPoint($point2089);
$waySet2089->setWay($way);
$em->persist($waySet2089);


$point2090 = new Point();
$point2090->setLatitude(47.868164004087994);
$point2090->setLongitude(29.245750308036804);
$em->persist($point2090);


$waySet2090 = new WaySet();
$waySet2090->setPoint($point2090);
$waySet2090->setWay($way);
$em->persist($waySet2090);


$point2091 = new Point();
$point2091->setLatitude(47.868858540755525);
$point2091->setLongitude(29.248899221420285);
$em->persist($point2091);


$waySet2091 = new WaySet();
$waySet2091->setPoint($point2091);
$waySet2091->setWay($way);
$em->persist($waySet2091);


$point2092 = new Point();
$point2092->setLatitude(47.86969701044563);
$point2092->setLongitude(29.251651167869568);
$em->persist($point2092);


$waySet2092 = new WaySet();
$waySet2092->setPoint($point2092);
$waySet2092->setWay($way);
$em->persist($waySet2092);


$point2093 = new Point();
$point2093->setLatitude(47.87093489797995);
$point2093->setLongitude(29.25516486167908);
$em->persist($point2093);


$waySet2093 = new WaySet();
$waySet2093->setPoint($point2093);
$waySet2093->setWay($way);
$em->persist($waySet2093);


$point2094 = new Point();
$point2094->setLatitude(47.871708562673774);
$point2094->setLongitude(29.257294535636902);
$em->persist($point2094);


$waySet2094 = new WaySet();
$waySet2094->setPoint($point2094);
$waySet2094->setWay($way);
$em->persist($waySet2094);


$point2095 = new Point();
$point2095->setLatitude(47.87313351485837);
$point2095->setLongitude(29.261328577995297);
$em->persist($point2095);


$waySet2095 = new WaySet();
$waySet2095->setPoint($point2095);
$waySet2095->setWay($way);
$em->persist($waySet2095);


$point2096 = new Point();
$point2096->setLatitude(47.87405467521588);
$point2096->setLongitude(29.263967871665958);
$em->persist($point2096);


$waySet2096 = new WaySet();
$waySet2096->setPoint($point2096);
$waySet2096->setWay($way);
$em->persist($waySet2096);


$point2097 = new Point();
$point2097->setLatitude(47.875195308122095);
$point2097->setLongitude(29.267057776451107);
$em->persist($point2097);


$waySet2097 = new WaySet();
$waySet2097->setPoint($point2097);
$waySet2097->setWay($way);
$em->persist($waySet2097);


$point2098 = new Point();
$point2098->setLatitude(47.8756198906145);
$point2098->setLongitude(29.267368912696835);
$em->persist($point2098);


$waySet2098 = new WaySet();
$waySet2098->setPoint($point2098);
$waySet2098->setWay($way);
$em->persist($waySet2098);


$point2099 = new Point();
$point2099->setLatitude(47.87732538184094);
$point2099->setLongitude(29.26786780357361);
$em->persist($point2099);


$waySet2099 = new WaySet();
$waySet2099->setPoint($point2099);
$waySet2099->setWay($way);
$em->persist($waySet2099);


$point2100 = new Point();
$point2100->setLatitude(47.87841557150356);
$point2100->setLongitude(29.268608093261715);
$em->persist($point2100);


$waySet2100 = new WaySet();
$waySet2100->setPoint($point2100);
$waySet2100->setWay($way);
$em->persist($waySet2100);


$point2101 = new Point();
$point2101->setLatitude(47.87881494217357);
$point2101->setLongitude(29.268967509269714);
$em->persist($point2101);


$waySet2101 = new WaySet();
$waySet2101->setPoint($point2101);
$waySet2101->setWay($way);
$em->persist($waySet2101);


$point2102 = new Point();
$point2102->setLatitude(47.87903081692962);
$point2102->setLongitude(29.270212054252628);
$em->persist($point2102);


$waySet2102 = new WaySet();
$waySet2102->setPoint($point2102);
$waySet2102->setWay($way);
$em->persist($waySet2102);


$point2103 = new Point();
$point2103->setLatitude(47.879207113979824);
$point2103->setLongitude(29.271429777145382);
$em->persist($point2103);


$waySet2103 = new WaySet();
$waySet2103->setPoint($point2103);
$waySet2103->setWay($way);
$em->persist($waySet2103);


$point2104 = new Point();
$point2104->setLatitude(47.879297061223305);
$point2104->setLongitude(29.27295863628387);
$em->persist($point2104);


$waySet2104 = new WaySet();
$waySet2104->setPoint($point2104);
$waySet2104->setWay($way);
$em->persist($waySet2104);


$point2105 = new Point();
$point2105->setLatitude(47.87967843580085);
$point2105->setLongitude(29.27385985851288);
$em->persist($point2105);


$waySet2105 = new WaySet();
$waySet2105->setPoint($point2105);
$waySet2105->setWay($way);
$em->persist($waySet2105);


$point2106 = new Point();
$point2106->setLatitude(47.88095206263148);
$point2106->setLongitude(29.274728894233704);
$em->persist($point2106);


$waySet2106 = new WaySet();
$waySet2106->setPoint($point2106);
$waySet2106->setWay($way);
$em->persist($waySet2106);


$point2107 = new Point();
$point2107->setLatitude(47.88256024161096);
$point2107->setLongitude(29.276080727577206);
$em->persist($point2107);


$waySet2107 = new WaySet();
$waySet2107->setPoint($point2107);
$waySet2107->setWay($way);
$em->persist($waySet2107);


$point2108 = new Point();
$point2108->setLatitude(47.88324019488738);
$point2108->setLongitude(29.276922941207886);
$em->persist($point2108);


$waySet2108 = new WaySet();
$waySet2108->setPoint($point2108);
$waySet2108->setWay($way);
$em->persist($waySet2108);


$point2109 = new Point();
$point2109->setLatitude(47.88395971244466);
$point2109->setLongitude(29.276928305625912);
$em->persist($point2109);


$waySet2109 = new WaySet();
$waySet2109->setPoint($point2109);
$waySet2109->setWay($way);
$em->persist($waySet2109);


$point2110 = new Point();
$point2110->setLatitude(47.88584120361826);
$point2110->setLongitude(29.277395009994507);
$em->persist($point2110);


$waySet2110 = new WaySet();
$waySet2110->setPoint($point2110);
$waySet2110->setWay($way);
$em->persist($waySet2110);


$point2111 = new Point();
$point2111->setLatitude(47.88648513996623);
$point2111->setLongitude(29.27779197692871);
$em->persist($point2111);


$waySet2111 = new WaySet();
$waySet2111->setPoint($point2111);
$waySet2111->setWay($way);
$em->persist($waySet2111);


$point2112 = new Point();
$point2112->setLatitude(47.886708177505035);
$point2112->setLongitude(29.278521537780765);
$em->persist($point2112);


$waySet2112 = new WaySet();
$waySet2112->setPoint($point2112);
$waySet2112->setWay($way);
$em->persist($waySet2112);


$point2113 = new Point();
$point2113->setLatitude(47.88705712140509);
$point2113->setLongitude(29.2804741859436);
$em->persist($point2113);


$waySet2113 = new WaySet();
$waySet2113->setPoint($point2113);
$waySet2113->setWay($way);
$em->persist($waySet2113);


$point2114 = new Point();
$point2114->setLatitude(47.8873808816841);
$point2114->setLongitude(29.281321763992313);
$em->persist($point2114);


$waySet2114 = new WaySet();
$waySet2114->setPoint($point2114);
$waySet2114->setWay($way);
$em->persist($waySet2114);


$point2115 = new Point();
$point2115->setLatitude(47.88790608849892);
$point2115->setLongitude(29.281627535820007);
$em->persist($point2115);


$waySet2115 = new WaySet();
$waySet2115->setPoint($point2115);
$waySet2115->setWay($way);
$em->persist($waySet2115);


$point2116 = new Point();
$point2116->setLatitude(47.88843128998791);
$point2116->setLongitude(29.281262755393982);
$em->persist($point2116);


$waySet2116 = new WaySet();
$waySet2116->setPoint($point2116);
$waySet2116->setWay($way);
$em->persist($waySet2116);


$point2117 = new Point();
$point2117->setLatitude(47.889481676988424);
$point2117->setLongitude(29.280243515968326);
$em->persist($point2117);


$waySet2117 = new WaySet();
$waySet2117->setPoint($point2117);
$waySet2117->setWay($way);
$em->persist($waySet2117);


$point2118 = new Point();
$point2118->setLatitude(47.89008240244364);
$point2118->setLongitude(29.275474548339844);
$em->persist($point2118);


$waySet2118 = new WaySet();
$waySet2118->setPoint($point2118);
$waySet2118->setWay($way);
$em->persist($waySet2118);


$point2119 = new Point();
$point2119->setLatitude(47.89033420146015);
$point2119->setLongitude(29.27435338497162);
$em->persist($point2119);


$waySet2119 = new WaySet();
$waySet2119->setPoint($point2119);
$waySet2119->setWay($way);
$em->persist($waySet2119);


$point2120 = new Point();
$point2120->setLatitude(47.88961117528051);
$point2120->setLongitude(29.261950850486752);
$em->persist($point2120);


$waySet2120 = new WaySet();
$waySet2120->setPoint($point2120);
$waySet2120->setWay($way);
$em->persist($waySet2120);


$point2121 = new Point();
$point2121->setLatitude(47.889420524904615);
$point2121->setLongitude(29.258367419242855);
$em->persist($point2121);


$waySet2121 = new WaySet();
$waySet2121->setPoint($point2121);
$waySet2121->setWay($way);
$em->persist($waySet2121);


$point2122 = new Point();
$point2122->setLatitude(47.88910037458141);
$point2122->setLongitude(29.256350398063656);
$em->persist($point2122);


$waySet2122 = new WaySet();
$waySet2122->setPoint($point2122);
$waySet2122->setWay($way);
$em->persist($waySet2122);


$point2123 = new Point();
$point2123->setLatitude(47.888683097032114);
$point2123->setLongitude(29.251114726066586);
$em->persist($point2123);


$waySet2123 = new WaySet();
$waySet2123->setPoint($point2123);
$waySet2123->setWay($way);
$em->persist($waySet2123);


$point2124 = new Point();
$point2124->setLatitude(47.88842769273556);
$point2124->setLongitude(29.245192408561703);
$em->persist($point2124);


$waySet2124 = new WaySet();
$waySet2124->setPoint($point2124);
$waySet2124->setWay($way);
$em->persist($waySet2124);


$point2125 = new Point();
$point2125->setLatitude(47.88785572643247);
$point2125->setLongitude(29.23826158046722);
$em->persist($point2125);


$waySet2125 = new WaySet();
$waySet2125->setPoint($point2125);
$waySet2125->setWay($way);
$em->persist($waySet2125);


$point2126 = new Point();
$point2126->setLatitude(47.88753556643628);
$point2126->setLongitude(29.234586954116818);
$em->persist($point2126);


$waySet2126 = new WaySet();
$waySet2126->setPoint($point2126);
$waySet2126->setWay($way);
$em->persist($waySet2126);


$point2127 = new Point();
$point2127->setLatitude(47.88688444842879);
$point2127->setLongitude(29.227210879325867);
$em->persist($point2127);


$waySet2127 = new WaySet();
$waySet2127->setPoint($point2127);
$waySet2127->setWay($way);
$em->persist($waySet2127);


$point2128 = new Point();
$point2128->setLatitude(47.88615058185723);
$point2128->setLongitude(29.218230843544003);
$em->persist($point2128);


$waySet2128 = new WaySet();
$waySet2128->setPoint($point2128);
$waySet2128->setWay($way);
$em->persist($waySet2128);


$point2129 = new Point();
$point2129->setLatitude(47.8859599187424);
$point2129->setLongitude(29.21584904193878);
$em->persist($point2129);


$waySet2129 = new WaySet();
$waySet2129->setPoint($point2129);
$waySet2129->setWay($way);
$em->persist($waySet2129);


$point2130 = new Point();
$point2130->setLatitude(47.88724778048105);
$point2130->setLongitude(29.21613335609436);
$em->persist($point2130);


$waySet2130 = new WaySet();
$waySet2130->setPoint($point2130);
$waySet2130->setWay($way);
$em->persist($waySet2130);


$point2131 = new Point();
$point2131->setLatitude(47.887244183146485);
$point2131->setLongitude(29.216744899749756);
$em->persist($point2131);


$waySet2131 = new WaySet();
$waySet2131->setPoint($point2131);
$waySet2131->setWay($way);
$em->persist($waySet2131);


$point2132 = new Point();
$point2132->setLatitude(47.88848524874331);
$point2132->setLongitude(29.216986298561096);
$em->persist($point2132);


$waySet2132 = new WaySet();
$waySet2132->setPoint($point2132);
$waySet2132->setWay($way);
$em->persist($waySet2132);


$point2133 = new Point();
$point2133->setLatitude(47.88843488724002);
$point2133->setLongitude(29.21840786933899);
$em->persist($point2133);


$waySet2133 = new WaySet();
$waySet2133->setPoint($point2133);
$waySet2133->setWay($way);
$em->persist($waySet2133);


$point2134 = new Point();
$point2134->setLatitude(47.88893490285206);
$point2134->setLongitude(29.220038652420044);
$em->persist($point2134);


$waySet2134 = new WaySet();
$waySet2134->setPoint($point2134);
$waySet2134->setWay($way);
$em->persist($waySet2134);


$point2135 = new Point();
$point2135->setLatitude(47.8887154721347);
$point2135->setLongitude(29.221208095550537);
$em->persist($point2135);


$waySet2135 = new WaySet();
$waySet2135->setPoint($point2135);
$waySet2135->setWay($way);
$em->persist($waySet2135);


$point2136 = new Point();
$point2136->setLatitude(47.88912555501562);
$point2136->setLongitude(29.222297072410583);
$em->persist($point2136);


$waySet2136 = new WaySet();
$waySet2136->setPoint($point2136);
$waySet2136->setWay($way);
$em->persist($waySet2136);


$point2137 = new Point();
$point2137->setLatitude(47.8895032600596);
$point2137->setLongitude(29.222940802574158);
$em->persist($point2137);


$waySet2137 = new WaySet();
$waySet2137->setPoint($point2137);
$waySet2137->setWay($way);
$em->persist($waySet2137);


$point2138 = new Point();
$point2138->setLatitude(47.890111179536056);
$point2138->setLongitude(29.2231285572052);
$em->persist($point2138);


$waySet2138 = new WaySet();
$waySet2138->setPoint($point2138);
$waySet2138->setWay($way);
$em->persist($waySet2138);


$point2139 = new Point();
$point2139->setLatitude(47.890711897689435);
$point2139->setLongitude(29.22350943088531);
$em->persist($point2139);


$waySet2139 = new WaySet();
$waySet2139->setPoint($point2139);
$waySet2139->setWay($way);
$em->persist($waySet2139);


$point2140 = new Point();
$point2140->setLatitude(47.89109678529881);
$point2140->setLongitude(29.22354698181152);
$em->persist($point2140);


$waySet2140 = new WaySet();
$waySet2140->setPoint($point2140);
$waySet2140->setWay($way);
$em->persist($waySet2140);


$point2141 = new Point();
$point2141->setLatitude(47.894114636654514);
$point2141->setLongitude(29.220870137214657);
$em->persist($point2141);


$waySet2141 = new WaySet();
$waySet2141->setPoint($point2141);
$waySet2141->setWay($way);
$em->persist($waySet2141);


$point2142 = new Point();
$point2142->setLatitude(47.89447432115254);
$point2142->setLongitude(29.22009229660034);
$em->persist($point2142);


$waySet2142 = new WaySet();
$waySet2142->setPoint($point2142);
$waySet2142->setWay($way);
$em->persist($waySet2142);


$point2143 = new Point();
$point2143->setLatitude(47.8948987456467);
$point2143->setLongitude(29.219003319740295);
$em->persist($point2143);


$waySet2143 = new WaySet();
$waySet2143->setPoint($point2143);
$waySet2143->setWay($way);
$em->persist($waySet2143);


$point2144 = new Point();
$point2144->setLatitude(47.89505340794497);
$point2144->setLongitude(29.218456149101257);
$em->persist($point2144);


$waySet2144 = new WaySet();
$waySet2144->setPoint($point2144);
$waySet2144->setWay($way);
$em->persist($waySet2144);


$point2145 = new Point();
$point2145->setLatitude(47.89530877956588);
$point2145->setLongitude(29.21825230121613);
$em->persist($point2145);


$waySet2145 = new WaySet();
$waySet2145->setPoint($point2145);
$waySet2145->setWay($way);
$em->persist($waySet2145);


$point2146 = new Point();
$point2146->setLatitude(47.89572600372969);
$point2146->setLongitude(29.218102097511295);
$em->persist($point2146);


$waySet2146 = new WaySet();
$waySet2146->setPoint($point2146);
$waySet2146->setWay($way);
$em->persist($waySet2146);


$point2147 = new Point();
$point2147->setLatitude(47.896067693428726);
$point2147->setLongitude(29.216213822364807);
$em->persist($point2147);


$waySet2147 = new WaySet();
$waySet2147->setPoint($point2147);
$waySet2147->setWay($way);
$em->persist($waySet2147);


$point2148 = new Point();
$point2148->setLatitude(47.89596338839129);
$point2148->setLongitude(29.215983152389523);
$em->persist($point2148);


$waySet2148 = new WaySet();
$waySet2148->setPoint($point2148);
$waySet2148->setWay($way);
$em->persist($waySet2148);


$point2149 = new Point();
$point2149->setLatitude(47.89570442325194);
$point2149->setLongitude(29.215961694717407);
$em->persist($point2149);


$waySet2149 = new WaySet();
$waySet2149->setPoint($point2149);
$waySet2149->setWay($way);
$em->persist($waySet2149);


$point2150 = new Point();
$point2150->setLatitude(47.89417578319545);
$point2150->setLongitude(29.215682744979855);
$em->persist($point2150);


$waySet2150 = new WaySet();
$waySet2150->setPoint($point2150);
$waySet2150->setWay($way);
$em->persist($waySet2150);


$point2151 = new Point();
$point2151->setLatitude(47.89304995589738);
$point2151->setLongitude(29.215693473815914);
$em->persist($point2151);


$waySet2151 = new WaySet();
$waySet2151->setPoint($point2151);
$waySet2151->setWay($way);
$em->persist($waySet2151);


$point2152 = new Point();
$point2152->setLatitude(47.89144569963156);
$point2152->setLongitude(29.215473532676697);
$em->persist($point2152);


$waySet2152 = new WaySet();
$waySet2152->setPoint($point2152);
$waySet2152->setWay($way);
$em->persist($waySet2152);


$point2153 = new Point();
$point2153->setLatitude(47.89005722247465);
$point2153->setLongitude(29.21508729457855);
$em->persist($point2153);


$waySet2153 = new WaySet();
$waySet2153->setPoint($point2153);
$waySet2153->setWay($way);
$em->persist($waySet2153);


$point2154 = new Point();
$point2154->setLatitude(47.88970829878705);
$point2154->setLongitude(29.214749336242676);
$em->persist($point2154);


$waySet2154 = new WaySet();
$waySet2154->setPoint($point2154);
$waySet2154->setWay($way);
$em->persist($waySet2154);


$point2155 = new Point();
$point2155->setLatitude(47.889377358684335);
$point2155->setLongitude(29.21437919139862);
$em->persist($point2155);


$waySet2155 = new WaySet();
$waySet2155->setPoint($point2155);
$waySet2155->setWay($way);
$em->persist($waySet2155);


$point2156 = new Point();
$point2156->setLatitude(47.88908598575635);
$point2156->setLongitude(29.214309453964233);
$em->persist($point2156);


$waySet2156 = new WaySet();
$waySet2156->setPoint($point2156);
$waySet2156->setWay($way);
$em->persist($waySet2156);


$point2157 = new Point();
$point2157->setLatitude(47.88875144444717);
$point2157->setLongitude(29.213901758193973);
$em->persist($point2157);


$waySet2157 = new WaySet();
$waySet2157->setPoint($point2157);
$waySet2157->setWay($way);
$em->persist($waySet2157);


$point2158 = new Point();
$point2158->setLatitude(47.88859316608544);
$point2158->setLongitude(29.21327412128448);
$em->persist($point2158);


$waySet2158 = new WaySet();
$waySet2158->setPoint($point2158);
$waySet2158->setWay($way);
$em->persist($waySet2158);


$point2159 = new Point();
$point2159->setLatitude(47.88841330372362);
$point2159->setLongitude(29.213070273399353);
$em->persist($point2159);


$waySet2159 = new WaySet();
$waySet2159->setPoint($point2159);
$waySet2159->setWay($way);
$em->persist($waySet2159);


$point2160 = new Point();
$point2160->setLatitude(47.88716863906302);
$point2160->setLongitude(29.213193655014035);
$em->persist($point2160);


$waySet2160 = new WaySet();
$waySet2160->setPoint($point2160);
$waySet2160->setWay($way);
$em->persist($waySet2160);


$point2161 = new Point();
$point2161->setLatitude(47.886139789624195);
$point2161->setLongitude(29.21318829059601);
$em->persist($point2161);


$waySet2161 = new WaySet();
$waySet2161->setPoint($point2161);
$waySet2161->setWay($way);
$em->persist($waySet2161);


$point2162 = new Point();
$point2162->setLatitude(47.88576925492574);
$point2162->setLongitude(29.213193655014035);
$em->persist($point2162);


$waySet2162 = new WaySet();
$waySet2162->setPoint($point2162);
$waySet2162->setWay($way);
$em->persist($waySet2162);


$point2163 = new Point();
$point2163->setLatitude(47.88514689456435);
$point2163->setLongitude(29.20784533023834);
$em->persist($point2163);


$waySet2163 = new WaySet();
$waySet2163->setPoint($point2163);
$waySet2163->setWay($way);
$em->persist($waySet2163);


$point2164 = new Point();
$point2164->setLatitude(47.884542514339806);
$point2164->setLongitude(29.20242190361023);
$em->persist($point2164);


$waySet2164 = new WaySet();
$waySet2164->setPoint($point2164);
$waySet2164->setWay($way);
$em->persist($waySet2164);


$point2165 = new Point();
$point2165->setLatitude(47.8843734305146);
$point2165->setLongitude(29.20064091682434);
$em->persist($point2165);


$waySet2165 = new WaySet();
$waySet2165->setPoint($point2165);
$waySet2165->setWay($way);
$em->persist($waySet2165);


$point2166 = new Point();
$point2166->setLatitude(47.88681609854997);
$point2166->setLongitude(29.200099110603333);
$em->persist($point2166);


$waySet2166 = new WaySet();
$waySet2166->setPoint($point2166);
$waySet2166->setWay($way);
$em->persist($waySet2166);


$point2167 = new Point();
$point2167->setLatitude(47.88962916112879);
$point2167->setLongitude(29.199503660202026);
$em->persist($point2167);


$waySet2167 = new WaySet();
$waySet2167->setPoint($point2167);
$waySet2167->setWay($way);
$em->persist($waySet2167);


$point2168 = new Point();
$point2168->setLatitude(47.893244189830185);
$point2168->setLongitude(29.198731184005734);
$em->persist($point2168);


$waySet2168 = new WaySet();
$waySet2168->setPoint($point2168);
$waySet2168->setWay($way);
$em->persist($waySet2168);


$point2169 = new Point();
$point2169->setLatitude(47.89450669263481);
$point2169->setLongitude(29.19844686985016);
$em->persist($point2169);


$waySet2169 = new WaySet();
$waySet2169->setPoint($point2169);
$waySet2169->setWay($way);
$em->persist($waySet2169);


$point2170 = new Point();
$point2170->setLatitude(47.896682729204784);
$point2170->setLongitude(29.197867512702945);
$em->persist($point2170);


$waySet2170 = new WaySet();
$waySet2170->setPoint($point2170);
$waySet2170->setWay($way);
$em->persist($waySet2170);


$point2171 = new Point();
$point2171->setLatitude(47.89868244415726);
$point2171->setLongitude(29.197492003440853);
$em->persist($point2171);


$waySet2171 = new WaySet();
$waySet2171->setPoint($point2171);
$waySet2171->setWay($way);
$em->persist($waySet2171);


$point2172 = new Point();
$point2172->setLatitude(47.901365393604074);
$point2172->setLongitude(29.196907281875607);
$em->persist($point2172);


$waySet2172 = new WaySet();
$waySet2172->setPoint($point2172);
$waySet2172->setWay($way);
$em->persist($waySet2172);


$point2173 = new Point();
$point2173->setLatitude(47.905389557075054);
$point2173->setLongitude(29.195989966392517);
$em->persist($point2173);


$waySet2173 = new WaySet();
$waySet2173->setPoint($point2173);
$waySet2173->setWay($way);
$em->persist($waySet2173);


$point2174 = new Point();
$point2174->setLatitude(47.90932351276647);
$point2174->setLongitude(29.195196032524105);
$em->persist($point2174);


$waySet2174 = new WaySet();
$waySet2174->setPoint($point2174);
$waySet2174->setWay($way);
$em->persist($waySet2174);


$point2175 = new Point();
$point2175->setLatitude(47.912850873236856);
$point2175->setLongitude(29.19437527656555);
$em->persist($point2175);


$waySet2175 = new WaySet();
$waySet2175->setPoint($point2175);
$waySet2175->setWay($way);
$em->persist($waySet2175);


$point2176 = new Point();
$point2176->setLatitude(47.91643192291395);
$point2176->setLongitude(29.193570613861084);
$em->persist($point2176);


$waySet2176 = new WaySet();
$waySet2176->setPoint($point2176);
$waySet2176->setWay($way);
$em->persist($waySet2176);


$point2177 = new Point();
$point2177->setLatitude(47.91995879885878);
$point2177->setLongitude(29.19268548488617);
$em->persist($point2177);


$waySet2177 = new WaySet();
$waySet2177->setPoint($point2177);
$waySet2177->setWay($way);
$em->persist($waySet2177);


$point2178 = new Point();
$point2178->setLatitude(47.9201349565925);
$point2178->setLongitude(29.19263184070587);
$em->persist($point2178);


$waySet2178 = new WaySet();
$waySet2178->setPoint($point2178);
$waySet2178->setWay($way);
$em->persist($waySet2178);


$point2179 = new Point();
$point2179->setLatitude(47.92312595145086);
$point2179->setLongitude(29.192068576812744);
$em->persist($point2179);


$waySet2179 = new WaySet();
$waySet2179->setPoint($point2179);
$waySet2179->setWay($way);
$em->persist($waySet2179);


$point2180 = new Point();
$point2180->setLatitude(47.92465373666145);
$point2180->setLongitude(29.191789627075195);
$em->persist($point2180);


$waySet2180 = new WaySet();
$waySet2180->setPoint($point2180);
$waySet2180->setWay($way);
$em->persist($waySet2180);


$point2181 = new Point();
$point2181->setLatitude(47.927766684053054);
$point2181->setLongitude(29.19131755828857);
$em->persist($point2181);


$waySet2181 = new WaySet();
$waySet2181->setPoint($point2181);
$waySet2181->setWay($way);
$em->persist($waySet2181);


$point2182 = new Point();
$point2182->setLatitude(47.930369050554184);
$point2182->setLongitude(29.19094204902649);
$em->persist($point2182);


$waySet2182 = new WaySet();
$waySet2182->setPoint($point2182);
$waySet2182->setWay($way);
$em->persist($waySet2182);


$point2183 = new Point();
$point2183->setLatitude(47.93411780966367);
$point2183->setLongitude(29.19029295444488);
$em->persist($point2183);


$waySet2183 = new WaySet();
$waySet2183->setPoint($point2183);
$waySet2183->setWay($way);
$em->persist($waySet2183);


$point2184 = new Point();
$point2184->setLatitude(47.938362241430085);
$point2184->setLongitude(29.189504384994503);
$em->persist($point2184);


$waySet2184 = new WaySet();
$waySet2184->setPoint($point2184);
$waySet2184->setWay($way);
$em->persist($waySet2184);


$point2185 = new Point();
$point2185->setLatitude(47.942520080995735);
$point2185->setLongitude(29.188951849937435);
$em->persist($point2185);


$waySet2185 = new WaySet();
$waySet2185->setPoint($point2185);
$waySet2185->setWay($way);
$em->persist($waySet2185);


$point2186 = new Point();
$point2186->setLatitude(47.94341844664781);
$point2186->setLongitude(29.188844561576843);
$em->persist($point2186);


$waySet2186 = new WaySet();
$waySet2186->setPoint($point2186);
$waySet2186->setWay($way);
$em->persist($waySet2186);


$point2187 = new Point();
$point2187->setLatitude(47.946648840516325);
$point2187->setLongitude(29.188147187232968);
$em->persist($point2187);


$waySet2187 = new WaySet();
$waySet2187->setPoint($point2187);
$waySet2187->setWay($way);
$em->persist($waySet2187);


$point2188 = new Point();
$point2188->setLatitude(47.94976405693712);
$point2188->setLongitude(29.18755173683166);
$em->persist($point2188);


$waySet2188 = new WaySet();
$waySet2188->setPoint($point2188);
$waySet2188->setWay($way);
$em->persist($waySet2188);


$point2189 = new Point();
$point2189->setLatitude(47.95305153843684);
$point2189->setLongitude(29.1869455575943);
$em->persist($point2189);


$waySet2189 = new WaySet();
$waySet2189->setPoint($point2189);
$waySet2189->setWay($way);
$em->persist($waySet2189);


$point2190 = new Point();
$point2190->setLatitude(47.956935167858646);
$point2190->setLongitude(29.1863876581192);
$em->persist($point2190);


$waySet2190 = new WaySet();
$waySet2190->setPoint($point2190);
$waySet2190->setWay($way);
$em->persist($waySet2190);


$point2191 = new Point();
$point2191->setLatitude(47.962812149919536);
$point2191->setLongitude(29.185556173324585);
$em->persist($point2191);


$waySet2191 = new WaySet();
$waySet2191->setPoint($point2191);
$waySet2191->setWay($way);
$em->persist($waySet2191);


$point2192 = new Point();
$point2192->setLatitude(47.96448962544199);
$point2192->setLongitude(29.18529868125916);
$em->persist($point2192);


$waySet2192 = new WaySet();
$waySet2192->setPoint($point2192);
$waySet2192->setWay($way);
$em->persist($waySet2192);


$point2193 = new Point();
$point2193->setLatitude(47.96480930945777);
$point2193->setLongitude(29.184483289718628);
$em->persist($point2193);


$waySet2193 = new WaySet();
$waySet2193->setPoint($point2193);
$waySet2193->setWay($way);
$em->persist($waySet2193);


$point2194 = new Point();
$point2194->setLatitude(47.96489551604465);
$point2194->setLongitude(29.183506965637207);
$em->persist($point2194);


$waySet2194 = new WaySet();
$waySet2194->setPoint($point2194);
$waySet2194->setWay($way);
$em->persist($waySet2194);


$point2195 = new Point();
$point2195->setLatitude(47.96471232687553);
$point2195->setLongitude(29.182589650154114);
$em->persist($point2195);


$waySet2195 = new WaySet();
$waySet2195->setPoint($point2195);
$waySet2195->setWay($way);
$em->persist($waySet2195);


$point2196 = new Point();
$point2196->setLatitude(47.96435672251609);
$point2196->setLongitude(29.18141484260559);
$em->persist($point2196);


$waySet2196 = new WaySet();
$waySet2196->setPoint($point2196);
$waySet2196->setWay($way);
$em->persist($waySet2196);


$point2197 = new Point();
$point2197->setLatitude(47.96421304329263);
$point2197->setLongitude(29.180470705032345);
$em->persist($point2197);


$waySet2197 = new WaySet();
$waySet2197->setPoint($point2197);
$waySet2197->setWay($way);
$em->persist($waySet2197);


$point2198 = new Point();
$point2198->setLatitude(47.96886445517618);
$point2198->setLongitude(29.179236888885498);
$em->persist($point2198);


$waySet2198 = new WaySet();
$waySet2198->setPoint($point2198);
$waySet2198->setWay($way);
$em->persist($waySet2198);


$point2199 = new Point();
$point2199->setLatitude(47.97276485293984);
$point2199->setLongitude(29.17869508266449);
$em->persist($point2199);


$waySet2199 = new WaySet();
$waySet2199->setPoint($point2199);
$waySet2199->setWay($way);
$em->persist($waySet2199);


$point2200 = new Point();
$point2200->setLatitude(47.973928450467305);
$point2200->setLongitude(29.178544878959656);
$em->persist($point2200);


$waySet2200 = new WaySet();
$waySet2200->setPoint($point2200);
$waySet2200->setWay($way);
$em->persist($waySet2200);


$point2201 = new Point();
$point2201->setLatitude(47.97818756837906);
$point2201->setLongitude(29.177809953689575);
$em->persist($point2201);


$waySet2201 = new WaySet();
$waySet2201->setPoint($point2201);
$waySet2201->setWay($way);
$em->persist($waySet2201);


$point2202 = new Point();
$point2202->setLatitude(47.982773089220245);
$point2202->setLongitude(29.177026748657223);
$em->persist($point2202);


$waySet2202 = new WaySet();
$waySet2202->setPoint($point2202);
$waySet2202->setWay($way);
$em->persist($waySet2202);


$point2203 = new Point();
$point2203->setLatitude(47.98637083997186);
$point2203->setLongitude(29.176474213600155);
$em->persist($point2203);


$waySet2203 = new WaySet();
$waySet2203->setPoint($point2203);
$waySet2203->setWay($way);
$em->persist($waySet2203);


$point2204 = new Point();
$point2204->setLatitude(47.989372364278545);
$point2204->setLongitude(29.176104068756104);
$em->persist($point2204);


$waySet2204 = new WaySet();
$waySet2204->setPoint($point2204);
$waySet2204->setWay($way);
$em->persist($waySet2204);


$point2205 = new Point();
$point2205->setLatitude(47.9908587004459);
$point2205->setLongitude(29.17593240737915);
$em->persist($point2205);


$waySet2205 = new WaySet();
$waySet2205->setPoint($point2205);
$waySet2205->setWay($way);
$em->persist($waySet2205);


$point2206 = new Point();
$point2206->setLatitude(47.99377021558842);
$point2206->setLongitude(29.17531549930572);
$em->persist($point2206);


$waySet2206 = new WaySet();
$waySet2206->setPoint($point2206);
$waySet2206->setWay($way);
$em->persist($waySet2206);


$point2207 = new Point();
$point2207->setLatitude(47.99371277668086);
$point2207->setLongitude(29.172027111053467);
$em->persist($point2207);


$waySet2207 = new WaySet();
$waySet2207->setPoint($point2207);
$waySet2207->setWay($way);
$em->persist($waySet2207);


$point2208 = new Point();
$point2208->setLatitude(47.99352609978966);
$point2208->setLongitude(29.161512851715088);
$em->persist($point2208);


$waySet2208 = new WaySet();
$waySet2208->setPoint($point2208);
$waySet2208->setWay($way);
$em->persist($waySet2208);


$point2209 = new Point();
$point2209->setLatitude(47.9933717318503);
$point2209->setLongitude(29.152860045433044);
$em->persist($point2209);


$waySet2209 = new WaySet();
$waySet2209->setPoint($point2209);
$waySet2209->setWay($way);
$em->persist($waySet2209);


$point2210 = new Point();
$point2210->setLatitude(47.9934004515019);
$point2210->setLongitude(29.141744971275326);
$em->persist($point2210);


$waySet2210 = new WaySet();
$waySet2210->setPoint($point2210);
$waySet2210->setWay($way);
$em->persist($waySet2210);


$point2211 = new Point();
$point2211->setLatitude(47.99358353890506);
$point2211->setLongitude(29.12965893745422);
$em->persist($point2211);


$waySet2211 = new WaySet();
$waySet2211->setPoint($point2211);
$waySet2211->setWay($way);
$em->persist($waySet2211);


$point2212 = new Point();
$point2212->setLatitude(47.993666107521385);
$point2212->setLongitude(29.12486851215363);
$em->persist($point2212);


$waySet2212 = new WaySet();
$waySet2212->setPoint($point2212);
$waySet2212->setWay($way);
$em->persist($waySet2212);


$point2213 = new Point();
$point2213->setLatitude(47.98839940123806);
$point2213->setLongitude(29.12400484085083);
$em->persist($point2213);


$waySet2213 = new WaySet();
$waySet2213->setPoint($point2213);
$waySet2213->setWay($way);
$em->persist($waySet2213);


$point2214 = new Point();
$point2214->setLatitude(47.9882593792169);
$point2214->setLongitude(29.126906991004944);
$em->persist($point2214);


$waySet2214 = new WaySet();
$waySet2214->setPoint($point2214);
$waySet2214->setWay($way);
$em->persist($waySet2214);


$point2215 = new Point();
$point2215->setLatitude(47.98722894906932);
$point2215->setLongitude(29.12870943546295);
$em->persist($point2215);


$waySet2215 = new WaySet();
$waySet2215->setPoint($point2215);
$waySet2215->setWay($way);
$em->persist($waySet2215);


$point2216 = new Point();
$point2216->setLatitude(47.98646419144393);
$point2216->setLongitude(29.129846692085266);
$em->persist($point2216);


$waySet2216 = new WaySet();
$waySet2216->setPoint($point2216);
$waySet2216->setWay($way);
$em->persist($waySet2216);


$point2217 = new Point();
$point2217->setLatitude(47.98560247913395);
$point2217->setLongitude(29.130420684814453);
$em->persist($point2217);


$waySet2217 = new WaySet();
$waySet2217->setPoint($point2217);
$waySet2217->setWay($way);
$em->persist($waySet2217);


$point2218 = new Point();
$point2218->setLatitude(47.98464021671922);
$point2218->setLongitude(29.130710363388065);
$em->persist($point2218);


$waySet2218 = new WaySet();
$waySet2218->setPoint($point2218);
$waySet2218->setWay($way);
$em->persist($waySet2218);


$point2219 = new Point();
$point2219->setLatitude(47.98362766749564);
$point2219->setLongitude(29.131311178207394);
$em->persist($point2219);


$waySet2219 = new WaySet();
$waySet2219->setPoint($point2219);
$waySet2219->setWay($way);
$em->persist($waySet2219);


$point2220 = new Point();
$point2220->setLatitude(47.982363748396324);
$point2220->setLongitude(29.131000041961666);
$em->persist($point2220);


$waySet2220 = new WaySet();
$waySet2220->setPoint($point2220);
$waySet2220->setWay($way);
$em->persist($waySet2220);


$point2221 = new Point();
$point2221->setLatitude(47.982227300733705);
$point2221->setLongitude(29.126381278038025);
$em->persist($point2221);


$waySet2221 = new WaySet();
$waySet2221->setPoint($point2221);
$waySet2221->setWay($way);
$em->persist($waySet2221);


$point2222 = new Point();
$point2222->setLatitude(47.98354149217651);
$point2222->setLongitude(29.119091033935547);
$em->persist($point2222);


$waySet2222 = new WaySet();
$waySet2222->setPoint($point2222);
$waySet2222->setWay($way);
$em->persist($waySet2222);


$point2223 = new Point();
$point2223->setLatitude(47.98325424007365);
$point2223->setLongitude(29.11499261856079);
$em->persist($point2223);


$waySet2223 = new WaySet();
$waySet2223->setPoint($point2223);
$waySet2223->setWay($way);
$em->persist($waySet2223);


$point2224 = new Point();
$point2224->setLatitude(47.98410881038353);
$point2224->setLongitude(29.108984470367428);
$em->persist($point2224);


$waySet2224 = new WaySet();
$waySet2224->setPoint($point2224);
$waySet2224->setWay($way);
$em->persist($waySet2224);


$point2225 = new Point();
$point2225->setLatitude(47.9823817020093);
$point2225->setLongitude(29.105551242828373);
$em->persist($point2225);


$waySet2225 = new WaySet();
$waySet2225->setPoint($point2225);
$waySet2225->setWay($way);
$em->persist($waySet2225);


$point2226 = new Point();
$point2226->setLatitude(47.98247146998048);
$point2226->setLongitude(29.104633927345272);
$em->persist($point2226);


$waySet2226 = new WaySet();
$waySet2226->setPoint($point2226);
$waySet2226->setWay($way);
$em->persist($waySet2226);


$point2227 = new Point();
$point2227->setLatitude(47.98231706897337);
$point2227->setLongitude(29.103738069534305);
$em->persist($point2227);


$waySet2227 = new WaySet();
$waySet2227->setPoint($point2227);
$waySet2227->setWay($way);
$em->persist($waySet2227);


$point2228 = new Point();
$point2228->setLatitude(47.98192208755111);
$point2228->setLongitude(29.103142619132992);
$em->persist($point2228);


$waySet2228 = new WaySet();
$waySet2228->setPoint($point2228);
$waySet2228->setWay($way);
$em->persist($waySet2228);


$point2229 = new Point();
$point2229->setLatitude(47.981663552620056);
$point2229->setLongitude(29.102209210395813);
$em->persist($point2229);


$waySet2229 = new WaySet();
$waySet2229->setPoint($point2229);
$waySet2229->setWay($way);
$em->persist($waySet2229);


$point2230 = new Point();
$point2230->setLatitude(47.982920307494844);
$point2230->setLongitude(29.1020268201828);
$em->persist($point2230);


$waySet2230 = new WaySet();
$waySet2230->setPoint($point2230);
$waySet2230->setWay($way);
$em->persist($waySet2230);


$point2231 = new Point();
$point2231->setLatitude(47.98221293780088);
$point2231->setLongitude(29.09775137901306);
$em->persist($point2231);


$waySet2231 = new WaySet();
$waySet2231->setPoint($point2231);
$waySet2231->setWay($way);
$em->persist($waySet2231);


$point2232 = new Point();
$point2232->setLatitude(47.983178836131785);
$point2232->setLongitude(29.09603476524353);
$em->persist($point2232);


$waySet2232 = new WaySet();
$waySet2232->setPoint($point2232);
$waySet2232->setWay($way);
$em->persist($waySet2232);


$point2233 = new Point();
$point2233->setLatitude(47.98307111602373);
$point2233->setLongitude(29.092896580696106);
$em->persist($point2233);


$waySet2233 = new WaySet();
$waySet2233->setPoint($point2233);
$waySet2233->setWay($way);
$em->persist($waySet2233);


$point2234 = new Point();
$point2234->setLatitude(47.982615098409696);
$point2234->setLongitude(29.0924459695816);
$em->persist($point2234);


$waySet2234 = new WaySet();
$waySet2234->setPoint($point2234);
$waySet2234->setWay($way);
$em->persist($waySet2234);


$point2235 = new Point();
$point2235->setLatitude(47.98023440561263);
$point2235->setLongitude(29.0919417142868);
$em->persist($point2235);


$waySet2235 = new WaySet();
$waySet2235->setPoint($point2235);
$waySet2235->setWay($way);
$em->persist($waySet2235);


$point2236 = new Point();
$point2236->setLatitude(47.98127215699672);
$point2236->setLongitude(29.089758396148685);
$em->persist($point2236);


$waySet2236 = new WaySet();
$waySet2236->setPoint($point2236);
$waySet2236->setWay($way);
$em->persist($waySet2236);


$point2237 = new Point();
$point2237->setLatitude(47.97732930897131);
$point2237->setLongitude(29.08407211303711);
$em->persist($point2237);


$waySet2237 = new WaySet();
$waySet2237->setPoint($point2237);
$waySet2237->setWay($way);
$em->persist($waySet2237);


$point2238 = new Point();
$point2238->setLatitude(47.975522967456435);
$point2238->setLongitude(29.08528983592987);
$em->persist($point2238);


$waySet2238 = new WaySet();
$waySet2238->setPoint($point2238);
$waySet2238->setWay($way);
$em->persist($waySet2238);


$point2239 = new Point();
$point2239->setLatitude(47.97669727618536);
$point2239->setLongitude(29.08773064613342);
$em->persist($point2239);


$waySet2239 = new WaySet();
$waySet2239->setPoint($point2239);
$waySet2239->setWay($way);
$em->persist($waySet2239);


$point2240 = new Point();
$point2240->setLatitude(47.97439172737001);
$point2240->setLongitude(29.0903377532959);
$em->persist($point2240);


$waySet2240 = new WaySet();
$waySet2240->setPoint($point2240);
$waySet2240->setWay($way);
$em->persist($waySet2240);


$point2241 = new Point();
$point2241->setLatitude(47.97389971997986);
$point2241->setLongitude(29.091485738754272);
$em->persist($point2241);


$waySet2241 = new WaySet();
$waySet2241->setPoint($point2241);
$waySet2241->setWay($way);
$em->persist($waySet2241);


$point2242 = new Point();
$point2242->setLatitude(47.97355495288383);
$point2242->setLongitude(29.091501832008362);
$em->persist($point2242);


$waySet2242 = new WaySet();
$waySet2242->setPoint($point2242);
$waySet2242->setWay($way);
$em->persist($waySet2242);


$point2243 = new Point();
$point2243->setLatitude(47.973102442576874);
$point2243->setLongitude(29.092526435852047);
$em->persist($point2243);


$waySet2243 = new WaySet();
$waySet2243->setPoint($point2243);
$waySet2243->setWay($way);
$em->persist($waySet2243);


$point2244 = new Point();
$point2244->setLatitude(47.97314194760293);
$point2244->setLongitude(29.093851447105408);
$em->persist($point2244);


$waySet2244 = new WaySet();
$waySet2244->setPoint($point2244);
$waySet2244->setWay($way);
$em->persist($waySet2244);


$point2245 = new Point();
$point2245->setLatitude(47.97337538577628);
$point2245->setLongitude(29.095734357833862);
$em->persist($point2245);


$waySet2245 = new WaySet();
$waySet2245->setPoint($point2245);
$waySet2245->setWay($way);
$em->persist($waySet2245);


$point2246 = new Point();
$point2246->setLatitude(47.9733107414647);
$point2246->setLongitude(29.09651219844818);
$em->persist($point2246);


$waySet2246 = new WaySet();
$waySet2246->setPoint($point2246);
$waySet2246->setWay($way);
$em->persist($waySet2246);


$point2247 = new Point();
$point2247->setLatitude(47.960128794228794);
$point2247->setLongitude(29.098116159439083);
$em->persist($point2247);


$waySet2247 = new WaySet();
$waySet2247->setPoint($point2247);
$waySet2247->setWay($way);
$em->persist($waySet2247);


$point2248 = new Point();
$point2248->setLatitude(47.95984141186242);
$point2248->setLongitude(29.09765481948853);
$em->persist($point2248);


$waySet2248 = new WaySet();
$waySet2248->setPoint($point2248);
$waySet2248->setWay($way);
$em->persist($waySet2248);


$point2249 = new Point();
$point2249->setLatitude(47.959683350879516);
$point2249->setLongitude(29.097070097923275);
$em->persist($point2249);


$waySet2249 = new WaySet();
$waySet2249->setPoint($point2249);
$waySet2249->setWay($way);
$em->persist($waySet2249);


$point2250 = new Point();
$point2250->setLatitude(47.959557620206866);
$point2250->setLongitude(29.095965027809143);
$em->persist($point2250);


$waySet2250 = new WaySet();
$waySet2250->setPoint($point2250);
$waySet2250->setWay($way);
$em->persist($waySet2250);


$point2251 = new Point();
$point2251->setLatitude(47.95975878913623);
$point2251->setLongitude(29.09531056880951);
$em->persist($point2251);


$waySet2251 = new WaySet();
$waySet2251->setPoint($point2251);
$waySet2251->setWay($way);
$em->persist($waySet2251);


$point2252 = new Point();
$point2252->setLatitude(47.9606317095232);
$point2252->setLongitude(29.094666838645935);
$em->persist($point2252);


$waySet2252 = new WaySet();
$waySet2252->setPoint($point2252);
$waySet2252->setWay($way);
$em->persist($waySet2252);


$point2253 = new Point();
$point2253->setLatitude(47.96304922685336);
$point2253->setLongitude(29.09456491470337);
$em->persist($point2253);


$waySet2253 = new WaySet();
$waySet2253->setPoint($point2253);
$waySet2253->setWay($way);
$em->persist($waySet2253);


$point2254 = new Point();
$point2254->setLatitude(47.96672018838143);
$point2254->setLongitude(29.09221529960632);
$em->persist($point2254);


$waySet2254 = new WaySet();
$waySet2254->setPoint($point2254);
$waySet2254->setWay($way);
$em->persist($waySet2254);


$point2255 = new Point();
$point2255->setLatitude(47.968336478146476);
$point2255->setLongitude(29.0910404920578);
$em->persist($point2255);


$waySet2255 = new WaySet();
$waySet2255->setPoint($point2255);
$waySet2255->setWay($way);
$em->persist($waySet2255);


$point2256 = new Point();
$point2256->setLatitude(47.968067100031504);
$point2256->setLongitude(29.087408781051632);
$em->persist($point2256);


$waySet2256 = new WaySet();
$waySet2256->setPoint($point2256);
$waySet2256->setWay($way);
$em->persist($waySet2256);


$point2257 = new Point();
$point2257->setLatitude(47.968882413483634);
$point2257->setLongitude(29.086115956306458);
$em->persist($point2257);


$waySet2257 = new WaySet();
$waySet2257->setPoint($point2257);
$waySet2257->setWay($way);
$em->persist($waySet2257);


$point2258 = new Point();
$point2258->setLatitude(47.97161200360615);
$point2258->setLongitude(29.082248210906982);
$em->persist($point2258);


$waySet2258 = new WaySet();
$waySet2258->setPoint($point2258);
$waySet2258->setWay($way);
$em->persist($waySet2258);


$point2259 = new Point();
$point2259->setLatitude(47.97166228417615);
$point2259->setLongitude(29.08123433589935);
$em->persist($point2259);


$waySet2259 = new WaySet();
$waySet2259->setPoint($point2259);
$waySet2259->setWay($way);
$em->persist($waySet2259);


$point2260 = new Point();
$point2260->setLatitude(47.97142883825851);
$point2260->setLongitude(29.07946407794952);
$em->persist($point2260);


$waySet2260 = new WaySet();
$waySet2260->setPoint($point2260);
$waySet2260->setWay($way);
$em->persist($waySet2260);


$point2261 = new Point();
$point2261->setLatitude(47.97091884504438);
$point2261->setLongitude(29.078723788261414);
$em->persist($point2261);


$waySet2261 = new WaySet();
$waySet2261->setPoint($point2261);
$waySet2261->setWay($way);
$em->persist($waySet2261);


$point2262 = new Point();
$point2262->setLatitude(47.97030110004001);
$point2262->setLongitude(29.078053236007687);
$em->persist($point2262);


$waySet2262 = new WaySet();
$waySet2262->setPoint($point2262);
$waySet2262->setWay($way);
$em->persist($waySet2262);


$point2263 = new Point();
$point2263->setLatitude(47.969902435096635);
$point2263->setLongitude(29.078375101089474);
$em->persist($point2263);


$waySet2263 = new WaySet();
$waySet2263->setPoint($point2263);
$waySet2263->setWay($way);
$em->persist($waySet2263);


$point2264 = new Point();
$point2264->setLatitude(47.96950735869324);
$point2264->setLongitude(29.079002737998962);
$em->persist($point2264);


$waySet2264 = new WaySet();
$waySet2264->setPoint($point2264);
$waySet2264->setWay($way);
$em->persist($waySet2264);


$point2265 = new Point();
$point2265->setLatitude(47.96913023748883);
$point2265->setLongitude(29.07928705215454);
$em->persist($point2265);


$waySet2265 = new WaySet();
$waySet2265->setPoint($point2265);
$waySet2265->setWay($way);
$em->persist($waySet2265);


$point2266 = new Point();
$point2266->setLatitude(47.968587896452824);
$point2266->setLongitude(29.078965187072754);
$em->persist($point2266);


$waySet2266 = new WaySet();
$waySet2266->setPoint($point2266);
$waySet2266->setWay($way);
$em->persist($waySet2266);


$point2267 = new Point();
$point2267->setLatitude(47.96817844315606);
$point2267->setLongitude(29.07857358455658);
$em->persist($point2267);


$waySet2267 = new WaySet();
$waySet2267->setPoint($point2267);
$waySet2267->setWay($way);
$em->persist($waySet2267);


$point2268 = new Point();
$point2268->setLatitude(47.967539114850496);
$point2268->setLongitude(29.078616499900814);
$em->persist($point2268);


$waySet2268 = new WaySet();
$waySet2268->setPoint($point2268);
$waySet2268->setWay($way);
$em->persist($waySet2268);


$point2269 = new Point();
$point2269->setLatitude(47.96695365558398);
$point2269->setLongitude(29.079437255859375);
$em->persist($point2269);


$waySet2269 = new WaySet();
$waySet2269->setPoint($point2269);
$waySet2269->setWay($way);
$em->persist($waySet2269);


$point2270 = new Point();
$point2270->setLatitude(47.96629635291682);
$point2270->setLongitude(29.08025801181793);
$em->persist($point2270);


$waySet2270 = new WaySet();
$waySet2270->setPoint($point2270);
$waySet2270->setWay($way);
$em->persist($waySet2270);


$point2271 = new Point();
$point2271->setLatitude(47.96544148775392);
$point2271->setLongitude(29.08135235309601);
$em->persist($point2271);


$waySet2271 = new WaySet();
$waySet2271->setPoint($point2271);
$waySet2271->setWay($way);
$em->persist($waySet2271);


$point2272 = new Point();
$point2272->setLatitude(47.96420226733478);
$point2272->setLongitude(29.08223211765289);
$em->persist($point2272);


$waySet2272 = new WaySet();
$waySet2272->setPoint($point2272);
$waySet2272->setWay($way);
$em->persist($waySet2272);


$point2273 = new Point();
$point2273->setLatitude(47.962172755188796);
$point2273->setLongitude(29.083439111709595);
$em->persist($point2273);


$waySet2273 = new WaySet();
$waySet2273->setPoint($point2273);
$waySet2273->setWay($way);
$em->persist($waySet2273);


$point2274 = new Point();
$point2274->setLatitude(47.961113066719406);
$point2274->setLongitude(29.083868265151978);
$em->persist($point2274);


$waySet2274 = new WaySet();
$waySet2274->setPoint($point2274);
$waySet2274->setWay($way);
$em->persist($waySet2274);


$point2275 = new Point();
$point2275->setLatitude(47.96050957340182);
$point2275->setLongitude(29.08421695232391);
$em->persist($point2275);


$waySet2275 = new WaySet();
$waySet2275->setPoint($point2275);
$waySet2275->setWay($way);
$em->persist($waySet2275);


$point2276 = new Point();
$point2276->setLatitude(47.95984141186242);
$point2276->setLongitude(29.08444762229919);
$em->persist($point2276);


$waySet2276 = new WaySet();
$waySet2276->setPoint($point2276);
$waySet2276->setWay($way);
$em->persist($waySet2276);


$point2277 = new Point();
$point2277->setLatitude(47.9594462584984);
$point2277->setLongitude(29.084646105766296);
$em->persist($point2277);


$waySet2277 = new WaySet();
$waySet2277->setPoint($point2277);
$waySet2277->setWay($way);
$em->persist($waySet2277);


$point2278 = new Point();
$point2278->setLatitude(47.95916964934524);
$point2278->setLongitude(29.084737300872803);
$em->persist($point2278);


$waySet2278 = new WaySet();
$waySet2278->setPoint($point2278);
$waySet2278->setWay($way);
$em->persist($waySet2278);


$point2279 = new Point();
$point2279->setLatitude(47.95648610445091);
$point2279->setLongitude(29.08519327640533);
$em->persist($point2279);


$waySet2279 = new WaySet();
$waySet2279->setPoint($point2279);
$waySet2279->setWay($way);
$em->persist($waySet2279);


$point2280 = new Point();
$point2280->setLatitude(47.9503533039768);
$point2280->setLongitude(29.08608376979828);
$em->persist($point2280);


$waySet2280 = new WaySet();
$waySet2280->setPoint($point2280);
$waySet2280->setWay($way);
$em->persist($waySet2280);


$point2281 = new Point();
$point2281->setLatitude(47.94668117936754);
$point2281->setLongitude(29.086765050888058);
$em->persist($point2281);


$waySet2281 = new WaySet();
$waySet2281->setPoint($point2281);
$waySet2281->setWay($way);
$em->persist($waySet2281);


$point2282 = new Point();
$point2282->setLatitude(47.945754124276206);
$point2282->setLongitude(29.079726934432987);
$em->persist($point2282);


$waySet2282 = new WaySet();
$waySet2282->setPoint($point2282);
$waySet2282->setWay($way);
$em->persist($waySet2282);


$point2283 = new Point();
$point2283->setLatitude(47.943896370812375);
$point2283->setLongitude(29.073756337165833);
$em->persist($point2283);


$waySet2283 = new WaySet();
$waySet2283->setPoint($point2283);
$waySet2283->setWay($way);
$em->persist($waySet2283);


$point2284 = new Point();
$point2284->setLatitude(47.94316331238999);
$point2284->setLongitude(29.063998460769653);
$em->persist($point2284);


$waySet2284 = new WaySet();
$waySet2284->setPoint($point2284);
$waySet2284->setWay($way);
$em->persist($waySet2284);


$point2285 = new Point();
$point2285->setLatitude(47.94264225964169);
$point2285->setLongitude(29.056928157806396);
$em->persist($point2285);


$waySet2285 = new WaySet();
$waySet2285->setPoint($point2285);
$waySet2285->setWay($way);
$em->persist($waySet2285);


$point2286 = new Point();
$point2286->setLatitude(47.94274287713329);
$point2286->setLongitude(29.052223563194275);
$em->persist($point2286);


$waySet2286 = new WaySet();
$waySet2286->setPoint($point2286);
$waySet2286->setWay($way);
$em->persist($waySet2286);


$point2287 = new Point();
$point2287->setLatitude(47.94427367624208);
$point2287->setLongitude(29.048243165016178);
$em->persist($point2287);


$waySet2287 = new WaySet();
$waySet2287->setPoint($point2287);
$waySet2287->setWay($way);
$em->persist($waySet2287);


$point2288 = new Point();
$point2288->setLatitude(47.94510373849314);
$point2288->setLongitude(29.045920372009277);
$em->persist($point2288);


$waySet2288 = new WaySet();
$waySet2288->setPoint($point2288);
$waySet2288->setWay($way);
$em->persist($waySet2288);


$point2289 = new Point();
$point2289->setLatitude(47.946027211999706);
$point2289->setLongitude(29.04364585876465);
$em->persist($point2289);


$waySet2289 = new WaySet();
$waySet2289->setPoint($point2289);
$waySet2289->setWay($way);
$em->persist($waySet2289);


$point2290 = new Point();
$point2290->setLatitude(47.946713518198486);
$point2290->setLongitude(29.041521549224854);
$em->persist($point2290);


$waySet2290 = new WaySet();
$waySet2290->setPoint($point2290);
$waySet2290->setWay($way);
$em->persist($waySet2290);


$point2291 = new Point();
$point2291->setLatitude(47.94719141189713);
$point2291->setLongitude(29.040325284004208);
$em->persist($point2291);


$waySet2291 = new WaySet();
$waySet2291->setPoint($point2291);
$waySet2291->setWay($way);
$em->persist($waySet2291);


$point2292 = new Point();
$point2292->setLatitude(47.94787770263735);
$point2292->setLongitude(29.036849141120907);
$em->persist($point2292);


$waySet2292 = new WaySet();
$waySet2292->setPoint($point2292);
$waySet2292->setWay($way);
$em->persist($waySet2292);


$point2293 = new Point();
$point2293->setLatitude(47.9456571059218);
$point2293->setLongitude(29.0355509519577);
$em->persist($point2293);


$waySet2293 = new WaySet();
$waySet2293->setPoint($point2293);
$waySet2293->setWay($way);
$em->persist($waySet2293);


$point2294 = new Point();
$point2294->setLatitude(47.944155094832375);
$point2294->setLongitude(29.034456610679626);
$em->persist($point2294);


$waySet2294 = new WaySet();
$waySet2294->setPoint($point2294);
$waySet2294->setWay($way);
$em->persist($waySet2294);


$point2295 = new Point();
$point2295->setLatitude(47.94316690583899);
$point2295->setLongitude(29.03344810009003);
$em->persist($point2295);


$waySet2295 = new WaySet();
$waySet2295->setPoint($point2295);
$waySet2295->setWay($way);
$em->persist($waySet2295);


$point2296 = new Point();
$point2296->setLatitude(47.9426458531269);
$point2296->setLongitude(29.03263807296753);
$em->persist($point2296);


$waySet2296 = new WaySet();
$waySet2296->setPoint($point2296);
$waySet2296->setWay($way);
$em->persist($waySet2296);


$point2297 = new Point();
$point2297->setLatitude(47.944327576792936);
$point2297->setLongitude(29.028764963150028);
$em->persist($point2297);


$waySet2297 = new WaySet();
$waySet2297->setPoint($point2297);
$waySet2297->setWay($way);
$em->persist($waySet2297);


$point2298 = new Point();
$point2298->setLatitude(47.945477441821716);
$point2298->setLongitude(29.026184678077694);
$em->persist($point2298);


$waySet2298 = new WaySet();
$waySet2298->setPoint($point2298);
$waySet2298->setWay($way);
$em->persist($waySet2298);


$point2299 = new Point();
$point2299->setLatitude(47.946170941800986);
$point2299->setLongitude(29.02514398097992);
$em->persist($point2299);


$waySet2299 = new WaySet();
$waySet2299->setPoint($point2299);
$waySet2299->setWay($way);
$em->persist($waySet2299);


$point2300 = new Point();
$point2300->setLatitude(47.94706205764794);
$point2300->setLongitude(29.024328589439392);
$em->persist($point2300);


$waySet2300 = new WaySet();
$waySet2300->setPoint($point2300);
$waySet2300->setWay($way);
$em->persist($waySet2300);


$point2301 = new Point();
$point2301->setLatitude(47.94828013066529);
$point2301->setLongitude(29.02331471443176);
$em->persist($point2301);


$waySet2301 = new WaySet();
$waySet2301->setPoint($point2301);
$waySet2301->setWay($way);
$em->persist($waySet2301);


$point2302 = new Point();
$point2302->setLatitude(47.949839509677034);
$point2302->setLongitude(29.021013379096985);
$em->persist($point2302);


$waySet2302 = new WaySet();
$waySet2302->setPoint($point2302);
$waySet2302->setWay($way);
$em->persist($waySet2302);


$point2303 = new Point();
$point2303->setLatitude(47.95080242068411);
$point2303->setLongitude(29.019205570220944);
$em->persist($point2303);


$waySet2303 = new WaySet();
$waySet2303->setPoint($point2303);
$waySet2303->setWay($way);
$em->persist($waySet2303);


$point2304 = new Point();
$point2304->setLatitude(47.952214418186045);
$point2304->setLongitude(29.01738703250885);
$em->persist($point2304);


$waySet2304 = new WaySet();
$waySet2304->setPoint($point2304);
$waySet2304->setWay($way);
$em->persist($waySet2304);


$point2305 = new Point();
$point2305->setLatitude(47.95401438959514);
$point2305->setLongitude(29.015702605247498);
$em->persist($point2305);


$waySet2305 = new WaySet();
$waySet2305->setPoint($point2305);
$waySet2305->setWay($way);
$em->persist($waySet2305);


$point2306 = new Point();
$point2306->setLatitude(47.95470777502584);
$point2306->setLongitude(29.01486039161682);
$em->persist($point2306);


$waySet2306 = new WaySet();
$waySet2306->setPoint($point2306);
$waySet2306->setWay($way);
$em->persist($waySet2306);


$point2307 = new Point();
$point2307->setLatitude(47.95624899739718);
$point2307->setLongitude(29.012451767921448);
$em->persist($point2307);


$waySet2307 = new WaySet();
$waySet2307->setPoint($point2307);
$waySet2307->setWay($way);
$em->persist($waySet2307);


$point2308 = new Point();
$point2308->setLatitude(47.95669087784893);
$point2308->setLongitude(29.011073112487793);
$em->persist($point2308);


$waySet2308 = new WaySet();
$waySet2308->setPoint($point2308);
$waySet2308->setWay($way);
$em->persist($waySet2308);


$point2309 = new Point();
$point2309->setLatitude(47.95715790186086);
$point2309->setLongitude(29.009184837341305);
$em->persist($point2309);


$waySet2309 = new WaySet();
$waySet2309->setPoint($point2309);
$waySet2309->setWay($way);
$em->persist($waySet2309);


$point2310 = new Point();
$point2310->setLatitude(47.95698187022899);
$point2310->setLongitude(29.007500410079953);
$em->persist($point2310);


$waySet2310 = new WaySet();
$waySet2310->setPoint($point2310);
$waySet2310->setWay($way);
$em->persist($waySet2310);


$point2311 = new Point();
$point2311->setLatitude(47.95789794665042);
$point2311->setLongitude(29.002919197082516);
$em->persist($point2311);


$waySet2311 = new WaySet();
$waySet2311->setPoint($point2311);
$waySet2311->setWay($way);
$em->persist($waySet2311);


$point2312 = new Point();
$point2312->setLatitude(47.95809193722039);
$point2312->setLongitude(29.001749753952023);
$em->persist($point2312);


$waySet2312 = new WaySet();
$waySet2312->setPoint($point2312);
$waySet2312->setWay($way);
$em->persist($waySet2312);


$point2313 = new Point();
$point2313->setLatitude(47.964083731649815);
$point2313->setLongitude(28.99665892124176);
$em->persist($point2313);


$waySet2313 = new WaySet();
$waySet2313->setPoint($point2313);
$waySet2313->setWay($way);
$em->persist($waySet2313);


$point2314 = new Point();
$point2314->setLatitude(47.96171655298705);
$point2314->setLongitude(28.993381261825558);
$em->persist($point2314);


$waySet2314 = new WaySet();
$waySet2314->setPoint($point2314);
$waySet2314->setWay($way);
$em->persist($waySet2314);


$point2315 = new Point();
$point2315->setLatitude(47.965093072263635);
$point2315->setLongitude(28.98890197277069);
$em->persist($point2315);


$waySet2315 = new WaySet();
$waySet2315->setPoint($point2315);
$waySet2315->setWay($way);
$em->persist($waySet2315);


$point2316 = new Point();
$point2316->setLatitude(47.96557438788874);
$point2316->setLongitude(28.987727165222168);
$em->persist($point2316);


$waySet2316 = new WaySet();
$waySet2316->setPoint($point2316);
$waySet2316->setWay($way);
$em->persist($waySet2316);


$point2317 = new Point();
$point2317->setLatitude(47.966996757105974);
$point2317->setLongitude(28.98601055145264);
$em->persist($point2317);


$waySet2317 = new WaySet();
$waySet2317->setPoint($point2317);
$waySet2317->setWay($way);
$em->persist($waySet2317);


$point2318 = new Point();
$point2318->setLatitude(47.96768278482203);
$point2318->setLongitude(28.984991312026974);
$em->persist($point2318);


$waySet2318 = new WaySet();
$waySet2318->setPoint($point2318);
$waySet2318->setWay($way);
$em->persist($waySet2318);


$point2319 = new Point();
$point2319->setLatitude(47.968397536990544);
$point2319->setLongitude(28.983210325241085);
$em->persist($point2319);


$waySet2319 = new WaySet();
$waySet2319->setPoint($point2319);
$waySet2319->setWay($way);
$em->persist($waySet2319);


$point2320 = new Point();
$point2320->setLatitude(47.96926312813221);
$point2320->setLongitude(28.98195505142212);
$em->persist($point2320);


$waySet2320 = new WaySet();
$waySet2320->setPoint($point2320);
$waySet2320->setWay($way);
$em->persist($waySet2320);


$point2321 = new Point();
$point2321->setLatitude(47.9700389153336);
$point2321->setLongitude(28.980528116226193);
$em->persist($point2321);


$waySet2321 = new WaySet();
$waySet2321->setPoint($point2321);
$waySet2321->setWay($way);
$em->persist($waySet2321);


$point2322 = new Point();
$point2322->setLatitude(47.97136778299827);
$point2322->setLongitude(28.978307247161865);
$em->persist($point2322);


$waySet2322 = new WaySet();
$waySet2322->setPoint($point2322);
$waySet2322->setWay($way);
$em->persist($waySet2322);


$point2323 = new Point();
$point2323->setLatitude(47.97351185683495);
$point2323->setLongitude(28.974203467369076);
$em->persist($point2323);


$waySet2323 = new WaySet();
$waySet2323->setPoint($point2323);
$waySet2323->setWay($way);
$em->persist($waySet2323);


$point2324 = new Point();
$point2324->setLatitude(47.97520334975352);
$point2324->setLongitude(28.9704430103302);
$em->persist($point2324);


$waySet2324 = new WaySet();
$waySet2324->setPoint($point2324);
$waySet2324->setWay($way);
$em->persist($waySet2324);


$point2325 = new Point();
$point2325->setLatitude(47.97754118186688);
$point2325->setLongitude(28.965250253677365);
$em->persist($point2325);


$waySet2325 = new WaySet();
$waySet2325->setPoint($point2325);
$waySet2325->setWay($way);
$em->persist($waySet2325);


$point2326 = new Point();
$point2326->setLatitude(47.97919304242392);
$point2326->setLongitude(28.961597084999088);
$em->persist($point2326);


$waySet2326 = new WaySet();
$waySet2326->setPoint($point2326);
$waySet2326->setWay($way);
$em->persist($waySet2326);


$point2327 = new Point();
$point2327->setLatitude(47.976313025198586);
$point2327->setLongitude(28.957300186157227);
$em->persist($point2327);


$waySet2327 = new WaySet();
$waySet2327->setPoint($point2327);
$waySet2327->setWay($way);
$em->persist($waySet2327);


$point2328 = new Point();
$point2328->setLatitude(47.97522489707658);
$point2328->setLongitude(28.955685496330265);
$em->persist($point2328);


$waySet2328 = new WaySet();
$waySet2328->setPoint($point2328);
$waySet2328->setWay($way);
$em->persist($waySet2328);


$point2329 = new Point();
$point2329->setLatitude(47.97343284731862);
$point2329->setLongitude(28.952407836914062);
$em->persist($point2329);


$waySet2329 = new WaySet();
$waySet2329->setPoint($point2329);
$waySet2329->setWay($way);
$em->persist($waySet2329);


$point2330 = new Point();
$point2330->setLatitude(47.97264274550633);
$point2330->setLongitude(28.950862884521484);
$em->persist($point2330);


$waySet2330 = new WaySet();
$waySet2330->setPoint($point2330);
$waySet2330->setWay($way);
$em->persist($waySet2330);


$point2331 = new Point();
$point2331->setLatitude(47.97105891410485);
$point2331->setLongitude(28.94769251346588);
$em->persist($point2331);


$waySet2331 = new WaySet();
$waySet2331->setPoint($point2331);
$waySet2331->setWay($way);
$em->persist($waySet2331);


$point2332 = new Point();
$point2332->setLatitude(47.96961510710299);
$point2332->setLongitude(28.944677710533142);
$em->persist($point2332);


$waySet2332 = new WaySet();
$waySet2332->setPoint($point2332);
$waySet2332->setWay($way);
$em->persist($waySet2332);


$point2333 = new Point();
$point2333->setLatitude(47.9678013122477);
$point2333->setLongitude(28.940895795822144);
$em->persist($point2333);


$waySet2333 = new WaySet();
$waySet2333->setPoint($point2333);
$waySet2333->setWay($way);
$em->persist($waySet2333);


$point2334 = new Point();
$point2334->setLatitude(47.96618500573484);
$point2334->setLongitude(28.937532305717465);
$em->persist($point2334);


$waySet2334 = new WaySet();
$waySet2334->setPoint($point2334);
$waySet2334->setWay($way);
$em->persist($waySet2334);


$point2335 = new Point();
$point2335->setLatitude(47.96411605959088);
$point2335->setLongitude(28.93353044986725);
$em->persist($point2335);


$waySet2335 = new WaySet();
$waySet2335->setPoint($point2335);
$waySet2335->setWay($way);
$em->persist($waySet2335);


$point2336 = new Point();
$point2336->setLatitude(47.96196081923392);
$point2336->setLongitude(28.929356932640072);
$em->persist($point2336);


$waySet2336 = new WaySet();
$waySet2336->setPoint($point2336);
$waySet2336->setWay($way);
$em->persist($waySet2336);


$point2337 = new Point();
$point2337->setLatitude(47.9601467555736);
$point2337->setLongitude(28.925853967666626);
$em->persist($point2337);


$waySet2337 = new WaySet();
$waySet2337->setPoint($point2337);
$waySet2337->setWay($way);
$em->persist($waySet2337);


$point2338 = new Point();
$point2338->setLatitude(47.962434979827805);
$point2338->setLongitude(28.92280161380768);
$em->persist($point2338);


$waySet2338 = new WaySet();
$waySet2338->setPoint($point2338);
$waySet2338->setWay($way);
$em->persist($waySet2338);


$point2339 = new Point();
$point2339->setLatitude(47.965761165878575);
$point2339->setLongitude(28.918933868408207);
$em->persist($point2339);


$waySet2339 = new WaySet();
$waySet2339->setPoint($point2339);
$waySet2339->setWay($way);
$em->persist($waySet2339);


$point2340 = new Point();
$point2340->setLatitude(47.96765405085969);
$point2340->setLongitude(28.916718363761905);
$em->persist($point2340);


$waySet2340 = new WaySet();
$waySet2340->setPoint($point2340);
$waySet2340->setWay($way);
$em->persist($waySet2340);


$point2341 = new Point();
$point2341->setLatitude(47.968117384052974);
$point2341->setLongitude(28.916149735450745);
$em->persist($point2341);


$waySet2341 = new WaySet();
$waySet2341->setPoint($point2341);
$waySet2341->setWay($way);
$em->persist($waySet2341);


$point2342 = new Point();
$point2342->setLatitude(47.97019335306151);
$point2342->setLongitude(28.913639187812805);
$em->persist($point2342);


$waySet2342 = new WaySet();
$waySet2342->setPoint($point2342);
$waySet2342->setWay($way);
$em->persist($waySet2342);


$point2343 = new Point();
$point2343->setLatitude(47.9722440986398);
$point2343->setLongitude(28.911278843879703);
$em->persist($point2343);


$waySet2343 = new WaySet();
$waySet2343->setPoint($point2343);
$waySet2343->setWay($way);
$em->persist($waySet2343);


$point2344 = new Point();
$point2344->setLatitude(47.97438813609219);
$point2344->setLongitude(28.90879511833191);
$em->persist($point2344);


$waySet2344 = new WaySet();
$waySet2344->setPoint($point2344);
$waySet2344->setWay($way);
$em->persist($waySet2344);


$point2345 = new Point();
$point2345->setLatitude(47.97632020748625);
$point2345->setLongitude(28.906542062759396);
$em->persist($point2345);


$waySet2345 = new WaySet();
$waySet2345->setPoint($point2345);
$waySet2345->setWay($way);
$em->persist($waySet2345);


$point2346 = new Point();
$point2346->setLatitude(47.97843893872611);
$point2346->setLongitude(28.903902769088745);
$em->persist($point2346);


$waySet2346 = new WaySet();
$waySet2346->setPoint($point2346);
$waySet2346->setWay($way);
$em->persist($waySet2346);


$point2347 = new Point();
$point2347->setLatitude(47.979307952496484);
$point2347->setLongitude(28.903098106384274);
$em->persist($point2347);


$waySet2347 = new WaySet();
$waySet2347->setPoint($point2347);
$waySet2347->setWay($way);
$em->persist($waySet2347);


$point2348 = new Point();
$point2348->setLatitude(47.98262587052577);
$point2348->setLongitude(28.898828029632565);
$em->persist($point2348);


$waySet2348 = new WaySet();
$waySet2348->setPoint($point2348);
$waySet2348->setWay($way);
$em->persist($waySet2348);


$point2349 = new Point();
$point2349->setLatitude(47.9867478352655);
$point2349->setLongitude(28.89357626438141);
$em->persist($point2349);


$waySet2349 = new WaySet();
$waySet2349->setPoint($point2349);
$waySet2349->setWay($way);
$em->persist($waySet2349);


$point2350 = new Point();
$point2350->setLatitude(47.98769569698114);
$point2350->setLongitude(28.892379999160767);
$em->persist($point2350);


$waySet2350 = new WaySet();
$waySet2350->setPoint($point2350);
$waySet2350->setWay($way);
$em->persist($waySet2350);


$point2351 = new Point();
$point2351->setLatitude(47.992614245269);
$point2351->setLongitude(28.88620018959045);
$em->persist($point2351);


$waySet2351 = new WaySet();
$waySet2351->setPoint($point2351);
$waySet2351->setWay($way);
$em->persist($waySet2351);


$point2352 = new Point();
$point2352->setLatitude(47.99378457530531);
$point2352->setLongitude(28.88469815254211);
$em->persist($point2352);


$waySet2352 = new WaySet();
$waySet2352->setPoint($point2352);
$waySet2352->setWay($way);
$em->persist($waySet2352);


$point2353 = new Point();
$point2353->setLatitude(47.99543232628124);
$point2353->setLongitude(28.882498741149902);
$em->persist($point2353);


$waySet2353 = new WaySet();
$waySet2353->setPoint($point2353);
$waySet2353->setWay($way);
$em->persist($waySet2353);


$point2354 = new Point();
$point2354->setLatitude(47.99832922492445);
$point2354->setLongitude(28.880240321159363);
$em->persist($point2354);


$waySet2354 = new WaySet();
$waySet2354->setPoint($point2354);
$waySet2354->setWay($way);
$em->persist($waySet2354);


$point2355 = new Point();
$point2355->setLatitude(48.00080958756176);
$point2355->setLongitude(28.87766003608704);
$em->persist($point2355);


$waySet2355 = new WaySet();
$waySet2355->setPoint($point2355);
$waySet2355->setWay($way);
$em->persist($waySet2355);


$point2356 = new Point();
$point2356->setLatitude(48.00190435513279);
$point2356->setLongitude(28.881216645240784);
$em->persist($point2356);


$waySet2356 = new WaySet();
$waySet2356->setPoint($point2356);
$waySet2356->setWay($way);
$em->persist($waySet2356);


$point2357 = new Point();
$point2357->setLatitude(48.003153438607285);
$point2357->setLongitude(28.88382911682129);
$em->persist($point2357);


$waySet2357 = new WaySet();
$waySet2357->setPoint($point2357);
$waySet2357->setWay($way);
$em->persist($waySet2357);


$point2358 = new Point();
$point2358->setLatitude(48.00378514746883);
$point2358->setLongitude(28.88503611087799);
$em->persist($point2358);


$waySet2358 = new WaySet();
$waySet2358->setPoint($point2358);
$waySet2358->setWay($way);
$em->persist($waySet2358);


$point2359 = new Point();
$point2359->setLatitude(48.00522440978889);
$point2359->setLongitude(28.886543512344364);
$em->persist($point2359);


$waySet2359 = new WaySet();
$waySet2359->setPoint($point2359);
$waySet2359->setWay($way);
$em->persist($waySet2359);


$point2360 = new Point();
$point2360->setLatitude(48.006139630525084);
$point2360->setLongitude(28.88732135295868);
$em->persist($point2360);


$waySet2360 = new WaySet();
$waySet2360->setPoint($point2360);
$waySet2360->setWay($way);
$em->persist($waySet2360);


$point2361 = new Point();
$point2361->setLatitude(48.00813511433315);
$point2361->setLongitude(28.88421535491943);
$em->persist($point2361);


$waySet2361 = new WaySet();
$waySet2361->setPoint($point2361);
$waySet2361->setWay($way);
$em->persist($waySet2361);


$point2362 = new Point();
$point2362->setLatitude(48.01182799131695);
$point2362->setLongitude(28.890116214752194);
$em->persist($point2362);


$waySet2362 = new WaySet();
$waySet2362->setPoint($point2362);
$waySet2362->setWay($way);
$em->persist($waySet2362);


$point2363 = new Point();
$point2363->setLatitude(48.00976805173441);
$point2363->setLongitude(28.89333486557007);
$em->persist($point2363);


$waySet2363 = new WaySet();
$waySet2363->setPoint($point2363);
$waySet2363->setWay($way);
$em->persist($waySet2363);


$point2364 = new Point();
$point2364->setLatitude(48.00958502176339);
$point2364->setLongitude(28.89484226703644);
$em->persist($point2364);


$waySet2364 = new WaySet();
$waySet2364->setPoint($point2364);
$waySet2364->setWay($way);
$em->persist($waySet2364);


$point2365 = new Point();
$point2365->setLatitude(48.01023818456519);
$point2365->setLongitude(28.900979161262512);
$em->persist($point2365);


$waySet2365 = new WaySet();
$waySet2365->setPoint($point2365);
$waySet2365->setWay($way);
$em->persist($waySet2365);


$point2366 = new Point();
$point2366->setLatitude(48.012563664083835);
$point2366->setLongitude(28.901891112327572);
$em->persist($point2366);


$waySet2366 = new WaySet();
$waySet2366->setPoint($point2366);
$waySet2366->setWay($way);
$em->persist($waySet2366);


$point2367 = new Point();
$point2367->setLatitude(48.01195718339182);
$point2367->setLongitude(28.89997601509094);
$em->persist($point2367);


$waySet2367 = new WaySet();
$waySet2367->setPoint($point2367);
$waySet2367->setWay($way);
$em->persist($waySet2367);


$point2368 = new Point();
$point2368->setLatitude(48.01199665868346);
$point2368->setLongitude(28.899133801460266);
$em->persist($point2368);


$waySet2368 = new WaySet();
$waySet2368->setPoint($point2368);
$waySet2368->setWay($way);
$em->persist($waySet2368);


$point2369 = new Point();
$point2369->setLatitude(48.01297276537419);
$point2369->setLongitude(28.897095322608944);
$em->persist($point2369);


$waySet2369 = new WaySet();
$waySet2369->setPoint($point2369);
$waySet2369->setWay($way);
$em->persist($waySet2369);


$point2370 = new Point();
$point2370->setLatitude(48.01282204422376);
$point2370->setLongitude(28.89601171016693);
$em->persist($point2370);


$waySet2370 = new WaySet();
$waySet2370->setPoint($point2370);
$waySet2370->setWay($way);
$em->persist($waySet2370);


$point2371 = new Point();
$point2371->setLatitude(48.01266414540319);
$point2371->setLongitude(28.895604014396664);
$em->persist($point2371);


$waySet2371 = new WaySet();
$waySet2371->setPoint($point2371);
$waySet2371->setWay($way);
$em->persist($waySet2371);


$point2372 = new Point();
$point2372->setLatitude(48.012714385989455);
$point2372->setLongitude(28.89392495155334);
$em->persist($point2372);


$waySet2372 = new WaySet();
$waySet2372->setPoint($point2372);
$waySet2372->setWay($way);
$em->persist($waySet2372);


$point2373 = new Point();
$point2373->setLatitude(48.01321678915988);
$point2373->setLongitude(28.89231562614441);
$em->persist($point2373);


$waySet2373 = new WaySet();
$waySet2373->setPoint($point2373);
$waySet2373->setWay($way);
$em->persist($waySet2373);


$point2374 = new Point();
$point2374->setLatitude(48.013780192607015);
$point2374->setLongitude(28.89100134372711);
$em->persist($point2374);


$waySet2374 = new WaySet();
$waySet2374->setPoint($point2374);
$waySet2374->setWay($way);
$em->persist($waySet2374);


$point2375 = new Point();
$point2375->setLatitude(48.01400626996658);
$point2375->setLongitude(28.890309333801266);
$em->persist($point2375);


$waySet2375 = new WaySet();
$waySet2375->setPoint($point2375);
$waySet2375->setWay($way);
$em->persist($waySet2375);


$point2376 = new Point();
$point2376->setLatitude(48.01371559889363);
$point2376->setLongitude(28.88867855072022);
$em->persist($point2376);


$waySet2376 = new WaySet();
$waySet2376->setPoint($point2376);
$waySet2376->setWay($way);
$em->persist($waySet2376);


$point2377 = new Point();
$point2377->setLatitude(48.01329573778448);
$point2377->setLongitude(28.88728380203247);
$em->persist($point2377);


$waySet2377 = new WaySet();
$waySet2377->setPoint($point2377);
$waySet2377->setWay($way);
$em->persist($waySet2377);


$point2378 = new Point();
$point2378->setLatitude(48.01251342335074);
$point2378->setLongitude(28.886076807975765);
$em->persist($point2378);


$waySet2378 = new WaySet();
$waySet2378->setPoint($point2378);
$waySet2378->setWay($way);
$em->persist($waySet2378);


$point2379 = new Point();
$point2379->setLatitude(48.01034943674537);
$point2379->setLongitude(28.883078098297116);
$em->persist($point2379);


$waySet2379 = new WaySet();
$waySet2379->setPoint($point2379);
$waySet2379->setWay($way);
$em->persist($waySet2379);


$point2380 = new Point();
$point2380->setLatitude(48.011906942067824);
$point2380->setLongitude(28.879532217979428);
$em->persist($point2380);


$waySet2380 = new WaySet();
$waySet2380->setPoint($point2380);
$waySet2380->setWay($way);
$em->persist($waySet2380);


$point2381 = new Point();
$point2381->setLatitude(48.013984738832185);
$point2381->setLongitude(28.875090479850765);
$em->persist($point2381);


$waySet2381 = new WaySet();
$waySet2381->setPoint($point2381);
$waySet2381->setWay($way);
$em->persist($waySet2381);


$point2382 = new Point();
$point2382->setLatitude(48.01471679235796);
$point2382->setLongitude(28.873540163040158);
$em->persist($point2382);


$waySet2382 = new WaySet();
$waySet2382->setPoint($point2382);
$waySet2382->setWay($way);
$em->persist($waySet2382);


$point2383 = new Point();
$point2383->setLatitude(48.017953492691035);
$point2383->setLongitude(28.867773413658142);
$em->persist($point2383);


$waySet2383 = new WaySet();
$waySet2383->setPoint($point2383);
$waySet2383->setWay($way);
$em->persist($waySet2383);


$point2384 = new Point();
$point2384->setLatitude(48.019090954423376);
$point2384->setLongitude(28.86884093284607);
$em->persist($point2384);


$waySet2384 = new WaySet();
$waySet2384->setPoint($point2384);
$waySet2384->setWay($way);
$em->persist($waySet2384);


$point2385 = new Point();
$point2385->setLatitude(48.02109311316283);
$point2385->setLongitude(28.864157795906067);
$em->persist($point2385);


$waySet2385 = new WaySet();
$waySet2385->setPoint($point2385);
$waySet2385->setWay($way);
$em->persist($waySet2385);


$point2386 = new Point();
$point2386->setLatitude(48.021121817382245);
$point2386->setLongitude(28.86114299297333);
$em->persist($point2386);


$waySet2386 = new WaySet();
$waySet2386->setPoint($point2386);
$waySet2386->setWay($way);
$em->persist($waySet2386);


$point2387 = new Point();
$point2387->setLatitude(48.02098547219774);
$point2387->setLongitude(28.86032223701477);
$em->persist($point2387);


$waySet2387 = new WaySet();
$waySet2387->setPoint($point2387);
$waySet2387->setWay($way);
$em->persist($waySet2387);


$point2388 = new Point();
$point2388->setLatitude(48.01977270179291);
$point2388->setLongitude(28.857457637786865);
$em->persist($point2388);


$waySet2388 = new WaySet();
$waySet2388->setPoint($point2388);
$waySet2388->setWay($way);
$em->persist($waySet2388);


$point2389 = new Point();
$point2389->setLatitude(48.01977270179291);
$point2389->setLongitude(28.856808543205258);
$em->persist($point2389);


$waySet2389 = new WaySet();
$waySet2389->setPoint($point2389);
$waySet2389->setWay($way);
$em->persist($waySet2389);


$point2390 = new Point();
$point2390->setLatitude(48.020181745887264);
$point2390->setLongitude(28.856202363967896);
$em->persist($point2390);


$waySet2390 = new WaySet();
$waySet2390->setPoint($point2390);
$waySet2390->setWay($way);
$em->persist($waySet2390);


$point2391 = new Point();
$point2391->setLatitude(48.02101776451086);
$point2391->setLongitude(28.855987787246704);
$em->persist($point2391);


$waySet2391 = new WaySet();
$waySet2391->setPoint($point2391);
$waySet2391->setWay($way);
$em->persist($waySet2391);


$point2392 = new Point();
$point2392->setLatitude(48.02704889626944);
$point2392->setLongitude(28.855853676795956);
$em->persist($point2392);


$waySet2392 = new WaySet();
$waySet2392->setPoint($point2392);
$waySet2392->setWay($way);
$em->persist($waySet2392);


$point2393 = new Point();
$point2393->setLatitude(48.02916195752406);
$point2393->setLongitude(28.851272463798527);
$em->persist($point2393);


$waySet2393 = new WaySet();
$waySet2393->setPoint($point2393);
$waySet2393->setWay($way);
$em->persist($waySet2393);


$point2394 = new Point();
$point2394->setLatitude(48.03134309117338);
$point2394->setLongitude(28.846771717071533);
$em->persist($point2394);


$waySet2394 = new WaySet();
$waySet2394->setPoint($point2394);
$waySet2394->setWay($way);
$em->persist($waySet2394);


$point2395 = new Point();
$point2395->setLatitude(48.033556416967514);
$point2395->setLongitude(28.84226560592651);
$em->persist($point2395);


$waySet2395 = new WaySet();
$waySet2395->setPoint($point2395);
$waySet2395->setWay($way);
$em->persist($waySet2395);


$point2396 = new Point();
$point2396->setLatitude(48.03495180365479);
$point2396->setLongitude(28.839449286460876);
$em->persist($point2396);


$waySet2396 = new WaySet();
$waySet2396->setPoint($point2396);
$waySet2396->setWay($way);
$em->persist($waySet2396);


$point2397 = new Point();
$point2397->setLatitude(48.03948923947939);
$point2397->setLongitude(28.842158317565918);
$em->persist($point2397);


$waySet2397 = new WaySet();
$waySet2397->setPoint($point2397);
$waySet2397->setWay($way);
$em->persist($waySet2397);


$point2398 = new Point();
$point2398->setLatitude(48.04368914999735);
$point2398->setLongitude(28.844658136367798);
$em->persist($point2398);


$waySet2398 = new WaySet();
$waySet2398->setPoint($point2398);
$waySet2398->setWay($way);
$em->persist($waySet2398);


$point2399 = new Point();
$point2399->setLatitude(48.04734003223686);
$point2399->setLongitude(28.84682536125183);
$em->persist($point2399);


$waySet2399 = new WaySet();
$waySet2399->setPoint($point2399);
$waySet2399->setWay($way);
$em->persist($waySet2399);


$point2400 = new Point();
$point2400->setLatitude(48.047716581989285);
$point2400->setLongitude(28.847061395645138);
$em->persist($point2400);


$waySet2400 = new WaySet();
$waySet2400->setPoint($point2400);
$waySet2400->setWay($way);
$em->persist($waySet2400);


$point2401 = new Point();
$point2401->setLatitude(48.05095838216549);
$point2401->setLongitude(28.84860634803772);
$em->persist($point2401);


$waySet2401 = new WaySet();
$waySet2401->setPoint($point2401);
$waySet2401->setWay($way);
$em->persist($waySet2401);


$point2402 = new Point();
$point2402->setLatitude(48.05323182382121);
$point2402->setLongitude(28.849689960479733);
$em->persist($point2402);


$waySet2402 = new WaySet();
$waySet2402->setPoint($point2402);
$waySet2402->setWay($way);
$em->persist($waySet2402);


$point2403 = new Point();
$point2403->setLatitude(48.05684258871746);
$point2403->setLongitude(28.850805759429928);
$em->persist($point2403);


$waySet2403 = new WaySet();
$waySet2403->setPoint($point2403);
$waySet2403->setWay($way);
$em->persist($waySet2403);


$point2404 = new Point();
$point2404->setLatitude(48.060858236365334);
$point2404->setLongitude(28.852023482322693);
$em->persist($point2404);


$waySet2404 = new WaySet();
$waySet2404->setPoint($point2404);
$waySet2404->setWay($way);
$em->persist($waySet2404);


$point2405 = new Point();
$point2405->setLatitude(48.06394863759453);
$point2405->setLongitude(28.84673953056335);
$em->persist($point2405);


$waySet2405 = new WaySet();
$waySet2405->setPoint($point2405);
$waySet2405->setWay($way);
$em->persist($waySet2405);


$point2406 = new Point();
$point2406->setLatitude(48.06566226039795);
$point2406->setLongitude(28.843815922737118);
$em->persist($point2406);


$waySet2406 = new WaySet();
$waySet2406->setPoint($point2406);
$waySet2406->setWay($way);
$em->persist($waySet2406);


$point2407 = new Point();
$point2407->setLatitude(48.06887425321125);
$point2407->setLongitude(28.847742676734924);
$em->persist($point2407);


$waySet2407 = new WaySet();
$waySet2407->setPoint($point2407);
$waySet2407->setWay($way);
$em->persist($waySet2407);


$point2408 = new Point();
$point2408->setLatitude(48.07052318950622);
$point2408->setLongitude(28.84977042675018);
$em->persist($point2408);


$waySet2408 = new WaySet();
$waySet2408->setPoint($point2408);
$waySet2408->setWay($way);
$em->persist($waySet2408);


$point2409 = new Point();
$point2409->setLatitude(48.07252335000881);
$point2409->setLongitude(28.845704197883606);
$em->persist($point2409);


$waySet2409 = new WaySet();
$waySet2409->setPoint($point2409);
$waySet2409->setWay($way);
$em->persist($waySet2409);


$point2410 = new Point();
$point2410->setLatitude(48.07374563204454);
$point2410->setLongitude(28.84409487247467);
$em->persist($point2410);


$waySet2410 = new WaySet();
$waySet2410->setPoint($point2410);
$waySet2410->setWay($way);
$em->persist($waySet2410);


$point2411 = new Point();
$point2411->setLatitude(48.075387243756865);
$point2411->setLongitude(28.84226560592651);
$em->persist($point2411);


$waySet2411 = new WaySet();
$waySet2411->setPoint($point2411);
$waySet2411->setWay($way);
$em->persist($waySet2411);


$point2412 = new Point();
$point2412->setLatitude(48.072645221075);
$point2412->setLongitude(28.838698267936707);
$em->persist($point2412);


$waySet2412 = new WaySet();
$waySet2412->setPoint($point2412);
$waySet2412->setWay($way);
$em->persist($waySet2412);


$point2413 = new Point();
$point2413->setLatitude(48.07149101881199);
$point2413->setLongitude(28.837190866470333);
$em->persist($point2413);


$waySet2413 = new WaySet();
$waySet2413->setPoint($point2413);
$waySet2413->setWay($way);
$em->persist($waySet2413);


$point2414 = new Point();
$point2414->setLatitude(48.071265193602045);
$point2414->setLongitude(28.83675634860992);
$em->persist($point2414);


$waySet2414 = new WaySet();
$waySet2414->setPoint($point2414);
$waySet2414->setWay($way);
$em->persist($waySet2414);


$point2415 = new Point();
$point2415->setLatitude(48.07146951169183);
$point2415->setLongitude(28.835940957069393);
$em->persist($point2415);


$waySet2415 = new WaySet();
$waySet2415->setPoint($point2415);
$waySet2415->setWay($way);
$em->persist($waySet2415);


$point2416 = new Point();
$point2416->setLatitude(48.07284236483568);
$point2416->setLongitude(28.833215832710266);
$em->persist($point2416);


$waySet2416 = new WaySet();
$waySet2416->setPoint($point2416);
$waySet2416->setWay($way);
$em->persist($waySet2416);


$point2417 = new Point();
$point2417->setLatitude(48.07412557303775);
$point2417->setLongitude(28.834653496742245);
$em->persist($point2417);


$waySet2417 = new WaySet();
$waySet2417->setPoint($point2417);
$waySet2417->setWay($way);
$em->persist($waySet2417);


$point2418 = new Point();
$point2418->setLatitude(48.076182940631746);
$point2418->setLongitude(28.83690118789673);
$em->persist($point2418);


$waySet2418 = new WaySet();
$waySet2418->setPoint($point2418);
$waySet2418->setWay($way);
$em->persist($waySet2418);


$point2419 = new Point();
$point2419->setLatitude(48.0769176948361);
$point2419->setLongitude(28.838360309600834);
$em->persist($point2419);


$waySet2419 = new WaySet();
$waySet2419->setPoint($point2419);
$waySet2419->setWay($way);
$em->persist($waySet2419);


$point2420 = new Point();
$point2420->setLatitude(48.07748757014007);
$point2420->setLongitude(28.83918642997742);
$em->persist($point2420);


$waySet2420 = new WaySet();
$waySet2420->setPoint($point2420);
$waySet2420->setWay($way);
$em->persist($waySet2420);


$point2421 = new Point();
$point2421->setLatitude(48.078491108789294);
$point2421->setLongitude(28.839926719665527);
$em->persist($point2421);


$waySet2421 = new WaySet();
$waySet2421->setPoint($point2421);
$waySet2421->setWay($way);
$em->persist($waySet2421);


$point2422 = new Point();
$point2422->setLatitude(48.07843734828645);
$point2422->setLongitude(28.847243785858158);
$em->persist($point2422);


$waySet2422 = new WaySet();
$waySet2422->setPoint($point2422);
$waySet2422->setWay($way);
$em->persist($waySet2422);


$point2423 = new Point();
$point2423->setLatitude(48.078423012142885);
$point2423->setLongitude(28.849030137062073);
$em->persist($point2423);


$waySet2423 = new WaySet();
$waySet2423->setPoint($point2423);
$waySet2423->setWay($way);
$em->persist($waySet2423);


$point2424 = new Point();
$point2424->setLatitude(48.0793225974126);
$point2424->setLongitude(28.850092291831967);
$em->persist($point2424);


$waySet2424 = new WaySet();
$waySet2424->setPoint($point2424);
$waySet2424->setWay($way);
$em->persist($waySet2424);


$point2425 = new Point();
$point2425->setLatitude(48.082272123231064);
$point2425->setLongitude(28.8495934009552);
$em->persist($point2425);


$waySet2425 = new WaySet();
$waySet2425->setPoint($point2425);
$waySet2425->setWay($way);
$em->persist($waySet2425);


$point2426 = new Point();
$point2426->setLatitude(48.083831038793605);
$point2426->setLongitude(28.849942088127133);
$em->persist($point2426);


$waySet2426 = new WaySet();
$waySet2426->setPoint($point2426);
$waySet2426->setWay($way);
$em->persist($waySet2426);


$point2427 = new Point();
$point2427->setLatitude(48.08741099018049);
$point2427->setLongitude(28.851519227027893);
$em->persist($point2427);


$waySet2427 = new WaySet();
$waySet2427->setPoint($point2427);
$waySet2427->setWay($way);
$em->persist($waySet2427);


$point2428 = new Point();
$point2428->setLatitude(48.09153532995329);
$point2428->setLongitude(28.85333776473999);
$em->persist($point2428);


$waySet2428 = new WaySet();
$waySet2428->setPoint($point2428);
$waySet2428->setWay($way);
$em->persist($waySet2428);


$point2429 = new Point();
$point2429->setLatitude(48.09617526468948);
$point2429->setLongitude(28.855403065681458);
$em->persist($point2429);


$waySet2429 = new WaySet();
$waySet2429->setPoint($point2429);
$waySet2429->setWay($way);
$em->persist($waySet2429);


$point2430 = new Point();
$point2430->setLatitude(48.09989765864406);
$point2430->setLongitude(28.857044577598572);
$em->persist($point2430);


$waySet2430 = new WaySet();
$waySet2430->setPoint($point2430);
$waySet2430->setWay($way);
$em->persist($waySet2430);


$point2431 = new Point();
$point2431->setLatitude(48.10204713778582);
$point2431->setLongitude(28.857479095458984);
$em->persist($point2431);


$waySet2431 = new WaySet();
$waySet2431->setPoint($point2431);
$waySet2431->setWay($way);
$em->persist($waySet2431);


$point2432 = new Point();
$point2432->setLatitude(48.10286749862741);
$point2432->setLongitude(28.857538104057312);
$em->persist($point2432);


$waySet2432 = new WaySet();
$waySet2432->setPoint($point2432);
$waySet2432->setWay($way);
$em->persist($waySet2432);


$point2433 = new Point();
$point2433->setLatitude(48.10683298847569);
$point2433->setLongitude(28.85585904121399);
$em->persist($point2433);


$waySet2433 = new WaySet();
$waySet2433->setPoint($point2433);
$waySet2433->setWay($way);
$em->persist($waySet2433);


$point2434 = new Point();
$point2434->setLatitude(48.108219225763165);
$point2434->setLongitude(28.855274319648743);
$em->persist($point2434);


$waySet2434 = new WaySet();
$waySet2434->setPoint($point2434);
$waySet2434->setWay($way);
$em->persist($waySet2434);


$point2435 = new Point();
$point2435->setLatitude(48.11110620458379);
$point2435->setLongitude(28.852388262748715);
$em->persist($point2435);


$waySet2435 = new WaySet();
$waySet2435->setPoint($point2435);
$waySet2435->setWay($way);
$em->persist($waySet2435);


$point2436 = new Point();
$point2436->setLatitude(48.112037453478145);
$point2436->setLongitude(28.851454854011536);
$em->persist($point2436);


$waySet2436 = new WaySet();
$waySet2436->setPoint($point2436);
$waySet2436->setWay($way);
$em->persist($waySet2436);


$point2437 = new Point();
$point2437->setLatitude(48.11469142024077);
$point2437->setLongitude(28.848166465759274);
$em->persist($point2437);


$waySet2437 = new WaySet();
$waySet2437->setPoint($point2437);
$waySet2437->setWay($way);
$em->persist($waySet2437);


$point2438 = new Point();
$point2438->setLatitude(48.11537548392062);
$point2438->setLongitude(28.847313523292538);
$em->persist($point2438);


$waySet2438 = new WaySet();
$waySet2438->setPoint($point2438);
$waySet2438->setWay($way);
$em->persist($waySet2438);


$point2439 = new Point();
$point2439->setLatitude(48.119981036844855);
$point2439->setLongitude(28.844711780548096);
$em->persist($point2439);


$waySet2439 = new WaySet();
$waySet2439->setPoint($point2439);
$waySet2439->setWay($way);
$em->persist($waySet2439);


$point2440 = new Point();
$point2440->setLatitude(48.12426032132562);
$point2440->setLongitude(28.84186863899231);
$em->persist($point2440);


$waySet2440 = new WaySet();
$waySet2440->setPoint($point2440);
$waySet2440->setWay($way);
$em->persist($waySet2440);


$point2441 = new Point();
$point2441->setLatitude(48.12564608850129);
$point2441->setLongitude(28.840951323509216);
$em->persist($point2441);


$waySet2441 = new WaySet();
$waySet2441->setPoint($point2441);
$waySet2441->setWay($way);
$em->persist($waySet2441);


$point2442 = new Point();
$point2442->setLatitude(48.12401682348976);
$point2442->setLongitude(28.837158679962155);
$em->persist($point2442);


$waySet2442 = new WaySet();
$waySet2442->setPoint($point2442);
$waySet2442->setWay($way);
$em->persist($waySet2442);


$point2443 = new Point();
$point2443->setLatitude(48.12604713042391);
$point2443->setLongitude(28.835608363151547);
$em->persist($point2443);


$waySet2443 = new WaySet();
$waySet2443->setPoint($point2443);
$waySet2443->setWay($way);
$em->persist($waySet2443);


$point2444 = new Point();
$point2444->setLatitude(48.128807789399445);
$point2444->setLongitude(28.833489418029785);
$em->persist($point2444);


$waySet2444 = new WaySet();
$waySet2444->setPoint($point2444);
$waySet2444->setWay($way);
$em->persist($waySet2444);


$point2445 = new Point();
$point2445->setLatitude(48.127099850572186);
$point2445->setLongitude(28.82605969905853);
$em->persist($point2445);


$waySet2445 = new WaySet();
$waySet2445->setPoint($point2445);
$waySet2445->setWay($way);
$em->persist($waySet2445);


$point2446 = new Point();
$point2446->setLatitude(48.12429971057295);
$point2446->setLongitude(28.813936114311215);
$em->persist($point2446);


$waySet2446 = new WaySet();
$waySet2446->setPoint($point2446);
$waySet2446->setWay($way);
$em->persist($waySet2446);


$point2447 = new Point();
$point2447->setLatitude(48.12935202631674);
$point2447->setLongitude(28.810095191001892);
$em->persist($point2447);


$waySet2447 = new WaySet();
$waySet2447->setPoint($point2447);
$waySet2447->setWay($way);
$em->persist($waySet2447);


$point2448 = new Point();
$point2448->setLatitude(48.13142150614048);
$point2448->setLongitude(28.808678984642032);
$em->persist($point2448);


$waySet2448 = new WaySet();
$waySet2448->setPoint($point2448);
$waySet2448->setWay($way);
$em->persist($waySet2448);


$point2449 = new Point();
$point2449->setLatitude(48.13256362278529);
$point2449->setLongitude(28.80792796611786);
$em->persist($point2449);


$waySet2449 = new WaySet();
$waySet2449->setPoint($point2449);
$waySet2449->setWay($way);
$em->persist($waySet2449);


$point2450 = new Point();
$point2450->setLatitude(48.134550630385945);
$point2450->setLongitude(28.80647420883179);
$em->persist($point2450);


$waySet2450 = new WaySet();
$waySet2450->setPoint($point2450);
$waySet2450->setWay($way);
$em->persist($waySet2450);


$point2451 = new Point();
$point2451->setLatitude(48.13090235381354);
$point2451->setLongitude(28.801163434982296);
$em->persist($point2451);


$waySet2451 = new WaySet();
$waySet2451->setPoint($point2451);
$waySet2451->setWay($way);
$em->persist($waySet2451);


$point2452 = new Point();
$point2452->setLatitude(48.129942803284);
$point2452->setLongitude(28.799763321876522);
$em->persist($point2452);


$waySet2452 = new WaySet();
$waySet2452->setPoint($point2452);
$waySet2452->setWay($way);
$em->persist($waySet2452);


$point2453 = new Point();
$point2453->setLatitude(48.12985329205915);
$point2453->setLongitude(28.796641230583187);
$em->persist($point2453);


$waySet2453 = new WaySet();
$waySet2453->setPoint($point2453);
$waySet2453->setWay($way);
$em->persist($waySet2453);


$point2454 = new Point();
$point2454->setLatitude(48.12958117697752);
$point2454->setLongitude(28.794844150543213);
$em->persist($point2454);


$waySet2454 = new WaySet();
$waySet2454->setPoint($point2454);
$waySet2454->setWay($way);
$em->persist($waySet2454);


$point2455 = new Point();
$point2455->setLatitude(48.12626197302293);
$point2455->setLongitude(28.794656395912167);
$em->persist($point2455);


$waySet2455 = new WaySet();
$waySet2455->setPoint($point2455);
$waySet2455->setWay($way);
$em->persist($waySet2455);


$point2456 = new Point();
$point2456->setLatitude(48.125674734456744);
$point2456->setLongitude(28.79196345806122);
$em->persist($point2456);


$waySet2456 = new WaySet();
$waySet2456->setPoint($point2456);
$waySet2456->setWay($way);
$em->persist($waySet2456);


$point2457 = new Point();
$point2457->setLatitude(48.12543840484638);
$point2457->setLongitude(28.786400556564335);
$em->persist($point2457);


$waySet2457 = new WaySet();
$waySet2457->setPoint($point2457);
$waySet2457->setWay($way);
$em->persist($waySet2457);


$point2458 = new Point();
$point2458->setLatitude(48.12493351521757);
$point2458->setLongitude(28.774518370628357);
$em->persist($point2458);


$waySet2458 = new WaySet();
$waySet2458->setPoint($point2458);
$waySet2458->setWay($way);
$em->persist($waySet2458);


$point2459 = new Point();
$point2459->setLatitude(48.124826091251954);
$point2459->setLongitude(28.771868348121643);
$em->persist($point2459);


$waySet2459 = new WaySet();
$waySet2459->setPoint($point2459);
$waySet2459->setWay($way);
$em->persist($waySet2459);


$point2460 = new Point();
$point2460->setLatitude(48.12648039541064);
$point2460->setLongitude(28.7691056728363);
$em->persist($point2460);


$waySet2460 = new WaySet();
$waySet2460->setPoint($point2460);
$waySet2460->setWay($way);
$em->persist($waySet2460);


$point2461 = new Point();
$point2461->setLatitude(48.12822416050719);
$point2461->setLongitude(28.76623034477234);
$em->persist($point2461);


$waySet2461 = new WaySet();
$waySet2461->setPoint($point2461);
$waySet2461->setWay($way);
$em->persist($waySet2461);


$point2462 = new Point();
$point2462->setLatitude(48.13319732545189);
$point2462->setLongitude(28.75949263572693);
$em->persist($point2462);


$waySet2462 = new WaySet();
$waySet2462->setPoint($point2462);
$waySet2462->setWay($way);
$em->persist($waySet2462);


$point2463 = new Point();
$point2463->setLatitude(48.13582513892674);
$point2463->setLongitude(28.755952119827267);
$em->persist($point2463);


$waySet2463 = new WaySet();
$waySet2463->setPoint($point2463);
$waySet2463->setWay($way);
$em->persist($waySet2463);


$point2464 = new Point();
$point2464->setLatitude(48.13611154098698);
$point2464->setLongitude(28.75523328781128);
$em->persist($point2464);


$waySet2464 = new WaySet();
$waySet2464->setPoint($point2464);
$waySet2464->setWay($way);
$em->persist($waySet2464);


$point2465 = new Point();
$point2465->setLatitude(48.13622610136377);
$point2465->setLongitude(28.754643201828);
$em->persist($point2465);


$waySet2465 = new WaySet();
$waySet2465->setPoint($point2465);
$waySet2465->setWay($way);
$em->persist($waySet2465);


$point2466 = new Point();
$point2466->setLatitude(48.134364463569035);
$point2466->setLongitude(28.742310404777527);
$em->persist($point2466);


$waySet2466 = new WaySet();
$waySet2466->setPoint($point2466);
$waySet2466->setWay($way);
$em->persist($waySet2466);


$point2467 = new Point();
$point2467->setLatitude(48.133412138140336);
$point2467->setLongitude(28.735631704330444);
$em->persist($point2467);


$waySet2467 = new WaySet();
$waySet2467->setPoint($point2467);
$waySet2467->setWay($way);
$em->persist($waySet2467);


$point2468 = new Point();
$point2468->setLatitude(48.1304619653115);
$point2468->setLongitude(28.72972011566162);
$em->persist($point2468);


$waySet2468 = new WaySet();
$waySet2468->setPoint($point2468);
$waySet2468->setWay($way);
$em->persist($waySet2468);


$point2469 = new Point();
$point2469->setLatitude(48.13000009038603);
$point2469->setLongitude(28.729221224784848);
$em->persist($point2469);


$waySet2469 = new WaySet();
$waySet2469->setPoint($point2469);
$waySet2469->setWay($way);
$em->persist($waySet2469);


$point2470 = new Point();
$point2470->setLatitude(48.12613306757135);
$point2470->setLongitude(28.721818327903744);
$em->persist($point2470);


$waySet2470 = new WaySet();
$waySet2470->setPoint($point2470);
$waySet2470->setWay($way);
$em->persist($waySet2470);


$point2471 = new Point();
$point2471->setLatitude(48.127726459463815);
$point2471->setLongitude(28.716588020324707);
$em->persist($point2471);


$waySet2471 = new WaySet();
$waySet2471->setPoint($point2471);
$waySet2471->setWay($way);
$em->persist($waySet2471);


$point2472 = new Point();
$point2472->setLatitude(48.128954590714926);
$point2472->setLongitude(28.71227502822876);
$em->persist($point2472);


$waySet2472 = new WaySet();
$waySet2472->setPoint($point2472);
$waySet2472->setWay($way);
$em->persist($waySet2472);


$point2473 = new Point();
$point2473->setLatitude(48.12951314798181);
$point2473->setLongitude(28.71027410030365);
$em->persist($point2473);


$waySet2473 = new WaySet();
$waySet2473->setPoint($point2473);
$waySet2473->setWay($way);
$em->persist($waySet2473);


$point2474 = new Point();
$point2474->setLatitude(48.12958117697752);
$point2474->setLongitude(28.70653510093689);
$em->persist($point2474);


$waySet2474 = new WaySet();
$waySet2474->setPoint($point2474);
$waySet2474->setWay($way);
$em->persist($waySet2474);


$point2475 = new Point();
$point2475->setLatitude(48.12872543725829);
$point2475->setLongitude(28.70328426361084);
$em->persist($point2475);


$waySet2475 = new WaySet();
$waySet2475->setPoint($point2475);
$waySet2475->setWay($way);
$em->persist($waySet2475);


$point2476 = new Point();
$point2476->setLatitude(48.12792697269451);
$point2476->setLongitude(28.70251715183258);
$em->persist($point2476);


$waySet2476 = new WaySet();
$waySet2476->setPoint($point2476);
$waySet2476->setWay($way);
$em->persist($waySet2476);


$point2477 = new Point();
$point2477->setLatitude(48.12757607402705);
$point2477->setLongitude(28.702087998390194);
$em->persist($point2477);


$waySet2477 = new WaySet();
$waySet2477->setPoint($point2477);
$waySet2477->setWay($way);
$em->persist($waySet2477);


$point2478 = new Point();
$point2478->setLatitude(48.12734691441952);
$point2478->setLongitude(28.70078444480896);
$em->persist($point2478);


$waySet2478 = new WaySet();
$waySet2478->setPoint($point2478);
$waySet2478->setWay($way);
$em->persist($waySet2478);


$point2479 = new Point();
$point2479->setLatitude(48.12610442187152);
$point2479->setLongitude(28.696385622024536);
$em->persist($point2479);


$waySet2479 = new WaySet();
$waySet2479->setPoint($point2479);
$waySet2479->setWay($way);
$em->persist($waySet2479);


$point2480 = new Point();
$point2480->setLatitude(48.12589674006988);
$point2480->setLongitude(28.695060610771176);
$em->persist($point2480);


$waySet2480 = new WaySet();
$waySet2480->setPoint($point2480);
$waySet2480->setWay($way);
$em->persist($waySet2480);


$point2481 = new Point();
$point2481->setLatitude(48.12528443193944);
$point2481->setLongitude(28.691343069076535);
$em->persist($point2481);


$waySet2481 = new WaySet();
$waySet2481->setPoint($point2481);
$waySet2481->setWay($way);
$em->persist($waySet2481);


$point2482 = new Point();
$point2482->setLatitude(48.12486906086516);
$point2482->setLongitude(28.68943870067596);
$em->persist($point2482);


$waySet2482 = new WaySet();
$waySet2482->setPoint($point2482);
$waySet2482->setWay($way);
$em->persist($waySet2482);


$point2483 = new Point();
$point2483->setLatitude(48.12462556591508);
$point2483->setLongitude(28.68779182434082);
$em->persist($point2483);


$waySet2483 = new WaySet();
$waySet2483->setPoint($point2483);
$waySet2483->setWay($way);
$em->persist($waySet2483);


$point2484 = new Point();
$point2484->setLatitude(48.131890528902375);
$point2484->setLongitude(28.68234157562256);
$em->persist($point2484);


$waySet2484 = new WaySet();
$waySet2484->setPoint($point2484);
$waySet2484->setWay($way);
$em->persist($waySet2484);


$point2485 = new Point();
$point2485->setLatitude(48.13461507258836);
$point2485->setLongitude(28.68029773235321);
$em->persist($point2485);


$waySet2485 = new WaySet();
$waySet2485->setPoint($point2485);
$waySet2485->setWay($way);
$em->persist($waySet2485);


$point2486 = new Point();
$point2486->setLatitude(48.1427842567245);
$point2486->setLongitude(28.6776477098465);
$em->persist($point2486);


$waySet2486 = new WaySet();
$waySet2486->setPoint($point2486);
$waySet2486->setWay($way);
$em->persist($waySet2486);


$point2487 = new Point();
$point2487->setLatitude(48.145229031478024);
$point2487->setLongitude(28.68035674095154);
$em->persist($point2487);


$waySet2487 = new WaySet();
$waySet2487->setPoint($point2487);
$waySet2487->setWay($way);
$em->persist($waySet2487);


$point2488 = new Point();
$point2488->setLatitude(48.146796775969506);
$point2488->setLongitude(28.68208408355713);
$em->persist($point2488);


$waySet2488 = new WaySet();
$waySet2488->setPoint($point2488);
$waySet2488->setWay($way);
$em->persist($waySet2488);


$point2489 = new Point();
$point2489->setLatitude(48.146345785885224);
$point2489->setLongitude(28.677642345428467);
$em->persist($point2489);


$waySet2489 = new WaySet();
$waySet2489->setPoint($point2489);
$waySet2489->setWay($way);
$em->persist($waySet2489);


$point2490 = new Point();
$point2490->setLatitude(48.14497847426729);
$point2490->setLongitude(28.664140105247494);
$em->persist($point2490);


$waySet2490 = new WaySet();
$waySet2490->setPoint($point2490);
$waySet2490->setWay($way);
$em->persist($waySet2490);


$point2491 = new Point();
$point2491->setLatitude(48.14406929925998);
$point2491->setLongitude(28.655160069465637);
$em->persist($point2491);


$waySet2491 = new WaySet();
$waySet2491->setPoint($point2491);
$waySet2491->setWay($way);
$em->persist($waySet2491);


$point2492 = new Point();
$point2492->setLatitude(48.143288970860304);
$point2492->setLongitude(28.64749431610107);
$em->persist($point2492);


$waySet2492 = new WaySet();
$waySet2492->setPoint($point2492);
$waySet2492->setWay($way);
$em->persist($waySet2492);


$point2493 = new Point();
$point2493->setLatitude(48.14623840670963);
$point2493->setLongitude(28.648009300231934);
$em->persist($point2493);


$waySet2493 = new WaySet();
$waySet2493->setPoint($point2493);
$waySet2493->setWay($way);
$em->persist($waySet2493);


$point2494 = new Point();
$point2494->setLatitude(48.15048687135371);
$point2494->setLongitude(28.648744225502014);
$em->persist($point2494);


$waySet2494 = new WaySet();
$waySet2494->setPoint($point2494);
$waySet2494->setWay($way);
$em->persist($waySet2494);


$point2495 = new Point();
$point2495->setLatitude(48.15191845670835);
$point2495->setLongitude(28.648996353149414);
$em->persist($point2495);


$waySet2495 = new WaySet();
$waySet2495->setPoint($point2495);
$waySet2495->setWay($way);
$em->persist($waySet2495);


$point2496 = new Point();
$point2496->setLatitude(48.15445226488192);
$point2496->setLongitude(28.636974692344662);
$em->persist($point2496);


$waySet2496 = new WaySet();
$waySet2496->setPoint($point2496);
$waySet2496->setWay($way);
$em->persist($waySet2496);


$point2497 = new Point();
$point2497->setLatitude(48.15483160957442);
$point2497->setLongitude(28.635166883468624);
$em->persist($point2497);


$waySet2497 = new WaySet();
$waySet2497->setPoint($point2497);
$waySet2497->setWay($way);
$em->persist($waySet2497);


$point2498 = new Point();
$point2498->setLatitude(48.15385819114349);
$point2498->setLongitude(28.634716272354126);
$em->persist($point2498);


$waySet2498 = new WaySet();
$waySet2498->setPoint($point2498);
$waySet2498->setWay($way);
$em->persist($waySet2498);


$point2499 = new Point();
$point2499->setLatitude(48.154015657141684);
$point2499->setLongitude(28.631771206855774);
$em->persist($point2499);


$waySet2499 = new WaySet();
$waySet2499->setPoint($point2499);
$waySet2499->setWay($way);
$em->persist($waySet2499);


$point2500 = new Point();
$point2500->setLatitude(48.154144492598974);
$point2500->setLongitude(28.630419373512268);
$em->persist($point2500);


$waySet2500 = new WaySet();
$waySet2500->setPoint($point2500);
$waySet2500->setWay($way);
$em->persist($waySet2500);


$point2501 = new Point();
$point2501->setLatitude(48.15578711632348);
$point2501->setLongitude(28.62635850906372);
$em->persist($point2501);


$waySet2501 = new WaySet();
$waySet2501->setPoint($point2501);
$waySet2501->setWay($way);
$em->persist($waySet2501);


$point2502 = new Point();
$point2502->setLatitude(48.157018154967254);
$point2502->setLongitude(28.62332224845886);
$em->persist($point2502);


$waySet2502 = new WaySet();
$waySet2502->setPoint($point2502);
$waySet2502->setWay($way);
$em->persist($waySet2502);


$point2503 = new Point();
$point2503->setLatitude(48.15786984464889);
$point2503->setLongitude(28.621246218681335);
$em->persist($point2503);


$waySet2503 = new WaySet();
$waySet2503->setPoint($point2503);
$waySet2503->setWay($way);
$em->persist($waySet2503);


$point2504 = new Point();
$point2504->setLatitude(48.15958749511301);
$point2504->setLongitude(28.614588975906372);
$em->persist($point2504);


$waySet2504 = new WaySet();
$waySet2504->setPoint($point2504);
$waySet2504->setWay($way);
$em->persist($waySet2504);


$point2505 = new Point();
$point2505->setLatitude(48.157089726072876);
$point2505->setLongitude(28.61139178276062);
$em->persist($point2505);


$waySet2505 = new WaySet();
$waySet2505->setPoint($point2505);
$waySet2505->setWay($way);
$em->persist($waySet2505);


$point2506 = new Point();
$point2506->setLatitude(48.1595767599762);
$point2506->setLongitude(28.60840916633606);
$em->persist($point2506);


$waySet2506 = new WaySet();
$waySet2506->setPoint($point2506);
$waySet2506->setWay($way);
$em->persist($waySet2506);


$point2507 = new Point();
$point2507->setLatitude(48.16251810344488);
$point2507->setLongitude(28.60489010810852);
$em->persist($point2507);


$waySet2507 = new WaySet();
$waySet2507->setPoint($point2507);
$waySet2507->setWay($way);
$em->persist($waySet2507);


$point2508 = new Point();
$point2508->setLatitude(48.16562386457293);
$point2508->setLongitude(28.60117793083191);
$em->persist($point2508);


$waySet2508 = new WaySet();
$waySet2508->setPoint($point2508);
$waySet2508->setWay($way);
$em->persist($waySet2508);


$point2509 = new Point();
$point2509->setLatitude(48.16922316351004);
$point2509->setLongitude(28.59688103199005);
$em->persist($point2509);


$waySet2509 = new WaySet();
$waySet2509->setPoint($point2509);
$waySet2509->setWay($way);
$em->persist($waySet2509);


$point2510 = new Point();
$point2510->setLatitude(48.17349118963131);
$point2510->setLongitude(28.591779470443726);
$em->persist($point2510);


$waySet2510 = new WaySet();
$waySet2510->setPoint($point2510);
$waySet2510->setWay($way);
$em->persist($waySet2510);


$point2511 = new Point();
$point2511->setLatitude(48.16974908365419);
$point2511->setLongitude(28.584843277931213);
$em->persist($point2511);


$waySet2511 = new WaySet();
$waySet2511->setPoint($point2511);
$waySet2511->setWay($way);
$em->persist($waySet2511);


$point2512 = new Point();
$point2512->setLatitude(48.166700818471);
$point2512->setLongitude(28.579221367836);
$em->persist($point2512);


$waySet2512 = new WaySet();
$waySet2512->setPoint($point2512);
$waySet2512->setWay($way);
$em->persist($waySet2512);


$point2513 = new Point();
$point2513->setLatitude(48.170908235539876);
$point2513->setLongitude(28.574291467666626);
$em->persist($point2513);


$waySet2513 = new WaySet();
$waySet2513->setPoint($point2513);
$waySet2513->setWay($way);
$em->persist($waySet2513);


$point2514 = new Point();
$point2514->setLatitude(48.17409934549361);
$point2514->setLongitude(28.570552468299862);
$em->persist($point2514);


$waySet2514 = new WaySet();
$waySet2514->setPoint($point2514);
$waySet2514->setWay($way);
$em->persist($waySet2514);


$point2515 = new Point();
$point2515->setLatitude(48.1756304353716);
$point2515->setLongitude(28.573808670043945);
$em->persist($point2515);


$waySet2515 = new WaySet();
$waySet2515->setPoint($point2515);
$waySet2515->setWay($way);
$em->persist($waySet2515);


$point2516 = new Point();
$point2516->setLatitude(48.174517895631936);
$point2516->setLongitude(28.576088547706604);
$em->persist($point2516);


$waySet2516 = new WaySet();
$waySet2516->setPoint($point2516);
$waySet2516->setWay($way);
$em->persist($waySet2516);


$point2517 = new Point();
$point2517->setLatitude(48.176900346727294);
$point2517->setLongitude(28.57593834400177);
$em->persist($point2517);


$waySet2517 = new WaySet();
$waySet2517->setPoint($point2517);
$waySet2517->setWay($way);
$em->persist($waySet2517);


$point2518 = new Point();
$point2518->setLatitude(48.1778232484832);
$point2518->setLongitude(28.577756881713867);
$em->persist($point2518);


$waySet2518 = new WaySet();
$waySet2518->setPoint($point2518);
$waySet2518->setWay($way);
$em->persist($waySet2518);


$point2519 = new Point();
$point2519->setLatitude(48.179572423668986);
$point2519->setLongitude(28.57648015022278);
$em->persist($point2519);


$waySet2519 = new WaySet();
$waySet2519->setPoint($point2519);
$waySet2519->setWay($way);
$em->persist($waySet2519);


$point2520 = new Point();
$point2520->setLatitude(48.18128934740378);
$point2520->setLongitude(28.57844889163971);
$em->persist($point2520);


$waySet2520 = new WaySet();
$waySet2520->setPoint($point2520);
$waySet2520->setWay($way);
$em->persist($waySet2520);


$point2521 = new Point();
$point2521->setLatitude(48.18245539198438);
$point2521->setLongitude(28.577354550361633);
$em->persist($point2521);


$waySet2521 = new WaySet();
$waySet2521->setPoint($point2521);
$waySet2521->setWay($way);
$em->persist($waySet2521);


$point2522 = new Point();
$point2522->setLatitude(48.17981208106005);
$point2522->setLongitude(28.57466697692871);
$em->persist($point2522);


$waySet2522 = new WaySet();
$waySet2522->setPoint($point2522);
$waySet2522->setWay($way);
$em->persist($waySet2522);


$point2523 = new Point();
$point2523->setLatitude(48.17798779511321);
$point2523->setLongitude(28.571335673332214);
$em->persist($point2523);


$waySet2523 = new WaySet();
$waySet2523->setPoint($point2523);
$waySet2523->setWay($way);
$em->persist($waySet2523);


$point2524 = new Point();
$point2524->setLatitude(48.1770541648403);
$point2524->setLongitude(28.571045994758602);
$em->persist($point2524);


$waySet2524 = new WaySet();
$waySet2524->setPoint($point2524);
$waySet2524->setWay($way);
$em->persist($waySet2524);


$point2525 = new Point();
$point2525->setLatitude(48.17623856586102);
$point2525->setLongitude(28.570498824119568);
$em->persist($point2525);


$waySet2525 = new WaySet();
$waySet2525->setPoint($point2525);
$waySet2525->setWay($way);
$em->persist($waySet2525);


$point2526 = new Point();
$point2526->setLatitude(48.1751761214166);
$point2526->setLongitude(28.567532300949097);
$em->persist($point2526);


$waySet2526 = new WaySet();
$waySet2526->setPoint($point2526);
$waySet2526->setWay($way);
$em->persist($waySet2526);


$point2527 = new Point();
$point2527->setLatitude(48.17507595716839);
$point2527->setLongitude(28.565896153450012);
$em->persist($point2527);


$waySet2527 = new WaySet();
$waySet2527->setPoint($point2527);
$waySet2527->setWay($way);
$em->persist($waySet2527);


$point2528 = new Point();
$point2528->setLatitude(48.175165389542194);
$point2528->setLongitude(28.564512133598328);
$em->persist($point2528);


$waySet2528 = new WaySet();
$waySet2528->setPoint($point2528);
$waySet2528->setWay($way);
$em->persist($waySet2528);


$point2529 = new Point();
$point2529->setLatitude(48.174689607520854);
$point2529->setLongitude(28.563519716262817);
$em->persist($point2529);


$waySet2529 = new WaySet();
$waySet2529->setPoint($point2529);
$waySet2529->setWay($way);
$em->persist($waySet2529);


$point2530 = new Point();
$point2530->setLatitude(48.174024220748166);
$point2530->setLongitude(28.562505841255188);
$em->persist($point2530);


$waySet2530 = new WaySet();
$waySet2530->setPoint($point2530);
$waySet2530->setWay($way);
$em->persist($waySet2530);


$point2531 = new Point();
$point2531->setLatitude(48.17358420217158);
$point2531->setLongitude(28.561878204345703);
$em->persist($point2531);


$waySet2531 = new WaySet();
$waySet2531->setPoint($point2531);
$waySet2531->setWay($way);
$em->persist($waySet2531);


$point2532 = new Point();
$point2532->setLatitude(48.17321930585383);
$point2532->setLongitude(28.560875058174133);
$em->persist($point2532);


$waySet2532 = new WaySet();
$waySet2532->setPoint($point2532);
$waySet2532->setWay($way);
$em->persist($waySet2532);


$point2533 = new Point();
$point2533->setLatitude(48.17275423815566);
$point2533->setLongitude(28.55873465538025);
$em->persist($point2533);


$waySet2533 = new WaySet();
$waySet2533->setPoint($point2533);
$waySet2533->setWay($way);
$em->persist($waySet2533);


$point2534 = new Point();
$point2534->setLatitude(48.17230705369882);
$point2534->setLongitude(28.55774760246277);
$em->persist($point2534);


$waySet2534 = new WaySet();
$waySet2534->setPoint($point2534);
$waySet2534->setWay($way);
$em->persist($waySet2534);


$point2535 = new Point();
$point2535->setLatitude(48.171723919308796);
$point2535->setLongitude(28.557533025741577);
$em->persist($point2535);


$waySet2535 = new WaySet();
$waySet2535->setPoint($point2535);
$waySet2535->setWay($way);
$em->persist($waySet2535);


$point2536 = new Point();
$point2536->setLatitude(48.17144129350693);
$point2536->setLongitude(28.557280898094177);
$em->persist($point2536);


$waySet2536 = new WaySet();
$waySet2536->setPoint($point2536);
$waySet2536->setWay($way);
$em->persist($waySet2536);


$point2537 = new Point();
$point2537->setLatitude(48.17132681172621);
$point2537->setLongitude(28.556111454963684);
$em->persist($point2537);


$waySet2537 = new WaySet();
$waySet2537->setPoint($point2537);
$waySet2537->setWay($way);
$em->persist($waySet2537);


$point2538 = new Point();
$point2538->setLatitude(48.171230217524936);
$point2538->setLongitude(28.55409979820251);
$em->persist($point2538);


$waySet2538 = new WaySet();
$waySet2538->setPoint($point2538);
$waySet2538->setWay($way);
$em->persist($waySet2538);


$point2539 = new Point();
$point2539->setLatitude(48.170622027633726);
$point2539->setLongitude(28.552656769752502);
$em->persist($point2539);


$waySet2539 = new WaySet();
$waySet2539->setPoint($point2539);
$waySet2539->setWay($way);
$em->persist($waySet2539);


$point2540 = new Point();
$point2540->setLatitude(48.17025353260232);
$point2540->setLongitude(28.551288843154907);
$em->persist($point2540);


$waySet2540 = new WaySet();
$waySet2540->setPoint($point2540);
$waySet2540->setWay($way);
$em->persist($waySet2540);


$point2541 = new Point();
$point2541->setLatitude(48.17067926934275);
$point2541->setLongitude(28.54998528957367);
$em->persist($point2541);


$waySet2541 = new WaySet();
$waySet2541->setPoint($point2541);
$waySet2541->setWay($way);
$em->persist($waySet2541);


$point2542 = new Point();
$point2542->setLatitude(48.17094758900205);
$point2542->setLongitude(28.549336194992062);
$em->persist($point2542);


$waySet2542 = new WaySet();
$waySet2542->setPoint($point2542);
$waySet2542->setWay($way);
$em->persist($waySet2542);


$point2543 = new Point();
$point2543->setLatitude(48.170450302123314);
$point2543->setLongitude(28.547093868255615);
$em->persist($point2543);


$waySet2543 = new WaySet();
$waySet2543->setPoint($point2543);
$waySet2543->setWay($way);
$em->persist($waySet2543);


$point2544 = new Point();
$point2544->setLatitude(48.169927966827736);
$point2544->setLongitude(28.546707630157467);
$em->persist($point2544);


$waySet2544 = new WaySet();
$waySet2544->setPoint($point2544);
$waySet2544->setWay($way);
$em->persist($waySet2544);


$point2545 = new Point();
$point2545->setLatitude(48.169681107884635);
$point2545->setLongitude(28.546428680419922);
$em->persist($point2545);


$waySet2545 = new WaySet();
$waySet2545->setPoint($point2545);
$waySet2545->setWay($way);
$em->persist($waySet2545);


$point2546 = new Point();
$point2546->setLatitude(48.16954873375905);
$point2546->setLongitude(28.545559644699093);
$em->persist($point2546);


$waySet2546 = new WaySet();
$waySet2546->setPoint($point2546);
$waySet2546->setWay($way);
$em->persist($waySet2546);


$point2547 = new Point();
$point2547->setLatitude(48.169377004654514);
$point2547->setLongitude(28.54496419429779);
$em->persist($point2547);


$waySet2547 = new WaySet();
$waySet2547->setPoint($point2547);
$waySet2547->setWay($way);
$em->persist($waySet2547);


$point2548 = new Point();
$point2548->setLatitude(48.16900134523351);
$point2548->setLongitude(28.54469060897827);
$em->persist($point2548);


$waySet2548 = new WaySet();
$waySet2548->setPoint($point2548);
$waySet2548->setWay($way);
$em->persist($waySet2548);


$point2549 = new Point();
$point2549->setLatitude(48.16528753546604);
$point2549->setLongitude(28.5432368516922);
$em->persist($point2549);


$waySet2549 = new WaySet();
$waySet2549->setPoint($point2549);
$waySet2549->setWay($way);
$em->persist($waySet2549);


$point2550 = new Point();
$point2550->setLatitude(48.16376687101941);
$point2550->setLongitude(28.539358377456665);
$em->persist($point2550);


$waySet2550 = new WaySet();
$waySet2550->setPoint($point2550);
$waySet2550->setWay($way);
$em->persist($waySet2550);


$point2551 = new Point();
$point2551->setLatitude(48.162704168162755);
$point2551->setLongitude(28.538119196891785);
$em->persist($point2551);


$waySet2551 = new WaySet();
$waySet2551->setPoint($point2551);
$waySet2551->setWay($way);
$em->persist($waySet2551);


$point2552 = new Point();
$point2552->setLatitude(48.16204220407659);
$point2552->setLongitude(28.536933660507202);
$em->persist($point2552);


$waySet2552 = new WaySet();
$waySet2552->setPoint($point2552);
$waySet2552->setWay($way);
$em->persist($waySet2552);


$point2553 = new Point();
$point2553->setLatitude(48.16187044983686);
$point2553->setLongitude(28.53672444820404);
$em->persist($point2553);


$waySet2553 = new WaySet();
$waySet2553->setPoint($point2553);
$waySet2553->setWay($way);
$em->persist($waySet2553);


$point2554 = new Point();
$point2554->setLatitude(48.16082559915509);
$point2554->setLongitude(28.535324335098267);
$em->persist($point2554);


$waySet2554 = new WaySet();
$waySet2554->setPoint($point2554);
$waySet2554->setWay($way);
$em->persist($waySet2554);


$point2555 = new Point();
$point2555->setLatitude(48.15884318697261);
$point2555->setLongitude(28.534562587738037);
$em->persist($point2555);


$waySet2555 = new WaySet();
$waySet2555->setPoint($point2555);
$waySet2555->setWay($way);
$em->persist($waySet2555);


$point2556 = new Point();
$point2556->setLatitude(48.157787539120335);
$point2556->setLongitude(28.53438019752502);
$em->persist($point2556);


$waySet2556 = new WaySet();
$waySet2556->setPoint($point2556);
$waySet2556->setWay($way);
$em->persist($waySet2556);


$point2557 = new Point();
$point2557->setLatitude(48.1573795880296);
$point2557->setLongitude(28.533548712730404);
$em->persist($point2557);


$waySet2557 = new WaySet();
$waySet2557->setPoint($point2557);
$waySet2557->setWay($way);
$em->persist($waySet2557);


$point2558 = new Point();
$point2558->setLatitude(48.15713624723798);
$point2558->setLongitude(28.532620668411255);
$em->persist($point2558);


$waySet2558 = new WaySet();
$waySet2558->setPoint($point2558);
$waySet2558->setWay($way);
$em->persist($waySet2558);


$point2559 = new Point();
$point2559->setLatitude(48.156574411883966);
$point2559->setLongitude(28.531805276870728);
$em->persist($point2559);


$waySet2559 = new WaySet();
$waySet2559->setPoint($point2559);
$waySet2559->setWay($way);
$em->persist($waySet2559);


$point2560 = new Point();
$point2560->setLatitude(48.15614855805808);
$point2560->setLongitude(28.53148341178894);
$em->persist($point2560);


$waySet2560 = new WaySet();
$waySet2560->setPoint($point2560);
$waySet2560->setWay($way);
$em->persist($waySet2560);


$point2561 = new Point();
$point2561->setLatitude(48.1553326265682);
$point2561->setLongitude(28.530067205429077);
$em->persist($point2561);


$waySet2561 = new WaySet();
$waySet2561->setPoint($point2561);
$waySet2561->setWay($way);
$em->persist($waySet2561);


$point2562 = new Point();
$point2562->setLatitude(48.154591835425094);
$point2562->setLongitude(28.529793620109558);
$em->persist($point2562);


$waySet2562 = new WaySet();
$waySet2562->setPoint($point2562);
$waySet2562->setWay($way);
$em->persist($waySet2562);


$point2563 = new Point();
$point2563->setLatitude(48.153847454807824);
$point2563->setLongitude(28.52995991706848);
$em->persist($point2563);


$waySet2563 = new WaySet();
$waySet2563->setPoint($point2563);
$waySet2563->setWay($way);
$em->persist($waySet2563);


$point2564 = new Point();
$point2564->setLatitude(48.15311022105279);
$point2564->setLongitude(28.529857993125912);
$em->persist($point2564);


$waySet2564 = new WaySet();
$waySet2564->setPoint($point2564);
$waySet2564->setWay($way);
$em->persist($waySet2564);


$point2565 = new Point();
$point2565->setLatitude(48.15290980616205);
$point2565->setLongitude(28.528634905815125);
$em->persist($point2565);


$waySet2565 = new WaySet();
$waySet2565->setPoint($point2565);
$waySet2565->setWay($way);
$em->persist($waySet2565);


$point2566 = new Point();
$point2566->setLatitude(48.15258770916203);
$point2566->setLongitude(28.527562022209167);
$em->persist($point2566);


$waySet2566 = new WaySet();
$waySet2566->setPoint($point2566);
$waySet2566->setWay($way);
$em->persist($waySet2566);


$point2567 = new Point();
$point2567->setLatitude(48.15226918902929);
$point2567->setLongitude(28.526167273521423);
$em->persist($point2567);


$waySet2567 = new WaySet();
$waySet2567->setPoint($point2567);
$waySet2567->setWay($way);
$em->persist($waySet2567);


$point2568 = new Point();
$point2568->setLatitude(48.15230497790684);
$point2568->setLongitude(28.524869084358215);
$em->persist($point2568);


$waySet2568 = new WaySet();
$waySet2568->setPoint($point2568);
$waySet2568->setWay($way);
$em->persist($waySet2568);


$point2569 = new Point();
$point2569->setLatitude(48.15222982123517);
$point2569->setLongitude(28.524085879325867);
$em->persist($point2569);


$waySet2569 = new WaySet();
$waySet2569->setPoint($point2569);
$waySet2569->setWay($way);
$em->persist($waySet2569);


$point2570 = new Point();
$point2570->setLatitude(48.15231571456525);
$point2570->setLongitude(28.523157835006714);
$em->persist($point2570);


$waySet2570 = new WaySet();
$waySet2570->setPoint($point2570);
$waySet2570->setWay($way);
$em->persist($waySet2570);


$point2571 = new Point();
$point2571->setLatitude(48.1524875007941);
$point2571->setLongitude(28.522390723228455);
$em->persist($point2571);


$waySet2571 = new WaySet();
$waySet2571->setPoint($point2571);
$waySet2571->setWay($way);
$em->persist($waySet2571);


$point2572 = new Point();
$point2572->setLatitude(48.15168224787601);
$point2572->setLongitude(28.515942692756653);
$em->persist($point2572);


$waySet2572 = new WaySet();
$waySet2572->setPoint($point2572);
$waySet2572->setWay($way);
$em->persist($waySet2572);


$point2573 = new Point();
$point2573->setLatitude(48.15146393268534);
$point2573->setLongitude(28.513491153717037);
$em->persist($point2573);


$waySet2573 = new WaySet();
$waySet2573->setPoint($point2573);
$waySet2573->setWay($way);
$em->persist($waySet2573);


$point2574 = new Point();
$point2574->setLatitude(48.151821825953824);
$point2574->setLongitude(28.508566617965695);
$em->persist($point2574);


$waySet2574 = new WaySet();
$waySet2574->setPoint($point2574);
$waySet2574->setWay($way);
$em->persist($waySet2574);


$point2575 = new Point();
$point2575->setLatitude(48.15187550972881);
$point2575->setLongitude(28.507338166236877);
$em->persist($point2575);


$waySet2575 = new WaySet();
$waySet2575->setPoint($point2575);
$waySet2575->setWay($way);
$em->persist($waySet2575);


$point2576 = new Point();
$point2576->setLatitude(48.151038036443346);
$point2576->setLongitude(28.50323975086212);
$em->persist($point2576);


$waySet2576 = new WaySet();
$waySet2576->setPoint($point2576);
$waySet2576->setWay($way);
$em->persist($waySet2576);


$point2577 = new Point();
$point2577->setLatitude(48.14630283424195);
$point2577->setLongitude(28.509601950645447);
$em->persist($point2577);


$waySet2577 = new WaySet();
$waySet2577->setPoint($point2577);
$waySet2577->setWay($way);
$em->persist($waySet2577);


$point2578 = new Point();
$point2578->setLatitude(48.14435923477108);
$point2578->setLongitude(28.512155413627625);
$em->persist($point2578);


$waySet2578 = new WaySet();
$waySet2578->setPoint($point2578);
$waySet2578->setWay($way);
$em->persist($waySet2578);


$point2579 = new Point();
$point2579->setLatitude(48.14414804733856);
$point2579->setLongitude(28.512455821037292);
$em->persist($point2579);


$waySet2579 = new WaySet();
$waySet2579->setPoint($point2579);
$waySet2579->setWay($way);
$em->persist($waySet2579);


$point2580 = new Point();
$point2580->setLatitude(48.14238334550558);
$point2580->setLongitude(28.51504683494568);
$em->persist($point2580);


$waySet2580 = new WaySet();
$waySet2580->setPoint($point2580);
$waySet2580->setWay($way);
$em->persist($waySet2580);


$point2581 = new Point();
$point2581->setLatitude(48.14058636567978);
$point2581->setLongitude(28.517707586288452);
$em->persist($point2581);


$waySet2581 = new WaySet();
$waySet2581->setPoint($point2581);
$waySet2581->setWay($way);
$em->persist($waySet2581);


$point2582 = new Point();
$point2582->setLatitude(48.13851725522025);
$point2582->setLongitude(28.52075457572937);
$em->persist($point2582);


$waySet2582 = new WaySet();
$waySet2582->setPoint($point2582);
$waySet2582->setWay($way);
$em->persist($waySet2582);


$point2583 = new Point();
$point2583->setLatitude(48.13825950551565);
$point2583->setLongitude(28.521130084991455);
$em->persist($point2583);


$waySet2583 = new WaySet();
$waySet2583->setPoint($point2583);
$waySet2583->setWay($way);
$em->persist($waySet2583);


$point2584 = new Point();
$point2584->setLatitude(48.13809841129317);
$point2584->setLongitude(28.520861864089966);
$em->persist($point2584);


$waySet2584 = new WaySet();
$waySet2584->setPoint($point2584);
$waySet2584->setWay($way);
$em->persist($waySet2584);


$point2585 = new Point();
$point2585->setLatitude(48.13787287853245);
$point2585->setLongitude(28.519574403762814);
$em->persist($point2585);


$waySet2585 = new WaySet();
$waySet2585->setPoint($point2585);
$waySet2585->setWay($way);
$em->persist($waySet2585);


$point2586 = new Point();
$point2586->setLatitude(48.13746118919216);
$point2586->setLongitude(28.517889976501465);
$em->persist($point2586);


$waySet2586 = new WaySet();
$waySet2586->setPoint($point2586);
$waySet2586->setWay($way);
$em->persist($waySet2586);


$point2587 = new Point();
$point2587->setLatitude(48.13632276148282);
$point2587->setLongitude(28.515701293945312);
$em->persist($point2587);


$waySet2587 = new WaySet();
$waySet2587->setPoint($point2587);
$waySet2587->setWay($way);
$em->persist($waySet2587);


$point2588 = new Point();
$point2588->setLatitude(48.13461507258836);
$point2588->setLongitude(28.512600660324097);
$em->persist($point2588);


$waySet2588 = new WaySet();
$waySet2588->setPoint($point2588);
$waySet2588->setWay($way);
$em->persist($waySet2588);


$point2589 = new Point();
$point2589->setLatitude(48.13377015729067);
$point2589->setLongitude(28.511071801185608);
$em->persist($point2589);


$waySet2589 = new WaySet();
$waySet2589->setPoint($point2589);
$waySet2589->setWay($way);
$em->persist($waySet2589);


$point2590 = new Point();
$point2590->setLatitude(48.131976456272334);
$point2590->setLongitude(28.50723624229431);
$em->persist($point2590);


$waySet2590 = new WaySet();
$waySet2590->setPoint($point2590);
$waySet2590->setWay($way);
$em->persist($waySet2590);


$point2591 = new Point();
$point2591->setLatitude(48.13088087153521);
$point2591->setLongitude(28.504891991615295);
$em->persist($point2591);


$waySet2591 = new WaySet();
$waySet2591->setPoint($point2591);
$waySet2591->setWay($way);
$em->persist($waySet2591);


$point2592 = new Point();
$point2592->setLatitude(48.128861497246476);
$point2592->setLongitude(28.5015606880188);
$em->persist($point2592);


$waySet2592 = new WaySet();
$waySet2592->setPoint($point2592);
$waySet2592->setWay($way);
$em->persist($waySet2592);


$point2593 = new Point();
$point2593->setLatitude(48.127393462547566);
$point2593->setLongitude(28.499135971069336);
$em->persist($point2593);


$waySet2593 = new WaySet();
$waySet2593->setPoint($point2593);
$waySet2593->setWay($way);
$em->persist($waySet2593);


$point2594 = new Point();
$point2594->setLatitude(48.12569263817079);
$point2594->setLongitude(28.499484658241272);
$em->persist($point2594);


$waySet2594 = new WaySet();
$waySet2594->setPoint($point2594);
$waySet2594->setWay($way);
$em->persist($waySet2594);


$point2595 = new Point();
$point2595->setLatitude(48.12146718859545);
$point2595->setLongitude(28.500364422798157);
$em->persist($point2595);


$waySet2595 = new WaySet();
$waySet2595->setPoint($point2595);
$waySet2595->setWay($way);
$em->persist($waySet2595);


$point2596 = new Point();
$point2596->setLatitude(48.1192325730583);
$point2596->setLongitude(28.495670557022095);
$em->persist($point2596);


$waySet2596 = new WaySet();
$waySet2596->setPoint($point2596);
$waySet2596->setWay($way);
$em->persist($waySet2596);


$point2597 = new Point();
$point2597->setLatitude(48.119397307650566);
$point2597->setLongitude(28.494635224342346);
$em->persist($point2597);


$waySet2597 = new WaySet();
$waySet2597->setPoint($point2597);
$waySet2597->setWay($way);
$em->persist($waySet2597);


$point2598 = new Point();
$point2598->setLatitude(48.11910006876381);
$point2598->setLongitude(28.49350333213806);
$em->persist($point2598);


$waySet2598 = new WaySet();
$waySet2598->setPoint($point2598);
$waySet2598->setWay($way);
$em->persist($waySet2598);


$point2599 = new Point();
$point2599->setLatitude(48.11884580280915);
$point2599->setLongitude(28.49300980567932);
$em->persist($point2599);


$waySet2599 = new WaySet();
$waySet2599->setPoint($point2599);
$waySet2599->setWay($way);
$em->persist($waySet2599);


$point2600 = new Point();
$point2600->setLatitude(48.118559304451);
$point2600->setLongitude(28.49276840686798);
$em->persist($point2600);


$waySet2600 = new WaySet();
$waySet2600->setPoint($point2600);
$waySet2600->setWay($way);
$em->persist($waySet2600);


$point2601 = new Point();
$point2601->setLatitude(48.11836233590298);
$point2601->setLongitude(28.4929347038269);
$em->persist($point2601);


$waySet2601 = new WaySet();
$waySet2601->setPoint($point2601);
$waySet2601->setWay($way);
$em->persist($waySet2601);


$point2602 = new Point();
$point2602->setLatitude(48.116457073877335);
$point2602->setLongitude(28.496684432029724);
$em->persist($point2602);


$waySet2602 = new WaySet();
$waySet2602->setPoint($point2602);
$waySet2602->setWay($way);
$em->persist($waySet2602);


$point2603 = new Point();
$point2603->setLatitude(48.115841071792325);
$point2603->setLongitude(28.497880697250363);
$em->persist($point2603);


$waySet2603 = new WaySet();
$waySet2603->setPoint($point2603);
$waySet2603->setWay($way);
$em->persist($waySet2603);


$point2604 = new Point();
$point2604->setLatitude(48.1150710588003);
$point2604->setLongitude(28.499017953872677);
$em->persist($point2604);


$waySet2604 = new WaySet();
$waySet2604->setPoint($point2604);
$waySet2604->setWay($way);
$em->persist($waySet2604);


$point2605 = new Point();
$point2605->setLatitude(48.113842595578724);
$point2605->setLongitude(28.49802017211914);
$em->persist($point2605);


$waySet2605 = new WaySet();
$waySet2605->setPoint($point2605);
$waySet2605->setWay($way);
$em->persist($waySet2605);


$point2606 = new Point();
$point2606->setLatitude(48.11170435485072);
$point2606->setLongitude(28.496201634407043);
$em->persist($point2606);


$waySet2606 = new WaySet();
$waySet2606->setPoint($point2606);
$waySet2606->setWay($way);
$em->persist($waySet2606);


$point2607 = new Point();
$point2607->setLatitude(48.110010174650746);
$point2607->setLongitude(28.49600315093994);
$em->persist($point2607);


$waySet2607 = new WaySet();
$waySet2607->setPoint($point2607);
$waySet2607->setWay($way);
$em->persist($waySet2607);


$point2608 = new Point();
$point2608->setLatitude(48.10479475774144);
$point2608->setLongitude(28.49565982818603);
$em->persist($point2608);


$waySet2608 = new WaySet();
$waySet2608->setPoint($point2608);
$waySet2608->setWay($way);
$em->persist($waySet2608);


$point2609 = new Point();
$point2609->setLatitude(48.09946416946031);
$point2609->setLongitude(28.49548816680908);
$em->persist($point2609);


$waySet2609 = new WaySet();
$waySet2609->setPoint($point2609);
$waySet2609->setWay($way);
$em->persist($waySet2609);


$point2610 = new Point();
$point2610->setLatitude(48.0966840197056);
$point2610->setLongitude(28.49531650543213);
$em->persist($point2610);


$waySet2610 = new WaySet();
$waySet2610->setPoint($point2610);
$waySet2610->setWay($way);
$em->persist($waySet2610);


$point2611 = new Point();
$point2611->setLatitude(48.09221253571162);
$point2611->setLongitude(28.49677562713623);
$em->persist($point2611);


$waySet2611 = new WaySet();
$waySet2611->setPoint($point2611);
$waySet2611->setWay($way);
$em->persist($waySet2611);


$point2612 = new Point();
$point2612->setLatitude(48.08808466688804);
$point2612->setLongitude(28.496861457824707);
$em->persist($point2612);


$waySet2612 = new WaySet();
$waySet2612->setPoint($point2612);
$waySet2612->setWay($way);
$em->persist($waySet2612);


$point2613 = new Point();
$point2613->setLatitude(48.08435783406203);
$point2613->setLongitude(28.495187759399414);
$em->persist($point2613);


$waySet2613 = new WaySet();
$waySet2613->setPoint($point2613);
$waySet2613->setWay($way);
$em->persist($waySet2613);


$point2614 = new Point();
$point2614->setLatitude(48.07968457748526);
$point2614->setLongitude(28.492140769958496);
$em->persist($point2614);


$waySet2614 = new WaySet();
$waySet2614->setPoint($point2614);
$waySet2614->setWay($way);
$em->persist($waySet2614);


$point2615 = new Point();
$point2615->setLatitude(48.07595713601238);
$point2615->setLongitude(28.491883277893066);
$em->persist($point2615);


$waySet2615 = new WaySet();
$waySet2615->setPoint($point2615);
$waySet2615->setWay($way);
$em->persist($waySet2615);


$point2616 = new Point();
$point2616->setLatitude(48.072946313059916);
$point2616->setLongitude(28.493385314941406);
$em->persist($point2616);


$waySet2616 = new WaySet();
$waySet2616->setPoint($point2616);
$waySet2616->setWay($way);
$em->persist($waySet2616);


$point2617 = new Point();
$point2617->setLatitude(48.06999266794127);
$point2617->setLongitude(28.499350547790524);
$em->persist($point2617);


$waySet2617 = new WaySet();
$waySet2617->setPoint($point2617);
$waySet2617->setWay($way);
$em->persist($waySet2617);


$point2618 = new Point();
$point2618->setLatitude(48.0687021872493);
$point2618->setLongitude(28.500723838806152);
$em->persist($point2618);


$waySet2618 = new WaySet();
$waySet2618->setPoint($point2618);
$waySet2618->setWay($way);
$em->persist($waySet2618);


$point2619 = new Point();
$point2619->setLatitude(48.06744035261725);
$point2619->setLongitude(28.500723838806152);
$em->persist($point2619);


$waySet2619 = new WaySet();
$waySet2619->setPoint($point2619);
$waySet2619->setWay($way);
$em->persist($waySet2619);


$point2620 = new Point();
$point2620->setLatitude(48.0660924496324);
$point2620->setLongitude(28.500123023986816);
$em->persist($point2620);


$waySet2620 = new WaySet();
$waySet2620->setPoint($point2620);
$waySet2620->setWay($way);
$em->persist($waySet2620);


$point2621 = new Point();
$point2621->setLatitude(48.065834336523196);
$point2621->setLongitude(28.49874973297119);
$em->persist($point2621);


$waySet2621 = new WaySet();
$waySet2621->setPoint($point2621);
$waySet2621->setWay($way);
$em->persist($waySet2621);


$point2622 = new Point();
$point2622->setLatitude(48.06543282466942);
$point2622->setLongitude(28.49480152130127);
$em->persist($point2622);


$waySet2622 = new WaySet();
$waySet2622->setPoint($point2622);
$waySet2622->setWay($way);
$em->persist($waySet2622);


$point2623 = new Point();
$point2623->setLatitude(48.06563358098782);
$point2623->setLongitude(28.49171161651611);
$em->persist($point2623);


$waySet2623 = new WaySet();
$waySet2623->setPoint($point2623);
$waySet2623->setWay($way);
$em->persist($waySet2623);


$point2624 = new Point();
$point2624->setLatitude(48.06592037437007);
$point2624->setLongitude(28.48978042602539);
$em->persist($point2624);


$waySet2624 = new WaySet();
$waySet2624->setPoint($point2624);
$waySet2624->setWay($way);
$em->persist($waySet2624);


$point2625 = new Point();
$point2625->setLatitude(48.07062355783574);
$point2625->setLongitude(28.481025695800778);
$em->persist($point2625);


$waySet2625 = new WaySet();
$waySet2625->setPoint($point2625);
$waySet2625->setWay($way);
$em->persist($waySet2625);


$point2626 = new Point();
$point2626->setLatitude(48.07222942448522);
$point2626->setLongitude(28.47433090209961);
$em->persist($point2626);


$waySet2626 = new WaySet();
$waySet2626->setPoint($point2626);
$waySet2626->setWay($way);
$em->persist($waySet2626);


$point2627 = new Point();
$point2627->setLatitude(48.07329041602828);
$point2627->setLongitude(28.468022346496582);
$em->persist($point2627);


$waySet2627 = new WaySet();
$waySet2627->setPoint($point2627);
$waySet2627->setWay($way);
$em->persist($waySet2627);


$point2628 = new Point();
$point2628->setLatitude(48.07498222215327);
$point2628->setLongitude(28.461542129516598);
$em->persist($point2628);


$waySet2628 = new WaySet();
$waySet2628->setPoint($point2628);
$waySet2628->setWay($way);
$em->persist($waySet2628);


$point2629 = new Point();
$point2629->setLatitude(48.0763012188464);
$point2629->setLongitude(28.458580970764157);
$em->persist($point2629);


$waySet2629 = new WaySet();
$waySet2629->setPoint($point2629);
$waySet2629->setWay($way);
$em->persist($waySet2629);


$point2630 = new Point();
$point2630->setLatitude(48.07782089050536);
$point2630->setLongitude(28.455448150634762);
$em->persist($point2630);


$waySet2630 = new WaySet();
$waySet2630->setPoint($point2630);
$waySet2630->setWay($way);
$em->persist($waySet2630);


$point2631 = new Point();
$point2631->setLatitude(48.0801146495084);
$point2631->setLongitude(28.45287322998047);
$em->persist($point2631);


$waySet2631 = new WaySet();
$waySet2631->setPoint($point2631);
$waySet2631->setWay($way);
$em->persist($waySet2631);


$point2632 = new Point();
$point2632->setLatitude(48.083268401154136);
$point2632->setLongitude(28.449482917785645);
$em->persist($point2632);


$waySet2632 = new WaySet();
$waySet2632->setPoint($point2632);
$waySet2632->setWay($way);
$em->persist($waySet2632);


$point2633 = new Point();
$point2633->setLatitude(48.08771199575739);
$point2633->setLongitude(28.446822166442868);
$em->persist($point2633);


$waySet2633 = new WaySet();
$waySet2633->setPoint($point2633);
$waySet2633->setWay($way);
$em->persist($waySet2633);


$point2634 = new Point();
$point2634->setLatitude(48.091868559298064);
$point2634->setLongitude(28.44334602355957);
$em->persist($point2634);


$waySet2634 = new WaySet();
$waySet2634->setPoint($point2634);
$waySet2634->setWay($way);
$em->persist($waySet2634);


$point2635 = new Point();
$point2635->setLatitude(48.094763622296554);
$point2635->setLongitude(28.440041542053223);
$em->persist($point2635);


$waySet2635 = new WaySet();
$waySet2635->setPoint($point2635);
$waySet2635->setWay($way);
$em->persist($waySet2635);


$point2636 = new Point();
$point2636->setLatitude(48.09820308923309);
$point2636->setLongitude(28.436994552612305);
$em->persist($point2636);


$waySet2636 = new WaySet();
$waySet2636->setPoint($point2636);
$waySet2636->setWay($way);
$em->persist($waySet2636);


$point2637 = new Point();
$point2637->setLatitude(48.10126975320414);
$point2637->setLongitude(28.436007499694824);
$em->persist($point2637);


$waySet2637 = new WaySet();
$waySet2637->setPoint($point2637);
$waySet2637->setWay($way);
$em->persist($waySet2637);


$point2638 = new Point();
$point2638->setLatitude(48.10522461980645);
$point2638->setLongitude(28.435277938842773);
$em->persist($point2638);


$waySet2638 = new WaySet();
$waySet2638->setPoint($point2638);
$waySet2638->setWay($way);
$em->persist($waySet2638);


$point2639 = new Point();
$point2639->setLatitude(48.107717748890366);
$point2639->setLongitude(28.43484878540039);
$em->persist($point2639);


$waySet2639 = new WaySet();
$waySet2639->setPoint($point2639);
$waySet2639->setWay($way);
$em->persist($waySet2639);


$point2640 = new Point();
$point2640->setLatitude(48.110755191005865);
$point2640->setLongitude(28.43360424041748);
$em->persist($point2640);


$waySet2640 = new WaySet();
$waySet2640->setPoint($point2640);
$waySet2640->setWay($way);
$em->persist($waySet2640);


$point2641 = new Point();
$point2641->setLatitude(48.115024499505225);
$point2641->setLongitude(28.429012298583984);
$em->persist($point2641);


$waySet2641 = new WaySet();
$waySet2641->setPoint($point2641);
$waySet2641->setWay($way);
$em->persist($waySet2641);


$point2642 = new Point();
$point2642->setLatitude(48.11774635666117);
$point2642->setLongitude(28.425064086914062);
$em->persist($point2642);


$waySet2642 = new WaySet();
$waySet2642->setPoint($point2642);
$waySet2642->setWay($way);
$em->persist($waySet2642);


$point2643 = new Point();
$point2643->setLatitude(48.121585362672484);
$point2643->setLongitude(28.422060012817383);
$em->persist($point2643);


$waySet2643 = new WaySet();
$waySet2643->setPoint($point2643);
$waySet2643->setWay($way);
$em->persist($waySet2643);


$point2644 = new Point();
$point2644->setLatitude(48.12496574236342);
$point2644->setLongitude(28.42115879058838);
$em->persist($point2644);


$waySet2644 = new WaySet();
$waySet2644->setPoint($point2644);
$waySet2644->setWay($way);
$em->persist($waySet2644);


$point2645 = new Point();
$point2645->setLatitude(48.12854641040884);
$point2645->setLongitude(28.42214584350586);
$em->persist($point2645);


$waySet2645 = new WaySet();
$waySet2645->setPoint($point2645);
$waySet2645->setWay($way);
$em->persist($waySet2645);


$point2646 = new Point();
$point2646->setLatitude(48.13195497444333);
$point2646->setLongitude(28.423776626586914);
$em->persist($point2646);


$waySet2646 = new WaySet();
$waySet2646->setPoint($point2646);
$waySet2646->setWay($way);
$em->persist($waySet2646);


$point2647 = new Point();
$point2647->setLatitude(48.13444680666745);
$point2647->setLongitude(28.426437377929684);
$em->persist($point2647);


$waySet2647 = new WaySet();
$waySet2647->setPoint($point2647);
$waySet2647->setWay($way);
$em->persist($waySet2647);


$point2648 = new Point();
$point2648->setLatitude(48.13796953555123);
$point2648->setLongitude(28.432531356811523);
$em->persist($point2648);


$waySet2648 = new WaySet();
$waySet2648->setPoint($point2648);
$waySet2648->setWay($way);
$em->persist($waySet2648);


$point2649 = new Point();
$point2649->setLatitude(48.140718814547355);
$point2649->setLongitude(28.437809944152832);
$em->persist($point2649);


$waySet2649 = new WaySet();
$waySet2649->setPoint($point2649);
$waySet2649->setWay($way);
$em->persist($waySet2649);


$point2650 = new Point();
$point2650->setLatitude(48.143582490274056);
$point2650->setLongitude(28.43939781188965);
$em->persist($point2650);


$waySet2650 = new WaySet();
$waySet2650->setPoint($point2650);
$waySet2650->setWay($way);
$em->persist($waySet2650);


$point2651 = new Point();
$point2651->setLatitude(48.14658917785153);
$point2651->setLongitude(28.43862533569336);
$em->persist($point2651);


$waySet2651 = new WaySet();
$waySet2651->setPoint($point2651);
$waySet2651->setWay($way);
$em->persist($waySet2651);


$point2652 = new Point();
$point2652->setLatitude(48.150139705888485);
$point2652->setLongitude(28.43708038330078);
$em->persist($point2652);


$waySet2652 = new WaySet();
$waySet2652->setPoint($point2652);
$waySet2652->setWay($way);
$em->persist($waySet2652);


$point2653 = new Point();
$point2653->setLatitude(48.15600899174947);
$point2653->setLongitude(28.435492515563965);
$em->persist($point2653);


$waySet2653 = new WaySet();
$waySet2653->setPoint($point2653);
$waySet2653->setWay($way);
$em->persist($waySet2653);


$point2654 = new Point();
$point2654->setLatitude(48.15973063005583);
$point2654->setLongitude(28.435492515563965);
$em->persist($point2654);


$waySet2654 = new WaySet();
$waySet2654->setPoint($point2654);
$waySet2654->setWay($way);
$em->persist($waySet2654);


$point2655 = new Point();
$point2655->setLatitude(48.16373824631516);
$point2655->setLongitude(28.434762954711914);
$em->persist($point2655);


$waySet2655 = new WaySet();
$waySet2655->setPoint($point2655);
$waySet2655->setWay($way);
$em->persist($waySet2655);


$point2656 = new Point();
$point2656->setLatitude(48.16840386219995);
$point2656->setLongitude(28.433475494384766);
$em->persist($point2656);


$waySet2656 = new WaySet();
$waySet2656->setPoint($point2656);
$waySet2656->setWay($way);
$em->persist($waySet2656);


$point2657 = new Point();
$point2657->setLatitude(48.17229632122396);
$point2657->setLongitude(28.428454399108887);
$em->persist($point2657);


$waySet2657 = new WaySet();
$waySet2657->setPoint($point2657);
$waySet2657->setWay($way);
$em->persist($waySet2657);


$point2658 = new Point();
$point2658->setLatitude(48.17435691521385);
$point2658->setLongitude(28.421931266784668);
$em->persist($point2658);


$waySet2658 = new WaySet();
$waySet2658->setPoint($point2658);
$waySet2658->setWay($way);
$em->persist($waySet2658);


$point2659 = new Point();
$point2659->setLatitude(48.17621710255478);
$point2659->setLongitude(28.416223526000977);
$em->persist($point2659);


$waySet2659 = new WaySet();
$waySet2659->setPoint($point2659);
$waySet2659->setWay($way);
$em->persist($waySet2659);


$point2660 = new Point();
$point2660->setLatitude(48.17707562779614);
$point2660->setLongitude(28.410301208496094);
$em->persist($point2660);


$waySet2660 = new WaySet();
$waySet2660->setPoint($point2660);
$waySet2660->setWay($way);
$em->persist($waySet2660);


$point2661 = new Point();
$point2661->setLatitude(48.17673221942472);
$point2661->setLongitude(28.400988578796387);
$em->persist($point2661);


$waySet2661 = new WaySet();
$waySet2661->setPoint($point2661);
$waySet2661->setWay($way);
$em->persist($waySet2661);


$point2662 = new Point();
$point2662->setLatitude(48.176531896812484);
$point2662->setLongitude(28.391804695129395);
$em->persist($point2662);


$waySet2662 = new WaySet();
$waySet2662->setPoint($point2662);
$waySet2662->setWay($way);
$em->persist($waySet2662);


$point2663 = new Point();
$point2663->setLatitude(48.1750437614756);
$point2663->setLongitude(28.383049964904785);
$em->persist($point2663);


$waySet2663 = new WaySet();
$waySet2663->setPoint($point2663);
$waySet2663->setWay($way);
$em->persist($waySet2663);


$point2664 = new Point();
$point2664->setLatitude(48.17367005975134);
$point2664->setLongitude(28.3817195892334);
$em->persist($point2664);


$waySet2664 = new WaySet();
$waySet2664->setPoint($point2664);
$waySet2664->setWay($way);
$em->persist($waySet2664);


$point2665 = new Point();
$point2665->setLatitude(48.17275423815566);
$point2665->setLongitude(28.37957382202148);
$em->persist($point2665);


$waySet2665 = new WaySet();
$waySet2665->setPoint($point2665);
$waySet2665->setWay($way);
$em->persist($waySet2665);


$point2666 = new Point();
$point2666->setLatitude(48.169233896628135);
$point2666->setLongitude(28.376269340515137);
$em->persist($point2666);


$waySet2666 = new WaySet();
$waySet2666->setPoint($point2666);
$waySet2666->setWay($way);
$em->persist($waySet2666);


$point2667 = new Point();
$point2667->setLatitude(48.165083590146274);
$point2667->setLongitude(28.371634483337402);
$em->persist($point2667);


$waySet2667 = new WaySet();
$waySet2667->setPoint($point2667);
$waySet2667->setWay($way);
$em->persist($waySet2667);


$point2668 = new Point();
$point2668->setLatitude(48.16016003248815);
$point2668->setLongitude(28.368716239929196);
$em->persist($point2668);


$waySet2668 = new WaySet();
$waySet2668->setPoint($point2668);
$waySet2668->setWay($way);
$em->persist($waySet2668);


$point2669 = new Point();
$point2669->setLatitude(48.158270634900965);
$point2669->setLongitude(28.36790084838867);
$em->persist($point2669);


$waySet2669 = new WaySet();
$waySet2669->setPoint($point2669);
$waySet2669->setWay($way);
$em->persist($waySet2669);


$point2670 = new Point();
$point2670->setLatitude(48.15721139672328);
$point2670->setLongitude(28.368287086486816);
$em->persist($point2670);


$waySet2670 = new WaySet();
$waySet2670->setPoint($point2670);
$waySet2670->setWay($way);
$em->persist($waySet2670);


$point2671 = new Point();
$point2671->setLatitude(48.15360409726371);
$point2671->setLongitude(28.366870880126953);
$em->persist($point2671);


$waySet2671 = new WaySet();
$waySet2671->setPoint($point2671);
$waySet2671->setWay($way);
$em->persist($waySet2671);


$point2672 = new Point();
$point2672->setLatitude(48.1389432553674);
$point2672->setLongitude(28.35644245147705);
$em->persist($point2672);


$waySet2672 = new WaySet();
$waySet2672->setPoint($point2672);
$waySet2672->setWay($way);
$em->persist($waySet2672);


$point2673 = new Point();
$point2673->setLatitude(48.13656620097642);
$point2673->setLongitude(28.35150718688965);
$em->persist($point2673);


$waySet2673 = new WaySet();
$waySet2673->setPoint($point2673);
$waySet2673->setWay($way);
$em->persist($waySet2673);


$point2674 = new Point();
$point2674->setLatitude(48.13642300141411);
$point2674->setLongitude(28.349833488464355);
$em->persist($point2674);


$waySet2674 = new WaySet();
$waySet2674->setPoint($point2674);
$waySet2674->setWay($way);
$em->persist($waySet2674);


$point2675 = new Point();
$point2675->setLatitude(48.134962343064764);
$point2675->setLongitude(28.34575653076172);
$em->persist($point2675);


$waySet2675 = new WaySet();
$waySet2675->setPoint($point2675);
$waySet2675->setWay($way);
$em->persist($waySet2675);


$point2676 = new Point();
$point2676->setLatitude(48.13381669959688);
$point2676->setLongitude(28.339791297912594);
$em->persist($point2676);


$waySet2676 = new WaySet();
$waySet2676->setPoint($point2676);
$waySet2676->setWay($way);
$em->persist($waySet2676);


$point2677 = new Point();
$point2677->setLatitude(48.13284288255136);
$point2677->setLongitude(28.32996368408203);
$em->persist($point2677);


$waySet2677 = new WaySet();
$waySet2677->setPoint($point2677);
$waySet2677->setWay($way);
$em->persist($waySet2677);


$point2678 = new Point();
$point2678->setLatitude(48.13315794302823);
$point2678->setLongitude(28.324856758117676);
$em->persist($point2678);


$waySet2678 = new WaySet();
$waySet2678->setPoint($point2678);
$waySet2678->setWay($way);
$em->persist($waySet2678);


$point2679 = new Point();
$point2679->setLatitude(48.13278559862057);
$point2679->setLongitude(28.32228183746338);
$em->persist($point2679);


$waySet2679 = new WaySet();
$waySet2679->setPoint($point2679);
$waySet2679->setWay($way);
$em->persist($waySet2679);


$point2680 = new Point();
$point2680->setLatitude(48.13547787428585);
$point2680->setLongitude(28.31374168395996);
$em->persist($point2680);


$waySet2680 = new WaySet();
$waySet2680->setPoint($point2680);
$waySet2680->setWay($way);
$em->persist($waySet2680);


$point2681 = new Point();
$point2681->setLatitude(48.137482668717624);
$point2681->setLongitude(28.309535980224606);
$em->persist($point2681);


$waySet2681 = new WaySet();
$waySet2681->setPoint($point2681);
$waySet2681->setWay($way);
$em->persist($waySet2681);


$point2682 = new Point();
$point2682->setLatitude(48.13948738486797);
$point2682->setLongitude(28.306617736816406);
$em->persist($point2682);


$waySet2682 = new WaySet();
$waySet2682->setPoint($point2682);
$waySet2682->setWay($way);
$em->persist($waySet2682);


$point2683 = new Point();
$point2683->setLatitude(48.14180703014268);
$point2683->setLongitude(28.305201530456543);
$em->persist($point2683);


$waySet2683 = new WaySet();
$waySet2683->setPoint($point2683);
$waySet2683->setWay($way);
$em->persist($waySet2683);


$point2684 = new Point();
$point2684->setLatitude(48.143868849060205);
$point2684->setLongitude(28.305072784423828);
$em->persist($point2684);


$waySet2684 = new WaySet();
$waySet2684->setPoint($point2684);
$waySet2684->setWay($way);
$em->persist($waySet2684);


$point2685 = new Point();
$point2685->setLatitude(48.1461023927647);
$point2685->setLongitude(28.30601692199707);
$em->persist($point2685);


$waySet2685 = new WaySet();
$waySet2685->setPoint($point2685);
$waySet2685->setWay($way);
$em->persist($waySet2685);


$point2686 = new Point();
$point2686->setLatitude(48.149423893392175);
$point2686->setLongitude(28.307175636291504);
$em->persist($point2686);


$waySet2686 = new WaySet();
$waySet2686->setPoint($point2686);
$waySet2686->setWay($way);
$em->persist($waySet2686);


$point2687 = new Point();
$point2687->setLatitude(48.15566544229543);
$point2687->setLongitude(28.305845260620117);
$em->persist($point2687);


$waySet2687 = new WaySet();
$waySet2687->setPoint($point2687);
$waySet2687->setWay($way);
$em->persist($waySet2687);


$point2688 = new Point();
$point2688->setLatitude(48.15818475153912);
$point2688->setLongitude(28.30575942993164);
$em->persist($point2688);


$waySet2688 = new WaySet();
$waySet2688->setPoint($point2688);
$waySet2688->setWay($way);
$em->persist($waySet2688);


$point2689 = new Point();
$point2689->setLatitude(48.16058943132621);
$point2689->setLongitude(28.30747604370117);
$em->persist($point2689);


$waySet2689 = new WaySet();
$waySet2689->setPoint($point2689);
$waySet2689->setWay($way);
$em->persist($waySet2689);


$point2690 = new Point();
$point2690->setLatitude(48.16265049571724);
$point2690->setLongitude(28.309879302978516);
$em->persist($point2690);


$waySet2690 = new WaySet();
$waySet2690->setPoint($point2690);
$waySet2690->setWay($way);
$em->persist($waySet2690);


$point2691 = new Point();
$point2691->setLatitude(48.165283957484974);
$point2691->setLongitude(28.314943313598633);
$em->persist($point2691);


$waySet2691 = new WaySet();
$waySet2691->setPoint($point2691);
$waySet2691->setWay($way);
$em->persist($waySet2691);


$point2692 = new Point();
$point2692->setLatitude(48.16731621054547);
$point2692->setLongitude(28.32077980041504);
$em->persist($point2692);


$waySet2692 = new WaySet();
$waySet2692->setPoint($point2692);
$waySet2692->setWay($way);
$em->persist($waySet2692);


$point2693 = new Point();
$point2693->setLatitude(48.17006391762229);
$point2693->setLongitude(28.327431678771973);
$em->persist($point2693);


$waySet2693 = new WaySet();
$waySet2693->setPoint($point2693);
$waySet2693->setWay($way);
$em->persist($waySet2693);


$point2694 = new Point();
$point2694->setLatitude(48.17575921654784);
$point2694->setLongitude(28.34047794342041);
$em->persist($point2694);


$waySet2694 = new WaySet();
$waySet2694->setPoint($point2694);
$waySet2694->setWay($way);
$em->persist($waySet2694);


$point2695 = new Point();
$point2695->setLatitude(48.17595954217904);
$point2695->setLongitude(28.342151641845703);
$em->persist($point2695);


$waySet2695 = new WaySet();
$waySet2695->setPoint($point2695);
$waySet2695->setWay($way);
$em->persist($waySet2695);


$point2696 = new Point();
$point2696->setLatitude(48.17819168911773);
$point2696->setLongitude(28.34721565246582);
$em->persist($point2696);


$waySet2696 = new WaySet();
$waySet2696->setPoint($point2696);
$waySet2696->setWay($way);
$em->persist($waySet2696);


$point2697 = new Point();
$point2697->setLatitude(48.18337104030167);
$point2697->setLongitude(28.353266716003414);
$em->persist($point2697);


$waySet2697 = new WaySet();
$waySet2697->setPoint($point2697);
$waySet2697->setWay($way);
$em->persist($waySet2697);


$point2698 = new Point();
$point2698->setLatitude(48.184401125107684);
$point2698->setLongitude(28.355798721313477);
$em->persist($point2698);


$waySet2698 = new WaySet();
$waySet2698->setPoint($point2698);
$waySet2698->setWay($way);
$em->persist($waySet2698);


$point2699 = new Point();
$point2699->setLatitude(48.1901806614538);
$point2699->setLongitude(28.360648155212402);
$em->persist($point2699);


$waySet2699 = new WaySet();
$waySet2699->setPoint($point2699);
$waySet2699->setWay($way);
$em->persist($waySet2699);


$point2700 = new Point();
$point2700->setLatitude(48.192183319019314);
$point2700->setLongitude(28.36167812347412);
$em->persist($point2700);


$waySet2700 = new WaySet();
$waySet2700->setPoint($point2700);
$waySet2700->setWay($way);
$em->persist($waySet2700);


$point2701 = new Point();
$point2701->setLatitude(48.1950155153876);
$point2701->setLongitude(28.361849784851074);
$em->persist($point2701);


$waySet2701 = new WaySet();
$waySet2701->setPoint($point2701);
$waySet2701->setWay($way);
$em->persist($waySet2701);


$point2702 = new Point();
$point2702->setLatitude(48.202166829633335);
$point2702->setLongitude(28.365755081176754);
$em->persist($point2702);


$waySet2702 = new WaySet();
$waySet2702->setPoint($point2702);
$waySet2702->setWay($way);
$em->persist($waySet2702);


$point2703 = new Point();
$point2703->setLatitude(48.20728655738642);
$point2703->setLongitude(28.368115425109863);
$em->persist($point2703);


$waySet2703 = new WaySet();
$waySet2703->setPoint($point2703);
$waySet2703->setWay($way);
$em->persist($waySet2703);


$point2704 = new Point();
$point2704->setLatitude(48.213692646648035);
$point2704->setLongitude(28.36948871612549);
$em->persist($point2704);


$waySet2704 = new WaySet();
$waySet2704->setPoint($point2704);
$waySet2704->setWay($way);
$em->persist($waySet2704);


$point2705 = new Point();
$point2705->setLatitude(48.21709555562127);
$point2705->setLongitude(28.369832038879395);
$em->persist($point2705);


$waySet2705 = new WaySet();
$waySet2705->setPoint($point2705);
$waySet2705->setWay($way);
$em->persist($waySet2705);


$point2706 = new Point();
$point2706->setLatitude(48.224386741854296);
$point2706->setLongitude(28.36888790130615);
$em->persist($point2706);


$waySet2706 = new WaySet();
$waySet2706->setPoint($point2706);
$waySet2706->setWay($way);
$em->persist($waySet2706);


$point2707 = new Point();
$point2707->setLatitude(48.23030470584407);
$point2707->setLongitude(28.366613388061523);
$em->persist($point2707);


$waySet2707 = new WaySet();
$waySet2707->setPoint($point2707);
$waySet2707->setWay($way);
$em->persist($waySet2707);


$point2708 = new Point();
$point2708->setLatitude(48.23222003552161);
$point2708->setLongitude(28.36669921875);
$em->persist($point2708);


$waySet2708 = new WaySet();
$waySet2708->setPoint($point2708);
$waySet2708->setWay($way);
$em->persist($waySet2708);


$point2709 = new Point();
$point2709->setLatitude(48.239337572755716);
$point2709->setLongitude(28.36215019226074);
$em->persist($point2709);


$waySet2709 = new WaySet();
$waySet2709->setPoint($point2709);
$waySet2709->setWay($way);
$em->persist($waySet2709);


$point2710 = new Point();
$point2710->setLatitude(48.242824518748975);
$point2710->setLongitude(28.359146118164062);
$em->persist($point2710);


$waySet2710 = new WaySet();
$waySet2710->setPoint($point2710);
$waySet2710->setWay($way);
$em->persist($waySet2710);


$point2711 = new Point();
$point2711->setLatitude(48.24496801511611);
$point2711->setLongitude(28.356013298034668);
$em->persist($point2711);


$waySet2711 = new WaySet();
$waySet2711->setPoint($point2711);
$waySet2711->setWay($way);
$em->persist($waySet2711);


$point2712 = new Point();
$point2712->setLatitude(48.246311227056054);
$point2712->setLongitude(28.353180885314938);
$em->persist($point2712);


$waySet2712 = new WaySet();
$waySet2712->setPoint($point2712);
$waySet2712->setWay($way);
$em->persist($waySet2712);


$point2713 = new Point();
$point2713->setLatitude(48.24734004638637);
$point2713->setLongitude(28.348288536071777);
$em->persist($point2713);


$waySet2713 = new WaySet();
$waySet2713->setPoint($point2713);
$waySet2713->setWay($way);
$em->persist($waySet2713);


$point2714 = new Point();
$point2714->setLatitude(48.24653985536243);
$point2714->setLongitude(28.342881202697754);
$em->persist($point2714);


$waySet2714 = new WaySet();
$waySet2714->setPoint($point2714);
$waySet2714->setWay($way);
$em->persist($waySet2714);


$point2715 = new Point();
$point2715->setLatitude(48.24576823073236);
$point2715->setLongitude(28.34197998046875);
$em->persist($point2715);


$waySet2715 = new WaySet();
$waySet2715->setPoint($point2715);
$waySet2715->setWay($way);
$em->persist($waySet2715);


$point2716 = new Point();
$point2716->setLatitude(48.242881679817835);
$point2716->setLongitude(28.335628509521484);
$em->persist($point2716);


$waySet2716 = new WaySet();
$waySet2716->setPoint($point2716);
$waySet2716->setWay($way);
$em->persist($waySet2716);


$point2717 = new Point();
$point2717->setLatitude(48.23985205514466);
$point2717->setLongitude(28.33125114440918);
$em->persist($point2717);


$waySet2717 = new WaySet();
$waySet2717->setPoint($point2717);
$waySet2717->setWay($way);
$em->persist($waySet2717);


$point2718 = new Point();
$point2718->setLatitude(48.239651979274896);
$point2718->setLongitude(28.330092430114746);
$em->persist($point2718);


$waySet2718 = new WaySet();
$waySet2718->setPoint($point2718);
$waySet2718->setWay($way);
$em->persist($waySet2718);


$point2719 = new Point();
$point2719->setLatitude(48.236650747327644);
$point2719->setLongitude(28.329405784606934);
$em->persist($point2719);


$waySet2719 = new WaySet();
$waySet2719->setPoint($point2719);
$waySet2719->setWay($way);
$em->persist($waySet2719);


$point2720 = new Point();
$point2720->setLatitude(48.23467841332532);
$point2720->setLongitude(28.326959609985348);
$em->persist($point2720);


$waySet2720 = new WaySet();
$waySet2720->setPoint($point2720);
$waySet2720->setWay($way);
$em->persist($waySet2720);


$point2721 = new Point();
$point2721->setLatitude(48.233249138277415);
$point2721->setLongitude(28.323354721069336);
$em->persist($point2721);


$waySet2721 = new WaySet();
$waySet2721->setPoint($point2721);
$waySet2721->setWay($way);
$em->persist($waySet2721);


$point2722 = new Point();
$point2722->setLatitude(48.23316338050494);
$point2722->setLongitude(28.319921493530273);
$em->persist($point2722);


$waySet2722 = new WaySet();
$waySet2722->setPoint($point2722);
$waySet2722->setWay($way);
$em->persist($waySet2722);


$point2723 = new Point();
$point2723->setLatitude(48.234849923648135);
$point2723->setLongitude(28.31618785858154);
$em->persist($point2723);


$waySet2723 = new WaySet();
$waySet2723->setPoint($point2723);
$waySet2723->setWay($way);
$em->persist($waySet2723);


$point2724 = new Point();
$point2724->setLatitude(48.237422509501464);
$point2724->setLongitude(28.312969207763672);
$em->persist($point2724);


$waySet2724 = new WaySet();
$waySet2724->setPoint($point2724);
$waySet2724->setWay($way);
$em->persist($waySet2724);


$point2725 = new Point();
$point2725->setLatitude(48.23985205514466);
$point2725->setLongitude(28.31103801727295);
$em->persist($point2725);


$waySet2725 = new WaySet();
$waySet2725->setPoint($point2725);
$waySet2725->setWay($way);
$em->persist($waySet2725);


$point2726 = new Point();
$point2726->setLatitude(48.241481215241805);
$point2726->setLongitude(28.30876350402832);
$em->persist($point2726);


$waySet2726 = new WaySet();
$waySet2726->setPoint($point2726);
$waySet2726->setWay($way);
$em->persist($waySet2726);


$point2727 = new Point();
$point2727->setLatitude(48.241681283957284);
$point2727->setLongitude(28.305931091308594);
$em->persist($point2727);


$waySet2727 = new WaySet();
$waySet2727->setPoint($point2727);
$waySet2727->setWay($way);
$em->persist($waySet2727);


$point2728 = new Point();
$point2728->setLatitude(48.24122398288638);
$point2728->setLongitude(28.30301284790039);
$em->persist($point2728);


$waySet2728 = new WaySet();
$waySet2728->setPoint($point2728);
$waySet2728->setWay($way);
$em->persist($waySet2728);


$point2729 = new Point();
$point2729->setLatitude(48.23953764985514);
$point2729->setLongitude(28.299493789672848);
$em->persist($point2729);


$waySet2729 = new WaySet();
$waySet2729->setPoint($point2729);
$waySet2729->setWay($way);
$em->persist($waySet2729);


$point2730 = new Point();
$point2730->setLatitude(48.23124808613695);
$point2730->setLongitude(28.2852029800415);
$em->persist($point2730);


$waySet2730 = new WaySet();
$waySet2730->setPoint($point2730);
$waySet2730->setWay($way);
$em->persist($waySet2730);


$point2731 = new Point();
$point2731->setLatitude(48.229018250144584);
$point2731->setLongitude(28.275461196899414);
$em->persist($point2731);


$waySet2731 = new WaySet();
$waySet2731->setPoint($point2731);
$waySet2731->setWay($way);
$em->persist($waySet2731);


$point2732 = new Point();
$point2732->setLatitude(48.22038386621159);
$point2732->setLongitude(28.255677223205563);
$em->persist($point2732);


$waySet2732 = new WaySet();
$waySet2732->setPoint($point2732);
$waySet2732->setWay($way);
$em->persist($waySet2732);


$point2733 = new Point();
$point2733->setLatitude(48.21495089144402);
$point2733->setLongitude(28.242416381835938);
$em->persist($point2733);


$waySet2733 = new WaySet();
$waySet2733->setPoint($point2733);
$waySet2733->setWay($way);
$em->persist($waySet2733);


$point2734 = new Point();
$point2734->setLatitude(48.21031811022496);
$point2734->setLongitude(28.231773376464844);
$em->persist($point2734);


$waySet2734 = new WaySet();
$waySet2734->setPoint($point2734);
$waySet2734->setWay($way);
$em->persist($waySet2734);


$point2735 = new Point();
$point2735->setLatitude(48.2068003482519);
$point2735->setLongitude(28.22155952453613);
$em->persist($point2735);


$waySet2735 = new WaySet();
$waySet2735->setPoint($point2735);
$waySet2735->setWay($way);
$em->persist($waySet2735);


$point2736 = new Point();
$point2736->setLatitude(48.20585651734374);
$point2736->setLongitude(28.217697143554684);
$em->persist($point2736);


$waySet2736 = new WaySet();
$waySet2736->setPoint($point2736);
$waySet2736->setWay($way);
$em->persist($waySet2736);


$point2737 = new Point();
$point2737->setLatitude(48.2050556774789);
$point2737->setLongitude(28.21340560913086);
$em->persist($point2737);


$waySet2737 = new WaySet();
$waySet2737->setPoint($point2737);
$waySet2737->setWay($way);
$em->persist($waySet2737);


$point2738 = new Point();
$point2738->setLatitude(48.20485546555615);
$point2738->setLongitude(28.208169937133786);
$em->persist($point2738);


$waySet2738 = new WaySet();
$waySet2738->setPoint($point2738);
$waySet2738->setWay($way);
$em->persist($waySet2738);


$point2739 = new Point();
$point2739->setLatitude(48.20528449014656);
$point2739->setLongitude(28.20267677307129);
$em->persist($point2739);


$waySet2739 = new WaySet();
$waySet2739->setPoint($point2739);
$waySet2739->setWay($way);
$em->persist($waySet2739);


$point2740 = new Point();
$point2740->setLatitude(48.20931714564157);
$point2740->setLongitude(28.19392204284668);
$em->persist($point2740);


$waySet2740 = new WaySet();
$waySet2740->setPoint($point2740);
$waySet2740->setWay($way);
$em->persist($waySet2740);


$point2741 = new Point();
$point2741->setLatitude(48.21177662359291);
$point2741->setLongitude(28.190059661865234);
$em->persist($point2741);


$waySet2741 = new WaySet();
$waySet2741->setPoint($point2741);
$waySet2741->setWay($way);
$em->persist($waySet2741);


$point2742 = new Point();
$point2742->setLatitude(48.21466492943276);
$point2742->setLongitude(28.187012672424316);
$em->persist($point2742);


$waySet2742 = new WaySet();
$waySet2742->setPoint($point2742);
$waySet2742->setWay($way);
$em->persist($waySet2742);


$point2743 = new Point();
$point2743->setLatitude(48.21932591106745);
$point2743->setLongitude(28.185596466064453);
$em->persist($point2743);


$waySet2743 = new WaySet();
$waySet2743->setPoint($point2743);
$waySet2743->setWay($way);
$em->persist($waySet2743);


$point2744 = new Point();
$point2744->setLatitude(48.221899277382136);
$point2744->setLongitude(28.18568229675293);
$em->persist($point2744);


$waySet2744 = new WaySet();
$waySet2744->setPoint($point2744);
$waySet2744->setWay($way);
$em->persist($waySet2744);


$point2745 = new Point();
$point2745->setLatitude(48.22535882155546);
$point2745->setLongitude(28.18482398986816);
$em->persist($point2745);


$waySet2745 = new WaySet();
$waySet2745->setPoint($point2745);
$waySet2745->setWay($way);
$em->persist($waySet2745);


$point2746 = new Point();
$point2746->setLatitude(48.233134794548846);
$point2746->setLongitude(28.182249069213867);
$em->persist($point2746);


$waySet2746 = new WaySet();
$waySet2746->setPoint($point2746);
$waySet2746->setWay($way);
$em->persist($waySet2746);


$point2747 = new Point();
$point2747->setLatitude(48.2399663838618);
$point2747->setLongitude(28.182034492492676);
$em->persist($point2747);


$waySet2747 = new WaySet();
$waySet2747->setPoint($point2747);
$waySet2747->setWay($way);
$em->persist($waySet2747);


$point2748 = new Point();
$point2748->setLatitude(48.24413920717225);
$point2748->setLongitude(28.183321952819824);
$em->persist($point2748);


$waySet2748 = new WaySet();
$waySet2748->setPoint($point2748);
$waySet2748->setWay($way);
$em->persist($waySet2748);


$point2749 = new Point();
$point2749->setLatitude(48.24899754510945);
$point2749->setLongitude(28.18666934967041);
$em->persist($point2749);


$waySet2749 = new WaySet();
$waySet2749->setPoint($point2749);
$waySet2749->setWay($way);
$em->persist($waySet2749);


$point2750 = new Point();
$point2750->setLatitude(48.25119793455411);
$point2750->setLongitude(28.186712265014645);
$em->persist($point2750);


$waySet2750 = new WaySet();
$waySet2750->setPoint($point2750);
$waySet2750->setWay($way);
$em->persist($waySet2750);


$point2751 = new Point();
$point2751->setLatitude(48.25531269448708);
$point2751->setLongitude(28.18242073059082);
$em->persist($point2751);


$waySet2751 = new WaySet();
$waySet2751->setPoint($point2751);
$waySet2751->setWay($way);
$em->persist($waySet2751);


$point2752 = new Point();
$point2752->setLatitude(48.25885569465299);
$point2752->setLongitude(28.169932365417477);
$em->persist($point2752);


$waySet2752 = new WaySet();
$waySet2752->setPoint($point2752);
$waySet2752->setWay($way);
$em->persist($waySet2752);


$point2753 = new Point();
$point2753->setLatitude(48.26176991396539);
$point2753->setLongitude(28.15817356109619);
$em->persist($point2753);


$waySet2753 = new WaySet();
$waySet2753->setPoint($point2753);
$waySet2753->setWay($way);
$em->persist($waySet2753);


$point2754 = new Point();
$point2754->setLatitude(48.26294126903549);
$point2754->setLongitude(28.147830963134766);
$em->persist($point2754);


$waySet2754 = new WaySet();
$waySet2754->setPoint($point2754);
$waySet2754->setWay($way);
$em->persist($waySet2754);


$point2755 = new Point();
$point2755->setLatitude(48.262569866675534);
$point2755->setLongitude(28.144569396972656);
$em->persist($point2755);


$waySet2755 = new WaySet();
$waySet2755->setPoint($point2755);
$waySet2755->setWay($way);
$em->persist($waySet2755);


$point2756 = new Point();
$point2756->setLatitude(48.258941409356964);
$point2756->setLongitude(28.14070701599121);
$em->persist($point2756);


$waySet2756 = new WaySet();
$waySet2756->setPoint($point2756);
$waySet2756->setWay($way);
$em->persist($waySet2756);


$point2757 = new Point();
$point2757->setLatitude(48.258941409356964);
$point2757->setLongitude(28.14070701599121);
$em->persist($point2757);


$waySet2757 = new WaySet();
$waySet2757->setPoint($point2757);
$waySet2757->setWay($way);
$em->persist($waySet2757);


$point2758 = new Point();
$point2758->setLatitude(48.248654618746556);
$point2758->setLongitude(28.138904571533203);
$em->persist($point2758);


$waySet2758 = new WaySet();
$waySet2758->setPoint($point2758);
$waySet2758->setWay($way);
$em->persist($waySet2758);


$point2759 = new Point();
$point2759->setLatitude(48.245368124489204);
$point2759->setLongitude(28.135814666748043);
$em->persist($point2759);


$waySet2759 = new WaySet();
$waySet2759->setPoint($point2759);
$waySet2759->setWay($way);
$em->persist($waySet2759);


$point2760 = new Point();
$point2760->setLatitude(48.240309368480084);
$point2760->setLongitude(28.126931190490723);
$em->persist($point2760);


$waySet2760 = new WaySet();
$waySet2760->setPoint($point2760);
$waySet2760->setWay($way);
$em->persist($waySet2760);


$point2761 = new Point();
$point2761->setLatitude(48.23413529351023);
$point2761->setLongitude(28.113412857055664);
$em->persist($point2761);


$waySet2761 = new WaySet();
$waySet2761->setPoint($point2761);
$waySet2761->setWay($way);
$em->persist($waySet2761);


$point2762 = new Point();
$point2762->setLatitude(48.232677417079366);
$point2762->setLongitude(28.110194206237793);
$em->persist($point2762);


$waySet2762 = new WaySet();
$waySet2762->setPoint($point2762);
$waySet2762->setWay($way);
$em->persist($waySet2762);


$point2763 = new Point();
$point2763->setLatitude(48.23110515084684);
$point2763->setLongitude(28.106074333190918);
$em->persist($point2763);


$waySet2763 = new WaySet();
$waySet2763->setPoint($point2763);
$waySet2763->setWay($way);
$em->persist($waySet2763);


$point2764 = new Point();
$point2764->setLatitude(48.23096221515747);
$point2764->setLongitude(28.102641105651855);
$em->persist($point2764);


$waySet2764 = new WaySet();
$waySet2764->setPoint($point2764);
$waySet2764->setWay($way);
$em->persist($waySet2764);


$point2765 = new Point();
$point2765->setLatitude(48.23519294256906);
$point2765->setLongitude(28.08650493621826);
$em->persist($point2765);


$waySet2765 = new WaySet();
$waySet2765->setPoint($point2765);
$waySet2765->setWay($way);
$em->persist($waySet2765);


$point2766 = new Point();
$point2766->setLatitude(48.23770834438924);
$point2766->setLongitude(28.08247089385986);
$em->persist($point2766);


$waySet2766 = new WaySet();
$waySet2766->setPoint($point2766);
$waySet2766->setWay($way);
$em->persist($waySet2766);


$point2767 = new Point();
$point2767->setLatitude(48.241395471267055);
$point2767->setLongitude(28.08058261871338);
$em->persist($point2767);


$waySet2767 = new WaySet();
$waySet2767->setPoint($point2767);
$waySet2767->setWay($way);
$em->persist($waySet2767);


$point2768 = new Point();
$point2768->setLatitude(48.24616833384559);
$point2768->setLongitude(28.07925224304199);
$em->persist($point2768);


$waySet2768 = new WaySet();
$waySet2768->setPoint($point2768);
$waySet2768->setWay($way);
$em->persist($waySet2768);


$point2769 = new Point();
$point2769->setLatitude(48.256227040615954);
$point2769->setLongitude(28.08101177215576);
$em->persist($point2769);


$waySet2769 = new WaySet();
$waySet2769->setPoint($point2769);
$waySet2769->setWay($way);
$em->persist($waySet2769);


$point2770 = new Point();
$point2770->setLatitude(48.26214132213769);
$point2770->setLongitude(28.08354377746582);
$em->persist($point2770);


$waySet2770 = new WaySet();
$waySet2770->setPoint($point2770);
$waySet2770->setWay($way);
$em->persist($waySet2770);


$point2771 = new Point();
$point2771->setLatitude(48.272139758575406);
$point2771->setLongitude(28.088650703430176);
$em->persist($point2771);


$waySet2771 = new WaySet();
$waySet2771->setPoint($point2771);
$waySet2771->setWay($way);
$em->persist($waySet2771);


$point2772 = new Point();
$point2772->setLatitude(48.27690975179592);
$point2772->setLongitude(28.088865280151367);
$em->persist($point2772);


$waySet2772 = new WaySet();
$waySet2772->setPoint($point2772);
$waySet2772->setWay($way);
$em->persist($waySet2772);


$point2773 = new Point();
$point2773->setLatitude(48.28616283985548);
$point2773->setLongitude(28.092126846313477);
$em->persist($point2773);


$waySet2773 = new WaySet();
$waySet2773->setPoint($point2773);
$waySet2773->setWay($way);
$em->persist($waySet2773);


$point2774 = new Point();
$point2774->setLatitude(48.29361549742437);
$point2774->setLongitude(28.0935001373291);
$em->persist($point2774);


$waySet2774 = new WaySet();
$waySet2774->setPoint($point2774);
$waySet2774->setWay($way);
$em->persist($waySet2774);


$point2775 = new Point();
$point2775->setLatitude(48.30021062040176);
$point2775->setLongitude(28.089938163757324);
$em->persist($point2775);


$waySet2775 = new WaySet();
$waySet2775->setPoint($point2775);
$waySet2775->setWay($way);
$em->persist($waySet2775);


$point2776 = new Point();
$point2776->setLatitude(48.30720451685012);
$point2776->setLongitude(28.085689544677734);
$em->persist($point2776);


$waySet2776 = new WaySet();
$waySet2776->setPoint($point2776);
$waySet2776->setWay($way);
$em->persist($waySet2776);


$point2777 = new Point();
$point2777->setLatitude(48.312484987317426);
$point2777->setLongitude(28.080453872680664);
$em->persist($point2777);


$waySet2777 = new WaySet();
$waySet2777->setPoint($point2777);
$waySet2777->setWay($way);
$em->persist($waySet2777);


$point2778 = new Point();
$point2778->setLatitude(48.31682312713527);
$point2778->setLongitude(28.074746131896973);
$em->persist($point2778);


$waySet2778 = new WaySet();
$waySet2778->setPoint($point2778);
$waySet2778->setWay($way);
$em->persist($waySet2778);


$point2779 = new Point();
$point2779->setLatitude(48.31924889978325);
$point2779->setLongitude(28.070797920227047);
$em->persist($point2779);


$waySet2779 = new WaySet();
$waySet2779->setPoint($point2779);
$waySet2779->setWay($way);
$em->persist($waySet2779);


$point2780 = new Point();
$point2780->setLatitude(48.32318696738069);
$point2780->setLongitude(28.058695793151855);
$em->persist($point2780);


$waySet2780 = new WaySet();
$waySet2780->setPoint($point2780);
$waySet2780->setWay($way);
$em->persist($waySet2780);


$point2781 = new Point();
$point2781->setLatitude(48.32601191554809);
$point2781->setLongitude(28.042001724243164);
$em->persist($point2781);


$waySet2781 = new WaySet();
$waySet2781->setPoint($point2781);
$waySet2781->setWay($way);
$em->persist($waySet2781);


$point2782 = new Point();
$point2782->setLatitude(48.32646845814084);
$point2782->setLongitude(28.01505088806152);
$em->persist($point2782);


$waySet2782 = new WaySet();
$waySet2782->setPoint($point2782);
$waySet2782->setWay($way);
$em->persist($waySet2782);


$point2783 = new Point();
$point2783->setLatitude(48.32501321437867);
$point2783->setLongitude(27.98089027404785);
$em->persist($point2783);


$waySet2783 = new WaySet();
$waySet2783->setPoint($point2783);
$waySet2783->setWay($way);
$em->persist($waySet2783);


$point2784 = new Point();
$point2784->setLatitude(48.32447105412575);
$point2784->setLongitude(27.971577644348145);
$em->persist($point2784);


$waySet2784 = new WaySet();
$waySet2784->setPoint($point2784);
$waySet2784->setWay($way);
$em->persist($waySet2784);


$point2785 = new Point();
$point2785->setLatitude(48.324956145149756);
$point2785->setLongitude(27.964110374450684);
$em->persist($point2785);


$waySet2785 = new WaySet();
$waySet2785->setPoint($point2785);
$waySet2785->setWay($way);
$em->persist($waySet2785);


$point2786 = new Point();
$point2786->setLatitude(48.32795219334316);
$point2786->setLongitude(27.954583168029785);
$em->persist($point2786);


$waySet2786 = new WaySet();
$waySet2786->setPoint($point2786);
$waySet2786->setWay($way);
$em->persist($waySet2786);


$point2787 = new Point();
$point2787->setLatitude(48.3376810026015);
$point2787->setLongitude(27.93896198272705);
$em->persist($point2787);


$waySet2787 = new WaySet();
$waySet2787->setPoint($point2787);
$waySet2787->setWay($way);
$em->persist($waySet2787);


$point2788 = new Point();
$point2788->setLatitude(48.33944967758242);
$point2788->setLongitude(27.934241294860836);
$em->persist($point2788);


$waySet2788 = new WaySet();
$waySet2788->setPoint($point2788);
$waySet2788->setWay($way);
$em->persist($waySet2788);


$point2789 = new Point();
$point2789->setLatitude(48.342188150037856);
$point2789->setLongitude(27.929220199584957);
$em->persist($point2789);


$waySet2789 = new WaySet();
$waySet2789->setPoint($point2789);
$waySet2789->setWay($way);
$em->persist($waySet2789);


$point2790 = new Point();
$point2790->setLatitude(48.34817804565011);
$point2790->setLongitude(27.91600227355957);
$em->persist($point2790);


$waySet2790 = new WaySet();
$waySet2790->setPoint($point2790);
$waySet2790->setWay($way);
$em->persist($waySet2790);


$point2791 = new Point();
$point2791->setLatitude(48.35105864950708);
$point2791->setLongitude(27.912182807922363);
$em->persist($point2791);


$waySet2791 = new WaySet();
$waySet2791->setPoint($point2791);
$waySet2791->setWay($way);
$em->persist($waySet2791);


$point2792 = new Point();
$point2792->setLatitude(48.35257018836909);
$point2792->setLongitude(27.90977954864502);
$em->persist($point2792);


$waySet2792 = new WaySet();
$waySet2792->setPoint($point2792);
$waySet2792->setWay($way);
$em->persist($waySet2792);


$point2793 = new Point();
$point2793->setLatitude(48.35422427385477);
$point2793->setLongitude(27.905616760253906);
$em->persist($point2793);


$waySet2793 = new WaySet();
$waySet2793->setPoint($point2793);
$waySet2793->setWay($way);
$em->persist($waySet2793);


$point2794 = new Point();
$point2794->setLatitude(48.35473759981157);
$point2794->setLongitude(27.90428638458252);
$em->persist($point2794);


$waySet2794 = new WaySet();
$waySet2794->setPoint($point2794);
$waySet2794->setWay($way);
$em->persist($waySet2794);


$point2795 = new Point();
$point2795->setLatitude(48.36160996584837);
$point2795->setLongitude(27.89424419403076);
$em->persist($point2795);


$waySet2795 = new WaySet();
$waySet2795->setPoint($point2795);
$waySet2795->setWay($way);
$em->persist($waySet2795);


$point2796 = new Point();
$point2796->setLatitude(48.36471790991921);
$point2796->setLongitude(27.891454696655273);
$em->persist($point2796);


$waySet2796 = new WaySet();
$waySet2796->setPoint($point2796);
$waySet2796->setWay($way);
$em->persist($waySet2796);


$point2797 = new Point();
$point2797->setLatitude(48.36697033801011);
$point2797->setLongitude(27.888278961181637);
$em->persist($point2797);


$waySet2797 = new WaySet();
$waySet2797->setPoint($point2797);
$waySet2797->setWay($way);
$em->persist($waySet2797);


$point2798 = new Point();
$point2798->setLatitude(48.372928812972646);
$point2798->setLongitude(27.88205623626709);
$em->persist($point2798);


$waySet2798 = new WaySet();
$waySet2798->setPoint($point2798);
$waySet2798->setWay($way);
$em->persist($waySet2798);


$point2799 = new Point();
$point2799->setLatitude(48.37914313011679);
$point2799->setLongitude(27.878923416137695);
$em->persist($point2799);


$waySet2799 = new WaySet();
$waySet2799->setPoint($point2799);
$waySet2799->setWay($way);
$em->persist($waySet2799);


$point2800 = new Point();
$point2800->setLatitude(48.38247802423885);
$point2800->setLongitude(27.87832260131836);
$em->persist($point2800);


$waySet2800 = new WaySet();
$waySet2800->setPoint($point2800);
$waySet2800->setWay($way);
$em->persist($waySet2800);


$point2801 = new Point();
$point2801->setLatitude(48.387722202086024);
$point2801->setLongitude(27.878193855285645);
$em->persist($point2801);


$waySet2801 = new WaySet();
$waySet2801->setPoint($point2801);
$waySet2801->setWay($way);
$em->persist($waySet2801);


$point2802 = new Point();
$point2802->setLatitude(48.39196845016303);
$point2802->setLongitude(27.880983352661133);
$em->persist($point2802);


$waySet2802 = new WaySet();
$waySet2802->setPoint($point2802);
$waySet2802->setWay($way);
$em->persist($waySet2802);


$point2803 = new Point();
$point2803->setLatitude(48.40171353195225);
$point2803->setLongitude(27.875790596008297);
$em->persist($point2803);


$waySet2803 = new WaySet();
$waySet2803->setPoint($point2803);
$waySet2803->setWay($way);
$em->persist($waySet2803);


$point2804 = new Point();
$point2804->setLatitude(48.40450563821177);
$point2804->setLongitude(27.873516082763672);
$em->persist($point2804);


$waySet2804 = new WaySet();
$waySet2804->setPoint($point2804);
$waySet2804->setWay($way);
$em->persist($waySet2804);


$point2805 = new Point();
$point2805->setLatitude(48.409633597361264);
$point2805->setLongitude(27.862272262573242);
$em->persist($point2805);


$waySet2805 = new WaySet();
$waySet2805->setPoint($point2805);
$waySet2805->setWay($way);
$em->persist($waySet2805);


$point2806 = new Point();
$point2806->setLatitude(48.41219738304077);
$point2806->setLongitude(27.854633331298828);
$em->persist($point2806);


$waySet2806 = new WaySet();
$waySet2806->setPoint($point2806);
$waySet2806->setWay($way);
$em->persist($waySet2806);


$point2807 = new Point();
$point2807->setLatitude(48.41476103945863);
$point2807->setLongitude(27.84553527832031);
$em->persist($point2807);


$waySet2807 = new WaySet();
$waySet2807->setPoint($point2807);
$waySet2807->setWay($way);
$em->persist($waySet2807);


$point2808 = new Point();
$point2808->setLatitude(48.415330723330904);
$point2808->setLongitude(27.839055061340332);
$em->persist($point2808);


$waySet2808 = new WaySet();
$waySet2808->setPoint($point2808);
$waySet2808->setWay($way);
$em->persist($waySet2808);


$point2809 = new Point();
$point2809->setLatitude(48.41524527115701);
$point2809->setLongitude(27.83635139465332);
$em->persist($point2809);


$waySet2809 = new WaySet();
$waySet2809->setPoint($point2809);
$waySet2809->setWay($way);
$em->persist($waySet2809);


$point2810 = new Point();
$point2810->setLatitude(48.41706821971717);
$point2810->setLongitude(27.826266288757324);
$em->persist($point2810);


$waySet2810 = new WaySet();
$waySet2810->setPoint($point2810);
$waySet2810->setWay($way);
$em->persist($waySet2810);


$point2811 = new Point();
$point2811->setLatitude(48.41926136807617);
$point2811->setLongitude(27.820258140563965);
$em->persist($point2811);


$waySet2811 = new WaySet();
$waySet2811->setPoint($point2811);
$waySet2811->setWay($way);
$em->persist($waySet2811);


$point2812 = new Point();
$point2812->setLatitude(48.4205715154578);
$point2812->setLongitude(27.8188419342041);
$em->persist($point2812);


$waySet2812 = new WaySet();
$waySet2812->setPoint($point2812);
$waySet2812->setWay($way);
$em->persist($waySet2812);


$point2813 = new Point();
$point2813->setLatitude(48.42430240234432);
$point2813->setLongitude(27.81686782836914);
$em->persist($point2813);


$waySet2813 = new WaySet();
$waySet2813->setPoint($point2813);
$waySet2813->setWay($way);
$em->persist($waySet2813);


$point2814 = new Point();
$point2814->setLatitude(48.42675153796629);
$point2814->setLongitude(27.815494537353516);
$em->persist($point2814);


$waySet2814 = new WaySet();
$waySet2814->setPoint($point2814);
$waySet2814->setWay($way);
$em->persist($waySet2814);


$point2815 = new Point();
$point2815->setLatitude(48.43233284792593);
$point2815->setLongitude(27.809228897094727);
$em->persist($point2815);


$waySet2815 = new WaySet();
$waySet2815->setPoint($point2815);
$waySet2815->setWay($way);
$em->persist($waySet2815);


$point2816 = new Point();
$point2816->setLatitude(48.43836908492239);
$point2816->setLongitude(27.79738426208496);
$em->persist($point2816);


$waySet2816 = new WaySet();
$waySet2816->setPoint($point2816);
$waySet2816->setWay($way);
$em->persist($waySet2816);


$point2817 = new Point();
$point2817->setLatitude(48.44659657359494);
$point2817->setLongitude(27.786355018615723);
$em->persist($point2817);


$waySet2817 = new WaySet();
$waySet2817->setPoint($point2817);
$waySet2817->setWay($way);
$em->persist($waySet2817);


$point2818 = new Point();
$point2818->setLatitude(48.450382478739584);
$point2818->setLongitude(27.773008346557617);
$em->persist($point2818);


$waySet2818 = new WaySet();
$waySet2818->setPoint($point2818);
$waySet2818->setWay($way);
$em->persist($waySet2818);


$point2819 = new Point();
$point2819->setLatitude(48.45226109380466);
$point2819->setLongitude(27.768630981445312);
$em->persist($point2819);


$waySet2819 = new WaySet();
$waySet2819->setPoint($point2819);
$waySet2819->setWay($way);
$em->persist($waySet2819);


$point2820 = new Point();
$point2820->setLatitude(48.45687194520768);
$point2820->setLongitude(27.756872177124023);
$em->persist($point2820);


$waySet2820 = new WaySet();
$waySet2820->setPoint($point2820);
$waySet2820->setWay($way);
$em->persist($waySet2820);


$point2821 = new Point();
$point2821->setLatitude(48.45798190245305);
$point2821->setLongitude(27.74846076965332);
$em->persist($point2821);


$waySet2821 = new WaySet();
$waySet2821->setPoint($point2821);
$waySet2821->setWay($way);
$em->persist($waySet2821);


$point2822 = new Point();
$point2822->setLatitude(48.457469617509176);
$point2822->setLongitude(27.742624282836914);
$em->persist($point2822);


$waySet2822 = new WaySet();
$waySet2822->setPoint($point2822);
$waySet2822->setWay($way);
$em->persist($waySet2822);


$point2823 = new Point();
$point2823->setLatitude(48.4537696283138);
$point2823->setLongitude(27.723140716552734);
$em->persist($point2823);


$waySet2823 = new WaySet();
$waySet2823->setPoint($point2823);
$waySet2823->setWay($way);
$em->persist($waySet2823);


$point2824 = new Point();
$point2824->setLatitude(48.45041094312276);
$point2824->setLongitude(27.709364891052246);
$em->persist($point2824);


$waySet2824 = new WaySet();
$waySet2824->setPoint($point2824);
$waySet2824->setWay($way);
$em->persist($waySet2824);


$point2825 = new Point();
$point2825->setLatitude(48.44733669754708);
$point2825->setLongitude(27.69902229309082);
$em->persist($point2825);


$waySet2825 = new WaySet();
$waySet2825->setPoint($point2825);
$waySet2825->setWay($way);
$em->persist($waySet2825);


$point2826 = new Point();
$point2826->setLatitude(48.442924260620046);
$point2826->setLongitude(27.689151763916016);
$em->persist($point2826);


$waySet2826 = new WaySet();
$waySet2826->setPoint($point2826);
$waySet2826->setWay($way);
$em->persist($waySet2826);


$point2827 = new Point();
$point2827->setLatitude(48.44087448210571);
$point2827->setLongitude(27.682242393493652);
$em->persist($point2827);


$waySet2827 = new WaySet();
$waySet2827->setPoint($point2827);
$waySet2827->setWay($way);
$em->persist($waySet2827);


$point2828 = new Point();
$point2828->setLatitude(48.43990650238739);
$point2828->setLongitude(27.67559051513672);
$em->persist($point2828);


$waySet2828 = new WaySet();
$waySet2828->setPoint($point2828);
$waySet2828->setWay($way);
$em->persist($waySet2828);


$point2829 = new Point();
$point2829->setLatitude(48.44107376975798);
$point2829->setLongitude(27.650184631347656);
$em->persist($point2829);


$waySet2829 = new WaySet();
$waySet2829->setPoint($point2829);
$waySet2829->setWay($way);
$em->persist($waySet2829);


$point2830 = new Point();
$point2830->setLatitude(48.441671628023656);
$point2830->setLongitude(27.643489837646484);
$em->persist($point2830);


$waySet2830 = new WaySet();
$waySet2830->setPoint($point2830);
$waySet2830->setWay($way);
$em->persist($waySet2830);


$point2831 = new Point();
$point2831->setLatitude(48.44810527638865);
$point2831->setLongitude(27.62533664703369);
$em->persist($point2831);


$waySet2831 = new WaySet();
$waySet2831->setPoint($point2831);
$waySet2831->setWay($way);
$em->persist($waySet2831);


$point2832 = new Point();
$point2832->setLatitude(48.4545096477245);
$point2832->setLongitude(27.61061668395996);
$em->persist($point2832);


$waySet2832 = new WaySet();
$waySet2832->setPoint($point2832);
$waySet2832->setWay($way);
$em->persist($waySet2832);


$point2833 = new Point();
$point2833->setLatitude(48.45949026699042);
$point2833->setLongitude(27.594823837280273);
$em->persist($point2833);


$waySet2833 = new WaySet();
$waySet2833->setPoint($point2833);
$waySet2833->setWay($way);
$em->persist($waySet2833);


$point2834 = new Point();
$point2834->setLatitude(48.46125471202234);
$point2834->setLongitude(27.591476440429688);
$em->persist($point2834);


$waySet2834 = new WaySet();
$waySet2834->setPoint($point2834);
$waySet2834->setWay($way);
$em->persist($waySet2834);


$point2835 = new Point();
$point2835->setLatitude(48.46560864460261);
$point2835->setLongitude(27.589030265808105);
$em->persist($point2835);


$waySet2835 = new WaySet();
$waySet2835->setPoint($point2835);
$waySet2835->setWay($way);
$em->persist($waySet2835);


$point2836 = new Point();
$point2836->setLatitude(48.4686248756158);
$point2836->setLongitude(27.592592239379883);
$em->persist($point2836);


$waySet2836 = new WaySet();
$waySet2836->setPoint($point2836);
$waySet2836->setWay($way);
$em->persist($waySet2836);


$point2837 = new Point();
$point2837->setLatitude(48.473404950015286);
$point2837->setLongitude(27.595510482788086);
$em->persist($point2837);


$waySet2837 = new WaySet();
$waySet2837->setPoint($point2837);
$waySet2837->setWay($way);
$em->persist($waySet2837);


$point2838 = new Point();
$point2838->setLatitude(48.47482750425528);
$point2838->setLongitude(27.59439468383789);
$em->persist($point2838);


$waySet2838 = new WaySet();
$waySet2838->setPoint($point2838);
$waySet2838->setWay($way);
$em->persist($waySet2838);


$point2839 = new Point();
$point2839->setLatitude(48.476050869001625);
$point2839->setLongitude(27.5941801071167);
$em->persist($point2839);


$waySet2839 = new WaySet();
$waySet2839->setPoint($point2839);
$waySet2839->setWay($way);
$em->persist($waySet2839);


$point2840 = new Point();
$point2840->setLatitude(48.48413002559846);
$point2840->setLongitude(27.604007720947262);
$em->persist($point2840);


$waySet2840 = new WaySet();
$waySet2840->setPoint($point2840);
$waySet2840->setWay($way);
$em->persist($waySet2840);


$point2841 = new Point();
$point2841->setLatitude(48.48563761305373);
$point2841->setLongitude(27.60482311248779);
$em->persist($point2841);


$waySet2841 = new WaySet();
$waySet2841->setPoint($point2841);
$waySet2841->setWay($way);
$em->persist($waySet2841);


$point2842 = new Point();
$point2842->setLatitude(48.487685584599504);
$point2842->setLongitude(27.604050636291504);
$em->persist($point2842);


$waySet2842 = new WaySet();
$waySet2842->setPoint($point2842);
$waySet2842->setWay($way);
$em->persist($waySet2842);


$point2843 = new Point();
$point2843->setLatitude(48.48942060688964);
$point2843->setLongitude(27.602334022521973);
$em->persist($point2843);


$waySet2843 = new WaySet();
$waySet2843->setPoint($point2843);
$waySet2843->setWay($way);
$em->persist($waySet2843);


$point2844 = new Point();
$point2844->setLatitude(48.491013361975824);
$point2844->setLongitude(27.59864330291748);
$em->persist($point2844);


$waySet2844 = new WaySet();
$waySet2844->setPoint($point2844);
$waySet2844->setWay($way);
$em->persist($waySet2844);


$point2845 = new Point();
$point2845->setLatitude(48.49183816191204);
$point2845->setLongitude(27.58911609649658);
$em->persist($point2845);


$waySet2845 = new WaySet();
$waySet2845->setPoint($point2845);
$waySet2845->setWay($way);
$em->persist($waySet2845);


$point2846 = new Point();
$point2846->setLatitude(48.491553749656454);
$point2846->setLongitude(27.585167884826657);
$em->persist($point2846);


$waySet2846 = new WaySet();
$waySet2846->setPoint($point2846);
$waySet2846->setWay($way);
$em->persist($waySet2846);


$point2847 = new Point();
$point2847->setLatitude(48.49081427032598);
$point2847->setLongitude(27.580876350402832);
$em->persist($point2847);


$waySet2847 = new WaySet();
$waySet2847->setPoint($point2847);
$waySet2847->setWay($way);
$em->persist($waySet2847);


$point2848 = new Point();
$point2848->setLatitude(48.48563761305373);
$point2848->setLongitude(27.569375038146973);
$em->persist($point2848);


$waySet2848 = new WaySet();
$waySet2848->setPoint($point2848);
$waySet2848->setWay($way);
$em->persist($waySet2848);


$point2849 = new Point();
$point2849->setLatitude(48.48512560724516);
$point2849->setLongitude(27.566113471984863);
$em->persist($point2849);


$waySet2849 = new WaySet();
$waySet2849->setPoint($point2849);
$waySet2849->setWay($way);
$em->persist($waySet2849);


$point2850 = new Point();
$point2850->setLatitude(48.4829353018258);
$point2850->setLongitude(27.5606632232666);
$em->persist($point2850);


$waySet2850 = new WaySet();
$waySet2850->setPoint($point2850);
$waySet2850->setWay($way);
$em->persist($waySet2850);


$point2851 = new Point();
$point2851->setLatitude(48.477757840280304);
$point2851->setLongitude(27.552509307861328);
$em->persist($point2851);


$waySet2851 = new WaySet();
$waySet2851->setPoint($point2851);
$waySet2851->setWay($way);
$em->persist($waySet2851);


$point2852 = new Point();
$point2852->setLatitude(48.469393132227594);
$point2852->setLongitude(27.5331974029541);
$em->persist($point2852);


$waySet2852 = new WaySet();
$waySet2852->setPoint($point2852);
$waySet2852->setWay($way);
$em->persist($waySet2852);


$point2853 = new Point();
$point2853->setLatitude(48.4605147909275);
$point2853->setLongitude(27.514443397521973);
$em->persist($point2853);


$waySet2853 = new WaySet();
$waySet2853->setPoint($point2853);
$waySet2853->setWay($way);
$em->persist($waySet2853);


$point2854 = new Point();
$point2854->setLatitude(48.4557619636944);
$point2854->setLongitude(27.50422954559326);
$em->persist($point2854);


$waySet2854 = new WaySet();
$waySet2854->setPoint($point2854);
$waySet2854->setWay($way);
$em->persist($waySet2854);


$point2855 = new Point();
$point2855->setLatitude(48.458892618478025);
$point2855->setLongitude(27.491784095764157);
$em->persist($point2855);


$waySet2855 = new WaySet();
$waySet2855->setPoint($point2855);
$waySet2855->setWay($way);
$em->persist($waySet2855);


$point2856 = new Point();
$point2856->setLatitude(48.45004090489689);
$point2856->setLongitude(27.46659278869629);
$em->persist($point2856);


$waySet2856 = new WaySet();
$waySet2856->setPoint($point2856);
$waySet2856->setWay($way);
$em->persist($waySet2856);


$point2857 = new Point();
$point2857->setLatitude(48.4420701962915);
$point2857->setLongitude(27.46354579925537);
$em->persist($point2857);


$waySet2857 = new WaySet();
$waySet2857->setPoint($point2857);
$waySet2857->setWay($way);
$em->persist($waySet2857);


$point2858 = new Point();
$point2858->setLatitude(48.433728079634115);
$point2858->setLongitude(27.4623441696167);
$em->persist($point2858);


$waySet2858 = new WaySet();
$waySet2858->setPoint($point2858);
$waySet2858->setWay($way);
$em->persist($waySet2858);


$point2859 = new Point();
$point2859->setLatitude(48.43043925789868);
$point2859->setLongitude(27.460482716560364);
$em->persist($point2859);


$waySet2859 = new WaySet();
$waySet2859->setPoint($point2859);
$waySet2859->setWay($way);
$em->persist($waySet2859);


$point2860 = new Point();
$point2860->setLatitude(48.428620348403584);
$point2860->setLongitude(27.459484934806824);
$em->persist($point2860);


$waySet2860 = new WaySet();
$waySet2860->setPoint($point2860);
$waySet2860->setWay($way);
$em->persist($waySet2860);


$point2861 = new Point();
$point2861->setLatitude(48.427673493037396);
$point2861->setLongitude(27.458889484405518);
$em->persist($point2861);


$waySet2861 = new WaySet();
$waySet2861->setPoint($point2861);
$waySet2861->setWay($way);
$em->persist($waySet2861);


$point2862 = new Point();
$point2862->setLatitude(48.42544154987249);
$point2862->setLongitude(27.457462549209595);
$em->persist($point2862);


$waySet2862 = new WaySet();
$waySet2862->setPoint($point2862);
$waySet2862->setWay($way);
$em->persist($waySet2862);


$point2863 = new Point();
$point2863->setLatitude(48.42382893664182);
$point2863->setLongitude(27.456432580947872);
$em->persist($point2863);


$waySet2863 = new WaySet();
$waySet2863->setPoint($point2863);
$waySet2863->setWay($way);
$em->persist($waySet2863);


$point2864 = new Point();
$point2864->setLatitude(48.42170718654574);
$point2864->setLongitude(27.45506465435028);
$em->persist($point2864);


$waySet2864 = new WaySet();
$waySet2864->setPoint($point2864);
$waySet2864->setWay($way);
$em->persist($waySet2864);


$point2865 = new Point();
$point2865->setLatitude(48.42020125983808);
$point2865->setLongitude(27.45409905910492);
$em->persist($point2865);


$waySet2865 = new WaySet();
$waySet2865->setPoint($point2865);
$waySet2865->setWay($way);
$em->persist($waySet2865);


$point2866 = new Point();
$point2866->setLatitude(48.41815412480496);
$point2866->setLongitude(27.452779412269592);
$em->persist($point2866);


$waySet2866 = new WaySet();
$waySet2866->setPoint($point2866);
$waySet2866->setWay($way);
$em->persist($waySet2866);


$point2867 = new Point();
$point2867->setLatitude(48.41643446766877);
$point2867->setLongitude(27.451685070991516);
$em->persist($point2867);


$waySet2867 = new WaySet();
$waySet2867->setPoint($point2867);
$waySet2867->setWay($way);
$em->persist($waySet2867);


$point2868 = new Point();
$point2868->setLatitude(48.41471831291091);
$point2868->setLongitude(27.45058536529541);
$em->persist($point2868);


$waySet2868 = new WaySet();
$waySet2868->setPoint($point2868);
$waySet2868->setWay($way);
$em->persist($waySet2868);


$point2869 = new Point();
$point2869->setLatitude(48.41460437527469);
$point2869->setLongitude(27.450343966484066);
$em->persist($point2869);


$waySet2869 = new WaySet();
$waySet2869->setPoint($point2869);
$waySet2869->setWay($way);
$em->persist($waySet2869);


$point2870 = new Point();
$point2870->setLatitude(48.413749834864646);
$point2870->setLongitude(27.44976997375488);
$em->persist($point2870);


$waySet2870 = new WaySet();
$waySet2870->setPoint($point2870);
$waySet2870->setWay($way);
$em->persist($waySet2870);


$point2871 = new Point();
$point2871->setLatitude(48.411844870174676);
$point2871->setLongitude(27.44854152202606);
$em->persist($point2871);


$waySet2871 = new WaySet();
$waySet2871->setPoint($point2871);
$waySet2871->setWay($way);
$em->persist($waySet2871);


$point2872 = new Point();
$point2872->setLatitude(48.41038850323825);
$point2872->setLongitude(27.44756519794464);
$em->persist($point2872);


$waySet2872 = new WaySet();
$waySet2872->setPoint($point2872);
$waySet2872->setWay($way);
$em->persist($waySet2872);


$point2873 = new Point();
$point2873->setLatitude(48.40968701088134);
$point2873->setLongitude(27.44711995124817);
$em->persist($point2873);


$waySet2873 = new WaySet();
$waySet2873->setPoint($point2873);
$waySet2873->setWay($way);
$em->persist($waySet2873);


$point2874 = new Point();
$point2874->setLatitude(48.40941282088303);
$point2874->setLongitude(27.44386374950409);
$em->persist($point2874);


$waySet2874 = new WaySet();
$waySet2874->setPoint($point2874);
$waySet2874->setWay($way);
$em->persist($waySet2874);


$point2875 = new Point();
$point2875->setLatitude(48.409213409046565);
$point2875->setLongitude(27.441519498825073);
$em->persist($point2875);


$waySet2875 = new WaySet();
$waySet2875->setPoint($point2875);
$waySet2875->setWay($way);
$em->persist($waySet2875);


$point2876 = new Point();
$point2876->setLatitude(48.40945911280465);
$point2876->setLongitude(27.43858516216278);
$em->persist($point2876);


$waySet2876 = new WaySet();
$waySet2876->setPoint($point2876);
$waySet2876->setWay($way);
$em->persist($waySet2876);


$point2877 = new Point();
$point2877->setLatitude(48.4097902768611);
$point2877->setLongitude(27.434551119804382);
$em->persist($point2877);


$waySet2877 = new WaySet();
$waySet2877->setPoint($point2877);
$waySet2877->setWay($way);
$em->persist($waySet2877);


$point2878 = new Point();
$point2878->setLatitude(48.410174851768595);
$point2878->setLongitude(27.42990016937256);
$em->persist($point2878);


$waySet2878 = new WaySet();
$waySet2878->setPoint($point2878);
$waySet2878->setWay($way);
$em->persist($waySet2878);


$point2879 = new Point();
$point2879->setLatitude(48.41056298460594);
$point2879->setLongitude(27.42508828639984);
$em->persist($point2879);


$waySet2879 = new WaySet();
$waySet2879->setPoint($point2879);
$waySet2879->setWay($way);
$em->persist($waySet2879);


$point2880 = new Point();
$point2880->setLatitude(48.411275147244815);
$point2880->setLongitude(27.42285668849945);
$em->persist($point2880);


$waySet2880 = new WaySet();
$waySet2880->setPoint($point2880);
$waySet2880->setWay($way);
$em->persist($waySet2880);


$point2881 = new Point();
$point2881->setLatitude(48.41262466808687);
$point2881->setLongitude(27.41865634918213);
$em->persist($point2881);


$waySet2881 = new WaySet();
$waySet2881->setPoint($point2881);
$waySet2881->setWay($way);
$em->persist($waySet2881);


$point2882 = new Point();
$point2882->setLatitude(48.41262110739301);
$point2882->setLongitude(27.41865634918213);
$em->persist($point2882);


$waySet2882 = new WaySet();
$waySet2882->setPoint($point2882);
$waySet2882->setWay($way);
$em->persist($waySet2882);


$point2883 = new Point();
$point2883->setLatitude(48.41262110739301);
$point2883->setLongitude(27.41865634918213);
$em->persist($point2883);


$waySet2883 = new WaySet();
$waySet2883->setPoint($point2883);
$waySet2883->setWay($way);
$em->persist($waySet2883);


$point2884 = new Point();
$point2884->setLatitude(48.413575364432106);
$point2884->setLongitude(27.415689826011658);
$em->persist($point2884);


$waySet2884 = new WaySet();
$waySet2884->setPoint($point2884);
$waySet2884->setWay($way);
$em->persist($waySet2884);


$point2885 = new Point();
$point2885->setLatitude(48.412599743224476);
$point2885->setLongitude(27.411741614341736);
$em->persist($point2885);


$waySet2885 = new WaySet();
$waySet2885->setPoint($point2885);
$waySet2885->setWay($way);
$em->persist($waySet2885);


$point2886 = new Point();
$point2886->setLatitude(48.412236550986144);
$point2886->setLongitude(27.410212755203247);
$em->persist($point2886);


$waySet2886 = new WaySet();
$waySet2886->setPoint($point2886);
$waySet2886->setWay($way);
$em->persist($waySet2886);


$point2887 = new Point();
$point2887->setLatitude(48.41163122482403);
$point2887->setLongitude(27.405282855033875);
$em->persist($point2887);


$waySet2887 = new WaySet();
$waySet2887->setPoint($point2887);
$waySet2887->setWay($way);
$em->persist($waySet2887);


$point2888 = new Point();
$point2888->setLatitude(48.4110935467193);
$point2888->setLongitude(27.40088939666748);
$em->persist($point2888);


$waySet2888 = new WaySet();
$waySet2888->setPoint($point2888);
$waySet2888->setWay($way);
$em->persist($waySet2888);


$point2889 = new Point();
$point2889->setLatitude(48.410552302090416);
$point2889->setLongitude(27.396785616874695);
$em->persist($point2889);


$waySet2889 = new WaySet();
$waySet2889->setPoint($point2889);
$waySet2889->setWay($way);
$em->persist($waySet2889);


$point2890 = new Point();
$point2890->setLatitude(48.40991134705306);
$point2890->setLongitude(27.391861081123352);
$em->persist($point2890);


$waySet2890 = new WaySet();
$waySet2890->setPoint($point2890);
$waySet2890->setWay($way);
$em->persist($waySet2890);


$point2891 = new Point();
$point2891->setLatitude(48.409345163383286);
$point2891->setLongitude(27.387574911117554);
$em->persist($point2891);


$waySet2891 = new WaySet();
$waySet2891->setPoint($point2891);
$waySet2891->setWay($way);
$em->persist($waySet2891);


$point2892 = new Point();
$point2892->setLatitude(48.409006874534455);
$point2892->setLongitude(27.385010719299316);
$em->persist($point2892);


$waySet2892 = new WaySet();
$waySet2892->setPoint($point2892);
$waySet2892->setWay($way);
$em->persist($waySet2892);


$point2893 = new Point();
$point2893->setLatitude(48.410146364838155);
$point2893->setLongitude(27.380788922309875);
$em->persist($point2893);


$waySet2893 = new WaySet();
$waySet2893->setPoint($point2893);
$waySet2893->setWay($way);
$em->persist($waySet2893);


$point2894 = new Point();
$point2894->setLatitude(48.41209412194924);
$point2894->setLongitude(27.37967848777771);
$em->persist($point2894);


$waySet2894 = new WaySet();
$waySet2894->setPoint($point2894);
$waySet2894->setWay($way);
$em->persist($waySet2894);


$point2895 = new Point();
$point2895->setLatitude(48.41384953198588);
$point2895->setLongitude(27.37866997718811);
$em->persist($point2895);


$waySet2895 = new WaySet();
$waySet2895->setPoint($point2895);
$waySet2895->setWay($way);
$em->persist($waySet2895);


$point2896 = new Point();
$point2896->setLatitude(48.41530936030091);
$point2896->setLongitude(27.37783312797546);
$em->persist($point2896);


$waySet2896 = new WaySet();
$waySet2896->setPoint($point2896);
$waySet2896->setWay($way);
$em->persist($waySet2896);


$point2897 = new Point();
$point2897->setLatitude(48.41664453242529);
$point2897->setLongitude(27.377055287361145);
$em->persist($point2897);


$waySet2897 = new WaySet();
$waySet2897->setPoint($point2897);
$waySet2897->setWay($way);
$em->persist($waySet2897);


$point2898 = new Point();
$point2898->setLatitude(48.418844819578844);
$point2898->setLongitude(27.376352548599243);
$em->persist($point2898);


$waySet2898 = new WaySet();
$waySet2898->setPoint($point2898);
$waySet2898->setWay($way);
$em->persist($waySet2898);


$point2899 = new Point();
$point2899->setLatitude(48.42092752793347);
$point2899->setLongitude(27.375698089599606);
$em->persist($point2899);


$waySet2899 = new WaySet();
$waySet2899->setPoint($point2899);
$waySet2899->setWay($way);
$em->persist($waySet2899);


$point2900 = new Point();
$point2900->setLatitude(48.4228926719305);
$point2900->setLongitude(27.375075817108154);
$em->persist($point2900);


$waySet2900 = new WaySet();
$waySet2900->setPoint($point2900);
$waySet2900->setWay($way);
$em->persist($waySet2900);


$point2901 = new Point();
$point2901->setLatitude(48.42481858173145);
$point2901->setLongitude(27.374464273452755);
$em->persist($point2901);


$waySet2901 = new WaySet();
$waySet2901->setPoint($point2901);
$waySet2901->setWay($way);
$em->persist($waySet2901);


$point2902 = new Point();
$point2902->setLatitude(48.425110487753955);
$point2902->setLongitude(27.374378442764282);
$em->persist($point2902);


$waySet2902 = new WaySet();
$waySet2902->setPoint($point2902);
$waySet2902->setWay($way);
$em->persist($waySet2902);


$point2903 = new Point();
$point2903->setLatitude(48.42632437164576);
$point2903->setLongitude(27.37468421459198);
$em->persist($point2903);


$waySet2903 = new WaySet();
$waySet2903->setPoint($point2903);
$waySet2903->setWay($way);
$em->persist($waySet2903);


$point2904 = new Point();
$point2904->setLatitude(48.4285420377267);
$point2904->setLongitude(27.375268936157227);
$em->persist($point2904);


$waySet2904 = new WaySet();
$waySet2904->setPoint($point2904);
$waySet2904->setWay($way);
$em->persist($waySet2904);


$point2905 = new Point();
$point2905->setLatitude(48.43033247440434);
$point2905->setLongitude(27.375735640525818);
$em->persist($point2905);


$waySet2905 = new WaySet();
$waySet2905->setPoint($point2905);
$waySet2905->setWay($way);
$em->persist($waySet2905);


$point2906 = new Point();
$point2906->setLatitude(48.432710133748756);
$point2906->setLongitude(27.3763632774353);
$em->persist($point2906);


$waySet2906 = new WaySet();
$waySet2906->setPoint($point2906);
$waySet2906->setWay($way);
$em->persist($waySet2906);


$point2907 = new Point();
$point2907->setLatitude(48.43392383612017);
$point2907->setLongitude(27.37667441368103);
$em->persist($point2907);


$waySet2907 = new WaySet();
$waySet2907->setPoint($point2907);
$waySet2907->setWay($way);
$em->persist($waySet2907);


$point2908 = new Point();
$point2908->setLatitude(48.43528699219235);
$point2908->setLongitude(27.377028465270996);
$em->persist($point2908);


$waySet2908 = new WaySet();
$waySet2908->setPoint($point2908);
$waySet2908->setWay($way);
$em->persist($waySet2908);


$point2909 = new Point();
$point2909->setLatitude(48.43645080668467);
$point2909->setLongitude(27.374008297920227);
$em->persist($point2909);


$waySet2909 = new WaySet();
$waySet2909->setPoint($point2909);
$waySet2909->setWay($way);
$em->persist($waySet2909);


$point2910 = new Point();
$point2910->setLatitude(48.43715548873985);
$point2910->setLongitude(27.37218976020813);
$em->persist($point2910);


$waySet2910 = new WaySet();
$waySet2910->setPoint($point2910);
$waySet2910->setWay($way);
$em->persist($waySet2910);


$point2911 = new Point();
$point2911->setLatitude(48.43951147595272);
$point2911->setLongitude(27.369459271430966);
$em->persist($point2911);


$waySet2911 = new WaySet();
$waySet2911->setPoint($point2911);
$waySet2911->setWay($way);
$em->persist($waySet2911);


$point2912 = new Point();
$point2912->setLatitude(48.44119832414363);
$point2912->setLongitude(27.367501258850098);
$em->persist($point2912);


$waySet2912 = new WaySet();
$waySet2912->setPoint($point2912);
$waySet2912->setWay($way);
$em->persist($waySet2912);


$point2913 = new Point();
$point2913->setLatitude(48.44286732344491);
$point2913->setLongitude(27.364373803138733);
$em->persist($point2913);


$waySet2913 = new WaySet();
$waySet2913->setPoint($point2913);
$waySet2913->setWay($way);
$em->persist($waySet2913);


$point2914 = new Point();
$point2914->setLatitude(48.44458964475621);
$point2914->setLongitude(27.361139059066772);
$em->persist($point2914);


$waySet2914 = new WaySet();
$waySet2914->setPoint($point2914);
$waySet2914->setWay($way);
$em->persist($waySet2914);


$point2915 = new Point();
$point2915->setLatitude(48.44627632431085);
$point2915->setLongitude(27.35796868801117);
$em->persist($point2915);


$waySet2915 = new WaySet();
$waySet2915->setPoint($point2915);
$waySet2915->setWay($way);
$em->persist($waySet2915);


$point2916 = new Point();
$point2916->setLatitude(48.44805190323383);
$point2916->setLongitude(27.35465884208679);
$em->persist($point2916);


$waySet2916 = new WaySet();
$waySet2916->setPoint($point2916);
$waySet2916->setWay($way);
$em->persist($waySet2916);


$point2917 = new Point();
$point2917->setLatitude(48.44909444870456);
$point2917->setLongitude(27.350581884384155);
$em->persist($point2917);


$waySet2917 = new WaySet();
$waySet2917->setPoint($point2917);
$waySet2917->setWay($way);
$em->persist($waySet2917);


$point2918 = new Point();
$point2918->setLatitude(48.447639148942216);
$point2918->setLongitude(27.34793186187744);
$em->persist($point2918);


$waySet2918 = new WaySet();
$waySet2918->setPoint($point2918);
$waySet2918->setWay($way);
$em->persist($waySet2918);


$point2919 = new Point();
$point2919->setLatitude(48.44545790029902);
$point2919->setLongitude(27.350555062294006);
$em->persist($point2919);


$waySet2919 = new WaySet();
$waySet2919->setPoint($point2919);
$waySet2919->setWay($way);
$em->persist($waySet2919);


$point2920 = new Point();
$point2920->setLatitude(48.44348295326518);
$point2920->setLongitude(27.352926135063168);
$em->persist($point2920);


$waySet2920 = new WaySet();
$waySet2920->setPoint($point2920);
$waySet2920->setWay($way);
$em->persist($waySet2920);


$point2921 = new Point();
$point2921->setLatitude(48.44195276132329);
$point2921->setLongitude(27.350758910179138);
$em->persist($point2921);


$waySet2921 = new WaySet();
$waySet2921->setPoint($point2921);
$waySet2921->setWay($way);
$em->persist($waySet2921);


$point2922 = new Point();
$point2922->setLatitude(48.440344230794636);
$point2922->setLongitude(27.34846830368042);
$em->persist($point2922);


$waySet2922 = new WaySet();
$waySet2922->setPoint($point2922);
$waySet2922->setWay($way);
$em->persist($waySet2922);


$point2923 = new Point();
$point2923->setLatitude(48.43984600304253);
$point2923->setLongitude(27.347770929336548);
$em->persist($point2923);


$waySet2923 = new WaySet();
$waySet2923->setPoint($point2923);
$waySet2923->setWay($way);
$em->persist($waySet2923);


$point2924 = new Point();
$point2924->setLatitude(48.44205596176437);
$point2924->setLongitude(27.34476149082184);
$em->persist($point2924);


$waySet2924 = new WaySet();
$waySet2924->setPoint($point2924);
$waySet2924->setWay($way);
$em->persist($waySet2924);


$point2925 = new Point();
$point2925->setLatitude(48.44306660327866);
$point2925->setLongitude(27.343382835388184);
$em->persist($point2925);


$waySet2925 = new WaySet();
$waySet2925->setPoint($point2925);
$waySet2925->setWay($way);
$em->persist($waySet2925);


$point2926 = new Point();
$point2926->setLatitude(48.44539740756603);
$point2926->setLongitude(27.34120488166809);
$em->persist($point2926);


$waySet2926 = new WaySet();
$waySet2926->setPoint($point2926);
$waySet2926->setWay($way);
$em->persist($waySet2926);


$point2927 = new Point();
$point2927->setLatitude(48.446909704275676);
$point2927->setLongitude(27.339794039726257);
$em->persist($point2927);


$waySet2927 = new WaySet();
$waySet2927->setPoint($point2927);
$waySet2927->setWay($way);
$em->persist($waySet2927);


$point2928 = new Point();
$point2928->setLatitude(48.44712320136014);
$point2928->setLongitude(27.33571708202362);
$em->persist($point2928);


$waySet2928 = new WaySet();
$waySet2928->setPoint($point2928);
$waySet2928->setWay($way);
$em->persist($waySet2928);


$point2929 = new Point();
$point2929->setLatitude(48.44462522929146);
$point2929->setLongitude(27.334783673286438);
$em->persist($point2929);


$waySet2929 = new WaySet();
$waySet2929->setPoint($point2929);
$waySet2929->setWay($way);
$em->persist($waySet2929);


$point2930 = new Point();
$point2930->setLatitude(48.44309863032184);
$point2930->setLongitude(27.336173057556152);
$em->persist($point2930);


$waySet2930 = new WaySet();
$waySet2930->setPoint($point2930);
$waySet2930->setWay($way);
$em->persist($waySet2930);


$point2931 = new Point();
$point2931->setLatitude(48.44200969952361);
$point2931->setLongitude(27.337170839309692);
$em->persist($point2931);


$waySet2931 = new WaySet();
$waySet2931->setPoint($point2931);
$waySet2931->setWay($way);
$em->persist($waySet2931);


$point2932 = new Point();
$point2932->setLatitude(48.44018052792939);
$point2932->setLongitude(27.338839173316956);
$em->persist($point2932);


$waySet2932 = new WaySet();
$waySet2932->setPoint($point2932);
$waySet2932->setWay($way);
$em->persist($waySet2932);


$point2933 = new Point();
$point2933->setLatitude(48.440162734107915);
$point2933->setLongitude(27.338855266571045);
$em->persist($point2933);


$waySet2933 = new WaySet();
$waySet2933->setPoint($point2933);
$waySet2933->setWay($way);
$em->persist($waySet2933);


$point2934 = new Point();
$point2934->setLatitude(48.44102394791823);
$point2934->setLongitude(27.333276271820065);
$em->persist($point2934);


$waySet2934 = new WaySet();
$waySet2934->setPoint($point2934);
$waySet2934->setWay($way);
$em->persist($waySet2934);


$point2935 = new Point();
$point2935->setLatitude(48.44176415307887);
$point2935->setLongitude(27.32853412628174);
$em->persist($point2935);


$waySet2935 = new WaySet();
$waySet2935->setPoint($point2935);
$waySet2935->setWay($way);
$em->persist($waySet2935);


$point2936 = new Point();
$point2936->setLatitude(48.44253637485083);
$point2936->setLongitude(27.32351303100586);
$em->persist($point2936);


$waySet2936 = new WaySet();
$waySet2936->setPoint($point2936);
$waySet2936->setWay($way);
$em->persist($waySet2936);


$point2937 = new Point();
$point2937->setLatitude(48.44317691856468);
$point2937->setLongitude(27.319446802139282);
$em->persist($point2937);


$waySet2937 = new WaySet();
$waySet2937->setPoint($point2937);
$waySet2937->setWay($way);
$em->persist($waySet2937);


$point2938 = new Point();
$point2938->setLatitude(48.441461666696334);
$point2938->setLongitude(27.318631410598755);
$em->persist($point2938);


$waySet2938 = new WaySet();
$waySet2938->setPoint($point2938);
$waySet2938->setWay($way);
$em->persist($waySet2938);


$point2939 = new Point();
$point2939->setLatitude(48.43968585737016);
$point2939->setLongitude(27.31778383255005);
$em->persist($point2939);


$waySet2939 = new WaySet();
$waySet2939->setPoint($point2939);
$waySet2939->setWay($way);
$em->persist($waySet2939);


$point2940 = new Point();
$point2940->setLatitude(48.43804522484753);
$point2940->setLongitude(27.31701672077179);
$em->persist($point2940);


$waySet2940 = new WaySet();
$waySet2940->setPoint($point2940);
$waySet2940->setWay($way);
$em->persist($waySet2940);


$point2941 = new Point();
$point2941->setLatitude(48.436475719853284);
$point2941->setLongitude(27.316265702247616);
$em->persist($point2941);


$waySet2941 = new WaySet();
$waySet2941->setPoint($point2941);
$waySet2941->setWay($way);
$em->persist($waySet2941);


$point2942 = new Point();
$point2942->setLatitude(48.434703295375094);
$point2942->setLongitude(27.315423488616943);
$em->persist($point2942);


$waySet2942 = new WaySet();
$waySet2942->setPoint($point2942);
$waySet2942->setWay($way);
$em->persist($waySet2942);


$point2943 = new Point();
$point2943->setLatitude(48.432425389990826);
$point2943->setLongitude(27.314355969429016);
$em->persist($point2943);


$waySet2943 = new WaySet();
$waySet2943->setPoint($point2943);
$waySet2943->setWay($way);
$em->persist($waySet2943);


$point2944 = new Point();
$point2944->setLatitude(48.43220115315838);
$point2944->setLongitude(27.31424331665039);
$em->persist($point2944);


$waySet2944 = new WaySet();
$waySet2944->setPoint($point2944);
$waySet2944->setWay($way);
$em->persist($waySet2944);


$point2945 = new Point();
$point2945->setLatitude(48.430905543194704);
$point2945->setLongitude(27.313165068626404);
$em->persist($point2945);


$waySet2945 = new WaySet();
$waySet2945->setPoint($point2945);
$waySet2945->setWay($way);
$em->persist($waySet2945);


$point2946 = new Point();
$point2946->setLatitude(48.429389210458645);
$point2946->setLongitude(27.311920523643494);
$em->persist($point2946);


$waySet2946 = new WaySet();
$waySet2946->setPoint($point2946);
$waySet2946->setWay($way);
$em->persist($waySet2946);


$point2947 = new Point();
$point2947->setLatitude(48.4285384781476);
$point2947->setLongitude(27.31122314929962);
$em->persist($point2947);


$waySet2947 = new WaySet();
$waySet2947->setPoint($point2947);
$waySet2947->setWay($way);
$em->persist($waySet2947);


$point2948 = new Point();
$point2948->setLatitude(48.42648099971351);
$point2948->setLongitude(27.31222629547119);
$em->persist($point2948);


$waySet2948 = new WaySet();
$waySet2948->setPoint($point2948);
$waySet2948->setWay($way);
$em->persist($waySet2948);


$point2949 = new Point();
$point2949->setLatitude(48.42484706044158);
$point2949->setLongitude(27.31302559375763);
$em->persist($point2949);


$waySet2949 = new WaySet();
$waySet2949->setPoint($point2949);
$waySet2949->setWay($way);
$em->persist($waySet2949);


$point2950 = new Point();
$point2950->setLatitude(48.4231881489681);
$point2950->setLongitude(27.313824892044067);
$em->persist($point2950);


$waySet2950 = new WaySet();
$waySet2950->setPoint($point2950);
$waySet2950->setWay($way);
$em->persist($waySet2950);


$point2951 = new Point();
$point2951->setLatitude(48.42271823287302);
$point2951->setLongitude(27.314055562019348);
$em->persist($point2951);


$waySet2951 = new WaySet();
$waySet2951->setPoint($point2951);
$waySet2951->setWay($way);
$em->persist($waySet2951);


$point2952 = new Point();
$point2952->setLatitude(48.42142594121056);
$point2952->setLongitude(27.312387228012085);
$em->persist($point2952);


$waySet2952 = new WaySet();
$waySet2952->setPoint($point2952);
$waySet2952->setWay($way);
$em->persist($waySet2952);


$point2953 = new Point();
$point2953->setLatitude(48.420005450487416);
$point2953->setLongitude(27.31054186820984);
$em->persist($point2953);


$waySet2953 = new WaySet();
$waySet2953->setPoint($point2953);
$waySet2953->setWay($way);
$em->persist($waySet2953);


$point2954 = new Point();
$point2954->setLatitude(48.41835350157942);
$point2954->setLongitude(27.308412194252014);
$em->persist($point2954);


$waySet2954 = new WaySet();
$waySet2954->setPoint($point2954);
$waySet2954->setWay($way);
$em->persist($waySet2954);


$point2955 = new Point();
$point2955->setLatitude(48.41681543192588);
$point2955->setLongitude(27.30640590190887);
$em->persist($point2955);


$waySet2955 = new WaySet();
$waySet2955->setPoint($point2955);
$waySet2955->setWay($way);
$em->persist($waySet2955);


$point2956 = new Point();
$point2956->setLatitude(48.41541973585936);
$point2956->setLongitude(27.304598093032837);
$em->persist($point2956);


$waySet2956 = new WaySet();
$waySet2956->setPoint($point2956);
$waySet2956->setWay($way);
$em->persist($waySet2956);


$point2957 = new Point();
$point2957->setLatitude(48.41338309020077);
$point2957->setLongitude(27.30195879936218);
$em->persist($point2957);


$waySet2957 = new WaySet();
$waySet2957->setPoint($point2957);
$waySet2957->setWay($way);
$em->persist($waySet2957);


$point2958 = new Point();
$point2958->setLatitude(48.41133568060919);
$point2958->setLongitude(27.2993141412735);
$em->persist($point2958);


$waySet2958 = new WaySet();
$waySet2958->setPoint($point2958);
$waySet2958->setWay($way);
$em->persist($waySet2958);


$point2959 = new Point();
$point2959->setLatitude(48.40993271235115);
$point2959->setLongitude(27.2974956035614);
$em->persist($point2959);


$waySet2959 = new WaySet();
$waySet2959->setPoint($point2959);
$waySet2959->setWay($way);
$em->persist($waySet2959);


$point2960 = new Point();
$point2960->setLatitude(48.40837658299268);
$point2960->setLongitude(27.297082543373108);
$em->persist($point2960);


$waySet2960 = new WaySet();
$waySet2960->setPoint($point2960);
$waySet2960->setWay($way);
$em->persist($waySet2960);


$point2961 = new Point();
$point2961->setLatitude(48.406752745067095);
$point2961->setLongitude(27.296642661094666);
$em->persist($point2961);


$waySet2961 = new WaySet();
$waySet2961->setPoint($point2961);
$waySet2961->setWay($way);
$em->persist($waySet2961);


$point2962 = new Point();
$point2962->setLatitude(48.40535677277433);
$point2962->setLongitude(27.29625642299652);
$em->persist($point2962);


$waySet2962 = new WaySet();
$waySet2962->setPoint($point2962);
$waySet2962->setWay($way);
$em->persist($waySet2962);


$point2963 = new Point();
$point2963->setLatitude(48.40361531485009);
$point2963->setLongitude(27.295789718627926);
$em->persist($point2963);


$waySet2963 = new WaySet();
$waySet2963->setPoint($point2963);
$waySet2963->setWay($way);
$em->persist($waySet2963);


$point2964 = new Point();
$point2964->setLatitude(48.401977079144714);
$point2964->setLongitude(27.295339107513428);
$em->persist($point2964);


$waySet2964 = new WaySet();
$waySet2964->setPoint($point2964);
$waySet2964->setWay($way);
$em->persist($waySet2964);


$point2965 = new Point();
$point2965->setLatitude(48.40037796775438);
$point2965->setLongitude(27.294883131980892);
$em->persist($point2965);


$waySet2965 = new WaySet();
$waySet2965->setPoint($point2965);
$waySet2965->setWay($way);
$em->persist($waySet2965);


$point2966 = new Point();
$point2966->setLatitude(48.398896340844225);
$point2966->setLongitude(27.29449152946472);
$em->persist($point2966);


$waySet2966 = new WaySet();
$waySet2966->setPoint($point2966);
$waySet2966->setWay($way);
$em->persist($waySet2966);


$point2967 = new Point();
$point2967->setLatitude(48.39776372194078);
$point2967->setLongitude(27.294191122055054);
$em->persist($point2967);


$waySet2967 = new WaySet();
$waySet2967->setPoint($point2967);
$waySet2967->setWay($way);
$em->persist($waySet2967);


$point2968 = new Point();
$point2968->setLatitude(48.395801168480624);
$point2968->setLongitude(27.29365468025207);
$em->persist($point2968);


$waySet2968 = new WaySet();
$waySet2968->setPoint($point2968);
$waySet2968->setWay($way);
$em->persist($waySet2968);


$point2969 = new Point();
$point2969->setLatitude(48.39442982939021);
$point2969->setLongitude(27.29326844215393);
$em->persist($point2969);


$waySet2969 = new WaySet();
$waySet2969->setPoint($point2969);
$waySet2969->setWay($way);
$em->persist($waySet2969);


$point2970 = new Point();
$point2970->setLatitude(48.392677311091546);
$point2970->setLongitude(27.29280173778534);
$em->persist($point2970);


$waySet2970 = new WaySet();
$waySet2970->setPoint($point2970);
$waySet2970->setWay($way);
$em->persist($waySet2970);


$point2971 = new Point();
$point2971->setLatitude(48.391170524539966);
$point2971->setLongitude(27.292372584342957);
$em->persist($point2971);


$waySet2971 = new WaySet();
$waySet2971->setPoint($point2971);
$waySet2971->setWay($way);
$em->persist($waySet2971);


$point2972 = new Point();
$point2972->setLatitude(48.389410769343);
$point2972->setLongitude(27.291879057884216);
$em->persist($point2972);


$waySet2972 = new WaySet();
$waySet2972->setPoint($point2972);
$waySet2972->setWay($way);
$em->persist($waySet2972);


$point2973 = new Point();
$point2973->setLatitude(48.38806063250239);
$point2973->setLongitude(27.291482090950012);
$em->persist($point2973);


$waySet2973 = new WaySet();
$waySet2973->setPoint($point2973);
$waySet2973->setWay($way);
$em->persist($waySet2973);


$point2974 = new Point();
$point2974->setLatitude(48.3865964594547);
$point2974->setLongitude(27.29106903076172);
$em->persist($point2974);


$waySet2974 = new WaySet();
$waySet2974->setPoint($point2974);
$waySet2974->setWay($way);
$em->persist($waySet2974);


$point2975 = new Point();
$point2975->setLatitude(48.384936299883734);
$point2975->setLongitude(27.290591597557068);
$em->persist($point2975);


$waySet2975 = new WaySet();
$waySet2975->setPoint($point2975);
$waySet2975->setWay($way);
$em->persist($waySet2975);


$point2976 = new Point();
$point2976->setLatitude(48.38345778600854);
$point2976->setLongitude(27.290151715278625);
$em->persist($point2976);


$waySet2976 = new WaySet();
$waySet2976->setPoint($point2976);
$waySet2976->setWay($way);
$em->persist($waySet2976);


$point2977 = new Point();
$point2977->setLatitude(48.38145548911669);
$point2977->setLongitude(27.28957772254944);
$em->persist($point2977);


$waySet2977 = new WaySet();
$waySet2977->setPoint($point2977);
$waySet2977->setWay($way);
$em->persist($waySet2977);


$point2978 = new Point();
$point2978->setLatitude(48.379755968926204);
$point2978->setLongitude(27.289094924926758);
$em->persist($point2978);


$waySet2978 = new WaySet();
$waySet2978->setPoint($point2978);
$waySet2978->setWay($way);
$em->persist($waySet2978);


$point2979 = new Point();
$point2979->setLatitude(48.377935245979565);
$point2979->setLongitude(27.28857457637787);
$em->persist($point2979);


$waySet2979 = new WaySet();
$waySet2979->setPoint($point2979);
$waySet2979->setWay($way);
$em->persist($waySet2979);


$point2980 = new Point();
$point2980->setLatitude(48.37641733324218);
$point2980->setLongitude(27.288129329681396);
$em->persist($point2980);


$waySet2980 = new WaySet();
$waySet2980->setPoint($point2980);
$waySet2980->setWay($way);
$em->persist($waySet2980);


$point2981 = new Point();
$point2981->setLatitude(48.37447177327636);
$point2981->setLongitude(27.287576794624325);
$em->persist($point2981);


$waySet2981 = new WaySet();
$waySet2981->setPoint($point2981);
$waySet2981->setWay($way);
$em->persist($waySet2981);


$point2982 = new Point();
$point2982->setLatitude(48.372907432131925);
$point2982->setLongitude(27.287126183509827);
$em->persist($point2982);


$waySet2982 = new WaySet();
$waySet2982->setPoint($point2982);
$waySet2982->setWay($way);
$em->persist($waySet2982);


$point2983 = new Point();
$point2983->setLatitude(48.3711684270252);
$point2983->setLongitude(27.286627292633057);
$em->persist($point2983);


$waySet2983 = new WaySet();
$waySet2983->setPoint($point2983);
$waySet2983->setWay($way);
$em->persist($waySet2983);


$point2984 = new Point();
$point2984->setLatitude(48.37311411321629);
$point2984->setLongitude(27.281751036643982);
$em->persist($point2984);


$waySet2984 = new WaySet();
$waySet2984->setPoint($point2984);
$waySet2984->setWay($way);
$em->persist($waySet2984);


$point2985 = new Point();
$point2985->setLatitude(48.37492788191793);
$point2985->setLongitude(27.27721810340881);
$em->persist($point2985);


$waySet2985 = new WaySet();
$waySet2985->setPoint($point2985);
$waySet2985->setWay($way);
$em->persist($waySet2985);


$point2986 = new Point();
$point2986->setLatitude(48.37685560846843);
$point2986->setLongitude(27.272357940673825);
$em->persist($point2986);


$waySet2986 = new WaySet();
$waySet2986->setPoint($point2986);
$waySet2986->setWay($way);
$em->persist($waySet2986);


$point2987 = new Point();
$point2987->setLatitude(48.37855166240923);
$point2987->setLongitude(27.268120050430298);
$em->persist($point2987);


$waySet2987 = new WaySet();
$waySet2987->setPoint($point2987);
$waySet2987->setWay($way);
$em->persist($waySet2987);


$point2988 = new Point();
$point2988->setLatitude(48.38006238556428);
$point2988->setLongitude(27.26433277130127);
$em->persist($point2988);


$waySet2988 = new WaySet();
$waySet2988->setPoint($point2988);
$waySet2988->setWay($way);
$em->persist($waySet2988);


$point2989 = new Point();
$point2989->setLatitude(48.37911462580655);
$point2989->setLongitude(27.26161301136017);
$em->persist($point2989);


$waySet2989 = new WaySet();
$waySet2989->setPoint($point2989);
$waySet2989->setWay($way);
$em->persist($waySet2989);


$point2990 = new Point();
$point2990->setLatitude(48.3778354784568);
$point2990->setLongitude(27.257959842681885);
$em->persist($point2990);


$waySet2990 = new WaySet();
$waySet2990->setPoint($point2990);
$waySet2990->setWay($way);
$em->persist($waySet2990);


$point2991 = new Point();
$point2991->setLatitude(48.376338942153545);
$point2991->setLongitude(27.253668308258057);
$em->persist($point2991);


$waySet2991 = new WaySet();
$waySet2991->setPoint($point2991);
$waySet2991->setWay($way);
$em->persist($waySet2991);


$point2992 = new Point();
$point2992->setLatitude(48.37538754977432);
$point2992->setLongitude(27.250932455062866);
$em->persist($point2992);


$waySet2992 = new WaySet();
$waySet2992->setPoint($point2992);
$waySet2992->setWay($way);
$em->persist($waySet2992);


$point2993 = new Point();
$point2993->setLatitude(48.37513811811917);
$point2993->setLongitude(27.245208621025085);
$em->persist($point2993);


$waySet2993 = new WaySet();
$waySet2993->setPoint($point2993);
$waySet2993->setWay($way);
$em->persist($waySet2993);


$point2994 = new Point();
$point2994->setLatitude(48.37503478178976);
$point2994->setLongitude(27.243003845214844);
$em->persist($point2994);


$waySet2994 = new WaySet();
$waySet2994->setPoint($point2994);
$waySet2994->setWay($way);
$em->persist($waySet2994);


$point2995 = new Point();
$point2995->setLatitude(48.374610744310914);
$point2995->setLongitude(27.240418195724487);
$em->persist($point2995);


$waySet2995 = new WaySet();
$waySet2995->setPoint($point2995);
$waySet2995->setWay($way);
$em->persist($waySet2995);


$point2996 = new Point();
$point2996->setLatitude(48.372918122553415);
$point2996->setLongitude(27.236003279685974);
$em->persist($point2996);


$waySet2996 = new WaySet();
$waySet2996->setPoint($point2996);
$waySet2996->setWay($way);
$em->persist($waySet2996);


$point2997 = new Point();
$point2997->setLatitude(48.372857543468626);
$point2997->setLongitude(27.235761880874634);
$em->persist($point2997);


$waySet2997 = new WaySet();
$waySet2997->setPoint($point2997);
$waySet2997->setWay($way);
$em->persist($waySet2997);


$point2998 = new Point();
$point2998->setLatitude(48.375284213951176);
$point2998->setLongitude(27.232709527015686);
$em->persist($point2998);


$waySet2998 = new WaySet();
$waySet2998->setPoint($point2998);
$waySet2998->setWay($way);
$em->persist($waySet2998);


$point2999 = new Point();
$point2999->setLatitude(48.37799581902296);
$point2999->setLongitude(27.22934603691101);
$em->persist($point2999);


$waySet2999 = new WaySet();
$waySet2999->setPoint($point2999);
$waySet2999->setWay($way);
$em->persist($waySet2999);


$point3000 = new Point();
$point3000->setLatitude(48.38011939310741);
$point3000->setLongitude(27.226706743240356);
$em->persist($point3000);


$waySet3000 = new WaySet();
$waySet3000->setPoint($point3000);
$waySet3000->setWay($way);
$em->persist($waySet3000);


$point3001 = new Point();
$point3001->setLatitude(48.38318701736888);
$point3001->setLongitude(27.22288191318512);
$em->persist($point3001);


$waySet3001 = new WaySet();
$waySet3001->setPoint($point3001);
$waySet3001->setWay($way);
$em->persist($waySet3001);


$point3002 = new Point();
$point3002->setLatitude(48.386183205911365);
$point3002->setLongitude(27.219180464744564);
$em->persist($point3002);


$waySet3002 = new WaySet();
$waySet3002->setPoint($point3002);
$waySet3002->setWay($way);
$em->persist($waySet3002);


$point3003 = new Point();
$point3003->setLatitude(48.38891204222821);
$point3003->setLongitude(27.215816974639893);
$em->persist($point3003);


$waySet3003 = new WaySet();
$waySet3003->setPoint($point3003);
$waySet3003->setWay($way);
$em->persist($waySet3003);


$point3004 = new Point();
$point3004->setLatitude(48.39114202696487);
$point3004->setLongitude(27.213048934936523);
$em->persist($point3004);


$waySet3004 = new WaySet();
$waySet3004->setPoint($point3004);
$waySet3004->setWay($way);
$em->persist($waySet3004);


$point3005 = new Point();
$point3005->setLatitude(48.39029777906287);
$point3005->setLongitude(27.20992147922516);
$em->persist($point3005);


$waySet3005 = new WaySet();
$waySet3005->setPoint($point3005);
$waySet3005->setWay($way);
$em->persist($waySet3005);


$point3006 = new Point();
$point3006->setLatitude(48.38969931637028);
$point3006->setLongitude(27.207748889923092);
$em->persist($point3006);


$waySet3006 = new WaySet();
$waySet3006->setPoint($point3006);
$waySet3006->setWay($way);
$em->persist($waySet3006);


$point3007 = new Point();
$point3007->setLatitude(48.38933239826295);
$point3007->setLongitude(27.203591465950012);
$em->persist($point3007);


$waySet3007 = new WaySet();
$waySet3007->setPoint($point3007);
$waySet3007->setWay($way);
$em->persist($waySet3007);


$point3008 = new Point();
$point3008->setLatitude(48.38902959977411);
$point3008->setLongitude(27.200265526771542);
$em->persist($point3008);


$waySet3008 = new WaySet();
$waySet3008->setPoint($point3008);
$waySet3008->setWay($way);
$em->persist($waySet3008);


$point3009 = new Point();
$point3009->setLatitude(48.389311024311056);
$point3009->setLongitude(27.199487686157227);
$em->persist($point3009);


$waySet3009 = new WaySet();
$waySet3009->setPoint($point3009);
$waySet3009->setWay($way);
$em->persist($waySet3009);


$point3010 = new Point();
$point3010->setLatitude(48.38986318185489);
$point3010->setLongitude(27.198334336280823);
$em->persist($point3010);


$waySet3010 = new WaySet();
$waySet3010->setPoint($point3010);
$waySet3010->setWay($way);
$em->persist($waySet3010);


$point3011 = new Point();
$point3011->setLatitude(48.39115271355741);
$point3011->setLongitude(27.19655871391296);
$em->persist($point3011);


$waySet3011 = new WaySet();
$waySet3011->setPoint($point3011);
$waySet3011->setWay($way);
$em->persist($waySet3011);


$point3012 = new Point();
$point3012->setLatitude(48.39285897737798);
$point3012->setLongitude(27.194230556488037);
$em->persist($point3012);


$waySet3012 = new WaySet();
$waySet3012->setPoint($point3012);
$waySet3012->setWay($way);
$em->persist($waySet3012);


$point3013 = new Point();
$point3013->setLatitude(48.393535767637786);
$point3013->setLongitude(27.193543910980225);
$em->persist($point3013);


$waySet3013 = new WaySet();
$waySet3013->setPoint($point3013);
$waySet3013->setWay($way);
$em->persist($waySet3013);


$point3014 = new Point();
$point3014->setLatitude(48.39437283787479);
$point3014->setLongitude(27.19286262989044);
$em->persist($point3014);


$waySet3014 = new WaySet();
$waySet3014->setPoint($point3014);
$waySet3014->setWay($way);
$em->persist($waySet3014);


$point3015 = new Point();
$point3015->setLatitude(48.39490000695654);
$point3015->setLongitude(27.192267179489136);
$em->persist($point3015);


$waySet3015 = new WaySet();
$waySet3015->setPoint($point3015);
$waySet3015->setWay($way);
$em->persist($waySet3015);


$point3016 = new Point();
$point3016->setLatitude(48.39257044826715);
$point3016->setLongitude(27.18735873699188);
$em->persist($point3016);


$waySet3016 = new WaySet();
$waySet3016->setPoint($point3016);
$waySet3016->setWay($way);
$em->persist($waySet3016);


$point3017 = new Point();
$point3017->setLatitude(48.38999498631829);
$point3017->setLongitude(27.183367609977722);
$em->persist($point3017);


$waySet3017 = new WaySet();
$waySet3017->setPoint($point3017);
$waySet3017->setWay($way);
$em->persist($waySet3017);


$point3018 = new Point();
$point3018->setLatitude(48.386254456761684);
$point3018->setLongitude(27.177091240882874);
$em->persist($point3018);


$waySet3018 = new WaySet();
$waySet3018->setPoint($point3018);
$waySet3018->setWay($way);
$em->persist($waySet3018);


$point3019 = new Point();
$point3019->setLatitude(48.38306944632685);
$point3019->setLongitude(27.171753644943237);
$em->persist($point3019);


$waySet3019 = new WaySet();
$waySet3019->setPoint($point3019);
$waySet3019->setWay($way);
$em->persist($waySet3019);


$point3020 = new Point();
$point3020->setLatitude(48.38084267076744);
$point3020->setLongitude(27.168020009994507);
$em->persist($point3020);


$waySet3020 = new WaySet();
$waySet3020->setPoint($point3020);
$waySet3020->setWay($way);
$em->persist($waySet3020);


$point3021 = new Point();
$point3021->setLatitude(48.380105141227595);
$point3021->setLongitude(27.16567039489746);
$em->persist($point3021);


$waySet3021 = new WaySet();
$waySet3021->setPoint($point3021);
$waySet3021->setWay($way);
$em->persist($waySet3021);


$point3022 = new Point();
$point3022->setLatitude(48.37889727991627);
$point3022->setLongitude(27.16118574142456);
$em->persist($point3022);


$waySet3022 = new WaySet();
$waySet3022->setPoint($point3022);
$waySet3022->setWay($way);
$em->persist($waySet3022);


$point3023 = new Point();
$point3023->setLatitude(48.38055051058529);
$point3023->setLongitude(27.160225510597225);
$em->persist($point3023);


$waySet3023 = new WaySet();
$waySet3023->setPoint($point3023);
$waySet3023->setWay($way);
$em->persist($waySet3023);


$point3024 = new Point();
$point3024->setLatitude(48.378181100826055);
$point3024->setLongitude(27.156566977500916);
$em->persist($point3024);


$waySet3024 = new WaySet();
$waySet3024->setPoint($point3024);
$waySet3024->setWay($way);
$em->persist($waySet3024);


$point3025 = new Point();
$point3025->setLatitude(48.37664181614648);
$point3025->setLongitude(27.150902152061462);
$em->persist($point3025);


$waySet3025 = new WaySet();
$waySet3025->setPoint($point3025);
$waySet3025->setWay($way);
$em->persist($waySet3025);


$point3026 = new Point();
$point3026->setLatitude(48.376135837407865);
$point3026->setLongitude(27.145607471466064);
$em->persist($point3026);


$waySet3026 = new WaySet();
$waySet3026->setPoint($point3026);
$waySet3026->setWay($way);
$em->persist($waySet3026);


$point3027 = new Point();
$point3027->setLatitude(48.374550167239924);
$point3027->setLongitude(27.13910043239593);
$em->persist($point3027);


$waySet3027 = new WaySet();
$waySet3027->setPoint($point3027);
$waySet3027->setWay($way);
$em->persist($waySet3027);


$point3028 = new Point();
$point3028->setLatitude(48.37551226514367);
$point3028->setLongitude(27.135849595069885);
$em->persist($point3028);


$waySet3028 = new WaySet();
$waySet3028->setPoint($point3028);
$waySet3028->setWay($way);
$em->persist($waySet3028);


$point3029 = new Point();
$point3029->setLatitude(48.3771869847932);
$point3029->setLongitude(27.130324244499207);
$em->persist($point3029);


$waySet3029 = new WaySet();
$waySet3029->setPoint($point3029);
$waySet3029->setWay($way);
$em->persist($waySet3029);


$point3030 = new Point();
$point3030->setLatitude(48.378476837691515);
$point3030->setLongitude(27.126038074493408);
$em->persist($point3030);


$waySet3030 = new WaySet();
$waySet3030->setPoint($point3030);
$waySet3030->setWay($way);
$em->persist($waySet3030);


$point3031 = new Point();
$point3031->setLatitude(48.379193012621286);
$point3031->setLongitude(27.12365090847015);
$em->persist($point3031);


$waySet3031 = new WaySet();
$waySet3031->setPoint($point3031);
$waySet3031->setWay($way);
$em->persist($waySet3031);


$point3032 = new Point();
$point3032->setLatitude(48.38074647186823);
$point3032->setLongitude(27.122132778167725);
$em->persist($point3032);


$waySet3032 = new WaySet();
$waySet3032->setPoint($point3032);
$waySet3032->setWay($way);
$em->persist($waySet3032);


$point3033 = new Point();
$point3033->setLatitude(48.38341859589984);
$point3033->setLongitude(27.119573950767517);
$em->persist($point3033);


$waySet3033 = new WaySet();
$waySet3033->setPoint($point3033);
$waySet3033->setWay($way);
$em->persist($waySet3033);


$point3034 = new Point();
$point3034->setLatitude(48.386147580448785);
$point3034->setLongitude(27.116940021514893);
$em->persist($point3034);


$waySet3034 = new WaySet();
$waySet3034->setPoint($point3034);
$waySet3034->setWay($way);
$em->persist($waySet3034);


$point3035 = new Point();
$point3035->setLatitude(48.388922729289085);
$point3035->setLongitude(27.11426317691803);
$em->persist($point3035);


$waySet3035 = new WaySet();
$waySet3035->setPoint($point3035);
$waySet3035->setWay($way);
$em->persist($waySet3035);


$point3036 = new Point();
$point3036->setLatitude(48.39183665081121);
$point3036->setLongitude(27.111457586288452);
$em->persist($point3036);


$waySet3036 = new WaySet();
$waySet3036->setPoint($point3036);
$waySet3036->setWay($way);
$em->persist($waySet3036);


$point3037 = new Point();
$point3037->setLatitude(48.39467560456915);
$point3037->setLongitude(27.10873782634735);
$em->persist($point3037);


$waySet3037 = new WaySet();
$waySet3037->setPoint($point3037);
$waySet3037->setWay($way);
$em->persist($waySet3037);


$point3038 = new Point();
$point3038->setLatitude(48.39655627968);
$point3038->setLongitude(27.106908559799194);
$em->persist($point3038);


$waySet3038 = new WaySet();
$waySet3038->setPoint($point3038);
$waySet3038->setWay($way);
$em->persist($waySet3038);


$point3039 = new Point();
$point3039->setLatitude(48.39985797860946);
$point3039->setLongitude(27.10302472114563);
$em->persist($point3039);


$waySet3039 = new WaySet();
$waySet3039->setPoint($point3039);
$waySet3039->setWay($way);
$em->persist($waySet3039);


$point3040 = new Point();
$point3040->setLatitude(48.40250773083547);
$point3040->setLongitude(27.099886536598202);
$em->persist($point3040);


$waySet3040 = new WaySet();
$waySet3040->setPoint($point3040);
$waySet3040->setWay($way);
$em->persist($waySet3040);


$point3041 = new Point();
$point3041->setLatitude(48.405086120650395);
$point3041->setLongitude(27.096850275993344);
$em->persist($point3041);


$waySet3041 = new WaySet();
$waySet3041->setPoint($point3041);
$waySet3041->setWay($way);
$em->persist($waySet3041);


$point3042 = new Point();
$point3042->setLatitude(48.407682184961985);
$point3042->setLongitude(27.09377110004425);
$em->persist($point3042);


$waySet3042 = new WaySet();
$waySet3042->setPoint($point3042);
$waySet3042->setWay($way);
$em->persist($waySet3042);


$point3043 = new Point();
$point3043->setLatitude(48.41041342918458);
$point3043->setLongitude(27.09053635597229);
$em->persist($point3043);


$waySet3043 = new WaySet();
$waySet3043->setPoint($point3043);
$waySet3043->setWay($way);
$em->persist($waySet3043);


$point3044 = new Point();
$point3044->setLatitude(48.41320861850978);
$point3044->setLongitude(27.08723187446594);
$em->persist($point3044);


$waySet3044 = new WaySet();
$waySet3044->setPoint($point3044);
$waySet3044->setWay($way);
$em->persist($waySet3044);


$point3045 = new Point();
$point3045->setLatitude(48.41601433555183);
$point3045->setLongitude(27.086947560310364);
$em->persist($point3045);


$waySet3045 = new WaySet();
$waySet3045->setPoint($point3045);
$waySet3045->setWay($way);
$em->persist($waySet3045);


$point3046 = new Point();
$point3046->setLatitude(48.418827018284944);
$point3046->setLongitude(27.086668610572815);
$em->persist($point3046);


$waySet3046 = new WaySet();
$waySet3046->setPoint($point3046);
$waySet3046->setWay($way);
$em->persist($waySet3046);


$point3047 = new Point();
$point3047->setLatitude(48.421657345713726);
$point3047->setLongitude(27.086384296417236);
$em->persist($point3047);


$waySet3047 = new WaySet();
$waySet3047->setPoint($point3047);
$waySet3047->setWay($way);
$em->persist($waySet3047);


$point3048 = new Point();
$point3048->setLatitude(48.42444123731553);
$point3048->setLongitude(27.086073160171505);
$em->persist($point3048);


$waySet3048 = new WaySet();
$waySet3048->setPoint($point3048);
$waySet3048->setWay($way);
$em->persist($waySet3048);


$point3049 = new Point();
$point3049->setLatitude(48.42741007900946);
$point3049->setLongitude(27.085724472999573);
$em->persist($point3049);


$waySet3049 = new WaySet();
$waySet3049->setPoint($point3049);
$waySet3049->setWay($way);
$em->persist($waySet3049);


$point3050 = new Point();
$point3050->setLatitude(48.43037874727942);
$point3050->setLongitude(27.085375785827637);
$em->persist($point3050);


$waySet3050 = new WaySet();
$waySet3050->setPoint($point3050);
$waySet3050->setWay($way);
$em->persist($waySet3050);


$point3051 = new Point();
$point3051->setLatitude(48.43284182719711);
$point3051->setLongitude(27.085091471672055);
$em->persist($point3051);


$waySet3051 = new WaySet();
$waySet3051->setPoint($point3051);
$waySet3051->setWay($way);
$em->persist($waySet3051);


$point3052 = new Point();
$point3052->setLatitude(48.434713972816105);
$point3052->setLongitude(27.084876894950867);
$em->persist($point3052);


$waySet3052 = new WaySet();
$waySet3052->setPoint($point3052);
$waySet3052->setWay($way);
$em->persist($waySet3052);


$point3053 = new Point();
$point3053->setLatitude(48.43361774382779);
$point3053->setLongitude(27.077152132987976);
$em->persist($point3053);


$waySet3053 = new WaySet();
$waySet3053->setPoint($point3053);
$waySet3053->setWay($way);
$em->persist($waySet3053);


$point3054 = new Point();
$point3054->setLatitude(48.43266742228678);
$point3054->setLongitude(27.070462703704834);
$em->persist($point3054);


$waySet3054 = new WaySet();
$waySet3054->setPoint($point3054);
$waySet3054->setWay($way);
$em->persist($waySet3054);


$point3055 = new Point();
$point3055->setLatitude(48.43237200035857);
$point3055->setLongitude(27.06932008266449);
$em->persist($point3055);


$waySet3055 = new WaySet();
$waySet3055->setPoint($point3055);
$waySet3055->setWay($way);
$em->persist($waySet3055);


$point3056 = new Point();
$point3056->setLatitude(48.43082367662033);
$point3056->setLongitude(27.069454193115234);
$em->persist($point3056);


$waySet3056 = new WaySet();
$waySet3056->setPoint($point3056);
$waySet3056->setWay($way);
$em->persist($waySet3056);


$point3057 = new Point();
$point3057->setLatitude(48.42929666286417);
$point3057->setLongitude(27.06557035446167);
$em->persist($point3057);


$waySet3057 = new WaySet();
$waySet3057->setPoint($point3057);
$waySet3057->setWay($way);
$em->persist($waySet3057);


$point3058 = new Point();
$point3058->setLatitude(48.42647032054241);
$point3058->setLongitude(27.064787149429318);
$em->persist($point3058);


$waySet3058 = new WaySet();
$waySet3058->setPoint($point3058);
$waySet3058->setWay($way);
$em->persist($waySet3058);


$point3059 = new Point();
$point3059->setLatitude(48.423661620639635);
$point3059->setLongitude(27.06433117389679);
$em->persist($point3059);


$waySet3059 = new WaySet();
$waySet3059->setPoint($point3059);
$waySet3059->setWay($way);
$em->persist($waySet3059);


$point3060 = new Point();
$point3060->setLatitude(48.42273603280429);
$point3060->setLongitude(27.064465284347534);
$em->persist($point3060);


$waySet3060 = new WaySet();
$waySet3060->setPoint($point3060);
$waySet3060->setWay($way);
$em->persist($waySet3060);


$point3061 = new Point();
$point3061->setLatitude(48.42198131024834);
$point3061->setLongitude(27.064175605773926);
$em->persist($point3061);


$waySet3061 = new WaySet();
$waySet3061->setPoint($point3061);
$waySet3061->setWay($way);
$em->persist($waySet3061);


$point3062 = new Point();
$point3062->setLatitude(48.42130489843544);
$point3062->setLongitude(27.06233024597168);
$em->persist($point3062);


$waySet3062 = new WaySet();
$waySet3062->setPoint($point3062);
$waySet3062->setWay($way);
$em->persist($waySet3062);


$point3063 = new Point();
$point3063->setLatitude(48.42130489843544);
$point3063->setLongitude(27.06106424331665);
$em->persist($point3063);


$waySet3063 = new WaySet();
$waySet3063->setPoint($point3063);
$waySet3063->setWay($way);
$em->persist($waySet3063);


$point3064 = new Point();
$point3064->setLatitude(48.4224013930538);
$point3064->setLongitude(27.05807089805603);
$em->persist($point3064);


$waySet3064 = new WaySet();
$waySet3064->setPoint($point3064);
$waySet3064->setWay($way);
$em->persist($waySet3064);


$point3065 = new Point();
$point3065->setLatitude(48.42433800109102);
$point3065->setLongitude(27.054272890090942);
$em->persist($point3065);


$waySet3065 = new WaySet();
$waySet3065->setPoint($point3065);
$waySet3065->setWay($way);
$em->persist($waySet3065);


$point3066 = new Point();
$point3066->setLatitude(48.42543087048297);
$point3066->setLongitude(27.05135464668274);
$em->persist($point3066);


$waySet3066 = new WaySet();
$waySet3066->setPoint($point3066);
$waySet3066->setWay($way);
$em->persist($waySet3066);


$point3067 = new Point();
$point3067->setLatitude(48.42451243458956);
$point3067->setLongitude(27.048141360282898);
$em->persist($point3067);


$waySet3067 = new WaySet();
$waySet3067->setPoint($point3067);
$waySet3067->setWay($way);
$em->persist($waySet3067);


$point3068 = new Point();
$point3068->setLatitude(48.424875539135776);
$point3068->setLongitude(27.045925855636597);
$em->persist($point3068);


$waySet3068 = new WaySet();
$waySet3068->setPoint($point3068);
$waySet3068->setWay($way);
$em->persist($waySet3068);


$point3069 = new Point();
$point3069->setLatitude(48.42477942347893);
$point3069->setLongitude(27.044042944908142);
$em->persist($point3069);


$waySet3069 = new WaySet();
$waySet3069->setPoint($point3069);
$waySet3069->setWay($way);
$em->persist($waySet3069);


$point3070 = new Point();
$point3070->setLatitude(48.42362958134236);
$point3070->setLongitude(27.038147449493405);
$em->persist($point3070);


$waySet3070 = new WaySet();
$waySet3070->setPoint($point3070);
$waySet3070->setWay($way);
$em->persist($waySet3070);


$point3071 = new Point();
$point3071->setLatitude(48.423448024942886);
$point3071->setLongitude(27.037283778190613);
$em->persist($point3071);


$waySet3071 = new WaySet();
$waySet3071->setPoint($point3071);
$waySet3071->setWay($way);
$em->persist($waySet3071);


$point3072 = new Point();
$point3072->setLatitude(48.42366874048075);
$point3072->setLongitude(27.03576028347015);
$em->persist($point3072);


$waySet3072 = new WaySet();
$waySet3072->setPoint($point3072);
$waySet3072->setWay($way);
$em->persist($waySet3072);


$point3073 = new Point();
$point3073->setLatitude(48.42419204607102);
$point3073->setLongitude(27.03414022922516);
$em->persist($point3073);


$waySet3073 = new WaySet();
$waySet3073->setPoint($point3073);
$waySet3073->setWay($way);
$em->persist($waySet3073);


$point3074 = new Point();
$point3074->setLatitude(48.4270469925708);
$point3074->setLongitude(27.029789686203003);
$em->persist($point3074);


$waySet3074 = new WaySet();
$waySet3074->setPoint($point3074);
$waySet3074->setWay($way);
$em->persist($waySet3074);


$point3075 = new Point();
$point3075->setLatitude(48.42636708843939);
$point3075->setLongitude(27.024334073066708);
$em->persist($point3075);


$waySet3075 = new WaySet();
$waySet3075->setPoint($point3075);
$waySet3075->setWay($way);
$em->persist($waySet3075);


$point3076 = new Point();
$point3076->setLatitude(48.42554122406646);
$point3076->setLongitude(27.017837762832638);
$em->persist($point3076);


$waySet3076 = new WaySet();
$waySet3076->setPoint($point3076);
$waySet3076->setWay($way);
$em->persist($waySet3076);


$point3077 = new Point();
$point3077->setLatitude(48.42511404757314);
$point3077->setLongitude(27.01440453529358);
$em->persist($point3077);


$waySet3077 = new WaySet();
$waySet3077->setPoint($point3077);
$waySet3077->setWay($way);
$em->persist($waySet3077);


$point3078 = new Point();
$point3078->setLatitude(48.42304219064612);
$point3078->setLongitude(27.012194395065308);
$em->persist($point3078);


$waySet3078 = new WaySet();
$waySet3078->setPoint($point3078);
$waySet3078->setWay($way);
$em->persist($waySet3078);


$point3079 = new Point();
$point3079->setLatitude(48.42040418873288);
$point3079->setLongitude(27.0135623216629);
$em->persist($point3079);


$waySet3079 = new WaySet();
$waySet3079->setPoint($point3079);
$waySet3079->setWay($way);
$em->persist($waySet3079);


$point3080 = new Point();
$point3080->setLatitude(48.420653398547984);
$point3080->setLongitude(27.014715671539303);
$em->persist($point3080);


$waySet3080 = new WaySet();
$waySet3080->setPoint($point3080);
$waySet3080->setWay($way);
$em->persist($waySet3080);


$point3081 = new Point();
$point3081->setLatitude(48.419870163586396);
$point3081->setLongitude(27.017301321029663);
$em->persist($point3081);


$waySet3081 = new WaySet();
$waySet3081->setPoint($point3081);
$waySet3081->setWay($way);
$em->persist($waySet3081);


$point3082 = new Point();
$point3082->setLatitude(48.41832857952538);
$point3082->setLongitude(27.019897699356076);
$em->persist($point3082);


$waySet3082 = new WaySet();
$waySet3082->setPoint($point3082);
$waySet3082->setWay($way);
$em->persist($waySet3082);


$point3083 = new Point();
$point3083->setLatitude(48.41759515360746);
$point3083->setLongitude(27.023229002952576);
$em->persist($point3083);


$waySet3083 = new WaySet();
$waySet3083->setPoint($point3083);
$waySet3083->setWay($way);
$em->persist($waySet3083);


$point3084 = new Point();
$point3084->setLatitude(48.418022393292844);
$point3084->setLongitude(27.026275992393494);
$em->persist($point3084);


$waySet3084 = new WaySet();
$waySet3084->setPoint($point3084);
$waySet3084->setWay($way);
$em->persist($waySet3084);


$point3085 = new Point();
$point3085->setLatitude(48.4164487093746);
$point3085->setLongitude(27.029542922973633);
$em->persist($point3085);


$waySet3085 = new WaySet();
$waySet3085->setPoint($point3085);
$waySet3085->setWay($way);
$em->persist($waySet3085);


$point3086 = new Point();
$point3086->setLatitude(48.41497823218785);
$point3086->setLongitude(27.03258454799652);
$em->persist($point3086);


$waySet3086 = new WaySet();
$waySet3086->setPoint($point3086);
$waySet3086->setWay($way);
$em->persist($waySet3086);


$point3087 = new Point();
$point3087->setLatitude(48.413518394365276);
$point3087->setLongitude(27.035180926322933);
$em->persist($point3087);


$waySet3087 = new WaySet();
$waySet3087->setPoint($point3087);
$waySet3087->setWay($way);
$em->persist($waySet3087);


$point3088 = new Point();
$point3088->setLatitude(48.41075526950137);
$point3088->setLongitude(27.040051817893982);
$em->persist($point3088);


$waySet3088 = new WaySet();
$waySet3088->setPoint($point3088);
$waySet3088->setWay($way);
$em->persist($waySet3088);


$point3089 = new Point();
$point3089->setLatitude(48.40737237355104);
$point3089->setLongitude(27.042417526245114);
$em->persist($point3089);


$waySet3089 = new WaySet();
$waySet3089->setPoint($point3089);
$waySet3089->setWay($way);
$em->persist($waySet3089);


$point3090 = new Point();
$point3090->setLatitude(48.40404623330324);
$point3090->setLongitude(27.044734954833984);
$em->persist($point3090);


$waySet3090 = new WaySet();
$waySet3090->setPoint($point3090);
$waySet3090->setWay($way);
$em->persist($waySet3090);


$point3091 = new Point();
$point3091->setLatitude(48.40228336200413);
$point3091->setLongitude(27.045056819915768);
$em->persist($point3091);


$waySet3091 = new WaySet();
$waySet3091->setPoint($point3091);
$waySet3091->setWay($way);
$em->persist($waySet3091);


$point3092 = new Point();
$point3092->setLatitude(48.398828669353875);
$point3092->setLongitude(27.045453786849976);
$em->persist($point3092);


$waySet3092 = new WaySet();
$waySet3092->setPoint($point3092);
$waySet3092->setWay($way);
$em->persist($waySet3092);


$point3093 = new Point();
$point3093->setLatitude(48.39587596773161);
$point3093->setLongitude(27.04580247402191);
$em->persist($point3093);


$waySet3093 = new WaySet();
$waySet3093->setPoint($point3093);
$waySet3093->setWay($way);
$em->persist($waySet3093);


$point3094 = new Point();
$point3094->setLatitude(48.39293021888191);
$point3094->setLongitude(27.046140432357788);
$em->persist($point3094);


$waySet3094 = new WaySet();
$waySet3094->setPoint($point3094);
$waySet3094->setWay($way);
$em->persist($waySet3094);


$point3095 = new Point();
$point3095->setLatitude(48.39011610363234);
$point3095->setLongitude(27.046446204185482);
$em->persist($point3095);


$waySet3095 = new WaySet();
$waySet3095->setPoint($point3095);
$waySet3095->setWay($way);
$em->persist($waySet3095);


$point3096 = new Point();
$point3096->setLatitude(48.3869384598495);
$point3096->setLongitude(27.046768069267273);
$em->persist($point3096);


$waySet3096 = new WaySet();
$waySet3096->setPoint($point3096);
$waySet3096->setWay($way);
$em->persist($waySet3096);


$point3097 = new Point();
$point3097->setLatitude(48.383504101552646);
$point3097->setLongitude(27.04712212085724);
$em->persist($point3097);


$waySet3097 = new WaySet();
$waySet3097->setPoint($point3097);
$waySet3097->setWay($way);
$em->persist($waySet3097);


$point3098 = new Point();
$point3098->setLatitude(48.38004813366852);
$point3098->setLongitude(27.047465443611145);
$em->persist($point3098);


$waySet3098 = new WaySet();
$waySet3098->setPoint($point3098);
$waySet3098->setWay($way);
$em->persist($waySet3098);


$point3099 = new Point();
$point3099->setLatitude(48.379296340510805);
$point3099->setLongitude(27.04755127429962);
$em->persist($point3099);


$waySet3099 = new WaySet();
$waySet3099->setPoint($point3099);
$waySet3099->setWay($way);
$em->persist($waySet3099);


$point3100 = new Point();
$point3100->setLatitude(48.376445839062676);
$point3100->setLongitude(27.04683244228363);
$em->persist($point3100);


$waySet3100 = new WaySet();
$waySet3100->setPoint($point3100);
$waySet3100->setWay($way);
$em->persist($waySet3100);


$point3101 = new Point();
$point3101->setLatitude(48.37426509770297);
$point3101->setLongitude(27.04588294029236);
$em->persist($point3101);


$waySet3101 = new WaySet();
$waySet3101->setPoint($point3101);
$waySet3101->setWay($way);
$em->persist($waySet3101);


$point3102 = new Point();
$point3102->setLatitude(48.37641020678457);
$point3102->setLongitude(27.04134464263916);
$em->persist($point3102);


$waySet3102 = new WaySet();
$waySet3102->setPoint($point3102);
$waySet3102->setWay($way);
$em->persist($waySet3102);


$point3103 = new Point();
$point3103->setLatitude(48.377211927009945);
$point3103->setLongitude(27.039622664451596);
$em->persist($point3103);


$waySet3103 = new WaySet();
$waySet3103->setPoint($point3103);
$waySet3103->setWay($way);
$em->persist($waySet3103);


$point3104 = new Point();
$point3104->setLatitude(48.377953061588045);
$point3104->setLongitude(27.03710675239563);
$em->persist($point3104);


$waySet3104 = new WaySet();
$waySet3104->setPoint($point3104);
$waySet3104->setWay($way);
$em->persist($waySet3104);


$point3105 = new Point();
$point3105->setLatitude(48.37915381922901);
$point3105->setLongitude(27.034494280815125);
$em->persist($point3105);


$waySet3105 = new WaySet();
$waySet3105->setPoint($point3105);
$waySet3105->setWay($way);
$em->persist($waySet3105);


$point3106 = new Point();
$point3106->setLatitude(48.38005169664284);
$point3106->setLongitude(27.033523321151733);
$em->persist($point3106);


$waySet3106 = new WaySet();
$waySet3106->setPoint($point3106);
$waySet3106->setWay($way);
$em->persist($waySet3106);


$point3107 = new Point();
$point3107->setLatitude(48.38028328943825);
$point3107->setLongitude(27.032686471939087);
$em->persist($point3107);


$waySet3107 = new WaySet();
$waySet3107->setPoint($point3107);
$waySet3107->setWay($way);
$em->persist($waySet3107);


$point3108 = new Point();
$point3108->setLatitude(48.38064670985482);
$point3108->setLongitude(27.032176852226257);
$em->persist($point3108);


$waySet3108 = new WaySet();
$waySet3108->setPoint($point3108);
$waySet3108->setWay($way);
$em->persist($waySet3108);


$point3109 = new Point();
$point3109->setLatitude(48.3823640143716);
$point3109->setLongitude(27.02915132045746);
$em->persist($point3109);


$waySet3109 = new WaySet();
$waySet3109->setPoint($point3109);
$waySet3109->setWay($way);
$em->persist($waySet3109);


$point3110 = new Point();
$point3110->setLatitude(48.38267754089204);
$point3110->setLongitude(27.027171850204468);
$em->persist($point3110);


$waySet3110 = new WaySet();
$waySet3110->setPoint($point3110);
$waySet3110->setWay($way);
$em->persist($waySet3110);


$point3111 = new Point();
$point3111->setLatitude(48.38273810829273);
$point3111->setLongitude(27.024918794631958);
$em->persist($point3111);


$waySet3111 = new WaySet();
$waySet3111->setPoint($point3111);
$waySet3111->setWay($way);
$em->persist($waySet3111);


$point3112 = new Point();
$point3112->setLatitude(48.38278086170867);
$point3112->setLongitude(27.023776173591614);
$em->persist($point3112);


$waySet3112 = new WaySet();
$waySet3112->setPoint($point3112);
$waySet3112->setWay($way);
$em->persist($waySet3112);


$point3113 = new Point();
$point3113->setLatitude(48.382335511864895);
$point3113->setLongitude(27.022933959960934);
$em->persist($point3113);


$waySet3113 = new WaySet();
$waySet3113->setPoint($point3113);
$waySet3113->setWay($way);
$em->persist($waySet3113);


$point3114 = new Point();
$point3114->setLatitude(48.38161938114575);
$point3114->setLongitude(27.021807432174683);
$em->persist($point3114);


$waySet3114 = new WaySet();
$waySet3114->setPoint($point3114);
$waySet3114->setWay($way);
$em->persist($waySet3114);


$point3115 = new Point();
$point3115->setLatitude(48.38145548911669);
$point3115->setLongitude(27.020460963249207);
$em->persist($point3115);


$waySet3115 = new WaySet();
$waySet3115->setPoint($point3115);
$waySet3115->setWay($way);
$em->persist($waySet3115);


$point3116 = new Point();
$point3116->setLatitude(48.38201129472776);
$point3116->setLongitude(27.01751053333282);
$em->persist($point3116);


$waySet3116 = new WaySet();
$waySet3116->setPoint($point3116);
$waySet3116->setWay($way);
$em->persist($waySet3116);


$point3117 = new Point();
$point3117->setLatitude(48.382071862921215);
$point3117->setLongitude(27.014758586883545);
$em->persist($point3117);


$waySet3117 = new WaySet();
$waySet3117->setPoint($point3117);
$waySet3117->setWay($way);
$em->persist($waySet3117);


$point3118 = new Point();
$point3118->setLatitude(48.38104575673541);
$point3118->setLongitude(27.009522914886475);
$em->persist($point3118);


$waySet3118 = new WaySet();
$waySet3118->setPoint($point3118);
$waySet3118->setWay($way);
$em->persist($waySet3118);


$point3119 = new Point();
$point3119->setLatitude(48.37993411835883);
$point3119->setLongitude(27.003943920135494);
$em->persist($point3119);


$waySet3119 = new WaySet();
$waySet3119->setPoint($point3119);
$waySet3119->setWay($way);
$em->persist($waySet3119);


$point3120 = new Point();
$point3120->setLatitude(48.37920013868934);
$point3120->setLongitude(27.00205564498901);
$em->persist($point3120);


$waySet3120 = new WaySet();
$waySet3120->setPoint($point3120);
$waySet3120->setWay($way);
$em->persist($waySet3120);


$point3121 = new Point();
$point3121->setLatitude(48.37735445372827);
$point3121->setLongitude(27.00118660926819);
$em->persist($point3121);


$waySet3121 = new WaySet();
$waySet3121->setPoint($point3121);
$waySet3121->setWay($way);
$em->persist($waySet3121);


$point3122 = new Point();
$point3122->setLatitude(48.3748316718414);
$point3122->setLongitude(27.00113296508789);
$em->persist($point3122);


$waySet3122 = new WaySet();
$waySet3122->setPoint($point3122);
$waySet3122->setWay($way);
$em->persist($waySet3122);


$point3123 = new Point();
$point3123->setLatitude(48.372087826468686);
$point3123->setLongitude(27.001057863235474);
$em->persist($point3123);


$waySet3123 = new WaySet();
$waySet3123->setPoint($point3123);
$waySet3123->setWay($way);
$em->persist($waySet3123);


$point3124 = new Point();
$point3124->setLatitude(48.36920841155672);
$point3124->setLongitude(27.001497745513916);
$em->persist($point3124);


$waySet3124 = new WaySet();
$waySet3124->setPoint($point3124);
$waySet3124->setWay($way);
$em->persist($waySet3124);


$point3125 = new Point();
$point3125->setLatitude(48.36638229281645);
$point3125->setLongitude(27.001942992210388);
$em->persist($point3125);


$waySet3125 = new WaySet();
$waySet3125->setPoint($point3125);
$waySet3125->setWay($way);
$em->persist($waySet3125);


$point3126 = new Point();
$point3126->setLatitude(48.3639694544855);
$point3126->setLongitude(27.002318501472473);
$em->persist($point3126);


$waySet3126 = new WaySet();
$waySet3126->setPoint($point3126);
$waySet3126->setWay($way);
$em->persist($waySet3126);


$point3127 = new Point();
$point3127->setLatitude(48.3648640356492);
$point3127->setLongitude(27.000494599342343);
$em->persist($point3127);


$waySet3127 = new WaySet();
$waySet3127->setPoint($point3127);
$waySet3127->setWay($way);
$em->persist($waySet3127);


$point3128 = new Point();
$point3128->setLatitude(48.36189510623287);
$point3128->setLongitude(26.997560262680054);
$em->persist($point3128);


$waySet3128 = new WaySet();
$waySet3128->setPoint($point3128);
$waySet3128->setWay($way);
$em->persist($waySet3128);


$point3129 = new Point();
$point3129->setLatitude(48.3594856197426);
$point3129->setLongitude(26.99519455432892);
$em->persist($point3129);


$waySet3129 = new WaySet();
$waySet3129->setPoint($point3129);
$waySet3129->setWay($way);
$em->persist($waySet3129);


$point3130 = new Point();
$point3130->setLatitude(48.36091849378739);
$point3130->setLongitude(26.987121105194092);
$em->persist($point3130);


$waySet3130 = new WaySet();
$waySet3130->setPoint($point3130);
$waySet3130->setWay($way);
$em->persist($waySet3130);


$point3131 = new Point();
$point3131->setLatitude(48.36226222212748);
$point3131->setLongitude(26.979578733444214);
$em->persist($point3131);


$waySet3131 = new WaySet();
$waySet3131->setPoint($point3131);
$waySet3131->setWay($way);
$em->persist($waySet3131);


$point3132 = new Point();
$point3132->setLatitude(48.36316039743242);
$point3132->setLongitude(26.97465419769287);
$em->persist($point3132);


$waySet3132 = new WaySet();
$waySet3132->setPoint($point3132);
$waySet3132->setWay($way);
$em->persist($waySet3132);


$point3133 = new Point();
$point3133->setLatitude(48.36427953021388);
$point3133->setLongitude(26.969305872917175);
$em->persist($point3133);


$waySet3133 = new WaySet();
$waySet3133->setPoint($point3133);
$waySet3133->setWay($way);
$em->persist($waySet3133);


$point3134 = new Point();
$point3134->setLatitude(48.3659296715886);
$point3134->setLongitude(26.9614040851593);
$em->persist($point3134);


$waySet3134 = new WaySet();
$waySet3134->setPoint($point3134);
$waySet3134->setWay($way);
$em->persist($waySet3134);


$point3135 = new Point();
$point3135->setLatitude(48.36763321717832);
$point3135->setLongitude(26.95321261882782);
$em->persist($point3135);


$waySet3135 = new WaySet();
$waySet3135->setPoint($point3135);
$waySet3135->setWay($way);
$em->persist($waySet3135);


$point3136 = new Point();
$point3136->setLatitude(48.36864177484603);
$point3136->setLongitude(26.94842219352722);
$em->persist($point3136);


$waySet3136 = new WaySet();
$waySet3136->setPoint($point3136);
$waySet3136->setWay($way);
$em->persist($waySet3136);


$point3137 = new Point();
$point3137->setLatitude(48.369468563406386);
$point3137->setLongitude(26.942585706710815);
$em->persist($point3137);


$waySet3137 = new WaySet();
$waySet3137->setPoint($point3137);
$waySet3137->setWay($way);
$em->persist($waySet3137);


$point3138 = new Point();
$point3138->setLatitude(48.36969307694795);
$point3138->setLongitude(26.941056847572323);
$em->persist($point3138);


$waySet3138 = new WaySet();
$waySet3138->setPoint($point3138);
$waySet3138->setWay($way);
$em->persist($waySet3138);


$point3139 = new Point();
$point3139->setLatitude(48.370687339305356);
$point3139->setLongitude(26.93569242954254);
$em->persist($point3139);


$waySet3139 = new WaySet();
$waySet3139->setPoint($point3139);
$waySet3139->setWay($way);
$em->persist($waySet3139);


$point3140 = new Point();
$point3140->setLatitude(48.37155329392857);
$point3140->setLongitude(26.93101465702057);
$em->persist($point3140);


$waySet3140 = new WaySet();
$waySet3140->setPoint($point3140);
$waySet3140->setWay($way);
$em->persist($waySet3140);


$point3141 = new Point();
$point3141->setLatitude(48.3683958739344);
$point3141->setLongitude(26.931915879249573);
$em->persist($point3141);


$waySet3141 = new WaySet();
$waySet3141->setPoint($point3141);
$waySet3141->setWay($way);
$em->persist($waySet3141);


$point3142 = new Point();
$point3142->setLatitude(48.36511708165341);
$point3142->setLongitude(26.932843923568726);
$em->persist($point3142);


$waySet3142 = new WaySet();
$waySet3142->setPoint($point3142);
$waySet3142->setWay($way);
$em->persist($waySet3142);


$point3143 = new Point();
$point3143->setLatitude(48.36430091467727);
$point3143->setLongitude(26.933589577674866);
$em->persist($point3143);


$waySet3143 = new WaySet();
$waySet3143->setPoint($point3143);
$waySet3143->setWay($way);
$em->persist($waySet3143);


$point3144 = new Point();
$point3144->setLatitude(48.36404786461811);
$point3144->setLongitude(26.932801008224487);
$em->persist($point3144);


$waySet3144 = new WaySet();
$waySet3144->setPoint($point3144);
$waySet3144->setWay($way);
$em->persist($waySet3144);


$point3145 = new Point();
$point3145->setLatitude(48.3632780144543);
$point3145->setLongitude(26.9317227602005);
$em->persist($point3145);


$waySet3145 = new WaySet();
$waySet3145->setPoint($point3145);
$waySet3145->setWay($way);
$em->persist($waySet3145);


$point3146 = new Point();
$point3146->setLatitude(48.3652275661342);
$point3146->setLongitude(26.928176879882812);
$em->persist($point3146);


$waySet3146 = new WaySet();
$waySet3146->setPoint($point3146);
$waySet3146->setWay($way);
$em->persist($waySet3146);


$point3147 = new Point();
$point3147->setLatitude(48.36844220318245);
$point3147->setLongitude(26.92227065563202);
$em->persist($point3147);


$waySet3147 = new WaySet();
$waySet3147->setPoint($point3147);
$waySet3147->setWay($way);
$em->persist($waySet3147);


$point3148 = new Point();
$point3148->setLatitude(48.37120762656506);
$point3148->setLongitude(26.917174458503723);
$em->persist($point3148);


$waySet3148 = new WaySet();
$waySet3148->setPoint($point3148);
$waySet3148->setWay($way);
$em->persist($waySet3148);


$point3149 = new Point();
$point3149->setLatitude(48.373873124483566);
$point3149->setLongitude(26.91226065158844);
$em->persist($point3149);


$waySet3149 = new WaySet();
$waySet3149->setPoint($point3149);
$waySet3149->setWay($way);
$em->persist($waySet3149);


$point3150 = new Point();
$point3150->setLatitude(48.37624629798409);
$point3150->setLongitude(26.907904744148254);
$em->persist($point3150);


$waySet3150 = new WaySet();
$waySet3150->setPoint($point3150);
$waySet3150->setWay($way);
$em->persist($waySet3150);


$point3151 = new Point();
$point3151->setLatitude(48.37902554973425);
$point3151->setLongitude(26.90279245376587);
$em->persist($point3151);


$waySet3151 = new WaySet();
$waySet3151->setPoint($point3151);
$waySet3151->setWay($way);
$em->persist($waySet3151);


$point3152 = new Point();
$point3152->setLatitude(48.381865218199934);
$point3152->setLongitude(26.897567510604855);
$em->persist($point3152);


$waySet3152 = new WaySet();
$waySet3152->setPoint($point3152);
$waySet3152->setWay($way);
$em->persist($waySet3152);


$point3153 = new Point();
$point3153->setLatitude(48.38345778600854);
$point3153->setLongitude(26.894638538360596);
$em->persist($point3153);


$waySet3153 = new WaySet();
$waySet3153->setPoint($point3153);
$waySet3153->setWay($way);
$em->persist($waySet3153);


$point3154 = new Point();
$point3154->setLatitude(48.387415831557725);
$point3154->setLongitude(26.895931363105774);
$em->persist($point3154);


$waySet3154 = new WaySet();
$waySet3154->setPoint($point3154);
$waySet3154->setWay($way);
$em->persist($waySet3154);


$point3155 = new Point();
$point3155->setLatitude(48.38971712786155);
$point3155->setLongitude(26.896698474884033);
$em->persist($point3155);


$waySet3155 = new WaySet();
$waySet3155->setPoint($point3155);
$waySet3155->setWay($way);
$em->persist($waySet3155);


$point3156 = new Point();
$point3156->setLatitude(48.39258825875346);
$point3156->setLongitude(26.897905468940735);
$em->persist($point3156);


$waySet3156 = new WaySet();
$waySet3156->setPoint($point3156);
$waySet3156->setWay($way);
$em->persist($waySet3156);


$point3157 = new Point();
$point3157->setLatitude(48.394789586857854);
$point3157->setLongitude(26.898822784423828);
$em->persist($point3157);


$waySet3157 = new WaySet();
$waySet3157->setPoint($point3157);
$waySet3157->setWay($way);
$em->persist($waySet3157);


$point3158 = new Point();
$point3158->setLatitude(48.39676998836199);
$point3158->setLongitude(26.902009248733517);
$em->persist($point3158);


$waySet3158 = new WaySet();
$waySet3158->setPoint($point3158);
$waySet3158->setWay($way);
$em->persist($waySet3158);


$point3159 = new Point();
$point3159->setLatitude(48.40013934325875);
$point3159->setLongitude(26.89877450466156);
$em->persist($point3159);


$waySet3159 = new WaySet();
$waySet3159->setPoint($point3159);
$waySet3159->setWay($way);
$em->persist($waySet3159);


$point3160 = new Point();
$point3160->setLatitude(48.404409484039405);
$point3160->setLongitude(26.894670724868774);
$em->persist($point3160);


$waySet3160 = new WaySet();
$waySet3160->setPoint($point3160);
$waySet3160->setWay($way);
$em->persist($waySet3160);


$point3161 = new Point();
$point3161->setLatitude(48.407094609991816);
$point3161->setLongitude(26.892095804214478);
$em->persist($point3161);


$waySet3161 = new WaySet();
$waySet3161->setPoint($point3161);
$waySet3161->setWay($way);
$em->persist($waySet3161);


$point3162 = new Point();
$point3162->setLatitude(48.4080418487154);
$point3162->setLongitude(26.891178488731384);
$em->persist($point3162);


$waySet3162 = new WaySet();
$waySet3162->setPoint($point3162);
$waySet3162->setWay($way);
$em->persist($waySet3162);


$point3163 = new Point();
$point3163->setLatitude(48.411175445075784);
$point3163->setLongitude(26.887466311454773);
$em->persist($point3163);


$waySet3163 = new WaySet();
$waySet3163->setPoint($point3163);
$waySet3163->setWay($way);
$em->persist($waySet3163);


$point3164 = new Point();
$point3164->setLatitude(48.41363945568097);
$point3164->setLongitude(26.88453733921051);
$em->persist($point3164);


$waySet3164 = new WaySet();
$waySet3164->setPoint($point3164);
$waySet3164->setWay($way);
$em->persist($waySet3164);


$point3165 = new Point();
$point3165->setLatitude(48.4155621555807);
$point3165->setLongitude(26.88226819038391);
$em->persist($point3165);


$waySet3165 = new WaySet();
$waySet3165->setPoint($point3165);
$waySet3165->setWay($way);
$em->persist($waySet3165);


$point3166 = new Point();
$point3166->setLatitude(48.419435818996895);
$point3166->setLongitude(26.872998476028442);
$em->persist($point3166);


$waySet3166 = new WaySet();
$waySet3166->setPoint($point3166);
$waySet3166->setWay($way);
$em->persist($waySet3166);


$point3167 = new Point();
$point3167->setLatitude(48.417947626607095);
$point3167->setLongitude(26.868401169776917);
$em->persist($point3167);


$waySet3167 = new WaySet();
$waySet3167->setPoint($point3167);
$waySet3167->setWay($way);
$em->persist($waySet3167);


$point3168 = new Point();
$point3168->setLatitude(48.41637394037445);
$point3168->setLongitude(26.863508820533752);
$em->persist($point3168);


$waySet3168 = new WaySet();
$waySet3168->setPoint($point3168);
$waySet3168->setWay($way);
$em->persist($waySet3168);


$point3169 = new Point();
$point3169->setLatitude(48.41427680314838);
$point3169->setLongitude(26.85558557510376);
$em->persist($point3169);


$waySet3169 = new WaySet();
$waySet3169->setPoint($point3169);
$waySet3169->setWay($way);
$em->persist($waySet3169);


$point3170 = new Point();
$point3170->setLatitude(48.41315164803204);
$point3170->setLongitude(26.85133159160614);
$em->persist($point3170);


$waySet3170 = new WaySet();
$waySet3170->setPoint($point3170);
$waySet3170->setWay($way);
$em->persist($waySet3170);


$point3171 = new Point();
$point3171->setLatitude(48.41383528955196);
$point3171->setLongitude(26.84538245201111);
$em->persist($point3171);


$waySet3171 = new WaySet();
$waySet3171->setPoint($point3171);
$waySet3171->setWay($way);
$em->persist($waySet3171);


$point3172 = new Point();
$point3172->setLatitude(48.41471475236362);
$point3172->setLongitude(26.837931275367737);
$em->persist($point3172);


$waySet3172 = new WaySet();
$waySet3172->setPoint($point3172);
$waySet3172->setWay($way);
$em->persist($waySet3172);


$point3173 = new Point();
$point3173->setLatitude(48.415857675229745);
$point3173->setLongitude(26.828286051750183);
$em->persist($point3173);


$waySet3173 = new WaySet();
$waySet3173->setPoint($point3173);
$waySet3173->setWay($way);
$em->persist($waySet3173);


$point3174 = new Point();
$point3174->setLatitude(48.41690444185491);
$point3174->setLongitude(26.819450855255127);
$em->persist($point3174);


$waySet3174 = new WaySet();
$waySet3174->setPoint($point3174);
$waySet3174->setWay($way);
$em->persist($waySet3174);


$point3175 = new Point();
$point3175->setLatitude(48.4175061448877);
$point3175->setLongitude(26.81137204170227);
$em->persist($point3175);


$waySet3175 = new WaySet();
$waySet3175->setPoint($point3175);
$waySet3175->setWay($way);
$em->persist($waySet3175);


$point3176 = new Point();
$point3176->setLatitude(48.418139883576856);
$point3176->setLongitude(26.803041100502014);
$em->persist($point3176);


$waySet3176 = new WaySet();
$waySet3176->setPoint($point3176);
$waySet3176->setWay($way);
$em->persist($waySet3176);


$point3177 = new Point();
$point3177->setLatitude(48.41875937331134);
$point3177->setLongitude(26.794887185096737);
$em->persist($point3177);


$waySet3177 = new WaySet();
$waySet3177->setPoint($point3177);
$waySet3177->setWay($way);
$em->persist($waySet3177);


$point3178 = new Point();
$point3178->setLatitude(48.41927560899009);
$point3178->setLongitude(26.78806364536285);
$em->persist($point3178);


$waySet3178 = new WaySet();
$waySet3178->setPoint($point3178);
$waySet3178->setWay($way);
$em->persist($waySet3178);


$point3179 = new Point();
$point3179->setLatitude(48.418673926900205);
$point3179->setLongitude(26.779056787490845);
$em->persist($point3179);


$waySet3179 = new WaySet();
$waySet3179->setPoint($point3179);
$waySet3179->setWay($way);
$em->persist($waySet3179);


$point3180 = new Point();
$point3180->setLatitude(48.41829653686651);
$point3180->setLongitude(26.773434877395626);
$em->persist($point3180);


$waySet3180 = new WaySet();
$waySet3180->setPoint($point3180);
$waySet3180->setWay($way);
$em->persist($waySet3180);


$point3181 = new Point();
$point3181->setLatitude(48.41483581083079);
$point3181->setLongitude(26.771814823150635);
$em->persist($point3181);


$waySet3181 = new WaySet();
$waySet3181->setPoint($point3181);
$waySet3181->setWay($way);
$em->persist($waySet3181);


$point3182 = new Point();
$point3182->setLatitude(48.41151371949854);
$point3182->setLongitude(26.770253777503967);
$em->persist($point3182);


$waySet3182 = new WaySet();
$waySet3182->setPoint($point3182);
$waySet3182->setWay($way);
$em->persist($waySet3182);


$point3183 = new Point();
$point3183->setLatitude(48.41151015872686);
$point3183->setLongitude(26.770253777503967);
$em->persist($point3183);


$waySet3183 = new WaySet();
$waySet3183->setPoint($point3183);
$waySet3183->setWay($way);
$em->persist($waySet3183);


$point3184 = new Point();
$point3184->setLatitude(48.407233491961065);
$point3184->setLongitude(26.768236756324768);
$em->persist($point3184);


$waySet3184 = new WaySet();
$waySet3184->setPoint($point3184);
$waySet3184->setWay($way);
$em->persist($waySet3184);


$point3185 = new Point();
$point3185->setLatitude(48.40830536311818);
$point3185->setLongitude(26.764642596244812);
$em->persist($point3185);


$waySet3185 = new WaySet();
$waySet3185->setPoint($point3185);
$waySet3185->setWay($way);
$em->persist($waySet3185);


$point3186 = new Point();
$point3186->setLatitude(48.404658772259175);
$point3186->setLongitude(26.76145076751709);
$em->persist($point3186);


$waySet3186 = new WaySet();
$waySet3186->setPoint($point3186);
$waySet3186->setWay($way);
$em->persist($waySet3186);


$point3187 = new Point();
$point3187->setLatitude(48.40243294133499);
$point3187->setLongitude(26.758575439453125);
$em->persist($point3187);


$waySet3187 = new WaySet();
$waySet3187->setPoint($point3187);
$waySet3187->setWay($way);
$em->persist($waySet3187);


$point3188 = new Point();
$point3188->setLatitude(48.40135738492817);
$point3188->setLongitude(26.757051944732666);
$em->persist($point3188);


$waySet3188 = new WaySet();
$waySet3188->setPoint($point3188);
$waySet3188->setWay($way);
$em->persist($waySet3188);


$point3189 = new Point();
$point3189->setLatitude(48.39993989506033);
$point3189->setLongitude(26.755067110061646);
$em->persist($point3189);


$waySet3189 = new WaySet();
$waySet3189->setPoint($point3189);
$waySet3189->setWay($way);
$em->persist($waySet3189);


$point3190 = new Point();
$point3190->setLatitude(48.39933086090047);
$point3190->setLongitude(26.754316091537476);
$em->persist($point3190);


$waySet3190 = new WaySet();
$waySet3190->setPoint($point3190);
$waySet3190->setWay($way);
$em->persist($waySet3190);


$point3191 = new Point();
$point3191->setLatitude(48.40101191993231);
$point3191->setLongitude(26.75008356571197);
$em->persist($point3191);


$waySet3191 = new WaySet();
$waySet3191->setPoint($point3191);
$waySet3191->setWay($way);
$em->persist($waySet3191);


$point3192 = new Point();
$point3192->setLatitude(48.402525537843175);
$point3192->setLongitude(26.746264100074768);
$em->persist($point3192);


$waySet3192 = new WaySet();
$waySet3192->setPoint($point3192);
$waySet3192->setWay($way);
$em->persist($waySet3192);


$point3193 = new Point();
$point3193->setLatitude(48.404088968818634);
$point3193->setLongitude(26.742283701896667);
$em->persist($point3193);


$waySet3193 = new WaySet();
$waySet3193->setPoint($point3193);
$waySet3193->setWay($way);
$em->persist($waySet3193);


$point3194 = new Point();
$point3194->setLatitude(48.40526774262937);
$point3194->setLongitude(26.739301085472107);
$em->persist($point3194);


$waySet3194 = new WaySet();
$waySet3194->setPoint($point3194);
$waySet3194->setWay($way);
$em->persist($waySet3194);


$point3195 = new Point();
$point3195->setLatitude(48.407233491961065);
$point3195->setLongitude(26.735379695892334);
$em->persist($point3195);


$waySet3195 = new WaySet();
$waySet3195->setPoint($point3195);
$waySet3195->setWay($way);
$em->persist($waySet3195);


$point3196 = new Point();
$point3196->setLatitude(48.40896770410133);
$point3196->setLongitude(26.73190891742706);
$em->persist($point3196);


$waySet3196 = new WaySet();
$waySet3196->setPoint($point3196);
$waySet3196->setWay($way);
$em->persist($waySet3196);


$point3197 = new Point();
$point3197->setLatitude(48.410641322984446);
$point3197->setLongitude(26.7285293340683);
$em->persist($point3197);


$waySet3197 = new WaySet();
$waySet3197->setPoint($point3197);
$waySet3197->setWay($way);
$em->persist($waySet3197);


$point3198 = new Point();
$point3198->setLatitude(48.41189828137208);
$point3198->setLongitude(26.72602951526642);
$em->persist($point3198);


$waySet3198 = new WaySet();
$waySet3198->setPoint($point3198);
$waySet3198->setWay($way);
$em->persist($waySet3198);


$point3199 = new Point();
$point3199->setLatitude(48.41085497249422);
$point3199->setLongitude(26.721619963645935);
$em->persist($point3199);


$waySet3199 = new WaySet();
$waySet3199->setPoint($point3199);
$waySet3199->setWay($way);
$em->persist($waySet3199);


$point3200 = new Point();
$point3200->setLatitude(48.40945911280465);
$point3200->setLongitude(26.717183589935303);
$em->persist($point3200);


$waySet3200 = new WaySet();
$waySet3200->setPoint($point3200);
$waySet3200->setWay($way);
$em->persist($waySet3200);


$point3201 = new Point();
$point3201->setLatitude(48.407251297314296);
$point3201->setLongitude(26.713010072708126);
$em->persist($point3201);


$waySet3201 = new WaySet();
$waySet3201->setPoint($point3201);
$waySet3201->setWay($way);
$em->persist($waySet3201);


$point3202 = new Point();
$point3202->setLatitude(48.40562386227413);
$point3202->setLongitude(26.709920167922974);
$em->persist($point3202);


$waySet3202 = new WaySet();
$waySet3202->setPoint($point3202);
$waySet3202->setWay($way);
$em->persist($waySet3202);


$point3203 = new Point();
$point3203->setLatitude(48.403266303840304);
$point3203->setLongitude(26.712269783020016);
$em->persist($point3203);


$waySet3203 = new WaySet();
$waySet3203->setPoint($point3203);
$waySet3203->setWay($way);
$em->persist($waySet3203);


$point3204 = new Point();
$point3204->setLatitude(48.40224418639242);
$point3204->setLongitude(26.71328902244568);
$em->persist($point3204);


$waySet3204 = new WaySet();
$waySet3204->setPoint($point3204);
$waySet3204->setWay($way);
$em->persist($waySet3204);


$point3205 = new Point();
$point3205->setLatitude(48.401214925420334);
$point3205->setLongitude(26.71489834785461);
$em->persist($point3205);


$waySet3205 = new WaySet();
$waySet3205->setPoint($point3205);
$waySet3205->setWay($way);
$em->persist($waySet3205);


$point3206 = new Point();
$point3206->setLatitude(48.398023727881224);
$point3206->setLongitude(26.71872854232788);
$em->persist($point3206);


$waySet3206 = new WaySet();
$waySet3206->setPoint($point3206);
$waySet3206->setWay($way);
$em->persist($waySet3206);


$point3207 = new Point();
$point3207->setLatitude(48.3956337602347);
$point3207->setLongitude(26.721598505973816);
$em->persist($point3207);


$waySet3207 = new WaySet();
$waySet3207->setPoint($point3207);
$waySet3207->setWay($way);
$em->persist($waySet3207);


$point3208 = new Point();
$point3208->setLatitude(48.39403444943728);
$point3208->setLongitude(26.72353506088257);
$em->persist($point3208);


$waySet3208 = new WaySet();
$waySet3208->setPoint($point3208);
$waySet3208->setWay($way);
$em->persist($waySet3208);


$point3209 = new Point();
$point3209->setLatitude(48.39105653414382);
$point3209->setLongitude(26.727097034454346);
$em->persist($point3209);


$waySet3209 = new WaySet();
$waySet3209->setPoint($point3209);
$waySet3209->setWay($way);
$em->persist($waySet3209);


$point3210 = new Point();
$point3210->setLatitude(48.38849168272126);
$point3210->setLongitude(26.73019766807556);
$em->persist($point3210);


$waySet3210 = new WaySet();
$waySet3210->setPoint($point3210);
$waySet3210->setWay($way);
$em->persist($waySet3210);


$point3211 = new Point();
$point3211->setLatitude(48.385741448412944);
$point3211->setLongitude(26.73349678516388);
$em->persist($point3211);


$waySet3211 = new WaySet();
$waySet3211->setPoint($point3211);
$waySet3211->setWay($way);
$em->persist($waySet3211);


$point3212 = new Point();
$point3212->setLatitude(48.38311932498392);
$point3212->setLongitude(26.736645698547363);
$em->persist($point3212);


$waySet3212 = new WaySet();
$waySet3212->setPoint($point3212);
$waySet3212->setWay($way);
$em->persist($waySet3212);


$point3213 = new Point();
$point3213->setLatitude(48.37991274045982);
$point3213->setLongitude(26.74047589302063);
$em->persist($point3213);


$waySet3213 = new WaySet();
$waySet3213->setPoint($point3213);
$waySet3213->setWay($way);
$em->persist($waySet3213);


$point3214 = new Point();
$point3214->setLatitude(48.37739364850585);
$point3214->setLongitude(26.742916703224182);
$em->persist($point3214);


$waySet3214 = new WaySet();
$waySet3214->setPoint($point3214);
$waySet3214->setWay($way);
$em->persist($waySet3214);


$point3215 = new Point();
$point3215->setLatitude(48.37546594232784);
$point3215->setLongitude(26.744788885116577);
$em->persist($point3215);


$waySet3215 = new WaySet();
$waySet3215->setPoint($point3215);
$waySet3215->setWay($way);
$em->persist($waySet3215);


$point3216 = new Point();
$point3216->setLatitude(48.37223749457438);
$point3216->setLongitude(26.747927069664);
$em->persist($point3216);


$waySet3216 = new WaySet();
$waySet3216->setPoint($point3216);
$waySet3216->setWay($way);
$em->persist($waySet3216);


$point3217 = new Point();
$point3217->setLatitude(48.369151391795654);
$point3217->setLongitude(26.75092041492462);
$em->persist($point3217);


$waySet3217 = new WaySet();
$waySet3217->setPoint($point3217);
$waySet3217->setWay($way);
$em->persist($waySet3217);


$point3218 = new Point();
$point3218->setLatitude(48.365409330403686);
$point3218->setLongitude(26.754536032676697);
$em->persist($point3218);


$waySet3218 = new WaySet();
$waySet3218->setPoint($point3218);
$waySet3218->setWay($way);
$em->persist($waySet3218);


$point3219 = new Point();
$point3219->setLatitude(48.36307485760953);
$point3219->setLongitude(26.75873100757599);
$em->persist($point3219);


$waySet3219 = new WaySet();
$waySet3219->setPoint($point3219);
$waySet3219->setWay($way);
$em->persist($waySet3219);


$point3220 = new Point();
$point3220->setLatitude(48.36259725762499);
$point3220->setLongitude(26.759589314460754);
$em->persist($point3220);


$waySet3220 = new WaySet();
$waySet3220->setPoint($point3220);
$waySet3220->setWay($way);
$em->persist($waySet3220);


$point3221 = new Point();
$point3221->setLatitude(48.360975522766125);
$point3221->setLongitude(26.761493682861328);
$em->persist($point3221);


$waySet3221 = new WaySet();
$waySet3221->setPoint($point3221);
$waySet3221->setWay($way);
$em->persist($waySet3221);


$point3222 = new Point();
$point3222->setLatitude(48.35762139741186);
$point3222->setLongitude(26.762797236442566);
$em->persist($point3222);


$waySet3222 = new WaySet();
$waySet3222->setPoint($point3222);
$waySet3222->setWay($way);
$em->persist($waySet3222);


$point3223 = new Point();
$point3223->setLatitude(48.35394622013548);
$point3223->setLongitude(26.765833497047424);
$em->persist($point3223);


$waySet3223 = new WaySet();
$waySet3223->setPoint($point3223);
$waySet3223->setWay($way);
$em->persist($waySet3223);


$point3224 = new Point();
$point3224->setLatitude(48.35357191465561);
$point3224->setLongitude(26.770393252372738);
$em->persist($point3224);


$waySet3224 = new WaySet();
$waySet3224->setPoint($point3224);
$waySet3224->setWay($way);
$em->persist($waySet3224);


$point3225 = new Point();
$point3225->setLatitude(48.35221013247258);
$point3225->setLongitude(26.775854229927063);
$em->persist($point3225);


$waySet3225 = new WaySet();
$waySet3225->setPoint($point3225);
$waySet3225->setWay($way);
$em->persist($waySet3225);


$point3226 = new Point();
$point3226->setLatitude(48.35038485948148);
$point3226->setLongitude(26.7805802822113);
$em->persist($point3226);


$waySet3226 = new WaySet();
$waySet3226->setPoint($point3226);
$waySet3226->setWay($way);
$em->persist($waySet3226);


$point3227 = new Point();
$point3227->setLatitude(48.34825648008979);
$point3227->setLongitude(26.784989833831787);
$em->persist($point3227);


$waySet3227 = new WaySet();
$waySet3227->setPoint($point3227);
$waySet3227->setWay($way);
$em->persist($waySet3227);


$point3228 = new Point();
$point3228->setLatitude(48.34529371355394);
$point3228->setLongitude(26.791094541549683);
$em->persist($point3228);


$waySet3228 = new WaySet();
$waySet3228->setPoint($point3228);
$waySet3228->setWay($way);
$em->persist($waySet3228);


$point3229 = new Point();
$point3229->setLatitude(48.343592986363284);
$point3229->setLongitude(26.794608235359192);
$em->persist($point3229);


$waySet3229 = new WaySet();
$waySet3229->setPoint($point3229);
$waySet3229->setWay($way);
$em->persist($waySet3229);


$point3230 = new Point();
$point3230->setLatitude(48.34655941708214);
$point3230->setLongitude(26.799800992012024);
$em->persist($point3230);


$waySet3230 = new WaySet();
$waySet3230->setPoint($point3230);
$waySet3230->setWay($way);
$em->persist($waySet3230);


$point3231 = new Point();
$point3231->setLatitude(48.348805517787305);
$point3231->setLongitude(26.803743839263916);
$em->persist($point3231);


$waySet3231 = new WaySet();
$waySet3231->setPoint($point3231);
$waySet3231->setWay($way);
$em->persist($waySet3231);


$point3232 = new Point();
$point3232->setLatitude(48.35160052708512);
$point3232->setLongitude(26.80863082408905);
$em->persist($point3232);


$waySet3232 = new WaySet();
$waySet3232->setPoint($point3232);
$waySet3232->setWay($way);
$em->persist($waySet3232);


$point3233 = new Point();
$point3233->setLatitude(48.34905507842169);
$point3233->setLongitude(26.814295649528503);
$em->persist($point3233);


$waySet3233 = new WaySet();
$waySet3233->setPoint($point3233);
$waySet3233->setWay($way);
$em->persist($waySet3233);


$point3234 = new Point();
$point3234->setLatitude(48.347001514569364);
$point3234->setLongitude(26.818828582763672);
$em->persist($point3234);


$waySet3234 = new WaySet();
$waySet3234->setPoint($point3234);
$waySet3234->setWay($way);
$em->persist($waySet3234);


$point3235 = new Point();
$point3235->setLatitude(48.344609150942766);
$point3235->setLongitude(26.824150085449215);
$em->persist($point3235);


$waySet3235 = new WaySet();
$waySet3235->setPoint($point3235);
$waySet3235->setWay($way);
$em->persist($waySet3235);


$point3236 = new Point();
$point3236->setLatitude(48.34428112809987);
$point3236->setLongitude(26.82487964630127);
$em->persist($point3236);


$waySet3236 = new WaySet();
$waySet3236->setPoint($point3236);
$waySet3236->setWay($way);
$em->persist($waySet3236);


$point3237 = new Point();
$point3237->setLatitude(48.34163547538903);
$point3237->setLongitude(26.825630664825436);
$em->persist($point3237);


$waySet3237 = new WaySet();
$waySet3237->setPoint($point3237);
$waySet3237->setWay($way);
$em->persist($waySet3237);


$point3238 = new Point();
$point3238->setLatitude(48.339132319048844);
$point3238->setLongitude(26.826306581497192);
$em->persist($point3238);


$waySet3238 = new WaySet();
$waySet3238->setPoint($point3238);
$waySet3238->setWay($way);
$em->persist($waySet3238);


$point3239 = new Point();
$point3239->setLatitude(48.33722812635802);
$point3239->setLongitude(26.82684302330017);
$em->persist($point3239);


$waySet3239 = new WaySet();
$waySet3239->setPoint($point3239);
$waySet3239->setWay($way);
$em->persist($waySet3239);


$point3240 = new Point();
$point3240->setLatitude(48.334261152563194);
$point3240->setLongitude(26.826918125152588);
$em->persist($point3240);


$waySet3240 = new WaySet();
$waySet3240->setPoint($point3240);
$waySet3240->setWay($way);
$em->persist($waySet3240);


$point3241 = new Point();
$point3241->setLatitude(48.33112995210902);
$point3241->setLongitude(26.826998591423035);
$em->persist($point3241);


$waySet3241 = new WaySet();
$waySet3241->setPoint($point3241);
$waySet3241->setWay($way);
$em->persist($waySet3241);


$point3242 = new Point();
$point3242->setLatitude(48.32843011808687);
$point3242->setLongitude(26.82707369327545);
$em->persist($point3242);


$waySet3242 = new WaySet();
$waySet3242->setPoint($point3242);
$waySet3242->setWay($way);
$em->persist($waySet3242);


$point3243 = new Point();
$point3243->setLatitude(48.3262437540942);
$point3243->setLongitude(26.82713806629181);
$em->persist($point3243);


$waySet3243 = new WaySet();
$waySet3243->setPoint($point3243);
$waySet3243->setWay($way);
$em->persist($waySet3243);


$point3244 = new Point();
$point3244->setLatitude(48.32553396814272);
$point3244->setLongitude(26.823549270629883);
$em->persist($point3244);


$waySet3244 = new WaySet();
$waySet3244->setPoint($point3244);
$waySet3244->setWay($way);
$em->persist($waySet3244);


$point3245 = new Point();
$point3245->setLatitude(48.32220247898339);
$point3245->setLongitude(26.82385504245758);
$em->persist($point3245);


$waySet3245 = new WaySet();
$waySet3245->setPoint($point3245);
$waySet3245->setWay($way);
$em->persist($waySet3245);


$point3246 = new Point();
$point3246->setLatitude(48.31994450448254);
$point3246->setLongitude(26.82406961917877);
$em->persist($point3246);


$waySet3246 = new WaySet();
$waySet3246->setPoint($point3246);
$waySet3246->setWay($way);
$em->persist($waySet3246);


$point3247 = new Point();
$point3247->setLatitude(48.31756870777077);
$point3247->setLongitude(26.825813055038452);
$em->persist($point3247);


$waySet3247 = new WaySet();
$waySet3247->setPoint($point3247);
$waySet3247->setWay($way);
$em->persist($waySet3247);


$point3248 = new Point();
$point3248->setLatitude(48.31543182312874);
$point3248->setLongitude(26.828189492225647);
$em->persist($point3248);


$waySet3248 = new WaySet();
$waySet3248->setPoint($point3248);
$waySet3248->setWay($way);
$em->persist($waySet3248);


$point3249 = new Point();
$point3249->setLatitude(48.31451496872402);
$point3249->setLongitude(26.831279397010803);
$em->persist($point3249);


$waySet3249 = new WaySet();
$waySet3249->setPoint($point3249);
$waySet3249->setWay($way);
$em->persist($waySet3249);


$point3250 = new Point();
$point3250->setLatitude(48.31336263418035);
$point3250->setLongitude(26.831279397010803);
$em->persist($point3250);


$waySet3250 = new WaySet();
$waySet3250->setPoint($point3250);
$waySet3250->setWay($way);
$em->persist($waySet3250);


$point3251 = new Point();
$point3251->setLatitude(48.31268121048724);
$point3251->setLongitude(26.82784080505371);
$em->persist($point3251);


$waySet3251 = new WaySet();
$waySet3251->setPoint($point3251);
$waySet3251->setWay($way);
$em->persist($waySet3251);


$point3252 = new Point();
$point3252->setLatitude(48.31153953783154);
$point3252->setLongitude(26.823554635047913);
$em->persist($point3252);


$waySet3252 = new WaySet();
$waySet3252->setPoint($point3252);
$waySet3252->setWay($way);
$em->persist($waySet3252);


$point3253 = new Point();
$point3253->setLatitude(48.30916334971262);
$point3253->setLongitude(26.82461142539978);
$em->persist($point3253);


$waySet3253 = new WaySet();
$waySet3253->setPoint($point3253);
$waySet3253->setWay($way);
$em->persist($waySet3253);


$point3254 = new Point();
$point3254->setLatitude(48.30538833688194);
$point3254->setLongitude(26.826301217079163);
$em->persist($point3254);


$waySet3254 = new WaySet();
$waySet3254->setPoint($point3254);
$waySet3254->setWay($way);
$em->persist($waySet3254);


$point3255 = new Point();
$point3255->setLatitude(48.3036755735752);
$point3255->setLongitude(26.826311945915222);
$em->persist($point3255);


$waySet3255 = new WaySet();
$waySet3255->setPoint($point3255);
$waySet3255->setWay($way);
$em->persist($waySet3255);


$point3256 = new Point();
$point3256->setLatitude(48.3008172718245);
$point3256->setLongitude(26.82287871837616);
$em->persist($point3256);


$waySet3256 = new WaySet();
$waySet3256->setPoint($point3256);
$waySet3256->setWay($way);
$em->persist($waySet3256);


$point3257 = new Point();
$point3257->setLatitude(48.29649561532912);
$point3257->setLongitude(26.818699836730957);
$em->persist($point3257);


$waySet3257 = new WaySet();
$waySet3257->setPoint($point3257);
$waySet3257->setWay($way);
$em->persist($waySet3257);


$point3258 = new Point();
$point3258->setLatitude(48.295075205737476);
$point3258->setLongitude(26.81732654571533);
$em->persist($point3258);


$waySet3258 = new WaySet();
$waySet3258->setPoint($point3258);
$waySet3258->setWay($way);
$em->persist($waySet3258);


$point3259 = new Point();
$point3259->setLatitude(48.293836776184705);
$point3259->setLongitude(26.813501715660095);
$em->persist($point3259);


$waySet3259 = new WaySet();
$waySet3259->setPoint($point3259);
$waySet3259->setWay($way);
$em->persist($waySet3259);


$point3260 = new Point();
$point3260->setLatitude(48.292662560192994);
$point3260->setLongitude(26.80591106414795);
$em->persist($point3260);


$waySet3260 = new WaySet();
$waySet3260->setPoint($point3260);
$waySet3260->setWay($way);
$em->persist($waySet3260);


$point3261 = new Point();
$point3261->setLatitude(48.29254834929388);
$point3261->setLongitude(26.8036687374115);
$em->persist($point3261);


$waySet3261 = new WaySet();
$waySet3261->setPoint($point3261);
$waySet3261->setWay($way);
$em->persist($waySet3261);


$point3262 = new Point();
$point3262->setLatitude(48.291060015160525);
$point3262->setLongitude(26.794645786285397);
$em->persist($point3262);


$waySet3262 = new WaySet();
$waySet3262->setPoint($point3262);
$waySet3262->setWay($way);
$em->persist($waySet3262);


$point3263 = new Point();
$point3263->setLatitude(48.293383510597565);
$point3263->setLongitude(26.789876818656918);
$em->persist($point3263);


$waySet3263 = new WaySet();
$waySet3263->setPoint($point3263);
$waySet3263->setWay($way);
$em->persist($waySet3263);


$point3264 = new Point();
$point3264->setLatitude(48.29596742743279);
$point3264->setLongitude(26.784539222717285);
$em->persist($point3264);


$waySet3264 = new WaySet();
$waySet3264->setPoint($point3264);
$waySet3264->setWay($way);
$em->persist($waySet3264);


$point3265 = new Point();
$point3265->setLatitude(48.298661842308405);
$point3265->setLongitude(26.778997778892517);
$em->persist($point3265);


$waySet3265 = new WaySet();
$waySet3265->setPoint($point3265);
$waySet3265->setWay($way);
$em->persist($waySet3265);


$point3266 = new Point();
$point3266->setLatitude(48.301095615358584);
$point3266->setLongitude(26.770774126052856);
$em->persist($point3266);


$waySet3266 = new WaySet();
$waySet3266->setPoint($point3266);
$waySet3266->setWay($way);
$em->persist($waySet3266);


$point3267 = new Point();
$point3267->setLatitude(48.301973458101564);
$point3267->setLongitude(26.767888069152832);
$em->persist($point3267);


$waySet3267 = new WaySet();
$waySet3267->setPoint($point3267);
$waySet3267->setWay($way);
$em->persist($waySet3267);


$point3268 = new Point();
$point3268->setLatitude(48.30508860745225);
$point3268->setLongitude(26.766058802604675);
$em->persist($point3268);


$waySet3268 = new WaySet();
$waySet3268->setPoint($point3268);
$waySet3268->setWay($way);
$em->persist($waySet3268);


$point3269 = new Point();
$point3269->setLatitude(48.30958436408125);
$point3269->setLongitude(26.76341414451599);
$em->persist($point3269);


$waySet3269 = new WaySet();
$waySet3269->setPoint($point3269);
$waySet3269->setWay($way);
$em->persist($waySet3269);


$point3270 = new Point();
$point3270->setLatitude(48.31176787440617);
$point3270->setLongitude(26.762137413024902);
$em->persist($point3270);


$waySet3270 = new WaySet();
$waySet3270->setPoint($point3270);
$waySet3270->setWay($way);
$em->persist($waySet3270);


$point3271 = new Point();
$point3271->setLatitude(48.31520707046051);
$point3271->setLongitude(26.760994791984558);
$em->persist($point3271);


$waySet3271 = new WaySet();
$waySet3271->setPoint($point3271);
$waySet3271->setWay($way);
$em->persist($waySet3271);


$point3272 = new Point();
$point3272->setLatitude(48.3180324605643);
$point3272->setLongitude(26.760072112083435);
$em->persist($point3272);


$waySet3272 = new WaySet();
$waySet3272->setPoint($point3272);
$waySet3272->setWay($way);
$em->persist($waySet3272);


$point3273 = new Point();
$point3273->setLatitude(48.320832724386825);
$point3273->setLongitude(26.759154796600342);
$em->persist($point3273);


$waySet3273 = new WaySet();
$waySet3273->setPoint($point3273);
$waySet3273->setWay($way);
$em->persist($waySet3273);


$point3274 = new Point();
$point3274->setLatitude(48.32171022765926);
$point3274->setLongitude(26.75887584686279);
$em->persist($point3274);


$waySet3274 = new WaySet();
$waySet3274->setPoint($point3274);
$waySet3274->setWay($way);
$em->persist($waySet3274);


$point3275 = new Point();
$point3275->setLatitude(48.3227303954142);
$point3275->setLongitude(26.757829785346985);
$em->persist($point3275);


$waySet3275 = new WaySet();
$waySet3275->setPoint($point3275);
$waySet3275->setWay($way);
$em->persist($waySet3275);


$point3276 = new Point();
$point3276->setLatitude(48.31942012643541);
$point3276->setLongitude(26.751805543899533);
$em->persist($point3276);


$waySet3276 = new WaySet();
$waySet3276->setPoint($point3276);
$waySet3276->setWay($way);
$em->persist($waySet3276);


$point3277 = new Point();
$point3277->setLatitude(48.31801105668198);
$point3277->setLongitude(26.749257445335385);
$em->persist($point3277);


$waySet3277 = new WaySet();
$waySet3277->setPoint($point3277);
$waySet3277->setWay($way);
$em->persist($waySet3277);


$point3278 = new Point();
$point3278->setLatitude(48.315884892958266);
$point3278->setLongitude(26.745094656944275);
$em->persist($point3278);


$waySet3278 = new WaySet();
$waySet3278->setPoint($point3278);
$waySet3278->setWay($way);
$em->persist($waySet3278);


$point3279 = new Point();
$point3279->setLatitude(48.31337333709771);
$point3279->setLongitude(26.740159392356873);
$em->persist($point3279);


$waySet3279 = new WaySet();
$waySet3279->setPoint($point3279);
$waySet3279->setWay($way);
$em->persist($waySet3279);


$point3280 = new Point();
$point3280->setLatitude(48.317087113869434);
$point3280->setLongitude(26.7369943857193);
$em->persist($point3280);


$waySet3280 = new WaySet();
$waySet3280->setPoint($point3280);
$waySet3280->setWay($way);
$em->persist($waySet3280);


$point3281 = new Point();
$point3281->setLatitude(48.32004081823179);
$point3281->setLongitude(26.73448920249939);
$em->persist($point3281);


$waySet3281 = new WaySet();
$waySet3281->setPoint($point3281);
$waySet3281->setWay($way);
$em->persist($waySet3281);


$point3282 = new Point();
$point3282->setLatitude(48.3227232614448);
$point3282->setLongitude(26.73219859600067);
$em->persist($point3282);


$waySet3282 = new WaySet();
$waySet3282->setPoint($point3282);
$waySet3282->setWay($way);
$em->persist($waySet3282);


$point3283 = new Point();
$point3283->setLatitude(48.32574440822383);
$point3283->setLongitude(26.729629039764404);
$em->persist($point3283);


$waySet3283 = new WaySet();
$waySet3283->setPoint($point3283);
$waySet3283->setWay($way);
$em->persist($waySet3283);


$point3284 = new Point();
$point3284->setLatitude(48.32741006433159);
$point3284->setLongitude(26.72798216342926);
$em->persist($point3284);


$waySet3284 = new WaySet();
$waySet3284->setPoint($point3284);
$waySet3284->setWay($way);
$em->persist($waySet3284);


$point3285 = new Point();
$point3285->setLatitude(48.330619954783025);
$point3285->setLongitude(26.724806427955627);
$em->persist($point3285);


$waySet3285 = new WaySet();
$waySet3285->setPoint($point3285);
$waySet3285->setWay($way);
$em->persist($waySet3285);


$point3286 = new Point();
$point3286->setLatitude(48.33432177755375);
$point3286->setLongitude(26.72114789485931);
$em->persist($point3286);


$waySet3286 = new WaySet();
$waySet3286->setPoint($point3286);
$waySet3286->setWay($way);
$em->persist($waySet3286);


$point3287 = new Point();
$point3287->setLatitude(48.337509837250096);
$point3287->setLongitude(26.71800434589386);
$em->persist($point3287);


$waySet3287 = new WaySet();
$waySet3287->setPoint($point3287);
$waySet3287->setWay($way);
$em->persist($waySet3287);


$point3288 = new Point();
$point3288->setLatitude(48.339995244376546);
$point3288->setLongitude(26.71553671360016);
$em->persist($point3288);


$waySet3288 = new WaySet();
$waySet3288->setPoint($point3288);
$waySet3288->setWay($way);
$em->persist($waySet3288);


$point3289 = new Point();
$point3289->setLatitude(48.34299754016107);
$point3289->setLongitude(26.712570190429688);
$em->persist($point3289);


$waySet3289 = new WaySet();
$waySet3289->setPoint($point3289);
$waySet3289->setWay($way);
$em->persist($waySet3289);


$point3290 = new Point();
$point3290->setLatitude(48.34609948901328);
$point3290->setLongitude(26.70950174331665);
$em->persist($point3290);


$waySet3290 = new WaySet();
$waySet3290->setPoint($point3290);
$waySet3290->setWay($way);
$em->persist($waySet3290);


$point3291 = new Point();
$point3291->setLatitude(48.34786430668434);
$point3291->setLongitude(26.706819534301758);
$em->persist($point3291);


$waySet3291 = new WaySet();
$waySet3291->setPoint($point3291);
$waySet3291->setWay($way);
$em->persist($waySet3291);


$point3292 = new Point();
$point3292->setLatitude(48.349857229326275);
$point3292->setLongitude(26.704105138778687);
$em->persist($point3292);


$waySet3292 = new WaySet();
$waySet3292->setPoint($point3292);
$waySet3292->setWay($way);
$em->persist($waySet3292);


$point3293 = new Point();
$point3293->setLatitude(48.352049710709274);
$point3293->setLongitude(26.70204520225525);
$em->persist($point3293);


$waySet3293 = new WaySet();
$waySet3293->setPoint($point3293);
$waySet3293->setWay($way);
$em->persist($waySet3293);


$point3294 = new Point();
$point3294->setLatitude(48.35397473853549);
$point3294->setLongitude(26.700221300125122);
$em->persist($point3294);


$waySet3294 = new WaySet();
$waySet3294->setPoint($point3294);
$waySet3294->setWay($way);
$em->persist($waySet3294);


$point3295 = new Point();
$point3295->setLatitude(48.35621338312942);
$point3295->setLongitude(26.698284745216366);
$em->persist($point3295);


$waySet3295 = new WaySet();
$waySet3295->setPoint($point3295);
$waySet3295->setWay($way);
$em->persist($waySet3295);


$point3296 = new Point();
$point3296->setLatitude(48.35699759841686);
$point3296->setLongitude(26.697598099708557);
$em->persist($point3296);


$waySet3296 = new WaySet();
$waySet3296->setPoint($point3296);
$waySet3296->setWay($way);
$em->persist($waySet3296);


$point3297 = new Point();
$point3297->setLatitude(48.35993473385443);
$point3297->setLongitude(26.695350408554077);
$em->persist($point3297);


$waySet3297 = new WaySet();
$waySet3297->setPoint($point3297);
$waySet3297->setWay($way);
$em->persist($waySet3297);


$point3298 = new Point();
$point3298->setLatitude(48.359717306088385);
$point3298->setLongitude(26.69449210166931);
$em->persist($point3298);


$waySet3298 = new WaySet();
$waySet3298->setPoint($point3298);
$waySet3298->setWay($way);
$em->persist($waySet3298);


$point3299 = new Point();
$point3299->setLatitude(48.361880849251556);
$point3299->setLongitude(26.692893505096436);
$em->persist($point3299);


$waySet3299 = new WaySet();
$waySet3299->setPoint($point3299);
$waySet3299->setWay($way);
$em->persist($waySet3299);


$point3300 = new Point();
$point3300->setLatitude(48.362543794661455);
$point3300->setLongitude(26.692416071891785);
$em->persist($point3300);


$waySet3300 = new WaySet();
$waySet3300->setPoint($point3300);
$waySet3300->setWay($way);
$em->persist($waySet3300);


$point3301 = new Point();
$point3301->setLatitude(48.363352861508645);
$point3301->setLongitude(26.691434383392334);
$em->persist($point3301);


$waySet3301 = new WaySet();
$waySet3301->setPoint($point3301);
$waySet3301->setWay($way);
$em->persist($waySet3301);


$point3302 = new Point();
$point3302->setLatitude(48.36075453511789);
$point3302->setLongitude(26.68479859828949);
$em->persist($point3302);


$waySet3302 = new WaySet();
$waySet3302->setPoint($point3302);
$waySet3302->setWay($way);
$em->persist($waySet3302);


$point3303 = new Point();
$point3303->setLatitude(48.358908181495075);
$point3303->setLongitude(26.68007791042328);
$em->persist($point3303);


$waySet3303 = new WaySet();
$waySet3303->setPoint($point3303);
$waySet3303->setWay($way);
$em->persist($waySet3303);


$point3304 = new Point();
$point3304->setLatitude(48.35525448530627);
$point3304->setLongitude(26.682872772216797);
$em->persist($point3304);


$waySet3304 = new WaySet();
$waySet3304->setPoint($point3304);
$waySet3304->setWay($way);
$em->persist($waySet3304);


$point3305 = new Point();
$point3305->setLatitude(48.352548798980976);
$point3305->setLongitude(26.684927344322205);
$em->persist($point3305);


$waySet3305 = new WaySet();
$waySet3305->setPoint($point3305);
$waySet3305->setWay($way);
$em->persist($waySet3305);


$point3306 = new Point();
$point3306->setLatitude(48.349789492626876);
$point3306->setLongitude(26.687024831771847);
$em->persist($point3306);


$waySet3306 = new WaySet();
$waySet3306->setPoint($point3306);
$waySet3306->setWay($way);
$em->persist($waySet3306);


$point3307 = new Point();
$point3307->setLatitude(48.34733308516806);
$point3307->setLongitude(26.688886284828186);
$em->persist($point3307);


$waySet3307 = new WaySet();
$waySet3307->setPoint($point3307);
$waySet3307->setWay($way);
$em->persist($waySet3307);


$point3308 = new Point();
$point3308->setLatitude(48.34490151734949);
$point3308->setLongitude(26.69074773788452);
$em->persist($point3308);


$waySet3308 = new WaySet();
$waySet3308->setPoint($point3308);
$waySet3308->setWay($way);
$em->persist($waySet3308);


$point3309 = new Point();
$point3309->setLatitude(48.341660435018504);
$point3309->setLongitude(26.69182598590851);
$em->persist($point3309);


$waySet3309 = new WaySet();
$waySet3309->setPoint($point3309);
$waySet3309->setWay($way);
$em->persist($waySet3309);


$point3310 = new Point();
$point3310->setLatitude(48.33855465013016);
$point3310->setLongitude(26.692872047424316);
$em->persist($point3310);


$waySet3310 = new WaySet();
$waySet3310->setPoint($point3310);
$waySet3310->setWay($way);
$em->persist($waySet3310);


$point3311 = new Point();
$point3311->setLatitude(48.33746704582246);
$point3311->setLongitude(26.693226099014282);
$em->persist($point3311);


$waySet3311 = new WaySet();
$waySet3311->setPoint($point3311);
$waySet3311->setWay($way);
$em->persist($waySet3311);


$point3312 = new Point();
$point3312->setLatitude(48.3343895348108);
$point3312->setLongitude(26.69403612613678);
$em->persist($point3312);


$waySet3312 = new WaySet();
$waySet3312->setPoint($point3312);
$waySet3312->setWay($way);
$em->persist($waySet3312);


$point3313 = new Point();
$point3313->setLatitude(48.33134393548203);
$point3313->setLongitude(26.69481933116913);
$em->persist($point3313);


$waySet3313 = new WaySet();
$waySet3313->setPoint($point3313);
$waySet3313->setWay($way);
$em->persist($waySet3313);


$point3314 = new Point();
$point3314->setLatitude(48.32789512740281);
$point3314->setLongitude(26.695715188980103);
$em->persist($point3314);


$waySet3314 = new WaySet();
$waySet3314->setPoint($point3314);
$waySet3314->setWay($way);
$em->persist($waySet3314);


$point3315 = new Point();
$point3315->setLatitude(48.32723886449908);
$point3315->setLongitude(26.695886850357056);
$em->persist($point3315);


$waySet3315 = new WaySet();
$waySet3315->setPoint($point3315);
$waySet3315->setWay($way);
$em->persist($waySet3315);


$point3316 = new Point();
$point3316->setLatitude(48.32675379518598);
$point3316->setLongitude(26.691643595695496);
$em->persist($point3316);


$waySet3316 = new WaySet();
$waySet3316->setPoint($point3316);
$waySet3316->setWay($way);
$em->persist($waySet3316);


$point3317 = new Point();
$point3317->setLatitude(48.325937013638715);
$point3317->setLongitude(26.684938073158264);
$em->persist($point3317);


$waySet3317 = new WaySet();
$waySet3317->setPoint($point3317);
$waySet3317->setWay($way);
$em->persist($waySet3317);


$point3318 = new Point();
$point3318->setLatitude(48.325045315791876);
$point3318->setLongitude(26.677642464637756);
$em->persist($point3318);


$waySet3318 = new WaySet();
$waySet3318->setPoint($point3318);
$waySet3318->setWay($way);
$em->persist($waySet3318);


$point3319 = new Point();
$point3319->setLatitude(48.324831305988866);
$point3319->setLongitude(26.675888299942017);
$em->persist($point3319);


$waySet3319 = new WaySet();
$waySet3319->setPoint($point3319);
$waySet3319->setWay($way);
$em->persist($waySet3319);


$point3320 = new Point();
$point3320->setLatitude(48.32126077664938);
$point3320->setLongitude(26.675866842269897);
$em->persist($point3320);


$waySet3320 = new WaySet();
$waySet3320->setPoint($point3320);
$waySet3320->setWay($way);
$em->persist($waySet3320);


$point3321 = new Point();
$point3321->setLatitude(48.31826433538018);
$point3321->setLongitude(26.675845384597775);
$em->persist($point3321);


$waySet3321 = new WaySet();
$waySet3321->setPoint($point3321);
$waySet3321->setWay($way);
$em->persist($waySet3321);


$point3322 = new Point();
$point3322->setLatitude(48.31705500744769);
$point3322->setLongitude(26.67583465576172);
$em->persist($point3322);


$waySet3322 = new WaySet();
$waySet3322->setPoint($point3322);
$waySet3322->setWay($way);
$em->persist($waySet3322);


$point3323 = new Point();
$point3323->setLatitude(48.31466480597868);
$point3323->setLongitude(26.670379042625427);
$em->persist($point3323);


$waySet3323 = new WaySet();
$waySet3323->setPoint($point3323);
$waySet3323->setWay($way);
$em->persist($waySet3323);


$point3324 = new Point();
$point3324->setLatitude(48.31273829344951);
$point3324->setLongitude(26.66602313518524);
$em->persist($point3324);


$waySet3324 = new WaySet();
$waySet3324->setPoint($point3324);
$waySet3324->setWay($way);
$em->persist($waySet3324);


$point3325 = new Point();
$point3325->setLatitude(48.31053698546701);
$point3325->setLongitude(26.660873293876648);
$em->persist($point3325);


$waySet3325 = new WaySet();
$waySet3325->setPoint($point3325);
$waySet3325->setWay($way);
$em->persist($waySet3325);


$point3326 = new Point();
$point3326->setLatitude(48.30905987954794);
$point3326->setLongitude(26.657434701919552);
$em->persist($point3326);


$waySet3326 = new WaySet();
$waySet3326->setPoint($point3326);
$waySet3326->setWay($way);
$em->persist($waySet3326);


$point3327 = new Point();
$point3327->setLatitude(48.308032302387524);
$point3327->setLongitude(26.655224561691284);
$em->persist($point3327);


$waySet3327 = new WaySet();
$waySet3327->setPoint($point3327);
$waySet3327->setWay($way);
$em->persist($waySet3327);


$point3328 = new Point();
$point3328->setLatitude(48.30547040534742);
$point3328->setLongitude(26.649661660194397);
$em->persist($point3328);


$waySet3328 = new WaySet();
$waySet3328->setPoint($point3328);
$waySet3328->setWay($way);
$em->persist($waySet3328);


$point3329 = new Point();
$point3329->setLatitude(48.304835263347364);
$point3329->setLongitude(26.648299098014828);
$em->persist($point3329);


$waySet3329 = new WaySet();
$waySet3329->setPoint($point3329);
$waySet3329->setWay($way);
$em->persist($waySet3329);


$point3330 = new Point();
$point3330->setLatitude(48.30163802403882);
$point3330->setLongitude(26.64979040622711);
$em->persist($point3330);


$waySet3330 = new WaySet();
$waySet3330->setPoint($point3330);
$waySet3330->setWay($way);
$em->persist($waySet3330);


$point3331 = new Point();
$point3331->setLatitude(48.300792292202345);
$point3331->setLongitude(26.650192737579342);
$em->persist($point3331);


$waySet3331 = new WaySet();
$waySet3331->setPoint($point3331);
$waySet3331->setWay($way);
$em->persist($waySet3331);


$point3332 = new Point();
$point3332->setLatitude(48.30062457156565);
$point3332->setLongitude(26.650160551071167);
$em->persist($point3332);


$waySet3332 = new WaySet();
$waySet3332->setPoint($point3332);
$waySet3332->setWay($way);
$em->persist($waySet3332);


$point3333 = new Point();
$point3333->setLatitude(48.29898658999542);
$point3333->setLongitude(26.649007201194763);
$em->persist($point3333);


$waySet3333 = new WaySet();
$waySet3333->setPoint($point3333);
$waySet3333->setWay($way);
$em->persist($waySet3333);


$point3334 = new Point();
$point3334->setLatitude(48.298529801449334);
$point3334->setLongitude(26.648916006088257);
$em->persist($point3334);


$waySet3334 = new WaySet();
$waySet3334->setPoint($point3334);
$waySet3334->setWay($way);
$em->persist($waySet3334);


$point3335 = new Point();
$point3335->setLatitude(48.29807657752433);
$point3335->setLongitude(26.649736762046814);
$em->persist($point3335);


$waySet3335 = new WaySet();
$waySet3335->setPoint($point3335);
$waySet3335->setWay($way);
$em->persist($waySet3335);


$point3336 = new Point();
$point3336->setLatitude(48.295171566431584);
$point3336->setLongitude(26.64683997631073);
$em->persist($point3336);


$waySet3336 = new WaySet();
$waySet3336->setPoint($point3336);
$waySet3336->setWay($way);
$em->persist($waySet3336);


$point3337 = new Point();
$point3337->setLatitude(48.2913919495531);
$point3337->setLongitude(26.64305806159973);
$em->persist($point3337);


$waySet3337 = new WaySet();
$waySet3337->setPoint($point3337);
$waySet3337->setWay($way);
$em->persist($waySet3337);


$point3338 = new Point();
$point3338->setLatitude(48.28976437962608);
$point3338->setLongitude(26.641421914100647);
$em->persist($point3338);


$waySet3338 = new WaySet();
$waySet3338->setPoint($point3338);
$waySet3338->setWay($way);
$em->persist($waySet3338);


$point3339 = new Point();
$point3339->setLatitude(48.28684818710906);
$point3339->setLongitude(26.636706590652462);
$em->persist($point3339);


$waySet3339 = new WaySet();
$waySet3339->setPoint($point3339);
$waySet3339->setWay($way);
$em->persist($waySet3339);


$point3340 = new Point();
$point3340->setLatitude(48.283210744222664);
$point3340->setLongitude(26.63083255290985);
$em->persist($point3340);


$waySet3340 = new WaySet();
$waySet3340->setPoint($point3340);
$waySet3340->setWay($way);
$em->persist($waySet3340);


$point3341 = new Point();
$point3341->setLatitude(48.27925174114737);
$point3341->setLongitude(26.624432802200317);
$em->persist($point3341);


$waySet3341 = new WaySet();
$waySet3341->setPoint($point3341);
$waySet3341->setWay($way);
$em->persist($waySet3341);


$point3342 = new Point();
$point3342->setLatitude(48.27684905857155);
$point3342->setLongitude(26.62051141262054);
$em->persist($point3342);


$waySet3342 = new WaySet();
$waySet3342->setPoint($point3342);
$waySet3342->setWay($way);
$em->persist($waySet3342);


$point3343 = new Point();
$point3343->setLatitude(48.27422132984054);
$point3343->setLongitude(26.616273522377014);
$em->persist($point3343);


$waySet3343 = new WaySet();
$waySet3343->setPoint($point3343);
$waySet3343->setWay($way);
$em->persist($waySet3343);


$point3344 = new Point();
$point3344->setLatitude(48.27332515775283);
$point3344->setLongitude(26.617174744606018);
$em->persist($point3344);


$waySet3344 = new WaySet();
$waySet3344->setPoint($point3344);
$waySet3344->setWay($way);
$em->persist($waySet3344);


$point3345 = new Point();
$point3345->setLatitude(48.269708176014);
$point3345->setLongitude(26.620683073997494);
$em->persist($point3345);


$waySet3345 = new WaySet();
$waySet3345->setPoint($point3345);
$waySet3345->setWay($way);
$em->persist($waySet3345);


$point3346 = new Point();
$point3346->setLatitude(48.266576584263134);
$point3346->setLongitude(26.623703241348267);
$em->persist($point3346);


$waySet3346 = new WaySet();
$waySet3346->setPoint($point3346);
$waySet3346->setWay($way);
$em->persist($waySet3346);


$point3347 = new Point();
$point3347->setLatitude(48.26385904983186);
$point3347->setLongitude(26.626299619674683);
$em->persist($point3347);


$waySet3347 = new WaySet();
$waySet3347->setPoint($point3347);
$waySet3347->setWay($way);
$em->persist($waySet3347);


$point3348 = new Point();
$point3348->setLatitude(48.25964855018131);
$point3348->setLongitude(26.630194187164307);
$em->persist($point3348);


$waySet3348 = new WaySet();
$waySet3348->setPoint($point3348);
$waySet3348->setWay($way);
$em->persist($waySet3348);


$point3349 = new Point();
$point3349->setLatitude(48.25796282460759);
$point3349->setLongitude(26.62959337234497);
$em->persist($point3349);


$waySet3349 = new WaySet();
$waySet3349->setPoint($point3349);
$waySet3349->setWay($way);
$em->persist($waySet3349);


$point3350 = new Point();
$point3350->setLatitude(48.25631990297998);
$point3350->setLongitude(26.629679203033447);
$em->persist($point3350);


$waySet3350 = new WaySet();
$waySet3350->setPoint($point3350);
$waySet3350->setWay($way);
$em->persist($waySet3350);


$point3351 = new Point();
$point3351->setLatitude(48.25484122837501);
$point3351->setLongitude(26.630221009254452);
$em->persist($point3351);


$waySet3351 = new WaySet();
$waySet3351->setPoint($point3351);
$waySet3351->setWay($way);
$em->persist($waySet3351);


$point3352 = new Point();
$point3352->setLatitude(48.253176775365944);
$point3352->setLongitude(26.63034975528717);
$em->persist($point3352);


$waySet3352 = new WaySet();
$waySet3352->setPoint($point3352);
$waySet3352->setWay($way);
$em->persist($waySet3352);


$point3353 = new Point();
$point3353->setLatitude(48.25121936645324);
$point3353->setLongitude(26.630199551582336);
$em->persist($point3353);


$waySet3353 = new WaySet();
$waySet3353->setPoint($point3353);
$waySet3353->setWay($way);
$em->persist($waySet3353);


$point3354 = new Point();
$point3354->setLatitude(48.2490868484724);
$point3354->setLongitude(26.629647016525265);
$em->persist($point3354);


$waySet3354 = new WaySet();
$waySet3354->setPoint($point3354);
$waySet3354->setWay($way);
$em->persist($waySet3354);


$point3355 = new Point();
$point3355->setLatitude(48.24795447028229);
$point3355->setLongitude(26.629271507263184);
$em->persist($point3355);


$waySet3355 = new WaySet();
$waySet3355->setPoint($point3355);
$waySet3355->setWay($way);
$em->persist($waySet3355);


$point3356 = new Point();
$point3356->setLatitude(48.246543427671604);
$point3356->setLongitude(26.628075242042538);
$em->persist($point3356);


$waySet3356 = new WaySet();
$waySet3356->setPoint($point3356);
$waySet3356->setWay($way);
$em->persist($waySet3356);


$point3357 = new Point();
$point3357->setLatitude(48.24609688709063);
$point3357->setLongitude(26.62664830684662);
$em->persist($point3357);


$waySet3357 = new WaySet();
$waySet3357->setPoint($point3357);
$waySet3357->setWay($way);
$em->persist($waySet3357);


$point3358 = new Point();
$point3358->setLatitude(48.246114748788735);
$point3358->setLongitude(26.625301837921143);
$em->persist($point3358);


$waySet3358 = new WaySet();
$waySet3358->setPoint($point3358);
$waySet3358->setWay($way);
$em->persist($waySet3358);


$point3359 = new Point();
$point3359->setLatitude(48.24735076314548);
$point3359->setLongitude(26.623445749282837);
$em->persist($point3359);


$waySet3359 = new WaySet();
$waySet3359->setPoint($point3359);
$waySet3359->setWay($way);
$em->persist($waySet3359);


$point3360 = new Point();
$point3360->setLatitude(48.248840370811905);
$point3360->setLongitude(26.62135899066925);
$em->persist($point3360);


$waySet3360 = new WaySet();
$waySet3360->setPoint($point3360);
$waySet3360->setWay($way);
$em->persist($waySet3360);


$point3361 = new Point();
$point3361->setLatitude(48.250637130000875);
$point3361->setLongitude(26.619207859039303);
$em->persist($point3361);


$waySet3361 = new WaySet();
$waySet3361->setPoint($point3361);
$waySet3361->setWay($way);
$em->persist($waySet3361);


$point3362 = new Point();
$point3362->setLatitude(48.251097918906076);
$point3362->setLongitude(26.617957949638367);
$em->persist($point3362);


$waySet3362 = new WaySet();
$waySet3362->setPoint($point3362);
$waySet3362->setWay($way);
$em->persist($waySet3362);


$point3363 = new Point();
$point3363->setLatitude(48.251105062887426);
$point3363->setLongitude(26.61610722541809);
$em->persist($point3363);


$waySet3363 = new WaySet();
$waySet3363->setPoint($point3363);
$waySet3363->setWay($way);
$em->persist($waySet3363);


$point3364 = new Point();
$point3364->setLatitude(48.25060140975731);
$point3364->setLongitude(26.614492535591125);
$em->persist($point3364);


$waySet3364 = new WaySet();
$waySet3364->setPoint($point3364);
$waySet3364->setWay($way);
$em->persist($waySet3364);


$point3365 = new Point();
$point3365->setLatitude(48.24948335352053);
$point3365->setLongitude(26.61365032196045);
$em->persist($point3365);


$waySet3365 = new WaySet();
$waySet3365->setPoint($point3365);
$waySet3365->setWay($way);
$em->persist($waySet3365);


$point3366 = new Point();
$point3366->setLatitude(48.24828311259184);
$point3366->setLongitude(26.614229679107666);
$em->persist($point3366);


$waySet3366 = new WaySet();
$waySet3366->setPoint($point3366);
$waySet3366->setWay($way);
$em->persist($waySet3366);


$point3367 = new Point();
$point3367->setLatitude(48.24743649713753);
$point3367->setLongitude(26.6156405210495);
$em->persist($point3367);


$waySet3367 = new WaySet();
$waySet3367->setPoint($point3367);
$waySet3367->setWay($way);
$em->persist($waySet3367);


$point3368 = new Point();
$point3368->setLatitude(48.2457396518188);
$point3368->setLongitude(26.616788506507874);
$em->persist($point3368);


$waySet3368 = new WaySet();
$waySet3368->setPoint($point3368);
$waySet3368->setWay($way);
$em->persist($waySet3368);


$point3369 = new Point();
$point3369->setLatitude(48.24230649364978);
$point3369->setLongitude(26.61860704421997);
$em->persist($point3369);


$waySet3369 = new WaySet();
$waySet3369->setPoint($point3369);
$waySet3369->setWay($way);
$em->persist($waySet3369);


$point3370 = new Point();
$point3370->setLatitude(48.241166819965045);
$point3370->setLongitude(26.61935269832611);
$em->persist($point3370);


$waySet3370 = new WaySet();
$waySet3370->setPoint($point3370);
$waySet3370->setWay($way);
$em->persist($waySet3370);


$point3371 = new Point();
$point3371->setLatitude(48.240109294398884);
$point3371->setLongitude(26.619679927825928);
$em->persist($point3371);


$waySet3371 = new WaySet();
$waySet3371->setPoint($point3371);
$waySet3371->setWay($way);
$em->persist($waySet3371);


$point3372 = new Point();
$point3372->setLatitude(48.23899100878549);
$point3372->setLongitude(26.61963701248169);
$em->persist($point3372);


$waySet3372 = new WaySet();
$waySet3372->setPoint($point3372);
$waySet3372->setWay($way);
$em->persist($waySet3372);


$point3373 = new Point();
$point3373->setLatitude(48.238587276663715);
$point3373->setLongitude(26.618574857711792);
$em->persist($point3373);


$waySet3373 = new WaySet();
$waySet3373->setPoint($point3373);
$waySet3373->setWay($way);
$em->persist($waySet3373);


$point3374 = new Point();
$point3374->setLatitude(48.23890883347912);
$point3374->setLongitude(26.61687433719635);
$em->persist($point3374);


$waySet3374 = new WaySet();
$waySet3374->setPoint($point3374);
$waySet3374->setWay($way);
$em->persist($waySet3374);


$point3375 = new Point();
$point3375->setLatitude(48.23983776403706);
$point3375->setLongitude(26.614487171173096);
$em->persist($point3375);


$waySet3375 = new WaySet();
$waySet3375->setPoint($point3375);
$waySet3375->setWay($way);
$em->persist($waySet3375);


$point3376 = new Point();
$point3376->setLatitude(48.24022719529141);
$point3376->setLongitude(26.612218022346493);
$em->persist($point3376);


$waySet3376 = new WaySet();
$waySet3376->setPoint($point3376);
$waySet3376->setWay($way);
$em->persist($waySet3376);


$point3377 = new Point();
$point3377->setLatitude(48.24003426641668);
$point3377->setLongitude(26.609203219413757);
$em->persist($point3377);


$waySet3377 = new WaySet();
$waySet3377->setPoint($point3377);
$waySet3377->setWay($way);
$em->persist($waySet3377);


$point3378 = new Point();
$point3378->setLatitude(48.23954122265337);
$point3378->setLongitude(26.606027483940125);
$em->persist($point3378);


$waySet3378 = new WaySet();
$waySet3378->setPoint($point3378);
$waySet3378->setWay($way);
$em->persist($waySet3378);


$point3379 = new Point();
$point3379->setLatitude(48.23908747528105);
$point3379->setLongitude(26.603967547416687);
$em->persist($point3379);


$waySet3379 = new WaySet();
$waySet3379->setPoint($point3379);
$waySet3379->setWay($way);
$em->persist($waySet3379);


$point3380 = new Point();
$point3380->setLatitude(48.23820855160015);
$point3380->setLongitude(26.6014301776886);
$em->persist($point3380);


$waySet3380 = new WaySet();
$waySet3380->setPoint($point3380);
$waySet3380->setWay($way);
$em->persist($waySet3380);


$point3381 = new Point();
$point3381->setLatitude(48.23762259409055);
$point3381->setLongitude(26.599386334419247);
$em->persist($point3381);


$waySet3381 = new WaySet();
$waySet3381->setPoint($point3381);
$waySet3381->setWay($way);
$em->persist($waySet3381);


$point3382 = new Point();
$point3382->setLatitude(48.23769762560977);
$point3382->setLongitude(26.597519516944885);
$em->persist($point3382);


$waySet3382 = new WaySet();
$waySet3382->setPoint($point3382);
$waySet3382->setWay($way);
$em->persist($waySet3382);


$point3383 = new Point();
$point3383->setLatitude(48.238733763908044);
$point3383->setLongitude(26.595743894577026);
$em->persist($point3383);


$waySet3383 = new WaySet();
$waySet3383->setPoint($point3383);
$waySet3383->setWay($way);
$em->persist($waySet3383);


$point3384 = new Point();
$point3384->setLatitude(48.240005684299284);
$point3384->setLongitude(26.59391462802887);
$em->persist($point3384);


$waySet3384 = new WaySet();
$waySet3384->setPoint($point3384);
$waySet3384->setWay($way);
$em->persist($waySet3384);


$point3385 = new Point();
$point3385->setLatitude(48.24168485660581);
$point3385->setLongitude(26.591849327087402);
$em->persist($point3385);


$waySet3385 = new WaySet();
$waySet3385->setPoint($point3385);
$waySet3385->setWay($way);
$em->persist($waySet3385);


$point3386 = new Point();
$point3386->setLatitude(48.24416778698008);
$point3386->setLongitude(26.590309739112854);
$em->persist($point3386);


$waySet3386 = new WaySet();
$waySet3386->setPoint($point3386);
$waySet3386->setWay($way);
$em->persist($waySet3386);


$point3387 = new Point();
$point3387->setLatitude(48.24565748735332);
$point3387->setLongitude(26.58912420272827);
$em->persist($point3387);


$waySet3387 = new WaySet();
$waySet3387->setPoint($point3387);
$waySet3387->setWay($way);
$em->persist($waySet3387);


$point3388 = new Point();
$point3388->setLatitude(48.24633266100321);
$point3388->setLongitude(26.587981581687927);
$em->persist($point3388);


$waySet3388 = new WaySet();
$waySet3388->setPoint($point3388);
$waySet3388->setWay($way);
$em->persist($waySet3388);


$point3389 = new Point();
$point3389->setLatitude(48.24635052261895);
$point3389->setLongitude(26.58620059490204);
$em->persist($point3389);


$waySet3389 = new WaySet();
$waySet3389->setPoint($point3389);
$waySet3389->setWay($way);
$em->persist($waySet3389);


$point3390 = new Point();
$point3390->setLatitude(48.24535026253037);
$point3390->setLongitude(26.58490777015686);
$em->persist($point3390);


$waySet3390 = new WaySet();
$waySet3390->setPoint($point3390);
$waySet3390->setWay($way);
$em->persist($waySet3390);


$point3391 = new Point();
$point3391->setLatitude(48.244021315296116);
$point3391->setLongitude(26.58360421657562);
$em->persist($point3391);


$waySet3391 = new WaySet();
$waySet3391->setPoint($point3391);
$waySet3391->setWay($way);
$em->persist($waySet3391);


$point3392 = new Point();
$point3392->setLatitude(48.243067452850546);
$point3392->setLongitude(26.582450866699215);
$em->persist($point3392);


$waySet3392 = new WaySet();
$waySet3392->setPoint($point3392);
$waySet3392->setWay($way);
$em->persist($waySet3392);


$point3393 = new Point();
$point3393->setLatitude(48.2429066877654);
$point3393->setLongitude(26.58117949962616);
$em->persist($point3393);


$waySet3393 = new WaySet();
$waySet3393->setPoint($point3393);
$waySet3393->setWay($way);
$em->persist($waySet3393);


$point3394 = new Point();
$point3394->setLatitude(48.243042444981576);
$point3394->setLongitude(26.57988131046295);
$em->persist($point3394);


$waySet3394 = new WaySet();
$waySet3394->setPoint($point3394);
$waySet3394->setWay($way);
$em->persist($waySet3394);


$point3395 = new Point();
$point3395->setLatitude(48.24307102540226);
$point3395->setLongitude(26.578470468521118);
$em->persist($point3395);


$waySet3395 = new WaySet();
$waySet3395->setPoint($point3395);
$waySet3395->setWay($way);
$em->persist($waySet3395);


$point3396 = new Point();
$point3396->setLatitude(48.242899542638774);
$point3396->setLongitude(26.577274203300473);
$em->persist($point3396);


$waySet3396 = new WaySet();
$waySet3396->setPoint($point3396);
$waySet3396->setWay($way);
$em->persist($waySet3396);


$point3397 = new Point();
$point3397->setLatitude(48.24214215355664);
$point3397->setLongitude(26.576018929481506);
$em->persist($point3397);


$waySet3397 = new WaySet();
$waySet3397->setPoint($point3397);
$waySet3397->setWay($way);
$em->persist($waySet3397);


$point3398 = new Point();
$point3398->setLatitude(48.240470141728295);
$point3398->setLongitude(26.573867797851562);
$em->persist($point3398);


$waySet3398 = new WaySet();
$waySet3398->setPoint($point3398);
$waySet3398->setWay($way);
$em->persist($waySet3398);


$point3399 = new Point();
$point3399->setLatitude(48.239691279953924);
$point3399->setLongitude(26.572827100753784);
$em->persist($point3399);


$waySet3399 = new WaySet();
$waySet3399->setPoint($point3399);
$waySet3399->setWay($way);
$em->persist($waySet3399);


$point3400 = new Point();
$point3400->setLatitude(48.238162103993695);
$point3400->setLongitude(26.571620106697083);
$em->persist($point3400);


$waySet3400 = new WaySet();
$waySet3400->setPoint($point3400);
$waySet3400->setWay($way);
$em->persist($waySet3400);


$point3401 = new Point();
$point3401->setLatitude(48.23665789332709);
$point3401->setLongitude(26.571582555770874);
$em->persist($point3401);


$waySet3401 = new WaySet();
$waySet3401->setPoint($point3401);
$waySet3401->setWay($way);
$em->persist($waySet3401);


$point3402 = new Point();
$point3402->setLatitude(48.23549665531915);
$point3402->setLongitude(26.571539640426636);
$em->persist($point3402);


$waySet3402 = new WaySet();
$waySet3402->setPoint($point3402);
$waySet3402->setWay($way);
$em->persist($waySet3402);


$point3403 = new Point();
$point3403->setLatitude(48.23401380539415);
$point3403->setLongitude(26.571325063705444);
$em->persist($point3403);


$waySet3403 = new WaySet();
$waySet3403->setPoint($point3403);
$waySet3403->setWay($way);
$em->persist($waySet3403);


$point3404 = new Point();
$point3404->setLatitude(48.232934692408996);
$point3404->setLongitude(26.570574045181274);
$em->persist($point3404);


$waySet3404 = new WaySet();
$waySet3404->setPoint($point3404);
$waySet3404->setWay($way);
$em->persist($waySet3404);


$point3405 = new Point();
$point3405->setLatitude(48.23218430241524);
$point3405->setLongitude(26.569222211837765);
$em->persist($point3405);


$waySet3405 = new WaySet();
$waySet3405->setPoint($point3405);
$waySet3405->setWay($way);
$em->persist($waySet3405);


$point3406 = new Point();
$point3406->setLatitude(48.231226645868865);
$point3406->setLongitude(26.568739414215088);
$em->persist($point3406);


$waySet3406 = new WaySet();
$waySet3406->setPoint($point3406);
$waySet3406->setWay($way);
$em->persist($waySet3406);


$point3407 = new Point();
$point3407->setLatitude(48.229925919469544);
$point3407->setLongitude(26.56870722770691);
$em->persist($point3407);


$waySet3407 = new WaySet();
$waySet3407->setPoint($point3407);
$waySet3407->setWay($way);
$em->persist($waySet3407);


$point3408 = new Point();
$point3408->setLatitude(48.228832426092765);
$point3408->setLongitude(26.569243669509888);
$em->persist($point3408);


$waySet3408 = new WaySet();
$waySet3408->setPoint($point3408);
$waySet3408->setWay($way);
$em->persist($waySet3408);


$point3409 = new Point();
$point3409->setLatitude(48.227406561397395);
$point3409->setLongitude(26.570520401000977);
$em->persist($point3409);


$waySet3409 = new WaySet();
$waySet3409->setPoint($point3409);
$waySet3409->setWay($way);
$em->persist($waySet3409);


$point3410 = new Point();
$point3410->setLatitude(48.226095016690486);
$point3410->setLongitude(26.57145917415619);
$em->persist($point3410);


$waySet3410 = new WaySet();
$waySet3410->setPoint($point3410);
$waySet3410->setWay($way);
$em->persist($waySet3410);


$point3411 = new Point();
$point3411->setLatitude(48.22463333734966);
$point3411->setLongitude(26.572301387786865);
$em->persist($point3411);


$waySet3411 = new WaySet();
$waySet3411->setPoint($point3411);
$waySet3411->setWay($way);
$em->persist($waySet3411);


$point3412 = new Point();
$point3412->setLatitude(48.22291786581104);
$point3412->setLongitude(26.57268762588501);
$em->persist($point3412);


$waySet3412 = new WaySet();
$waySet3412->setPoint($point3412);
$waySet3412->setWay($way);
$em->persist($waySet3412);


$point3413 = new Point();
$point3413->setLatitude(48.22029451273729);
$point3413->setLongitude(26.572607159614563);
$em->persist($point3413);


$waySet3413 = new WaySet();
$waySet3413->setPoint($point3413);
$waySet3413->setWay($way);
$em->persist($waySet3413);


$point3414 = new Point();
$point3414->setLatitude(48.219132903378934);
$point3414->setLongitude(26.57221019268036);
$em->persist($point3414);


$waySet3414 = new WaySet();
$waySet3414->setPoint($point3414);
$waySet3414->setWay($way);
$em->persist($waySet3414);


$point3415 = new Point();
$point3415->setLatitude(48.21903282503173);
$point3415->setLongitude(26.57042384147644);
$em->persist($point3415);


$waySet3415 = new WaySet();
$waySet3415->setPoint($point3415);
$waySet3415->setWay($way);
$em->persist($waySet3415);


$point3416 = new Point();
$point3416->setLatitude(48.219411692028764);
$point3416->setLongitude(26.568508744239807);
$em->persist($point3416);


$waySet3416 = new WaySet();
$waySet3416->setPoint($point3416);
$waySet3416->setWay($way);
$em->persist($waySet3416);


$point3417 = new Point();
$point3417->setLatitude(48.22029451273729);
$point3417->setLongitude(26.565885543823242);
$em->persist($point3417);


$waySet3417 = new WaySet();
$waySet3417->setPoint($point3417);
$waySet3417->setWay($way);
$em->persist($waySet3417);


$point3418 = new Point();
$point3418->setLatitude(48.22084135355641);
$point3418->setLongitude(26.563707590103146);
$em->persist($point3418);


$waySet3418 = new WaySet();
$waySet3418->setPoint($point3418);
$waySet3418->setWay($way);
$em->persist($waySet3418);


$point3419 = new Point();
$point3419->setLatitude(48.22110941064789);
$point3419->setLongitude(26.561368703842163);
$em->persist($point3419);


$waySet3419 = new WaySet();
$waySet3419->setPoint($point3419);
$waySet3419->setWay($way);
$em->persist($waySet3419);


$point3420 = new Point();
$point3420->setLatitude(48.22177776021629);
$point3420->setLongitude(26.558868885040283);
$em->persist($point3420);


$waySet3420 = new WaySet();
$waySet3420->setPoint($point3420);
$waySet3420->setWay($way);
$em->persist($waySet3420);


$point3421 = new Point();
$point3421->setLatitude(48.22267483602698);
$point3421->setLongitude(26.556610465049744);
$em->persist($point3421);


$waySet3421 = new WaySet();
$waySet3421->setPoint($point3421);
$waySet3421->setWay($way);
$em->persist($waySet3421);


$point3422 = new Point();
$point3422->setLatitude(48.22388997340852);
$point3422->setLongitude(26.554893851280212);
$em->persist($point3422);


$waySet3422 = new WaySet();
$waySet3422->setPoint($point3422);
$waySet3422->setWay($way);
$em->persist($waySet3422);


$point3423 = new Point();
$point3423->setLatitude(48.224794159858725);
$point3423->setLongitude(26.553402543067932);
$em->persist($point3423);


$waySet3423 = new WaySet();
$waySet3423->setPoint($point3423);
$waySet3423->setWay($way);
$em->persist($waySet3423);


$point3424 = new Point();
$point3424->setLatitude(48.22492996513955);
$point3424->setLongitude(26.551353335380554);
$em->persist($point3424);


$waySet3424 = new WaySet();
$waySet3424->setPoint($point3424);
$waySet3424->setWay($way);
$em->persist($waySet3424);


$point3425 = new Point();
$point3425->setLatitude(48.22495140804566);
$point3425->setLongitude(26.549781560897827);
$em->persist($point3425);


$waySet3425 = new WaySet();
$waySet3425->setPoint($point3425);
$waySet3425->setWay($way);
$em->persist($waySet3425);


$point3426 = new Point();
$point3426->setLatitude(48.22414729291757);
$point3426->setLongitude(26.548048853874207);
$em->persist($point3426);


$waySet3426 = new WaySet();
$waySet3426->setPoint($point3426);
$waySet3426->setWay($way);
$em->persist($waySet3426);


$point3427 = new Point();
$point3427->setLatitude(48.2230179365632);
$point3427->setLongitude(26.547120809555054);
$em->persist($point3427);


$waySet3427 = new WaySet();
$waySet3427->setPoint($point3427);
$waySet3427->setWay($way);
$em->persist($waySet3427);


$point3428 = new Point();
$point3428->setLatitude(48.22181707462504);
$point3428->setLongitude(26.547281742095947);
$em->persist($point3428);


$waySet3428 = new WaySet();
$waySet3428->setPoint($point3428);
$waySet3428->setWay($way);
$em->persist($waySet3428);


$point3429 = new Point();
$point3429->setLatitude(48.2206054621548);
$point3429->setLongitude(26.54823124408722);
$em->persist($point3429);


$waySet3429 = new WaySet();
$waySet3429->setPoint($point3429);
$waySet3429->setWay($way);
$em->persist($waySet3429);


$point3430 = new Point();
$point3430->setLatitude(48.21931518843717);
$point3430->setLongitude(26.54970109462738);
$em->persist($point3430);


$waySet3430 = new WaySet();
$waySet3430->setPoint($point3430);
$waySet3430->setWay($way);
$em->persist($waySet3430);


$point3431 = new Point();
$point3431->setLatitude(48.21810709104557);
$point3431->setLongitude(26.55045211315155);
$em->persist($point3431);


$waySet3431 = new WaySet();
$waySet3431->setPoint($point3431);
$waySet3431->setWay($way);
$em->persist($waySet3431);


$point3432 = new Point();
$point3432->setLatitude(48.21706338632227);
$point3432->setLongitude(26.550532579421997);
$em->persist($point3432);


$waySet3432 = new WaySet();
$waySet3432->setPoint($point3432);
$waySet3432->setWay($way);
$em->persist($waySet3432);


$point3433 = new Point();
$point3433->setLatitude(48.216130467858775);
$point3433->setLongitude(26.550403833389282);
$em->persist($point3433);


$waySet3433 = new WaySet();
$waySet3433->setPoint($point3433);
$waySet3433->setWay($way);
$em->persist($waySet3433);


$point3434 = new Point();
$point3434->setLatitude(48.215154638402716);
$point3434->setLongitude(26.548054218292236);
$em->persist($point3434);


$waySet3434 = new WaySet();
$waySet3434->setPoint($point3434);
$waySet3434->setWay($way);
$em->persist($waySet3434);


$point3435 = new Point();
$point3435->setLatitude(48.2141358955015);
$point3435->setLongitude(26.54400944709778);
$em->persist($point3435);


$waySet3435 = new WaySet();
$waySet3435->setPoint($point3435);
$waySet3435->setWay($way);
$em->persist($waySet3435);


$point3436 = new Point();
$point3436->setLatitude(48.21423240885605);
$point3436->setLongitude(26.54167592525482);
$em->persist($point3436);


$waySet3436 = new WaySet();
$waySet3436->setPoint($point3436);
$waySet3436->setWay($way);
$em->persist($waySet3436);


$point3437 = new Point();
$point3437->setLatitude(48.21425385624346);
$point3437->setLongitude(26.54001295566559);
$em->persist($point3437);


$waySet3437 = new WaySet();
$waySet3437->setPoint($point3437);
$waySet3437->setWay($way);
$em->persist($waySet3437);


$point3438 = new Point();
$point3438->setLatitude(48.21410014976846);
$point3438->setLongitude(26.53814077377319);
$em->persist($point3438);


$waySet3438 = new WaySet();
$waySet3438->setPoint($point3438);
$waySet3438->setWay($way);
$em->persist($waySet3438);


$point3439 = new Point();
$point3439->setLatitude(48.212748942759795);
$point3439->setLongitude(26.53567314147949);
$em->persist($point3439);


$waySet3439 = new WaySet();
$waySet3439->setPoint($point3439);
$waySet3439->setWay($way);
$em->persist($waySet3439);


$point3440 = new Point();
$point3440->setLatitude(48.21095442753791);
$point3440->setLongitude(26.532175540924072);
$em->persist($point3440);


$waySet3440 = new WaySet();
$waySet3440->setPoint($point3440);
$waySet3440->setWay($way);
$em->persist($waySet3440);


$point3441 = new Point();
$point3441->setLatitude(48.21054689938267);
$point3441->setLongitude(26.531360149383545);
$em->persist($point3441);


$waySet3441 = new WaySet();
$waySet3441->setPoint($point3441);
$waySet3441->setWay($way);
$em->persist($waySet3441);


$point3442 = new Point();
$point3442->setLatitude(48.20961386218329);
$point3442->setLongitude(26.529997587203976);
$em->persist($point3442);


$waySet3442 = new WaySet();
$waySet3442->setPoint($point3442);
$waySet3442->setWay($way);
$em->persist($waySet3442);


$point3443 = new Point();
$point3443->setLatitude(48.209209898275795);
$point3443->setLongitude(26.52899980545044);
$em->persist($point3443);


$waySet3443 = new WaySet();
$waySet3443->setPoint($point3443);
$waySet3443->setWay($way);
$em->persist($waySet3443);


$point3444 = new Point();
$point3444->setLatitude(48.20923849759531);
$point3444->setLongitude(26.527578234672546);
$em->persist($point3444);


$waySet3444 = new WaySet();
$waySet3444->setPoint($point3444);
$waySet3444->setWay($way);
$em->persist($waySet3444);


$point3445 = new Point();
$point3445->setLatitude(48.20997492457185);
$point3445->setLongitude(26.52697205543518);
$em->persist($point3445);


$waySet3445 = new WaySet();
$waySet3445->setPoint($point3445);
$waySet3445->setWay($way);
$em->persist($waySet3445);


$point3446 = new Point();
$point3446->setLatitude(48.2112082372939);
$point3446->setLongitude(26.52676820755005);
$em->persist($point3446);


$waySet3446 = new WaySet();
$waySet3446->setPoint($point3446);
$waySet3446->setWay($way);
$em->persist($waySet3446);


$point3447 = new Point();
$point3447->setLatitude(48.21229138309873);
$point3447->setLongitude(26.52624249458313);
$em->persist($point3447);


$waySet3447 = new WaySet();
$waySet3447->setPoint($point3447);
$waySet3447->setWay($way);
$em->persist($waySet3447);


$point3448 = new Point();
$point3448->setLatitude(48.21307066194839);
$point3448->setLongitude(26.525480747222897);
$em->persist($point3448);


$waySet3448 = new WaySet();
$waySet3448->setPoint($point3448);
$waySet3448->setWay($way);
$em->persist($waySet3448);


$point3449 = new Point();
$point3449->setLatitude(48.21326011785822);
$point3449->setLongitude(26.524574160575863);
$em->persist($point3449);


$waySet3449 = new WaySet();
$waySet3449->setPoint($point3449);
$waySet3449->setWay($way);
$em->persist($waySet3449);


$point3450 = new Point();
$point3450->setLatitude(48.2132887149158);
$point3450->setLongitude(26.522862911224365);
$em->persist($point3450);


$waySet3450 = new WaySet();
$waySet3450->setPoint($point3450);
$waySet3450->setWay($way);
$em->persist($waySet3450);


$point3451 = new Point();
$point3451->setLatitude(48.21260238112593);
$point3451->setLongitude(26.52101218700409);
$em->persist($point3451);


$waySet3451 = new WaySet();
$waySet3451->setPoint($point3451);
$waySet3451->setWay($way);
$em->persist($waySet3451);


$point3452 = new Point();
$point3452->setLatitude(48.21124398504578);
$point3452->setLongitude(26.51890397071838);
$em->persist($point3452);


$waySet3452 = new WaySet();
$waySet3452->setPoint($point3452);
$waySet3452->setWay($way);
$em->persist($waySet3452);


$point3453 = new Point();
$point3453->setLatitude(48.210686317274444);
$point3453->setLongitude(26.516774296760556);
$em->persist($point3453);


$waySet3453 = new WaySet();
$waySet3453->setPoint($point3453);
$waySet3453->setWay($way);
$em->persist($waySet3453);


$point3454 = new Point();
$point3454->setLatitude(48.21066129357822);
$point3454->setLongitude(26.51452660560608);
$em->persist($point3454);


$waySet3454 = new WaySet();
$waySet3454->setPoint($point3454);
$waySet3454->setWay($way);
$em->persist($waySet3454);


$point3455 = new Point();
$point3455->setLatitude(48.211397700094565);
$point3455->setLongitude(26.512091159820557);
$em->persist($point3455);


$waySet3455 = new WaySet();
$waySet3455->setPoint($point3455);
$waySet3455->setWay($way);
$em->persist($waySet3455);


$point3456 = new Point();
$point3456->setLatitude(48.213267267124124);
$point3456->setLongitude(26.51098608970642);
$em->persist($point3456);


$waySet3456 = new WaySet();
$waySet3456->setPoint($point3456);
$waySet3456->setWay($way);
$em->persist($waySet3456);


$point3457 = new Point();
$point3457->setLatitude(48.214171641209575);
$point3457->setLongitude(26.509419679641724);
$em->persist($point3457);


$waySet3457 = new WaySet();
$waySet3457->setPoint($point3457);
$waySet3457->setWay($way);
$em->persist($waySet3457);


$point3458 = new Point();
$point3458->setLatitude(48.21509744635582);
$point3458->setLongitude(26.505873799324036);
$em->persist($point3458);


$waySet3458 = new WaySet();
$waySet3458->setPoint($point3458);
$waySet3458->setWay($way);
$em->persist($waySet3458);


$point3459 = new Point();
$point3459->setLatitude(48.216305614766846);
$point3459->setLongitude(26.502403020858765);
$em->persist($point3459);


$waySet3459 = new WaySet();
$waySet3459->setPoint($point3459);
$waySet3459->setWay($way);
$em->persist($waySet3459);


$point3460 = new Point();
$point3460->setLatitude(48.2171420223508);
$point3460->setLongitude(26.49954915046692);
$em->persist($point3460);


$waySet3460 = new WaySet();
$waySet3460->setPoint($point3460);
$waySet3460->setWay($way);
$em->persist($waySet3460);


$point3461 = new Point();
$point3461->setLatitude(48.21772821439369);
$point3461->setLongitude(26.495858430862427);
$em->persist($point3461);


$waySet3461 = new WaySet();
$waySet3461->setPoint($point3461);
$waySet3461->setWay($way);
$em->persist($waySet3461);


$point3462 = new Point();
$point3462->setLatitude(48.217999862088945);
$point3462->setLongitude(26.49381995201111);
$em->persist($point3462);


$waySet3462 = new WaySet();
$waySet3462->setPoint($point3462);
$waySet3462->setWay($way);
$em->persist($waySet3462);


$point3463 = new Point();
$point3463->setLatitude(48.21809636816);
$point3463->setLongitude(26.49181365966797);
$em->persist($point3463);


$waySet3463 = new WaySet();
$waySet3463->setPoint($point3463);
$waySet3463->setWay($way);
$em->persist($waySet3463);


$point3464 = new Point();
$point3464->setLatitude(48.21765672791854);
$point3464->setLongitude(26.489115357398987);
$em->persist($point3464);


$waySet3464 = new WaySet();
$waySet3464->setPoint($point3464);
$waySet3464->setWay($way);
$em->persist($waySet3464);


$point3465 = new Point();
$point3465->setLatitude(48.21659156761478);
$point3465->setLongitude(26.487388014793396);
$em->persist($point3465);


$waySet3465 = new WaySet();
$waySet3465->setPoint($point3465);
$waySet3465->setWay($way);
$em->persist($waySet3465);


$point3466 = new Point();
$point3466->setLatitude(48.2151903833996);
$point3466->setLongitude(26.48555338382721);
$em->persist($point3466);


$waySet3466 = new WaySet();
$waySet3466->setPoint($point3466);
$waySet3466->setWay($way);
$em->persist($waySet3466);


$point3467 = new Point();
$point3467->setLatitude(48.21441471136276);
$point3467->setLongitude(26.48357927799225);
$em->persist($point3467);


$waySet3467 = new WaySet();
$waySet3467->setPoint($point3467);
$waySet3467->setWay($way);
$em->persist($waySet3467);


$point3468 = new Point();
$point3468->setLatitude(48.21436824215797);
$point3468->setLongitude(26.48101508617401);
$em->persist($point3468);


$waySet3468 = new WaySet();
$waySet3468->setPoint($point3468);
$waySet3468->setWay($way);
$em->persist($waySet3468);


$point3469 = new Point();
$point3469->setLatitude(48.21517608540383);
$point3469->setLongitude(26.478150486946106);
$em->persist($point3469);


$waySet3469 = new WaySet();
$waySet3469->setPoint($point3469);
$waySet3469->setWay($way);
$em->persist($waySet3469);


$point3470 = new Point();
$point3470->setLatitude(48.2165057819281);
$point3470->setLongitude(26.475827693939205);
$em->persist($point3470);


$waySet3470 = new WaySet();
$waySet3470->setPoint($point3470);
$waySet3470->setWay($way);
$em->persist($waySet3470);


$point3471 = new Point();
$point3471->setLatitude(48.21785331548503);
$point3471->setLongitude(26.474695801734924);
$em->persist($point3471);


$waySet3471 = new WaySet();
$waySet3471->setPoint($point3471);
$waySet3471->setWay($way);
$em->persist($waySet3471);


$point3472 = new Point();
$point3472->setLatitude(48.21808564527222);
$point3472->setLongitude(26.474352478981015);
$em->persist($point3472);


$waySet3472 = new WaySet();
$waySet3472->setPoint($point3472);
$waySet3472->setWay($way);
$em->persist($waySet3472);


$point3473 = new Point();
$point3473->setLatitude(48.219011379646155);
$point3473->setLongitude(26.47319912910461);
$em->persist($point3473);


$waySet3473 = new WaySet();
$waySet3473->setPoint($point3473);
$waySet3473->setWay($way);
$em->persist($waySet3473);


$point3474 = new Point();
$point3474->setLatitude(48.21939739521187);
$point3474->setLongitude(26.47251784801483);
$em->persist($point3474);


$waySet3474 = new WaySet();
$waySet3474->setPoint($point3474);
$waySet3474->setWay($way);
$em->persist($waySet3474);


$point3475 = new Point();
$point3475->setLatitude(48.219411692028764);
$point3475->setLongitude(26.4718097448349);
$em->persist($point3475);


$waySet3475 = new WaySet();
$waySet3475->setPoint($point3475);
$waySet3475->setWay($way);
$em->persist($waySet3475);


$point3476 = new Point();
$point3476->setLatitude(48.2186754007661);
$point3476->setLongitude(26.471235752105713);
$em->persist($point3476);


$waySet3476 = new WaySet();
$waySet3476->setPoint($point3476);
$waySet3476->setWay($way);
$em->persist($waySet3476);


$point3477 = new Point();
$point3477->setLatitude(48.21746728827664);
$point3477->setLongitude(26.47048473358154);
$em->persist($point3477);


$waySet3477 = new WaySet();
$waySet3477->setPoint($point3477);
$waySet3477->setWay($way);
$em->persist($waySet3477);


$point3478 = new Point();
$point3478->setLatitude(48.21612689342585);
$point3478->setLongitude(26.468693017959595);
$em->persist($point3478);


$waySet3478 = new WaySet();
$waySet3478->setPoint($point3478);
$waySet3478->setWay($way);
$em->persist($waySet3478);


$point3479 = new Point();
$point3479->setLatitude(48.21559430013003);
$point3479->setLongitude(26.464417576789856);
$em->persist($point3479);


$waySet3479 = new WaySet();
$waySet3479->setPoint($point3479);
$waySet3479->setWay($way);
$em->persist($waySet3479);


$point3480 = new Point();
$point3480->setLatitude(48.215269022304874);
$point3480->setLongitude(26.461923122406006);
$em->persist($point3480);


$waySet3480 = new WaySet();
$waySet3480->setPoint($point3480);
$waySet3480->setWay($way);
$em->persist($waySet3480);


$point3481 = new Point();
$point3481->setLatitude(48.214697100238745);
$point3481->setLongitude(26.459503769874573);
$em->persist($point3481);


$waySet3481 = new WaySet();
$waySet3481->setPoint($point3481);
$waySet3481->setWay($way);
$em->persist($waySet3481);


$point3482 = new Point();
$point3482->setLatitude(48.21394286824664);
$point3482->setLongitude(26.45778715610504);
$em->persist($point3482);


$waySet3482 = new WaySet();
$waySet3482->setPoint($point3482);
$waySet3482->setWay($way);
$em->persist($waySet3482);


$point3483 = new Point();
$point3483->setLatitude(48.212924101235366);
$point3483->setLongitude(26.457384824752808);
$em->persist($point3483);


$waySet3483 = new WaySet();
$waySet3483->setPoint($point3483);
$waySet3483->setWay($way);
$em->persist($waySet3483);


$point3484 = new Point();
$point3484->setLatitude(48.21203400399264);
$point3484->setLongitude(26.45858108997345);
$em->persist($point3484);


$waySet3484 = new WaySet();
$waySet3484->setPoint($point3484);
$waySet3484->setWay($way);
$em->persist($waySet3484);


$point3485 = new Point();
$point3485->setLatitude(48.21076138828971);
$point3485->setLongitude(26.460683941841125);
$em->persist($point3485);


$waySet3485 = new WaySet();
$waySet3485->setPoint($point3485);
$waySet3485->setWay($way);
$em->persist($waySet3485);


$point3486 = new Point();
$point3486->setLatitude(48.20918844877568);
$point3486->setLongitude(26.46128475666046);
$em->persist($point3486);


$waySet3486 = new WaySet();
$waySet3486->setPoint($point3486);
$waySet3486->setWay($way);
$em->persist($waySet3486);


$point3487 = new Point();
$point3487->setLatitude(48.20749390987801);
$point3487->setLongitude(26.460174322128296);
$em->persist($point3487);


$waySet3487 = new WaySet();
$waySet3487->setPoint($point3487);
$waySet3487->setWay($way);
$em->persist($waySet3487);


$point3488 = new Point();
$point3488->setLatitude(48.20638206170001);
$point3488->setLongitude(26.45780324935913);
$em->persist($point3488);


$waySet3488 = new WaySet();
$waySet3488->setPoint($point3488);
$waySet3488->setWay($way);
$em->persist($waySet3488);


$point3489 = new Point();
$point3489->setLatitude(48.2051236063463);
$point3489->setLongitude(26.454219818115234);
$em->persist($point3489);


$waySet3489 = new WaySet();
$waySet3489->setPoint($point3489);
$waySet3489->setWay($way);
$em->persist($waySet3489);


$point3490 = new Point();
$point3490->setLatitude(48.20397237862986);
$point3490->setLongitude(26.450384259223938);
$em->persist($point3490);


$waySet3490 = new WaySet();
$waySet3490->setPoint($point3490);
$waySet3490->setWay($way);
$em->persist($waySet3490);


$point3491 = new Point();
$point3491->setLatitude(48.20353976773733);
$point3491->setLongitude(26.447423100471497);
$em->persist($point3491);


$waySet3491 = new WaySet();
$waySet3491->setPoint($point3491);
$waySet3491->setWay($way);
$em->persist($waySet3491);


$point3492 = new Point();
$point3492->setLatitude(48.20363272575799);
$point3492->setLongitude(26.444944739341736);
$em->persist($point3492);


$waySet3492 = new WaySet();
$waySet3492->setPoint($point3492);
$waySet3492->setWay($way);
$em->persist($waySet3492);


$point3493 = new Point();
$point3493->setLatitude(48.204108239147985);
$point3493->setLongitude(26.440240144729614);
$em->persist($point3493);


$waySet3493 = new WaySet();
$waySet3493->setPoint($point3493);
$waySet3493->setWay($way);
$em->persist($waySet3493);


$point3494 = new Point();
$point3494->setLatitude(48.20443716312052);
$point3494->setLongitude(26.43702149391174);
$em->persist($point3494);


$waySet3494 = new WaySet();
$waySet3494->setPoint($point3494);
$waySet3494->setWay($way);
$em->persist($waySet3494);


$point3495 = new Point();
$point3495->setLatitude(48.20415829293222);
$point3495->setLongitude(26.43588423728943);
$em->persist($point3495);


$waySet3495 = new WaySet();
$waySet3495->setPoint($point3495);
$waySet3495->setWay($way);
$em->persist($waySet3495);


$point3496 = new Point();
$point3496->setLatitude(48.20355764429287);
$point3496->setLongitude(26.43559455871582);
$em->persist($point3496);


$waySet3496 = new WaySet();
$waySet3496->setPoint($point3496);
$waySet3496->setWay($way);
$em->persist($waySet3496);


$point3497 = new Point();
$point3497->setLatitude(48.20272459017623);
$point3497->setLongitude(26.435750126838684);
$em->persist($point3497);


$waySet3497 = new WaySet();
$waySet3497->setPoint($point3497);
$waySet3497->setWay($way);
$em->persist($waySet3497);


$point3498 = new Point();
$point3498->setLatitude(48.20183789108157);
$point3498->setLongitude(26.43563747406006);
$em->persist($point3498);


$waySet3498 = new WaySet();
$waySet3498->setPoint($point3498);
$waySet3498->setWay($way);
$em->persist($waySet3498);


$point3499 = new Point();
$point3499->setLatitude(48.20154470493985);
$point3499->setLongitude(26.434682607650757);
$em->persist($point3499);


$waySet3499 = new WaySet();
$waySet3499->setPoint($point3499);
$waySet3499->setWay($way);
$em->persist($waySet3499);


$point3500 = new Point();
$point3500->setLatitude(48.20083318525252);
$point3500->setLongitude(26.433534622192383);
$em->persist($point3500);


$waySet3500 = new WaySet();
$waySet3500->setPoint($point3500);
$waySet3500->setWay($way);
$em->persist($waySet3500);


$point3501 = new Point();
$point3501->setLatitude(48.20020031772874);
$point3501->setLongitude(26.432735323905945);
$em->persist($point3501);


$waySet3501 = new WaySet();
$waySet3501->setPoint($point3501);
$waySet3501->setWay($way);
$em->persist($waySet3501);


$point3502 = new Point();
$point3502->setLatitude(48.19977125055358);
$point3502->setLongitude(26.433078646659848);
$em->persist($point3502);


$waySet3502 = new WaySet();
$waySet3502->setPoint($point3502);
$waySet3502->setWay($way);
$em->persist($waySet3502);


$point3503 = new Point();
$point3503->setLatitude(48.199320726151946);
$point3503->setLongitude(26.43358826637268);
$em->persist($point3503);


$waySet3503 = new WaySet();
$waySet3503->setPoint($point3503);
$waySet3503->setWay($way);
$em->persist($waySet3503);


$point3504 = new Point();
$point3504->setLatitude(48.19899176932433);
$point3504->setLongitude(26.434757709503174);
$em->persist($point3504);


$waySet3504 = new WaySet();
$waySet3504->setPoint($point3504);
$waySet3504->setWay($way);
$em->persist($waySet3504);


$point3505 = new Point();
$point3505->setLatitude(48.198845168318556);
$point3505->setLongitude(26.436790823936462);
$em->persist($point3505);


$waySet3505 = new WaySet();
$waySet3505->setPoint($point3505);
$waySet3505->setWay($way);
$em->persist($waySet3505);


$point3506 = new Point();
$point3506->setLatitude(48.19834457635638);
$point3506->setLongitude(26.43838942050934);
$em->persist($point3506);


$waySet3506 = new WaySet();
$waySet3506->setPoint($point3506);
$waySet3506->setWay($way);
$em->persist($waySet3506);


$point3507 = new Point();
$point3507->setLatitude(48.196967923238866);
$point3507->setLongitude(26.43985390663147);
$em->persist($point3507);


$waySet3507 = new WaySet();
$waySet3507->setPoint($point3507);
$waySet3507->setWay($way);
$em->persist($waySet3507);


$point3508 = new Point();
$point3508->setLatitude(48.1955912331297);
$point3508->setLongitude(26.439714431762695);
$em->persist($point3508);


$waySet3508 = new WaySet();
$waySet3508->setPoint($point3508);
$waySet3508->setWay($way);
$em->persist($waySet3508);


$point3509 = new Point();
$point3509->setLatitude(48.19433608861242);
$point3509->setLongitude(26.438405513763428);
$em->persist($point3509);


$waySet3509 = new WaySet();
$waySet3509->setPoint($point3509);
$waySet3509->setWay($way);
$em->persist($waySet3509);


$point3510 = new Point();
$point3510->setLatitude(48.19337414792881);
$point3510->setLongitude(26.436721086502075);
$em->persist($point3510);


$waySet3510 = new WaySet();
$waySet3510->setPoint($point3510);
$waySet3510->setWay($way);
$em->persist($waySet3510);


$point3511 = new Point();
$point3511->setLatitude(48.19298793617961);
$point3511->setLongitude(26.434966921806332);
$em->persist($point3511);


$waySet3511 = new WaySet();
$waySet3511->setPoint($point3511);
$waySet3511->setWay($way);
$em->persist($waySet3511);


$point3512 = new Point();
$point3512->setLatitude(48.19292714332429);
$point3512->setLongitude(26.434065699577328);
$em->persist($point3512);


$waySet3512 = new WaySet();
$waySet3512->setPoint($point3512);
$waySet3512->setWay($way);
$em->persist($waySet3512);


$point3513 = new Point();
$point3513->setLatitude(48.193177466383254);
$point3513->setLongitude(26.43334686756134);
$em->persist($point3513);


$waySet3513 = new WaySet();
$waySet3513->setPoint($point3513);
$waySet3513->setWay($way);
$em->persist($waySet3513);


$point3514 = new Point();
$point3514->setLatitude(48.194017827708706);
$point3514->setLongitude(26.433175206184387);
$em->persist($point3514);


$waySet3514 = new WaySet();
$waySet3514->setPoint($point3514);
$waySet3514->setWay($way);
$em->persist($waySet3514);


$point3515 = new Point();
$point3515->setLatitude(48.19534092186278);
$point3515->setLongitude(26.4321506023407);
$em->persist($point3515);


$waySet3515 = new WaySet();
$waySet3515->setPoint($point3515);
$waySet3515->setWay($way);
$em->persist($waySet3515);


$point3516 = new Point();
$point3516->setLatitude(48.19642440325142);
$point3516->setLongitude(26.430680751800537);
$em->persist($point3516);


$waySet3516 = new WaySet();
$waySet3516->setPoint($point3516);
$waySet3516->setWay($way);
$em->persist($waySet3516);


$point3517 = new Point();
$point3517->setLatitude(48.19738271092901);
$point3517->setLongitude(26.428164839744568);
$em->persist($point3517);


$waySet3517 = new WaySet();
$waySet3517->setPoint($point3517);
$waySet3517->setWay($way);
$em->persist($waySet3517);


$point3518 = new Point();
$point3518->setLatitude(48.19839106010173);
$point3518->setLongitude(26.425997614860535);
$em->persist($point3518);


$waySet3518 = new WaySet();
$waySet3518->setPoint($point3518);
$waySet3518->setWay($way);
$em->persist($waySet3518);


$point3519 = new Point();
$point3519->setLatitude(48.200600777183254);
$point3519->setLongitude(26.423690915107727);
$em->persist($point3519);


$waySet3519 = new WaySet();
$waySet3519->setPoint($point3519);
$waySet3519->setWay($way);
$em->persist($waySet3519);


$point3520 = new Point();
$point3520->setLatitude(48.20099050703942);
$point3520->setLongitude(26.42280578613281);
$em->persist($point3520);


$waySet3520 = new WaySet();
$waySet3520->setPoint($point3520);
$waySet3520->setWay($way);
$em->persist($waySet3520);


$point3521 = new Point();
$point3521->setLatitude(48.200944025652674);
$point3521->setLongitude(26.421534419059753);
$em->persist($point3521);


$waySet3521 = new WaySet();
$waySet3521->setPoint($point3521);
$waySet3521->setWay($way);
$em->persist($waySet3521);


$point3522 = new Point();
$point3522->setLatitude(48.200300432885854);
$point3522->setLongitude(26.420209407806396);
$em->persist($point3522);


$waySet3522 = new WaySet();
$waySet3522->setPoint($point3522);
$waySet3522->setWay($way);
$em->persist($waySet3522);


$point3523 = new Point();
$point3523->setLatitude(48.19786185804604);
$point3523->setLongitude(26.41860008239746);
$em->persist($point3523);


$waySet3523 = new WaySet();
$waySet3523->setPoint($point3523);
$waySet3523->setWay($way);
$em->persist($waySet3523);


$point3524 = new Point();
$point3524->setLatitude(48.19737198370347);
$point3524->setLongitude(26.41827821731567);
$em->persist($point3524);


$waySet3524 = new WaySet();
$waySet3524->setPoint($point3524);
$waySet3524->setWay($way);
$em->persist($waySet3524);


$point3525 = new Point();
$point3525->setLatitude(48.19588087749804);
$point3525->setLongitude(26.41591250896454);
$em->persist($point3525);


$waySet3525 = new WaySet();
$waySet3525->setPoint($point3525);
$waySet3525->setWay($way);
$em->persist($waySet3525);


$point3526 = new Point();
$point3526->setLatitude(48.19444336712325);
$point3526->setLongitude(26.413546800613403);
$em->persist($point3526);


$waySet3526 = new WaySet();
$waySet3526->setPoint($point3526);
$waySet3526->setWay($way);
$em->persist($waySet3526);


$point3527 = new Point();
$point3527->setLatitude(48.19301296851084);
$point3527->setLongitude(26.41104161739349);
$em->persist($point3527);


$waySet3527 = new WaySet();
$waySet3527->setPoint($point3527);
$waySet3527->setWay($way);
$em->persist($waySet3527);


$point3528 = new Point();
$point3528->setLatitude(48.190295101137366);
$point3528->setLongitude(26.406455039978027);
$em->persist($point3528);


$waySet3528 = new WaySet();
$waySet3528->setPoint($point3528);
$waySet3528->setWay($way);
$em->persist($waySet3528);


$point3529 = new Point();
$point3529->setLatitude(48.18887889206643);
$point3529->setLongitude(26.40267848968506);
$em->persist($point3529);


$waySet3529 = new WaySet();
$waySet3529->setPoint($point3529);
$waySet3529->setWay($way);
$em->persist($waySet3529);


$point3530 = new Point();
$point3530->setLatitude(48.18871438039476);
$point3530->setLongitude(26.402195692062378);
$em->persist($point3530);


$waySet3530 = new WaySet();
$waySet3530->setPoint($point3530);
$waySet3530->setWay($way);
$em->persist($waySet3530);


$point3531 = new Point();
$point3531->setLatitude(48.18834243901656);
$point3531->setLongitude(26.400747299194336);
$em->persist($point3531);


$waySet3531 = new WaySet();
$waySet3531->setPoint($point3531);
$waySet3531->setWay($way);
$em->persist($waySet3531);


$point3532 = new Point();
$point3532->setLatitude(48.18836747361712);
$point3532->setLongitude(26.398805379867554);
$em->persist($point3532);


$waySet3532 = new WaySet();
$waySet3532->setPoint($point3532);
$waySet3532->setWay($way);
$em->persist($waySet3532);


$point3533 = new Point();
$point3533->setLatitude(48.1886285480086);
$point3533->setLongitude(26.397271156311035);
$em->persist($point3533);


$waySet3533 = new WaySet();
$waySet3533->setPoint($point3533);
$waySet3533->setWay($way);
$em->persist($waySet3533);


$point3534 = new Point();
$point3534->setLatitude(48.18935454240716);
$point3534->setLongitude(26.39613389968872);
$em->persist($point3534);


$waySet3534 = new WaySet();
$waySet3534->setPoint($point3534);
$waySet3534->setWay($way);
$em->persist($waySet3534);


$point3535 = new Point();
$point3535->setLatitude(48.189547662338036);
$point3535->setLongitude(26.395082473754883);
$em->persist($point3535);


$waySet3535 = new WaySet();
$waySet3535->setPoint($point3535);
$waySet3535->setWay($way);
$em->persist($waySet3535);


$point3536 = new Point();
$point3536->setLatitude(48.1895691200632);
$point3536->setLongitude(26.393483877182007);
$em->persist($point3536);


$waySet3536 = new WaySet();
$waySet3536->setPoint($point3536);
$waySet3536->setWay($way);
$em->persist($waySet3536);


$point3537 = new Point();
$point3537->setLatitude(48.1883460153888);
$point3537->setLongitude(26.391402482986447);
$em->persist($point3537);


$waySet3537 = new WaySet();
$waySet3537->setPoint($point3537);
$waySet3537->setWay($way);
$em->persist($waySet3537);


$point3538 = new Point();
$point3538->setLatitude(48.187337468523424);
$point3538->setLongitude(26.389766335487366);
$em->persist($point3538);


$waySet3538 = new WaySet();
$waySet3538->setPoint($point3538);
$waySet3538->setWay($way);
$em->persist($waySet3538);


$point3539 = new Point();
$point3539->setLatitude(48.18671516374795);
$point3539->setLongitude(26.387448906898495);
$em->persist($point3539);


$waySet3539 = new WaySet();
$waySet3539->setPoint($point3539);
$waySet3539->setWay($way);
$em->persist($waySet3539);


$point3540 = new Point();
$point3540->setLatitude(48.1870656581716);
$point3540->setLongitude(26.38291597366333);
$em->persist($point3540);


$waySet3540 = new WaySet();
$waySet3540->setPoint($point3540);
$waySet3540->setWay($way);
$em->persist($waySet3540);


$point3541 = new Point();
$point3541->setLatitude(48.18786320287644);
$point3541->setLongitude(26.38043761253357);
$em->persist($point3541);


$waySet3541 = new WaySet();
$waySet3541->setPoint($point3541);
$waySet3541->setWay($way);
$em->persist($waySet3541);


$point3542 = new Point();
$point3542->setLatitude(48.18890035007163);
$point3542->setLongitude(26.379042863845825);
$em->persist($point3542);


$waySet3542 = new WaySet();
$waySet3542->setPoint($point3542);
$waySet3542->setWay($way);
$em->persist($waySet3542);


$point3543 = new Point();
$point3543->setLatitude(48.189830188333204);
$point3543->setLongitude(26.37889266014099);
$em->persist($point3543);


$waySet3543 = new WaySet();
$waySet3543->setPoint($point3543);
$waySet3543->setWay($way);
$em->persist($waySet3543);


$point3544 = new Point();
$point3544->setLatitude(48.19086371952534);
$point3544->setLongitude(26.379375457763672);
$em->persist($point3544);


$waySet3544 = new WaySet();
$waySet3544->setPoint($point3544);
$waySet3544->setWay($way);
$em->persist($waySet3544);


$point3545 = new Point();
$point3545->setLatitude(48.1915467684923);
$point3545->setLongitude(26.381258368492126);
$em->persist($point3545);


$waySet3545 = new WaySet();
$waySet3545->setPoint($point3545);
$waySet3545->setWay($way);
$em->persist($waySet3545);


$point3546 = new Point();
$point3546->setLatitude(48.19181497894797);
$point3546->setLongitude(26.383554339408875);
$em->persist($point3546);


$waySet3546 = new WaySet();
$waySet3546->setPoint($point3546);
$waySet3546->setWay($way);
$em->persist($waySet3546);


$point3547 = new Point();
$point3547->setLatitude(48.192576688987316);
$point3547->setLongitude(26.385506987571716);
$em->persist($point3547);


$waySet3547 = new WaySet();
$waySet3547->setPoint($point3547);
$waySet3547->setWay($way);
$em->persist($waySet3547);


$point3548 = new Point();
$point3548->setLatitude(48.19321322672041);
$point3548->setLongitude(26.386376023292538);
$em->persist($point3548);


$waySet3548 = new WaySet();
$waySet3548->setPoint($point3548);
$waySet3548->setWay($way);
$em->persist($waySet3548);


$point3549 = new Point();
$point3549->setLatitude(48.19398564391175);
$point3549->setLongitude(26.386386752128598);
$em->persist($point3549);


$waySet3549 = new WaySet();
$waySet3549->setPoint($point3549);
$waySet3549->setWay($way);
$em->persist($waySet3549);


$point3550 = new Point();
$point3550->setLatitude(48.19487963075331);
$point3550->setLongitude(26.386225819587708);
$em->persist($point3550);


$waySet3550 = new WaySet();
$waySet3550->setPoint($point3550);
$waySet3550->setWay($way);
$em->persist($waySet3550);


$point3551 = new Point();
$point3551->setLatitude(48.19566275040992);
$point3551->setLongitude(26.385034918785095);
$em->persist($point3551);


$waySet3551 = new WaySet();
$waySet3551->setPoint($point3551);
$waySet3551->setWay($way);
$em->persist($waySet3551);


$point3552 = new Point();
$point3552->setLatitude(48.19610973114961);
$point3552->setLongitude(26.382556557655334);
$em->persist($point3552);


$waySet3552 = new WaySet();
$waySet3552->setPoint($point3552);
$waySet3552->setWay($way);
$em->persist($waySet3552);


$point3553 = new Point();
$point3553->setLatitude(48.19658889017186);
$point3553->setLongitude(26.38119399547577);
$em->persist($point3553);


$waySet3553 = new WaySet();
$waySet3553->setPoint($point3553);
$waySet3553->setWay($way);
$em->persist($waySet3553);


$point3554 = new Point();
$point3554->setLatitude(48.19698937785692);
$point3554->setLongitude(26.38029813766479);
$em->persist($point3554);


$waySet3554 = new WaySet();
$waySet3554->setPoint($point3554);
$waySet3554->setWay($way);
$em->persist($waySet3554);


$point3555 = new Point();
$point3555->setLatitude(48.198151489578045);
$point3555->setLongitude(26.378291845321655);
$em->persist($point3555);


$waySet3555 = new WaySet();
$waySet3555->setPoint($point3555);
$waySet3555->setWay($way);
$em->persist($waySet3555);


$point3556 = new Point();
$point3556->setLatitude(48.19838390875905);
$point3556->setLongitude(26.377031207084656);
$em->persist($point3556);


$waySet3556 = new WaySet();
$waySet3556->setPoint($point3556);
$waySet3556->setWay($way);
$em->persist($waySet3556);


$point3557 = new Point();
$point3557->setLatitude(48.19840178711392);
$point3557->setLongitude(26.375041007995602);
$em->persist($point3557);


$waySet3557 = new WaySet();
$waySet3557->setPoint($point3557);
$waySet3557->setWay($way);
$em->persist($waySet3557);


$point3558 = new Point();
$point3558->setLatitude(48.19754004331233);
$point3558->setLongitude(26.372069120407104);
$em->persist($point3558);


$waySet3558 = new WaySet();
$waySet3558->setPoint($point3558);
$waySet3558->setWay($way);
$em->persist($waySet3558);


$point3559 = new Point();
$point3559->setLatitude(48.195945242690854);
$point3559->setLongitude(26.370969414711);
$em->persist($point3559);


$waySet3559 = new WaySet();
$waySet3559->setPoint($point3559);
$waySet3559->setWay($way);
$em->persist($waySet3559);


$point3560 = new Point();
$point3560->setLatitude(48.19399994782399);
$point3560->setLongitude(26.37017011642456);
$em->persist($point3560);


$waySet3560 = new WaySet();
$waySet3560->setPoint($point3560);
$waySet3560->setWay($way);
$em->persist($waySet3560);


$point3561 = new Point();
$point3561->setLatitude(48.192315634709225);
$point3561->setLongitude(26.36964440345764);
$em->persist($point3561);


$waySet3561 = new WaySet();
$waySet3561->setPoint($point3561);
$waySet3561->setWay($way);
$em->persist($waySet3561);


$point3562 = new Point();
$point3562->setLatitude(48.190788619345156);
$point3562->setLongitude(26.36896312236786);
$em->persist($point3562);


$waySet3562 = new WaySet();
$waySet3562->setPoint($point3562);
$waySet3562->setWay($way);
$em->persist($waySet3562);


$point3563 = new Point();
$point3563->setLatitude(48.18989098486268);
$point3563->setLongitude(26.368571519851685);
$em->persist($point3563);


$waySet3563 = new WaySet();
$waySet3563->setPoint($point3563);
$waySet3563->setWay($way);
$em->persist($waySet3563);


$point3564 = new Point();
$point3564->setLatitude(48.188471188260635);
$point3564->setLongitude(26.366162896156307);
$em->persist($point3564);


$waySet3564 = new WaySet();
$waySet3564->setPoint($point3564);
$waySet3564->setWay($way);
$em->persist($waySet3564);


$point3565 = new Point();
$point3565->setLatitude(48.18741257376117);
$point3565->setLongitude(26.364381909370422);
$em->persist($point3565);


$waySet3565 = new WaySet();
$waySet3565->setPoint($point3565);
$waySet3565->setWay($way);
$em->persist($waySet3565);


$point3566 = new Point();
$point3566->setLatitude(48.186264524538416);
$point3566->setLongitude(26.362509727478027);
$em->persist($point3566);


$waySet3566 = new WaySet();
$waySet3566->setPoint($point3566);
$waySet3566->setWay($way);
$em->persist($waySet3566);


$point3567 = new Point();
$point3567->setLatitude(48.18495192585014);
$point3567->setLongitude(26.360101103782654);
$em->persist($point3567);


$waySet3567 = new WaySet();
$waySet3567->setPoint($point3567);
$waySet3567->setWay($way);
$em->persist($waySet3567);


$point3568 = new Point();
$point3568->setLatitude(48.18468010284686);
$point3568->setLongitude(26.357778310775753);
$em->persist($point3568);


$waySet3568 = new WaySet();
$waySet3568->setPoint($point3568);
$waySet3568->setWay($way);
$em->persist($waySet3568);


$point3569 = new Point();
$point3569->setLatitude(48.18523090059141);
$point3569->setLongitude(26.35643720626831);
$em->persist($point3569);


$waySet3569 = new WaySet();
$waySet3569->setPoint($point3569);
$waySet3569->setWay($way);
$em->persist($waySet3569);


$point3570 = new Point();
$point3570->setLatitude(48.186264524538416);
$point3570->setLongitude(26.354978084564205);
$em->persist($point3570);


$waySet3570 = new WaySet();
$waySet3570->setPoint($point3570);
$waySet3570->setWay($way);
$em->persist($waySet3570);


$point3571 = new Point();
$point3571->setLatitude(48.18778094547642);
$point3571->setLongitude(26.354822516441345);
$em->persist($point3571);


$waySet3571 = new WaySet();
$waySet3571->setPoint($point3571);
$waySet3571->setWay($way);
$em->persist($waySet3571);


$point3572 = new Point();
$point3572->setLatitude(48.18924367693283);
$point3572->setLongitude(26.35442018508911);
$em->persist($point3572);


$waySet3572 = new WaySet();
$waySet3572->setPoint($point3572);
$waySet3572->setWay($way);
$em->persist($waySet3572);


$point3573 = new Point();
$point3573->setLatitude(48.190384506962296);
$point3573->setLongitude(26.353036165237427);
$em->persist($point3573);


$waySet3573 = new WaySet();
$waySet3573->setPoint($point3573);
$waySet3573->setWay($way);
$em->persist($waySet3573);


$point3574 = new Point();
$point3574->setLatitude(48.191067562316746);
$point3574->setLongitude(26.351619958877563);
$em->persist($point3574);


$waySet3574 = new WaySet();
$waySet3574->setPoint($point3574);
$waySet3574->setWay($way);
$em->persist($waySet3574);


$point3575 = new Point();
$point3575->setLatitude(48.19117127149592);
$point3575->setLongitude(26.349554657936093);
$em->persist($point3575);


$waySet3575 = new WaySet();
$waySet3575->setPoint($point3575);
$waySet3575->setWay($way);
$em->persist($waySet3575);


$point3576 = new Point();
$point3576->setLatitude(48.19113908591103);
$point3576->setLongitude(26.348320841789242);
$em->persist($point3576);


$waySet3576 = new WaySet();
$waySet3576->setPoint($point3576);
$waySet3576->setWay($way);
$em->persist($waySet3576);


$point3577 = new Point();
$point3577->setLatitude(48.19014132275358);
$point3577->setLongitude(26.347317695617676);
$em->persist($point3577);


$waySet3577 = new WaySet();
$waySet3577->setPoint($point3577);
$waySet3577->setWay($way);
$em->persist($waySet3577);


$point3578 = new Point();
$point3578->setLatitude(48.189325931985124);
$point3578->setLongitude(26.34722113609314);
$em->persist($point3578);


$waySet3578 = new WaySet();
$waySet3578->setPoint($point3578);
$waySet3578->setWay($way);
$em->persist($waySet3578);


$point3579 = new Point();
$point3579->setLatitude(48.188170772854605);
$point3579->setLongitude(26.348631978034973);
$em->persist($point3579);


$waySet3579 = new WaySet();
$waySet3579->setPoint($point3579);
$waySet3579->setWay($way);
$em->persist($waySet3579);


$point3580 = new Point();
$point3580->setLatitude(48.18643619708545);
$point3580->setLongitude(26.349812150001526);
$em->persist($point3580);


$waySet3580 = new WaySet();
$waySet3580->setPoint($point3580);
$waySet3580->setWay($way);
$em->persist($waySet3580);


$point3581 = new Point();
$point3581->setLatitude(48.184830321000554);
$point3581->setLongitude(26.350391507148743);
$em->persist($point3581);


$waySet3581 = new WaySet();
$waySet3581->setPoint($point3581);
$waySet3581->setWay($way);
$em->persist($waySet3581);


$point3582 = new Point();
$point3582->setLatitude(48.183524839000526);
$point3582->setLongitude(26.34973168373108);
$em->persist($point3582);


$waySet3582 = new WaySet();
$waySet3582->setPoint($point3582);
$waySet3582->setWay($way);
$em->persist($waySet3582);


$point3583 = new Point();
$point3583->setLatitude(48.182423200925584);
$point3583->setLongitude(26.347129940986633);
$em->persist($point3583);


$waySet3583 = new WaySet();
$waySet3583->setPoint($point3583);
$waySet3583->setWay($way);
$em->persist($waySet3583);


$point3584 = new Point();
$point3584->setLatitude(48.18199040806134);
$point3584->setLongitude(26.344887614250183);
$em->persist($point3584);


$waySet3584 = new WaySet();
$waySet3584->setPoint($point3584);
$waySet3584->setWay($way);
$em->persist($waySet3584);


$point3585 = new Point();
$point3585->setLatitude(48.18208340518335);
$point3585->setLongitude(26.3416850566864);
$em->persist($point3585);


$waySet3585 = new WaySet();
$waySet3585->setPoint($point3585);
$waySet3585->setWay($way);
$em->persist($waySet3585);


$point3586 = new Point();
$point3586->setLatitude(48.18320651095009);
$point3586->setLongitude(26.336132884025574);
$em->persist($point3586);


$waySet3586 = new WaySet();
$waySet3586->setPoint($point3586);
$waySet3586->setWay($way);
$em->persist($waySet3586);


$point3587 = new Point();
$point3587->setLatitude(48.184118569183084);
$point3587->setLongitude(26.33419096469879);
$em->persist($point3587);


$waySet3587 = new WaySet();
$waySet3587->setPoint($point3587);
$waySet3587->setWay($way);
$em->persist($waySet3587);


$point3588 = new Point();
$point3588->setLatitude(48.18377163129716);
$point3588->setLongitude(26.33346140384674);
$em->persist($point3588);


$waySet3588 = new WaySet();
$waySet3588->setPoint($point3588);
$waySet3588->setWay($way);
$em->persist($waySet3588);


$point3589 = new Point();
$point3589->setLatitude(48.182047637079464);
$point3589->setLongitude(26.33297860622406);
$em->persist($point3589);


$waySet3589 = new WaySet();
$waySet3589->setPoint($point3589);
$waySet3589->setWay($way);
$em->persist($waySet3589);


$point3590 = new Point();
$point3590->setLatitude(48.18012685324465);
$point3590->setLongitude(26.329357624053955);
$em->persist($point3590);


$waySet3590 = new WaySet();
$waySet3590->setPoint($point3590);
$waySet3590->setWay($way);
$em->persist($waySet3590);


$point3591 = new Point();
$point3591->setLatitude(48.17671791069265);
$point3591->setLongitude(26.328499317169186);
$em->persist($point3591);


$waySet3591 = new WaySet();
$waySet3591->setPoint($point3591);
$waySet3591->setWay($way);
$em->persist($waySet3591);


$point3592 = new Point();
$point3592->setLatitude(48.1762206797731);
$point3592->setLongitude(26.328381299972534);
$em->persist($point3592);


$waySet3592 = new WaySet();
$waySet3592->setPoint($point3592);
$waySet3592->setWay($way);
$em->persist($waySet3592);


$point3593 = new Point();
$point3593->setLatitude(48.17394909589265);
$point3593->setLongitude(26.329824328422543);
$em->persist($point3593);


$waySet3593 = new WaySet();
$waySet3593->setPoint($point3593);
$waySet3593->setWay($way);
$em->persist($waySet3593);


$point3594 = new Point();
$point3594->setLatitude(48.17088677000234);
$point3594->setLongitude(26.33170187473297);
$em->persist($point3594);


$waySet3594 = new WaySet();
$waySet3594->setPoint($point3594);
$waySet3594->setWay($way);
$em->persist($waySet3594);


$point3595 = new Point();
$point3595->setLatitude(48.168146262576904);
$point3595->setLongitude(26.333327293395996);
$em->persist($point3595);


$waySet3595 = new WaySet();
$waySet3595->setPoint($point3595);
$waySet3595->setWay($way);
$em->persist($waySet3595);


$point3596 = new Point();
$point3596->setLatitude(48.166632838661045);
$point3596->setLongitude(26.33423924446106);
$em->persist($point3596);


$waySet3596 = new WaySet();
$waySet3596->setPoint($point3596);
$waySet3596->setWay($way);
$em->persist($waySet3596);


$point3597 = new Point();
$point3597->setLatitude(48.163731090136615);
$point3597->setLongitude(26.33492052555084);
$em->persist($point3597);


$waySet3597 = new WaySet();
$waySet3597->setPoint($point3597);
$waySet3597->setWay($way);
$em->persist($waySet3597);


$point3598 = new Point();
$point3598->setLatitude(48.16168438209487);
$point3598->setLongitude(26.335387229919434);
$em->persist($point3598);


$waySet3598 = new WaySet();
$waySet3598->setPoint($point3598);
$waySet3598->setWay($way);
$em->persist($waySet3598);


$point3599 = new Point();
$point3599->setLatitude(48.15958749511301);
$point3599->setLongitude(26.334893703460693);
$em->persist($point3599);


$waySet3599 = new WaySet();
$waySet3599->setPoint($point3599);
$waySet3599->setWay($way);
$em->persist($waySet3599);


$point3600 = new Point();
$point3600->setLatitude(48.15643484673378);
$point3600->setLongitude(26.33250653743744);
$em->persist($point3600);


$waySet3600 = new WaySet();
$waySet3600->setPoint($point3600);
$waySet3600->setWay($way);
$em->persist($waySet3600);


$point3601 = new Point();
$point3601->setLatitude(48.15389397891278);
$point3601->setLongitude(26.32972776889801);
$em->persist($point3601);


$waySet3601 = new WaySet();
$waySet3601->setPoint($point3601);
$waySet3601->setWay($way);
$em->persist($waySet3601);


$point3602 = new Point();
$point3602->setLatitude(48.152831071526535);
$point3602->setLongitude(26.328574419021606);
$em->persist($point3602);


$waySet3602 = new WaySet();
$waySet3602->setPoint($point3602);
$waySet3602->setWay($way);
$em->persist($waySet3602);


$point3603 = new Point();
$point3603->setLatitude(48.15125993240543);
$point3603->setLongitude(26.32427752017975);
$em->persist($point3603);


$waySet3603 = new WaySet();
$waySet3603->setPoint($point3603);
$waySet3603->setWay($way);
$em->persist($waySet3603);


$point3604 = new Point();
$point3604->setLatitude(48.14958137299803);
$point3604->setLongitude(26.31975531578064);
$em->persist($point3604);


$waySet3604 = new WaySet();
$waySet3604->setPoint($point3604);
$waySet3604->setWay($way);
$em->persist($waySet3604);


$point3605 = new Point();
$point3605->setLatitude(48.148564905217164);
$point3605->setLongitude(26.31698727607727);
$em->persist($point3605);


$waySet3605 = new WaySet();
$waySet3605->setPoint($point3605);
$waySet3605->setWay($way);
$em->persist($waySet3605);


$point3606 = new Point();
$point3606->setLatitude(48.145801729081114);
$point3606->setLongitude(26.31303369998932);
$em->persist($point3606);


$waySet3606 = new WaySet();
$waySet3606->setPoint($point3606);
$waySet3606->setWay($way);
$em->persist($waySet3606);


$point3607 = new Point();
$point3607->setLatitude(48.14391538221206);
$point3607->setLongitude(26.310340762138363);
$em->persist($point3607);


$waySet3607 = new WaySet();
$waySet3607->setPoint($point3607);
$waySet3607->setWay($way);
$em->persist($waySet3607);


$point3608 = new Point();
$point3608->setLatitude(48.141398951997786);
$point3608->setLongitude(26.307572722434998);
$em->persist($point3608);


$waySet3608 = new WaySet();
$waySet3608->setPoint($point3608);
$waySet3608->setWay($way);
$em->persist($waySet3608);


$point3609 = new Point();
$point3609->setLatitude(48.138270245112516);
$point3609->setLongitude(26.304091215133663);
$em->persist($point3609);


$waySet3609 = new WaySet();
$waySet3609->setPoint($point3609);
$waySet3609->setWay($way);
$em->persist($waySet3609);


$point3610 = new Point();
$point3610->setLatitude(48.13683827904451);
$point3610->setLongitude(26.30249261856079);
$em->persist($point3610);


$waySet3610 = new WaySet();
$waySet3610->setPoint($point3610);
$waySet3610->setWay($way);
$em->persist($waySet3610);


$point3611 = new Point();
$point3611->setLatitude(48.133737935669366);
$point3611->setLongitude(26.298152804374695);
$em->persist($point3611);


$waySet3611 = new WaySet();
$waySet3611->setPoint($point3611);
$waySet3611->setWay($way);
$em->persist($waySet3611);


$point3612 = new Point();
$point3612->setLatitude(48.13121026548213);
$point3612->setLongitude(26.29648447036743);
$em->persist($point3612);


$waySet3612 = new WaySet();
$waySet3612->setPoint($point3612);
$waySet3612->setWay($way);
$em->persist($waySet3612);


$point3613 = new Point();
$point3613->setLatitude(48.12840318847996);
$point3613->setLongitude(26.294628381729126);
$em->persist($point3613);


$waySet3613 = new WaySet();
$waySet3613->setPoint($point3613);
$waySet3613->setWay($way);
$em->persist($waySet3613);


$point3614 = new Point();
$point3614->setLatitude(48.125506439239615);
$point3614->setLongitude(26.292638182640076);
$em->persist($point3614);


$waySet3614 = new WaySet();
$waySet3614->setPoint($point3614);
$waySet3614->setWay($way);
$em->persist($waySet3614);


$point3615 = new Point();
$point3615->setLatitude(48.1226560790404);
$point3615->setLongitude(26.290701627731323);
$em->persist($point3615);


$waySet3615 = new WaySet();
$waySet3615->setPoint($point3615);
$waySet3615->setWay($way);
$em->persist($waySet3615);


$point3616 = new Point();
$point3616->setLatitude(48.12109117835998);
$point3616->setLongitude(26.28951609134674);
$em->persist($point3616);


$waySet3616 = new WaySet();
$waySet3616->setPoint($point3616);
$waySet3616->setWay($way);
$em->persist($waySet3616);


$point3617 = new Point();
$point3617->setLatitude(48.11850200458765);
$point3617->setLongitude(26.287466883659363);
$em->persist($point3617);


$waySet3617 = new WaySet();
$waySet3617->setPoint($point3617);
$waySet3617->setWay($way);
$em->persist($waySet3617);


$point3618 = new Point();
$point3618->setLatitude(48.11532892490139);
$point3618->setLongitude(26.285964846611023);
$em->persist($point3618);


$waySet3618 = new WaySet();
$waySet3618->setPoint($point3618);
$waySet3618->setWay($way);
$em->persist($waySet3618);


$point3619 = new Point();
$point3619->setLatitude(48.11315851149098);
$point3619->setLongitude(26.28492951393127);
$em->persist($point3619);


$waySet3619 = new WaySet();
$waySet3619->setPoint($point3619);
$waySet3619->setWay($way);
$em->persist($waySet3619);


$point3620 = new Point();
$point3620->setLatitude(48.10969497217218);
$point3620->setLongitude(26.284720301628113);
$em->persist($point3620);


$waySet3620 = new WaySet();
$waySet3620->setPoint($point3620);
$waySet3620->setWay($way);
$em->persist($waySet3620);


$point3621 = new Point();
$point3621->setLatitude(48.10688671929963);
$point3621->setLongitude(26.284521818161007);
$em->persist($point3621);


$waySet3621 = new WaySet();
$waySet3621->setPoint($point3621);
$waySet3621->setWay($way);
$em->persist($waySet3621);


$point3622 = new Point();
$point3622->setLatitude(48.104364892081406);
$point3622->setLongitude(26.283668875694275);
$em->persist($point3622);


$waySet3622 = new WaySet();
$waySet3622->setPoint($point3622);
$waySet3622->setWay($way);
$em->persist($waySet3622);


$point3623 = new Point();
$point3623->setLatitude(48.10076820852545);
$point3623->setLongitude(26.28251016139984);
$em->persist($point3623);


$waySet3623 = new WaySet();
$waySet3623->setPoint($point3623);
$waySet3623->setWay($way);
$em->persist($waySet3623);


$point3624 = new Point();
$point3624->setLatitude(48.09643322560848);
$point3624->setLongitude(26.27880871295929);
$em->persist($point3624);


$waySet3624 = new WaySet();
$waySet3624->setPoint($point3624);
$waySet3624->setWay($way);
$em->persist($waySet3624);


$point3625 = new Point();
$point3625->setLatitude(48.09517207103446);
$point3625->setLongitude(26.277746558189392);
$em->persist($point3625);


$waySet3625 = new WaySet();
$waySet3625->setPoint($point3625);
$waySet3625->setWay($way);
$em->persist($waySet3625);


$point3626 = new Point();
$point3626->setLatitude(48.09391805144039);
$point3626->setLongitude(26.277478337287903);
$em->persist($point3626);


$waySet3626 = new WaySet();
$waySet3626->setPoint($point3626);
$waySet3626->setWay($way);
$em->persist($waySet3626);


$point3627 = new Point();
$point3627->setLatitude(48.09064312462539);
$point3627->setLongitude(26.27675950527191);
$em->persist($point3627);


$waySet3627 = new WaySet();
$waySet3627->setPoint($point3627);
$waySet3627->setWay($way);
$em->persist($waySet3627);


$point3628 = new Point();
$point3628->setLatitude(48.08824950133448);
$point3628->setLongitude(26.276185512542725);
$em->persist($point3628);


$waySet3628 = new WaySet();
$waySet3628->setPoint($point3628);
$waySet3628->setWay($way);
$em->persist($waySet3628);


$point3629 = new Point();
$point3629->setLatitude(48.086357456788114);
$point3629->setLongitude(26.27557396888733);
$em->persist($point3629);


$waySet3629 = new WaySet();
$waySet3629->setPoint($point3629);
$waySet3629->setWay($way);
$em->persist($waySet3629);


$point3630 = new Point();
$point3630->setLatitude(48.08331498921786);
$point3630->setLongitude(26.27382516860962);
$em->persist($point3630);


$waySet3630 = new WaySet();
$waySet3630->setPoint($point3630);
$waySet3630->setWay($way);
$em->persist($waySet3630);


$point3631 = new Point();
$point3631->setLatitude(48.081695133308365);
$point3631->setLongitude(26.272881031036377);
$em->persist($point3631);


$waySet3631 = new WaySet();
$waySet3631->setPoint($point3631);
$waySet3631->setWay($way);
$em->persist($waySet3631);


$point3632 = new Point();
$point3632->setLatitude(48.079211494107184);
$point3632->setLongitude(26.27031683921814);
$em->persist($point3632);


$waySet3632 = new WaySet();
$waySet3632->setPoint($point3632);
$waySet3632->setWay($way);
$em->persist($waySet3632);


$point3633 = new Point();
$point3633->setLatitude(48.07730119652144);
$point3633->setLongitude(26.268358826637268);
$em->persist($point3633);


$waySet3633 = new WaySet();
$waySet3633->setPoint($point3633);
$waySet3633->setWay($way);
$em->persist($waySet3633);


$point3634 = new Point();
$point3634->setLatitude(48.07519010974629);
$point3634->setLongitude(26.262715458869934);
$em->persist($point3634);


$waySet3634 = new WaySet();
$waySet3634->setPoint($point3634);
$waySet3634->setWay($way);
$em->persist($waySet3634);


$point3635 = new Point();
$point3635->setLatitude(48.073164962087596);
$point3635->setLongitude(26.257629990577698);
$em->persist($point3635);


$waySet3635 = new WaySet();
$waySet3635->setPoint($point3635);
$waySet3635->setWay($way);
$em->persist($waySet3635);


$point3636 = new Point();
$point3636->setLatitude(48.07210755243428);
$point3636->setLongitude(26.25511944293976);
$em->persist($point3636);


$waySet3636 = new WaySet();
$waySet3636->setPoint($point3636);
$waySet3636->setWay($way);
$em->persist($waySet3636);


$point3637 = new Point();
$point3637->setLatitude(48.070662988197334);
$point3637->setLongitude(26.252008080482483);
$em->persist($point3637);


$waySet3637 = new WaySet();
$waySet3637->setPoint($point3637);
$waySet3637->setWay($way);
$em->persist($waySet3637);


$point3638 = new Point();
$point3638->setLatitude(48.06921121405357);
$point3638->setLongitude(26.24886989593506);
$em->persist($point3638);


$waySet3638 = new WaySet();
$waySet3638->setPoint($point3638);
$waySet3638->setWay($way);
$em->persist($waySet3638);


$point3639 = new Point();
$point3639->setLatitude(48.06732922365318);
$point3639->setLongitude(26.24480366706848);
$em->persist($point3639);


$waySet3639 = new WaySet();
$waySet3639->setPoint($point3639);
$waySet3639->setWay($way);
$em->persist($waySet3639);


$point3640 = new Point();
$point3640->setLatitude(48.065558297460186);
$point3640->setLongitude(26.241177320480347);
$em->persist($point3640);


$waySet3640 = new WaySet();
$waySet3640->setPoint($point3640);
$waySet3640->setWay($way);
$em->persist($waySet3640);


$point3641 = new Point();
$point3641->setLatitude(48.06418883502367);
$point3641->setLongitude(26.23811960220337);
$em->persist($point3641);


$waySet3641 = new WaySet();
$waySet3641->setPoint($point3641);
$waySet3641->setWay($way);
$em->persist($waySet3641);


$point3642 = new Point();
$point3642->setLatitude(48.06245006712953);
$point3642->setLongitude(26.234251856803894);
$em->persist($point3642);


$waySet3642 = new WaySet();
$waySet3642->setPoint($point3642);
$waySet3642->setWay($way);
$em->persist($waySet3642);


$point3643 = new Point();
$point3643->setLatitude(48.06140677820074);
$point3643->setLongitude(26.231929063796997);
$em->persist($point3643);


$waySet3643 = new WaySet();
$waySet3643->setPoint($point3643);
$waySet3643->setWay($way);
$em->persist($waySet3643);


$point3644 = new Point();
$point3644->setLatitude(48.05971452576666);
$point3644->setLongitude(26.228715777397156);
$em->persist($point3644);


$waySet3644 = new WaySet();
$waySet3644->setPoint($point3644);
$waySet3644->setWay($way);
$em->persist($waySet3644);


$point3645 = new Point();
$point3645->setLatitude(48.0577210384048);
$point3645->setLongitude(26.224917769432064);
$em->persist($point3645);


$waySet3645 = new WaySet();
$waySet3645->setPoint($point3645);
$waySet3645->setWay($way);
$em->persist($waySet3645);


$point3646 = new Point();
$point3646->setLatitude(48.056785220053236);
$point3646->setLongitude(26.223109960556027);
$em->persist($point3646);


$waySet3646 = new WaySet();
$waySet3646->setPoint($point3646);
$waySet3646->setWay($way);
$em->persist($waySet3646);


$point3647 = new Point();
$point3647->setLatitude(48.05515735756572);
$point3647->setLongitude(26.21960163116455);
$em->persist($point3647);


$waySet3647 = new WaySet();
$waySet3647->setPoint($point3647);
$waySet3647->setWay($way);
$em->persist($waySet3647);


$point3648 = new Point();
$point3648->setLatitude(48.05261864991562);
$point3648->setLongitude(26.21411919593811);
$em->persist($point3648);


$waySet3648 = new WaySet();
$waySet3648->setPoint($point3648);
$waySet3648->setWay($way);
$em->persist($waySet3648);


$point3649 = new Point();
$point3649->setLatitude(48.0508902490842);
$point3649->setLongitude(26.212252378463745);
$em->persist($point3649);


$waySet3649 = new WaySet();
$waySet3649->setPoint($point3649);
$waySet3649->setWay($way);
$em->persist($waySet3649);


$point3650 = new Point();
$point3650->setLatitude(48.04768789258122);
$point3650->setLongitude(26.21140480041504);
$em->persist($point3650);


$waySet3650 = new WaySet();
$waySet3650->setPoint($point3650);
$waySet3650->setWay($way);
$em->persist($waySet3650);


$point3651 = new Point();
$point3651->setLatitude(48.044700520500115);
$point3651->setLongitude(26.21062695980072);
$em->persist($point3651);


$waySet3651 = new WaySet();
$waySet3651->setPoint($point3651);
$waySet3651->setWay($way);
$em->persist($waySet3651);


$point3652 = new Point();
$point3652->setLatitude(48.04170938855511);
$point3652->setLongitude(26.209999322891235);
$em->persist($point3652);


$waySet3652 = new WaySet();
$waySet3652->setPoint($point3652);
$waySet3652->setWay($way);
$em->persist($waySet3652);


$point3653 = new Point();
$point3653->setLatitude(48.038549502973304);
$point3653->setLongitude(26.209564805030823);
$em->persist($point3653);


$waySet3653 = new WaySet();
$waySet3653->setPoint($point3653);
$waySet3653->setWay($way);
$em->persist($waySet3653);


$point3654 = new Point();
$point3654->setLatitude(48.03425949570282);
$point3654->setLongitude(26.20910346508026);
$em->persist($point3654);


$waySet3654 = new WaySet();
$waySet3654->setPoint($point3654);
$waySet3654->setWay($way);
$em->persist($waySet3654);


$point3655 = new Point();
$point3655->setLatitude(48.033179763698826);
$point3655->setLongitude(26.209017634391785);
$em->persist($point3655);


$waySet3655 = new WaySet();
$waySet3655->setPoint($point3655);
$waySet3655->setWay($way);
$em->persist($waySet3655);


$point3656 = new Point();
$point3656->setLatitude(48.03056463794859);
$point3656->setLongitude(26.208389997482296);
$em->persist($point3656);


$waySet3656 = new WaySet();
$waySet3656->setPoint($point3656);
$waySet3656->setWay($way);
$em->persist($waySet3656);


$point3657 = new Point();
$point3657->setLatitude(48.02897540891352);
$point3657->setLongitude(26.208025217056274);
$em->persist($point3657);


$waySet3657 = new WaySet();
$waySet3657->setPoint($point3657);
$waySet3657->setWay($way);
$em->persist($waySet3657);


$point3658 = new Point();
$point3658->setLatitude(48.02643541064578);
$point3658->setLongitude(26.206984519958496);
$em->persist($point3658);


$waySet3658 = new WaySet();
$waySet3658->setPoint($point3658);
$waySet3658->setWay($way);
$em->persist($waySet3658);


$point3659 = new Point();
$point3659->setLatitude(48.02379123992595);
$point3659->setLongitude(26.2058687210083);
$em->persist($point3659);


$waySet3659 = new WaySet();
$waySet3659->setPoint($point3659);
$waySet3659->setWay($way);
$em->persist($waySet3659);


$point3660 = new Point();
$point3660->setLatitude(48.02060872704989);
$point3660->setLongitude(26.204447150230404);
$em->persist($point3660);


$waySet3660 = new WaySet();
$waySet3660->setPoint($point3660);
$waySet3660->setWay($way);
$em->persist($waySet3660);


$point3661 = new Point();
$point3661->setLatitude(48.0179714339226);
$point3661->setLongitude(26.203250885009766);
$em->persist($point3661);


$waySet3661 = new WaySet();
$waySet3661->setPoint($point3661);
$waySet3661->setWay($way);
$em->persist($waySet3661);


$point3662 = new Point();
$point3662->setLatitude(48.01591891653231);
$point3662->setLongitude(26.202322840690613);
$em->persist($point3662);


$waySet3662 = new WaySet();
$waySet3662->setPoint($point3662);
$waySet3662->setWay($way);
$em->persist($waySet3662);


$point3663 = new Point();
$point3663->setLatitude(48.01323832061492);
$point3663->setLongitude(26.201260685920715);
$em->persist($point3663);


$waySet3663 = new WaySet();
$waySet3663->setPoint($point3663);
$waySet3663->setWay($way);
$em->persist($waySet3663);


$point3664 = new Point();
$point3664->setLatitude(48.01111384039686);
$point3664->setLongitude(26.20038628578186);
$em->persist($point3664);


$waySet3664 = new WaySet();
$waySet3664->setPoint($point3664);
$waySet3664->setWay($way);
$em->persist($waySet3664);


$point3665 = new Point();
$point3665->setLatitude(48.00863038432626);
$point3665->setLongitude(26.19939386844635);
$em->persist($point3665);


$waySet3665 = new WaySet();
$waySet3665->setPoint($point3665);
$waySet3665->setWay($way);
$em->persist($waySet3665);


$point3666 = new Point();
$point3666->setLatitude(48.00771520778733);
$point3666->setLongitude(26.19902908802032);
$em->persist($point3666);


$waySet3666 = new WaySet();
$waySet3666->setPoint($point3666);
$waySet3666->setWay($way);
$em->persist($waySet3666);


$point3667 = new Point();
$point3667->setLatitude(48.00535002928283);
$point3667->setLongitude(26.196958422660828);
$em->persist($point3667);


$waySet3667 = new WaySet();
$waySet3667->setPoint($point3667);
$waySet3667->setWay($way);
$em->persist($waySet3667);


$point3668 = new Point();
$point3668->setLatitude(48.00213766325124);
$point3668->setLongitude(26.19413673877716);
$em->persist($point3668);


$waySet3668 = new WaySet();
$waySet3668->setPoint($point3668);
$waySet3668->setWay($way);
$em->persist($waySet3668);


$point3669 = new Point();
$point3669->setLatitude(47.9990220154926);
$point3669->setLongitude(26.19041383266449);
$em->persist($point3669);


$waySet3669 = new WaySet();
$waySet3669->setPoint($point3669);
$waySet3669->setWay($way);
$em->persist($waySet3669);


$point3670 = new Point();
$point3670->setLatitude(47.997862573184236);
$point3670->setLongitude(26.189024448394775);
$em->persist($point3670);


$waySet3670 = new WaySet();
$waySet3670->setPoint($point3670);
$waySet3670->setWay($way);
$em->persist($waySet3670);


$point3671 = new Point();
$point3671->setLatitude(47.995518481747425);
$point3671->setLongitude(26.18564486503601);
$em->persist($point3671);


$waySet3671 = new WaySet();
$waySet3671->setPoint($point3671);
$waySet3671->setWay($way);
$em->persist($waySet3671);


$point3672 = new Point();
$point3672->setLatitude(47.99465692061189);
$point3672->setLongitude(26.184368133544922);
$em->persist($point3672);


$waySet3672 = new WaySet();
$waySet3672->setPoint($point3672);
$waySet3672->setWay($way);
$em->persist($waySet3672);


$point3673 = new Point();
$point3673->setLatitude(47.99432665169565);
$point3673->setLongitude(26.1831933259964);
$em->persist($point3673);


$waySet3673 = new WaySet();
$waySet3673->setPoint($point3673);
$waySet3673->setWay($way);
$em->persist($waySet3673);


$point3674 = new Point();
$point3674->setLatitude(47.99052481706389);
$point3674->setLongitude(26.169551610946655);
$em->persist($point3674);


$waySet3674 = new WaySet();
$waySet3674->setPoint($point3674);
$waySet3674->setWay($way);
$em->persist($waySet3674);


$point3675 = new Point();
$point3675->setLatitude(47.9886076384131);
$point3675->setLongitude(26.16066813468933);
$em->persist($point3675);


$waySet3675 = new WaySet();
$waySet3675->setPoint($point3675);
$waySet3675->setWay($way);
$em->persist($waySet3675);


$point3676 = new Point();
$point3676->setLatitude(47.987957792034884);
$point3676->setLongitude(26.156746745109558);
$em->persist($point3676);


$waySet3676 = new WaySet();
$waySet3676->setPoint($point3676);
$waySet3676->setWay($way);
$em->persist($waySet3676);


$point3677 = new Point();
$point3677->setLatitude(47.9874802753925);
$point3677->setLongitude(26.153823137283325);
$em->persist($point3677);


$waySet3677 = new WaySet();
$waySet3677->setPoint($point3677);
$waySet3677->setWay($way);
$em->persist($waySet3677);


$point3678 = new Point();
$point3678->setLatitude(47.987193045208976);
$point3678->setLongitude(26.151811480522156);
$em->persist($point3678);


$waySet3678 = new WaySet();
$waySet3678->setPoint($point3678);
$waySet3678->setWay($way);
$em->persist($waySet3678);


$point3679 = new Point();
$point3679->setLatitude(47.986593447049586);
$point3679->setLongitude(26.147552132606506);
$em->persist($point3679);


$waySet3679 = new WaySet();
$waySet3679->setPoint($point3679);
$waySet3679->setWay($way);
$em->persist($waySet3679);


$point3680 = new Point();
$point3680->setLatitude(47.986029746619145);
$point3680->setLongitude(26.143593192100525);
$em->persist($point3680);


$waySet3680 = new WaySet();
$waySet3680->setPoint($point3680);
$waySet3680->setWay($way);
$em->persist($waySet3680);


$point3681 = new Point();
$point3681->setLatitude(47.9841913941596);
$point3681->setLongitude(26.137086153030396);
$em->persist($point3681);


$waySet3681 = new WaySet();
$waySet3681->setPoint($point3681);
$waySet3681->setWay($way);
$em->persist($waySet3681);


$point3682 = new Point();
$point3682->setLatitude(47.985437315964944);
$point3682->setLongitude(26.134393215179443);
$em->persist($point3682);


$waySet3682 = new WaySet();
$waySet3682->setPoint($point3682);
$waySet3682->setWay($way);
$em->persist($waySet3682);


$point3683 = new Point();
$point3683->setLatitude(47.98716791249186);
$point3683->setLongitude(26.130589842796326);
$em->persist($point3683);


$waySet3683 = new WaySet();
$waySet3683->setPoint($point3683);
$waySet3683->setWay($way);
$em->persist($waySet3683);


$point3684 = new Point();
$point3684->setLatitude(47.98774237154018);
$point3684->setLongitude(26.126614809036255);
$em->persist($point3684);


$waySet3684 = new WaySet();
$waySet3684->setPoint($point3684);
$waySet3684->setWay($way);
$em->persist($waySet3684);


$point3685 = new Point();
$point3685->setLatitude(47.98479102022332);
$point3685->setLongitude(26.1219048500061);
$em->persist($point3685);


$waySet3685 = new WaySet();
$waySet3685->setPoint($point3685);
$waySet3685->setWay($way);
$em->persist($waySet3685);


$point3686 = new Point();
$point3686->setLatitude(47.982227300733705);
$point3686->setLongitude(26.117801070213314);
$em->persist($point3686);


$waySet3686 = new WaySet();
$waySet3686->setPoint($point3686);
$waySet3686->setWay($way);
$em->persist($waySet3686);


$point3687 = new Point();
$point3687->setLatitude(47.98177486642967);
$point3687->setLongitude(26.116122007369995);
$em->persist($point3687);


$waySet3687 = new WaySet();
$waySet3687->setPoint($point3687);
$waySet3687->setWay($way);
$em->persist($waySet3687);


$point3688 = new Point();
$point3688->setLatitude(47.98034931336733);
$point3688->setLongitude(26.109641790390015);
$em->persist($point3688);


$waySet3688 = new WaySet();
$waySet3688->setPoint($point3688);
$waySet3688->setWay($way);
$em->persist($waySet3688);


$point3689 = new Point();
$point3689->setLatitude(47.978683125891294);
$point3689->setLongitude(26.103091835975647);
$em->persist($point3689);


$waySet3689 = new WaySet();
$waySet3689->setPoint($point3689);
$waySet3689->setWay($way);
$em->persist($waySet3689);


$point3690 = new Point();
$point3690->setLatitude(47.9783922557542);
$point3690->setLongitude(26.100339889526367);
$em->persist($point3690);


$waySet3690 = new WaySet();
$waySet3690->setPoint($point3690);
$waySet3690->setWay($way);
$em->persist($waySet3690);


$point3691 = new Point();
$point3691->setLatitude(47.97965268117959);
$point3691->setLongitude(26.095651388168335);
$em->persist($point3691);


$waySet3691 = new WaySet();
$waySet3691->setPoint($point3691);
$waySet3691->setWay($way);
$em->persist($waySet3691);


$point3692 = new Point();
$point3692->setLatitude(47.980927439127626);
$point3692->setLongitude(26.090952157974243);
$em->persist($point3692);


$waySet3692 = new WaySet();
$waySet3692->setPoint($point3692);
$waySet3692->setWay($way);
$em->persist($waySet3692);


$point3693 = new Point();
$point3693->setLatitude(47.982733591562926);
$point3693->setLongitude(26.084241271018982);
$em->persist($point3693);


$waySet3693 = new WaySet();
$waySet3693->setPoint($point3693);
$waySet3693->setWay($way);
$em->persist($waySet3693);


$point3694 = new Point();
$point3694->setLatitude(47.984381695401424);
$point3694->setLongitude(26.077133417129517);
$em->persist($point3694);


$waySet3694 = new WaySet();
$waySet3694->setPoint($point3694);
$waySet3694->setWay($way);
$em->persist($waySet3694);


$point3695 = new Point();
$point3695->setLatitude(47.98585381337712);
$point3695->setLongitude(26.0708087682724);
$em->persist($point3695);


$waySet3695 = new WaySet();
$waySet3695->setPoint($point3695);
$waySet3695->setWay($way);
$em->persist($waySet3695);


$point3696 = new Point();
$point3696->setLatitude(47.987631070598965);
$point3696->setLongitude(26.063116192817688);
$em->persist($point3696);


$waySet3696 = new WaySet();
$waySet3696->setPoint($point3696);
$waySet3696->setWay($way);
$em->persist($waySet3696);


$point3697 = new Point();
$point3697->setLatitude(47.98811935681583);
$point3697->setLongitude(26.0610294342041);
$em->persist($point3697);


$waySet3697 = new WaySet();
$waySet3697->setPoint($point3697);
$waySet3697->setWay($way);
$em->persist($waySet3697);


$point3698 = new Point();
$point3698->setLatitude(47.987250491373544);
$point3698->setLongitude(26.055176854133606);
$em->persist($point3698);


$waySet3698 = new WaySet();
$waySet3698->setPoint($point3698);
$waySet3698->setWay($way);
$em->persist($waySet3698);


$point3699 = new Point();
$point3699->setLatitude(47.98629185013286);
$point3699->setLongitude(26.048771739006042);
$em->persist($point3699);


$waySet3699 = new WaySet();
$waySet3699->setPoint($point3699);
$waySet3699->setWay($way);
$em->persist($waySet3699);


$point3700 = new Point();
$point3700->setLatitude(47.98540141085825);
$point3700->setLongitude(26.042779684066772);
$em->persist($point3700);


$waySet3700 = new WaySet();
$waySet3700->setPoint($point3700);
$waySet3700->setWay($way);
$em->persist($waySet3700);


$point3701 = new Point();
$point3701->setLatitude(47.98448941277453);
$point3701->setLongitude(26.036771535873413);
$em->persist($point3701);


$waySet3701 = new WaySet();
$waySet3701->setPoint($point3701);
$waySet3701->setWay($way);
$em->persist($waySet3701);


$point3702 = new Point();
$point3702->setLatitude(47.9835235389669);
$point3702->setLongitude(26.030446887016296);
$em->persist($point3702);


$waySet3702 = new WaySet();
$waySet3702->setPoint($point3702);
$waySet3702->setWay($way);
$em->persist($waySet3702);


$point3703 = new Point();
$point3703->setLatitude(47.98255764708596);
$point3703->setLongitude(26.02410614490509);
$em->persist($point3703);


$waySet3703 = new WaySet();
$waySet3703->setPoint($point3703);
$waySet3703->setWay($way);
$em->persist($waySet3703);


$point3704 = new Point();
$point3704->setLatitude(47.98164200798403);
$point3704->setLongitude(26.01813018321991);
$em->persist($point3704);


$waySet3704 = new WaySet();
$waySet3704->setPoint($point3704);
$waySet3704->setWay($way);
$em->persist($waySet3704);


$point3705 = new Point();
$point3705->setLatitude(47.9806222182597);
$point3705->setLongitude(26.01160705089569);
$em->persist($point3705);


$waySet3705 = new WaySet();
$waySet3705->setPoint($point3705);
$waySet3705->setWay($way);
$em->persist($waySet3705);


$point3706 = new Point();
$point3706->setLatitude(47.979458771578585);
$point3706->setLongitude(26.004354357719418);
$em->persist($point3706);


$waySet3706 = new WaySet();
$waySet3706->setPoint($point3706);
$waySet3706->setWay($way);
$em->persist($waySet3706);


$point3707 = new Point();
$point3707->setLatitude(47.97833120872724);
$point3707->setLongitude(25.997332334518433);
$em->persist($point3707);


$waySet3707 = new WaySet();
$waySet3707->setPoint($point3707);
$waySet3707->setWay($way);
$em->persist($waySet3707);


$point3708 = new Point();
$point3708->setLatitude(47.9772682606875);
$point3708->setLongitude(25.98990261554718);
$em->persist($point3708);


$waySet3708 = new WaySet();
$waySet3708->setPoint($point3708);
$waySet3708->setWay($way);
$em->persist($waySet3708);


$point3709 = new Point();
$point3709->setLatitude(47.97633457205858);
$point3709->setLongitude(25.98337948322296);
$em->persist($point3709);


$waySet3709 = new WaySet();
$waySet3709->setPoint($point3709);
$waySet3709->setWay($way);
$em->persist($waySet3709);


$point3710 = new Point();
$point3710->setLatitude(47.97579589786141);
$point3710->setLongitude(25.979619026184082);
$em->persist($point3710);


$waySet3710 = new WaySet();
$waySet3710->setPoint($point3710);
$waySet3710->setWay($way);
$em->persist($waySet3710);


$point3711 = new Point();
$point3711->setLatitude(47.97470775884127);
$point3711->setLongitude(25.973278284072872);
$em->persist($point3711);


$waySet3711 = new WaySet();
$waySet3711->setPoint($point3711);
$waySet3711->setWay($way);
$em->persist($waySet3711);


$point3712 = new Point();
$point3712->setLatitude(47.97400386792077);
$point3712->setLongitude(25.969265699386597);
$em->persist($point3712);


$waySet3712 = new WaySet();
$waySet3712->setPoint($point3712);
$waySet3712->setWay($way);
$em->persist($waySet3712);


$point3713 = new Point();
$point3713->setLatitude(47.97277921850127);
$point3713->setLongitude(25.962570905685425);
$em->persist($point3713);


$waySet3713 = new WaySet();
$waySet3713->setPoint($point3713);
$waySet3713->setWay($way);
$em->persist($waySet3713);


$point3714 = new Point();
$point3714->setLatitude(47.97136419151012);
$point3714->setLongitude(25.954701304435726);
$em->persist($point3714);


$waySet3714 = new WaySet();
$waySet3714->setPoint($point3714);
$waySet3714->setWay($way);
$em->persist($waySet3714);


$point3715 = new Point();
$point3715->setLatitude(47.97091166200539);
$point3715->setLongitude(25.9521746635437);
$em->persist($point3715);


$waySet3715 = new WaySet();
$waySet3715->setPoint($point3715);
$waySet3715->setWay($way);
$em->persist($waySet3715);


$point3716 = new Point();
$point3716->setLatitude(47.97208607560675);
$point3716->setLongitude(25.94688534736633);
$em->persist($point3716);


$waySet3716 = new WaySet();
$waySet3716->setPoint($point3716);
$waySet3716->setWay($way);
$em->persist($waySet3716);


$point3717 = new Point();
$point3717->setLatitude(47.973361020380686);
$point3717->setLongitude(25.94398319721222);
$em->persist($point3717);


$waySet3717 = new WaySet();
$waySet3717->setPoint($point3717);
$waySet3717->setWay($way);
$em->persist($waySet3717);


$point3718 = new Point();
$point3718->setLatitude(47.975885677284545);
$point3718->setLongitude(25.940576791763306);
$em->persist($point3718);


$waySet3718 = new WaySet();
$waySet3718->setPoint($point3718);
$waySet3718->setWay($way);
$em->persist($waySet3718);


$point3719 = new Point();
$point3719->setLatitude(47.97685887621341);
$point3719->setLongitude(25.93118369579315);
$em->persist($point3719);


$waySet3719 = new WaySet();
$waySet3719->setPoint($point3719);
$waySet3719->setWay($way);
$em->persist($waySet3719);


$point3720 = new Point();
$point3720->setLatitude(47.97732930897131);
$point3720->setLongitude(25.924274325370785);
$em->persist($point3720);


$waySet3720 = new WaySet();
$waySet3720->setPoint($point3720);
$waySet3720->setWay($way);
$em->persist($waySet3720);


$point3721 = new Point();
$point3721->setLatitude(47.977519635510426);
$point3721->setLongitude(25.914993882179257);
$em->persist($point3721);


$waySet3721 = new WaySet();
$waySet3721->setPoint($point3721);
$waySet3721->setWay($way);
$em->persist($waySet3721);






$em->flush();
    }
    
    public function getOrder()
    {
        return 1;
    }
}