    $( function() {
		$('.clouds1').bgscroll({scrollSpeed:30, direction:'d'});
	});

var imgs = ["afterloss.jpg","angel.gif","balloonssky.jpg","bigman.jpg","boat.png","boatsky.png","brothers.png","carphoto.jpg","darkheart.gif","dayilost.jpg","eternity.jpg","facebookuser.png","finalbreathe.gif","foryou.gif","grief.jpg","griefshutoff.jpg","handfeather.gif","jesaisque.png","jesuisriche.png","jewels.gif","manques.gif","monfrere.jpg","owl.gif","picmix.gif","redcandle.gif","revelation.jpg","rose.gif","sisters.png","tearsyears.jpg","theyaresisters.png","boatedge.jpg","schoolphoto1.png","schoolphoto2.png","lake.jpg","dolphins1.jpg","dolphins2.jpg"]

function loadImg(img, callback){
    var loadedimg = new Image();
    loadedimg.src = "http://www.galeriegalerieweb.com/wp-content/themes/galeriegalerie/conan-lai/img/" + img;
    callback(img)
}

function makeDiv(pick){
var blend = "normal"
if (pick == "afterloss.jpg" || pick == "angel.gif" || pick == "darkheart.gif" || pick == "foryou.gif" || pick == "handfeather.gif" || pick == "jesaisque.png" || 
pick == "redcandle.gif" || pick == "rose.gif" || pick == "griefshutoff.jpg" || pick == "jewels.gif" || pick == "jesuisriche.png" || pick == "eternity.jpg" || pick == "revelation.jpg"){
    var blend = "screen"
}
$newdiv = $('<div class="imgdiv">').css({
});
var markup = '<img src="http://www.galeriegalerieweb.com/wp-content/themes/galeriegalerie/conan-lai/img/' + pick + '">'
$newdiv.html(markup)

var posx = ((Math.random() * ($(document).width()))-200).toFixed();
var posy = ((Math.random() * ($(document).height()))-200).toFixed();
var opac = (Math.min(10,(Math.floor((Math.random() * 10) + 5))))/10

$newdiv.css({
    'opacity':opac,
    'position':'absolute',
    'left':posx+'px',
    'top':posy+'px',
    'display':'none'
    ,'mix-blend-mode': blend
    
})

$newdiv.appendTo( 'body' );
$newdiv.fadeIn(1500);
};

