<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/culture.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/work.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/workdetail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/pro.fontawesome.com/releases/v5.10.0/css/all.css') }}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="{{ asset('assets/use.fontawesome.com/releases/v5.15.4/css/all.css') }}" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Hello, world!</title>
    <style>
        .hvwSKU span{
         color:rgb(255, 204, 0);
        }
        form select, form input {
            width: 100%;
            border: none;
            border-bottom: 2px solid;
            padding: 12px;
            }
            form:focus {
            otuline: none;
            }
                
    </style>
    <style>
    #navbar {
  background-color:#082C4E;
  position: fixed;
  top: 0px;
  width: 100%;
  display: block;
  transition: top 0.3s;
  padding: 20px 0px;
  /* padding-top:4%; */
}
   }


   

  </style>
  </head>


  <body>
  <div id="navbar">
  <nav  class="navbar navbar-expand-lg navbar-light" id="nav-sec">
  <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/images/lathran.svg') }}" width="40" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive" style="padding-bottom: 40px;">
                <div class="stroke" id="mainNav">  
                  <ul class="navbar-nav ms-auto navigation">
                    <li class="nav-item ">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Work</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Culture</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Career</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Resource Pool</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                  </ul>
              </div>
        </div>
  </div>
</nav>
</div>

@yield('content')

        <!-- footer start -->
<!-- 
        <footer class="ft mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                 <h1 class="want">We want to hear about<br> what you're building</h1><br>
        <a style="background-color: rgb(255, 204, 0);" class="viee" href="">Let's chat</a>
        <br><br>
            </div>
            <div class="col-md-6">
                <div class="pop block fadeInUp animated">
            <svg class="cone " viewBox="0 0 330 165" fill="none"><circle cx="165" r="118" stroke="#FFCC00" stroke-width="94"></circle></svg>
            <svg class="ctwo  " viewBox="0 0 330 330" fill="none"><circle cx="165" cy="165" r="118" stroke="#3098F3" stroke-width="94"></circle></svg>
        </div>
            </div>
        </div>
        
       
        <div class="row mt-5">
            <div class="col-md-5">
                <p class="fro">From Argentina to the world</p>
                <a class="hh" href="">contact@indicius.com</a>
               
            </div>
            <div class="col-md-2">
                <a class="hh" href="">Home</a><br>
                <a class="hh" href="">Work</a><br>
                <a class="hh" href="">Services</a><br>
                <a class="hh" href="">About</a><br>
            </div>
            <div class="col-md-2">
                <a class="hh" href="">Contact</a><br>
                <a class="hh" href="">Culture</a><br>
                <a class="hh" href="">Blog</a><br>
            </div>
            <div class="col-md-3">
                <a class="hh" href=""><i class="fab fa-instagram"></i></a><br>
                <a class="hh" href=""><i class="fab fa-twitter"></i></a><br>
                <a class="hh" href=""><i class="fab fa-linkedin-in"></i></a><br>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5">
                 <p class="fro">© Indicius 2022</p>
            </div>
            <div class="col-md-5">
                <p class="ind">INDI UPDATES. NO SPAM</p>
                <input type="text" placeholder="Subscribe to our news letter" name=""><i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
    </div>
