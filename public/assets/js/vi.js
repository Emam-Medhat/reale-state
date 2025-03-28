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
    window.location.href = 'vi1.html';
});

document.getElementById('my1').addEventListener('click', function() {
    window.location.href = 's1.html';
});

document.getElementById('my2').addEventListener('click', function() {
    window.location.href = 's2.html';
});

document.getElementById('my3').addEventListener('click', function() {
    window.location.href = 's3.html';
});

document.getElementById('my4').addEventListener('click', function() {
    window.location.href = 's4.html';
});

document.getElementById('my5').addEventListener('click', function() {
    window.location.href = 's5.html';
});

document.getElementById('my6').addEventListener('click', function() {
    window.location.href = 's6.html';
});


/* Profile */
document.getElementById('p1').addEventListener('click', function() {
    window.location.href = 'p1.html';
});

document.getElementById('p2').addEventListener('click', function() {
    window.location.href = 'p2.html';
});

document.getElementById('p3').addEventListener('click', function() {
    window.location.href = 'p3.html';
});

document.getElementById('p4').addEventListener('click', function() {
    window.location.href = 'p4.html';
});

document.getElementById('p5').addEventListener('click', function() {
    window.location.href = 'p5.html';
});

document.getElementById('p6').addEventListener('click', function() {
    window.location.href = 'p6.html';
});
