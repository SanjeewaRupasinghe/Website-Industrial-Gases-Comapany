/* ================================================================= */
/* header Section js +++++++++++++++++++++++++++++++++++++++++++++++ */
/* ================================================================= */
const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
})

document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 200) {
        header.style.backgroundColor = '#141414';
    }
    else {
        header.style.backgroundColor = 'transparent';

    }
})

menu_item.forEach((item) => {
    item.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
    })
})



/* ================================================================= */
/* Contact Section js ++++++++++++++++++++++++++++++++++++++++++++++ */
/* ================================================================= */
// phone
function PhoneMouseOver() {
    document.getElementById('phoneIcon').src = "Images/Icon/phone2.png";
}
function PhoneMouseOut() {
    document.getElementById('phoneIcon').src = "Images/Icon/phone1.png";
}

// fax
function FaxMouseOver() {
    document.getElementById('FaxIcon').src = "Images/Icon/Fax2.png";
}
function FaxMouseOut() {
    document.getElementById('FaxIcon').src = "Images/Icon/Fax1.png";
}

// address
function AddMouseOver() {
    document.getElementById('AddIcon').src = "Images/Icon/Address2.png";
}
function AddMouseOut() {
    document.getElementById('AddIcon').src = "Images/Icon/Address1.png";
}

// suggection
function SugMouseOver() {
    document.getElementById('sugIcon').src = "Images/Icon/suggection2.png";
}
function SugMouseOut() {
    document.getElementById('sugIcon').src = "Images/Icon/suggection.png";
}

/* ================================================================= */
/* footer Section js +++++++++++++++++++++++++++++++++++++++++++++++ */
/* ================================================================= */
// whatsapp
function WhatsMouseOver() {
    document.getElementById('socialWhats').src = "Images/Icon/whats2.png";
}
function WhatsMouseOut() {
    document.getElementById('socialWhats').src = "Images/Icon/whats1.png";
}

// facebook
function FbMouseOver() {
    document.getElementById('socialFb').src = "Images/Icon/fb2.png";
}
function FbMouseOut() {
    document.getElementById('socialFb').src = "Images/Icon/fb1.png";
}

// linked in
function LnkMouseOver() {
    document.getElementById('socialLnk').src = "Images/Icon/lnk2.png";
}
function LnkMouseOut() {
    document.getElementById('socialLnk').src = "Images/Icon/lnk1.png";
}

// Twitter
function TwtrMouseOver() {
    document.getElementById('socialTwtr').src = "Images/Icon/twtr2.png";
}
function TwtrMouseOut() {
    document.getElementById('socialTwtr').src = "Images/Icon/twtr1.png";
}


