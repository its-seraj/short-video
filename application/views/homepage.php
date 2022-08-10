<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Short Video</title>
  <link rel="stylesheet" href="./public/css/style.css">
  <!-- google icons -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
  <!-- <link rel="stylesheet" -->
    <!-- href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
  <!-- fontawesome icons -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- bootstrap icon -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
  <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noticia+Text&display=swap" rel="stylesheet">
  <!-- jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/2.0.0/jquery.mobile-events.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="video-player">
      <video src="" id="video" loop autoplay muted type="video/mp4"></video> 
    <div class="sidebar">
      <div class="profile">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
      </div>
      <div class="like">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -4 24 24" width="24" fill="#fff"><path d="M3.636 7.208L10 13.572l6.364-6.364a3 3 0 1 0-4.243-4.243L10 5.086l-2.121-2.12a3 3 0 0 0-4.243 4.242zM9.293 1.55l.707.707.707-.707a5 5 0 1 1 7.071 7.071l-7.07 7.071a1 1 0 0 1-1.415 0l-7.071-7.07a5 5 0 1 1 7.07-7.071z"></path></svg>
        <p class="like-count">135</p>
      </div>
      <div class="comment">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -2 24 24" width="24" fill="#fff"><path d="M5.978 14.969a.38.38 0 0 1 .002-.033l-.002.033zm.001-.167a1.36 1.36 0 0 0 .001.003v-.003zm.04 1.9c2.678-2.462 3.007-2.656 3.793-2.734C13.364 13.615 16 11.01 16 8.004c0-3.26-3.085-6.003-7-6.003S2 4.745 2 8.004c0 1.893 1.175 3.767 3.054 4.957.783.495.958 1.117.941 1.778a2.548 2.548 0 0 1-.009.15c.022.33.032.92.033 1.814zm3.99-.743c-.185.018-1.625 1.276-4.32 3.774a1 1 0 0 1-1.68-.742c.02-2.362.011-3.709-.024-4.04-.018-.173.032-.28 0-.3C1.708 13.212 0 10.775 0 8.005 0 3.584 4.03 0 9 0s9 3.584 9 8.004c0 4.117-3.495 7.509-7.99 7.955z"></path></svg>
        <p class="comment-count">22</p>
      </div>
      <div class="share">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="#fff"><path d="M16 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM7.928 9.24a4.02 4.02 0 0 1-.026 1.644l5.04 2.537a4 4 0 1 1-.867 1.803l-5.09-2.562a4 4 0 1 1 .083-5.228l5.036-2.522a4 4 0 1 1 .929 1.772L7.928 9.24zM4 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path></svg>
      </div>
    </div>
    <div class="comment-box">
      <div class="comment-body">
        <div class="comment-close">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff"><g data-name="Layer 2"><g data-name="close-circle"><rect width="24" height="24" opacity="0"/><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm2.71 11.29a1 1 0 0 1 0 1.42 1 1 0 0 1-1.42 0L12 13.41l-1.29 1.3a1 1 0 0 1-1.42 0 1 1 0 0 1 0-1.42l1.3-1.29-1.3-1.29a1 1 0 0 1 1.42-1.42l1.29 1.3 1.29-1.3a1 1 0 0 1 1.42 1.42L13.41 12z"/></g></g></svg>
        </div>
        <div class="reply-list"></div>
        <div class="comment-input">
          <form id="reply-form">
            <input type="text" name="reply-message" id="reply-message" autocomplete="off" placeholder="Enter Something good...">
          </form>
          <div class="reply-button">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32" fill="#fff"><path d="M1.16998,17.52997l6.57001,4.29004v7.16998c-0.03998,1.28998,1.66003,2.01001,2.56,1.06l3.96002-3.96002l5.53998,3.62c0.25,0.16003,0.53003,0.25,0.82001,0.25c0.62,0,1.20001-0.39996,1.41003-0.97998l9.38995-25.46002c0.07001-0.19995,0.10004-0.40997,0.07001-0.60999c-0.03998-1.03998-1.19-1.69-2.13-1.26001L1.34998,14.91998C0.31,15.37,0.20001,16.94,1.16998,17.52997z M22.82001,8.07001L10.71002,20.17999l-5.66003-3.70001L22.82001,8.07001z"/></svg>
          </div>
        </div>
      </div>
    </div>
    <div class="video-details">
      <div class="details-body">
        <div class="username">
          <img src="" srcset="./public/icons/profile.svg">
          <p></p>
        </div>
        <div class="description">
          <p></p>
        </div>
        <div class="music">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff"><path d="M20,2.74a1,1,0,0,0-.93-.1l-10,4a1,1,0,0,0-.63.92V16A4.19,4.19,0,0,0,7,15.78c-1.93,0-3.44,1.24-3.44,2.83S5.07,21.44,7,21.44a3.61,3.61,0,0,0,3-1.39,1,1,0,0,0,.48-.83V12.08l8-3.07v5A4.19,4.19,0,0,0,17,13.78c-1.93,0-3.44,1.24-3.44,2.83s1.51,2.83,3.44,2.83a3.61,3.61,0,0,0,3-1.39,1,1,0,0,0,.48-.83V3.56A1,1,0,0,0,20,2.74Z" data-name="30. Double, music, notation, note"/></svg>
          <marquee></marquee>
        </div>
        <div class="music-disc">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="#fff" stroke="#000"><circle cx="16" cy="16" r="3"/><path d="M16,1A15,15,0,1,0,31,16,15,15,0,0,0,16,1Zm0,20a5,5,0,1,1,5-5A5,5,0,0,1,16,21Zm9.63-7.86a1,1,0,0,1-1.3-.55A8.94,8.94,0,0,0,19.48,7.7a1,1,0,1,1,.77-1.84,10.89,10.89,0,0,1,5.93,6A1,1,0,0,1,25.63,13.14Z"/></svg>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="nav">
        <!-- hidden form -->
        <form id="video-form" enctype="multipart/form-data">
          <input type="file" name="input-video" id="input-video" accept="video/*">
        </form>
        <div class="upload-new">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32" fill="#fff"><path d="M16,0.5C7.45001,0.5,0.5,7.45001,0.5,16S7.45001,31.5,16,31.5S31.5,24.54999,31.5,16S24.54999,0.5,16,0.5z M22.82001,17.5H17.5v5.32001c0,0.82996-0.66998,1.5-1.5,1.5s-1.5-0.67004-1.5-1.5V17.5H9.17999c-0.83002,0-1.5-0.67004-1.5-1.5c0-0.83002,0.66998-1.5,1.5-1.5H14.5V9.17999c0-0.83002,0.66998-1.5,1.5-1.5s1.5,0.66998,1.5,1.5V14.5h5.32001c0.83002,0,1.5,0.66998,1.5,1.5C24.32001,16.82996,23.65002,17.5,22.82001,17.5z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <script src="./public/js/js.js"></script>
  <!-- <script src="./public/js/jquery.touchSwipe.min.js"></script> -->
