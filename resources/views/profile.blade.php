@extends('layouts.app')

@section('content')
 <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="user-profile-img">
                                                    <img src="img/notification/5.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="user-profile-content">
                                                    <h2>Khalida Moslih</h2>
                                                    <p class="profile-founder">Intern in <strong>CodeWeekend</strong>
                                                    </p>
                                                    <p class="profile-des"> I am a Web Developer</b><br>  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                            <table class="table small m-b-xs">
                                                <h5>Contact Me</h5>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                           <strong><span class="fa fa-phone-square"></span></strong> 
                                                        <a href="">0780536945</a>
                                                        </td>
                                                        <td>
                                                            <strong><span class="fa fa-linkedin-square"></span></strong>
                                                            <a href="linkdin.com" target="_blank"> Linkdin</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            
                                                             <strong><span class="fa fa-twitter-square"></span></strong> <a href="twitter.com" target="_blank"> Twitter</a>
                                                        </td>
                                                        <td>
                                                            <strong><span class="fa fa-github-square"></span></strong>  <a href="github.com" target="_blank"> Github</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            
                                                            <strong><span class="fa fa-facebook-square"></span></strong>  <a href="facebook.com" target="_blank"> Facebook</a>
                                                        </td>
                                                        <td>
                                                            <strong><span class="fa fa-envelope-square"></span></strong>  <a href="mail.com" target="_blank">Email</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                    <div id="projects" class="work">
                                        <h2 class="work-header">These are some of my projects..</h2>
                                         <a href=" https://codepen.io/khalidamoslih/pen/PLPKwN" target="_blank" class="project project-tile">
                                        <img class="project-pic" src="https://media.gettyimages.com/photos/facebook-founder-and-ceo-mark-zuckerberg-delivers-the-opening-keynote-picture-id98590925?s=612x612" alt="project">
                                        <div class="project-tile">Tribute Page</div>
                                         </a>
                                        <a href=" https://codepen.io/khalidamoslih/pen/moeopg" target="_blank" class="project project-tile">
                                            <img class="project-pic" src="https://images.unsplash.com/photo-1552667466-07770ae110d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="project">
                                         <div class="project-title">serve form</div>
                                        </a>
                                         <a href="https://codepen.io/khalidamoslih/pen/Wmjpyg" target="_blank" class="project project-tile">
                                            <img class="project-pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Consumer_Reports_-_Zojirushi_coffeemaker_alt.tif/lossy-page1-220px-Consumer_Reports_-_Zojirushi_coffeemaker_alt.tif.jpg" alt="project">
                                         <div class="project-title">Build A Product Landing Page</div>
                                        </a>
                                        <a href="https://codepen.io/khalidamoslih/pen/BbRpqQ" target="_blank" class="project project-tile">
                                            <img class="project-pic" src="https://i.ytimg.com/vi/4GaHn08BXQw/maxresdefault.jpg" alt="project">
                                         <div class="project-title">Build A Technical Documentation Page</div>
                                        </a>
  
                                             <a href="https://codepen.io/khalidamoslih/pen/pYPeJK" target="_blank" class="project project-tile">
                                            <img class="project-pic" src="https://i.ytimg.com/vi/2klCZXwfvLs/maxresdefault.jpg" alt="project">
                                         <div class="project-title">Build A Personal Portfolio Webpage</div>
                                        </a>
  
  
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection