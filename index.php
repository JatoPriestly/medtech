<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - MedTech Assist</title>
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <style>
        .nav-item  {
            color: var(--e-global-color-primary);
            fill: var(--e-global-color-primary);
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 28px;
            padding-bottom: 28px;
        }
        .nav-item a{
            color:#05466b;
        }
        nav{
            position: fixed;
            width: 100%;
            height: 88px;
            margin-top: 0px;
            margin-bottom: 0px;
            top: 0px;
        }
        .nav-item:hover{
            background-color: var(--e-global-color-primary);
        }
        .dropdown-menu{
            display: none;
        }
        .nav-item:hover .dropdown-menu{
            display: block;
        }
        .primary{
            /* background-color: var(--e-global-color-primary); */
            color: #05466b;
        }
        .bg-primary {
            background-color: #05466b !important;
        }
        .secondary{
            /* background-color: var(--e-global-color-secondary); */
            color: #5ce1e6;
        }
        .up{
            margin-top: 85px;
        }
        .hero-section {
            position: relative;
            height: 450px;
            background: url('assets/img/stock-photo-quality-assurance-concept-ensuring-the-products-or-services-meet-the-required-standards-and-2476030261.jpg') center center / cover no-repeat fixed;
        }
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: transparent;
            background-image: linear-gradient(136deg, rgb(5, 70, 107,0.8) 41%, rgb(255, 122, 89,0.6) 100%);
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }
        .hero-content {
        position: relative;
        /* z-index: 2; */
    }
    .help-section h2 {
        margin: 20px 0;
        padding: 10px 0;
    }
    .help-section .row {
    position: relative;
    z-index: 2; /* Make sure the content is above the overlay */
}

    .help-card {
        height: 100%;
        /* min-height: 280px; */
        position: relative;
        background-size: cover;
        background-position: center;
        color: white;
        border: none;
        overflow: hidden;
        overflow: hidden; /* Prevents image overflow */
    background-size: cover;
    background-position: center;
    transition: transform 0.5s ease-in-out;
    }

