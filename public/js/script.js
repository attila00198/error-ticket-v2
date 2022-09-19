var meuItems = document.querySelectorAll(".nav-link")
meuItems.forEach(item => {
    console.log(item.classList)
    if (item.href == window.location.href) {
        console.log(item.href)
        item.className = "nav-link active"
    }
});