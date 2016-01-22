      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '360',
          width: '620',
          videoId: 'SwpOOGflSME',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {
        //event.target.playVideo();
      }
      var done = false;
      function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
        _gaq.push(['_trackEvent', 'Videos', 'Play', 'Feriendorf Buchung']);
        pauseFlag = true;
    }
    if (event.data == YT.PlayerState.PAUSED && pauseFlag) {
        _gaq.push(['_trackEvent', 'Videos', 'Pause', 'Feriendorf Buchung']);
        pauseFlag = false;     
    }
    if (event.data == YT.PlayerState.ENDED) {
        _gaq.push(['_trackEvent', 'Videos', 'Finished', 'Feriendorf Buchung']);     
    }
        
      }