</footer> -->

        

        <footer class="footer__StyledFooter-sc-1rtfxzx-0 fJtJzp">
          
        <div class=" footer-svg" >
                                <!-- <svg width="330" height="165" class="footer-1" viewBox="0 0 330 165" fill="none">
                                    <circle cx="165" r="118" stroke="#FFCC00" stroke-width="94"></circle>
                                </svg>
                                <svg width="330" height="330" class="footer-2" viewBox="0 0 330 330" fill="none">
                                    <circle cx="165" cy="165" r="118" stroke="#3098F3" stroke-width="94"></circle>
                                </svg> -->

                                <svg class="cone " viewBox="0 0 330 165" fill="none" style="z-index: 10;"><circle cx="165" r="118" stroke="#FFCC00" stroke-width="94"></circle></svg>
            <svg class="ctwo  " viewBox="0 0 330 330" fill="none"><circle cx="165" cy="165" r="118" stroke="#3098F3" stroke-width="94"></circle></svg>
                            </div>
            <div class="container__Container-sc-16ygruw-0 hGtgZg"><div>
                <div class="footer__first-section">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>We want to hear about what you're building</h1><br>
                            <a text="Let's chat" backgroundcolor="#FFCC00" color="#082C4E" hoverbackgroundcolor="#FFFFFF" hovercolor="#082C4E" class="button__StyledButtonLink-sc-1b8jl8x-0 iehxOt" hreflang="en" href="/contact/">Let's chat</a>
                        </div>
                        <div class="col-md-4">
                            <!-- <div class="footer__FooterIcons-sc-1rtfxzx-1 BGVoQ footer-svg" >
                                <svg width="330" height="165" viewBox="0 0 330 165" fill="none">
                                    <circle cx="165" r="118" stroke="#FFCC00" stroke-width="94"></circle>
                                </svg>
                                <svg width="330" height="330" class="footer-2" viewBox="0 0 330 330" fill="none">
                                    <circle cx="165" cy="165" r="118" stroke="#3098F3" stroke-width="94"></circle>
                                </svg>
                            </div> -->
                        </div>
                    </div>
                   
                   
            </div>
        </div>
        <div class="footer__sitemap">
            <div class="contact-info">
                <p>From Argentina to the world<br>
                    <a href="mailto:contact@shapack.com" target="_blank" rel="noopener noreferrer">contact@shapack.com</a></p><br>
                    <br><p class="copyright">© shapack 2022</p></div><div class="links">
                        <div>
                            <ul>
                                <li><a hreflang="en" href="/">Home</a></li>
                                <li><a hreflang="en" href="/work/">Work</a></li>
                                <li><a hreflang="en" href="/services/">Services</a></li>
                                <li><a aria-current="page" hreflang="en" class="" href="/about/">About</a></li>
                            </ul>
                            <ul>
                                <li><a hreflang="en" href="/contact/">Contact</a></li>
                                <li><a hreflang="en" href="/culture/">Culture</a></li>
                                <li><a hreflang="en" href="/blog/">Blog</a></li>
                                <li><a hreflang="en" href="/privacy-policy/">Privacy Policy</a></li>
                            </ul>
                        </div><br>
                        <br>
                        <form novalidate="" class="forms__Form-sc-1w5m4dm-0 newsletter-form__StyledForm-sc-8jui1x-0 GoqKy jSgIAO">
                            <div class="form__group">
                                <label for="email" aria-label="Email">Indi updates. No spam</label>
                                <input id="email" type="email" name="email" placeholder="Subscribe to our newsletter">
                                <button type="submit" aria-label="Submit">
                                    <div class="dots"></div>
                                    <svg class="arrow" width="18" height="10" viewBox="0 0 18 10" fill="none">
                                        <path d="M12.7774 0L11.3632 1.41421L13.9017 3.95273H0V5.94677H13.9017L11.3632 8.48528L12.7774 9.8995L17.7272 4.94975L12.7774 0Z" fill="white"></path>
                                    </svg>
                                    <svg class="check" width="16" height="12" viewBox="0 0 16 12" fill="none">
                                        <path d="M2 6L6 10L14 2" stroke="#3098F3" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square">
                                        </path>
                                    </svg>
                                    <svg class="error" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M10 2L2 10" stroke="#FE6571" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square">
                                    </path>
                                    <path d="M10 10L2 2" stroke="#FE6571" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square">
                                   </path></svg></button><small class="message message--success"> Yay! You're subscribed!</small><small class="message message--error"> Oopsie! This email is not valid.</small>
                                </div>
                            </form>
                        </div>
                        <div class="social-links"><ul><li><a href="https://www.instagram.com/indiciusar/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M16 3.7C20 3.7 20.479 3.715 22.061 3.787C23.7196 3.73048 25.3357 4.3178 26.571 5.426C27.6792 6.6613 28.2665 8.27743 28.21 9.936C28.282 11.521 28.3 12 28.3 16C28.3 20 28.285 20.479 28.213 22.061C28.2695 23.7196 27.6822 25.3357 26.574 26.571C25.3388 27.6793 23.7226 28.2666 22.064 28.21C20.482 28.282 20.008 28.297 16.003 28.297C11.998 28.297 11.524 28.282 9.942 28.21C8.28343 28.2665 6.6673 27.6792 5.432 26.571C4.32371 25.3358 3.73637 23.7196 3.793 22.061C3.718 20.479 3.7 20.005 3.7 16C3.7 11.995 3.715 11.521 3.787 9.939C3.73048 8.28043 4.3178 6.6643 5.426 5.429C6.66205 4.32007 8.2794 3.73269 9.939 3.79C11.521 3.718 12 3.7 16 3.7ZM16 1C11.927 1 11.416 1.017 9.815 1.09C7.47914 1.04811 5.21903 1.91879 3.515 3.517C1.91652 5.22086 1.04579 7.48109 1.088 9.817C1.017 11.416 1 11.927 1 16C1 20.073 1.017 20.584 1.09 22.185C1.04811 24.5209 1.91879 26.781 3.517 28.485C5.22086 30.0835 7.48109 30.9542 9.817 30.912C11.417 30.985 11.929 31.002 16.002 31.002C20.075 31.002 20.586 30.985 22.187 30.912C24.5229 30.9539 26.783 30.0832 28.487 28.485C30.0855 26.7811 30.9562 24.5209 30.914 22.185C30.987 20.585 31.004 20.073 31.004 16C31.004 11.927 30.987 11.416 30.914 9.815C30.9559 7.47914 30.0852 5.21903 28.487 3.515C26.7831 1.91652 24.5229 1.04579 22.187 1.088C20.584 1.017 20.073 1 16 1Z" fill="white"></path><path d="M16 8.30078C14.4771 8.30078 12.9884 8.75238 11.7221 9.59846C10.4558 10.4446 9.46891 11.6471 8.88612 13.0541C8.30332 14.4611 8.15084 16.0093 8.44794 17.503C8.74505 18.9966 9.4784 20.3686 10.5553 21.4455C11.6321 22.5224 13.0041 23.2557 14.4978 23.5528C15.9914 23.8499 17.5397 23.6974 18.9467 23.1147C20.3536 22.5319 21.5562 21.5449 22.4023 20.2787C23.2484 19.0124 23.7 17.5237 23.7 16.0008C23.7 13.9586 22.8887 12.0001 21.4447 10.5561C20.0007 9.11203 18.0422 8.30078 16 8.30078ZM16 21.0008C15.0111 21.0008 14.0444 20.7075 13.2221 20.1581C12.3999 19.6087 11.759 18.8278 11.3806 17.9142C11.0022 17.0006 10.9031 15.9952 11.0961 15.0253C11.289 14.0554 11.7652 13.1645 12.4645 12.4652C13.1637 11.766 14.0546 11.2898 15.0245 11.0969C15.9944 10.9039 16.9998 11.0029 17.9134 11.3814C18.827 11.7598 19.6079 12.4007 20.1573 13.2229C20.7067 14.0452 21 15.0119 21 16.0008C21 17.3269 20.4732 18.5986 19.5355 19.5363C18.5978 20.474 17.3261 21.0008 16 21.0008Z" fill="white"></path><path d="M24.007 9.79336C25.0011 9.79336 25.807 8.98747 25.807 7.99336C25.807 6.99925 25.0011 6.19336 24.007 6.19336C23.0129 6.19336 22.207 6.99925 22.207 7.99336C22.207 8.98747 23.0129 9.79336 24.007 9.79336Z" fill="white"></path></svg></a></li><li><a href="https://twitter.com/indicius?lang=es" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><svg width="24" height="20" viewBox="0 0 24 20" fill="none"><path d="M24 2.5585C23.1075 2.95 22.1565 3.2095 21.165 3.3355C22.185 2.7265 22.9635 1.7695 23.3295 0.616C22.3785 1.183 21.3285 1.5835 20.2095 1.807C19.3065 0.8455 18.0195 0.25 16.6155 0.25C13.8915 0.25 11.6985 2.461 11.6985 5.1715C11.6985 5.5615 11.7315 5.9365 11.8125 6.2935C7.722 6.094 4.1025 4.1335 1.671 1.147C1.2465 1.8835 0.9975 2.7265 0.9975 3.634C0.9975 5.338 1.875 6.8485 3.183 7.723C2.3925 7.708 1.617 7.4785 0.96 7.117C0.96 7.132 0.96 7.1515 0.96 7.171C0.96 9.562 2.6655 11.548 4.902 12.0055C4.5015 12.115 4.065 12.1675 3.612 12.1675C3.297 12.1675 2.979 12.1495 2.6805 12.0835C3.318 14.032 5.127 15.4645 7.278 15.511C5.604 16.8205 3.4785 17.6095 1.1775 17.6095C0.774 17.6095 0.387 17.5915 0 17.542C2.1795 18.9475 4.7625 19.75 7.548 19.75C16.602 19.75 21.552 12.25 21.552 5.749C21.552 5.5315 21.5445 5.3215 21.534 5.113C22.5105 4.42 23.331 3.5545 24 2.5585Z" fill="white"></path></svg></a></li><li><a href="https://medium.com/indicius" target="_blank" rel="noopener noreferrer" aria-label="Medium"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M29 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V29C1 29.5304 1.21071 30.0391 1.58579 30.4142C1.96086 30.7893 2.46957 31 3 31H29C29.5304 31 30.0391 30.7893 30.4142 30.4142C30.7893 30.0391 31 29.5304 31 29V3C31 2.46957 30.7893 1.96086 30.4142 1.58579C30.0391 1.21071 29.5304 1 29 1ZM25.923 8.108L24.314 9.65C24.2458 9.70187 24.1931 9.77139 24.1615 9.85106C24.13 9.93073 24.1208 10.0175 24.135 10.102V21.437C24.1207 21.5215 24.1298 21.6083 24.1614 21.688C24.1929 21.7677 24.2457 21.8372 24.314 21.889L25.885 23.432V23.77H17.985V23.432L19.612 21.85C19.773 21.69 19.773 21.643 19.773 21.398V12.237L15.247 23.737H14.636L9.363 12.237V19.937C9.34171 20.0968 9.35693 20.2594 9.4075 20.4125C9.45808 20.5656 9.5427 20.7053 9.655 20.821L11.772 23.388V23.727H5.772V23.388L7.889 20.821C8.00036 20.7052 8.08305 20.5649 8.13046 20.4114C8.17786 20.2579 8.18866 20.0954 8.162 19.937V11.031C8.17388 10.9093 8.15699 10.7866 8.1127 10.6726C8.0684 10.5587 7.99794 10.4567 7.907 10.375L6.023 8.108V7.77H11.866L16.382 17.67L20.353 7.77H25.922L25.923 8.108Z" fill="white"></path></svg></a></li><li><a href="https://dribbble.com/Indicius" target="_blank" rel="noopener noreferrer" aria-label="Dribbble"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 32C7.2 32 0 24.8 0 16C0 7.2 7.2 0 16 0C24.8 0 32 7.2 32 16C32 24.8 24.8 32 16 32ZM29.5 18.2C29 18 25.3 16.9 21 17.6C22.8 22.5 23.5 26.5 23.7 27.3C26.7 25.3 28.9 22 29.5 18.2ZM21.3 28.6C21.1 27.4 20.3 23.2 18.4 18.2H18.3C10.6 20.9 7.8 26.2 7.6 26.7C9.9 28.5 12.8 29.6 16 29.6C17.9 29.7 19.7 29.3 21.3 28.6ZM5.8 25.2C6.1 24.7 9.9 18.5 16.9 16.2C17.1 16.1 17.3 16.1 17.4 16C17.1 15.2 16.7 14.4 16.3 13.7C9.5 15.7 2.9 15.7 2.3 15.6C2.3 15.7 2.3 15.9 2.3 16C2.3 19.5 3.7 22.7 5.8 25.2ZM2.6 13.2C3.2 13.2 8.8 13.2 15.2 11.5C12.9 7.5 10.5 4.1 10.1 3.6C6.4 5.5 3.5 9 2.6 13.2ZM12.8 2.7C13.2 3.2 15.7 6.6 17.9 10.7C22.8 8.9 24.8 6.1 25.1 5.8C22.7 3.7 19.5 2.4 16 2.4C14.9 2.4 13.8 2.5 12.8 2.7ZM26.6 7.4C26.3 7.8 24 10.7 19 12.8C19.3 13.5 19.6 14.1 19.9 14.8C20 15 20.1 15.3 20.2 15.5C24.7 14.9 29.3 15.8 29.7 15.9C29.6 12.7 28.5 9.7 26.6 7.4Z" fill="white"></path></svg></a></li><li><a href="https://ar.linkedin.com/company/indicius" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M29 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V29C1 29.5304 1.21071 30.0391 1.58579 30.4142C1.96086 30.7893 2.46957 31 3 31H29C29.5304 31 30.0391 30.7893 30.4142 30.4142C30.7893 30.0391 31 29.5304 31 29V3C31 2.46957 30.7893 1.96086 30.4142 1.58579C30.0391 1.21071 29.5304 1 29 1ZM9.887 26.594H5.374V12.25H9.887V26.594ZM7.63 10.281C7.11117 10.2794 6.60444 10.1241 6.17381 9.83472C5.74319 9.54533 5.40798 9.13481 5.21053 8.65501C5.01307 8.17522 4.96223 7.64767 5.06442 7.139C5.16661 6.63033 5.41724 6.16335 5.78467 5.79703C6.1521 5.43072 6.61984 5.18151 7.12882 5.08087C7.6378 4.98023 8.16519 5.03268 8.64438 5.23159C9.12357 5.4305 9.53307 5.76696 9.82116 6.19846C10.1092 6.62997 10.263 7.13717 10.263 7.656C10.2631 8.00143 10.1951 8.34349 10.0627 8.66255C9.93032 8.98161 9.73625 9.2714 9.49162 9.51528C9.24699 9.75917 8.95662 9.95235 8.63716 10.0838C8.31769 10.2152 7.97543 10.2822 7.63 10.281ZM26.621 26.594H22.2V19.656C22.2 17.969 22.2 15.906 19.85 15.906C17.5 15.906 17.217 17.688 17.217 19.562V26.688H12.8V12.25H16.936V14.219H17.03C17.4566 13.4815 18.0756 12.8738 18.8208 12.4609C19.5661 12.0481 20.4095 11.8455 21.261 11.875C25.774 11.875 26.62 14.875 26.62 18.719L26.621 26.594Z" fill="white">
            </path>
        </svg>
    </a></li>
