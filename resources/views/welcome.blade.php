@extends('layout.master')
@section('content')
<div class="container">
    <div class="mt-5 pt-4">
        <img width="100%" height="100%" style="border-radius: 50%; width: 96px;" src="/images/foto_cv.jpeg"
            alt="image-profile">
    </div>
    <div class="mt-4 mb-5">
        <h1 class="fw-bold" style="font-size: 32px;">Hi, I'm Hafizh!</h1>
        <p style="font-weight: 400; font-size: 16px;">Experienced Software Engineer with a demonstrated history of
            working in the tech industry. Skilled in fixing bugs and creating new features with my imagination.
            As a Software Engineer, being creative, working fast, and precisely on tasks are three essential things that
            I am good at. I also pay attention to details, love to learn something new, and can work in a group or
            individually. Family, friends, and colleagues know me as a mix of phlegmatic and sanguine, with a
            predominance on the phlegmatic side.
            I love writing and reading as much as I love cats.
        </p>
    </div>
</div>
<div class="my-5 mx-3 py-5">
    <h2 class="fw-bold mb-3" style="font-size: 20px;">Tech Stacks</h2>
    <div class="row align-items-center p-5" style="border-radius: 14px; background-color: white;">
        <div class="ccol-lg-3 col-sm-3 col-6 text-centerr">
            <img width="100%" height="100%" src="/images/logo_php.png" class="img-fluid" alt="tech-stack-image-1">
        </div>
        <div class="col-lg-3 col-sm-3 col-6 text-center">
            <img width="100%" height="100%" src="/images/logo_laravel.png" class="img-fluid" alt="tech-stack-image-1">
        </div>
        <div class="col-lg-3 col-sm-3 col-6 text-center">
            <img width="100%" height="100%" src="/images/logo_graphql.png" class="img-fluid" alt="tech-stack-image-1">
        </div>
        <div class="col-lg-3 col-sm-3 col-6 text-center">
            <img width="100%" height="100%" src="/images/logo_mysql.jpeg" class="img-fluid" alt="tech-stack-image-1">
        </div>
    </div>
</div>

<div class="my-5 mx-3">
    <div class="row">
        <h2 class="fw-bold mb-3" style="font-size: 20px;">Experiences</h2>
        <div class="row g-0 align-items-center p-4 mb-3" style="background-color: white; border-radius: 14px;">
            <div class="col-md-3 text-center px-4 py-4 remove-padding-bottom">
                <img width="100%" height="100%" src="/images/logo_perusahaan_1.jpeg"
                    class="img-fluid rounded-start img-160" alt="image-company-1">
            </div>
            <div class="col-md-9 py-4">
                <h3 style="font-size:20px;" class="card-title fw-bold">Associate Software Engineer</h3>
                <p class="card-text"><small class="text-muted">Icube By Sirclo · Full-time</small></p>
                <p class="card-text">
                    - Solve bugs and create new features on Swift Web App. </br>
                    - Mentoring Software Engineers. </br>
                    - Support the PWA team with GraphQl. </br>
                </p>
                <p class="card-text"><small class="text-muted">Mar 2021 - Nov 2022 · 1 yr 9 mos (Yogyakarta,
                        Indonesia)</small></p>
            </div>
        </div>
        <div class="row g-0 align-items-center p-4 mb-3" style="background-color: white; border-radius: 14px;">
            <div class="col-md-3 text-center px-4 py-4 remove-padding-bottom">
                <img width="100%" height="100%" src="/images/logo_perusahaan_2.webp"
                    class="img-fluid rounded-start img-160" alt="image-company-2">
            </div>
            <div class="col-md-9 py-4">
                <h3 style="font-size:20px;" class="card-title fw-bold">Web Developer</h3>
                <p class="card-text"><small class="text-muted">Hukumonline.com · Internship</small></p>
                <p class="card-text">
                    - Create a Cipta Kerja website and several other minisites. </br>
                    - The website is created by integrating the REST API and Google Spreadsheet as a CMS. </br>
                </p>
                <p class="card-text"><small class="text-muted">Nov 2020 - Feb 2021 · 4 mos (Jakarta Selatan,
                        Jakarta, Indonesia)</small></p>
            </div>
        </div>
        <div class="row g-0 align-items-center p-4 mb-3" style="background-color: white; border-radius: 14px;">
            <div class="col-md-3 text-center px-4 py-4 remove-padding-bottom">
                <img width="100%" height="100%" src="/images/logo_perusahaan_3.jpeg"
                    class="img-fluid rounded-start img-160" alt="image-company-3">
            </div>
            <div class="col-md-9 py-4">
                <h3 style="font-size:20px;" class="card-title fw-bold">Web Developer</h3>
                <p class="card-text"><small class="text-muted">Solusi Softaware · Contract</small></p>
                <p class="card-text">
                    - Create websites for clients from brainstorming to deployment. </br>
                </p>
                <p class="card-text"><small class="text-muted">Aug 2020 - Nov 2020 · 4 mos (Yogyakarta,
                        Indonesia)</small></p>
            </div>
        </div>
        <div class="row g-0 align-items-center p-4 mb-3" style="background-color: white; border-radius: 14px;">
            <div class="col-md-3 text-center px-4 py-4 remove-padding-bottom">
                <img width="100%" height="100%" src="/images/logo_perusahaan_4.png"
                    class="img-fluid rounded-start img-160" alt="image-company-4">
            </div>
            <div class="col-md-9 py-4">
                <h3 style="font-size:20px;" class="card-title fw-bold">Web Developer</h3>
                <p class="card-text"><small class="text-muted">PT. Ruang Halal Indonesia · Internship</small>
                </p>
                <p class="card-text">
                    - Develop website from our client that is Polres Batang. </br>
                    - Develop ongkir with API RajaOngkir in Laravel for Ruang Halal website. </br>
                </p>
                <p class="card-text"><small class="text-muted">Apr 2020 - Jul 2020 · 4 mos (Yogyakarta,
                        Indonesia)</small></p>
            </div>
        </div>
    </div>
