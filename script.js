document.addEventListener("DOMContentLoaded", function () {
    const blogImage = document.querySelector(".blog-img");

    // Lazy load the image
    blogImage.setAttribute("loading", "lazy");

    // Smooth scrolling for references
    document.querySelectorAll('.blog-reference a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 20,
                    behavior: 'smooth'
                });
            }
        });
    });
});
