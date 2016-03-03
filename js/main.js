function readMP3(_src){

    $("#jquery_jplayer_1").jPlayer("destroy");

    $("#jquery_jplayer_1").jPlayer({
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

          $('#artist').html(string[1]);
          $('#songname').html(string[2]);
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
      supplied: "mp3"
    }); 

}