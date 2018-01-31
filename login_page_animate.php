
<?php ?>
<script src="Snap.svg-0.5.1/dist/snap.svg-min.js"></script>

<body>
<script>
 var s = Snap(750,750),
 //dots upwards location
 circle = s.circle(410,90,5).attr({fill:"#fff",opacity:0}),
 circle1 = s.circle(410,115,5).attr({fill:"#fff",opacity:0}),
 circle2 = s.circle(410,140,5).attr({fill:"#fff",opacity:0}),
 circle3 = s.circle(410,165,5).attr({fill:"#fff",opacity:0}),
 circle4 = s.circle(410,190,5).attr({fill:"#fff",opacity:0}),
 circle5 = s.circle(410,215,5).attr({fill:"#fff",opacity:0}),
 circle6 = s.circle(410,240,5).attr({fill:"#fff",opacity:0}),
 circle7 = s.circle(435,90,5).attr({fill:"#fff",opacity:0}),
 circle8 = s.circle(460,90,5).attr({fill:"#fff",opacity:0}),
 circle9 = s.circle(485,90,5).attr({fill:"#fff",opacity:0}),
 circle10 = s.circle(510,90,5).attr({fill:"#fff",opacity:0}),
 circle11 = s.circle(535,90,5).attr({fill:"#fff",opacity:0}),
circle12 = s.circle(560,90,5).attr({fill:"#fff",opacity:0}),
duration = 100,
props = {fill:"#465c8b",opacity:1};

//calling dots upwards one by one
var anim  = function() {  circle.animate(props,duration,mina.linear,anim7);}
var anim1 = function() { circle1.animate(props,duration,mina.linear,anim);}
var anim2 = function() { circle2.animate(props,duration,mina.linear,anim1);}
var anim3 = function() { circle3.animate(props,duration,mina.linear,anim2);}
var anim4 = function() { circle4.animate(props,duration,mina.linear,anim3);}
var anim5 = function() { circle5.animate(props,duration,mina.linear,anim4);}
var anim6 = function() { circle6.animate(props,duration,mina.linear,anim5);}
var anim7 = function() { circle7.animate(props,duration,mina.linear,anim8);}
var anim8 = function() { circle8.animate(props,duration,mina.linear,anim9);}
var anim9 = function() { circle9.animate(props,duration,mina.linear,anim10);}
var anim10= function() { circle10.animate(props,duration,mina.linear,anim11);}
var anim11= function() { circle11.animate(props,duration,mina.linear,anim12);}
var anim12= function() { circle12.animate(props,duration,mina.linear,school1);};


//cloud image
var cloud = s.image("cloud.png", 300 , 260, 200, 120).attr({opacity:0,width:100,height:65});
var ecloud =function () {cloud.animate({opacity:1,width:220,height:120},100,mina.linear,anim6);};
ecloud();


//school image
var school  =s.image("School-Icon.png", 565,40, 100,100);
school.attr({opacity:0,width:80,height:80});
var school1 =function() {school.animate({opacity:1,width:100,height:100},100,mina.linear,text1);};

//dots downwards location
 circle21  = s.circle(410,400,5).attr({fill:"#fff",opacity:0}),
 circle22 = s.circle(410,425,5).attr({fill:"#fff",opacity:0}),
 circle23 = s.circle(410,450,5).attr({fill:"#fff",opacity:0}),
 circle24 = s.circle(410,475,5).attr({fill:"#fff",opacity:0}),
 circle25 = s.circle(410,500,5).attr({fill:"#fff",opacity:0}),
 circle26 = s.circle(410,525,5).attr({fill:"#fff",opacity:0}),
 
 circle27 = s.circle(410,550,5).attr({fill:"#fff",opacity:0}),
 circle28 = s.circle(435,550,5).attr({fill:"#fff",opacity:0}),
 circle29 = s.circle(460,550,5).attr({fill:"#fff",opacity:0}),
 circle20 = s.circle(485,550,5).attr({fill:"#fff",opacity:0}),
 circle211 = s.circle(510,550,5).attr({fill:"#fff",opacity:0}),
 circle212 = s.circle(535,550,5).attr({fill:"#fff",opacity:0}),
 circle213 = s.circle(560,550,5).attr({fill:"#fff",opacity:0}),
duration = 100,
propps = {fill:"#465c8b",opacity:1}; 



