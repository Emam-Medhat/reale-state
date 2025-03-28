document.addEventListener('DOMContentLoaded', function() {
    const detailsButtons = document.querySelectorAll('.details-btn');
    const contactButtons = document.querySelectorAll('.contact-btn');

    detailsButtons.forEach(button => {
        button.addEventListener('click', function() {
            const propertyId = this.getAttribute('data-id');
            
        });
    });

    contactButtons.forEach(button => {
        button.addEventListener('click', function() {
            const propertyId = this.getAttribute('data-id');
        });
    });
});


document.getElementById('myButton').addEventListener('click', function() {
    window.location.href = 'vi.html';
});

document.getElementById('my7').addEventListener('click', function() {
    window.location.href = 's7.html';
});

document.getElementById('my8').addEventListener('click', function() {
    window.location.href = 's8.html';
});

document.getElementById('my9').addEventListener('click', function() {
    window.location.href = 's9.html';
});

document.getElementById('my10').addEventListener('click', function() {
    window.location.href = 's10.html';
});

document.getElementById('my11').addEventListener('click', function() {
    window.location.href = 's11.html';
});

document.getElementById('my12').addEventListener('click', function() {
    window.location.href = 's12.html';
});


/* Profile */
document.getElementById('p7').addEventListener('click', function() {
    window.location.href = 'p7.html';
});

document.getElementById('p8').addEventListener('click', function() {
    window.location.href = 'p8.html';
});

document.getElementById('p9').addEventListener('click', function() {
    window.location.href = 'p9.html';
});

document.getElementById('p10').addEventListener('click', function() {
    window.location.href = 'p10.html';
});

document.getElementById('p11').addEventListener('click', function() {
    window.location.href = 'p11.html';
});

document.getElementById('p12').addEventListener('click', function() {
    window.location.href = 'p12.html';
});