</body>

</html>
<!--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <div class="video-container">
    <div class="post">
      <div class="video-player">
        <video poster="https://wallpapercave.com/wp/wp4273083.jpg" src="https://dankmemeryt.000webhostapp.com/wp-content/uploads/2020/12/Iron%20Man%20_%20Whatsapp%20Status%20_%20Instagram%20Story%20_%20-%20YoutubeShort%20(%20720%20X%20406%20).mp4" autoplay="" loop="" class="post-video"></video>
      </div>
      <div class="side-bar">
        <div class="side-icon profile-follow">
          <div class="profile-logo">
            <img src="https://assets.codepen.io/2483051/internal/avatars/users/default.png?fit=crop&format=auto&height=80&version=1636466200&width=80" class="profile-logo-img" alt="">
          </div>
          <i class="fa fa-plus"></i>
        </div>
        <div class="side-icon like-btn">
          <i class="fa fa-heart-o like-icon"></i>
          <p class="like-number">789</p>
        </div>

        <div class="side-icon comment-btn">
          <i class="fa fa-comment comment-icon"></i>
          <p class="comment-number">184</p>
        </div>

        <div class="side-icon share-btn">
          <i class="fa fa-share share-icon"></i>
          <p class="share-number">10</p>
        </div>

      </div>
      <div class="post-comments ">
        <span class="close-comment">&times;</span>
        <div class="post-comments-area">
          <div class="post-comment">
            <div class="post-comment-user">
              <img src="https://assets.codepen.io/2483051/internal/avatars/users/default.png?fit=crop&format=auto&height=80&version=1636466200&width=80" class="post-comment-user-img">
            </div>
            <div class="post-comment-content">
              <div class="post-comment-user-name verfied">
                <a href="https://instagram.com/sahilverma.dev">sahilverma.dev</a>
                <i class="fa fa-check post-comment-user-verified"></i>
              </div>
              <div class="post-comment-user-msg">
                Follow me on instagram
              </div>
            </div>
            <div class="post-comment-like-btn">
              <i class="fa fa-heart-o post-comment-like-icon"></i>
              <p class="post-comment-like-number">9</p>
            </div>
          </div>
        </div>
        <div class="post-comment-input">
          <input type="text" name="" class="post-comment-text" placeholder="Enter somethings good...." />
          <button class="post-comment-send"><i class="fa fa-send send-btn"></i></button>
        </div>
      </div>
      <div class="post-footer">
        <div class="username verfied">
          <a href="https://instagram.com/sahilverma.dev" class="username-link">sahilverma.dev</a>
          <i class="fa fa-check verfied-icon"></i>
        </div>
        <p class="post-description">
          This is a Tik Tok Clone with working Video Player, Like button and comment. But comments dosen't store in any backend.
        </p>

        <div class="music-name">
          <i class="fa fa-music"></i>
          <marquee behavior="" direction="" class="song-name">Tungevaag, Raaban - Bad Boy </marquee>
        </div>

      </div>
      <div class="disc-logo">
        <img src="https://www.nicepng.com/png/detail/329-3297274_compact-disc-cd-comments-disc-icon-png.png" alt="" class="disc-logo-img">
      </div>
    </div>

  </div>
</div>