.help-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: background 0.5s ease-in-out;
}
.bg-o1::before{
    background: rgba(156, 25, 243, 0.5); /* Overlay with transparency */
}
.bg-o2::before{
    background: rgba(214, 50, 9, 0.493); /* Overlay with transparency */
}
.bg-o3::before{
    background: rgba(71, 219, 170, 0.5); /* Overlay with transparency */
}
.bg-o4::before{
    background: rgba(6, 149, 245, 0.5); /* Overlay with transparency */
}
.bg-o5::before{
    background: rgba(172, 236, 53, 0.5); /* Overlay with transparency */
}
.bg-o6::before{
    background: rgba(141, 132, 136, 0.5); /* Overlay with transparency */
}
.help-card:hover {
    transform: scale(1.05); /* Zoom effect on hover */
}
.card-text{
    column-gap: 0px;
    color: var( --e-global-color-primary );
    font-family: "Source Sans Pro", Sans-serif;
    font-size: 20px;
    font-weight: 400;
    line-height: 28px;
}

    .help-card .card-body {
        height: 100%;
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 50px 20px;
    }

    @media (max-width: 768px) {
        .nav-item {
            background-color: white;
            color: #05466b;
            fill: var(--e-global-color-primary);
            padding:5%;
        }
        .help-card .card-body {
    height: 280px;
    padding: 30px 15px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

    }
    .tt{
        font-family: "DIN PRO BLACK", Sans-serif;
    font-size: 42px;
    font-weight: 900;
    color: var( --e-global-color-431ca40 );
    }
.help-section {
    background: transparent;
}
.help-card .btn {
    border-radius: 0; /* Makes the button square */
    border: 2px solid white;
    background: transparent;
    color: white;
}

.help-card .btn:hover {
    background: white;
    color: #05466b;
}

/* Different color for even-numbered cards */
.help-card:nth-child(even)::before {
    background: rgba(255, 122, 89, 0.6); /* Different overlay color for even cards */
}
/* Adjust for even-numbered cards on hover */
.help-card:nth-child(even):hover::before {
    background: rgba(255, 122, 89, 0.3); /* More transparent for even cards */
}
.pads{
    margin: 20px 0px 0px 0px;


}
.pads p {
    padding: 15px;
}

    </style>
        <style>
            @keyframes fadein {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .button{
                background-color: #ff7a59;
                padding: 15px 20px 15px 20px;
                /* font-size: 22px; */
                font-family: Source Sans Pro, Sans-serif;
                fill: var( --e-global-color-431ca40 );
                border-radius: 3px;
                box-sizing: border-box;
                line-height: 1;
                transition: all .3s;
                text-align: center;
            }
            .button:hover{
                background-color: #fff;
                color:#ff7a59
            }
            .rounded-button{
                border-radius: 50px;
                border: #ff7a59 1px solid;
                color: #fff;
            }
            .rounded-button:hover{
                border: #ff7a59 1px solid;
            }
            .pads .row{
                max-width: 1140px;   
                width: 100%;
                         
            }
          
            .navbar-nav li:hover{
                background-color: #05466b;
            }
            .navbar-nav li:hover > a{
                background-color: #05466b;
                color: #fff;
            }

    .dropdown-menu {
        border-radius: 0; /* Makes the dropdown menu square */
        top: 100%; /* Ensures dropdown starts directly under the nav bar */
        left: 0;
        /* right: 0; */ 
    }
    .nav-item.dropdown:hover .nav-link:hover > a{
        background-color: black; /* Hover background color */
        color: white; /* Hover text color */
    }
</style>

</head>

<body  style="background: white;">
<?php include 'include/navbar.php'; ?>

    <section class="hero-section up">
        <div class="container h-100 hero-content">
            <div class="row h-100">
                <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center" data-aos="fade-up" data-aos-duration="1000">
                    <div style="max-width: 500px;">
                        <h1 class="text-uppercase fw-bold">Empowering the Future of Healthcare with Expert Solutions</h1>
                        <p class="my-3">From Regulatory Compliance to Innovation, we help life sciences and healthcare organizations grow while ensuring the highest standards of quality and safety.</p>
                        <a class="btn button" href="#!" role="button" data-aos="zoom-in" data-aos-delay="300">Explore Our Services 
                            <i class="far fa-arrow-alt-circle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-dark secondary py-3 text-bg-light">
        <div class="container text-center py-3">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col" style="animation: fadein 0s ease-in-out infinite; animation-delay: 0s;" data-bs-toggle="animation" data-bs-animation="flipInX">
                    <a href="#"><img class="m-3" src="assets/img/brands/google.png" style="filter: invert(100%) sepia(1) saturate(5) hue-rotate(160deg) brightness(1.1);"></a>
                </div>
                <div class="col d-none d-sm-block" style="animation: fadein 5s ease-in-out infinite; animation-delay: 5s;" data-bs-toggle="animation" data-bs-animation="flipInX" data-bs-animation-delay="5s">
                    <a href="#"><img class="m-3" src="assets/img/brands/microsoft.png" style="filter: invert(100%) sepia(1) saturate(5) hue-rotate(160deg) brightness(1.1);"></a>
                </div>
                <div class="col d-none d-md-block" style="animation: fadein 10s ease-in-out infinite; animation-delay: 10s;" data-bs-toggle="animation" data-bs-animation="flipInX" data-bs-animation-delay="10s">
                    <a href="#"><img class="m-3" src="assets/img/brands/apple.png" style="filter: invert(100%) sepia(1) saturate(5) hue-rotate(160deg) brightness(1.1);"></a>
                </div>
                <div class="col d-none d-lg-block" style="animation: fadein 15s ease-in-out infinite; animation-delay: 15s;" data-bs-toggle="animation" data-bs-animation="flipInX" data-bs-animation-delay="15s">
                    <a href="#"><img class="m-3" src="assets/img/brands/facebook.png" style="filter: invert(100%) sepia(1) saturate(5) hue-rotate(160deg) brightness(1.1);"></a>
                </div>
            </div>
        </div>
    </section>

<!-- if i have #05466b as primary color and i have #5ce1e6 as secondary color what color should i use as buttun colors to make a great mixture for a medtech company -->

  
<section class="hero-section" style=" background: url('assets/img/Web-cover-v3.png') center center / cover no-repeat fixed ;height: 100%;">
    <div class="container py-5">
    <h3 class="text-center secondary fw-bold" style="color: #fff;" >We provide tailored solutions to help medical device companies navigate quality management and regulatory requirements efficiently.</h3>

        <div class="mx-auto" style="max-width: 1140px;">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                <div class="col" >
                    <div class="card help-card bg-o1" style="background-image: url('assets/img/stock-photo-hand-arranging-wood-block-with-healthcare-medical-icon-health-insurance-concept-1548988871.jpg');">
                        <div class="card-body">
                            <h5 class="fw-bold card-title">Consulting</h5>
                            <a href="consultant.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card help-card bg-o2" style="background-image: url('assets/img/stock-photo-compliance-in-business-concept-stay-in-line-with-business-policies-businessman-touching-2450677463.jpg');">
                        <div class="card-body">
                            <h5 class="fw-bold card-title">Regulatory Compliance Management</h5>
                            <a href="service-regulatory-compliance-management.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card help-card bg-o3" style="background-image: url('assets/img/stock-photo-qms-quality-management-system-concept-formalized-system-for-achieving-quality-policies-and-2141328099.jpg');">
                        <div class="card-body">
                            <h5 class="fw-bold card-title">Quality Management Systems</h5>
                            <a href="service-quality-management-systems.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card help-card bg-o4" style="background-image: url('assets/img/stock-photo-quality-assurance-concept-ensuring-the-products-or-services-meet-the-required-standards-and-2476030261.jpg');">
                        <div class="card-body">
                            <h5 class="fw-bold card-title">Quality Assurance</h5>
                            <a href="service-quality-assurance.php"><button class="btn btn-primary primary btn-sm" type="button">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card help-card bg-o5" style="background-image: url('assets/img/stock-photo-serious-african-woman-supervisor-boss-teach-diverse-staff-workers-explain-project-plan-paperwork-at-1477336865.jpg');">
                        <div class="card-body">
                            <h5 class="fw-bold card-title">Training & Education</h5>
                            <a href="service-training-education.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card help-card bg-o6" style="background-image: url('assets/img/stock-photo-work-safety-concept-wooden-cube-blocks-with-icon-of-safety-at-workplace-safety-first-protections-2320738081.jpg');">
                        <div class="card-body">
                            <h5 class="fw-bold card-title">Health & Safety</h5>
                            <a href="service-health-safety.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=" d-none d-md-block align-items-center justify-content-center" style="color: #05466b; background: #fff; position: relative;">
    <div class="container py-5 bg-white text-dark">

        <div class="row mb-5 text-left">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="fw-bold">THE EXPERTS YOU NEED, WHEN YOU NEED THEM<br></h2>
                <!-- <p class="w-lg-50 secondary">No matter the project, our team can handle it.&nbsp;</p> -->
            </div>
        </div>

        <!-- Row 1: Text + Image -->
        <div class="row no-gutters align-items-stretch mb-0" data-aos="fade-up">
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark" style="padding: 10px;">
                    <div class="card-body d-flex flex-column">
                        <i class="fas fa-handshake" style="width: 3em; height: 1em; font-size:50px; font-size:50px; color: #05466b; margin-left: 15px;" class="mb-3"></i>
                        <h4 class="card-title" style="color: #05466b; margin-left: 15px;">Building Strong Partnerships</h4>
                        <p class="card-text">We are committed to forming strong, collaborative relationships with healthcare companies, organizations, regulatory bodies, and other stakeholders. By understanding their unique needs and challenges, we aim to offer tailored solutions that drive growth and ensure compliance with the highest standards of quality and safety.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark">
                    <img src="assets/img/stock-photo-hands-business-and-people-with-puzzle-in-office-of-problem-solving-collaboration-and-creative-2532298745.jpg" class="card-img-top w-100 border-0 rounded-0" alt="Building Strong Partnerships">
                </div>
            </div>
        </div>

        <!-- Row 2: Image + Text -->
        <div class="row no-gutters align-items-stretch mb-0" data-aos="fade-up">
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark">
                    <img src="assets/img/stock-photo-skilled-s-caucasian-leader-in-eyeglasses-coaching-interested-business-people-giving-educational-1896357391.jpg" class="card-img-top w-100 border-0 rounded-0" alt="Teamwork">
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark" style="padding: 10px;">
                    <div class="card-body d-flex flex-column">
                        <i class="fas fa-chalkboard-teacher" style="width: 3em; height: 1em; font-size:50px; font-size:50px; color: #5ce1e6; margin-left: 15px;" class="mb-3"></i>
                        <h4 class="card-title" style="color: #5ce1e6; margin-left: 15px;">Expanding Expertise Across Key Areas</h4>
                        <p class="card-text">Our plan involves continuous investment in expanding our expertise and services across critical areas, including regulatory compliance, quality management, research and development, training, and clinical research. We are dedicated to staying at the forefront of industry trends and innovations, so we can provide our clients with the most relevant and cutting-edge solutions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Text + Image -->
        <div class="row no-gutters align-items-stretch mb-0" data-aos="fade-up">
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark" style="padding: 10px;">
                    <div class="card-body d-flex flex-column">
                        <i class="fas fa-lightbulb" style="width: 3em; height: 1em; font-size:50px; font-size:50px; color: black; margin-left: 15px;" class="mb-3"></i>
                        <h4 class="card-title" style="color: black; margin-left: 15px;">Fostering Innovation</h4>
                        <p class="card-text">Innovation is at the heart of everything we do. We are focused on helping companies navigate the ever-changing landscape of healthcare and life sciences, encouraging innovation while ensuring that new solutions meet global standards for safety and quality. Our team will continue to drive forward-thinking solutions in every project we take on.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark">
                    <img src="assets/img/stock-photo-hand-holding-magnifying-glass-over-quality-assurance-certificate-to-review-and-approval-documents-2411541121.jpg" class="card-img-top w-100 border-0 rounded-0" alt="Innovation">
                </div>
            </div>
        </div>

        <!-- Row 4: Image + Text -->
        <div class="row no-gutters align-items-stretch mb-0" data-aos="fade-up">
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark">
                    <img src="assets/img/stock-photo-woman-mentor-and-whiteboard-in-office-for-training-teaching-and-learning-for-skill-or-career-2488357409.jpg" class="card-img-top w-100 border-0 rounded-0" alt="Education and Training">
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark" style="padding: 10px;">
                    <div class="card-body d-flex flex-column">
                        <i class="fas fa-book" style="width: 3em; height: 1em; font-size:50px; color: #05466b;margin-left: 15px;" class="mb-3"></i>
                        <h4 class="card-title" style="color: #05466b;margin-left: 15px;">Promoting Education and Training</h4>
                        <p class="card-text">To ensure sustainable growth and industry advancement, we prioritize education and training. We plan to offer a range of educational programs and workshops that help organizations develop their teams and stay ahead in a rapidly evolving healthcare environment.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 5: Text + Image -->
        <div class="row no-gutters align-items-stretch mb-0" data-aos="fade-up">
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark" style="padding: 10px;">
                    <div class="card-body d-flex flex-column">
                        <i class="fas fa-check-circle" style="width: 3em; height: 1em; font-size:50px; font-size:50px; color: #5ce1e6; margin-left: 15px;" class="mb-3"></i>
                        <h4 class="card-title" style="color: #5ce1e6;margin-left: 15px;">Commitment to Quality and Safety</h4>
                        <p class="card-text">Quality and safety are non-negotiable in the healthcare sector. We will continue to work closely with clients to ensure their products meet all regulatory requirements and the highest standards. Our team will remain committed to helping organizations uphold these principles throughout every stage of their business, from product development to market delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark">
                    <img src="assets/img/stock-photo-inscription-quality-on-magnifying-glass-word-blue-background-business-concept-2373317271.jpg" class="card-img-top w-100 border-0 rounded-0" alt="Quality and Safety">
                </div>
            </div>
        </div>

        <!-- Row 6: Image + Text -->
        <div class="row no-gutters align-items-stretch mb-0" data-aos="fade-up">
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark">
                    <img src="assets/img/stock-photo-hse-health-safety-environment-concept-standard-safe-industrial-work-and-industrial-businessman-2430380867.jpg" class="card-img-top w-100 border-0 rounded-0" alt="Sustainable Growth">
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex">
                <div class="card w-100 border-0 rounded-0 bg-white text-dark" style="padding: 10px;">
                    <div class="card-body d-flex flex-column">
                        <i class="fas fa-leaf" style="width: 3em; height: 1em; font-size:50px; font-size:50px; color: black;margin-left: 15px;" class="mb-3"></i>
                        <h4 class="card-title" style="color: black;margin-left: 15px;">Sustainable Growth</h4>
                        <p class="card-text">We are focused on fostering long-term growth by implementing sustainable practices that benefit both the business and the broader community. Our approach is centered around reducing our environmental footprint, increasing efficiency, and ensuring that all our projects create lasting value for our clients.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- About Us 5 - Bootstrap Brain Component -->

<section class="py-5" style="background: linear-gradient(136deg, rgba(5, 70, 107, 0.8) 41%, rgb(92, 225, 230, 0.4) 100%);">
    <div class="container">
        <div class="text-center mb-5 ">
            <h1 class="display-4 fw-bold">Meet the Team</h1>
            <p class="fs-5 text-muted">
                We are a passionate team of individuals dedicated to helping organizations navigate the complex world of healthcare and life sciences.
            </p>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-md-6 col-lg-4 ">
                <div class="card h-100 shadow border-0 text-center bg-white text-dark">
                    <div class="card-body">
                        <img src="assets/img/team/senge.jpg" class="rounded-circle mb-3" width="150" alt="Senge Ajoeh">
                        <h4 class="fw-bold">Senge Ajoeh</h4>
                        <h5 class="primary">Founder & Managing Director</h5>
                        <p class="text-muted">MedTech Assist Ltd</p>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Quality and Regulatory Affairs Management, ISO 13485 Internal Auditor</li>
                            
                        </ul>
                        <button class="button rounded-button w-100 ">More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ">
                <div class="card h-100 shadow border-0 text-center bg-white text-dark">
                    <div class="card-body">
                        <img src="assets/img/team/Frankline.jpg" class="mb-3 rounded-circle" width="150" height="150" style="object-fit: cover;" alt="Nzang Frankline Ajoeh">
                        <h4 class="fw-bold">Nzang Frankline Ajoeh</h4>
                        <h5 class="primary">Co-founder</h5>
                        <p class="text-muted">MedTech Assist Ltd</p>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Expert in Medical Microbiology, Laboratory Quality Management & Life Science Research</li>
                            
                        </ul>
                        <button class="button rounded-button w-100 ">More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-3 py-md-5 py-xl-8 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8">
                <h3 class="fs-5 mb-2 primary font-weight-bold" style="font-weight: 500;">Contact Us</h3>
                <h5 class="mb-4 mb-md-5 mb-xl-8" style="color: #000;">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center text-dark">
            <div class="col-12 col-lg-6">
                <div class="border overflow-hidden">
                    <form action="#!">
                        <div class="row gy-2 gy-xl-3 p-4 p-xl-5">  <div class="col-12">
                                <label for="company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="company_name" name="company_name" value="" required>
                            </div>

                            <div class="col-12">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="position" name="position" value="" required>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" value="" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="service_of_interest" class="form-label">Service of Interest <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm" id="service_of_interest" name="service_of_interest" required>
                                    <option value="">Select a service</option>
                                    <option value="consulting">Consulting</option>
                                    <option value="regulatory_compliance_management">Regulatory Compliance Management</option>
                                    <option value="quality_management_systems">Quality Management Systems</option>
                                    <option value="quality_assurance">Quality Assurance</option>
                                    <option value="training_education">Training & Education</option>
                                    <option value="health_safety">Health & Safety</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div id="other_input_container" style="display:none;">
                                <label for="position" class="form-label">Please specify<span class="text-danger">*</span></label>
                                <input type="text" id="other_service" class="form-control form-control-sm" name="other_service" placeholder="Enter service">
                            </div>


                            <div class="col-12">
                                <label for="feedback" class="form-label">Feedback <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-sm" id="feedback" name="feedback" rows="3" required></textarea>
                            </div>


                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="button rounded-button btn btn-sm" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-12 col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d905.2621069303575!2d9.156243289543728!3d4.019006503990229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10614aaa4805faaf%3A0xae7f25a896924e2f!2sLimbe!5e0!3m2!1sen!2scm!4v1739145131224!5m2!1sen!2scm" width="900" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


<?php include 'include/footer.php'; ?>
    <script>
        document.getElementById('service_of_interest').addEventListener('change', function() {
    var otherOption = document.getElementById('service_of_interest').value;
    var otherInputContainer = document.getElementById('other_input_container');

    if (otherOption === 'other') {
        otherInputContainer.style.display = 'block'; // Show the input field
    } else {
        otherInputContainer.style.display = 'none'; // Hide the input field
    }
});

    </script>
        <script>
            AOS.init();
        </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>