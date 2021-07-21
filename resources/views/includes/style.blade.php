<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
<!-- Style Header -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .btn-fill-1-2 {
        background-color: #ffdda9;
        color: #372642;
    }

    .btn-fill-1-2:hover {
        background-color: #fcd396;
        color: #372642;
    }

    nav a.nav-1-2 {
        color: #ffffff;
    }

    nav a.nav-1-2:hover {
        color: #ffdda9;
        font-weight: 500;
    }

    nav a.nav-1-2.active {
        color: #ffdda9;
    }

    #menu-toggle-1-2:checked+#menu-1-2,
    #menu-toggle-1-2:checked+#menu-1-2+#menu-1-2 {
        display: block;
    }
</style>

<!-- Style Footer -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .list-footer-2-3 li a {
        color: #707092;
    }

    .list-footer-2-3 li a:hover {
        color: #ffffff;
        cursor: pointer;
    }

    .border-color-footer-2-3 {
        color: #707092;
    }

    .footer-link-footer-2-3:hover {
        color: #ffffff;
        cursor: pointer;
    }

    .social-media-c-footer-2-3:hover circle,

    .social-media-p-footer-2-3:hover path {
        fill: #ffffff;
        cursor: pointer;
    }
</style>

<!-- Style Login -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .content-3-5 .btn:focus,
    .content-3-5 .btn:active {
        outline: none !important;
    }

    .content-3-5 .width-left {
        width: 0%;
    }

    .content-3-5 .width-right {
        width: 100%;
        height: 100%;
        padding: 8rem 2rem;
        background-color: #fcfdff;
    }

    .content-3-5 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .content-3-5 .right {
        width: 100%;
    }

    .content-3-5 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 0.75rem;
    }

    .content-3-5 .caption-text {
        font: 400 0.875rem/1.75rem Poppins, sans-serif;
        color: #a8adb7;
    }

    .content-3-5 .input-label {
        font: 500 1.125rem/1.75rem Poppins, sans-serif;
        color: #39465b;
    }

    .content-3-5 .div-input {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.25rem;
        margin-top: 0.75rem;
        border-radius: 0.75rem;
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
    }

    .content-3-5 .div-input:focus-within {
        border: 1px solid #2ec49c;
        color: #2a3240;
        transition: 0.3s;
    }

    .content-3-5 .div-input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
    }

    .content-3-5 .div-input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
    }

    .content-3-5 .div-input .icon-toggle-empty-3-5 path,
    .content-3-5 .div-input:focus-within .icon path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
    }

    .content-3-5 .input-field {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        width: 100%;
        background-color: #fcfdff;
        transition: 0.3s;
    }

    .content-3-5 .input-field:focus {
        outline: none;
        transition: 0.3s;
    }

    .content-3-5 .forgot-password {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #cacbce;
        transition: 0.3s;
        text-decoration: none;
    }

    .content-3-5 .forgot-password:hover {
        color: #2a3240;
    }

    .content-3-5 .btn-fill {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        background-image: linear-gradient(rgba(91, 203, 173, 1),
                rgba(39, 194, 153, 1));
        padding: 0.75rem 1rem;
        margin-top: 2.25rem;
        border-radius: 0.75rem;
        transition: 0.5s;
    }

    .content-3-5 .btn-fill:hover {
        background-image: linear-gradient(#2ec49c, #2ec49c);
        transition: 0.5s;
    }

    .content-3-5 .bottom-caption {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        margin-top: 2rem;
        color: #2a3240;
    }

    .content-3-5 .green-bottom-caption {
        color: #2ec49c;
        font-weight: 500;
    }

    .content-3-5 .green-bottom-caption:hover {
        color: #2ec49c;
        cursor: pointer;
        text-decoration: underline;
    }

    @media (min-width: 576px) {
        .content-3-5 .width-right {
            padding: 8rem 4rem;
        }

        .content-3-5 .right {
            width: 58.333333%;
        }
    }

    @media (min-width: 768px) {
        .content-3-5 .right {
            width: 66.666667%;
        }
    }

    @media (min-width: 992px) {
        .content-3-5 .width-left {
            width: 48%;
        }

        .content-3-5 .width-right {
            width: 52%;
        }

        .content-3-5 .right {
            width: 75%;
        }
    }

    @media (min-width: 1200px) {
        .content-3-5 .right {
            width: 58.333333%;
        }
    }
</style>

<!-- Style Contact -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .content-3-1 .circle {
        background-color: #ffbf56;
    }

    .content-3-1 .caption {
        color: #565656;
    }

    .content-3-1 .btn-fill {
        background-color: #ff7c57;
        transition: 0.3s;
    }

    .content-3-1 .btn-fill:hover {
        background-color: #ff9779;
        transition: 0.3s;
    }

    .content-3-1 .text-medium-black {
        color: #121212;
    }
</style>