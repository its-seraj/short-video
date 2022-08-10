// let video = document.getElementById('video');

// video.addEventListener("click", () => {
//   video.muted = video.muted ? false : true;
// })

$(() => {
  $(".comment, .comment-close").on("click", () => {
    $(".comment-box").animate({
			height: "toggle"
		});
  })

  let now = 0;
  function getVideo(){
    $.ajax({
      url: "video",
      type: "get",
      dataType: "json",
      success: (data) => {
        // console.log(data);
        localStorage.setItem("videos", JSON.stringify(data));
        loadVideo();
      },
      async: false
    })
  }
  function loadVideo(){
    let data = JSON.parse(localStorage.getItem("videos"))[now];
    $(".description p").text(data.description);
    $(".music marquee").text(data.music);
    $(".username p").text(data.userid);
    $("#video").attr("src", data.path);
    $("#video")[0].load();
  }
  getVideo();
  // $(document).ajaxComplete(mute_unmute());

  $(".upload-new").on("click", () => {
    $("#input-video").click();
  })
  $("#input-video").on("change", () => {
    $("#video-form").submit();
  })
  $("#video-form").on("submit", (e) => {
    e.preventDefault();
    let video = new FormData(e.target);

    $.ajax({
      url: "video",
      type: "post",
      dataType: "json",
      data: video,
      success: (data) => {
        console.log(data);
      }
    })
  })

  // single tap to mute/unmute
  $(".video-player").on("singletap", () =>{ 
    mute_unmute();
  });
  function mute_unmute(){
    $("#video").prop('muted', !$("#video").prop('muted'));
  }

  // double tap to play/pause
  $(".video-player").on("taphold", () =>{ 
    $("#video").trigger($('#video').prop('paused') ? 'play' : 'pause');
  });

  $(".video-player").on("swipeleft", () =>{
    console.log("You swiped left!");
  });
  $(".video-player").on("swiperight", () =>{
    console.log("You swiped right!");
  });
  // swipe up to next video
  $(".video-player").on("swipeup", () =>{
    now++;
    loadVideo();
  });
  // swipe down to previous video
  $(".video-player").on("swipedown", () =>{
    if(now > 0) now--;
    loadVideo();
  });

  $(".comment-box").on("swipeup", (e) =>{
    $(e.target).height("80%");
  });
  $(".comment-box").on("swipedown", (e) =>{
    if($(e.target).height() > ($(document).height() / 2)){
      $(e.target).height("50%");
    }else{
      $(".comment-close").click();
    }
  });
})