</ul>
</div>
</div>
</div>


       </footer>

        <!-- end footer -->
<!-- <script>
         var prevScrollpos = window.pageYOffset;
         window.onscroll = function() {
         var currentScrollPos = window.pageYOffset;
           if (prevScrollpos > currentScrollPos) {
             document.getElementById("navbar").style.top = "0";
           } else {
             document.getElementById("navbar").style.top = "-110px";
           }
           prevScrollpos = currentScrollPos;
         }
      </script> -->
      <script
         src="{{ asset('assets/code.jquery.com/jquery-3.6.0.js') }}"
         integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
         crossorigin="anonymous"></script>
      <script type="text/javascript">
         // Trigger CSS animations on scroll.
         // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/
         
         // Looking for a version that also reverses the animation when
         // elements scroll below the fold again?
         // --> Check https://codepen.io/bramus/pen/vKpjNP
         
         jQuery(function($) {
         
         // Function which adds the 'animated' class to any '.animatable' in view
         var doAnimations = function() {
         
         // Calc current offset and get all animatables
         var offset = $(window).scrollTop() + $(window).height(),
             $animatables = $('.animatable');
         
         // Unbind scroll handler if we have no animatables
         if ($animatables.length == 0) {
           $(window).off('scroll', doAnimations);
         }
         
         // Check all animatables and animate them if necessary
             $animatables.each(function(i) {
            var $animatable = $(this);
                 if (($animatable.offset().top + $animatable.height() - 20) < offset) {
             $animatable.removeClass('animatable').addClass('animated');
                 }
         });
         
         };
         
         // Hook doAnimations on scroll, and trigger a scroll
         $(window).on('scroll', doAnimations);
         $(window).trigger('scroll');
         
         });
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>
      <script src="{{ asset('assets/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script> 
      <script src="{{ asset('assets/ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <script>
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0px";

      
//   } else {
//     document.getElementById("navbar").style.top = "-570px";
    
    
//   }
//   prevScrollpos = currentScrollPos;
// }

window.onscroll = function(e) { 
    var scrollY = window.pageYOffset || document.documentElement.scrollTop;
    var header = document.querySelector('#navbar');
    var height = -header.clientHeight;
    header.style.transition = 'transform 0.1s';

    (scrollY <= Math.max(this.lastScroll, 50) || window.innerWidth <= 1200 || this.loaded === undefined)
      ? header.style.transform = 'translateY(0px)'
      : header.style.transform = 'translateY(' + height + 'px)'

    this.lastScroll = scrollY;
    this.loaded = true;
}
 </script>

  <!-- <script>
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  // 20 is an arbitrary number here, just to make you think if you need the prevScrollpos variable:
  if (currentScrollPos > 20) {
    // I am using 'display' instead of 'top':
    document.getElementById("navbar").style.display = "none";
  } else {
    document.getElementById("navbar").style.display = "initial";
  }
}
</script> -->


</html>