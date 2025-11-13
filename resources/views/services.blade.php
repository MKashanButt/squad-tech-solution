@php
    $pageTitle = "Services";
    $pageDescription = "";
    $pageKeywords = "";
@endphp
<x-app-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageKeywords="$pageKeywords">
    <video autoplay loop="true" muted="true" preload="none" width="100%" style="margin-top: 100px;">
        <source src="{{ asset('images/Squad tech video.MP4') }}" type="video/mp4">
    </video>
    <hr class="border-hr mbot-40" />
    <div class="banner-flex services" data-aos="fade-up" data-aos-duration="1000">
        <div class="image">
            <img src="{{ asset('images/design.webp') }}" alt="" />
        </div>
        <div class="content">
            <h3 class="font-30 mbot-10">Design</h3>
            <p>
                From UI and UX Designing to Wireframing and Logo Designing, we create visually stunning interfaces that
                elevate
                user experiences. Our meticulous attention to detail and deep understanding of user behavior ensures
                designs that
                captivate and leave a lasting impact. Partner with Squad Tech to unlock your brand's true potential
                through our
                exceptional design services.
            </p>
            <a href="{{ route('contact-us') }}"><button class="learn-btn mtop-20">Get In Touch</button></a>
        </div>
    </div>
    <div class="banner-flex">
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/ui-icon.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">UI Design</h3>
                <p>
                    Our team of UI Designing experts brings your ideas to life, creating intuitive user interfaces that
                    enhance
                    the user experience.
                </p>
            </div>
        </div>
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/ux-icon (2).webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">UX Design</h3>
                <p>
                    At Squad Tech, we prioritize delivering exceptional user experiences that go beyond aesthetics. Our
                    UX
                    Designing services focus on understanding your target audience, their behavior, and needs.
                </p>
            </div>
        </div>
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/wireframe-icon.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Wireframing</h3>
                <p>
                    Our skilled team excels in creating detailed wireframes that define the layout, structure, and
                    content
                    hierarchy of your website or application. By visualizing the user journey early on, we ensure a
                    solid
                    blueprint for development.
                </p>
            </div>
        </div>
    </div>
    <div class="banner-flex services" data-aos="fade-up" data-aos-duration="1000">
        <div class="content">
            <h3 class="font-30 mbot-10">Development</h3>
            <p>
                Our team of highly skilled developers excels at crafting immersive and intuitive websites customized to
                suit your
                unique business requirements. With a focus on responsive designs and seamless functionality, we
                guarantee a
                superior user experience across all devices. Collaborate with us to unleash your digital potential and
                achieve
                unparalleled online success through our professional web development expertise.
            </p>
            <a href="{{ route('contact-us') }}"><button class="learn-btn mtop-20">Get In Touch</button></a>
        </div>
        <div class="image">
            <img src="{{ asset('images/development.webp') }}" alt="" />
        </div>
    </div>
    <div class="banner-flex">
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/coding-icon.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Web Design</h3>
                <p>
                    Our team of skilled designers combines aesthetics with functionality to create captivating online
                    experiences. From seamless navigation to captivating graphics, we craft websites that leave a
                    lasting
                    impression on your audience.
                </p>
            </div>
        </div>
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/ecommerce.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Ecommerce Solution</h3>
                <p>
                    Unlock the potential of your online store with our comprehensive ecommerce solutions. We specialize
                    in
                    creating robust and scalable ecommerce platforms that empower your business to thrive in the digital
                    marketplace.
                </p>
            </div>
        </div>
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/optimization-icon.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Web Optimization & SEO</h3>
                <p>
                    Maximize your online visibility and reach with our web optimization and SEO services. Our experts
                    employ
                    proven strategies to enhance your website's performance, improve search engine rankings, and drive
                    organic
                    traffic.
                </p>
            </div>
        </div>
        </a>
    </div>
    <div class="banner-flex services" data-aos="fade-up" data-aos-duration="1000">
        <div class="image">
            <img src="{{ asset('images/branding.webp') }}" alt="" />
        </div>
        <div class="content">
            <h3 class="font-30 mbot-10">Branding</h3>
            <p>
                We provides comprehensive Branding Solutions that elevate your brand's presence and captivate your
                target
                audience. Partner with Squad Tech for Branding Solutions that will set your brand apart in the digital
                landscape.
                From Digital Marketing strategies to captivating content and a cohesive Brand Identity, we will help
                your brand
                shine and leave a lasting impression on your audience.
            </p>
            <a href="{{ route('contact-us') }}"><button class="learn-btn mtop-20">Get In Touch</button></a>
        </div>
    </div>
    <div class="banner-flex">
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/marketing-icon.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Digital Marketing</h3>
                <p>
                    Our Digital Marketing solutions help you reach and engage your target audience effectively. From
                    strategic
                    planning to execution, we leverage the power of digital channels to boost your brand's visibility
                    and drive
                    conversions.
                </p>
            </div>
        </div>
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/logo-design.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Logo Design</h3>
                <p>
                    Make a lasting impression with a unique and memorable brand identity. Our Logo Designing services
                    are
                    dedicated to creating logos that truly represent your brand essence.
                </p>
            </div>
        </div>
        <div class="tabs">
            <div class="icon">
                <img src="{{ asset('images/branding-icon.webp') }}" alt="" />
            </div>
            <div class="text" style="text-align: left">
                <h3 class="mbot-10">Brand Identity</h3>
                <p>
                    Establishing a strong and cohesive Brand Identity is crucial for brand recognition and
                    differentiation. Our
                    experts work closely with you to develop a distinct brand identity that captures your brand essence
                    and
                    resonates with your target audience.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>