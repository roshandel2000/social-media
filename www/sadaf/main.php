<?php
include('header.inc.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="../jquery/jquery-3.4.1.min.js.txt"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: azure;">
    <header>
        <div class="bg-primary-light shadow-bottom">
            <div class="container d-flex header">
                <div class="logo col-2">
                    <p class="mt-3 text-white">Our Social Network !</p>
                </div>
                <div class="asset col-5 text-left">
                    <ul class="nav d-flex">
                        <li class="nav-item">
                            <a href="" class="nav-link text-white "> <img class="profile-header" src="./images/home.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"><img class="profile-header" src="./images/magnifier.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white">1<img class="profile-header" src="./images/eye2.png" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="text-left col-7">
                    <ul class="nav d-flex">
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"><img class="profile-header" src="./images/plus.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"><img class="profile-header" src="./images/icons8-group-50.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"><img class="profile-header" src="./images/icons8-delete-message-24.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"><img class="profile-header" src="./images/icons8-notification-24.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link text-white">
                                <div class="d-flex"><img class="profile-header" src="./images/profile.png">
                                    <p class="mt-2 ml-1 text-white"> masoudakhgar</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white"><img src="./images/icons8-menu-vertical-50.png" class="w-50 mt-2"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="w-100" style="height:70px;"></div>
    <div class=" d-flex" style="direction:rtl;">
        <div class="col-2 shadow-left ml-3 pt-2" style="margin-top: 82px; background-color: #f6f6f6;top:-20px;height: 900px;position: fixed;">
            <div class="text-left">

                <!-- <div class="mt-1 d-inline">
                    <button type="button" id="dropdownbtn" class="ml-2 bg-none border-none mt-1"><img src="./images/down.png" class="" style="height: 10px;width: 15px;" alt=""></button>
                </div>
                <a href="" style=""><img class=" d-inline titer" style="margin-left: 60%;opacity: 0.3;height: 25px;width: 30px;" src="./images/groupp.png"></a> -->
                <p class=" d-inline titer">Chat</p>
            </div>
            <div class="d-flex shadow-bottom shadow-left py-3 bg-white" id="online">
                <div class="d-flex">
                    <button class="btn hover-primary"> online <img src="./images/eye.png" style="width: 20px;"> </button>
                </div>
                <div class="d-flex">
                    <button class="btn hover-primary">offline <img src="./images/invisible.png" style="width: 20px;"> </button>
                </div>
            </div>
            <div class=" mt-2">
                <div>
                    <input placeholder="search for users" class="w-100 py-1 text-left bg-dark-25 border-none pl-3">
                    <div class="d-flex mt-2  justify-content-center">
                        <div class="col-6 px-4 py-2" id="group-chats">
                            <img src="./images/icons8-user-group-30.png" id="group-pic" class="ml-4" alt="">
                        </div>
                        <div class=" col-6 px-4 py-2" id="person-chats">
                            <img src="./images/icons8-person-30-red.png" id="person-pic" class="ml-4" alt="">
                        </div>
                    </div>
                </div>
                <div class="person-chat">
                    <div class="d-flex mt-2">
                        <div class="col-9">
                            <p class="mt-1">her/his name</p>
                        </div>
                        <div class="w-25" style="left: 0;">
                            <a href="profile.html"><img src="./images/face1.jpg" class="w-100"></a>
                            <div class="bg-danger " style="position: absolute;margin-top:-50;border-radius: 50%;width:15px;height: 15px;">
                                <p style="font-size: 12px;" class="ml-1 mb-3 text-white">2</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <div class="col-9">
                            <p class="mt-1">her/his name</p>
                        </div>
                        <div class="w-25" style="left: 0;">
                            <a href="profile.html"><img src="./images/face1.jpg" class="w-100"></a>
                            <div class="bg-danger " style="position: absolute;margin-top:-50;border-radius: 50%;width:15px;height: 15px;">
                                <p style="font-size: 12px;" class="ml-1 mb-3 text-white">2</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <div class="col-9">
                            <p class="mt-1">her/his name</p>
                        </div>
                        <div class="w-25" style="left: 0;">

                            <a href="profile.html"><img src="./images/face1.jpg" class="w-100"></a>
                            <div class="bg-danger " style="position: absolute;margin-top:-50;border-radius: 50%;width:15px;height: 15px;">
                                <p style="font-size: 12px;" class="ml-1 mb-3 text-white">2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group-chat" style="display: none;">
                    <div class="d-flex mt-2">
                        <div class="col-9">
                            <p class="mt-1">Group</p>
                        </div>
                        <div class="w-25" style="left: 0;">
                            <img src="./images/group1.jpg" class="w-100">
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <div class="col-9">
                            <p class="mt-1">Group</p>
                        </div>
                        <div class="w-25" style="left: 0;">
                            <img src="./images/group1.jpg" class="w-100">
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <div class="col-9">
                            <p class="mt-1">Group</p>
                        </div>
                        <div class="w-25" style="left: 0;">
                            <img src="./images/group1.jpg" class="w-100">
                        </div>
                    </div>

                </div>
                <div class="bg-dark-25 w-100 my-2" style="height: 1px;"></div>
            </div>

            <div class="w-100 mt-2">
                <div>
                    <a href=""><img src="./images/icons8-replay-30.png" class="offset-3 mt-1 d-inline" style="width: 20px ; height: 20px;"></a>
                    <p class="d-inline titer">What's happening</p>


                </div>
                <div class="d-flex mt-5">

                    <p style="font-size: 14px;">Mohammad <br> commented on Zahra <br> ashrafi posted 2 days ago</p>
                    <p class="mt-4 mr-3"><img src="./images/megaphone.png" class="profile-header"></p>
                    <hr>
                </div>
                <div class="d-flex">

                    <p style="font-size: 14px;">Mohammad <br> commented on Zahra <br> ashrafi posted 2 days ago</p>
                    <p class="mt-4 mr-3"><img src="./images/megaphone.png" class="profile-header"></p>
                    <hr>
                </div>
                <div class="d-flex">

                    <p style="font-size: 14px;">Mohammad <br> commented on Zahra <br> ashrafi posted 2 days ago</p>
                    <p class="mt-4 mr-3"><img src="./images/megaphone.png" class="profile-header"></p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="col-3 " style="margin-right:17.6667777%;direction: ltr;">
            <div class="bg-white p-1 pl-2 shadow-left stories">
                <p class="titer">Stories</p>
                <div class="d-flex w-100 pb-2">
                    <img class="story" src="./images/story.png">
                    <img class="profile-header ml-1" id="plus" src="./images/plus.png" alt="">
                    <!-- <i class="fa fa-plus" id="plus" style="cursor:pointer;font-size:24px"></i> -->
                    <!-- <img id="plus" src="./images/plus.png"> -->
                    <img class="story" src="./images/story.png">
                    <img class="story" src="./images/story2.png">
                    <img class="story" src="./images/story.png">
                </div>
            </div>
            <div class="bg-white p-1 px-3 shadow-left trending mt-3">
                <p class="titer">Trending !</p>
                <p class="text-info">#sample <br></p>
                <p class="ml-4">post 2<br></p>
                <p class="text-info"> #sample<br></p>
                <p class="ml-4">post 2<br></p>
                <p class="text-info">#sample<br></p>
                <p class="ml-4">post 2<br></p>
                <p class="text-info">#sample<br></p>
                <p class="ml-4">post 2<br></p>
                <p class="text-info">#sample<br></p>
                <p class="ml-4">post 2<br></p>
            </div>
            <div class="bg-white p-1 px-3 shadow-left pb-4 mt-3">
                <div class="d-flex">
                    <p class="titer">People you may know</p>
                    <a href="" class="offset-6"><img src="./images/icons8-replay-30.png" class=" mt-1" style="width: 20px ; height: 20px;"></a>
                </div>

                <div class="d-flex mt-2">
                    <div class="w-25" style="left: 0;">
                        <a href="profile.html"><img src="./images/woman.jpg" class="w-100" style="height:80px;border-radius: 50%;"></a>
                    </div>
                    <div class="col-9">
                        <p class="titer mt-1" style="font-size:20px;">Michaiil Schulist</p>
                        <button class="btn btn-primary py-1 shadow-bottom">Follow</button>
                    </div>
                </div>
                <div class="bg-dark-25 w-100 my-2" style="height: 1px;"></div>
                <div class="d-flex mt-2">
                    <div class="w-25" style="left: 0;">
                        <a href="profile.html"><img src="./images/woman.jpg" class="w-100" style="height:80px;border-radius: 50%;"></a>
                    </div>
                    <div class="col-9">
                        <p class="titer mt-1" style="font-size:20px;">Michaiil Schulist</p>
                        <button class="btn btn-primary py-1 shadow-bottom">Follow</button>
                    </div>
                </div>
                <div class="bg-dark-25 w-100 my-2" style="height: 1px;"></div>
                <div class="d-flex mt-2">
                    <div class="w-25" style="left: 0;">
                        <a href="profile.html"><img src="./images/woman.jpg" class="w-100" style="height:80px;border-radius: 50%;"></a>
                    </div>
                    <div class="col-9">
                        <p class="titer mt-1" style="font-size:20px;">Michaiil Schulist</p>
                        <button class="btn btn-primary py-1 shadow-bottom">Follow</button>
                    </div>
                </div>
                <div class="bg-dark-25 w-100 my-2" style="height: 1px;"></div>
                <div class="d-flex mt-2">
                    <div class="w-25" style="left: 0;">
                        <a href="profile.html"><img src="./images/woman.jpg" class="w-100" style="height:80px;border-radius: 50%;"></a>
                    </div>
                    <div class="col-9">
                        <p class="titer mt-1" style="font-size:20px;">Michaiil Schulist</p>
                        <button class="btn btn-primary py-1 shadow-bottom">Follow</button>
                    </div>
                </div>
                <div class="bg-dark-25 w-100 my-2" style="height: 1px;"></div>
                <div class="bg-dark-25 w-100 my-2" style="height: 1px;"></div>
                <div class="d-flex mt-2">
                    <div class="w-25" style="left: 0;">
                        <a href="profile.html"><img src="./images/woman.jpg" class="w-100" style="height:80px;border-radius: 50%;"></a>
                    </div>
                    <div class="col-9">
                        <p class="titer mt-1" style="font-size:20px;">Michaiil Schulist</p>
                        <button class="btn btn-primary py-1 shadow-bottom">Follow</button>
                    </div>
                </div>
            </div>
            <div class="bg-white p-1 px-3 shadow-left  mt-3">
                <p class="titer">Invite your Friends</p>
                <div class=" border border-1 border-black w-100" style="min-height:40px;">
                    <input placeholder="E-Mali" class="w-100 Mali pl-1" style="min-height:40px;">
                    <a href="" class="btn-primary send pt-1"><i class="fa fa-send text-white mt-1" style="font-size: 20px;"></i></a>
                </div>
                <!-- <img src="./images/send.png" style="height: 100%;"> -->
            </div>

            <div class="bg-white p-1 px-3 shadow-left  mt-3">
                <p class="titer">Pages you may like</p>
                <div class="w-100 border border-1 " style="height: 100%;">
                    <div class="d-flex mt-2 p-2">
                        <div class="w-25" style="left: 0;">
                            <img src="./images/apple.jpg" class="w-100" style="height:80px;border-radius: 50%;">
                        </div>
                        <div class="col-9">
                            <p class="titer mt-2" style="font-size:20px;margin-bottom: 0;"><a href="">silverdnt</a></p>
                            <p>Movies & Animation</p>
                        </div>
                    </div>
                    <img src="./images/Computer.jpg" class="img-fluid mt-2" alt="">
                </div>
            </div>
            <div class="bg-white p-1 pl-2 mt-4 shadow-left">
                <div class="d-flex">
                    <p class="titer d-inline">Suggested groups</p>
                    <a href="" class="offset-6"><img src="./images/icons8-replay-30.png" class=" mt-1" style="width: 20px ; height: 20px;"></a>
                </div>
                <div class="d-flex pages pb-4">
                    <div class="px-1 col-8">
                        <div class="w-100 border border-1 " style="height: 100%;">
                            <div class="d-flex mt-2 px-3">
                                <p class="titer">متخصصان</p>
                                <button class="btn btn-primary px-3 offset-5">join</button>
                            </div>
                            <img src="./images/Computer.jpg" class="img-fluid mt-2">
                            <div class="d-flex mt-2">
                                <p class="titer d-inline mt-1">4 members</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-1 col-8">
                        <div class="w-100 border border-1 " style="height: 100%;">
                            <div class="d-flex mt-2 px-3">
                                <p class="titer">متخصصان</p>
                                <button class="btn btn-primary px-3 offset-5">join</button>
                            </div>
                            <img src="./images/Computer.jpg" class="img-fluid mt-2">
                            <div class="d-flex mt-2">
                                <p class="titer d-inline mt-1">4 members</p>
                            </div>
                        </div>
                    </div>
                </div><br>

            </div>
            <div>
                <div class="d-flex mt-3">
                    <p class="titer"> © 2019 TouchOut</p>
                    <p class="titer offset-5 mt-1"><a href="">language</a></p>
                </div>
                <div class="d-flex titer" style="font-weight: normal;">
                    <p class="ml-2"><a href="">About</a></p>
                    <p class="ml-2"><a href="">blog</a></p>
                    <p class="ml-2"><a href="">Contact Us</a></p>
                    <p class="ml-2"><a href="">Developers</a></p>
                    <p class="ml-2 "><a href="">More
     </a></p>
                </div>
            </div>
        </div>

        <div class="col-5" style="direction: ltr;">
            <div class="bg-white p-2 pl-3 py-1 shadow-left profile welcome2">
                <div class="d-flex"><img src="./images/profile.png">
                    <p class="mt-2 ml-1" style="font-weight: bold"> masoudakhgar</p>
                </div>
                <div class="p-3">
                    <p style="opacity: 0.4;" class="text-dark">what's going on?#Hashtags .. @Mentions.. Links</p>
                </div>
                <div class="bg-dark-25 w-100" style="height:1px;"></div>
                <div class="d-flex mt-2">
                    <div class="bg-dark-25 d-flex option ml-3 px-2">
                        <i class="fa fa-camera mt-2" style="font-size:24px"></i>
                        <p class="titer">upload image</p>
                    </div>
                    <div class="bg-dark-25 d-flex option ml-3 px-2">
                        <i class="fas fa-poll mt-2" style="font-size:24px"></i>
                        <p class="titer">create poll</p>
                    </div>
                    <div class="bg-dark-25 d-flex option ml-3 px-2  ">
                        <i class="fa fa-video-camera mt-2" style="font-size:24px"></i>
                        <p class="titer">upload video</p>
                    </div>
                    <div class="bg-dark-25 d-flex option ml-3 px-2">
                        <i class="fa fa-plus mt-2" style="cursor:pointer;font-size:24px"></i>
                        <!-- <img class=" mt-1" src="./images/plus.png" style="cursor:pointer;font-size:24px"> -->
                        <p class="titer"> more</p>
                    </div>
                </div>
            </div>
            <div class="mt-2 bg-white p-2 pl-3 py-1 shadow-bottom welcome">
                <div class="d-flex">
                    <div class="d-inline col-9">
                        <p style="font-weight: bold">Good morning Masoud Akhger</p>
                        <p>Every new day is chance to change your life</p>
                        <p class="text-primary">#Sample-Company</p>
                    </div>
                    <img class=" mt-1  mt-4 ml-5 " style="width: 70px ; height: 50px;" src="./images/icons8-sunrise-64.png">
                </div>
            </div>
            <div class="mt-3 bg-white  pl-3 shadow-bottom list">
                <p style="font-weight: bold;opacity:0.7">Filter:</p>
                <ul class=" d-flex">
                    <li>
                        <i class="fas fa-film" style="font-size:40px;"></i>
                    </li>
                    <li>
                        <i class="fas fa-scroll" style="font-size:40px"></i>
                    </li>
                    <li>
                        <i class="fas fa-music" style="font-size:40px"></i>
                    </li>

                    <li>
                        <i class="fas fa-map-marker " style="font-size:40px"></i>
                    </li>

                </ul>
            </div>
            <div class="mt-3 bg-white  px-2 py-2 shadow-bottom post pl-4">
                <div class="d-flex">
                    <img id="profile-post" class="shadow-bottom" src="./images/profile.png">
                    <div class="ml-2">
                        <p class="mt-1" style="font-weight: bold">masoudakhgar</p>
                        <p class="text-dark" style="font-size:12px;margin-top: -20px;">Person - Online 16 hour ago</p>
                    </div>

                </div>
                <a href="https://www.instagram.com/masoudmdar">https://www.instagram.com/masoudmdar</a>
                <br>
                <div class="w-100" style="height: 500px;overflow: hidden;">
                    <img src="./images/post.png" class="img-fluid">
                </div>
                <p class="d-inline" style="font-size: 14px;">like 3 comment 1</p>
                <div class="w-100">
                    <div class=" kadr w-100 d-flex post-detail">
                        <p class="text-right detail like">
                            <a href=""><i class="fa fa-thumbs-up"></i> LIKE</a>
                        </p>
                        <p class="text-right detail">
                            <a href=""><i class="fa fa-comments"></i> COMMENT</a>
                        </p>
                        <p class="text-right detail">
                            <a href=""><i class="fa fa-share"></i> SHARE</a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="bg-gray comment p-3 shadow-bottom shadow-left">
                <div class="d-flex">
                    <img src="./images/profile.png">
                    <input type="text " class="comment-holder ml-3 mr-1 col-10" placeholder="Write a Comment and press enter">
                    <i class="fa fa-send mt-2" style="cursor:pointer;font-size:20px"></i>
                    <!-- <img class="ml-2" src="./images/plus.png"> -->
                </div>
            </div>

        </div>

        <div class="col-2 side" style="direction: ltr;position: fixed;left: 0; ">
            <div class="pl-5 ml-3 mt-1">
                <a href="">
                    <div class="d-flex menu">
                        <img src="./images/profile.png">
                        <p class="ml-2"><a href="">masoudakhgar</a></p>

                    </div>
                </a>
                <a href="">
                    <div class="d-flex menu">
                        <img src="./images/profile.png">
                        <p class="ml-2"><a href="">newfeed</a></p>

                    </div>
                </a>
                <a href="">
                    <div class="d-flex menu">

                        <img src="./images/profile.png">
                        <p class="ml-2"><a href="">albums</a></p>

                    </div>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">saved posts</a></p>

                        </div>
                    </a>
                    <p style="font-weight: bold" class="mt-3">community</p>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">events</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">forum</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">my agroups</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">pokes </a></p>

                        </div>
                    </a>
                    <p style="font-weight: bold" class="mt-3">blog</p>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">blog</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">my aarticles</a></p>

                        </div>
                    </a>
                    <p style="font-weight: bold" class="mt-3">market</p>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">markets</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">my produces</a></p>

                        </div>
                    </a>
                    <p style="font-weight: bold" class="mt-3">explore</p>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">popular posts</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">games</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">explore</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">find friends</a></p>

                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex menu">
                            <img src="./images/profile.png">
                            <p class="ml-2"><a href="">movies</a></p>

                        </div>
                    </a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var vis = false;
            $("#dropdownbtn").click(function() {
                if (vis == true) {
                    $("#online").css({
                        "visibility": "hidden"
                    })
                    vis = false;
                } else {
                    $("#online").css({
                        "visibility": "visible"
                    })
                    vis = true;
                }

            });
            $("#group-chats").click(function() {
                $("#group-chats").css({
                    "border-color": "red"
                })
                $("#person-chats").css({
                    "border-color": "black"
                })
                $(".group-chat").show(200);
                $(".person-chat").hide(200);
                $("#group-pic").attr("src", "./images/icons8-user-group-red.png");
                $("#person-pic").attr("src", "./images/icons8-person-30.png");
            });
            $("#person-chats").click(function() {
                $(".person-chat").show(200);
                $(".group-chat").hide(200);
                $("#group-pic").attr("src", "./images/icons8-user-group-30.png");
                $("#person-pic").attr("src", "./images/icons8-person-30-red.png");
                $("#group-chats").css({
                    "border-color": "black"
                })
                $("#person-chats").css({
                    "border-color": "red"
                })
            });

        });
    </script>
</body>


</html>
<!-- <?php
$mysql = pdodb::getInstance();
$res = $mysql->Execute("select * from sadaf.user");
while($rec = $res->fetch())
{
    echo "<li>".$rec["username"]."</li>";
}
?> -->