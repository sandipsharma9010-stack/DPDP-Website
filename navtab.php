<?php

$req_url = $_SERVER['REQUEST_URI'];

if(strpos($req_url, 'blog')) { $actblog = 'active'; }
if(strpos($req_url, 'newsletter')) { $actnews = 'active'; }
if(strpos($req_url, 'whitepaper')) { $actwhite = 'active'; }
if(strpos($req_url, 'research')) { $actresearch = 'active'; }
if(strpos($req_url,'inthenew')) { $actinnew = 'active'; }
if(strpos($req_url,'webinar')) { $actwebinar = 'active'; }
if(strpos($req_url,'event')) { $actevent = 'active'; }

?>

<div class="container py-4">
            <ul class="nav navs nav-tabs">
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actblog;?>" href="blogs.php">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actnews;?>" href="newsletters.php">Newsletters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actwhite;?>" href="whitepapers.php">Whitepapers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actresearch;?>" href="research.php">Research Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actinnew;?>" href="inthenews.php">In the News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actwebinar;?>" href="webinars.php">Webinars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-links <?=$actevent;?>" href="events.php">Upcoming Events</a>
                </li>
            </ul>
        </div>
