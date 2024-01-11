const elements = document.querySelectorAll(".items .sidebar");

elements.forEach(function (element) {
    element.addEventListener('click', function () {
        const subitem = element.querySelector('.subitem');
        if (subitem) {
            subitem.classList.toggle('subitem-open');

            if (subitem.classList.contains('subitem-open')) {
                subitem.style.maxHeight = subitem.scrollHeight + "px";
            } else {
                subitem.style.maxHeight = null;
            }
        }
    });
});