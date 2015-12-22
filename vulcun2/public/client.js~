$(function() {
  var socket = io();
  var $input = $('.input');
  var $messages = $('.messagebox');
  var $window = $(window);
  var userName;

  var blocked = {
  'ANAL' : true, 
  'ANUS' : true, 
  'ARSE' : true, 
  'ASS' : true, 
  'BALLSACK' : true, 
  'BALLS' : true, 
  'BASTARD' : true, 
  'BITCH' : true, 
  'BIATCH' : true, 
  'BLOODY' : true, 
  'BLOWJOB' : true, 
  'BLOW' : true, 
  'BOLLOCK' : true, 
  'BOLLOK' : true, 
  'BONER' : true, 
  'BOOB' : true, 
  'BUGGER' : true, 
  'BUM' : true, 
  'BUTT' : true, 
  'BUTTPLUG' : true, 
  'CLITORIS' : true, 
  'COCK' : true, 
  'COON' : true, 
  'CRAP' : true, 
  'CUNT' : true, 
  'DAMN' : true,
  'DICK' : true, 
  'DILDO' : true, 
  'DYKE' : true, 
  'FAG' : true, 
  'FECK' : true, 
  'FELLATE' : true, 
  'FELLATIO' : true, 
  'FELCHING' : true, 
  'FUCK' : true, 
  'FCUK' : true, 
  'FUDGEPACKER': true, 
  'FUDGE' : true, 
  'FLANGE' : true, 
  'GODDAMN' : true, 
  'DAMMIT': true, 
  'HELL': true, 
  'HOMO': true, 
  'JERK': true, 
  'JIZZ': true, 
  'KNOBEND': true,
  'KNOCKED' : true, 
  'LABIA': true, 
  'LMAO' : true, 
  'LMFAO': true, 
  'MUFF' : true, 
  'OMG' : true, 
  'PENIS': true, 
  'PISS': true, 
  'POOP': true, 
  'PRICK' : true, 
  'PUBE': true, 
  'PUSSY': true, 
  'QUEER': true, 
  'SCROTUM': true, 
  'SEX': true, 
  'SHIT': true, 
  'SHITTY': true, 
  'SH1T' : true, 
  'SLUT' : true, 
  'SMEGMA' : true, 
  'SPUNK' : true, 
  'TIT': true, 
  'TOSSER': true, 
  'TURD' : true, 
  'TWAT' : true, 
  'VAGINA' : true, 
  'WANK' : true, 
  'WHORE' : true, 
  'WTF' : true, 
  'DAMON' : true, 
  'TERRA' : true, 
  'WYRDEN' : true, 
  'ASTERIA' : true, 
  'LAVEY' : true, 
  'SMASH' : true, 
  'TOOTHLESS' : true, 
  'NIGHTSHADE' : true, 
  'GRIM' : true, 
  'VITRIS' : true, 
  'SHADOWBOLT' : true, 
  'NEPTUNE' : true, 
  'ARYA' : true, 
  'CRUSHBUG' : true, 
  'MIDORI' : true, 
  'ZEENA' : true, 
  'WILLOW' : true, 
  'VIRIDA' : true, 
  'LOSNA' : true, 
  'KURISO' : true, 
  'GRAVEYARD' : true,
  'LAPIS': true,
  'JACKS' : true,
};
  var messageNum = 0;


  var createMessage = function () {
    var message = cleanMessage($input.val());
    return blockMessage({
      username: userName,
      message: message,
    });
  };

  var sendMessage = function(data) {
    socket.emit('new message', data);
    
  };

  var addMessage = function(data) {
    var $messageEl = $("<div class='message'>");
    var $messageHead = $("<span class='messageHead'>");
    var $messageBody = $("<span class='messageBody'>");

    $messageHead.html(data.username + " : ");
    $messageBody.html(data.message);
    $messageEl.append($messageHead, $messageBody);


    console.log(data.username + " : " + data.message);
    $messages.append($messageEl);

    messageNum++;
    if (messageNum > 100) {
      $messages.find('.message').first().remove();
      messageNum--;
    }


    $messages.scrollTop($messages[0].scrollHeight);
  };

  var cleanMessage = function(message) {
    return $('<div>').text(message).text();
  };

  var blockMessage = function(data) {
    var wordArray = data.message.split(" ");
    for (var i = 0; i < wordArray.length; i++) {
      if (blocked[wordArray[i].toUpperCase()]) {
        wordArray[i] = "@3@";
      }
    }

    return {
      username: data.username,
      message: wordArray.join(" "),
    }
  };

  var setUsername = function() {
    userName = prompt("Enter Your Name Here!");
  };

  $('.inputform').submit(function(event) {
    event.preventDefault();
    var message = createMessage();
    addMessage(message)
    sendMessage(message);
    $input.val("");
  });

  socket.on('new message', function(data) {
    console.log("Text Received");
    addMessage(data);
  });

  setUsername();
});