var quotes = ["I can't help but think back to when we were kids. You're supposed to be one of my bridesmaids. Me, you, jessica, and dana are supposed to sit up all night the night before and talk and giggle.","I really wish you were here to go through graduation with us.","Wish you were here, but I know you’re in heaven watching…","even though you are not here physically, you are with us all in spirit…","i wish you could be at your graduation recieving your diploma tomoro night :/ but I know you will be looking down at us.","Did you see when Aaron pulled away from Grandma when she tried to kiss him?","hope ur well up there","I kno ur livin it up up there!!!","having a grand time, even though we’re celebrating in different places from now on.","I hope you had a great Christmas in the heavens","How was your Christmas? Mine was ok … got clothes and stuff what about you?? I’m going to see you tomorrow! Did u get my text message?","I promise not to let another year go by before I get in touch again","I know one day we’ll associate with eachother again!","I introduced my girlfriend to you through your memorial service picture that I have always kept in my room…","I’LL SEE YOU WHEN CHRIST DECIDES FOR US TO MEET AGAIN…","See you when I get to heven","Facebook tells me that I need to reconnect with you, I wish it was as easy as picking up a phone or typing these few words. I do miss you and think about you often!","Hope you are having a good time up there… miss you forever… ","I remember how great you were at ice hockey. Whenever I play, I know you are watching over me. We sure are going to miss you...","I love you, and thinking about you all the time. We will never forget you.","Thanks to your death I’ve gained a new appreciation for life. I tried to live every day to the fullest, like you always did. Sometimes it still hurts to think of you, and I know I will always miss you, but I am still glad that I was fortunate enough to be in your life.","Every day has been terrible since you've been gone. I hold the memories of your smiles dear and I try to make my own like I know you would want me to, but I still can’t think of you without the pain.","The years may keep passing by and the void that your absences has brought to those who love you may never be filled but I know that with the grace of God and your guidance they will make it passed another year without you and you will continue to watch over them all","Still in total disbelief. I hope you see how many people love and miss you. Such beautiful tributes to you today. You truly are irreplaceable.","we didn't always get along but overall you were a great friend and still are.","god needed another angel, fly high and stay strong","Wish we could go back to New Years 2009 and stay frozen in time","Missing spending time with you at the cottage...still feels like you will be there raking, building and making it so nice for us every time we get there. Keep sending your loving presence our way, we feel it! <3","En cette journee toute particuliere jai un immense vide ... Tu aurais eu 22ans aujourdhui ... Je taime ..","que la terre te soit légère","quelq un de tres bien qui rejoint les anges.....repose en paix.","Mon amour tu manque beaucoup ton visage me hante chaque jour qui passe, je te pleure tous les jours même quand je sourie 😞💔","Repose en paix petit ange tu est parti troo tot tu avais encore la vie devan toi mai on te la prise surveille sur ta famille ki t aime au plus pronfond d eux","Ton sourire , Ta joie de vivre et toute les conneries qu'on pouvais dire ensemble me manque de plus en plus .... Jaimerais tant te revoir au moins une derniere fois .....","Plus les jours passent plus je me rencontre que tu es partie ... Ca fais de plus en plus mal ...","Je viens de moins en moins te parler ici parce que finalement la douleur est toujours aussi forte car tout je réalise que tu es vraiment parti . De retour sur Nantes je m'en rend réellement compte . Tu me manque 🎀💕","Nous ne sommes que des mirages... nous vivons dans les yeux des autres, dans les souvenirs, les mémoires des autres. De notre vivant autant qu'après notre mort.","C'est ainsi que du bout des doigts chante la mélancolie de nos coeurs.","....Il est le rêve vivant de nos tête....","....Im going to see Usher tonight, living one of our childhood dreams!! lol I know you will be there with me xox  ps. Remind me of our dance we made up to 'Yeah' please. Missing you always.","Gone, but never forgotten. <br>👼👼👼👼👼👼","I wanted to call you today to say I love you, but your old number is no longer in service.I tried the operator she said sorry she has no number for you. I came by your house' but you don't live there anymore. The post office has no forwarding address. I guess heaven is just too far away."]
var origquotes = ["I can't help but think back to when we were kids. You're supposed to be one of my bridesmaids. Me, you, jessica, and dana are supposed to sit up all night the night before and talk and giggle.","I really wish you were here to go through graduation with us.","Wish you were here, but I know you’re in heaven watching…","even though you are not here physically, you are with us all in spirit…","i wish you could be at your graduation recieving your diploma tomoro night :/ but I know you will be looking down at us.","Did you see when Aaron pulled away from Grandma when she tried to kiss him?","hope ur well up there","I kno ur livin it up up there!!!","having a grand time, even though we’re celebrating in different places from now on.","I hope you had a great Christmas in the heavens","How was your Christmas? Mine was ok … got clothes and stuff what about you?? I’m going to see you tomorrow! Did u get my text message?","I promise not to let another year go by before I get in touch again","I know one day we’ll associate with eachother again!","I introduced my girlfriend to you through your memorial service picture that I have always kept in my room…","I’LL SEE YOU WHEN CHRIST DECIDES FOR US TO MEET AGAIN…","See you when I get to heven","Facebook tells me that I need to reconnect with you, I wish it was as easy as picking up a phone or typing these few words. I do miss you and think about you often!","Hope you are having a good time up there… miss you forever… ","I remember how great you were at ice hockey. Whenever I play, I know you are watching over me. We sure are going to miss you...","I love you, and thinking about you all the time. We will never forget you.","Thanks to your death I’ve gained a new appreciation for life. I tried to live every day to the fullest, like you always did. Sometimes it still hurts to think of you, and I know I will always miss you, but I am still glad that I was fortunate enough to be in your life.","Every day has been terrible since you've been gone. I hold the memories of your smiles dear and I try to make my own like I know you would want me to, but I still can’t think of you without the pain.","The years may keep passing by and the void that your absences has brought to those who love you may never be filled but I know that with the grace of God and your guidance they will make it passed another year without you and you will continue to watch over them all","Still in total disbelief. I hope you see how many people love and miss you. Such beautiful tributes to you today. You truly are irreplaceable.","we didn't always get along but overall you were a great friend and still are.","god needed another angel, fly high and stay strong","Wish we could go back to New Years 2009 and stay frozen in time","Missing spending time with you at the cottage...still feels like you will be there raking, building and making it so nice for us every time we get there. Keep sending your loving presence our way, we feel it! <3","En cette journee toute particuliere jai un immense vide ... Tu aurais eu 22ans aujourdhui ... Je taime ..","que la terre te soit légère","quelq un de tres bien qui rejoint les anges.....repose en paix.","Mon amour tu manque beaucoup ton visage me hante chaque jour qui passe, je te pleure tous les jours même quand je sourie 😞💔","Repose en paix petit ange tu est parti troo tot tu avais encore la vie devan toi mai on te la prise surveille sur ta famille ki t aime au plus pronfond d eux","Ton sourire , Ta joie de vivre et toute les conneries qu'on pouvais dire ensemble me manque de plus en plus .... Jaimerais tant te revoir au moins une derniere fois .....","Plus les jours passent plus je me rencontre que tu es partie ... Ca fais de plus en plus mal ...","Je viens de moins en moins te parler ici parce que finalement la douleur est toujours aussi forte car tout je réalise que tu es vraiment parti . De retour sur Nantes je m'en rend réellement compte . Tu me manque 🎀💕","Nous ne sommes que des mirages... nous vivons dans les yeux des autres, dans les souvenirs, les mémoires des autres. De notre vivant autant qu'après notre mort.","C'est ainsi que du bout des doigts chante la mélancolie de nos coeurs.","....Il est le rêve vivant de nos tête....","....Im going to see Usher tonight, living one of our childhood dreams!! lol I know you will be there with me xox  ps. Remind me of our dance we made up to 'Yeah' please. Missing you always.","Gone, but never forgotten. <br>👼👼👼👼👼👼","I wanted to call you today to say I love you, but your old number is no longer in service.I tried the operator she said sorry she has no number for you. I came by your house' but you don't live there anymore. The post office has no forwarding address. I guess heaven is just too far away."]

