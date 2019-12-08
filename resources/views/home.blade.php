@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&display=swap" rel="stylesheet">
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<div class="container profileCont">
    <div class="row">
        <div class="col-12 coverProfile p-0">
            <div class="coverPhoto">
                <img class="dpCover" src="/img/profile/dp-cover.jpg" alt="">
            </div>

            <div class="col-12 profileOptions p-0">
                <ul class="nav " id="myTab" role="tablist">                    
                    <li class="nav-item col-2">
                        <a class="nav-link " id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link active" id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers</a>
                    </li>

                    <li class="nav-item proDetail col-4">
                        <h5>Midhun A R</h5>
                        <p>Kerala , India</p>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos</a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link " id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="home" aria-selected="true">...</a>
                    </li>
                </ul>
            </div>
            <div class="profilePhoto">
                <img class="proPic" src="/img/profile/profile-pic.jpg" alt="">
            </div>
            <div class="proSettings">
                <div class="proControls notBtn">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
                </div>
                <div class="proControls chatBtn">
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                </div>
                <div class="proControls settBtn">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade " id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="row">
                        <div class="col-4 abtInfo p-0 mt-20">
                            <div class="card">
                                <div class="card-header abtSocCaption">
                                    Personnel Info
                                </div>
                                <ul class="abtInfoDetails list-group">
                                    <li>
                                        <span class="title">About Me:</span>
                                        <span class="text ">Hi, I’m Midhun, I’m 26 and I work as a Web Designer for the
                                            “IVA”
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">Birthday:</span>
                                        <span class="text">December 20th, 1993</span>
                                    </li>
                                    <li>
                                        <span class="title">Birthplace:</span>
                                        <span class="text">Kollam, Kerala, India</span>
                                    </li>
                                    <li>
                                        <span class="title">Lives in:</span>
                                        <span class="text">San Francisco, California, USA</span>
                                    </li>
                                    <li>
                                        <span class="title">Occupation:</span>
                                        <span class="text">UI/UX Designer</span>
                                    </li>
                                    <li>
                                        <span class="title">Joined:</span>
                                        <span class="text">December 4th, 2019</span>
                                    </li>
                                    <li>
                                        <span class="title">Gender:</span>
                                        <span class="text">Male</span>
                                    </li>
                                    <li>
                                        <span class="title">Status:</span>
                                        <span class="text">Single</span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <a href="#" class="text">realmidhun@gmail.com</a>
                                    </li>
                                    <li>
                                        <span class="title">Phone Number:</span>
                                        <span class="text">01234568790</span>
                                    </li>
                                </ul>
                                <ul class="abtSocial">
                                    <li class="abtSocCaption">Other Social Networks :</li>
                                    <li class="abtFb">
                                        <button class="btn">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </button>
                                    </li>
                                    <li class="abtTwitter">
                                        <button class="btn">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </button>
                                    </li>
                                    <li class="abtInsta">
                                        <button class="btn">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-8 abtInfo">
                            <div class="card">
                                <div class="card-header abtSocCaption">
                                    Hobbies and Interests
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="aboutOtherDetails">
                                                <li>
                                                    <span class="title">Hobbies:</span>
                                                    <span class="text">I like to ride the bike to work, swimming, and working out. I also like
                                                        reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="title">Favourite TV Shows:</span>
                                                    <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.</span>
                                                </li>
                                                <li>
                                                    <span class="title">Favourite Movies:</span>
                                                    <span class="text">Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad, Ferrum Man. </span>
                                                </li>
                                                <li>
                                                    <span class="title">Favourite Games:</span>
                                                    <span class="text">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto. </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="aboutOtherDetails">
                                                <li>
                                                    <span class="title">Favourite Music Bands / Artists:</span>
                                                    <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
                                                </li>
                                                <li>
                                                    <span class="title">Favourite Books:</span>
                                                    <span class="text">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</span>
                                                </li>
                                                <li>
                                                    <span class="title">Favourite Writers:</span>
                                                    <span class="text">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth. </span>
                                                </li>
                                                <li>
                                                    <span class="title">Other Interests:</span>
                                                    <span class="text">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">...</div> -->
                <div class="tab-pane fade show active" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                    <div class="row">
                        <div class="col-lg-12 searchFollowers">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12 numFollow">
                                    You're following (100)
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <form class=" flSearch form-inline pull-right">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn  my-2 my-sm-0" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>
                    <div class="row followerList">
                        <div class="col-lg-3 flcard col-xs-12 pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend1.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar1.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">jack Nicholson</h5>
                                            <p class="flLocation greyText">Los Angeles , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12 pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend2.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar2.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Masey Williams</h5>
                                            <p class="flLocation greyText">Torrent , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12  pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend3.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar3.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Sansa Stark</h5>
                                            <p class="flLocation greyText">El paso , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12  pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend4.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar4.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Walter White</h5>
                                            <p class="flLocation greyText">NewYork , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12  pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend5.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar5.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Margot Robbie</h5>
                                            <p class="flLocation greyText">Texas , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12  pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend6.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar6.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Mr misfit</h5>
                                            <p class="flLocation greyText">LA , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12  pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend7.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar7.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Ellen Jane</h5>
                                            <p class="flLocation greyText">Philadelphia , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 flcard col-xs-12  pt-0">
                            <div class="card">
                                <div class="cardCover">
                                    <img class="card-img-top" src="/img/profile/friend8.jpg" alt="Card image cap">
                                    <div class="flProfilePic">
                                        <img src="/img/profile/avatar8.jpg" alt="" class="flAvatar">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flName row">
                                        <div class="col-12 p-0">
                                            <h5 class="card-title">Tyrion Lannister</h5>
                                            <p class="flLocation greyText">NewJersey , USA</p>
                                        </div>
                                        <div class="col-12 p-0 flDetails">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="flCount">500</p>
                                                    <p class="flItem greyText">Photos</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">1000</p>
                                                    <p class="flItem greyText">Likes</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="flCount">50</p>
                                                    <p class="flItem greyText">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 flBubbles">
                                            <div class="bubble bubble1 rounded-circle">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="bubble bubble2 rounded-circle">
                                                <a href="">
                                                    <i class="fa fa-commenting" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection