<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperInfo NET IT Solutions pvt.ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
 :root {
    --primary: #9b55f4;
    --secondary: #ADCBD7;
    --ternury: #6998AB;
    --fourth: #406882;
    --fifth: #1b374d;
    --sixth: linear-gradient(#ADCBD7, #6998AB);
    --services: linear-gradient(#406882, #ADCBD7);
}

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}
a {
    text-decoration: none;
    color: #000000;
    line-height: 35px;
}
p,
td,
label {
    font-family: raleway;
    font-size: 16px;
    font-weight: 400;
    line-height: 21px;
    opacity: .8;
}

h1 {
    font-size: 56px;
    font-weight: 500;
    font-family: ubuntu;
}

.contact {
    min-height: 400px;
    display: flex;
    justify-content: center;
    padding: 100px;
}

.min-contact {
    min-height: 450px;
    width: 90%;
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    box-shadow: 1px 1px 10px silver;
}

.left-contact {
    min-height: 450px;
    width: 35%;
    background-color: var(--secondary);
    border-radius: 8px 0px 0px 8px;
    position: relative;
}

.left-contact h1 {
    position: absolute;
    top: 12%;
    left: 19%;
}

.contact-text {
    position: absolute;
    left: 20%;
    top: 48%;
    display: flex;
    flex-direction: column;
    padding-left: 6px;
    z-index: 5;
}

.contact-text a i {
    font-size: 18px;
    margin-left: 5px;
    color: var(--primary);
    margin-right: 11px;
}

.contact-txt-circle {
    height: 120px;
    width: 120px;
    position: absolute;
    top: 6%;
    left: 10%;
    border-radius: 50%;
    background-color: #edf4ff;
    overflow: hidden;
    transition: all ease 0.5s;
}

.contact-txt-circle::after {
    content: " ";
    position: absolute;
    height: 0%;
    width: 100%;
    background-color: #edf4ff;
    border-radius: 50%;
    transition-delay: 0.5s;
    transition: all ease 1.5s;
}

.min-contact:hover .contact-txt-circle::after {
    bottom: 0%;
    height: 100%;
    background-color: var(--primary);
}

.contect-icon {
    height: 100%;
    width: 15%;
    position: absolute;
    left: 0%;
    border-radius: 8px;
    background-color: #edf4ff;
    transition: all ease 0.5s;
    z-index: -1;
}

.contect-icon::after {
    content: " ";
    position: absolute;
    height: 0%;
    width: 100%;
    background-color: #edf4ff;
    border-radius: 8px;
    transition-delay: 0.5s;
    transition: all ease .5s;
}

.min-contact:hover .contect-icon::after {
    bottom: 0%;
    height: 100%;
    background-color: var(--fifth);
}

.contect-icon1 {
    height: 68%;
    width: 5px;
    position: absolute;
    left: 23%;
    top: 32.2%;
    border-radius: 8px;
    background-color: #edf4ff;
    transition: all ease 0.5s;
    z-index: 1;
}

.contect-icon1::after {
    content: " ";
    position: absolute;
    height: 0%;
    width: 100%;
    background-color: #edf4ff;
    border-radius: 8px;
    transition: all ease .8s;
}

.min-contact:hover .contect-icon1::after {
    bottom: 0%;
    height: 100%;
    background-color: var(--fifth);
}

.right-contact {
    min-height: 450px;
    width: 65%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.inp-contact {
    height: 50px;
    width: 49%;
    border-radius: 8px;
    background-color: var(--secondary);
}

.inp-contact1 {
    height: 50px;
    width: 85%;
    border-radius: 8px;
    background-color: var(--secondary);
}

.inp-contact2 {
    height: 120px;
    width: 85%;
    border-radius: 8px;
    background-color: var(--secondary);
}

.outer-input {
    height: 50px;
    width: 85%;
    display: flex;
    justify-content: space-between;
}

input,
textarea {
    border-style: none;
    padding-left: 10px;
    font-size: 16px;
}

.forget-pas {
    color: var(--fifth);
    font-size: 17px;
}

.read-btn4 {
    height: 45px;
    width: 30%;
    border-radius: 8px;
    background-color: var(--fifth);
    display: flex;
    letter-spacing: 1.5px;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    color: #fff;
}
        </style>
</head>

<body>
    <!-- contact section start -->
    <div class="contact">
        <div class="min-contact">
            <div class="left-contact">
                <div class="contact-txt-circle">
                </div>
                <h1>Contact Us</h1>
                <div class="contact-text">
                    <div class="contect-icon"></div>

                    <a href="tel:+123-456-7890" class="read-secondary"><i class="fa-solid fa-phone"></i> +123-456-7890</a>
                    <a href="mailto:helloclient@gmail.com" class="read-secondary"><i class="fa-solid fa-envelope"></i> helloclient@gmail.com</a>
                    <a href="" class="read-secondary"><i class="fa-solid fa-location-dot"></i> 123,Kushmaha,Ayodhya UP</a>
                    <a href="" class="read-secondary"><i class="fa-brands fa-google-plus-g"></i> www.techsima.com</a>
                </div>
                <div class="contect-icon1"></div>
            </div>
            <form action="newcontact.php" class="right-contact" method="post">
                <h2>GET IN TOUCH WITH US</h2>
                <div class="outer-input">
                    <input type="text" class="inp-contact" placeholder="Enter Your Name" name="name">
                    <input type="number" class="inp-contact" placeholder="Enter Your Mobile Number" name="phone">
                </div>
                <input type="text" class="inp-contact1" placeholder="Enter Your Valid E-mail"  name="email">
                <textarea class="inp-contact2" placeholder="Enter Your Massage" name="massege"></textarea>
                <input type="submit" class="read-btn4">
            </form>
        </div>
    </div>
    <!-- contact section end -->
</body>

</html>