//dots downwards calling function one by one
var anim21  = function() {circle21.animate(propps,duration,mina.linear,anim22);}
var anim22 = function() { circle22.animate(propps,duration,mina.linear,anim23);}
var anim23 = function() { circle23.animate(propps,duration,mina.linear,anim24);}
var anim24 = function() { circle24.animate(propps,duration,mina.linear,anim25);}
var anim25 = function() { circle25.animate(propps,duration,mina.linear,anim26);}
var anim26 = function() { circle26.animate(propps,duration,mina.linear,anim27);}
var anim27 = function() { circle27.animate(propps,duration,mina.linear,anim28);}

var anim28 = function() { circle28.animate(propps,duration,mina.linear,anim29);}
var anim29 = function() { circle29.animate(propps,duration,mina.linear,anim20);}
var anim20 = function() { circle20.animate(propps,duration,mina.linear,anim211);}
var anim211= function() { circle211.animate(propps,duration,mina.linear,anim212);}
var anim212= function() { circle212.animate(propps,duration,mina.linear,anim213);}
var anim213= function() { circle213.animate(propps,duration,mina.linear,mgmt);};

//student picture
var student = s.image("student.png",580,495,200,120).attr({opacity:0,width:50,height:50});
var mgmt =function () {student.animate({opacity:1,width:90,height:90},100,mina.linear,text2);};

var text1 =function(){ var text = s.text(535, 150, "Campus management").attr({'font-size':20,'fill':'#465c8b'}); anim21();};
  
var text2 = function(){var text = s.text(550, 600, "Student management").attr({'font-size':20,'fill':'#465c8b'}); anim31();};

//dots going left one by one
 circle31 = s.circle(385,165,5).attr({fill:"#fff",opacity:0}),
 circle32 = s.circle(360,165,5).attr({fill:"#fff",opacity:0}),
 circle33 = s.circle(335,165,5).attr({fill:"#fff",opacity:0}),
 circle34 = s.circle(310,165,5).attr({fill:"#fff",opacity:0}),
 circle35 = s.circle(285,165,5).attr({fill:"#fff",opacity:0}),
 circle36 = s.circle(260,165,5).attr({fill:"#fff",opacity:0}),
duration = 100,
props = {fill:"#465c8b",opacity:1};

var anim31  = function() {  circle31.animate(props,duration,mina.linear,anim32);}
var anim32 = function() { circle32.animate(props,duration,mina.linear,anim33);}
var anim33 = function() { circle33.animate(props,duration,mina.linear,anim34);}
var anim34 = function() { circle34.animate(props,duration,mina.linear,anim35);}
var anim35 = function() { circle35.animate(props,duration,mina.linear,anim36);}
var anim36 = function() { circle36.animate(props,duration,mina.linear,analyze);}


// analysis image
var analysis = s.image("analytics.jpg",150,110,200,120).attr({opacity:0,width:50,height:50});
var analyze =function () {analysis.animate({opacity:1,width:90,height:90},100,mina.linear,text4);};
//text
var text4 = function(){var text = s.text(135,225, "Data Analytics").attr({'font-size':20,'fill':'#465c8b'}); anim41();};
  
  
 //dots going left down one by one
 circle41 = s.circle(385,475,5).attr({fill:"#fff",opacity:0}),
 circle42 = s.circle(360,475,5).attr({fill:"#fff",opacity:0}),
 circle43 = s.circle(335,475,5).attr({fill:"#fff",opacity:0}),
 circle44 = s.circle(310,475,5).attr({fill:"#fff",opacity:0}),
 circle45 = s.circle(285,475,5).attr({fill:"#fff",opacity:0}),
 circle46 = s.circle(260,475,5).attr({fill:"#fff",opacity:0}),
duration = 100,
props = {fill:"#465c8b",opacity:1};

var anim41  = function() {circle41.animate(props,duration,mina.linear,anim42);}
var anim42 = function() { circle42.animate(props,duration,mina.linear,anim43);}
var anim43 = function() { circle43.animate(props,duration,mina.linear,anim44);}
var anim44 = function() { circle44.animate(props,duration,mina.linear,anim45);}
var anim45 = function() { circle45.animate(props,duration,mina.linear,anim46);}
var anim46 = function() { circle46.animate(props,duration,mina.linear,teacher1);}

//teacher image
var teacher = s.image("teacher.png",150,430,200,120).attr({opacity:0,width:50,height:50});
var teacher1 =function () {teacher.animate({opacity:1,width:90,height:90},100,mina.linear,text3);};
//teacher text
var text3 = function(){var text = s.text(120, 530, "Teacher management").attr({'font-size':20,'fill':'#465c8b'});anim31();};
</script>
</body>


	


