// Xử lí Introduction
document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById('intro_next');
    button && (button.onclick = function() {
        let lists = document.querySelectorAll('.intro_item');
        let firstListItem = lists[0];
        // Kiểm tra firstListItem có tồn tại hay không
        if (firstListItem) {
            document.getElementById('intro_slide').appendChild(firstListItem);
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById('intro_prev');
    button && (button.onclick = function() {
        let lists = document.querySelectorAll('.intro_item');
        let firstListItem = lists[lists.length - 1];
        // Kiểm tra firstListItem có tồn tại hay không
        if (firstListItem) {
            document.getElementById('intro_slide').prepend(firstListItem);
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    hamburger = document.querySelector('.hamburger');
    hamburger.onclick = function() {
        navBar = document.querySelector('.navbar');
        navBar.classList.toggle('active');
    }
})


// Đây là lớp Destinations
