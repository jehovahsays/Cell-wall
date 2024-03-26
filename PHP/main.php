<?php
header_remove( 'X-Powered-By' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Vary: Accept-Encoding' );
header( 'Cache-control: no-store, no-cache, private, must-revalidate, max-age=0' );
header( 'Expires: no-cache' );
header( 'Pragma: no-cache' );
header( 'viewport: width=device-width' );
header( 'Accept-Language: en-US,en;q=0.5' );
header( 'Connection: Keep-alive' );
require_once ('../CSS/index.css');
require_once ('../HTML/main.html');
require_once ('../ipconfig/ipconfig.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Easily add speech recognition to your site</title>

  <script src="annyang.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <script>
  "use strict";

  // first we make sure annyang started succesfully
  if (annyang) {

    // define the functions our commands will run.
    var hello = function() {
      $("#hello").slideDown("slow");
      scrollTo("#section_hello");
    };

    var showFlickr = function(tag) {
      $('#flickrGallery').show();
      $('#flickrLoader p').text('Searching for '+tag).fadeIn('fast');
      var url = '//api.flickr.com/services/rest/?method=flickr.photos.search&api_key=a828a6571bb4f0ff8890f7a386d61975&sort=interestingness-desc&per_page=9&format=json&callback=jsonFlickrApi&tags='+tag;
      $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonFlickrApi',
        contentType: "application/json",
        dataType: 'jsonp'
      });
      scrollTo("#section_image_search");
    };

    var jsonFlickrApi = function(results) {
      $('#flickrLoader p').fadeOut('slow');
      var photos = results.photos.photo;
      $.each(photos, function(index, photo) {
        $(document.createElement("img"))
          .attr({ src: '//farm'+photo.farm+'.staticflickr.com/'+photo.server+'/'+photo.id+'_'+photo.secret+'_s.jpg' })
          .addClass("flickrGallery")
          .appendTo(flickrGallery);
      });
    };

    var showTPS = function(type) {
      $('#tpsreport').show().animate({
        bottom: '-100px'
      }).delay('2000').animate({
        bottom: '-500px'
      });
    };

    var getStarted = function() {
      window.location.href = 'https://github.com/TalAter/annyang';
    }

    // define our commands.
    // * The key is the phrase you want your users to say.
    // * The value is the action to do.
    //   You can pass a function, a function name (as a string), or write your function as part of the commands object.
    var commands = {
      'hello (there)':        hello,
      'show me *search':      showFlickr,
      'show :type report':    showTPS,
      'let\'s get started':   getStarted,
    };

    // OPTIONAL: activate debug mode for detailed logging in the console
    annyang.debug();

    // Add voice commands to respond to
    annyang.addCommands(commands);

    // OPTIONAL: Set a language for speech recognition (defaults to English)
    // For a full list of language codes, see the documentation:
    // https://github.com/TalAter/annyang/blob/master/docs/FAQ.md#what-languages-are-supported
    annyang.setLanguage('en');

    // Start listening. You can call this here, or attach this call to an event, button, etc.
    annyang.start();
  } else {
    $(document).ready(function() {
      $('#unsupported').fadeIn('fast');
    });
  }

  var scrollTo = function(identifier, speed) {
    $('html, body').animate({
        scrollTop: $(identifier).offset().top
    }, speed || 1000);
  }
  </script>
  <link rel="stylesheet" href="css/main.min.css" />

  
  </head>
  
  
<body>
  <section id="section_header">
    <h1><em>annyang!</em> SpeechRecognition that just works</h1>
    <h2>annyang is a tiny javascript library that lets your visitors control your site with voice commands.</h2>
    <h2>annyang supports multiple languages, has no dependencies, weighs just 2kb and is free to use.</h2>
    <img src="images/icon_user.png">
    <img src="images/icon_speech.png">
    <img src="images/icon_js.png">
  </section>
  <section id="section_hello">
    <p><em>Go ahead, try it&hellip;</em></p>
    <p class="voice_instructions">Say "Hello!"</p>
    <p id="hello" class="hidden">Annyang!</p>
  </section>
  
  
  <section id="section_image_search">
    <p><em>Let's try something more interesting&hellip;</em></p>
    <p class="voice_instructions">Say "Show me cute kittens!"</p>
    <p class="voice_instructions">Say "Show me Arches National Park!"</p>
    <p class="voice_instructions">Now go wild. Say "Show me&hellip;" and make your demands!</p>
    <div id="flickrLoader"><p></p></div>
    <div id="flickrGallery" class="hidden"></div>
  </section>
  
  
  <section id="section_biz_use">
    <p><em>That's cool, but in the real world it's not all kittens and hello world.</em></p>
    <p class="voice_instructions">No problem, say "Show TPS report"</p>
    <img src="images/tpscover.jpg" id="tpsreport" class="hidden">
  </section>
  
  
  <section id="section_code_sample_1">
    <p><em>How did you do that?</em></p>
    <p>Simple. Here is all the code needed to achieve that:</p>
    <pre><code>&lt;script src="<a href="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js">//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js</a>"&gt;&lt;/script&gt;
&lt;script&gt;
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'show tps report': function() {
      $('#tpsreport').animate({bottom: '-100px'});
    }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
&lt;/script&gt;</code></pre>
  </section>
  
  
  <section id="section_named_and_splats">
    <p><em>What about more complicated commands?</em></p>
    <p>annyang understands commands with <strong>named variables</strong>, <strong>splats</strong>, and <strong>optional words</strong>.</p>
    <p>Use <strong>named variables</strong> for one word arguments in your command.</p>
    <p>Use <strong>splats</strong> to capture multi-word text at the end of your command (greedy).</p>
    <p>Use <strong>optional words or phrases</strong> to define a part of the command as optional.</p>
    <pre><code>&lt;script&gt;
var commands = {
  // annyang will capture anything after a splat (*) and pass it to the function.
  // e.g. saying "Show me Batman and Robin" is the same as calling showFlickr('Batman and Robin');
  'show me *tag': showFlickr,

  // A named variable is a one word variable, that can fit anywhere in your command.
  // e.g. saying "calculate October stats" will call calculateStats('October');
  'calculate :month stats': calculateStats,

  // By defining a part of the following command as optional, annyang will respond to both:
  // "say hello to my little friend" as well as "say hello friend"
  'say hello (to my little) friend': greeting
};

var showFlickr = function(tag) {
  var url = 'http://api.flickr.com/services/rest/?tags='+tag;
  $.getJSON(url);
}

var calculateStats = function(month) {
  $('#stats').text('Statistics for '+month);
}

var greeting = function() {
  $('#greeting').text('Hello!');
}

&lt;/script&gt;</code></pre>
  </section>
  

  
  <script src="./vendor/js/highlight.pack.js"></script>
  
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  
  
</body>
</html>

