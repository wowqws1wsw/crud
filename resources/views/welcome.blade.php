<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/15th_guards-logo.png" alt="15th Guards Motor Rifle Brigade Logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('recruitment.index') }}">Form</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('organizations.index') }}">Organizations</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To 15th Guards Motor Rifle Brigade!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>

        <!-- Services Section-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">What are Our Combat Roles?</h2>
                    <h3 class="section-subheading text-muted">These are our main combat roles.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="assets/img/counter_insurgency_1.jpg" alt="Counter Insurgency" height="150px">
                        <h4 class="my-3">Counter Insurgency</h4>
                        <p class="text-muted">The brigade’s experience in counter-insurgency (COIN) operations is rooted in the complex and fluid combat environment of Chechnya, where they engaged in operations against insurgent forces employing guerrilla tactics.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/mechanized_infantry.png" alt="Mechanized Infantry" height="150px">
                        <h4 class="my-3">Mechanized Infantry</h4>
                        <p class="text-muted">The 15th SMRB is primarily a mechanized infantry unit, meaning it operates alongside armored vehicles to enhance mobility and firepower. The brigade typically consists of multiple motor rifle battalions equipped with infantry fighting vehicles (IFVs), such as the BMP series, which provide transport, fire support, and protection for soldiers in combat. </p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/peacekeeping.jpg" alt="Peacekeeping" height="150px">
                        <h4 class="my-3">Peacekeeping</h4>
                        <p class="text-muted">The brigade follows strict rules of engagement during peacekeeping operations, emphasizing the protection of civilians and the use of force only as a last resort.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">A summary of how the unit was formed.</h3>
                </div>
                <ul class="timeline">
                                <li>
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/first.jpg" width="150px" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>1942-1945</h4>
                                            <h4 class="subheading">the unit is formed</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">The roots of the brigade date back to the 15th Guards Rifle Division, formed during the critical stages of World War II. The division originally started as a regular rifle unit, but due to its exceptional performance during the Battle of Stalingrad, it was awarded the honorary title of "Guards" and became part of the elite Soviet formations.<br/>
                                            The unit participated in various major operations during the war, including the Battle of Kursk, the liberation of Eastern Europe, and the capture of Berlin. These battles were pivotal in the defeat of Nazi Germany, and units like the 15th Guards Rifle Division were recognized for their valor and effectiveness.</p></div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/second.jpg" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>1990s</h4>
                                            <h4 class="subheading">the restructured to motor rifle brigade</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">In the early 1990s, the division was downsized and restructured into the 15th Separate Guards Motor Rifle Brigade, located in Samara, in the Central Military District. The transformation into a motor rifle brigade signified a shift towards increased mobility and mechanization, adapting to the evolving nature of modern warfare.<br/> 
                                            The brigade is equipped with infantry fighting vehicles (IFVs) such as the BMP series and armored personnel carriers (APCs) like the BTR series, as well as other support vehicles for rapid movement and combat readiness. Its arsenal typically includes a range of modern Russian infantry weapons, artillery, anti-tank systems, and air-defense units.
                                        </p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/third.jpg" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>1994-2008</h4>
                                            <h4 class="subheading">Post Soviet conflicts and peacekeeping</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">The brigade gained combat experience during the First Chechen War (1994–1996) and the Second Chechen War (1999–2009), where Russian forces faced heavy resistance from separatist and Islamist fighters in the North Caucasus region.
                                            The brigade was deployed for urban combat and counter-insurgency operations, often encountering brutal guerrilla tactics.<br/>Following the dissolution of the Soviet Union, the brigade participated in peacekeeping operations within the Commonwealth of Independent States (CIS), primarily in the post-Soviet republics that experienced conflict after independence.<br/> 
                                            Notable deployments include operations in Transnistria (Moldova), where Russian peacekeepers helped mediate the conflict between Moldovan forces and separatists. </p></div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/fourth.jpg" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>2014</h4>
                                            <h4 class="subheading">Involment in Donbas</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">Beginning in 2014, the 15th Separate Guards Motor Rifle Brigade has been linked to covert Russian military operations in eastern Ukraine, particularly in the Donetsk and Luhansk regions. These operations were part of the broader Russian support for separatist groups in the Donbas, following Russia’s annexation of Crimea.<br/>
                                            15th Brigade, played a critical role in the fighting. The brigade reportedly engaged in combat against Ukrainian forces and helped maintain supply lines and logistical support for separatist groups.</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/fifth.jpg" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>2015</h4>
                                            <h4 class="subheading">Involment in Syria</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">The Russian military intervention in Syria, which began in 2015 in support of the Syrian government under Bashar al-Assad, saw the deployment of Russian ground forces to complement air and naval operations. Although the intervention has primarily involved air support and advisory roles, Russian ground units, including those from the 15th Separate Guards Motor Rifle Brigade, have provided security for Russian bases, conducted patrols, and engaged in combat with ISIS and other rebel factions.</p></div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/sixth.jpg" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>2022 - today</h4>
                                            <h4 class="subheading">Special Military Operation in Ukraine</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">As part of the Russian military buildup that culminated in the February 2022 invasion of Ukraine, the 15th SMRB was one of the units mobilized for the broader operation. Russian forces faced fierce resistance from Ukrainian defenders, leading to a protracted and intense conflict across multiple fronts.
                                        <br/>The brigade’s experience in mechanized warfare and peacekeeping missions likely contributed to its role in the conflict, particularly in securing territory and managing logistics.
                                    </p></div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <h4>
                                            Will you
                                            <br />
                                            be part
                                            <br />
                                            of our
                                            <br />
                                            Story?
                                        </h4>
                                    </div>
                                </li>
                        </div>
                </ul>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">If you're interested to join, contact us</h2>
                    <h3 class="section-subheading text-muted">Reach out to us.</h3>
                </div>
                <form id="contactForm" action="{{ route('recruitment.store') }}" method="POST">
                    @csrf
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

