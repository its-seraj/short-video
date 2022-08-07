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
      url: "",
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
    if($("#video").prop('muted') ) {
      $("#video").prop('muted', false);
    } else {
      $("#video").prop('muted', true);
    }
  });

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
  $(".video-player").on("swipeup", () =>{
    console.log("You swiped up!");
  });
  $(".video-player").on("swipedown", () =>{
    console.log("You swiped down!");
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