function pickText(){
    $('#quote').fadeOut("slow")
    $('.imgdiv').fadeOut("slow", function(){$(this).remove()})
    setTimeout(function(){ 
    var pickFiveImages = _.sample(imgs, 4);
    pickFiveImages.forEach(function (element) {
        loadImg(element, makeDiv);
    });
    var pick = Math.floor(Math.random() * quotes.length)
    var text = quotes[pick]
    if (text.length >= 120) {
        $('#quote').css("font-size","2.8em")
    }
    else {
        $('#quote').css("font-size","4.3em")
    }
    quotes.splice(pick,1)
    $('#quote').html(text)
    $('#quote').fadeIn("slow")
    console.log(quotes)
    if (quotes.length == 0){
        quotes = origquotes.slice(0)
    }
     }, 1000);  
}


pickText();
setInterval(function(){ pickText(); }, 10000);

$('html').keydown(function(event){
       if (event.which == 68){
           $('body').css("background","#76c4f1");
           $('#quote').css("color","#000000");
           $('#quote').css("text-shadow","2px 2px 6px #c3bfbf;");
       }
       if (event.which == 83){
           $('body').css("background","linear-gradient(to bottom, #BE4405, #F6C60C)");
           $('#quote').css("color","#000000");
           $('#quote').css("text-shadow","2px 2px 6px #c3bfbf;");
       }
       if (event.which == 78){
           $('body').css("background","#060d29");
           $('#quote').css("color","#f9fb3e");
           $('#quote').css("text-shadow","2px 2px 6px #6e6e6e;");
       } 
    });
