<?php require_once('./header.php'); ?>

<section class="relative bg-primary-50">
    <div class="flex items-center justify-center flex-col lg:min-h-[700px] lg:container">
        <div class="container flex relative items-center min-h-[430px] lg:h-full lg:p-0 lg:m-0 ">
        <button class="absolute bottom-[-20px] h-10 w-10 bg-primary-50 rounded-full flex lg:hidden items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 9.181 10.953">
                <path id="Path_9" data-name="Path 9" d="M0-1.96V7.665" transform="translate(4.59 2.51)" fill="none" stroke="#252936" stroke-linecap="round" stroke-width="1.1"></path>
                <line id="Line_6" data-name="Line 6" x2="3.813" y2="3.813" transform="translate(0.778 6.363)" fill="none" stroke="#252936" stroke-linecap="round" stroke-width="1.1"></line>
                <line id="Line_7" data-name="Line 7" x1="3.813" y2="3.813" transform="translate(4.59 6.363)" fill="none" stroke="#252936" stroke-linecap="round" stroke-width="1.1"></line>
            </svg>
        </button>

                        
            <div class="lg:z-10 w-full lg:max-w-[44%] xl:max-w-[500px] mb-8">
                
                                    <h1 class="sm:max-w-[75%] lg:max-w-none lg:text-[2.6rem]">Finally reveal your social stalkers and blockers</h1>
                
                                    <div>
                                        <p>Get to know who searches for your username, visits your profile, or even blocks you using our analytic algorithms, big data, and artificial intelligence.</p>
                                    </div>

                                    <form id="register" class="flex flex-col">
                                        <div class="flex">
                                            <input type="text" placeholder="Username" name="username" class="p-3 text-small bg-primary-50 border border-black w-2/3 rounded-tr-none rounded-br-none">
                                            <button id="go" class="appearance-none w-1/3 bg-black text-white text-small rounded-tl-none rounded-bl-none">Go</button>
                                        </div>
                                        <div class="hidden">
                                            <input name="email" type="email" placeholder="E-mail" class="p-3 text-small bg-primary-50 border border-black w-full my-4 rounded-tr-none rounded-br-none">
                                            <input name="password" type="password" placeholder="Password" class="p-3 text-small bg-primary-50 border border-black w-full mb-4 rounded-tr-none rounded-br-none">
                                            <input type="submit" value="Reveal" class="appearance-none w-full p-3 bg-black text-white text-small rounded-tl-none rounded-bl-none">
                                        </div>
                                    </form>

                
                                    <!-- <div class="btn-wrap flex-wrap mt-[10px] lg:mt-7"> -->
                                                    <!-- <a href="/" target="_self" class="btn btn-primary leading-none flex-grow">Get started</a> -->
                        
                                                    <!-- <a href="/" target="_self" class="btn btn-primary-light leading-none flex-grow">
                                Alle behandelingen                            </a> -->
                                            <!-- </div> -->
                            </div>
        </div>
                    <img src="/assets/img/home-img.png" srcset="/assets/img/home-img.png" alt="" class="w-screen min-h-[300px] h-[350px] md:h-[380px] object-cover object-center lg:h-full lg:w-1/2 lg:ml-auto lg:absolute lg:top-0 lg:bottom-0 lg:right-0">
            </div>
</section>

<?php require_once('./footer.php'); ?>