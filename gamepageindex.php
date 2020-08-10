<!DOCTYPE html>
<html>
    <head>
        <title>GAMEZONE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./gamesite.css" rel="Stylesheet" type="text/css" />
    </head>
    <script>
        window.onscroll = function() {myFunction()};
        var header= document.getElementById("sticky_header");
        var sticky = header.offsetTop;

        function myFunction(){
            if(window.pageYoffset > sticky){
                header.classList.add("sticky");
            }
            else{
                header.classList.remove("sticky");
            }
        }
    </script>
    

    <body>
        <header>
            <div class="flex" id="sticky_header">
                <div class="logo">
                    <a href="#"><img src="https://onclickwebdesign.com/wp-content/uploads/game_warrior_logo.png" alt="Game Warrior Logo" /></a>
                </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="gamepageindex.php" target="_self">Home</a></li>
                        <li><a href="https://www.tencent.com" target="_blank">Games</a></li>
                        <li><a href="https://www.pcgamer.com"target="_blank">Blog</a></li>
                        <li><a href="https://www.joyfreak.com" target="_blank">Forums</a></li>
                        <li><a href="mailto:aishwaryaanand434@gmail.com" target="_blank">Contact</a></li>
                    </ul>
                </nav>
                <?php
                session_start();
                    if( $_SESSION ){
                      echo " <span style='color:white'> Welcome ".  $_SESSION["userName"]. "</span>
                      <a href='logout.php' id='login-register-button'/>Logout</a> "   ;
                    } else {
                        echo "<a href='login.php' id='login-register-button'>Login / Register</a>";
                    }
                ?>
                
            </div>
        </header>

        <main>
            <section id="hero-image">
                <div class="hero-marketing-text">
                    <h1>The Best <span>Games</span> Out There</h1>
                    <h5>Find all the latest pc and mobile games... One can play free online games, multiplayer flash games, cricket games, free racing games, online sports games, action games, arcade games, strategy and puzzle.</h5>
                    <button>Read More</button>
                </div>
            </section>

            <section id="latest-news">
                <div class="flex">
                    <h5>Latest News</h5>
                    <div id="latest-news-container">
                        <div class="latest-news-item">
                            <span class="badge new">New</span>
                            <span class="latest-news-text">Latest games of 2019 are available here.</span>
                        </div>
                    </div>
                </div>
            </section>

            <section id="game-types-boxes">
                <div class="flex">
                    <div class="box new">
                    <a href="https://outerworlds.obsidian.net/en">
                        <div class="shade"></div>
                        <span class="badge new">New</span>
                        <div class="contents">
                            <h4>THE OUTER WORLD</h4>
                            <p>Welcome to the future.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div></a>
                    </div>

                    <div class="box strategy">
                    <a href="https://www.ea.com/en-gb/games/starwars/jedi-fallen-order">
                        <div class="shade"></div>
                        <span class="badge strategy">New</span>
                        <div class="contents">
                            <h4>Star Wars Jedi: Fallen Order</h4>
                            <p>Become a JEDI.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div></a>
                    </div>

                    <div class="box rpg">
                    <a href="https://www.callofduty.com/modernwarfare">
                        <div class="shade"></div>
                        <span class="badge rpg">New</span>
                        <div class="contents">
                            <h4>Call of Duty: Modern Warfare</h4>
                            <p>Prepare to go dark.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div></a>
                    </div>

                    <div class="box racing">
                        <a href="http://www.codemasters.com/game/dirt-rally-2-0/">
                        <div class="shade"></div>
                        <span class="badge racing">New</span>
                        <div class="contents">
                            <h4>DiRT Rally 2.0</h4>
                            <p>Carve your way through.</p> 
                            <a href="#" class="comments">3 Comments</a>
                        </div></a>
                    </div>
                </div>
            </section>

            <section id="recent-games">
                <h1>Recent Games</h1>
                <div class="flex">
                    <div class="box">
                    <a href="https://www.epicgames.com/store/en-US/"><span class="badge new">New</span>
                         <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_1.jpg" /></a>
                        <div class="box-lower-section">
                            <h4>All the latest games are here</h4>
                            <p>Here is everthing that a gaming head needs.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>

                    <div class="box">
                    <a href="https://forzamotorsport.net/en-us/games/fh4"><span class="badge racing">Racing</span>
                         <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_2.jpg" /></a>
                        <div class="box-lower-section">
                            <h4>Find the best racing games </h4>
                            <p>The ultimate LEGO Speed Champions fantasy comes to life in a second.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>

                    <div class="box">
                    <a href="https://www.bungie.net/"><span class="badge adventure">Adventure</span>
                         <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_3.jpg" /></a>
                        <div class="box-lower-section">
                            <h4>Most played adventure games</h4>
                            <p>Discover new mystries on the moon and do your best to servive.</p>
                            <a href="" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tournaments">
                <div class="flex">
                    <span class="badge tournaments">Tournaments</span>
                    <div class="box">
                        <span class="badge premium-tournament">Premium Tournament</span>
                        <div class="tournaments-image">
                            <a href="https://starcraft2.com/en-gb/"><img src="https://onclickwebdesign.com/wp-content/uploads/tournaments_1.jpg" /></a>
                        </div>
                        <div class="tournaments-content">
                            <h3>Starcraft 2</h3>
                            <div><label>Tournament Begins:</label> <strong>June 20, 2019</strong></div>
                            <div><label>Tournament Ends:</label> <strong>July 01, 2019</strong></div>
                            <div><label>Participants:</label> <strong>10 teams</strong></div>
                            <div><label>Tournament Organizer:</label> <strong>Admin</strong></div>
                            <div><label class="prizes">Prizes:</label> <label>1st place $2000, 2nd place: $1000, 3rd place: $500</label></div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="badge premium-tournament">Premium Tournament</span>
                        <div class="tournaments-image">
                          <a href="https://worldofwarcraft.com/en-gb/"><img src="https://onclickwebdesign.com/wp-content/uploads/tournaments_2.jpg" /></a>
                        </div>
                        <div class="tournaments-content">
                            <h3>World Of Warcraft</h3>
                            <div><label>Tournament Begins:</label> <strong>June 20, 2019</strong></div>
                            <div><label>Tournament Ends:</label> <strong>July 01, 2019</strong></div>
                            <div><label>Participants:</label> <strong>10 teams</strong></div>
                            <div><label>Tournament Organizer:</label> <strong>Admin</strong></div>
                            <div><label class="prizes">Prizes:</label> <label>1st place $2000, 2nd place: $1000, 3rd place: $500</label></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="recent-reviews">
                <h1>Recent Reviews</h1>
                <div class="flex">
                    <div class="box">
                        <span class="rating-badge gold">9.3</span>
                        <div class="recent-reviews-image">
                        <a href="https://assassinscreed.ubisoft.com/game/en-us/home"> <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_1.jpg" />
                        </div>
                        <div>
                            <h4>Assasin's Creed</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="rating-badge purple">9.5</span>
                        <div class="recent-reviews-image">
                        <a href="https://gamesnostalgia.com/game/doom"> <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_2.jpg" /></a>
                        </div>
                        <div>
                            <h4>Doom</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="rating-badge green">9.1</span>
                        <div class="recent-reviews-image">
                         <a href="https://playoverwatch.com/en-gb/"> <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_3.jpg" /></a>
                        </div>
                        <div>
                            <h4>Overwatch</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="rating-badge violet">9.7</span>
                        <div class="recent-reviews-image">
                        <a href="https://www.rockstargames.com/games/info/V"> <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_4.jpg" /></a>
                        </div>
                        <div>
                            <h4>GTA</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="posts-comments">
                <div class="flex">
                    <div class="game-warrior">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/footer_logo.png" />
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                        <img class="footer-graphic" src="https://onclickwebdesign.com/wp-content/uploads/sword_lady_footer.png" />
                    </div>

                    <div class="posts-comments-box">
                        <h3>Latest Posts</h3>
                        <div class="post-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_1.jpg" />
                            <div>
                                <h5>June 21, 2019</h5>
                                <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                                <small>By: Admin</small>
                            </div>
                        </div>

                        <div class="post-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_2.jpg" />
                            <div>
                                <h5>June 21, 2019</h5>
                                <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                                <small>By: Admin</small>
                            </div>
                        </div>

                        <div class="post-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_3.jpg" />
                            <div>
                                <h5>June 21, 2019</h5>
                                <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                                <small>By: Admin</small>
                            </div>
                        </div>
                    </div>

                    <div class="posts-comments-box">
                        <h3>Top Comments</h3>
                        <div class="comments-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_1.jpg" />
                            <div>
                                <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                                <h5>June 21, 2019</h5>
                            </div>
                        </div>

                        <div class="comments-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_2.jpg" />
                            <div>
                                <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                                <h5>June 21, 2019</h5>
                            </div>
                        </div>

                        <div class="comments-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_3.jpg" />
                            <div>
                                <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                                <h5>June 21, 2019</h5>
                            </div>
                        </div>

                        <div class="comments-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_4.jpg" />
                            <div>
                                <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                                <h5>June 21, 2019</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="flex">
                <small>Copyright &copy; 2019 All rights reserved | This template is made with <span class="footer-heart">&#9829;</span> by <a href=" mailto: aishwaryaanand434@gmail.com" target="_blank">Aishwarya</a>.</small>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="https://www.tencent.com" target="_blank">Games</a>
                    </li>
                    <li>
                        <a href="https://www.pcgamer.com" target="_blank">Blog</a>
                    </li>

                    <li>
                        <a href="https://www.joyfreak.com" target="_blank">Forums</a>
                    </li>

                    <li>
                        <a href="mailto:aishwaryaanand434@gmail.com" target="_blank">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>

        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
    </body>
</html>