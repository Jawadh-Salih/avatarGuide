$(document).ready(function(){

    readMP3("test_1.mp3");// play one mp3 if document is loaded

    $(".jp-play1").click(function(event){
        event.preventDefault();
        readMP3($(this).attr("href"));
    })
function readMP3(_src){

    $("#jquery_jplayer_2").jPlayer("destroy");

    $("#jquery_jplayer_2").jPlayer({
      ready: function () {
          var data = $.ajax({
              type:'POST',
            url: "getans.php",
            data: {'myval': _src },
            async: false
           }).responseText;

          var string = data.split('|');
          $(this).jPlayer("setMedia", {
              mp3: string[0]
          }).jPlayer("play");

          $('#question').html(string[1]);
          $('#answer').html(string[2]);
      },
      ended: function (event) {
          if (current_clicked_item.index() < $(".jp-play1").length - 1)
          {
              $(".jp-play1").eq(current_clicked_item.index() + 1).trigger('click'); // play next song
          }
          else
          {
              $(".jp-play1").eq(0).trigger('click'); // play first song
          }
      },
      swfPath: "swf",
      supplied: "m4v, ogv"
          }); 

}