</div>

<div class="my-5 py-5">
    <h2 class="fw-bold mb-3" style="font-size: 20px;">Projects</h2>
    <div class="list-group w-auto" style="border-radius: 14px;">
        <a href="https://b2cdemo.getswift.asia/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_1.jpeg" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">SWIFT Apps Platform</h3>
                        <p class="mb-0 opacity-75">The ecommerce and omnichannel solution within your grasp.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://pwa.getswift.asia/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_1.jpeg" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">SWIFT Omnichannel Platform</h3>
                        <p class="mb-0 opacity-75">A complete end-to-end omnichannel solution that allows you to sell
                            everywhere and ship from everywhere.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="/projects/openai" target="_blank" class="list-group-item list-group-item-action d-flex gap-3 p-5"
            aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_openai.png" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">OpenAI Ask Me Anything</h3>
                        <p class="mb-0 opacity-75">"OpenAI Ask Me Anything" is a project to build a Q&A system using NLP
                            and large language models. It aims to answer any question accurately and meaningfully.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://pkpa.hukumonline.com/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_2.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">Hukumonline Pendidikan Khusus Profesi Advokat
                        </h3>
                        <p class="mb-0 opacity-75">In collaboration with the Indonesian Advocates Association (Peradi)
                            and the Yarsi University Faculty of Law, Hukumonline organizes PKPA both face-to-face and
                            with the online system without reducing the quality and quality of the teaching and learning
                            process.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://exdoma.hukumonline.com/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_2.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">Hukumonline Excellent Document Management</h3>
                        <p class="mb-0 opacity-75">A Comprehensive Platform to Enhance Your Workflow. With many years of
                            experience as the most trusted source for Indonesian legal documents, we thrive on helping
                            you to simplify and manage your documents.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="http://rcs.hukumonline.com/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_2.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">Hukumonline Regulatory Compliance System</h3>
                        <p class="mb-0 opacity-75">The Regulatory Compliance System is present as a pioneer for legal
                            compliance monitoring solutions in Indonesia that provide convenience for companies in
                            various industries.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://covid19.hukumonline.com/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_2.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">Hukumonline Covid-19</h3>
                        <p class="mb-0 opacity-75">The covid19.hukumonline.com site is a form of Hukumonline's concern.
                            to the public and the legal community by presenting relevant legal information. making it
                            easier for anyone who needs legal information related to COVID-19. Legal references for
                            COVID-19 only at Hukumonline.com!</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://lawfest.hukumonline.com/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_perusahaan_2.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">Hukumonline Law Festival</h3>
                        <p class="mb-0 opacity-75">This event is set to attract thousands of participants drawn from a
                            wide range of backgrounds who are ready to collaborate, including start-ups/SME players,
                            incubators, accelerators, venture-capital companies, social-enterprise players,
                            social-enterprise communities, CSOs and grant agencies. These participants will be able to
                            connect with reputable legal practitioners and will be exposed to valuable knowledge and
                            understanding regarding legal issues and compliance.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://bmtfajar.co.id/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_bmt.webp" alt="twbs" width="100%" class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">BMT Fajar</h3>
                        <p class="mb-0 opacity-75">BMT Fajar was started in 1996 by several people who were originally
                            part of the Bina Sejahtera Foundation. The reasons underlying the emergence of awareness
                            among the Foundation's management of two main facts are: First, in their work to assist
                            productive economic activities of the middle and lower class people, it is common to find
                            small/micro business actors experiencing limited access to banking capital. As a result,
                            they are trapped in loan shark practices.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://lpka.umy.ac.id/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_lpka.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">LPKA (Lembaga Pengembangan Kemahasiswaan dan
                            Alumni) UMY</h3>
                        <p class="mb-0 opacity-75">LPKA (Institute for Student and Alumni Development) UMY is a
                            supporting unit formed to develop student activities that are capable of supporting the
                            realization of Muslim scholars who are noble, capable, confident, able to develop science
                            and technology and are useful for the people, nation and humanity.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://labip.umy.ac.id/" target="_blank"
            class="list-group-item list-group-item-action d-flex gap-3 p-5" aria-current="true">
            <div class="row align-items-center">
                <div class="col-sm-2 py-2">
                    <img width="100%" height="100%" src="/images/logo_labip.webp" alt="twbs" width="100%"
                        class="img-120">
                </div>
                <div class="col-sm-10 py-2">
                    <div>
                        <h3 style="font-size:16px;" class="mb-0 fw-bold">Laboratorium Ilmu Pemerintahan UMY</h3>
                        <p class="mb-0 opacity-75">The UMY Government Science Lab is part of the Yogyakarta Muhammadiyah
                            University Government Science Study Program. The UMY Government Science Lab has the main
                            function as a facilitator and organizer of practicum activities for Government Science study
                            program courses.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection